@extends('layouts.marketing')

@section('nav_ga_section', 'nav-home-segmented')

@section('content')
@php
    $services = ['software', 'web', 'ecommerce', 'support', 'remote'];
@endphp

<!-- Custom Cursor -->
<div id="magnetic-cursor" class="fixed top-0 left-0 w-8 h-8 rounded-full border-2 border-black pointer-events-none z-[100] transform -translate-x-1/2 -translate-y-1/2 transition-transform duration-100 ease-out hidden md:block"></div>
<div id="magnetic-cursor-dot" class="fixed top-0 left-0 w-2 h-2 rounded-full bg-black pointer-events-none z-[100] transform -translate-x-1/2 -translate-y-1/2 transition-transform duration-75 ease-out hidden md:block"></div>

<!-- HERO 200VH: Scroll Reveal Narrative -->
<section class="relative h-[110vh] w-full bg-[#FAFAFA]" id="hero-scroll-container">
    <div class="sticky top-0 h-screen w-full flex items-center justify-center overflow-hidden px-6">
        
        <div class="relative w-full max-w-5xl h-auto min-h-[300px] flex items-center justify-center">
            
            <!-- STEP 1: Title -->
            <div id="hero-step-1" class="absolute w-full flex flex-col items-center text-center">
                <p class="text-sm md:text-base font-bold tracking-[0.25em] uppercase text-gray-500 mb-6">
                    {{ __('home_services.hero.kicker') }}
                </p>
                <h1 class="text-5xl md:text-7xl font-extrabold text-black tracking-tight leading-tight">
                    {{ __('home_services.hero.title') }}
                </h1>
            </div>

            <!-- STEP 2: Subtitle -->
            <div id="hero-step-2" class="absolute w-full flex flex-col items-center text-center opacity-0 translate-y-24 pointer-events-none">
                <p class="text-2xl md:text-4xl font-bold text-black tracking-tight leading-relaxed max-w-4xl">
                    {{ __('home_services.hero.subtitle') }}
                </p>
            </div>

            <!-- STEP 3: Description -->
            <div id="hero-step-3" class="absolute w-full flex flex-col items-center text-center opacity-0 translate-y-24 pointer-events-none">
                <p class="text-xl md:text-2xl text-gray-600 leading-relaxed max-w-3xl">
                    {{ __('home_services.hero.description') }}
                </p>
            </div>

        </div>

        <div id="hero-particles" class="absolute inset-0 pointer-events-none w-full h-full flex items-center justify-center opacity-100">
            <!-- Code Particles -->
            <div class="absolute top-[20%] left-[15%] text-2xl font-mono text-gray-300 font-bold opacity-60" style="animation: float 4s ease-in-out infinite;">&#123; &#125;</div>
            <div class="absolute top-[60%] left-[10%] text-xl font-mono text-gray-300 font-bold opacity-40" style="animation: float 5s ease-in-out infinite reverse;">&lt;/&gt;</div>
            <div class="absolute top-[30%] right-[20%] text-2xl font-mono text-gray-300 font-bold opacity-50" style="animation: float 6s ease-in-out infinite;">() =&gt;</div>
            <div class="absolute top-[70%] right-[15%] text-3xl font-mono text-gray-300 font-bold opacity-30" style="animation: float 4.5s ease-in-out infinite reverse;">;</div>
            <div class="absolute bottom-[20%] left-[30%] text-lg font-mono text-gray-300 font-bold opacity-40" style="animation: float 5.5s ease-in-out infinite;">~/</div>
            <div class="absolute top-[15%] left-[60%] text-xl font-mono text-gray-300 font-bold opacity-50" style="animation: float 6.5s ease-in-out infinite reverse;">$</div>
            <div class="absolute bottom-[30%] right-[30%] text-2xl font-mono text-gray-300 font-bold opacity-40" style="animation: float 7s ease-in-out infinite;">#</div>
        </div>

        <div id="hero-assets" class="absolute inset-0 pointer-events-none w-full h-full flex items-center justify-center opacity-0 scale-50 -z-10">
            <!-- 3D elements or abstract shapes floating -->
            <div class="absolute w-96 h-96 bg-gradient-to-tr from-gray-200 to-gray-300 rounded-full blur-3xl opacity-50 top-1/4 left-1/4"></div>
            <div class="absolute w-80 h-80 bg-gradient-to-br from-gray-100 to-gray-200 rounded-full blur-3xl opacity-50 bottom-1/4 right-1/4"></div>
        </div>
        
        <div id="scroll-indicator" class="absolute bottom-10 left-1/2 transform -translate-x-1/2 flex flex-col items-center">
            <span class="text-xs uppercase tracking-[0.2em] text-gray-400 font-bold mb-3">Scroll</span>
            <div class="w-[1px] h-12 bg-gray-200 relative overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-1/2 bg-black" style="animation: slideDown 1.5s infinite;"></div>
            </div>
        </div>
    </div>
</section>

<!-- SERVICES SECTIONS -->
@foreach ($services as $index => $service)
    @php
        $quoteUrl = url('/cotizador-sitio-web?service=' . $service);
        $waUrl = 'https://wa.me/529611465703?text=' . urlencode(__('home_services.selector.' . $service) . ' - ' . __('home_services.common.primary_cta'));
        
        // Use consistent clean background for all services
        $bgClass = 'bg-white text-black';
        $titleColor = 'text-black';
        $textColor = 'text-gray-600';
        $btnPrimary = 'bg-black text-white';
        $btnSecondary = 'border-black text-black hover:bg-black hover:text-white';
    @endphp

    <section class="service-section relative py-24 w-full border-b border-gray-100 last:border-0 {{ $bgClass }}" id="service-{{ $service }}">
        <div class="w-full flex items-center overflow-hidden px-6 lg:px-16">
            <div class="max-w-7xl mx-auto w-full grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">
                
                <!-- Text Content -->
                <div class="service-content flex flex-col {{ $index % 2 === 0 ? 'lg:order-1' : 'lg:order-2' }}">
                    <p class="service-kicker text-sm uppercase tracking-[0.2em] font-bold opacity-0 text-gray-500 mb-4">
                        {{ __("home_services.$service.kicker") }}
                    </p>
                    <h2 class="service-title text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight opacity-0 {{ $titleColor }}">
                        {{ __("home_services.$service.title") }}
                    </h2>
                    <p class="service-subtitle mt-6 text-lg md:text-xl opacity-0 {{ $textColor }}">
                        {{ __("home_services.$service.subtitle") }}
                    </p>

                    <div class="service-features mt-10 grid gap-6 opacity-0">
                        @foreach (array_slice(__('home_services.' . $service . '.sections'), 0, 2) as $item)
                            <div class="border-l-2 border-gray-300 pl-4">
                                <h3 class="font-bold text-lg {{ $titleColor }}">{{ $item['title'] }}</h3>
                                <p class="text-sm mt-1 {{ $textColor }}">{{ $item['body'] }}</p>
                            </div>
                        @endforeach
                    </div>
                    
                    <div class="service-cta mt-12 flex flex-wrap gap-4 opacity-0">
                        <a href="{{ $quoteUrl }}" class="magnetic-btn px-8 py-4 rounded-full font-semibold transition-transform {{ $btnPrimary }}">
                            {{ __('home_services.common.primary_cta') }}
                        </a>
                        <a target="_blank" href="{{ $waUrl }}" class="magnetic-btn px-8 py-4 rounded-full border font-semibold transition-all {{ $btnSecondary }}">
                            {{ __('home_services.common.secondary_cta') }}
                        </a>
                    </div>
                </div>

                <!-- Visual Content (Parallax/Sticky mix) -->
                <div class="service-visual relative min-h-[400px] w-full rounded-3xl overflow-hidden {{ $index % 2 === 0 ? 'lg:order-2' : 'lg:order-1' }} bg-gray-50 border border-gray-200 flex items-center justify-center p-8">
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
                                <div class="p-4 font-mono text-sm leading-relaxed text-gray-300 overflow-hidden">
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
                                <h4 class="font-bold text-gray-900">Laptop Pro M3</h4>
                                <p class="text-xs text-gray-500 mt-1">Computadora de alto rendimiento</p>
                                <div class="mt-3 flex items-center justify-between">
                                    <span class="font-bold text-lg text-black">$24,999</span>
                                    <div class="flex gap-1">
                                        <span class="w-2 h-2 rounded-full bg-gray-300"></span>
                                        <span class="w-2 h-2 rounded-full bg-gray-800"></span>
                                    </div>
                                </div>
                                <button class="mt-4 w-full bg-black text-white py-2.5 rounded-lg text-sm font-semibold hover:bg-gray-800 transition-colors flex items-center justify-center gap-2">
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
                            <div class="relative w-80 h-64 flex items-center justify-center remote-mockup">
                                <!-- Clean Laptop -->
                                <div class="absolute bottom-8 w-56 h-36 bg-gray-100 border-[6px] border-gray-800 rounded-t-xl flex flex-col shadow-lg">
                                    <div class="flex-1 bg-white flex items-center justify-center">
                                        <div class="w-16 h-16 rounded-full bg-blue-50 border-4 border-blue-100 flex items-center justify-center">
                                            <svg class="w-8 h-8 text-blue-500 animate-pulse" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                        </div>
                                    </div>
                                    <div class="h-4 bg-gray-800 w-[120%] -ml-[10%] rounded-b-xl"></div>
                                </div>
                                
                                <!-- 3D Hand Cursor -->
                                <div class="absolute top-4 right-10 w-24 h-24 animate-[float_3s_ease-in-out_infinite]">
                                    <svg viewBox="0 0 100 100" class="w-full h-full drop-shadow-2xl">
                                        <!-- A stylized pointer/hand -->
                                        <path d="M40 20 L40 60 L30 50 C25 45 15 50 20 60 L45 90 C50 95 60 95 70 85 L85 60 C90 50 85 40 75 40 L65 45 L65 30 C65 25 55 25 55 30 L55 40 L55 25 C55 20 45 20 45 25 L45 40 L45 20 C45 15 40 15 40 20 Z" fill="white" stroke="black" stroke-width="4" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endforeach

<div class="bg-gray-50 py-20 px-4">
    @include('partials.lead-qualification-form', ['leadSource' => 'home'])
</div>

<style>
    @keyframes slideDown {
        0% { transform: translateY(-100%); }
        100% { transform: translateY(200%); }
    }
    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-15px); }
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
</style>

<!-- Load GSAP and ScrollTrigger -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        gsap.registerPlugin(ScrollTrigger);

        // --- MAGNETIC CURSOR ---
        const cursor = document.getElementById('magnetic-cursor');
        const cursorDot = document.getElementById('magnetic-cursor-dot');
        let mouseX = 0, mouseY = 0;
        let cursorX = 0, cursorY = 0;

        window.addEventListener('mousemove', (e) => {
            mouseX = e.clientX;
            mouseY = e.clientY;
            
            // Instantly move the dot
            gsap.set(cursorDot, { x: mouseX, y: mouseY });
        });

        // Smooth follow for the outer circle
        gsap.ticker.add(() => {
            cursorX += (mouseX - cursorX) * 0.15;
            cursorY += (mouseY - cursorY) * 0.15;
            gsap.set(cursor, { x: cursorX, y: cursorY });
        });

        // Magnetic effect on buttons/links
        const magneticElements = document.querySelectorAll('.magnetic-btn, a, button');
        magneticElements.forEach(el => {
            el.addEventListener('mouseenter', () => {
                cursor.classList.add('active');
                gsap.to(cursorDot, { scale: 0, duration: 0.2 });
            });
            
            el.addEventListener('mouseleave', () => {
                cursor.classList.remove('active');
                gsap.to(cursorDot, { scale: 1, duration: 0.2 });
                gsap.to(el, { x: 0, y: 0, duration: 0.5, ease: 'elastic.out(1, 0.3)' });
            });

            el.addEventListener('mousemove', (e) => {
                const rect = el.getBoundingClientRect();
                const x = e.clientX - rect.left - rect.width / 2;
                const y = e.clientY - rect.top - rect.height / 2;
                
                gsap.to(el, {
                    x: x * 0.3,
                    y: y * 0.3,
                    duration: 0.5,
                    ease: 'power2.out'
                });
            });
        });

        // --- HERO SCROLL REVEAL NARRATIVE ---
        const heroTimeline = gsap.timeline({
            scrollTrigger: {
                trigger: '#hero-scroll-container',
                start: 'top top',
                end: 'bottom bottom',
                scrub: 1
            }
        });

        heroTimeline
            // Step 1 stays a bit, then moves UP and fades out
            .to('#hero-step-1', { y: -100, opacity: 0, duration: 1 })
            
            // Step 2 comes up from below, stays, then moves UP and fades out
            .to('#hero-step-2', { y: 0, opacity: 1, duration: 1 }, "-=0.5")
            .to('#hero-assets', { opacity: 1, scale: 1, duration: 1 }, "-=1") // background assets appear
            .to('#hero-step-2', { y: -100, opacity: 0, duration: 1 }, "+=0.5") // slight pause
            
            // Step 3 comes up from below, stays
            .to('#hero-step-3', { y: 0, opacity: 1, duration: 1 }, "-=0.5")
            
            // At the end, everything fades out as you enter the next section
            .to('#scroll-indicator', { opacity: 0, duration: 0.2 }, "-=1")
            .to('#hero-step-3', { y: -100, opacity: 0, duration: 1 }, "+=0.5")
            .to('#hero-particles', { opacity: 0, duration: 1 }, "-=1")
            .to('#hero-assets', { opacity: 0, scale: 1.5, duration: 1 }, "-=1");

        // --- SERVICES SCROLL ANIMATIONS ---
        const serviceSections = document.querySelectorAll('.service-section');
        
        serviceSections.forEach((section, index) => {
            // Staggered text reveal
            const contentElements = section.querySelectorAll('.service-kicker, .service-title, .service-subtitle, .service-price, .service-features, .service-cta');
            
            // Use scrollTrigger for entering the section
            gsap.fromTo(contentElements, 
                { y: 50, opacity: 0 },
                {
                    y: 0,
                    opacity: 1,
                    stagger: 0.15,
                    duration: 1,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: section,
                        start: 'top 70%',
                        toggleActions: 'play none none reverse'
                    }
                }
            );

            // Subtle Parallax effect on the visual container
            const visual = section.querySelector('.service-visual');
            if (visual) {
                gsap.fromTo(visual, 
                    { y: 50, opacity: 0 },
                    {
                        y: 0,
                        opacity: 1,
                        duration: 1.2,
                        ease: 'power2.out',
                        scrollTrigger: {
                            trigger: section,
                            start: 'top 75%',
                            toggleActions: 'play none none reverse'
                        }
                    }
                );
            }

            // Specific Mockup Animations inside the visual elements
            const mockups = section.querySelectorAll('.software-mockup, .web-mockup, .ecommerce-mockup, .support-mockup, .remote-mockup');
            if(mockups.length) {
                gsap.fromTo(mockups,
                    { scale: 0.9, y: 30 },
                    {
                        scale: 1,
                        y: 0,
                        duration: 1.5,
                        stagger: 0.2,
                        ease: 'expo.out',
                        scrollTrigger: {
                            trigger: section,
                            start: 'top 60%',
                            toggleActions: 'play none none reverse'
                        }
                    }
                );
            }
        });
    });
</script>
@endsection
