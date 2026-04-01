<footer class="mt-12 border-t border-gray-200 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 py-14 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-10 md:gap-8">
        <div class="space-y-4">
            <img src="{{ asset('images/Web_inverted.svg') }}" alt="Nova Consulting" width="1080" height="1080" decoding="async" draggable="false" class="w-24 h-auto">
            <div class="flex flex-wrap gap-2">
                <a href="https://www.facebook.com/share/1GDwN93yhW/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer" class="w-11 h-11 rounded-full bg-[#F2F2F2] text-[#2C2C2C] flex items-center justify-center border border-gray-200 hover:border-black transition-colors" aria-label="Facebook">
                    <x-ri-facebook-fill class="w-5 h-5" />
                </a>
                <a href="https://www.instagram.com/nova_consulting_devs" target="_blank" rel="noopener noreferrer" class="w-11 h-11 rounded-full bg-[#F2F2F2] text-[#2C2C2C] flex items-center justify-center border border-gray-200 hover:border-black transition-colors" aria-label="Instagram">
                    <x-ri-instagram-fill class="w-5 h-5" />
                </a>
                <a href="https://www.tiktok.com/@novaconsultingmx?_r=1&_t=ZS-946rrstjlUC" target="_blank" rel="noopener noreferrer" class="w-11 h-11 rounded-full bg-[#F2F2F2] text-[#2C2C2C] flex items-center justify-center border border-gray-200 hover:border-black transition-colors" aria-label="TikTok">
                    <x-ri-tiktok-fill class="w-5 h-5" />
                </a>
                <a href="https://wa.me/529611465703" target="_blank" rel="noopener noreferrer" class="w-11 h-11 rounded-full bg-[#F2F2F2] text-[#2C2C2C] flex items-center justify-center border border-gray-200 hover:border-black transition-colors" aria-label="WhatsApp">
                    <x-ri-whatsapp-fill class="w-5 h-5" />
                </a>
            </div>
        </div>
        <div>
            <h2 class="font-bold text-sm uppercase tracking-wider text-gray-500 mb-4">{{ __('messages.footer.services') }}</h2>
            <ul class="space-y-2 text-sm text-[#2C2C2C]">
                <li><a href="{{ route('services') }}" class="hover:underline underline-offset-4">{{ __('messages.footer.custom_software') }}</a></li>
                <li><a href="{{ route('services') }}" class="hover:underline underline-offset-4">{{ __('messages.footer.staff_augmentation') }}</a></li>
                <li><a href="{{ route('services') }}" class="hover:underline underline-offset-4">{{ __('messages.footer.software_consulting') }}</a></li>
                <li><a href="{{ \App\Support\LocalizedUrls::citySoftware('gdl') }}" class="hover:underline underline-offset-4">{{ __('messages.footer.software_gdl') }}</a></li>
                <li><a href="{{ \App\Support\LocalizedUrls::citySoftware('mty') }}" class="hover:underline underline-offset-4">{{ __('messages.footer.software_mty') }}</a></li>
                <li><a href="{{ \App\Support\LocalizedUrls::citySoftware('cdmx') }}" class="hover:underline underline-offset-4">{{ __('messages.footer.software_cdmx') }}</a></li>
                <li><a href="{{ \App\Support\LocalizedUrls::citySoftware('merida') }}" class="hover:underline underline-offset-4">{{ __('messages.footer.software_merida') }}</a></li>
            </ul>
        </div>
        <div>
            <h2 class="font-bold text-sm uppercase tracking-wider text-gray-500 mb-4">{{ __('messages.footer.company') }}</h2>
            <ul class="space-y-2 text-sm text-[#2C2C2C]">
                <li><a href="{{ route('about') }}" class="hover:underline underline-offset-4">{{ __('messages.footer.about') }}</a></li>
                <li><a href="{{ route('contact') }}" class="hover:underline underline-offset-4">Contacto</a></li>
                <li><a href="{{ route('contact') }}" class="hover:underline underline-offset-4">{{ __('messages.footer.contact') }}</a></li>
                <li><a href="{{ route('hiring_services') }}" class="hover:underline underline-offset-4">{{ __('messages.nav.hiring_services') }}</a></li>
            </ul>
        </div>
        <div>
            <h2 class="font-bold text-sm uppercase tracking-wider text-gray-500 mb-4">{{ __('messages.footer.customer_portal') }}</h2>
            <ul class="space-y-2 text-sm text-[#2C2C2C]">
                <li><a href="{{ route('faq') }}" class="hover:underline underline-offset-4">{{ __('messages.footer.faq') }}</a></li>
                <li><a href="{{ url('/dashboard/login') }}" class="hover:underline underline-offset-4">Inicia sesión</a></li>
                <li><a href="{{ url('/dashboard/register') }}" class="hover:underline underline-offset-4">Crea tu cuenta</a></li>
            </ul>
        </div>
    </div>
    <div class="max-w-6xl mx-auto px-4 sm:px-6 border-t border-gray-100">
        <h2 class="font-bold text-sm uppercase tracking-wider text-gray-500 mb-4 pt-10">{{ __('messages.footer.blog') }}</h2>
        <ul class="flex flex-wrap gap-x-6 gap-y-2 text-sm text-[#2C2C2C] pb-10">
            <li><a href="{{ route('blog.cheap_labor') }}" class="hover:underline underline-offset-4">{{ __('messages.footer.blog_cheap_labor') }}</a></li>
            <li><a href="{{ route('blog.vibe_coding') }}" class="hover:underline underline-offset-4">{{ __('messages.footer.blog_vibe_coding') }}</a></li>
        </ul>
    </div>
    <div class="max-w-6xl mx-auto px-4 sm:px-6 pb-10 border-t border-gray-100">
        <h2 class="font-bold text-sm uppercase tracking-wider text-gray-500 mb-4 pt-10">{{ __('messages.footer.guides_prices') }}</h2>
        <ul class="flex flex-wrap gap-x-6 gap-y-2 text-sm text-[#2C2C2C]">
            <li><a href="{{ \App\Support\LocalizedUrls::guide('cuanto_pagina_web') }}" class="hover:underline underline-offset-4">{{ __('guides.cuanto_pagina_web.h1') }}</a></li>
            <li><a href="{{ \App\Support\LocalizedUrls::guide('cuanto_aplicacion') }}" class="hover:underline underline-offset-4">{{ __('guides.cuanto_aplicacion.h1') }}</a></li>
            <li><a href="{{ \App\Support\LocalizedUrls::guide('que_es_landing') }}" class="hover:underline underline-offset-4">{{ __('guides.que_es_landing.h1') }}</a></li>
            <li><a href="{{ \App\Support\LocalizedUrls::guide('cuanto_landing') }}" class="hover:underline underline-offset-4">{{ __('guides.cuanto_landing.h1') }}</a></li>
            <li><a href="{{ \App\Support\LocalizedUrls::guide('como_landing') }}" class="hover:underline underline-offset-4">{{ __('guides.como_landing.h1') }}</a></li>
        </ul>
    </div>
    <div class="border-t border-gray-100 bg-[#F2F2F2] py-4 text-center text-xs text-gray-600">
        Tuxtla Gutiérrez, Chiapas, México
    </div>
</footer>
