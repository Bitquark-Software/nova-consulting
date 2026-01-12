<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@php
// Provide explicit SEO overrides for this page
$seo_overrides = [
'title' => __('quotation.title'),
'description' => __('seo.hiring_services.description'),
'keywords' => __('seo.hiring_services.keywords'),
];
@endphp
@include('layouts.global_header')

<body class="min-h-screen bg-[#F2F2F2] text-[#2C2C2C]">
    
    {{-- 1. INSERTED CSS FOR LOADER & MODAL --}}
    <style>
        [x-cloak] { display: none !important; }

        /* Loader Overlay */
        #loading-overlay {
            position: fixed; top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(255, 255, 255, 0.8);
            z-index: 9999; display: none;
            justify-content: center; align-items: center; flex-direction: column;
        }
        .spinner {
            border: 4px solid #f3f3f3; border-top: 4px solid #000; /* Black to match your theme */
            border-radius: 50%; width: 40px; height: 40px;
            animation: spin 1s linear infinite;
        }
        @keyframes spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }

        /* Modal */
        #result-modal {
            position: fixed; top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 10000; display: none;
            justify-content: center; align-items: center;
        }
        .modal-content {
            background: white; padding: 30px; border-radius: 8px;
            text-align: center; width: 90%; max-width: 350px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
        .modal-icon { font-size: 50px; margin-bottom: 15px; }
        .success-icon { color: #28a745; }
        .error-icon { color: #dc3545; }
        .close-btn {
            margin-top: 20px; padding: 8px 20px; background: #000;
            color: white; border: none; border-radius: 4px; cursor: pointer;
        }
        .close-btn:hover { background: #333; }
    </style>

    <div class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 font-sans"
        x-data="quotationWizard()">

        <div class="mb-8">
            <a href="{{ url()->previous() }}"
                class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-black transition-colors duration-200">
                <svg class="w-5 h-5 mr-2 text-gray-400 group-hover:text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                {{ __('quotation.btn_return_home') }}
            </a>
        </div>

        <div class="max-w-4xl mx-auto">
            <div class="mb-10">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 text-center mb-8">
                    {{ __('quotation.title') }}
                </h2>

                <div class="relative flex items-center justify-between w-full px-2">
                    <div class="absolute left-0 top-1/2 -translate-y-1/2 w-full h-0.5 bg-gray-200 -z-10"></div>
                    <template x-for="i in 4" :key="i">
                        <div class="flex flex-col items-center bg-gray-50 px-2 group cursor-default">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center text-sm font-semibold transition-all duration-300 border-2"
                                :class="step >= i 
                                    ? 'bg-black border-black text-white shadow-lg scale-105' 
                                    : 'bg-white border-gray-300 text-gray-400'">
                                <span x-text="i"></span>
                            </div>
                            <div class="text-xs mt-2 font-medium tracking-wide uppercase transition-colors duration-300"
                                :class="step >= i ? 'text-black' : 'text-gray-400'">
                                <span x-show="i === 1">{{ __('quotation.step_info') }}</span>
                                <span x-show="i === 2">{{ __('quotation.step_service') }}</span>
                                <span x-show="i === 3">{{ __('quotation.step_details') }}</span>
                                <span x-show="i === 4">{{ __('quotation.step_summary') }}</span>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

            <div class="bg-white shadow-xl shadow-gray-200/50 rounded-2xl p-6 sm:p-10 border border-gray-100">
                <form @submit.prevent="submitForm">

                    <div x-show="step === 1"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 translate-x-4"
                        x-transition:enter-end="opacity-100 translate-x-0">

                        <div class="mb-6 border-b border-gray-100 pb-2">
                            <h3 class="text-xl font-bold text-gray-900">{{ __('quotation.personal_info') }}</h3>
                            <p class="text-sm text-gray-500 mt-1">Tell us a bit about yourself.</p>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-1">
                                <label class="block text-sm font-medium text-gray-700">{{ __('quotation.label_name') }} <span class="text-red-500">*</span></label>
                                <input type="text" x-model="form.name" class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-black focus:ring-black sm:text-sm" placeholder="Jane Doe">
                            </div>
                            <div class="space-y-1">
                                <label class="block text-sm font-medium text-gray-700">{{ __('quotation.label_company') }}</label>
                                <input type="text" x-model="form.company" class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-black focus:ring-black sm:text-sm" placeholder="Acme Corp">
                            </div>
                            <div class="space-y-1">
                                <label class="block text-sm font-medium text-gray-700">{{ __('quotation.label_email') }} <span class="text-red-500">*</span></label>
                                <input type="email" x-model="form.email" class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-black focus:ring-black sm:text-sm" placeholder="jane@acme.com">
                            </div>
                            <div class="space-y-1">
                                <label class="block text-sm font-medium text-gray-700">{{ __('quotation.label_phone') }}</label>
                                <input type="tel" x-model="form.phone" class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-black focus:ring-black sm:text-sm" placeholder="+1 (555) 123-4567">
                            </div>
                            <div class="md:col-span-2 space-y-1">
                                <label class="block text-sm font-medium text-gray-700">{{ __('quotation.label_referral') }}</label>
                                <select x-model="form.referral" class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-black focus:ring-black sm:text-sm bg-white">
                                    <option value="" disabled selected>{{ __('quotation.select_option') }}</option>
                                    <option value="google">{{ __('quotation.ref_google') }}</option>
                                    <option value="linkedin">{{ __('quotation.ref_linkedin') }}</option>
                                    <option value="friend">{{ __('quotation.ref_friend') }}</option>
                                    <option value="ads">{{ __('quotation.ref_ads') }}</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div x-show="step === 2" x-cloak
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 translate-x-4"
                        x-transition:enter-end="opacity-100 translate-x-0">

                        <div class="mb-6 border-b border-gray-100 pb-2">
                            <h3 class="text-xl font-bold text-gray-900">{{ __('quotation.select_service_title') }}</h3>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            @foreach(['web_dev' => '💻', 'staff_aug' => '🤝', 'recruitment' => '🕵️'] as $key => $icon)
                            <div @click="form.service = '{{ $key }}'"
                                class="cursor-pointer relative rounded-xl border-2 p-6 flex flex-col items-center text-center transition-all duration-200 group"
                                :class="form.service === '{{ $key }}' 
                                        ? 'border-black bg-gray-50 ring-1 ring-black shadow-md' 
                                        : 'border-gray-200 hover:border-gray-400 hover:bg-gray-50'">
                                <div class="text-4xl mb-4 group-hover:scale-110 transition-transform duration-200">{{ $icon }}</div>
                                <h4 class="font-bold text-gray-900 mb-2">{{ __('quotation.service_'.$key) }}</h4>
                                <p class="text-xs text-gray-500 leading-relaxed">{{ __('quotation.service_'.$key.'_desc') }}</p>
                                <div x-show="form.service === '{{ $key }}'" class="absolute top-3 right-3 text-black">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div x-show="step === 3" x-cloak
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 translate-x-4"
                        x-transition:enter-end="opacity-100 translate-x-0">
                        
                        <div x-show="form.service === 'web_dev'">
                            <div class="mb-6 border-b border-gray-100 pb-2">
                                <h3 class="text-xl font-bold text-gray-900">{{ __('quotation.details_web_title') }}</h3>
                            </div>
                            <label class="block text-sm font-semibold text-gray-900 mb-4">{{ __('quotation.web_features_label') }}</label>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6">
                                @foreach(['landing_page', 'ecommerce', 'cms', 'api_integration', 'payment_gateway', 'analytics'] as $feature)
                                <label class="flex items-center space-x-3 p-3 border border-gray-200 rounded-lg hover:bg-gray-50 cursor-pointer transition-colors">
                                    <input type="checkbox" value="{{ $feature }}" x-model="form.web.features" class="h-5 w-5 text-black border-gray-300 rounded focus:ring-black transition duration-150 ease-in-out">
                                    <span class="text-gray-700 text-sm font-medium">{{ __('quotation.feature_'.$feature) }}</span>
                                </label>
                                @endforeach
                            </div>
                            <div class="space-y-1">
                                <label class="block text-sm font-medium text-gray-700">{{ __('quotation.web_extra_req') }}</label>
                                <textarea x-model="form.web.requirements" rows="4" class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-black focus:ring-black sm:text-sm" placeholder="Tell us more about your specific needs..."></textarea>
                            </div>
                        </div>

                        <div x-show="form.service === 'staff_aug'">
                            <div class="mb-6 border-b border-gray-100 pb-2">
                                <h3 class="text-xl font-bold text-gray-900">{{ __('quotation.details_staff_title') }}</h3>
                            </div>
                            <label class="block text-sm font-semibold text-gray-900 mb-4">{{ __('quotation.staff_roles_label') }}</label>
                            <div class="grid grid-cols-1 gap-3">
                                @foreach(['jr_dev', 'sr_dev', 'scrum_master', 'qa_engineer', 'devops'] as $role)
                                <label class="relative flex items-center justify-between p-4 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50 transition-colors"
                                    :class="form.staff.roles.includes('{{ $role }}') ? 'border-black bg-gray-50 ring-1 ring-black' : ''">
                                    <div class="flex items-center">
                                        <input type="checkbox" value="{{ $role }}" x-model="form.staff.roles" class="h-5 w-5 text-black border-gray-300 rounded focus:ring-black">
                                        <span class="ml-3 text-gray-900 font-medium">{{ __('quotation.role_'.$role) }}</span>
                                    </div>
                                </label>
                                @endforeach
                            </div>
                        </div>

                        <div x-show="form.service === 'recruitment'">
                            <div class="mb-6 border-b border-gray-100 pb-2">
                                <h3 class="text-xl font-bold text-gray-900">{{ __('quotation.details_recruit_title') }}</h3>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="md:col-span-2 space-y-1">
                                    <label class="block text-sm font-medium text-gray-700">{{ __('quotation.recruit_stack') }}</label>
                                    <input type="text" x-model="form.recruit.stack" placeholder="e.g. PHP, Laravel, React" class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-black focus:ring-black sm:text-sm">
                                </div>
                                <div class="space-y-1">
                                    <label class="block text-sm font-medium text-gray-700">{{ __('quotation.recruit_location') }}</label>
                                    <select required x-model="form.recruit.location" class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-black focus:ring-black sm:text-sm bg-white">
                                        <option value="mx">Mexico (MX)</option>
                                        <option value="us">United States (US)</option>
                                        <option value="remote">Fully Remote</option>
                                    </select>
                                </div>
                                <div class="space-y-1">
                                    <label class="block text-sm font-medium text-gray-700">{{ __('quotation.recruit_urgency') }}</label>
                                    <select x-model="form.recruit.urgency" class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-black focus:ring-black sm:text-sm bg-white">
                                        <option value="high">{{ __('quotation.urgency_high') }}</option>
                                        <option value="medium">{{ __('quotation.urgency_medium') }}</option>
                                        <option value="low">{{ __('quotation.urgency_low') }}</option>
                                    </select>
                                </div>
                                <div class="space-y-1">
                                    <label class="block text-sm font-medium text-gray-700">{{ __('quotation.recruit_budget') }}</label>
                                    <div class="relative rounded-md shadow-sm">
                                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                            <span class="text-gray-500 sm:text-sm">$</span>
                                        </div>
                                        <input type="number" x-model="form.recruit.budget" class="block w-full rounded-lg border-gray-300 pl-7 focus:border-black focus:ring-black sm:text-sm" placeholder="0.00" min="0">
                                    </div>
                                </div>
                                <div class="space-y-1">
                                    <label class="block text-sm font-medium text-gray-700">{{ __('quotation.recruit_hardware') }}</label>
                                    <select x-model="form.recruit.hardware" class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-black focus:ring-black sm:text-sm bg-white">
                                        <option value="company">{{ __('quotation.hw_company_provides') }}</option>
                                        <option value="candidate">{{ __('quotation.hw_candidate_owns') }}</option>
                                    </select>
                                </div>
                                <div class="md:col-span-2 border-t border-gray-100 pt-4">
                                    <span class="block text-sm font-medium text-gray-700 mb-3">{{ __('quotation.recruit_langs') }}</span>
                                    <div class="flex space-x-6">
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" value="spanish" x-model="form.recruit.languages" class="rounded border-gray-300 text-black shadow-sm focus:ring-black">
                                            <span class="ml-2 text-sm text-gray-700">Spanish</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" value="english" x-model="form.recruit.languages" class="rounded border-gray-300 text-black shadow-sm focus:ring-black">
                                            <span class="ml-2 text-sm text-gray-700">English</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div x-show="step === 4" x-cloak
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 translate-x-4"
                        x-transition:enter-end="opacity-100 translate-x-0">

                        <div class="mb-6 border-b border-gray-100 pb-2">
                            <h3 class="text-xl font-bold text-gray-900">{{ __('quotation.summary_title') }}</h3>
                        </div>

                        <div class="bg-gray-50 rounded-xl p-6 mb-8 border border-gray-200 text-sm">
                            <dl class="grid grid-cols-1 gap-x-4 gap-y-4 sm:grid-cols-2">
                                <div class="sm:col-span-1">
                                    <dt class="font-medium text-gray-500">{{ __('quotation.label_name') }}</dt>
                                    <dd class="mt-1 text-gray-900 font-semibold" x-text="form.name"></dd>
                                </div>
                                <div class="sm:col-span-1">
                                    <dt class="font-medium text-gray-500">{{ __('quotation.label_company') }}</dt>
                                    <dd class="mt-1 text-gray-900" x-text="form.company || '-'"> </dd>
                                </div>
                                <div class="sm:col-span-1">
                                    <dt class="font-medium text-gray-500">{{ __('quotation.label_email') }}</dt>
                                    <dd class="mt-1 text-gray-900" x-text="form.email"></dd>
                                </div>
                                <div class="sm:col-span-1">
                                    <dt class="font-medium text-gray-500">{{ __('quotation.label_service') }}</dt>
                                    <dd class="mt-1 text-gray-900 font-semibold">
                                        <span x-show="form.service === 'web_dev'">{{ __('quotation.service_web_dev') }}</span>
                                        <span x-show="form.service === 'staff_aug'">{{ __('quotation.service_staff_aug') }}</span>
                                        <span x-show="form.service === 'recruitment'">{{ __('quotation.service_recruitment') }}</span>
                                    </dd>
                                </div>
                            </dl>
                        </div>

                        <div class="space-y-5">
                            <div class="flex items-start">
                                <div class="flex h-5 items-center">
                                    <input type="checkbox" x-model="form.create_nova" class="h-4 w-4 rounded border-gray-300 text-black focus:ring-black">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label class="font-medium text-gray-700">{{ __('quotation.consent_nova') }}</label>
                                </div>
                            </div>
                            <div class="flex items-start p-4 bg-gray-50 rounded-lg border border-gray-200">
                                <div class="flex h-5 items-center">
                                    <input type="checkbox" x-model="form.agree_contact" required class="h-4 w-4 rounded border-gray-300 text-black focus:ring-black">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label class="font-medium text-gray-900" x-text="getAgreementText()"></label>
                                    <p class="text-gray-500 text-xs mt-1">This is required to proceed.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10 pt-6 border-t border-gray-100 flex justify-between items-center">
                        <button type="button"
                            x-show="step > 1"
                            @click="step--"
                            class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black transition-colors">
                            <svg class="mr-2 -ml-1 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                            </svg>
                            {{ __('quotation.btn_back') }}
                        </button>

                        <div class="ml-auto">
                            <button type="button"
                                x-show="step < 4"
                                @click="nextStep()"
                                class="inline-flex items-center px-6 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-black hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black transition-all">
                                {{ __('quotation.btn_next') }}
                                <svg class="ml-2 -mr-1 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </button>

                            <button type="submit"
                                x-show="step === 4"
                                :disabled="!form.agree_contact"
                                class="inline-flex items-center px-6 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-black hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black disabled:opacity-50 disabled:cursor-not-allowed transition-all">
                                {{ __('quotation.btn_submit') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- 2. INSERTED HTML FOR LOADER & MODAL --}}
    <div id="loading-overlay">
        <div class="spinner"></div>
        <p style="margin-top:10px; color:#555;">Submitting...</p>
    </div>

    <div id="result-modal">
        <div class="modal-content">
            <div id="modal-icon" class="modal-icon"></div>
            <h3 id="modal-title"></h3>
            <p id="modal-message"></p>
            <button class="close-btn" onclick="closeModal()">Close</button>
        </div>
    </div>

    <script>
        // Global Modal Logic
        const loader = document.getElementById('loading-overlay');
        const modal = document.getElementById('result-modal');
        const modalIcon = document.getElementById('modal-icon');
        const modalTitle = document.getElementById('modal-title');
        const modalMessage = document.getElementById('modal-message');
        
        // Track success to redirect on close
        let submissionSuccess = false;

        function showModal(type, title, message) {
            modalTitle.innerText = title;
            modalMessage.innerText = message;
            
            if (type === 'success') {
                submissionSuccess = true;
                modalIcon.innerHTML = '&#10004;'; 
                modalIcon.className = 'modal-icon success-icon';
            } else {
                submissionSuccess = false;
                modalIcon.innerHTML = '&#10006;'; 
                modalIcon.className = 'modal-icon error-icon';
            }
            modal.style.display = 'flex';
        }

        function closeModal() {
            modal.style.display = 'none';
            // Only redirect if it was a successful submission
            if(submissionSuccess) {
                window.location.href = "/";
            }
        }

        document.addEventListener('alpine:init', () => {
            Alpine.data('quotationWizard', () => ({
                step: 1,
                form: {
                    name: '',
                    company: '',
                    email: '',
                    phone: '',
                    referral: '',
                    service: '',
                    web: { features: [], requirements: '' },
                    staff: { roles: [] },
                    recruit: { stack: '', location: 'mx', age: '', budget: '', timezone: '', urgency: 'medium', hardware: 'company', languages: [] },
                    create_nova: false,
                    agree_contact: false
                },
                nextStep() {
                    if (this.step === 1) {
                        if (!this.form.name || !this.form.email) return alert('{{ __("quotation.error_fill_required") }}');
                    }
                    if (this.step === 2) {
                        if (!this.form.service) return alert('{{ __("quotation.error_select_service") }}');
                    }
                    this.step++;
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                },
                getAgreementText() {
                    const map = {
                        'web_dev': "{{ __('quotation.agree_web') }}",
                        'staff_aug': "{{ __('quotation.agree_staff') }}",
                        'recruitment': "{{ __('quotation.agree_recruit') }}"
                    };
                    return map[this.form.service] || "{{ __('quotation.agree_web') }}";
                },
                submitForm() {
                    // 3. UPDATED SUBMIT LOGIC
                    loader.style.display = 'flex'; // Show Loader

                    fetch("{{ route('quotation.store') }}", {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: JSON.stringify(this.form)
                    })
                    .then(response => {
                        if (!response.ok) throw response;
                        return response.json();
                    })
                    .then(data => {
                        loader.style.display = 'none'; // Hide Loader
                        // Show Success Modal
                        showModal('success', '{{ __("quotation.btn_submit") }} Success!', 'Your quotation request has been sent successfully.');
                    })
                    .catch(async error => {
                        loader.style.display = 'none'; // Hide Loader
                        // Handle Validation Errors
                        let message = "An error occurred";
                        try {
                            let errorData = await error.json();
                            message = errorData.message || message;
                        } catch(e) {}
                        
                        // Show Error Modal
                        showModal('error', 'Submission Failed', message);
                    });
                }
            }));
        });
    </script>
    @include('layouts.footer')
</body>
</html>