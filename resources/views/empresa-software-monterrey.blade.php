@php
    $htmlLang = 'es-MX';
    $seo_overrides = [
        'title' => 'Empresa de software en Monterrey | Nova Consulting',
        'description' => 'Desarrollo de software y diseno web para empresas en Monterrey. Equipo remoto experto trabajando desde Tuxtla Gutierrez, Chiapas.',
        'keywords' => 'empresa de software en monterrey, diseno web monterrey, desarrollo de software remoto mexico, software a medida monterrey',
        'og' => [
            'title' => 'Software y diseno web en Monterrey',
            'description' => 'Servicios digitales para empresas de Monterrey con equipo remoto desde Tuxtla Gutierrez, Chiapas.',
            'type' => 'website',
            'url' => url('/empresa-software-monterrey'),
            'image' => asset('images/og-default.png'),
        ],
    ];
@endphp
@extends('layouts.marketing')

@section('nav_ga_section', 'nav-landing-mty')

@push('styles')
<style>
    @keyframes pulseSoft { 0%,100% { opacity: .6; } 50% { opacity: 1; } }
    @keyframes liftIn { from { opacity:0; transform: translateY(14px);} to {opacity:1; transform: translateY(0);} }
    .fx-pulse { animation: pulseSoft 4s ease-in-out infinite; }
    .fx-lift { animation: liftIn .8s ease-out forwards; }
</style>
@endpush

@section('content')

<div class="pt-8 md:pt-10 pb-16 overflow-hidden">
    <section class="relative px-4">
        <div class="absolute top-0 left-10 w-52 h-52 rounded-full bg-gray-300/40 blur-3xl fx-pulse"></div>
        <div class="relative max-w-6xl mx-auto grid md:grid-cols-2 gap-8 items-center">
            <div class="fx-lift">
                <p class="inline-block text-xs uppercase tracking-[0.2em] px-3 py-1 rounded-full bg-white border border-gray-300">Monterrey Nuevo Leon</p>
                <h1 class="mt-4 text-4xl md:text-6xl font-bold leading-tight">Desarrollo de software moderno para Monterrey</h1>
                <p class="mt-6 text-lg text-gray-700">
                    Diseñamos soluciones digitales con foco en negocio, performance y escalabilidad.
                    Somos un equipo remoto operando desde Tuxtla Gutierrez, Chiapas.
                </p>
                <div class="mt-7 flex flex-wrap gap-3">
                    <a href="https://wa.me/529611465703" target="_blank" class="px-6 py-3 rounded-md bg-[#2C2C2C] text-white font-semibold">Hablar por WhatsApp</a>
                    <a href="tel:+529611465703" class="px-6 py-3 rounded-md border border-[#2C2C2C] font-semibold">Agendar llamada</a>
                </div>
            </div>
            <div class="fx-lift">
                <div class="rounded-3xl bg-[#2C2C2C] text-white p-8 shadow-2xl">
                    <p class="text-xs uppercase tracking-[0.2em] text-gray-300">Cupon exclusivo Monterrey</p>
                    <h2 class="mt-3 text-3xl font-bold">MTY10NOVA</h2>
                    <p class="mt-3 text-gray-300">10% de descuento en propuesta inicial para proyectos nuevos.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-16 px-4">
        <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-5">
            <article class="bg-white rounded-2xl p-6 border border-gray-200">
                <h3 class="font-semibold text-xl">Arquitectura robusta</h3>
                <p class="mt-2 text-gray-600">Construimos bases tecnicas para crecimiento sin rehacer proyectos cada pocos meses.</p>
            </article>
            <article class="bg-white rounded-2xl p-6 border border-gray-200">
                <h3 class="font-semibold text-xl">Transparencia total</h3>
                <p class="mt-2 text-gray-600">Seguimiento por sprint, decisiones documentadas y roadmap visible en todo momento.</p>
            </article>
            <article class="bg-white rounded-2xl p-6 border border-gray-200">
                <h3 class="font-semibold text-xl">Entrega con impacto</h3>
                <p class="mt-2 text-gray-600">Priorizamos funcionalidades que mejoran conversion, ventas y eficiencia operativa.</p>
            </article>
        </div>
    </section>

    <section class="max-w-5xl mx-auto mt-16 px-4" data-ga-section="faq-mty">
        <h2 class="text-3xl font-bold text-center">FAQ - Experiencia remota desde Tuxtla, Chiapas</h2>
        <div class="mt-6 space-y-4">
            <details class="bg-white p-5 rounded-xl border border-gray-200">
                <summary class="font-semibold cursor-pointer">La distancia afecta tiempos de entrega?</summary>
                <p class="mt-2 text-gray-700">No. Usamos procesos de trabajo remoto con cronograma, entregas parciales y reportes semanales.</p>
            </details>
            <details class="bg-white p-5 rounded-xl border border-gray-200">
                <summary class="font-semibold cursor-pointer">Como gestionan comunicacion con equipos en Monterrey?</summary>
                <p class="mt-2 text-gray-700">Definimos canales directos, reuniones fijas y responsables por proyecto para que tengas trazabilidad total.</p>
            </details>
            <details class="bg-white p-5 rounded-xl border border-gray-200">
                <summary class="font-semibold cursor-pointer">Pueden integrarse con nuestro equipo interno?</summary>
                <p class="mt-2 text-gray-700">Si. Podemos trabajar como equipo externo o en esquema hibrido junto a tu equipo actual.</p>
            </details>
        </div>
    </section>

    @include('partials.lead-qualification-form', ['leadSource' => 'landing-monterrey'])
</div>
@endsection
