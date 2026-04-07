@php
    $canonical = url('/cotizador-sitio-web');
    $htmlLang = app()->getLocale() === 'en' ? 'en' : 'es-MX';
    $seo_overrides = [
        'title' => __('seo.website_quote.title'),
        'description' => __('seo.website_quote.description'),
        'keywords' => __('seo.website_quote.keywords'),
        'og' => [
            'title' => __('seo.website_quote.title'),
            'description' => __('seo.website_quote.description'),
            'type' => 'website',
            'url' => $canonical,
            'image' => asset('images/preview.png'),
        ],
    ];
    $websiteQuoteAlpineCfg = [
        'storeUrl' => route('website_quote.store'),
        'wq' => [
            'err_required_service' => __('website_quote.err_required_service'),
            'err_required_fields' => __('website_quote.err_required_fields'),
            'err_custom_fields' => __('website_quote.err_custom_fields'),
            'error_sub_validation' => __('website_quote.error_sub_validation'),
            'error_sub_server' => __('website_quote.error_sub_server'),
            'error_sub_network' => __('website_quote.error_sub_network'),
        ],
    ];
@endphp
@extends('layouts.marketing')

@section('marketing_body_class', 'marketing-quote-flow')

@section('nav_ga_section', 'nav-website-quote')

@push('styles')
    <style>
        @keyframes wq-success-pop {
            0% { opacity: 0; transform: scale(0.3) rotate(-8deg); }
            60% { opacity: 1; transform: scale(1.08) rotate(4deg); }
            100% { opacity: 1; transform: scale(1) rotate(0); }
        }
        @keyframes wq-success-ring {
            0% { transform: scale(0.85); opacity: 0.8; }
            100% { transform: scale(1.35); opacity: 0; }
        }
        @keyframes wq-float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-6px); }
        }
        .wq-success-icon { animation: wq-success-pop 0.75s cubic-bezier(0.34, 1.56, 0.64, 1) forwards; }
        .wq-success-ring::after {
            content: '';
            position: absolute;
            inset: -6px;
            border-radius: 9999px;
            border: 2px solid rgba(0, 0, 0, 0.15);
            animation: wq-success-ring 1.2s ease-out infinite;
        }
        .wq-mascot-bob { animation: wq-float 2.8s ease-in-out infinite; }
        @media (prefers-reduced-motion: reduce) {
            .wq-success-icon, .wq-success-ring::after, .wq-mascot-bob { animation: none; }
        }
    </style>
@endpush

@section('content')
    <div
        class="relative min-h-[100dvh] pt-24 sm:pt-28 pb-32 max-lg:pb-44 px-4 sm:px-6 font-sans text-[#2C2C2C]"
        data-ga-section="website-quote"
        x-data="websiteQuoteWizard()"
    >
        <div class="pointer-events-none absolute -top-16 right-0 w-[min(22rem,88vw)] h-[min(22rem,88vw)] rounded-full bg-white/70 blur-3xl"></div>
        <div class="pointer-events-none absolute top-40 -left-16 w-64 h-64 rounded-full bg-gray-300/35 blur-3xl"></div>

        <div class="max-w-lg mx-auto relative">
            {{-- Wizard --}}
            <div x-show="view === 'wizard'" x-cloak x-transition.opacity.duration.300ms>
                <header class="text-center mb-8">
                    <span class="inline-flex items-center gap-2 text-[0.65rem] font-bold uppercase tracking-[0.2em] text-gray-600 px-3 py-1.5 rounded-full border border-gray-200 bg-white/90 shadow-sm">
                        <span class="w-2 h-2 rounded-full bg-black"></span>
                        {{ __('website_quote.badge_live') }}
                    </span>
                    <h1 class="mt-5 text-3xl sm:text-4xl font-bold tracking-tight text-black leading-tight">
                        {{ __('website_quote.page_title') }}
                    </h1>
                    <p class="mt-3 text-sm text-gray-600 leading-relaxed">
                        {{ __('website_quote.contact_sub') }}
                    </p>
                </header>

                <div class="flex items-center justify-between gap-2 mb-8 px-1">
                    <template x-for="(label, idx) in stepLabels" :key="'wq-step-' + idx">
                        <div class="flex-1 flex flex-col items-center min-w-0">
                            <div
                                class="w-9 h-9 rounded-2xl flex items-center justify-center text-xs font-bold border-2 transition-all duration-300"
                                :class="step > idx ? 'bg-black border-black text-white scale-105 shadow-md' : (step === idx + 1 ? 'border-black text-black bg-white' : 'border-gray-200 text-gray-400 bg-white')"
                                x-text="idx + 1"
                            ></div>
                            <span
                                class="text-[0.65rem] mt-2 font-semibold uppercase tracking-wide text-center leading-tight hidden sm:block"
                                :class="step >= idx + 1 ? 'text-black' : 'text-gray-400'"
                                x-text="label"
                            ></span>
                        </div>
                    </template>
                </div>

                <p x-show="hint" x-text="hint" class="text-sm text-red-600 mb-4 px-1" x-transition></p>

                <div class="bg-white rounded-[1.75rem] border border-gray-200/90 shadow-xl shadow-gray-200/40 p-5 sm:p-7 space-y-8">

                    <div x-show="step === 1" x-transition>
                        <h2 class="text-lg font-bold text-black mb-4">{{ __('website_quote.step_service') }}</h2>
                        <div class="space-y-3">
                            <button
                                type="button"
                                @click="selectType('landing')"
                                class="w-full text-left rounded-2xl border-2 p-4 sm:p-5 transition-all duration-200 active:scale-[0.99]"
                                :class="quoteType === 'landing' ? 'border-black bg-[#F2F2F2]/80 ring-2 ring-black/10' : 'border-gray-200 hover:border-gray-400 bg-white'"
                            >
                                <div class="flex items-start justify-between gap-3">
                                    <div>
                                        <p class="font-bold text-black">{{ __('website_quote.svc_landing_title') }}</p>
                                        <p class="text-sm text-gray-600 mt-1">{{ __('website_quote.svc_landing_desc') }}</p>
                                        <p class="text-xs font-semibold text-gray-500 mt-2">{{ __('website_quote.calc_base') }} · $2,999 {{ __('website_quote.currency') }}</p>
                                    </div>
                                    <span class="text-2xl shrink-0" aria-hidden="true">✦</span>
                                </div>
                            </button>
                            <button
                                type="button"
                                @click="selectType('corporate')"
                                class="w-full text-left rounded-2xl border-2 p-4 sm:p-5 transition-all duration-200 active:scale-[0.99]"
                                :class="quoteType === 'corporate' ? 'border-black bg-[#F2F2F2]/80 ring-2 ring-black/10' : 'border-gray-200 hover:border-gray-400 bg-white'"
                            >
                                <div class="flex items-start justify-between gap-3">
                                    <div>
                                        <p class="font-bold text-black">{{ __('website_quote.svc_corporate_title') }}</p>
                                        <p class="text-sm text-gray-600 mt-1">{{ __('website_quote.svc_corporate_desc') }}</p>
                                        <p class="text-xs font-semibold text-gray-500 mt-2">{{ __('website_quote.calc_base') }} · $4,999 {{ __('website_quote.currency') }}</p>
                                    </div>
                                    <span class="text-2xl shrink-0" aria-hidden="true">◇</span>
                                </div>
                            </button>
                            <button
                                type="button"
                                @click="selectType('custom')"
                                class="w-full text-left rounded-2xl border-2 p-4 sm:p-5 transition-all duration-200 active:scale-[0.99]"
                                :class="quoteType === 'custom' ? 'border-black bg-[#F2F2F2]/80 ring-2 ring-black/10' : 'border-gray-200 hover:border-gray-400 bg-white'"
                            >
                                <div class="flex items-start justify-between gap-3">
                                    <div>
                                        <p class="font-bold text-black">{{ __('website_quote.svc_custom_title') }}</p>
                                        <p class="text-sm text-gray-600 mt-1">{{ __('website_quote.svc_custom_desc') }}</p>
                                        <p class="text-xs font-semibold text-gray-500 mt-2">{{ __('website_quote.calc_base') }} · $19,999 {{ __('website_quote.currency') }}</p>
                                    </div>
                                    <span class="text-2xl shrink-0" aria-hidden="true">⚙</span>
                                </div>
                            </button>
                        </div>
                    </div>

                    <div x-show="step === 2 && quoteType === 'landing'" x-cloak x-transition>
                        <h2 class="text-lg font-bold text-black mb-1">{{ __('website_quote.step_options') }}</h2>
                        <p class="text-sm text-gray-600 mb-5">{{ __('website_quote.svc_landing_title') }}</p>
                        <div class="space-y-3">
                            @foreach (['domain_hosting' => 'landing_opt_domain_hosting', 'social_links' => 'landing_opt_social_links', 'contact_form' => 'landing_opt_contact_form', 'analytics' => 'landing_opt_analytics', 'clarity' => 'landing_opt_clarity'] as $field => $labelKey)
                                <label class="flex items-center gap-4 p-4 rounded-2xl border border-gray-200 bg-[#F2F2F2]/40 cursor-pointer hover:bg-[#F2F2F2]/70 transition-colors">
                                    <input type="checkbox" class="h-5 w-5 rounded border-gray-300 text-black focus:ring-black" x-model="landing.{{ $field }}">
                                    <span class="text-sm font-medium text-[#2C2C2C] flex-1">{{ __('website_quote.'.$labelKey) }}</span>
                                    @if ($field === 'domain_hosting')
                                        <span class="text-xs font-bold text-gray-600 whitespace-nowrap">+$1,999</span>
                                    @else
                                        <span class="text-xs font-bold text-gray-600 whitespace-nowrap">+$199</span>
                                    @endif
                                </label>
                            @endforeach
                        </div>
                    </div>

                    <div x-show="step === 2 && quoteType === 'corporate'" x-cloak x-transition>
                        <h2 class="text-lg font-bold text-black mb-1">{{ __('website_quote.step_options') }}</h2>
                        <p class="text-sm text-gray-600 mb-5">{{ __('website_quote.svc_corporate_title') }}</p>
                        <div class="space-y-4">
                            <label class="flex items-center gap-4 p-4 rounded-2xl border border-gray-200 bg-[#F2F2F2]/40 cursor-pointer hover:bg-[#F2F2F2]/70 transition-colors">
                                <input type="checkbox" class="h-5 w-5 rounded border-gray-300 text-black focus:ring-black" x-model="corporate.domain_hosting">
                                <span class="text-sm font-medium flex-1">{{ __('website_quote.corp_domain') }}</span>
                            </label>
                            <div>
                                <p class="text-sm font-bold text-black mb-2">{{ __('website_quote.corp_screens_title') }}</p>
                                <div class="grid grid-cols-1 gap-2">
                                    <label class="flex items-center gap-3 p-4 rounded-2xl border cursor-pointer transition-all"
                                           :class="corporate.screen_tier === '4' ? 'border-black bg-white ring-1 ring-black' : 'border-gray-200 bg-white hover:border-gray-300'">
                                        <input type="radio" class="h-4 w-4 text-black border-gray-300 focus:ring-black" value="4" x-model="corporate.screen_tier">
                                        <span class="text-sm font-medium">{{ __('website_quote.corp_screens_4') }}</span>
                                    </label>
                                    <label class="flex items-center gap-3 p-4 rounded-2xl border cursor-pointer transition-all"
                                           :class="corporate.screen_tier === '5_7' ? 'border-black bg-white ring-1 ring-black' : 'border-gray-200 bg-white hover:border-gray-300'">
                                        <input type="radio" class="h-4 w-4 text-black border-gray-300 focus:ring-black" value="5_7" x-model="corporate.screen_tier">
                                        <span class="text-sm font-medium">{{ __('website_quote.corp_screens_5_7') }}</span>
                                    </label>
                                </div>
                            </div>
                            <label class="flex items-center gap-4 p-4 rounded-2xl border border-gray-200 bg-[#F2F2F2]/40 cursor-pointer hover:bg-[#F2F2F2]/70 transition-colors">
                                <input type="checkbox" class="h-5 w-5 rounded border-gray-300 text-black focus:ring-black" x-model="corporate.analytics">
                                <span class="text-sm font-medium flex-1">{{ __('website_quote.landing_opt_analytics') }}</span>
                                <span class="text-xs font-bold text-gray-600">+$199</span>
                            </label>
                            <label class="flex items-center gap-4 p-4 rounded-2xl border border-gray-200 bg-[#F2F2F2]/40 cursor-pointer hover:bg-[#F2F2F2]/70 transition-colors">
                                <input type="checkbox" class="h-5 w-5 rounded border-gray-300 text-black focus:ring-black" x-model="corporate.clarity">
                                <span class="text-sm font-medium flex-1">{{ __('website_quote.landing_opt_clarity') }}</span>
                                <span class="text-xs font-bold text-gray-600">+$199</span>
                            </label>
                        </div>
                    </div>

                    <div x-show="step === 2 && quoteType === 'custom'" x-cloak x-transition>
                        <h2 class="text-lg font-bold text-black mb-1">{{ __('website_quote.step_options') }}</h2>
                        <p class="text-sm text-gray-600 mb-5">{{ __('website_quote.svc_custom_title') }} — {{ __('website_quote.calc_includes_domain') }}</p>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-semibold text-black mb-1.5">{{ __('website_quote.custom_problem') }} <span class="text-red-500">*</span></label>
                                <textarea x-model="custom.problem" rows="4" class="w-full rounded-2xl border-gray-300 shadow-sm focus:border-black focus:ring-black text-sm" placeholder=""></textarea>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-black mb-1.5">{{ __('website_quote.custom_users') }} <span class="text-red-500">*</span></label>
                                <textarea x-model="custom.users" rows="3" class="w-full rounded-2xl border-gray-300 shadow-sm focus:border-black focus:ring-black text-sm" placeholder=""></textarea>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-black mb-1.5">{{ __('website_quote.custom_integrations') }}</label>
                                <textarea x-model="custom.integrations" rows="3" class="w-full rounded-2xl border-gray-300 shadow-sm focus:border-black focus:ring-black text-sm" placeholder=""></textarea>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-black mb-1.5">{{ __('website_quote.custom_timeline') }}</label>
                                <input type="text" x-model="custom.timeline" class="w-full rounded-2xl border-gray-300 shadow-sm focus:border-black focus:ring-black text-sm" placeholder="">
                            </div>
                        </div>
                    </div>

                    <div x-show="step === 3" x-cloak x-transition>
                        <h2 class="text-lg font-bold text-black mb-1">{{ __('website_quote.contact_title') }}</h2>
                        <p class="text-sm text-gray-600 mb-6">{{ __('website_quote.contact_sub') }}</p>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">{{ __('website_quote.label_name') }} <span class="text-red-500">*</span></label>
                                <input type="text" x-model="name" class="w-full rounded-2xl border-gray-300 shadow-sm focus:border-black focus:ring-black text-sm" autocomplete="name">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">{{ __('website_quote.label_company') }}</label>
                                <input type="text" x-model="company" class="w-full rounded-2xl border-gray-300 shadow-sm focus:border-black focus:ring-black text-sm" autocomplete="organization">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">{{ __('website_quote.label_email') }} <span class="text-red-500">*</span></label>
                                <input type="email" x-model="email" class="w-full rounded-2xl border-gray-300 shadow-sm focus:border-black focus:ring-black text-sm" autocomplete="email">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">{{ __('website_quote.label_phone') }}</label>
                                <input type="tel" x-model="phone" class="w-full rounded-2xl border-gray-300 shadow-sm focus:border-black focus:ring-black text-sm" autocomplete="tel">
                            </div>
                            <label class="flex items-start gap-3 p-4 rounded-2xl bg-[#F2F2F2]/50 border border-gray-200 cursor-pointer">
                                <input type="checkbox" x-model="create_nova" class="mt-1 h-4 w-4 rounded border-gray-300 text-black focus:ring-black">
                                <span class="text-sm text-[#2C2C2C]">{{ __('website_quote.consent_nova') }}</span>
                            </label>
                            <label class="flex items-start gap-3 p-4 rounded-2xl border-2 border-gray-200 cursor-pointer">
                                <input type="checkbox" x-model="agree_contact" class="mt-1 h-4 w-4 rounded border-gray-300 text-black focus:ring-black">
                                <span class="text-sm font-medium text-black">{{ __('website_quote.agree_contact') }} <span class="text-red-500">*</span></span>
                            </label>
                        </div>

                        <div class="mt-8 p-5 rounded-2xl bg-black text-white" data-marketing-nav-contrast="dark">
                            <p class="text-xs font-bold uppercase tracking-wider text-white/70">{{ __('website_quote.step_options') }}</p>
                            <div class="mt-3 space-y-2 text-sm text-white/95">
                                <div class="flex justify-between gap-4" x-show="quoteType === 'landing'">
                                    <span>{{ __('website_quote.svc_landing_title') }}</span>
                                    <span class="font-semibold">$2,999</span>
                                </div>
                                <div class="flex justify-between gap-4" x-show="quoteType === 'corporate' && corporate.screen_tier === '4'">
                                    <span>{{ __('website_quote.corp_screens_4') }}</span>
                                    <span class="font-semibold">$4,999</span>
                                </div>
                                <div class="flex justify-between gap-4" x-show="quoteType === 'corporate' && corporate.screen_tier === '5_7'">
                                    <span>{{ __('website_quote.corp_screens_5_7') }}</span>
                                    <span class="font-semibold">$5,799</span>
                                </div>
                                <div class="flex justify-between gap-4" x-show="quoteType === 'custom'">
                                    <span>{{ __('website_quote.svc_custom_title') }}</span>
                                    <span class="font-semibold">$19,999</span>
                                </div>
                                <div class="flex justify-between gap-4 text-white/90" x-show="quoteType === 'landing' && landing.domain_hosting">
                                    <span>{{ __('website_quote.calc_domain') }}</span><span>+$1,999</span>
                                </div>
                                <div class="flex justify-between gap-4 text-white/90" x-show="quoteType === 'landing' && (landing.social_links || landing.contact_form || landing.analytics || landing.clarity)">
                                    <span>{{ __('website_quote.calc_extras') }}</span><span x-text="'+$' + formatMoney(landingExtrasSubtotal())"></span>
                                </div>
                                <div class="flex justify-between gap-4 text-white/90" x-show="quoteType === 'corporate' && corporate.domain_hosting">
                                    <span>{{ __('website_quote.calc_domain') }}</span><span>+$1,999</span>
                                </div>
                                <div class="flex justify-between gap-4 text-white/90" x-show="quoteType === 'corporate' && (corporate.analytics || corporate.clarity)">
                                    <span>{{ __('website_quote.calc_extras') }}</span><span x-text="'+$' + formatMoney(corporateExtrasSubtotal())"></span>
                                </div>
                            </div>
                            <div class="mt-4 pt-4 border-t border-white/20 flex justify-between items-baseline">
                                <span class="text-sm font-medium text-white/80">{{ __('website_quote.sticky_estimate') }}</span>
                                <span class="text-2xl font-bold tracking-tight" x-text="'$' + formatMoney(total()) + ' {{ __('website_quote.currency') }}'"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-8 flex items-center justify-between gap-4">
                    <button
                        type="button"
                        x-show="step > 1"
                        @click="prevStep()"
                        class="inline-flex items-center px-5 py-3 rounded-full border border-gray-300 text-sm font-semibold text-[#2C2C2C] bg-white hover:bg-gray-50 transition-colors"
                    >{{ __('website_quote.btn_back') }}</button>
                    <div class="flex-1 flex justify-end">
                        <button
                            type="button"
                            x-show="step < 3"
                            @click="nextStep()"
                            class="inline-flex items-center px-6 py-3 rounded-full bg-black text-white text-sm font-semibold shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all"
                        >{{ __('website_quote.btn_next') }}</button>
                        <button
                            type="button"
                            x-show="step === 3"
                            @click="submitForm()"
                            :disabled="loading"
                            class="inline-flex items-center px-6 py-3 rounded-full bg-black text-white text-sm font-semibold shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all disabled:opacity-50 disabled:pointer-events-none"
                        >
                            <span x-show="!loading">{{ __('website_quote.btn_send') }}</span>
                            <span x-show="loading" class="inline-flex items-center gap-2">
                                <span class="w-4 h-4 border-2 border-white/30 border-t-white rounded-full animate-spin" aria-hidden="true"></span>
                                …
                            </span>
                        </button>
                    </div>
                </div>
            </div>

            {{-- Success --}}
            <div
                x-show="view === 'success'"
                x-cloak
                x-transition:enter="transition ease-out duration-400"
                x-transition:enter-start="opacity-0 translate-y-6"
                x-transition:enter-end="opacity-100 translate-y-0"
                class="text-center py-6"
            >
                <div class="relative inline-flex mb-8">
                    <div class="relative wq-success-ring flex h-24 w-24 items-center justify-center rounded-full bg-[#F2F2F2] border-2 border-black/10">
                        <span class="text-5xl wq-success-icon" aria-hidden="true">✓</span>
                    </div>
                </div>
                <h2 class="text-3xl font-bold text-black tracking-tight">{{ __('website_quote.success_title') }}</h2>
                <p class="mt-3 text-lg font-semibold text-[#2C2C2C]">{{ __('website_quote.success_sub') }}</p>
                <p class="mt-4 text-sm text-gray-600 leading-relaxed max-w-md mx-auto">{{ __('website_quote.success_body') }}</p>
                <p class="mt-6 text-2xl font-bold text-black" x-show="lastTotal > 0" x-text="'~ $' + formatMoney(lastTotal) + ' {{ __('website_quote.currency') }}'"></p>
                <div class="mt-10 flex flex-col sm:flex-row gap-3 justify-center">
                    <a
                        href="tel:+529611465703"
                        class="inline-flex justify-center items-center gap-2 px-6 py-3.5 rounded-full border-2 border-[#2C2C2C] font-semibold text-[#2C2C2C] hover:bg-gray-50 transition-colors"
                        data-track="website_quote_success_call"
                    >{{ __('website_quote.success_call') }} · +52 961 146 5703</a>
                    <a
                        href="https://wa.me/529611465703?text={{ rawurlencode('Hola Nova, acabo de enviar una cotización desde el cotizador web y quiero agilizar el proceso.') }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-flex justify-center items-center px-6 py-3.5 rounded-full bg-[#25D366] text-white font-semibold shadow-md hover:shadow-lg transition-all"
                        data-track="website_quote_success_whatsapp"
                    >{{ __('website_quote.success_whatsapp') }}</a>
                </div>
                <button
                    type="button"
                    @click="restart()"
                    class="mt-8 text-sm font-semibold text-gray-600 hover:text-black underline underline-offset-4"
                >{{ __('website_quote.success_again') }}</button>
            </div>

            {{-- Error --}}
            <div
                x-show="view === 'error'"
                x-cloak
                x-transition.opacity.duration.300ms
                class="text-center py-8 px-2"
            >
                <div class="wq-mascot-bob text-7xl mb-4 select-none" aria-hidden="true">🛸</div>
                <h2 class="text-3xl font-black text-black tracking-tight">{{ __('website_quote.error_title') }}</h2>
                <p class="mt-3 text-5xl font-mono font-bold text-gray-300" x-text="errorStatus > 0 ? errorStatus : '¯\\_(ツ)_/¯'"></p>
                <p class="mt-4 text-sm text-gray-600 max-w-sm mx-auto leading-relaxed" x-text="errorSubtext()"></p>
                <p x-show="errorDetail" class="mt-3 text-xs text-gray-500 max-w-md mx-auto" x-text="errorDetail"></p>
                <div class="mt-10 flex flex-col sm:flex-row gap-3 justify-center">
                    <button
                        type="button"
                        @click="view = 'wizard'; step = 3; hint = '';"
                        class="inline-flex justify-center items-center px-6 py-3.5 rounded-full bg-black text-white font-semibold shadow-lg"
                    >{{ __('website_quote.error_retry') }}</button>
                    <a
                        href="{{ route('home') }}"
                        class="inline-flex justify-center items-center px-6 py-3.5 rounded-full border-2 border-gray-300 font-semibold text-[#2C2C2C] hover:bg-white"
                    >{{ __('website_quote.error_home') }}</a>
                </div>
            </div>
        </div>

        {{-- Sticky estimate bar (wizard only) --}}
        <div
            x-show="view === 'wizard' && quoteType"
            x-cloak
            class="fixed left-0 right-0 z-40 px-4 pt-3 bg-white/90 backdrop-blur-xl border-t border-gray-200/90 shadow-[0_-8px_30px_rgba(0,0,0,0.08)] bottom-0 pb-[max(1rem,env(safe-area-inset-bottom))] max-lg:bottom-[calc(4.35rem+env(safe-area-inset-bottom))] max-lg:pb-3"
        >
            <div class="max-w-lg mx-auto flex items-center justify-between gap-4">
                <div>
                    <p class="text-[0.65rem] font-bold uppercase tracking-wider text-gray-500">{{ __('website_quote.sticky_estimate') }}</p>
                    <p class="text-xl font-bold text-black tabular-nums" x-text="quoteType ? ('$' + formatMoney(total()) + ' ' + '{{ __('website_quote.currency') }}') : '—'"></p>
                </div>
                <div class="text-right text-xs text-gray-500 max-w-[10rem] leading-tight" x-show="step < 3">
                    {{ __('website_quote.step_label') }} <span x-text="step"></span> {{ __('website_quote.of') }} 3
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('alpine:init', () => {
            const CFG = @json($websiteQuoteAlpineCfg);
            Alpine.data('websiteQuoteWizard', () => ({
                view: 'wizard',
                step: 1,
                loading: false,
                hint: '',
                lastTotal: 0,
                quoteType: '',
                errorStatus: 0,
                errorDetail: '',
                wq: CFG.wq,
                storeUrl: CFG.storeUrl,
                stepLabels: @json([__('website_quote.step_service'), __('website_quote.step_options'), __('website_quote.step_contact')]),
                landing: {
                    domain_hosting: false,
                    social_links: false,
                    contact_form: false,
                    analytics: false,
                    clarity: false,
                },
                corporate: {
                    domain_hosting: false,
                    screen_tier: '4',
                    analytics: false,
                    clarity: false,
                },
                custom: { problem: '', users: '', integrations: '', timeline: '' },
                name: '',
                email: '',
                phone: '',
                company: '',
                create_nova: false,
                agree_contact: false,
                selectType(t) {
                    this.quoteType = t;
                    this.hint = '';
                },
                formatMoney(n) {
                    return new Intl.NumberFormat('es-MX', { maximumFractionDigits: 0 }).format(n);
                },
                total() {
                    if (this.quoteType === 'landing') {
                        let t = 2999;
                        if (this.landing.domain_hosting) t += 1999;
                        if (this.landing.social_links) t += 199;
                        if (this.landing.contact_form) t += 199;
                        if (this.landing.analytics) t += 199;
                        if (this.landing.clarity) t += 199;
                        return t;
                    }
                    if (this.quoteType === 'corporate') {
                        let t = 4999;
                        if (this.corporate.domain_hosting) t += 1999;
                        if (this.corporate.screen_tier === '5_7') t += 800;
                        if (this.corporate.analytics) t += 199;
                        if (this.corporate.clarity) t += 199;
                        return t;
                    }
                    if (this.quoteType === 'custom') return 19999;
                    return 0;
                },
                landingExtrasSubtotal() {
                    let e = 0;
                    if (this.landing.social_links) e += 199;
                    if (this.landing.contact_form) e += 199;
                    if (this.landing.analytics) e += 199;
                    if (this.landing.clarity) e += 199;
                    return e;
                },
                corporateExtrasSubtotal() {
                    let e = 0;
                    if (this.corporate.analytics) e += 199;
                    if (this.corporate.clarity) e += 199;
                    return e;
                },
                nextStep() {
                    this.hint = '';
                    if (this.step === 1 && !this.quoteType) {
                        this.hint = this.wq.err_required_service;
                        return;
                    }
                    if (this.step === 2 && this.quoteType === 'custom') {
                        if (!this.custom.problem.trim() || !this.custom.users.trim()) {
                            this.hint = this.wq.err_custom_fields;
                            return;
                        }
                    }
                    if (this.step < 3) {
                        this.step += 1;
                    }
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                },
                prevStep() {
                    this.hint = '';
                    if (this.step > 1) this.step -= 1;
                },
                errorSubtext() {
                    if (this.errorStatus === 422 || this.errorStatus === 400) return this.wq.error_sub_validation;
                    if (this.errorStatus >= 500) return this.wq.error_sub_server;
                    return this.wq.error_sub_network;
                },
                fireConfetti() {
                    if (typeof confetti !== 'function') return;
                    confetti({ particleCount: 120, spread: 70, origin: { y: 0.62 }, scalar: 1.05 });
                    setTimeout(() => { confetti({ particleCount: 70, angle: 55, spread: 62, origin: { x: 0 }, scalar: 0.95 }); }, 200);
                    setTimeout(() => { confetti({ particleCount: 70, angle: 125, spread: 62, origin: { x: 1 }, scalar: 0.95 }); }, 340);
                },
                async submitForm() {
                    this.hint = '';
                    if (!this.name.trim() || !this.email.trim() || !this.agree_contact) {
                        this.hint = this.wq.err_required_fields;
                        return;
                    }
                    const payload = {
                        quote_type: this.quoteType,
                        name: this.name.trim(),
                        email: this.email.trim(),
                        phone: this.phone.trim() || null,
                        company: this.company.trim() || null,
                        create_nova: this.create_nova,
                        agree_contact: true,
                    };
                    if (this.quoteType === 'landing') payload.landing = { ...this.landing };
                    if (this.quoteType === 'corporate') payload.corporate = { ...this.corporate };
                    if (this.quoteType === 'custom') {
                        payload.custom = {
                            problem: this.custom.problem.trim(),
                            users: this.custom.users.trim(),
                            integrations: this.custom.integrations.trim() || null,
                            timeline: this.custom.timeline.trim() || null,
                        };
                    }
                    this.loading = true;
                    try {
                        const res = await fetch(this.storeUrl, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                Accept: 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                            },
                            body: JSON.stringify(payload),
                        });
                        this.loading = false;
                        if (!res.ok) {
                            let msg = '';
                            try {
                                const d = await res.json();
                                if (d.errors) {
                                    msg = Object.values(d.errors).flat().join(' ');
                                } else if (d.message) {
                                    msg = d.message;
                                }
                            } catch (_) {}
                            this.errorStatus = res.status;
                            this.errorDetail = msg;
                            this.view = 'error';
                            return;
                        }
                        const data = await res.json();
                        this.lastTotal = data.total_mxn || this.total();
                        this.view = 'success';
                        this.$nextTick(() => this.fireConfetti());
                        window.scrollTo({ top: 0, behavior: 'smooth' });
                    } catch (_) {
                        this.loading = false;
                        this.errorStatus = 0;
                        this.errorDetail = '';
                        this.view = 'error';
                    }
                },
                restart() {
                    this.view = 'wizard';
                    this.step = 1;
                    this.hint = '';
                    this.lastTotal = 0;
                    this.quoteType = '';
                    this.landing = { domain_hosting: false, social_links: false, contact_form: false, analytics: false, clarity: false };
                    this.corporate = { domain_hosting: false, screen_tier: '4', analytics: false, clarity: false };
                    this.custom = { problem: '', users: '', integrations: '', timeline: '' };
                    this.name = '';
                    this.email = '';
                    this.phone = '';
                    this.company = '';
                    this.create_nova = false;
                    this.agree_contact = false;
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                },
            }));
        });
    </script>
@endpush

@push('body_end')
    <script defer src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.3/dist/confetti.browser.min.js"></script>
@endpush
