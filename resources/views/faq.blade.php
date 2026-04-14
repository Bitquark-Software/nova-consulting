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
                    'name' => __('messages.faq_page.q1'),
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => __('messages.faq_page.a1'),
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name' => __('messages.faq_page.q2'),
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => __('messages.faq_page.a2'),
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name' => __('messages.faq_page.q3'),
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => __('messages.faq_page.a3'),
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name' => __('messages.faq_page.q4'),
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => __('messages.faq_page.a4'),
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name' => __('messages.faq_page.q5'),
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => __('messages.faq_page.a5'),
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name' => __('messages.faq_page.q6'),
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => __('messages.faq_page.a6'),
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
                <h2 class="text-3xl sm:text-4xl font-bold mb-3 text-black">{{ __('messages.faq_page.title') }}</h2>
                <p class="text-lg text-gray-600">{{ __('messages.faq_page.subtitle') }}</p>
            </div>

            <div class="space-y-3">
                <details class="group rounded-2xl border border-gray-200 bg-white open:shadow-md transition-shadow">
                    <summary class="cursor-pointer list-none px-5 py-4 font-semibold flex items-center justify-between gap-4 text-[#2C2C2C]">
                        <span>{{ __('messages.faq_page.q1') }}</span>
                        <span class="text-gray-400 group-open:rotate-180 transition-transform shrink-0">▼</span>
                    </summary>
                    <div class="px-5 pb-4 text-sm text-gray-600 border-t border-gray-100 pt-3">{{ __('messages.faq_page.a1') }}</div>
                </details>

                <details class="group rounded-2xl border border-gray-200 bg-white open:shadow-md transition-shadow">
                    <summary class="cursor-pointer list-none px-5 py-4 font-semibold flex items-center justify-between gap-4 text-[#2C2C2C]">
                        <span>{{ __('messages.faq_page.q2') }}</span>
                        <span class="text-gray-400 group-open:rotate-180 transition-transform shrink-0">▼</span>
                    </summary>
                    <div class="px-5 pb-4 text-sm text-gray-600 border-t border-gray-100 pt-3">{{ __('messages.faq_page.a2') }}</div>
                </details>

                <details class="group rounded-2xl border border-gray-200 bg-white open:shadow-md transition-shadow">
                    <summary class="cursor-pointer list-none px-5 py-4 font-semibold flex items-center justify-between gap-4 text-[#2C2C2C]">
                        <span>{{ __('messages.faq_page.q3') }}</span>
                        <span class="text-gray-400 group-open:rotate-180 transition-transform shrink-0">▼</span>
                    </summary>
                    <div class="px-5 pb-4 text-sm text-gray-600 border-t border-gray-100 pt-3">{{ __('messages.faq_page.a3') }}</div>
                </details>

                <details class="group rounded-2xl border border-gray-200 bg-white open:shadow-md transition-shadow">
                    <summary class="cursor-pointer list-none px-5 py-4 font-semibold flex items-center justify-between gap-4 text-[#2C2C2C]">
                        <span>{{ __('messages.faq_page.q4') }}</span>
                        <span class="text-gray-400 group-open:rotate-180 transition-transform shrink-0">▼</span>
                    </summary>
                    <div class="px-5 pb-4 text-sm text-gray-600 border-t border-gray-100 pt-3">{{ __('messages.faq_page.a4') }}</div>
                </details>

                <details class="group rounded-2xl border border-gray-200 bg-white open:shadow-md transition-shadow">
                    <summary class="cursor-pointer list-none px-5 py-4 font-semibold flex items-center justify-between gap-4 text-[#2C2C2C]">
                        <span>{{ __('messages.faq_page.q5') }}</span>
                        <span class="text-gray-400 group-open:rotate-180 transition-transform shrink-0">▼</span>
                    </summary>
                    <div class="px-5 pb-4 text-sm text-gray-600 border-t border-gray-100 pt-3">{{ __('messages.faq_page.a5') }}</div>
                </details>

                <details class="group rounded-2xl border border-gray-200 bg-white open:shadow-md transition-shadow">
                    <summary class="cursor-pointer list-none px-5 py-4 font-semibold flex items-center justify-between gap-4 text-[#2C2C2C]">
                        <span>{{ __('messages.faq_page.q6') }}</span>
                        <span class="text-gray-400 group-open:rotate-180 transition-transform shrink-0">▼</span>
                    </summary>
                    <div class="px-5 pb-4 text-sm text-gray-600 border-t border-gray-100 pt-3">{{ __('messages.faq_page.a6') }}</div>
                </details>
            </div>
        </div>
    </section>
@endsection