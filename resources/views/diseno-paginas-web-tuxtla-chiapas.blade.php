@php
    $htmlLang = 'es-MX';
    $seo_overrides = [
        'title' => 'Diseños de paginas web en Tuxtla Gutiérrez',
        'description' => 'Servicio de diseño de paginas web en Tuxtla Gutierrez, Chiapas. Creamos sitios web corporativos, catalogos y landing pages enfocadas en conversion.',
        'keywords' => 'diseño de paginas web en tuxtla, diseño web chiapas, crear pagina web en tuxtla gutierrez, landing page chiapas, desarrollo web para negocios locales',
        'og' => [
            'title' => 'Diseños de paginas web en Tuxtla Gutiérrez',
            'description' => 'Paginas web profesionales para empresas de Tuxtla y Chiapas con enfoque comercial y SEO.',
            'type' => 'website',
            'url' => url('/diseno-paginas-web-tuxtla-chiapas'),
            'image' => asset('images/og-default.png'),
        ],
    ];
@endphp
@extends('layouts.marketing')

@section('nav_ga_section', 'nav-landing-tuxtla-web')

@section('content')

    <div class="pt-8 sm:pt-10 pb-16 px-4">
        <section class="max-w-5xl mx-auto text-center">
            <h1 class="text-4xl md:text-6xl font-bold leading-tight">
                Diseños de paginas web en Tuxtla Gutiérrez
            </h1>
            <p class="mt-6 text-lg text-gray-700 max-w-3xl mx-auto">
                Creamos paginas web para empresas de Tuxtla y Chiapas que quieren vender mas,
                mejorar su presencia digital y aparecer en Google con una imagen profesional.
            </p>
            <div class="mt-8 flex flex-col sm:flex-row gap-3 justify-center">
                <a href="https://wa.me/529611465703" target="_blank" class="px-6 py-3 rounded-md bg-[#2C2C2C] text-white font-medium" data-track="landing_web_whatsapp_click">
                    Cotizar por WhatsApp
                </a>
                <a href="tel:+529611465703" class="px-6 py-3 rounded-md border border-[#2C2C2C] text-[#2C2C2C] font-medium" data-track="landing_web_phone_click">
                    Llamar al +52 961 146 5703
                </a>
                <a href="mailto:sales@novaconsulting.com.mx" class="px-6 py-3 rounded-md border border-[#2C2C2C] text-[#2C2C2C] font-medium" data-track="landing_web_email_click">
                    Escribir por correo
                </a>
            </div>
        </section>

        <section class="max-w-6xl mx-auto mt-16 grid grid-cols-1 md:grid-cols-3 gap-6">
            <article class="bg-white rounded-xl p-6 shadow-sm">
                <h2 class="text-xl font-semibold">Sitios corporativos</h2>
                <p class="mt-3 text-gray-700">
                    Paginas web para presentar tus servicios, generar confianza y recibir contactos de clientes potenciales.
                </p>
            </article>
            <article class="bg-white rounded-xl p-6 shadow-sm">
                <h2 class="text-xl font-semibold">Landing pages de conversion</h2>
                <p class="mt-3 text-gray-700">
                    Disenamos landing pages para campanas en Google Ads o redes sociales con enfoque en leads y ventas.
                </p>
            </article>
            <article class="bg-white rounded-xl p-6 shadow-sm">
                <h2 class="text-xl font-semibold">SEO tecnico inicial</h2>
                <p class="mt-3 text-gray-700">
                    Tu sitio se entrega con estructura SEO base para mejorar visibilidad en busquedas locales de Chiapas.
                </p>
            </article>
        </section>

        <section class="max-w-6xl mx-auto mt-16 bg-black text-white rounded-2xl p-8 md:p-10 text-center" data-ga-section="promo-web-chiapas">
            <p class="text-xs uppercase tracking-[0.2em] text-gray-300">Promocion local</p>
            <h2 class="mt-3 text-3xl md:text-4xl font-bold">10% de descuento para negocios de Tuxtla y Chiapas</h2>
            <p class="mt-4 text-gray-300 max-w-3xl mx-auto">
                Si tu empresa esta en Chiapas, aprovecha este descuento en tu nueva pagina web o landing comercial.
                Menciona "DESCUENTO CHIAPAS" al escribirnos.
            </p>
            <div class="mt-6 flex flex-col sm:flex-row items-center justify-center gap-3">
                <a href="https://wa.me/529611465703" target="_blank" class="px-6 py-3 rounded-md bg-white text-black font-semibold" data-track="promo_web_whatsapp_click">
                    Reclamar 10% por WhatsApp
                </a>
                <a href="tel:+529611465703" class="px-6 py-3 rounded-md border border-white text-white font-semibold" data-track="promo_web_phone_click">
                    Llamar ahora
                </a>
            </div>
        </section>

        <section class="max-w-5xl mx-auto mt-16 bg-white rounded-2xl p-8 shadow-sm">
            <h2 class="text-2xl font-bold">Habla con nuestro equipo de Tuxtla</h2>
            <p class="mt-4 text-gray-700 leading-relaxed">
                Si buscas una opcion profesional para diseño de paginas web en Tuxtla Gutierrez o en cualquier
                municipio de Chiapas, te ayudamos desde el concepto hasta la publicacion y medicion de resultados.
            </p>
            <ul class="mt-6 space-y-2 text-gray-700">
                <li>Direccion: 1067 Chihuahua Avenue, Tuxtla Gutierrez, Chiapas 29020</li>
                <li>Telefono: <a href="tel:+529611465703" class="underline">+52 961 146 5703</a></li>
                <li>Correo: <a href="mailto:sales@novaconsulting.com.mx" class="underline">sales@novaconsulting.com.mx</a></li>
            </ul>
        </section>

        <section class="max-w-5xl mx-auto mt-16 grid grid-cols-1 md:grid-cols-2 gap-6">
            <article class="bg-white rounded-xl p-6 border border-gray-100 shadow-sm">
                <h3 class="font-semibold text-lg">Garantias comerciales</h3>
                <ul class="mt-3 text-gray-700 space-y-2">
                    <li>Estructura SEO base y conversion desde la primera entrega.</li>
                    <li>Diseno alineado a objetivos comerciales, no solo estetica.</li>
                    <li>Entrega con acompanamiento para publicacion.</li>
                </ul>
            </article>
            <article class="bg-white rounded-xl p-6 border border-gray-100 shadow-sm">
                <h3 class="font-semibold text-lg">Testimonio de cliente</h3>
                <p class="mt-3 text-gray-700">"Con la nueva landing empezamos a recibir mensajes por WhatsApp de clientes que no nos encontraban antes."</p>
                <p class="mt-2 text-sm font-semibold text-gray-900">Comercial, empresa de servicios en Chiapas</p>
            </article>
        </section>

        <section class="max-w-5xl mx-auto mt-16" data-ga-section="faq-web-chiapas">
            <h2 class="text-3xl font-bold text-center">FAQ sobre diseno de paginas web en Tuxtla y Chiapas</h2>
            <div class="mt-6 space-y-4">
                <details class="bg-white p-5 rounded-xl border border-gray-200">
                    <summary class="font-semibold cursor-pointer">En cuanto tiempo entregan una pagina web?</summary>
                    <p class="mt-2 text-gray-700">Normalmente entre 2 y 4 semanas, dependiendo del contenido y funcionalidades.</p>
                </details>
                <details class="bg-white p-5 rounded-xl border border-gray-200">
                    <summary class="font-semibold cursor-pointer">La pagina queda preparada para SEO local?</summary>
                    <p class="mt-2 text-gray-700">Si, entregamos estructura base SEO para mejorar visibilidad en busquedas de Tuxtla y Chiapas.</p>
                </details>
                <details class="bg-white p-5 rounded-xl border border-gray-200">
                    <summary class="font-semibold cursor-pointer">Incluyen mantenimiento o cambios posteriores?</summary>
                    <p class="mt-2 text-gray-700">Ofrecemos paquetes de soporte para ajustes, mejoras y actualizaciones despues del lanzamiento.</p>
                </details>
                <details class="bg-white p-5 rounded-xl border border-gray-200">
                    <summary class="font-semibold cursor-pointer">Como obtengo el 10% de descuento en Chiapas?</summary>
                    <p class="mt-2 text-gray-700">Contactanos por WhatsApp o telefono y menciona "DESCUENTO CHIAPAS" para aplicar el beneficio.</p>
                </details>
            </div>
        </section>

        @include('partials.lead-qualification-form', ['leadSource' => 'landing-web-tuxtla-chiapas'])
    </div>
@endsection
