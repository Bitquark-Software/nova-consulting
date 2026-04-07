<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Render localized, optimized SEO tags (title, meta, og, json-ld) --}}
    @include('partials.seo')

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <link rel="preload" href="/fonts/instrument-sans/instrument-sans-latin-400-normal.woff2" as="font" type="font/woff2" crossorigin>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @php
        $analyticsHost = strtolower((string) request()->getHost());
        $shouldLoadGoogleAnalytics = ! in_array($analyticsHost, ['localhost', '127.0.0.1', '::1'], true);
    @endphp
    @if ($shouldLoadGoogleAnalytics)
    {{-- Microsoft Clarity: same host guard as GA (skip localhost / 127.0.0.1 / ::1). --}}
    <script type="text/javascript">
        (function(c,l,a,r,i,t,y){
            c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
            t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
            y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
        })(window, document, "clarity", "script", "w3wkj1p409");
    </script>
    @endif

    @if ($shouldLoadGoogleAnalytics)
    {{-- One gtag.js load (GA4 + Ads); library injected after window load so it does not compete with LCP. Disabled on localhost / 127.0.0.1 / ::1. --}}
    @php
        $ga4MeasurementId = 'G-BSEMW3GN2Y';
        $googleAdsId = 'AW-16713345017';
    @endphp
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', @json($ga4MeasurementId));
    gtag('config', @json($googleAdsId));
    gtag('event', 'conversion', {
        send_to: @json($googleAdsId . '/Szr_CKa03-gaEPnPxaE-'),
        value: 1.0,
        currency: 'MXN',
    });
    window.addEventListener('load', function () {
        if (window.__gtagLoader) return;
        window.__gtagLoader = true;
        var s = document.createElement('script');
        s.async = true;
        s.src = 'https://www.googletagmanager.com/gtag/js?id=' + @json($ga4MeasurementId);
        document.head.appendChild(s);
    });
    </script>
    @endif


    @stack('scripts')

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')

    <!-- Seo tags -->
</head>