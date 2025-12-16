<footer class="w-full p-12 bg-[#e2e2e2] grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 items-center justify-center gap-1">
    <div class="col-span-1">
        <img src="{{asset('images/Web_inverted.svg')}}" alt="Nova Consulting" draggable="false" class="w-40 h-auto">
        <div class="flex flex-row gap-2 items-center justify-start">
            <a href="#" class="w-12 h-12 rounded-full bg-[#b3b3b3] text-[#2C2C2C] text-center flex items-center justify-center">
                <x-ri-facebook-fill class="w-6 h-6" />
            </a>
            <a href="#" class="w-12 h-12 rounded-full bg-[#b3b3b3] text-[#2C2C2C] text-center flex items-center justify-center">
                <x-ri-instagram-fill class="w-6 h-6" />
            </a>
            <a href="#" class="w-12 h-12 rounded-full bg-[#b3b3b3] text-[#2C2C2C] text-center flex items-center justify-center">
                <x-ri-tiktok-fill class="w-6 h-6" />
            </a>
            <a href="#" class="w-12 h-12 rounded-full bg-[#b3b3b3] text-[#2C2C2C] text-center flex items-center justify-center">
                <x-ri-whatsapp-fill class="w-6 h-6" />
            </a>
        </div>
    </div>
    <div class="col-span-1">
        <h1 class="font-bold text-xl">{{ __('messages.footer.services') }}</h1>
        <ul>
            <li>
                <a href="{{ route('services') }}" class="underline">{{ __('messages.footer.custom_software') }}</a>
            </li>
            <li>
                <a href="{{ route('services') }}" class="underline">{{ __('messages.footer.staff_augmentation') }}</a>
            </li>
            <li>
                <a href="{{ route('services') }}" class="underline">{{ __('messages.footer.software_consulting') }}</a>
            </li>
        </ul>
    </div>
    <div class="col-span-1">
        <h1 class="font-bold text-xl">{{ __('messages.footer.company') }}</h1>
        <ul>
            <li>
                <a href="{{ route('about') }}" class="underline">{{ __('messages.footer.about') }}</a>
            </li>
            <li>
                <a href="#" class="underline">{{ __('messages.footer.careers') }}</a>
            </li>
            <li>
                <a href="{{ route('contact') }}" class="underline">{{ __('messages.footer.contact') }}</a>
            </li>
        </ul>
    </div>
    <div class="col-span-1">
        <h1 class="font-bold text-xl">{{ __('messages.footer.customer_portal') }}</h1>
        <ul>
            <li>
                <a href="{{ route('faq') }}" class="underline">{{ __('messages.footer.faq') }}</a>
            </li>
            <li>
                <a href="#" class="underline">{{ __('messages.footer.my_projects') }}</a>
            </li>
            <li>
                <a href="#" class="underline">{{ __('messages.footer.create_account') }}</a>
            </li>
        </ul>
    </div>
</footer>