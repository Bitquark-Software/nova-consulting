@extends('layouts.marketing')

@section('nav_ga_section', 'nav-faq')

@section('content')
    @php
        $faqSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => [
                [
                    '@type' => 'Question',
                    'name' => 'What services do you offer?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'We offer a comprehensive range of IT services including Custom Software Development, IT Staff Augmentation, Cloud & DevOps Solutions, Technical Consulting, QA & Testing, and System Integration.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name' => 'How long does a typical project take?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Project timelines vary based on scope and complexity. A simple web application might take 4-8 weeks, while enterprise solutions can take 3-6 months or longer. We provide detailed timelines during the consultation phase.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Do you provide ongoing support?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Yes, we offer comprehensive maintenance and support packages to ensure your solutions continue to perform optimally. Our support includes bug fixes, updates, security patches, and feature enhancements.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name' => 'What industries do you serve?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'We serve a wide range of industries including healthcare, finance, e-commerce, education, manufacturing, and more. Our solutions are tailored to meet the specific needs of each industry.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name' => 'How do you ensure project security?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Security is our top priority. We implement industry best practices including secure coding standards, regular security audits, encryption, and compliance with relevant regulations like GDPR and HIPAA.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name' => 'What is your pricing model?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'We offer flexible pricing models including fixed-price projects, time and materials, and dedicated team arrangements. Pricing is customized based on project requirements, and we provide transparent quotes upfront.',
                    ],
                ],
            ],
        ];
    @endphp
    <script type="application/ld+json">
        {!! json_encode($faqSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}
    </script>

    <section id="faq" class="relative pt-28 sm:pt-32 px-4 pb-20 sm:pb-24">
        <div class="max-w-3xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl sm:text-4xl font-bold mb-3 text-black">Preguntas frecuentes</h2>
                <p class="text-lg text-gray-600">Respuestas claras sobre nuestros servicios</p>
            </div>

            <div class="space-y-3">
                <details class="group rounded-2xl border border-gray-200 bg-white open:shadow-md transition-shadow">
                    <summary class="cursor-pointer list-none px-5 py-4 font-semibold flex items-center justify-between gap-4 text-[#2C2C2C]">
                        <span>What services do you offer?</span>
                        <span class="text-gray-400 group-open:rotate-180 transition-transform shrink-0">▼</span>
                    </summary>
                    <div class="px-5 pb-4 text-sm text-gray-600 border-t border-gray-100 pt-3">We offer a comprehensive range of IT services including Custom Software Development, IT Staff Augmentation, Cloud &amp; DevOps Solutions, Technical Consulting, QA &amp; Testing, and System Integration.</div>
                </details>

                <details class="group rounded-2xl border border-gray-200 bg-white open:shadow-md transition-shadow">
                    <summary class="cursor-pointer list-none px-5 py-4 font-semibold flex items-center justify-between gap-4 text-[#2C2C2C]">
                        <span>How long does a typical project take?</span>
                        <span class="text-gray-400 group-open:rotate-180 transition-transform shrink-0">▼</span>
                    </summary>
                    <div class="px-5 pb-4 text-sm text-gray-600 border-t border-gray-100 pt-3">Project timelines vary based on scope and complexity. A simple web application might take 4-8 weeks, while enterprise solutions can take 3-6 months or longer. We provide detailed timelines during the consultation phase.</div>
                </details>

                <details class="group rounded-2xl border border-gray-200 bg-white open:shadow-md transition-shadow">
                    <summary class="cursor-pointer list-none px-5 py-4 font-semibold flex items-center justify-between gap-4 text-[#2C2C2C]">
                        <span>Do you provide ongoing support?</span>
                        <span class="text-gray-400 group-open:rotate-180 transition-transform shrink-0">▼</span>
                    </summary>
                    <div class="px-5 pb-4 text-sm text-gray-600 border-t border-gray-100 pt-3">Yes, we offer comprehensive maintenance and support packages to ensure your solutions continue to perform optimally. Our support includes bug fixes, updates, security patches, and feature enhancements.</div>
                </details>

                <details class="group rounded-2xl border border-gray-200 bg-white open:shadow-md transition-shadow">
                    <summary class="cursor-pointer list-none px-5 py-4 font-semibold flex items-center justify-between gap-4 text-[#2C2C2C]">
                        <span>What industries do you serve?</span>
                        <span class="text-gray-400 group-open:rotate-180 transition-transform shrink-0">▼</span>
                    </summary>
                    <div class="px-5 pb-4 text-sm text-gray-600 border-t border-gray-100 pt-3">We serve a wide range of industries including healthcare, finance, e-commerce, education, manufacturing, and more. Our solutions are tailored to meet the specific needs of each industry.</div>
                </details>

                <details class="group rounded-2xl border border-gray-200 bg-white open:shadow-md transition-shadow">
                    <summary class="cursor-pointer list-none px-5 py-4 font-semibold flex items-center justify-between gap-4 text-[#2C2C2C]">
                        <span>How do you ensure project security?</span>
                        <span class="text-gray-400 group-open:rotate-180 transition-transform shrink-0">▼</span>
                    </summary>
                    <div class="px-5 pb-4 text-sm text-gray-600 border-t border-gray-100 pt-3">Security is our top priority. We implement industry best practices including secure coding standards, regular security audits, encryption, and compliance with relevant regulations like GDPR and HIPAA.</div>
                </details>

                <details class="group rounded-2xl border border-gray-200 bg-white open:shadow-md transition-shadow">
                    <summary class="cursor-pointer list-none px-5 py-4 font-semibold flex items-center justify-between gap-4 text-[#2C2C2C]">
                        <span>What is your pricing model?</span>
                        <span class="text-gray-400 group-open:rotate-180 transition-transform shrink-0">▼</span>
                    </summary>
                    <div class="px-5 pb-4 text-sm text-gray-600 border-t border-gray-100 pt-3">We offer flexible pricing models including fixed-price projects, time and materials, and dedicated team arrangements. Pricing is customized based on project requirements, and we provide transparent quotes upfront.</div>
                </details>
            </div>
        </div>
    </section>
@endsection