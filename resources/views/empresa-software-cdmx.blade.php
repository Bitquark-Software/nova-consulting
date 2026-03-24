@php
    $htmlLang = 'es-MX';
    $seo_overrides = [
        'title' => 'Empresa de software en Ciudad de Mexico | Nova Consulting',
        'description' => 'Diseno web y desarrollo de software para empresas en Ciudad de Mexico. Equipo remoto con experiencia operando desde Tuxtla Gutierrez, Chiapas.',
        'keywords' => 'empresa de software ciudad de mexico, diseno web cdmx, software a medida cdmx, desarrollo remoto mexico',
        'og' => [
            'title' => 'Software y diseno web en Ciudad de Mexico',
            'description' => 'Acompanamos empresas de CDMX con servicios digitales y ejecucion remota desde Tuxtla Gutierrez, Chiapas.',
            'type' => 'website',
            'url' => url('/empresa-software-cdmx'),
            'image' => asset('images/og-default.png'),
        ],
    ];
@endphp
@extends('layouts.marketing')

@section('nav_ga_section', 'nav-landing-cdmx')

@push('styles')
<style>
    @keyframes glowMove {
        0%,100% { transform: translateX(0px); opacity:.6; }
        50% { transform: translateX(10px); opacity:1; }
    }
    .fx-glow { animation: glowMove 5s ease-in-out infinite; }
</style>
@endpush

@section('content')

<div class="pt-8 md:pt-10 pb-16 overflow-hidden">
    <section class="relative px-4">
        <div class="absolute -top-8 right-8 w-60 h-60 rounded-full bg-gray-300/40 blur-3xl fx-glow"></div>
        <div class="relative max-w-6xl mx-auto">
            <div class="bg-white border border-gray-200 rounded-3xl p-8 md:p-10 shadow-sm">
                <p class="text-xs uppercase tracking-[0.2em] text-gray-500">Ciudad de Mexico</p>
                <h1 class="mt-3 text-4xl md:text-6xl font-bold leading-tight">Diseño digital con nivel enterprise para CDMX</h1>
                <p class="mt-5 text-lg text-gray-700 max-w-4xl">
                    Creamos software y experiencias web que escalan con tus objetivos de negocio.
                    Operamos remotamente desde Tuxtla Gutierrez, Chiapas, con colaboracion diaria y enfoque en resultados.
                </p>
                <div class="mt-7 flex flex-wrap gap-3">
                    <a href="https://wa.me/529611465703" target="_blank" class="px-6 py-3 rounded-md bg-[#2C2C2C] text-white font-semibold">Contactar por WhatsApp</a>
                    <a href="tel:+529611465703" class="px-6 py-3 rounded-md border border-[#2C2C2C] font-semibold">Hablar con un asesor</a>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-6xl mx-auto mt-12 px-4" data-ga-section="promo-cdmx">
        <div class="bg-black text-white rounded-2xl p-8 text-center">
        <p class="text-xs uppercase tracking-[0.2em] text-gray-300">Cupon exclusivo CDMX</p>
        <h2 class="mt-3 text-3xl font-bold">CDMX10NOVA - 10% de descuento</h2>
        <p class="mt-3 text-gray-300">Solicita tu propuesta y comparte el cupon para aplicar la promocion.</p>
        <div class="mt-6 flex flex-col sm:flex-row items-center justify-center gap-3">
            <a href="https://wa.me/529611465703" target="_blank" class="px-6 py-3 rounded-md bg-white text-black font-semibold">Reclamar por WhatsApp</a>
            <a href="tel:+529611465703" class="px-6 py-3 rounded-md border border-white text-white font-semibold">Llamar ahora</a>
        </div>
        </div>
    </section>

    <section class="max-w-5xl mx-auto mt-16 px-4" data-ga-section="faq-cdmx">
        <h2 class="text-3xl font-bold text-center">FAQ - Colaboracion remota desde Tuxtla, Chiapas</h2>
        <div class="mt-6 space-y-4">
            <details class="bg-white p-5 rounded-xl border border-gray-200">
                <summary class="font-semibold cursor-pointer">Como aseguran calidad trabajando remoto?</summary>
                <p class="mt-2 text-gray-700">Implementamos control por hitos, QA, demos periodicas y seguimiento compartido del proyecto.</p>
            </details>
            <details class="bg-white p-5 rounded-xl border border-gray-200">
                <summary class="font-semibold cursor-pointer">Tienen experiencia con clientes grandes?</summary>
                <p class="mt-2 text-gray-700">Si, trabajamos con diferentes tamanos de empresa y adaptamos el proceso a requerimientos corporativos.</p>
            </details>
            <details class="bg-white p-5 rounded-xl border border-gray-200">
                <summary class="font-semibold cursor-pointer">Pueden iniciar rapido?</summary>
                <p class="mt-2 text-gray-700">Si. Podemos arrancar con discovery en pocos dias y entregar plan de trabajo desde la primera semana.</p>
            </details>
        </div>
    </section>

    @include('partials.lead-qualification-form', ['leadSource' => 'landing-cdmx'])
</div>
@endsection
