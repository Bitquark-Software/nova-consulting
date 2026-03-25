@php
    $bp = trans('blog.cheap_labor_page');
    $canonical = url('/blog/mano-de-obra-barata');
    $seo_overrides = [
        'title' => $bp['seo_title'],
        'description' => $bp['seo_description'],
        'keywords' => $bp['seo_keywords'],
        'og' => [
            'title' => $bp['seo_title'],
            'description' => $bp['seo_description'],
            'type' => 'website',
            'url' => $canonical,
            'image' => asset('images/og-default.png'),
        ],
    ];
@endphp

@extends('layouts.marketing')

@section('nav_ga_section', 'nav-blog')
@section('propuesta_href', url('/contact#propuesta'))

@section('content')
<div class="relative pt-28 sm:pt-32 pb-20 px-4 sm:px-6 overflow-hidden">
    <div class="pointer-events-none absolute -top-24 right-0 w-[min(28rem,90vw)] h-[min(28rem,90vw)] rounded-full bg-white/80 blur-3xl"></div>
    <div class="pointer-events-none absolute top-40 -left-20 w-72 h-72 rounded-full bg-gray-300/40 blur-3xl"></div>

    <div class="relative max-w-4xl mx-auto">
        {{-- Hero --}}
        <header class="text-center">
            <span class="inline-flex items-center gap-2 text-xs font-semibold uppercase tracking-[0.18em] text-gray-600 px-3 py-1.5 rounded-full border border-gray-200 bg-white/90 shadow-sm">
                <span class="w-2 h-2 rounded-full bg-black animate-pulse"></span>
                {{ $bp['hero_badge'] }}
            </span>

            <h1 class="mt-6 text-4xl sm:text-5xl md:text-6xl font-bold tracking-tight text-black leading-[1.08]">
                {{ $bp['hero_title'] }}
            </h1>
            <p class="mt-5 text-lg sm:text-xl text-gray-600 leading-relaxed font-light">
                {{ $bp['hero_subtitle'] }}
            </p>

            <div class="mt-10 flex flex-col sm:flex-row flex-wrap items-center justify-center gap-3">
                <a href="{{ route('contact') }}"
                   class="inline-flex justify-center items-center w-full sm:w-auto min-w-48 px-8 py-3.5 rounded-full bg-black text-white font-semibold shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all"
                   data-track="blog_cheap_labor_cta_contact">
                    {{ $bp['hero_cta_contact'] }}
                </a>
                <a href="{{ route('quotations') }}"
                   class="inline-flex justify-center items-center w-full sm:w-auto min-w-48 px-8 py-3.5 rounded-full border-2 border-[#2C2C2C] font-semibold hover:bg-gray-50 transition-all"
                   data-track="blog_cheap_labor_cta_quote">
                    {{ $bp['hero_cta_quote'] }}
                </a>
                <a href="{{ route('services') }}"
                   class="inline-flex justify-center items-center w-full sm:w-auto min-w-48 px-8 py-3.5 rounded-full bg-gray-100 text-black font-semibold hover:bg-gray-200 transition-all"
                   data-track="blog_cheap_labor_cta_services">
                    {{ $bp['hero_cta_services'] }}
                </a>
            </div>
        </header>

        {{-- Table of contents --}}
        <section class="mt-16 rounded-2xl border border-gray-200 bg-white p-6 sm:p-8 shadow-sm" aria-label="{{ $bp['toc_title'] }}">
            <h2 class="text-xl font-bold text-black">{{ $bp['toc_title'] }}</h2>
            <div class="mt-5 grid sm:grid-cols-2 gap-3">
                @foreach ($bp['toc'] as $item)
                    <a href="#{{ $item['id'] }}"
                       class="group inline-flex items-center justify-between gap-3 px-4 py-3 rounded-xl border border-gray-200 bg-white hover:bg-gray-50 hover:border-gray-300 transition-colors"
                       data-track="blog_cheap_labor_toc_{{ $item['id'] }}">
                        <span class="text-sm font-semibold text-[#2C2C2C] group-hover:text-black">{{ $item['label'] }}</span>
                        <span class="text-gray-400 group-hover:text-black transition-colors">→</span>
                    </a>
                @endforeach
            </div>
        </section>

        {{-- Long content --}}
        @foreach ($bp['sections'] as $section)
            <section id="{{ $section['id'] }}" class="mt-16 scroll-mt-28">
                <h2 class="text-2xl sm:text-3xl font-bold text-black">{{ $section['title'] }}</h2>

                <div class="mt-5 space-y-4 text-gray-700 leading-relaxed">
                    @foreach (($section['paragraphs'] ?? []) as $p)
                        <p>{{ $p }}</p>
                    @endforeach
                </div>

                @if (! empty($section['bullets']))
                    <ul class="mt-6 grid sm:grid-cols-2 gap-3 list-none">
                        @foreach ($section['bullets'] as $b)
                            <li class="flex gap-3 rounded-xl border border-gray-200 bg-white p-4 shadow-sm">
                                <span class="mt-1 shrink-0 w-5 h-5 rounded-full bg-gray-100 flex items-center justify-center text-xs font-bold text-black">✓</span>
                                <span class="text-sm text-gray-700">{{ $b }}</span>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </section>
        @endforeach

        {{-- FAQ --}}
        <section class="mt-16 rounded-2xl border border-gray-200 bg-white p-6 sm:p-8 shadow-sm" aria-labelledby="blog-faq-title">
            @php
                $faqSchema = [
                    '@context' => 'https://schema.org',
                    '@type' => 'FAQPage',
                    'mainEntity' => array_map(function ($faq) {
                        return [
                            '@type' => 'Question',
                            'name' => $faq['q'],
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => $faq['a'],
                            ],
                        ];
                    }, $bp['faqs']),
                ];
            @endphp

            <script type="application/ld+json">
                {!! json_encode($faqSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}
            </script>
            <h2 id="blog-faq-title" class="text-2xl sm:text-3xl font-bold text-black">{{ $bp['faq_title'] }}</h2>
            <div class="mt-8 space-y-2">
                @foreach ($bp['faqs'] as $faq)
                    <details class="rounded-2xl border border-gray-200 bg-white open:shadow-sm transition-shadow group">
                        <summary class="cursor-pointer list-none px-5 py-4 font-semibold text-[#2C2C2C] flex justify-between gap-3 items-center">
                            <span>{{ $faq['q'] }}</span>
                            <span class="text-gray-400 text-xs shrink-0 group-open:rotate-180 transition-transform">▼</span>
                        </summary>
                        <div class="px-5 pb-4 text-sm text-gray-600 leading-relaxed border-t border-gray-100 pt-3">{{ $faq['a'] }}</div>
                    </details>
                @endforeach
            </div>
        </section>

        {{-- Final CTA --}}
        <section class="mt-16 rounded-2xl border border-gray-200 bg-gradient-to-br from-gray-50 to-white p-8 sm:p-10 shadow-sm text-center">
            <h2 class="text-2xl sm:text-3xl font-bold text-black">{{ $bp['final_title'] }}</h2>
            <p class="mt-4 text-gray-600 leading-relaxed max-w-2xl mx-auto">{{ $bp['final_sub'] }}</p>
            <div class="mt-8 flex flex-col sm:flex-row flex-wrap items-center justify-center gap-3">
                <a href="{{ route('contact') }}"
                   class="inline-flex justify-center items-center w-full sm:w-auto min-w-48 px-8 py-3.5 rounded-full bg-black text-white font-semibold hover:bg-gray-900 transition-colors"
                   data-track="blog_cheap_labor_final_cta_contact">
                    {{ $bp['final_cta_contact'] }}
                </a>
                <a href="{{ route('quotations') }}"
                   class="inline-flex justify-center items-center w-full sm:w-auto min-w-48 px-8 py-3.5 rounded-full border-2 border-[#2C2C2C] font-semibold hover:bg-gray-50 transition-all"
                   data-track="blog_cheap_labor_final_cta_quote">
                    {{ $bp['final_cta_quote'] }}
                </a>
            </div>
        </section>
    </div>
</div>
@endsection

