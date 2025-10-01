<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.global_header');

<body class="min-h-screen bg-[#F2F2F2] text-[#2C2C2C]">
    @include('layouts.landing_navbar');
    <!-- Hero Section -->
    <section class="relative pt-40 px-6 md:px-12 cosmic-grid">
        <div class="relative max-w-7xl mx-auto text-center space-y-6">
            <h1 class="text-4xl md:text-6xl font-bold tracking-tighter">
                Services That Scale
                <br />
                <span class="text-[#242424]">With Your Business</span>
            </h1>
            <p class="text-lg md:text-xl text-[#0c0c0c] max-w-2xl mx-auto">
                From custom software to elite tech talent, we provide comprehensive IT solutions
                that help your business innovate faster and operate smarter.
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
                                    Custom Software Development
                                </h2>
                                <p class="text-base text-[#a1a1a1]">
                                    Tailored solutions for unique business challenges
                                </p>
                            </div>
                        </div>

                        <p class="text-[#a1a1a1] leading-relaxed">
                            Transform your vision into reality with enterprise-grade applications built using cutting-edge technologies. Our team specializes in creating scalable, maintainable software that grows with your business.
                        </p>

                        <div class="space-y-3">
                            <h4 class="text-sm font-semibold uppercase tracking-wider text-[#a1a1a1]">
                                Technologies
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
                                What We Offer
                            </h3>
                            <div class="grid sm:grid-cols-2 gap-3">
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Full-stack web applications</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Mobile apps (iOS & Android)</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Progressive Web Apps (PWAs)</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">API development & integration</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Legacy system modernization</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">MVP & prototype development</span>
                                </div>
                            </div>
                        </div>

                        <!-- Benefits -->
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
                                    <span class="text-sm text-[#a1a1a1]">Faster time to market</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M5 12h14" />
                                        <path d="m12 5 7 7-7 7" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Scalable architecture</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M5 12h14" />
                                        <path d="m12 5 7 7-7 7" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Clean, maintainable code</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M5 12h14" />
                                        <path d="m12 5 7 7-7 7" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Ongoing support & maintenance</span>
                                </div>
                            </div>
                        </div>

                        <!-- CTA -->
                        <div class="pt-6">
                            <button class="w-full px-6 py-3 bg-[#2C2C2C] text-white rounded-md font-semibold hover:bg-[#525252] transition-colors flex items-center justify-center gap-2 group">
                                Create your project
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
                                    IT Staffing Solutions
                                </h2>
                                <p class="text-base text-[#a1a1a1]">
                                    Elite tech talent, ready when you need them
                                </p>
                            </div>
                        </div>

                        <p class="text-[#a1a1a1] leading-relaxed">
                            Access a curated network of pre-vetted senior developers, architects, and tech specialists. Whether you need to scale your team temporarily or find permanent hires, we connect you with professionals who deliver.
                        </p>

                        <div class="space-y-3">
                            <h4 class="text-sm font-semibold uppercase tracking-wider text-[#a1a1a1]">
                                Technologies
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
                                What We Offer
                            </h3>
                            <div class="grid sm:grid-cols-2 gap-3">
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Contract developers</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Permanent placements</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Team augmentation</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Dedicated development teams</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Tech lead & architects</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Specialized roles (DevOps, QA, etc.)</span>
                                </div>
                            </div>
                        </div>

                        <!-- Benefits -->
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
                                    <span class="text-sm text-[#a1a1a1]">Pre-vetted professionals</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M5 12h14" />
                                        <path d="m12 5 7 7-7 7" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Flexible engagement models</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M5 12h14" />
                                        <path d="m12 5 7 7-7 7" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Quick onboarding</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M5 12h14" />
                                        <path d="m12 5 7 7-7 7" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Cultural fit guaranteed</span>
                                </div>
                            </div>
                        </div>

                        <!-- CTA -->
                        <div class="pt-6">
                            <button class="w-full px-6 py-3 bg-[#2C2C2C] text-white rounded-md font-semibold hover:bg-[#525252] transition-colors flex items-center justify-center gap-2 group">
                                Assemble your team
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
                                <h2 class="text-2xl md:text-3xl font-bold mb-2 tracking-tight">Cloud Infrastructure & DevOps</h2>
                                <p class="text-base text-[#a1a1a1]">Reliable, scalable, secure cloud solutions</p>
                            </div>
                        </div>
                        <p class="text-[#a1a1a1] leading-relaxed">
                            Deploy and manage your applications with confidence. Our DevOps experts handle everything from initial cloud migration to ongoing optimization, ensuring your infrastructure is robust, cost-effective, and secure.
                        </p>
                        <div class="space-y-3">
                            <h4 class="text-sm font-semibold uppercase tracking-wider text-[#a1a1a1]">Technologies</h4>
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
                                What We Offer
                            </h3>
                            <div class="grid sm:grid-cols-2 gap-3">
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Cloud migration (AWS, Azure, GCP)</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">CI/CD pipeline setup</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Kubernetes & container orchestration</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Infrastructure as Code (Terraform)</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Monitoring & observability</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Cost optimization</span>
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
                                    <span class="text-sm text-[#a1a1a1]">99.9% uptime guarantee</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M5 12h14" />
                                        <path d="m12 5 7 7-7 7" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Auto-scaling capabilities</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M5 12h14" />
                                        <path d="m12 5 7 7-7 7" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">24/7 monitoring</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M5 12h14" />
                                        <path d="m12 5 7 7-7 7" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Reduced operational costs</span>
                                </div>
                            </div>
                        </div>
                        <div class="pt-6">
                            <button class="w-full px-6 py-3 bg-[#2C2C2C] text-white rounded-md font-semibold hover:bg-[#525252] transition-colors flex items-center justify-center gap-2 group">
                                Migrate to the Cloud
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
                                <h2 class="text-2xl md:text-3xl font-bold mb-2 tracking-tight">Technical Consulting</h2>
                                <p class="text-base text-[#a1a1a1]">Strategic guidance from industry veterans</p>
                            </div>
                        </div>
                        <p class="text-[#a1a1a1] leading-relaxed">
                            Make informed technology decisions with expert guidance. Our senior architects and consultants bring decades of experience to help you choose the right tech stack, optimize processes, and plan your digital transformation.
                        </p>
                        <div class="space-y-3">
                            <h4 class="text-sm font-semibold uppercase tracking-wider text-[#a1a1a1]">Technologies</h4>
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
                                What We Offer
                            </h3>
                            <div class="grid sm:grid-cols-2 gap-3">
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Technology stack assessment</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Architecture design & review</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Performance optimization</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Security audits</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Digital transformation roadmaps</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Technical due diligence</span>
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
                                    <span class="text-sm text-[#a1a1a1]">Reduced technical debt</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M5 12h14" />
                                        <path d="m12 5 7 7-7 7" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Better technology decisions</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M5 12h14" />
                                        <path d="m12 5 7 7-7 7" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Improved system performance</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M5 12h14" />
                                        <path d="m12 5 7 7-7 7" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Risk mitigation</span>
                                </div>
                            </div>
                        </div>
                        <div class="pt-6">
                            <button class="w-full px-6 py-3 bg-[#2C2C2C] text-white rounded-md font-semibold hover:bg-[#525252] transition-colors flex items-center justify-center gap-2 group">
                                Book a Call
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
                                <h2 class="text-2xl md:text-3xl font-bold mb-2 tracking-tight">Quality Assurance & Testing</h2>
                                <p class="text-base text-[#a1a1a1]">Ship with confidence, every time</p>
                            </div>
                        </div>
                        <p class="text-[#a1a1a1] leading-relaxed">
                            Ensure your software meets the highest quality standards before it reaches your users. Our QA engineers implement comprehensive testing strategies that catch bugs early and maintain code quality throughout development.
                        </p>
                        <div class="space-y-3">
                            <h4 class="text-sm font-semibold uppercase tracking-wider text-[#a1a1a1]">Technologies</h4>
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
                                What We Offer
                            </h3>
                            <div class="grid sm:grid-cols-2 gap-3">
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Automated testing frameworks</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Manual QA & exploratory testing</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Performance & load testing</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Dependency audit</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Mobile app testing</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Regression testing</span>
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
                                    <span class="text-sm text-[#a1a1a1]">Fewer production bugs</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M5 12h14" />
                                        <path d="m12 5 7 7-7 7" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Faster release cycles</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M5 12h14" />
                                        <path d="m12 5 7 7-7 7" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Better user experience</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M5 12h14" />
                                        <path d="m12 5 7 7-7 7" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Cost savings on fixes</span>
                                </div>
                            </div>
                        </div>
                        <div class="pt-6">
                            <button class="w-full px-6 py-3 bg-[#2C2C2C] text-white rounded-md font-semibold hover:bg-[#525252] transition-colors flex items-center justify-center gap-2 group">
                                Protect your project
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
                                <h2 class="text-2xl md:text-3xl font-bold mb-2 tracking-tight">System Integration</h2>
                                <p class="text-base text-[#a1a1a1]">Connect everything, seamlessly</p>
                            </div>
                        </div>
                        <p class="text-[#a1a1a1] leading-relaxed">
                            Break down data silos and streamline workflows by connecting your existing systems. We build robust integrations that ensure data flows smoothly between your CRM, ERP, payment systems, and custom applications.
                        </p>
                        <div class="space-y-3">
                            <h4 class="text-sm font-semibold uppercase tracking-wider text-[#a1a1a1]">Technologies</h4>
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
                                What We Offer
                            </h3>
                            <div class="grid sm:grid-cols-2 gap-3">
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">API development & integration</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Third-party service connections</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">ETL & data migration</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Webhook implementations</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Real-time data synchronization</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg>
                                    <span class="text-sm text-[#a1a1a1]">Legacy system connectivity</span>
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
                                Hire our experts
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
                Ready to Transform Your Business?
            </h2>
            <p class="text-lg text-[#a1a1a1]">
                Let's discuss how our services can help you achieve your goals.
                Book a free consultation call with our team.
            </p>
            <button class="px-8 py-3 bg-[#2C2C2C] text-white rounded-md font-semibold hover:bg-[#525252] transition-colors inline-flex items-center gap-2 text-lg" onclick="window.location = 'https://calendly.com/idsfernandomorales/30min'">
                Schedule Free Consultation
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14" />
                    <path d="m12 5 7 7-7 7" />
                </svg>
            </button>
        </div>
    </section>
    @include('layouts.footer');

</body>

</html>