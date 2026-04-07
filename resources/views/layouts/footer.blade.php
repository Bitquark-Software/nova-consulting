<footer class="marketing-footer mt-16 sm:mt-20 mb-[3em] px-4 sm:px-6">
    <div class="marketing-footer__surface max-w-6xl mx-auto">
        <div class="marketing-footer__inner px-6 sm:px-8 lg:px-10 pt-10 sm:pt-12 pb-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-10 md:gap-9 lg:gap-10">
                <div class="space-y-5 sm:col-span-2 md:col-span-1">
                    <img src="{{ asset('images/Web_inverted.svg') }}" alt="Nova Consulting" width="1080" height="1080" decoding="async" draggable="false" class="w-24 h-auto">
                    <div class="flex flex-wrap gap-2.5">
                        <a href="https://www.facebook.com/share/1GDwN93yhW/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer" class="marketing-footer__social" aria-label="Facebook">
                            <x-ri-facebook-fill class="w-5 h-5" />
                        </a>
                        <a href="https://www.instagram.com/nova_consulting_devs" target="_blank" rel="noopener noreferrer" class="marketing-footer__social" aria-label="Instagram">
                            <x-ri-instagram-fill class="w-5 h-5" />
                        </a>
                        <a href="https://www.tiktok.com/@novaconsultingmx?_r=1&_t=ZS-946rrstjlUC" target="_blank" rel="noopener noreferrer" class="marketing-footer__social" aria-label="TikTok">
                            <x-ri-tiktok-fill class="w-5 h-5" />
                        </a>
                        <a href="https://wa.me/529611465703" target="_blank" rel="noopener noreferrer" class="marketing-footer__social" aria-label="WhatsApp">
                            <x-ri-whatsapp-fill class="w-5 h-5" />
                        </a>
                    </div>
                </div>
                <div>
                    <h2 class="marketing-footer__section-title">{{ __('messages.footer.services') }}</h2>
                    <ul class="space-y-0.5" role="list">
                        <li><a href="{{ route('services') }}" class="marketing-footer__link">{{ __('messages.footer.custom_software') }}</a></li>
                        <li><a href="{{ route('services') }}" class="marketing-footer__link">{{ __('messages.footer.staff_augmentation') }}</a></li>
                        <li><a href="{{ route('services') }}" class="marketing-footer__link">{{ __('messages.footer.software_consulting') }}</a></li>
                        <li><a href="{{ \App\Support\LocalizedUrls::citySoftware('gdl') }}" class="marketing-footer__link">{{ __('messages.footer.software_gdl') }}</a></li>
                        <li><a href="{{ \App\Support\LocalizedUrls::citySoftware('mty') }}" class="marketing-footer__link">{{ __('messages.footer.software_mty') }}</a></li>
                        <li><a href="{{ \App\Support\LocalizedUrls::citySoftware('cdmx') }}" class="marketing-footer__link">{{ __('messages.footer.software_cdmx') }}</a></li>
                        <li><a href="{{ \App\Support\LocalizedUrls::citySoftware('merida') }}" class="marketing-footer__link">{{ __('messages.footer.software_merida') }}</a></li>
                    </ul>
                </div>
                <div>
                    <h2 class="marketing-footer__section-title">{{ __('messages.footer.company') }}</h2>
                    <ul class="space-y-0.5" role="list">
                        <li><a href="{{ route('about') }}" class="marketing-footer__link">{{ __('messages.footer.about') }}</a></li>
                        <li><a href="{{ route('contact') }}" class="marketing-footer__link">{{ __('messages.footer.contact') }}</a></li>
                        <li><a href="{{ route('hiring_services') }}" class="marketing-footer__link">{{ __('messages.nav.hiring_services') }}</a></li>
                    </ul>
                </div>
                <div>
                    <h2 class="marketing-footer__section-title">{{ __('messages.footer.customer_portal') }}</h2>
                    <ul class="space-y-0.5" role="list">
                        <li><a href="{{ route('faq') }}" class="marketing-footer__link">{{ __('messages.footer.faq') }}</a></li>
                        <li><a href="{{ url('/dashboard/login') }}" class="marketing-footer__link">{{ __('messages.nav.login') }}</a></li>
                        <li><a href="{{ url('/dashboard/register') }}" class="marketing-footer__link">{{ __('messages.footer.create_account') }}</a></li>
                    </ul>
                </div>
            </div>

            <div class="marketing-footer__divider my-10 sm:my-11" role="presentation" aria-hidden="true"></div>

            <div>
                <h2 class="marketing-footer__section-title">{{ __('messages.footer.blog') }}</h2>
                <ul class="flex flex-wrap gap-x-2 gap-y-1" role="list">
                    <li><a href="{{ route('blog.index') }}" class="marketing-footer__link marketing-footer__link--strong">{{ __('messages.footer.blog_index') }}</a></li>
                    <li><a href="{{ route('blog.cheap_labor') }}" class="marketing-footer__link">{{ __('messages.footer.blog_cheap_labor') }}</a></li>
                    <li><a href="{{ route('blog.vibe_coding') }}" class="marketing-footer__link">{{ __('messages.footer.blog_vibe_coding') }}</a></li>
                </ul>
            </div>

            <div class="marketing-footer__divider my-10 sm:my-11" role="presentation" aria-hidden="true"></div>

            <div>
                <h2 class="marketing-footer__section-title">{{ __('messages.footer.guides_prices') }}</h2>
                <ul class="flex flex-wrap gap-x-2 gap-y-1" role="list">
                    <li><a href="{{ \App\Support\LocalizedUrls::guide('cuanto_pagina_web') }}" class="marketing-footer__link">{{ __('guides.cuanto_pagina_web.h1') }}</a></li>
                    <li><a href="{{ \App\Support\LocalizedUrls::guide('cuanto_aplicacion') }}" class="marketing-footer__link">{{ __('guides.cuanto_aplicacion.h1') }}</a></li>
                    <li><a href="{{ \App\Support\LocalizedUrls::guide('que_es_landing') }}" class="marketing-footer__link">{{ __('guides.que_es_landing.h1') }}</a></li>
                    <li><a href="{{ \App\Support\LocalizedUrls::guide('cuanto_landing') }}" class="marketing-footer__link">{{ __('guides.cuanto_landing.h1') }}</a></li>
                    <li><a href="{{ \App\Support\LocalizedUrls::guide('como_landing') }}" class="marketing-footer__link">{{ __('guides.como_landing.h1') }}</a></li>
                </ul>
            </div>
        </div>

        <div class="marketing-footer__ribbon">
            Tuxtla Gutiérrez, Chiapas, México
        </div>
    </div>
</footer>
