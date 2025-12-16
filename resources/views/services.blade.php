<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.global_header')

<body class="min-h-screen bg-[#F2F2F2] text-[#2C2C2C]">
    @include('layouts.landing_navbar')
    <!-- Hero Section -->
    <section class="relative pt-40 px-6 md:px-12 cosmic-grid">
        <div class="relative max-w-7xl mx-auto text-center space-y-6">
            <h1 class="text-4xl md:text-6xl font-bold tracking-tighter">
                {{ __('messages.services_page.hero_title') }}
                <br />
                <span class="text-[#242424]">{{ __('messages.services_page.with_your_business') }}</span>
            </h1>
            <p class="text-lg md:text-xl text-[#0c0c0c] max-w-2xl mx-auto">
                {{ __('messages.services_page.hero_subtitle') }}
            </p>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-16 px-6 md:px-12">
        <div class="max-w-7xl mx-auto space-y-16">
            <!-- Service 1: Custom Software Development -->
            <div class="group hover:shadow-2xl transition-all duration-500 overflow-hidden border border-[#333]/50 hover:border-[#fff]/30 rounded-lg">
                <div class="grid md:grid-cols-[1fr,2fr] gap-0">
                    <!-- Left Column -->
                    <div class="space-y-6 p-8 md:p-10 bg-[#ffffff]">
                        <div class="space-y-4">
                            <div class="w-16 h-16 rounded-2xl bg-[#f3f3f3] flex items-center justify-center text-black group-hover:scale-110 transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z" />
                                    <path d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65" />
                                    <path d="m22 12.65-9.17 4.16a2 2 0 0 1-1.66 0L2 12.65" />
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-2xl md:text-3xl font-bold mb-2 tracking-tight">
                                    {{ __('messages.services_page.custom_software_title') }}
                                </h2>
                                <p class="text-base text-[#a1a1a1]">
                                    {{ __('messages.services_page.custom_software_subtitle') }}
                                </p>
                            </div>
                        </div>

                        <p class="text-[#a1a1a1] leading-relaxed">
                            {{ __('messages.services_page.custom_software_description') }}
                        </p>

                        <div class="space-y-3">
                            <h4 class="text-sm font-semibold uppercase tracking-wider text-[#a1a1a1]">
                                {{ __('messages.services_page.technologies') }}
                            </h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 text-xs rounded-md bg-[#1a1a1a] text-[#fafafa] border border-[#333]">React</span>
                                <span class="px-3 py-1 text-xs rounded-md bg-[#1a1a1a] text-[#fafafa] border border-[#333]">Node.js</span>
                                <span class="px-3 py-1 text-xs rounded-md bg-[#1a1a1a] text-[#fafafa] border border-[#333]">Python</span>
                                <span class="px-3 py-1 text-xs rounded-md bg-[#1a1a1a] text-[#fafafa] border border-[#333]">TypeScript</span>
                                <span class="px-3 py-1 text-xs rounded-md bg-[#1a1a1a] text-[#fafafa] border border-[#333]">AWS</span>
                                <span class="px-3 py-1 text-xs rounded-md bg-[#1a1a1a] text-[#fafafa] border border-[#333]">Docker</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="p-8 md:p-10 space-y-8 bg-[#efefef]">
                        <!-- Features -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold flex items-center gap-2">
                                <span class="w-1 h-6 bg-[#2C2C2C] rounded-full"></span>
                                {{ __('messages.services_page.what_we_offer') }}
                            </h3>
                            <div class="grid sm:grid-cols-2 gap-3">
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.feature_full_stack') }}</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.feature_mobile_apps') }}</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.feature_pwa') }}</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.feature_api_integration') }}</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.feature_legacy_modernization') }}</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.feature_mvp') }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- Benefits -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold flex items-center gap-2">
                                <span class="w-1 h-6 bg-[#2C2C2C] rounded-full"></span>
                                {{ __('messages.services_page.key_benefits') }}
                            </h3>
                            <div class="grid sm:grid-cols-2 gap-3">
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M5 12h14" />
                                        <path d="m12 5 7 7-7 7" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.benefit_faster_time_to_market') }}</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M5 12h14" />
                                        <path d="m12 5 7 7-7 7" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.benefit_scalable_architecture') }}</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M5 12h14" />
                                        <path d="m12 5 7 7-7 7" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.benefit_clean_maintainable_code') }}</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M5 12h14" />
                                        <path d="m12 5 7 7-7 7" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.benefit_ongoing_support') }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- CTA -->
                        <div class="pt-6">
                            <button class="w-full px-6 py-3 bg-[#2C2C2C] text-white rounded-md font-semibold hover:bg-[#525252] transition-colors flex items-center justify-center gap-2 group">
                                {{ __('messages.services_page.cta_create_project') }}
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-hover:translate-x-1 transition-transform">
                                    <path d="M5 12h14" />
                                    <path d="m12 5 7 7-7 7" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 2: IT Staffing Solutions -->
            <div class="group hover:shadow-2xl transition-all duration-500 overflow-hidden border border-[#333]/50 hover:border-[#fff]/30 rounded-lg">
                <div class="grid md:grid-cols-[1fr,2fr] gap-0">
                    <!-- Left Column -->
                    <div class="space-y-6 p-8 md:p-10 bg-[#ffffff]">
                        <div class="space-y-4">
                            <div class="w-16 h-16 rounded-2xl bg-[#f3f3f3] flex items-center justify-center text-black group-hover:scale-110 transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                    <circle cx="9" cy="7" r="4" />
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-2xl md:text-3xl font-bold mb-2 tracking-tight">
                                    {{ __('messages.services_page.it_staffing_title') }}
                                </h2>
                                <p class="text-base text-[#a1a1a1]">
                                    {{ __('messages.services_page.it_staffing_subtitle') }}
                                </p>
                            </div>
                        </div>

                        <p class="text-[#a1a1a1] leading-relaxed">
                            {{ __('messages.services_page.it_staffing_description') }}
                        </p>

                        <div class="space-y-3">
                            <h4 class="text-sm font-semibold uppercase tracking-wider text-[#a1a1a1]">
                                {{ __('messages.services_page.technologies') }}
                            </h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 text-xs rounded-md bg-[#1a1a1a] text-[#fafafa] border border-[#333]">React</span>
                                <span class="px-3 py-1 text-xs rounded-md bg-[#1a1a1a] text-[#fafafa] border border-[#333]">Vue</span>
                                <span class="px-3 py-1 text-xs rounded-md bg-[#1a1a1a] text-[#fafafa] border border-[#333]">Angular</span>
                                <span class="px-3 py-1 text-xs rounded-md bg-[#1a1a1a] text-[#fafafa] border border-[#333]">Java</span>
                                <span class="px-3 py-1 text-xs rounded-md bg-[#1a1a1a] text-[#fafafa] border border-[#333]">Python</span>
                                <span class="px-3 py-1 text-xs rounded-md bg-[#1a1a1a] text-[#fafafa] border border-[#333]">Go</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="p-8 md:p-10 space-y-8 bg-[#efefef]">
                        <!-- Features -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold flex items-center gap-2">
                                <span class="w-1 h-6 bg-[#2C2C2C] rounded-full"></span>
                                {{ __('messages.services_page.what_we_offer') }}
                            </h3>
                            <div class="grid sm:grid-cols-2 gap-3">
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.it_contract_developers') }}</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.it_permanent_placements') }}</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.it_team_augmentation') }}</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.it_dedicated_teams') }}</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.it_tech_leads') }}</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.cloud_migration') }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- Benefits -->
                        <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.cicd_pipeline') }}</span>
                        <h3 class="text-lg font-semibold flex items-center gap-2">
                            <span class="w-1 h-6 bg-[#2C2C2C] rounded-full"></span>
                            {{ __('messages.services_page.key_benefits') }}
                        </h3>
                        <div class="grid sm:grid-cols-2 gap-3">
                            <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.kubernetes_orchestration') }}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                <path d="M5 12h14" />
                                <path d="m12 5 7 7-7 7" />
                            </svg>
                            <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.benefit_prevetted_professionals') }}</span>
                            <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.iaas_terraform') }}</span>
                            <div class="flex items-start gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                    <path d="M5 12h14" />
                                    <path d="m12 5 7 7-7 7" />
                                </svg>
                                <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.monitoring_observability') }}</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                    <path d="M5 12h14" />
                                    <path d="m12 5 7 7-7 7" />
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.cost_optimization') }}</span>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.benefit_quick_onboarding') }}</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                    <path d="M5 12h14" />
                                    <path d="m12 5 7 7-7 7" />
                                </svg>
                                <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.benefit_cultural_fit') }}</span>
                            </div>
                        </div>
                        <!-- CTA -->
                        <div class="pt-6">
                            <button class="w-full px-6 py-3 bg-[#2C2C2C] text-white rounded-md font-semibold hover:bg-[#525252] transition-colors flex items-center justify-center gap-2 group">
                                {{ __('messages.services_page.cta_assemble_team') }}
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-hover:translate-x-1 transition-transform">
                                    <path d="M5 12h14" />
                                    <path d="m12 5 7 7-7 7" />
                                </svg>
                            </button>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Service 3: Cloud Infrastructure & DevOps -->
            <div class="group hover:shadow-2xl transition-all duration-500 overflow-hidden border border-[#333]/50 hover:border-[#fff]/30 rounded-lg">
                <div class="grid md:grid-cols-[1fr,2fr] gap-0">
                    <div class="space-y-6 p-8 md:p-10 bg-[#ffffff]">
                        <div class="space-y-4">
                            <div class="w-16 h-16 rounded-2xl bg-[#f3f3f3] flex items-center justify-center text-black group-hover:scale-110 transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z" />
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-2xl md:text-3xl font-bold mb-2 tracking-tight">{{ __('messages.services_page.cloud_infra_title') }}</h2>
                                <p class="text-base text-[#a1a1a1]">{{ __('messages.services_page.cloud_infra_subtitle') }}</p>
                            </div>
                        </div>
                        <p class="text-[#a1a1a1] leading-relaxed">
                            {{ __('messages.services_page.cloud_infra_description') }}
                        </p>
                        <div class="space-y-3">
                            <h4 class="text-sm font-semibold uppercase tracking-wider text-[#a1a1a1]">{{ __('messages.services_page.technologies') }}</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 text-xs rounded-md bg-[#1a1a1a] text-[#fafafa] border border-[#333]">AWS</span>
                                <span class="px-3 py-1 text-xs rounded-md bg-[#1a1a1a] text-[#fafafa] border border-[#333]">Azure</span>
                                <span class="px-3 py-1 text-xs rounded-md bg-[#1a1a1a] text-[#fafafa] border border-[#333]">GCP</span>
                                <span class="px-3 py-1 text-xs rounded-md bg-[#1a1a1a] text-[#fafafa] border border-[#333]">Kubernetes</span>
                                <span class="px-3 py-1 text-xs rounded-md bg-[#1a1a1a] text-[#fafafa] border border-[#333]">Terraform</span>
                                <span class="px-3 py-1 text-xs rounded-md bg-[#1a1a1a] text-[#fafafa] border border-[#333]">Jenkins</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-8 md:p-10 space-y-8">
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold flex items-center gap-2">
                                <span class="w-1 h-6 bg-[#2C2C2C] rounded-full"></span>
                                {{ __('messages.services_page.what_we_offer') }}
                            </h3>
                            <div class="grid sm:grid-cols-2 gap-3">
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.cloud_migration') }}</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.cicd_pipeline') }}</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.it_specialized_roles') }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- Benefits -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold flex items-center gap-2">
                                <span class="w-1 h-6 bg-[#2C2C2C] rounded-full"></span>
                                {{ __('messages.services_page.key_benefits') }}
                            </h3>
                            <div class="grid sm:grid-cols-2 gap-3">
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M5 12h14" />
                                        <path d="m12 5 7 7-7 7" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.benefit_prevetted_professionals') }}</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M5 12h14" />
                                        <path d="m12 5 7 7-7 7" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.benefit_flexible_engagement') }}</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M5 12h14" />
                                        <path d="m12 5 7 7-7 7" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.benefit_quick_onboarding') }}</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M5 12h14" />
                                        <path d="m12 5 7 7-7 7" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.benefit_cultural_fit') }}</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M5 12h14" />
                                        <path d="m12 5 7 7-7 7" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.benefit_reduced_operational_costs') }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- CTA -->
                        <div class="pt-6">
                            <button class="w-full px-6 py-3 bg-[#2C2C2C] text-white rounded-md font-semibold hover:bg-[#525252] transition-colors flex items-center justify-center gap-2 group">
                                {{ __('messages.services_page.cta_migrate_cloud') }}
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-hover:translate-x-1 transition-transform">
                                    <path d="M5 12h14" />
                                    <path d="m12 5 7 7-7 7" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 4: Technical Consulting -->
            <div class="group hover:shadow-2xl transition-all duration-500 overflow-hidden border border-[#333]/50 hover:border-[#fff]/30 rounded-lg">
                <div class="grid md:grid-cols-[1fr,2fr] gap-0">
                    <div class="space-y-6 p-8 md:p-10 bg-[#ffffff]">
                        <div class="space-y-4">
                            <div class="w-16 h-16 rounded-2xl bg-[#f3f3f3] flex items-center justify-center text-black group-hover:scale-110 transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-2xl md:text-3xl font-bold mb-2 tracking-tight">{{ __('messages.services_page.technical_consulting_title') }}</h2>
                                <p class="text-base text-[#a1a1a1]">{{ __('messages.services_page.technical_consulting_subtitle') }}</p>
                            </div>
                        </div>
                        <p class="text-[#a1a1a1] leading-relaxed">
                            {{ __('messages.services_page.technical_consulting_description') }}
                        </p>
                        <div class="space-y-3">
                            <h4 class="text-sm font-semibold uppercase tracking-wider text-[#a1a1a1]">{{ __('messages.services_page.technologies') }}</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 text-xs rounded-md bg-[#1a1a1a] text-[#fafafa] border border-[#333]">Microservices</span>
                                <span class="px-3 py-1 text-xs rounded-md bg-[#1a1a1a] text-[#fafafa] border border-[#333]">Serverless</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-8 md:p-10 space-y-8">
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold flex items-center gap-2">
                                <span class="w-1 h-6 bg-[#2C2C2C] rounded-full"></span>
                                {{ __('messages.services_page.what_we_offer') }}
                            </h3>
                            <div class="grid sm:grid-cols-2 gap-3">
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.consulting_stack_assessment') }}</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.consulting_architecture_review') }}</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.consulting_performance') }}</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.consulting_security_audits') }}</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.consulting_transformation_roadmaps') }}</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.consulting_due_diligence') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold flex items-center gap-2">
                                <span class="w-1 h-6 bg-[#2C2C2C] rounded-full"></span>
                                {{ __('messages.services_page.key_benefits') }}
                            </h3>
                            <div class="grid sm:grid-cols-2 gap-3">
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M5 12h14" />
                                        <path d="m12 5 7 7-7 7" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.benefit_reduced_technical_debt') }}</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M5 12h14" />
                                        <path d="m12 5 7 7-7 7" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.benefit_better_technology_decisions') }}</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M5 12h14" />
                                        <path d="m12 5 7 7-7 7" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.benefit_improved_system_performance') }}</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M5 12h14" />
                                        <path d="m12 5 7 7-7 7" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.benefit_risk_mitigation') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="pt-6">
                            <button class="w-full px-6 py-3 bg-[#2C2C2C] text-white rounded-md font-semibold hover:bg-[#525252] transition-colors flex items-center justify-center gap-2 group">
                                {{ __('messages.services_page.cta_book_call') }}
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-hover:translate-x-1 transition-transform">
                                    <path d="M5 12h14" />
                                    <path d="m12 5 7 7-7 7" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 5: Quality Assurance & Testing -->
            <div class="group hover:shadow-2xl transition-all duration-500 overflow-hidden border border-[#333]/50 hover:border-[#fff]/30 rounded-lg">
                <div class="grid md:grid-cols-[1fr,2fr] gap-0">
                    <div class="space-y-6 p-8 md:p-10 bg-[#ffffff]">
                        <div class="space-y-4">
                            <div class="w-16 h-16 rounded-2xl bg-[#f3f3f3] flex items-center justify-center text-black group-hover:scale-110 transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10" />
                                    <path d="m9 12 2 2 4-4" />
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-2xl md:text-3xl font-bold mb-2 tracking-tight">{{ __('messages.services_page.qa_title') }}</h2>
                                <p class="text-base text-[#a1a1a1]">{{ __('messages.services_page.qa_subtitle') }}</p>
                            </div>
                        </div>
                        <p class="text-[#a1a1a1] leading-relaxed">
                            {{ __('messages.services_page.qa_description') }}
                        </p>
                        <div class="space-y-3">
                            <h4 class="text-sm font-semibold uppercase tracking-wider text-[#a1a1a1]">{{ __('messages.services_page.technologies') }}</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 text-xs rounded-md bg-[#1a1a1a] text-[#fafafa] border border-[#333]">Selenium</span>
                                <span class="px-3 py-1 text-xs rounded-md bg-[#1a1a1a] text-[#fafafa] border border-[#333]">Cypress</span>
                                <span class="px-3 py-1 text-xs rounded-md bg-[#1a1a1a] text-[#fafafa] border border-[#333]">Jest</span>
                                <span class="px-3 py-1 text-xs rounded-md bg-[#1a1a1a] text-[#fafafa] border border-[#333]">JMeter</span>
                                <span class="px-3 py-1 text-xs rounded-md bg-[#1a1a1a] text-[#fafafa] border border-[#333]">Postman</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-8 md:p-10 space-y-8">
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold flex items-center gap-2">
                                <span class="w-1 h-6 bg-[#2C2C2C] rounded-full"></span>
                                {{ __('messages.services_page.what_we_offer') }}
                            </h3>
                            <div class="grid sm:grid-cols-2 gap-3">
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.feature_automated_testing_frameworks') }}</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.feature_manual_qa') }}</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.feature_performance_load_testing') }}</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.feature_dependency_audit') }}</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.feature_mobile_app_testing') }}</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.feature_regression_testing') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold flex items-center gap-2">
                                <span class="w-1 h-6 bg-[#2C2C2C] rounded-full"></span>
                                {{ __('messages.services_page.key_benefits') }}
                            </h3>
                            <div class="grid sm:grid-cols-2 gap-3">
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M5 12h14" />
                                        <path d="m12 5 7 7-7 7" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.benefit_fewer_production_bugs') }}</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M5 12h14" />
                                        <path d="m12 5 7 7-7 7" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.benefit_faster_release_cycles') }}</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M5 12h14" />
                                        <path d="m12 5 7 7-7 7" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.benefit_better_user_experience') }}</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M5 12h14" />
                                        <path d="m12 5 7 7-7 7" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.benefit_cost_savings_on_fixes') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="pt-6">
                            <button class="w-full px-6 py-3 bg-[#2C2C2C] text-white rounded-md font-semibold hover:bg-[#525252] transition-colors flex items-center justify-center gap-2 group">
                                {{ __('messages.services_page.cta_protect_project') }}

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-hover:translate-x-1 transition-transform">
                                    <path d="M5 12h14" />
                                    <path d="m12 5 7 7-7 7" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 6: System Integration -->
            <div class="group hover:shadow-2xl transition-all duration-500 overflow-hidden border border-[#333]/50 hover:border-[#fff]/30 rounded-lg">
                <div class="grid md:grid-cols-[1fr,2fr] gap-0">
                    <div class="space-y-6 p-8 md:p-10 bg-[#ffffff]">
                        <div class="space-y-4">
                            <div class="w-16 h-16 rounded-2xl bg-[#f3f3f3] flex items-center justify-center text-black group-hover:scale-110 transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="2" />
                                    <path d="M12 2v4m0 12v4M4.93 4.93l2.83 2.83m8.48 8.48 2.83 2.83M2 12h4m12 0h4M4.93 19.07l2.83-2.83m8.48-8.48 2.83-2.83" />
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-2xl md:text-3xl font-bold mb-2 tracking-tight">{{ __('messages.services_page.system_integration_title') }}</h2>
                                <p class="text-base text-[#a1a1a1]">{{ __('messages.services_page.system_integration_subtitle') }}</p>
                            </div>
                        </div>
                        <p class="text-[#a1a1a1] leading-relaxed">
                            {{ __('messages.services_page.system_integration_description') }}
                        </p>
                        <div class="space-y-3">
                            <h4 class="text-sm font-semibold uppercase tracking-wider text-[#a1a1a1]">{{ __('messages.services_page.technologies') }}</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 text-xs rounded-md bg-[#1a1a1a] text-[#fafafa] border border-[#333]">REST</span>
                                <span class="px-3 py-1 text-xs rounded-md bg-[#1a1a1a] text-[#fafafa] border border-[#333]">GraphQL</span>
                                <span class="px-3 py-1 text-xs rounded-md bg-[#1a1a1a] text-[#fafafa] border border-[#333]">gRPC</span>
                                <span class="px-3 py-1 text-xs rounded-md bg-[#1a1a1a] text-[#fafafa] border border-[#333]">Odoo</span>
                                <span class="px-3 py-1 text-xs rounded-md bg-[#1a1a1a] text-[#fafafa] border border-[#333]">PayPal</span>
                                <span class="px-3 py-1 text-xs rounded-md bg-[#1a1a1a] text-[#fafafa] border border-[#333]">Stripe</span>
                                <span class="px-3 py-1 text-xs rounded-md bg-[#1a1a1a] text-[#fafafa] border border-[#333]">Open Pay</span>
                                <span class="px-3 py-1 text-xs rounded-md bg-[#1a1a1a] text-[#fafafa] border border-[#333]">Woo</span>
                                <span class="px-3 py-1 text-xs rounded-md bg-[#1a1a1a] text-[#fafafa] border border-[#333]">n8n</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-8 md:p-10 space-y-8">
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold flex items-center gap-2">
                                <span class="w-1 h-6 bg-[#2C2C2C] rounded-full"></span>
                                {{ __('messages.services_page.what_we_offer') }}
                            </h3>
                            <div class="grid sm:grid-cols-2 gap-3">
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.feature_api_development_integration') }}</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.feature_third_party_connections') }}</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.feature_etl_data_migration') }}</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.feature_webhook_implementations') }}</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.feature_real_time_sync') }}</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">{{ __('messages.services_page.feature_legacy_connectivity') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold flex items-center gap-2">
                                <span class="w-1 h-6 bg-[#2C2C2C] rounded-full"></span>
                                Key Benefits
                            </h3>
                            <div class="grid sm:grid-cols-2 gap-3">
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M5 12h14" />
                                        <path d="m12 5 7 7-7 7" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Improved data accuracy</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M5 12h14" />
                                        <path d="m12 5 7 7-7 7" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Automated workflows</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M5 12h14" />
                                        <path d="m12 5 7 7-7 7" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Real-time insights</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M5 12h14" />
                                        <path d="m12 5 7 7-7 7" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Reduced manual work</span>
                                </div>
                            </div>
                        </div>
                        <div class="pt-6">
                            <button class="w-full px-6 py-3 bg-[#2C2C2C] text-white rounded-md font-semibold hover:bg-[#525252] transition-colors flex items-center justify-center gap-2 group">
                                {{ __('messages.services_page.cta_hire_experts') }}
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-hover:translate-x-1 transition-transform">
                                    <path d="M5 12h14" />
                                    <path d="m12 5 7 7-7 7" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bottom CTA -->
    <section class="py-20 px-6 md:px-12">
        <div class="max-w-4xl mx-auto text-center space-y-8 cosmic-gradient rounded-3xl p-12">
            <h2 class="text-3xl md:text-4xl font-bold tracking-tight">
                {{ __('messages.services_page.bottom_cta_title') }}
            </h2>
            <p class="text-lg text-[#a1a1a1]">
                {{ __('messages.services_page.bottom_cta_subtitle') }}
            </p>
            <button class="px-8 py-3 bg-[#2C2C2C] text-white rounded-md font-semibold hover:bg-[#525252] transition-colors inline-flex items-center gap-2 text-lg" onclick="window.location = 'https://calendar.app.google/b8nHVZEUCh1LdLcL8'">
                {{ __('messages.services_page.cta_schedule_consultation') }}
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14" />
                    <path d="m12 5 7 7-7 7" />
                </svg>
            </button>
        </div>
    </section>
    @include('layouts.footer')

</body>

</html>