/* Black Line Marketing — home page interactions */
(function () {
    'use strict';

    /* ---------- Mobile nav ---------- */
    var burger = document.getElementById('burger');
    var nav = document.getElementById('nav');

    if (burger && nav) {
        burger.addEventListener('click', function () {
            var open = nav.classList.toggle('is-open');
            burger.classList.toggle('is-open', open);
            burger.setAttribute('aria-expanded', String(open));
        });

        nav.addEventListener('click', function (e) {
            var drop = e.target.closest('.has-drop > a');
            if (drop && window.matchMedia('(max-width:980px)').matches) {
                e.preventDefault();
                drop.parentElement.classList.toggle('is-open');
                return;
            }
            if (e.target.closest('a')) {
                nav.classList.remove('is-open');
                burger.classList.remove('is-open');
                burger.setAttribute('aria-expanded', 'false');
            }
        });
    }

    /* ---------- Work accordion ---------- */
    var strip = document.getElementById('workStrip');
    if (strip) {
        var panels = Array.prototype.slice.call(strip.querySelectorAll('.work-panel'));

        function openPanel(i) {
            i = (i + panels.length) % panels.length;
            panels.forEach(function (p, n) { p.classList.toggle('is-open', n === i); });
        }
        function currentIndex() {
            return panels.findIndex(function (p) { return p.classList.contains('is-open'); });
        }

        panels.forEach(function (panel, i) {
            panel.addEventListener('click', function (e) {
                if (e.target.closest('.play')) return;   // let the play button do its own thing
                openPanel(i);
            });
        });

        var prev = document.getElementById('workPrev');
        var next = document.getElementById('workNext');
        if (prev) prev.addEventListener('click', function () { openPanel(currentIndex() - 1); });
        if (next) next.addEventListener('click', function () { openPanel(currentIndex() + 1); });
    }

    /* ---------- Testimonial slider ---------- */
    var track = document.getElementById('tTrack');
    if (track) {
        var slides = track.children.length;
        var dots = Array.prototype.slice.call(document.querySelectorAll('#tDots .dot'));
        var index = 0;

        function goTo(i) {
            index = (i + slides) % slides;
            track.style.transform = 'translateX(' + (-index * 100) + '%)';
            dots.forEach(function (d, n) { d.classList.toggle('is-active', n === index); });
        }

        dots.forEach(function (d, i) { d.addEventListener('click', function () { goTo(i); }); });

        var tPrev = document.getElementById('tPrev');
        var tNext = document.getElementById('tNext');
        if (tPrev) tPrev.addEventListener('click', function () { goTo(index - 1); });
        if (tNext) tNext.addEventListener('click', function () { goTo(index + 1); });

        /* swipe on touch devices */
        var startX = null;
        track.addEventListener('touchstart', function (e) { startX = e.touches[0].clientX; }, { passive: true });
        track.addEventListener('touchend', function (e) {
            if (startX === null) return;
            var dx = e.changedTouches[0].clientX - startX;
            if (Math.abs(dx) > 50) goTo(index + (dx < 0 ? 1 : -1));
            startX = null;
        });

        goTo(0);
    }

    /* ---------- Newsletter (demo only) ---------- */
    var form = document.querySelector('.news-form');
    if (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            var input = form.querySelector('input');
            if (input && input.value) {
                input.value = '';
                input.placeholder = 'Thanks — you are subscribed!';
                setTimeout(function () { input.placeholder = 'Email'; }, 3500);
            }
        });
    }
})();
