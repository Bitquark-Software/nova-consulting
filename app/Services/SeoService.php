<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;

class SeoService
{
    protected $locale;
    protected $routeName;
    protected $overrides = [];

    public function __construct($locale = null)
    {
        $this->locale = $locale ?? app()->getLocale();
        $this->routeName = request()->route() ? request()->route()->getName() : 'home';
    }

    public function set(array $overrides = [])
    {
        $this->overrides = $overrides;
        return $this;
    }

    protected function cacheKey()
    {
        return 'seo:' . $this->routeName . ':' . $this->locale;
    }

    /**
     * Build the seo array (title, description, keywords, og)
     * Uses localized strings under resources/lang/{locale}/seo.php or messages.php (seo.*)
     */
    public function build()
    {
        // Use cache to minimize work (edge friendly)
        $key = $this->cacheKey();
        return Cache::remember($key, now()->addHours(6), function () {
            // Fallback order: resources/lang/{locale}/seo.php -> messages.php -> default text
            // We'll use __('seo.<key>') if exists, else fall back to messages.welcome etc.

            $title = $this->translate('title') ?: $this->translate('welcome.hero_title_html');
            $description = $this->translate('description') ?: $this->translate('welcome.hero_subtitle');
            $keywords = $this->translate('keywords') ?: $this->generateKeywords($description);

            $og = [
                'title' => strip_tags($title),
                'description' => strip_tags($description),
                'type' => 'website',
                'url' => url()->current(),
                'image' => asset('images/og-default.png'),
            ];

            // Apply overrides
            $data = array_merge([
                'title' => $title,
                'description' => $description,
                'keywords' => $keywords,
                'og' => $og,
                'locale' => $this->locale,
            ], $this->overrides);

            // Micro-SEO: generate structured data for Organization
            $data['jsonld'] = $this->generateOrganizationJsonLd($data);

            return $data;
        });
    }

    protected function translate($key)
    {
        // Try route-specific seo keys first: seo.{route}.{key}
        if ($this->routeName) {
            $candidate = __('seo.' . $this->routeName . '.' . $key);
            if ($candidate && $candidate !== 'seo.' . $this->routeName . '.' . $key) {
                return $candidate;
            }
        }

        // Try seo.php first
        $candidate = __('seo.' . $key);
        if ($candidate && $candidate !== 'seo.' . $key) {
            return $candidate;
        }

        // Try messages.php fallback
        $candidate = __('messages.' . $key);
        if ($candidate && $candidate !== 'messages.' . $key) {
            return $candidate;
        }

        // Try nested welcome keys
        $candidate = __('messages.welcome.' . $key);
        if ($candidate && $candidate !== 'messages.welcome.' . $key) {
            return $candidate;
        }

        return null;
    }

    protected function generateKeywords($text)
    {
        // Very small heuristic to generate keywords from description
        $clean = strtolower(strip_tags($text));
        $clean = preg_replace('/[^a-z0-9\s]/', ' ', $clean);
        $words = array_filter(array_count_values(explode(' ', $clean)));
        arsort($words);
        $keywords = array_slice(array_keys($words), 0, 10);
        return implode(', ', $keywords);
    }

    protected function generateOrganizationJsonLd($data)
    {
        $org = [
            "@context" => "https://schema.org",
            "@type" => "Organization",
            "name" => config('app.name', 'Nova Consulting'),
            "url" => url('/'),
            "logo" => asset('images/Web_inverted.svg'),
            "sameAs" => [
                // social links could be in config or env
            ],
            "description" => strip_tags($data['description'] ?? ''),
        ];

        return json_encode($org, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }

    public static function renderMetaTags($overrides = [])
    {
        $service = new self();
        $data = $service->set($overrides)->build();

        // Minimal, optimized meta tags string
        $out = [];
        // Decode any HTML entities (e.g. &nbsp;) after stripping tags so they render correctly
        $title = strip_tags($data['title']);
        $title = html_entity_decode($title, ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $description = strip_tags($data['description'] ?? '');
        $description = html_entity_decode($description, ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $keywords = html_entity_decode($data['keywords'] ?? '', ENT_QUOTES | ENT_HTML5, 'UTF-8');

        $out[] = "<title>" . e($title) . "</title>";
        $out[] = "<meta name=\"description\" content=\"" . e($description) . "\">";
        $out[] = "<meta name=\"keywords\" content=\"" . e($keywords) . "\">";
        $out[] = "<meta property=\"og:title\" content=\"" . e($data['og']['title']) . "\">";
        $out[] = "<meta property=\"og:description\" content=\"" . e($data['og']['description']) . "\">";
        $out[] = "<meta property=\"og:type\" content=\"" . e($data['og']['type']) . "\">";
        $out[] = "<meta property=\"og:url\" content=\"" . e($data['og']['url']) . "\">";
        $out[] = "<meta property=\"og:image\" content=\"" . e($data['og']['image']) . "\">";
        $out[] = "<link rel=\"canonical\" href=\"" . e($data['og']['url']) . "\">";
        // hreflang links for indexed locales
        $locales = ['en', 'es'];
        foreach ($locales as $loc) {
            $url = url()->current();
            // Optionally, switch host/path based on locale if you use localized domains or prefixes
            $out[] = "<link rel=\"alternate\" href=\"" . e($url) . "\" hreflang=\"" . e($loc) . "\">";
        }
        $out[] = "<link rel=\"alternate\" href=\"" . e(url('/')) . "\" hreflang=\"x-default\">";
        $out[] = "<script type=\"application/ld+json\">" . $data['jsonld'] . "</script>";

        return implode("\n", $out);
    }
}
