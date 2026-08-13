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
            panels.forEach(function (p, n) { 
                var isOpening = (n === i);
                p.classList.toggle('is-open', isOpening);
                if (!isOpening && p.classList.contains('is-playing-video')) {
                    p.classList.remove('is-playing-video');
                    var vid = p.querySelector('video');
                    if (vid) {
                        vid.pause();
                        vid.currentTime = 0;
                    }
                }
            });
        }
        function currentIndex() {
            return panels.findIndex(function (p) { return p.classList.contains('is-open'); });
        }

        panels.forEach(function (panel, i) {
            panel.addEventListener('click', function (e) {
                if (panel.classList.contains('is-playing-video')) {
                    var video = panel.querySelector('video');
                    if (video) {
                        panel.classList.remove('is-playing-video');
                        video.pause();
                        video.currentTime = 0;
                    }
                    return;
                }

                var playBtn = e.target.closest('.play');
                if (playBtn) {
                    var video = panel.querySelector('video');
                    if (video) {
                        panel.classList.add('is-playing-video');
                        video.muted = false;
                        video.loop = false;
                        video.currentTime = 0;
                        video.play();
                        
                        video.onended = function() {
                            panel.classList.remove('is-playing-video');
                            video.currentTime = 0;
                        };
                    }
                    return;
                }
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
            
            var playingMedias = track.querySelectorAll('.testi-media.is-playing-video');
            playingMedias.forEach(function(m) {
                m.classList.remove('is-playing-video');
                var v = m.querySelector('video');
                if (v) {
                    v.pause();
                    v.currentTime = 0;
                }
            });
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

        var testiCards = Array.prototype.slice.call(track.querySelectorAll('.testi-card'));
        testiCards.forEach(function(card) {
            var media = card.querySelector('.testi-media');
            if (media) {
                media.addEventListener('click', function(e) {
                    if (media.classList.contains('is-playing-video')) {
                        var video = media.querySelector('video');
                        if (video) {
                            media.classList.remove('is-playing-video');
                            video.pause();
                            video.currentTime = 0;
                        }
                        return;
                    }
                    var playBtn = e.target.closest('.play');
                    if (playBtn) {
                        var video = media.querySelector('video');
                        if (video) {
                            media.classList.add('is-playing-video');
                            video.muted = false;
                            video.currentTime = 0;
                            video.play();
                            video.onended = function() {
                                media.classList.remove('is-playing-video');
                                video.currentTime = 0;
                            };
                        }
                    }
                });
            }
        });
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
    document.addEventListener('DOMContentLoaded', () => {
        const cursor = document.querySelector('.custom-cursor');
        
        // Update circle position on mouse move
        document.addEventListener('mousemove', (e) => {
            cursor.style.left = e.clientX + 'px';
            cursor.style.top = e.clientY + 'px';
        });

        // Add visual feedback on click (shrinks the circle slightly)
        document.addEventListener('mousedown', () => {
            if (!cursor.classList.contains('cursor-hover')) {
                cursor.style.transform = 'translate(-50%, -50%) scale(0.7)';
            } else {
                cursor.style.transform = 'translate(-50%, -50%) scale(0.9)'; // less shrink if already large
            }
        });
        document.addEventListener('mouseup', () => {
            cursor.style.transform = 'translate(-50%, -50%) scale(1)';
        });

        // Hover effect on buttons, links, and cards using event delegation
        document.addEventListener('mouseover', (e) => {
            if (e.target.closest('a, button, .card, .btn')) {
                cursor.classList.add('cursor-hover');
            }
            if (e.target.closest('.card')) {
                cursor.classList.add('cursor-black');
            }
            if (e.target.closest('.pill-arrow')) {
                cursor.classList.add('cursor-primary');
            }
        });

        document.addEventListener('mouseout', (e) => {
            if (!e.relatedTarget || !e.relatedTarget.closest('a, button, .card, .btn')) {
                cursor.classList.remove('cursor-hover');
            }
            if (!e.relatedTarget || !e.relatedTarget.closest('.card')) {
                cursor.classList.remove('cursor-black');
            }
            if (!e.relatedTarget || !e.relatedTarget.closest('.pill-arrow')) {
                cursor.classList.remove('cursor-primary');
            }
        });

        // Ring hover interactions
        const rings = [
            { href: '#p1', labelClass: '.lbl-strategy' },
            { href: '#p2', labelClass: '.lbl-story' },
            { href: '#p3', labelClass: '.lbl-exec' },
            { href: '#p4', labelClass: '.lbl-results' }
        ];

        rings.forEach(item => {
            const useEl = document.querySelector(`use[href="${item.href}"]`);
            const label = document.querySelector(item.labelClass);
            
            if (useEl && label) {
                const textPath = document.querySelector(`textPath[href="${item.href}"]`);
                const textEl = textPath ? textPath.closest('text') : null;

                const enter = () => {
                    label.classList.add('is-hovered');
                    useEl.classList.add('is-hovered');
                };
                const leave = () => {
                    label.classList.remove('is-hovered');
                    useEl.classList.remove('is-hovered');
                };

                useEl.style.cursor = 'pointer';
                useEl.addEventListener('mouseenter', enter);
                useEl.addEventListener('mouseleave', leave);

                if (textEl) {
                    textEl.style.cursor = 'pointer';
                    textEl.addEventListener('mouseenter', enter);
                    textEl.addEventListener('mouseleave', leave);
                }
            }
        });
    });
