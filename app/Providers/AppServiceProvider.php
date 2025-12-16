<?php

namespace App\Providers;

use App\Models\User;
use App\Observers\UserObserver;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        User::observe(UserObserver::class);
        // Determine application locale with the following priority:
        // 1. session 'locale' (user switcher)
        // 2. query param 'lang' (quick link)
        // 3. Accept-Language header
        if (!app()->runningInConsole()) {
            $requestedLocale = null;
            // cookie-based locale (safer because cookies are available before session middleware)
            if (request()->hasCookie('locale')) {
                $requestedLocale = strtolower(request()->cookie('locale'));
            }

            // query param override
            if (!$requestedLocale && request()->has('lang')) {
                $requestedLocale = strtolower(explode('-', request()->query('lang'))[0] ?? null);
            }

            // fallback to Accept-Language header
            if (!$requestedLocale && request()->hasHeader('Accept-Language')) {
                $accept = request()->header('Accept-Language');
                $first = explode(',', $accept)[0] ?? '';
                $requestedLocale = strtolower(explode('-', $first)[0] ?? null);
            }

            if ($requestedLocale === 'es') {
                app()->setLocale('es');
            } else {
                app()->setLocale('en');
            }
        }

        // Load global helper functions (e.g. seo helper)
        $helpers = app_path('Helpers/seo_helper.php');
        if (file_exists($helpers)) {
            require_once $helpers;
        }
    }
}
