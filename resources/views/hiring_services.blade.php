<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@php
    // Provide explicit SEO overrides for this page
    $seo_overrides = [
        'title' => __('seo.hiring_services.title'),
        'description' => __('seo.hiring_services.description'),
        'keywords' => __('seo.hiring_services.keywords'),
    ];
@endphp
@include('layouts.global_header')

<body class="min-h-screen bg-[#F2F2F2] text-[#2C2C2C]">
    @include('layouts.landing_navbar')

    <!-- Hero -->
    <section class="relative pt-40 px-6 md:px-12 cosmic-grid">
        <div class="relative max-w-7xl mx-auto text-center space-y-6">
            <h1 class="text-4xl md:text-6xl font-bold tracking-tighter">
                {{ __('messages.hiring_page.hero_title') }}
            </h1>
            <p class="text-lg md:text-xl text-[#0c0c0c] max-w-2xl mx-auto">
                {{ __('messages.hiring_page.hero_subtitle') }}
            </p>
            <div class="mt-6 flex items-center justify-center gap-3">
                <a href="/contact" class="px-6 py-3 bg-[#2C2C2C] text-white rounded-md font-semibold hover:bg-[#525252]">{{ __('messages.hiring_page.hero_cta_talk') }}</a>
            </div>
        </div>
    </section>

    <!-- Overview -->
    <section class="py-16 px-6 md:px-12">
        <div class="max-w-7xl mx-auto grid md:grid-cols-3 gap-8">
            <div class="col-span-2 space-y-6">
                <h2 class="text-2xl font-bold">{{ __('messages.hiring_page.what_we_offer') }}</h2>
                <p class="text-[#6b6b6b] leading-relaxed">
                    {{ __('messages.hiring_page.overview') }}
                </p>

                <div class="grid sm:grid-cols-2 gap-4 mt-4">
                    <div class="p-6 bg-white rounded-lg border border-[#e6e6e6]">
                        <h3 class="font-semibold">{{ __('messages.hiring_page.sourcing_48h_title') }}</h3>
                        <p class="text-sm text-[#8a8a8a] mt-2">{{ __('messages.hiring_page.sourcing_48h_sub') }}</p>
                    </div>
                    <div class="p-6 bg-white rounded-lg border border-[#e6e6e6]">
                        <h3 class="font-semibold">{{ __('messages.hiring_page.screening_title') }}</h3>
                        <p class="text-sm text-[#8a8a8a] mt-2">{{ __('messages.hiring_page.screening_sub') }}</p>
                    </div>
                    <div class="p-6 bg-white rounded-lg border border-[#e6e6e6]">
                        <h3 class="font-semibold">{{ __('messages.hiring_page.tech_expertise_title') }}</h3>
                        <p class="text-sm text-[#8a8a8a] mt-2">{{ __('messages.hiring_page.tech_expertise_sub') }}</p>
                    </div>
                    <div class="p-6 bg-white rounded-lg border border-[#e6e6e6]">
                        <h3 class="font-semibold">{{ __('messages.hiring_page.cultural_fit_title') }}</h3>
                        <p class="text-sm text-[#8a8a8a] mt-2">{{ __('messages.hiring_page.cultural_fit_sub') }}</p>
                    </div>
                </div>
            </div>

            <aside class="p-6 bg-[#efefef] rounded-lg">
                <h4 class="text-lg font-semibold">{{ __('messages.hiring_page.fast_process_title') }}</h4>
                <ol class="list-decimal list-inside mt-4 text-sm text-[#6b6b6b] space-y-2">
                    <li>{{ __('messages.hiring_page.fast_process_steps.tell_us') }}</li>
                    <li>{{ __('messages.hiring_page.fast_process_steps.search_screen') }}</li>
                    <li>{{ __('messages.hiring_page.fast_process_steps.send_shortlist') }}</li>
                    <li>{{ __('messages.hiring_page.fast_process_steps.you_hire') }}</li>
                </ol>

                <div class="mt-6">
                    <h5 class="font-semibold">{{ __('messages.hiring_page.pricing_note_title') }}</h5>
                    <p class="text-sm text-[#6b6b6b] mt-2">{{ __('messages.hiring_page.pricing_note_text') }}</p>
                </div>

                <div class="mt-6">
                    <a href="/contact" class="block w-full text-center px-4 py-3 bg-[#2C2C2C] text-white rounded-md">{{ __('messages.hiring_page.get_started') }}</a>
                </div>
            </aside>
        </div>
    </section>
    @include('layouts.footer')
</body>
</html>
