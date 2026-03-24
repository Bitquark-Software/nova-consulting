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
        $this->routeName = request()->route() ? (request()->route()->getName() ?? 'home') : 'home';
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
            $canonicalUrl = request()->url();

            $og = [
                'title' => strip_tags($title),
                'description' => strip_tags($description),
                'type' => 'website',
                'url' => $canonicalUrl,
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

            // Structured data graph helps Google understand brand and sitelinks candidates.
            $data['jsonld'] = $this->generateJsonLdGraph($data);

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

        // Try default SEO keys
        $candidate = __('seo.default.' . $key);
        if ($candidate && $candidate !== 'seo.default.' . $key) {
            return $candidate;
        }

        // Backwards compatible fallback: seo.{key}
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

    protected function generateJsonLdGraph($data)
    {
        $homeUrl = url('/');
        $orgId = $homeUrl . '#organization';
        $websiteId = $homeUrl . '#website';

        $org = [
            "@id" => $orgId,
            "@type" => "LocalBusiness",
            "name" => config('app.name', 'Nova Consulting'),
            "url" => $homeUrl,
            "logo" => asset('images/Web_inverted.svg'),
            "telephone" => "+52-961-146-5703",
            "email" => "sales@novaconsulting.com",
            "address" => [
                "@type" => "PostalAddress",
                "addressLocality" => "Tuxtla Gutierrez",
                "addressRegion" => "Chiapas",
                "addressCountry" => "MX",
            ],
            "areaServed" => [
                [
                    "@type" => "City",
                    "name" => "Tuxtla Gutierrez",
                ],
                [
                    "@type" => "State",
                    "name" => "Chiapas",
                ],
            ],
            "sameAs" => [
                // social links could be in config or env
            ],
            "description" => strip_tags($data['description'] ?? ''),
        ];

        $website = [
            "@id" => $websiteId,
            "@type" => "WebSite",
            "url" => $homeUrl,
            "name" => config('app.name', 'Nova Consulting'),
            "publisher" => [
                "@id" => $orgId,
            ],
            "inLanguage" => app()->getLocale(),
            "potentialAction" => [
                "@type" => "SearchAction",
                "target" => $homeUrl . "?q={search_term_string}",
                "query-input" => "required name=search_term_string",
            ],
        ];

        $menuItems = [
            ["name" => "Servicios", "url" => url('/services')],
            ["name" => "Contacto", "url" => url('/contact')],
            ["name" => "Cotiza", "url" => url('/get-a-quote')],
            ["name" => "Inicia sesion", "url" => url('/dashboard/login')],
            ["name" => "FAQ", "url" => url('/faq')],
        ];

        $navigation = array_map(function ($item) {
            return [
                "@type" => "SiteNavigationElement",
                "name" => $item["name"],
                "url" => $item["url"],
            ];
        }, $menuItems);

        $graphNodes = array_merge([$org, $website], $navigation);

        $breadcrumb = $this->generateBreadcrumbNode($homeUrl);
        if ($breadcrumb) {
            $graphNodes[] = $breadcrumb;
        }

        $graph = [
            "@context" => "https://schema.org",
            "@graph" => $graphNodes,
        ];

        return json_encode($graph, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }

    protected function generateBreadcrumbNode($homeUrl)
    {
        $route = $this->routeName ?: 'home';
        $map = [
            'home' => [
                ['name' => 'Inicio', 'url' => $homeUrl],
            ],
            'services' => [
                ['name' => 'Inicio', 'url' => $homeUrl],
                ['name' => 'Servicios', 'url' => url('/services')],
            ],
            'about' => [
                ['name' => 'Inicio', 'url' => $homeUrl],
                ['name' => 'Acerca de', 'url' => url('/about')],
            ],
            'contact' => [
                ['name' => 'Inicio', 'url' => $homeUrl],
                ['name' => 'Contacto', 'url' => url('/contact')],
            ],
            'faq' => [
                ['name' => 'Inicio', 'url' => $homeUrl],
                ['name' => 'FAQ', 'url' => url('/faq')],
            ],
            'quotations' => [
                ['name' => 'Inicio', 'url' => $homeUrl],
                ['name' => 'Cotiza', 'url' => url('/get-a-quote')],
            ],
            'hiring_services' => [
                ['name' => 'Inicio', 'url' => $homeUrl],
                ['name' => 'Contratacion', 'url' => url('/hiring-services')],
            ],
            'landing.software.tuxtla.chiapas' => [
                ['name' => 'Inicio', 'url' => $homeUrl],
                ['name' => 'Empresa de software en Tuxtla y Chiapas', 'url' => url('/empresa-software-tuxtla-chiapas')],
            ],
            'landing.webdesign.tuxtla.chiapas' => [
                ['name' => 'Inicio', 'url' => $homeUrl],
                ['name' => 'Diseno de paginas web en Tuxtla y Chiapas', 'url' => url('/diseno-paginas-web-tuxtla-chiapas')],
            ],
            'landing.software.guadalajara' => [
                ['name' => 'Inicio', 'url' => $homeUrl],
                ['name' => 'Empresa de software en Guadalajara', 'url' => url('/empresa-software-guadalajara')],
            ],
            'landing.software.monterrey' => [
                ['name' => 'Inicio', 'url' => $homeUrl],
                ['name' => 'Empresa de software en Monterrey', 'url' => url('/empresa-software-monterrey')],
            ],
            'landing.software.cdmx' => [
                ['name' => 'Inicio', 'url' => $homeUrl],
                ['name' => 'Empresa de software en Ciudad de Mexico', 'url' => url('/empresa-software-cdmx')],
            ],
            'landing.software.merida' => [
                ['name' => 'Inicio', 'url' => $homeUrl],
                ['name' => 'Empresa de software en Merida', 'url' => url('/empresa-software-merida')],
            ],
        ];

        if (!isset($map[$route])) {
            return null;
        }

        $items = array_map(function ($item, $index) {
            return [
                "@type" => "ListItem",
                "position" => $index + 1,
                "name" => $item['name'],
                "item" => $item['url'],
            ];
        }, $map[$route], array_keys($map[$route]));

        return [
            "@type" => "BreadcrumbList",
            "itemListElement" => $items,
        ];
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
        $out[] = "<meta name=\"robots\" content=\"index, follow, max-image-preview:large\">";
        $out[] = "<meta property=\"og:title\" content=\"" . e($data['og']['title']) . "\">";
        $out[] = "<meta property=\"og:description\" content=\"" . e($data['og']['description']) . "\">";
        $out[] = "<meta property=\"og:type\" content=\"" . e($data['og']['type']) . "\">";
        $out[] = "<meta property=\"og:url\" content=\"" . e($data['og']['url']) . "\">";
        $out[] = "<meta property=\"og:image\" content=\"" . e($data['og']['image']) . "\">";
        $out[] = "<meta property=\"og:locale\" content=\"" . e(str_replace('-', '_', app()->getLocale())) . "\">";
        $out[] = "<meta name=\"twitter:card\" content=\"summary_large_image\">";
        $out[] = "<meta name=\"twitter:title\" content=\"" . e($data['og']['title']) . "\">";
        $out[] = "<meta name=\"twitter:description\" content=\"" . e($data['og']['description']) . "\">";
        $out[] = "<meta name=\"twitter:image\" content=\"" . e($data['og']['image']) . "\">";
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
