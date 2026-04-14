@php
    $leadSource = $leadSource ?? 'website';
    $leadFormSectionId = $leadFormSectionId ?? 'diagnostico';
@endphp

<section id="{{ $leadFormSectionId }}" class="max-w-5xl mx-auto mt-16 bg-white rounded-2xl p-8 shadow-sm border border-gray-100">
    <div class="text-center">
        <h2 class="text-2xl md:text-3xl font-bold text-black">{{ __('messages.lead_form.title') }}</h2>
        <p class="mt-3 text-gray-600">
            {{ __('messages.lead_form.subtitle') }}
        </p>
    </div>

    <form class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-4" data-lead-form="true" data-lead-source="{{ $leadSource }}">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1" for="lead-name">{{ __('messages.lead_form.label_name') }}</label>
            <input id="lead-name" name="name" required type="text" class="w-full rounded-md border border-gray-300 px-3 py-2" placeholder="{{ __('messages.lead_form.placeholder_name') }}">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1" for="lead-business">{{ __('messages.lead_form.label_business') }}</label>
            <input id="lead-business" name="business" required type="text" class="w-full rounded-md border border-gray-300 px-3 py-2" placeholder="{{ __('messages.lead_form.placeholder_business') }}">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1" for="lead-phone">{{ __('messages.lead_form.label_phone') }}</label>
            <input id="lead-phone" name="phone" required type="tel" class="w-full rounded-md border border-gray-300 px-3 py-2" placeholder="+52...">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1" for="lead-service">{{ __('messages.lead_form.label_service') }}</label>
            <select id="lead-service" name="service" required class="w-full rounded-md border border-gray-300 px-3 py-2 bg-white">
                <option value="">{{ __('messages.lead_form.placeholder_select') }}</option>
                <option>{{ __('messages.lead_form.service_web') }}</option>
                <option>{{ __('messages.lead_form.service_software') }}</option>
                <option>{{ __('messages.lead_form.service_ecommerce') }}</option>
                <option>{{ __('messages.lead_form.service_automation') }}</option>
                <option>{{ __('messages.lead_form.service_consulting') }}</option>
            </select>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1" for="lead-budget">{{ __('messages.lead_form.label_budget') }}</label>
            <select id="lead-budget" name="budget" required class="w-full rounded-md border border-gray-300 px-3 py-2 bg-white">
                <option value="">{{ __('messages.lead_form.placeholder_select') }}</option>
                <option>{{ __('messages.lead_form.budget_1') }}</option>
                <option>{{ __('messages.lead_form.budget_2') }}</option>
                <option>{{ __('messages.lead_form.budget_3') }}</option>
                <option>{{ __('messages.lead_form.budget_4') }}</option>
            </select>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1" for="lead-urgency">{{ __('messages.lead_form.label_urgency') }}</label>
            <select id="lead-urgency" name="urgency" required class="w-full rounded-md border border-gray-300 px-3 py-2 bg-white">
                <option value="">{{ __('messages.lead_form.placeholder_select') }}</option>
                <option>{{ __('messages.lead_form.urgency_1') }}</option>
                <option>{{ __('messages.lead_form.urgency_2') }}</option>
                <option>{{ __('messages.lead_form.urgency_3') }}</option>
                <option>{{ __('messages.lead_form.urgency_4') }}</option>
            </select>
        </div>
        <div class="md:col-span-2">
            <label class="block text-sm font-medium text-gray-700 mb-1" for="lead-message">{{ __('messages.lead_form.label_message') }}</label>
            <textarea id="lead-message" name="message" rows="4" class="w-full rounded-md border border-gray-300 px-3 py-2" placeholder="{{ __('messages.lead_form.placeholder_message') }}"></textarea>
        </div>
        <div class="md:col-span-2 flex flex-col sm:flex-row gap-3">
            <button type="submit" class="px-6 py-3 rounded-md bg-black text-white font-semibold" data-track="lead_form_submit">
                {{ __('messages.lead_form.submit_button') }}
            </button>
            <a href="tel:+529611465703" class="px-6 py-3 rounded-md border border-black text-black text-center font-medium" data-track="lead_call_click">
                {{ __('messages.lead_form.call_button') }}
            </a>
        </div>
    </form>
</section>
