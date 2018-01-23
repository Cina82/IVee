@extends('layouts.getHired')

@section('content')

     <div class="site-inner">
            <div class="content-sidebar-wrap">
                <main class="content">
                    <div class="ghg-child-step">
                        <div class="tp-wrap">
                            <div class="tp-grid tp-grid--center">
                                <div class="ghg-child-step__title-container">
                                    <h3 class="ghg-child-step__title">Build your profile</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="main-content ghg__child">
                        <div class="main-content__wrapper tp-wrap">
                            <div class="tp-grid">

                              @include('howThumbtackNav.howThumbtackNav')

                                 <div class="main-content__content tp-col tp-col--12 tp-col--md-8" itemscope="" itemtype="https://schema.org/CreativeWork">

                                    <div class="intro-content">
                                        <div class="intro-content__container tp-grid tp-grid--middle">
                                            <div class="intro-content__title-container tp-col tp-col--8">
                                                <h2 class="intro-content__title" dir="rtl">Customize your price and message.</h2>
                                            </div>
                                            <div class="intro-content__step-icon-container tp-col tp-col--4">
                                                <img src="https://www.thumbtack.com/pro-center/wp-content/themes/procenter/images/ghg_send-quote.svg" class="intro-content__step-icon" />
                                            </div>
                                        </div>

                                        <div class="intro-content__description" dir="rtl">
                                            <p>Customers are looking for quotes that match their needs and grab their attention. New pros often send 10 quotes before getting their first hire, and those who succeed say they refined their quote until it worked. <strong>Learn from past quotes and test different approaches.</strong></p>
                                        </div>

                                    </div>

                                    <div class="testimonial-carousel ghg__child">

                                        <div class="testimonial-carousel__title-container">
                                            <h2 class="testimonial-carousel__title">
                                                What Customers Say  
                                            </h2>
                                        </div>

                                        <div class="tp-wrap">

                                            <div class="tp-grid">

                                                <div class="testimonial-carousel__items tp-col tp-col--12">

                                                    <div class="testimonial-carousel__item">

                                                        <div class="testimonial-carousel__quote-container">
                                                            <h2 class="testimonial-carousel__quote">When I open a quote I can tell right away whether or not a pro has read the details of my project. If they’re friendly and address your needs directly, you know they’re the pro for the job.</h2>
                                                        </div>

                                                        <div class="testimonial-carousel__pro">

                                                            <div class="testimonial-carousel__pro-container">
                                                                <div class="testimonial-carousel__pro-name" dir="rtl">Kara B.</div>

                                                                <div class="testimonial-carousel__pro-profession" dir="rtl">Los Angeles, California
                                                                    <br dir="rtl">Ivee Customer</div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>
                                                <!-- .testimonial-carousel__items -->
                                            </div>
                                            <!-- .tp-grid  -->
                                        </div>
                                        <!-- .tp-wrap  -->
                                    </div>
                                    <!-- .testimonial-carousel  -->
                                    <hr class="tp-rule">

                                    <figure class="video-section">
                                        <div class="video-section__wrap">
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/HKvy8_saHGQ?rel=0" frameborder="0" allowfullscreen></iframe>
                                        </div>

                                        <figcaption class="video-section__caption">
                                            Tips to write quotes your customers will remember </figcaption>

                                    </figure>

                                    <hr class="tp-rule">

                                    <h2 class="subsection_title tp-heading-4" dir="rtl">Three winning quote examples</h2>

                                    <div class="content-block">
                                        <div class="tp-grid">

                                            <div class="content-block__content tp-col tp-col--12" dir="rtl">
                                                <p>Great quotes are personalized, highlight your expertise, and outline next steps. Below are three examples from successful pros.</p>
                                                <ol>
                                                    <li><strong>Greet customers by name and show you’re qualified.</strong> See <a class="modaal" href="#ghgquote1" data-modaal-type="inline">Rick’s photography quote</a>. He shows excitement to work with the customer, shares his experience, and briefly describes a similar project he recently completed.</li>
                                                    <li><strong>Set expectations and next steps.</strong> See <a class="modaal" href="#ghgquote2" data-modaal-type="inline">Mark&#8217;s catering quote</a>. He gives the customer options and encouragement to get plans rolling.</li>
                                                    <li><strong>Explain your price.</strong> See <a class="modaal" href="#ghgquote3" data-modaal-type="inline">Carmen&#8217;s handyman quote</a>. She gives the customer an idea of what’s included in her quote and the factors that affect the total price, while also addressing specific request details.</li>
                                                </ol>
                                                <div id="ghgquote1" class="hidden-modaal">
                                                    <h3>Ricks&#8217;s photography quote</h3>
                                                    <p>Hi Marcus,</p>
                                                    <p>My name is Rick, and I would love to capture your special day! I have 5 years of professional experience and a photojournalism degree from Ohio University. Catching those real moments that make your special day memorable is what I love. My photos are natural and full of emotion.</p>
                                                    <p>My price includes:</p>
                                                    <p>&#8211; Ceremony photos and portraits of the wedding party
                                                        <br /> &#8211; Light photo editing for all photos
                                                        <br /> &#8211; Beauty retouching on 15 of your favorite shots
                                                        <br /> &#8211; A DVD with your images
                                                        <br /> &#8211; Copyrights to your photos (so you can use them how you please)</p>
                                                    <p>I also offer photo printing packages and discounted rates when you book an engagement session with your wedding day package. I’ve attached a few photos from a previous wedding I shot so you can see the high-quality work I do.</p>
                                                    <p>Please let me know if you have any questions. I’ll be in your area tomorrow, and I’d love to set up a time for an in-person consultation.</p>
                                                    <p>Rick Quinn
                                                        <br /> Quinn Photography</p>
                                                </div>
                                                <div id="ghgquote2" class="hidden-modaal">
                                                    <h3>Mark&#8217;s catering quote</h3>
                                                    <p>Hi Hasan,</p>
                                                    <p>I’m available March 16th for your dinner party and would love to cook for you and your guests.</p>
                                                    <p>I specialize in French and Italian cuisine, but also appreciate a good barbecue or cajun cookout. My staff and I have catered more than 30 private dinner parties like yours in the past year. You can read reviews from these satisfied (and full) customers on my profile.</p>
                                                    <p>For your party of 12 quests, our price includes:</p>
                                                    <p>&#8211; One appetizer
                                                        <br /> &#8211; An entree
                                                        <br /> &#8211; Dessert
                                                        <br /> &#8211; Setup and cleanup
                                                        <br /> &#8211; China and silverware
                                                        <br /> &#8211; Two servers</p>
                                                    <p>I’ve attached a sample menu from a similar event I recently catered. If you have ideas of what you’d like served, we can start customizing your menu. I look forward to working with you.</p>
                                                    <p>Chef Mark</p>
                                                </div>
                                                <div id="ghgquote3" class="hidden-modaal">
                                                    <h3>Carmen’s handyman quote</h3>
                                                    <p>Hi Mary,</p>
                                                    <p>I’m sorry to hear about the damage to your fence from the storm. Fence repair is one of our specialties and we can send out one of our licensed fencing pros for the repair right away.</p>
                                                    <p>Our fee starts at $300 for the repair, and can increase depending on materials needed and the size of the repair. The fee includes the materials, labor, and making repairs or replacing any posts that might have been damaged as well.</p>
                                                    <p>Give us a call and we can send one of our pros to your house ASAP.</p>
                                                    <p>We hope to hear from you soon,
                                                        <br /> Carmen Perez</p>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <hr class="tp-rule">

                                    <h2 class="subsection_title tp-heading-4" dir="rtl">Pricing your quotes</h2>

                                    <div class="image-section">
                                        <div class="tp-grid tp-grid--center">
                                            <div class="image-section__wrap tp-col tp-col--12">
                                                <img src="https://www.thumbtack.com/pro-center/wp-content/uploads/2017/05/Pricing-your-quotes.png" alt="Pricing your quotes" class="image-section__image" style="width:80%;height:auto;" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="content-block">
                                        <div class="tp-grid">

                                            <div class="content-block__content tp-col tp-col--12" dir="rtl">
                                                <p>Not sure how to price your quote? You’re the expert on the value you offer and what you need to take home from each job. Check out<a href="#" target="_blank" rel="noopener noreferrer"> cost estimates for each job type</a> to get insight into market averages. Keep in mind that these prices are averages and that customers don’t always hire the lowest quote. Choose whatever price works best for your business and prove your value in your quote message and profile.</p>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="content-block">
                                        <div class="tp-grid">

                                            <div class="content-block__title tp-col tp-col--12 tp-Text--center tp-PushDouble--bottom" dir="rtl" >
                                                When it’s time to price your quote, look for one or more of these options: </div>

                                            <div class="content-block__content tp-col tp-col--12" dir="rtl" >
                                                <ul>
                                                    <li><strong>Hourly rate.</strong> Provide your ongoing hourly rate.</li>
                                                    <li><strong>Fixed price.</strong> State the total fixed price for the job or a package deal, if it applies.</li>
                                                    <li><strong>Need more info.</strong> Use this option sparingly as customers appreciate pricing details. It’s a good choice if you don’t feel comfortable sharing a price estimate based on what the customer submitted. Be sure to explain what information you need in your quote message.</li>
                                                </ul>
                                                <div id="pricing"></div>
                                            </div>

                                        </div>

                                    </div>

                                    <hr class="tp-rule">

                                    <h2 class="subsection_title tp-heading-4" dir="rtl">Sending your quotes</h2>

                                    <div class="image-section">
                                        <div class="tp-grid tp-grid--center">
                                            <div class="image-section__wrap tp-col tp-col--12">
                                                <img src="https://www.thumbtack.com/pro-center/wp-content/uploads/2017/05/Sending-your-quotes.png" alt="Sending your quotes" class="image-section__image" style="width:50%;height:auto;" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="content-block">
                                        <div class="tp-grid">

                                            <div class="content-block__content tp-col tp-col--12" dir="rtl">
                                                <p>After writing your first quote, you’ll be prompted to buy Ivee Credits to send it—sort of like buying postage for a delivery. You only pay to send quotes, and you keep all of what you earn from customers.</p>
                                                <p>Each credit costs $1.67, or you can <a href="#" target="_blank" rel="noopener noreferrer">buy credit packs for discounts</a>. The number of credits needed to quote on each request varies based on the job’s value and competition from other pros in that market.</p>
                                                <p>Every request displays the number of credits you’ll need to send a quote. <strong>If your quote isn’t viewed within 48 hours, we’ll automatically refund those credits back to your account. </strong></p>
                                                <p>Check out <a href="#" target="_blank" rel="noopener noreferrer">details on credits and pricing</a>.</p>
                                            </div>

                                        </div>

                                    </div>

                                    <hr class="tp-rule">

                                    <div class="testimonial-carousel ghg__child">

                                        <div class="testimonial-carousel__title-container">
                                            <h2 class="testimonial-carousel__title">
                                                Pro Tips    
                                            </h2>
                                        </div>

                                        <div class="tp-wrap">

                                            <div class="tp-grid">

                                                <div class="testimonial-carousel__items tp-col tp-col--12">

                                                    <div class="testimonial-carousel__item">

                                                        <div class="testimonial-carousel__quote-container">
                                                            <h2 class="testimonial-carousel__quote">Respond quickly and think from the standpoint of the client. What would they want to see? For example, if someone says they want new construction, I’ll send a plan of new construction we’ve done, or photos of a construction home we’ve done in the past.</h2>
                                                        </div>

                                                        <div class="testimonial-carousel__pro">

                                                            <div class="testimonial-carousel__avatar-container tp-avatar tp-avatar--large">
                                                                <img src="https://www.thumbtack.com/pro-center/wp-content/uploads/2017/05/Josh-Downing-300x297.png" alt="Josh Downing - General Contracting" class="testimonial-carousel__avatar tp-avatar__img">
                                                            </div>

                                                            <div class="testimonial-carousel__pro-container">
                                                                <div class="testimonial-carousel__pro-name" dir="rtl">Josh Downing</div>

                                                                <div class="testimonial-carousel__pro-profession" dir="rtl">General Contracting</div>

                                                                <div class="testimonial-carousel__pro-stars-container">
                                                                    <img src="https://www.thumbtack.com/pro-center/wp-content/themes/procenter/images/stars.svg" width="72" height="12" style="width:72px;height:12px;"><span class="testimonial-carousel__pro-reviews" dir="rtl"> (9 reviews)</span>
                                                                </div>

                                                                <div class="testimonial-carousel__pro-link-container">
                                                                    <a href="#" target="_blank" class="testimonial-carousel__pro-link" dir="rtl">See Josh’s full interview&nbsp;»</a>
                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="testimonial-carousel__item">

                                                        <div class="testimonial-carousel__quote-container">
                                                            <h2 class="testimonial-carousel__quote">Ask questions. So often the client wants to better understand what they’re looking for themselves. I’ve also found that clients tend to appreciate suggestions, from a favorite photo location to a unique color scheme for their branding.</h2>
                                                        </div>

                                                        <div class="testimonial-carousel__pro">

                                                            <div class="testimonial-carousel__avatar-container tp-avatar tp-avatar--large">
                                                                <img src="https://www.thumbtack.com/pro-center/wp-content/uploads/2017/05/Rachel-Grahmann-300x300.png" alt="Rachel Grahmann - Photography & Design" class="testimonial-carousel__avatar tp-avatar__img">
                                                            </div>

                                                            <div class="testimonial-carousel__pro-container">
                                                                <div class="testimonial-carousel__pro-name" dir="rtl">Rachel Grahmann</div>

                                                                <div class="testimonial-carousel__pro-profession" dir="rtl">Photography & Design</div>

                                                                <div class="testimonial-carousel__pro-stars-container">
                                                                    <img src="https://www.thumbtack.com/pro-center/wp-content/themes/procenter/images/stars.svg" width="72" height="12" style="width:72px;height:12px;"><span class="testimonial-carousel__pro-reviews" dir="rtl"> (18 reviews)</span>
                                                                </div>

                                                                <div class="testimonial-carousel__pro-link-container">
                                                                    <a href="#" target="_blank" class="testimonial-carousel__pro-link" dir="rtl">See Rachel’s full interview&nbsp;»</a>
                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="testimonial-carousel__item">

                                                        <div class="testimonial-carousel__quote-container">
                                                            <h2 class="testimonial-carousel__quote">Respond as specifically as possible. For example, if a couple requests black and white colors for an anniversary, I tell them how much I love celebrating a couple’s marriage. I send photos of past black and white parties or anniversaries I’ve done.</h2>
                                                        </div>

                                                        <div class="testimonial-carousel__pro">

                                                            <div class="testimonial-carousel__avatar-container tp-avatar tp-avatar--large">
                                                                <img src="https://www.thumbtack.com/pro-center/wp-content/uploads/2017/05/Rebecca-Foster-300x300.png" alt="Rebecca Foster - Event Planner" class="testimonial-carousel__avatar tp-avatar__img">
                                                            </div>

                                                            <div class="testimonial-carousel__pro-container">
                                                                <div class="testimonial-carousel__pro-name" dir="rtl">Rebecca Foster</div>

                                                                <div class="testimonial-carousel__pro-profession" dir="rtl">Event Planner</div>

                                                                <div class="testimonial-carousel__pro-stars-container">
                                                                    <img src="https://www.thumbtack.com/pro-center/wp-content/themes/procenter/images/stars.svg" width="72" height="12" style="width:72px;height:12px;"><span class="testimonial-carousel__pro-reviews" dir="rtl"> (4 reviews)</span>
                                                                </div>

                                                                <div class="testimonial-carousel__pro-link-container">
                                                                    <a href="#" target="_blank" class="testimonial-carousel__pro-link" dir="rtl">See Rebecca’s full interview&nbsp;»</a>
                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>
                                                <!-- .testimonial-carousel__items -->
                                            </div>
                                            <!-- .tp-grid  -->
                                        </div>
                                        <!-- .tp-wrap  -->
                                    </div>
                                    <!-- .testimonial-carousel  -->
                                    <hr class="tp-rule">

                                    <div class="footer-cta">
                                        <div class="tp-wrap">
                                            <div class="tp-grid tp-grid--middle">

                                                <div class="footer-cta__title tp-col tp-col--12 tp-col--md-6" dir="rtl">
                                                    Are you ready to update your quotes to get hired more often?
                                                </div>
                                                <div class="footer-cta__button-container tp-col tp-col--12 tp-col--md-6">
                                                    <a href="https://www.thumbtack.com/profile/work/leads/" class="footer-cta__button-link tp-button tp-button--large" target="_blank" rel="noopener noreferrer">
                    Write A Quote               </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </main>
            </div>
        </div>
        <a href="#" class="prev-next-link">
            <div class="footer-block">
                <div class="tp-wrap">
                    <div class="tp-grid">
                        <div class="footer-block__container tp-col tp-col--12 tp-col--md-8 tp-col--md-offset-4 ">
                            <div class="footer-block__content">
                                <span class="footer-block__title" dir="rtl">Next article: Follow up</span>
                                <div class="footer-block__description" >
                                    Send a great follow-up message to seal the deal. </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </a>
@endsection


                        
