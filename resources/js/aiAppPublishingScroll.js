/**
 * AI app publishing landing — scroll-driven GSAP animations.
 */
import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

const ROOT = '[data-ai-app-publishing]';

function prefersReducedMotion() {
    return window.matchMedia('(prefers-reduced-motion: reduce)').matches;
}

function initAapMarquee(marquee) {
    if (!marquee) {
        return;
    }

    const track = marquee.querySelector('.aap-marquee-track');
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
    gsap.set(root.querySelectorAll('[data-aap-reveal]'), { opacity: 1, y: 0, x: 0, scale: 1 });
}

export function initAiAppPublishing() {
    const root = document.querySelector(ROOT);
    if (!root) {
        return;
    }

    if (prefersReducedMotion()) {
        revealStatic(root);
        return;
    }

    initAapMarquee(root.querySelector('[data-aap-marquee]'));

    const hero = root.querySelector('[data-aap-hero]');
    const orbs = gsap.utils.toArray(root.querySelectorAll('.aap-hero-orb'));

    const heroTl = gsap.timeline({ defaults: { ease: 'power3.out' } });
    heroTl
        .from(root.querySelector('[data-aap-hero-kicker]'), { opacity: 0, y: 16, duration: 0.55 })
        .from(
            gsap.utils.toArray(root.querySelectorAll('[data-aap-hero-line]')),
            { opacity: 0, y: 40, stagger: 0.12, duration: 0.85 },
            '-=0.2',
        )
        .from(root.querySelector('[data-aap-hero-sub]'), { opacity: 0, y: 20, duration: 0.6 }, '-=0.45')
        .from(
            gsap.utils.toArray(root.querySelectorAll('[data-aap-hero-cta]')),
            { opacity: 0, y: 18, scale: 0.96, stagger: 0.1, duration: 0.5 },
            '-=0.35',
        );

    if (hero) {
        gsap.to(root.querySelector('[data-aap-hero-copy]'), {
            y: 28,
            opacity: 0.4,
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

    gsap.utils.toArray(root.querySelectorAll('[data-aap-section-head]')).forEach((el) => {
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

    const useCaseCards = gsap.utils.toArray(root.querySelectorAll('.aap-use-case-card'));
    if (useCaseCards.length) {
        gsap.from(useCaseCards, {
            opacity: 0,
            y: 56,
            rotateX: 8,
            transformPerspective: 800,
            stagger: 0.12,
            duration: 0.85,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: root.querySelector('[data-aap-use-cases]'),
                start: 'top 78%',
                toggleActions: 'play none none reverse',
            },
        });

        useCaseCards.forEach((card) => {
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
    }

    const pathCards = gsap.utils.toArray(root.querySelectorAll('.aap-path-card'));
    pathCards.forEach((card, i) => {
        gsap.from(card, {
            opacity: 0,
            x: i === 0 ? -48 : 48,
            duration: 1,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: card,
                start: 'top 82%',
                toggleActions: 'play none none reverse',
            },
        });

        gsap.utils.toArray(card.querySelectorAll('.aap-path-bullet')).forEach((bullet, j) => {
            gsap.from(bullet, {
                opacity: 0,
                x: -16,
                duration: 0.5,
                delay: j * 0.06,
                scrollTrigger: {
                    trigger: card,
                    start: 'top 75%',
                    toggleActions: 'play none none reverse',
                },
            });
        });
    });

    const steps = gsap.utils.toArray(root.querySelectorAll('.aap-process-step'));
    steps.forEach((step, i) => {
        gsap.from(step.querySelector('[data-aap-step-num]'), {
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

        gsap.from(step.querySelector('[data-aap-step-body]'), {
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

    const cta = root.querySelector('[data-aap-cta]');
    if (cta) {
        gsap.from(cta.querySelector('[data-aap-cta-panel]'), {
            opacity: 0,
            scale: 0.96,
            y: 32,
            duration: 0.9,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: cta,
                start: 'top 80%',
                toggleActions: 'play none none reverse',
            },
        });

        gsap.from(cta.querySelector('[data-aap-cta-copy]'), {
            opacity: 0,
            x: -40,
            duration: 0.9,
            scrollTrigger: {
                trigger: cta,
                start: 'top 80%',
                toggleActions: 'play none none reverse',
            },
        });

        gsap.from(gsap.utils.toArray(cta.querySelectorAll('[data-aap-cta-btn]')), {
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

    gsap.from(gsap.utils.toArray(root.querySelectorAll('[data-aap-faq] details')), {
        opacity: 0,
        y: 16,
        stagger: 0.08,
        duration: 0.55,
        scrollTrigger: {
            trigger: root.querySelector('[data-aap-faq]'),
            start: 'top 82%',
            toggleActions: 'play none none reverse',
        },
    });

    ScrollTrigger.refresh();
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initAiAppPublishing);
} else {
    initAiAppPublishing();
}
