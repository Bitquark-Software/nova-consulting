{{-- Short SEO / blog-style guide shell --}}
@php
    $faqs = $faqs ?? [];
    $related = $related ?? [];
    $leadSource = $leadSource ?? 'guide';
@endphp

<article class="pt-28 sm:pt-32 pb-16 px-4 sm:px-6" data-ga-section="guide-article">
    <div class="max-w-3xl mx-auto">
        <nav class="text-sm text-gray-500 mb-6" aria-label="{{ __('guides.shell.breadcrumb_aria') }}">
            <a href="{{ route('home') }}" class="hover:text-black transition-colors">{{ __('guides.shell.home') }}</a>
            <span class="mx-2" aria-hidden="true">/</span>
            <span class="text-gray-800 font-medium">{{ __('guides.shell.guide_crumb') }}</span>
        </nav>

        <h1 class="text-3xl sm:text-4xl font-bold text-black leading-tight tracking-tight">{{ $h1 }}</h1>
        @if(!empty($lede))
            <div class="mt-6 space-y-4 text-lg text-gray-700 leading-relaxed font-light">
                @foreach($lede as $p)
                    <p>{{ $p }}</p>
                @endforeach
            </div>
        @endif

        <div class="mt-8 rounded-2xl border border-gray-200 bg-gradient-to-br from-black to-gray-800 text-white p-6 sm:p-8 shadow-lg">
            <p class="text-sm uppercase tracking-wider text-gray-400">{{ __('guides.shell.next_step_label') }}</p>
            <p class="mt-2 text-lg font-semibold">{{ __('guides.shell.next_step_title') }}</p>
            <p class="mt-2 text-sm text-gray-300">{{ __('guides.shell.next_step_body') }}</p>
            <div class="mt-5 flex flex-col sm:flex-row gap-3">
                <a href="https://wa.me/529611465703?text={{ urlencode(__('guides.shell.whatsapp_prefill')) }}" target="_blank" rel="noopener noreferrer" class="inline-flex justify-center items-center px-6 py-3 rounded-full bg-white text-black font-semibold text-sm hover:bg-gray-100 transition-colors" data-track="guide_cta_whatsapp">{{ __('guides.shell.whatsapp') }}</a>
                <a href="{{ route('website_quote') }}" class="inline-flex justify-center items-center px-6 py-3 rounded-full border-2 border-white/40 font-semibold text-sm hover:bg-white/10 transition-colors" data-track="guide_cta_quote">{{ __('guides.shell.quote_online') }}</a>
            </div>
        </div>

        @foreach($sections ?? [] as $section)
            <section class="mt-12">
                <h2 class="text-xl sm:text-2xl font-bold text-black">{{ $section['title'] }}</h2>
                @if(!empty($section['paragraphs']))
                    <div class="mt-4 space-y-3 text-gray-700 leading-relaxed">
                        @foreach($section['paragraphs'] as $para)
                            <p>{{ $para }}</p>
                        @endforeach
                    </div>
                @endif
                @if(!empty($section['bullets']))
                    <ul class="mt-4 space-y-2 text-gray-700 list-disc pl-5">
                        @foreach($section['bullets'] as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                @endif
            </section>
        @endforeach

        @if(count($faqs))
            <section class="mt-14">
                <h2 class="text-xl font-bold text-black">{{ __('guides.shell.faq_title') }}</h2>
                @php
                    // Structured data for FAQPage (helps crawlers understand Q/A pairs).
                    $faqMain = array_map(function ($faq, $key) {
                        if (is_array($faq) && isset($faq['q'])) {
                            return [
                                '@type' => 'Question',
                                'name' => $faq['q'],
                                'acceptedAnswer' => [
                                    '@type' => 'Answer',
                                    'text' => $faq['a'] ?? '',
                                ],
                            ];
                        }

                        return [
                            '@type' => 'Question',
                            'name' => $key,
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => is_string($faq) ? $faq : '',
                            ],
                        ];
                    }, $faqs, array_keys($faqs));
                    $faqSchema = [
                        '@context' => 'https://schema.org',
                        '@type' => 'FAQPage',
                        'mainEntity' => $faqMain,
                    ];
                @endphp
                <script type="application/ld+json">
                    {!! json_encode($faqSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}
                </script>
                <div class="mt-4 space-y-2">
                    @foreach($faqs as $key => $faq)
                        @php
                            if (is_array($faq) && isset($faq['q'])) {
                                $q = $faq['q'];
                                $a = $faq['a'] ?? '';
                            } else {
                                $q = $key;
                                $a = $faq;
                            }
                        @endphp
                        <details class="rounded-2xl border border-gray-200 bg-white open:shadow-sm transition-shadow">
                            <summary class="cursor-pointer list-none px-4 py-3 font-semibold text-[#2C2C2C] flex justify-between gap-2">
                                <span>{{ $q }}</span>
                                <span class="text-gray-400 shrink-0">▼</span>
                            </summary>
                            <div class="px-4 pb-3 text-sm text-gray-600 border-t border-gray-100 pt-2">{{ $a }}</div>
                        </details>
                    @endforeach
                </div>
            </section>
        @endif

        @if(count($related))
            <section class="mt-14 rounded-2xl border border-gray-200 bg-white p-6">
                <h2 class="text-lg font-bold text-black">{{ __('guides.shell.related_title') }}</h2>
                <ul class="mt-4 space-y-2 text-sm">
                    @foreach($related as $label => $url)
                        <li>
                            <a href="{{ $url }}" class="text-black font-medium border-b border-black/20 hover:border-black transition-colors">{{ $label }}</a>
                        </li>
                    @endforeach
                </ul>
            </section>
        @endif

        <div class="mt-12 flex flex-wrap gap-4 text-sm">
            <a href="{{ route('services') }}" class="font-semibold text-gray-600 hover:text-black transition-colors">{{ __('guides.shell.footer_services') }}</a>
            <a href="{{ route('contact') }}" class="font-semibold text-gray-600 hover:text-black transition-colors">{{ __('guides.shell.footer_contact') }}</a>
            <a href="{{ url('/diseno-paginas-web-tuxtla-chiapas') }}" class="font-semibold text-gray-600 hover:text-black transition-colors">{{ __('guides.shell.footer_tuxtla_web') }}</a>
        </div>
    </div>

    @include('partials.lead-qualification-form', ['leadSource' => $leadSource])

    @if(!empty($articleJsonLd))
        <script type="application/ld+json">{!! json_encode($articleJsonLd, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
    @endif
</article>
