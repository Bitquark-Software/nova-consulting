<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.global_header')
    <body class="antialiased bg-[#F2F2F2] text-[#2C2C2C] min-h-screen selection:bg-black selection:text-white pb-20 sm:pb-0">
        @include('partials.marketing-nav', ['navGaSection' => 'nav-guest'])

        <main class="pt-24 sm:pt-28 px-4 pb-16 flex flex-col min-h-[70vh] items-center justify-center">
            <div class="w-full max-w-md rounded-2xl border border-gray-200 bg-white shadow-sm p-6 sm:p-8">
                {{ $slot }}
            </div>
        </main>

        @include('partials.sticky-mobile-cta')
        @include('layouts.footer')
    </body>
</html>
