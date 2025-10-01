<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.global_header');

<body class="min-h-screen bg-[#F2F2F2] text-[#2C2C2C]">
    @include('layouts.landing_navbar');

    <!-- FAQ Section -->
    <section id="faq" class="relative pt-40 px-4 mb-40">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 gradient-text text-[#2C2C2C]">Frequently Asked Questions</h2>
                <p class="text-xl text-gray-600">Find answers to common questions about our services</p>
            </div>

            <div class="space-y-4">
                <div class="group hover:shadow-2xl transition-all duration-500 overflow-hidden border border-[#333]/50 hover:border-[#fff]/30 rounded-lg p-6">
                    <h3 class="text-xl font-semibold mb-3 text-[#2C2C2C]">What services do you offer?</h3>
                    <p class="text-gray-600">We offer a comprehensive range of IT services including Custom Software Development, IT Staff Augmentation, Cloud & DevOps Solutions, Technical Consulting, QA & Testing, and System Integration.</p>
                </div>

                <div class="group hover:shadow-2xl transition-all duration-500 overflow-hidden border border-[#333]/50 hover:border-[#fff]/30 rounded-lg p-6">
                    <h3 class="text-xl font-semibold mb-3 text-[#2C2C2C]">How long does a typical project take?</h3>
                    <p class="text-gray-600">Project timelines vary based on scope and complexity. A simple web application might take 4-8 weeks, while enterprise solutions can take 3-6 months or longer. We provide detailed timelines during the consultation phase.</p>
                </div>

                <div class="group hover:shadow-2xl transition-all duration-500 overflow-hidden border border-[#333]/50 hover:border-[#fff]/30 rounded-lg p-6">
                    <h3 class="text-xl font-semibold mb-3 text-[#2C2C2C]">Do you provide ongoing support?</h3>
                    <p class="text-gray-600">Yes, we offer comprehensive maintenance and support packages to ensure your solutions continue to perform optimally. Our support includes bug fixes, updates, security patches, and feature enhancements.</p>
                </div>

                <div class="group hover:shadow-2xl transition-all duration-500 overflow-hidden border border-[#333]/50 hover:border-[#fff]/30 rounded-lg p-6">
                    <h3 class="text-xl font-semibold mb-3 text-[#2C2C2C]">What industries do you serve?</h3>
                    <p class="text-gray-600">We serve a wide range of industries including healthcare, finance, e-commerce, education, manufacturing, and more. Our solutions are tailored to meet the specific needs of each industry.</p>
                </div>

                <div class="group hover:shadow-2xl transition-all duration-500 overflow-hidden border border-[#333]/50 hover:border-[#fff]/30 rounded-lg p-6">
                    <h3 class="text-xl font-semibold mb-3 text-[#2C2C2C]">How do you ensure project security?</h3>
                    <p class="text-gray-600">Security is our top priority. We implement industry best practices including secure coding standards, regular security audits, encryption, and compliance with relevant regulations like GDPR and HIPAA.</p>
                </div>

                <div class="group hover:shadow-2xl transition-all duration-500 overflow-hidden border border-[#333]/50 hover:border-[#fff]/30 rounded-lg p-6">
                    <h3 class="text-xl font-semibold mb-3 text-[#2C2C2C]">What is your pricing model?</h3>
                    <p class="text-gray-600">We offer flexible pricing models including fixed-price projects, time and materials, and dedicated team arrangements. Pricing is customized based on project requirements, and we provide transparent quotes upfront.</p>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footer');
</body>
</html>