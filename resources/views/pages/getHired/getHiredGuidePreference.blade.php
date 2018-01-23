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
                                                <h2 class="intro-content__title" dir="rtl">Make sure we’re sending you the right customers.</h2>
                                            </div>
                                            <div class="intro-content__step-icon-container tp-col tp-col--4">
                                                <img src="https://www.thumbtack.com/pro-center/wp-content/themes/procenter/images/ghg_set-preferences.svg" class="intro-content__step-icon" />
                                            </div>
                                        </div>

                                        <div class="intro-content__description" dir="rtl">
                                            <p>Find your customer “sweet spot.” Three main factors affect the kinds of customer requests you receive on Ivee: your job types, travel preferences, and availability.</p>
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
                                                            <h2 class="testimonial-carousel__quote">I run a small business so my schedule is tight. On Ivee I can find pros who are ready to work as soon as I need them. Last time I used Ivee, I hired a packer and they came the same day.</h2>
                                                        </div>

                                                        <div class="testimonial-carousel__pro">

                                                            <div class="testimonial-carousel__pro-container">
                                                                <div class="testimonial-carousel__pro-name">Yolanda F.</div>

                                                                <div class="testimonial-carousel__pro-profession">Washington, D.C.
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
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/dUZg-KGA3aw?rel=0" frameborder="0" allowfullscreen></iframe>
                                        </div>

                                        <figcaption class="video-section__caption">
                                            Learn simple ways to customize the requests you receive. </figcaption>

                                    </figure>

                                    <hr class="tp-rule">

                                    <h2 class="subsection_title tp-heading-4" dir="rtl">Set your job type preferences.</h2>

                                    <div class="content-block">
                                        <div class="tp-grid">

                                            <div class="content-block__content tp-col tp-col--12">
                                                <p>Whether you’re getting too many customer requests or not quite enough, selecting the right job types can help.</p>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="image-section">
                                        <div class="tp-grid tp-grid--center">
                                            <div class="image-section__wrap tp-col tp-col--12">
                                                <img src="https://www.thumbtack.com/pro-center/wp-content/uploads/2017/05/set-your-job-preferences.png" alt="Set your job type preferences" class="image-section__image" style="width:50%;height:auto;" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="content-block">
                                        <div class="tp-grid">

                                            <div class="content-block__title tp-col tp-col--12 tp-Text--center tp-PushDouble--bottom">
                                                Two optional adjustments: </div>

                                            <div class="content-block__content tp-col tp-col--12" dir="rtl">
                                                <p><strong>Add or remove job types.</strong> Too many requests? Turn off less relevant job types. Not enough requests? Try turning on a few suggested job types. Start strong by selecting areas for which you can provide excellent service. Check out <a href="#">steps to turn job types on and off</a>.</p>
                                                <p><strong>Set your job type preferences.</strong> For some job types (each one is different), you can set advanced preferences based on specific request details. For example, personal trainers can choose to only receive requests for certain customer fitness goals and session frequency. To adjust yours, select a job type from your <a href="#">Job Preferences</a> and un-check any types of requests you don’t want to receive. Focus on what you do best. Just because you could complete a job doesn’t mean you should always quote. Ask yourself, from the customer’s perspective, are you well qualified?</p>
                                            </div>

                                        </div>

                                    </div>

                                    <hr class="tp-rule">

                                    <h2 class="subsection_title tp-heading-4" dir="rtl">Adjust your travel preferences.</h2>

                                    <div class="image-section">
                                        <div class="tp-grid tp-grid--center">
                                            <div class="image-section__wrap tp-col tp-col--12">
                                                <img src="https://www.thumbtack.com/pro-center/wp-content/uploads/2017/05/adjust-your-travel-preferences.png" alt="Adjust your travel preferences" class="image-section__image" style="width:90%;height:auto;" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="content-block">
                                        <div class="tp-grid">

                                            <div class="content-block__content tp-col tp-col--12" dir="rtl">
                                                <p><strong>Choose where you work.</strong> Select your travel preferences for each job type from your <a href="#">Job Preferences</a> page. If you travel to your customers, add the zip codes where you work. If you work from a studio or office, select the “My customers travel to me” option. If your work can be done remotely, be sure to select “I work remotely (phone or internet)” to get requests from all over the country. Keep in mind you can select more than one option.</p>
                                            </div>

                                        </div>

                                    </div>

                                    <hr class="tp-rule">

                                    <h2 class="subsection_title tp-heading-4" dir="rtl">Update your calendar.</h2>

                                    <div class="content-block">
                                        <div class="tp-grid">

                                            <div class="content-block__content tp-col tp-col--12" dir="rtl">
                                                <p>Manage your schedule with Ivee. You can view your calendar in your <a href="#">Account Settings</a> page. The calendar lets you block off the days and hours you’re unavailable so you only receive customer requests for times you’re free.</p>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="image-section">
                                        <div class="tp-grid tp-grid--center">
                                            <div class="image-section__wrap tp-col tp-col--12">
                                                <img src="https://www.thumbtack.com/pro-center/wp-content/uploads/2017/05/update-your-calendar.jpg" alt="Update your calendar" class="image-section__image" style="width:90%;height:auto;" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="content-block">
                                        <div class="tp-grid">

                                            <div class="content-block__title tp-col tp-col--12 tp-Text--center tp-PushDouble--bottom">
                                                Three things to keep in mind: </div>

                                            <div class="content-block__content tp-col tp-col--12" dir="rtl">
                                                <ol>
                                                    <li><strong>Block off fixed hours, whole days, or entire weeks.</strong> That way, the requests we send fit not only your business but your schedule, too.</li>
                                                    <li><strong>You can move ahead as many weeks as you need</strong> to block off upcoming vacations or ongoing projects. The calendar shows one week at a time.</li>
                                                    <li><strong>Keep your calendar updated.</strong> We recommend updating your calendar weekly to make sure your availability is accurate and you’re only getting customer requests when you’re available.</li>
                                                </ol>
                                                <p>Here’s how to <a href="#" target="_blank" rel="noopener noreferrer">manage your calendar</a>.</p>
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
                                                            <h2 class="testimonial-carousel__quote">Since starting, I’ve actually lowered our service area. We made our service area too big because we weren’t sure how it would work. We were trying to cover the entire state. I wish I had known how many requests we’d receive so we wouldn’t have gotten overwhelmed with leads.</h2>
                                                        </div>

                                                        <div class="testimonial-carousel__pro">

                                                            <div class="testimonial-carousel__avatar-container tp-avatar tp-avatar--large">
                                                                <img src="https://www.thumbtack.com/pro-center/wp-content/uploads/2017/05/JNJ-Kenndrick-300x273.png" alt="Jacob and Jennifer Kendrick - Junk Removal" class="testimonial-carousel__avatar tp-avatar__img">
                                                            </div>

                                                            <div class="testimonial-carousel__pro-container">
                                                                <div class="testimonial-carousel__pro-name" dir="rtl">Jacob and Jennifer Kendrick</div>

                                                                <div class="testimonial-carousel__pro-profession" dir="rtl">Junk Removal</div>

                                                                <div class="testimonial-carousel__pro-stars-container">
                                                                    <img src="https://www.thumbtack.com/pro-center/wp-content/themes/procenter/images/stars.svg" width="72" height="12" style="width:72px;height:12px;"><span class="testimonial-carousel__pro-reviews" dir="rtl"> (28 reviews)</span>
                                                                </div>

                                                                <div class="testimonial-carousel__pro-link-container">
                                                                    <a href="#" target="_blank" class="testimonial-carousel__pro-link" dir="rtl">See Jacob and Jennifer’s full interview&nbsp;»</a>
                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="testimonial-carousel__item">

                                                        <div class="testimonial-carousel__quote-container">
                                                            <h2 class="testimonial-carousel__quote">The key to success is understanding our prospective clients. The better we know them, the more effectively we can craft our initial message. Have a profile or persona for the ideal prospect.</h2>
                                                        </div>

                                                        <div class="testimonial-carousel__pro">

                                                            <div class="testimonial-carousel__avatar-container tp-avatar tp-avatar--large">
                                                                <img src="https://www.thumbtack.com/pro-center/wp-content/uploads/2017/05/JR-300x300.png" alt="JR Gramstad - Tax Accounting" class="testimonial-carousel__avatar tp-avatar__img">
                                                            </div>

                                                            <div class="testimonial-carousel__pro-container">
                                                                <div class="testimonial-carousel__pro-name" dir="rtl">JR Gramstad</div>

                                                                <div class="testimonial-carousel__pro-profession" dir="rtl">Tax Accounting</div>

                                                                <div class="testimonial-carousel__pro-stars-container">
                                                                    <img src="https://www.thumbtack.com/pro-center/wp-content/themes/procenter/images/stars.svg" width="72" height="12" style="width:72px;height:12px;"><span class="testimonial-carousel__pro-reviews" dir="rtl"> (20 reviews)</span>
                                                                </div>

                                                                <div class="testimonial-carousel__pro-link-container">
                                                                    <a href="https://www.thumbtack.com/blog/jr-gramstad-top-pro-interview/" target="_blank" class="testimonial-carousel__pro-link" dir="rtl">See JR’s full interview&nbsp;»</a>
                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="testimonial-carousel__item">

                                                        <div class="testimonial-carousel__quote-container">
                                                            <h2 class="testimonial-carousel__quote">At first I was trying to be everything to everyone. I set my geographical region too wide. It wasn’t practical. I also keep my focus to the requests for my specialty, behavioral training. There are others who specialize in service or protection training.</h2>
                                                        </div>

                                                        <div class="testimonial-carousel__pro">

                                                            <div class="testimonial-carousel__avatar-container tp-avatar tp-avatar--large">
                                                                <img src="https://www.thumbtack.com/pro-center/wp-content/uploads/2017/05/Kari-Kerr.png" alt="Kari Kerr - Dog Training" class="testimonial-carousel__avatar tp-avatar__img">
                                                            </div>

                                                            <div class="testimonial-carousel__pro-container">
                                                                <div class="testimonial-carousel__pro-name" dir="rtl">Kari Kerr</div>

                                                                <div class="testimonial-carousel__pro-profession" dir="rtl">Dog Training</div>

                                                                <div class="testimonial-carousel__pro-stars-container">
                                                                    <img src="https://www.thumbtack.com/pro-center/wp-content/themes/procenter/images/stars.svg" width="72" height="12" style="width:72px;height:12px;"><span class="testimonial-carousel__pro-reviews" dir="rtl"> (44 reviews)</span>
                                                                </div>

                                                                <div class="testimonial-carousel__pro-link-container">
                                                                    <a href="https://www.thumbtack.com/blog/top-pro-interview-kari-kerr/" target="_blank" class="testimonial-carousel__pro-link" dir="rtl">See Kari’s full interview&nbsp;»</a>
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
                                                    Are you ready to get the right requests?
                                                </div>
                                                <div class="footer-cta__button-container tp-col tp-col--12 tp-col--md-6">
                                                    <a href="https://www.thumbtack.com/profile/work/categories" class="footer-cta__button-link tp-button tp-button--large" target="_blank" rel="noopener noreferrer">
                    Set Your Preferences                </a>
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
                                <span class="footer-block__title">Next article: Send a winning quote</span>
                                <div class="footer-block__description">
                                    Make a strong first impression with your quote. </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </a>
@endsection


                        
