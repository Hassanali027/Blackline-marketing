<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Portfolio | BlackLine Marketing</title>
  <meta name="description" content="Case studies and digital experiences created by BlackLine Marketing.">

  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
  <script src="{{ asset('js/service.js') }}" defer></script>
  <script src="{{ asset('js/portfolio.js') }}" defer></script>
</head>
<body>
@include('components.header')

<main>
  <section class="portfolio-hero">
    <div class="portfolio-hero__panel">
      <span>CASE STUDIES</span>
      <h1>Brands Worth Remembering.</h1>
      <a class="gold-button" href="#portfolio-grid">Book a Discovery Call <b>→</b></a>
    </div>
  </section>

  <section class="portfolio-work" id="portfolio-grid">
    <div class="portfolio-heading">
      <h2>Brands We’ve Made Impossible<br>to Ignore.</h2>
      <button class="filter-button" type="button" aria-expanded="false">Filter
        <svg viewBox="0 0 24 24"><path d="M4 6h3 M11 6h9 M4 12h9 M17 12h3 M4 18h3 M11 18h9"/><circle cx="9" cy="6" r="2"/><circle cx="15" cy="12" r="2"/><circle cx="9" cy="18" r="2"/></svg>
      </button>
      <div class="filter-sidebar-overlay" hidden></div>
      <div class="filter-sidebar" hidden>
        <button type="button" class="close-filter-btn" aria-label="Close Filter">✕</button>
        <h3>FILTER BY INDUSTRY</h3>
        <div class="filter-options">
          <label><input type="checkbox" value="small"> Small</label>
          <label><input type="checkbox" value="fashion"> Fashion</label>
          <label><input type="checkbox" value="hospitality"> Hospitality</label>
          <label><input type="checkbox" value="real-estate"> Real Estate</label>
          <label><input type="checkbox" value="beauty"> Beauty</label>
          <label><input type="checkbox" value="personal"> Personal Brands</label>
          <label><input type="checkbox" value="restaurants"> Restaurants</label>
          <label><input type="checkbox" value="events"> Events</label>
        </div>
        <button type="button" class="apply-filter-btn">Apply Filter</button>
      </div>
    </div>

    <div class="portfolio-grid">
      <article class="project project--mclaren" data-category="web">
        <div class="project-img-wrapper"><img src="{{ asset('assets/portfolio/mclaren-golf.png') }}" alt="McLaren Golf ecommerce website shown on a laptop"></div>
        <h3>McLaren Golf</h3><p>High-performance engineered eCommerce experience.</p><a href="#">View Work</a>
      </article>
      <article class="project project--natare" data-category="web">
        <div class="project-img-wrapper"><img src="{{ asset('assets/portfolio/natare.png') }}" alt="Natare stainless steel pools website design"></div>
        <h3>Natare</h3><p>Highest quality stainless steel pools.</p><a href="#">View Work</a>
      </article>
      <article class="project project--colorado" data-category="web">
        <div class="project-img-wrapper"><img src="{{ asset('assets/portfolio/colorado-rafting.png') }}" alt="Colorado Rafting website on a laptop"></div>
        <h3>Colorado Rafting</h3><p>Experience the adventure.</p><a href="#">View Work</a>
      </article>
      <article class="project project--imagine" data-category="brand">
        <div class="project-img-wrapper"><img src="{{ asset('assets/portfolio/imagine-software.png') }}" alt="Imagine Software glowing brand mark"></div>
        <h3>Imagine Software</h3><p>Technology reimagined.</p><a href="#">View Work</a>
      </article>
      <article class="project project--mystery" data-category="brand">
        <div class="project-img-wrapper"><img src="{{ asset('assets/portfolio/night-of-mystery.png') }}" alt="Night of Mystery detective experience"></div>
        <h3>Night of Mystery</h3><p>Can you solve the mystery?</p><a href="#">View Work</a>
      </article>
      <article class="project project--lantech" data-category="web">
        <div class="project-img-wrapper"><img src="{{ asset('assets/portfolio/lantech.png') }}" alt="Lantech website shown on a laptop"></div>
        <h3>Lantech</h3><p>We transformed the machines.</p><a href="#">View Work</a>
      </article>
    </div>
  </section>

  <section class="portfolio-newsletter">
    <div class="portfolio-container">
      <h2>Sign Up For Exclusive Offers And Updates!</h2>
      <form><label class="sr-only" for="portfolio-email">Email</label><input id="portfolio-email" type="email" placeholder="Email"><button type="submit">Subscribe</button></form>
    </div>
  </section>
</main>

@include('components.footer')
</body>
</html>
