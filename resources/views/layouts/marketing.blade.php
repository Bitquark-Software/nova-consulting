@php
    $seo_overrides = $seo_overrides ?? [];
    $htmlLang = $htmlLang ?? str_replace('_', '-', app()->getLocale());
@endphp
<!DOCTYPE html>
<html lang="{{ $htmlLang }}">
    @include('layouts.global_header')
    <style>
        @keyframes marketingHeroIn {
            from { opacity: 0; transform: translateY(24px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes marketingFloat {
            0%, 100% { transform: translate(0, 0) scale(1); }
            33% { transform: translate(8px, -12px) scale(1.02); }
            66% { transform: translate(-6px, 8px) scale(0.98); }
        }
        @keyframes marketingShimmer {
            0% { background-position: 0% 50%; }
            100% { background-position: 200% 50%; }
        }
        .marketing-hero-in { animation: marketingHeroIn 0.85s ease-out forwards; }
        .marketing-hero-in-delay { animation: marketingHeroIn 0.85s ease-out 0.15s forwards; opacity: 0; animation-fill-mode: forwards; }
        .marketing-float { animation: marketingFloat 14s ease-in-out infinite; }
        .marketing-float-slow { animation: marketingFloat 18s ease-in-out infinite reverse; }
        .marketing-border-shine {
            background: linear-gradient(90deg, #e5e5e5 0%, #ffffff 50%, #e5e5e5 100%);
            background-size: 200% 100%;
            animation: marketingShimmer 4s linear infinite;
        }
    </style>
    <body class="antialiased bg-[#F2F2F2] text-[#2C2C2C] selection:bg-black selection:text-white pb-20 sm:pb-0">
        @include('partials.marketing-nav', [
            'navGaSection' => trim($__env->yieldContent('nav_ga_section')) ?: 'nav-marketing',
            'propuestaHref' => trim($__env->yieldContent('propuesta_href')) ?: null,
        ])

        <main class="relative overflow-hidden">
            @hasSection('no_decorations')
                @yield('content')
            @else
                <div class="pointer-events-none fixed inset-0 -z-10 overflow-hidden">
                    <div class="absolute -top-32 -right-24 w-[28rem] h-[28rem] rounded-full bg-white/60 blur-3xl marketing-float"></div>
                    <div class="absolute top-1/3 -left-32 w-80 h-80 rounded-full bg-gray-300/35 blur-3xl marketing-float-slow"></div>
                </div>
                @yield('content')
            @endif
        </main>

        @hasSection('no_sticky_cta')
        @else
            @include('partials.sticky-mobile-cta')
        @endif

        @include('layouts.footer')
    </body>
</html>
