/**
 * Nova Invita — scroll-driven GSAP experience for wedding invitations subsite.
 */
import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

const ROOT = '[data-wedding-invitations]';

function prefersReducedMotion() {
    return window.matchMedia('(prefers-reduced-motion: reduce)').matches;
}

/**
 * Infinite marquee driven by scroll velocity (px/s).
 * getVelocity() exists on ScrollTrigger instances, not ScrollTrigger.getVelocity().
 */
function initWiMarquee(marquee) {
    if (!marquee) {
        return;
    }

    const track = marquee.querySelector('.wi-marquee-track');
    if (!track) {
        return;
    }

    if (prefersReducedMotion()) {
        gsap.set(track, { x: 0 });
        return;
    }

    let x = 0;
    let velocity = 0;
    const sensitivity = 0.55;

    const halfWidth = () => track.scrollWidth / 2;

    const wrap = () => {
        const half = halfWidth();
        if (half <= 0) {
            return;
        }
        while (x <= -half) {
            x += half;
        }
        while (x > 0) {
            x -= half;
        }
    };

    ScrollTrigger.create({
        start: 0,
        end: 'max',
        onUpdate: (self) => {
            velocity = self.getVelocity();
        },
    });

    let lastScrollY = window.scrollY;
    let lastScrollTime = performance.now();

    const sampleVelocityOnScroll = () => {
        const now = performance.now();
        const dt = Math.max((now - lastScrollTime) / 1000, 0.001);
        const dy = window.scrollY - lastScrollY;
        lastScrollY = window.scrollY;
        lastScrollTime = now;
        velocity = dy / dt;
    };

    window.addEventListener('scroll', sampleVelocityOnScroll, { passive: true });

    const tick = () => {
        const dt = gsap.ticker.deltaRatio() / 60;

        if (Math.abs(velocity) < 2) {
            velocity *= 0.9;
            if (Math.abs(velocity) < 0.5) {
                return;
            }
        }

        x -= velocity * dt * sensitivity;
        velocity *= 0.94;
        wrap();
        gsap.set(track, { x, force3D: true });
    };

    gsap.ticker.add(tick);

    const measure = () => {
        wrap();
        gsap.set(track, { x });
    };

    measure();
    window.addEventListener('resize', measure, { passive: true });
    window.addEventListener('load', measure, { passive: true });
}

function revealStatic(root) {
    gsap.set(root.querySelectorAll('[data-wi-reveal]'), { opacity: 1, y: 0, x: 0, scale: 1 });
    gsap.set(root.querySelector('.wi-process-line'), { scaleX: 1 });
}

export function initWeddingInvitations() {
    const root = document.querySelector(ROOT);
    if (!root) {
        return;
    }

    if (prefersReducedMotion()) {
        revealStatic(root);
        return;
    }

    initWiMarquee(root.querySelector('[data-wi-marquee]'));

    const nav = root.querySelector('.wi-nav');
    const hero = root.querySelector('[data-wi-hero]');
    const phone = root.querySelector('[data-wi-phone]');
    const orbs = gsap.utils.toArray(root.querySelectorAll('.wi-hero-orb'));

    // —— Nav on scroll ——
    if (nav) {
        ScrollTrigger.create({
            start: 'top -80',
            onUpdate: (self) => {
                nav.classList.toggle('is-scrolled', self.scroll() > 48);
            },
        });
    }

    // —— Hero entrance ——
    const heroTl = gsap.timeline({ defaults: { ease: 'power3.out' } });
    heroTl
        .from(root.querySelector('[data-wi-hero-kicker]'), { opacity: 0, y: 16, duration: 0.55 })
        .from(
            gsap.utils.toArray(root.querySelectorAll('[data-wi-hero-line]')),
            { opacity: 0, y: 40, stagger: 0.12, duration: 0.85 },
            '-=0.2',
        )
        .from(root.querySelector('[data-wi-hero-sub]'), { opacity: 0, y: 20, duration: 0.6 }, '-=0.45')
        .from(
            gsap.utils.toArray(root.querySelectorAll('[data-wi-hero-cta]')),
            { opacity: 0, y: 18, scale: 0.96, stagger: 0.1, duration: 0.5 },
            '-=0.35',
        );

    if (phone) {
        heroTl.from(
            phone,
            {
                opacity: 0,
                y: 60,
                rotateY: -18,
                rotateX: 8,
                transformPerspective: 900,
                duration: 1.1,
                ease: 'power2.out',
            },
            '-=0.9',
        );
    }

    // Hero parallax while scrolling past
    if (hero && phone) {
        gsap.to(phone, {
            y: -48,
            rotateY: 6,
            ease: 'none',
            scrollTrigger: {
                trigger: hero,
                start: 'top top',
                end: 'bottom top',
                scrub: 1.2,
            },
        });

        gsap.to(root.querySelector('[data-wi-hero-copy]'), {
            y: 32,
            opacity: 0.35,
            ease: 'none',
            scrollTrigger: {
                trigger: hero,
                start: 'top top',
                end: 'center top',
                scrub: 0.8,
            },
        });
    }

    orbs.forEach((orb, i) => {
        gsap.to(orb, {
            x: (i % 2 === 0 ? 40 : -36),
            y: (i % 2 === 0 ? -28 : 32),
            scale: 1.15,
            ease: 'none',
            scrollTrigger: {
                trigger: hero || root,
                start: 'top top',
                end: 'bottom top',
                scrub: 1.5 + i * 0.2,
            },
        });
    });

    // —— Section headings ——
    gsap.utils.toArray(root.querySelectorAll('[data-wi-section-head]')).forEach((el) => {
        gsap.from(el, {
            opacity: 0,
            y: 36,
            duration: 0.9,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: el,
                start: 'top 88%',
                toggleActions: 'play none none reverse',
            },
        });
    });

    // —— Feature cards ——
    const featureCards = gsap.utils.toArray(root.querySelectorAll('.wi-feature-card'));
    gsap.from(featureCards, {
        opacity: 0,
        y: 56,
        rotateX: 8,
        transformPerspective: 800,
        stagger: 0.14,
        duration: 0.85,
        ease: 'power3.out',
        scrollTrigger: {
            trigger: root.querySelector('[data-wi-features]'),
            start: 'top 78%',
            toggleActions: 'play none none reverse',
        },
    });

    featureCards.forEach((card) => {
        gsap.to(card, {
            y: -6,
            boxShadow: '0 20px 48px rgb(0 0 0 / 0.1)',
            ease: 'power2.out',
            scrollTrigger: {
                trigger: card,
                start: 'top 85%',
                end: 'top 40%',
                scrub: 0.6,
            },
        });
    });

    // —— Philosophy ——
    const philosophy = root.querySelector('[data-wi-philosophy]');
    if (philosophy) {
        gsap.from(root.querySelector('[data-wi-philosophy-image]'), {
            opacity: 0,
            scale: 0.92,
            x: 40,
            duration: 1.1,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: philosophy,
                start: 'top 75%',
                toggleActions: 'play none none reverse',
            },
        });

        gsap.utils.toArray(root.querySelectorAll('.wi-philosophy-block')).forEach((block, i) => {
            gsap.from(block, {
                opacity: 0,
                x: i % 2 === 0 ? -32 : 32,
                duration: 0.75,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: block,
                    start: 'top 88%',
                    toggleActions: 'play none none reverse',
                },
            });
        });

        gsap.from(root.querySelector('[data-wi-quote]'), {
            opacity: 0,
            y: 24,
            rotate: -2,
            duration: 0.8,
            scrollTrigger: {
                trigger: root.querySelector('[data-wi-quote]'),
                start: 'top 90%',
                toggleActions: 'play none none reverse',
            },
        });
    }

    // —— Process steps + line ——
    const process = root.querySelector('[data-wi-process]');
    const processLine = root.querySelector('.wi-process-line');
    const steps = gsap.utils.toArray(root.querySelectorAll('.wi-process-step'));

    if (process && processLine) {
        gsap.to(processLine, {
            scaleX: 1,
            ease: 'none',
            scrollTrigger: {
                trigger: process,
                start: 'top 70%',
                end: 'bottom 55%',
                scrub: 0.8,
            },
        });
    }

    steps.forEach((step, i) => {
        gsap.from(step.querySelector('[data-wi-step-num]'), {
            scale: 0,
            rotation: -180,
            duration: 0.65,
            ease: 'back.out(2)',
            scrollTrigger: {
                trigger: step,
                start: 'top 85%',
                toggleActions: 'play none none reverse',
            },
        });

        gsap.from(step.querySelector('[data-wi-step-body]'), {
            opacity: 0,
            y: 20,
            delay: 0.08 + i * 0.05,
            duration: 0.6,
            scrollTrigger: {
                trigger: step,
                start: 'top 85%',
                toggleActions: 'play none none reverse',
            },
        });
    });

    // —— CTA panel ——
    const cta = root.querySelector('[data-wi-cta]');
    if (cta) {
        gsap.from(cta.querySelector('[data-wi-cta-copy]'), {
            opacity: 0,
            x: -40,
            duration: 0.9,
            scrollTrigger: {
                trigger: cta,
                start: 'top 80%',
                toggleActions: 'play none none reverse',
            },
        });

        gsap.from(gsap.utils.toArray(cta.querySelectorAll('[data-wi-cta-btn]')), {
            opacity: 0,
            scale: 0.85,
            stagger: 0.12,
            duration: 0.65,
            ease: 'back.out(1.6)',
            scrollTrigger: {
                trigger: cta,
                start: 'top 80%',
                toggleActions: 'play none none reverse',
            },
        });
    }

    // —— FAQ stagger ——
    gsap.from(gsap.utils.toArray(root.querySelectorAll('[data-wi-faq] details')), {
        opacity: 0,
        y: 16,
        stagger: 0.08,
        duration: 0.55,
        scrollTrigger: {
            trigger: root.querySelector('[data-wi-faq]'),
            start: 'top 82%',
            toggleActions: 'play none none reverse',
        },
    });

    // Pin subtle section label on features
    const featuresPin = root.querySelector('[data-wi-features-pin]');
    if (featuresPin) {
        ScrollTrigger.create({
            trigger: root.querySelector('[data-wi-features]'),
            start: 'top 20%',
            end: 'bottom 40%',
            pin: featuresPin,
            pinSpacing: false,
            anticipatePin: 1,
        });
    }

    ScrollTrigger.refresh();
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initWeddingInvitations);
} else {
    initWeddingInvitations();
}
