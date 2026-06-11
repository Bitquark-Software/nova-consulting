<?php

return [
    'brand' => 'Publish your AI-built app',
    'nav' => [
        'use_cases' => 'Use cases',
        'paths' => 'Paths',
        'process' => 'Process',
        'faq' => 'FAQ',
        'cta' => 'Get a quote',
    ],
    'marquee' => ['Server', 'Domain', 'SSL', 'App Store', 'Google Play', 'CI/CD', 'Vercel', 'AWS'],
    'hero' => [
        'kicker' => 'From AI prototype to real production',
        'title' => 'Publish your app',
        'title_accent' => 'on the web and in app stores.',
        'subtitle' => 'Built an app with ChatGPT, Cursor, Bolt, Lovable, or another AI tool? We help you deploy it on a server with your own domain, or publish it on the App Store and Google Play.',
        'cta_primary' => 'Quote on WhatsApp',
        'cta_secondary' => 'Online quote',
        'cta_tertiary' => 'Book a call',
        'lang_switch' => 'Español',
    ],
    'use_cases' => [
        'kicker' => 'Use cases',
        'title' => 'Who is this for?',
        'items' => [
            [
                'icon' => 'language',
                'title' => 'Web app in production',
                'body' => 'You have an AI-generated web app and want anyone to use it via a real URL—not just on localhost.',
            ],
            [
                'icon' => 'domain',
                'title' => 'Your own domain and brand',
                'body' => 'You want yourapp.com with SSL, professional email, and a credible presence for customers or investors.',
            ],
            [
                'icon' => 'phone_iphone',
                'title' => 'App Store (iOS)',
                'body' => 'Your mobile prototype needs to pass Apple review: developer account, signing, icons, policies, and store submission.',
            ],
            [
                'icon' => 'android',
                'title' => 'Google Play (Android)',
                'body' => 'Ship on Android with keystore, store listing, screenshots, and Google policy compliance.',
            ],
            [
                'icon' => 'build',
                'title' => 'AI code that won\'t build',
                'body' => 'AI generated the project but builds fail, dependencies break, or production errors appear. We stabilize it before launch.',
            ],
            [
                'icon' => 'rocket_launch',
                'title' => 'MVP ready for users',
                'body' => 'You validated an idea with AI and need a professional first deployment to test with real users and measure traction.',
            ],
        ],
    ],
    'paths' => [
        'kicker' => 'Two paths',
        'title' => 'The open web or official stores',
        'web' => [
            'title' => 'Server and domain',
            'body' => 'Best for web apps, dashboards, SaaS, landing pages, and internal tools. We set up hosting, DNS, SSL, environment variables, and automated deploys.',
            'bullets' => [
                'Hosting on Vercel, AWS, DigitalOcean, or another provider matched to your stack',
                'Domain (.com, .mx, or other TLD) with redirects and subdomains',
                'Database, APIs, and secrets configured securely',
                'Basic monitoring and backups depending on the plan',
            ],
        ],
        'stores' => [
            'title' => 'App Store and Google Play',
            'body' => 'For native or hybrid mobile apps (React Native, Flutter, Expo, etc.). We handle the technical path and each store\'s requirements.',
            'bullets' => [
                'Apple and Google developer accounts',
                'Signed builds, versioning, and review submission',
                'Icons, splash screens, screenshots, and listing copy',
                'Privacy policies, permissions, and fixes after rejection',
            ],
        ],
    ],
    'process' => [
        'title' => 'How we get you to production',
        'steps' => [
            [
                'title' => 'Assessment',
                'body' => 'We review your code, stack, repo state, and goal (web, domain, iOS, Android, or all of the above).',
            ],
            [
                'title' => 'Stabilization',
                'body' => 'We fix builds, dependencies, basic security, and configuration so the project is publishable.',
            ],
            [
                'title' => 'Deployment',
                'body' => 'We publish to a server with your domain or prepare and submit builds to the official stores.',
            ],
            [
                'title' => 'Handoff and support',
                'body' => 'You receive access, documentation, and optional ongoing maintenance.',
            ],
        ],
    ],
    'cta' => [
        'title' => 'Ready for your app to live outside your laptop?',
        'body' => 'Tell us what you built with AI and where you want to publish. No-obligation quote.',
        'primary' => 'WhatsApp',
        'secondary' => 'Web quote',
        'tertiary' => 'Contact',
    ],
    'faq' => [
        'title' => 'Frequently asked questions',
        'items' => [
            [
                'q' => 'Can I publish an app that only exists in an AI chat?',
                'a' => 'Yes, as long as we have access to exported code (repository, ZIP, or platform). If you only have screenshots or a description, we first help rebuild or complete the project.',
            ],
            [
                'q' => 'Do you build the app from scratch?',
                'a' => 'This service focuses on publishing and stabilizing what you already generated with AI. Additional development is quoted as a separate project.',
            ],
            [
                'q' => 'How long does web vs. store publishing take?',
                'a' => 'A web deploy with a domain can be ready in days if the code is relatively healthy. App Store and Google Play usually take longer due to builds, developer accounts, and review cycles (especially Apple).',
            ],
            [
                'q' => 'Do I need my own domain and hosting?',
                'a' => 'Not at the start: we can use subdomains or managed hosting. For a serious brand and SEO, we recommend your own domain and guide you through purchase and setup.',
            ],
            [
                'q' => 'What if Apple or Google rejects my app?',
                'a' => 'We analyze the rejection reason, adjust permissions, copy, policies, or code, and resubmit. Rejections are a normal part of the store process.',
            ],
            [
                'q' => 'Do you work with Expo, React Native, Flutter, Next.js, etc.?',
                'a' => 'Yes. We adapt the process to the stack you bring from Cursor, Bolt, Lovable, Replit, v0, or other AI tools.',
            ],
            [
                'q' => 'Is maintenance included after launch?',
                'a' => 'Initial publishing is a scoped project. We offer support plans, updates, and new deploys if you need them.',
            ],
        ],
    ],
    'seo' => [
        'title' => 'Publish an AI-built app | Server, domain, App Store & Google Play — Nova Consulting',
        'description' => 'Built an app with artificial intelligence? We help you publish it on the web with server and domain, or on the App Store and Google Play. Assessment, stabilization, and deployment.',
        'keywords' => 'publish AI app, ChatGPT app deployment, deploy AI-built app, App Store submission, Google Play, web app domain, vibe coding production, Nova Consulting',
        'og_title' => 'Publish your AI-built app — Nova Consulting',
        'og_description' => 'From AI prototype to production: server, domain, App Store, and Google Play. Get a deployment quote from Nova Consulting.',
    ],
];
