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
            <a href="{{ route('services.social-media') }}">Social Media Management</a>
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

    <a href="#cta" class="btn btn-gold header-cta">Book a Call</a>

    <button class="burger" id="burger" aria-label="Menu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
  </div>
</header>
