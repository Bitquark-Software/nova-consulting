@php
    $htmlLang = 'es-MX';
    $seo_overrides = [
        'title' => 'Empresa de software en Guadalajara | Nova Consulting',
        'description' => 'Desarrollo de software y diseno web para empresas en Guadalajara. Equipo remoto con experiencia operando desde Tuxtla Gutierrez, Chiapas.',
        'keywords' => 'empresa de software en guadalajara, diseno web guadalajara, desarrollo de software remoto mexico, software a medida gdl',
        'og' => [
            'title' => 'Software y diseno web en Guadalajara',
            'description' => 'Soluciones digitales para empresas en GDL con equipo remoto experto desde Tuxtla Gutierrez, Chiapas.',
            'type' => 'website',
            'url' => url('/empresa-software-guadalajara'),
            'image' => asset('images/og-default.png'),
        ],
    ];
@endphp
@extends('layouts.marketing')

@section('nav_ga_section', 'nav-landing-gdl')

@push('styles')
<style>
    @keyframes floatSoft {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-12px); }
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(12px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .fx-float { animation: floatSoft 5s ease-in-out infinite; }
    .fx-fade { animation: fadeIn 0.8s ease-out forwards; }
</style>
@endpush

@section('content')

<div class="pt-8 md:pt-10 pb-16 overflow-hidden">
    <section class="relative px-4">
        <div class="absolute -top-12 -left-10 w-40 h-40 rounded-full bg-white/70 blur-2xl fx-float"></div>
        <div class="absolute top-24 -right-10 w-52 h-52 rounded-full bg-gray-300/50 blur-3xl fx-float"></div>
        <div class="relative max-w-6xl mx-auto grid md:grid-cols-2 gap-8 items-center">
            <div class="fx-fade">
                <p class="inline-block text-xs uppercase tracking-[0.2em] px-3 py-1 rounded-full bg-white border border-gray-300">Guadalajara Jalisco</p>
                <h1 class="mt-4 text-4xl md:text-6xl font-bold leading-tight">Software y diseno web para empresas en Guadalajara</h1>
                <p class="mt-5 text-gray-700 text-lg">
                    Construimos experiencias digitales modernas para crecimiento comercial. Operamos remotamente
                    desde Tuxtla Gutierrez, Chiapas, con metodologia agil y comunicacion continua.
                </p>
                <div class="mt-7 flex flex-wrap gap-3">
                    <a href="https://wa.me/529611465703" target="_blank" class="px-6 py-3 rounded-md bg-[#2C2C2C] text-white font-semibold">Hablar por WhatsApp</a>
                    <a href="tel:+529611465703" class="px-6 py-3 rounded-md border border-[#2C2C2C] font-semibold">Llamar ahora</a>
                </div>
            </div>
            <div class="fx-fade">
                <div class="rounded-3xl bg-[#2C2C2C] text-white p-8 shadow-2xl">
                    <p class="text-xs uppercase tracking-[0.2em] text-gray-300">Cupon promocional</p>
                    <h2 class="mt-3 text-3xl font-bold">GDL10NOVA</h2>
                    <p class="mt-3 text-gray-300">Aplica 10% de descuento en tu propuesta inicial al mencionar este cupon.</p>
                    <div class="mt-6 p-4 rounded-xl bg-white/10 border border-white/20">
                        <p class="text-sm text-gray-200">Valido para proyectos nuevos de software y diseno web.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-16 px-4">
        <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-5">
            <article class="bg-white rounded-2xl p-6 border border-gray-200 shadow-sm">
                <h3 class="font-semibold text-xl">Discovery rapido</h3>
                <p class="mt-2 text-gray-600">Definimos objetivos y roadmap en sesiones concretas para iniciar sin friccion.</p>
            </article>
            <article class="bg-white rounded-2xl p-6 border border-gray-200 shadow-sm">
                <h3 class="font-semibold text-xl">Ejecucion visible</h3>
                <p class="mt-2 text-gray-600">Tablero compartido, demos semanales y entregables por sprint para total control.</p>
            </article>
            <article class="bg-white rounded-2xl p-6 border border-gray-200 shadow-sm">
                <h3 class="font-semibold text-xl">Escalamiento continuo</h3>
                <p class="mt-2 text-gray-600">Acompanamos mejoras, performance y nuevas funcionalidades post-lanzamiento.</p>
            </article>
        </div>
    </section>

    <section class="max-w-5xl mx-auto mt-16 px-4" data-ga-section="faq-gdl">
        <h2 class="text-3xl font-bold text-center">FAQ - Equipo remoto desde Tuxtla Gutierrez, Chiapas</h2>
        <div class="mt-6 space-y-4">
            <details class="bg-white p-5 rounded-xl border border-gray-200">
                <summary class="font-semibold cursor-pointer">Como mantienen calidad trabajando remoto?</summary>
                <p class="mt-2 text-gray-700">Con procesos estandarizados: planeacion semanal, QA continuo y revisiones por hitos.</p>
            </details>
            <details class="bg-white p-5 rounded-xl border border-gray-200">
                <summary class="font-semibold cursor-pointer">Han trabajado con empresas fuera de Chiapas?</summary>
                <p class="mt-2 text-gray-700">Si, colaboramos con clientes de varias ciudades de Mexico en formato remoto.</p>
            </details>
            <details class="bg-white p-5 rounded-xl border border-gray-200">
                <summary class="font-semibold cursor-pointer">Que incluye la propuesta inicial?</summary>
                <p class="mt-2 text-gray-700">Alcance, tiempos, fases, costos y recomendacion tecnica clara para tomar decision.</p>
            </details>
        </div>
    </section>

    @include('partials.lead-qualification-form', ['leadSource' => 'landing-gdl'])
</div>
@endsection
