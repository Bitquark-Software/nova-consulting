# Nova Consulting — Design System
**Version 1.0 · May 2026**

> A living document that governs every pixel, word, and interaction on novaconsulting.com.mx. Inspired by Apple's Human Interface Guidelines in rigour; distinct in voice and identity.

---

## 0. Current Site Audit

### Weaknesses Found

| Area | Issue |
|------|-------|
| **Hero / First Impression** | The homepage opens immediately on a tiered pricing widget (Individual / PyMES / Corporativo) with no hero statement, no brand promise, no visual identity moment. Visitors land with zero context of who Nova is. |
| **Trust signals** | No client logos, no case studies, no metrics ("X projects delivered", "Y years"), no testimonials above the fold or anywhere on the homepage. |
| **Visual hierarchy** | The three audience tabs feel like a pricing table, not a narrative. The page reads like a brochure rather than a story. |
| **Typography** | No visible type system. Body text, headings, and labels appear to share the same weight and sizing cadence — no rhythm. |
| **Color & brand** | Unable to confirm palette from markup alone, but OG/preview image and logo use suggests an under-defined brand identity. No memorable accent or brand moment. |
| **CTAs** | Two competing CTAs per section ("Quiero cotizar" + "Hablar por WhatsApp") dilute decision-making. Primary actions aren't clearly prioritised. |
| **Social proof** | Completely absent on the homepage. A footer with social links doesn't substitute for testimonials or outcomes. |
| **Navigation** | Dual nav bars (desktop + mobile bottom bar) suggest inconsistent UX logic. "Cotiza" appears in both but the visual treatment differs. |
| **Copywriting** | Functional but generic. No brand voice, no memorable headline, no emotional hook. "Recibe una propuesta en 24 horas" is buried as a form header, not a hero statement. |
| **Content form** | The 24-hour contact form is long (5 fields) and positioned after three dense content tabs — conversion friction is high. |
| **Footer bloat** | Five footer columns with 20+ links, including SEO city pages, create visual noise and no clear hierarchy. |
| **No motion / delight** | Static page with no scroll animations, no micro-interactions, no visual personality. |

### Opportunities

- Lead with a bold, memorable hero: *"Construimos el software que tu empresa necesita."* + a single primary CTA.
- Add a trust bar: logos of clients or industries served immediately below the hero.
- Restructure the three tiers as cards or a clear comparison — not tabbed content that hides value.
- Surface one strong social proof element (testimonial, project outcome, metrics banner).
- Simplify contact flow: a floating WhatsApp CTA + one short form field to start the conversation.
- Introduce scroll-triggered animations to guide attention and signal craft.
- Create a cohesive typographic scale and color system that signals technical expertise and confidence.

---

## 1. Brand Principles

Nova Consulting operates at the intersection of technical precision and human outcomes. The design language reflects this duality:

1. **Precise** — Every element earns its place. Spacing, type, and color follow a strict system.
2. **Confident** — Bold choices over hedged ones. Strong hierarchy over visual noise.
3. **Human** — Software is built by and for people. Warmth lives in copy and motion, not decoration.
4. **Expert** — Visual signals of craft communicate competence before a word is read.

---

## 2. Typography

### Primary Typeface — IBM Plex Mono

IBM Plex Mono is used as the **sole typeface family** across the entire interface. Its humanist construction and monospaced rhythm signal technical precision while remaining warm and readable. The family's weight and style range covers all typographic needs without importing additional fonts.

```
font-family: 'IBM Plex Mono', 'IBM Plex Mono SSm', monospace;
```

> **Licensing note:** IBM Plex Mono is a commercial typeface by Hoefler & Co. / Typography.com. Ensure a valid web font license is in place before deploying to production.

### Type Scale

A **Major Third (1.250)** modular scale. All values in `rem` (base: 16px).

| Token | Size | Line Height | Weight | Style | Usage |
|-------|------|-------------|--------|-------|-------|
| `--text-display` | 4.768rem (76px) | 1.05 | 600 | Normal | Hero headline |
| `--text-h1` | 3.815rem (61px) | 1.10 | 600 | Normal | Page titles |
| `--text-h2` | 3.052rem (49px) | 1.15 | 500 | Normal | Section headings |
| `--text-h3` | 2.441rem (39px) | 1.20 | 500 | Normal | Card titles |
| `--text-h4` | 1.953rem (31px) | 1.25 | 400 | Normal | Sub-headings |
| `--text-h5` | 1.563rem (25px) | 1.30 | 400 | Normal | Labels, overlines |
| `--text-body-lg` | 1.25rem (20px) | 1.60 | 400 | Normal | Lead paragraphs |
| `--text-body` | 1rem (16px) | 1.65 | 400 | Normal | Body copy |
| `--text-body-sm` | 0.875rem (14px) | 1.55 | 400 | Normal | Captions, meta |
| `--text-mono` | 0.875rem (14px) | 1.50 | 400 | Italic | Code labels, badges |
| `--text-micro` | 0.75rem (12px) | 1.40 | 400 | Normal | Legal, footnotes |

### Typographic Rules

- **Headings** never exceed 65 characters per line on desktop.
- **Body** copy is capped at 72 characters per line (max-width on containers).
- Use **IBM Plex Mono Italic** sparingly — for code-like labels, key terms, or inline accents. It reads as a meaningful typographic signal.
- Letter-spacing: `0em` for body, `-0.02em` for large headings, `0.08em` for ALL-CAPS labels.
- Use `font-feature-settings: "liga" 1, "calt" 1` to enable IBM Plex Mono's ligatures where available.

### Typographic Hierarchy Example

```
// Hero
<span class="overline">Software para empresas en Chiapas</span>
<h1>Construimos el software<br>que tu empresa necesita.</h1>
<p class="lead">Desde landing pages hasta sistemas empresariales —<br>con un equipo que entiende negocio, no solo código.</p>
```

---

## 3. Color System

### Philosophy

Nova uses a **dark-first** palette anchored in near-black with a single charged accent. Supporting neutrals and semantic colors complete the system. The palette signals credibility, technical depth, and focus.

### Core Palette

```css
:root {
  /* ── Backgrounds ─────────────────────────────────── */
  --color-bg-base:        #0A0A0C;   /* Primary canvas — deep ink */
  --color-bg-raised:      #111115;   /* Cards, panels */
  --color-bg-overlay:     #1A1A20;   /* Modals, drawers */
  --color-bg-subtle:      #222228;   /* Hover states, dividers */

  /* ── Brand Accent ───────────────────────────────── */
  --color-accent:         #00E5A0;   /* Electric teal — primary brand */
  --color-accent-dim:     #00B87E;   /* Hover / pressed accent */
  --color-accent-glow:    #00E5A020; /* Glow / soft bg */
  --color-accent-text:    #00E5A0;   /* Accent on dark surfaces */

  /* ── Text ───────────────────────────────────────── */
  --color-text-primary:   #F0F0F5;   /* Main content */
  --color-text-secondary: #9090A0;   /* Supporting copy, captions */
  --color-text-tertiary:  #505060;   /* Disabled, placeholders */
  --color-text-inverse:   #0A0A0C;   /* Text on accent backgrounds */

  /* ── Borders ────────────────────────────────────── */
  --color-border-default: rgba(255,255,255,0.08);
  --color-border-strong:  rgba(255,255,255,0.16);
  --color-border-accent:  rgba(0,229,160,0.30);

  /* ── Semantic ───────────────────────────────────── */
  --color-success:        #00E5A0;   /* Shares accent intentionally */
  --color-warning:        #F5C542;
  --color-error:          #FF5A5F;
  --color-info:           #4DA6FF;

  /* ── Gradients ──────────────────────────────────── */
  --gradient-hero: radial-gradient(ellipse 80% 50% at 50% -10%, rgba(0,229,160,0.12) 0%, transparent 70%);
  --gradient-card: linear-gradient(145deg, #111115 0%, #0A0A0C 100%);
  --gradient-accent-line: linear-gradient(90deg, #00E5A0, #4DA6FF);
}
```

### Light Mode (Optional Surface)

For documents, blog posts, or a future light variant:

```css
[data-theme="light"] {
  --color-bg-base:        #FAFAFA;
  --color-bg-raised:      #FFFFFF;
  --color-bg-overlay:     #F0F0F5;
  --color-text-primary:   #0A0A0C;
  --color-text-secondary: #505060;
  --color-border-default: rgba(0,0,0,0.08);
  /* accent stays the same */
}
```

### Color Usage Rules

- The accent `#00E5A0` appears on **one** primary CTA per screen, on key metric highlights, and on active nav states. Never overuse it.
- Text on the accent color **must** be `--color-text-inverse` (dark) for contrast compliance.
- All text/background combinations must meet **WCAG AA** (4.5:1 for body, 3:1 for large text).
- Do not use color alone to convey meaning — always pair with an icon or label.

---

## 4. Spacing System

Based on a **4px base unit**. All spacing is a multiple of 4.

```css
:root {
  --space-1:   4px;
  --space-2:   8px;
  --space-3:  12px;
  --space-4:  16px;
  --space-5:  20px;
  --space-6:  24px;
  --space-8:  32px;
  --space-10: 40px;
  --space-12: 48px;
  --space-16: 64px;
  --space-20: 80px;
  --space-24: 96px;
  --space-32: 128px;
}
```

### Section Spacing

| Context | Value |
|---------|-------|
| Section top/bottom padding (desktop) | `--space-32` (128px) |
| Section top/bottom padding (mobile) | `--space-20` (80px) |
| Between heading and first paragraph | `--space-6` (24px) |
| Between paragraphs | `--space-4` (16px) |
| Card internal padding | `--space-8` (32px) |
| Nav height | 64px |
| Mobile bottom bar height | 56px |

### Layout Grid

```css
.container {
  max-width: 1200px;
  margin: 0 auto;
  padding-inline: var(--space-8); /* 32px gutters */
}

/* 12-column grid */
.grid {
  display: grid;
  grid-template-columns: repeat(12, 1fr);
  gap: var(--space-6);
}
```

---

## 5. Elevation & Surfaces

Three levels of surface elevation, expressed through subtle background shifts and border treatments — **never box shadows on dark backgrounds** (use glow instead).

```css
/* Level 0 — Base canvas */
.surface-base {
  background: var(--color-bg-base);
}

/* Level 1 — Cards, panels */
.surface-raised {
  background: var(--color-bg-raised);
  border: 1px solid var(--color-border-default);
  border-radius: var(--radius-lg);
}

/* Level 2 — Overlays, modals */
.surface-overlay {
  background: var(--color-bg-overlay);
  border: 1px solid var(--color-border-strong);
  border-radius: var(--radius-xl);
  backdrop-filter: blur(20px);
}

/* Accent glow — for featured cards or CTA areas */
.surface-accent-glow {
  background: var(--color-bg-raised);
  border: 1px solid var(--color-border-accent);
  box-shadow: 0 0 0 1px var(--color-border-accent),
              0 0 40px -10px var(--color-accent-glow);
}
```

### Border Radius

```css
:root {
  --radius-sm:  4px;
  --radius-md:  8px;
  --radius-lg:  12px;
  --radius-xl:  20px;
  --radius-2xl: 28px;
  --radius-pill: 9999px;
}
```

---

## 6. Iconography

- Use **Phosphor Icons** (phosphoricons.com) — duotone style, weight: Regular.
- Icon size follows a 4px grid: 16px, 20px, 24px, 32px, 48px.
- Icons used standalone must include an `aria-label`.
- Icon color matches the text context: `--color-text-secondary` for decorative, `--color-accent` for action-indicating icons.
- No outlined icons mixed with filled icons in the same context.

---

## 7. Components

### 7.1 Buttons

Three variants. One primary per screen.

```css
/* Primary — main CTA */
.btn-primary {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  padding: var(--space-4) var(--space-8);
  background: var(--color-accent);
  color: var(--color-text-inverse);
  font: 500 var(--text-body) / 1 'IBM Plex Mono', monospace;
  letter-spacing: 0.01em;
  border-radius: var(--radius-pill);
  border: none;
  cursor: pointer;
  transition: background 160ms ease, transform 120ms ease;
}
.btn-primary:hover { background: var(--color-accent-dim); transform: translateY(-1px); }
.btn-primary:active { transform: translateY(0); }

/* Secondary — ghost */
.btn-secondary {
  padding: var(--space-4) var(--space-8);
  background: transparent;
  color: var(--color-text-primary);
  border: 1px solid var(--color-border-strong);
  border-radius: var(--radius-pill);
  transition: border-color 160ms ease, background 160ms ease;
}
.btn-secondary:hover {
  background: var(--color-bg-subtle);
  border-color: var(--color-text-secondary);
}

/* Tertiary — text link */
.btn-tertiary {
  background: none;
  border: none;
  color: var(--color-accent);
  font: 400 var(--text-body) / 1 'IBM Plex Mono', monospace;
  display: inline-flex;
  align-items: center;
  gap: var(--space-1);
  cursor: pointer;
  transition: opacity 160ms ease;
}
.btn-tertiary:hover { opacity: 0.75; }
```

**Button Rules:**
- Only one `.btn-primary` per viewport section.
- WhatsApp CTA uses `.btn-secondary` with a WhatsApp icon — not a competing primary.
- Minimum touch target: 44×44px on mobile.
- Loading state: replace label with a spinner, disable pointer events.

### 7.2 Navigation

```
Desktop: Fixed top bar, 64px height
├── Logo (left)
├── Nav links centered: Servicios · Blog · Nosotros · Contacto
└── CTA button right: "Cotiza tu proyecto →" (btn-primary, small)

Mobile: Fixed bottom bar, 56px
├── Inicio (icon + label)
├── Servicios (icon + label)
├── Cotiza (accent pill — prominent center)
├── Blog (icon + label)
└── Contacto (icon + label)
```

- Nav background: `var(--color-bg-base)` with `backdrop-filter: blur(20px)` when scrolled past 80px, border-bottom `var(--color-border-default)`.
- Active link: `var(--color-accent)` with no underline.
- Hide "Reclutamiento" from the main nav; it belongs under "Servicios" dropdown.

### 7.3 Service Cards

Replace the current tab-based layout with three always-visible cards in a 3-column grid (single column on mobile).

```
┌─────────────────────────┐
│  INDIVIDUAL             │  ← overline, IBM Plex Mono Italic
│                         │
│  Tu sitio personal que  │  ← h3
│  vende tu perfil.       │
│                         │
│  Desde $1,999 MXN       │  ← accent color, h4
│                         │
│  • Landing One-Page     │  ← feature list, 4 items max
│  • Portafolio           │
│  • SEO básico           │
│  • Entrega rápida       │
│                         │
│  [Cotizar →]            │  ← btn-primary
└─────────────────────────┘
```

- Featured card (PyMES): use `.surface-accent-glow`.
- Expand/accordion for FAQ — don't show all items on load.

### 7.4 Form

Reduce the 24-hour proposal form to a **2-step flow**:

**Step 1** (above the fold or in a modal):
- Name
- WhatsApp number
- "¿Qué necesitas?" — 3-button selector: Sitio web · Software a medida · No sé aún

**Step 2** (after step 1 submits):
- Budget range
- One text area: "Cuéntanos brevemente sobre tu proyecto"
- Submit → opens WhatsApp with pre-filled message

### 7.5 Trust Bar

A horizontal band below the hero with social proof:

```
┌─────────────────────────────────────────────────────────┐
│  +50 proyectos      3 años         24h respuesta      │
│  entregados         de experiencia  garantizada         │
└─────────────────────────────────────────────────────────┘
```

Or: a logo strip of client industries / recognizable client names.

### 7.6 Testimonials

A single prominent testimonial block with:
- Pull quote in `--text-h4`, IBM Plex Mono Italic
- Avatar + name + company
- Star rating (if applicable)

---

## 8. Motion & Animation

### Principles

1. **Purposeful** — Motion communicates state change or guides attention. Never decorative loops.
2. **Fast** — Most transitions: 120–200ms. Page-level reveals: 400–600ms.
3. **Natural** — Prefer `cubic-bezier(0.25, 0, 0, 1)` (ease-out) for entrances; `cubic-bezier(0.4, 0, 1, 1)` for exits.

### Standard Easing

```css
:root {
  --ease-out:    cubic-bezier(0.25, 0.00, 0.00, 1.00);
  --ease-in:     cubic-bezier(0.40, 0.00, 1.00, 1.00);
  --ease-spring: cubic-bezier(0.34, 1.56, 0.64, 1.00); /* slight overshoot */
}
```

### Scroll Reveal Pattern

```css
.reveal {
  opacity: 0;
  transform: translateY(24px);
  transition: opacity 500ms var(--ease-out),
              transform 500ms var(--ease-out);
}
.reveal.visible {
  opacity: 1;
  transform: translateY(0);
}
```

Apply via `IntersectionObserver` with `threshold: 0.15`. Stagger sibling reveals with `transition-delay: calc(var(--index) * 80ms)`.

### Hover States

- **Cards**: `transform: translateY(-4px)` + strengthen border to `--color-border-strong`.
- **Buttons**: `translateY(-1px)` for primary; opacity fade for tertiary.
- **Nav links**: color transition to `--color-accent`, 120ms.

### Loading / Skeleton

Use a shimmer animation on skeleton screens:

```css
@keyframes shimmer {
  0%   { background-position: -400px 0; }
  100% { background-position: 400px 0; }
}
.skeleton {
  background: linear-gradient(90deg,
    var(--color-bg-raised) 25%,
    var(--color-bg-subtle) 50%,
    var(--color-bg-raised) 75%
  );
  background-size: 800px 100%;
  animation: shimmer 1.4s infinite linear;
}
```

---

## 9. Page Structure — Homepage

### Recommended Section Order

```
1. HERO
   ├── Overline: "Software para empresas en México"
   ├── Headline (display size): "Construimos el software que tu empresa necesita."
   ├── Sub-copy (body-lg): One sentence value prop.
   ├── CTA row: [Cotizar proyecto →] [Ver servicios]
   └── Scroll hint: animated chevron

2. TRUST BAR
   └── 3–4 proof metrics or client logo strip

3. SERVICES (3 cards, always visible)
   └── Individual · PyMES (featured) · Corporativo

4. HOW IT WORKS (3-step horizontal flow)
   └── Brief → Propuesta → Entrega

5. TESTIMONIAL (1 featured quote)

6. CONTACT FORM (simplified, 2-step)

7. FOOTER (reduced to 3 columns max)
```

---

## 10. Imagery & Visual Language

- **No stock photography.** Use abstract geometric compositions, code-inspired textures, or custom illustrations.
- **Hero background:** `--gradient-hero` radial glow from top-center. Optional: a subtle animated grid or dot-matrix pattern at low opacity.
- **Section dividers:** A 1px horizontal rule using `--color-border-default`, or a gradient fade to transparent — never a solid block background change.
- **Aspect ratios:** Illustrations in cards follow 16:9 or square. Avatar images: 1:1 with `border-radius: var(--radius-pill)`.
- **Dark mode only** for the main site. A print stylesheet or light surface may be used for blog/docs content.

---

## 11. Accessibility

| Standard | Target |
|----------|--------|
| WCAG Level | AA (strive for AAA on body text) |
| Contrast — body text | ≥ 4.5:1 |
| Contrast — large text (18px+) | ≥ 3:1 |
| Focus outlines | `outline: 2px solid var(--color-accent); outline-offset: 3px;` |
| Motion | Respect `prefers-reduced-motion` — disable all transforms and transitions |
| Semantic HTML | Use `<main>`, `<nav>`, `<section aria-labelledby>`, `<footer>` |
| Form labels | Every input has a `<label>` — never placeholder-only |
| Images | All `<img>` have descriptive `alt` attributes |

```css
@media (prefers-reduced-motion: reduce) {
  *, *::before, *::after {
    animation-duration: 0.01ms !important;
    transition-duration: 0.01ms !important;
  }
}
```

---

## 12. SEO & Performance Guidelines

- **Core Web Vitals targets:** LCP < 2.5s · INP < 200ms · CLS < 0.1
- Load IBM Plex Mono via `font-display: swap` to prevent FOIT.
- Preload the hero font variant: `<link rel="preload" as="font" type="font/woff2" href="ibm-plex-mono-medium.woff2" crossorigin>`.
- Use `next/font` or equivalent to self-host IBM Plex Mono — no third-party font CDN dependency.
- All images: WebP format, responsive `srcset`, explicit `width`/`height` attributes to prevent CLS.
- Critical CSS inlined in `<head>`; remaining styles deferred.
- Open Graph: each page has unique `og:title`, `og:description`, and `og:image` (1200×630).

---

## 13. Copy & Voice

Nova's copy voice is: **clear, direct, technically competent, never arrogant.**

| Principle | Do | Don't |
|-----------|-----|-------|
| Lead with outcomes | "Lanzamos tu sitio en días." | "Ofrecemos servicios de desarrollo web." |
| Speak to the reader | "Tu negocio merece software que funcione." | "Nuestros clientes se benefician de…" |
| Specificity builds trust | "Propuesta en 24 horas hábiles." | "Respuesta rápida." |
| No filler superlatives | — | "El mejor equipo de software en Chiapas." |
| Use numbers | "Desde $1,999 MXN · Entrega en 5 días" | "Precios accesibles · Entrega rápida" |

- Headlines use sentence case (not Title Case).
- CTAs are action verbs: "Cotizar proyecto", "Ver servicios", "Hablar ahora" — not "Enviar" or "Click aquí".
- Accents and proper punctuation are always used (á, é, ó, ú, ñ, ¿, ¡).

---

## 14. Token Reference (Quick Cheat Sheet)

```
TYPOGRAPHY
  Display     4.768rem / 600 weight / -0.02em tracking
  H1          3.815rem / 600 weight
  H2          3.052rem / 500 weight
  Body LG     1.25rem / 400 weight / 1.60 line-height
  Body        1.00rem / 400 weight / 1.65 line-height
  Mono/Label  0.875rem / 400 italic / 0.08em tracking

COLOR
  Background  #0A0A0C
  Surface     #111115
  Accent      #00E5A0
  Text        #F0F0F5
  Muted       #9090A0

SPACING (4px grid)
  xs=4  sm=8  md=16  lg=32  xl=64  2xl=128

RADII
  sm=4  md=8  lg=12  xl=20  pill=9999

MOTION
  Fast    120ms ease-out
  Default 200ms ease-out
  Reveal  500ms ease-out + translateY(24px)
```

---

*This document should be reviewed and updated with each major design sprint. When in doubt, ask: "Does this add clarity or noise?"*

**Nova Consulting · novaconsulting.com.mx**

---

## 15. Tailwind CSS Configuration

The design system maps directly to Tailwind's config object. Add this to `tailwind.config.js` (or `tailwind.config.ts`):

```js
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./src/**/*.{js,ts,jsx,tsx,html}'],
  darkMode: 'class',
  theme: {
    extend: {
      fontFamily: {
        mono: ['"IBM Plex Mono"', '"IBM Plex Mono SSm"', '"IBM Plex Mono"', 'monospace'],
      },
      colors: {
        accent:   '#00E5A0',
        'accent-dim': '#00B87E',
        bg:       '#0A0A0C',
        surface:  '#111115',
        overlay:  '#1A1A20',
        subtle:   '#222228',
        nova: {
          text:   '#F0F0F5',
          muted:  '#9090A0',
          faint:  '#505060',
        }
      },
      fontSize: {
        display: ['clamp(2.8rem,7vw,5.5rem)', { lineHeight: '1.04', letterSpacing: '-0.03em', fontWeight: '600' }],
        h1:      ['clamp(2rem,4.5vw,3.5rem)',  { lineHeight: '1.08', letterSpacing: '-0.025em' }],
        h2:      ['clamp(1.5rem,3vw,2.4rem)',  { lineHeight: '1.15', letterSpacing: '-0.02em' }],
        h3:      ['clamp(1.1rem,1.8vw,1.45rem)', { lineHeight: '1.25' }],
        'body-lg': ['clamp(1rem,1.4vw,1.2rem)', { lineHeight: '1.65' }],
      },
      borderRadius: {
        'sm':   '4px',
        'md':   '8px',
        'lg':   '12px',
        'xl':   '20px',
        '2xl':  '28px',
        'pill': '9999px',
      },
      spacing: {
        '18': '72px',
        '22': '88px',
        '26': '104px',
        '30': '120px',
      },
      keyframes: {
        'fade-up':   { from: { opacity: '0', transform: 'translateY(32px)' }, to: { opacity: '1', transform: 'translateY(0)' } },
        'fade-in':   { from: { opacity: '0' }, to: { opacity: '1' } },
        'glow':      { '0%,100%': { opacity: '.5', transform: 'scale(1)' }, '50%': { opacity: '.8', transform: 'scale(1.05)' } },
        'float':     { '0%,100%': { transform: 'translateY(0)' }, '50%': { transform: 'translateY(-8px)' } }
---

## 15. Tailwind CSS Configuration

```js
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./src/**/*.{js,ts,jsx,tsx,html}'],
  darkMode: 'class',
  theme: {
    extend: {
      fontFamily: {
        mono: ['"IBM Plex Mono"', '"IBM Plex Mono SSm"', '"IBM Plex Mono"', 'monospace'],
      },
      colors: {
        accent:       '#00E5A0',
        'accent-dim': '#00B87E',
        bg:           '#0A0A0C',
        surface:      '#111115',
        overlay:      '#1A1A20',
        subtle:       '#222228',
        nova: { text: '#F0F0F5', muted: '#9090A0', faint: '#505060' },
      },
      borderRadius: { pill: '9999px', '2xl': '28px' },
      keyframes: {
        'fade-up': { from: { opacity: '0', transform: 'translateY(32px)' }, to: { opacity: '1', transform: 'translateY(0)' } },
        'fade-in': { from: { opacity: '0' }, to: { opacity: '1' } },
        glow:      { '0%,100%': { opacity: '.5', transform: 'scale(1)' }, '50%': { opacity: '.8', transform: 'scale(1.05)' } },
        float:     { '0%,100%': { transform: 'translateY(0)' }, '50%': { transform: 'translateY(-8px)' } },
        chevron:   { '0%,100%': { transform: 'translateY(0)', opacity: '1' }, '50%': { transform: 'translateY(6px)', opacity: '.5' } },
      },
      animation: {
        'fade-up': 'fade-up 700ms cubic-bezier(0.25,0,0,1) both',
        'fade-in': 'fade-in 600ms cubic-bezier(0.25,0,0,1) both',
        glow:      'glow 6s ease-in-out infinite',
        float:     'float 4s ease-in-out infinite',
        chevron:   'chevron 2s ease-in-out infinite',
      },
      backgroundImage: {
        'grid-lines': 'linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px)',
        'hero-glow':  'radial-gradient(ellipse 70% 50% at 50% 0%, rgba(0,229,160,0.09) 0%, transparent 70%)',
        'accent-grad':'linear-gradient(135deg, #fff 0%, #00E5A0 100%)',
      },
      backgroundSize: { grid: '60px 60px' },
    },
  },
  plugins: [],
}
```

### Utility combos

```html
<!-- Surface card -->
<div class="bg-surface border border-white/[0.08] rounded-xl p-8">

<!-- Glow card (featured) -->
<div class="bg-surface border border-accent/25 rounded-xl shadow-[0_0_60px_-16px_rgba(0,229,160,0.18)]">

<!-- Gradient text -->
<span class="bg-clip-text text-transparent bg-accent-grad">

<!-- Primary CTA -->
<a class="inline-flex items-center gap-2 px-7 py-3.5 bg-accent text-bg font-semibold text-sm rounded-pill hover:-translate-y-0.5 hover:bg-accent-dim transition-all duration-150">

<!-- Ghost CTA -->
<a class="inline-flex items-center gap-2 px-7 py-3.5 border border-white/[0.14] rounded-pill hover:bg-subtle hover:border-white/25 transition-all duration-150">

<!-- Overline badge -->
<span class="text-accent bg-accent/[0.08] border border-accent/25 rounded-pill px-3 py-1 text-[0.75rem] tracking-widest uppercase italic">
```

---

## 16. Internationalisation (i18n)

### Key naming convention

`section.element` — e.g. `hero.cta1`, `s2.title`, `form.submit`, `footer.copy`.

### Vanilla JS implementation (no library)

```js
const translations = { es: { 'hero.cta1': 'Cotizar proyecto →', ... }, en: { 'hero.cta1': 'Quote a project →', ... } }

function setLang(lang) {
  document.documentElement.lang = lang
  const t = translations[lang]
  document.querySelectorAll('[data-i18n]').forEach(el => {
    if (t[el.dataset.i18n]) el.innerHTML = t[el.dataset.i18n]
  })
  document.querySelectorAll(`[data-ph-${lang}]`).forEach(el => {
    el.placeholder = el.dataset['ph' + lang[0].toUpperCase() + lang.slice(1)]
  })
}
```

Markup:
```html
<a data-i18n="hero.cta1">Cotizar proyecto →</a>
<input data-ph-es="Tu nombre" data-ph-en="Your name" placeholder="Tu nombre" />
```

### Framework (Next.js / React)

Use `next-intl`. Store `/locales/es.json` and `/locales/en.json`. Define `locales: ['es','en']` and `defaultLocale: 'es'` in `next.config.js`.

---

## 17. Animated Hero — Specification

### Entry sequence (staggered reveals)

| Delay  | Element         | Animation              |
|--------|-----------------|------------------------|
| 100ms  | Overline badge  | `fadeIn`               |
| 250ms  | Full headline   | `fadeUp` (Y 32→0)      |
| 400ms  | Sub-copy        | `fadeUp`               |
| 550ms  | CTA row         | `fadeUp`               |
| 700ms  | Feature pills   | `fadeUp`               |
| 1200ms | Scroll hint     | `fadeIn`               |

### Word cycler

Rotates a key noun inside the headline every **2800ms**:

- **ES:** `el software | tu plataforma | tu sistema | tu MVP | tu producto`  
- **EN:** `the software | your platform | your system | your MVP | your product`

Exit: opacity 0 + translateY(-20px) in 380ms → swap text → Enter: opacity 1 + translateY(0) in 500ms.

### Background layers (bottom → top)

1. `background-image` grid lines at 3% opacity (CSS only)
2. Radial glow `div` — `rgba(0,229,160,0.09)`, `glow` keyframe 6s infinite
3. SVG accent lines — drawn via `stroke-dashoffset` animation on load, opacity 0.4
4. Content — `z-index: 1`

### Scroll reveal system

```js
const obs = new IntersectionObserver(entries => {
  entries.forEach(e => {
    if (!e.isIntersecting) return
    const delay = parseInt(getComputedStyle(e.target).getPropertyValue('--reveal-delay')) || 0
    setTimeout(() => e.target.classList.add('visible'), delay)
    obs.unobserve(e.target)
  })
}, { threshold: 0.12 })

document.querySelectorAll('.reveal').forEach(el => obs.observe(el))
```

```css
.reveal         { opacity: 0; transform: translateY(28px); transition: opacity 600ms ease, transform 600ms ease; }
.reveal.visible { opacity: 1; transform: translateY(0); }
```

Stagger siblings with `style="--reveal-delay: 100ms"` increments.

---

*Nova Consulting Design System v1.1 · May 2026*