/**
 * Home page scroll-driven hero & service animations.
 * Uses extracted frame sequences (progressive load) instead of monolithic Lottie JSON.
 */
import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

const FRAME_CACHE_MAX = 48;
const PREFETCH_AHEAD = 18;
const PREFETCH_BEHIND = 6;

class ScrollFramePlayer {
    constructor(containerEl, baseUrl, manifest) {
        this.container = containerEl;
        this.baseUrl = baseUrl.replace(/\/$/, '');
        this.manifest = manifest;
        this.frameCount = manifest.frameCount;
        this.cache = new Map();
        this.cacheOrder = [];
        this.loading = new Map();
        this.lastFrame = -1;
        this.ready = false;

        this.canvas = document.createElement('canvas');
        this.canvas.className = 'scroll-frame-canvas w-full h-full';
        this.canvas.setAttribute('aria-hidden', 'true');
        this.ctx = this.canvas.getContext('2d', { alpha: false });
        containerEl.appendChild(this.canvas);

        this.resize();
    }

    resize() {
        const rect = this.container.getBoundingClientRect();
        const dpr = Math.min(window.devicePixelRatio || 1, 2);
        const w = Math.max(1, Math.floor(rect.width * dpr));
        const h = Math.max(1, Math.floor(rect.height * dpr));
        if (this.canvas.width !== w || this.canvas.height !== h) {
            this.canvas.width = w;
            this.canvas.height = h;
        }
        if (this.lastFrame >= 0 && this.cache.has(this.lastFrame)) {
            this.draw(this.cache.get(this.lastFrame));
        }
    }

    frameUrl(index) {
        const ext = this.manifest.ext || 'jpg';
        return `${this.baseUrl}/frames/${String(index).padStart(4, '0')}.${ext}`;
    }

    touchCache(index, img) {
        if (this.cache.has(index)) {
            this.cacheOrder = this.cacheOrder.filter((i) => i !== index);
        } else {
            this.cache.set(index, img);
        }
        this.cacheOrder.push(index);
        while (this.cacheOrder.length > FRAME_CACHE_MAX) {
            const evict = this.cacheOrder.shift();
            this.cache.delete(evict);
        }
    }

    loadFrame(index) {
        if (index < 0 || index >= this.frameCount) {
            return Promise.resolve(null);
        }
        if (this.cache.has(index)) {
            return Promise.resolve(this.cache.get(index));
        }
        if (this.loading.has(index)) {
            return this.loading.get(index);
        }

        const promise = new Promise((resolve, reject) => {
            const img = new Image();
            img.decoding = 'async';
            img.onload = () => {
                this.touchCache(index, img);
                this.loading.delete(index);
                resolve(img);
            };
            img.onerror = () => {
                this.loading.delete(index);
                reject(new Error(`Failed to load frame ${index}`));
            };
            img.src = this.frameUrl(index);
        });

        this.loading.set(index, promise);
        return promise;
    }

    prefetchAround(center) {
        const start = Math.max(0, center - PREFETCH_BEHIND);
        const end = Math.min(this.frameCount - 1, center + PREFETCH_AHEAD);
        for (let i = start; i <= end; i++) {
            this.loadFrame(i).catch(() => {});
        }
    }

    draw(img) {
        const { width: cw, height: ch } = this.canvas;
        const iw = img.naturalWidth || img.width;
        const ih = img.naturalHeight || img.height;
        const scale = Math.max(cw / iw, ch / ih);
        const dw = iw * scale;
        const dh = ih * scale;
        const dx = (cw - dw) / 2;
        const dy = (ch - dh) / 2;
        this.ctx.fillStyle = '#FAFAFA';
        this.ctx.fillRect(0, 0, cw, ch);
        this.ctx.drawImage(img, dx, dy, dw, dh);
    }

    async init() {
        const first = await this.loadFrame(0);
        if (first) {
            this.draw(first);
            this.lastFrame = 0;
        }
        this.prefetchAround(0);
        this.scheduleIdlePrefetch();
        this.ready = true;
        this.container.classList.remove('lottie-scroll-pending');
        this.container.classList.add('lottie-scroll-ready');
        return this;
    }

    scheduleIdlePrefetch() {
        const run = () => {
            let i = 0;
            const step = () => {
                const end = Math.min(i + 12, this.frameCount);
                for (; i < end; i++) {
                    this.loadFrame(i).catch(() => {});
                }
                if (i < this.frameCount) {
                    requestAnimationFrame(step);
                }
            };
            step();
        };

        if ('requestIdleCallback' in window) {
            requestIdleCallback(run, { timeout: 4000 });
        } else {
            setTimeout(run, 1200);
        }
    }

    setProgress(progress) {
        const maxFrame = Math.max(0, this.frameCount - 1);
        const target = Math.min(maxFrame, Math.max(0, Math.round(progress * maxFrame)));
        if (target === this.lastFrame) {
            return;
        }
        this.lastFrame = target;
        this.prefetchAround(target);

        const cached = this.cache.get(target);
        if (cached) {
            this.draw(cached);
            return;
        }

        this.loadFrame(target)
            .then((img) => {
                if (img && this.lastFrame === target) {
                    this.draw(img);
                }
            })
            .catch(() => {});
    }
}

async function fetchManifest(baseUrl) {
    const res = await fetch(`${baseUrl}/manifest.json`, { credentials: 'same-origin' });
    if (!res.ok) {
        throw new Error(`Manifest not found: ${baseUrl}`);
    }
    return res.json();
}

function bindPlayerToScroll(player, containerEl, triggerSelector, onTimelineReady) {
    let scrollTriggerInstance = null;

    const tl = gsap.timeline({
        scrollTrigger: {
            trigger: triggerSelector,
            start: 'top top',
            end: 'bottom bottom',
            scrub: 0.5,
            invalidateOnRefresh: true,
            onUpdate: (self) => player.setProgress(self.progress),
            onLeave: () => player.setProgress(1),
            onEnterBack: (self) => player.setProgress(self.progress),
        },
    });

    scrollTriggerInstance = tl.scrollTrigger;

    const resizePlayer = () => {
        player.resize();
        if (scrollTriggerInstance) {
            player.setProgress(scrollTriggerInstance.progress);
        }
    };
    window.addEventListener('resize', resizePlayer);
    ScrollTrigger.addEventListener('refreshInit', resizePlayer);

    if (typeof onTimelineReady === 'function') {
        onTimelineReady(tl);
    }

    ScrollTrigger.refresh();
    return tl;
}

async function mountScrollFrames(containerEl, framesBaseUrl, triggerSelector, onTimelineReady) {
    const manifest = await fetchManifest(framesBaseUrl);
    const player = new ScrollFramePlayer(containerEl, framesBaseUrl, manifest);
    await player.init();
    return bindPlayerToScroll(player, containerEl, triggerSelector, onTimelineReady);
}

function observeLazyMount(targetEl, mountFn) {
    if (!('IntersectionObserver' in window)) {
        mountFn();
        return;
    }

    const observer = new IntersectionObserver(
        (entries) => {
            if (!entries.some((e) => e.isIntersecting)) {
                return;
            }
            observer.disconnect();
            mountFn();
        },
        { rootMargin: '120% 0px', threshold: 0 },
    );

    observer.observe(targetEl);
}

function initMagneticCursor() {
    const cursor = document.getElementById('magnetic-cursor');
    const cursorDot = document.getElementById('magnetic-cursor-dot');
    if (!cursor || !cursorDot) {
        return;
    }

    let mouseX = 0;
    let mouseY = 0;
    let cursorX = 0;
    let cursorY = 0;

    window.addEventListener('mousemove', (e) => {
        mouseX = e.clientX;
        mouseY = e.clientY;
        gsap.set(cursorDot, { x: mouseX, y: mouseY });
    });

    gsap.ticker.add(() => {
        cursorX += (mouseX - cursorX) * 0.15;
        cursorY += (mouseY - cursorY) * 0.15;
        gsap.set(cursor, { x: cursorX, y: cursorY });
    });

    document.querySelectorAll('.magnetic-btn, a, button').forEach((el) => {
        if (el.closest('#hotsale-modal')) {
            return;
        }

        el.addEventListener('mouseenter', () => {
            cursor.classList.add('active');
            gsap.to(cursorDot, { scale: 0, duration: 0.2 });
        });

        el.addEventListener('mouseleave', () => {
            cursor.classList.remove('active');
            gsap.to(cursorDot, { scale: 1, duration: 0.2 });
            gsap.to(el, { x: 0, y: 0, duration: 0.5, ease: 'elastic.out(1, 0.3)' });
        });

        el.addEventListener('mousemove', (e) => {
            const rect = el.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;
            gsap.to(el, { x: x * 0.3, y: y * 0.3, duration: 0.5, ease: 'power2.out' });
        });
    });
}

function initCustomersBanner() {
    const section = document.getElementById('customers-banner');
    if (!section) {
        return;
    }

    const kicker = section.querySelector('.customers-banner__kicker');
    const tracks = section.querySelectorAll('.customers-marquee__track');
    const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    if (kicker) {
        gsap.fromTo(
            kicker,
            { y: 20, opacity: 0 },
            {
                y: 0,
                opacity: 1,
                duration: 0.7,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: section,
                    start: 'top 88%',
                    toggleActions: 'play none none reverse',
                },
            },
        );
    }

    tracks.forEach((track, index) => {
        const loopWidth = track.scrollWidth / 2;
        if (!loopWidth) {
            return;
        }

        const scrollLeft = index % 2 === 0;

        if (reducedMotion) {
            gsap.set(track, { x: scrollLeft ? -loopWidth * 0.2 : -loopWidth * 0.8 });
            return;
        }

        gsap.fromTo(
            track,
            { x: scrollLeft ? 0 : -loopWidth },
            {
                x: scrollLeft ? -loopWidth : 0,
                ease: 'none',
                scrollTrigger: {
                    trigger: section,
                    start: 'top bottom',
                    end: 'bottom top',
                    scrub: 1.15,
                },
            },
        );
    });
}

function initServiceSections() {
    document.querySelectorAll('.service-section').forEach((section) => {
        if (section.id === 'service-software' || section.id === 'service-web') {
            return;
        }

        const contentElements = section.querySelectorAll(
            '.service-kicker, .service-title, .service-subtitle, .service-price, .service-features, .service-cta',
        );

        gsap.fromTo(
            contentElements,
            { y: 50, opacity: 0 },
            {
                y: 0,
                opacity: 1,
                stagger: 0.15,
                duration: 1,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: section,
                    start: 'top 70%',
                    toggleActions: 'play none none reverse',
                },
            },
        );

        const visual = section.querySelector('.service-visual');
        if (visual) {
            gsap.fromTo(
                visual,
                { y: 50, opacity: 0 },
                {
                    y: 0,
                    opacity: 1,
                    duration: 1.2,
                    ease: 'power2.out',
                    scrollTrigger: {
                        trigger: section,
                        start: 'top 75%',
                        toggleActions: 'play none none reverse',
                    },
                },
            );
        }

        const mockups = section.querySelectorAll(
            '.software-mockup, .web-mockup, .ecommerce-mockup, .support-mockup, .remote-mockup',
        );
        if (mockups.length) {
            gsap.fromTo(
                mockups,
                { scale: 0.9, y: 30 },
                {
                    scale: 1,
                    y: 0,
                    duration: 1.5,
                    stagger: 0.2,
                    ease: 'expo.out',
                    scrollTrigger: {
                        trigger: section,
                        start: 'top 60%',
                        toggleActions: 'play none none reverse',
                    },
                },
            );
        }
    });
}

function initServiceLottieSection(sectionId, lottieContainerId, framesId, mockupSelector) {
    const lottieContainer = document.getElementById(lottieContainerId);
    const section = document.getElementById(sectionId);
    if (!lottieContainer || !section) {
        return;
    }

    const kicker = section.querySelector('.service-kicker');
    const title = section.querySelector('.service-title');
    const subtitle = section.querySelector('.service-subtitle');
    const features = section.querySelector('.service-features');
    const cta = section.querySelector('.service-cta');
    const visual = section.querySelector('.service-visual');
    const mockup = section.querySelector(mockupSelector);
    const framesBaseUrl = `/assets/lottie-frames/${framesId}`;

    const mount = () => {
        mountScrollFrames(lottieContainer, framesBaseUrl, `#${sectionId}`, (tl) => {
            tl.fromTo(kicker, { y: 30, opacity: 0 }, { y: 0, opacity: 1, duration: 0.15, ease: 'power2.out' }, 0.1);
            tl.fromTo(title, { y: 30, opacity: 0 }, { y: 0, opacity: 1, duration: 0.2, ease: 'power2.out' }, 0.15);
            tl.fromTo(subtitle, { y: 30, opacity: 0 }, { y: 0, opacity: 1, duration: 0.2, ease: 'power2.out' }, 0.25);
            tl.fromTo(features, { y: 30, opacity: 0 }, { y: 0, opacity: 1, duration: 0.2, ease: 'power2.out' }, 0.35);
            tl.fromTo(cta, { y: 30, opacity: 0 }, { y: 0, opacity: 1, duration: 0.2, ease: 'power2.out' }, 0.45);

            if (visual) {
                tl.fromTo(visual, { y: 50, opacity: 0 }, { y: 0, opacity: 1, duration: 0.3, ease: 'power2.out' }, 0.2);
            }
            if (mockup) {
                tl.fromTo(mockup, { scale: 0.9, y: 30 }, { scale: 1, y: 0, duration: 0.35, ease: 'expo.out' }, 0.3);
            }
        }).catch(() => {
            lottieContainer.classList.remove('lottie-scroll-pending');
        });
    };

    observeLazyMount(section, mount);
}

function initHomeScrollHero() {
    const heroContainer = document.getElementById('lottie-mac-hero');
    if (!heroContainer) {
        return;
    }

    const heroPoster = document.getElementById('hero-lottie-poster');
    const hidePoster = () => heroPoster?.classList.add('hero-poster-hidden');

    mountScrollFrames(heroContainer, '/assets/lottie-frames/optimized_hero_2', '#hero-section', (tl) => {
        hidePoster();
        tl.to(
            '#hero-title',
            { opacity: 1, x: 0, duration: 0.2, ease: 'power2.out' },
            0.9,
        );
        tl.to(
            '#hero-list',
            { opacity: 1, x: 0, duration: 0.2, ease: 'power2.out' },
            0.95,
        );
    }).catch(() => {
        heroContainer.classList.remove('lottie-scroll-pending');
    });

    initMagneticCursor();
    initCustomersBanner();
    initServiceSections();
    initServiceLottieSection('service-software', 'lottie-software-hero', 'custom_hero', '.software-mockup');
    initServiceLottieSection('service-web', 'lottie-web-hero', 'web_hero', '.web-mockup');

    window.addEventListener('load', () => ScrollTrigger.refresh());
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initHomeScrollHero);
} else {
    initHomeScrollHero();
}
