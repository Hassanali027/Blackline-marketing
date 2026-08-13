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
</head>
<body>

<!-- ============ HEADER ============ -->
@include('components.header')

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
        <video src="{{ asset('videos/work-first-video.mp4') }}?v=1" muted playsinline></video>
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
        <video src="{{ asset('videos/work-first-video.mp4') }}?v=2" muted playsinline></video>
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
        <video src="{{ asset('videos/work-first-video.mp4') }}?v=3" muted playsinline></video>
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
        <video src="{{ asset('videos/work-first-video.mp4') }}?v=4" muted playsinline></video>
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
              <video src="{{ asset('videos/work-first-video.mp4') }}?v=t1" muted playsinline></video>
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
              <video src="{{ asset('videos/work-first-video.mp4') }}?v=t2" muted playsinline></video>
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
              <video src="{{ asset('videos/work-first-video.mp4') }}?v=t3" muted playsinline></video>
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
              <video src="{{ asset('videos/work-first-video.mp4') }}?v=t4" muted playsinline></video>
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
              <video src="{{ asset('videos/work-first-video.mp4') }}?v=t5" muted playsinline></video>
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
      <div class="ring-label lbl-strategy">
        <p>Deep research and audience psychology to map your brand's unique position in the market.</p>
        <strong>Strategy</strong>
      </div>
      <div class="ring-label lbl-story">
        <p>Crafting compelling narratives that resonate with your audience and bring your vision to life.</p>
        <strong>Storytelling</strong>
      </div>
      <div class="ring-label lbl-results">
        <strong>Results</strong>
        <p>Data-driven optimization and analytics to ensure maximum return on your investment.</p>
      </div>
      <div class="ring-label lbl-exec">
        <strong>Execution</strong>
        <p>Flawless technical delivery and deployment to turn your strategic roadmap into reality.</p>
      </div>

      <svg class="ring" viewBox="0 0 1242 460" role="img" aria-label="Four step process">
        <defs>
          <linearGradient id="g1" x1="0" y1="1" x2="1" y2="0"><stop offset="0" stop-color="#F6DE96"/><stop offset="1" stop-color="#FBE7AA"/></linearGradient>
          <linearGradient id="g2" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="#FBE7AA"/><stop offset="1" stop-color="#F3D77D"/></linearGradient>
          <linearGradient id="g3" x1="1" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#F0D073"/><stop offset="1" stop-color="#E7C76C"/></linearGradient>
          <linearGradient id="g4" x1="1" y1="1" x2="0" y2="0"><stop offset="0" stop-color="#E4C169"/><stop offset="1" stop-color="#DDBB63"/></linearGradient>

          <path id="p1" d="M 435.2 190.5 A 190 190 0 0 1 581.5 44.2"/>
          <path id="p2" d="M 660.5 44.2 A 190 190 0 0 1 806.8 190.5"/>
          <path id="p3" d="M 806.8 269.5 A 190 190 0 0 1 660.5 415.8"/>
          <path id="p4" d="M 581.5 415.8 A 190 190 0 0 1 435.2 269.5"/>
        </defs>

        <use href="#p1" class="arc" stroke="url(#g1)"/>
        <use href="#p2" class="arc" stroke="url(#g2)"/>
        <use href="#p3" class="arc" stroke="url(#g3)"/>
        <use href="#p4" class="arc" stroke="url(#g4)"/>

        <!-- flow arrows -->
        <polygon class="tri" points="561,38 573,44.2 561,50.4"/>
        <polygon class="tri" points="800.8,171 806.8,183 812.8,171"/>
        <polygon class="tri" points="679,409.8 667,415.8 679,421.8"/>
        <polygon class="tri" points="429.2,289 435.2,277 441.2,289"/>

        <text class="step-txt"><textPath href="#p1" startOffset="50%" text-anchor="middle">Step 1</textPath></text>
        <text class="step-txt"><textPath href="#p2" startOffset="50%" text-anchor="middle">Step 2</textPath></text>
        <text class="step-txt"><textPath href="#p3" startOffset="50%" text-anchor="middle">Step 3</textPath></text>
        <text class="step-txt"><textPath href="#p4" startOffset="50%" text-anchor="middle">Step 4</textPath></text>

        <!-- connectors -->
        <path class="conn conn-1"/>
        <path class="conn conn-2"/>
        <path class="conn conn-3"/>
        <path class="conn conn-4"/>
        <circle class="node" cx="451" cy="60" r="5.5"/>
        <circle class="node" cx="791" cy="60" r="5.5"/>
        <circle class="node" cx="451" cy="400" r="5.5"/>
        <circle class="node" cx="791" cy="400" r="5.5"/>
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
@include('components.footer')

<!-- Custom Cursor Element -->
<div class="custom-cursor"></div>

<script src="{{ asset('js/home.js') }}"></script>

</body>
</html>


