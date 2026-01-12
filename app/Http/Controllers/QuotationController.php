<?php

namespace App\Http\Controllers;

use App\Mail\QuotationRequestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;

class QuotationController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validate the Request
        $validated = $request->validate([
            // Step 1: Personal Info
            'name' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'referral' => 'nullable|string',
            
            // Step 2: Service Selection
            'service' => ['required', Rule::in(['web_dev', 'staff_aug', 'recruitment'])],

            // Step 3: Conditional Validation
            
            // Web Dev Rules
            'web.features' => 'required_if:service,web_dev|array',
            'web.requirements' => 'nullable|string',

            // Staff Aug Rules
            'staff.roles' => 'required_if:service,staff_aug|array',

            // Recruitment Rules
            'recruit.stack' => 'required_if:service,recruitment|nullable|string',
            'recruit.location' => 'required_if:service,recruitment|nullable|string',
            'recruit.age' => 'nullable|string',
            'recruit.budget' => 'nullable|numeric',
            'recruit.timezone' => 'nullable|string',
            'recruit.urgency' => 'nullable|string',
            'recruit.hardware' => 'nullable|string',
            'recruit.languages' => 'nullable|array',

            // Step 4: Checkboxes
            'create_nova' => 'boolean',
            'agree_contact' => 'accepted',
        ]);

        // 2. Send the Email
        // Replace 'admin@yourcompany.com' with your actual static email
        Mail::to('idsfernandomorales@gmail.com')
            ->cc($validated['email']) // CC the customer
            ->send(new QuotationRequestMail($validated));

        // 3. Return JSON response for Alpine.js
        return response()->json(['message' => 'Quotation sent successfully!']);
    }
}
