{{-- Nova Consulting — nueva interfaz homepage --}}
@extends('layouts.marketing')

@section('nav_ga_section', 'nav-home')

@section('content')
            {{-- Hero bento --}}
            <section class="relative pt-28 sm:pt-32 lg:pt-36 pb-12 sm:pb-16 px-4 sm:px-6" data-ga-section="hero-home">
                <div class="max-w-6xl mx-auto grid lg:grid-cols-12 gap-4 lg:gap-5">
                    <div class="lg:col-span-7 marketing-hero-in">
                        <span class="inline-flex items-center gap-2 text-xs font-semibold uppercase tracking-[0.18em] text-gray-600 px-3 py-1.5 rounded-full border border-gray-200 bg-white/80">
                            <span class="w-2 h-2 rounded-full bg-black animate-pulse"></span>
                            {{ __('messages.new_branding.badge') }}
                        </span>
                        <h1 class="mt-5 text-4xl sm:text-5xl lg:text-6xl font-bold tracking-tight text-black leading-[1.08]">
                            {{ __('messages.new_branding.headline_start') }}
                            <span class="block mt-1 text-transparent bg-clip-text bg-gradient-to-r from-gray-700 via-black to-gray-500">
                                {{ __('messages.new_branding.headline_highlight') }}
                            </span>
                        </h1>
                        <p class="mt-5 text-lg sm:text-xl text-gray-600 max-w-xl leading-relaxed font-light">
                            {{ __('messages.new_branding.subheadline') }}
                        </p>
                        <div class="mt-8 flex flex-col sm:flex-row flex-wrap gap-3">
                            <a href="#diagnostico" class="inline-flex justify-center items-center px-8 py-3.5 rounded-full bg-black text-white font-semibold shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all" data-track="hero_cta_primary_click">
                                {{ __('messages.new_branding.cta_primary') }}
                            </a>
                            <a href="#services" class="inline-flex justify-center items-center px-8 py-3.5 rounded-full border-2 border-[#2C2C2C] font-semibold hover:bg-white transition-all" data-track="hero_cta_secondary_click">
                                {{ __('messages.new_branding.cta_secondary') }}
                            </a>
                        </div>
                    </div>

                    <div class="lg:col-span-5 grid gap-4 lg:gap-5 marketing-hero-in-delay">
                        <div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm hover:shadow-md transition-shadow">
                            <p class="text-xs font-semibold uppercase tracking-wider text-gray-500">Tuxtla Gutiérrez, Chiapas</p>
                            <h2 class="mt-2 text-xl font-bold text-black">Software y diseño web con impacto local</h2>
                            <p class="mt-2 text-sm text-gray-600 leading-relaxed">
                                También trabajamos con empresas en todo México de forma remota.
                            </p>
                            <div class="mt-4 flex flex-wrap gap-2">
                                <a href="{{ url('/empresa-software-tuxtla-chiapas') }}" class="text-xs font-semibold px-3 py-1.5 rounded-full bg-gray-100 hover:bg-gray-200 transition-colors" data-track="home_internal_landing_software">Tuxtla</a>
                                <a href="{{ url('/diseno-paginas-web-tuxtla-chiapas') }}" class="text-xs font-semibold px-3 py-1.5 rounded-full bg-gray-100 hover:bg-gray-200 transition-colors" data-track="home_internal_landing_web">Diseño web</a>
                            </div>
                        </div>
                        <div class="rounded-2xl border border-gray-200 bg-gradient-to-br from-[#2C2C2C] to-gray-800 text-white p-6 shadow-lg">
                            <div class="grid grid-cols-3 gap-4 text-center">
                                <div>
                                    <span class="block text-2xl sm:text-3xl font-bold">7+</span>
                                    <span class="text-[10px] sm:text-xs uppercase tracking-wider text-gray-400 mt-1 block">{{ __('messages.new_branding.years_exp') }}</span>
                                </div>
                                <div>
                                    <span class="block text-2xl sm:text-3xl font-bold">350k+</span>
                                    <span class="text-[10px] sm:text-xs uppercase tracking-wider text-gray-400 mt-1 block">{{ __('messages.new_branding.projects_done') }}</span>
                                </div>
                                <div>
                                    <span class="block text-2xl sm:text-3xl font-bold">10+</span>
                                    <span class="text-[10px] sm:text-xs uppercase tracking-wider text-gray-400 mt-1 block">{{ __('messages.new_branding.value_generated') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Hub ciudades --}}
            <section class="py-10 px-4 sm:px-6" data-ga-section="ciudades-home">
                <div class="max-w-6xl mx-auto">
                    <p class="text-center text-xs font-semibold uppercase tracking-[0.2em] text-gray-500 mb-4">Presencia en México</p>
                    <div class="flex flex-wrap justify-center gap-2 sm:gap-3">
                        <a href="{{ \App\Support\LocalizedUrls::citySoftware('gdl') }}" class="px-4 py-2 rounded-full text-sm font-medium bg-white border border-gray-200 hover:border-black hover:shadow-md transition-all">Guadalajara</a>
                        <a href="{{ \App\Support\LocalizedUrls::citySoftware('mty') }}" class="px-4 py-2 rounded-full text-sm font-medium bg-white border border-gray-200 hover:border-black hover:shadow-md transition-all">Monterrey</a>
                        <a href="{{ \App\Support\LocalizedUrls::citySoftware('cdmx') }}" class="px-4 py-2 rounded-full text-sm font-medium bg-white border border-gray-200 hover:border-black hover:shadow-md transition-all">Ciudad de México</a>
                        <a href="{{ \App\Support\LocalizedUrls::citySoftware('merida') }}" class="px-4 py-2 rounded-full text-sm font-medium bg-white border border-gray-200 hover:border-black hover:shadow-md transition-all">Mérida</a>
                    </div>
                </div>
            </section>

            {{-- Guías SEO (precios y landings) --}}
            <section class="py-8 px-4 sm:px-6" data-ga-section="guias-home">
                <div class="max-w-6xl mx-auto text-center">
                    <p class="text-xs font-semibold uppercase tracking-[0.2em] text-gray-500 mb-3">Guías útiles</p>
                    <div class="flex flex-wrap justify-center gap-x-4 gap-y-2 text-sm">
                        <a href="{{ \App\Support\LocalizedUrls::guide('cuanto_pagina_web') }}" class="text-gray-700 hover:text-black border-b border-transparent hover:border-black transition-colors">{{ __('guides.cuanto_pagina_web.h1') }}</a>
                        <a href="{{ \App\Support\LocalizedUrls::guide('cuanto_aplicacion') }}" class="text-gray-700 hover:text-black border-b border-transparent hover:border-black transition-colors">{{ __('guides.cuanto_aplicacion.h1') }}</a>
                        <a href="{{ \App\Support\LocalizedUrls::guide('que_es_landing') }}" class="text-gray-700 hover:text-black border-b border-transparent hover:border-black transition-colors">{{ __('guides.que_es_landing.h1') }}</a>
                    </div>
                </div>
            </section>

            {{-- Promo Chiapas --}}
            <section class="py-10 px-4 sm:px-6" data-ga-section="promo-descuento-chiapas">
                <div class="max-w-6xl mx-auto rounded-3xl overflow-hidden border border-gray-900/10 shadow-xl">
                    <div class="marketing-border-shine p-[1px] rounded-3xl">
                        <div class="rounded-[1.4rem] bg-black text-white px-6 py-10 sm:px-10 sm:py-12 text-center">
                            <p class="text-xs uppercase tracking-[0.2em] text-gray-400">Promoción local</p>
                            <h2 class="mt-3 text-2xl sm:text-4xl font-bold">Si tu negocio está en Tuxtla o Chiapas, 10% de descuento</h2>
                            <p class="mt-4 text-gray-300 max-w-2xl mx-auto text-sm sm:text-base">
                                Menciona <strong class="text-white">DESCUENTO CHIAPAS</strong> al contactarnos. Válido en proyectos nuevos de diseño web y software.
                            </p>
                            <div class="mt-8 flex flex-col sm:flex-row justify-center gap-3">
                                <a href="https://wa.me/529611465703" target="_blank" class="inline-flex justify-center px-8 py-3.5 rounded-full bg-white text-black font-semibold hover:bg-gray-100 transition-colors" data-track="promo_home_whatsapp_click">WhatsApp</a>
                                <a href="tel:+529611465703" class="inline-flex justify-center px-8 py-3.5 rounded-full border-2 border-white font-semibold hover:bg-white/10 transition-colors" data-track="promo_home_phone_click">Llamar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Servicios --}}
            <section id="services" class="py-16 sm:py-20 px-4 sm:px-6" data-ga-section="services-home">
                <div class="max-w-6xl mx-auto">
                    <div class="max-w-2xl">
                        <h2 class="text-3xl sm:text-4xl font-bold text-black">{{ __('messages.welcome.services_heading') }}</h2>
                        <p class="mt-3 text-gray-600 text-lg">{{ __('messages.welcome.services_subheading') }}</p>
                    </div>
                    <div class="mt-12 grid md:grid-cols-3 gap-5">
                        <article class="group rounded-2xl border border-gray-200 bg-white p-8 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                            <div class="w-12 h-12 rounded-xl bg-gray-100 flex items-center justify-center text-black group-hover:bg-black group-hover:text-white transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                            </div>
                            <h3 class="mt-5 text-xl font-bold">{{ __('messages.services_page.service_custom_title') }}</h3>
                            <p class="mt-2 text-sm text-gray-600 leading-relaxed">{{ __('messages.services_page.service_custom_sub') }}</p>
                            <a href="{{ url('/dashboard/register') }}" class="mt-6 inline-flex items-center text-sm font-bold text-black group-hover:underline">{{ __('messages.services_page.cta_create_project') }} <span class="ml-1 transition-transform group-hover:translate-x-1">→</span></a>
                        </article>
                        <article class="group rounded-2xl border border-gray-200 bg-white p-8 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 md:mt-8">
                            <div class="w-12 h-12 rounded-xl bg-gray-100 flex items-center justify-center text-black group-hover:bg-black group-hover:text-white transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                            </div>
                            <h3 class="mt-5 text-xl font-bold">{{ __('messages.services_page.service_it_staffing_title') }}</h3>
                            <p class="mt-2 text-sm text-gray-600 leading-relaxed">{{ __('messages.services_page.service_it_staffing_sub') }}</p>
                            <a href="{{ url('/dashboard/register') }}" class="mt-6 inline-flex items-center text-sm font-bold text-black group-hover:underline">{{ __('messages.services_page.cta_assemble_team') }} <span class="ml-1 transition-transform group-hover:translate-x-1">→</span></a>
                        </article>
                        <article class="group rounded-2xl border border-gray-200 bg-white p-8 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                            <div class="w-12 h-12 rounded-xl bg-gray-100 flex items-center justify-center text-black group-hover:bg-black group-hover:text-white transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <h3 class="mt-5 text-xl font-bold">{{ __('messages.services_page.technical_consulting_title') }}</h3>
                            <p class="mt-2 text-sm text-gray-600 leading-relaxed">{{ __('messages.services_page.technical_consulting_subtitle') }}</p>
                            <a target="_blank" href="https://calendar.app.google/b8nHVZEUCh1LdLcL8" class="mt-6 inline-flex items-center text-sm font-bold text-black group-hover:underline">{{ __('messages.services_page.cta_book_call') }} <span class="ml-1">→</span></a>
                        </article>
                    </div>
                    <div class="mt-10 text-center">
                        <a href="{{ route('services') }}" class="inline-flex items-center font-semibold text-black border-b-2 border-black pb-0.5 hover:text-gray-600 hover:border-gray-600 transition-colors">Ver todos los servicios</a>
                    </div>
                </div>
            </section>

            {{-- Por qué nosotros --}}
            <section class="py-16 sm:py-20 px-4 sm:px-6 bg-white border-y border-gray-200" data-ga-section="why-home">
                <div class="max-w-3xl mx-auto">
                    <h2 class="text-3xl sm:text-4xl font-bold text-black leading-tight">{{ __('messages.why_us.headline') }}</h2>
                    <p class="mt-4 text-gray-600 text-lg font-light leading-relaxed">{{ __('messages.why_us.description') }}</p>
                    <ul class="mt-8 space-y-5">
                        <li class="flex gap-4">
                            <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-black text-white text-sm font-bold">1</span>
                            <div>
                                <p class="font-bold text-black">{{ __('messages.why_us.point_1_title') }}</p>
                                <p class="text-sm text-gray-600 mt-1">{{ __('messages.why_us.point_1_desc') }}</p>
                            </div>
                        </li>
                        <li class="flex gap-4">
                            <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-black text-white text-sm font-bold">2</span>
                            <div>
                                <p class="font-bold text-black">{{ __('messages.why_us.point_2_title') }}</p>
                                <p class="text-sm text-gray-600 mt-1">{{ __('messages.why_us.point_2_desc') }}</p>
                            </div>
                        </li>
                    </ul>
                    <a href="{{ url('about') }}" class="mt-8 inline-flex font-semibold text-black border-b-2 border-black hover:text-gray-600 transition-colors" data-track="about_link_click">{{ __('messages.why_us.read_philosophy') }}</a>
                </div>
            </section>

            {{-- Garantías --}}
            <section class="py-16 px-4 sm:px-6" data-ga-section="garantias-home">
                <div class="max-w-6xl mx-auto grid sm:grid-cols-3 gap-5">
                    <div class="rounded-2xl bg-white border border-gray-200 p-6 hover:shadow-lg transition-shadow">
                        <h3 class="font-bold text-lg">Propuesta en 24 horas</h3>
                        <p class="mt-2 text-sm text-gray-600">Tras el primer contacto, recibes alcance y costos claros.</p>
                    </div>
                    <div class="rounded-2xl bg-white border border-gray-200 p-6 hover:shadow-lg transition-shadow">
                        <h3 class="font-bold text-lg">Proceso por etapas</h3>
                        <p class="mt-2 text-sm text-gray-600">Entregables visibles y decisiones documentadas.</p>
                    </div>
                    <div class="rounded-2xl bg-white border border-gray-200 p-6 hover:shadow-lg transition-shadow">
                        <h3 class="font-bold text-lg">Post-lanzamiento</h3>
                        <p class="mt-2 text-sm text-gray-600">Acompañamiento para estabilizar y evolucionar tu producto.</p>
                    </div>
                </div>
            </section>

            {{-- FAQ --}}
            <section class="py-16 sm:py-20 px-4 sm:px-6" data-ga-section="faq-home">
                <div class="max-w-3xl mx-auto">
                    <h2 class="text-3xl sm:text-4xl font-bold text-center text-black">FAQ</h2>
                    <p class="mt-2 text-center text-gray-600">Tuxtla, Chiapas y proyectos remotos en México.</p>
                    <div class="mt-10 space-y-3">
                        <details class="group rounded-2xl border border-gray-200 bg-white open:shadow-md transition-shadow">
                            <summary class="cursor-pointer list-none px-5 py-4 font-semibold flex items-center justify-between gap-4">
                                <span>¿Cuánto tarda una página web profesional?</span>
                                <span class="text-gray-400 group-open:rotate-180 transition-transform">▼</span>
                            </summary>
                            <div class="px-5 pb-4 text-sm text-gray-600 border-t border-gray-100 pt-3">Entre 2 y 6 semanas según alcance e integraciones.</div>
                        </details>
                        <details class="group rounded-2xl border border-gray-200 bg-white open:shadow-md transition-shadow">
                            <summary class="cursor-pointer list-none px-5 py-4 font-semibold flex items-center justify-between gap-4">
                                <span>¿Desarrollan software a medida?</span>
                                <span class="text-gray-400 group-open:rotate-180 transition-transform">▼</span>
                            </summary>
                            <div class="px-5 pb-4 text-sm text-gray-600 border-t border-gray-100 pt-3">Sí: sistemas internos, paneles, automatizaciones y apps web.</div>
                        </details>
                        <details class="group rounded-2xl border border-gray-200 bg-white open:shadow-md transition-shadow">
                            <summary class="cursor-pointer list-none px-5 py-4 font-semibold flex items-center justify-between gap-4">
                                <span>¿Cómo funciona el 10% de descuento en Chiapas?</span>
                                <span class="text-gray-400 group-open:rotate-180 transition-transform">▼</span>
                            </summary>
                            <div class="px-5 pb-4 text-sm text-gray-600 border-t border-gray-100 pt-3">Si operas en Tuxtla o Chiapas, aplica en la propuesta inicial mencionando DESCUENTO CHIAPAS.</div>
                        </details>
                        <details class="group rounded-2xl border border-gray-200 bg-white open:shadow-md transition-shadow">
                            <summary class="cursor-pointer list-none px-5 py-4 font-semibold flex items-center justify-between gap-4">
                                <span>¿Incluyen SEO para Google?</span>
                                <span class="text-gray-400 group-open:rotate-180 transition-transform">▼</span>
                            </summary>
                            <div class="px-5 pb-4 text-sm text-gray-600 border-t border-gray-100 pt-3">Base técnica y estructura de contenido para búsqueda local.</div>
                        </details>
                        <details class="group rounded-2xl border border-gray-200 bg-white open:shadow-md transition-shadow">
                            <summary class="cursor-pointer list-none px-5 py-4 font-semibold flex items-center justify-between gap-4">
                                <span>¿Propuesta sin costo?</span>
                                <span class="text-gray-400 group-open:rotate-180 transition-transform">▼</span>
                            </summary>
                            <div class="px-5 pb-4 text-sm text-gray-600 border-t border-gray-100 pt-3">Sí, tras una breve llamada de diagnóstico.</div>
                        </details>
                    </div>
                </div>
            </section>

            @include('partials.lead-qualification-form', ['leadSource' => 'home'])

            {{-- Contacto --}}
            <section id="contact" class="py-20 sm:py-24 px-4 sm:px-6 relative overflow-hidden bg-black text-white" data-ga-section="contact-home">
                <div class="absolute inset-0 opacity-30 pointer-events-none">
                    <div class="absolute top-0 right-0 w-96 h-96 rounded-full bg-gray-700 blur-3xl"></div>
                    <div class="absolute bottom-0 left-0 w-80 h-80 rounded-full bg-gray-800 blur-3xl"></div>
                </div>
                <div class="relative max-w-6xl mx-auto z-10">
                    <div class="text-center max-w-2xl mx-auto mb-14">
                        <h2 class="text-3xl sm:text-5xl font-bold tracking-tight">{{ __('messages.new_contact.pain_headline') }}</h2>
                        <p class="mt-4 text-lg text-gray-400 font-light">{{ __('messages.new_contact.pain_subheadline') }}</p>
                    </div>
                    <div class="grid md:grid-cols-3 gap-5">
                        <a href="tel:+529611465703" class="flex flex-col items-center text-center p-8 rounded-2xl border border-white/10 bg-white/5 hover:bg-white/10 hover:border-white/20 transition-all" data-track="home_phone_click">
                            <span class="w-14 h-14 rounded-full bg-white text-black flex items-center justify-center mb-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            </span>
                            <span class="font-semibold">{{ __('messages.new_contact.phone_title') }}</span>
                            <span class="mt-3 text-xl font-bold">+52 (961) 146-5703</span>
                        </a>
                        <a href="https://wa.me/529611465703" target="_blank" class="flex flex-col items-center text-center p-8 rounded-2xl border-2 border-white/30 bg-white text-black hover:scale-[1.02] transition-transform shadow-xl" data-track="home_whatsapp_click">
                            <span class="text-xs font-bold uppercase tracking-widest text-gray-500 mb-2">{{ __('messages.new_contact.recommended') }}</span>
                            <span class="font-semibold text-gray-900">{{ __('messages.new_contact.whatsapp_title') }}</span>
                            <span class="mt-4 inline-flex px-6 py-2.5 rounded-full bg-black text-white text-sm font-semibold">{{ __('messages.new_contact.whatsapp_action') }}</span>
                        </a>
                        <a href="mailto:sales@novaconsulting.com.mx" class="flex flex-col items-center text-center p-8 rounded-2xl border border-white/10 bg-white/5 hover:bg-white/10 transition-all" data-track="home_email_click">
                            <span class="w-14 h-14 rounded-full bg-white text-black flex items-center justify-center mb-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </span>
                            <span class="font-semibold">{{ __('messages.new_contact.email_title') }}</span>
                            <span class="mt-3 text-sm border-b border-gray-500 pb-0.5">sales@novaconsulting.com.mx</span>
                        </a>
                    </div>
                </div>
            </section>
@endsection
