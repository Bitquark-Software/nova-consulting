// import './bootstrap';
import './modals';
import './mobileNav';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const fireTrackingEvent = (eventName, params = {}) => {
    if (typeof window.gtag === 'function') {
        window.gtag('event', eventName, params);
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
