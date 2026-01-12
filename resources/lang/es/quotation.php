<?php

return [
    // Header & Stepper
    'title' => 'Solicitar Cotización',
    'btn_return_home' => 'Volver al Inicio',
    'step_info' => 'Info',
    'step_service' => 'Servicio',
    'step_details' => 'Detalles',
    'step_summary' => 'Resumen',
    
    // Step 1: Personal Info
    'personal_info' => 'Información Personal',
    'label_name' => 'Nombre Completo',
    'label_company' => 'Nombre de la Empresa',
    'label_email' => 'Correo Electrónico',
    'label_phone' => 'Teléfono',
    'label_referral' => '¿Cómo te enteraste de nosotros?',
    
    // Step 1: Dropdown Options
    'select_option' => 'Selecciona una opción',
    'ref_google' => 'Búsqueda en Google',
    'ref_linkedin' => 'LinkedIn',
    'ref_friend' => 'Amigo / Colega',
    'ref_ads' => 'Anuncios en línea',
    
    // Step 2: Service Selection (Keys match the $key in the blade loop)
    'select_service_title' => '¿En qué podemos ayudarte?',
    'service_web_dev' => 'Desarrollo Web',
    'service_web_dev_desc' => 'Sitios a la medida, e-commerce y aplicaciones.',
    'service_staff_aug' => 'Staff Augmentation', // Commonly left in English or "Extensión de Equipo"
    'service_staff_aug_desc' => 'Necesito desarrolladores para trabajar en mi equipo.',
    'service_recruitment' => 'Reclutamiento',
    'service_recruitment_desc' => 'Necesito que contraten a alguien por mí.',
    
    // Summary Service Labels (Used in Step 4)
    'service_web' => 'Desarrollo Web', 
    'service_staff' => 'Staff Augmentation',
    'service_hiring' => 'Reclutamiento',

    // Step 3: Web Development
    'details_web_title' => 'Requisitos del Proyecto',
    'web_features_label' => '¿Qué funcionalidades necesitas?',
    'feature_landing_page' => 'Landing Page',
    'feature_ecommerce' => 'E-Commerce (Tienda en línea)',
    'feature_cms' => 'CMS (Panel de Administración)',
    'feature_api_integration' => 'Integración de APIs',
    'feature_payment_gateway' => 'Pasarela de Pagos',
    'feature_analytics' => 'Analítica Avanzada',
    'web_extra_req' => 'Requisitos Adicionales',
    
    // Step 3: Staff Augmentation
    'details_staff_title' => 'Composición del Equipo',
    'staff_roles_label' => '¿Qué roles necesitas?',
    'role_jr_dev' => 'Desarrollador Junior',
    'role_sr_dev' => 'Desarrollador Senior',
    'role_scrum_master' => 'Scrum Master',
    'role_qa_engineer' => 'Ingeniero QA',
    'role_devops' => 'Especialista DevOps',
    
    // Step 3: Recruitment
    'details_recruit_title' => 'Detalles de la Vacante',
    'recruit_stack' => 'Stack Tecnológico / Habilidades',
    'recruit_location' => 'Ubicación Preferida',
    'recruit_age' => 'Rango de Edad',
    'recruit_budget' => 'Presupuesto Mensual/Anual',
    'recruit_timezone' => 'Zona Horaria Preferida',
    'recruit_hardware' => 'Equipo de Cómputo',
    'recruit_urgency' => 'Urgencia',
    'recruit_langs' => 'Idiomas',
    
    // Recruitment Options
    'hw_company_provides' => 'La empresa provee el equipo',
    'hw_candidate_owns' => 'El candidato debe tener equipo propio',
    'urgency_high' => 'Alta (ASAP)',
    'urgency_medium' => 'Media (Dentro de un mes)',
    'urgency_low' => 'Baja (Planeación futura)',
    
    // Step 4: Summary & Agreements
    'summary_title' => 'Revisar Solicitud',
    'label_service' => 'Servicio Seleccionado',
    'consent_nova' => 'Me gustaría crear una cuenta en Nova.',
    
    // Dynamic Agreement Texts
    'agree_web' => 'Acepto ser contactado por correo o teléfono para recibir una cotización final.',
    'agree_staff' => 'Acepto ser contactado por correo o teléfono para asignar desarrolladores a mi equipo.',
    'agree_recruit' => 'Acepto ser contactado por correo o teléfono para publicar mi vacante.',
    
    // Buttons & UI
    'btn_back' => 'Atrás',
    'btn_next' => 'Siguiente',
    'btn_submit' => 'Enviar Solicitud',
    
    // JavaScript Errors
    'error_fill_required' => 'Por favor completa los campos requeridos (Nombre y Correo).',
    'error_select_service' => 'Por favor selecciona un tipo de servicio para continuar.',
];