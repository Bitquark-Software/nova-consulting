@php
    $t = __('tuxtla_web_design');
    $path = config('tuxtla_web_design.path');
    $canonical = url($path);
    $htmlLang = 'es-MX';
    $quoteUrl = route('website_quote');

    $seo_overrides = [
        'title' => $t['seo']['title'],
        'description' => $t['seo']['description'],
        'keywords' => $t['seo']['keywords'],
        'og' => [
            'title' => $t['seo']['og_title'],
            'description' => $t['seo']['og_description'],
            'type' => 'website',
            'url' => $canonical,
            'image' => asset('images/preview.png'),
            'alt' => 'Diseño de páginas web en Tuxtla Gutiérrez — Nova Consulting',
        ],
    ];

    $serviceSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => 'Diseño de páginas web en Tuxtla Gutiérrez',
        'serviceType' => 'Web design',
        'provider' => [
            '@type' => 'LocalBusiness',
            'name' => 'Nova Consulting',
            'url' => url('/'),
            'telephone' => '+52-961-146-5703',
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => 'Avenida Chihuahua 1067',
                'addressLocality' => 'Tuxtla Gutiérrez',
                'addressRegion' => 'Chiapas',
                'postalCode' => '29020',
                'addressCountry' => 'MX',
            ],
        ],
        'areaServed' => [
            ['@type' => 'City', 'name' => 'Tuxtla Gutiérrez'],
            ['@type' => 'State', 'name' => 'Chiapas'],
        ],
        'description' => $t['seo']['description'],
        'url' => $canonical,
        'inLanguage' => 'es-MX',
    ];

    $howToSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Cómo crear tu página web con clics en Tuxtla Gutiérrez',
        'description' => $t['click_builder']['intro'],
        'step' => array_map(function ($step, $index) use ($quoteUrl) {
            return [
                '@type' => 'HowToStep',
                'position' => $index + 1,
                'name' => $step['title'],
                'text' => $step['body'],
                'url' => $index === 0 ? $quoteUrl : $quoteUrl.'#paso-'.($index + 1),
            ];
        }, $t['click_builder']['steps'], array_keys($t['click_builder']['steps'])),
    ];

    $faqSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => array_map(fn ($item) => [
            '@type' => 'Question',
            'name' => $item['q'],
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => $item['a']],
        ], $t['faq']['items']),
    ];
@endphp
@extends('layouts.marketing')

@section('nav_ga_section', config('tuxtla_web_design.nav_ga'))

@section('content')
    <div class="pt-8 sm:pt-10 pb-16 px-4">
        <nav aria-label="{{ __('seo.breadcrumb.home') }}" class="max-w-5xl mx-auto mb-8 text-sm text-gray-500">
            <ol class="flex flex-wrap items-center gap-x-2 gap-y-1">
                <li><a href="{{ route('home') }}" class="hover:text-black transition-colors">{{ __('seo.breadcrumb.home') }}</a></li>
                <li aria-hidden="true">/</li>
                <li><span aria-current="page" class="text-gray-800 font-medium">{{ $t['hero']['h1'] }}</span></li>
            </ol>
        </nav>

        {{-- Hero --}}
        <section class="max-w-5xl mx-auto text-center">
            <p class="inline-block text-xs uppercase tracking-[0.2em] px-3 py-1.5 rounded-full bg-white border border-gray-300 font-semibold text-gray-600">
                {{ $t['hero']['badge'] }}
            </p>
            <h1 class="mt-5 text-4xl md:text-6xl font-bold leading-tight">
                {{ $t['hero']['h1'] }}
            </h1>
            <p class="mt-6 text-lg text-gray-700 max-w-3xl mx-auto leading-relaxed">
                {{ $t['hero']['subtitle'] }}
            </p>
            <div class="mt-8 flex flex-col sm:flex-row gap-3 justify-center">
                <a
                    href="{{ $quoteUrl }}"
                    class="px-6 py-3 rounded-md bg-[#2C2C2C] text-white font-medium"
                    data-track="landing_tuxtla_web_quote_click"
                >
                    {{ $t['hero']['cta_quote'] }}
                </a>
                <a
                    href="https://wa.me/529611465703?text={{ urlencode('Hola, quiero cotizar diseño de página web en Tuxtla Gutiérrez.') }}"
                    target="_blank"
                    rel="noopener"
                    class="px-6 py-3 rounded-md border border-[#2C2C2C] text-[#2C2C2C] font-medium"
                    data-track="landing_tuxtla_web_whatsapp_click"
                >
                    {{ $t['hero']['cta_whatsapp'] }}
                </a>
                <a
                    href="tel:+529611465703"
                    class="px-6 py-3 rounded-md border border-[#2C2C2C] text-[#2C2C2C] font-medium"
                    data-track="landing_tuxtla_web_phone_click"
                >
                    {{ $t['hero']['cta_phone'] }}
                </a>
            </div>
        </section>

        {{-- Click builder --}}
        <section class="max-w-6xl mx-auto mt-20" id="crear-con-clics" data-ga-section="tuxtla-web-click-builder">
            <div class="text-center max-w-3xl mx-auto">
                <p class="text-xs uppercase tracking-[0.2em] text-gray-500 font-semibold">{{ $t['click_builder']['kicker'] }}</p>
                <h2 class="mt-3 text-3xl md:text-4xl font-bold">{{ $t['click_builder']['title'] }}</h2>
                <p class="mt-4 text-gray-700 leading-relaxed">{{ $t['click_builder']['intro'] }}</p>
            </div>
            <ol class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach ($t['click_builder']['steps'] as $step)
                    <li class="bg-white rounded-2xl p-6 md:p-8 border border-gray-100 shadow-sm">
                        <span class="text-sm font-bold tracking-widest text-gray-400">{{ $step['number'] }}</span>
                        <h3 class="mt-2 text-xl font-semibold">{{ $step['title'] }}</h3>
                        <p class="mt-3 text-gray-700 leading-relaxed">{{ $step['body'] }}</p>
                    </li>
                @endforeach
            </ol>
            <div class="mt-10 text-center">
                <a
                    href="{{ $quoteUrl }}"
                    class="inline-flex px-8 py-3.5 rounded-md bg-black text-white font-semibold hover:bg-[#2C2C2C] transition-colors"
                    data-track="landing_tuxtla_web_builder_cta"
                >
                    {{ $t['click_builder']['cta'] }}
                </a>
            </div>
        </section>

        {{-- Benefits --}}
        <section class="max-w-6xl mx-auto mt-20">
            <h2 class="text-3xl font-bold text-center">{{ $t['benefits']['title'] }}</h2>
            <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach ($t['benefits']['items'] as $item)
                    <article class="bg-white rounded-xl p-6 shadow-sm border border-gray-100">
                        <h3 class="text-xl font-semibold">{{ $item['title'] }}</h3>
                        <p class="mt-3 text-gray-700 leading-relaxed">{{ $item['body'] }}</p>
                    </article>
                @endforeach
            </div>
        </section>

        {{-- Types + includes --}}
        <section class="max-w-6xl mx-auto mt-20 grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div>
                <h2 class="text-2xl font-bold">{{ $t['types']['title'] }}</h2>
                <div class="mt-6 space-y-4">
                    @foreach ($t['types']['items'] as $item)
                        <article class="bg-white rounded-xl p-5 border border-gray-100">
                            <h3 class="font-semibold text-lg">{{ $item['title'] }}</h3>
                            <p class="mt-2 text-gray-700">{{ $item['body'] }}</p>
                        </article>
                    @endforeach
                </div>
            </div>
            <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100">
                <h2 class="text-2xl font-bold">{{ $t['includes']['title'] }}</h2>
                <ul class="mt-6 space-y-3 text-gray-700">
                    @foreach ($t['includes']['items'] as $item)
                        <li class="flex gap-3">
                            <span class="mt-1.5 h-2 w-2 shrink-0 rounded-full bg-black" aria-hidden="true"></span>
                            <span>{{ $item }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        {{-- Promo --}}
        <section class="max-w-6xl mx-auto mt-20 bg-black text-white rounded-2xl p-8 md:p-10 text-center" data-ga-section="promo-web-tuxtla-gutierrez" data-marketing-nav-contrast="dark">
            <p class="text-xs uppercase tracking-[0.2em] text-gray-300">{{ $t['promo']['kicker'] }}</p>
            <h2 class="mt-3 text-3xl md:text-4xl font-bold">{{ $t['promo']['title'] }}</h2>
            <p class="mt-4 text-gray-300 max-w-3xl mx-auto">{{ $t['promo']['body'] }}</p>
            <div class="mt-6 flex flex-col sm:flex-row items-center justify-center gap-3">
                <a href="https://wa.me/529611465703" target="_blank" rel="noopener" class="px-6 py-3 rounded-md bg-white text-black font-semibold" data-track="promo_tuxtla_web_whatsapp">
                    {{ $t['promo']['cta_whatsapp'] }}
                </a>
                <a href="tel:+529611465703" class="px-6 py-3 rounded-md border border-white text-white font-semibold" data-track="promo_tuxtla_web_phone">
                    {{ $t['promo']['cta_phone'] }}
                </a>
            </div>
        </section>

        {{-- Contact --}}
        <section class="max-w-5xl mx-auto mt-16 bg-white rounded-2xl p-8 shadow-sm">
            <h2 class="text-2xl font-bold">{{ $t['contact']['title'] }}</h2>
            <p class="mt-4 text-gray-700 leading-relaxed">{{ $t['contact']['body'] }}</p>
            <ul class="mt-6 space-y-2 text-gray-700">
                <li>{{ $t['contact']['address'] }}</li>
                <li>Teléfono: <a href="tel:+529611465703" class="underline font-medium">{{ $t['contact']['phone'] }}</a></li>
                <li>Correo: <a href="mailto:{{ $t['contact']['email'] }}" class="underline font-medium">{{ $t['contact']['email'] }}</a></li>
            </ul>
        </section>

        {{-- FAQ --}}
        <section class="max-w-5xl mx-auto mt-16" data-ga-section="faq-tuxtla-web-gutierrez">
            <h2 class="text-3xl font-bold text-center">{{ $t['faq']['title'] }}</h2>
            <div class="mt-6 space-y-4">
                @foreach ($t['faq']['items'] as $faq)
                    <details class="bg-white p-5 rounded-xl border border-gray-200">
                        <summary class="font-semibold cursor-pointer">{{ $faq['q'] }}</summary>
                        <p class="mt-2 text-gray-700 leading-relaxed">{{ $faq['a'] }}</p>
                    </details>
                @endforeach
            </div>
        </section>

        {{-- Related internal links (SEO graph) --}}
        <nav class="max-w-5xl mx-auto mt-12 text-center" aria-label="{{ $t['related']['title'] }}">
            <p class="text-sm font-semibold uppercase tracking-wide text-gray-500">{{ $t['related']['title'] }}</p>
            <div class="mt-4 flex flex-wrap justify-center gap-x-6 gap-y-2 text-sm">
                @foreach ($t['related']['items'] as $link)
                    <a href="{{ url($link['path']) }}" class="font-semibold text-gray-600 hover:text-black transition-colors">{{ $link['label'] }}</a>
                @endforeach
            </div>
        </nav>

        @include('partials.lead-qualification-form', ['leadSource' => config('tuxtla_web_design.lead_source')])
    </div>

    <script type="application/ld+json">{!! json_encode($serviceSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}</script>
    <script type="application/ld+json">{!! json_encode($howToSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}</script>
    <script type="application/ld+json">{!! json_encode($faqSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}</script>
@endsection
