@extends('layouts.getHired')

@section('css')

<link rel="stylesheet" href="{{URL::to('public/assets/style.css')}}"/>
<link rel="stylesheet" href="{{URL::to('public/assets/procss.css')}}" />
<link rel="stylesheet" href="{{URL::to('public/assets/default.min.css')}}"/>
<link rel="stylesheet" href="{{URL::to('public/assets/modaal.css')}}"/>
<script src="{{URL::to('public/assets/jquery.js')}}"></script>
<script src="{{URL::to('public/assets/jquery-migrate.min.js')}}"></script>

@endsection
@section('content')

        <div class="site-inner">
            <div class="content-sidebar-wrap">
                <main class="content">
                    <div class="ghg-child-step">
                        <div class="tp-wrap">
                            <div class="tp-grid tp-grid--center">
                                <div class="ghg-child-step__title-container">
                                    <h3 class="ghg-child-step__title">How Thumbtack works</h3>
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
                                                <h2 class="intro-content__title" dir="rtl">Find new customers and grow your business.</h2>
                                            </div>
                                            <div class="intro-content__step-icon-container tp-col tp-col--4">
                                                <img src="https://www.thumbtack.com/pro-center/wp-content/themes/procenter/images/ghg_howto-icon.svg" class="intro-content__step-icon" />
                                            </div>
                                        </div>

                                        <div class="intro-content__description" dir="rtl">
                                            <p>Whether you’re scaling your business, filling the gaps in your schedule, or just starting out, Ivee will help you find the right customers.</p>
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
                                                            <h2 class="testimonial-carousel__quote">Ivee is my go-to when I need something done. It’s so easy to find pros and schedule jobs. Everything I need to know is right there in front of me.</h2>
                                                        </div>

                                                        <div class="testimonial-carousel__pro">

                                                            <div class="testimonial-carousel__pro-container">
                                                                <div class="testimonial-carousel__pro-name" dir="rtl">Lauren W.</div>

                                                                <div class="testimonial-carousel__pro-profession" dir="rtl">San Francisco, California
                                                                    <br>Thumbtack customer</div>

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
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/gE1MDHzm65w?list=PLPz1npTzydS4xSzcmEYonzG7vPtRclobl" frameborder="0" allowfullscreen></iframe>
                                        </div>

                                        <figcaption class="video-section__caption" dir="rtl">
                                            Learn how Ivee works </figcaption>
                                    </figure>
                                    <hr class="tp-rule">
                                    <h2 class="subsection_title tp-heading-4">How Ivee works</h2>
                                    <div class="image-section">
                                        <div class="tp-grid tp-grid--center">
                                            <div class="image-section__wrap tp-col tp-col--12">
                                                <img src="https://www.thumbtack.com/pro-center/wp-content/uploads/2017/05/HowTT_Illustration.png" alt="How Thumbtack Works" class=" image-section__image" style="width:60%;height:auto;" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="content-block">
                                        <div class="tp-grid">

                                            <div class="content-block__content tp-col tp-col--12 " dir="rtl">
                                                <p><strong>Customers come to Ivee to find local professionals.</strong></p>
                                                <p>They need to hire someone for a project &#8211; like a kitchen renovation, a wedding or pretty much anything. We ask them specific questions, and they ask us to find local professionals to help.</p>
                                                <p><strong>We send you those warm leads. </strong></p>
                                                <p>When you sign up with Ivee, you tell us what you’re looking for &#8211; how far you want to travel, what projects you can work on, and when you’re available. Then we match you with customers that fit. We’ll send you the customer’s project description &#8211; we call it a request.</p>
                                                <p><strong>You only pay to send the first message.</strong></p>
                                                <p>We call it a quote. You decide if it’s a good fit, then send a message and price estimate. You pay with Ivee credits, which cost around $1.67 each. You’ll see how many credits it’ll take to quote on any job before you click “send.”</p>
                                                <p><strong>Customers choose from up to 5 quotes.</strong></p>
                                                <p>They’ll look through everyone’s prices, messages, profiles and reviews and either hire someone right then or send a message for more info. You can email or text back to finalize the details of a job. And once you’re hired, we’ll ask the customer to review you.</p>
                                            </div>

                                        </div>

                                    </div>

                                    <hr class="tp-rule">
                                    <div class="testimonial-carousel ghg__child">

                                        <div class="testimonial-carousel__title-container">
                                            <h2 class="testimonial-carousel__title">
                                                Pro Tip 
                                            </h2>
                                        </div>

                                        <div class="tp-wrap">

                                            <div class="tp-grid">

                                                <div class="testimonial-carousel__items tp-col tp-col--12">

                                                    <div class="testimonial-carousel__item">

                                                        <div class="testimonial-carousel__quote-container">
                                                            <h2 class="testimonial-carousel__quote">For anyone who is skeptical and just starting out, try it. So many people are online, Googling, it’s easy to get lost in the abyss. Being on Ivee fine tunes the search for your potential clients. You’re only competing against four other quotes.</h2>
                                                        </div>

                                                        <div class="testimonial-carousel__pro">

                                                            <div class="testimonial-carousel__avatar-container tp-avatar tp-avatar--large">
                                                                <img src="https://www.thumbtack.com/pro-center/wp-content/uploads/2017/05/Carol-White-300x300.png" alt="Carol White - Photography" class="testimonial-carousel__avatar tp-avatar__img">
                                                            </div>

                                                            <div class="testimonial-carousel__pro-container">
                                                                <div class="testimonial-carousel__pro-name" dir="rtl">Carol White</div>

                                                                <div class="testimonial-carousel__pro-profession" dir="rtl">Photography</div>

                                                                <div class="testimonial-carousel__pro-stars-container">
                                                                    <img src="https://www.thumbtack.com/pro-center/wp-content/themes/procenter/images/stars.svg" width="72" height="12" style="width:72px;height:12px;"><span class="testimonial-carousel__pro-reviews" dir="rtl"> (28 reviews)</span>
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
                                </div>
                            </div>
                        </div>
                    </div>

                </main>
            </div>
        </div>
        <a href="https://www.thumbtack.com/pro-center/get-hired-guide/profile/" class="prev-next-link">
            <div class="footer-block">
                <div class="tp-wrap">
                    <div class="tp-grid">
                        <div class="footer-block__container tp-col tp-col--12 tp-col--md-8 tp-col--md-offset-4 ">
                            <div class="footer-block__content">
                                <span class="footer-block__title" dir="rtl">Next article: Build your profile</span>
                                <div class="footer-block__description">
                                    Get more clients with a profile that sets you apart. </div>
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
                            Looking for more help? Call 855-782-1778 or visit the <a href="http://help.thumbtack.com" target="_blank" rel="noopener noreferrer">Help Center</a>. </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

@section('script')
<script src="{{URL::to('public/assets/hoverIntent.min.js')}}"></script>
<script src="{{URL::to('public/assets/superfish.js')}}"></script>
<script src="{{URL::to('public/assets/procenter-ga.js')}}"></script>
<script src="{{URL::to('public/assets/slick.min.js')}}"></script>
<script src="{{URL::to('public/assets/get-hired-guide.js')}}"></script>

@endsection


                        
