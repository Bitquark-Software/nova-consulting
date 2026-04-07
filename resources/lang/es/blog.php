<?php

return [
    'cheap_labor_page' => [
        'seo_title' => 'Mano de obra barata para desarrollar software - Nova Consulting',
        'seo_description' => 'Guía para contratar talento “barato” sin caer en outsourcing fallido. Explicamos nuestro modelo de colaboración: contratos de renovación mensual o anual, equipo fijo y entregables por fases.',
        'seo_keywords' => 'mano de obra barata, contratar desarrolladores, equipo de desarrollo, outsourcing no, staffing IT, desarrollo software en conjunto, contratos mensuales, contratos anuales',

        'hero_badge' => 'Guía · Contratar talento competitivo con proceso',
        'hero_title' => 'Cómo contratar “mano de obra barata” para desarrollar software sin pagar el doble después',
        'hero_subtitle' => 'Si buscas costos bajos, también necesitas claridad, entregables reales, revisión de código y una forma de trabajar que reduzca riesgos. Aquí te explicamos cómo lo hacemos nosotros (y por qué NO es outsourcing).',

        'hero_cta_contact' => 'Hablar con Nova',
        'hero_cta_quote' => 'Cotizar en línea',
        'hero_cta_services' => 'Ver servicios',

        'toc_title' => 'En esta guía',
        'toc' => [
            ['id' => 'que-significa', 'label' => 'Qué significa “barata” en software'],
            ['id' => 'riesgos', 'label' => 'Riesgos típicos al “ir por lo barato”'],
            ['id' => 'modelo-nova', 'label' => 'Nuestro modelo (colaboración, no outsourcing)'],
            ['id' => 'contrato', 'label' => 'Cómo funciona el contrato mensual/anual'],
            ['id' => 'entregables', 'label' => 'Qué entregamos (y qué NO prometemos)'],
            ['id' => 'para-quien', 'label' => 'Para quién encaja esta forma de trabajar'],
            ['id' => 'checklist', 'label' => 'Checklist para evaluar propuestas'],
            ['id' => 'ejemplo', 'label' => 'Ejemplo de un mes de trabajo'],
        ],

        'sections' => [
            [
                'id' => 'que-significa',
                'title' => 'Qué significa “mano de obra barata” en desarrollo de software',
                'paragraphs' => [
                    'Cuando alguien dice “mano de obra barata”, normalmente está hablando de una mezcla de cosas: tarifa por hora, costo del equipo, distancia geográfica, y también (aunque nadie lo dice tan claro) el nivel de proceso que vas a recibir.',
                    'El problema es que “barato” puede significar muchas cosas distintas. Puede ser eficiente y transparente… o puede ser que te falte control sobre calidad, comunicación y alcance. Por eso, el objetivo no debería ser “el menor precio”, sino “el mejor costo total” (lo que realmente cuesta producir, mantener y evolucionar el sistema).',
                ],
                'bullets' => [
                    'Barato sin proceso suele traducirse en re-trabajo.',
                    'Barato sin claridad de entregables termina en alcance infinito.',
                    'Barato sin revisión de código acumula deuda técnica.',
                ],
            ],
            [
                'id' => 'riesgos',
                'title' => 'Riesgos típicos al “ir por lo barato”',
                'paragraphs' => [
                    'En proyectos donde el equipo es barato pero el proceso es débil, el costo sube después. No porque “falten ganas”, sino porque el equipo trabaja con poca visibilidad, poca documentación y poca responsabilidad sobre la calidad final.',
                    'Algunas señales comunes: promesas vagas (“lo hacemos rápido”), dificultad para explicar decisiones técnicas, cambios de último minuto sin justificación y falta de pruebas. Si ya te pasó, sabes que ese “ahorro” se convierte en tiempo perdido para tu equipo interno y en costos extra para corregir.',
                ],
                'bullets' => [
                    'Código que “funciona” pero no se puede sostener.',
                    'Métricas de avance que no significan progreso real.',
                    'Respuestas lentas o incompletas porque no hay canales de seguimiento.',
                    'Integraciones sin estrategia (pagos, ERP, CRM) y fallos en producción.',
                ],
            ],
            [
                'id' => 'modelo-nova',
                'title' => 'Nuestro modelo: colaboramos bajo contratos, no es outsourcing',
                'paragraphs' => [
                    'Para nosotros, “barato” no significa “sin control”. Por eso trabajamos como un equipo que colabora contigo con un esquema de contratación claro: contratos de renovación mensual y/o anual, con un equipo acordado desde el inicio.',
                    'No somos un outsourcing tradicional donde el cliente “pide” y el proveedor “entrega una caja” sin contexto. En su lugar, definimos objetivos, alineamos criterios de calidad, construimos con revisiones y entregamos por fases para que puedas medir avance, no solo esperar.',
                ],
                'bullets' => [
                    'Colaboración real: visibilidad de avances y decisiones.',
                    'Renovación mensual o anual para que el costo sea predecible.',
                    'Entrega por fases: alcance, hitos y calidad definidos por escrito.',
                ],
            ],
            [
                'id' => 'contrato',
                'title' => 'Cómo funciona el contrato mensual/anual',
                'paragraphs' => [
                    'Empezamos con un entendimiento del objetivo del software, el tipo de usuarios y el contexto del negocio. Luego definimos el alcance por fases, el equipo que vamos a asignar y la cadencia de entregas.',
                    'El esquema de trabajo es simple: pagas mensualmente por el equipo contratado (con renovación). Si el proyecto avanza y se mantiene la necesidad, renovamos en ciclos definidos. Si lo necesitas para un periodo específico, también puede cerrar al cumplirse el año o el mes pactado.',
                ],
                'bullets' => [
                    'Renovaciones mensuales: ideal para iterar y ajustar el equipo.',
                    'Renovaciones anuales: ideal para roadmap estable y mejoras continuas.',
                    'Onboarding y alineación inicial antes de escribir “código al azar”.',
                    'Canal claro de seguimiento para dudas, bloqueos y cambios de prioridad.',
                ],
            ],
            [
                'id' => 'entregables',
                'title' => 'Qué entregamos (y qué NO prometemos)',
                'paragraphs' => [
                    'Entregamos software que se puede sostener. Eso incluye arquitectura entendible, código mantenible, pruebas, documentación mínima útil y revisiones. También cuidamos la comunicación: si hay riesgos, los decimos y proponemos alternativas.',
                    'No prometemos “magia” ni que el tiempo sea infinito con costo bajo. Lo que hacemos es ser claros: qué se puede lograr con el equipo contratado, en qué plazo y con qué criterio de calidad. Así evitas pagar el doble por retrabajo.',
                ],
                'bullets' => [
                    'Diseño y desarrollo por fases (avance visible).',
                    'QA y pruebas: antes de llegar a producción.',
                    'Revisión de código y estándares para evitar deuda técnica excesiva.',
                    'Documentación mínima útil para que el sistema sobreviva.',
                ],
            ],
            [
                'id' => 'para-quien',
                'title' => 'Para quién encaja esta forma de trabajo',
                'paragraphs' => [
                    'Esta colaboración es ideal para equipos que quieren crecer sin improvisar. Por ejemplo: startups con roadmap, empresas en expansión, CTOs que necesitan velocidad sin perder calidad, y equipos que ya tienen parte del sistema pero requieren desarrollo y mejoras continuas.',
                    'Si lo que buscas es “solo programar” sin un plan ni criterios de calidad, probablemente no encaja. Si buscas construir un producto con coherencia técnica, sí.',
                ],
                'bullets' => [
                    'MVPs y evolución de productos existentes.',
                    'Sistemas con integraciones (pagos, CRM, ERP, etc.).',
                    'Mejoras continuas y mantenimiento con métricas.',
                ],
            ],
            [
                'id' => 'checklist',
                'title' => 'Checklist para evaluar propuestas de “mano de obra barata”',
                'paragraphs' => [
                    'Antes de decidir, pide evidencia de proceso. No se trata de que el proveedor diga “hacemos QA” o “documentamos”; se trata de ver cómo lo hacen y cómo lo vas a medir.',
                    'Con esta lista reduces el riesgo de caer en propuestas baratas pero frágiles.',
                ],
                'bullets' => [
                    '¿Define entregables por fases (no solo “horas”)?',
                    '¿Explica criterios de calidad y cómo se valida (pruebas/revisión)?',
                    '¿Cómo manejan cambios de alcance y prioridades?',
                    '¿Qué documentación mínima te entregan y para qué?',
                    '¿Cómo comunican avances (hitos, entregas, bloqueos)?',
                    '¿Qué pasa si aparece un riesgo técnico? ¿Tienen plan A/B?',
                ],
            ],
            [
                'id' => 'ejemplo',
                'title' => 'Ejemplo: cómo se vería un mes de trabajo',
                'paragraphs' => [
                    'Semana 1: contexto y alineación (objetivos, usuarios, integraciones conocidas). Definimos criterios de calidad y confirmamos el alcance por fase.',
                    'Semana 2-3: construcción en ciclos cortos. Entregamos incrementos funcionales, revisamos código, ejecutamos pruebas y documentamos lo esencial para mantener el ritmo.',
                    'Semana 4: puesta en marcha y evolución. Cerramos hitos, medimos resultados y definimos mejoras del siguiente ciclo. Si el roadmap lo justifica, renovamos el contrato para continuar.',
                ],
            ],
        ],

        'faq_title' => 'Preguntas frecuentes (antes de contratar)',
        'faqs' => [
            [
                'q' => '¿Es outsourcing? ¿Cómo se diferencia?',
                'a' => 'No es outsourcing tradicional. Nosotros colaboramos contigo mediante un equipo contratado y un contrato de renovación mensual o anual. Hay entregables por fases, revisiones y un canal de seguimiento para mantener contexto y calidad.',
            ],
            [
                'q' => '¿Cómo controlamos el riesgo si el equipo es “barato”?',
                'a' => 'El “control” viene del proceso: definimos entregables por fases, criterios de calidad, revisiones de código y pruebas. Además, trabajamos con comunicación clara para ajustar prioridades sin perder rumbo.',
            ],
            [
                'q' => '¿Qué equipo se asigna?',
                'a' => 'Depende del proyecto y el alcance por fase: normalmente incluye perfiles de desarrollo, y cuando aplica, QA, analítica técnica y apoyo de arquitectura para decisiones importantes.',
            ],
            [
                'q' => '¿Se puede renovar un proyecto a mediano plazo?',
                'a' => 'Sí. Si el producto sigue evolucionando, renovamos en ciclos mensuales o anuales con un alcance acordado. Así el costo se mantiene predecible y el avance se sostiene.',
            ],
        ],

        'final_title' => 'Quieres competitividad sin sacrificar calidad',
        'final_sub' => 'Cuéntanos tu objetivo y el tipo de sistema que necesitas. Respondemos con un plan por fases y el esquema de colaboración que mejor se ajusta al equipo que quieres contratar.',
        'final_cta_contact' => 'Ir a contacto',
        'final_cta_quote' => 'Cotizar en línea',
    ],

    'vibe_coding_page' => [
        'seo_title' => 'El arte de hacer vibe coding (y no romper tu producto) - Nova Consulting',
        'seo_description' => 'Guía práctica para construir con IA sin perder calidad. Te mostramos cómo impulsamos proyectos con vibe coding y cómo rescatamos sistemas vibecodeados que ya presentan errores.',
        'seo_keywords' => 'vibe coding, desarrollo con ia, proyecto vibecodeado, arreglar software con ia, rescate de software, auditoria tecnica',

        'hero_badge' => 'Guía · IA aplicada a producto real',
        'hero_title' => 'El arte de hacer vibe coding: velocidad con criterio técnico',
        'hero_subtitle' => 'Vibe coding no es escribir prompts y cruzar los dedos. Bien ejecutado, acelera entregas. Mal ejecutado, crea deuda técnica. Aquí te explicamos cómo usar IA para avanzar y cómo podemos rescatar tu proyecto si ya viene vibecodeado.',

        'hero_cta_contact' => 'Revisar mi proyecto',
        'hero_cta_quote' => 'Solicitar diagnóstico',
        'hero_cta_services' => 'Ver cómo trabajamos',

        'toc_title' => 'Qué vas a encontrar en esta guía',
        'toc' => [
            ['id' => 'que-es', 'label' => 'Qué es vibe coding (en serio)'],
            ['id' => 'cuando-funciona', 'label' => 'Cuándo sí funciona'],
            ['id' => 'riesgos', 'label' => 'Errores típicos en proyectos vibecodeados'],
            ['id' => 'modelo-nova', 'label' => 'Cómo impulsamos un proyecto con IA'],
            ['id' => 'rescate', 'label' => 'Si ya tienes un proyecto vibecodeado, cómo lo arreglamos'],
            ['id' => 'senales', 'label' => 'Señales de que necesitas intervención técnica'],
            ['id' => 'plan-30', 'label' => 'Plan de rescate en 30 días'],
        ],

        'sections' => [
            [
                'id' => 'que-es',
                'title' => 'Qué es vibe coding (sin humo)',
                'paragraphs' => [
                    'Vibe coding es construir software con ayuda intensiva de IA para idear, generar y refinar código más rápido. El problema no es la IA: el problema es usarla sin arquitectura, sin pruebas y sin revisión.',
                    'Cuando hay proceso, la IA te da velocidad. Cuando no lo hay, te deja un sistema que “medio funciona” pero cuesta mantener, depurar y escalar.',
                ],
                'bullets' => [
                    'La IA acelera la ejecución, no reemplaza decisiones de producto.',
                    'Prompting sin criterio técnico no sustituye una arquitectura sólida.',
                    'Velocidad sin validación termina en retrabajo caro.',
                ],
            ],
            [
                'id' => 'cuando-funciona',
                'title' => 'Cuándo sí funciona y te da ventaja real',
                'paragraphs' => [
                    'Vibe coding funciona excelente para prototipos, flujos internos, automatizaciones y primeras versiones de producto, siempre que exista una capa de control técnico.',
                    'Nosotros lo usamos para iterar rápido, pero con estándares: estructura modular, revisión de código, pruebas clave y entregables por fase.',
                ],
                'bullets' => [
                    'MVPs con tiempo corto y enfoque comercial.',
                    'Automatizaciones operativas y herramientas internas.',
                    'Evolución de productos existentes con backlog claro.',
                ],
            ],
            [
                'id' => 'riesgos',
                'title' => 'Errores comunes en proyectos ya vibecodeados',
                'paragraphs' => [
                    'Lo más frecuente: lógica duplicada, dependencias innecesarias, seguridad débil, integraciones frágiles y cero trazabilidad de cambios.',
                    'A simple vista “ya está hecho”, pero en producción aparecen fallos de rendimiento, bugs intermitentes y miedo a tocar cualquier módulo por riesgo a romper todo.',
                ],
                'bullets' => [
                    'Código generado en bloques grandes sin cohesión.',
                    'Validaciones incompletas en formularios, pagos o autenticación.',
                    'Ausencia de pruebas automatizadas en rutas críticas.',
                    'Sin observabilidad: nadie sabe por qué falla.',
                ],
            ],
            [
                'id' => 'modelo-nova',
                'title' => 'Cómo impulsamos tu proyecto con IA sin perder control',
                'paragraphs' => [
                    'Trabajamos con IA, pero bajo método: definimos objetivos de negocio, priorizamos módulos, delimitamos alcance por sprint y validamos cada entrega con criterios de calidad.',
                    'Eso nos permite avanzar rápido sin comprometer mantenibilidad. No vendemos “magia”; vendemos visibilidad, trazabilidad y resultados medibles.',
                ],
                'bullets' => [
                    'Discovery técnico + mapa de riesgos.',
                    'Roadmap por fases con métricas de avance.',
                    'Revisión de arquitectura y calidad de código.',
                    'QA funcional para los flujos que sí importan al negocio.',
                ],
            ],
            [
                'id' => 'rescate',
                'title' => '¿Ya tienes un proyecto vibecodeado? Así lo arreglamos',
                'paragraphs' => [
                    'Tenemos una línea específica de rescate para proyectos construidos con IA sin base técnica suficiente. Empezamos con una auditoría de código, seguridad y rendimiento para detectar lo crítico primero.',
                    'Después estabilizamos el sistema, corregimos arquitectura y dejamos una base sostenible para seguir iterando con IA, pero ahora con gobierno técnico.',
                ],
                'bullets' => [
                    'Auditoría técnica inicial con hallazgos priorizados.',
                    'Correcciones de estabilidad y seguridad en producción.',
                    'Refactor por capas para reducir deuda técnica.',
                    'Plan de continuidad para que no vuelvas al mismo problema.',
                ],
            ],
            [
                'id' => 'senales',
                'title' => 'Señales de que ya necesitas ayuda especializada',
                'paragraphs' => [
                    'Si tu equipo evita tocar partes del sistema por miedo a romper algo, si cada nueva función genera tres bugs nuevos, o si no puedes estimar tiempos con confianza, necesitas intervención.',
                    'No se trata de empezar de cero: se trata de recuperar control y bajar el riesgo operativo cuanto antes.',
                ],
                'bullets' => [
                    'Deploys con rollback frecuente.',
                    'Bugs repetidos en los mismos módulos.',
                    'Sin documentación mínima para onboardear equipo.',
                    'Costos crecientes sin mejoras proporcionales.',
                ],
            ],
            [
                'id' => 'plan-30',
                'title' => 'Nuestro plan de rescate en 30 días',
                'paragraphs' => [
                    'Semana 1: auditoría técnica y priorización de riesgos. Semana 2: estabilización de flujos críticos. Semana 3: refactor dirigido y pruebas. Semana 4: documentación operativa y plan de evolución.',
                    'El objetivo es simple: en 30 días recuperar confianza técnica y dejar bases para escalar sin improvisar.',
                ],
            ],
        ],

        'faq_title' => 'Preguntas frecuentes sobre vibe coding y rescate técnico',
        'faqs' => [
            [
                'q' => '¿Vibe coding es bueno o malo?',
                'a' => 'Es una herramienta. Bien gobernada, acelera. Sin proceso, genera deuda técnica. La diferencia está en arquitectura, pruebas y revisión.',
            ],
            [
                'q' => '¿Pueden arreglar algo que ya hizo otro equipo con IA?',
                'a' => 'Sí. De hecho es un caso frecuente. Iniciamos con auditoría, priorizamos riesgo y ejecutamos un plan de estabilización + refactor.',
            ],
            [
                'q' => '¿Tengo que rehacer todo desde cero?',
                'a' => 'Casi nunca. Normalmente se puede rescatar una parte importante y reconstruir solo lo que realmente está comprometiendo estabilidad o seguridad.',
            ],
            [
                'q' => '¿En cuánto tiempo veo mejoras?',
                'a' => 'En las primeras semanas ya se notan mejoras en estabilidad y claridad técnica. El impacto completo depende del tamaño y deuda del proyecto.',
            ],
        ],

        'final_title' => 'Si tu proyecto está vibecodeado, no estás tarde',
        'final_sub' => 'Podemos ayudarte a convertir ese código en un producto mantenible y listo para crecer. Hagamos una revisión técnica y te damos un plan claro de rescate o aceleración con IA.',
        'final_cta_contact' => 'Hablar con un especialista',
        'final_cta_quote' => 'Pedir diagnóstico',
    ],

    'index_page' => [
        'hero_badge' => 'Blog',
        'hero_title' => 'Blog, guías y presencia local',
        'hero_subtitle' => 'Artículos editoriales, guías con rangos orientativos de precios y páginas por ciudad para que compares contexto, no solo cotizaciones aisladas.',
        'note_title' => 'Reclutamiento IT para empresas',
        'note_body' => 'El servicio de reclutamiento y filtrado técnico sigue disponible desde el menú en escritorio o el pie de página.',
        'note_cta' => 'Ir a reclutamiento',
        'sections' => [
            [
                'id' => 'articles',
                'title' => 'Artículos',
                'intro' => 'Textos largos sobre modelo de trabajo, riesgos comunes al contratar y cómo usar IA sin perder gobierno técnico.',
                'items' => [
                    [
                        'type' => 'route',
                        'route' => 'blog.cheap_labor',
                        'badge' => 'Artículo',
                        'title' => 'Contratar desarrollo con costo competitivo (sin outsourcing opaco)',
                        'excerpt' => 'Contratos claros, entregables por fases, revisión de código y por qué “barato” debe medirse como costo total, no solo tarifa.',
                        'cta' => 'Leer artículo',
                    ],
                    [
                        'type' => 'route',
                        'route' => 'blog.vibe_coding',
                        'badge' => 'Artículo',
                        'title' => 'Vibe coding, IA y rescate de proyectos',
                        'excerpt' => 'Cuándo la velocidad con IA ayuda, cuándo genera deuda técnica y cómo auditamos y estabilizamos productos ya construidos con asistencia de modelos.',
                        'cta' => 'Leer artículo',
                    ],
                ],
            ],
            [
                'id' => 'guides',
                'title' => 'Guías y precios',
                'intro' => 'Referencias rápidas para entender rangos y factores de costo en México antes de pedir una propuesta formal.',
                'items' => [
                    [
                        'type' => 'guide',
                        'guide' => 'cuanto_pagina_web',
                        'badge' => 'Guía',
                        'title' => '¿Cuánto cuesta una página web?',
                        'excerpt' => 'Sitios corporativos, catálogos y tiendas: qué mueve el precio y cómo pedir números comparables entre proveedores.',
                        'cta' => 'Abrir guía',
                    ],
                    [
                        'type' => 'guide',
                        'guide' => 'cuanto_aplicacion',
                        'badge' => 'Guía',
                        'title' => '¿Cuánto cuesta una aplicación?',
                        'excerpt' => 'Apps web y móviles: integraciones, roles, offline, notificaciones y mantenimiento como variables de alcance.',
                        'cta' => 'Abrir guía',
                    ],
                    [
                        'type' => 'guide',
                        'guide' => 'que_es_landing',
                        'badge' => 'Guía',
                        'title' => 'Qué es una landing page (y cuándo conviene)',
                        'excerpt' => 'Objetivo único, medición, velocidad y mensaje: cuándo una landing resuelve mejor que un sitio grande.',
                        'cta' => 'Abrir guía',
                    ],
                    [
                        'type' => 'guide',
                        'guide' => 'cuanto_landing',
                        'badge' => 'Guía',
                        'title' => '¿Cuánto cuesta una landing page?',
                        'excerpt' => 'Rangos y factores: copy, diseño, integraciones de formulario/CRM, experimentación y SEO de conversión.',
                        'cta' => 'Abrir guía',
                    ],
                    [
                        'type' => 'guide',
                        'guide' => 'como_landing',
                        'badge' => 'Guía',
                        'title' => 'Cómo hacer una landing page que convierta',
                        'excerpt' => 'Estructura, pruebas, señales de confianza y seguimiento analítico sin sobrediseñar el primer release.',
                        'cta' => 'Abrir guía',
                    ],
                ],
            ],
            [
                'id' => 'cities',
                'title' => 'Software y presencia digital por ciudad',
                'intro' => 'Páginas locales con el mismo estándar de mensaje y SEO: ideales si buscas proveedor en tu mercado o comparamos remote-first vs. cercanía regional.',
                'items' => [
                    [
                        'type' => 'route',
                        'route' => 'landing.software.tuxtla.chiapas',
                        'badge' => 'Local · Tuxtla',
                        'title' => 'Empresa de software en Tuxtla Gutiérrez y Chiapas',
                        'excerpt' => 'Desarrollo a la medida, productos web y acompañamiento técnico con base en la región y entrega remota a nivel nacional.',
                        'cta' => 'Ver página',
                    ],
                    [
                        'type' => 'route',
                        'route' => 'landing.webdesign.tuxtla.chiapas',
                        'badge' => 'Local · Tuxtla',
                        'title' => 'Diseño de páginas web en Tuxtla Gutiérrez',
                        'excerpt' => 'Sitios corporativos, vitrinas y landings enfocadas en rendimiento, claridad de mensaje y contacto directo.',
                        'cta' => 'Ver página',
                    ],
                    [
                        'type' => 'city',
                        'city' => 'gdl',
                        'badge' => 'Guadalajara',
                        'title' => 'Empresa de software en Guadalajara',
                        'excerpt' => 'Equipo remoto con procesos claros para escalar producto desde Jalisco: integraciones, nube y calidad de entrega.',
                        'cta' => 'Ver página',
                    ],
                    [
                        'type' => 'city',
                        'city' => 'mty',
                        'badge' => 'Monterrey',
                        'title' => 'Empresa de software en Monterrey',
                        'excerpt' => 'Sistemas a la medida y soporte técnico alineado a operaciones industriales y servicios en Nuevo León.',
                        'cta' => 'Ver página',
                    ],
                    [
                        'type' => 'city',
                        'city' => 'cdmx',
                        'badge' => 'Ciudad de México',
                        'title' => 'Empresa de software en CDMX',
                        'excerpt' => 'Proyectos para empresas en la capital: descubrimiento, implementación y continuidad sin fricción operativa.',
                        'cta' => 'Ver página',
                    ],
                    [
                        'type' => 'city',
                        'city' => 'merida',
                        'badge' => 'Mérida',
                        'title' => 'Empresa de software en Mérida',
                        'excerpt' => 'Desarrollo y diseño digital para organizaciones en el sureste con enfoque en escalabilidad y mantenimiento.',
                        'cta' => 'Ver página',
                    ],
                ],
            ],
        ],
    ],
];
