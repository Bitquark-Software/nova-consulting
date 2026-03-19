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
