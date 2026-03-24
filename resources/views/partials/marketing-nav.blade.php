@php
    $navGaSection = $navGaSection ?? 'nav-marketing';
    $propuestaHref = $propuestaHref ?? (route('home') . '#diagnostico');
@endphp
<header
    class="fixed top-0 left-0 right-0 z-50 px-3 sm:px-4 pt-[max(0.75rem,env(safe-area-inset-top))] sm:pt-4"
    data-ga-section="{{ $navGaSection }}"
    x-data="marketingNav()"
    @keydown.escape.window="close()"
>
    <nav class="max-w-6xl mx-auto rounded-2xl border border-gray-200/80 bg-white/80 backdrop-blur-xl shadow-sm transition-[box-shadow,background-color,border-color] duration-500 ease-[cubic-bezier(0.32,0.72,0,1)] hover:shadow-md hover:bg-white/90">
        <div class="flex items-center justify-between gap-3 sm:gap-4 px-4 sm:px-6 h-14 sm:h-[4.25rem]">
            <a
                href="{{ route('home') }}"
                class="text-base sm:text-xl font-bold tracking-tight text-black shrink-0 transition-transform duration-300 ease-[cubic-bezier(0.32,0.72,0,1)] active:scale-[0.98]"
            >
                <span class="opacity-90">&lt;</span>NOVA<span class="font-light text-gray-500"> CONSULTING</span><span class="opacity-90">/&gt;</span>
            </a>

            <div class="hidden lg:flex items-center gap-0.5">
                <a href="{{ route('services') }}" class="nav-link-ios px-3 py-2 text-sm font-medium text-gray-600 rounded-xl">{{ __('messages.nav.services') }}</a>
                <a href="{{ route('hiring_services') }}" class="nav-link-ios px-3 py-2 text-sm font-medium text-gray-600 rounded-xl">{{ __('messages.nav.hiring_services') }}</a>
                <a href="{{ route('contact') }}" class="nav-link-ios px-3 py-2 text-sm font-medium text-gray-600 rounded-xl">Contacto</a>
                <a href="{{ route('quotations') }}" class="nav-link-ios px-3 py-2 text-sm font-medium text-gray-600 rounded-xl">{{ __('messages.nav.quotation') }}</a>
                <a href="{{ route('about') }}" class="nav-link-ios px-3 py-2 text-sm font-medium text-gray-600 rounded-xl">{{ __('messages.nav.about') }}</a>
            </div>

            <div class="flex items-center gap-1.5 sm:gap-3 shrink-0">
                <a
                    href="{{ $propuestaHref }}"
                    class="hidden sm:inline-flex items-center px-4 py-2 text-sm font-semibold text-black border border-gray-300/90 rounded-full bg-white/50 transition-all duration-300 ease-[cubic-bezier(0.32,0.72,0,1)] hover:bg-gray-50 hover:border-gray-400 hover:-translate-y-px active:translate-y-0 active:scale-[0.98]"
                    data-track="marketing_nav_diagnostico_click"
                >Propuesta</a>

                <button
                    type="button"
                    class="lg:hidden relative z-[102] flex h-11 w-11 shrink-0 items-center justify-center rounded-full text-black transition-colors duration-200 ease-out outline-none focus-visible:ring-2 focus-visible:ring-black/20 active:bg-gray-100/90"
                    @click.stop="toggle()"
                    :aria-expanded="open.toString()"
                    aria-controls="marketing-mobile-sheet"
                    :aria-label="open ? 'Cerrar menú' : 'Abrir menú'"
                >
                    <span class="absolute left-1/2 block h-0.5 w-[1.375rem] -translate-x-1/2 rounded-full bg-black transition-all duration-300 ease-[cubic-bezier(0.32,0.72,0,1)]" :class="open ? 'top-1/2 -translate-y-1/2 rotate-45' : 'top-[14px]'"></span>
                    <span class="absolute left-1/2 top-1/2 block h-0.5 w-[1.375rem] -translate-x-1/2 -translate-y-1/2 rounded-full bg-black transition-all duration-200 ease-out" :class="open ? 'scale-x-0 opacity-0' : 'scale-x-100 opacity-100'"></span>
                    <span class="absolute left-1/2 block h-0.5 w-[1.375rem] -translate-x-1/2 rounded-full bg-black transition-all duration-300 ease-[cubic-bezier(0.32,0.72,0,1)]" :class="open ? 'top-1/2 -translate-y-1/2 -rotate-45' : 'bottom-[14px]'"></span>
                </button>

                <a
                    href="{{ url('/dashboard/login') }}"
                    class="inline-flex items-center px-3.5 sm:px-5 py-2 sm:py-2.5 text-xs sm:text-sm font-semibold text-white bg-black rounded-full transition-all duration-300 ease-[cubic-bezier(0.32,0.72,0,1)] shadow-md hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 active:scale-[0.98]"
                >
                    Inicia sesion
                </a>
            </div>
        </div>

    </nav>

    <template x-teleport="body">
        {{-- iOS-style sheet (mobile only); teleport evita quedar bajo sticky CTA --}}
        <div
            id="marketing-mobile-sheet"
            class="lg:hidden fixed inset-0 z-[100] flex flex-col justify-end"
            x-show="open"
            x-cloak
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            role="dialog"
            aria-modal="true"
            aria-label="Menú de navegación"
        >
        <div
            class="absolute inset-0 bg-black/35 backdrop-blur-[2px] transition-opacity duration-300 ease-out"
            @click="close()"
            aria-hidden="true"
        ></div>

        <div
            class="relative mt-auto max-h-[min(88vh,720px)] flex flex-col rounded-t-[1.35rem] border border-white/60 bg-white/92 shadow-[0_-12px_48px_rgba(0,0,0,0.14),0_-2px_0_rgba(255,255,255,0.9)_inset] backdrop-blur-2xl backdrop-saturate-150 transition-transform duration-[350ms] ease-[cubic-bezier(0.32,0.72,0,1)] supports-[backdrop-filter]:bg-white/78"
            style="-webkit-backdrop-filter: blur(24px) saturate(1.2);"
            @click.stop
            x-show="open"
            x-transition:enter="transition transform duration-[350ms] ease-[cubic-bezier(0.32,0.72,0,1)]"
            x-transition:enter-start="translate-y-full"
            x-transition:enter-end="translate-y-0"
            x-transition:leave="transition transform duration-250 ease-[cubic-bezier(0.4,0,1,1)]"
            x-transition:leave-start="translate-y-0"
            x-transition:leave-end="translate-y-full"
        >
            <div class="flex justify-center pt-2.5 pb-1 shrink-0" aria-hidden="true">
                <div class="h-1 w-10 rounded-full bg-gray-300/90"></div>
            </div>

            <div
                class="marketing-nav-rows flex flex-col gap-0.5 px-3 pt-1 pb-3 overflow-y-auto overscroll-y-contain"
                :data-state="open ? 'open' : 'closed'"
                style="-webkit-overflow-scrolling: touch; padding-bottom: max(1rem, env(safe-area-inset-bottom));"
            >
                <a
                    href="{{ route('services') }}"
                    @click="close()"
                    class="marketing-nav-row flex items-center min-h-[3.25rem] px-4 rounded-2xl text-[1.05rem] font-medium text-[#2C2C2C] transition-colors duration-200 active:bg-gray-100/95"
                >{{ __('messages.nav.services') }}</a>
                <a
                    href="{{ route('hiring_services') }}"
                    @click="close()"
                    class="marketing-nav-row flex items-center min-h-[3.25rem] px-4 rounded-2xl text-[1.05rem] font-medium text-[#2C2C2C] transition-colors duration-200 active:bg-gray-100/95"
                >{{ __('messages.nav.hiring_services') }}</a>
                <a
                    href="{{ route('contact') }}"
                    @click="close()"
                    class="marketing-nav-row flex items-center min-h-[3.25rem] px-4 rounded-2xl text-[1.05rem] font-medium text-[#2C2C2C] transition-colors duration-200 active:bg-gray-100/95"
                >Contacto</a>
                <a
                    href="{{ route('quotations') }}"
                    @click="close()"
                    class="marketing-nav-row flex items-center min-h-[3.25rem] px-4 rounded-2xl text-[1.05rem] font-medium text-[#2C2C2C] transition-colors duration-200 active:bg-gray-100/95"
                >{{ __('messages.nav.quotation') }}</a>
                <a
                    href="{{ route('about') }}"
                    @click="close()"
                    class="marketing-nav-row flex items-center min-h-[3.25rem] px-4 rounded-2xl text-[1.05rem] font-medium text-[#2C2C2C] transition-colors duration-200 active:bg-gray-100/95"
                >{{ __('messages.nav.about') }}</a>

                <div class="h-px bg-gray-200/80 mx-2 my-2"></div>

                <a
                    href="{{ $propuestaHref }}"
                    @click="close()"
                    class="marketing-nav-row flex items-center justify-center min-h-[3.25rem] px-4 rounded-2xl text-[1.05rem] font-semibold text-black border border-gray-200 bg-white/70 transition-all duration-200 active:scale-[0.98] active:bg-gray-50"
                    data-track="marketing_nav_diagnostico_mobile"
                >Propuesta sin costo</a>

                <button
                    type="button"
                    @click="close()"
                    class="marketing-nav-row flex items-center justify-center min-h-[3.25rem] mt-1 px-4 rounded-2xl text-base font-semibold text-gray-600 bg-gray-100/80 transition-colors duration-200 active:bg-gray-200/90"
                >
                    Cerrar
                </button>
            </div>
        </div>
        </div>
    </template>

    <style>
        .nav-link-ios {
            position: relative;
            transition: color 0.25s cubic-bezier(0.32, 0.72, 0, 1), background-color 0.25s cubic-bezier(0.32, 0.72, 0, 1), transform 0.25s cubic-bezier(0.32, 0.72, 0, 1);
        }
        .nav-link-ios::after {
            content: '';
            position: absolute;
            left: 0.65rem;
            right: 0.65rem;
            bottom: 0.35rem;
            height: 2px;
            border-radius: 9999px;
            background: #000;
            transform: scaleX(0);
            opacity: 0;
            transition: transform 0.35s cubic-bezier(0.32, 0.72, 0, 1), opacity 0.25s ease;
            transform-origin: center;
        }
        .nav-link-ios:hover {
            color: #000;
            background-color: rgba(0, 0, 0, 0.04);
        }
        .nav-link-ios:hover::after {
            transform: scaleX(1);
            opacity: 1;
        }
        .nav-link-ios:active {
            transform: scale(0.98);
        }
    </style>
</header>
