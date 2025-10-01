<header class="w-full text-sm mb-6 not-has-[nav]:hidden fixed top-0 left-0 bg-transparent z-20">
    @if (Route::has('login'))
        <nav class="flex items-center justify-around gap-4 py-4 px-3">
            <img class="w-60 h-auto" src="{{asset('images/Web_inverted.svg')}}" alt="Nova Consulting" draggable="false" onclick="window.location.pathname = '/'">
            <div class="hidden rounded-2xl bg-transparent md:grid grid-cols-3 gap-1">
                <div class="cursor-pointer rounded-full border border-[#2C2C2C] text-[#2C2C2C] hover:bg-[#2C2C2C] hover:text-[#F2F2F2] px-6 py-2.5 text-center bg-transparent backdrop-blur-xl">
                    <a href="{{ route('services') }}">Services</a>
                </div>
                <div class="cursor-pointer rounded-full border border-[#2C2C2C] text-[#2C2C2C] hover:bg-[#2C2C2C] hover:text-[#F2F2F2] px-6 py-2.5 text-center bg-transparent backdrop-blur-xl">
                    <a href="/#pricing">Pricing</a>
                </div>
                <div class="cursor-pointer rounded-full border border-[#2C2C2C] text-[#2C2C2C] hover:bg-[#2C2C2C] hover:text-[#F2F2F2] px-6 py-2.5 text-center bg-transparent backdrop-blur-xl">
                    <a href="{{ route('about') }}">About</a>
                </div>
            </div>
            @auth
                <a
                    href="{{ url('/dashboard') }}"
                    class="hidden sm:inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                >
                    My Projects
                </a>
            @else
                <a
                    href="{{ route('login') }}"
                    class="hidden sm:inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                >
                    Customer Portal
                </a>
                <button id="nav-btn" class="flex items-center justify-center bg-transparent text-4xl sm:hidden border-[#2C2C2C] rounded hover:bg-[#2C2C2C] hover:text-[#F2F2F2]">
                    <p class="pb-2 px-2">☰</p>
                </button>
            @endauth
        </nav>

        <nav id="mobile-nav-wrapper" class="w-full hidden py-3 bg-white/5 backdrop-blur-3xl">
            <div class="flex flex-col items-center justify-around">
                <a href="{{ route('services') }}" class="text-[#2C2C2C]">Services</a>
                <a href="/#pricing" class="text-[#2C2C2C]">Pricing</a>
                <a href="{{ route('about') }}" class="text-[#2C2C2C]">About</a>
                <div class="w-full flex items-center justify-around">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                        >
                            My Projects
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                        >
                            Customer Portal
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    @endif
</header>