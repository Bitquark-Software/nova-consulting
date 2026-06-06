@php
    $t = __('wedding_invitations');
    $paths = config('wedding_invitations.paths');
    $loc = app()->getLocale();
    $canonical = url($paths[$loc]);
    $htmlLang = $loc === 'en' ? 'en' : 'es-MX';
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
        ? 'Hi! I want a quote for Nova Invita digital wedding invitations.'
        : '¡Hola! Quiero cotizar invitaciones digitales para boda (Nova Invita).';
    $waDemo = $loc === 'en'
        ? 'Hi! I would like to request a demo of Nova Invita digital wedding invitations.'
        : '¡Hola! Me gustaría solicitar una demo de Nova Invita (invitaciones digitales para boda).';
    $waQuoteUrl = 'https://wa.me/529611465703?text='.urlencode($waQuote);
    $waDemoUrl = 'https://wa.me/529611465703?text='.urlencode($waDemo);
    $invitationPreviewUrl = asset('assets/invitations/digital wedding invitations.jpg');

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

@section('nav_ga_section', config('wedding_invitations.nav_ga'))
@section('marketing_body_class', 'wi-page max-lg:!pb-0')
@section('no_decorations')

@push('styles')
    @vite('resources/css/wedding-invitations.css')
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,300,0,0" rel="stylesheet">
@endpush

@section('content')
<div data-wedding-invitations class="wi-page min-h-screen">
    {{-- In-page nav --}}
    <nav class="wi-nav fixed top-0 inset-x-0 z-50 border-b border-transparent" aria-label="{{ __('messages.nav.primary_aria') }}">
        <div class="max-w-6xl mx-auto px-5 md:px-10 flex justify-between items-center h-[4.5rem]">
            <a
                href="{{ route('home') }}"
                class="shrink-0 flex items-center transition-transform duration-300 ease-out active:scale-[0.98] focus:outline-none focus-visible:ring-2 focus-visible:ring-black/25 focus-visible:ring-offset-2 rounded-md"
                aria-label="{{ __('messages.nav.brand') }}"
            >
                <img
                    src="{{ asset('images/nova_consulting_logo.svg') }}"
                    alt=""
                    width="646"
                    height="474"
                    decoding="async"
                    draggable="false"
                    class="h-7 w-auto max-w-[min(46vw,9.5rem)] sm:max-w-none sm:h-8 md:h-9 max-h-10 object-contain object-left"
                />
            </a>
            <div class="hidden md:flex items-center gap-6 text-sm font-semibold">
                <a href="#wi-features" class="text-[#525252] hover:text-[#0a0a0a] transition-colors">{{ $t['nav']['features'] }}</a>
                <a href="#wi-philosophy" class="text-[#525252] hover:text-[#0a0a0a] transition-colors">{{ $t['nav']['philosophy'] }}</a>
                <a href="#wi-process" class="text-[#525252] hover:text-[#0a0a0a] transition-colors">{{ $t['nav']['process'] }}</a>
                <a
                    href="{{ $waQuoteUrl }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="ml-2 px-5 py-2 rounded-full bg-[#0a0a0a] text-white text-xs uppercase tracking-widest hover:bg-[#171717] transition-colors"
                >{{ $t['nav']['pricing'] }}</a>
                <a href="{{ url($altPath) }}" class="text-xs uppercase tracking-widest text-[#525252] hover:text-[#0a0a0a] border border-[#0a0a0a]/15 px-3 py-1.5 rounded-full" hreflang="{{ $altLocale }}" rel="alternate">{{ $altLocale === 'en' ? 'EN' : 'ES' }}</a>
            </div>
            <a href="{{ url($altPath) }}" class="md:hidden text-xs font-bold uppercase tracking-widest border border-[#0a0a0a]/20 px-3 py-1.5 rounded-full" hreflang="{{ $altLocale }}" rel="alternate">{{ $altLocale === 'en' ? 'EN' : 'ES' }}</a>
        </div>
    </nav>

    {{-- Hero --}}
    <header data-wi-hero class="relative pt-32 md:pt-40 pb-20 md:pb-28 overflow-hidden bg-[#FAFAFA]" id="wi-hero">
        <div class="wi-hero-orb absolute -top-16 -right-20 w-72 h-72 bg-white/80 -z-10"></div>
        <div class="wi-hero-orb absolute bottom-0 -left-24 w-96 h-96 bg-gray-300/40 -z-10"></div>

        <div class="max-w-6xl mx-auto px-5 md:px-10 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div data-wi-hero-copy class="z-10 text-center md:text-left">
                <p data-wi-hero-kicker class="text-xs uppercase tracking-[0.2em] text-[#525252] font-semibold">{{ $t['hero']['kicker'] }}</p>
                <h1 class="mt-4 text-4xl md:text-6xl font-bold tracking-tighter leading-[1.08] text-[#0a0a0a]">
                    <span data-wi-hero-line class="block">{{ $t['hero']['title'] }}</span>
                    <span data-wi-hero-line class="block italic text-[#2C2C2C]">{{ $t['hero']['title_accent'] }}</span>
                </h1>
                <p data-wi-hero-sub class="mt-6 text-lg text-[#525252] max-w-lg mx-auto md:mx-0 leading-relaxed">{{ $t['hero']['subtitle'] }}</p>
                <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                    <a
                        data-wi-hero-cta
                        href="{{ $waQuoteUrl }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="px-8 py-4 rounded-full bg-[#0a0a0a] text-white text-xs uppercase tracking-widest font-bold hover:bg-[#171717] transition-colors shadow-lg"
                    >{{ $t['hero']['cta_primary'] }}</a>
                    <a
                        data-wi-hero-cta
                        href="{{ $waDemoUrl }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="px-8 py-4 rounded-full border border-[#0a0a0a]/25 text-[#2C2C2C] text-xs uppercase tracking-widest font-bold hover:bg-white transition-colors"
                    >{{ $t['hero']['cta_secondary'] }}</a>
                </div>
            </div>

            <div class="relative flex justify-center mt-8 md:mt-0">
                <div
                    data-wi-phone
                    class="wi-phone-frame relative w-full max-w-[300px] md:max-w-[340px] aspect-[9/16] rounded-[2.75rem] overflow-hidden bg-[#0a0a0a]"
                >
                    <img
                        src="{{ $invitationPreviewUrl }}"
                        alt="{{ $t['hero']['phone_alt'] }}"
                        class="absolute inset-0 h-full w-full object-cover object-top"
                        width="680"
                        height="1208"
                        loading="eager"
                        fetchpriority="high"
                        decoding="async"
                    >
                    <div class="pointer-events-none absolute inset-x-0 bottom-3 flex justify-center" aria-hidden="true">
                        <div class="h-1 w-24 rounded-full bg-white/70 shadow-sm"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    {{-- Marquee strip (scroll-velocity driven) --}}
    <div data-wi-marquee class="wi-marquee overflow-hidden border-y border-black/5 bg-white/50" aria-hidden="true">
        <div class="wi-marquee-track">
            @for ($m = 0; $m < 2; $m++)
                <div class="wi-marquee-sequence" @if ($m > 0) aria-hidden="true" @endif>
                    @foreach ($t['marquee'] as $chip)
                        <span class="wi-marquee-item">{{ $chip }}</span>
                        <span class="wi-marquee-sep" aria-hidden="true">·</span>
                    @endforeach
                </div>
            @endfor
        </div>
    </div>

    {{-- Features --}}
    <section data-wi-features id="wi-features" class="py-20 md:py-28 border-b border-black/5 bg-[#F2F2F2] relative">
        <div class="max-w-6xl mx-auto px-5 md:px-10">
            <div data-wi-features-pin class="hidden lg:block absolute left-5 top-28 text-[10rem] font-bold text-black/[0.03] leading-none select-none pointer-events-none" aria-hidden="true">01</div>
            <div data-wi-section-head class="text-center mb-14">
                <span class="text-xs uppercase tracking-[0.2em] text-[#525252] font-semibold">{{ $t['features']['kicker'] }}</span>
                <h2 class="mt-2 text-3xl md:text-4xl font-bold tracking-tight text-[#0a0a0a]">{{ $t['features']['title'] }}</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach ($t['features']['items'] as $feature)
                    <article class="wi-feature-card bg-[#FAFAFA] p-8 rounded-2xl wi-invitation-shadow border border-black/5 flex flex-col items-center text-center">
                        <div class="w-14 h-14 rounded-full bg-white border border-black/8 flex items-center justify-center text-[#0a0a0a] mb-5">
                            <span class="material-symbols-outlined text-3xl">{{ $feature['icon'] }}</span>
                        </div>
                        <h3 class="font-bold text-xl text-[#0a0a0a]">{{ $feature['title'] }}</h3>
                        <p class="mt-3 text-sm text-[#525252] leading-relaxed">{{ $feature['body'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Philosophy --}}
    <section data-wi-philosophy id="wi-philosophy" class="py-20 md:py-28 bg-[#FAFAFA] overflow-hidden">
        <div class="max-w-6xl mx-auto px-5 md:px-10 grid grid-cols-1 md:grid-cols-2 gap-14 items-center">
            <div class="order-2 md:order-1 space-y-8">
                <div data-wi-section-head>
                    <span class="text-xs uppercase tracking-[0.2em] text-[#525252] font-semibold">{{ $t['philosophy']['kicker'] }}</span>
                    <h2 class="mt-2 text-3xl md:text-5xl font-bold tracking-tight text-[#0a0a0a]">{{ $t['philosophy']['title'] }}</h2>
                </div>
                @foreach ($t['philosophy']['items'] as $item)
                    <div class="wi-philosophy-block flex gap-4">
                        <span class="material-symbols-outlined text-[#0a0a0a] mt-1">{{ $item['icon'] }}</span>
                        <div>
                            <h3 class="font-bold text-lg text-[#0a0a0a]">{{ $item['title'] }}</h3>
                            <p class="mt-2 text-[#525252] text-sm leading-relaxed">{{ $item['body'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="order-1 md:order-2 relative">
                <div data-wi-philosophy-image class="rounded-2xl overflow-hidden wi-invitation-shadow border border-black/8 aspect-square md:aspect-[4/5]">
                    <img
                        src="{{ $invitationPreviewUrl }}"
                        alt="{{ $t['philosophy']['image_alt'] }}"
                        class="w-full h-full object-cover"
                        width="900"
                        height="1125"
                        loading="lazy"
                        decoding="async"
                    >
                </div>
                <blockquote data-wi-quote class="wi-quote-card absolute -bottom-6 -left-4 md:-left-8 max-w-[260px] p-5 rounded-xl shadow-xl hidden md:block">
                    <p class="text-sm italic text-[#2C2C2C] leading-relaxed">"{{ $t['philosophy']['quote'] }}"</p>
                </blockquote>
            </div>
        </div>
    </section>

    {{-- Process --}}
    <section data-wi-process id="wi-process" class="py-20 md:py-28 bg-[#F2F2F2] border-y border-black/5">
        <div class="max-w-6xl mx-auto px-5 md:px-10 text-center">
            <h2 data-wi-section-head class="text-3xl md:text-4xl font-bold tracking-tight text-[#0a0a0a] mb-16">{{ $t['process']['title'] }}</h2>
            <div class="relative grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="hidden md:block absolute top-8 left-[16%] right-[16%] h-px bg-[#0a0a0a]/15 overflow-hidden" aria-hidden="true">
                    <div class="wi-process-line h-full w-full bg-[#0a0a0a]/40 origin-left"></div>
                </div>
                @foreach ($t['process']['steps'] as $i => $step)
                    <div class="wi-process-step relative z-10 space-y-4">
                        <div data-wi-step-num class="w-16 h-16 bg-[#0a0a0a] text-white mx-auto rounded-full flex items-center justify-center text-xl font-bold shadow-lg">{{ $i + 1 }}</div>
                        <div data-wi-step-body>
                            <h3 class="font-bold text-xl text-[#0a0a0a]">{{ $step['title'] }}</h3>
                            <p class="mt-2 text-sm text-[#525252] max-w-xs mx-auto">{{ $step['body'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section data-wi-cta id="wi-cta" class="py-20 md:py-24">
        <div class="max-w-6xl mx-auto px-5 md:px-10">
            <div class="wi-cta-panel rounded-3xl p-10 md:p-14 flex flex-col lg:flex-row items-center justify-between gap-8 text-white">
                <div data-wi-cta-copy class="text-center lg:text-left">
                    <h2 class="text-3xl md:text-4xl font-bold tracking-tight">{{ $t['cta']['title'] }}</h2>
                    <p class="mt-3 text-white/75 text-lg max-w-md">{{ $t['cta']['body'] }}</p>
                </div>
                <div data-wi-cta-actions class="flex flex-col sm:flex-row gap-4 shrink-0 w-full sm:w-auto">
                    <a
                        data-wi-cta-btn
                        href="{{ $waQuoteUrl }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="px-10 py-5 rounded-full bg-white text-[#0a0a0a] text-xs uppercase tracking-widest font-bold hover:bg-[#f2f2f2] transition-colors shadow-xl text-center"
                    >{{ $t['cta']['primary'] }}</a>
                    <a
                        data-wi-cta-btn
                        href="{{ $waDemoUrl }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="px-10 py-5 rounded-full border border-white/40 text-white text-xs uppercase tracking-widest font-bold hover:bg-white/10 transition-colors text-center"
                    >{{ $t['cta']['secondary'] }}</a>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ + lead --}}
    <section data-wi-faq class="py-16 md:py-20 bg-[#F2F2F2] border-t border-black/5">
        <div class="max-w-3xl mx-auto px-5 md:px-10">
            <h2 class="text-2xl md:text-3xl font-bold text-center text-[#0a0a0a] mb-8">{{ $t['faq']['title'] }}</h2>
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

    @include('partials.lead-qualification-form', ['leadSource' => config('wedding_invitations.lead_source')])
</div>
@endsection

@push('scripts')
    @vite('resources/js/weddingInvitationsScroll.js')
@endpush
