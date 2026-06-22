@php
    $t = __('ai_app_publishing');
    $paths = config('ai_app_publishing.paths');
    $loc = app()->getLocale();
    $canonical = url($paths[$loc]);
    $altLocale = $loc === 'en' ? 'es' : 'en';
    $altPath = $paths[$altLocale];

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
        ],
        'hreflang' => [
            'es' => url($paths['es']),
            'en' => url($paths['en']),
            'x-default' => url($paths['es']),
        ],
    ];

    $waQuote = $loc === 'en'
        ? 'Hi! I built an app with AI and need help publishing it (web server, domain, or app stores).'
        : '¡Hola! Creé una app con IA y necesito ayuda para publicarla (servidor, dominio o tiendas de apps).';
    $waQuoteUrl = 'https://wa.me/529612010951?text='.urlencode($waQuote);

    $serviceSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => $t['brand'],
        'provider' => [
            '@type' => 'Organization',
            'name' => 'Nova Consulting',
            'url' => url('/'),
        ],
        'areaServed' => 'MX',
        'description' => $t['seo']['description'],
        'url' => $canonical,
        'inLanguage' => [$loc === 'en' ? 'en' : 'es-MX'],
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

@section('nav_ga_section', config('ai_app_publishing.nav_ga'))
@section('marketing_body_class', 'aap-page')

@push('styles')
    @vite('resources/css/ai-app-publishing.css')
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,300,0,0" rel="stylesheet">
@endpush

@section('content')
<div data-ai-app-publishing class="aap-page min-h-screen">
    {{-- Hero --}}
    <header data-aap-hero class="relative pt-28 md:pt-36 pb-16 md:pb-24 overflow-hidden bg-[#FAFAFA]" id="aap-hero">
        <div class="aap-hero-orb absolute -top-16 -right-20 w-72 h-72 rounded-full bg-white/80 blur-3xl -z-10" aria-hidden="true"></div>
        <div class="aap-hero-orb absolute bottom-0 -left-24 w-96 h-96 rounded-full bg-gray-300/40 blur-3xl -z-10" aria-hidden="true"></div>

        <div class="max-w-6xl mx-auto px-5 md:px-10">
            <div class="flex justify-end mb-6">
                <a
                    href="{{ url($altPath) }}"
                    data-aap-hero-cta
                    class="text-xs font-bold uppercase tracking-widest border border-[#0a0a0a]/20 px-3 py-1.5 rounded-full text-[#525252] hover:text-[#0a0a0a] hover:border-[#0a0a0a]/40 transition-colors"
                    hreflang="{{ $altLocale }}"
                    rel="alternate"
                >{{ $t['hero']['lang_switch'] }}</a>
            </div>

            <div data-aap-hero-copy class="max-w-3xl">
                <p data-aap-hero-kicker class="text-xs uppercase tracking-[0.2em] text-[#525252] font-semibold">{{ $t['hero']['kicker'] }}</p>
                <h1 class="mt-4 text-4xl md:text-6xl font-bold tracking-tighter leading-[1.08] text-[#0a0a0a]">
                    <span data-aap-hero-line class="block">{{ $t['hero']['title'] }}</span>
                    <span data-aap-hero-line class="block italic text-[#2C2C2C]">{{ $t['hero']['title_accent'] }}</span>
                </h1>
                <p data-aap-hero-sub class="mt-6 text-lg text-[#525252] leading-relaxed">{{ $t['hero']['subtitle'] }}</p>
                <div class="mt-8 flex flex-col sm:flex-row flex-wrap gap-3">
                    <a
                        data-aap-hero-cta
                        href="{{ $waQuoteUrl }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="px-8 py-4 rounded-full bg-[#0a0a0a] text-white text-xs uppercase tracking-widest font-bold hover:bg-[#171717] transition-colors shadow-lg text-center"
                    >{{ $t['hero']['cta_primary'] }}</a>
                    <a
                        data-aap-hero-cta
                        href="{{ route('website_quote') }}"
                        class="px-8 py-4 rounded-full border border-[#0a0a0a]/25 text-[#2C2C2C] text-xs uppercase tracking-widest font-bold hover:bg-white transition-colors text-center"
                    >{{ $t['hero']['cta_secondary'] }}</a>
                    <a
                        data-aap-hero-cta
                        href="{{ route('contact') }}"
                        class="px-8 py-4 rounded-full border border-[#0a0a0a]/15 text-[#525252] text-xs uppercase tracking-widest font-bold hover:bg-white/80 transition-colors text-center"
                    >{{ $t['hero']['cta_tertiary'] }}</a>
                </div>
            </div>
        </div>
    </header>

    {{-- Marquee --}}
    <div data-aap-marquee class="aap-marquee overflow-hidden border-y border-black/5 bg-white/50" aria-hidden="true">
        <div class="aap-marquee-track">
            @for ($m = 0; $m < 2; $m++)
                <div class="aap-marquee-sequence" @if ($m > 0) aria-hidden="true" @endif>
                    @foreach ($t['marquee'] as $chip)
                        <span class="aap-marquee-item">{{ $chip }}</span>
                        <span class="aap-marquee-sep" aria-hidden="true">·</span>
                    @endforeach
                </div>
            @endfor
        </div>
    </div>

    {{-- Use cases --}}
    <section data-aap-use-cases id="aap-use-cases" class="py-20 md:py-28 border-b border-black/5 bg-[#F2F2F2]">
        <div class="max-w-6xl mx-auto px-5 md:px-10">
            <div data-aap-section-head class="text-center mb-14">
                <span class="text-xs uppercase tracking-[0.2em] text-[#525252] font-semibold">{{ $t['use_cases']['kicker'] }}</span>
                <h2 class="mt-2 text-3xl md:text-4xl font-bold tracking-tight text-[#0a0a0a]">{{ $t['use_cases']['title'] }}</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($t['use_cases']['items'] as $useCase)
                    <article class="aap-use-case-card bg-[#FAFAFA] p-8 rounded-2xl shadow-sm border border-black/5 flex flex-col">
                        <div class="w-14 h-14 rounded-full bg-white border border-black/8 flex items-center justify-center text-[#0a0a0a] mb-5">
                            <span class="material-symbols-outlined text-3xl">{{ $useCase['icon'] }}</span>
                        </div>
                        <h3 class="font-bold text-xl text-[#0a0a0a]">{{ $useCase['title'] }}</h3>
                        <p class="mt-3 text-sm text-[#525252] leading-relaxed">{{ $useCase['body'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Paths: web vs stores --}}
    <section data-aap-paths id="aap-paths" class="py-20 md:py-28 bg-[#FAFAFA]">
        <div class="max-w-6xl mx-auto px-5 md:px-10">
            <div data-aap-section-head class="text-center mb-14">
                <span class="text-xs uppercase tracking-[0.2em] text-[#525252] font-semibold">{{ $t['paths']['kicker'] }}</span>
                <h2 class="mt-2 text-3xl md:text-4xl font-bold tracking-tight text-[#0a0a0a]">{{ $t['paths']['title'] }}</h2>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                @foreach (['web', 'stores'] as $pathKey)
                    @php $path = $t['paths'][$pathKey]; @endphp
                    <article class="aap-path-card rounded-2xl border border-black/8 bg-white p-8 md:p-10 shadow-sm">
                        <div class="w-12 h-12 rounded-full bg-[#0a0a0a] text-white flex items-center justify-center mb-5">
                            <span class="material-symbols-outlined">{{ $pathKey === 'web' ? 'cloud_upload' : 'storefront' }}</span>
                        </div>
                        <h3 class="text-2xl font-bold text-[#0a0a0a]">{{ $path['title'] }}</h3>
                        <p class="mt-4 text-[#525252] leading-relaxed">{{ $path['body'] }}</p>
                        <ul class="mt-6 space-y-3">
                            @foreach ($path['bullets'] as $bullet)
                                <li class="aap-path-bullet flex gap-3 text-sm text-[#525252]">
                                    <span class="material-symbols-outlined text-[#0a0a0a] text-lg shrink-0">check_circle</span>
                                    <span>{{ $bullet }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Process --}}
    <section data-aap-process id="aap-process" class="py-20 md:py-28 bg-[#F2F2F2] border-y border-black/5">
        <div class="max-w-6xl mx-auto px-5 md:px-10 text-center">
            <h2 data-aap-section-head class="text-3xl md:text-4xl font-bold tracking-tight text-[#0a0a0a] mb-16">{{ $t['process']['title'] }}</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
                @foreach ($t['process']['steps'] as $i => $step)
                    <div class="aap-process-step space-y-4">
                        <div data-aap-step-num class="w-16 h-16 bg-[#0a0a0a] text-white mx-auto rounded-full flex items-center justify-center text-xl font-bold shadow-lg">{{ $i + 1 }}</div>
                        <div data-aap-step-body>
                            <h3 class="font-bold text-xl text-[#0a0a0a]">{{ $step['title'] }}</h3>
                            <p class="mt-2 text-sm text-[#525252]">{{ $step['body'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section data-aap-cta id="aap-cta" class="py-20 md:py-24">
        <div class="max-w-6xl mx-auto px-5 md:px-10">
            <div data-aap-cta-panel class="rounded-3xl bg-gradient-to-br from-[#0a0a0a] to-[#2C2C2C] p-10 md:p-14 flex flex-col lg:flex-row items-center justify-between gap-8 text-white">
                <div data-aap-cta-copy class="text-center lg:text-left">
                    <h2 class="text-3xl md:text-4xl font-bold tracking-tight">{{ $t['cta']['title'] }}</h2>
                    <p class="mt-3 text-white/75 text-lg max-w-md">{{ $t['cta']['body'] }}</p>
                </div>
                <div class="flex flex-col sm:flex-row gap-4 shrink-0 w-full sm:w-auto">
                    <a
                        data-aap-cta-btn
                        href="{{ $waQuoteUrl }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="px-10 py-5 rounded-full bg-white text-[#0a0a0a] text-xs uppercase tracking-widest font-bold hover:bg-[#f2f2f2] transition-colors shadow-xl text-center"
                    >{{ $t['cta']['primary'] }}</a>
                    <a
                        data-aap-cta-btn
                        href="{{ route('website_quote') }}"
                        class="px-10 py-5 rounded-full border border-white/40 text-white text-xs uppercase tracking-widest font-bold hover:bg-white/10 transition-colors text-center"
                    >{{ $t['cta']['secondary'] }}</a>
                    <a
                        data-aap-cta-btn
                        href="{{ route('contact') }}"
                        class="px-10 py-5 rounded-full border border-white/25 text-white/90 text-xs uppercase tracking-widest font-bold hover:bg-white/10 transition-colors text-center"
                    >{{ $t['cta']['tertiary'] }}</a>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <section data-aap-faq id="aap-faq" class="py-16 md:py-20 bg-[#F2F2F2] border-t border-black/5">
        <div class="max-w-3xl mx-auto px-5 md:px-10">
            <h2 data-aap-section-head class="text-2xl md:text-3xl font-bold text-center text-[#0a0a0a] mb-8">{{ $t['faq']['title'] }}</h2>
            <script type="application/ld+json">
                {!! json_encode($faqSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}
            </script>
            <div class="space-y-3">
                @foreach ($t['faq']['items'] as $faq)
                    <details class="bg-[#FAFAFA] rounded-xl border border-black/5 p-5">
                        <summary class="font-semibold cursor-pointer text-[#0a0a0a]">{{ $faq['q'] }}</summary>
                        <p class="mt-3 text-sm text-[#525252] leading-relaxed">{{ $faq['a'] }}</p>
                    </details>
                @endforeach
            </div>
        </div>
    </section>

    <script type="application/ld+json">
        {!! json_encode($serviceSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}
    </script>

    @include('partials.lead-qualification-form', ['leadSource' => config('ai_app_publishing.lead_source')])
</div>
@endsection

@push('scripts')
    @vite('resources/js/aiAppPublishingScroll.js')
@endpush
