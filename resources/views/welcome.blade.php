{{-- resources/views/partials/head.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.global_header')
    <body class="bg-[#F2F2F2] text-[#2C2C2C]">
        @include('layouts.landing_navbar')
        <main class="block w-full">
            <div class="mt-44 w-6/12 sm:w-4/12 md:w-3/12 xl:w-2/12 mx-auto p-3 flex items-center justify-center">
                <div class="rounded-full p-1 w-10/12 flex flex-row items-center justify-around bg-gray-300 shadow">
                    <div class="w-[8px] h-[8px] rounded-full bg-green-500 animate-pulse duration-400"></div>
                    <h2 class="text-xs">{{ __('messages.welcome.now_accepting') }}</h2>
                </div>
            </div>
            <h1 class="text-[#2C2C2C] font-bold text-6xl text-center max-w-md md:max-w-2xl block mx-auto my-6 space-y-3">{!! __('messages.welcome.hero_title_html') !!}</h1>
            <h2 class="text-[#8d8d8d] text-xl text-center max-w-md md:max-w-2xl block mx-auto mb-6">
                {{ __('messages.welcome.hero_subtitle') }}
            </h2>

            <div class="max-w-md md:max-w-2xl flex flew-row items-center justify-center mx-auto gap-3 p-4">
                <a href="{{ url('/dashboard/register') }}" class="p-4 bg-[#2C2C2C] text-[#F2F2F2] rounded-xl hover:shadow-2xl hover:bg-[#F2F2F2] hover:text-[#2C2C2C] hover:border-[#2C2C2C] hover:border-2 transition-all ease-in-out duration-200">{{ __('messages.welcome.start_for_free') }}</a>
                <a target="_blank" href="https://calendar.app.google/b8nHVZEUCh1LdLcL8" class="p-4 bg-[#F2F2F2] text-[#2C2C2C] rounded-xl hover:shadow-2xl hover:bg-[#2C2C2C] hover:text-[#F2F2F2] border-[#2C2C2C] transition-all ease-in-out duration-200">{{ __('messages.welcome.book_a_call') }}</a>
            </div>

            <!-- img here -->
        </main>


        <!-- Services -->
        <div class="block w-full" id="services">
            <div class="mt-44 w-10/12 sm:w-5/12 mx-auto p-3">
                <h3 class="w-full text-4xl font-medium text-center">{{ __('messages.welcome.services_heading') }}</h3>
            </div>
            <div class="mt-4 w-9/12 sm:w-4/12 mx-auto p-3">
                <h3 class="w-full text-md font-light text-[#8d8d8d] text-center">{{ __('messages.welcome.services_subheading') }}</h3>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 items-stretch justify-center w-10/12 mx-auto my-6">
                <div class="p-6 rounded-xl bg-[#c8c8c8] text-[#2C2C2C] hover:bg-[#e2e2e2] hover:shadow-2xl transition-all ease-in-out duration-200 w-full">
                    <x-hugeicons-software-license class="h-12 w-12 mb-2 text-[#2C2C2C]"/>
                    <h1 class="font-bold text-xl mb-2">{{ __('messages.welcome.service_custom_software') }}</h1>
                    <h2 class="font-extralight">{{ __('messages.welcome.service_custom_software_sub') }}</h2>
                    <button data-modalid="customSoftwareModal" class="mt-4 border cursor-pointer p-2 rounded-md border-[#2C2C2C] text-[#2C2C2C] bg-transparent modalOpener">{{ __('messages.welcome.read_more') }}</button>
                </div>
                <div class="p-6 rounded-xl bg-[#c8c8c8] text-[#2C2C2C] hover:bg-[#e2e2e2] hover:shadow-2xl transition-all ease-in-out duration-200 w-full">
                    <x-heroicon-o-users class="h-12 w-12 mb-2 text-[#2C2C2C]"/>
                    <h1 class="font-bold text-xl mb-2">{{ __('messages.welcome.service_it_staffing') }}</h1>
                    <h2 class="font-extralight">{{ __('messages.welcome.service_it_staffing_sub') }}</h2>
                    <button data-modalid="itStaffingModal" class="mt-4 border cursor-pointer p-2 rounded-md border-[#2C2C2C] text-[#2C2C2C] bg-transparent modalOpener">{{ __('messages.welcome.read_more') }}</button>
                </div>
                <div class="p-6 rounded-xl bg-[#c8c8c8] text-[#2C2C2C] hover:bg-[#e2e2e2] hover:shadow-2xl transition-all ease-in-out duration-200 w-full">
                    <x-heroicon-o-cloud class="h-12 w-12 mb-2 text-[#2C2C2C]"/>
                    <h1 class="font-bold text-xl mb-2">{{ __('messages.welcome.service_cloud') }}</h1>
                    <h2 class="font-extralight">{{ __('messages.welcome.service_cloud_sub') }}</h2>
                    <button data-modalid="cloudModal" class="mt-4 border cursor-pointer p-2 rounded-md border-[#2C2C2C] text-[#2C2C2C] bg-transparent modalOpener">{{ __('messages.welcome.read_more') }}</button>
                </div>
                <div class="p-6 rounded-xl bg-[#c8c8c8] text-[#2C2C2C] hover:bg-[#e2e2e2] hover:shadow-2xl transition-all ease-in-out duration-200 w-full">
                    <x-hugeicons-tools class="h-12 w-12 mb-2 text-[#2C2C2C]"/>
                    <h1 class="font-bold text-xl mb-2">{{ __('messages.welcome.service_consulting') }}</h1>
                    <h2 class="font-extralight">{{ __('messages.welcome.service_consulting_sub') }}</h2>
                    <button data-modalid="technicalConsultingModal" class="mt-4 border cursor-pointer p-2 rounded-md border-[#2C2C2C] text-[#2C2C2C] bg-transparent modalOpener">{{ __('messages.welcome.read_more') }}</button>
                </div>
                <div class="p-6 rounded-xl bg-[#c8c8c8] text-[#2C2C2C] hover:bg-[#e2e2e2] hover:shadow-2xl transition-all ease-in-out duration-200 w-full">
                    <x-heroicon-o-star class="h-12 w-12 mb-2 text-[#2C2C2C]"/>
                    <h1 class="font-bold text-xl mb-2">{{ __('messages.welcome.service_quality') }}</h1>
                    <h2 class="font-extralight">{{ __('messages.welcome.service_quality_sub') }}</h2>
                    <button data-modalid="qualityModal" class="mt-4 border cursor-pointer p-2 rounded-md border-[#2C2C2C] text-[#2C2C2C] bg-transparent modalOpener">{{ __('messages.welcome.read_more') }}</button>
                </div>
                <div class="p-6 rounded-xl bg-[#c8c8c8] text-[#2C2C2C] hover:bg-[#e2e2e2] hover:shadow-2xl transition-all ease-in-out duration-200 w-full">
                    <x-hugeicons-database-sync class="h-12 w-12 mb-2 text-[#2C2C2C]"/>
                    <h1 class="font-bold text-xl mb-2">{{ __('messages.welcome.service_integration') }}</h1>
                    <h2 class="font-extralight">{{ __('messages.welcome.service_integration_sub') }}</h2>
                    <button data-modalid="systemIntegrationModal" class="mt-4 border cursor-pointer p-2 rounded-md border-[#2C2C2C] text-[#2C2C2C] bg-transparent modalOpener">{{ __('messages.welcome.read_more') }}</button>
                </div>
            </div>

            <a href="{{ route('services') }}" class="px-4 py-2 rounded-md shadow-sm bg-[#2C2C2C] text-white font-light block mx-auto w-fit hover:shadow-lg transition-all duration-150 ease-in-out">{{ __('messages.welcome.view_more') }}</a>
        </div>


        <!-- Pricing -->
        <div class="block w-full"  id="pricing">
            <div class="mt-44 w-10/12 sm:w-5/12 mx-auto p-3">
                <h3 class="w-full text-4xl font-medium text-center">{{ __('messages.welcome.pricing_heading') }}</h3>
            </div>
            <div class="mt-4 w-9/12 sm:w-4/12 mx-auto p-3">
                <h3 class="w-full text-md font-light text-[#8d8d8d] text-center">{{ __('messages.welcome.pricing_subheading') }}</h3>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-11 items-stretch justify-center w-10/12 mx-auto my-6">
                <div class="relative w-full rounded-2xl border px-4 py-6 bg-[#e2e2e2] hover:shadow-xl transition-all ease-in-out duration-200">
                    <h1 class="font-mediium text-xl text-left mt-3">{{ __('messages.welcome.pricing_consultation') }}</h1>
                    <h2 class="font-bold text-3xl text-left mt-3">{{ __('messages.welcome.pricing_consultation_price') }}</h2>
                    <p class="w-8/12 text-sm mt-3">{{ __('messages.welcome.hero_subtitle') }}</p>
                    
                    <ul class="block mt-4 text-sm">
                        <li class="flex flex-row items-center justify-items-start gap-6">
                            <x-heroicon-o-check-badge class="h-6 w-6 text-[#2C2C2C]" />
                            Project assessment & planning
                        </li>
                        <li class="flex flex-row items-center justify-items-start gap-6">
                            <x-heroicon-o-check-badge class="h-6 w-6 text-[#2C2C2C]" />
                            Technology stack recommendations
                        </li>
                        <li class="flex flex-row items-center justify-items-start gap-6">
                            <x-heroicon-o-check-badge class="h-6 w-6 text-[#2C2C2C]" />
                            Timeline & budget estimation
                        </li>
                        <li class="flex flex-row items-center justify-items-start gap-6">
                            <x-heroicon-o-check-badge class="h-6 w-6 text-[#2C2C2C]" />
                            Team composition analysis
                        </li>
                        <li class="flex flex-row items-center justify-items-start gap-6">
                            <x-heroicon-o-check-badge class="h-6 w-6 text-[#2C2C2C]" />
                            Risk assessment report
                        </li>
                        <a target="_blank" href="https://calendar.app.google/b8nHVZEUCh1LdLcL8" class="block w-10/12 py-2 mx-auto border-[#8d8d8d] border-[0.2px] bg-[#F2F2F2] text-sm rounded-md mt-6 text-center">{{ __('messages.welcome.pricing_book_consultation') }}</a>
                    </ul>
                </div>
                <div class="relative w-full rounded-2xl border px-4 py-6 bg-[#e2e2e2] hover:shadow-xl transition-all ease-in-out duration-200">
                    <div class="absolute w-48 py-1 px-4 bg-[#2C2C2C] text-[#F2F2F2] text-center rounded-2xl -top-[15px] left-[30%] sm:left-[40%] md:left-[20%] lg:left-[26%]">{{ __('messages.welcome.pricing_recommended') }}</div>
                    <h1 class="font-mediium text-xl text-left mt-3">Dev Team</h1>
                    <h2 class="font-bold text-3xl text-left mt-3">$30 USD <sup class="text-xs text-[#8d8d8d]">per dev/hour</sup></h2>
                    <p class="w-8/12 text-sm mt-3">Perfect for exploring your software development and IT staffing needs</p>
                    
                    <ul class="block mt-4 text-sm">
                        <li class="flex flex-row items-center justify-items-start gap-6">
                            <x-heroicon-o-check-badge class="h-6 w-6 text-[#2C2C2C]" />
                            Custom web & mobile apps
                        </li>
                        <li class="flex flex-row items-center justify-items-start gap-6">
                            <x-heroicon-o-check-badge class="h-6 w-6 text-[#2C2C2C]" />
                            Full-stack development
                        </li>
                        <li class="flex flex-row items-center justify-items-start gap-6">
                            <x-heroicon-o-check-badge class="h-6 w-6 text-[#2C2C2C]" />
                            Cloud deployment & DevOps
                        </li>
                        <li class="flex flex-row items-center justify-items-start gap-6">
                            <x-heroicon-o-check-badge class="h-6 w-6 text-[#2C2C2C]" />
                            Quality assurance testing
                        </li>
                        <li class="flex flex-row items-center justify-items-start gap-6">
                            <x-heroicon-o-check-badge class="h-6 w-6 text-[#2C2C2C]" />
                            Code documentation
                        </li>
                        <li class="flex flex-row items-center justify-items-start gap-6">
                            <x-heroicon-o-check-badge class="h-6 w-6 text-[#2C2C2C]" />
                           Technical support
                        </li>
                        <li class="flex flex-row items-center justify-items-start gap-6">
                            <x-heroicon-o-check-badge class="h-6 w-6 text-[#2C2C2C]" />
                           Weekly progress reports
                        </li>
                        <a href="{{ url('/') }}" class="block w-10/12 py-2 mx-auto border-[#8d8d8d] border-[0.2px] bg-[#2C2C2C] text-[#F2F2F2] text-sm rounded-md mt-6 text-center">{{ __('messages.welcome.pricing_start_project') }}</a>
                    </ul>
                </div>
                <div class="relative w-full rounded-2xl border px-4 py-6 bg-[#e2e2e2] hover:shadow-xl transition-all ease-in-out duration-200">
                    <h1 class="font-mediium text-xl text-left mt-3">Enterprise</h1>
                    <h2 class="font-bold text-3xl text-left mt-3">Custom</h2>
                    <p class="w-8/12 text-sm mt-3">For large-scale projects and dedicated team augmentation</p>
                    
                    <ul class="block mt-4 text-sm">
                        <li class="flex flex-row items-center justify-items-start gap-6">
                            <x-heroicon-o-check-badge class="h-6 w-6 text-[#2C2C2C]" />
                            Dedicated development teams
                        </li>
                        <li class="flex flex-row items-center justify-items-start gap-6">
                            <x-heroicon-o-check-badge class="h-6 w-6 text-[#2C2C2C]" />
                            Complex system integrations
                        </li>
                        <li class="flex flex-row items-center justify-items-start gap-6">
                            <x-heroicon-o-check-badge class="h-6 w-6 text-[#2C2C2C]" />
                            Enterprise architecture design
                        </li>
                        <li class="flex flex-row items-center justify-items-start gap-6">
                            <x-heroicon-o-check-badge class="h-6 w-6 text-[#2C2C2C]" />
                            24/7 technical support
                        </li>
                        <li class="flex flex-row items-center justify-items-start gap-6">
                            <x-heroicon-o-check-badge class="h-6 w-6 text-[#2C2C2C]" />
                            Compliance & security audits
                        </li>
                        <li class="flex flex-row items-center justify-items-start gap-6">
                            <x-heroicon-o-check-badge class="h-6 w-6 text-[#2C2C2C]" />
                            Dedicated project manager
                        </li>
                        <a target="_blank" href="https://calendar.app.google/b8nHVZEUCh1LdLcL8" class="block w-10/12 py-2 mx-auto border-[#8d8d8d] border-[0.2px] bg-[#F2F2F2] text-sm rounded-md mt-6 text-center">{{ __('messages.welcome.pricing_contact_sales') }}</a>
                    </ul>
                </div>
            </div>

            <h4 class="text-center text-md text-[#2C2C2C] my-12">{!! __('messages.welcome.pricing_contact_team') !!}</h4>
        </div>

        @include('layouts.footer')
    
        <!-- modals -->
        <div id="customSoftwareModal" class="hidden w-[100vw] h-[100vh] fixed flex items-center justify-center top-0 left-0 bg-white/25 backdrop-blur-sm z-50">
            <div class="w-10/12 bg-white rounded-2xl border shadow-2xl p-6">
                <div class="flex flex-row w-full items-end justify-end">
                    <button class="close-modal" data-modalid="customSoftwareModal" class="p-4 text-accent border border-black rounded-2xl">X</button>
                </div>

                <div>
                    <p>
                            {{ __('messages.welcome.modal_custom_software') }}
                        </p>
                </div>
            </div>
        </div>
        <div id="itStaffingModal" class="hidden w-[100vw] h-[100vh] fixed flex items-center justify-center top-0 left-0 bg-white/25 backdrop-blur-sm z-50">
            <div class="w-10/12 bg-white rounded-2xl border shadow-2xl p-6">
                <div class="flex flex-row w-full items-end justify-end">
                    <button class="close-modal" data-modalid="itStaffingModal" class="p-4 text-accent border border-black rounded-2xl">X</button>
                </div>

                <div>
                    <p>
                        {{ __('messages.welcome.modal_it_staffing') }}
                    </p>
                </div>
            </div>
        </div>
        <div id="cloudModal" class="hidden w-[100vw] h-[100vh] fixed flex items-center justify-center top-0 left-0 bg-white/25 backdrop-blur-sm z-50">
            <div class="w-10/12 bg-white rounded-2xl border shadow-2xl p-6">
                <div class="flex flex-row w-full items-end justify-end">
                    <button class="close-modal" data-modalid="cloudModal" class="p-4 text-accent border border-black rounded-2xl">X</button>
                </div>

                <div>
                    <p>
                        {{ __('messages.welcome.modal_cloud') }}
                    </p>
                </div>
            </div>
        </div>
        <div id="technicalConsultingModal" class="hidden w-[100vw] h-[100vh] fixed flex items-center justify-center top-0 left-0 bg-white/25 backdrop-blur-sm z-50">
            <div class="w-10/12 bg-white rounded-2xl border shadow-2xl p-6">
                <div class="flex flex-row w-full items-end justify-end">
                    <button class="close-modal" data-modalid="technicalConsultingModal" class="p-4 text-accent border border-black rounded-2xl">X</button>
                </div>

                <div>
                    <p>
                        {{ __('messages.welcome.modal_technical') }}
                    </p>
                </div>
            </div>
        </div>
        <div id="qualityModal" class="hidden w-[100vw] h-[100vh] fixed flex items-center justify-center top-0 left-0 bg-white/25 backdrop-blur-sm z-50">
            <div class="w-10/12 bg-white rounded-2xl border shadow-2xl p-6">
                <div class="flex flex-row w-full items-end justify-end">
                    <button class="close-modal" data-modalid="qualityModal" class="p-4 text-accent border border-black rounded-2xl">X</button>
                </div>

                <div>
                    <p>
                        {{ __('messages.welcome.modal_quality') }}
                    </p>
                </div>
            </div>
        </div>
        <div id="systemIntegrationModal" class="hidden w-[100vw] h-[100vh] fixed flex items-center justify-center top-0 left-0 bg-white/25 backdrop-blur-xs z-50">
            <div class="w-10/12 bg-white rounded-2xl border shadow-2xl p-6">
                <div class="flex flex-row w-full items-end justify-end">
                    <button class="close-modal" data-modalid="systemIntegrationModal" class="p-4 text-accent border border-black rounded-2xl">X</button>
                </div>

                <div>
                    <p>
                        {{ __('messages.welcome.modal_integration') }}
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
