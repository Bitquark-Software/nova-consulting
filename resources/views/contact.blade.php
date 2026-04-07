@php
    $cp = trans('messages.contact_page');
    $mapUrl = 'https://www.google.com/maps/search/?api=1&query='.urlencode($cp['map_query']);
    $canonical = url('/contact');
    $htmlLang = app()->getLocale() === 'en' ? 'en' : 'es-MX';
    $seo_overrides = [
        'title' => __('seo.contact.title'),
        'description' => __('seo.contact.description'),
        'keywords' => __('seo.contact.keywords'),
        'og' => [
            'title' => __('seo.contact.title'),
            'description' => __('seo.contact.description'),
            'type' => 'website',
            'url' => $canonical,
            'image' => asset('images/preview.png'),
        ],
    ];
@endphp
@extends('layouts.marketing')

@section('nav_ga_section', 'nav-contact')

@section('content')
<div class="relative pt-28 sm:pt-32 pb-20 px-4 sm:px-6 overflow-hidden">
    <div class="pointer-events-none absolute -top-24 right-0 w-[min(28rem,90vw)] h-[min(28rem,90vw)] rounded-full bg-white/80 blur-3xl"></div>
    <div class="pointer-events-none absolute top-40 -left-20 w-72 h-72 rounded-full bg-gray-300/40 blur-3xl"></div>

    <div class="relative max-w-6xl mx-auto">
        {{-- Hero --}}
        <header class="text-center max-w-3xl mx-auto">
            <span class="inline-flex items-center gap-2 text-xs font-semibold uppercase tracking-[0.18em] text-gray-600 px-3 py-1.5 rounded-full border border-gray-200 bg-white/90 shadow-sm">
                <span class="w-2 h-2 rounded-full bg-black animate-pulse"></span>
                {{ $cp['badge'] }}
            </span>
            <h1 class="mt-6 text-4xl sm:text-5xl md:text-6xl font-bold tracking-tight text-black leading-[1.08]">
                {{ $cp['hero_title'] }}
            </h1>
            <p class="mt-5 text-lg sm:text-xl text-gray-600 leading-relaxed font-light">
                {{ $cp['hero_subtitle'] }}
            </p>
            <div class="mt-10 flex flex-col sm:flex-row flex-wrap items-center justify-center gap-3">
                <a
                    href="https://wa.me/529611465703?text={{ urlencode($cp['whatsapp_prefill']) }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="inline-flex justify-center items-center w-full sm:w-auto min-w-[12rem] px-8 py-3.5 rounded-full bg-[#25D366] text-white font-semibold shadow-md hover:shadow-lg hover:-translate-y-0.5 transition-all"
                    data-track="contact_whatsapp_hero"
                >
                    {{ $cp['cta_whatsapp'] }}
                </a>
                <a
                    href="{{ route('website_quote') }}"
                    class="inline-flex justify-center items-center w-full sm:w-auto min-w-[12rem] px-8 py-3.5 rounded-full bg-black text-white font-semibold shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all"
                    data-track="contact_quote_hero"
                >
                    {{ $cp['cta_quote'] }}
                </a>
                <a
                    href="{{ $cp['calendar_url'] }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="inline-flex justify-center items-center w-full sm:w-auto min-w-[12rem] px-8 py-3.5 rounded-full border-2 border-[#2C2C2C] font-semibold hover:bg-gray-50 transition-all"
                    data-track="contact_calendar_hero"
                >
                    {{ $cp['cta_calendar'] }}
                </a>
            </div>
            <a href="tel:+529611465703" class="mt-6 inline-flex items-center gap-2 text-sm font-medium text-gray-600 hover:text-black transition-colors" data-track="contact_call_hero">
                <x-ri-phone-line class="w-4 h-4 shrink-0" />
                {{ $cp['cta_call'] }} · +52 961 146 5703
            </a>
        </header>

        {{-- Grid: canales + aside --}}
        <div class="mt-16 lg:mt-20 grid lg:grid-cols-12 gap-6 lg:gap-8 items-start">
            <div class="lg:col-span-7 space-y-4">
                <div>
                    <h2 class="text-2xl font-bold text-black">{{ $cp['channels_title'] }}</h2>
                    <p class="mt-2 text-gray-600">{{ $cp['channels_sub'] }}</p>
                </div>

                <div class="grid sm:grid-cols-2 gap-4">
                    <a href="mailto:sales@novaconsulting.com.mx" class="group rounded-2xl border border-gray-200 bg-white p-6 shadow-sm hover:shadow-md hover:border-gray-300 transition-all" data-track="contact_card_email">
                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-gray-100 text-black group-hover:bg-black group-hover:text-white transition-colors">
                            <x-ri-mail-line class="w-5 h-5" />
                        </div>
                        <p class="mt-4 text-xs font-semibold uppercase tracking-wider text-gray-500">{{ __('messages.contact.email') }}</p>
                        <p class="mt-1 font-semibold text-black">sales@novaconsulting.com.mx</p>
                        <p class="mt-2 text-sm text-gray-600">{{ $cp['email_hint'] }}</p>
                    </a>

                    <a href="tel:+529611465703" class="group rounded-2xl border border-gray-200 bg-white p-6 shadow-sm hover:shadow-md hover:border-gray-300 transition-all" data-track="contact_card_phone">
                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-gray-100 text-black group-hover:bg-black group-hover:text-white transition-colors">
                            <x-ri-phone-line class="w-5 h-5" />
                        </div>
                        <p class="mt-4 text-xs font-semibold uppercase tracking-wider text-gray-500">{{ __('messages.contact.phone') }}</p>
                        <p class="mt-1 font-semibold text-black">+52 961 146 5703</p>
                        <p class="mt-2 text-sm text-gray-600">{{ $cp['phone_hint'] }}</p>
                    </a>
                </div>

                <div class="rounded-2xl border border-gray-200 bg-white p-6 sm:p-8 shadow-sm">
                    <div class="flex flex-col sm:flex-row sm:items-start gap-4">
                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-gray-100 text-black">
                            <x-ri-map-pin-line class="w-5 h-5" />
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-xs font-semibold uppercase tracking-wider text-gray-500">{{ __('messages.contact.address') }}</p>
                            <p class="mt-1 font-semibold text-black">{{ $cp['map_query'] }}</p>
                            <p class="mt-2 text-sm text-gray-600">{{ $cp['address_hint'] }}</p>
                            <a href="{{ $mapUrl }}" target="_blank" rel="noopener noreferrer" class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-black border-b border-black/30 hover:border-black transition-colors" data-track="contact_map">
                                {{ $cp['map_cta'] }}
                                <x-ri-external-link-line class="w-4 h-4" />
                            </a>
                        </div>
                    </div>
                </div>

                <div class="rounded-2xl border border-gray-200 bg-gradient-to-br from-gray-50 to-white p-6 sm:p-8">
                    <p class="text-xs font-semibold uppercase tracking-wider text-gray-500">{{ __('messages.contact.business_hours') }}</p>
                    <p class="mt-2 text-sm text-gray-500">{{ $cp['hours_hint'] }}</p>
                    <ul class="mt-4 space-y-2 text-gray-800">
                        <li>{{ __('messages.contact.monday_friday') }}</li>
                        <li>{{ __('messages.contact.saturday') }}</li>
                        <li>{{ __('messages.contact.sunday') }}</li>
                    </ul>
                </div>
            </div>

            <aside class="lg:col-span-5 lg:sticky lg:top-28 space-y-6">
                <div class="rounded-2xl border border-gray-200 bg-gradient-to-br from-[#2C2C2C] to-gray-900 text-white p-8 shadow-xl">
                    <h2 class="text-xl font-bold">{{ $cp['aside_title'] }}</h2>
                    <p class="mt-3 text-sm text-gray-300 leading-relaxed">{{ $cp['aside_body'] }}</p>
                    <ul class="mt-6 space-y-3 text-sm text-gray-200">
                        <li class="flex gap-3">
                            <span class="mt-0.5 shrink-0 w-5 h-5 rounded-full bg-white/15 flex items-center justify-center text-xs font-bold">✓</span>
                            <span>{{ $cp['aside_b1'] }}</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="mt-0.5 shrink-0 w-5 h-5 rounded-full bg-white/15 flex items-center justify-center text-xs font-bold">✓</span>
                            <span>{{ $cp['aside_b2'] }}</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="mt-0.5 shrink-0 w-5 h-5 rounded-full bg-white/15 flex items-center justify-center text-xs font-bold">✓</span>
                            <span>{{ $cp['aside_b3'] }}</span>
                        </li>
                    </ul>
                </div>

                <div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">
                    <p class="text-xs font-semibold uppercase tracking-wider text-gray-500">{{ $cp['social_title'] }}</p>
                    <div class="mt-4 flex flex-wrap gap-2">
                        <a href="https://www.facebook.com/share/1GDwN93yhW/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer" class="w-11 h-11 rounded-full bg-[#F2F2F2] flex items-center justify-center border border-gray-200 hover:border-black transition-colors" aria-label="Facebook" data-track="contact_social_fb">
                            <x-ri-facebook-fill class="w-5 h-5" />
                        </a>
                        <a href="https://www.instagram.com/nova_consulting_devs" target="_blank" rel="noopener noreferrer" class="w-11 h-11 rounded-full bg-[#F2F2F2] flex items-center justify-center border border-gray-200 hover:border-black transition-colors" aria-label="Instagram" data-track="contact_social_ig">
                            <x-ri-instagram-fill class="w-5 h-5" />
                        </a>
                        <a href="https://www.tiktok.com/@novaconsultingmx?_r=1&_t=ZS-946rrstjlUC" target="_blank" rel="noopener noreferrer" class="w-11 h-11 rounded-full bg-[#F2F2F2] flex items-center justify-center border border-gray-200 hover:border-black transition-colors" aria-label="TikTok" data-track="contact_social_tt">
                            <x-ri-tiktok-fill class="w-5 h-5" />
                        </a>
                        <a href="https://wa.me/529611465703" target="_blank" rel="noopener noreferrer" class="w-11 h-11 rounded-full bg-[#F2F2F2] flex items-center justify-center border border-gray-200 hover:border-black transition-colors" aria-label="WhatsApp" data-track="contact_social_wa">
                            <x-ri-whatsapp-fill class="w-5 h-5" />
                        </a>
                    </div>
                </div>
            </aside>
        </div>

        {{-- Proceso --}}
        <section class="mt-20 lg:mt-24" aria-labelledby="contact-process-title">
            <h2 id="contact-process-title" class="text-2xl sm:text-3xl font-bold text-black text-center max-w-2xl mx-auto">
                {{ $cp['process_title'] }}
            </h2>
            <div class="mt-10 grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
                @foreach ([
                    ['t' => $cp['step1_title'], 'b' => $cp['step1_body'], 'n' => '1'],
                    ['t' => $cp['step2_title'], 'b' => $cp['step2_body'], 'n' => '2'],
                    ['t' => $cp['step3_title'], 'b' => $cp['step3_body'], 'n' => '3'],
                    ['t' => $cp['step4_title'], 'b' => $cp['step4_body'], 'n' => '4'],
                ] as $step)
                    <div class="relative rounded-2xl border border-gray-200 bg-white p-6 pt-10 shadow-sm hover:shadow-md transition-shadow">
                        <span class="absolute top-4 right-4 text-4xl font-bold text-gray-100 select-none" aria-hidden="true">{{ $step['n'] }}</span>
                        <h3 class="text-lg font-bold text-black relative">{{ $step['t'] }}</h3>
                        <p class="mt-2 text-sm text-gray-600 leading-relaxed relative">{{ $step['b'] }}</p>
                    </div>
                @endforeach
            </div>
        </section>

        {{-- FAQ --}}
        <section class="mt-20 lg:mt-24 max-w-3xl mx-auto" aria-labelledby="contact-faq-title">
            @php
                $faqSchema = [
                    '@context' => 'https://schema.org',
                    '@type' => 'FAQPage',
                    'mainEntity' => array_map(function ($faq) {
                        return [
                            '@type' => 'Question',
                            'name' => $faq['q'],
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => $faq['a'],
                            ],
                        ];
                    }, $cp['faqs']),
                ];
            @endphp
            <script type="application/ld+json">
                {!! json_encode($faqSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}
            </script>
            <h2 id="contact-faq-title" class="text-2xl font-bold text-black text-center">{{ $cp['faq_title'] }}</h2>
            <div class="mt-8 space-y-2">
                @foreach($cp['faqs'] as $faq)
                    <details class="rounded-2xl border border-gray-200 bg-white open:shadow-sm transition-shadow group">
                        <summary class="cursor-pointer list-none px-5 py-4 font-semibold text-[#2C2C2C] flex justify-between gap-3 items-center">
                            <span>{{ $faq['q'] }}</span>
                            <span class="text-gray-400 text-xs shrink-0 group-open:rotate-180 transition-transform">▼</span>
                        </summary>
                        <div class="px-5 pb-4 text-sm text-gray-600 leading-relaxed border-t border-gray-100 pt-3">{{ $faq['a'] }}</div>
                    </details>
                @endforeach
            </div>
        </section>

        {{-- Enlaces útiles --}}
        <section class="mt-16 rounded-2xl border border-gray-200 bg-white p-8 sm:p-10 shadow-sm" aria-label="{{ $cp['explore_title'] }}">
            <h2 class="text-lg font-bold text-black">{{ $cp['explore_title'] }}</h2>
            <div class="mt-6 flex flex-wrap gap-3">
                <a href="{{ route('services') }}" class="inline-flex items-center px-4 py-2 rounded-full text-sm font-semibold bg-gray-100 hover:bg-gray-200 transition-colors" data-track="contact_explore_services">{{ $cp['explore_services'] }}</a>
                <a href="{{ route('faq') }}" class="inline-flex items-center px-4 py-2 rounded-full text-sm font-semibold bg-gray-100 hover:bg-gray-200 transition-colors" data-track="contact_explore_faq">{{ $cp['explore_faq'] }}</a>
                <a href="{{ route('website_quote') }}" class="inline-flex items-center px-4 py-2 rounded-full text-sm font-semibold bg-gray-100 hover:bg-gray-200 transition-colors" data-track="contact_explore_quote">{{ $cp['explore_quote'] }}</a>
                <a href="{{ route('blog.cheap_labor') }}" class="inline-flex items-center px-4 py-2 rounded-full text-sm font-semibold bg-gray-100 hover:bg-gray-200 transition-colors" data-track="contact_explore_blog">{{ $cp['explore_blog'] }}</a>
                <a href="{{ \App\Support\LocalizedUrls::guide('cuanto_pagina_web') }}" class="inline-flex items-center px-4 py-2 rounded-full text-sm font-semibold bg-gray-100 hover:bg-gray-200 transition-colors" data-track="contact_explore_guides">{{ $cp['explore_guides'] }}</a>
            </div>
        </section>

        {{-- Formulario (ancla #propuesta para el nav) --}}
        <div id="propuesta" class="scroll-mt-28">
            <div class="max-w-5xl mx-auto text-center mt-4 mb-2">
                <h2 class="text-2xl font-bold text-black">{{ $cp['form_section_title'] }}</h2>
                <p class="mt-2 text-gray-600 max-w-xl mx-auto text-sm sm:text-base">{{ $cp['form_section_sub'] }}</p>
            </div>
            @include('partials.lead-qualification-form', [
                'leadSource' => 'contact-page',
                'leadFormSectionId' => 'formulario-contacto',
            ])
        </div>
    </div>
</div>
@endsection
