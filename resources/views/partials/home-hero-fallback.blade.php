{{-- Static hero (no Spline URL configured) --}}
<section class="relative px-4 pb-12 pt-28 sm:px-6 sm:pb-16 sm:pt-32 lg:pb-16 lg:pt-36" data-ga-section="hero-home">
    <div class="mx-auto max-w-6xl">
        <div class="grid gap-8 lg:grid-cols-12 lg:gap-5">
            <div class="marketing-hero-in lg:col-span-7">
                <span class="inline-flex items-center gap-2 rounded-full border border-gray-200 bg-white/80 px-3 py-1.5 text-xs font-semibold uppercase tracking-[0.18em] text-gray-600">
                    <span class="h-2 w-2 animate-pulse rounded-full bg-black"></span>
                    {{ __('messages.new_branding.badge') }}
                </span>
                <h1 class="mt-5 text-4xl font-bold leading-[1.08] tracking-tight text-black sm:text-5xl lg:text-6xl">
                    {{ __('messages.new_branding.headline_start') }}
                    <span class="mt-1 block bg-gradient-to-r from-gray-700 via-black to-gray-500 bg-clip-text text-transparent">
                        {{ __('messages.new_branding.headline_highlight') }}
                    </span>
                </h1>
                <p class="mt-5 max-w-xl text-lg font-light leading-relaxed text-gray-600 sm:text-xl">
                    {{ __('messages.new_branding.subheadline') }}
                </p>
                <div class="mt-8 flex flex-col flex-wrap gap-3 sm:flex-row">
                    <a
                        href="#diagnostico"
                        class="inline-flex items-center justify-center rounded-full bg-black px-8 py-3.5 font-semibold text-white shadow-lg transition-all hover:-translate-y-0.5 hover:shadow-xl"
                        data-track="hero_cta_primary_click"
                    >{{ __('messages.new_branding.cta_primary') }}</a>
                    <a
                        href="#services"
                        class="inline-flex items-center justify-center rounded-full border-2 border-[#2C2C2C] px-8 py-3.5 font-semibold transition-all hover:bg-white"
                        data-track="hero_cta_secondary_click"
                    >{{ __('messages.new_branding.cta_secondary') }}</a>
                </div>
            </div>

            <div class="marketing-hero-in-delay flex flex-col items-center lg:col-span-5 lg:items-end lg:justify-center">
                <button
                    type="button"
                    class="home-hero-phone group relative flex flex-col items-center rounded-2xl border-0 bg-transparent p-0 text-left focus:outline-none focus-visible:ring-2 focus-visible:ring-black/20 focus-visible:ring-offset-2 focus-visible:ring-offset-[#F2F2F2]"
                    data-home-hero-phone
                    data-track="home_hero_phone_easter_click"
                    aria-label="{{ __('messages.new_branding.hero_phone_aria') }}"
                >
                    <div class="home-hero-phone__float">
                        <div class="home-hero-phone__device relative w-[min(220px,72vw)] rounded-[2.1rem] border-[3px] border-gray-800 bg-gray-900 p-[10px] shadow-[0_22px_50px_-12px_rgb(0_0_0/0.35),0_0_0_1px_rgb(255_255_255/0.06)_inset]">
                            <div class="absolute left-1/2 top-[7px] z-10 h-[22px] w-[72px] -translate-x-1/2 rounded-full bg-black/90 ring-1 ring-white/10" aria-hidden="true"></div>
                            <div class="relative mt-5 aspect-[10/19] overflow-hidden rounded-[1.35rem] bg-gradient-to-b from-[#1a1a1c] to-[#0d0d0f]">
                                <div
                                    class="home-hero-phone__screen-shine pointer-events-none absolute inset-0 bg-gradient-to-br from-emerald-500/15 via-transparent to-violet-500/10"
                                    aria-hidden="true"
                                ></div>
                                <div class="absolute inset-x-3 top-4 space-y-2 font-mono text-[10px] leading-tight sm:text-[11px]" aria-hidden="true">
                                    <div class="home-hero-phone__code-line h-1.5 w-[58%] rounded-full bg-white/25"></div>
                                    <div class="home-hero-phone__code-line h-1.5 w-[82%] rounded-full bg-white/18"></div>
                                    <div class="home-hero-phone__code-line h-1.5 w-[44%] rounded-full bg-emerald-400/35"></div>
                                    <div class="home-hero-phone__code-line h-1.5 w-[70%] rounded-full bg-white/15"></div>
                                </div>
                                <div class="absolute bottom-5 left-1/2 h-1 w-10 -translate-x-1/2 rounded-full bg-white/12" aria-hidden="true"></div>
                            </div>
                        </div>
                    </div>
                </button>
            </div>
        </div>

        <div class="pointer-events-auto mt-8 grid gap-3 rounded-2xl border border-gray-200/80 bg-white/75 p-4 shadow-lg backdrop-blur-md sm:grid-cols-2 sm:gap-4 sm:p-5 marketing-hero-in-delay lg:mt-10">
            <div class="rounded-xl border border-gray-100 bg-white/90 p-4 sm:p-5">
                <p class="text-xs font-semibold uppercase tracking-wider text-gray-500">{{ __('messages.new_branding.location_badge') }}</p>
                <h2 class="mt-2 text-lg font-bold text-black sm:text-xl">{{ __('messages.new_branding.local_headline') }}</h2>
                <p class="mt-2 text-sm leading-relaxed text-gray-600">
                    {{ __('messages.new_branding.local_sub') }}
                </p>
                <div class="mt-3 flex flex-wrap gap-2">
                    <a href="{{ url('/empresa-software-tuxtla-chiapas') }}" class="rounded-full bg-gray-100 px-3 py-1.5 text-xs font-semibold transition-colors hover:bg-gray-200" data-track="home_internal_landing_software">{{ __('messages.new_branding.local_link_software') }}</a>
                    <a href="{{ url('/diseno-paginas-web-tuxtla-chiapas') }}" class="rounded-full bg-gray-100 px-3 py-1.5 text-xs font-semibold transition-colors hover:bg-gray-200" data-track="home_internal_landing_web">{{ __('messages.new_branding.local_link_web') }}</a>
                </div>
            </div>
            <div class="flex h-full min-h-[7rem] flex-col items-center justify-center rounded-xl border border-gray-800/20 bg-gradient-to-br from-[#2C2C2C] to-gray-800 p-4 text-white sm:min-h-0 sm:p-5" data-marketing-nav-contrast="dark">
                <div class="grid w-full grid-cols-3 gap-3 text-center">
                    <div>
                        <span class="block text-xl font-bold sm:text-2xl">7+</span>
                        <span class="mt-1 block text-[9px] uppercase tracking-wider text-gray-400 sm:text-[10px]">{{ __('messages.new_branding.years_exp') }}</span>
                    </div>
                    <div>
                        <span class="block text-xl font-bold sm:text-2xl">350k+</span>
                        <span class="mt-1 block text-[9px] uppercase tracking-wider text-gray-400 sm:text-[10px]">{{ __('messages.new_branding.projects_done') }}</span>
                    </div>
                    <div>
                        <span class="block text-xl font-bold sm:text-2xl">10+</span>
                        <span class="mt-1 block text-[9px] uppercase tracking-wider text-gray-400 sm:text-[10px]">{{ __('messages.new_branding.value_generated') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
