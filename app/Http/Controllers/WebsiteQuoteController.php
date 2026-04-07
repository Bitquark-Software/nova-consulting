<?php

namespace App\Http\Controllers;

use App\Mail\NewUserQuotationMail;
use App\Mail\WebsiteQuoteMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class WebsiteQuoteController extends Controller
{
    public function show()
    {
        return view('website-quote');
    }

    public function store(Request $request)
    {
        $createNova = $request->boolean('create_nova');

        $emailRules = array_merge(
            ['required', 'email', 'max:255'],
            $createNova ? [Rule::unique('users', 'email')] : []
        );

        $validated = $request->validate([
            'quote_type' => ['required', Rule::in(['landing', 'corporate', 'custom'])],
            'name' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'email' => $emailRules,
            'phone' => 'nullable|string|max:40',
            'create_nova' => 'boolean',
            'agree_contact' => 'accepted',

            'landing' => 'required_if:quote_type,landing|array',
            'landing.domain_hosting' => 'nullable|boolean',
            'landing.social_links' => 'nullable|boolean',
            'landing.contact_form' => 'nullable|boolean',
            'landing.analytics' => 'nullable|boolean',
            'landing.clarity' => 'nullable|boolean',

            'corporate' => 'required_if:quote_type,corporate|array',
            'corporate.domain_hosting' => 'nullable|boolean',
            'corporate.screen_tier' => 'required_if:quote_type,corporate|in:4,5_7',
            'corporate.analytics' => 'nullable|boolean',
            'corporate.clarity' => 'nullable|boolean',

            'custom' => 'required_if:quote_type,custom|array',
            'custom.problem' => 'required_if:quote_type,custom|string|max:5000',
            'custom.users' => 'required_if:quote_type,custom|string|max:2000',
            'custom.integrations' => 'nullable|string|max:5000',
            'custom.timeline' => 'nullable|string|max:500',
        ]);

        $validated = $this->normalizeQuotePayload($validated);

        if ($createNova) {
            $password = Str::random(8);
            User::create([
                'name' => Str::title($validated['name']),
                'email' => $validated['email'],
                'password' => bcrypt($password),
                'type' => 'customer',
            ]);

            Mail::to($validated['email'])->send(
                new NewUserQuotationMail(Str::title($validated['name']), $validated['email'], $password)
            );
        }

        $totalMxn = $this->calculateTotal($validated['quote_type'], $validated);

        $recipient = config('mail.website_quote_recipient');

        Mail::to($recipient)
            ->bcc($validated['email'])
            ->send(new WebsiteQuoteMail($validated, $totalMxn));

        return response()->json([
            'message' => __('website_quote.json_ok'),
            'total_mxn' => $totalMxn,
        ]);
    }

    /**
     * @param  array<string, mixed>  $validated
     * @return array<string, mixed>
     */
    private function normalizeQuotePayload(array $validated): array
    {
        if ($validated['quote_type'] === 'landing') {
            $landing = $validated['landing'] ?? [];
            $validated['landing'] = [
                'domain_hosting' => $this->truthy($landing['domain_hosting'] ?? false),
                'social_links' => $this->truthy($landing['social_links'] ?? false),
                'contact_form' => $this->truthy($landing['contact_form'] ?? false),
                'analytics' => $this->truthy($landing['analytics'] ?? false),
                'clarity' => $this->truthy($landing['clarity'] ?? false),
            ];
        }

        if ($validated['quote_type'] === 'corporate') {
            $corporate = $validated['corporate'] ?? [];
            $validated['corporate'] = [
                'domain_hosting' => $this->truthy($corporate['domain_hosting'] ?? false),
                'screen_tier' => $corporate['screen_tier'] ?? '4',
                'analytics' => $this->truthy($corporate['analytics'] ?? false),
                'clarity' => $this->truthy($corporate['clarity'] ?? false),
            ];
        }

        if ($validated['quote_type'] === 'custom') {
            $custom = $validated['custom'] ?? [];
            $validated['custom'] = [
                'problem' => $custom['problem'] ?? '',
                'users' => $custom['users'] ?? '',
                'integrations' => $custom['integrations'] ?? '',
                'timeline' => $custom['timeline'] ?? '',
            ];
        }

        return $validated;
    }

    private function truthy(mixed $value): bool
    {
        return filter_var($value, FILTER_VALIDATE_BOOLEAN);
    }

    /**
     * @param  array<string, mixed>  $validated
     */
    private function calculateTotal(string $quoteType, array $validated): int
    {
        return match ($quoteType) {
            'landing' => $this->landingTotal($validated['landing'] ?? []),
            'corporate' => $this->corporateTotal($validated['corporate'] ?? []),
            'custom' => 19999,
        };
    }

    /**
     * @param  array<string, mixed>  $landing
     */
    private function landingTotal(array $landing): int
    {
        $total = 2999;
        if (! empty($landing['domain_hosting'])) {
            $total += 1999;
        }
        foreach (['social_links', 'contact_form', 'analytics', 'clarity'] as $key) {
            if (! empty($landing[$key])) {
                $total += 199;
            }
        }

        return $total;
    }

    /**
     * @param  array<string, mixed>  $corporate
     */
    private function corporateTotal(array $corporate): int
    {
        $total = 4999;
        if (! empty($corporate['domain_hosting'])) {
            $total += 1999;
        }
        if (($corporate['screen_tier'] ?? '4') === '5_7') {
            $total += 800;
        }
        if (! empty($corporate['analytics'])) {
            $total += 199;
        }
        if (! empty($corporate['clarity'])) {
            $total += 199;
        }

        return $total;
    }
}
