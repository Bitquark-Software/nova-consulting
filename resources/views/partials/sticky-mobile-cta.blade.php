@php $marketingShowMobileTabBar = $marketingShowMobileTabBar ?? false; @endphp
{{-- Round FABs: WhatsApp green + phone (brand dark). Subtle float animation; scale/shadow on hover. --}}
<div
    id="sticky-marketing-fabs"
    @class([
        'fixed z-60 flex flex-col gap-3 bottom-[max(1rem,env(safe-area-inset-bottom))]',
        'max-lg:bottom-[calc(1rem+4.5rem+env(safe-area-inset-bottom))]' => $marketingShowMobileTabBar,
    ])
    style="right: max(1rem, env(safe-area-inset-right));"
>
    <a
        href="https://wa.me/529611465703"
        target="_blank"
        rel="noopener noreferrer"
        class="group marketing-fab-float flex h-14 w-14 sm:h-16 sm:w-16 shrink-0 items-center justify-center rounded-full bg-[#25D366] text-white shadow-[0_8px_24px_-4px_rgba(37,211,102,0.55),0_4px_12px_-2px_rgba(0,0,0,0.12)] outline-none ring-2 ring-white transition-all duration-300 ease-out hover:scale-110 hover:bg-[#20bd5a] hover:shadow-[0_12px_32px_-4px_rgba(37,211,102,0.6),0_6px_16px_-2px_rgba(0,0,0,0.15)] active:scale-95 focus-visible:ring-4 focus-visible:ring-[#25D366]/50 focus-visible:ring-offset-2"
        data-track="sticky_whatsapp_click"
        aria-label="WhatsApp"
    >
        <x-ri-whatsapp-fill class="h-7 w-7 sm:h-8 sm:w-8 transition-transform duration-300 group-hover:scale-105" />
    </a>
    <a
        href="tel:+529611465703"
        class="group marketing-fab-float-delay flex h-14 w-14 sm:h-16 sm:w-16 shrink-0 items-center justify-center rounded-full bg-[#2C2C2C] text-white shadow-[0_8px_24px_-4px_rgba(0,0,0,0.35),0_4px_12px_-2px_rgba(0,0,0,0.12)] outline-none ring-2 ring-white transition-all duration-300 ease-out hover:scale-110 hover:bg-black hover:shadow-[0_12px_32px_-4px_rgba(0,0,0,0.45),0_6px_16px_-2px_rgba(0,0,0,0.14)] active:scale-95 focus-visible:ring-4 focus-visible:ring-[#2C2C2C]/40 focus-visible:ring-offset-2"
        data-track="sticky_call_click"
        aria-label="{{ __('messages.contact.phone') }}"
    >
        <x-ri-phone-fill class="h-6 w-6 sm:h-7 sm:w-7 transition-transform duration-300 group-hover:scale-105" />
    </a>
</div>
