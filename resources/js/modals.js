window.addEventListener('DOMContentLoaded', () => {
    const modalBtns = document.querySelectorAll('.modalOpener');
    const closeModalBtns = document.querySelectorAll('.close-modal')
    console.log(closeModalBtns);
    if(modalBtns) {
        modalBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const ref = btn.dataset.modalid;
                if(!ref) return;

                const modalParent = document.getElementById(ref);
                if(!modalParent) return;
                modalParent.classList.toggle('hidden');
            });
        });
    }

    if(closeModalBtns) {
        closeModalBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const ref = btn.dataset.modalid;
                if(!ref) return;

                const modalParent = document.getElementById(ref);
                if(!modalParent) return;
                modalParent.classList.toggle('hidden');
            });
        });
    }
});