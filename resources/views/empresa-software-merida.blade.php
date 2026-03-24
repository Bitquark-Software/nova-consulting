@php
    $htmlLang = 'es-MX';
    $seo_overrides = [
        'title' => 'Empresa de software en Merida | Nova Consulting',
        'description' => 'Servicios de software y diseno web para empresas en Merida. Equipo remoto con experiencia trabajando desde Tuxtla Gutierrez, Chiapas.',
        'keywords' => 'empresa de software en merida, diseno web merida, desarrollo de software yucatan, software remoto mexico',
        'og' => [
            'title' => 'Software y diseno web en Merida',
            'description' => 'Acompanamos empresas en Merida con soluciones digitales y ejecucion remota desde Tuxtla Gutierrez, Chiapas.',
            'type' => 'website',
            'url' => url('/empresa-software-merida'),
            'image' => asset('images/og-default.png'),
        ],
    ];
@endphp
@extends('layouts.marketing')

@section('nav_ga_section', 'nav-landing-merida')

@push('styles')
<style>
    @keyframes popIn {
        from { opacity: 0; transform: scale(.96) translateY(10px); }
        to { opacity: 1; transform: scale(1) translateY(0); }
    }
    .fx-pop { animation: popIn .7s ease-out forwards; }
</style>
@endpush

@section('content')

<div class="pt-8 md:pt-10 pb-16">
    <section class="px-4">
        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8 items-stretch">
            <div class="bg-white border border-gray-200 rounded-3xl p-8 md:p-10 fx-pop">
                <p class="text-xs uppercase tracking-[0.2em] text-gray-500">Merida Yucatan</p>
                <h1 class="mt-3 text-4xl md:text-6xl font-bold leading-tight">Landing y software con diseño vivo para Merida</h1>
                <p class="mt-5 text-lg text-gray-700">
                    Creamos soluciones elegantes y efectivas para captar clientes y mejorar procesos.
                    Operamos remoto desde Tuxtla Gutierrez, Chiapas con enfoque colaborativo.
                </p>
                <div class="mt-7 flex flex-wrap gap-3">
                    <a href="https://wa.me/529611465703" target="_blank" class="px-6 py-3 rounded-md bg-[#2C2C2C] text-white font-semibold">Escribir por WhatsApp</a>
                    <a href="tel:+529611465703" class="px-6 py-3 rounded-md border border-[#2C2C2C] font-semibold">Solicitar llamada</a>
                </div>
            </div>
            <div class="bg-[#2C2C2C] text-white rounded-3xl p-8 md:p-10 fx-pop">
                <p class="text-xs uppercase tracking-[0.2em] text-gray-300">Cupon exclusivo Merida</p>
                <h2 class="mt-3 text-3xl font-bold">MERIDA10NOVA</h2>
                <p class="mt-3 text-gray-300">Activa 10% de descuento en tu propuesta inicial para proyecto nuevo.</p>
                <div class="mt-6 rounded-xl border border-white/20 bg-white/10 p-4">
                    <p class="text-sm text-gray-200">Valido para servicios de diseno web y software a medida.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-16 px-4">
        <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-5">
            <article class="bg-white rounded-2xl p-6 border border-gray-200">
                <h3 class="font-semibold text-xl">Diseño memorable</h3>
                <p class="mt-2 text-gray-600">Interfaces limpias, visuales y enfocadas en conversion.</p>
            </article>
            <article class="bg-white rounded-2xl p-6 border border-gray-200">
                <h3 class="font-semibold text-xl">Implementacion agil</h3>
                <p class="mt-2 text-gray-600">Entregas rapidas por etapas para acelerar salida a mercado.</p>
            </article>
            <article class="bg-white rounded-2xl p-6 border border-gray-200">
                <h3 class="font-semibold text-xl">Soporte cercano</h3>
                <p class="mt-2 text-gray-600">Seguimos contigo despues del lanzamiento para optimizar resultados.</p>
            </article>
        </div>
    </section>

    <section class="max-w-5xl mx-auto mt-16 px-4" data-ga-section="faq-merida">
        <h2 class="text-3xl font-bold text-center">FAQ - Somos un equipo remoto desde Tuxtla, Chiapas</h2>
        <div class="mt-6 space-y-4">
            <details class="bg-white p-5 rounded-xl border border-gray-200">
                <summary class="font-semibold cursor-pointer">Que ventajas tiene trabajar remoto con ustedes?</summary>
                <p class="mt-2 text-gray-700">Menor tiempo de respuesta, reuniones flexibles y costos optimizados sin sacrificar calidad tecnica.</p>
            </details>
            <details class="bg-white p-5 rounded-xl border border-gray-200">
                <summary class="font-semibold cursor-pointer">Como hacen seguimiento del proyecto?</summary>
                <p class="mt-2 text-gray-700">Compartimos roadmap, tareas por sprint y reportes frecuentes para total visibilidad.</p>
            </details>
            <details class="bg-white p-5 rounded-xl border border-gray-200">
                <summary class="font-semibold cursor-pointer">Atienden tanto web como software?</summary>
                <p class="mt-2 text-gray-700">Si, ofrecemos diseno web comercial, ecommerce, software a medida y automatizaciones.</p>
            </details>
        </div>
    </section>

    @include('partials.lead-qualification-form', ['leadSource' => 'landing-merida'])
</div>
@endsection
