<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Portfolio | BlackLine Marketing</title>
  <meta name="description" content="Case studies and digital experiences created by BlackLine Marketing.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
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
        <svg viewBox="0 0 24 24"><path d="M4 7h10M18 7h2M4 17h2M10 17h10M14 4v6M8 14v6"/></svg>
      </button>
      <div class="filter-menu" hidden>
        <button type="button" data-filter="all">All Work</button>
        <button type="button" data-filter="web">Web Design</button>
        <button type="button" data-filter="brand">Brand Experience</button>
      </div>
    </div>

    <div class="portfolio-grid">
      <article class="project project--mclaren" data-category="web">
        <img src="{{ asset('assets/portfolio/mclaren-golf.png') }}" alt="McLaren Golf ecommerce website shown on a laptop">
        <h3>McLaren Golf</h3><p>High-performance engineered eCommerce experience.</p><a href="#">View Work</a>
      </article>
      <article class="project project--natare" data-category="web">
        <img src="{{ asset('assets/portfolio/natare.png') }}" alt="Natare stainless steel pools website design">
        <h3>Natare</h3><p>Highest quality stainless steel pools.</p><a href="#">View Work</a>
      </article>
      <article class="project project--colorado" data-category="web">
        <img src="{{ asset('assets/portfolio/colorado-rafting.png') }}" alt="Colorado Rafting website on a laptop">
        <h3>Colorado Rafting</h3><p>Experience the adventure.</p><a href="#">View Work</a>
      </article>
      <article class="project project--imagine" data-category="brand">
        <img src="{{ asset('assets/portfolio/imagine-software.png') }}" alt="Imagine Software glowing brand mark">
        <h3>Imagine Software</h3><p>Technology reimagined.</p><a href="#">View Work</a>
      </article>
      <article class="project project--mystery" data-category="brand">
        <img src="{{ asset('assets/portfolio/night-of-mystery.png') }}" alt="Night of Mystery detective experience">
        <h3>Night of Mystery</h3><p>Can you solve the mystery?</p><a href="#">View Work</a>
      </article>
      <article class="project project--lantech" data-category="web">
        <img src="{{ asset('assets/portfolio/lantech.png') }}" alt="Lantech website shown on a laptop">
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
