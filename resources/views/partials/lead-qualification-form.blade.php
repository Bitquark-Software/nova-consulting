@php
    $leadSource = $leadSource ?? 'website';
    $leadFormSectionId = $leadFormSectionId ?? 'diagnostico';
@endphp

<section id="{{ $leadFormSectionId }}" class="max-w-4xl mx-auto mt-16 bg-white rounded-3xl p-8 md:p-12 shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-gray-100 relative overflow-hidden">
    
    <!-- Progress Bar -->
    <div class="absolute top-0 left-0 w-full h-1.5 bg-gray-100">
        <div id="form-progress" class="h-full bg-black transition-all duration-500 ease-out w-1/3"></div>
    </div>

    <div class="text-center mb-10">
        <h2 class="text-3xl md:text-4xl font-bold text-black tracking-tight" id="form-step-title">{{ __('messages.lead_form.title') }}</h2>
        <p class="mt-3 text-gray-500 text-lg" id="form-step-subtitle">
            {{ __('messages.lead_form.subtitle') }}
        </p>
    </div>

    <form id="interactive-lead-form" class="relative min-h-[400px]" data-lead-form="true" data-lead-source="{{ $leadSource }}">
        
        <!-- Hidden Inputs for Backend Compatibility -->
        <input type="hidden" name="service" id="hidden-service" required>
        <input type="hidden" name="budget" id="hidden-budget" required>
        <input type="hidden" name="urgency" id="hidden-urgency" required>

        <!-- STEP 1: SERVICE SELECTION -->
        <div id="step-1" class="step-container absolute w-full transition-all duration-500 ease-in-out opacity-100 translate-x-0">
            <label class="block text-sm font-semibold text-gray-400 uppercase tracking-widest mb-6 text-center">¿En qué podemos ayudarte?</label>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @php
                    $services = [
                        __('messages.lead_form.service_web'),
                        __('messages.lead_form.service_software'),
                        __('messages.lead_form.service_ecommerce'),
                        __('messages.lead_form.service_automation'),
                        __('messages.lead_form.service_consulting')
                    ];
                @endphp
                @foreach($services as $svc)
                    <div class="service-card cursor-pointer border-2 border-gray-100 rounded-2xl p-6 text-center hover:border-black hover:bg-gray-50 transition-all group" data-value="{{ $svc }}">
                        <div class="w-12 h-12 mx-auto bg-gray-100 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-900">{{ $svc }}</h3>
                    </div>
                @endforeach
            </div>
            <div class="mt-8 flex justify-center">
                <button type="button" class="btn-next opacity-50 cursor-not-allowed px-8 py-4 bg-black text-white rounded-xl font-bold tracking-wide pointer-events-none transition-opacity" disabled>
                    Continuar →
                </button>
            </div>
        </div>

        <!-- STEP 2: BUDGET & URGENCY -->
        <div id="step-2" class="step-container absolute w-full transition-all duration-500 ease-in-out opacity-0 translate-x-[100%] pointer-events-none">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <!-- Budget -->
                <div>
                    <label class="block text-sm font-semibold text-gray-400 uppercase tracking-widest mb-6 text-center md:text-left">{{ __('messages.lead_form.label_budget') }}</label>
                    <div class="grid gap-3">
                        @php
                            $budgets = [
                                __('messages.lead_form.budget_1'),
                                __('messages.lead_form.budget_2'),
                                __('messages.lead_form.budget_3'),
                                __('messages.lead_form.budget_4')
                            ];
                        @endphp
                        @foreach($budgets as $b)
                            <div class="budget-card cursor-pointer border-2 border-gray-100 rounded-xl p-4 text-center font-medium text-gray-700 hover:border-black hover:text-black transition-colors" data-value="{{ $b }}">
                                {{ $b }}
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Urgency -->
                <div>
                    <label class="block text-sm font-semibold text-gray-400 uppercase tracking-widest mb-6 text-center md:text-left">{{ __('messages.lead_form.label_urgency') }}</label>
                    <div class="grid gap-3">
                        @php
                            $urgencies = [
                                __('messages.lead_form.urgency_1'),
                                __('messages.lead_form.urgency_2'),
                                __('messages.lead_form.urgency_3'),
                                __('messages.lead_form.urgency_4')
                            ];
                        @endphp
                        @foreach($urgencies as $u)
                            <div class="urgency-card cursor-pointer border-2 border-gray-100 rounded-xl p-4 text-center font-medium text-gray-700 hover:border-black hover:text-black transition-colors" data-value="{{ $u }}">
                                {{ $u }}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="mt-10 flex justify-between items-center border-t border-gray-100 pt-6">
                <button type="button" class="btn-prev text-gray-500 font-medium hover:text-black transition-colors">← Volver</button>
                <button type="button" class="btn-next px-8 py-4 bg-black text-white rounded-xl font-bold tracking-wide opacity-50 cursor-not-allowed pointer-events-none transition-opacity" disabled>
                    Último paso →
                </button>
            </div>
        </div>

        <!-- STEP 3: CONTACT INFO -->
        <div id="step-3" class="step-container absolute w-full transition-all duration-500 ease-in-out opacity-0 translate-x-[100%] pointer-events-none">
            <label class="block text-sm font-semibold text-gray-400 uppercase tracking-widest mb-6 text-center">Déjanos tus datos</label>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2" for="lead-name">{{ __('messages.lead_form.label_name') }}</label>
                    <input id="lead-name" name="name" required type="text" class="w-full rounded-xl border-2 border-gray-100 px-4 py-3 focus:border-black focus:ring-0 transition-colors" placeholder="{{ __('messages.lead_form.placeholder_name') }}">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2" for="lead-business">{{ __('messages.lead_form.label_business') }}</label>
                    <input id="lead-business" name="business" required type="text" class="w-full rounded-xl border-2 border-gray-100 px-4 py-3 focus:border-black focus:ring-0 transition-colors" placeholder="{{ __('messages.lead_form.placeholder_business') }}">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2" for="lead-phone">{{ __('messages.lead_form.label_phone') }}</label>
                    <input id="lead-phone" name="phone" required type="tel" class="w-full rounded-xl border-2 border-gray-100 px-4 py-3 focus:border-black focus:ring-0 transition-colors" placeholder="+52...">
                </div>
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-2" for="lead-message">{{ __('messages.lead_form.label_message') }}</label>
                    <textarea id="lead-message" name="message" rows="3" class="w-full rounded-xl border-2 border-gray-100 px-4 py-3 focus:border-black focus:ring-0 transition-colors" placeholder="{{ __('messages.lead_form.placeholder_message') }}"></textarea>
                </div>
            </div>
            
            <div class="mt-8 flex justify-between items-center border-t border-gray-100 pt-6">
                <button type="button" class="btn-prev text-gray-500 font-medium hover:text-black transition-colors">← Volver</button>
                <div class="flex gap-4">
                    <button type="submit" class="px-8 py-4 rounded-xl bg-black text-white font-bold tracking-wide hover:bg-gray-900 transition-colors shadow-lg" data-track="lead_form_submit">
                        {{ __('messages.lead_form.submit_button') }}
                    </button>
                </div>
            </div>
            <div class="mt-4 text-center">
                <a href="tel:+529611465703" class="text-sm text-gray-500 hover:text-black transition-colors font-medium" data-track="lead_call_click">
                    O llámanos directamente: {{ __('messages.lead_form.call_button') }}
                </a>
            </div>
        </div>

    </form>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const form = document.getElementById('interactive-lead-form');
        if (!form) return;

        const steps = [
            document.getElementById('step-1'),
            document.getElementById('step-2'),
            document.getElementById('step-3')
        ];
        
        const progressBar = document.getElementById('form-progress');
        const titles = [
            "{{ __('messages.lead_form.title') }}",
            "Casi listo",
            "Tus Datos"
        ];
        const titleEl = document.getElementById('form-step-title');
        let currentStep = 0;

        const hiddenService = document.getElementById('hidden-service');
        const hiddenBudget = document.getElementById('hidden-budget');
        const hiddenUrgency = document.getElementById('hidden-urgency');

        function updateUI() {
            // Update Progress Bar
            progressBar.style.width = `${((currentStep + 1) / steps.length) * 100}%`;
            titleEl.textContent = titles[currentStep];

            // Transition Steps
            steps.forEach((step, index) => {
                if (index === currentStep) {
                    step.classList.remove('opacity-0', 'translate-x-[100%]', '-translate-x-[100%]', 'pointer-events-none');
                    step.classList.add('opacity-100', 'translate-x-0');
                    // Reset height of parent
                    setTimeout(() => { form.style.minHeight = step.offsetHeight + 50 + 'px'; }, 50);
                } else if (index < currentStep) {
                    step.classList.remove('opacity-100', 'translate-x-0', 'translate-x-[100%]');
                    step.classList.add('opacity-0', '-translate-x-[100%]', 'pointer-events-none');
                } else {
                    step.classList.remove('opacity-100', 'translate-x-0', '-translate-x-[100%]');
                    step.classList.add('opacity-0', 'translate-x-[100%]', 'pointer-events-none');
                }
            });
        }

        // Selection Logic for Cards
        function setupSelection(cardsClass, hiddenInput, nextBtnOfStep) {
            const cards = document.querySelectorAll(`.${cardsClass}`);
            cards.forEach(card => {
                card.addEventListener('click', () => {
                    // Remove active state from all
                    cards.forEach(c => {
                        c.classList.remove('border-black', 'bg-gray-50', 'ring-2', 'ring-black');
                        c.classList.add('border-gray-100');
                    });
                    // Add active state to clicked
                    card.classList.remove('border-gray-100');
                    card.classList.add('border-black', 'bg-gray-50', 'ring-2', 'ring-black');
                    
                    // Set value
                    hiddenInput.value = card.dataset.value;
                    
                    // Enable next button if conditions met
                    if (cardsClass === 'service-card' && hiddenService.value) {
                        enableNextBtn(nextBtnOfStep);
                    } else if (cardsClass !== 'service-card' && hiddenBudget.value && hiddenUrgency.value) {
                        enableNextBtn(nextBtnOfStep);
                    }
                });
            });
        }

        function enableNextBtn(btn) {
            if(!btn) return;
            btn.disabled = false;
            btn.classList.remove('opacity-50', 'cursor-not-allowed', 'pointer-events-none');
            btn.classList.add('hover:bg-gray-800');
        }

        // Setup Steps
        setupSelection('service-card', hiddenService, steps[0].querySelector('.btn-next'));
        setupSelection('budget-card', hiddenBudget, steps[1].querySelector('.btn-next'));
        setupSelection('urgency-card', hiddenUrgency, steps[1].querySelector('.btn-next'));

        // Navigation
        document.querySelectorAll('.btn-next').forEach(btn => {
            btn.addEventListener('click', () => {
                if (currentStep < steps.length - 1) {
                    currentStep++;
                    updateUI();
                }
            });
        });

        document.querySelectorAll('.btn-prev').forEach(btn => {
            btn.addEventListener('click', () => {
                if (currentStep > 0) {
                    currentStep--;
                    updateUI();
                }
            });
        });

        // Initialize height
        setTimeout(() => updateUI(), 100);
    });
</script>
