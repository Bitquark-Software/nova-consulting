@extends('layouts.marketing')

@section('nav_ga_section', 'nav-home-segmented')

@section('content')
@php
    $audiences = ['individual', 'smb', 'corporate'];
    $defaultAudience = request()->query('audience', 'individual');
    if (! in_array($defaultAudience, $audiences, true)) {
        $defaultAudience = 'individual';
    }
@endphp

<section class="pt-32 pb-20 px-4 sm:px-6" data-home-audience-root data-default-audience="{{ $defaultAudience }}" data-ga-section="home-audiences">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-8">
            <div class="inline-flex rounded-full bg-white border border-gray-200 p-1 shadow-sm" role="tablist" aria-label="Project audience selector">
                @foreach ($audiences as $audience)
                    <button type="button" role="tab" data-audience-option="{{ $audience }}" class="rounded-full px-5 py-2 text-sm font-semibold transition-all text-gray-600">
                        {{ __("home_audiences.selector.$audience") }}
                    </button>
                @endforeach
            </div>
        </div>

        @foreach ($audiences as $audience)
            @php
                $quoteUrl = url('/cotizador-sitio-web?audience=' . $audience);
                $waUrl = 'https://wa.me/529611465703?text=' . urlencode(__('home_audiences.selector.' . $audience) . ' - ' . __('home_audiences.common.primary_cta'));
            @endphp
            <article data-audience-panel="{{ $audience }}" class="space-y-16">
                <section class="grid lg:grid-cols-2 gap-10 items-center">
                    <div data-reveal-item class="reveal-item">
                        <p class="text-xs uppercase tracking-[0.18em] font-semibold text-gray-500">{{ __("home_audiences.$audience.kicker") }}</p>
                        <h1 class="mt-3 text-4xl sm:text-5xl font-bold leading-tight text-black">{{ __("home_audiences.$audience.title") }}</h1>
                        <p class="mt-4 text-lg text-gray-600">{{ __("home_audiences.$audience.subtitle") }}</p>
                        <div class="mt-6 flex items-center gap-2">
                            <span class="text-sm text-gray-500">{{ __('home_audiences.common.starting_at') }}</span>
                            <strong class="text-2xl text-black">{{ __("home_audiences.$audience.price") }}</strong>
                        </div>
                        <div class="mt-7 flex flex-wrap gap-3">
                            <a href="{{ $quoteUrl }}" class="px-6 py-3 rounded-full bg-black text-white font-semibold hover:shadow-lg transition-all">{{ __('home_audiences.common.primary_cta') }}</a>
                            <a target="_blank" href="{{ $waUrl }}" class="px-6 py-3 rounded-full border border-black font-semibold hover:bg-black hover:text-white transition-all">{{ __('home_audiences.common.secondary_cta') }}</a>
                        </div>
                    </div>
                    <div data-reveal-item class="reveal-item">
                        <div class="h-[360px] rounded-3xl border border-gray-200 bg-linear-to-br from-white to-gray-100 p-6 relative overflow-hidden">
                            @if ($audience === 'individual')
                                <div class="absolute inset-x-6 top-6 h-[300px]" style="perspective: 1600px;">
                                    <div class="absolute left-1/2 bottom-8 h-[226px] w-[350px] -translate-x-1/2" data-hero-laptop style="transform-origin: center bottom;">
                                        <div class="absolute left-5 top-0 h-[176px] w-[250px] rounded-[1.2rem] border border-[#0f1723] bg-linear-to-b from-[#2a3444] to-[#171d2a] p-[9px] shadow-[0_24px_45px_rgba(0,0,0,0.38)]">
                                            <div class="h-full w-full overflow-hidden rounded-[0.85rem] border border-[#202a3b] bg-white">
                                                <div class="flex h-7 items-center gap-1.5 border-b border-gray-200 bg-gray-50 px-3">
                                                    <span class="h-2 w-2 rounded-full bg-green-300"></span>
                                                    <span class="h-2 w-2 rounded-full bg-yellow-300"></span>
                                                    <span class="h-2 w-2 rounded-full bg-red-300"></span>
                                                </div>
                                                <div class="px-3 py-3">
                                                    <div class="h-3 w-20 rounded bg-gray-200"></div>
                                                    <div class="mt-2 h-2 w-full rounded bg-gray-100"></div>
                                                    <div class="mt-2 h-2 w-4/5 rounded bg-gray-100"></div>
                                                    <div class="mt-3 grid grid-cols-2 gap-2">
                                                        <div class="h-12 rounded border border-gray-100 bg-gray-50"></div>
                                                        <div class="h-12 rounded border border-gray-100 bg-gray-50"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="absolute left-1/2 top-[3px] h-[3px] w-16 -translate-x-1/2 rounded-full bg-black/35"></div>
                                        </div>

                                        <div class="absolute left-[132px] top-[178px] h-9 w-8 rounded-sm bg-linear-to-b from-[#778091] to-[#5f6775]"></div>
                                        <div class="absolute left-[112px] top-[208px] h-4 w-[48px] rounded-full bg-linear-to-b from-[#aeb5c2] to-[#8f98a8] shadow-md"></div>

                                        <div class="absolute right-1 top-30 h-[156px] w-[88px] rounded-[0.95rem] border border-[#1b2432] bg-linear-to-b from-[#2a3446] to-[#141b29] p-2 shadow-[0_20px_30px_rgba(0,0,0,0.35)]">
                                            <div class="h-2 w-2 rounded-full bg-emerald-400/90"></div>
                                            <div class="mt-3 space-y-1.5">
                                                <div class="h-1.5 w-full rounded bg-white/20"></div>
                                                <div class="h-1.5 w-4/5 rounded bg-white/15"></div>
                                                <div class="h-1.5 w-3/5 rounded bg-white/15"></div>
                                            </div>
                                            <div class="absolute bottom-3 left-2 right-2 h-2 rounded bg-black/25"></div>
                                        </div>
                                    </div>
                                    <div class="absolute left-1/2 bottom-5 z-10 h-4 w-[350px] -translate-x-1/2 rounded-full bg-black/20 blur-md"></div>
                                </div>
                            @elseif ($audience === 'smb')
                                <div data-hero-smb-laptop class="absolute left-7 top-16 w-[280px] h-[180px] rounded-2xl border border-gray-800 bg-linear-to-br from-[#1d2433] to-[#0f131d] p-3 shadow-2xl transition-transform duration-100">
                                    <div class="relative w-full h-full rounded-xl bg-white overflow-hidden">
                                        <div class="h-7 border-b border-gray-200 bg-gray-50"></div>
                                        <div class="p-3">
                                            <div class="h-3 w-28 rounded bg-gray-200"></div>
                                            <div class="mt-3 h-2 w-full rounded bg-gray-100"></div>
                                            <div class="mt-2 h-2 w-3/4 rounded bg-gray-100"></div>
                                            <div class="mt-4 grid grid-cols-3 gap-2">
                                                <div class="h-12 rounded bg-gray-50 border border-gray-100"></div>
                                                <div class="h-12 rounded bg-gray-50 border border-gray-100"></div>
                                                <div class="h-12 rounded bg-gray-50 border border-gray-100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-hero-phone class="absolute right-10 bottom-8 w-[112px] h-[214px] rounded-[1.8rem] border-[6px] border-black bg-linear-to-b from-gray-900 to-black p-2 shadow-2xl transition-transform duration-100">
                                    <div class="relative w-full h-full rounded-[1.2rem] bg-white overflow-hidden">
                                        <div class="absolute left-1/2 top-1 z-10 h-4 w-14 -translate-x-1/2 rounded-full bg-black"></div>
                                        <div class="h-6 border-b border-gray-200 bg-gray-50"></div>
                                        <div class="p-2">
                                            <div class="h-2 w-14 rounded bg-gray-200"></div>
                                            <div class="mt-2 h-2 w-full rounded bg-gray-100"></div>
                                            <div class="mt-3 h-16 rounded bg-gray-50 border border-gray-100"></div>
                                            <div class="mt-3 h-8 rounded bg-gray-100"></div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div class="absolute h-56 w-72 rounded-full bg-gray-400/25 blur-2xl"></div>
                                    <div data-hero-planet class="relative h-[260px] w-[320px] transition-transform duration-100">
                                        <div class="absolute left-6 right-6 top-16 h-[120px] rounded-2xl border border-[#1e2532] bg-linear-to-b from-[#394355] to-[#1d2431] shadow-[0_22px_40px_rgba(0,0,0,0.35)]">
                                            <div class="absolute left-1/2 top-[-14px] h-7 w-20 -translate-x-1/2 rounded-t-xl border border-[#1e2532] border-b-0 bg-linear-to-b from-[#4a5569] to-[#2a3241]"></div>
                                            <div class="absolute left-4 right-4 bottom-4 h-10 rounded-lg border border-[#4a5569] bg-[#141a24]"></div>
                                        </div>

                                        <div class="absolute left-2 top-0 h-[116px] w-[82px] rotate-[-9deg] rounded-md border border-gray-300 bg-white shadow-lg">
                                            <div class="h-5 border-b border-gray-200 bg-gray-50 px-2 text-[8px] text-gray-500 flex items-center">{ }</div>
                                            <div class="p-2 space-y-1">
                                                <div class="h-1.5 w-full rounded bg-gray-200"></div>
                                                <div class="h-1.5 w-4/5 rounded bg-gray-200"></div>
                                                <div class="h-1.5 w-3/5 rounded bg-gray-300"></div>
                                                <div class="h-1.5 w-full rounded bg-gray-200"></div>
                                            </div>
                                        </div>

                                        <div class="absolute left-[116px] top-[-8px] h-[126px] w-[88px] rotate-2 rounded-md border border-gray-300 bg-white shadow-xl">
                                            <div class="h-5 border-b border-gray-200 bg-gray-50 px-2 text-[8px] text-gray-500 flex items-center">&lt;/&gt;</div>
                                            <div class="p-2 space-y-1">
                                                <div class="h-1.5 w-5/6 rounded bg-gray-200"></div>
                                                <div class="h-1.5 w-full rounded bg-gray-200"></div>
                                                <div class="h-1.5 w-2/3 rounded bg-gray-300"></div>
                                                <div class="h-1.5 w-4/5 rounded bg-gray-200"></div>
                                                <div class="h-1.5 w-3/5 rounded bg-gray-300"></div>
                                            </div>
                                        </div>

                                        <div class="absolute right-2 top-4 h-[110px] w-[80px] rotate-10 rounded-md border border-gray-300 bg-white shadow-lg">
                                            <div class="h-5 border-b border-gray-200 bg-gray-50 px-2 text-[8px] text-gray-500 flex items-center">fn()</div>
                                            <div class="p-2 space-y-1">
                                                <div class="h-1.5 w-full rounded bg-gray-200"></div>
                                                <div class="h-1.5 w-3/4 rounded bg-gray-300"></div>
                                                <div class="h-1.5 w-5/6 rounded bg-gray-200"></div>
                                                <div class="h-1.5 w-2/3 rounded bg-gray-300"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </section>

                <section data-reveal-item class="reveal-item">
                    <h2 class="text-3xl font-bold mb-6">{{ __('home_audiences.common.sections_title') }}</h2>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                        @foreach (__('home_audiences.' . $audience . '.sections') as $item)
                            <article class="rounded-2xl bg-white border border-gray-200 p-6 hover:shadow-lg transition-all">
                                <h3 class="font-semibold text-lg">{{ $item['title'] }}</h3>
                                <p class="mt-2 text-gray-600 text-sm leading-relaxed">{{ $item['body'] }}</p>
                            </article>
                        @endforeach
                    </div>
                </section>

                <section data-reveal-item class="reveal-item grid lg:grid-cols-2 gap-5">
                    <div class="rounded-2xl bg-white border border-gray-200 p-6">
                        <h3 class="text-2xl font-bold mb-4">{{ __('home_audiences.common.process_title') }}</h3>
                        <ul class="space-y-3">
                            @foreach (__('home_audiences.' . $audience . '.process') as $step)
                                <li class="flex gap-3 text-sm text-gray-700"><span class="font-semibold text-black">•</span><span>{{ $step }}</span></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="rounded-2xl bg-white border border-gray-200 p-6">
                        <h3 class="text-2xl font-bold mb-4">{{ __('home_audiences.common.faq_title') }}</h3>
                        <div class="space-y-3">
                            @foreach (__('home_audiences.' . $audience . '.faq') as $faq)
                                <details class="rounded-xl border border-gray-100 p-4">
                                    <summary class="font-semibold cursor-pointer">{{ $faq['q'] }}</summary>
                                    <p class="mt-2 text-sm text-gray-600">{{ $faq['a'] }}</p>
                                </details>
                            @endforeach
                        </div>
                    </div>
                </section>

                <section data-reveal-item class="reveal-item rounded-3xl bg-black text-white px-7 py-9 flex flex-col md:flex-row md:items-center md:justify-between gap-5" data-marketing-nav-contrast="dark">
                    <div>
                        <h3 class="text-2xl font-bold">{{ __('home_audiences.common.final_cta_title') }}</h3>
                        <p class="mt-2 text-gray-300">{{ __('home_audiences.common.final_cta_body') }}</p>
                    </div>
                    <div class="flex flex-wrap gap-3">
                        <a href="{{ $quoteUrl }}" class="px-6 py-3 rounded-full bg-white text-black font-semibold">{{ __('home_audiences.common.primary_cta') }}</a>
                        <a target="_blank" href="{{ $waUrl }}" class="px-6 py-3 rounded-full border border-white font-semibold">{{ __('home_audiences.common.secondary_cta') }}</a>
                    </div>
                </section>
            </article>
        @endforeach

        <input type="hidden" data-audience-input name="audience" value="{{ $defaultAudience }}">
    </div>
</section>

@include('partials.lead-qualification-form', ['leadSource' => 'home'])

<style>
    .reveal-item {
        opacity: 0;
        transform: translateY(18px);
        transition: opacity 0.45s ease, transform 0.45s ease;
    }

    .reveal-item.is-visible {
        opacity: 1;
        transform: translateY(0);
    }
</style>
@endsection
