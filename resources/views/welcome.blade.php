{{-- resources/views/partials/head.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.global_header');
    <body class="bg-[#F2F2F2] text-[#2C2C2C]">
        @include('layouts.landing_navbar');
        <main class="block w-full">
            <div class="mt-44 w-6/12 sm:w-4/12 md:w-3/12 xl:w-2/12 mx-auto p-3 flex items-center justify-center">
                <div class="rounded-full p-1 w-10/12 flex flex-row items-center justify-around bg-gray-300 shadow">
                    <div class="w-[8px] h-[8px] rounded-full bg-green-500 animate-pulse duration-400"></div>
                    <h2 class="text-xs">Now accepting new IT projects</h2>
                </div>
            </div>
            <h1 class="text-[#2C2C2C] font-bold text-6xl text-center max-w-md md:max-w-2xl block mx-auto my-6 space-y-3">Custom &nbsp;<span class="highlight">software</span><br> & <span class="">IT solutions</span> for modern businesses</h1>
            <h2 class="text-[#8d8d8d] text-xl text-center max-w-md md:max-w-2xl block mx-auto mb-6">
                Transform your business with custom software development and expert IT staffing. We deliver scalable solutions and talented professionals to accelerate your growth.
            </h2>

            <div class="max-w-md md:max-w-2xl flex flew-row items-center justify-center mx-auto gap-3 p-4">
                <a href="{{ route('register') }}" class="p-4 bg-[#2C2C2C] text-[#F2F2F2] rounded-xl hover:shadow-2xl hover:bg-[#F2F2F2] hover:text-[#2C2C2C] hover:border-[#2C2C2C] hover:border-2 transition-all ease-in-out duration-200">Start for free</a>
                <a target="_blank" href="https://calendly.com/idsfernandomorales/30min" class="p-4 bg-[#F2F2F2] text-[#2C2C2C] rounded-xl hover:shadow-2xl hover:bg-[#2C2C2C] hover:text-[#F2F2F2] border-[#2C2C2C] transition-all ease-in-out duration-200">Book a call</a>
            </div>

            <!-- img here -->
        </main>


        <!-- Services -->
        <div class="block w-full" id="services">
            <div class="mt-44 w-10/12 sm:w-5/12 mx-auto p-3">
                <h3 class="w-full text-4xl font-medium text-center">Complete IT solutions for your business</h3>
            </div>
            <div class="mt-4 w-9/12 sm:w-4/12 mx-auto p-3">
                <h3 class="w-full text-md font-light text-[#8d8d8d] text-center">From custom software development to expert IT staffing - we deliver technology solutions that drive growth</h3>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 items-stretch justify-center w-10/12 mx-auto my-6">
                <div class="p-6 rounded-xl bg-[#c8c8c8] text-[#2C2C2C] hover:bg-[#e2e2e2] hover:shadow-2xl transition-all ease-in-out duration-200 w-full">
                    <x-hugeicons-software-license class="h-12 w-12 mb-2 text-[#2C2C2C]"/>
                    <h1 class="font-bold text-xl mb-2">Custom Software Development</h1>
                    <h2 class="font-extralight">Build scalable web and mobile applications tailored to your specific business needs.</h2>
                    <button data-modalid="customSoftwareModal" class="mt-4 border cursor-pointer p-2 rounded-md border-[#2C2C2C] text-[#2C2C2C] bg-transparent modalOpener">Read more</button>
                </div>
                <div class="p-6 rounded-xl bg-[#c8c8c8] text-[#2C2C2C] hover:bg-[#e2e2e2] hover:shadow-2xl transition-all ease-in-out duration-200 w-full">
                    <x-heroicon-o-users class="h-12 w-12 mb-2 text-[#2C2C2C]"/>
                    <h1 class="font-bold text-xl mb-2">IT Staffing Solutions</h1>
                    <h2 class="font-extralight">Access top-tier IT professionals to strengthen your development team</h2>
                    <button data-modalid="itStaffingModal" class="mt-4 border cursor-pointer p-2 rounded-md border-[#2C2C2C] text-[#2C2C2C] bg-transparent modalOpener">Read more</button>
                </div>
                <div class="p-6 rounded-xl bg-[#c8c8c8] text-[#2C2C2C] hover:bg-[#e2e2e2] hover:shadow-2xl transition-all ease-in-out duration-200 w-full">
                    <x-heroicon-o-cloud class="h-12 w-12 mb-2 text-[#2C2C2C]"/>
                    <h1 class="font-bold text-xl mb-2">Cloud Infrastructure</h1>
                    <h2 class="font-extralight">Deploy and manage your applications on secure, scalable cloud platforms.</h2>
                    <button data-modalid="cloudModal" class="mt-4 border cursor-pointer p-2 rounded-md border-[#2C2C2C] text-[#2C2C2C] bg-transparent modalOpener">Read more</button>
                </div>
                <div class="p-6 rounded-xl bg-[#c8c8c8] text-[#2C2C2C] hover:bg-[#e2e2e2] hover:shadow-2xl transition-all ease-in-out duration-200 w-full">
                    <x-hugeicons-tools class="h-12 w-12 mb-2 text-[#2C2C2C]"/>
                    <h1 class="font-bold text-xl mb-2">Technical Consulting</h1>
                    <h2 class="font-extralight">Strategic guidance to optimize your technology stack and development processes.</h2>
                    <button data-modalid="technicalConsultingModal" class="mt-4 border cursor-pointer p-2 rounded-md border-[#2C2C2C] text-[#2C2C2C] bg-transparent modalOpener">Read more</button>
                </div>
                <div class="p-6 rounded-xl bg-[#c8c8c8] text-[#2C2C2C] hover:bg-[#e2e2e2] hover:shadow-2xl transition-all ease-in-out duration-200 w-full">
                    <x-heroicon-o-star class="h-12 w-12 mb-2 text-[#2C2C2C]"/>
                    <h1 class="font-bold text-xl mb-2">Quality Assurance</h1>
                    <h2 class="font-extralight">Comprehensive testing services to ensure your software meets the highest standards.</h2>
                    <button data-modalid="qualityModal" class="mt-4 border cursor-pointer p-2 rounded-md border-[#2C2C2C] text-[#2C2C2C] bg-transparent modalOpener">Read more</button>
                </div>
                <div class="p-6 rounded-xl bg-[#c8c8c8] text-[#2C2C2C] hover:bg-[#e2e2e2] hover:shadow-2xl transition-all ease-in-out duration-200 w-full">
                    <x-hugeicons-database-sync class="h-12 w-12 mb-2 text-[#2C2C2C]"/>
                    <h1 class="font-bold text-xl mb-2">System Integration</h1>
                    <h2 class="font-extralight">Seamlessly connect your existing systems with new applications and third-party services.</h2>
                    <button data-modalid="systemIntegrationModal" class="mt-4 border cursor-pointer p-2 rounded-md border-[#2C2C2C] text-[#2C2C2C] bg-transparent modalOpener">Read more</button>
                </div>
            </div>

            <a href="{{ route('services') }}" class="px-4 py-2 rounded-md shadow-sm bg-[#2C2C2C] text-white font-light block mx-auto w-fit hover:shadow-lg transition-all duration-150 ease-in-out">View more</a>
        </div>


        <!-- Pricing -->
        <div class="block w-full"  id="pricing">
            <div class="mt-44 w-10/12 sm:w-5/12 mx-auto p-3">
                <h3 class="w-full text-4xl font-medium text-center">Flexible pricing for every project</h3>
            </div>
            <div class="mt-4 w-9/12 sm:w-4/12 mx-auto p-3">
                <h3 class="w-full text-md font-light text-[#8d8d8d] text-center">From consultation to enterprise solutions - choose the service level that fits your needs</h3>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-11 items-stretch justify-center w-10/12 mx-auto my-6">
                <div class="relative w-full rounded-2xl border px-4 py-6 bg-[#e2e2e2] hover:shadow-xl transition-all ease-in-out duration-200">
                    <h1 class="font-mediium text-xl text-left mt-3">Consultation</h1>
                    <h2 class="font-bold text-3xl text-left mt-3">Free</h2>
                    <p class="w-8/12 text-sm mt-3">Perfect for exploring your software development and IT staffing needs</p>
                    
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
                        <a target="_blank" href="https://calendly.com/idsfernandomorales/30min" class="block w-10/12 py-2 mx-auto border-[#8d8d8d] border-[0.2px] bg-[#F2F2F2] text-sm rounded-md mt-6 text-center">Book Consultation</a>
                    </ul>
                </div>
                <div class="relative w-full rounded-2xl border px-4 py-6 bg-[#e2e2e2] hover:shadow-xl transition-all ease-in-out duration-200">
                    <div class="absolute w-48 py-1 px-4 bg-[#2C2C2C] text-[#F2F2F2] text-center rounded-2xl -top-[15px] left-[30%] sm:left-[40%] md:left-[20%] lg:left-[26%]">Recommended</div>
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
                        <a href="{{ route('register') }}" class="block w-10/12 py-2 mx-auto border-[#8d8d8d] border-[0.2px] bg-[#2C2C2C] text-[#F2F2F2] text-sm rounded-md mt-6 text-center">Start Project</a>
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
                        <a target="_blank" href="https://calendly.com/idsfernandomorales/30min" class="block w-10/12 py-2 mx-auto border-[#8d8d8d] border-[0.2px] bg-[#F2F2F2] text-sm rounded-md mt-6 text-center">Contact Sales</a>
                    </ul>
                </div>
            </div>

            <h4 class="text-center text-md text-[#2C2C2C] my-12">Have questions? <a target="_blank" href="https://calendly.com/idsfernandomorales/30min" class="underline">Contact our sales team</a></h4>
        </div>

        @include('layouts.footer');
    
        <!-- modals -->
        <div id="customSoftwareModal" class="hidden w-[100vw] h-[100vh] fixed flex items-center justify-center top-0 left-0 bg-white/25 backdrop-blur-sm z-50">
            <div class="w-10/12 bg-white rounded-2xl border shadow-2xl p-6">
                <div class="flex flex-row w-full items-end justify-end">
                    <button class="close-modal" data-modalid="customSoftwareModal" class="p-4 text-accent border border-black rounded-2xl">X</button>
                </div>

                <div>
                    <p>
                        Our expert developers create robust applications using modern technologies like React, Node.js, Python, and cloud platforms. From MVPs to enterprise solutions, we deliver high-quality software that scales with your business growth.
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
                        We provide skilled developers, designers, and technical specialists on contract or permanent basis. Our rigorous vetting process ensures you get experienced professionals who integrate seamlessly with your existing team.
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
                        Leverage AWS, Azure, or Google Cloud with our DevOps expertise. We handle CI/CD pipelines, containerization, monitoring, and security to ensure your applications run smoothly and scale automatically with demand.
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
                        Our senior architects and consultants help you make informed technology decisions. We audit existing systems, recommend improvements, and create roadmaps for digital transformation that align with your business goals.
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
                        From automated testing frameworks to manual QA processes, we ensure your applications are bug-free and performant. Our testing includes unit tests, integration tests, performance testing, and security audits.
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
                        Integrate CRMs, ERPs, payment systems, and other business tools with custom APIs and middleware solutions. We ensure data flows smoothly between systems while maintaining security and performance standards.
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
