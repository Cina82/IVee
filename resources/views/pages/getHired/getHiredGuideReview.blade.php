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
                                                <h2 class="intro-content__title" dir="rtl">Add reviews and get hired more often.</h2>
                                            </div>
                                            <div class="intro-content__step-icon-container tp-col tp-col--4">
                                                <img src="https://www.thumbtack.com/pro-center/wp-content/themes/procenter/images/ghg_get-reviews.svg" class="intro-content__step-icon" />
                                            </div>
                                        </div>

                                        <div class="intro-content__description" dir="rtl">
                                            <p>Reviews are often the biggest influence on a customer’s hiring decision—a great review gives you credibility. To get hired more often, ask for reviews from past customers (both on and off Ivee). <strong>85% of the pros hired on Ivee have at least 1 review.</strong></p>
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
                                                            <h2 class="testimonial-carousel__quote">I rely a lot on reviews when considering whether or not to hire a pro on Ivee. It’s so important to read reviews from people whose projects are similar to mine.</h2>
                                                        </div>

                                                        <div class="testimonial-carousel__pro">

                                                            <div class="testimonial-carousel__pro-container">
                                                                <div class="testimonial-carousel__pro-name" dir="rtl">Bret W.</div>

                                                                <div class="testimonial-carousel__pro-profession" dir="rtl">San Francisco, California
                                                                    <br>Ivee Customer</div>

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
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/jSFiSyP4C9k?rel=0" frameborder="0" allowfullscreen></iframe>
                                        </div>

                                        <figcaption class="video-section__caption">
                                            Learn how to ask for reviews. </figcaption>

                                    </figure>

                                    <hr class="tp-rule">

                                    <h2 class="subsection_title tp-heading-4" dir="rtl">Getting your first review</h2>

                                    <div class="content-block">
                                        <div class="tp-grid">

                                            <div class="content-block__content tp-col tp-col--12" dir="rtl">
                                                <p>Building a solid rating takes time, but you can get up to 10 reviews from past customers even before your first Ivee hire. Once you’re hired on Ivee, we’ll ask your customers to review you. All reviews from Ivee customers display on your profile along with the label “Verified Review.”</p>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="content-block">
                                        <div class="tp-grid">

                                            <div class="content-block__title tp-col tp-col--12 tp-Text--center tp-PushDouble--bottom">
                                                Make it easy for customers to review you: </div>

                                            <div class="content-block__content tp-col tp-col--12 tp-col--md-6" dir="rtl">
                                                <p><strong>Email or text your personalized link to previous customers.</strong> To find your link, go to the reviews section of your profile and click “Manage reviews.” Your review link never changes or expires.</p>
                                            </div>

                                            <div class="content-block__content tp-col tp-col--12 tp-col--md-6" dir="rtl">
                                                <p><strong>Follow up! Give customers a friendly nudge after a few days.</strong> You can respond to every review to say thanks and emphasize how much you enjoyed the project.</p>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="content-block">
                                        <div class="tp-grid">

                                            <div class="content-block__content tp-col tp-col--12" dir="rtl">
                                                <p>Here’s how to <a href="#">find and share your review link</a>.</p>
                                            </div>

                                        </div>

                                    </div>

                                    <hr class="tp-rule">

                                    <h2 class="subsection_title tp-heading-4" dir="rtl">How to ask for reviews</h2>

                                    <div class="image-section">
                                        <div class="tp-grid tp-grid--center">
                                            <div class="image-section__wrap tp-col tp-col--12">
                                                <img src="https://www.thumbtack.com/pro-center/wp-content/uploads/2017/05/how-to-ask-for-reviews.png" alt="How to ask for reviews" class="image-section__image" style="width:80%;height:auto;" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="content-block">
                                        <div class="tp-grid">

                                            <div class="content-block__title tp-col tp-col--12 tp-Text--center tp-PushDouble--bottom">
                                                Two example emails from pros requesting reviews: </div>

                                            <div class="content-block__content tp-col tp-col--12 tp-col--md-6" dir="rtl">
                                                <p><strong>Request a review.</strong> See <a class="modaal" href="#reviewemail1" data-modaal-type="inline">Anja’s email</a> requesting a review from a past customer. Her message is friendly and encouraging. Anja makes it easy to write a review by including her personalized link.</p>
                                            </div>

                                            <div class="content-block__content tp-col tp-col--12 tp-col--md-6" dir="rtl">
                                                <p><strong>Follow up.</strong> See <a class="modaal" href="#reviewemail2" data-modaal-type="inline">Jonas’ email</a> to follow up on a request for a review. His message is lighthearted and sincere without being pushy.</p>
                                                <div id="reviewemail1" class="hidden-modaal">
                                                    <h3>Anja&#8217;s email</h3>
                                                    <p>Hi Tanner,</p>
                                                    <p>It&#8217;s been a while, but I still show off photos from your job more than any others in my portfolio. My customers are constantly inspired by your story and the results we accomplished. I just signed up on Ivee to find more excellent customers like you, and reviews are a big part of my profile. Can you take a moment to write a couple sentences about working with me? I&#8217;d love if my future customers could hear about your experience firsthand. You won&#8217;t need to sign up for anything, just go to this link: [Anja’s custom review link].</p>
                                                    <p>Thanks, and don&#8217;t be a stranger!</p>
                                                </div>
                                                <div id="reviewemail2" class="hidden-modaal">
                                                    <h3>Jonas&#8217; quote</h3>
                                                    <p>Hey Angela,</p>
                                                    <p>It’s me again, hope you’re great as ever! I know you’re busy, but could you write me a quick review at this link: [Jonas’ custom review link]? It only has to be a sentence or two, and I know my new clients will love hearing your story.</p>
                                                    <p>Thanks so much!</p>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <hr class="tp-rule">

                                    <h2 class="subsection_title tp-heading-4" dir="rtl">Responding to negative reviews</h2>

                                    <div class="content-block" dir="rtl">
                                        <div class="tp-grid">

                                            <div class="content-block__content tp-col tp-col--12">
                                                <p>Every pro gets an occasional negative review. Try not to get discouraged and instead, use it as a chance to show off your customer service skills. Customers often look at the pro’s response to a negative review to understand how you react when things don’t go perfectly. If you follow up with a thoughtful and positive response, future customers will see that you’re responsive and solution-oriented. <a class="modaal" href="#negativereview" data-modaal-type="inline">Here are some examples</a> of great responses from Ivee pros.</p>
                                                <p>Keep in mind that once you submit a response, you can’t edit it again, so make sure you’re confident in your response before you post it.</p>
                                                <p>Check out more <a href="#" target="_blank" rel="noopener noreferrer">tips for responding to negative reviews</a>.</p>
                                                <div id="negativereview" class="hidden-modaal">
                                                    <h3>Three examples responses:</h3>
                                                    <p>Thanks for hiring us, and thanks for your honest feedback. I’m sorry I was running late that day. I’ll be sure to call ahead or text if I’m behind schedule in the future. Hope you’re loving your new bathroom!</p>
                                                    <p>I’m so sorry you weren’t happy with your photographs. I’ll send over a few more prints today to see if they’re more your style. I’d also be happy to keep working with you until we get it right.</p>
                                                    <p>Hi Mary, I’ll be sure to consider your feedback on my next project. Many projects last longer than we’d like (or can expect due to unforeseen circumstances), but I appreciate your ideas on how we can improve. Thanks again for hiring us.</p>
                                                </div>
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
                                                            <h2 class="testimonial-carousel__quote">Before I had any clients through Ivee, I reached out to my existing and former clients who knew my work well and asked them to write me a review. They always said yes—and if a few days went by without a review, I gently nudged them in a very friendly way.</h2>
                                                        </div>

                                                        <div class="testimonial-carousel__pro">

                                                            <div class="testimonial-carousel__avatar-container tp-avatar tp-avatar--large">
                                                                <img src="https://www.thumbtack.com/pro-center/wp-content/uploads/2017/05/Kaitlyn-Noble-300x295.png" alt="Kaitlyn Noble - Nutrition & Fitness Coaching" class="testimonial-carousel__avatar tp-avatar__img">
                                                            </div>

                                                            <div class="testimonial-carousel__pro-container">
                                                                <div class="testimonial-carousel__pro-name" dir="rtl">Kaitlyn Noble</div>

                                                                <div class="testimonial-carousel__pro-profession" dir="rtl">Nutrition & Fitness Coaching</div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="testimonial-carousel__item">

                                                        <div class="testimonial-carousel__quote-container">
                                                            <h2 class="testimonial-carousel__quote">When everything is over and customers are in the post-event glow and rattling off compliments, that’s when you ask if they will write you a review. You can always send a reminder when you send the invoice as well.</h2>
                                                        </div>

                                                        <div class="testimonial-carousel__pro">

                                                            <div class="testimonial-carousel__avatar-container tp-avatar tp-avatar--large">
                                                                <img src="https://www.thumbtack.com/pro-center/wp-content/uploads/2017/05/Ian.jpg" alt="Ian McCarthy - Bartending Services" class="testimonial-carousel__avatar tp-avatar__img">
                                                            </div>

                                                            <div class="testimonial-carousel__pro-container">
                                                                <div class="testimonial-carousel__pro-name" dir="rtl">Ian McCarthy</div>

                                                                <div class="testimonial-carousel__pro-profession" dir="rtl">Bartending Services</div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="testimonial-carousel__item">

                                                        <div class="testimonial-carousel__quote-container">
                                                            <h2 class="testimonial-carousel__quote">On our final walkthrough before the event, I tell clients that I will send a follow-up soon asking them to review my work. If it’s a wedding, I send the email a few days after they return from their honeymoon.</h2>
                                                        </div>

                                                        <div class="testimonial-carousel__pro">

                                                            <div class="testimonial-carousel__avatar-container tp-avatar tp-avatar--large">
                                                                <img src="https://www.thumbtack.com/pro-center/wp-content/uploads/2017/05/Daphne-Floral-Design-300x300.jpg" alt="Daphne Simpson-Wellman - Floral Design" class="testimonial-carousel__avatar tp-avatar__img">
                                                            </div>

                                                            <div class="testimonial-carousel__pro-container">
                                                                <div class="testimonial-carousel__pro-name" dir="rtl">Daphne Simpson-Wellman</div>

                                                                <div class="testimonial-carousel__pro-profession" dir="rtl">Floral Design</div>

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
                                                    Ready to get reviews and get hired more often?
                                                </div>
                                                <div class="footer-cta__button-container tp-col tp-col--12 tp-col--md-6">
                                                    <a href="#" class="footer-cta__button-link tp-button tp-button--large" target="_blank" rel="noopener noreferrer">
                    Ask for Reviews             </a>
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
                                <span class="footer-block__title">Next article: Set your preferences</span>
                                <div class="footer-block__description">
                                    Make sure we’re sending you the right customers. </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </a>
@endsection


                        
