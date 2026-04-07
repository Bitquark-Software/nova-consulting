@php
    $ap = trans('messages.about_page');
    $canonical = url('/about');
    $htmlLang = app()->getLocale() === 'en' ? 'en' : 'es-MX';
    $seo_overrides = [
        'title' => __('seo.about.title'),
        'description' => __('seo.about.description'),
        'keywords' => __('seo.about.keywords'),
        'og' => [
            'title' => __('seo.about.title'),
            'description' => __('seo.about.description'),
            'type' => 'website',
            'url' => $canonical,
            'image' => asset('images/preview.png'),
        ],
    ];
@endphp
@extends('layouts.marketing')

@section('nav_ga_section', 'nav-about')

@section('content')
<div class="relative pt-28 sm:pt-32 pb-20 px-4 sm:px-6 overflow-hidden">
    <div class="pointer-events-none absolute -top-24 right-0 w-[min(28rem,90vw)] h-[min(28rem,90vw)] rounded-full bg-white/80 blur-3xl"></div>
    <div class="pointer-events-none absolute top-40 -left-20 w-72 h-72 rounded-full bg-gray-300/40 blur-3xl"></div>

    <div class="relative max-w-6xl mx-auto">
        {{-- Hero --}}
        <header class="text-center max-w-3xl mx-auto">
            <span class="inline-flex items-center gap-2 text-xs font-semibold uppercase tracking-[0.18em] text-gray-600 px-3 py-1.5 rounded-full border border-gray-200 bg-white/90 shadow-sm">
                <span class="w-2 h-2 rounded-full bg-black animate-pulse"></span>
                {{ $ap['badge'] }}
            </span>
            <h1 class="mt-6 text-4xl sm:text-5xl md:text-6xl font-bold tracking-tight text-black leading-[1.08]">
                {{ $ap['title'] }}
            </h1>
            <p class="mt-5 text-lg sm:text-xl text-gray-600 leading-relaxed font-light">
                {{ $ap['subtitle'] }}
            </p>
            <div class="mt-10 flex flex-col sm:flex-row flex-wrap items-center justify-center gap-3">
                <a
                    href="{{ route('contact') }}"
                    class="inline-flex justify-center items-center w-full sm:w-auto min-w-[12rem] px-8 py-3.5 rounded-full bg-black text-white font-semibold shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all"
                    data-track="about_cta_contact"
                >
                    {{ $ap['cta_contact'] }}
                </a>
                <a
                    href="{{ route('website_quote') }}"
                    class="inline-flex justify-center items-center w-full sm:w-auto min-w-[12rem] px-8 py-3.5 rounded-full border-2 border-[#2C2C2C] font-semibold hover:bg-gray-50 transition-all"
                    data-track="about_cta_quote"
                >
                    {{ $ap['cta_quote'] }}
                </a>
                <a
                    href="{{ route('services') }}"
                    class="inline-flex justify-center items-center w-full sm:w-auto min-w-[12rem] px-8 py-3.5 rounded-full bg-gray-100 text-black font-semibold hover:bg-gray-200 transition-all"
                    data-track="about_cta_services"
                >
                    {{ $ap['cta_services'] }}
                </a>
            </div>
        </header>

        {{-- Historia --}}
        <section class="mt-16 lg:mt-20 rounded-2xl border border-gray-200 bg-white p-8 sm:p-10 lg:p-12 shadow-sm" aria-labelledby="about-story-title">
            <h2 id="about-story-title" class="text-2xl sm:text-3xl font-bold text-black">
                {{ $ap['story_title'] }}
            </h2>
            <div class="mt-6 grid lg:grid-cols-2 gap-8 text-gray-600 leading-relaxed">
                <p>{{ $ap['story_p1'] }}</p>
                <p>{{ $ap['story_p2'] }}</p>
            </div>
        </section>

        {{-- Misión y visión --}}
        <div class="mt-8 grid md:grid-cols-2 gap-6">
            <div class="rounded-2xl border border-gray-200 bg-gradient-to-br from-gray-50 to-white p-8 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-black text-white">
                    <x-ri-flag-line class="w-5 h-5" />
                </div>
                <h2 class="mt-5 text-xl font-bold text-black">{{ $ap['mission_title'] }}</h2>
                <p class="mt-3 text-gray-600 leading-relaxed">{{ $ap['mission_text'] }}</p>
            </div>
            <div class="rounded-2xl border border-gray-200 bg-gradient-to-br from-gray-50 to-white p-8 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-black text-white">
                    <x-ri-eye-line class="w-5 h-5" />
                </div>
                <h2 class="mt-5 text-xl font-bold text-black">{{ $ap['vision_title'] }}</h2>
                <p class="mt-3 text-gray-600 leading-relaxed">{{ $ap['vision_text'] }}</p>
            </div>
        </div>

        {{-- Valores --}}
        <section class="mt-16 lg:mt-20" aria-labelledby="about-values-title">
            <h2 id="about-values-title" class="text-2xl sm:text-3xl font-bold text-black text-center max-w-2xl mx-auto">
                {{ $ap['values_title'] }}
            </h2>
            <div class="mt-10 grid sm:grid-cols-2 gap-4">
                @foreach ([
                    ['t' => $ap['value_1_title'], 'b' => $ap['value_1_text'], 'icon' => 'ri-lightbulb-flash-line'],
                    ['t' => $ap['value_2_title'], 'b' => $ap['value_2_text'], 'icon' => 'ri-code-s-slash-line'],
                    ['t' => $ap['value_3_title'], 'b' => $ap['value_3_text'], 'icon' => 'ri-chat-3-line'],
                    ['t' => $ap['value_4_title'], 'b' => $ap['value_4_text'], 'icon' => 'ri-line-chart-line'],
                ] as $v)
                    <div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm hover:border-gray-300 transition-colors">
                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-gray-100 text-black">
                            @if ($v['icon'] === 'ri-lightbulb-flash-line')
                                <x-ri-lightbulb-flash-line class="w-5 h-5" />
                            @elseif ($v['icon'] === 'ri-code-s-slash-line')
                                <x-ri-code-s-slash-line class="w-5 h-5" />
                            @elseif ($v['icon'] === 'ri-chat-3-line')
                                <x-ri-chat-3-line class="w-5 h-5" />
                            @else
                                <x-ri-line-chart-line class="w-5 h-5" />
                            @endif
                        </div>
                        <h3 class="mt-4 text-lg font-bold text-black">{{ $v['t'] }}</h3>
                        <p class="mt-2 text-sm text-gray-600 leading-relaxed">{{ $v['b'] }}</p>
                    </div>
                @endforeach
            </div>
        </section>

        {{-- Cómo colaboramos --}}
        <section class="mt-16 lg:mt-20" aria-labelledby="about-how-title">
            <h2 id="about-how-title" class="text-2xl sm:text-3xl font-bold text-black text-center max-w-2xl mx-auto">
                {{ $ap['how_title'] }}
            </h2>
            <div class="mt-10 grid md:grid-cols-3 gap-4">
                @foreach ([
                    ['t' => $ap['how_1_title'], 'b' => $ap['how_1_text'], 'n' => '1'],
                    ['t' => $ap['how_2_title'], 'b' => $ap['how_2_text'], 'n' => '2'],
                    ['t' => $ap['how_3_title'], 'b' => $ap['how_3_text'], 'n' => '3'],
                ] as $step)
                    <div class="relative rounded-2xl border border-gray-200 bg-white p-6 pt-10 shadow-sm hover:shadow-md transition-shadow">
                        <span class="absolute top-4 right-4 text-4xl font-bold text-gray-100 select-none" aria-hidden="true">{{ $step['n'] }}</span>
                        <h3 class="text-lg font-bold text-black relative">{{ $step['t'] }}</h3>
                        <p class="mt-2 text-sm text-gray-600 leading-relaxed relative">{{ $step['b'] }}</p>
                    </div>
                @endforeach
            </div>
        </section>

        {{-- Stats --}}
        <section class="mt-16 lg:mt-20 rounded-2xl border border-gray-800 bg-gradient-to-br from-[#2C2C2C] to-gray-900 text-white p-8 sm:p-10 shadow-xl" aria-labelledby="about-stats-title">
            <h2 id="about-stats-title" class="text-lg font-bold text-center text-white/95">
                {{ $ap['stats_title'] }}
            </h2>
            <div class="mt-8 grid sm:grid-cols-3 gap-8 text-center">
                <div>
                    <div class="text-4xl sm:text-5xl font-bold tracking-tight">{{ $ap['stat_1_val'] }}</div>
                    <p class="mt-2 text-sm text-gray-300">{{ $ap['stat_1_label'] }}</p>
                </div>
                <div>
                    <div class="text-4xl sm:text-5xl font-bold tracking-tight">{{ $ap['stat_2_val'] }}</div>
                    <p class="mt-2 text-sm text-gray-300">{{ $ap['stat_2_label'] }}</p>
                </div>
                <div>
                    <div class="text-4xl sm:text-5xl font-bold tracking-tight">{{ $ap['stat_3_val'] }}</div>
                    <p class="mt-2 text-sm text-gray-300">{{ $ap['stat_3_label'] }}</p>
                </div>
            </div>
        </section>

        {{-- CTA --}}
        <section class="mt-16 lg:mt-20 rounded-2xl bg-black text-white px-8 py-12 sm:px-12 sm:py-14 text-center shadow-xl" aria-labelledby="about-cta-title">
            <h2 id="about-cta-title" class="text-2xl sm:text-3xl font-bold">{{ $ap['cta_title'] }}</h2>
            <p class="mt-4 text-gray-300 max-w-xl mx-auto leading-relaxed">{{ $ap['cta_sub'] }}</p>
            <div class="mt-8 flex flex-col sm:flex-row flex-wrap items-center justify-center gap-3">
                <a href="{{ route('contact') }}" class="inline-flex justify-center items-center w-full sm:w-auto min-w-[11rem] px-7 py-3.5 rounded-full bg-white text-black font-semibold hover:bg-gray-100 transition-colors" data-track="about_footer_contact">
                    {{ $ap['cta_contact'] }}
                </a>
                <a href="{{ route('hiring_services') }}" class="inline-flex justify-center items-center w-full sm:w-auto min-w-[11rem] px-7 py-3.5 rounded-full border-2 border-white/40 font-semibold hover:bg-white/10 transition-colors" data-track="about_footer_hiring">
                    {{ $ap['cta_hiring'] }}
                </a>
            </div>
        </section>

        {{-- Enlaces útiles --}}
        <section class="mt-12 rounded-2xl border border-gray-200 bg-white p-8 sm:p-10 shadow-sm" aria-label="{{ $ap['explore_title'] }}">
            <h2 class="text-lg font-bold text-black">{{ $ap['explore_title'] }}</h2>
            <div class="mt-6 flex flex-wrap gap-3">
                <a href="{{ route('services') }}" class="inline-flex items-center px-4 py-2 rounded-full text-sm font-semibold bg-gray-100 hover:bg-gray-200 transition-colors" data-track="about_explore_services">{{ $ap['cta_services'] }}</a>
                <a href="{{ route('faq') }}" class="inline-flex items-center px-4 py-2 rounded-full text-sm font-semibold bg-gray-100 hover:bg-gray-200 transition-colors" data-track="about_explore_faq">{{ $ap['link_faq'] }}</a>
                <a href="{{ \App\Support\LocalizedUrls::guide('cuanto_pagina_web') }}" class="inline-flex items-center px-4 py-2 rounded-full text-sm font-semibold bg-gray-100 hover:bg-gray-200 transition-colors" data-track="about_explore_guides">{{ $ap['link_guides'] }}</a>
                <a href="{{ route('website_quote') }}" class="inline-flex items-center px-4 py-2 rounded-full text-sm font-semibold bg-gray-100 hover:bg-gray-200 transition-colors" data-track="about_explore_quote">{{ $ap['cta_quote'] }}</a>
            </div>
        </section>
    </div>
</div>
@endsection
