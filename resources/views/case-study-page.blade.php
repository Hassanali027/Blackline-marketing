<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Case Study | BlackLine Marketing</title>
  
  <!-- Main CSS for header, footer and global styles -->
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  <link rel="stylesheet" href="{{ asset('css/casestudy.css') }}?v={{ time() }}">
</head>
<body>
@include('components.header')

<main>
    <section class="case-study-hero">
        <div class="container">
            <div class="case-study-hero-content">
                <div class="case-study-hero-category">FASHION</div>
                <h1 class="case-study-hero-title">Maison Noir</h1>
                <p class="case-study-hero-subtitle">Building a Brand Designed to Be Remembered.</p>
            </div>
        </div>
    </section>

    <section class="market-challenge-section">
        <div class="container">
            <div class="market-challenge-header">
                <h2 class="market-challenge-title">Turning a Market Challenge<br>Into an Opportunity.</h2>
                <p class="market-challenge-intro">Every ambitious brand faces a point where its existing presence no longer reflects its ambition. The challenge was to create a stronger position, connect with the right audience, and build momentum in a competitive market.</p>
            </div>
            
            <div class="market-challenge-content">
                <div class="market-challenge-list">
                    <div class="challenge-item">
                        <span class="challenge-item-number">01.</span>
                        <div class="challenge-item-content">
                            <h3 class="challenge-item-title">Existing Position</h3>
                            <p class="challenge-item-desc">The existing brand presence wasn't communicating the level of quality or ambition behind the business.</p>
                        </div>
                    </div>
                    
                    <div class="challenge-item">
                        <span class="challenge-item-number">02.</span>
                        <div class="challenge-item-content">
                            <h3 class="challenge-item-title">Market Competition</h3>
                            <p class="challenge-item-desc">A crowded market made it difficult to stand apart and capture meaningful attention.</p>
                        </div>
                    </div>

                    <div class="challenge-item">
                        <span class="challenge-item-number">03.</span>
                        <div class="challenge-item-content">
                            <h3 class="challenge-item-title">Audience Connection</h3>
                            <p class="challenge-item-desc">The brand was reaching people, but not consistently turning attention into meaningful engagement.</p>
                        </div>
                    </div>

                    <div class="challenge-item">
                        <span class="challenge-item-number">04.</span>
                        <div class="challenge-item-content">
                            <h3 class="challenge-item-title">Growth Challenge</h3>
                            <p class="challenge-item-desc">Without a clear strategic direction, growth remained inconsistent and difficult to scale.</p>
                        </div>
                    </div>
                </div>
                
                <div class="market-challenge-image">
                    <img src="{{ asset('images/work-meridian.jpg') }}" alt="Market Challenge Collage">
                </div>
            </div>
        </div>
    </section>

    <section class="insight-direction-section">
        <div class="container">
            <h2 class="insight-title">Turning Insight Into Direction.</h2>
            <div class="insight-timeline">
                <div class="insight-item">
                    <div class="insight-icon">
                        <img src="{{ asset('images/Positioning.svg') }}" alt="Positioning">
                    </div>
                    <h3 class="insight-item-title">Positioning</h3>
                    <p class="insight-item-desc">We clarified what made the brand different and created a sharper position within a crowded market.</p>
                </div>

                <div class="insight-item">
                    <div class="insight-icon">
                        <img src="{{ asset('images/content- strategy.svg') }}" alt="Content Strategy">
                    </div>
                    <h3 class="insight-item-title">Content Strategy</h3>
                    <p class="insight-item-desc">We established content pillars, visual language, and messaging designed to make the brand instantly recognizable.</p>
                </div>

                <div class="insight-item">
                    <div class="insight-icon">
                        <img src="{{ asset('images/Audience.svg') }}" alt="Audience">
                    </div>
                    <h3 class="insight-item-title">Audience</h3>
                    <p class="insight-item-desc">We identified the audience's motivations, behaviors, and interests to create communication that feels relevant.</p>
                </div>

                <div class="insight-item">
                    <div class="insight-icon">
                        <img src="{{ asset('images/Campaign.svg') }}" alt="Campaign">
                    </div>
                    <h3 class="insight-item-title">Campaign</h3>
                    <p class="insight-item-desc">Every creative touchpoint was designed to reinforce the strategy and turn attention into meaningful action.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="strategy-life-section">
        <div class="container">
            <h2 class="strategy-life-title">Bringing the Strategy to Life.</h2>
            <div class="strategy-life-text-grid">
                <p class="strategy-life-text">Once the strategy was defined, we translated the vision into a cohesive creative direction. Every visual element was carefully considered to establish a distinctive brand presence across social media, campaigns, photography, and video.</p>
                <p class="strategy-life-text">From the first concept to the final execution, each touchpoint was designed with purpose. We combined creative storytelling, consistent visual language, and platform-specific content to turn the strategy into an experience that captures attention and drives meaningful engagement.</p>
            </div>
            <div class="strategy-life-image">
                <img src="{{ asset('images/work-nova.jpg') }}" alt="Bringing the Strategy to Life">
            </div>
        </div>
    </section>

    <section class="results-section">
        <div class="container">
            <h2 class="results-title">Results</h2>
            <p class="results-intro">A strong strategy is measured by the impact it creates. Through focused execution, creative consistency, and continuous optimization, we helped turn attention into meaningful growth — strengthening engagement, expanding reach, and creating measurable value for the brand.</p>
            
            <div class="results-stats-grid">
                <div class="stat-item">
                    <span class="stat-number">+184%</span>
                    <span class="stat-label">Engagement Growth</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">+72%</span>
                    <span class="stat-label">Organic Reach</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">3.4x</span>
                    <span class="stat-label">ROAS</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">+58K</span>
                    <span class="stat-label">Audience Growth</span>
                </div>
            </div>
        </div>
    </section>

    <section class="work-motion-section">
        <div class="container">
            <h2 class="work-motion-title">The Work, In Motion.</h2>
            <div class="work-motion-grid">
                {{-- Col 1: HERMES tall --}}
                <div class="work-motion-item">
                    <img src="{{ asset('images/left.jpg') }}" alt="Hermes Fashion">
                </div>
                {{-- Col 2: B&W fashion top --}}
                <div class="work-motion-item">
                    <img src="{{ asset('images/e3daa32d63e4b525d4d953d43fca4bac8663a408.jpg') }}" alt="Fashion Editorial">
                </div>
                {{-- Col 2: Birkin bag bottom --}}
                <div class="work-motion-item">
                    <img src="{{ asset('images/75380b79c3a2b132c49c08f7ba4bf3c2cef763d7.jpg') }}" alt="Birkin Bag">
                </div>
                {{-- Col 3: FIORE Billboard top --}}
                <div class="work-motion-item">
                    <img src="{{ asset('images/ce777daf76ee5541c189407447390a60a69f9148.jpg') }}" alt="Fiore Billboard">
                </div>
                {{-- Col 3: The Pare website bottom --}}
                <div class="work-motion-item">
                    <img src="{{ asset('images/6b43bbe1f1ef199886ab7fc8478b9fa2e9bec8c0.jpg') }}" alt="The Pare Website">
                </div>
                {{-- Col 4: Woman at sunset tall --}}
                <div class="work-motion-item">
                    <img src="{{ asset('images/3e21a292ef2acb2f4638dacec719d43784164505.jpg') }}" alt="Woman at Sunset">
                </div>
            </div>
        </div>
    </section>

    <!-- Video Section -->
    <section class="video-section">
        <div class="container">
            <div class="video-container">
                <img src="{{ asset('images/hero.jpg') }}" alt="Video Poster Thumbnail">
                <div class="play-button">
                    <div class="play-icon"></div>
                </div>
            </div>
        </div>
    </section>
</main>

@include('components.footer')
</body>
</html>
