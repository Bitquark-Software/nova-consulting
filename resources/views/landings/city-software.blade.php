@php
    $c = trans('city_software.' . $city);
    $paths = config('city_landings.paths.' . $city);
    $loc = app()->getLocale();
    $canonical = url($paths[$loc]);
    $htmlLang = $loc === 'en' ? 'en' : 'es-MX';
    $layout = $c['layout'] ?? 'split_hero_coupon';

    $seo_overrides = [
        'title' => $c['seo']['title'],
        'description' => $c['seo']['description'],
        'keywords' => $c['seo']['keywords'],
        'og' => [
            'title' => $c['seo']['og_title'],
            'description' => $c['seo']['og_description'],
            'type' => 'website',
            'url' => $canonical,
            'image' => asset('images/og-default.png'),
        ],
        'hreflang' => [
            'es' => url($paths['es']),
            'en' => url($paths['en']),
        ],
    ];
@endphp
@extends('layouts.marketing')

@section('nav_ga_section', config('city_landings.nav_ga.' . $city))

@push('styles')
<style>
    @keyframes floatSoft { 0%, 100% { transform: translateY(0px); } 50% { transform: translateY(-12px); } }
    @keyframes fadeIn { from { opacity: 0; transform: translateY(12px); } to { opacity: 1; transform: translateY(0); } }
    @keyframes pulseSoft { 0%,100% { opacity: .6; } 50% { opacity: 1; } }
    @keyframes liftIn { from { opacity:0; transform: translateY(14px);} to {opacity:1; transform: translateY(0);} }
    @keyframes glowMove { 0%,100% { transform: translateX(0px); opacity:.6; } 50% { transform: translateX(10px); opacity:1; } }
    @keyframes popIn { from { opacity: 0; transform: scale(.96) translateY(10px); } to { opacity: 1; transform: scale(1) translateY(0); } }
    .fx-float { animation: floatSoft 5s ease-in-out infinite; }
    .fx-fade { animation: fadeIn 0.8s ease-out forwards; }
    .fx-pulse { animation: pulseSoft 4s ease-in-out infinite; }
    .fx-lift { animation: liftIn .8s ease-out forwards; }
    .fx-glow { animation: glowMove 5s ease-in-out infinite; }
    .fx-pop { animation: popIn .7s ease-out forwards; }
</style>
@endpush

@section('content')
<div class="pt-8 md:pt-10 pb-16 overflow-hidden">
    @if($layout === 'cdmx')
        <section class="relative px-4">
            <div class="absolute -top-8 right-8 w-60 h-60 rounded-full bg-gray-300/40 blur-3xl fx-glow"></div>
            <div class="relative max-w-6xl mx-auto">
                <div class="bg-white border border-gray-200 rounded-3xl p-8 md:p-10 shadow-sm">
                    <p class="text-xs uppercase tracking-[0.2em] text-gray-500">{{ $c['badge'] }}</p>
                    <h1 class="mt-3 text-4xl md:text-6xl font-bold leading-tight">{{ $c['h1'] }}</h1>
                    <p class="mt-5 text-lg text-gray-700 max-w-4xl">{{ $c['intro'] }}</p>
                    <div class="mt-7 flex flex-wrap gap-3">
                        <a href="https://wa.me/529611465703" target="_blank" class="px-6 py-3 rounded-md bg-[#2C2C2C] text-white font-semibold">{{ __('city_software.common.whatsapp_contact') }}</a>
                        <a href="tel:+529611465703" class="px-6 py-3 rounded-md border border-[#2C2C2C] font-semibold">{{ __('city_software.common.talk_advisor') }}</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="max-w-6xl mx-auto mt-12 px-4" data-ga-section="promo-cdmx">
            <div class="bg-black text-white rounded-2xl p-8 text-center">
                <p class="text-xs uppercase tracking-[0.2em] text-gray-300">{{ $c['coupon']['kicker'] }}</p>
                <h2 class="mt-3 text-3xl font-bold">{{ $c['coupon']['title'] }}</h2>
                <p class="mt-3 text-gray-300">{{ $c['coupon']['body'] }}</p>
                <div class="mt-6 flex flex-col sm:flex-row items-center justify-center gap-3">
                    <a href="https://wa.me/529611465703" target="_blank" class="px-6 py-3 rounded-md bg-white text-black font-semibold">{{ __('city_software.common.claim_whatsapp') }}</a>
                    <a href="tel:+529611465703" class="px-6 py-3 rounded-md border border-white text-white font-semibold">{{ __('city_software.common.call_now') }}</a>
                </div>
            </div>
        </section>
    @elseif($layout === 'dual_hero')
        <section class="px-4">
            <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8 items-stretch">
                <div class="bg-white border border-gray-200 rounded-3xl p-8 md:p-10 fx-pop">
                    <p class="text-xs uppercase tracking-[0.2em] text-gray-500">{{ $c['badge'] }}</p>
                    <h1 class="mt-3 text-4xl md:text-6xl font-bold leading-tight">{{ $c['h1'] }}</h1>
                    <p class="mt-5 text-lg text-gray-700">{{ $c['intro'] }}</p>
                    <div class="mt-7 flex flex-wrap gap-3">
                        <a href="https://wa.me/529611465703" target="_blank" class="px-6 py-3 rounded-md bg-[#2C2C2C] text-white font-semibold">{{ __('city_software.common.whatsapp_write') }}</a>
                        <a href="tel:+529611465703" class="px-6 py-3 rounded-md border border-[#2C2C2C] font-semibold">{{ __('city_software.common.request_call') }}</a>
                    </div>
                </div>
                <div class="bg-[#2C2C2C] text-white rounded-3xl p-8 md:p-10 fx-pop">
                    <p class="text-xs uppercase tracking-[0.2em] text-gray-300">{{ $c['coupon']['kicker'] }}</p>
                    <h2 class="mt-3 text-3xl font-bold">{{ $c['coupon']['code'] }}</h2>
                    <p class="mt-3 text-gray-300">{{ $c['coupon']['body'] }}</p>
                    @if(!empty($c['coupon']['footnote']))
                        <div class="mt-6 rounded-xl border border-white/20 bg-white/10 p-4">
                            <p class="text-sm text-gray-200">{{ $c['coupon']['footnote'] }}</p>
                        </div>
                    @endif
                </div>
            </div>
        </section>
        @if(!empty($c['pillars']))
            <section class="mt-16 px-4">
                <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-5">
                    @foreach($c['pillars'] as $pillar)
                        <article class="bg-white rounded-2xl p-6 border border-gray-200">
                            <h3 class="font-semibold text-xl">{{ $pillar['title'] }}</h3>
                            <p class="mt-2 text-gray-600">{{ $pillar['body'] }}</p>
                        </article>
                    @endforeach
                </div>
            </section>
        @endif
    @else
        <section class="relative px-4">
            <div class="absolute -top-12 -left-10 w-40 h-40 rounded-full bg-white/70 blur-2xl fx-float"></div>
            <div class="absolute top-24 -right-10 w-52 h-52 rounded-full bg-gray-300/50 blur-3xl fx-float"></div>
            <div class="relative max-w-6xl mx-auto grid md:grid-cols-2 gap-8 items-center">
                <div class="fx-fade fx-lift">
                    <p class="inline-block text-xs uppercase tracking-[0.2em] px-3 py-1 rounded-full bg-white border border-gray-300">{{ $c['badge'] }}</p>
                    <h1 class="mt-4 text-4xl md:text-6xl font-bold leading-tight">{{ $c['h1'] }}</h1>
                    <p class="mt-5 text-gray-700 text-lg">{{ $c['intro'] }}</p>
                    <div class="mt-7 flex flex-wrap gap-3">
                        <a href="https://wa.me/529611465703" target="_blank" class="px-6 py-3 rounded-md bg-[#2C2C2C] text-white font-semibold">{{ __('city_software.common.whatsapp_talk') }}</a>
                        <a href="tel:+529611465703" class="px-6 py-3 rounded-md border border-[#2C2C2C] font-semibold">{{ $c['secondary_cta'] ?? __('city_software.common.call_now') }}</a>
                    </div>
                </div>
                <div class="fx-fade fx-lift">
                    <div class="rounded-3xl bg-[#2C2C2C] text-white p-8 shadow-2xl">
                        <p class="text-xs uppercase tracking-[0.2em] text-gray-300">{{ $c['coupon']['kicker'] }}</p>
                        <h2 class="mt-3 text-3xl font-bold">{{ $c['coupon']['code'] }}</h2>
                        <p class="mt-3 text-gray-300">{{ $c['coupon']['body'] }}</p>
                        @if(!empty($c['coupon']['footnote']))
                            <div class="mt-6 p-4 rounded-xl bg-white/10 border border-white/20">
                                <p class="text-sm text-gray-200">{{ $c['coupon']['footnote'] }}</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        @if(!empty($c['pillars']))
            <section class="mt-16 px-4">
                <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-5">
                    @foreach($c['pillars'] as $pillar)
                        <article class="bg-white rounded-2xl p-6 border border-gray-200 shadow-sm">
                            <h3 class="font-semibold text-xl">{{ $pillar['title'] }}</h3>
                            <p class="mt-2 text-gray-600">{{ $pillar['body'] }}</p>
                        </article>
                    @endforeach
                </div>
            </section>
        @endif
    @endif

    <section class="max-w-5xl mx-auto mt-16 px-4" data-ga-section="faq-{{ $city }}">
        <h2 class="text-3xl font-bold text-center">{{ $c['faq_title'] }}</h2>
        <div class="mt-6 space-y-4">
            @foreach($c['faqs'] as $faq)
                <details class="bg-white p-5 rounded-xl border border-gray-200">
                    <summary class="font-semibold cursor-pointer">{{ $faq['q'] }}</summary>
                    <p class="mt-2 text-gray-700">{{ $faq['a'] }}</p>
                </details>
            @endforeach
        </div>
    </section>

    @include('partials.lead-qualification-form', ['leadSource' => config('city_landings.lead_source.' . $city)])
</div>
@endsection
