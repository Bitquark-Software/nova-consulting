{{--
    Full-viewport hero with Spline viewer. Set SPLINE_HERO_SCENE_URL in .env to your
    scene’s .splinecode URL from Spline → Export → Viewer.
--}}
<section
    class="home-hero-spline relative isolate min-h-[100svh] overflow-hidden bg-[#e8e8ea]"
    data-ga-section="hero-home"
    aria-labelledby="home-hero-spline-heading"
>
    {{-- 3D layer (hidden when user prefers reduced motion) --}}
    <div class="home-hero-spline__scene absolute inset-0 z-0" aria-hidden="true">
        <div class="home-hero-spline__fallback-bg absolute inset-0 bg-gradient-to-br from-[#ececee] via-[#e0e2e8] to-[#d4d6de]"></div>
        <spline-viewer
            class="home-hero-spline__viewer"
            url="{{ $splineUrl }}"
            loading="eager"
            hint="{{ __('messages.new_branding.hero_spline_hint') }}"
        ></spline-viewer>
    </div>

    {{-- Readability scrims (pointer-events none so the right side stays interactive) --}}
    <div
        class="pointer-events-none absolute inset-0 z-[1] bg-gradient-to-r from-[#F2F2F2] via-[#F2F2F2]/88 to-transparent sm:via-[#F2F2F2]/75 lg:max-w-[58%] lg:from-[#F2F2F2]/97"
        aria-hidden="true"
    ></div>
    <div
        class="pointer-events-none absolute inset-0 z-[1] bg-gradient-to-t from-[#F2F2F2]/90 via-transparent to-[#F2F2F2]/35 sm:to-transparent"
        aria-hidden="true"
    ></div>

    <div
        class="relative z-10 mx-auto grid min-h-[100svh] w-full max-w-6xl grid-rows-[1fr_auto] gap-6 px-4 pb-[max(1.5rem,calc(5.75rem+env(safe-area-inset-bottom)))] pt-32 sm:gap-8 sm:px-6 sm:pb-10 sm:pt-36 lg:pt-40"
    >
        <div class="flex min-h-0 flex-col justify-end lg:flex-row lg:items-end lg:justify-between lg:gap-8">
            <div class="pointer-events-auto flex max-w-xl flex-col marketing-hero-in">
                <span class="inline-flex w-fit items-center gap-2 rounded-full border border-gray-200/90 bg-white/90 px-3 py-1.5 text-xs font-semibold uppercase tracking-[0.18em] text-gray-600 shadow-sm backdrop-blur-sm">
                    <span class="h-2 w-2 animate-pulse rounded-full bg-black"></span>
                    {{ __('messages.new_branding.badge') }}
                </span>
                <h1 id="home-hero-spline-heading" class="mt-5 text-4xl font-bold leading-[1.08] tracking-tight text-black sm:text-5xl lg:text-6xl [text-shadow:0_1px_2px_rgb(255_255_255/0.6)]">
                    {{ __('messages.new_branding.headline_start') }}
                    <span class="mt-1 block text-transparent bg-clip-text bg-gradient-to-r from-gray-800 via-black to-gray-600">
                        {{ __('messages.new_branding.headline_highlight') }}
                    </span>
                </h1>
                <p class="mt-5 text-lg font-light leading-relaxed text-gray-700 sm:text-xl [text-shadow:0_1px_1px_rgb(255_255_255/0.5)]">
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
                        class="inline-flex items-center justify-center rounded-full border-2 border-[#2C2C2C] bg-white/80 px-8 py-3.5 font-semibold backdrop-blur-sm transition-all hover:bg-white"
                        data-track="hero_cta_secondary_click"
                    >{{ __('messages.new_branding.cta_secondary') }}</a>
                </div>
            </div>
            <div class="hidden min-h-[6rem] flex-1 lg:block" aria-hidden="true"></div>
        </div>

        <div class="pointer-events-auto grid gap-3 rounded-2xl border border-gray-200/80 bg-white/75 p-4 shadow-lg backdrop-blur-md sm:grid-cols-2 sm:gap-4 sm:p-5 marketing-hero-in-delay">
            <div class="rounded-xl border border-gray-100 bg-white/90 p-4 sm:p-5">
                <p class="text-xs font-semibold uppercase tracking-wider text-gray-500">Tuxtla Gutiérrez, Chiapas</p>
                <h2 class="mt-2 text-lg font-bold text-black sm:text-xl">Software y diseño web con impacto local</h2>
                <p class="mt-2 text-sm leading-relaxed text-gray-600">
                    También trabajamos con empresas en todo México de forma remota.
                </p>
                <div class="mt-3 flex flex-wrap gap-2">
                    <a href="{{ url('/empresa-software-tuxtla-chiapas') }}" class="rounded-full bg-gray-100 px-3 py-1.5 text-xs font-semibold transition-colors hover:bg-gray-200" data-track="home_internal_landing_software">Tuxtla</a>
                    <a href="{{ url('/diseno-paginas-web-tuxtla-chiapas') }}" class="rounded-full bg-gray-100 px-3 py-1.5 text-xs font-semibold transition-colors hover:bg-gray-200" data-track="home_internal_landing_web">Diseño web</a>
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
