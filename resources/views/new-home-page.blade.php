@extends('layouts.marketing')

@section('nav_ga_section', 'nav-home-segmented')

@push('styles')
<link rel="preload" href="/assets/lottie-frames/optimized_hero_2/frames/0310.jpg" as="image" fetchpriority="high">
@endpush

@section('content')
@php
    $services = ['software', 'web', 'ecommerce', 'support', 'remote'];
@endphp

<!-- Custom Cursor -->
<div id="magnetic-cursor" class="fixed top-0 left-0 w-8 h-8 rounded-full border-2 border-black pointer-events-none z-[100] transform -translate-x-1/2 -translate-y-1/2 transition-transform duration-100 ease-out hidden md:block"></div>
<div id="magnetic-cursor-dot" class="fixed top-0 left-0 w-2 h-2 rounded-full bg-black pointer-events-none z-[100] transform -translate-x-1/2 -translate-y-1/2 transition-transform duration-75 ease-out hidden md:block"></div>

<!-- HERO — sticky viewport + scroll-driven h1 sequence -->
<section class="home-hero-scroll-track relative w-full bg-[#FAFAFA]" id="hero-section">
    <div class="sticky top-0 left-0 w-full h-dvh max-h-dvh overflow-hidden isolate">
        <div class="home-lottie-fullbleed pointer-events-none">
            <img
                src="/assets/lottie-frames/optimized_hero_2/frames/0310.jpg"
                alt=""
                class="absolute inset-0 h-full w-full object-cover"
                width="1920"
                height="1080"
                fetchpriority="high"
                decoding="async"
            >
        </div>

        <div
            class="hero-copy-stack absolute top-[4.25rem] max-lg:top-[calc(3.5rem+env(safe-area-inset-top))] sm:top-[22%] left-4 sm:left-10 md:left-12 right-4 sm:right-10 md:right-12 z-10 max-w-4xl"
            aria-live="polite"
        >
            @foreach(__('home_services.hero.sequence') as $line)
                <h1
                    class="hero-line hero-line--{{ $line['variant'] ?? 'service' }} text-balance"
                    data-scroll-weight="{{ $line['weight'] ?? 1 }}"
                >
                    {{ $line['text'] }}
                </h1>
            @endforeach
        </div>
    </div>
</section>

<!-- Top customers — trust strip between hero and services (scroll-driven marquee) -->
@php
    $topCustomers = __('home_services.customers_banner.names');
@endphp
<section
    id="customers-banner"
    class="customers-banner relative w-full overflow-hidden bg-[#FAFAFA] text-black py-10 sm:py-14 border-y border-gray-100"
    aria-labelledby="customers-banner-title"
>
    <div class="customers-banner__inner relative z-10 max-w-6xl mx-auto px-4 sm:px-6">
        <p id="customers-banner-title" class="customers-banner__kicker text-center text-[0.65rem] sm:text-xs font-bold uppercase tracking-[0.2em] sm:tracking-[0.28em] text-gray-500">
            {{ __('home_services.customers_banner.kicker') }}
        </p>
    </div>

    <div class="customers-marquee customers-marquee--primary mt-6 sm:mt-8" aria-hidden="true">
        <div class="customers-marquee__track">
            @foreach (array_merge($topCustomers, $topCustomers) as $name)
                <span class="customers-marquee__item">
                    <span class="customers-marquee__name">{{ $name }}</span>
                    <span class="customers-marquee__sep" aria-hidden="true">•</span>
                </span>
            @endforeach
        </div>
    </div>

    <div class="customers-marquee customers-marquee--secondary mt-4 sm:mt-5" aria-hidden="true">
        <div class="customers-marquee__track">
            @foreach (array_merge(array_reverse($topCustomers), array_reverse($topCustomers)) as $name)
                <span class="customers-marquee__item">
                    <span class="customers-marquee__name customers-marquee__name--muted">{{ $name }}</span>
                    <span class="customers-marquee__sep" aria-hidden="true">•</span>
                </span>
            @endforeach
        </div>
    </div>
</section>

<!-- SERVICES SECTIONS -->
@foreach ($services as $index => $service)
    @php
        $quoteUrl = url('/cotizador-sitio-web?service=' . $service);
        $waUrl = 'https://wa.me/529612010951?text=' . urlencode(__('home_services.selector.' . $service) . ' - ' . __('home_services.common.primary_cta'));
        
        // Use consistent clean background for all services
        $bgClass = 'bg-white text-black';
        $titleColor = 'text-black';
        $textColor = 'text-gray-600';
        $btnPrimary = 'bg-black text-white';
        $btnSecondary = 'border-black text-black hover:bg-black hover:text-white';
    @endphp

    <section class="service-section relative w-full border-b border-gray-100 last:border-0 {{ $bgClass }} @if($service === 'software') home-lottie-scroll-track py-0 @elseif($service === 'web') h-dvh max-h-dvh overflow-hidden isolate py-0 @else py-14 sm:py-24 @endif" id="service-{{ $service }}">
        @if($service === 'web')
        <div class="home-lottie-fullbleed pointer-events-none">
            <img
                src="/assets/lottie-frames/web_hero/frames/0268.jpg"
                alt=""
                class="absolute inset-0 h-full w-full object-cover"
                width="1920"
                height="1080"
                loading="lazy"
                decoding="async"
            >
        </div>
        @endif
        @if($service === 'software')
        <div class="sticky top-0 left-0 w-full h-dvh max-h-dvh overflow-hidden isolate">
            <div class="home-lottie-fullbleed pointer-events-none">
                <div id="lottie-software-hero" class="w-full h-full lottie-scroll-pending"></div>
            </div>
            <div class="relative z-10 w-full h-dvh flex max-lg:items-start max-lg:pt-[calc(3.5rem+env(safe-area-inset-top))] max-lg:pb-[calc(4.5rem+env(safe-area-inset-bottom))] items-center overflow-hidden px-4 sm:px-6 lg:px-16">
        @elseif($service === 'web')
            <div class="relative z-10 w-full h-dvh flex max-lg:items-start max-lg:pt-[calc(3.5rem+env(safe-area-inset-top))] max-lg:pb-[calc(4.5rem+env(safe-area-inset-bottom))] items-center overflow-hidden px-4 sm:px-6 lg:px-16">
        @else
            <div class="w-full flex items-center overflow-hidden px-4 sm:px-6 lg:px-16 relative z-10">
        @endif
            <div class="max-w-6xl mx-auto w-full grid grid-cols-1 lg:grid-cols-2 gap-8 sm:gap-12 lg:gap-24 items-center">
                
                <!-- Text Content -->
                <div class="service-content flex flex-col {{ $index % 2 === 0 ? 'lg:order-1' : 'lg:order-2' }}">
                    @php
                        $isLottieService = $service === 'software';
                        $isStaticHeroService = $service === 'web';
                        $hideServiceContent = $service === 'software';
                        $mobileTitleClass = $isLottieService || $isStaticHeroService
                            ? 'text-[1.4rem] leading-[1.15]'
                            : 'text-[1.65rem] leading-[1.2]';
                        $mobileSubtitleClass = ($isLottieService || $isStaticHeroService)
                            ? 'text-sm leading-snug'
                            : 'text-[0.9375rem] leading-relaxed';
                        $mobileFeatureTitleClass = ($isLottieService || $isStaticHeroService) ? 'text-sm' : 'text-[0.9375rem]';
                        $mobileFeatureBodyClass = ($isLottieService || $isStaticHeroService) ? 'text-[0.6875rem]' : 'text-xs';
                    @endphp
                    <p class="service-kicker text-[0.65rem] sm:text-sm uppercase tracking-[0.12em] sm:tracking-[0.2em] font-bold {{ $hideServiceContent ? 'opacity-0' : '' }} text-gray-500 mb-2 sm:mb-4">
                        {{ __("home_services.$service.kicker") }}
                    </p>
                    <h2 class="service-title {{ $mobileTitleClass }} sm:text-4xl sm:leading-tight md:text-5xl lg:text-6xl font-bold text-balance {{ $hideServiceContent ? 'opacity-0' : '' }} {{ $titleColor }}">
                        {{ __("home_services.$service.title") }}
                    </h2>
                    <p class="service-subtitle mt-3 sm:mt-6 {{ $mobileSubtitleClass }} sm:text-lg md:text-xl {{ $hideServiceContent ? 'opacity-0' : '' }} {{ $textColor }}">
                        {{ __("home_services.$service.subtitle") }}
                    </p>

                    <div class="service-features mt-5 sm:mt-10 grid gap-3 sm:gap-6 {{ $hideServiceContent ? 'opacity-0' : '' }}">
                        @foreach (array_slice(__('home_services.' . $service . '.sections'), 0, 2) as $item)
                            <div class="border-l-2 border-gray-300 pl-4">
                                <h3 class="font-bold {{ $mobileFeatureTitleClass }} sm:text-lg leading-snug {{ $titleColor }}">{{ $item['title'] }}</h3>
                                <p class="{{ $mobileFeatureBodyClass }} sm:text-sm mt-1 leading-relaxed {{ $textColor }}">{{ $item['body'] }}</p>
                            </div>
                        @endforeach
                    </div>
                    
                    <div class="service-cta mt-6 sm:mt-12 flex flex-wrap gap-2.5 sm:gap-4 {{ $hideServiceContent ? 'opacity-0' : '' }}">
                        <a href="{{ $quoteUrl }}" class="magnetic-btn px-8 py-4 rounded-full text-xs sm:text-base font-semibold transition-transform {{ $btnPrimary }}">
                            {{ __('home_services.common.primary_cta') }}
                        </a>
                        <a target="_blank" href="{{ $waUrl }}" class="magnetic-btn px-8 py-4 rounded-full border text-xs sm:text-base font-semibold transition-all {{ $btnSecondary }}">
                            {{ __('home_services.common.secondary_cta') }}
                        </a>
                    </div>
                </div>

                <!-- Visual Content (Parallax/Sticky mix) -->
                <div class="service-visual relative min-h-[260px] sm:min-h-[400px] w-full rounded-2xl sm:rounded-3xl overflow-hidden {{ $index % 2 === 0 ? 'lg:order-2' : 'lg:order-1' }} bg-gray-50 border border-gray-200 flex items-center justify-center p-4 sm:p-8">
                    <!-- Abstract representation per service -->
                    <div class="visual-element w-full h-full flex items-center justify-center relative z-10">
                        @if($service === 'software')
                            <!-- Code Editor Mockup -->
                            <div class="relative w-full max-w-sm rounded-xl border border-gray-800 bg-[#1e1e1e] shadow-2xl overflow-hidden software-mockup">
                                <!-- Top Bar -->
                                <div class="flex items-center px-4 py-2 bg-[#2d2d2d] border-b border-gray-800">
                                    <div class="flex gap-2">
                                        <div class="w-3 h-3 rounded-full bg-red-500"></div>
                                        <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                                        <div class="w-3 h-3 rounded-full bg-green-500"></div>
                                    </div>
                                    <div class="mx-auto text-xs text-gray-400 font-mono">App.js</div>
                                </div>
                                <!-- Code Content -->
                                <div class="p-4 font-mono text-[0.65rem] sm:text-sm leading-relaxed text-gray-300 overflow-hidden">
                                    <div class="flex"><span class="text-purple-400 mr-2">import</span> { useState, useEffect } <span class="text-purple-400 mx-2">from</span> <span class="text-green-400">'react'</span>;</div>
                                    <div class="flex mt-2"><span class="text-purple-400 mr-2">export default function</span> <span class="text-yellow-300">NovaApp</span>() {</div>
                                    <div class="flex ml-4 mt-1"><span class="text-blue-400 mr-2">const</span> [system, setSystem] = <span class="text-yellow-300">useState</span>(<span class="text-green-400">'optimized'</span>);</div>
                                    <div class="flex ml-4 mt-2"><span class="text-purple-400 mr-2">return</span> (</div>
                                    <div class="flex ml-8 mt-1"><span class="text-gray-400">&lt;</span><span class="text-red-400">Dashboard</span> <span class="text-blue-300">status</span><span class="text-gray-400">=</span><span class="text-blue-400">{</span>system<span class="text-blue-400">}</span><span class="text-gray-400">&gt;</span></div>
                                    <div class="flex ml-12 mt-1"><span class="text-gray-400">&lt;</span><span class="text-red-400">Analytics</span> <span class="text-gray-400">/&gt;</span></div>
                                    <div class="flex ml-8 mt-1"><span class="text-gray-400">&lt;/</span><span class="text-red-400">Dashboard</span><span class="text-gray-400">&gt;</span></div>
                                    <div class="flex ml-4 mt-1">);</div>
                                    <div class="flex mt-1">}</div>
                                </div>
                            </div>
                        @elseif($service === 'web')
                            <!-- Browser Web Mockup -->
                            <div class="relative w-full max-w-md bg-white rounded-xl border border-gray-200 shadow-2xl overflow-hidden web-mockup">
                                <div class="w-full h-10 bg-gray-100 flex items-center px-4 gap-2 border-b border-gray-200">
                                    <div class="w-3 h-3 rounded-full bg-red-400"></div>
                                    <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                                    <div class="w-3 h-3 rounded-full bg-green-400"></div>
                                    <div class="ml-4 w-1/2 h-5 bg-white rounded-md border border-gray-200"></div>
                                </div>
                                <div class="p-0">
                                    <div class="w-full h-32 bg-gradient-to-r from-blue-500 to-indigo-600 flex flex-col items-center justify-center p-4">
                                        <div class="w-3/4 h-6 bg-white/20 rounded mb-2"></div>
                                        <div class="w-1/2 h-4 bg-white/10 rounded"></div>
                                        <div class="mt-4 px-4 py-1.5 bg-white text-blue-600 text-xs font-bold rounded-full">Call to Action</div>
                                    </div>
                                    <div class="p-4 grid grid-cols-3 gap-3">
                                        <div class="h-20 bg-gray-100 rounded-lg flex flex-col items-center justify-center p-2"><div class="w-8 h-8 rounded-full bg-blue-100 mb-2"></div><div class="w-full h-2 bg-gray-200 rounded"></div></div>
                                        <div class="h-20 bg-gray-100 rounded-lg flex flex-col items-center justify-center p-2"><div class="w-8 h-8 rounded-full bg-green-100 mb-2"></div><div class="w-full h-2 bg-gray-200 rounded"></div></div>
                                        <div class="h-20 bg-gray-100 rounded-lg flex flex-col items-center justify-center p-2"><div class="w-8 h-8 rounded-full bg-purple-100 mb-2"></div><div class="w-full h-2 bg-gray-200 rounded"></div></div>
                                    </div>
                                </div>
                            </div>
                        @elseif($service === 'ecommerce')
                            <!-- Ecommerce Product Card -->
                            <div class="relative w-64 bg-white rounded-2xl border border-gray-200 shadow-2xl p-4 ecommerce-mockup group">
                                <div class="w-full h-40 bg-gray-100 rounded-xl mb-4 relative overflow-hidden flex items-center justify-center">
                                    <!-- Laptop SVG representing product -->
                                    <svg class="w-24 h-24 text-gray-400 group-hover:scale-110 transition-transform duration-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    <div class="absolute top-2 right-2 bg-black text-white text-[10px] font-bold px-2 py-1 rounded">PROMO</div>
                                </div>
                                <h4 class="font-bold text-sm sm:text-base text-gray-900">Laptop Pro M3</h4>
                                <p class="text-[0.65rem] sm:text-xs text-gray-500 mt-1">Computadora de alto rendimiento</p>
                                <div class="mt-3 flex items-center justify-between">
                                    <span class="font-bold text-base sm:text-lg text-black">$24,999</span>
                                    <div class="flex gap-1">
                                        <span class="w-2 h-2 rounded-full bg-gray-300"></span>
                                        <span class="w-2 h-2 rounded-full bg-gray-800"></span>
                                    </div>
                                </div>
                                <button class="mt-4 w-full bg-black text-white py-2.5 rounded-lg text-xs sm:text-sm font-semibold hover:bg-gray-800 transition-colors flex items-center justify-center gap-2">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                                    Agregar al carrito
                                </button>
                            </div>
                        @elseif($service === 'support')
                            <!-- IT Support: Broken PC & Wrench -->
                            <div class="relative w-72 h-72 flex items-center justify-center support-mockup">
                                <!-- Broken Monitor -->
                                <div class="absolute inset-0 m-auto w-48 h-40 bg-gray-100 border-4 border-gray-800 rounded-xl flex items-center justify-center shadow-xl">
                                    <!-- Crack Lines -->
                                    <svg class="absolute w-full h-full text-gray-400 opacity-60" fill="none" viewBox="0 0 100 100" preserveAspectRatio="none">
                                        <path d="M 20 0 L 35 40 L 10 60 L 50 100" stroke="currentColor" stroke-width="2" fill="none" />
                                        <path d="M 35 40 L 60 30 L 70 70" stroke="currentColor" stroke-width="1.5" fill="none" />
                                    </svg>
                                    <!-- Glitch screen effect -->
                                    <div class="w-3/4 h-2 bg-blue-500/20 absolute top-4 left-4 animate-pulse"></div>
                                    <div class="w-1/2 h-4 bg-red-500/20 absolute bottom-10 right-8 animate-pulse"></div>
                                </div>
                                <!-- Stand -->
                                <div class="absolute bottom-6 w-16 h-8 bg-gray-800 rounded-t-lg"></div>
                                <div class="absolute bottom-4 w-32 h-2 bg-gray-800 rounded-full"></div>
                                
                                <!-- Floating Wrench -->
                                <div class="absolute -right-4 -top-4 w-20 h-20 bg-white rounded-full shadow-2xl flex items-center justify-center border border-gray-100 animate-[bounce_4s_infinite]">
                                    <svg class="w-10 h-10 text-black transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                            </div>
                        @else
                            <!-- Remote Support: Hand interacting with computer -->
                            <div class="relative w-80 h-64 flex items-center justify-center">
                                <div class="remote-mockup relative w-full h-full flex items-center justify-center">
                                    <!-- Clean Laptop -->
                                    <div class="absolute bottom-8 w-56 h-36 bg-gray-100 border-[6px] border-gray-800 rounded-t-xl flex flex-col shadow-lg">
                                        <div class="flex-1 bg-white flex items-center justify-center">
                                            <div class="w-16 h-16 rounded-full bg-blue-50 border-4 border-blue-100 flex items-center justify-center">
                                                <svg class="w-8 h-8 text-blue-500 animate-pulse" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                            </div>
                                        </div>
                                        <div class="h-4 bg-gray-800 w-[120%] -ml-[10%] rounded-b-xl"></div>
                                    </div>
                                </div>

                                <!-- Pointer hand (outside mockup so GSAP scale does not distort it) -->
                                <div class="remote-hand pointer-events-none absolute top-2 right-6 w-20 h-20" aria-hidden="true">
                                    <svg viewBox="0 0 72 72" class="w-full h-full drop-shadow-2xl">
                                        <path
                                            fill="#ffffff"
                                            stroke="#171717"
                                            stroke-width="2.5"
                                            stroke-linejoin="round"
                                            stroke-linecap="round"
                                            d="M36 10c-3.3 0-6 2.7-6 6v18.2l-8.1-7.3c-4-3.6-10.4-1-10.4 4.6 0 1.6.5 3.1 1.3 4.4l19.5 27.5c3 4.2 7.8 6.9 13.1 6.9h11.4c8.2 0 14.8-6.6 14.8-14.8V38.4c0-3.7-3-6.7-6.7-6.7s-6.7 3-6.7 6.7v-2.7c0-3.7-3-6.7-6.7-6.7s-6.7 3-6.7 6.7V35c0-3.7-3-6.7-6.7-6.7s-6.7 3-6.7 6.7v16.4l-1.9-1.6c-2.4-2-6-.4-6 2.4v.4l.5.7c.9 1.2 2.2 1.9 3.6 1.9h2.1V16c0-3.3-2.7-6-6-6z"
                                        />
                                    </svg>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @if($service === 'software')
        </div>
        @endif
    </section>
@endforeach

<div class="bg-gray-50 py-20 px-4">
    @include('partials.lead-qualification-form', ['leadSource' => 'home'])
</div>

<style>
    /* Sticky scroll tracks require visible overflow on <main> */
    main:has(#hero-section) {
        overflow: visible;
    }

    @keyframes slideDown {
        0% { transform: translateY(-100%); }
        100% { transform: translateY(200%); }
    }
    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-15px); }
    }

    .remote-hand {
        animation: float 3s ease-in-out infinite;
        will-change: transform;
    }
    
    body {
        cursor: none; /* Hide default cursor for custom magnetic one */
    }

    /* Magnetic Cursor States */
    #magnetic-cursor.active {
        transform: translate(-50%, -50%) scale(1.5);
        background-color: rgba(0,0,0,0.1);
        border-color: transparent;
    }
    .magnetic-btn {
        display: inline-block;
    }

    /* Scroll track: 100vh sticky stage + extra scroll distance for Lottie scrub */
    .home-lottie-scroll-track {
        height: calc(100dvh + 2500px);
    }

    /* Hero text sequence — sticky until last h1 animation completes */
    .home-hero-scroll-track {
        height: calc(100dvh + var(--hero-scroll-extra, 5200px));
    }

    .hero-copy-stack {
        min-height: 3.5em;
    }

    .hero-line {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        margin: 0;
        opacity: 0;
        visibility: hidden;
        will-change: transform, opacity;
    }

    .hero-line--brand {
        font-size: clamp(1.75rem, 5vw, 3.75rem);
        font-weight: 800;
        letter-spacing: -0.03em;
        color: #000;
    }

    .hero-line--title {
        font-size: clamp(1.5rem, 4.2vw, 3.25rem);
        font-weight: 800;
        letter-spacing: -0.025em;
        line-height: 1.08;
        color: #000;
    }

    .hero-line--lead {
        font-size: clamp(1.25rem, 3.2vw, 2.5rem);
        font-weight: 700;
        letter-spacing: -0.02em;
        line-height: 1.15;
        color: rgb(0 0 0 / 0.88);
    }

    .hero-line--service {
        font-size: clamp(1.35rem, 3.8vw, 2.85rem);
        font-weight: 800;
        letter-spacing: -0.03em;
        color: #000;
    }

    .hero-line--cta {
        font-size: clamp(1rem, 2.4vw, 1.65rem);
        font-weight: 600;
        letter-spacing: -0.01em;
        color: rgb(0 0 0 / 0.55);
    }

    .hero-line.is-active {
        visibility: visible;
    }

    @media (prefers-reduced-motion: reduce) {
        .hero-line {
            will-change: auto;
        }
    }

    /* Full viewport bleed (avoid 100vw — it includes scrollbar width and causes horizontal overflow) */
    .home-lottie-fullbleed {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100dvh;
        z-index: 0;
        overflow: hidden;
    }

    #lottie-software-hero {
        width: 100%;
        height: 100%;
        transform: translateZ(0);
        backface-visibility: hidden;
    }
    #lottie-software-hero canvas,
    .scroll-frame-canvas {
        width: 100% !important;
        height: 100% !important;
        display: block;
    }

    .lottie-scroll-pending {
        opacity: 0;
        transition: opacity 0.35s ease;
    }
    .lottie-scroll-ready {
        opacity: 1;
        position: relative;
        z-index: 2;
    }

    .customers-banner {
        isolation: isolate;
    }

    .customers-marquee {
        overflow: hidden;
        -webkit-mask-image: linear-gradient(90deg, transparent, #000 8%, #000 92%, transparent);
        mask-image: linear-gradient(90deg, transparent, #000 8%, #000 92%, transparent);
    }

    .customers-marquee__track {
        display: flex;
        width: max-content;
        will-change: transform;
    }

    .customers-marquee__item {
        display: inline-flex;
        align-items: center;
        flex-shrink: 0;
        padding-right: 2.5rem;
    }

    @media (min-width: 640px) {
        .customers-marquee__item {
            padding-right: 4rem;
        }
    }

    .customers-marquee__name {
        font-size: clamp(1.35rem, 4.5vw, 2.75rem);
        font-weight: 800;
        letter-spacing: -0.03em;
        line-height: 1;
        white-space: nowrap;
        color: rgb(0 0 0 / 0.88);
    }

    .customers-marquee__name--muted {
        color: rgb(0 0 0 / 0.22);
    }

    .customers-marquee__sep {
        margin-left: 2.5rem;
        font-size: clamp(1rem, 3vw, 1.75rem);
        color: rgb(0 0 0 / 0.12);
        user-select: none;
    }

    @media (min-width: 640px) {
        .customers-marquee__sep {
            margin-left: 4rem;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .customers-marquee__track {
            will-change: auto;
        }
    }
</style>

@vite(['resources/js/homeScrollHero.js'])
@endsection
