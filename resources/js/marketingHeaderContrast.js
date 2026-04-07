/**
 * Per-link contrast: toggles *--on-dark when the link center lies inside
 * [data-marketing-nav-contrast="dark"] (desktop pill + mobile tab bar).
 */
const pointInZones = (cx, cy, zones) => {
    for (let i = 0; i < zones.length; i++) {
        const Z = zones[i].getBoundingClientRect();
        if (
            cx >= Z.left &&
            cx <= Z.right &&
            cy >= Z.top &&
            cy <= Z.bottom
        ) {
            return true;
        }
    }
    return false;
};

const syncAnchors = (anchors, className, zones) => {
    if (!zones.length) {
        anchors.forEach((a) => a.classList.remove(className));
        return;
    }

    anchors.forEach((anchor) => {
        const L = anchor.getBoundingClientRect();
        if (L.width < 1 || L.height < 1) {
            anchor.classList.remove(className);
            return;
        }

        const cx = L.left + L.width / 2;
        const cy = L.top + L.height / 2;
        anchor.classList.toggle(className, pointInZones(cx, cy, zones));
    });
};

const initMarketingHeaderContrast = () => {
    const header = document.querySelector('[data-marketing-site-header]');
    const tabBar = document.querySelector('.marketing-tab-bar');

    if (!header && !tabBar) {
        return;
    }

    let rafId = 0;

    const update = () => {
        rafId = 0;

        const pillLinks = header
            ? header.querySelectorAll('.marketing-nav-pill-link')
            : [];
        const tabLinks = tabBar
            ? tabBar.querySelectorAll('.marketing-tab-bar__link')
            : [];

        if (!pillLinks.length && !tabLinks.length) {
            return;
        }

        const zones = document.querySelectorAll('[data-marketing-nav-contrast="dark"]');

        syncAnchors(pillLinks, 'marketing-nav-pill-link--on-dark', zones);
        syncAnchors(tabLinks, 'marketing-tab-bar__link--on-dark', zones);
    };

    const schedule = () => {
        if (rafId) {
            return;
        }
        rafId = requestAnimationFrame(update);
    };

    schedule();
    window.addEventListener('scroll', schedule, { passive: true });
    window.addEventListener('resize', schedule);
};

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initMarketingHeaderContrast);
} else {
    initMarketingHeaderContrast();
}
