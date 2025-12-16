<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.global_header')

<body class="min-h-screen bg-[#F2F2F2] text-[#2C2C2C]">
    @include('layouts.landing_navbar')

    <!-- FAQ Section -->
    <!-- <section id="faq" class="relative py-20 px-4 bg-gray-900/30">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 gradient-text">Frequently Asked Questions</h2>
                <p class="text-xl text-gray-400">Find answers to common questions about our services</p>
            </div>

            <div class="space-y-4">
                <div class="bg-gray-900/50 backdrop-blur-sm p-6 rounded-xl border border-purple-500/20">
                    <h3 class="text-xl font-semibold mb-3 text-purple-400">What services do you offer?</h3>
                    <p class="text-gray-300">We offer a comprehensive range of IT services including Custom Software Development, IT Staff Augmentation, Cloud & DevOps Solutions, Technical Consulting, QA & Testing, and System Integration.</p>
                </div>

                <div class="bg-gray-900/50 backdrop-blur-sm p-6 rounded-xl border border-purple-500/20">
                    <h3 class="text-xl font-semibold mb-3 text-purple-400">How long does a typical project take?</h3>
                    <p class="text-gray-300">Project timelines vary based on scope and complexity. A simple web application might take 4-8 weeks, while enterprise solutions can take 3-6 months or longer. We provide detailed timelines during the consultation phase.</p>
                </div>

                <div class="bg-gray-900/50 backdrop-blur-sm p-6 rounded-xl border border-purple-500/20">
                    <h3 class="text-xl font-semibold mb-3 text-purple-400">Do you provide ongoing support?</h3>
                    <p class="text-gray-300">Yes, we offer comprehensive maintenance and support packages to ensure your solutions continue to perform optimally. Our support includes bug fixes, updates, security patches, and feature enhancements.</p>
                </div>

                <div class="bg-gray-900/50 backdrop-blur-sm p-6 rounded-xl border border-purple-500/20">
                    <h3 class="text-xl font-semibold mb-3 text-purple-400">What industries do you serve?</h3>
                    <p class="text-gray-300">We serve a wide range of industries including healthcare, finance, e-commerce, education, manufacturing, and more. Our solutions are tailored to meet the specific needs of each industry.</p>
                </div>

                <div class="bg-gray-900/50 backdrop-blur-sm p-6 rounded-xl border border-purple-500/20">
                    <h3 class="text-xl font-semibold mb-3 text-purple-400">How do you ensure project security?</h3>
                    <p class="text-gray-300">Security is our top priority. We implement industry best practices including secure coding standards, regular security audits, encryption, and compliance with relevant regulations like GDPR and HIPAA.</p>
                </div>

                <div class="bg-gray-900/50 backdrop-blur-sm p-6 rounded-xl border border-purple-500/20">
                    <h3 class="text-xl font-semibold mb-3 text-purple-400">What is your pricing model?</h3>
                    <p class="text-gray-300">We offer flexible pricing models including fixed-price projects, time and materials, and dedicated team arrangements. Pricing is customized based on project requirements, and we provide transparent quotes upfront.</p>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Contact Section -->
    <section id="contact" class="relative pt-40 px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 gradient-text">{{ __('messages.contact.get_in_touch') }}</h2>
                <p class="text-xl text-gray-600">{{ __('messages.contact.ready_start') }}</p>
            </div>

            <div class="grid md:grid-cols-2 gap-12 mb-20">
                <div>
                    <h3 class="text-2xl font-bold mb-6 text-[#2C2C2C]">{{ __('messages.contact.contact_information') }}</h3>
                    
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <svg class="w-6 h-6 text-gray-700 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <div>
                                <p class="font-semibold text-gray-700">{{ __('messages.contact.email') }}</p>
                                <a href="mailto:sales@novaconsulting.com.mx" class="text-gray-600">sales@novaconsulting.com.mx</a>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <svg class="w-6 h-6 text-gray-700 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <div>
                                <p class="font-semibold text-gray-700">{{ __('messages.contact.phone') }}</p>
                                <a href="tel:+529611003141" class="text-gray-600">+52 961 100 3141</a>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <svg class="w-6 h-6 text-gray-600 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <div>
                                <p class="font-semibold text-gray-700">{{ __('messages.contact.address') }}</p>
                                <p class="text-gray-600">1067 Chihuahua Avenue, Tuxtla Gutierrez, Chiapas 29020</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <h4 class="text-lg font-semibold mb-4 text-gray-600">{{ __('messages.contact.business_hours') }}</h4>
                        <div class="space-y-2 text-gray-700">
                            <p>{{ __('messages.contact.monday_friday') }}</p>
                            <p>{{ __('messages.contact.saturday') }}</p>
                            <p>{{ __('messages.contact.sunday') }}</p>
                        </div>
                    </div>
                </div>

                <!-- TBD -->
                <!-- <div class="bg-gray-900/50 backdrop-blur-sm p-8 rounded-xl border border-purple-500/20 glow-border">
                    <form class="space-y-6">
                        <div>
                            <label for="name" class="block text-sm font-medium mb-2 text-gray-200">Name</label>
                            <input type="text" id="name" class="w-full px-4 py-3 bg-gray-800/50 border border-gray-700 rounded-lg focus:outline-none focus:border-purple-500 text-gray-200" placeholder="Your name">
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium mb-2 text-gray-200">Email</label>
                            <input type="email" id="email" class="w-full px-4 py-3 bg-gray-800/50 border border-gray-700 rounded-lg focus:outline-none focus:border-purple-500 text-gray-200" placeholder="your@email.com">
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-medium mb-2 text-gray-200">Subject</label>
                            <input type="text" id="subject" class="w-full px-4 py-3 bg-gray-800/50 border border-gray-700 rounded-lg focus:outline-none focus:border-purple-500 text-gray-200" placeholder="How can we help?">
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium mb-2 text-gray-200">Message</label>
                            <textarea id="message" rows="4" class="w-full px-4 py-3 bg-gray-800/50 border border-gray-700 rounded-lg focus:outline-none focus:border-purple-500 text-gray-200" placeholder="Tell us about your project"></textarea>
                        </div>

                        <button type="submit" class="w-full px-6 py-3 bg-gradient-to-r from-purple-600 to-pink-600 text-white font-semibold rounded-lg hover:from-purple-700 hover:to-pink-700 transition-all duration-200 transform hover:scale-105">
                            Send Message
                        </button>
                    </form>
                </div> -->
            </div>
        </div>
    </section>

    <!-- Careers Section -->
    <!-- <section id="careers" class="relative py-20 px-4 bg-gray-900/30">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 gradient-text">Join Our Team</h2>
                <p class="text-xl text-gray-400">Build the future with us</p>
            </div>

            <div class="mb-16 bg-gray-900/50 backdrop-blur-sm p-8 rounded-xl border border-purple-500/20 text-center">
                <h3 class="text-2xl font-bold mb-4 text-gray-200">Why Work With Us?</h3>
                <p class="text-gray-300 max-w-3xl mx-auto mb-8">
                    We believe in creating an environment where talented individuals can thrive, innovate, and make a real impact. Join a team that values creativity, continuous learning, and work-life balance.
                </p>
                
                <div class="grid md:grid-cols-4 gap-6">
                    <div class="p-4">
                        <div class="text-3xl mb-2">🚀</div>
                        <h4 class="font-semibold text-gray-200 mb-1">Innovation</h4>
                        <p class="text-sm text-gray-400">Work on cutting-edge projects</p>
                    </div>
                    <div class="p-4">
                        <div class="text-3xl mb-2">📚</div>
                        <h4 class="font-semibold text-gray-200 mb-1">Growth</h4>
                        <p class="text-sm text-gray-400">Continuous learning opportunities</p>
                    </div>
                    <div class="p-4">
                        <div class="text-3xl mb-2">⚖️</div>
                        <h4 class="font-semibold text-gray-200 mb-1">Balance</h4>
                        <p class="text-sm text-gray-400">Flexible work arrangements</p>
                    </div>
                    <div class="p-4">
                        <div class="text-3xl mb-2">💰</div>
                        <h4 class="font-semibold text-gray-200 mb-1">Benefits</h4>
                        <p class="text-sm text-gray-400">Competitive compensation</p>
                    </div>
                </div>
            </div>

            <div class="space-y-6">
                <h3 class="text-3xl font-bold mb-8 text-center text-purple-400">Open Positions</h3>

                <div class="bg-gray-900/50 backdrop-blur-sm p-6 rounded-xl border border-purple-500/20 hover:border-purple-500/40 transition-all">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                        <div>
                            <h4 class="text-xl font-bold text-gray-200 mb-2">Senior Full Stack Developer</h4>
                            <div class="flex flex-wrap gap-3 text-sm text-gray-400">
                                <span class="flex items-center gap-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    </svg>
                                    Remote / San Francisco
                                </span>
                                <span class="flex items-center gap-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    Full-time
                                </span>
                            </div>
                        </div>
                        <button class="px-6 py-3 bg-gradient-to-r from-purple-600 to-pink-600 text-white font-semibold rounded-lg hover:from-purple-700 hover:to-pink-700 transition-all duration-200 transform hover:scale-105 whitespace-nowrap">
                            Apply Now
                        </button>
                    </div>
                </div>

                <div class="bg-gray-900/50 backdrop-blur-sm p-6 rounded-xl border border-purple-500/20 hover:border-purple-500/40 transition-all">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                        <div>
                            <h4 class="text-xl font-bold text-gray-200 mb-2">DevOps Engineer</h4>
                            <div class="flex flex-wrap gap-3 text-sm text-gray-400">
                                <span class="flex items-center gap-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    </svg>
                                    Remote / New York
                                </span>
                                <span class="flex items-center gap-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    Full-time
                                </span>
                            </div>
                        </div>
                        <button class="px-6 py-3 bg-gradient-to-r from-purple-600 to-pink-600 text-white font-semibold rounded-lg hover:from-purple-700 hover:to-pink-700 transition-all duration-200 transform hover:scale-105 whitespace-nowrap">
                            Apply Now
                        </button>
                    </div>
                </div>

                <div class="bg-gray-900/50 backdrop-blur-sm p-6 rounded-xl border border-purple-500/20 hover:border-purple-500/40 transition-all">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                        <div>
                            <h4 class="text-xl font-bold text-gray-200 mb-2">UX/UI Designer</h4>
                            <div class="flex flex-wrap gap-3 text-sm text-gray-400">
                                <span class="flex items-center gap-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    </svg>
                                    Remote / Austin
                                </span>
                                <span class="flex items-center gap-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    Full-time
                                </span>
                            </div>
                        </div>
                        <button class="px-6 py-3 bg-gradient-to-r from-purple-600 to-pink-600 text-white font-semibold rounded-lg hover:from-purple-700 hover:to-pink-700 transition-all duration-200 transform hover:scale-105 whitespace-nowrap">
                            Apply Now
                        </button>
                    </div>
                </div>

                <div class="bg-gray-900/50 backdrop-blur-sm p-6 rounded-xl border border-purple-500/20 hover:border-purple-500/40 transition-all">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                        <div>
                            <h4 class="text-xl font-bold text-gray-200 mb-2">QA Automation Engineer</h4>
                            <div class="flex flex-wrap gap-3 text-sm text-gray-400">
                                <span class="flex items-center gap-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    </svg>
                                    Remote / Boston
                                </span>
                                <span class="flex items-center gap-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    Full-time
                                </span>
                            </div>
                        </div>
                        <button class="px-6 py-3 bg-gradient-to-r from-purple-600 to-pink-600 text-white font-semibold rounded-lg hover:from-purple-700 hover:to-pink-700 transition-all duration-200 transform hover:scale-105 whitespace-nowrap">
                            Apply Now
                        </button>
                    </div>
                </div>
            </div>

            <div class="mt-12 text-center">
                <p class="text-gray-400 mb-4">Don't see the right position?</p>
                <button class="px-8 py-3 border border-purple-500/50 text-purple-400 font-semibold rounded-lg hover:bg-purple-500/10 transition-all duration-200">
                    Send us your resume
                </button>
            </div>
        </div>
    </section> -->

    @include('layouts.footer')
</body>
</html>