const initHomeAudienceSwitcher = () => {
    const root = document.querySelector('[data-home-audience-root]');
    if (!root) {
        return;
    }

    const selectors = Array.from(root.querySelectorAll('[data-audience-option]'));
    const panels = Array.from(root.querySelectorAll('[data-audience-panel]'));
    const audienceInput = root.querySelector('[data-audience-input]');
    const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    const setActiveAudience = (audience) => {
        selectors.forEach((button) => {
            const isActive = button.dataset.audienceOption === audience;
            button.setAttribute('aria-selected', isActive ? 'true' : 'false');
            button.classList.toggle('bg-black', isActive);
            button.classList.toggle('text-white', isActive);
            button.classList.toggle('shadow-md', isActive);
            button.classList.toggle('text-gray-600', !isActive);
        });

        panels.forEach((panel) => {
            const isActive = panel.dataset.audiencePanel === audience;
            panel.classList.toggle('hidden', !isActive);
            panel.setAttribute('aria-hidden', isActive ? 'false' : 'true');
        });

        if (audienceInput) {
            audienceInput.value = audience;
        }
    };

    selectors.forEach((button) => {
        button.addEventListener('click', () => setActiveAudience(button.dataset.audienceOption));
    });

    const revealItems = Array.from(root.querySelectorAll('[data-reveal-item]'));
    if (typeof IntersectionObserver !== 'undefined') {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                }
            });
        }, { threshold: 0.2 });

        revealItems.forEach((item) => observer.observe(item));
    } else {
        revealItems.forEach((item) => item.classList.add('is-visible'));
    }

    const updateScrollHero = () => {
        if (reducedMotion) {
            return;
        }
        const progress = Math.max(0, Math.min(window.scrollY / Math.max(window.innerHeight, 1), 1.2));

        root.querySelectorAll('[data-hero-laptop]').forEach((node) => {
            node.style.transform = `translateY(${progress * 22}px) translateX(${-progress * 10}px) scale(${1 - progress * 0.04})`;
        });
        root.querySelectorAll('[data-hero-smb-laptop]').forEach((node) => {
            node.style.transform = `translateX(${-progress * 72}px) translateY(${progress * 18}px) rotateY(-14deg) rotateZ(-1deg)`;
        });
        root.querySelectorAll('[data-hero-phone]').forEach((node) => {
            node.style.transform = `translateX(${progress * 78}px) translateY(${-progress * 12}px) rotateY(20deg) rotateZ(2deg)`;
        });
        root.querySelectorAll('[data-hero-planet]').forEach((node) => {
            node.style.transform = `rotate(${progress * 280}deg)`;
        });
    };

    updateScrollHero();
    window.addEventListener('scroll', updateScrollHero, { passive: true });
    window.addEventListener('resize', updateScrollHero, { passive: true });

    const defaultAudience = root.dataset.defaultAudience || 'individual';
    setActiveAudience(defaultAudience);
};

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initHomeAudienceSwitcher);
} else {
    initHomeAudienceSwitcher();
}
