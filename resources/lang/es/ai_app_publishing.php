<?php

return [
    'brand' => 'Publicar tu app con IA',
    'nav' => [
        'use_cases' => 'Casos de uso',
        'paths' => 'Rutas',
        'process' => 'Proceso',
        'faq' => 'FAQ',
        'cta' => 'Cotizar',
    ],
    'marquee' => ['Servidor', 'Dominio', 'SSL', 'App Store', 'Google Play', 'CI/CD', 'Vercel', 'AWS'],
    'hero' => [
        'kicker' => 'De prototipo con IA a producción real',
        'title' => 'Publica tu app',
        'title_accent' => 'en internet y en las tiendas.',
        'subtitle' => '¿Creaste una app con ChatGPT, Cursor, Bolt, Lovable u otra IA? Te ayudamos a desplegarla en servidor con dominio propio o a publicarla en App Store y Google Play.',
        'cta_primary' => 'Cotizar por WhatsApp',
        'cta_secondary' => 'Cotizador en línea',
        'cta_tertiary' => 'Agendar llamada',
        'lang_switch' => 'English',
    ],
    'use_cases' => [
        'kicker' => 'Casos de uso',
        'title' => '¿Para quién es este servicio?',
        'items' => [
            [
                'icon' => 'language',
                'title' => 'Web app en producción',
                'body' => 'Tienes una app web generada con IA y quieres que cualquiera la use con un enlace real, no solo en localhost.',
            ],
            [
                'icon' => 'domain',
                'title' => 'Dominio y marca propia',
                'body' => 'Quieres tuapp.com (o .mx) con certificado SSL, correos profesionales y una presencia creíble para clientes o inversores.',
            ],
            [
                'icon' => 'phone_iphone',
                'title' => 'App Store (iOS)',
                'body' => 'Tu prototipo móvil necesita pasar revisión de Apple: cuenta de desarrollador, firma, íconos, políticas y envío a la tienda.',
            ],
            [
                'icon' => 'android',
                'title' => 'Google Play (Android)',
                'body' => 'Publicas en Android con keystore, ficha de tienda, capturas y cumplimiento de políticas de Google.',
            ],
            [
                'icon' => 'build',
                'title' => 'Código IA que no compila',
                'body' => 'La IA generó el proyecto pero falla en build, dependencias rotas o errores en producción. Lo estabilizamos antes de publicar.',
            ],
            [
                'icon' => 'rocket_launch',
                'title' => 'MVP listo para usuarios',
                'body' => 'Tienes una idea validada con IA y necesitas el primer despliegue profesional para probar con usuarios reales y medir tracción.',
            ],
        ],
    ],
    'paths' => [
        'kicker' => 'Dos caminos',
        'title' => 'Internet o tiendas oficiales',
        'web' => [
            'title' => 'Servidor y dominio',
            'body' => 'Ideal para apps web, dashboards, SaaS, landings y herramientas internas. Configuramos hosting, DNS, SSL, variables de entorno y despliegues automáticos.',
            'bullets' => [
                'Hosting en Vercel, AWS, DigitalOcean u otro proveedor según tu stack',
                'Dominio .com, .mx u otro TLD con redirecciones y subdominios',
                'Base de datos, APIs y secretos configurados de forma segura',
                'Monitoreo básico y backups según el plan',
            ],
        ],
        'stores' => [
            'title' => 'App Store y Google Play',
            'body' => 'Para apps móviles nativas o híbridas (React Native, Flutter, Expo, etc.). Gestionamos el camino técnico y los requisitos de cada tienda.',
            'bullets' => [
                'Cuentas de desarrollador Apple y Google',
                'Builds firmados, versionado y envío a revisión',
                'Íconos, splash, capturas y textos de la ficha',
                'Políticas de privacidad, permisos y correcciones post-rechazo',
            ],
        ],
    ],
    'process' => [
        'title' => 'Cómo te llevamos a producción',
        'steps' => [
            [
                'title' => 'Diagnóstico',
                'body' => 'Revisamos tu código, stack, estado del repo y objetivo (web, dominio, iOS, Android o todo).',
            ],
            [
                'title' => 'Estabilización',
                'body' => 'Corregimos builds, dependencias, seguridad básica y configuración para que el proyecto sea publicable.',
            ],
            [
                'title' => 'Despliegue',
                'body' => 'Publicamos en servidor con dominio o preparamos y enviamos builds a las tiendas oficiales.',
            ],
            [
                'title' => 'Entrega y soporte',
                'body' => 'Te entregamos accesos, documentación y opciones de mantenimiento continuo.',
            ],
        ],
    ],
    'cta' => [
        'title' => '¿Listo para que tu app exista fuera de tu laptop?',
        'body' => 'Cuéntanos qué construiste con IA y hacia dónde quieres publicar. Cotización sin compromiso.',
        'primary' => 'WhatsApp',
        'secondary' => 'Cotizador web',
        'tertiary' => 'Contacto',
    ],
    'faq' => [
        'title' => 'Preguntas frecuentes',
        'items' => [
            [
                'q' => '¿Puedo publicar una app que solo existe en un chat de IA?',
                'a' => 'Sí, siempre que tengamos acceso al código exportado (repositorio, ZIP o plataforma). Si solo tienes capturas o descripción, primero ayudamos a reconstruir o completar el proyecto.',
            ],
            [
                'q' => '¿Ustedes crean la app desde cero?',
                'a' => 'Este servicio se enfoca en publicar y estabilizar lo que ya generaste con IA. Si necesitas desarrollo adicional, lo cotizamos como proyecto aparte.',
            ],
            [
                'q' => '¿Cuánto tarda publicar en servidor vs. en tiendas?',
                'a' => 'Un despliegue web con dominio puede estar listo en días si el código está relativamente sano. App Store y Google Play suelen tomar más tiempo por builds, cuentas de desarrollador y revisiones (especialmente Apple).',
            ],
            [
                'q' => '¿Necesito mi propio dominio y hosting?',
                'a' => 'No es obligatorio al inicio: podemos usar subdominios o hosting gestionado. Para marca seria y SEO, recomendamos dominio propio; te guiamos en la compra y configuración.',
            ],
            [
                'q' => '¿Qué pasa si Apple o Google rechazan mi app?',
                'a' => 'Analizamos el motivo del rechazo, ajustamos permisos, textos, políticas o código y volvemos a enviar. Es parte habitual del proceso de tiendas.',
            ],
            [
                'q' => '¿Trabajan con Expo, React Native, Flutter, Next.js, etc.?',
                'a' => 'Sí. Adaptamos el proceso al stack que traigas desde Cursor, Bolt, Lovable, Replit, v0 u otras herramientas con IA.',
            ],
            [
                'q' => '¿Incluyen mantenimiento después de publicar?',
                'a' => 'La publicación inicial es un proyecto acotado. Ofrecemos planes de soporte, actualizaciones y nuevos despliegues si los necesitas.',
            ],
        ],
    ],
    'seo' => [
        'title' => 'Publicar app hecha con IA | Servidor, dominio, App Store y Google Play — Nova Consulting',
        'description' => '¿Creaste una app con inteligencia artificial? Te ayudamos a publicarla en internet con servidor y dominio, o en App Store y Google Play. Diagnóstico, estabilización y despliegue en México.',
        'keywords' => 'publicar app IA, app hecha con ChatGPT, desplegar app inteligencia artificial, publicar en App Store, Google Play, dominio app web, vibe coding producción, Nova Consulting',
        'og_title' => 'Publica tu app hecha con IA — Nova Consulting',
        'og_description' => 'De prototipo con IA a producción: servidor, dominio, App Store y Google Play. Cotiza tu despliegue con Nova Consulting.',
    ],
];
