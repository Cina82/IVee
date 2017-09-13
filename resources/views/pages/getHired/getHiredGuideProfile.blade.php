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
                                                <h2 class="intro-content__title">Get more customers with a profile that sets you apart.</h2>
                                            </div>
                                            <div class="intro-content__step-icon-container tp-col tp-col--4">
                                                <img src="https://www.thumbtack.com/pro-center/wp-content/themes/procenter/images/ghg_build-profile.svg" class="intro-content__step-icon" />
                                            </div>
                                        </div>

                                        <div class="intro-content__description">
                                            <p>Creating a great profile takes time, but it’s worth it. Your profile helps customers decide if you’re the right pro for the job. Show them who you are in your “About” section and in your photos. <strong>83% of pros hired on Ivee include at least one picture highlighting their work.</strong></p>
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
                                                            <h2 class="testimonial-carousel__quote">Looking through the photos on a pro’s Ivee profile has been really helpful for me in figuring out what I actually want for my project.</h2>
                                                        </div>

                                                        <div class="testimonial-carousel__pro">

                                                            <div class="testimonial-carousel__pro-container">
                                                                <div class="testimonial-carousel__pro-name">Shabrina J.</div>

                                                                <div class="testimonial-carousel__pro-profession">New York, New York
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
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/9oOuRYIfM5U?list=PLPz1npTzydS4xSzcmEYonzG7vPtRclobl" frameborder="0" allowfullscreen></iframe>
                                        </div>

                                        <figcaption class="video-section__caption">
                                            Easy steps to build your Ivee profile.
                                            <div id=profilepicture> </div>
                                        </figcaption>

                                    </figure>

                                    <hr class="tp-rule">

                                    <h2 class="subsection_title tp-heading-4">Be the face of your business.</h2>

                                    <div class="content-block">
                                        <div class="tp-grid">

                                            <div class="content-block__content tp-col tp-col--12">
                                                <p>Take a look at Baron’s profile picture below—it’s:</p>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="content-block">
                                        <div class="tp-grid">

                                            <div class="content-block__content tp-col tp-col--12 tp-col--md-6">
                                                <p><img class="aligncenter size-full wp-image-18885" src="https://www.thumbtack.com/pro-center/wp-content/uploads/2017/05/Baron_Profile-Picture-Example.png" alt="Baron's Profile Picture Example" width="240" height="240" /></p>
                                            </div>

                                            <div class="content-block__content tp-col tp-col--12 tp-col--md-6">
                                                <p><strong>Friendly.</strong> Customers like to see a smiling face. Baron looks enthusiastic and ready to help.</p>
                                                <p><strong>Professional.</strong> A quality headshot is worth the investment.</p>
                                                <p><strong>Clear and sharp.</strong> Aim for 500&#215;500 pixels to get the best resolution.</p>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="content-block">
                                        <div class="tp-grid">

                                            <div class="content-block__content tp-col tp-col--12">
                                                <p>Here’s how to <a href="#" target="_blank" rel="noopener noreferrer">upload or edit your profile picture</a>.</p>
                                                <div id="about"></div>
                                            </div>

                                        </div>

                                    </div>

                                    <hr class="tp-rule">

                                    <h2 class="subsection_title tp-heading-4">Help customers learn more about you.</h2>

                                    <div class="image-section">
                                        <div class="tp-grid tp-grid--center">
                                            <div class="image-section__wrap tp-col tp-col--12">
                                                <img src="https://www.thumbtack.com/pro-center/wp-content/uploads/2017/05/help-customers-learn.png" alt="Help customers learn more about you" class="image-section__image" style="width:50%;height:auto;" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="content-block">
                                        <div class="tp-grid">

                                            <div class="content-block__content tp-col tp-col--12">
                                                <p>Take a look at <a href="#" target="_blank" rel="noopener noreferrer">Rachel&#8217;s “About” section</a>. It addresses three main questions customers have:</p>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="content-block">
                                        <div class="tp-grid">

                                            <div class="content-block__content tp-col tp-col--12">
                                                <ol>
                                                    <li><strong>Do you have the right experience for the job?</strong> Give a few examples of your work. List your relevant years in business and any training, education, or certifications. Don’t forget to <a href="#" target="_blank" rel="noopener noreferrer">upload any occupational licenses</a> you’ve earned.</li>
                                                    <li><strong>Are you someone I want to work with?</strong> Show your love for what you do with stories about why you started your business or what keeps you going.</li>
                                                    <li><strong>Are you professional?</strong> Make sure to double-check your spelling and grammar. Customers notice attention to detail and great communication skills.</li>
                                                </ol>
                                                <p>Here’s how to<a href="#" target="_blank" rel="noopener noreferrer"> edit your “About” section</a>.</p>
                                                <div id="samples"></div>
                                            </div>

                                        </div>

                                    </div>

                                    <hr class="tp-rule">

                                    <h2 class="subsection_title tp-heading-4">Show off your best work.</h2>

                                    <div class="image-section">
                                        <div class="tp-grid tp-grid--center">
                                            <div class="image-section__wrap tp-col tp-col--12">
                                                <img src="https://www.thumbtack.com/pro-center/wp-content/uploads/2017/05/Add-samples-of-your-work.png" alt="Show off your best work." class="image-section__image" style="width:80%;height:auto;" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="content-block">
                                        <div class="tp-grid">

                                            <div class="content-block__content tp-col tp-col--12">
                                                <p>Take a look at <a href="#" target="_blank" rel="noopener noreferrer">Ian and Rosa’s media section</a>. You can add photos, videos, and even audio recordings. Consider including:</p>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="content-block">
                                        <div class="tp-grid">

                                            <div class="content-block__content tp-col tp-col--12">
                                                <ol>
                                                    <li><strong>Original content</strong> that tells a story and shows you in action</li>
                                                    <li><strong>Before-and-after</strong> examples</li>
                                                    <li><strong>Descriptive captions</strong> so customers know what they’re seeing</li>
                                                </ol>
                                                <p>Update your media section often. Regularly upload new photos and videos of completed projects.</p>
                                                <p>Here’s how to <a href="#">edit your media section</a>.</p>
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
                                                            <h2 class="testimonial-carousel__quote">Answer all of the questions, include high-quality pictures, and be as detailed and charismatic as  you can. People want to feel good about who you are and the kind of experience they’re going  to have.</h2>
                                                        </div>

                                                        <div class="testimonial-carousel__pro">

                                                            <div class="testimonial-carousel__avatar-container tp-avatar tp-avatar--large">
                                                                <img src="https://www.thumbtack.com/pro-center/wp-content/uploads/2017/05/Garrett-300x297.png" alt="Garrett Hurlbut - Painting" class="testimonial-carousel__avatar tp-avatar__img">
                                                            </div>

                                                            <div class="testimonial-carousel__pro-container">
                                                                <div class="testimonial-carousel__pro-name">Garrett Hurlbut</div>

                                                                <div class="testimonial-carousel__pro-profession">Painting</div>

                                                                <div class="testimonial-carousel__pro-stars-container">
                                                                    <img src="https://www.thumbtack.com/pro-center/wp-content/themes/procenter/images/stars.svg" width="72" height="12" style="width:72px;height:12px;"><span class="testimonial-carousel__pro-reviews"> (32 reviews)</span>
                                                                </div>

                                                                <div class="testimonial-carousel__pro-link-container">
                                                                    <a href="#" target="_blank" class="testimonial-carousel__pro-link">See Garrett’s Ivee profile&nbsp;»</a>
                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="testimonial-carousel__item">

                                                        <div class="testimonial-carousel__quote-container">
                                                            <h2 class="testimonial-carousel__quote">Your reviews and profile are instant credibility. Look at top competitors from your competitive report. If your profile isn’t every bit as good, spend some time to get it up to par.</h2>
                                                        </div>

                                                        <div class="testimonial-carousel__pro">

                                                            <div class="testimonial-carousel__avatar-container tp-avatar tp-avatar--large">
                                                                <img src="https://www.thumbtack.com/pro-center/wp-content/uploads/2017/05/Sean-Wolcansek-298x300.png" alt="Shane Wolcansek - Plumbing & Bath Remodels" class="testimonial-carousel__avatar tp-avatar__img">
                                                            </div>

                                                            <div class="testimonial-carousel__pro-container">
                                                                <div class="testimonial-carousel__pro-name">Shane Wolcansek</div>

                                                                <div class="testimonial-carousel__pro-profession">Plumbing & Bath Remodels</div>

                                                                <div class="testimonial-carousel__pro-stars-container">
                                                                    <img src="https://www.thumbtack.com/pro-center/wp-content/themes/procenter/images/stars.svg" width="72" height="12" style="width:72px;height:12px;"><span class="testimonial-carousel__pro-reviews"> (40 reviews)</span>
                                                                </div>

                                                                <div class="testimonial-carousel__pro-link-container">
                                                                    <a href="#" target="_blank" class="testimonial-carousel__pro-link">See Shane’s Ivee profile&nbsp;»</a>
                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="testimonial-carousel__item">

                                                        <div class="testimonial-carousel__quote-container">
                                                            <h2 class="testimonial-carousel__quote">Explain who you are and what you do. Upload photos and get credentials that Ivee offers. Get certified with the Better Business Bureau. Do everything you can to differentiate yourself.</h2>
                                                        </div>

                                                        <div class="testimonial-carousel__pro">

                                                            <div class="testimonial-carousel__avatar-container tp-avatar tp-avatar--large">
                                                                <img src="https://www.thumbtack.com/pro-center/wp-content/uploads/2017/05/Dave-Cavannaugh-300x300.png" alt="Dave Cavanaugh - Wedding Officiant" class="testimonial-carousel__avatar tp-avatar__img">
                                                            </div>

                                                            <div class="testimonial-carousel__pro-container">
                                                                <div class="testimonial-carousel__pro-name">Dave Cavanaugh</div>

                                                                <div class="testimonial-carousel__pro-profession">Wedding Officiant</div>

                                                                <div class="testimonial-carousel__pro-stars-container">
                                                                    <img src="https://www.thumbtack.com/pro-center/wp-content/themes/procenter/images/stars.svg" width="72" height="12" style="width:72px;height:12px;"><span class="testimonial-carousel__pro-reviews"> (24 reviews)</span>
                                                                </div>

                                                                <div class="testimonial-carousel__pro-link-container">
                                                                    <a href="http://www.thumbtack.com/id/coeur-d-alene/wedding-services/wedding-officiant" target="_blank" class="testimonial-carousel__pro-link">See Dave’s Ivee profile&nbsp;»</a>
                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="testimonial-carousel__item">

                                                        <div class="testimonial-carousel__quote-container">
                                                            <h2 class="testimonial-carousel__quote">Make your profile look professional. Take the time to answer questions, upload photos and give insight on your business and what makes you different. People won’t always pick the cheapest quote.</h2>
                                                        </div>

                                                        <div class="testimonial-carousel__pro">

                                                            <div class="testimonial-carousel__avatar-container tp-avatar tp-avatar--large">
                                                                <img src="https://www.thumbtack.com/pro-center/wp-content/uploads/2017/05/Meghan-Aro.png" alt="Meghan Aro - Nutrition & Fitness Consulting" class="testimonial-carousel__avatar tp-avatar__img">
                                                            </div>

                                                            <div class="testimonial-carousel__pro-container">
                                                                <div class="testimonial-carousel__pro-name">Meghan Aro</div>

                                                                <div class="testimonial-carousel__pro-profession">Nutrition & Fitness Consulting</div>

                                                                <div class="testimonial-carousel__pro-stars-container">
                                                                    <img src="https://www.thumbtack.com/pro-center/wp-content/themes/procenter/images/stars.svg" width="72" height="12" style="width:72px;height:12px;"><span class="testimonial-carousel__pro-reviews"> (22 reviews)</span>
                                                                </div>

                                                                <div class="testimonial-carousel__pro-link-container">
                                                                    <a href="https://www.thumbtack.com/ca/santa-monica/yoga/fitness-training-services" target="_blank" class="testimonial-carousel__pro-link">See Meghan’s Ivee profile&nbsp;»</a>
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

                                                <div class="footer-cta__title tp-col tp-col--12 tp-col--md-6">
                                                    Are you ready to update your profile to get more clients?
                                                </div>
                                                <div class="footer-cta__button-container tp-col tp-col--12 tp-col--md-6">
                                                    <a href="" class="footer-cta__button-link tp-button tp-button--large" target="_blank" rel="noopener noreferrer">
                    Build Your Profile              </a>
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
        <a href="https://www.thumbtack.com/pro-center/get-hired-guide/reviews/" class="prev-next-link">
            <div class="footer-block">
                <div class="tp-wrap">
                    <div class="tp-grid">
                        <div class="footer-block__container tp-col tp-col--12 tp-col--md-8 tp-col--md-offset-4 ">
                            <div class="footer-block__content">
                                <span class="footer-block__title">Next article: Get more reviews</span>
                                <div class="footer-block__description">
                                    Add reviews to increase your chances of getting hired. </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </a>
@endsection


                        
