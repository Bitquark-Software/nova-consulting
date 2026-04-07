@php
    use App\Support\LocalizedUrls;

    $p = trans('blog.index_page');
    $cardHref = function (array $item) {
        return match ($item['type']) {
            'route' => route($item['route']),
            'guide' => LocalizedUrls::guide($item['guide']),
            'city' => LocalizedUrls::citySoftware($item['city']),
            default => '#',
        };
    };
@endphp

@extends('layouts.marketing')

@section('nav_ga_section', 'nav-blog-index')

@section('content')
<div class="relative pt-28 sm:pt-32 pb-24 px-4 sm:px-6 overflow-hidden">
    <div class="pointer-events-none absolute -top-28 right-0 w-[min(32rem,95vw)] h-[min(32rem,95vw)] rounded-full bg-white/70 blur-3xl"></div>
    <div class="pointer-events-none absolute top-48 -left-24 w-96 h-96 rounded-full bg-gray-300/35 blur-3xl"></div>
    <div class="pointer-events-none absolute bottom-20 right-10 w-72 h-72 rounded-full bg-white/50 blur-3xl"></div>

    <div class="relative max-w-6xl mx-auto">
        <header class="text-center max-w-3xl mx-auto mb-16 sm:mb-20">
            <span class="inline-flex items-center gap-2 text-[11px] font-semibold uppercase tracking-[0.2em] text-gray-600 px-4 py-2 rounded-full border border-gray-200/90 bg-white/90 shadow-sm">
                <span class="w-1.5 h-1.5 rounded-full bg-black/80"></span>
                {{ $p['hero_badge'] }}
            </span>
            <h1 class="mt-7 text-4xl sm:text-5xl md:text-[3.15rem] font-bold tracking-tight text-black leading-[1.1]">
                {{ $p['hero_title'] }}
            </h1>
            <p class="mt-6 text-lg sm:text-xl text-gray-600 leading-relaxed font-normal">
                {{ $p['hero_subtitle'] }}
            </p>
        </header>

        @foreach ($p['sections'] as $section)
            <section class="mb-16 sm:mb-20 scroll-mt-28" aria-labelledby="blog-section-{{ $section['id'] }}">
                <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4 mb-8 sm:mb-10">
                    <div class="max-w-2xl">
                        <h2 id="blog-section-{{ $section['id'] }}" class="text-2xl sm:text-3xl font-bold tracking-tight text-black">
                            {{ $section['title'] }}
                        </h2>
                        <p class="mt-3 text-base sm:text-lg text-gray-600 leading-relaxed">
                            {{ $section['intro'] }}
                        </p>
                    </div>
                </div>

                @php
                    $gridClass = match ($section['id']) {
                        'articles' => 'grid gap-5 sm:gap-6 md:grid-cols-2',
                        'guides' => 'grid gap-5 sm:gap-6 sm:grid-cols-2 lg:grid-cols-3',
                        'cities' => 'grid gap-5 sm:gap-6 sm:grid-cols-2 lg:grid-cols-3',
                        default => 'grid gap-5 sm:gap-6 sm:grid-cols-2 lg:grid-cols-3',
                    };
                @endphp
                <div class="{{ $gridClass }}" role="list">
                    @foreach ($section['items'] as $item)
                        <a
                            href="{{ $cardHref($item) }}"
                            role="listitem"
                            class="group relative flex flex-col h-full rounded-2xl border border-gray-200/90 bg-white/90 backdrop-blur-sm p-6 sm:p-7 shadow-[0_2px_20px_-4px_rgba(0,0,0,0.06)] transition-all duration-300 ease-out hover:-translate-y-1 hover:border-gray-300 hover:shadow-[0_20px_48px_-12px_rgba(0,0,0,0.12)] outline-none focus-visible:ring-2 focus-visible:ring-black/90 focus-visible:ring-offset-2"
                        >
                            <span class="inline-flex self-start text-[10px] sm:text-[11px] font-semibold uppercase tracking-wider text-gray-600 border border-gray-200/90 rounded-full px-2.5 py-1 bg-gray-50/80">
                                {{ $item['badge'] }}
                            </span>
                            <h3 class="mt-4 text-lg sm:text-xl font-bold text-gray-900 tracking-tight leading-snug group-hover:text-black transition-colors">
                                {{ $item['title'] }}
                            </h3>
                            <p class="mt-3 text-sm sm:text-[0.9375rem] text-gray-600 leading-relaxed line-clamp-4 flex-1">
                                {{ $item['excerpt'] }}
                            </p>
                            <span class="mt-6 inline-flex items-center gap-1.5 text-sm font-semibold text-black group-hover:gap-2.5 transition-all">
                                {{ $item['cta'] }}
                                <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                </svg>
                            </span>
                            <span class="pointer-events-none absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-gradient-to-br from-white/40 via-transparent to-transparent" aria-hidden="true"></span>
                        </a>
                    @endforeach
                </div>
            </section>
        @endforeach

        <aside class="mt-4 rounded-2xl border border-dashed border-gray-300/90 bg-gray-50/80 px-6 py-7 sm:px-8 sm:py-8 max-w-3xl mx-auto text-center sm:text-left sm:flex sm:items-center sm:justify-between sm:gap-8">
            <div>
                <p class="text-xs font-semibold uppercase tracking-wider text-gray-500">{{ $p['note_title'] }}</p>
                <p class="mt-2 text-sm text-gray-600 leading-relaxed">{{ $p['note_body'] }}</p>
            </div>
            <a
                href="{{ route('hiring_services') }}"
                class="mt-5 sm:mt-0 inline-flex shrink-0 items-center justify-center rounded-full border border-gray-900 bg-black px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-gray-900 hover:-translate-y-0.5 active:translate-y-0"
            >{{ $p['note_cta'] }}</a>
        </aside>
    </div>
</div>
@endsection
