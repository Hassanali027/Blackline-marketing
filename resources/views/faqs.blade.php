<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frequently Asked Questions | Black Line Marketing</title>
    <meta name="description" content="Find answers to commonly asked questions about Black Line Marketing's services, pricing, process, and more.">
    <meta name="keywords" content="marketing FAQs, agency questions, digital marketing pricing, marketing process, Black Line Marketing">
    <meta name="robots" content="index, follow">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/faqs.css') }}">
</head>
<body>

@include('components.header')

<main>
    <section class="faqs-hero">
        <h1>Frequently Asked Questions</h1>
        <p>Everything you need to know before working with Black Line Marketing<br>from pricing and process to communication, content creation,<br>payments, and contracts.</p>
    </section>

    <div class="faqs-filters-wrapper container">
        <div class="faqs-filters">
            @foreach($faqs as $category => $categoryFaqs)
                <button class="{{ $loop->first ? 'active' : '' }}" data-target="{{ Str::slug($category) }}-faqs">{{ $category }}</button>
            @endforeach
        </div>
    </div>

    <div class="faqs-container container">
        @foreach($faqs as $category => $categoryFaqs)
            <div class="faq-section {{ $loop->first ? 'active-section' : '' }}" id="{{ Str::slug($category) }}-faqs">
                <h2>{{ $category }}</h2>
                @foreach($categoryFaqs as $faq)
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>{{ $faq->question }}</span>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <div class="faq-answer-content" style="color: var(--muted); line-height: 1.6;">
                                {!! $faq->answer !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</main>

@include('components.footer')

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // --- FAQ Scroll Navigation ---
        const filterBtns = document.querySelectorAll('.faqs-filters button');
        const faqSections = document.querySelectorAll('.faq-section');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const targetId = btn.getAttribute('data-target');
                const targetSection = document.getElementById(targetId);
                
                if (targetSection) {
                    const offset = 100; // Offset for sticky header if any
                    const elementPosition = targetSection.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - offset;
                    
                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // --- Intersection Observer for Active State ---
        const observerOptions = {
            root: null,
            rootMargin: '-30% 0px -60% 0px',
            threshold: 0
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const id = entry.target.getAttribute('id');
                    filterBtns.forEach(btn => {
                        if (btn.getAttribute('data-target') === id) {
                            btn.classList.add('active');
                            // Horizontally scroll the active button into view if it's overflowing
                            btn.parentElement.parentElement.scrollTo({
                                left: btn.offsetLeft - 20,
                                behavior: 'smooth'
                            });
                        } else {
                            btn.classList.remove('active');
                        }
                    });
                }
            });
        }, observerOptions);
        
        faqSections.forEach(section => observer.observe(section));

        // --- FAQ Accordion Logic ---
        const faqItems = document.querySelectorAll('.faq-item');
        
        faqItems.forEach(item => {
            // Remove inline styles set for the initial active state in HTML
            // so our JS logic takes over smoothly.
            const answer = item.querySelector('.faq-answer');
            if(item.classList.contains('active')) {
                answer.style.maxHeight = answer.scrollHeight + 'px';
            }
            
            const question = item.querySelector('.faq-question');
            question.addEventListener('click', () => {
                const isActive = item.classList.contains('active');
                
                if (!isActive) {
                    item.classList.add('active');
                    item.querySelector('.faq-icon').innerHTML = '&times;'; // × symbol
                    answer.style.maxHeight = answer.scrollHeight + "px";
                    answer.style.marginTop = '15px';
                } else {
                    item.classList.remove('active');
                    item.querySelector('.faq-icon').textContent = '+';
                    answer.style.maxHeight = null;
                    answer.style.marginTop = '0';
                }
            });
        });
    });
</script>

</body>
</html>
