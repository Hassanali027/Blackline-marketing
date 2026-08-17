@if(isset($faqs) && $faqs->count() > 0)
    <section class="page-faqs-section container" style="margin-top: 80px; margin-bottom: 80px;">
        <h2 style="font-size: 32px; color: #fff; text-align: center; margin-bottom: 40px; font-weight: 700;">Frequently Asked Questions</h2>
        
        <div class="faqs-container" style="max-width: 800px; margin: 0 auto; display: block; grid-template-columns: none;">
            <div class="faq-section active-section" style="display: block;">
                @foreach($faqs as $faq)
                    <div class="faq-item" style="border-bottom: 1px solid rgba(255,255,255,0.1); padding: 20px 0;">
                        <div class="faq-question" style="display: flex; justify-content: space-between; align-items: center; cursor: pointer;">
                            <span style="font-size: 18px; font-weight: 600; color: #fff;">{{ $faq->question }}</span>
                            <span class="faq-icon" style="font-size: 24px; color: var(--gold); transition: transform 0.3s ease;">+</span>
                        </div>
                        <div class="faq-answer" style="max-height: 0; overflow: hidden; transition: all 0.3s ease;">
                            <div class="faq-answer-content" style="color: var(--muted); font-size: 15px; line-height: 1.6; margin: 0; padding-top: 15px;">
                                {!! $faq->answer !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Use a simple script only once per page -->
    @once
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const pageFaqItems = document.querySelectorAll('.page-faqs-section .faq-item');
            
            pageFaqItems.forEach(item => {
                const question = item.querySelector('.faq-question');
                const answer = item.querySelector('.faq-answer');
                
                question.addEventListener('click', () => {
                    const isActive = item.classList.contains('active');
                    
                    // Close all
                    pageFaqItems.forEach(i => {
                        i.classList.remove('active');
                        i.querySelector('.faq-icon').textContent = '+';
                        i.querySelector('.faq-icon').style.transform = 'rotate(0deg)';
                        i.querySelector('.faq-answer').style.maxHeight = null;
                    });
                    
                    // Open clicked if it wasn't active
                    if (!isActive) {
                        item.classList.add('active');
                        item.querySelector('.faq-icon').textContent = '+';
                        item.querySelector('.faq-icon').style.transform = 'rotate(45deg)';
                        answer.style.maxHeight = answer.scrollHeight + "px";
                    }
                });
            });
        });
    </script>
    @endonce
@endif
