@php
    $navGaSection = $navGaSection ?? 'nav-marketing';

    $marketingNavDesktopPrimary = [
        ['route' => 'services', 'label' => __('messages.nav.services')],
        ['route' => 'hiring_services', 'label' => __('messages.nav.hiring_desktop'), 'title' => __('messages.nav.hiring_services')],
        ['route' => 'blog.index', 'label' => __('messages.nav.blog'), 'blog_hub' => true],
        ['route' => 'about', 'label' => __('messages.nav.about')],
        ['route' => 'contact', 'label' => __('messages.nav.contact')],
    ];
    $marketingNavDesktopQuotes = [
        [
            'route' => 'website_quote',
            'label' => __('messages.nav.website_quote_desktop'),
            'title' => __('messages.nav.website_quote'),
        ],
    ];

    $marketingNavMobileTabs = [
        ['route' => 'home', 'icon' => 'home', 'label' => __('messages.nav.tab_home')],
        ['route' => 'services', 'icon' => 'services', 'label' => __('messages.nav.tab_services')],
        [
            'route' => 'website_quote',
            'icon' => 'quote',
            'label' => __('messages.nav.tab_quote'),
            'route_match' => ['website_quote', 'website_quote.store'],
            'track' => 'marketing_nav_cotiza_tab',
        ],
        ['route' => 'blog.index', 'icon' => 'blog', 'label' => __('messages.nav.tab_blog'), 'blog_hub' => true],
        ['route' => 'contact', 'icon' => 'contact', 'label' => __('messages.nav.tab_contact')],
    ];
@endphp
<header
    class="fixed top-0 left-0 right-0 z-50 px-3 sm:px-4 pt-[max(0.75rem,env(safe-area-inset-top))] sm:pt-4 supports-[backdrop-filter]:isolate"
    data-ga-section="{{ $navGaSection }}"
>
    <nav
        class="marketing-nav-glass max-w-6xl mx-auto"
        aria-label="{{ __('messages.nav.primary_aria') }}"
    >
        <div class="flex items-center justify-between gap-2 sm:gap-3 min-w-0 px-3 sm:px-4 md:px-6 min-h-14 sm:min-h-[4.25rem] py-1.5 sm:py-0">
            <a
                href="{{ route('home') }}"
                class="shrink-0 min-w-0 flex items-center transition-transform duration-300 ease-out active:scale-[0.98] focus:outline-none focus-visible:ring-2 focus-visible:ring-black/25 focus-visible:ring-offset-2 rounded-md"
                aria-label="{{ __('messages.nav.brand') }}"
            >
                <img
                    src="{{ asset('images/nova_consulting_logo.svg') }}"
                    alt=""
                    width="646"
                    height="474"
                    decoding="async"
                    draggable="false"
                    class="h-7 w-auto sm:h-8 md:h-9 lg:h-10 max-h-10 object-contain object-left"
                />
            </a>

            <div class="hidden lg:flex flex-1 min-w-0 items-center justify-center px-2 min-[1100px]:px-4">
                <ul class="marketing-nav-pill" role="list" aria-label="{{ __('messages.nav.pill_aria') }}">
                    @foreach ($marketingNavDesktopPrimary as $item)
                        @php
                            $pillActive = ! empty($item['blog_hub'])
                                ? \App\Support\BlogHubRoutes::matches(request()->route()?->getName())
                                : request()->routeIs($item['route']);
                        @endphp
                        <li class="marketing-nav-pill-li min-w-0" style="--pill-i: {{ $loop->index }};">
                            <a
                                href="{{ route($item['route']) }}"
                                @if ($pillActive) aria-current="page" @endif
                                @if (! empty($item['title'])) title="{{ $item['title'] }}" @endif
                                class="marketing-nav-pill-link min-w-0 max-w-[9.5rem] truncate xl:max-w-none @if ($pillActive) marketing-nav-pill-link--active @endif"
                            >{{ $item['label'] }}</a>
                        </li>
                    @endforeach
                    <li class="marketing-nav-pill-sep" role="presentation" aria-hidden="true"></li>
                    @foreach ($marketingNavDesktopQuotes as $item)
                        @php
                            $pillActive = request()->routeIs('website_quote', 'website_quote.store');
                        @endphp
                        <li class="marketing-nav-pill-li min-w-0" style="--pill-i: {{ count($marketingNavDesktopPrimary) + $loop->index }};">
                            <a
                                href="{{ route($item['route']) }}"
                                @if ($pillActive) aria-current="page" @endif
                                title="{{ $item['title'] }}"
                                class="marketing-nav-pill-link min-w-0 max-w-[7rem] truncate min-[1100px]:max-w-[9rem] xl:max-w-none @if ($pillActive) marketing-nav-pill-link--active @endif"
                                @if ($item['route'] === 'website_quote')
                                    data-track="marketing_nav_cotiza_click"
                                @endif
                            >{{ $item['label'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="flex items-center gap-1.5 sm:gap-2 md:gap-3 shrink-0">
                <a
                    href="{{ url('/dashboard/login') }}"
                    class="marketing-nav-glass-login inline-flex items-center px-3.5 sm:px-5 py-2 sm:py-2.5 text-xs sm:text-sm font-semibold rounded-full transition-all duration-300 ease-out hover:-translate-y-0.5 active:translate-y-0 active:scale-[0.98]"
                >{{ __('messages.nav.login') }}</a>
            </div>
        </div>
    </nav>
</header>

<nav
    class="marketing-tab-bar lg:hidden fixed left-0 right-0 bottom-0 z-50 pointer-events-none px-3 pb-[max(0.35rem,env(safe-area-inset-bottom))] pt-1"
    aria-label="{{ __('messages.nav.tab_bar_aria') }}"
>
    <div class="marketing-tab-bar__dock mx-auto max-w-lg pointer-events-auto">
        <div class="marketing-tab-bar__inner flex items-stretch justify-between gap-0.5 px-1 py-1">
            @foreach ($marketingNavMobileTabs as $item)
                @php
                    if (! empty($item['blog_hub'])) {
                        $tabActive = \App\Support\BlogHubRoutes::matches(request()->route()?->getName());
                    } else {
                        $match = $item['route_match'] ?? [$item['route']];
                        $tabActive = request()->routeIs(...$match);
                    }
                @endphp
                <a
                    href="{{ route($item['route']) }}"
                    @if ($tabActive) aria-current="page" @endif
                    @if (! empty($item['track'])) data-track="{{ $item['track'] }}" @endif
                    class="marketing-tab-bar__link flex flex-1 min-w-0 flex-col items-center justify-center gap-0.5 rounded-[1.05rem] px-1 py-1.5 text-[0.62rem] font-semibold leading-tight tracking-tight text-center transition-[color,transform,background,box-shadow] duration-200 ease-out outline-none focus-visible:ring-2 focus-visible:ring-black/20 focus-visible:ring-offset-2 active:scale-[0.97] sm:text-[0.65rem] @if ($tabActive) marketing-tab-bar__link--active @endif"
                >
                    @include('partials.marketing-tab-icon', ['name' => $item['icon'], 'class' => 'w-[1.35rem] h-[1.35rem] shrink-0'])
                    <span class="marketing-tab-bar__label truncate max-w-full">{{ $item['label'] }}</span>
                </a>
            @endforeach
        </div>
    </div>
</nav>
