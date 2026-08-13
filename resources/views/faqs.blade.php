<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs - Black Line Marketing</title>
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
            <button class="active" data-target="pricing-faqs">Pricing</button>
            <button data-target="process-faqs">Process</button>
            <button data-target="timelines-faqs">Timelines</button>
            <button data-target="communication-faqs">Communication</button>
            <button data-target="content-creation-faqs">Content creation</button>
            <button data-target="payments-faqs">Payments</button>
            <button data-target="contracts-faqs">Contracts</button>
        </div>
    </div>

    <div class="faqs-container container">
        <!-- Pricing Section -->
        <div class="faq-section active-section" id="pricing-faqs">
            <h2>Pricing</h2>
            <div class="faq-item">
                <div class="faq-question">
                    <span>What are your standard retainer packages?</span>
                    <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer">
                    <p>We offer customized retainer packages based on your brand's unique needs, scope of work, and aggressive growth targets. Packages typically start at $3,500/month.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>Are there any hidden setup fees?</span>
                    <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer">
                    <p>No. We believe in complete transparency. Any initial onboarding or setup fees are clearly outlined in your custom proposal before we sign anything.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>Can we adjust our budget midway through a campaign?</span>
                    <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, we maintain flexibility. If we see an opportunity to double down on a winning strategy, we can scale your ad spend and resources up or down as needed.</p>
                </div>
            </div>
        </div>

        <!-- Process Section -->
        <div class="faq-section" id="process-faqs">
            <h2>Process</h2>
            <div class="faq-item">
                <div class="faq-question">
                    <span>How does the onboarding process work?</span>
                    <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer">
                    <p>Our onboarding takes exactly 7 days. We dive deep into your brand, gain access to your accounts, set up tracking, and deliver a comprehensive 90-day strategy blueprint.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>Do you work with our existing brand guidelines?</span>
                    <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer">
                    <p>Absolutely. We respect the brand equity you've built. We'll absorb your brand guidelines and ensure all content we produce matches your tone and visual identity.</p>
                </div>
            </div>
        </div>

        <!-- Timelines Section -->
        <div class="faq-section" id="timelines-faqs">
            <h2>Timelines</h2>
            <div class="faq-item">
                <div class="faq-question">
                    <span>When can we expect to see results?</span>
                    <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer">
                    <p>While some quick wins can happen in the first 30 days, we ask clients to commit to a 90-day minimum to allow our strategies to gain traction and optimize properly.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>How long does content production take?</span>
                    <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer">
                    <p>From ideation to final approval, standard social assets take about 2 weeks. Larger video campaigns or complex interactive assets may take 3-4 weeks.</p>
                </div>
            </div>
        </div>

        <!-- Communication Section -->
        <div class="faq-section" id="communication-faqs">
            <h2>Communication</h2>
            <div class="faq-item">
                <div class="faq-question">
                    <span>How often will we meet?</span>
                    <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer">
                    <p>We hold bi-weekly strategy syncs and provide an in-depth monthly performance review. You'll also have a dedicated Slack channel for day-to-day communication.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>Who will be my point of contact?</span>
                    <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer">
                    <p>You will be assigned a dedicated Account Director who acts as your strategic partner and main point of contact, supported by a full team of specialists.</p>
                </div>
            </div>
        </div>

        <!-- Content Creation Section -->
        <div class="faq-section" id="content-creation-faqs">
            <h2>Content creation</h2>
            <div class="faq-item">
                <div class="faq-question">
                    <span>Do you handle video production?</span>
                    <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes. Our in-house creative team handles end-to-end video production, from scripting and storyboarding to shooting, editing, and final delivery.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>Do we get to approve content before it goes live?</span>
                    <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer">
                    <p>100%. Nothing goes live without your final approval. We provide a visual content calendar two weeks in advance for your review.</p>
                </div>
            </div>
        </div>

        <!-- Payments Section -->
        <div class="faq-section" id="payments-faqs">
            <h2>Payments</h2>
            <div class="faq-item">
                <div class="faq-question">
                    <span>What payment methods do you accept?</span>
                    <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer">
                    <p>We accept all major credit cards, ACH transfers, and wire transfers. Payments are processed securely via Stripe.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>How does billing work?</span>
                    <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer">
                    <p>Retainers are billed on the 1st of every month on a recurring subscription basis. Ad spend is typically billed directly to your own credit card.</p>
                </div>
            </div>
        </div>

        <!-- Contracts Section -->
        <div class="faq-section" id="contracts-faqs">
            <h2>Contracts</h2>
            <div class="faq-item">
                <div class="faq-question">
                    <span>Are we locked into a long-term contract?</span>
                    <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer">
                    <p>We typically start with a 90-day pilot agreement. After that, we move to a rolling month-to-month contract with a 30-day cancellation notice.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>Who owns the content you create?</span>
                    <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer">
                    <p>You do. Once paid for, all creative assets, ad accounts, and data belong 100% to your company.</p>
                </div>
            </div>
        </div>
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
