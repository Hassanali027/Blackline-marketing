document.addEventListener('DOMContentLoaded', () => {
  const burger = document.querySelector('.site-header #burger');
  const nav = document.querySelector('.site-header #nav');

  burger?.addEventListener('click', () => {
    const open = nav.classList.toggle('is-open');
    burger.setAttribute('aria-expanded', String(open));
  });

  // Process Section Scroll Animation Sequence
  const processSection = document.querySelector('.process-section');
  if (processSection) {
    const titleContent = document.querySelector('.process-left-content');
    const goldCrescent = document.querySelector('.gold-crescent');
    const dashedOrbit = document.querySelector('.dashed-orbit');
    
    const stepPills = document.querySelectorAll('.process-step-pill');
    const goldNodes = document.querySelectorAll('.gold-node');
    const connLines = document.querySelectorAll('.conn-line');

    let sequenceStarted = false;

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting && !sequenceStarted) {
          sequenceStarted = true;
          
          // 1. Reveal Title
          if (titleContent) titleContent.classList.add('revealed');
          
          // 2. Reveal Arc and Dashed Track
          setTimeout(() => {
            if (goldCrescent) goldCrescent.classList.add('revealed');
            if (dashedOrbit) dashedOrbit.classList.add('revealed');
          }, 300);

          // 3. Reveal first card (Discover)
          setTimeout(() => {
            if (stepPills[0]) stepPills[0].classList.add('revealed');
            if (goldNodes[0]) goldNodes[0].classList.add('revealed');
            if (connLines[0]) connLines[0].classList.add('revealed');
          }, 900);
        }
      });
    }, { threshold: 0.35 });

    observer.observe(processSection);

    // Scroll tracking for the remaining cards
    window.addEventListener('scroll', () => {
      if (!sequenceStarted) return;
      
      const rect = processSection.getBoundingClientRect();
      const scrollDepth = -rect.top + (window.innerHeight * 0.3); // Adjust offset based on viewport
      
      // Reveal thresholds based on scroll depth
      const thresholds = [0, 150, 300, 450, 600];
      
      for (let i = 1; i < stepPills.length; i++) {
        if (scrollDepth > thresholds[i]) {
          if (stepPills[i]) stepPills[i].classList.add('revealed');
          if (goldNodes[i]) goldNodes[i].classList.add('revealed');
          if (connLines[i]) connLines[i].classList.add('revealed');
        }
      }
    });
  }
});
