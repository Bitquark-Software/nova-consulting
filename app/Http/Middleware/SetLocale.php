<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $requestedLocale = 'es'; // Default to Spanish as requested

        // 1. Check Cookie (Now decrypted automatically)
        if ($request->hasCookie('locale')) {
            $requestedLocale = $request->cookie('locale');
        } elseif ($request->has('lang')) {
            $requestedLocale = explode('-', $request->query('lang'))[0];
        } elseif ($header = $request->server('HTTP_ACCEPT_LANGUAGE')) {
            $requestedLocale = substr($header, 0, 2);
        }
        // Final validation: force 'en' or 'es'
        $language = (strtolower($requestedLocale) === 'en') ? 'en' : 'es';

        app()->setLocale($language);

        return $next($request);
    }
}
