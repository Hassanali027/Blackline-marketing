<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Black Line Marketing — Where Brands Become Icons</title>
<meta name="description" content="We build identity systems, campaigns, and digital experiences for labels ready to lead their category not blend into it.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<style>
/* =========================================================
   Black Line Marketing — Home Page
   Design reference: Figma "Black Line Marketing" (node 1:281)
   ========================================================= */

:root {
    --bg: #28282B;
    --bg-soft: #2E2E31;
    --text: #FAF9F6;
    --muted: #DEDEDE;
    --muted-2: #B9B9BA;

    --gold: #E5CA83;
    --gold-deep: #BC9554;
    --gold-line: #4B4430;
    --gold-line-hover: #C9A961;

    --grad-gold: linear-gradient(90deg, #B0854A 0%, #E8C988 42%, #E4C982 58%, #BB9362 100%);
    --grad-gold-text: linear-gradient(100deg, #BC9554 0%, #E9CE8B 45%, #E5CA83 60%, #C09A5C 100%);

    --container: 1242px;
    --radius: 16px;
    --radius-lg: 22px;

    --ease: cubic-bezier(.22, .61, .36, 1);
}

*,
*::before,
*::after {
    box-sizing: border-box
}

html {
    scroll-behavior: smooth
}

body {
    margin: 0;
    background: var(--bg);
    color: var(--text);
    font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
    font-size: 16px;
    line-height: 1.6;
    -webkit-font-smoothing: antialiased;
    overflow-x: hidden;
}

img {
    max-width: 100%;
    display: block
}

a {
    color: inherit;
    text-decoration: none
}

ul {
    list-style: none;
    margin: 0;
    padding: 0
}

button {
    font-family: inherit;
    border: 0;
    background: none;
    cursor: pointer;
    color: inherit
}

.container {
    width: 100%;
    max-width: var(--container);
    margin-inline: auto;
    padding-inline: 24px;
}

/* ---------- Typography helpers ---------- */
.h2 {
    font-size: clamp(28px, 3.1vw, 44px);
    line-height: 1.24;
    font-weight: 800;
    letter-spacing: -.01em;
    margin: 0 0 14px;
}

.center {
    text-align: center
}

.gold {
    background: var(--grad-gold-text);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
}

.section-title {
    margin-bottom: 6px
}

.section-sub {
    margin: 0 0 44px;
    color: var(--muted);
    font-size: 15.5px;
    font-weight: 300;
}

.lead {
    color: var(--text);
    font-weight: 300;
    font-size: 15.5px;
    line-height: 1.85;
    margin: 0 0 22px;
}

/* ---------- Buttons ---------- */
.btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    font-weight: 700;
    font-size: 15px;
    border-radius: 8px;
    padding: 14px 26px;
    transition: transform .25s var(--ease), box-shadow .25s var(--ease), background .25s var(--ease), color .25s var(--ease);
    white-space: nowrap;
}

.btn svg {
    width: 18px;
    height: 18px;
    flex: none;
    transition: transform .25s var(--ease)
}

.btn-gold {
    background: var(--grad-gold);
    background-size: 180% 100%;
    color: #24201A;
    box-shadow: 0 6px 18px rgba(0, 0, 0, .28);
}

.btn-gold:hover {
    background-position: 100% 0;
    transform: translateY(-2px);
    box-shadow: 0 12px 26px rgba(196, 155, 84, .32);
}

.btn-gold:hover svg {
    transform: translateX(4px)
}

.btn-ghost {
    border: 1.5px solid rgba(250, 249, 246, .85);
    color: #fff;
    background: rgba(255, 255, 255, .04);
    backdrop-filter: blur(2px);
}

.btn-ghost:hover {
    background: #fff;
    color: #24201A;
    transform: translateY(-2px);
}

.btn-lg {
    padding: 16px 30px;
    font-size: 16px
}

.btn-sm {
    padding: 11px 20px;
    font-size: 14px
}

/* =========================================================
   HEADER
   ========================================================= */
.site-header {
    position: sticky;
    top: 0;
    z-index: 60;
    background: var(--bg);
    border-bottom: 1px solid rgba(255, 255, 255, .05);
}

.header-inner {
    height: 80px;
    display: flex;
    align-items: center;
    gap: 28px;
}

.logo img {
    width: 217px;
    height: 54px;
}

.nav {
    margin-inline: auto
}

.nav-list {
    display: flex;
    align-items: center;
    gap: 40px
}

.nav-list>li {
    position: relative
}

.nav-list a {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    font-size: 15.5px;
    font-weight: 600;
    padding: 8px 0;
    position: relative;
    transition: color .22s var(--ease);
}

.nav-list>li>a::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    height: 2px;
    width: 0;
    background: var(--grad-gold);
    transition: width .28s var(--ease);
}

.nav-list>li>a:hover {
    color: var(--gold)
}

.nav-list>li>a:hover::after {
    width: 100%
}

.chev {
    width: 15px;
    height: 15px;
    transition: transform .25s var(--ease)
}

.has-drop:hover .chev {
    transform: rotate(180deg)
}

.drop {
    position: absolute;
    top: calc(100% + 14px);
    left: -18px;
    min-width: 236px;
    background: #1F1F22;
    border: 1px solid var(--gold-line);
    border-radius: 14px;
    padding: 10px;
    display: flex;
    flex-direction: column;
    opacity: 0;
    visibility: hidden;
    transform: translateY(10px);
    transition: .28s var(--ease);
    box-shadow: 0 22px 44px rgba(0, 0, 0, .45);
}

.has-drop:hover .drop {
    opacity: 1;
    visibility: visible;
    transform: translateY(0)
}

.drop a {
    font-size: 14.5px;
    font-weight: 500;
    padding: 9px 14px;
    border-radius: 9px;
    color: var(--muted);
}

.drop a:hover {
    background: rgba(229, 202, 131, .1);
    color: var(--gold)
}

.burger {
    display: none;
    width: 30px;
    height: 22px;
    flex-direction: column;
    justify-content: space-between
}

.burger span {
    display: block;
    height: 2px;
    background: var(--gold);
    border-radius: 2px;
    transition: .3s var(--ease)
}

.burger.is-open span:nth-child(1) {
    transform: translateY(10px) rotate(45deg)
}

.burger.is-open span:nth-child(2) {
    opacity: 0
}

.burger.is-open span:nth-child(3) {
    transform: translateY(-10px) rotate(-45deg)
}

/* =========================================================
   HERO
   ========================================================= */
.hero {
    position: relative;
    min-height: 610px;
    display: flex;
    align-items: center;
    overflow: hidden;
}

.hero-bg {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.hero-overlay {
    position: absolute;
    inset: 0;
    background:
        radial-gradient(60% 70% at 50% 45%, rgba(10, 12, 18, .30) 0%, rgba(10, 12, 18, .55) 100%),
        linear-gradient(180deg, rgba(20, 22, 28, .35) 0%, rgba(20, 22, 28, .18) 45%, rgba(40, 40, 43, .55) 100%);
}

.hero-inner {
    position: relative;
    text-align: center;
    padding-block: 96px
}

.hero-title {
    font-size: clamp(38px, 5.6vw, 80px);
    line-height: 1.08;
    font-weight: 800;
    letter-spacing: -.02em;
    margin: 0 0 22px;
    text-shadow: 0 6px 30px rgba(0, 0, 0, .35);
}

.hero-sub {
    margin: 0 auto 34px;
    max-width: 640px;
    font-size: 17px;
    font-weight: 300;
    color: #F1F0EE;
    line-height: 1.65;
}

.hero-actions {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap
}

/* =========================================================
   ABOUT
   ========================================================= */
.about {
    padding-block: 25px
}

.about-grid {
    display: grid;
    grid-template-columns: 529px 1fr;
    gap: 56px;
    align-items: center;
}

.about-media img {
    width: 100%;
    border-radius: var(--radius-lg);
    aspect-ratio: 529/489;
    object-fit: cover;
}

.about-copy .h2 {
    max-width: 660px;
    margin-bottom: 22px
}

.about-copy .lead {
    text-align: justify;
    max-width: 660px
}

.pull-quote {
    margin: 26px 0 0;
    position: relative;
    padding-left: 22px;
    font-size: 18px;
    font-weight: 400;
    line-height: 1.55;
    color: #fff;
}

.pull-quote .q {
    position: absolute;
    font-size: 30px;
    line-height: 1;
    color: var(--gold);
    font-weight: 700;
}

.q-open {
    left: 0;
    top: -2px
}

.q-close {
    position: static;
    margin-left: 6px
}

/* =========================================================
   SERVICES
   ========================================================= */
.services {
    padding-block: 10px
}

.cards {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 26px;
}

.card {
    border: 1px solid var(--gold-line);
    border-radius: var(--radius);
    padding: 28px 22px 26px;
    display: flex;
    flex-direction: column;
    background: linear-gradient(180deg, rgba(255, 255, 255, .012), rgba(255, 255, 255, 0));
    transition: transform .35s var(--ease), border-color .35s var(--ease), box-shadow .35s var(--ease), background .35s var(--ease);
}

.card:hover {
    transform: translateY(-8px);
    border-color: var(--gold-line-hover);
    background: var(--grad-gold);
    box-shadow: 0 20px 40px rgba(0, 0, 0, .35);
    color: #111;
}

.card-icon {
    width: 66px;
    height: 66px;
    border: 1px solid var(--gold-line);
    border-radius: 14px;
    display: grid;
    place-items: center;
    color: var(--gold);
    margin-bottom: 26px;
    transition: .35s var(--ease);
}

.card-icon svg,
.card-icon img {
    width: 28px;
    height: 28px
}

.card:hover .card-icon {
    border-color: #111;
    background: var(--bg);
    color: var(--gold);
    transform: translateY(-2px);
}

.card h3 {
    margin: 0 0 14px;
    font-size: 20px;
    font-weight: 500;
    line-height: 1.3;
}

.card p {
    margin: 0 0 30px;
    font-size: 14.5px;
    font-weight: 500;
    color: var(--muted);
    line-height: 1.8;
}

.card:hover h3,
.card:hover p {
    color: #111;
}

.pill-arrow {
    margin-top: auto;
    height: 74px;
    border: 1px solid var(--gold-line-hover);
    border-radius: 999px;
    display: flex;
    align-items: center;
    gap: 0;
    padding-inline: 22px;
    color: var(--gold-line-hover);
    transition: 1.4s var(--ease);
}

.pill-arrow .circle {
    width: 42px;
    height: 42px;
    border: 1px solid currentColor;
    border-radius: 50%;
    display: grid;
    place-items: center;
    flex: none;
    transition: 1.4s var(--ease);
}

.pill-arrow .circle svg {
    width: 17px;
    height: 17px
}

.pill-arrow .line {
    height: 1px;
    flex: 1;
    background: currentColor;
    margin-left: 14px;
    transform-origin: left;
    transition: 1.4s var(--ease);
}

.pill-arrow:hover {
    background: rgba(229, 202, 131, .08);
    color: var(--gold);
    border-color: #000;
}

.pill-arrow:hover .circle {
    background: var(--grad-gold);
    border-color: transparent;
    color: #24201A;
    transform: translateX(6px);
}

.pill-arrow:hover .line {
    transform: scaleX(.88)
}

/* Card Hover -> Pill Arrow changes */
.card:hover .pill-arrow {
    border-color: #000;
    background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=600&q=80') center/cover;
    color: #fff;
    padding-inline: 30px;
    justify-content: space-between;
}

.pill-arrow::before {
    content: 'Learn More';
    font-size: 22px;
    font-weight: 600;
    color: #fff;
    opacity: 0;
    width: 0;
    overflow: hidden;
    white-space: nowrap;
    transition: opacity 1.4s var(--ease), width 1.4s var(--ease), margin 1.4s var(--ease);
}

.card:hover .pill-arrow::before {
    opacity: 1;
    width: auto;
    margin-right: auto;
}

.card:hover .pill-arrow .line {
    opacity: 0;
    flex: 0;
    margin: 0;
}

.card:hover .pill-arrow .circle {
    border-color: #fff;
    color: #fff; /* Ensure arrow is white */
}

/* =========================================================
   WORK / PORTFOLIO
   ========================================================= */
.work {
    padding-block: 60px
}

.work-strip {
    position: relative;
    display: flex;
    gap: 16px;
    height: 537px;
}

.work-panel {
    position: relative;
    border-radius: var(--radius);
    overflow: hidden;
    flex: 0 0 92px;
    transition: flex-basis .6s var(--ease);
    background: #1c1c1f;
}

.work-panel.is-open {
    flex: 1 1 auto
}

.work-panel>img {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.work-panel::after {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(90deg, rgba(12, 14, 18, .78) 0%, rgba(12, 14, 18, .42) 45%, rgba(12, 14, 18, .2) 100%);
    opacity: 0;
    transition: opacity .5s var(--ease);
}

.work-panel.is-open::after {
    opacity: 1
}

.work-vtitle {
    position: absolute;
    left: 50%;
    top: 34px;
    transform: translateX(-50%) rotate(90deg);
    transform-origin: center;
    white-space: nowrap;
    font-weight: 700;
    font-size: 17px;
    letter-spacing: .01em;
    z-index: 3;
    text-shadow: 0 2px 12px rgba(0, 0, 0, .6);
    transition: opacity .35s var(--ease);
}

.work-panel.is-open .work-vtitle {
    opacity: 0;
    pointer-events: none
}

.play {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background: #F5D45C;
    color: #28282B;
    display: grid;
    place-items: center;
    z-index: 4;
    opacity: 0;
    transition: .4s var(--ease);
    box-shadow: 0 10px 30px rgba(0, 0, 0, .35);
}

.play svg {
    width: 30px;
    height: 30px;
    margin-left: 2px
}

.work-panel:not(.is-open) .play {
    pointer-events: none
}

.work-panel.is-open .play {
    opacity: 1
}

.play:hover {
    transform: translate(-50%, -50%) scale(1.08);
    background: #FBE49E
}

.work-body {
    position: absolute;
    left: 0;
    bottom: 0;
    z-index: 3;
    padding: 0 0 46px 84px;
    max-width: 560px;
    opacity: 0;
    transform: translateY(16px);
    transition: opacity .45s var(--ease) .15s, transform .45s var(--ease) .15s;
    pointer-events: none;
}

.work-panel.is-open .work-body {
    opacity: 1;
    transform: none;
    pointer-events: auto
}

.work-body h3 {
    margin: 0 0 8px;
    font-size: 38px;
    font-weight: 800;
    letter-spacing: -.01em;
}

.work-metric {
    margin: 0 0 14px;
    font-size: 17px;
    font-weight: 700;
    color: var(--gold);
}

.work-desc {
    margin: 0 0 22px;
    font-size: 15px;
    font-weight: 300;
    line-height: 1.6;
    color: #EDECEA;
}

.work-plus {
    position: absolute;
    left: 50%;
    bottom: 28px;
    transform: translateX(-50%);
    width: 38px;
    height: 38px;
    border: 1px solid rgba(255, 255, 255, .85);
    border-radius: 50%;
    display: grid;
    place-items: center;
    color: #fff;
    z-index: 4;
    transition: .3s var(--ease);
}

.work-plus svg {
    width: 17px;
    height: 17px
}

.work-plus:hover {
    background: var(--grad-gold);
    border-color: transparent;
    color: #24201A
}

.work-panel.is-open .work-plus {
    opacity: 0;
    pointer-events: none
}

.work-nav {
    position: absolute;
    bottom: 36px;
    right: calc(3 * (92px + 16px) + 32px);
    display: flex;
    gap: 14px;
    z-index: 6;
}

.round-btn {
    width: 44px;
    height: 44px;
    border: 1px solid rgba(255, 255, 255, .8);
    border-radius: 50%;
    display: grid;
    place-items: center;
    color: #fff;
    transition: .3s var(--ease);
}

.round-btn svg {
    width: 18px;
    height: 18px
}

.round-btn:hover {
    background: var(--grad-gold);
    border-color: transparent;
    color: #24201A
}

/* =========================================================
   STATS
   ========================================================= */
.stats {
    padding-block: 88px
}

.stats-grid {
    display: grid;
    grid-template-columns: minmax(0, 470px) 1fr;
    gap: 70px;
    align-items: center;
}

.stats-emoji {
    width: 56px;
    height: auto;
    margin-bottom: 6px
}

.stats-copy .h2 {
    font-size: clamp(28px, 2.9vw, 40px);
    line-height: 1.28;
    margin-bottom: 16px
}

.stats-copy .lead {
    font-size: 14.5px;
    line-height: 1.7;
    margin: 0
}

.stats-nums {
    display: grid;
    grid-template-columns: 1fr 1fr;
    text-align: center;
}

.stat {
    padding: 44px 20px
}

.stat:nth-child(1) {
    border-right: 1px solid rgba(255, 255, 255, .16);
    border-bottom: 1px solid rgba(255, 255, 255, .16)
}

.stat:nth-child(2) {
    border-bottom: 1px solid rgba(255, 255, 255, .16)
}

.stat:nth-child(3) {
    border-right: 1px solid rgba(255, 255, 255, .16)
}

.stat-num {
    display: block;
    font-size: clamp(32px, 3.6vw, 46px);
    font-weight: 800;
    line-height: 1.1;
    margin-bottom: 8px;
}

.stat-label {
    font-size: 15px;
    font-weight: 400;
    color: var(--text)
}

/* =========================================================
   TESTIMONIALS
   ========================================================= */
.testi {
    padding-block: 60px
}

.testi .h2 {
    margin-bottom: 44px
}

.testi-wrap {
    display: flex;
    align-items: center;
    gap: 8px;
}

.testi-arrow {
    width: 40px;
    height: 40px;
    display: grid;
    place-items: center;
    color: var(--gold);
    flex: none;
    transition: .25s var(--ease);
}

.testi-arrow svg {
    width: 22px;
    height: 22px
}

.testi-arrow:hover {
    transform: scale(1.2)
}

.testi-viewport {
    overflow: hidden;
    flex: 1;
    border-radius: var(--radius-lg)
}

.testi-track {
    display: flex;
    transition: transform .6s var(--ease);
}

.testi-card {
    flex: 0 0 100%;
    margin: 0;
    display: grid;
    grid-template-columns: 465px 1fr;
    background: #FAF9F6;
    border-radius: var(--radius-lg);
    overflow: hidden;
    min-height: 470px;
}

.testi-media {
    position: relative;
    background: #D9D6D0
}

.testi-media img {
    width: 100%;
    height: 100%;
    object-fit: cover
}

.testi-media .play {
    opacity: 1;
    width: 88px;
    height: 88px
}

.testi-body {
    margin: 0;
    padding: 56px 62px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    color: #1B1B1D;
}

.testi-logo {
    height: 36px;
    width: auto;
    align-self: flex-start;
    margin-bottom: 26px
}

.testi-body p {
    margin: 0 0 30px;
    font-size: 16px;
    font-weight: 400;
    line-height: 1.9;
    color: #26262A;
}

.testi-body figcaption {
    display: flex;
    flex-direction: column;
    gap: 4px
}

.t-name {
    font-size: 18px;
    font-weight: 700;
    color: var(--gold-deep)
}

.t-role {
    font-size: 15px;
    color: #3A3A3E
}

.dots {
    display: flex;
    gap: 11px;
    justify-content: center;
    margin-top: 26px
}

.dot {
    width: 11px;
    height: 11px;
    border-radius: 50%;
    border: 1px solid var(--gold);
    transition: .25s var(--ease);
}

.dot.is-active,
.dot:hover {
    background: var(--gold)
}

/* =========================================================
   PROCESS
   ========================================================= */
.process {
    padding-block: 70px
}

.ring-wrap {
    position: relative;
    width: 100%;
    margin: 34px auto 0;
    aspect-ratio: 1242/460;
}

.ring {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    overflow: visible;
}

.arc {
    fill: none;
    stroke-width: 65;
}

.tri {
    fill: #28282B
}

.step-txt {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 19px;
    font-weight: 800;
    fill: #28282B;
    letter-spacing: .01em;
}

.conn {
    fill: none;
    stroke: #FAF9F6;
    stroke-width: 1.6
}

.node {
    fill: #FAF9F6
}

.ring-core {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    width: 17.7%;
    aspect-ratio: 1;
    border-radius: 50%;
    background: #FAF9F6;
    color: #28282B;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 6px;
    text-align: center;
    padding: 10px;
}

.ring-core strong {
    font-size: clamp(13px, 1.5vw, 20px);
    font-weight: 800;
    line-height: 1.2
}

.ring-core span {
    font-size: clamp(10px, 1.1vw, 15px);
    font-weight: 600;
    line-height: 1.2
}

.ring-core .gold {
    background: linear-gradient(90deg, #BC9554, #D9A94E);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
}

.ring-label {
    position: absolute;
    font-size: clamp(15px, 1.75vw, 23px);
    font-weight: 800;
    white-space: nowrap;
    transform: translateY(-50%);
}

.lbl-strategy,
.lbl-results {
    right: 75.6%;
    text-align: right
}

.lbl-story,
.lbl-exec {
    left: 76.1%
}

.lbl-strategy,
.lbl-story {
    top: 37.4%
}

.lbl-results,
.lbl-exec {
    top: 63.5%
}

/* compact step list (small screens) */
.process-steps {
    display: none;
    margin: 26px 0 0;
    padding: 0;
    gap: 14px
}

.process-steps li {
    list-style: none;
    border: 1px solid var(--gold-line);
    border-radius: 14px;
    padding: 18px 20px;
}

.ps-num {
    display: inline-block;
    font-size: 12px;
    font-weight: 800;
    letter-spacing: .12em;
    text-transform: uppercase;
    color: var(--gold);
    margin-bottom: 6px;
}

.process-steps h3 {
    margin: 0;
    font-size: 20px;
    font-weight: 700
}

.ps-core {
    background: #FAF9F6;
    color: #28282B;
    border-color: transparent;
    text-align: center;
}

.ps-core strong {
    display: block;
    font-size: 19px;
    font-weight: 800
}

.ps-core span {
    font-size: 14px;
    font-weight: 600
}

.ps-core .gold {
    background: linear-gradient(90deg, #BC9554, #D9A94E);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
}

/* =========================================================
   CTA
   ========================================================= */
.cta {
    padding-block: 60px
}

.cta-box {
    position: relative;
    border-radius: var(--radius-lg);
    overflow: hidden;
    min-height: 446px;
    display: grid;
    place-items: center;
}

.cta-bg {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 1.1s var(--ease);
}

.cta-box:hover .cta-bg {
    transform: scale(1.05)
}

.cta-box::after {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(10, 14, 24, .30), rgba(10, 14, 24, .52));
}

.cta-inner {
    position: relative;
    z-index: 2;
    text-align: center;
    padding: 60px 24px
}

.cta-inner h2 {
    margin: 0 0 14px;
    font-size: clamp(28px, 3.6vw, 44px);
    font-weight: 800;
    letter-spacing: -.01em;
}

.cta-inner p {
    margin: 0 auto 30px;
    font-size: 16.5px;
    font-weight: 300;
    color: #F2F1EF;
    max-width: 560px;
}

/* =========================================================
   NEWSLETTER
   ========================================================= */
.newsletter {
    padding-block: 52px;
    border-bottom: 1px solid rgba(255, 255, 255, .12)
}

.news-grid {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 40px;
    flex-wrap: nowrap;
    width: 100%;
}

.newsletter h2 {
    margin: 0;
    font-size: 28px;
    font-weight: 800;
    white-space: nowrap;
    flex-shrink: 1;
}

.news-form {
    display: flex;
    gap: 12px;
    align-items: stretch;
    justify-content: flex-end;
    flex: 1 1 auto;
}

.news-form input {
    width: 100%;
    max-width: 449px;
    height: 60px;
    min-width: 0;
    background: transparent;
    border: 1px solid rgba(255, 255, 255, .55);
    border-radius: 8px;
    padding: 0 22px;
    color: #fff;
    font-size: 16px;
    font-family: inherit;
    outline: none;
    transition: border-color .25s var(--ease);
}

.news-form input::placeholder {
    color: #B6B6B7
}

.news-form input:focus {
    border-color: var(--gold)
}

.news-form .btn {
    border-radius: 8px;
    height: 62px;
    padding-inline: 32px;
    font-size: 16px;
}

/* =========================================================
   FOOTER
   ========================================================= */
.site-footer {
    padding-top: 58px
}

.foot-grid {
    display: grid;
    grid-template-columns: 1.55fr 1fr 1.15fr 1.1fr;
    gap: 44px;
    padding-bottom: 52px;
}

.foot-logo {
    width: 217px;
    height: 54px;
    margin-bottom: 20px
}

.foot-brand p {
    margin: 0 0 26px;
    max-width: 360px;
    font-size: 15px;
    font-weight: 300;
    line-height: 1.75;
    color: var(--text);
}

.socials {
    display: flex;
    gap: 12px
}

.socials a {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: var(--grad-gold);
    color: #28282B;
    display: grid;
    place-items: center;
    transition: .28s var(--ease);
}

.socials svg {
    width: 17px;
    height: 17px
}

.socials a:hover {
    transform: translateY(-3px)
}

.foot-col h4 {
    margin: 0 0 24px;
    font-size: 18px;
    font-weight: 800;
    letter-spacing: .03em;
    background: var(--grad-gold-text);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
}

.foot-col li {
    margin-bottom: 14px
}

.foot-col a {
    font-size: 15px;
    font-weight: 400;
    color: var(--text);
    transition: color .22s var(--ease), padding-left .22s var(--ease);
}

.foot-col a:hover {
    color: var(--gold);
    padding-left: 5px
}

.contact-list li {
    display: flex;
    gap: 14px;
    align-items: flex-start;
    margin-bottom: 18px;
    font-size: 15px
}

.ci {
    width: 22px;
    height: 22px;
    flex: none;
    color: var(--gold);
    display: grid;
    place-items: center;
    margin-top: 1px;
}

.ci svg {
    width: 19px;
    height: 19px
}

.foot-bottom {
    border-top: 1px solid rgba(255, 255, 255, .12);
    padding-block: 24px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 24px;
    flex-wrap: wrap;
}

.foot-bottom p {
    margin: 0;
    font-size: 15px;
    color: var(--text)
}

.pay {
    display: flex;
    align-items: center;
    gap: 8px;
    flex-wrap: wrap
}

.pay img {
    height: 30px;
    width: auto;
    border-radius: 4px
}

/* =========================================================
   RESPONSIVE
   ========================================================= */
@media (max-width:1180px) {
    .cards {
        grid-template-columns: repeat(2, 1fr)
    }

    .foot-grid {
        grid-template-columns: 1fr 1fr;
        gap: 40px
    }

    .work-body {
        padding-left: 52px
    }

    .work-body h3 {
        font-size: 32px
    }
}

@media (max-width:980px) {
    .burger {
        display: flex
    }

    .nav {
        position: fixed;
        inset: 80px 0 auto 0;
        background: #1F1F22;
        border-bottom: 1px solid var(--gold-line);
        padding: 18px 24px 26px;
        margin: 0;
        transform: translateY(-120%);
        transition: transform .4s var(--ease);
        z-index: 55;
    }

    .nav.is-open {
        transform: none
    }

    .nav-list {
        flex-direction: column;
        align-items: flex-start;
        gap: 6px
    }

    .nav-list>li {
        width: 100%
    }

    .nav-list a {
        width: 100%;
        padding: 12px 0
    }

    .drop {
        position: static;
        opacity: 1;
        visibility: visible;
        transform: none;
        box-shadow: none;
        background: transparent;
        border: 0;
        padding: 0 0 8px 12px;
        display: none;
    }

    .has-drop:hover .drop,
    .has-drop.is-open .drop {
        display: flex
    }

    .header-cta {
        margin-left: auto;
        width: 176px;
        height: 54px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0;
        font-size: 14px
    }

    .about-grid {
        grid-template-columns: 1fr;
        gap: 34px
    }

    .stats-grid {
        grid-template-columns: 1fr;
        gap: 40px
    }

    .testi-card {
        grid-template-columns: 1fr
    }

    .testi-media {
        height: 300px
    }

    .testi-body {
        padding: 38px 30px
    }

    .ring-label {
        font-size: 15px
    }
}

@media (max-width:820px) {
    .work-strip {
        flex-direction: column;
        height: auto;
        padding-bottom: 70px
    }

    .work-nav {
        right: auto;
        left: 50%;
        transform: translateX(-50%);
        bottom: 8px
    }

    .work-panel.is-open .play {
        top: 30%;
        width: 64px;
        height: 64px
    }

    .ring-wrap {
        display: none
    }

    .process-steps {
        display: grid;
        grid-template-columns: 1fr 1fr
    }

    .ps-core {
        grid-column: 1/-1
    }

    .work-panel {
        flex: 0 0 auto;
        height: 150px
    }

    .work-panel.is-open {
        height: 470px
    }

    .work-vtitle {
        top: 50%;
        left: 26px;
        transform: translateY(-50%) rotate(0deg);
    }

    .work-body {
        padding: 0 26px 30px;
        max-width: none
    }

    .news-grid {
        flex-direction: column;
        align-items: stretch
    }

    .news-form {
        flex: 1 1 auto
    }
}

@media (max-width:640px) {
    .container {
        padding-inline: 18px
    }

    .header-inner {
        gap: 12px
    }

    .logo img {
        width: 217px;
        height: 54px;
    }

    .header-cta {
        width: 176px;
        height: 54px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0;
        font-size: 13px
    }

    .process-steps {
        grid-template-columns: 1fr
    }

    .hero {
        min-height: 520px
    }

    .hero-inner {
        padding-block: 64px
    }

    .hero-actions .btn {
        width: 100%;
        justify-content: center
    }

    .cards {
        grid-template-columns: 1fr
    }

    .stats-nums {
        grid-template-columns: 1fr
    }

    .stat {
        padding: 30px 10px;
        border: 0 !important;
        border-bottom: 1px solid rgba(255, 255, 255, .16) !important
    }

    .stat:last-child {
        border-bottom: 0 !important
    }

    .foot-grid {
        grid-template-columns: 1fr
    }

    .foot-bottom {
        flex-direction: column;
        text-align: center
    }

    .news-form {
        flex-direction: column
    }

    .news-form input {
        border-right: 1px solid rgba(255, 255, 255, .55);
        border-radius: 8px
    }

    .news-form .btn {
        border-radius: 8px;
        justify-content: center
    }

    .testi-arrow {
        display: none
    }

    .work-body h3 {
        font-size: 26px
    }
}</style>
</head>
<body>

<!-- ============ HEADER ============ -->
<header class="site-header" id="top">
  <div class="container header-inner">
    <a class="logo" href="#top"><img src="{{ asset('images/logo.png') }}" alt="BlackLine Marketing"></a>

    <nav class="nav" id="nav">
      <ul class="nav-list">
        <li class="has-drop">
          <a href="#services">Services
            <svg class="chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
          </a>
          <div class="drop">
            <a href="#services">Restaurant Marketing</a>
            <a href="#services">Paid Advertising</a>
            <a href="#services">Instagram Growth</a>
            <a href="#services">TikTok Strategy</a>
            <a href="#services">Brand Identity</a>
            <a href="#services">Creative Direction</a>
          </div>
        </li>
        <li><a href="#work">Portfolio</a></li>
        <li><a href="#blogs">Blogs</a></li>
        <li><a href="#faq">FAQ`s</a></li>
      </ul>
    </nav>

    <a href="#cta" class="btn btn-gold header-cta" style="width: 176px !important; height: 54px !important; display: inline-flex !important; justify-content: center !important; align-items: center !important; padding: 0 !important; flex-shrink: 0;">Book a Call</a>

    <button class="burger" id="burger" aria-label="Menu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
  </div>
</header>

<!-- ============ HERO ============ -->
<section class="hero">
  <video class="hero-bg" autoplay loop muted playsinline>
    <source src="{{ asset('videos/blackline-marketing-video.mp4') }}" type="video/mp4">
  </video>
  <div class="hero-overlay"></div>
  <div class="container hero-inner">
    <h1 class="hero-title">Where Brands<br>Become <span class="gold">Icons</span></h1>
    <p class="hero-sub">We build identity systems, campaigns, and digital experiences<br>for labels ready to lead their category not blend into it.</p>
    <div class="hero-actions">
      <a href="#cta" class="btn btn-gold btn-lg">Book a Discovery Call
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
      </a>
      <a href="#work" class="btn btn-ghost btn-lg">View Our Work</a>
    </div>
  </div>
</section>

<!-- ============ ABOUT ============ -->
<section class="about">
  <div class="container about-grid">
    <div class="about-media">
      <img src="{{ asset('images/the-world-most-iconic.jpg') }}" alt="Dark luxury interior">
    </div>
    <div class="about-copy">
      <h2 class="h2">The <span class="gold">world's</span> most iconic brands have one thing in common they're impossible to ignore.</h2>
      <p class="lead">We transform ambitious brands into cultural conversations. Through the fusion of psychology, design, and strategy, we craft identities that command attention and build lasting legacies.</p>
      <blockquote class="pull-quote">
        <span class="q q-open">&ldquo;</span>
        Attention is temporary.<br>Influence is permanent.
        <span class="q q-close">&rdquo;</span>
      </blockquote>
    </div>
  </div>
</section>

<!-- ============ SERVICES ============ -->
<section class="services" id="services">
  <div class="container">
    <h2 class="h2 section-title"><span class="gold">Services</span> Tailored for Distinction</h2>
    <p class="section-sub">Every service ladders up to the same goal: a brand people recognize before they read the name.</p>

    <div class="cards">
      <!-- 1 -->
      <article class="card">
        <span class="card-icon">
          <img src="{{ asset('images/social-media-management.svg') }}" alt="Social Media Management">
        </span>
        <h3>Social Media Management</h3>
        <p>Bring your most complex software vision to life with innovation and scalability in mind.</p>
        <a href="#" class="pill-arrow" aria-label="Read more">
          <span class="circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
          <span class="line"></span>
        </a>
      </article>
      <!-- 2 -->
      <article class="card">
        <span class="card-icon">
          <img src="{{ asset('images/media-advertising.svg') }}" alt="Paid Advertising">
        </span>
        <h3>Paid Advertising</h3>
        <p>Bring your most complex software vision to life with innovation and scalability in mind.</p>
        <a href="#" class="pill-arrow" aria-label="Read more">
          <span class="circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
          <span class="line"></span>
        </a>
      </article>
      <!-- 3 -->
      <article class="card">
        <span class="card-icon">
          <img src="{{ asset('images/instagram-management.svg') }}" alt="Instagram Growth">
        </span>
        <h3>Instagram Growth</h3>
        <p>Bring your most complex software vision to life with innovation and scalability in mind.</p>
        <a href="#" class="pill-arrow" aria-label="Read more">
          <span class="circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
          <span class="line"></span>
        </a>
      </article>
      <!-- 4 -->
      <article class="card">
        <span class="card-icon">
          <img src="{{ asset('images/tik-tok-strategy.svg') }}" alt="TikTok Strategy">
        </span>
        <h3>TikTok Strategy</h3>
        <p>Bring your most complex software vision to life with innovation and scalability in mind.</p>
        <a href="#" class="pill-arrow" aria-label="Read more">
          <span class="circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
          <span class="line"></span>
        </a>
      </article>
      <!-- 5 -->
      <article class="card">
        <span class="card-icon">
          <img src="{{ asset('images/brand-identity.svg') }}" alt="Brand Identity">
        </span>
        <h3>Brand Identity</h3>
        <p>Bring your most complex software vision to life with innovation and scalability in mind.</p>
        <a href="#" class="pill-arrow" aria-label="Read more">
          <span class="circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
          <span class="line"></span>
        </a>
      </article>
      <!-- 6 -->
      <article class="card">
        <span class="card-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M9 3.5 10.6 8 15 9.5 10.6 11 9 15.5 7.4 11 3 9.5 7.4 8z"/><path d="M17 13.5 17.9 16l2.6.9-2.6.9-.9 2.6-.9-2.6-2.6-.9 2.6-.9z"/><path d="M17.5 3v3M16 4.5h3"/></svg>
        </span>
        <h3>Creative Direction</h3>
        <p>Bring your most complex software vision to life with innovation and scalability in mind.</p>
        <a href="#" class="pill-arrow" aria-label="Read more">
          <span class="circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
          <span class="line"></span>
        </a>
      </article>
      <!-- 7 -->
      <article class="card">
        <span class="card-icon">
          <img src="{{ asset('images/influencer-marketing.svg') }}" alt="Influencer Marketing">
        </span>
        <h3>Influencer Marketing</h3>
        <p>Bring your most complex software vision to life with innovation and scalability in mind.</p>
        <a href="#" class="pill-arrow" aria-label="Read more">
          <span class="circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
          <span class="line"></span>
        </a>
      </article>
      <!-- 8 -->
      <article class="card">
        <span class="card-icon">
          <img src="{{ asset('images/resturent-marketing.svg') }}" alt="Restaurant Marketing">
        </span>
        <h3>Restaurant Marketing</h3>
        <p>Bring your most complex software vision to life with innovation and scalability in mind.</p>
        <a href="#" class="pill-arrow" aria-label="Read more">
          <span class="circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
          <span class="line"></span>
        </a>
      </article>
    </div>
  </div>
</section>

<!-- ============ WORK ============ -->
<section class="work" id="work">
  <div class="container">
    <h2 class="h2 section-title"><span class="gold">Work</span> That Speaks Louder Than Words</h2>
    <p class="section-sub">Three brands, three categories, one shared outcome: attention that turned into revenue.</p>

    <div class="work-strip" id="workStrip">
      <article class="work-panel is-open" data-title="Aurelio">
        <img src="{{ asset('images/work-aurelio.jpg') }}" alt="Aurelio case study">
        <span class="work-vtitle">Aurelio</span>
        <button class="play" aria-label="Play showreel">
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5.5v13l11-6.5z"/></svg>
        </button>
        <div class="work-body">
          <h3>Aurelio</h3>
          <p class="work-metric">80%+ increase in reservations</p>
          <p class="work-desc">Combining advanced technology and decades of industry insight, we design and develop bespoke full-cycle solutions tailored to deliver your unique software vision.</p>
          <a href="#" class="btn btn-gold btn-sm">View Case Study
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
          </a>
        </div>
        <button class="work-plus" aria-label="Open"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"><path d="M12 5v14M5 12h14"/></svg></button>
      </article>

      <article class="work-panel" data-title="Osteria Nine">
        <img src="{{ asset('images/work-osteria.jpg') }}" alt="Osteria Nine case study">
        <span class="work-vtitle">Osteria Nine</span>
        <button class="play" aria-label="Play showreel">
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5.5v13l11-6.5z"/></svg>
        </button>
        <div class="work-body">
          <h3>Osteria Nine</h3>
          <p class="work-metric">3.4x return on ad spend</p>
          <p class="work-desc">Combining advanced technology and decades of industry insight, we design and develop bespoke full-cycle solutions tailored to deliver your unique software vision.</p>
          <a href="#" class="btn btn-gold btn-sm">View Case Study
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
          </a>
        </div>
        <button class="work-plus" aria-label="Open"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"><path d="M12 5v14M5 12h14"/></svg></button>
      </article>

      <article class="work-panel" data-title="Meridian Group">
        <img src="{{ asset('images/work-meridian.jpg') }}" alt="Meridian Group case study">
        <span class="work-vtitle">Meridian Group</span>
        <button class="play" aria-label="Play showreel">
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5.5v13l11-6.5z"/></svg>
        </button>
        <div class="work-body">
          <h3>Meridian Group</h3>
          <p class="work-metric">220% lift in qualified leads</p>
          <p class="work-desc">Combining advanced technology and decades of industry insight, we design and develop bespoke full-cycle solutions tailored to deliver your unique software vision.</p>
          <a href="#" class="btn btn-gold btn-sm">View Case Study
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
          </a>
        </div>
        <button class="work-plus" aria-label="Open"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"><path d="M12 5v14M5 12h14"/></svg></button>
      </article>

      <article class="work-panel" data-title="Nova Fashion House">
        <img src="{{ asset('images/work-nova.jpg') }}" alt="Nova Fashion House case study">
        <span class="work-vtitle">Nova Fashion House</span>
        <button class="play" aria-label="Play showreel">
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5.5v13l11-6.5z"/></svg>
        </button>
        <div class="work-body">
          <h3>Nova Fashion House</h3>
          <p class="work-metric">1.2M organic impressions</p>
          <p class="work-desc">Combining advanced technology and decades of industry insight, we design and develop bespoke full-cycle solutions tailored to deliver your unique software vision.</p>
          <a href="#" class="btn btn-gold btn-sm">View Case Study
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
          </a>
        </div>
        <button class="work-plus" aria-label="Open"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"><path d="M12 5v14M5 12h14"/></svg></button>
      </article>
      <div class="work-nav">
        <button class="round-btn" id="workPrev" aria-label="Previous"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5M11 18l-6-6 6-6"/></svg></button>
        <button class="round-btn" id="workNext" aria-label="Next"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg></button>
      </div>
    </div>
  </div>
</section>

<!-- ============ STATS ============ -->
<section class="stats">
  <div class="container stats-grid">
    <div class="stats-copy">
      <img class="stats-emoji" src="{{ asset('images/trophy.png') }}" alt="">
      <h2 class="h2">We deliver results that speak louder than words.</h2>
      <p class="lead">From strategy to execution, we create digital solutions that drive growth, build trust, and make a lasting impact.</p>
    </div>
    <div class="stats-nums">
      <div class="stat"><span class="stat-num gold">500K+</span><span class="stat-label">Total followers generated</span></div>
      <div class="stat"><span class="stat-num gold">$50M+</span><span class="stat-label">Revenue generated for clients</span></div>
      <div class="stat"><span class="stat-num gold">150+</span><span class="stat-label">Team members</span></div>
      <div class="stat"><span class="stat-num gold">98%</span><span class="stat-label">Company growth</span></div>
    </div>
  </div>
</section>

<!-- ============ TESTIMONIALS ============ -->
<section class="testi">
  <div class="container">
    <h2 class="h2 center">Real feedback from brands we've built with</h2>

    <div class="testi-wrap">
      <button class="testi-arrow prev" id="tPrev" aria-label="Previous">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
      </button>

      <div class="testi-viewport">
        <div class="testi-track" id="tTrack">
          <figure class="testi-card">
            <div class="testi-media">
              <img src="{{ asset('images/testimonial.jpg') }}" alt="John Carter">
              <button class="play" aria-label="Play video"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5.5v13l11-6.5z"/></svg></button>
            </div>
            <blockquote class="testi-body">
              <img class="testi-logo" src="{{ asset('images/verband.png') }}" alt="Outsourcing Verband">
              <p>&ldquo;Lorem ipsum dolor sit amet conse ctetur adipiscing elit Vel mauris turpis vel eget nec orci nec ipsum Elementum felis eu pellentesque velit vulputate. Blandit consequat facilisi sagittis ut quis Integer et faucibus elemen.&rdquo;</p>
              <figcaption>
                <span class="t-name">John Carter</span>
                <span class="t-role">Creative Director at VERBAND</span>
              </figcaption>
            </blockquote>
          </figure>

          <figure class="testi-card">
            <div class="testi-media">
              <img src="{{ asset('images/testimonial.jpg') }}" alt="Client">
              <button class="play" aria-label="Play video"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5.5v13l11-6.5z"/></svg></button>
            </div>
            <blockquote class="testi-body">
              <img class="testi-logo" src="{{ asset('images/verband.png') }}" alt="Outsourcing Verband">
              <p>&ldquo;Lorem ipsum dolor sit amet conse ctetur adipiscing elit Vel mauris turpis vel eget nec orci nec ipsum Elementum felis eu pellentesque velit vulputate. Blandit consequat facilisi sagittis ut quis Integer et faucibus elemen.&rdquo;</p>
              <figcaption>
                <span class="t-name">Amelia Stone</span>
                <span class="t-role">Head of Brand at NOVA</span>
              </figcaption>
            </blockquote>
          </figure>

          <figure class="testi-card">
            <div class="testi-media">
              <img src="{{ asset('images/testimonial.jpg') }}" alt="Client">
              <button class="play" aria-label="Play video"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5.5v13l11-6.5z"/></svg></button>
            </div>
            <blockquote class="testi-body">
              <img class="testi-logo" src="{{ asset('images/verband.png') }}" alt="Outsourcing Verband">
              <p>&ldquo;Lorem ipsum dolor sit amet conse ctetur adipiscing elit Vel mauris turpis vel eget nec orci nec ipsum Elementum felis eu pellentesque velit vulputate. Blandit consequat facilisi sagittis ut quis Integer et faucibus elemen.&rdquo;</p>
              <figcaption>
                <span class="t-name">Marcus Reid</span>
                <span class="t-role">Founder at Aurelio</span>
              </figcaption>
            </blockquote>
          </figure>

          <figure class="testi-card">
            <div class="testi-media">
              <img src="{{ asset('images/testimonial.jpg') }}" alt="Client">
              <button class="play" aria-label="Play video"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5.5v13l11-6.5z"/></svg></button>
            </div>
            <blockquote class="testi-body">
              <img class="testi-logo" src="{{ asset('images/verband.png') }}" alt="Outsourcing Verband">
              <p>&ldquo;Lorem ipsum dolor sit amet conse ctetur adipiscing elit Vel mauris turpis vel eget nec orci nec ipsum Elementum felis eu pellentesque velit vulputate. Blandit consequat facilisi sagittis ut quis Integer et faucibus elemen.&rdquo;</p>
              <figcaption>
                <span class="t-name">Priya Nair</span>
                <span class="t-role">CMO at Meridian Group</span>
              </figcaption>
            </blockquote>
          </figure>

          <figure class="testi-card">
            <div class="testi-media">
              <img src="{{ asset('images/testimonial.jpg') }}" alt="Client">
              <button class="play" aria-label="Play video"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5.5v13l11-6.5z"/></svg></button>
            </div>
            <blockquote class="testi-body">
              <img class="testi-logo" src="{{ asset('images/verband.png') }}" alt="Outsourcing Verband">
              <p>&ldquo;Lorem ipsum dolor sit amet conse ctetur adipiscing elit Vel mauris turpis vel eget nec orci nec ipsum Elementum felis eu pellentesque velit vulputate. Blandit consequat facilisi sagittis ut quis Integer et faucibus elemen.&rdquo;</p>
              <figcaption>
                <span class="t-name">Daniel Okafor</span>
                <span class="t-role">Owner at Osteria Nine</span>
              </figcaption>
            </blockquote>
          </figure>
        </div>
      </div>

      <button class="testi-arrow next" id="tNext" aria-label="Next">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
      </button>
    </div>

    <div class="dots" id="tDots">
      <button class="dot is-active" aria-label="Slide 1"></button>
      <button class="dot" aria-label="Slide 2"></button>
      <button class="dot" aria-label="Slide 3"></button>
      <button class="dot" aria-label="Slide 4"></button>
      <button class="dot" aria-label="Slide 5"></button>
    </div>
  </div>
</section>

<!-- ============ PROCESS ============ -->
<section class="process">
  <div class="container">
    <h2 class="h2 section-title">Our Proven <span class="gold">Process</span></h2>
    <p class="section-sub">A clear, strategic process that turns bold ideas into meaningful digital experiences.<br>From strategy to execution, every step is designed to deliver measurable results.</p>

    <div class="ring-wrap">
      <span class="ring-label lbl-strategy">Strategy</span>
      <span class="ring-label lbl-story">Storytelling</span>
      <span class="ring-label lbl-results">Results</span>
      <span class="ring-label lbl-exec">Execution</span>

      <svg class="ring" viewBox="0 0 1242 460" role="img" aria-label="Four step process">
        <defs>
          <linearGradient id="g1" x1="0" y1="1" x2="1" y2="0"><stop offset="0" stop-color="#F6DE96"/><stop offset="1" stop-color="#FBE7AA"/></linearGradient>
          <linearGradient id="g2" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="#FBE7AA"/><stop offset="1" stop-color="#F3D77D"/></linearGradient>
          <linearGradient id="g3" x1="1" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#F0D073"/><stop offset="1" stop-color="#E7C76C"/></linearGradient>
          <linearGradient id="g4" x1="1" y1="1" x2="0" y2="0"><stop offset="0" stop-color="#E4C169"/><stop offset="1" stop-color="#DDBB63"/></linearGradient>

          <path id="p1" d="M 431.2 220.1 A 190 190 0 0 1 611.1 40.1"/>
          <path id="p2" d="M 630.9 40.1 A 190 190 0 0 1 810.8 220.1"/>
          <path id="p3" d="M 810.8 239.9 A 190 190 0 0 1 630.9 419.9"/>
          <path id="p4" d="M 611.1 419.9 A 190 190 0 0 1 431.2 239.9"/>
        </defs>

        <use href="#p1" class="arc" stroke="url(#g1)"/>
        <use href="#p2" class="arc" stroke="url(#g2)"/>
        <use href="#p3" class="arc" stroke="url(#g3)"/>
        <use href="#p4" class="arc" stroke="url(#g4)"/>

        <!-- flow arrows -->
        <polygon class="tri" points="606,30 619,40 606,50"/>
        <polygon class="tri" points="811,225 821,238 831,225"/>
        <polygon class="tri" points="636,430 623,420 636,410"/>
        <polygon class="tri" points="431,235 421,222 411,235"/>

        <text class="step-txt"><textPath href="#p1" startOffset="50%" text-anchor="middle">Step 1</textPath></text>
        <text class="step-txt"><textPath href="#p2" startOffset="50%" text-anchor="middle">Step 2</textPath></text>
        <text class="step-txt"><textPath href="#p3" startOffset="50%" text-anchor="middle">Step 3</textPath></text>
        <text class="step-txt"><textPath href="#p4" startOffset="50%" text-anchor="middle">Step 4</textPath></text>

        <!-- connectors -->
        <path class="conn" d="M321 186 L 371 186 C 419 186 437 128 449 62"/>
        <path class="conn" d="M921 186 L 871 186 C 823 186 805 128 793 62"/>
        <path class="conn" d="M321 274 L 371 274 C 419 274 437 332 449 398"/>
        <path class="conn" d="M921 274 L 871 274 C 823 274 805 332 793 398"/>
        <circle class="node" cx="449" cy="58" r="7"/>
        <circle class="node" cx="793" cy="58" r="7"/>
        <circle class="node" cx="449" cy="402" r="7"/>
        <circle class="node" cx="793" cy="402" r="7"/>
      </svg>

      <div class="ring-core">
        <strong>Revenue Engine</strong>
        <span><b class="gold">15%</b> Higher Lead Growth</span>
      </div>
    </div>

    <!-- compact version of the same 4 steps, shown on small screens -->
    <ol class="process-steps">
      <li><span class="ps-num">Step 1</span><h3>Strategy</h3></li>
      <li><span class="ps-num">Step 2</span><h3>Storytelling</h3></li>
      <li><span class="ps-num">Step 3</span><h3>Execution</h3></li>
      <li><span class="ps-num">Step 4</span><h3>Results</h3></li>
      <li class="ps-core"><strong>Revenue Engine</strong><span><b class="gold">15%</b> Higher Lead Growth</span></li>
    </ol>
  </div>
</section>

<!-- ============ CTA ============ -->
<section class="cta" id="cta">
  <div class="container">
    <div class="cta-box">
      <img class="cta-bg" src="{{ asset('images/cta.jpg') }}" alt="">
      <div class="cta-inner">
        <h2>Ready to build your movement?</h2>
        <p>Let's create a brand that commands attention and builds lasting<br>influence starting with a conversation.</p>
        <a href="#" class="btn btn-gold btn-lg">Book a Strategy Call
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ============ NEWSLETTER ============ -->
<section class="newsletter">
  <div class="container news-grid">
    <h2>Sign Up For Exclusive Offers And Updates!</h2>
    <form class="news-form" onsubmit="return false;">
      <input type="email" placeholder="Email" aria-label="Email" required>
      <button type="submit" class="btn btn-gold">Subscribe</button>
    </form>
  </div>
</section>

<!-- ============ FOOTER ============ -->
<footer class="site-footer">
  <div class="container foot-grid">
    <div class="foot-brand">
      <img class="foot-logo" src="{{ asset('images/logo.png') }}" alt="BlackLine Marketing">
      <p>Transforming ambitious brands into cultural icons. Based in New York, serving the world. Transforming ambitious brands into cultural icons. Based in New York, serving the world.</p>
      <div class="socials">
        <a href="#" aria-label="Facebook"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M13.5 21v-8h2.7l.4-3.1h-3.1V7.9c0-.9.25-1.5 1.55-1.5h1.65V3.6c-.3 0-1.3-.1-2.45-.1-2.4 0-4.05 1.47-4.05 4.17V9.9H7.5V13h2.7v8z"/></svg></a>
        <a href="#" aria-label="Twitter"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M21 6.1c-.66.3-1.37.5-2.11.59a3.68 3.68 0 0 0 1.62-2.03c-.71.42-1.5.73-2.34.9a3.67 3.67 0 0 0-6.35 2.51c0 .29.03.57.09.84A10.42 10.42 0 0 1 4.34 5.1a3.67 3.67 0 0 0 1.14 4.9c-.6-.02-1.17-.19-1.66-.46v.05a3.68 3.68 0 0 0 2.95 3.6c-.3.08-.6.12-.93.12-.23 0-.45-.02-.66-.06a3.68 3.68 0 0 0 3.43 2.55A7.37 7.37 0 0 1 3 17.3a10.39 10.39 0 0 0 5.62 1.65c6.75 0 10.44-5.6 10.44-10.44v-.48c.72-.52 1.34-1.16 1.83-1.9z"/></svg></a>
        <a href="#" aria-label="Instagram"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9"><rect x="4" y="4" width="16" height="16" rx="5"/><circle cx="12" cy="12" r="3.6"/><circle cx="16.9" cy="7.1" r="1.1" fill="currentColor" stroke="none"/></svg></a>
        <a href="#" aria-label="LinkedIn"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M6.94 8.5H4.3V20h2.64zM5.62 4a1.55 1.55 0 1 0 0 3.1 1.55 1.55 0 0 0 0-3.1M20 13.6c0-3.05-1.63-4.47-3.8-4.47-1.75 0-2.54.96-2.98 1.64V9.35h-2.64V20h2.64v-5.95c0-1.57.3-3.09 2.24-3.09s1.9 1.79 1.9 3.19V20H20z"/></svg></a>
        <a href="#" aria-label="YouTube"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M21.6 7.9a2.5 2.5 0 0 0-1.76-1.77C18.28 5.7 12 5.7 12 5.7s-6.28 0-7.84.43A2.5 2.5 0 0 0 2.4 7.9C2 9.47 2 12 2 12s0 2.53.4 4.1a2.5 2.5 0 0 0 1.76 1.77c1.56.43 7.84.43 7.84.43s6.28 0 7.84-.43a2.5 2.5 0 0 0 1.76-1.77C22 14.53 22 12 22 12s0-2.53-.4-4.1M10 15.1V8.9l5.2 3.1z"/></svg></a>
      </div>
    </div>

    <div class="foot-col">
      <h4>Useful Links</h4>
      <ul>
        <li><a href="#">Contact us</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">Blogs</a></li>
        <li><a href="#">FAQ's</a></li>
        <li><a href="#">Support</a></li>
        <li><a href="#">Legal</a></li>
      </ul>
    </div>

    <div class="foot-col">
      <h4>Services</h4>
      <ul>
        <li><a href="#">Digital Marketing</a></li>
        <li><a href="#">Website Development</a></li>
        <li><a href="#">Social Media Management</a></li>
        <li><a href="#">Content Creation</a></li>
        <li><a href="#">Influencer Marketing</a></li>
        <li><a href="#">Fashion Marketing</a></li>
        <li><a href="#">Real Estate Marketing</a></li>
      </ul>
    </div>

    <div class="foot-col">
      <h4>Contact</h4>
      <ul class="contact-list">
        <li>
          <span class="ci"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M6.6 10.8a15.1 15.1 0 0 0 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.2.4 2.4.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.4 0 .8-.2 1z"/></svg></span>
          <a href="tel:+12345551234">+1 (234) 555-1234</a>
        </li>
        <li>
          <span class="ci"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2m0 4.2-8 5-8-5V6l8 5 8-5z"/></svg></span>
          <a href="mailto:hello@blackline.co">hello@blackline.co</a>
        </li>
        <li>
          <span class="ci"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 21s7-5.6 7-11a7 7 0 1 0-14 0c0 5.4 7 11 7 11"/><circle cx="12" cy="10" r="2.6"/></svg></span>
          <span>123 Creative Ave,<br>New York, NY 10001</span>
        </li>
      </ul>
    </div>
  </div>

  <div class="container foot-bottom">
    <p>&copy; 2024 Black Line Marketing. All rights reserved.</p>
    <div class="pay">
      <img src="{{ asset('images/pay-visa.png') }}" alt="Visa">
      <img src="{{ asset('images/pay-mastercard.png') }}" alt="Mastercard">
      <img src="{{ asset('images/pay-paypal.png') }}" alt="PayPal">
      <img src="{{ asset('images/pay-amex.png') }}" alt="American Express">
      <img src="{{ asset('images/pay-discover.png') }}" alt="Discover">
      <img src="{{ asset('images/pay-wire.png') }}" alt="Wire Transfer">
      <img src="{{ asset('images/pay-bank.png') }}" alt="Bank Transfer">
    </div>
  </div>
</footer>

<script>
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
</script>
<script>
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
</script>
<!-- Custom Cursor Element -->
<div class="custom-cursor"></div>

<style>
    .custom-cursor {
        position: fixed;
        top: 0;
        left: 0;
        width: 30px;
        height: 30px;
        border: 2px solid var(--gold); /* Primary gold color */
        border-radius: 50%; /* Make it round */
        pointer-events: none; /* Allows clicking through it */
        transform: translate(-50%, -50%); /* Centers the gap exactly on the mouse point */
        z-index: 99999; /* Ensure it's on top of everything */
        transition: transform 0.15s ease-out, width 0.2s, height 0.2s, background-color 0.2s; /* Smooth delay effect */
        box-shadow: 0 0 8px rgba(229, 202, 131, 0.3); /* Slight glow matching the gold color */
    }
    .custom-cursor.cursor-hover {
        width: 60px;
        height: 60px;
        background-color: rgba(229, 202, 131, 0.15); /* Slight fill inside the circle */
    }
    .custom-cursor.cursor-black {
        border-color: #000;
    }
    .custom-cursor.cursor-primary {
        border-color: var(--gold) !important;
    }
</style>

<script>
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
    });
</script>

</body>
</html>


