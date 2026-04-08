<?php

return [
    'selector_label' => 'Elige tu tipo de proyecto',
    'selector' => [
        'individual' => 'Individual',
        'smb' => 'PyMES',
        'corporate' => 'Corporativo',
    ],
    'common' => [
        'starting_at' => 'Desde',
        'primary_cta' => 'Quiero cotizar',
        'secondary_cta' => 'Hablar por WhatsApp',
        'sections_title' => 'Soluciones incluidas',
        'process_title' => 'Como trabajamos',
        'faq_title' => 'Preguntas frecuentes',
        'final_cta_title' => 'Listo para iniciar',
        'final_cta_body' => 'Creamos una propuesta clara en menos de 24 horas habiles.',
    ],
    'individual' => [
        'kicker' => 'Web de una sola pagina',
        'title' => 'Tu sitio personal que vende tu perfil en minutos.',
        'subtitle' => 'Ideal para portafolios, CVs y landing pages de marca personal o servicios independientes.',
        'price' => '1,999 MXN',
        'hero_note' => 'Haz scroll: al bajar se cierra la laptop, al subir se abre.',
        'sections' => [
            ['title' => 'Landing One-Page', 'body' => 'Estructura completa con hero, beneficios, prueba social y CTA para conversion.'],
            ['title' => 'Portafolio profesional', 'body' => 'Galeria de proyectos, casos de exito y formulario de contacto integrado.'],
            ['title' => 'CV web interactivo', 'body' => 'Perfil, experiencia, habilidades y descarga de CV en un solo sitio.'],
            ['title' => 'SEO basico local', 'body' => 'Titulos, metadatos y velocidad optimizados para busquedas en Google.'],
            ['title' => 'Entrega rapida', 'body' => 'Proyecto publicado en pocos dias con dominio y hosting configurados.'],
        ],
        'process' => [
            'Brief de objetivos y estilo visual.',
            'Diseno de estructura one-page.',
            'Desarrollo responsive y carga rapida.',
            'Publicacion y medicion inicial de conversion.',
        ],
        'faq' => [
            ['q' => 'Cuantas secciones puede tener mi landing?', 'a' => 'Las necesarias para vender bien tu propuesta sin convertirla en sitio extenso.'],
            ['q' => 'Puedo actualizar el contenido despues?', 'a' => 'Si, te dejamos una base simple para cambios rapidos.'],
        ],
    ],
    'smb' => [
        'kicker' => 'Sitio completo para PyMES',
        'title' => 'Web y software que ordenan y hacen crecer tu negocio.',
        'subtitle' => 'Para empresas que necesitan un sitio de 3 a 5 paginas, tienda en linea o sistema a la medida.',
        'price' => '5,999 MXN',
        'hero_note' => 'Haz scroll: al bajar, laptop y celular se separan; al subir se acercan.',
        'sections' => [
            ['title' => 'Sitio web 3-5 paginas', 'body' => 'Inicio, servicios, nosotros, blog y contacto con enfoque comercial.'],
            ['title' => 'Ecommerce para PyMES', 'body' => 'Catalogo, carrito, pasarelas de pago y gestion de pedidos.'],
            ['title' => 'Control de inventarios', 'body' => 'Panel para entradas, salidas, alertas y reportes operativos.'],
            ['title' => 'Automatizaciones internas', 'body' => 'Flujos para ventas, seguimiento y operacion diaria.'],
            ['title' => 'Analitica y conversion', 'body' => 'Eventos, embudos y ajustes continuos para vender mas.'],
        ],
        'process' => [
            'Discovery de operaciones y objetivos de negocio.',
            'Arquitectura de informacion y prototipos.',
            'Desarrollo web responsive y modulos clave.',
            'Lanzamiento con entrenamiento y soporte inicial.',
        ],
        'faq' => [
            ['q' => 'Incluye panel administrativo?', 'a' => 'Si, cuando el alcance del proyecto lo requiere.'],
            ['q' => 'Pueden integrar pagos o facturacion?', 'a' => 'Si, podemos integrar pasarelas y servicios externos.'],
        ],
    ],
    'corporate' => [
        'kicker' => 'Escala corporativa',
        'title' => 'Plataformas corporativas para equipos y operaciones complejas.',
        'subtitle' => 'Pensado para corporativos con multiples areas, procesos de reclutamiento IT y software empresarial.',
        'price' => '19,999 MXN',
        'hero_note' => 'Haz scroll: al bajar, el planeta rota; al subir gira en sentido inverso.',
        'sections' => [
            ['title' => 'Portales corporativos multi-pagina', 'body' => 'Arquitectura de contenido amplia, multi-area y multi-sede.'],
            ['title' => 'Equipos de desarrollo dedicados', 'body' => 'Staffing especializado para acelerar roadmap de producto y operaciones.'],
            ['title' => 'IT Staffing y reclutamiento', 'body' => 'Sourcing, filtros tecnicos y procesos de contratacion para perfiles IT.'],
            ['title' => 'Software enterprise', 'body' => 'Sistemas internos con roles, auditoria y flujos de aprobacion.'],
            ['title' => 'Gobernanza y escalabilidad', 'body' => 'Buenas practicas para seguridad, rendimiento y evolucion continua.'],
        ],
        'process' => [
            'Alineacion ejecutiva de objetivos y KPIs.',
            'Blueprint tecnico y funcional por etapas.',
            'Implementacion con equipos multidisciplinarios.',
            'Evolucion continua con metricas y mejoras.',
        ],
        'faq' => [
            ['q' => 'Trabajan con multiples equipos internos?', 'a' => 'Si, coordinamos stakeholders tecnicos, negocio y direccion.'],
            ['q' => 'Pueden operar como extension del area TI?', 'a' => 'Si, con modelos de colaboracion flexibles por proyecto o capacidad.'],
        ],
    ],
];
