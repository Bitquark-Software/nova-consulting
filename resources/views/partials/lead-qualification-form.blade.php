@php
    $leadSource = $leadSource ?? 'website';
    $leadFormSectionId = $leadFormSectionId ?? 'diagnostico';
@endphp

<section id="{{ $leadFormSectionId }}" class="max-w-5xl mx-auto mt-16 bg-white rounded-2xl p-8 shadow-sm border border-gray-100">
    <div class="text-center">
        <h2 class="text-2xl md:text-3xl font-bold text-black">Recibe una propuesta en 24 horas</h2>
        <p class="mt-3 text-gray-600">
            Completa este formulario rapido y te contactamos por WhatsApp o llamada con una propuesta inicial.
        </p>
    </div>

    <form class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-4" data-lead-form="true" data-lead-source="{{ $leadSource }}">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1" for="lead-name">Nombre</label>
            <input id="lead-name" name="name" required type="text" class="w-full rounded-md border border-gray-300 px-3 py-2" placeholder="Tu nombre">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1" for="lead-business">Empresa</label>
            <input id="lead-business" name="business" required type="text" class="w-full rounded-md border border-gray-300 px-3 py-2" placeholder="Nombre de tu empresa">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1" for="lead-phone">Telefono</label>
            <input id="lead-phone" name="phone" required type="tel" class="w-full rounded-md border border-gray-300 px-3 py-2" placeholder="+52...">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1" for="lead-service">Servicio que te interesa</label>
            <select id="lead-service" name="service" required class="w-full rounded-md border border-gray-300 px-3 py-2 bg-white">
                <option value="">Selecciona una opcion</option>
                <option>Diseno de paginas web</option>
                <option>Software a medida</option>
                <option>Ecommerce</option>
                <option>Automatizacion e integraciones</option>
                <option>Consultoria tecnica</option>
            </select>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1" for="lead-budget">Presupuesto estimado</label>
            <select id="lead-budget" name="budget" required class="w-full rounded-md border border-gray-300 px-3 py-2 bg-white">
                <option value="">Selecciona una opcion</option>
                <option>Menos de $15,000 MXN</option>
                <option>$15,000 - $30,000 MXN</option>
                <option>$30,000 - $80,000 MXN</option>
                <option>Mas de $80,000 MXN</option>
            </select>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1" for="lead-urgency">Urgencia de inicio</label>
            <select id="lead-urgency" name="urgency" required class="w-full rounded-md border border-gray-300 px-3 py-2 bg-white">
                <option value="">Selecciona una opcion</option>
                <option>Esta semana</option>
                <option>Este mes</option>
                <option>En 1-3 meses</option>
                <option>Solo estoy cotizando</option>
            </select>
        </div>
        <div class="md:col-span-2">
            <label class="block text-sm font-medium text-gray-700 mb-1" for="lead-message">Objetivo del proyecto</label>
            <textarea id="lead-message" name="message" rows="4" class="w-full rounded-md border border-gray-300 px-3 py-2" placeholder="Que quieres lograr con este proyecto?"></textarea>
        </div>
        <div class="md:col-span-2 flex flex-col sm:flex-row gap-3">
            <button type="submit" class="px-6 py-3 rounded-md bg-black text-white font-semibold" data-track="lead_form_submit">
                Enviar y hablar por WhatsApp
            </button>
            <a href="tel:+529611465703" class="px-6 py-3 rounded-md border border-black text-black text-center font-medium" data-track="lead_call_click">
                O llamar al +52 961 146 5703
            </a>
        </div>
    </form>
</section>
