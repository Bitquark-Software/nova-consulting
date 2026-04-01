// import './bootstrap';
import './modals';
import './mobileNav';
import Alpine from 'alpinejs';

document.addEventListener('alpine:init', () => {
    Alpine.data('marketingNav', () => ({
        open: false,
        toggle() {
            this.open = !this.open;
            this._setScrollLock(this.open);
        },
        close() {
            if (!this.open) {
                return;
            }
            this.open = false;
            this._setScrollLock(false);
        },
        _setScrollLock(on) {
            document.documentElement.classList.toggle('marketing-nav-open', on);
            document.body.classList.toggle('marketing-nav-open', on);
            document.body.classList.toggle('overflow-hidden', on);
        },
    }));

});

window.Alpine = Alpine;

Alpine.start();

const fireTrackingEvent = (eventName, params = {}) => {
    if (typeof window.gtag !== 'function') {
        return;
    }
    try {
        window.gtag('event', eventName, params);
    } catch {
        // gtag can throw if blocked or misconfigured; never break UX (forms, navigation).
    }
};

const normalizeText = (value = '') => value.replace(/\s+/g, ' ').trim().slice(0, 120);

const getSectionName = (element) => {
    const section = element.closest('[data-ga-section], nav, header, footer, main, section, article');
    if (!section) {
        return 'unknown';
    }

    return (
        section.getAttribute('data-ga-section') ||
        section.id ||
        section.tagName.toLowerCase()
    );
};

const classifyClick = (element) => {
    const href = element.getAttribute('href') || '';
    if (!href) return { eventName: 'ui_click', clickType: 'button_or_element', href: '' };

    if (href.startsWith('tel:')) return { eventName: 'contact_click', clickType: 'phone', href };
    if (href.startsWith('mailto:')) return { eventName: 'contact_click', clickType: 'email', href };
    if (href.includes('wa.me') || href.includes('whatsapp')) return { eventName: 'contact_click', clickType: 'whatsapp', href };
    if (href.startsWith('#')) return { eventName: 'navigation_click', clickType: 'anchor', href };
    if (href.startsWith('http') && !href.includes(window.location.hostname)) return { eventName: 'outbound_click', clickType: 'external_link', href };
    return { eventName: 'navigation_click', clickType: 'internal_link', href };
};

document.addEventListener('click', (event) => {
    const target = event.target.closest('[data-track]');
    if (!target) {
        return;
    }

    const trackName = target.getAttribute('data-track');
    fireTrackingEvent(trackName, {
        event_category: 'engagement',
        event_label: window.location.pathname,
    });
});

document.addEventListener('click', (event) => {
    const target = event.target.closest('a, button');
    if (!target || target.hasAttribute('data-track')) {
        return;
    }

    const { eventName, clickType, href } = classifyClick(target);
    const label = normalizeText(target.textContent || target.getAttribute('aria-label') || clickType);

    fireTrackingEvent(eventName, {
        event_category: 'navigation_behavior',
        event_label: label || clickType,
        click_text: label || clickType,
        click_type: clickType,
        click_url: href || window.location.pathname,
        section: getSectionName(target),
        page_path: window.location.pathname,
    });
});

document.addEventListener('submit', (event) => {
    const form = event.target.closest('form[data-lead-form="true"]');
    if (!form) {
        return;
    }

    event.preventDefault();

    const fields = new FormData(form);
    const source = form.getAttribute('data-lead-source') || window.location.pathname;
    const payload = [
        '*Nueva solicitud de diagnostico*',
        `Origen: ${source}`,
        `Nombre: ${fields.get('name') || ''}`,
        `Empresa: ${fields.get('business') || ''}`,
        `Telefono: ${fields.get('phone') || ''}`,
        `Servicio: ${fields.get('service') || ''}`,
        `Presupuesto: ${fields.get('budget') || ''}`,
        `Urgencia: ${fields.get('urgency') || ''}`,
        `Objetivo: ${fields.get('message') || ''}`,
        `Pagina: ${window.location.href}`,
    ].join('\n');

    fireTrackingEvent('generate_lead', {
        event_category: 'lead',
        event_label: source,
        value: 1,
    });

    // Mirrors conversion as a lead signal for Google Ads.
    fireTrackingEvent('conversion', {
        send_to: 'AW-16713345017/Szr_CKa03-gaEPnPxaE-',
        value: 1.0,
        currency: 'MXN',
    });

    const whatsappUrl = `https://wa.me/529611465703?text=${encodeURIComponent(payload)}`;
    window.open(whatsappUrl, '_blank', 'noopener,noreferrer');
});

const trackPageInteractionSignals = () => {
    const scrollMilestones = [25, 50, 75, 90];
    const reached = new Set();
    let maxScrollable = 0;

    const refreshMaxScrollable = () => {
        const doc = document.documentElement;
        maxScrollable = doc.scrollHeight - window.innerHeight;
    };

    const emitScrollDepth = () => {
        if (maxScrollable <= 0) {
            return;
        }

        const percent = Math.round((window.scrollY / maxScrollable) * 100);
        scrollMilestones.forEach((milestone) => {
            if (percent >= milestone && !reached.has(milestone)) {
                reached.add(milestone);
                fireTrackingEvent('scroll_depth', {
                    event_category: 'engagement',
                    event_label: `${milestone}%`,
                    percent_scrolled: milestone,
                    page_path: window.location.pathname,
                });
            }
        });
    };

    let scrollDepthRaf = 0;
    const scheduleScrollDepth = () => {
        if (scrollDepthRaf) {
            return;
        }
        scrollDepthRaf = requestAnimationFrame(() => {
            scrollDepthRaf = 0;
            emitScrollDepth();
        });
    };

    refreshMaxScrollable();
    window.addEventListener('scroll', scheduleScrollDepth, { passive: true });
    window.addEventListener('resize', () => {
        refreshMaxScrollable();
        scheduleScrollDepth();
    });

    if (typeof ResizeObserver !== 'undefined') {
        const ro = new ResizeObserver(() => {
            refreshMaxScrollable();
            scheduleScrollDepth();
        });
        ro.observe(document.documentElement);
    }

    // Track engaged time in page.
    [30, 60, 120].forEach((seconds) => {
        window.setTimeout(() => {
            fireTrackingEvent('engaged_time', {
                event_category: 'engagement',
                event_label: `${seconds}s`,
                engaged_seconds: seconds,
                page_path: window.location.pathname,
            });
        }, seconds * 1000);
    });
};

const trackFaqAndForms = () => {
    // FAQ open interactions.
    document.addEventListener('toggle', (event) => {
        const details = event.target.closest('details');
        if (!details || !details.open) {
            return;
        }

        const question = normalizeText(details.querySelector('summary')?.textContent || 'faq_item');
        fireTrackingEvent('faq_open', {
            event_category: 'faq_interaction',
            event_label: question,
            question,
            section: getSectionName(details),
            page_path: window.location.pathname,
        });
    }, true);

    // First interaction per form field.
    const focusedFields = new Set();
    document.addEventListener('focusin', (event) => {
        const field = event.target.closest('input, select, textarea');
        if (!field || !field.form || !field.form.matches('form[data-lead-form="true"]')) {
            return;
        }

        const key = `${field.form.getAttribute('data-lead-source') || 'unknown'}:${field.name || field.id}`;
        if (focusedFields.has(key)) {
            return;
        }
        focusedFields.add(key);

        fireTrackingEvent('form_field_focus', {
            event_category: 'form_interaction',
            event_label: field.name || field.id || 'field',
            field_name: field.name || field.id || 'field',
            form_source: field.form.getAttribute('data-lead-source') || window.location.pathname,
            page_path: window.location.pathname,
        });
    });
};

trackPageInteractionSignals();
trackFaqAndForms();
