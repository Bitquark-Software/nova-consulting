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
];
