/**
 * Vim-style blinking block caret on hover + imperfect marker highlight on text selection.
 */

let selectionChangeHandler = null;

function imperfectClip(seed) {
    const n = (offset) => ((seed * 9301 + offset * 49297) % 233280) / 233280;
    const tl = 2 + n(1) * 5;
    const tr = 2 + n(2) * 5;
    const br = 4 + n(3) * 8;
    const bl = 4 + n(4) * 8;

    return `polygon(
        ${tl}% ${8 + n(5) * 6}%,
        ${96 + n(6) * 3}% ${4 + n(7) * 5}%,
        ${98 - n(8) * 2}% ${100 - br}%,
        ${4 + n(9) * 4}% ${100 - bl}%,
        ${2 + n(10) * 3}% ${40 + n(11) * 20}%
    )`;
}

function imperfectTransform(seed) {
    const n = (offset) => ((seed * 9301 + offset * 49297) % 233280) / 233280;
    const rotate = (n(1) - 0.5) * 1.4;
    const skew = (n(2) - 0.5) * 2;

    return `rotate(${rotate.toFixed(2)}deg) skewX(${skew.toFixed(2)}deg)`;
}

function getSelectionRangeInRoot(root) {
    const selection = window.getSelection();

    if (!selection?.rangeCount || selection.isCollapsed) {
        return null;
    }

    const range = selection.getRangeAt(0);

    if (!root.contains(range.commonAncestorContainer)) {
        return null;
    }

    return range;
}

function paintRangeHighlights(range, highlightLayer) {
    highlightLayer.replaceChildren();

    const seed = range.toString().length + range.startOffset;
    const rects = range.getClientRects();

    for (let index = 0; index < rects.length; index += 1) {
        const rect = rects[index];

        if (rect.width < 1 || rect.height < 1) {
            continue;
        }

        const padX = 4;
        const padY = 3;
        const mark = document.createElement('span');
        mark.className = 'blog-vim-highlight';
        mark.style.left = `${rect.left - padX}px`;
        mark.style.top = `${rect.top - padY + 1}px`;
        mark.style.width = `${rect.width + padX * 2}px`;
        mark.style.height = `${rect.height + padY * 2}px`;
        mark.style.clipPath = imperfectClip(seed + index * 17);
        mark.style.transform = imperfectTransform(seed + index * 31);

        highlightLayer.appendChild(mark);
    }
}

function clearHighlights(highlightLayer) {
    highlightLayer.replaceChildren();
}

function syncSelectionHighlights(root, highlightLayer) {
    const range = getSelectionRangeInRoot(root);

    if (!range) {
        clearHighlights(highlightLayer);

        return;
    }

    paintRangeHighlights(range, highlightLayer);
}

export function initBlogVimCursor(root = document.querySelector('.blog-article-content')) {
    if (!root || root.dataset.vimCursorInit === 'true') {
        return;
    }

    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        return;
    }

    root.dataset.vimCursorInit = 'true';

    const caret = document.createElement('span');
    caret.className = 'blog-vim-caret';
    caret.setAttribute('aria-hidden', 'true');
    document.body.appendChild(caret);

    const highlightLayer = document.createElement('div');
    highlightLayer.className = 'blog-vim-highlight-layer';
    highlightLayer.setAttribute('aria-hidden', 'true');
    document.body.appendChild(highlightLayer);

    let hoverActive = false;
    let selecting = false;

    const positionCaret = (event) => {
        caret.style.left = `${event.clientX}px`;
        caret.style.top = `${event.clientY}px`;
    };

    const showCaret = (event) => {
        if (selecting) {
            return;
        }

        hoverActive = true;
        root.classList.add('blog-vim-cursor-active');
        caret.classList.add('is-visible');
        positionCaret(event);
    };

    const hideCaret = () => {
        hoverActive = false;
        root.classList.remove('blog-vim-cursor-active');
        caret.classList.remove('is-visible');
    };

    const updateHighlights = () => syncSelectionHighlights(root, highlightLayer);

    root.addEventListener('mouseenter', showCaret);
    root.addEventListener('mouseleave', hideCaret);
    root.addEventListener('mousemove', (event) => {
        if (!hoverActive || selecting) {
            return;
        }

        positionCaret(event);
    });

    root.addEventListener('mousedown', () => {
        selecting = true;
        hideCaret();
    });

    root.addEventListener('mouseup', () => {
        selecting = false;
        updateHighlights();
    });

    root.addEventListener('keyup', updateHighlights);

    if (selectionChangeHandler) {
        document.removeEventListener('selectionchange', selectionChangeHandler);
    }

    selectionChangeHandler = updateHighlights;
    document.addEventListener('selectionchange', selectionChangeHandler);

    root.querySelectorAll('a, img, button').forEach((el) => {
        el.addEventListener('mouseenter', hideCaret);
        el.addEventListener('mouseleave', (event) => {
            if (root.contains(event.relatedTarget)) {
                showCaret(event);
            }
        });
    });
}

function bootBlogVimCursor() {
    if (selectionChangeHandler) {
        document.removeEventListener('selectionchange', selectionChangeHandler);
        selectionChangeHandler = null;
    }

    document.querySelectorAll('.blog-vim-caret').forEach((el) => el.remove());
    document.querySelectorAll('.blog-vim-highlight-layer').forEach((el) => el.remove());
    document.querySelectorAll('.blog-article-content[data-vim-cursor-init]').forEach((el) => {
        delete el.dataset.vimCursorInit;
    });

    initBlogVimCursor();
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', bootBlogVimCursor);
} else {
    bootBlogVimCursor();
}

document.addEventListener('livewire:navigated', bootBlogVimCursor);
