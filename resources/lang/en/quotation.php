<?php

return [
    // Header & Stepper
    'title' => 'Request a Quotation',
    'btn_return_home' => 'Return to Home',
    'step_info' => 'Info',
    'step_service' => 'Service',
    'step_details' => 'Details',
    'step_summary' => 'Summary',
    
    // Step 1: Personal Info
    'personal_info' => 'Personal Information',
    'label_name' => 'Full Name',
    'label_company' => 'Company Name',
    'label_email' => 'Email Address',
    'label_phone' => 'Phone Number',
    'label_referral' => 'How did you hear about us?',
    
    // Step 1: Dropdown Options
    'select_option' => 'Select an option',
    'ref_google' => 'Google Search',
    'ref_linkedin' => 'LinkedIn',
    'ref_friend' => 'Friend / Colleague',
    'ref_ads' => 'Online Ads',
    
    // Step 2: Service Selection (Keys match the $key in the blade loop)
    'select_service_title' => 'How can we help you?',
    'service_web_dev' => 'Web Development',
    'service_web_dev_desc' => 'Custom websites, e-commerce, and apps.',
    'service_staff_aug' => 'Staff Augmentation',
    'service_staff_aug_desc' => 'I need developers to work on my team.',
    'service_recruitment' => 'Recruitment',
    'service_recruitment_desc' => 'I need you to hire someone for me.',
    
    // Summary Service Labels (Used in Step 4)
    'service_web' => 'Web Development', 
    'service_staff' => 'Staff Augmentation',
    'service_hiring' => 'Recruitment',

    // Step 3: Web Development
    'details_web_title' => 'Project Requirements',
    'web_features_label' => 'What features do you need?',
    'feature_landing_page' => 'Landing Page',
    'feature_ecommerce' => 'E-Commerce',
    'feature_cms' => 'CMS (Admin Panel)',
    'feature_api_integration' => 'API Integrations',
    'feature_payment_gateway' => 'Payment Gateway',
    'feature_analytics' => 'Advanced Analytics',
    'web_extra_req' => 'Additional Requirements',
    
    // Step 3: Staff Augmentation
    'details_staff_title' => 'Team Composition',
    'staff_roles_label' => 'Which roles do you need?',
    'role_jr_dev' => 'Junior Developer',
    'role_sr_dev' => 'Senior Developer',
    'role_scrum_master' => 'Scrum Master',
    'role_qa_engineer' => 'QA Engineer',
    'role_devops' => 'DevOps Specialist',
    
    // Step 3: Recruitment
    'details_recruit_title' => 'Position Details',
    'recruit_stack' => 'Technical Stack / Skills',
    'recruit_location' => 'Preferred Location',
    'recruit_age' => 'Age Range',
    'recruit_budget' => 'Monthly/Yearly Budget',
    'recruit_timezone' => 'Preferred Timezone',
    'recruit_hardware' => 'Hardware Provision',
    'recruit_urgency' => 'Urgency',
    'recruit_langs' => 'Languages Spoken',
    
    // Recruitment Options
    'hw_company_provides' => 'Company provides computer',
    'hw_candidate_owns' => 'Candidate must own computer',
    'urgency_high' => 'High (ASAP)',
    'urgency_medium' => 'Medium (Within a month)',
    'urgency_low' => 'Low (Future planning)',
    
    // Step 4: Summary & Agreements
    'summary_title' => 'Review Request',
    'label_service' => 'Selected Service',
    'consent_nova' => 'I would like to have a Nova account.',
    
    // Dynamic Agreement Texts
    'agree_web' => 'I agree to be contacted via email or phone to get a final quotation.',
    'agree_staff' => 'I agree to be contacted via email or phone to get my developers assigned to my team.',
    'agree_recruit' => 'I agree to be contacted via email or phone to get my position published.',
    
    // Buttons & UI
    'btn_back' => 'Back',
    'btn_next' => 'Next Step',
    'btn_submit' => 'Submit Request',
    
    // JavaScript Errors
    'error_fill_required' => 'Please fill in the required fields (Name and Email).',
    'error_select_service' => 'Please select a service type to proceed.',
];