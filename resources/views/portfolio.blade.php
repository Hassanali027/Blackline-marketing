<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Portfolio | BlackLine Marketing</title>
  <meta name="description" content="Explore our portfolio of successful digital marketing campaigns, branding projects, and web development case studies by BlackLine Marketing.">
  <meta name="keywords" content="digital marketing portfolio, branding case studies, marketing projects, BlackLine Marketing work">
  <meta name="robots" content="index, follow">

  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
  <script src="{{ asset('js/service.js') }}" defer></script>
  <script src="{{ asset('js/portfolio.js') }}" defer></script>
</head>
<body>
@include('components.header')

<main>
  <section class="portfolio-hero" style="background-image: url('{{ asset($heroSettings['image'] ?? 'assets/portfolio/hero.png') }}');">
    <div class="portfolio-hero__panel">
      <span>{{ $heroSettings['badge'] ?? 'CASE STUDIES' }}</span>
      <h1>{{ $heroSettings['heading'] ?? 'Brands Worth Remembering.' }}</h1>
      <a class="gold-button" href="{{ $heroSettings['btn_link'] ?? '#portfolio-grid' }}">{{ $heroSettings['btn_text'] ?? 'Book a Discovery Call' }} <b>→</b></a>
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
          @forelse($industries as $industry)
            <label style="text-transform: capitalize;"><input type="checkbox" value="{{ $industry }}"> {{ $industry }}</label>
          @empty
            <span style="font-size: 13px; color: var(--muted);">No industries found.</span>
          @endforelse
        </div>
        <button type="button" class="apply-filter-btn">Apply Filter</button>
      </div>
    </div>

    <div class="portfolio-grid">
      @forelse($projects as $project)
      <article class="project" data-category="{{ $project->industry }}">
        <div class="project-img-wrapper"><img src="{{ asset($project->image) }}" alt="{{ $project->title }}"></div>
        <h3>{{ $project->title }}</h3>
        <p>{{ $project->description }}</p>
        <a href="{{ $project->btn_link }}">{{ $project->btn_text }}</a>
      </article>
      @empty
      <div style="grid-column: span 2; text-align: center; padding: 40px 0; color: var(--muted);">
        No projects added to showcase yet.
      </div>
      @endforelse
    </div>
  </section>

  @include('components.faqs-section')
</main>

@include('components.footer')
</body>
</html>
