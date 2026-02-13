{{-- resources/views/partials/head.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.global_header')
    <style>
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-up {
            animation: fadeInUp 0.8s ease-out forwards;
        }
        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
    </style>
    <body class="antialiased bg-white text-gray-900 selection:bg-black selection:text-white">
        <!-- @include('layouts.landing_navbar') -->
        <nav class="fixed w-full z-50 bg-white/90 backdrop-blur-md border-b border-gray-100 transition-all duration-300">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-20">
                    <div class="flex-shrink-0 flex items-center">
                        <a href="/" class="text-2xl font-bold tracking-tighter text-black group">
                            {{'<'}}NOVA <span class="font-light text-gray-500 group-hover:text-black transition-colors">CONSULTING</span>{{'/>'}}
                        </a>
                    </div>

                    <div class="hidden md:flex space-x-8 items-center">
                        <a href="{{route('services')}}" class="text-sm font-medium text-gray-600 hover:text-black transition-colors">{{ __('messages.nav.services') }}</a>
                        <a href="{{route('about')}}" class="text-sm font-medium text-gray-600 hover:text-black transition-colors">{{ __('messages.nav.about') }}</a>
                        <a href="{{route('quotations')}}" class="text-sm font-medium text-gray-600 hover:text-black transition-colors">{{ __('messages.nav.quotation') }}</a>
                        
                        <div class="h-4 w-px bg-gray-300 mx-2"></div>

                        <a href="#contact" class="ml-4 px-6 py-2.5 bg-black text-white text-sm font-medium rounded-full shadow-lg hover:bg-gray-800 hover:shadow-xl hover:-translate-y-0.5 transition-all duration-300">
                            {{ __('messages.nav.customer_portal') }}
                        </a>
                    </div>
                </div>
            </div>
        </nav>


        <section class="relative bg-black text-white pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">
            <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-gray-900 to-transparent opacity-50"></div>
            
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-3xl animate-fade-up">
                    <span class="inline-block py-1 px-3 rounded-full bg-gray-800 border border-gray-700 text-xs font-semibold tracking-wide uppercase mb-6 text-gray-300">
                        {{ __('messages.new_branding.badge') }}
                    </span>
                    <h1 class="text-5xl md:text-7xl font-bold tracking-tight leading-tight mb-8">
                        {{ __('messages.new_branding.headline_start') }} <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-gray-200 to-gray-500">
                            {{ __('messages.new_branding.headline_highlight') }}
                        </span>
                    </h1>
                    <p class="text-xl text-gray-400 mb-10 max-w-2xl font-light leading-relaxed delay-100 animate-fade-up opacity-0" style="animation-fill-mode: forwards;">
                        {{ __('messages.new_branding.subheadline') }}
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 delay-200 animate-fade-up opacity-0" style="animation-fill-mode: forwards;">
                        <a href="#contact" class="px-8 py-4 bg-white text-black font-semibold rounded-full hover:bg-gray-200 transition-colors text-center shadow-[0_0_20px_rgba(255,255,255,0.3)]">
                            {{ __('messages.new_branding.cta_primary') }}
                        </a>
                        <a href="#services" class="px-8 py-4 bg-transparent border border-gray-700 text-white font-medium rounded-full hover:bg-gray-900 hover:border-gray-500 transition-all text-center">
                            {{ __('messages.new_branding.cta_secondary') }}
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="mt-20 border-t border-gray-800 pt-10 relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-wrap gap-12 text-gray-400">
                <div>
                    <span class="block text-3xl font-bold text-white">7+</span>
                    <span class="text-sm uppercase tracking-wider">{{ __('messages.new_branding.years_exp') }}</span>
                </div>
                <div>
                    <span class="block text-3xl font-bold text-white">350,000+</span>
                    <span class="text-sm uppercase tracking-wider">{{ __('messages.new_branding.projects_done') }}</span>
                </div>
                <div>
                    <span class="block text-3xl font-bold text-white">10+</span>
                    <span class="text-sm uppercase tracking-wider">{{ __('messages.new_branding.value_generated') }}</span>
                </div>
            </div>
        </section>


        <section id="services" class="py-24 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16 max-w-2xl mx-auto">
                    <h2 class="text-3xl md:text-4xl font-bold text-black mb-4">{{ __('messages.welcome.services_heading') }}</h2>
                    <p class="text-gray-600">{{ __('messages.welcome.services_subheading') }}</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="group bg-white p-10 rounded-2xl shadow-sm hover:shadow-2xl transition-all duration-300 border border-gray-100 relative overflow-hidden">
                        <div class="absolute top-0 left-0 w-1 h-full bg-black transform -translate-y-full group-hover:translate-y-0 transition-transform duration-500"></div>
                        <div class="w-12 h-12 bg-gray-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-black group-hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-gray-900">{{ __('messages.services_page.service_custom_title') }}</h3>
                        <p class="text-gray-500 leading-relaxed text-sm mb-6">{{ __('messages.services_page.service_custom_sub') }}</p>
                        <a href="{{ url('/dashboard/register') }}" class="inline-flex items-center text-sm font-semibold text-black hover:underline">
                            {{ __('messages.services_page.cta_create_project') }} <span class="ml-1">&rarr;</span>
                        </a>
                    </div>

                    <div class="group bg-white p-10 rounded-2xl shadow-sm hover:shadow-2xl transition-all duration-300 border border-gray-100 relative overflow-hidden">
                        <div class="absolute top-0 left-0 w-1 h-full bg-black transform -translate-y-full group-hover:translate-y-0 transition-transform duration-500"></div>
                        <div class="w-12 h-12 bg-gray-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-black group-hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-gray-900">{{ __('messages.services_page.service_it_staffing_title') }}</h3>
                        <p class="text-gray-500 leading-relaxed text-sm mb-6">{{ __('messages.services_page.service_it_staffing_sub') }}</p>
                        <a href="{{ url('/dashboard/register') }}" class="inline-flex items-center text-sm font-semibold text-black hover:underline">
                            {{ __('messages.services_page.cta_assemble_team') }} <span class="ml-1">&rarr;</span>
                        </a>
                    </div>

                    <div class="group bg-white p-10 rounded-2xl shadow-sm hover:shadow-2xl transition-all duration-300 border border-gray-100 relative overflow-hidden">
                        <div class="absolute top-0 left-0 w-1 h-full bg-black transform -translate-y-full group-hover:translate-y-0 transition-transform duration-500"></div>
                        <div class="w-12 h-12 bg-gray-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-black group-hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-gray-900">{{ __('messages.services_page.technical_consulting_title') }}</h3>
                        <p class="text-gray-500 leading-relaxed text-sm mb-6">{{ __('messages.services_page.technical_consulting_subtitle') }}</p>
                        <a target="_blank" href="https://calendar.app.google/b8nHVZEUCh1LdLcL8" class="inline-flex items-center text-sm font-semibold text-black hover:underline">
                            {{ __('messages.services_page.cta_book_call') }} <span class="ml-1">&rarr;</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <section class="py-24 bg-white overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col lg:flex-row items-center gap-16">
                    <div class="lg:w-1/2">
                        <div class="relative rounded-2xl overflow-hidden shadow-2xl bg-gray-100 aspect-[4/3]">
                            <div class="absolute inset-0 bg-gradient-to-tr from-gray-200 to-gray-50"></div>
                            <div class="absolute bottom-10 left-10 right-10 p-6 bg-white/80 backdrop-blur-sm rounded-xl border border-white/50">
                                <p class="font-serif italic text-lg text-gray-800">"{{ __('messages.testimonials.featured_quote') }}"</p>
                                <p class="mt-4 text-xs font-bold uppercase tracking-wide text-gray-500">CEO, Creatico MX</p>
                            </div>
                        </div>
                    </div>
                    <div class="lg:w-1/2">
                        <h2 class="text-3xl md:text-4xl font-bold text-black mb-6 leading-tight">
                            {{ __('messages.why_us.headline') }}
                        </h2>
                        <p class="text-gray-600 mb-8 text-lg font-light">
                            {{ __('messages.why_us.description') }}
                        </p>
                        
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 h-6 w-6 rounded-full bg-black flex items-center justify-center mt-1">
                                    <svg class="h-3 w-3 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-bold text-gray-900">{{ __('messages.why_us.point_1_title') }}</h4>
                                    <p class="text-gray-500 text-sm mt-1">{{ __('messages.why_us.point_1_desc') }}</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 h-6 w-6 rounded-full bg-black flex items-center justify-center mt-1">
                                    <svg class="h-3 w-3 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-bold text-gray-900">{{ __('messages.why_us.point_2_title') }}</h4>
                                    <p class="text-gray-500 text-sm mt-1">{{ __('messages.why_us.point_2_desc') }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-10">
                            <a href="#about" class="text-black font-semibold border-b-2 border-black pb-1 hover:text-gray-600 hover:border-gray-600 transition-all">
                                {{ __('messages.why_us.read_philosophy') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="py-24 bg-black text-white relative overflow-hidden">
            <div class="absolute top-0 left-1/2 transform -translate-x-1/2 w-full h-full max-w-7xl pointer-events-none">
                <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-gray-900 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse"></div>
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="text-center max-w-3xl mx-auto mb-20">
                    <h2 class="text-4xl md:text-5xl font-bold tracking-tight mb-6 leading-tight">
                        {{ __('messages.new_contact.pain_headline') }}
                    </h2>
                    <p class="text-xl text-gray-400 font-light leading-relaxed">
                        {{ __('messages.new_contact.pain_subheadline') }}
                    </p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    
                    <div class="group flex flex-col items-center text-center p-10 rounded-2xl border border-gray-800 bg-gray-900/30 hover:bg-gray-900 hover:border-gray-700 transition-all duration-500 hover:-translate-y-2 shadow-lg">
                        <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mb-8 text-black group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        </div>
                        <h3 class="text-lg font-semibold text-white mb-2">{{ __('messages.new_contact.phone_title') }}</h3>
                        <p class="text-gray-400 text-sm mb-6 h-10">{{ __('messages.new_contact.phone_desc') }}</p>
                        <a href="tel:+1234567890" class="text-xl font-bold tracking-wide hover:text-gray-300 transition-colors">
                            +52 (55) 1234-5678
                        </a>
                    </div>

                    <div class="group flex flex-col items-center text-center p-10 rounded-2xl border border-gray-700 bg-gray-800/50 hover:bg-gray-800 hover:border-gray-500 transition-all duration-500 hover:-translate-y-2 shadow-2xl relative">
                        <div class="absolute top-0 right-0 bg-white text-black text-xs font-bold px-3 py-1 rounded-bl-xl rounded-tr-xl">
                            {{ __('messages.new_contact.recommended') }}
                        </div>
                        <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mb-8 text-black group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                        </div>
                        <h3 class="text-lg font-semibold text-white mb-2">{{ __('messages.new_contact.whatsapp_title') }}</h3>
                        <p class="text-gray-400 text-sm mb-6 h-10">{{ __('messages.new_contact.whatsapp_desc') }}</p>
                        <a href="https://wa.me/525512345678" target="_blank" class="inline-flex items-center justify-center px-6 py-3 border border-white rounded-full hover:bg-white hover:text-black transition-all duration-300 font-medium text-sm">
                            {{ __('messages.new_contact.whatsapp_action') }}
                        </a>
                    </div>

                    <div class="group flex flex-col items-center text-center p-10 rounded-2xl border border-gray-800 bg-gray-900/30 hover:bg-gray-900 hover:border-gray-700 transition-all duration-500 hover:-translate-y-2 shadow-lg">
                        <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mb-8 text-black group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <h3 class="text-lg font-semibold text-white mb-2">{{ __('messages.new_contact.email_title') }}</h3>
                        <p class="text-gray-400 text-sm mb-6 h-10">{{ __('messages.new_contact.email_desc') }}</p>
                        <a href="mailto:contact@novaconsulting.com" class="text-lg font-medium border-b border-gray-600 pb-1 hover:text-gray-300 hover:border-gray-400 transition-all">
                            contact@novaconsulting.com
                        </a>
                    </div>

                </div>
            </div>
        </section>
    </body>
</html>
