<?php

return [
    'selector_label' => 'Choose your project type',
    'selector' => [
        'individual' => 'Individual',
        'smb' => 'SMBs',
        'corporate' => 'Corporate',
    ],
    'common' => [
        'starting_at' => 'Starting at',
        'primary_cta' => 'Get a quote',
        'secondary_cta' => 'Chat on WhatsApp',
        'sections_title' => 'Included solutions',
        'process_title' => 'How we work',
        'faq_title' => 'Frequently asked questions',
        'final_cta_title' => 'Ready to start',
        'final_cta_body' => 'We prepare a clear proposal in less than 24 business hours.',
    ],
    'individual' => [
        'kicker' => 'One-page website',
        'title' => 'A personal website that sells your profile fast.',
        'subtitle' => 'Perfect for portfolios, CV websites, and personal-brand landing pages.',
        'price' => '1,999 MXN',
        'hero_note' => 'Scroll down to close the laptop, scroll up to open it.',
        'sections' => [
            ['title' => 'One-page landing', 'body' => 'Complete structure with hero, benefits, proof, and conversion CTA.'],
            ['title' => 'Professional portfolio', 'body' => 'Project gallery, case highlights, and integrated contact form.'],
            ['title' => 'Interactive CV site', 'body' => 'Profile, experience, skills, and downloadable resume in one place.'],
            ['title' => 'Basic local SEO', 'body' => 'Optimized headings, metadata, and speed for Google visibility.'],
            ['title' => 'Fast delivery', 'body' => 'Go live in days with domain and hosting setup.'],
        ],
        'process' => [
            'Briefing on goals and visual style.',
            'One-page structure design.',
            'Responsive development and speed optimization.',
            'Launch and initial conversion measurement.',
        ],
        'faq' => [
            ['q' => 'How many sections can my landing have?', 'a' => 'As many as needed to convert well without turning it into a large site.'],
            ['q' => 'Can I update content later?', 'a' => 'Yes, we leave you with a simple base for quick updates.'],
        ],
    ],
    'smb' => [
        'kicker' => 'Full website for SMBs',
        'title' => 'Web and software that organize and grow your business.',
        'subtitle' => 'For companies that need a 3-5 page website, e-commerce, or custom software.',
        'price' => '5,999 MXN',
        'hero_note' => 'Scroll down to move laptop and phone apart, scroll up to bring them closer.',
        'sections' => [
            ['title' => '3-5 page website', 'body' => 'Home, services, about, blog, and contact with commercial focus.'],
            ['title' => 'SMB e-commerce', 'body' => 'Catalog, cart, payment gateways, and order management.'],
            ['title' => 'Inventory control', 'body' => 'Dashboard for stock movements, alerts, and operational reports.'],
            ['title' => 'Internal automations', 'body' => 'Workflows for sales follow-up and daily operations.'],
            ['title' => 'Analytics and conversion', 'body' => 'Events, funnels, and continuous optimization to sell more.'],
        ],
        'process' => [
            'Discovery session for operations and business goals.',
            'Information architecture and wireframes.',
            'Responsive development with key modules.',
            'Launch, training, and initial support.',
        ],
        'faq' => [
            ['q' => 'Does this include an admin panel?', 'a' => 'Yes, when the project scope requires it.'],
            ['q' => 'Can you integrate payments or invoicing?', 'a' => 'Yes, we can integrate gateways and external services.'],
        ],
    ],
    'corporate' => [
        'kicker' => 'Enterprise scale',
        'title' => 'Corporate platforms for complex teams and operations.',
        'subtitle' => 'Designed for large organizations with multi-page ecosystems, IT staffing, and business software.',
        'price' => '19,999 MXN',
        'hero_note' => 'Scroll down to rotate the planet; scroll up to rotate in reverse.',
        'sections' => [
            ['title' => 'Multi-page corporate portals', 'body' => 'Broad information architecture for multiple areas and locations.'],
            ['title' => 'Dedicated software teams', 'body' => 'Specialized staffing to accelerate product and operations roadmaps.'],
            ['title' => 'IT staffing and recruiting', 'body' => 'Sourcing, technical screening, and hiring support for IT roles.'],
            ['title' => 'Enterprise software', 'body' => 'Internal systems with roles, audits, and approval workflows.'],
            ['title' => 'Governance and scalability', 'body' => 'Security, performance, and long-term evolution best practices.'],
        ],
        'process' => [
            'Executive alignment on goals and KPIs.',
            'Phased technical and functional blueprint.',
            'Implementation with multidisciplinary teams.',
            'Continuous evolution with metrics and optimization.',
        ],
        'faq' => [
            ['q' => 'Do you work with multiple internal teams?', 'a' => 'Yes, we coordinate technical, business, and executive stakeholders.'],
            ['q' => 'Can you operate as an extension of our IT area?', 'a' => 'Yes, with flexible collaboration models by project or capacity.'],
        ],
    ],
];
