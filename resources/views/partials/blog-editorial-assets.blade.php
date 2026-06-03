<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600&family=Newsreader:opsz,wght@6..72,400;500;600;700&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
    tailwind.config = {
        darkMode: 'class',
        theme: {
            extend: {
                colors: {
                    'surface-container-highest': '#e2e2e2',
                    outline: '#7e7576',
                    'on-primary-fixed-variant': '#474747',
                    'inverse-surface': '#2f3131',
                    'on-secondary-fixed': '#1b1c1c',
                    'on-surface': '#1a1c1c',
                    'on-secondary-container': '#626262',
                    'primary-fixed-dim': '#c6c6c6',
                    error: '#ba1a1a',
                    'secondary-fixed': '#e4e2e2',
                    'primary-fixed': '#e2e2e2',
                    'on-error-container': '#93000a',
                    'inverse-primary': '#c6c6c6',
                    secondary: '#5e5e5e',
                    background: '#f9f9f9',
                    'on-tertiary-fixed': '#1a1c1c',
                    'surface-container-lowest': '#ffffff',
                    'on-primary-container': '#848484',
                    'secondary-container': '#e1dfdf',
                    'on-primary-fixed': '#1b1b1b',
                    'surface-container-high': '#e8e8e8',
                    'secondary-fixed-dim': '#c7c6c6',
                    'on-secondary': '#ffffff',
                    'on-tertiary': '#ffffff',
                    'error-container': '#ffdad6',
                    'outline-variant': '#cfc4c5',
                    'surface-container-low': '#f3f3f3',
                    'tertiary-container': '#1a1c1c',
                    'surface-container': '#eeeeee',
                    'on-error': '#ffffff',
                    'on-secondary-fixed-variant': '#464747',
                    'surface-variant': '#e2e2e2',
                    surface: '#f9f9f9',
                    'tertiary-fixed': '#e3e2e2',
                    'surface-dim': '#dadada',
                    'on-tertiary-fixed-variant': '#464747',
                    'on-background': '#1a1c1c',
                    'surface-tint': '#5e5e5e',
                    'inverse-on-surface': '#f1f1f1',
                    'primary-container': '#1b1b1b',
                    'tertiary-fixed-dim': '#c7c6c6',
                    'on-primary': '#ffffff',
                    'on-tertiary-container': '#838484',
                    'surface-bright': '#f9f9f9',
                    primary: '#000000',
                    tertiary: '#000000',
                    'on-surface-variant': '#4c4546',
                },
                borderRadius: {
                    DEFAULT: '0.25rem',
                    lg: '0.5rem',
                    xl: '0.75rem',
                    full: '9999px',
                },
                spacing: {
                    'margin-desktop': '64px',
                    'stack-sm': '24px',
                    'container-max': '1280px',
                    'stack-md': '48px',
                    'stack-lg': '80px',
                    unit: '8px',
                    gutter: '32px',
                    'margin-mobile': '20px',
                },
                fontFamily: {
                    'headline-xl': ['Newsreader', 'serif'],
                    'headline-lg': ['Newsreader', 'serif'],
                    'headline-lg-mobile': ['Newsreader', 'serif'],
                    'label-md': ['Inter', 'sans-serif'],
                    'headline-sm': ['Newsreader', 'serif'],
                    'body-lg': ['Inter', 'sans-serif'],
                    'headline-md': ['Newsreader', 'serif'],
                    caption: ['Inter', 'sans-serif'],
                    'headline-xl-mobile': ['Newsreader', 'serif'],
                    'body-md': ['Inter', 'sans-serif'],
                },
                fontSize: {
                    'headline-xl': ['64px', { lineHeight: '1.1', letterSpacing: '-0.02em', fontWeight: '700' }],
                    'headline-lg': ['48px', { lineHeight: '1.2', fontWeight: '600' }],
                    'headline-lg-mobile': ['32px', { lineHeight: '1.2', fontWeight: '600' }],
                    'label-md': ['14px', { lineHeight: '1', letterSpacing: '0.05em', fontWeight: '600' }],
                    'headline-sm': ['24px', { lineHeight: '1.4', fontWeight: '500' }],
                    'body-lg': ['20px', { lineHeight: '1.6', fontWeight: '400' }],
                    'headline-md': ['32px', { lineHeight: '1.3', fontWeight: '600' }],
                    caption: ['12px', { lineHeight: '1.4', fontWeight: '400' }],
                    'headline-xl-mobile': ['40px', { lineHeight: '1.1', letterSpacing: '-0.01em', fontWeight: '700' }],
                    'body-md': ['16px', { lineHeight: '1.6', fontWeight: '400' }],
                },
            },
        },
    };
</script>
<style>
    .material-symbols-outlined {
        font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 48;
        display: inline-block;
        vertical-align: middle;
    }
    .blog-editorial-body {
        background-color: #f9f9f9;
        color: #1a1c1c;
        -webkit-font-smoothing: antialiased;
        min-height: max(884px, 100dvh);
    }
    .masonry-container {
        columns: 1;
        column-gap: 20px;
    }
    @media (min-width: 768px) {
        .masonry-container {
            columns: 2;
            column-gap: 32px;
        }
    }
    .masonry-item {
        break-inside: avoid;
        margin-bottom: 32px;
    }
    .blog-article-content h2 { font-family: Newsreader, serif; font-size: 1.5rem; font-weight: 600; margin-top: 2rem; margin-bottom: 0.75rem; }
    .blog-article-content h3 { font-family: Newsreader, serif; font-size: 1.25rem; font-weight: 500; margin-top: 1.5rem; margin-bottom: 0.5rem; }
    .blog-article-content p { margin-bottom: 1rem; line-height: 1.6; }
    .blog-article-content ul, .blog-article-content ol { margin-bottom: 1rem; padding-left: 1.25rem; }
    .blog-article-content ::selection {
        background: transparent;
        color: inherit;
    }
    .blog-article-content a { text-decoration: underline; text-underline-offset: 3px; }
    .blog-article-content img { border-radius: 0.75rem; margin: 1.5rem 0; }
    /* Vim-style block caret (JS-driven overlay; see blogVimCursor.js) */
    @keyframes blog-vim-caret-blink {
        0%, 49% { opacity: 1; }
        50%, 100% { opacity: 0; }
    }
    .blog-article-content.blog-vim-cursor-active {
        cursor: none;
    }
    .blog-article-content.blog-vim-cursor-active a,
    .blog-article-content.blog-vim-cursor-active img {
        cursor: pointer;
    }
    .blog-vim-caret {
        position: fixed;
        left: 0;
        top: 0;
        width: 11px;
        height: 1.125em;
        margin-left: -2px;
        margin-top: 0.05em;
        border-radius: 1px;
        background: #1a1c1c;
        pointer-events: none;
        z-index: 9999;
        display: none;
        opacity: 0;
        animation: blog-vim-caret-blink 1s step-end infinite;
        transform: translate(-50%, 0);
    }
    .blog-vim-caret.is-visible {
        display: block;
        opacity: 1;
    }
    .blog-vim-highlight-layer {
        position: fixed;
        inset: 0;
        pointer-events: none;
        z-index: 9998;
        overflow: hidden;
    }
    .blog-vim-highlight {
        position: fixed;
        pointer-events: none;
        border-radius: 3px 5px 4px 2px / 4px 2px 5px 3px;
        background:
            linear-gradient(
                95deg,
                rgb(255 236 140 / 0.38) 0%,
                rgb(255 220 95 / 0.32) 42%,
                rgb(255 208 80 / 0.28) 100%
            );
        box-shadow:
            0 1px 0 rgb(255 200 60 / 0.15),
            inset 0 -1px 0 rgb(220 160 20 / 0.06);
        mix-blend-mode: normal;
        filter: url(#blog-vim-highlight-rough);
        opacity: 0.42;
        transition: opacity 0.12s ease;
    }
    @media (prefers-reduced-motion: reduce) {
        .blog-article-content.blog-vim-cursor-active {
            cursor: text;
        }
        .blog-vim-caret,
        .blog-vim-highlight-layer {
            display: none !important;
            animation: none;
        }
    }
    .blog-hero-image {
        border-radius: 1rem;
        overflow: hidden;
        border: 1px solid rgb(0 0 0 / 0.12);
        box-shadow: 0 12px 40px rgb(0 0 0 / 0.08);
    }
    .blog-hero-image img {
        display: block;
        width: 100%;
        max-height: min(52vh, 28rem);
        object-fit: cover;
    }
    .blog-glass-actions {
        list-style: none;
        margin: 0;
        padding: 0.25rem;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 0.25rem;
        border-radius: 9999px;
        border: 1px solid rgb(255 255 255 / 0.45);
        background: linear-gradient(165deg, rgb(255 255 255 / 0.42), rgb(255 255 255 / 0.18));
        -webkit-backdrop-filter: blur(14px) saturate(1.35);
        backdrop-filter: blur(14px) saturate(1.35);
        box-shadow:
            0 2px 12px rgb(0 0 0 / 0.06),
            0 1px 0 rgb(255 255 255 / 0.65) inset;
        width: fit-content;
        max-width: 100%;
    }
    .blog-article-surface {
        position: relative;
        overflow: hidden;
        border-radius: 1.65rem;
        border: 1px solid rgb(255 255 255 / 0.58);
        background:
            linear-gradient(
                155deg,
                rgb(255 255 255 / 0.82) 0%,
                rgb(255 255 255 / 0.5) 38%,
                rgb(248 248 248 / 0.62) 72%,
                rgb(255 255 255 / 0.45) 100%
            );
        box-shadow:
            0 18px 56px rgb(0 0 0 / 0.09),
            0 2px 0 rgb(255 255 255 / 0.88) inset,
            inset 0 0 0 1px rgb(255 255 255 / 0.12);
    }
    .blog-article-surface::before {
        content: '';
        position: absolute;
        inset: -38% 8% auto;
        height: 58%;
        border-radius: 50%;
        background: radial-gradient(
            ellipse 85% 65% at 50% 0%,
            rgb(255 255 255 / 0.75) 0%,
            transparent 68%
        );
        opacity: 0.92;
        pointer-events: none;
        z-index: 0;
    }
    .blog-article-surface__inner {
        position: relative;
        z-index: 1;
    }
    .blog-ide-sidebar {
        border-radius: 0.85rem;
        border: 1px solid rgb(255 255 255 / 0.08);
        background: linear-gradient(180deg, #2d2d2d 0%, #1e1e1e 100%);
        box-shadow:
            0 16px 48px rgb(0 0 0 / 0.2),
            0 1px 0 rgb(255 255 255 / 0.06) inset;
        overflow: hidden;
        font-family: 'JetBrains Mono', ui-monospace, monospace;
        font-size: 0.6875rem;
        line-height: 1.55;
    }
    .blog-ide-sidebar__titlebar {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.55rem 0.75rem;
        background: rgb(0 0 0 / 0.25);
        border-bottom: 1px solid rgb(255 255 255 / 0.06);
        color: rgb(255 255 255 / 0.55);
        font-size: 0.625rem;
    }
    .blog-ide-sidebar__dot {
        width: 0.55rem;
        height: 0.55rem;
        border-radius: 9999px;
        background: rgb(255 255 255 / 0.18);
    }
    .blog-ide-sidebar__dot--close { background: #ff5f57; }
    .blog-ide-sidebar__dot--min { background: #febc2e; }
    .blog-ide-sidebar__dot--max { background: #28c840; }
    .blog-ide-sidebar__body {
        display: flex;
        min-height: 12rem;
        max-height: 28rem;
        overflow: auto;
    }
    .blog-ide-sidebar__gutter {
        flex-shrink: 0;
        padding: 0.75rem 0.5rem 0.75rem 0.65rem;
        text-align: right;
        color: rgb(255 255 255 / 0.22);
        user-select: none;
        border-right: 1px solid rgb(255 255 255 / 0.05);
    }
    .blog-ide-sidebar__code {
        flex: 1;
        padding: 0.75rem 0.85rem 0.85rem 0.65rem;
        color: #d4d4d4;
        white-space: pre;
        overflow-x: auto;
    }
    .blog-ide-kw { color: #569cd6; }
    .blog-ide-fn { color: #dcdcaa; }
    .blog-ide-str { color: #ce9178; }
    .blog-ide-cm { color: #6a9955; }
    .blog-ide-var { color: #9cdcfe; }
    .blog-ide-num { color: #b5cea8; }
    .blog-ide-exc { color: #f48771; }
    .blog-ide-link {
        color: #4fc1ff;
        text-decoration: underline;
        text-underline-offset: 2px;
    }
    .blog-ide-link:hover { color: #9cdcfe; }
</style>
