<!DOCTYPE html>
<html lang="es-MX">
@php
    $seo_overrides = [
        'title' => 'Empresas de software en Tuxtla y Chiapas | Nova Consulting',
        'description' => 'Nova Consulting es una empresa de software en Tuxtla Gutierrez, Chiapas. Desarrollamos sistemas a medida, apps y automatizaciones para negocios locales.',
        'keywords' => 'empresas de software en tuxtla, empresas de software en chiapas, desarrollo de software en tuxtla gutierrez, software a medida chiapas, sistemas para empresas tuxtla',
        'og' => [
            'title' => 'Empresa de software en Tuxtla, Chiapas',
            'description' => 'Desarrollo de software y soluciones digitales para empresas de Tuxtla y todo Chiapas.',
            'type' => 'website',
            'url' => url('/empresa-software-tuxtla-chiapas'),
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
                Empresas de software en Tuxtla Gutierrez, Chiapas
            </h1>
            <p class="mt-6 text-lg text-gray-700 max-w-3xl mx-auto">
                En Nova Consulting ayudamos a empresas de Tuxtla y Chiapas a digitalizar procesos,
                aumentar ventas y operar mejor con software a medida, integraciones y automatizacion.
            </p>
            <div class="mt-8 flex flex-col sm:flex-row gap-3 justify-center">
                <a href="https://wa.me/message/H7C4TPUUXUYIF1" target="_blank" class="px-6 py-3 rounded-md bg-[#2C2C2C] text-white font-medium">
                    Escribir por WhatsApp
                </a>
                <a href="tel:+529611465703" class="px-6 py-3 rounded-md border border-[#2C2C2C] text-[#2C2C2C] font-medium">
                    Llamar al +52 961 146 5703
                </a>
                <a href="mailto:sales@novaconsulting.com.mx" class="px-6 py-3 rounded-md border border-[#2C2C2C] text-[#2C2C2C] font-medium">
                    Enviar correo
                </a>
            </div>
        </section>

        <section class="max-w-6xl mx-auto mt-16 grid grid-cols-1 md:grid-cols-3 gap-6">
            <article class="bg-white rounded-xl p-6 shadow-sm">
                <h2 class="text-xl font-semibold">Software a medida</h2>
                <p class="mt-3 text-gray-700">
                    Construimos plataformas internas, ERPs ligeros, CRMs y herramientas de operacion
                    adaptadas a tu empresa en Chiapas.
                </p>
            </article>
            <article class="bg-white rounded-xl p-6 shadow-sm">
                <h2 class="text-xl font-semibold">Integraciones y automatizacion</h2>
                <p class="mt-3 text-gray-700">
                    Conectamos tus sistemas con APIs, pagos, WhatsApp, inventario y reportes para reducir trabajo manual.
                </p>
            </article>
            <article class="bg-white rounded-xl p-6 shadow-sm">
                <h2 class="text-xl font-semibold">Acompanamiento tecnico</h2>
                <p class="mt-3 text-gray-700">
                    Te asesoramos en arquitectura, costos de nube y roadmap digital para crecer con menos riesgo.
                </p>
            </article>
        </section>

        <section class="max-w-5xl mx-auto mt-16 bg-white rounded-2xl p-8 shadow-sm">
            <h2 class="text-2xl font-bold">Atencion para empresas en Tuxtla y todo Chiapas</h2>
            <p class="mt-4 text-gray-700 leading-relaxed">
                Trabajamos con negocios locales y regionales que buscan una empresa de software confiable.
                Si estas comparando opciones en Tuxtla Gutierrez, podemos ayudarte a definir alcance,
                tiempos y presupuesto sin costo inicial.
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
