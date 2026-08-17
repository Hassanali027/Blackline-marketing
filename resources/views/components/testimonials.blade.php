<!-- ============ TESTIMONIALS ============ -->
<section class="testi">
  <div class="container">
    <h2 class="h2 center">Real feedback from brands we've built with</h2>

    <div class="testi-wrap">


      <div class="testi-viewport">
        <div class="testi-track" id="tTrack">
          @foreach($feedbacks as $feedback)
          <figure class="testi-card">
            <div class="testi-media">
              <video src="{{ asset($feedback['video']) }}" muted playsinline></video>
              <button class="play" aria-label="Play video"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5.5v13l11-6.5z"/></svg></button>
            </div>
            <blockquote class="testi-body">
              <img class="testi-logo" src="{{ asset($feedback['logo']) }}" alt="Logo">
              <p>{{ $feedback['description'] }}</p>
              <figcaption>
                <span class="t-name">{{ $feedback['name'] }}</span>
                <span class="t-role">{{ $feedback['role'] }}</span>
              </figcaption>
            </blockquote>
          </figure>
          @endforeach
        </div>
      </div>
    </div>

    <div class="dots" id="tDots">
      @foreach($feedbacks as $index => $feedback)
      <button class="dot {{ $index === 0 ? 'is-active' : '' }}" aria-label="Slide {{ $index + 1 }}"></button>
      @endforeach
    </div>
  </div>
</section>
