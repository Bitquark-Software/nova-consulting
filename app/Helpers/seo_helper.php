<?php

use App\Services\SeoService;

if (! function_exists('seo')) {
    /**
     * Helper to access SeoService instance quickly
     * Usage: seo()->build(); or seo(['title' => 'Custom'])->render();
     */
    function seo(array $overrides = [])
    {
        $service = new SeoService(app()->getLocale());
        if (! empty($overrides)) {
            return $service->set($overrides);
        }
        return $service;
    }
}

if (! function_exists('seo_meta')) {
    /**
     * Return rendered meta tags string. Optionally pass overrides.
     */
    function seo_meta(array $overrides = [])
    {
        return SeoService::renderMetaTags($overrides);
    }
}
