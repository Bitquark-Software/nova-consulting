<!DOCTYPE html>
<html lang="es-MX">
@php
    $seo_overrides = [
        'title' => 'Diseño de paginas web en Tuxtla y Chiapas | Nova Consulting',
        'description' => 'Servicio de diseño de paginas web en Tuxtla Gutierrez, Chiapas. Creamos sitios web corporativos, catalogos y landing pages enfocadas en conversion.',
        'keywords' => 'diseño de paginas web en tuxtla, diseño web chiapas, crear pagina web en tuxtla gutierrez, landing page chiapas, desarrollo web para negocios locales',
        'og' => [
            'title' => 'Diseño de paginas web en Tuxtla, Chiapas',
            'description' => 'Paginas web profesionales para empresas de Tuxtla y Chiapas con enfoque comercial y SEO.',
            'type' => 'website',
            'url' => url('/diseno-paginas-web-tuxtla-chiapas'),
            'image' => asset('images/og-default.png'),
        ],
    ];
@endphp
@include('layouts.global_header')

<body class="min-h-screen bg-[#F2F2F2] text-[#2C2C2C]">
    @include('layouts.landing_navbar')

    <main class="pt-36 pb-16 px-4">
        <section class="max-w-5xl mx-auto text-center">
            <h1 class="text-4xl md:text-6xl font-bold leading-tight">
                Diseño de paginas web en Tuxtla Gutierrez, Chiapas
            </h1>
            <p class="mt-6 text-lg text-gray-700 max-w-3xl mx-auto">
                Creamos paginas web para empresas de Tuxtla y Chiapas que quieren vender mas,
                mejorar su presencia digital y aparecer en Google con una imagen profesional.
            </p>
            <div class="mt-8 flex flex-col sm:flex-row gap-3 justify-center">
                <a href="https://wa.me/message/H7C4TPUUXUYIF1" target="_blank" class="px-6 py-3 rounded-md bg-[#2C2C2C] text-white font-medium">
                    Cotizar por WhatsApp
                </a>
                <a href="tel:+529611465703" class="px-6 py-3 rounded-md border border-[#2C2C2C] text-[#2C2C2C] font-medium">
                    Llamar al +52 961 146 5703
                </a>
                <a href="mailto:sales@novaconsulting.com.mx" class="px-6 py-3 rounded-md border border-[#2C2C2C] text-[#2C2C2C] font-medium">
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
    </main>

    @include('layouts.footer')
</body>
</html>
