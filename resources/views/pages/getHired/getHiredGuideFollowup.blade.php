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
                                                <h2 class="intro-content__title" dir="rtl">Send a great follow-up message to seal the deal.</h2>
                                            </div>
                                            <div class="intro-content__step-icon-container tp-col tp-col--4">
                                                <img src="https://www.thumbtack.com/pro-center/wp-content/themes/procenter/images/ghg_follow-up.svg" class="intro-content__step-icon" />
                                            </div>
                                        </div>

                                        <div class="intro-content__description" dir="rtl">
                                            <p>Ivee lets you know when your quote has been viewed so you can perfectly time your follow-up message. Many customers get busy and lose track of their introductions, but that doesn’t mean they’re no longer interested. <strong>Top Pros follow up regularly on quotes with no response and turn them into hires. </strong></p>
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
                                                            <h2 class="testimonial-carousel__quote">Generally I do a few back and forths on the Ivee messaging service. When you call a pro and they ask all the right questions, it makes the process of choosing so much easier.</h2>
                                                        </div>

                                                        <div class="testimonial-carousel__pro">

                                                            <div class="testimonial-carousel__pro-container">
                                                                <div class="testimonial-carousel__pro-name" dir="rtl">Catherine H.</div>

                                                                <div class="testimonial-carousel__pro-profession" dir="rtl">New York, New York
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
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/wo_mrCw-A-A?rel=0" frameborder="0" allowfullscreen></iframe>
                                        </div>

                                        <figcaption class="video-section__caption">
                                            Make it a habit to follow up on every quote you send. </figcaption>

                                    </figure>

                                    <hr class="tp-rule">

                                    <h2 class="subsection_title tp-heading-4" dir="rtl">Follow-up messages to get you hired</h2>

                                    <div class="content-block">
                                        <div class="tp-grid">

                                            <div class="content-block__content tp-col tp-col--12" dir="rtl">
                                                <p>When you send a quote, Ivee notifies the customer and shares your profile information. If you don’t hear back in a day or two, send a follow-up message to schedule a call or offer an incentive, like a free consultation. When you do hear from customers, reply quickly.</p>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="content-block">
                                        <div class="tp-grid">

                                            <div class="content-block__title tp-col tp-col--12 tp-Text--center tp-PushDouble--bottom">
                                                Remind customers you’re interested. Here are three proactive examples: </div>

                                            <div class="content-block__content tp-col tp-col--12" dir="rtl">
                                                <ol>
                                                    <li><strong>Offer an incentive or suggest next steps.</strong> See <a class="modaal" href="#followup1" data-modaal-type="inline">Phil’s follow-up message</a>. He asks for the customer’s contact info to set up a meeting and discuss project details.</li>
                                                    <li><strong>Keep it short and sweet.</strong> See <a class="modaal" href="#followup2" data-modaal-type="inline">Clara’s follow-up message</a>. She expresses excitement to get started and shares details about similar successes with other customers.</li>
                                                    <li><strong>Leave the door open.</strong> See <a class="modaal" href="#followup3" data-modaal-type="inline">Franco’s follow-up message</a>. Make a lasting impression so customers think of you whenever they need your service, whether or not you’re hired this time around.</li>
                                                </ol>
                                                <p>Check out more <a href="#" target="_blank" rel="noopener noreferrer">details about sending follow-up messages</a>.</p>
                                                <div id="followup1" class="hidden-modaal">
                                                    <h3>Phil&#8217;s follow-up message</h3>
                                                    <p>Hi again, Bridget!</p>
                                                    <p>Have you started lessons with another chef? If so, I hope they’re going great! If not, I wanted to let you know about a 2-for-1 special we have until the end of the month. If you’re interested, please let me know. Thanks!</p>
                                                </div>
                                                <div id="followup2" class="hidden-modaal">
                                                    <h3>Clara&#8217;s follow-up message</h3>
                                                    <p>Hi Sal,</p>
                                                    <p>Check out the attached photo of a recent construction project we just completed. I’d love to get started on yours next! Give me a call when you&#8217;re ready to chat details. Thanks!</p>
                                                </div>
                                                <div id="followup3" class="hidden-modaal">
                                                    <h3>Franco&#8217;s follow-up message</h3>
                                                    <p>Hey, Sid, Not sure if you’ve hired a handyman for your ceiling repair, but I’ll be in the area this week and can stop by if you’d like. If you already found someone, feel free to save my number and give me a call whenever you need a hand – even weekends or nights! Thanks!</p>
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
                                                            <h2 class="testimonial-carousel__quote">Following up is huge. If people haven’t responded in two days I will send another message checking in, and then two days after that. I’ve had people respond after a week. You just have to be consistent.</h2>
                                                        </div>

                                                        <div class="testimonial-carousel__pro">

                                                            <div class="testimonial-carousel__avatar-container tp-avatar tp-avatar--large">
                                                                <img src="https://www.thumbtack.com/pro-center/wp-content/uploads/2017/05/Elijah-Bowie-300x300.jpg" alt="Elijah Bowie - Personal Training" class="testimonial-carousel__avatar tp-avatar__img">
                                                            </div>

                                                            <div class="testimonial-carousel__pro-container">
                                                                <div class="testimonial-carousel__pro-name" dir="rtl">Elijah Bowie</div>

                                                                <div class="testimonial-carousel__pro-profession" dir="rtl">Personal Training</div>

                                                                <div class="testimonial-carousel__pro-stars-container">
                                                                    <img src="https://www.thumbtack.com/pro-center/wp-content/themes/procenter/images/stars.svg" width="72" height="12" style="width:72px;height:12px;"><span class="testimonial-carousel__pro-reviews" dir="rtl"> (20 reviews)</span>
                                                                </div>

                                                                <div class="testimonial-carousel__pro-link-container">
                                                                    <a href="#" target="_blank" class="testimonial-carousel__pro-link" dir="rtl">See Elijah’s full interview&nbsp;»</a>
                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="testimonial-carousel__item">

                                                        <div class="testimonial-carousel__quote-container">
                                                            <h2 class="testimonial-carousel__quote">As soon as I'm notified that a customer has viewed my bid, I follow up immediately. If you can get a conversation started while they're online, you have a much greater chance of landing the job.</h2>
                                                        </div>

                                                        <div class="testimonial-carousel__pro">

                                                            <div class="testimonial-carousel__avatar-container tp-avatar tp-avatar--large">
                                                                <img src="https://www.thumbtack.com/pro-center/wp-content/uploads/2017/05/Bill-Howard-298x300.png" alt="Bill Howard - Photography" class="testimonial-carousel__avatar tp-avatar__img">
                                                            </div>

                                                            <div class="testimonial-carousel__pro-container">
                                                                <div class="testimonial-carousel__pro-name" dir="rtl">Bill Howard</div>

                                                                <div class="testimonial-carousel__pro-profession" dir="rtl">Photography</div>

                                                                <div class="testimonial-carousel__pro-stars-container">
                                                                    <img src="https://www.thumbtack.com/pro-center/wp-content/themes/procenter/images/stars.svg" width="72" height="12" style="width:72px;height:12px;"><span class="testimonial-carousel__pro-reviews" dir="rtl"> (24 reviews)</span>
                                                                </div>

                                                                <div class="testimonial-carousel__pro-link-container">
                                                                    <a href="#" target="_blank" class="testimonial-carousel__pro-link" dir="rtl">See Bill’s full interview&nbsp;»</a>
                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="testimonial-carousel__item">

                                                        <div class="testimonial-carousel__quote-container">
                                                            <h2 class="testimonial-carousel__quote">We’ve created a system to follow-up at least once in the week after sending a quote, and then monthly after that.</h2>
                                                        </div>

                                                        <div class="testimonial-carousel__pro">

                                                            <div class="testimonial-carousel__avatar-container tp-avatar tp-avatar--large">
                                                                <img src="https://www.thumbtack.com/pro-center/wp-content/uploads/2017/05/Jonathan-Johnson-300x297.jpg" alt="Jonathan Johnson - Photo Booth Rental Services" class="testimonial-carousel__avatar tp-avatar__img">
                                                            </div>

                                                            <div class="testimonial-carousel__pro-container">
                                                                <div class="testimonial-carousel__pro-name" dir="rtl">Jonathan Johnson</div>

                                                                <div class="testimonial-carousel__pro-profession" dir="rtl">Photo Booth Rental Services</div>

                                                                <div class="testimonial-carousel__pro-stars-container">
                                                                    <img src="https://www.thumbtack.com/pro-center/wp-content/themes/procenter/images/stars.svg" width="72" height="12" style="width:72px;height:12px;"><span class="testimonial-carousel__pro-reviews" dir="rtl"> (95 reviews)</span>
                                                                </div>

                                                                <div class="testimonial-carousel__pro-link-container">
                                                                    <a href="#" target="_blank" class="testimonial-carousel__pro-link" dir="rtl">See Jonathan’s full interview&nbsp;»</a>
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
                                                    Are you ready to follow-up on your recent quotes?
                                                </div>
                                                <div class="footer-cta__button-container tp-col tp-col--12 tp-col--md-6">
                                                    <a href="#" class="footer-cta__button-link tp-button tp-button--large" target="_blank" rel="noopener noreferrer">
                    Send A Follow-up                </a>
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
                                <span class="footer-block__title" dir="rtl">Next article: You’re hired</span>
                                <div class="footer-block__description">
                                    Here’s how to keep up your momentum. </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </a>

        <div class="footer-call-out">
            <div class="tp-wrap">
                <div class="tp-grid">
                    <div class="footer-call-out__container tp-col tp-col--12 tp-col--md-8 tp-col--md-offset-4">
                        <div class="footer-call-out__content">
                            Looking for more help? Call 855-782-1778 or visit the <a href="#" target="_blank" rel="noopener noreferrer">Help Center</a>. </div>
                    </div>
                </div>
            </div>
        </div>
@endsection


                        
