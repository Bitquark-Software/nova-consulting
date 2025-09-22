import '../css/app.css';
import "./modals";

document.addEventListener('DOMContentLoaded', () => {
    const navButton = document.querySelector('#nav-btn');

    if(!navButton) return;

    navButton.addEventListener('click', () => {
        const navWrapper = document.getElementById('mobile-nav-wrapper');

        if(!navWrapper) return;

        navWrapper.classList.toggle('hidden');
    });
});