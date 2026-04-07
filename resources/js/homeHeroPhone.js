const SYMBOLS = ['<>', '{}', '[]', '()', '//', '&&', '=>', ';;', '</>', '${}', '[];', '||'];

const initHomeHeroPhone = () => {
    const root = document.querySelector('[data-home-hero-phone]');
    if (!root) {
        return;
    }

    const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    let cooldownUntil = 0;

    root.addEventListener('click', () => {
        if (reducedMotion) {
            return;
        }

        const now = performance.now();
        if (now < cooldownUntil) {
            return;
        }
        cooldownUntil = now + 420;

        const count = 11 + Math.floor(Math.random() * 6);
        const rect = root.getBoundingClientRect();
        const originX = rect.left + rect.width / 2;
        const originY = rect.top + rect.height * 0.38;

        for (let i = 0; i < count; i++) {
            const el = document.createElement('span');
            el.className = 'home-hero-phone-particle';
            el.setAttribute('aria-hidden', 'true');
            el.textContent = SYMBOLS[Math.floor(Math.random() * SYMBOLS.length)];

            const wedge = (Math.PI * 2) / count;
            const angle = i * wedge + Math.random() * wedge * 0.92;
            const dist = 96 + Math.random() * 140;
            const tx = Math.cos(angle) * dist;
            const ty = Math.sin(angle) * dist - 28;
            const rot = (Math.random() - 0.5) * 320;

            const durSec = 1.55 + Math.random() * 0.45;
            el.style.setProperty('--burst-dur', `${durSec}s`);
            el.style.setProperty('--tx', `${tx}px`);
            el.style.setProperty('--ty', `${ty}px`);
            el.style.setProperty('--rot', `${rot}deg`);
            el.style.left = `${originX}px`;
            el.style.top = `${originY}px`;

            document.body.appendChild(el);
            window.setTimeout(() => el.remove(), durSec * 1000 + 120);
        }
    });
};

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initHomeHeroPhone);
} else {
    initHomeHeroPhone();
}
