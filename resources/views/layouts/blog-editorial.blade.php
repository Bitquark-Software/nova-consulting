@php
    $seo_overrides = $seo_overrides ?? [];
    $htmlLang = $htmlLang ?? str_replace('_', '-', app()->getLocale());
    $navGaSection = $navGaSection ?? 'nav-blog';
@endphp
<!DOCTYPE html>
<html class="light" lang="{{ $htmlLang }}">
    @include('layouts.global_header')
    @include('partials.blog-editorial-assets')
    @livewireStyles
    @stack('styles')
    <body @class([
        'blog-editorial-body bg-background overflow-x-clip max-lg:pb-[calc(4.75rem+env(safe-area-inset-bottom))]',
    ])>
        <svg class="absolute w-0 h-0 overflow-hidden" aria-hidden="true" focusable="false">
            <defs>
                <filter id="blog-vim-highlight-rough" x="-8%" y="-20%" width="116%" height="140%">
                    <feTurbulence type="fractalNoise" baseFrequency="0.9" numOctaves="1" seed="4" result="noise"/>
                    <feDisplacementMap in="SourceGraphic" in2="noise" scale="2.5" xChannelSelector="R" yChannelSelector="G"/>
                </filter>
            </defs>
        </svg>
        @include('partials.marketing-nav', ['navGaSection' => $navGaSection])

        <div class="blog-editorial-main relative w-full pt-[calc(4.25rem+env(safe-area-inset-top))] sm:pt-[4.75rem] lg:pt-[5.25rem]">
            {{ $slot }}
        </div>

        @include('layouts.footer')

        @livewireScripts
        @stack('scripts')
        @stack('body_end')
    </body>
</html>
