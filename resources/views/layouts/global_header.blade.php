<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Render localized, optimized SEO tags (title, meta, og, json-ld) --}}
    @include('partials.seo')

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BSEMW3GN2Y"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-BSEMW3GN2Y');
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16713345017"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-16713345017');
    </script>

    <!-- Event snippet for Vista de página conversion page -->
    <script>
    gtag('event', 'conversion', {
        'send_to': 'AW-16713345017/Szr_CKa03-gaEPnPxaE-',
        'value': 1.0,
        'currency': 'MXN'
    });
    </script>


    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Seo tags -->
</head>