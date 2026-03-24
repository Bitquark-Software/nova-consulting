<?php

return [
    'shell' => [
        'breadcrumb_aria' => 'Ruta',
        'home' => 'Inicio',
        'guide_crumb' => 'Guía',
        'next_step_label' => 'Siguiente paso',
        'next_step_title' => '¿Quieres números para tu proyecto?',
        'next_step_body' => 'Te respondemos por WhatsApp con alcance orientativo y siguientes pasos.',
        'whatsapp' => 'WhatsApp',
        'quote_online' => 'Cotizar en línea',
        'faq_title' => 'Preguntas frecuentes',
        'related_title' => 'Te puede interesar',
        'footer_services' => 'Ver servicios',
        'footer_contact' => 'Contacto',
        'footer_tuxtla_web' => 'Diseño web en Tuxtla',
        'whatsapp_prefill' => 'Hola, leí la guía en novaconsulting.com.mx y quiero una propuesta: ',
    ],

    'cuanto_pagina_web' => [
        'seo' => [
            'title' => '¿Cuánto cuesta una página web en México? | Nova Consulting',
            'description' => 'Rangos orientativos para sitios corporativos, catálogos y tiendas en línea. Sin letras chiquitas: qué mueve el precio y cómo pedir una propuesta clara.',
            'keywords' => 'cuanto cuesta una pagina web, precio pagina web mexico, cotizar sitio web, diseño web precio, pagina web empresas',
            'og_title' => '¿Cuánto cuesta una página web?',
            'og_description' => 'Guía corta con rangos y factores de precio. Nova Consulting, Tuxtla Gutiérrez.',
        ],
        'headline' => '¿Cuánto cuesta una página web en México?',
        'h1' => '¿Cuánto cuesta una página web?',
        'lede' => [
            'El precio de una página web depende del alcance, no del “tamaño” del negocio. En la práctica, lo que más mueve el costo es: número de secciones, si necesitas panel para editar contenido, integraciones (pagos, inventario, CRM), idiomas, SEO técnico y nivel de diseño.',
            'Los números que verás abajo son orientativos para el mercado mexicano y pueden variar según proveedor y complejidad. Para tu caso concreto, lo más útil es una propuesta por escrito con fases y entregables.',
        ],
        'sections' => [
            [
                'title' => 'Rangos orientativos (México)',
                'bullets' => [
                    'Sitio institucional sencillo (varias secciones, formulario, diseño responsive): desde aproximadamente lo que cobraría un freelance experimentado hasta agencias con más proceso; suele ser el punto de entrada más común para PyMEs.',
                    'Sitio con más páginas, blog o recursos descargables, mejor SEO on-page y optimización de velocidad: el rango sube por horas de diseño, contenido y QA.',
                    'E-commerce o catálogo con inventario, medios de pago y envíos: suele ser el segmento más alto porque implica flujos de compra, seguridad y pruebas.',
                ],
            ],
            [
                'title' => 'Qué deberías pedir en una cotización',
                'bullets' => [
                    'Lista de entregables (diseño, desarrollo, capacitación, hosting si aplica).',
                    'Calendario por fases y qué se necesita de tu lado (textos, fotos, accesos).',
                    'Costos y forma de pago; qué incluye soporte post-lanzamiento.',
                ],
            ],
        ],
        'faqs' => [
            ['q' => '¿Incluye dominio y hosting?', 'a' => 'A veces sí, a veces no. Convénlo explícito en la propuesta para no llevarse sorpresas al año.'],
            ['q' => '¿Puedo empezar chico y crecer?', 'a' => 'Sí. Muchos proyectos arrancan con un alcance mínimo viable y luego se añaden módulos.'],
        ],
        'related' => [
            ['label' => '¿Cuánto cuesta una landing page?', 'guide' => 'cuanto_landing'],
            ['label' => '¿Qué es una landing page?', 'guide' => 'que_es_landing'],
            ['label' => 'Diseño de páginas web en Tuxtla y Chiapas', 'path' => '/diseno-paginas-web-tuxtla-chiapas'],
        ],
        'lead_source' => 'guide-cuanto-pagina-web',
    ],

    'cuanto_aplicacion' => [
        'seo' => [
            'title' => '¿Cuánto cuesta una aplicación (web o móvil)? | Nova Consulting',
            'description' => 'Factores que definen el costo de una app: alcance, usuarios, integraciones, seguridad y mantenimiento. Guía breve para cotizar sin sorpresas.',
            'keywords' => 'cuanto cuesta una aplicacion, precio app web, desarrollo app mexico, cotizar software, aplicacion movil precio',
            'og_title' => '¿Cuánto cuesta una aplicación?',
            'og_description' => 'Qué mueve el precio de una app web o móvil y cómo pedir propuesta.',
        ],
        'headline' => '¿Cuánto cuesta una aplicación (web o móvil)?',
        'h1' => '¿Cuánto cuesta una aplicación?',
        'lede' => [
            'Una aplicación puede ser web (en el navegador), móvil (iOS/Android) o ambas. El costo no lo define solo “la idea”, sino el detalle funcional: quién entra al sistema, qué datos se guardan, qué sistemas externos se conectan y qué tan robusta debe ser la seguridad.',
            'Por eso, las cotizaciones serias suelen ir después de una sesión de descubrimiento breve: no es molestia, es lo que evita estimaciones inventadas.',
        ],
        'sections' => [
            [
                'title' => 'Lo que más encarece un proyecto',
                'bullets' => [
                    'Integraciones: pagos, facturación, ERP, CRM, APIs de terceros.',
                    'Roles y permisos complejos (admin, sucursales, auditoría).',
                    'Reportes, exportaciones y datos históricos a gran escala.',
                    'Apps móviles nativas o publicación en tiendas (Apple/Google) con requisitos extra de revisión.',
                    'Alta disponibilidad, respaldos y monitoreo: más ingeniería de infraestructura.',
                ],
            ],
            [
                'title' => 'Enfoque por fases',
                'paragraphs' => [
                    'Muchos equipos proponen un MVP (producto mínimo viable) para validar el flujo principal con usuarios reales, y luego iterar. Eso distribuye inversión y reduce riesgo.',
                ],
            ],
        ],
        'faqs' => [
            ['q' => '¿App web o app móvil?', 'a' => 'Si tus usuarios están mayormente en campo o necesitan notificaciones push, móvil ayuda. Si el flujo es interno de oficina, una web app responsive suele ser más rápida de lanzar.'],
            ['q' => '¿Hay costos después del lanzamiento?', 'a' => 'Sí: servidor, dominios, actualizaciones de seguridad y mejoras. Pregunta siempre por un plan de soporte o bolsa de horas.'],
        ],
        'related' => [
            ['label' => '¿Cuánto cuesta una página web?', 'guide' => 'cuanto_pagina_web'],
            ['label' => 'Cotizar proyecto', 'path' => '/get-a-quote'],
            ['label' => 'Servicios de desarrollo', 'path' => '/services'],
        ],
        'lead_source' => 'guide-cuanto-aplicacion',
    ],

    'que_es_landing' => [
        'seo' => [
            'title' => '¿Qué es una landing page? | Nova Consulting',
            'description' => 'Definición clara de landing page, diferencias con un sitio web completo, cuándo usarla y qué debe tener para convertir visitas en contactos o ventas.',
            'keywords' => 'que es una landing page, landing page definicion, pagina de aterrizaje, diferencia landing y sitio web',
            'og_title' => '¿Qué es una landing page?',
            'og_description' => 'Guía breve: qué es, para qué sirve y buenas prácticas.',
        ],
        'headline' => '¿Qué es una landing page?',
        'h1' => '¿Qué es una landing page?',
        'lede' => [
            'Una landing page (página de aterrizaje) es una página única, enfocada en una sola acción: que el visitante deje sus datos, compre, agende una demo o descargue un recurso. No intenta explicar toda tu empresa: reduce distracciones para subir la conversión.',
            'Un sitio web completo tiene muchas secciones y rutas; una landing suele vivir ligada a una campaña de anuncios, email o QR con un mensaje muy concreto.',
        ],
        'sections' => [
            [
                'title' => 'Qué suele incluir una buena landing',
                'bullets' => [
                    'Titular y subtítulo que hablen del beneficio, no solo del producto.',
                    'Prueba social breve: logos, testimonio corto o cifra verificable.',
                    'Un solo CTA visible (botón repetido, no cinco acciones distintas).',
                    'Formulario corto o clic a WhatsApp con mensaje prellenado.',
                    'Versión rápida en móvil: la mayor parte del tráfico pago llega ahí.',
                ],
            ],
            [
                'title' => 'Cuándo tiene sentido usarla',
                'paragraphs' => [
                    'Lanzamiento de producto, inscripción a evento, captación de leads para venta B2B, promoción local con cupón o descarga de guía. Si necesitas educar durante muchos pasos, a veces conviene una mini-sección o varias landings segmentadas por audiencia.',
                ],
            ],
        ],
        'faqs' => [
            ['q' => '¿Landing en la misma web o dominio aparte?', 'a' => 'Lo habitual es un subpath en tu dominio (confianza y SEO de marca) o un subdominio si el equipo de marketing lo prefiere para campañas.'],
            ['q' => '¿Necesito SEO en una landing de anuncios?', 'a' => 'Para pago puro, el copy alinea con el anuncio. Igual conviene velocidad y metadatos básicos; para orgánico, sí requiere trabajo de palabras clave y enlaces.'],
        ],
        'related' => [
            ['label' => '¿Cuánto cuesta una landing page?', 'guide' => 'cuanto_landing'],
            ['label' => 'Cómo hacer una landing page', 'guide' => 'como_landing'],
            ['label' => 'Cotizar proyecto', 'path' => '/get-a-quote'],
        ],
        'lead_source' => 'guide-que-es-landing',
    ],

    'cuanto_landing' => [
        'seo' => [
            'title' => '¿Cuánto cuesta una landing page? | Nova Consulting',
            'description' => 'Qué entra en el precio de una landing: diseño, copy, integraciones, analítica y pruebas A/B. Rangos orientativos y cómo cotizar en México.',
            'keywords' => 'cuanto cuesta una landing page, precio landing page mexico, cotizar landing, pagina aterrizaje precio',
            'og_title' => '¿Cuánto cuesta una landing page?',
            'og_description' => 'Factores de precio y rangos orientativos para México.',
        ],
        'headline' => '¿Cuánto cuesta una landing page?',
        'h1' => '¿Cuánto cuesta una landing page?',
        'lede' => [
            'Una landing suele ser más barata que un sitio completo porque tiene menos pantallas, pero el precio sube si necesitas integraciones (CRM, pagos, calendario), muchas variantes para A/B testing, multilenguaje o animaciones y motion personalizados.',
            'En México verás desde propuestas muy económicas basadas en plantillas hasta landings hechas a medida con estrategia, diseño UI y configuración de analítica (GA4, pixels, conversiones).',
        ],
        'sections' => [
            [
                'title' => 'Qué suele pagarse',
                'bullets' => [
                    'Diseño y maquetación responsive.',
                    'Implementación en tu CMS o stack (WordPress, headless, Laravel, etc.).',
                    'Formularios, webhooks o conexión a hojas de cálculo/CRM.',
                    'Eventos de conversión y comprobación en entorno real.',
                ],
            ],
            [
                'title' => 'Cómo ahorrar sin recortar resultados',
                'paragraphs' => [
                    'Parte de un mensaje y un CTA claros antes de pedir “más diseño”. Una landing que carga rápido y con copy alineado al anuncio suele vencer a una página muy bonita pero lenta o confusa.',
                ],
            ],
        ],
        'faqs' => [
            ['q' => '¿Incluye redacción del texto?', 'a' => 'Depende del proveedor. Si traes el copy validado, baja costo; si necesitas research y propuestas de titulares, sube horas.'],
            ['q' => '¿Cuánto tarda?', 'a' => 'Plantilla ajustada: pocos días. A medida con integraciones: 1–3 semanas es un orden típico según revisión y contenido.'],
        ],
        'related' => [
            ['label' => '¿Qué es una landing page?', 'guide' => 'que_es_landing'],
            ['label' => 'Cómo hacer una landing page', 'guide' => 'como_landing'],
            ['label' => '¿Cuánto cuesta una página web?', 'guide' => 'cuanto_pagina_web'],
        ],
        'lead_source' => 'guide-cuanto-landing',
    ],

    'como_landing' => [
        'seo' => [
            'title' => 'Cómo hacer una landing page que convierta | Nova Consulting',
            'description' => 'Pasos prácticos: objetivo, mensaje, estructura, formulario, velocidad y medición. Guía corta para equipos que lanzan campañas en México.',
            'keywords' => 'como hacer una landing page, crear landing page, landing page que convierte, checklist landing',
            'og_title' => 'Cómo hacer una landing page',
            'og_description' => 'Checklist breve para landings que convierten.',
        ],
        'headline' => 'Cómo hacer una landing page que convierta',
        'h1' => 'Cómo hacer una landing page que convierta',
        'lede' => [
            'Una landing efectiva nace de una sola pregunta: ¿qué debe hacer la persona al llegar? El diseño y el texto sirven a esa acción. Si hay tres objetivos a la vez, la página pierde fuerza.',
            'Esta guía es un checklist corto; puedes usarlo con tu equipo interno o como briefing para un proveedor.',
        ],
        'sections' => [
            [
                'title' => '1. Define el objetivo y la oferta',
                'bullets' => [
                    'Un verbo: agendar, registrarse, comprar, descargar, solicitar cotización.',
                    'Qué recibe el usuario a cambio de su atención (beneficio explícito).',
                ],
            ],
            [
                'title' => '2. Alinea titular con la fuente de tráfico',
                'paragraphs' => [
                    'Si el anuncio promete “10% en Chiapas”, el titular debe refrendarlo en las primeras dos líneas. Romper la expectativa es la causa número uno de rebote en campañas pagadas.',
                ],
            ],
            [
                'title' => '3. Estructura escaneable',
                'bullets' => [
                    'Hero con titular, subtítulo y CTA primario.',
                    'Prueba social o autoridad cerca del primer scroll.',
                    'Bloque de objeciones (FAQ corto) si el producto es caro o poco conocido.',
                    'Repite el CTA al final; en móvil, botón sticky puede ayudar (sin tapar el formulario).',
                ],
            ],
            [
                'title' => '4. Formulario mínimo y confianza',
                'paragraphs' => [
                    'Cada campo extra baja conversión. Pide solo lo indispensable y aclara privacidad en una línea.',
                ],
            ],
            [
                'title' => '5. Velocidad y medición',
                'bullets' => [
                    'Imágenes comprimidas, fuentes moderadas, sin scripts innecesarios.',
                    'Evento de conversión en GA4 / pixel y prueba en móvil real.',
                ],
            ],
        ],
        'faqs' => [
            ['q' => '¿Una sola landing por campaña?', 'a' => 'Idealmente sí, o variantes por segmento (por ejemplo ciudad vs nacional) para mantener mensaje afilado.'],
        ],
        'related' => [
            ['label' => '¿Qué es una landing page?', 'guide' => 'que_es_landing'],
            ['label' => '¿Cuánto cuesta una landing page?', 'guide' => 'cuanto_landing'],
            ['label' => 'Cotizar con Nova Consulting', 'path' => '/get-a-quote'],
        ],
        'lead_source' => 'guide-como-landing',
    ],
];
