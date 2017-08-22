@extends('layouts.pro')

@section('content')

<div class="sticky-cta" sticky-header sticky-partner-attr="data-sticky-partner"
        ng-class="{visible: visible, invisible: !visible}"
        throttle-ms="250" visible="visible">
    <div class="wrapper">
        <div class="logo"></div>
        <div class="ProfessionSelector" ng-controller="ProfessionController">
            <form ng-submit="navigateToWelcomeSuggestedServices($event)">
                <button type="submit" class="mobile-search">
                    <svg-icon type="search" size="md" ng-cloak>
                    </svg-icon>
                </button>
                <div class="form-field form-field-category" >
                    <span class="input-wrapper">
                        <span search-form
                              hercule-root-url="https://hercule.thumbtack.com"
                              hercule-version=""
                              hercule-limit="15"
                              more-results-hercule="true"
                              class="SearchForm dropdown-container">
                            <input class="query" required autocomplete="off"
                                placeholder="?What service do you provide" type="text"
                                ng-model="$parent.$selection"
                                event-track="service signup/start service query"
                                event-track-on="keypress" 
                                event-track-once  />
                        </span>
                    </span>
                </div>
                <div class="form-field-nav" ng-cloak>
                    <button class="bttn" type="submit">
                        <svg-icon type="search" size="md"></svg-icon>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="Hero HeroSection" ng-controller="TrackingController">
    <div class="ContentSection">
        <h1>We send you new customers.</h1>

        <p class="Subtitle">
            <span>Let us know the type of work you do.</span>
            <span>We’ll send you customers looking for pros like you.</span>
        </p>

        
        <div class="SearchOverlay"></div>
        <div class="ProfessionSelector" ng-controller="ProfessionController">
            <form ng-submit="navigateToWelcomeSuggestedServices($event)">
                <button type="submit" data-sticky-partner>
                    <svg-icon type="search" size="md" ng-cloak>
                    </svg-icon>
                </button>
                <span search-form
                      hercule-root-url="https://hercule.thumbtack.com"
                      hercule-version=""
                      hercule-limit="15"
                      more-results-hercule="true"
                      class="SearchForm dropdown-container">
                    <input class="query" required autocomplete="off"
                        placeholder="What service do you provide?" type="text"
                        ng-model="$parent.$selection"
                        ng-focus="toggleSearchOverlay(true)"
                        ng-blur="toggleSearchOverlay(false)"
                        aura-track="service signup/start service query"
                        aura-track-on="keypress" dir="rtl" 
                        aura-track-once />
                </span>
            </form>
        </div>

        <div class="BrowseCallout">
            <p>Customers are looking for these services.</p>
            <svg-icon type="down-arrow_15x20"></svg-icon>
        </div>
    </div>
</div>



<div ng-controller="BrowseController" class="ng-scope">
    <div class="BrowseSection theme-desktop-only ">
        <div class="BrowseSection-meta_tabs">
			@foreach($category as $cat)
            <!-- ngRepeat: meta in metaCategories --><div style="" id="avv{{ $cat->id }}" class="BrowseSection-tab ng-binding ng-scope" ng-repeat="meta in metaCategories" ng-click="clickMeta(meta)" ng-class="{active:isSelectedMeta(meta)}" onclick="catall({{ $cat->id }})";>
                <svg class="BrowseSection-metaIcon" id="BrowseSection-metaIcon{{ $cat->id }}">
                    <use xlink:href="#thumbprinticon-category-group--home-improvement_48" id="icon{{ $cat->id }}"></use>
                </svg>
                {{ $cat->name }}
                <div class="BrowseSection-metaSelectIndicator" ng-show="isSelectedMeta(meta)"></div>
            </div><!-- end ngRepeat: meta in metaCategories -->
            @endforeach
        </div>
       
        <script>
        function catall(id)
        {
        	$.ajax({
        		'url':'prosubcate/'+id,
                'success':function(data){
                $("#subdatanew").html(data);
               	$('.BrowseSection-tab').removeAttr('style');
				$('.BrowseSection-metaIcon').removeAttr('style');
				document.getElementById("avv"+id).style.color = "#4E4D4D";
				document.getElementById("BrowseSection-metaIcon"+id).style.fill = "#4E4D4D";
				 
               },
              });
        }
        </script>
        <div class="BrowseSection-submetaContainer">
            <div class="BrowseSection-submetaLists" id="subdatanew">
            	@foreach($subcategory as $scat)
                <!-- ngRepeat: subMeta in selectedMeta.subMetas | orderBy: 'toString()' --><div class="BrowseSection-submetaBox ng-scope" ng-repeat="subMeta in selectedMeta.subMetas | orderBy: 'toString()'">

                    <a class="BrowseSection-submeta ng-binding" href="{{ URL::to('prosignup') }}">
                       {{ $scat->name }}
                        <svg class="BrowseSection-submetaIcon">
                            <use xlink:href="#thumbprinticon-right-caret_16"></use>
                        </svg>

                    </a>
                </div><!-- end ngRepeat: subMeta in selectedMeta.subMetas | orderBy: 'toString()' -->
                 @endforeach
               
            </div>
        </div>
    </div>
    <div class="BrowseSection theme-not-desktop-only">
    	
    			@foreach($alldata as $catdata)
                    <div class="BrowseSection-Metas" ng-click="metaCategories[0].open=!metaCategories[0].open">
                <svg class="BrowseSection-metaIconSmall">
                    <use xlink:href="#thumbprinticon-category-group--home-improvement_48"></use>
                </svg>
                <div>
                	
                    {{ $catdata->mname }}
                    
                </div>
                <svg class="BrowseSection-submetaIcon caret ng-hide" ng-show="metaCategories[0].open">
                    <use xlink:href="#thumbprinticon-up-caret_16"></use>
                </svg>
                <svg class="BrowseSection-submetaIcon caret" ng-show="!metaCategories[0].open">
                    <use xlink:href="#thumbprinticon-down-caret_16"></use>
                </svg>
            </div>
            
            
            <!-- ngRepeat: subMeta in metaCategories[0].subMetas | orderBy: 'toString()' --><div ng-repeat="subMeta in metaCategories[0].subMetas | orderBy: 'toString()'" ng-show="metaCategories[0].open" class="ng-scope ng-hide">
                <a class="BrowseSection-Metas subMetaLink ng-binding" ng-href="/welcome/for/accessibility-construction-and-remodels/services?chooser=1" href="/welcome/for/accessibility-construction-and-remodels/services?chooser=1">

                    Accessibility Construction and Remodels

                    <svg class="BrowseSection-submetaIcon caret">
                        <use xlink:href="#thumbprinticon-right-caret_16"></use>
                    </svg>
                </a>

            </div><!-- end ngRepeat: subMeta in metaCategories[0].subMetas | orderBy: 'toString()' -->
            @endforeach
            
                   
        
    </div>
</div>



<div class="ContentSection HowThumbtackWorksSection">
    <h2>How Thumbtack works</h2>
    <div class="ThreeUp HowThumbtackWorksSection-steps theme-desktop-only">
                    <div class="ThreeUpItem">
                <div class="HowThumbtackWorksSection-step">
                    <svg class="circle" width="80" height="80">
                        <circle class="circle-contents" cx="40" cy="40" r="36"
                            stroke="#d2d2d2" stroke-width="2" fill="#d2d2d2" />
                    </svg>
                    <span class="HowThumbtackWorksSection-step-number">1</span>
                </div>
                <h3>Get customer requests</h3>
                <p>Sign up for free to view requests from customers in your area.</p>
            </div>
                    <div class="ThreeUpItem">
                <div class="HowThumbtackWorksSection-step">
                    <svg class="circle" width="80" height="80">
                        <circle class="circle-contents" cx="40" cy="40" r="36"
                            stroke="#d2d2d2" stroke-width="2" fill="#d2d2d2" />
                    </svg>
                    <span class="HowThumbtackWorksSection-step-number">2</span>
                </div>
                <h3>Pay to send a quote</h3>
                <p>When a request is a good fit, pay to send a quote and a personal message.</p>
            </div>
                    <div class="ThreeUpItem">
                <div class="HowThumbtackWorksSection-step">
                    <svg class="circle" width="80" height="80">
                        <circle class="circle-contents" cx="40" cy="40" r="36"
                            stroke="#d2d2d2" stroke-width="2" fill="#d2d2d2" />
                    </svg>
                    <span class="HowThumbtackWorksSection-step-number">3</span>
                </div>
                <h3>Get hired</h3>
                <p>Customers get quotes from up to 5 pros. If you&rsquo;re hired, finalize details and get started.</p>
            </div>
            </div>
    <div class="CarouselBlock HowThumbtackWorksSection-steps theme-not-desktop-only"
            ng-controller="CarouselController" carousel data-carousel-index="index" ng-cloak>
        <div class="steps">
            <div class="HowThumbtackWorksSection-step" ng-click="index = 0;"
                        ng-class="{'selected': index == 0}">
                    <svg class="circle" width="80" height="80">
                        <circle class="circle-contents" cx="40" cy="40" r="36" stroke="#d2d2d2"
                            stroke-width="2" fill="#fff" />
                    </svg>
                    <span class="HowThumbtackWorksSection-step-number">1</span>
                </div><div class="HowThumbtackWorksSection-step" ng-click="index = 1;"
                        ng-class="{'selected': index == 1}">
                    <svg class="circle" width="80" height="80">
                        <circle class="circle-contents" cx="40" cy="40" r="36" stroke="#d2d2d2"
                            stroke-width="2" fill="#fff" />
                    </svg>
                    <span class="HowThumbtackWorksSection-step-number">2</span>
                </div><div class="HowThumbtackWorksSection-step" ng-click="index = 2;"
                        ng-class="{'selected': index == 2}">
                    <svg class="circle" width="80" height="80">
                        <circle class="circle-contents" cx="40" cy="40" r="36" stroke="#d2d2d2"
                            stroke-width="2" fill="#fff" />
                    </svg>
                    <span class="HowThumbtackWorksSection-step-number">3</span>
                </div>        </div>
        <div class="CarouselPlate-frame">
            <div class="CarouselPlate" data-carousel-plate>
                                    <div class="Carousel-item" data-carousel-item>
                        <h3>Get customer requests</h3>
                        <p>Sign up for free to view requests from customers in your area.</p>
                    </div>
                                    <div class="Carousel-item" data-carousel-item>
                        <h3>Pay to send a quote</h3>
                        <p>When a request is a good fit, pay to send a quote and a personal message.</p>
                    </div>
                                    <div class="Carousel-item" data-carousel-item>
                        <h3>Get hired</h3>
                        <p>Customers get quotes from up to 5 pros. If you&rsquo;re hired, finalize details and get started.</p>
                    </div>
                            </div>
        </div>
    </div>
    <a href="{{URL::to('howThumbtackWorks')}}" target="_blank"
        class="bttn">Learn More</a>
</div>

<div class="theme-alternate ServicesSection">
    <div class="ContentSection inner">
        <div class="CalculatorSection">
            <div class="SkillMatchingSection">
                <div class="SkillMatchingSection-inner" dir="rtl">
                    <h2>Your services are in demand</h2>
                    <p>Tens of thousands of customers turn to Thumbtack each day to hire the right
                        professionals. Join more than 200,000 pros who are helping them accomplish
                        their projects.</p>
                </div>
            </div>

            <div class="Calculator Flipbox" ng-controller="ProfessionController">
                <a name="Calculator-top"></a>
                <form action="/welcome" method="get" ng-submit="navigateToWelcomeCategory($event)">
                    <div class="Flipbox-frame" id="Calculator-Flipbox-frame">
                        <div class="face front">
                            <div class="Calculator-inner">
                                <h3>See the opportunity</h3>
                                <p>Find out how many customers request pros like you.</p>

                                <div class="ProfessionSelector">
                                    <div class="form-field form-field-category" ng-cloak>
                                        <select ng-model="selectedCategory"
                                                ng-options="category as category for category in
                                                displayedCategoriesNoEmptyStats"
                                                ng-change="flipCard()">
                                            <option value="">Select your service</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="face back">
                            <div class="redo"
                                    ng-click="unflipCard()">
                                <span class="redo-text">Clear</span>
                                <img src="https://static.thumbtackstatic.com/media/primo/static/pro/redo-icon.png" />
                            </div>
                            <div class="Calculator-inner">
                                <h3>Customers requested</h3>
                                <p class="stat" ng-show="requestVolume && taxonym">
                                    {[{ requestVolume|number:0 }]}</p>
                                <p>
                                    <span class="category-name">{[{ taxonym }]}</span>
                                    last month</p>
                                                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="CalculatorStats ThreeUp">
            <div class="ThreeUpItem">
                <h3>Millions</h3>
                <p>of requests each year</p>
            </div>
            <div class="ThreeUpItem">
                <h3>Over $1B</h3>
                <p>annual revenue for pros</p>
            </div>
            <div class="ThreeUpItem">
                <h3>Over 1,000</h3>
                <p>types of services</p>
            </div>
        </div>
    </div>
</div>


<div class="ContentSection ProsSection">
    <div class="ProsSection-description">
        <h2>Success stories</h2>
        <p>
            Hear from pros across the country who are pursuing meaningful work on their own terms.
        </p>
    </div>
    <div class="gallery ProsSection-proslist theme-desktop-only">
        <div class="gallery-row">
                <div id="pro1" ng-controller="VideoControl"
            class="SquareBox large
            first_row_item
            ">
        <div class="SquareBox-aspect-ratio-enforcer"></div>
        <div class="SquareBox-contents ImageBox hover-enabled"
            style="background-image: url(https://static.thumbtackstatic.com/media/primo/static/pro/gallery/sara_v2.jpg);" ng-click="showVideo()">
            <div class="description">
                <p class="name">
                    Sara
                </p>
                <p>
                    <span class="job">Chef</span>, Brooklyn, NY
                </p>
            </div>
            <div class="hover-description">
                <p>"Using Thumbtack, I was able to transition out of my job in finance. I am my own boss, which is phenomenal."</p>
            </div>
            <span class="play-video-icon">
                <img src="https://static.thumbtackstatic.com/media/primo/static/pro/play-icon.png"
                    alt="Watch Video">
            </span>
        </div>

        <div curtain ng-cloak curtain-visible="displayVideo"
            curtain-class="'Video-popup'" curtain-close-on-click="true"
            class="Video-popup">
            <div class="Video-popup-header"></div>
            <div class="Video-popup-content">
                <youtube-video video-id="'bruu4u_Z-SY'"
                    player="videoPlayer.player"></youtube-video>
            </div>
        </div>
    </div>

                <div id="pro2" ng-controller="VideoControl"
            class="SquareBox small
            
            ">
        <div class="SquareBox-aspect-ratio-enforcer"></div>
        <div class="SquareBox-contents ImageBox hover-enabled"
            style="background-image: url(https://static.thumbtackstatic.com/media/primo/static/pro/gallery/richard_v2.jpg);" ng-click="showVideo()">
            <div class="description">
                <p class="name">
                    Richard
                </p>
                <p>
                    <span class="job">Photographer</span>, The Bronx, NY
                </p>
            </div>
            <div class="hover-description">
                <p>""</p>
            </div>
            <span class="play-video-icon">
                <img src="https://static.thumbtackstatic.com/media/primo/static/pro/play-icon.png"
                    alt="Watch Video">
            </span>
        </div>

        <div curtain ng-cloak curtain-visible="displayVideo"
            curtain-class="'Video-popup'" curtain-close-on-click="true"
            class="Video-popup">
            <div class="Video-popup-header"></div>
            <div class="Video-popup-content">
                <youtube-video video-id="'jiDNg8Ichgk'"
                    player="videoPlayer.player"></youtube-video>
            </div>
        </div>
    </div>

                <div id="pro3" ng-controller="VideoControl"
            class="SquareBox small
            
            ">
        <div class="SquareBox-aspect-ratio-enforcer"></div>
        <div class="SquareBox-contents ImageBox hover-enabled"
            style="background-image: url(https://static.thumbtackstatic.com/media/primo/static/pro/gallery/katie_v2.jpg);" ng-click="showVideo()">
            <div class="description">
                <p class="name">
                    Katie
                </p>
                <p>
                    <span class="job">Pet Sitter</span>, Bradenton, FL
                </p>
            </div>
            <div class="hover-description">
                <p>""</p>
            </div>
            <span class="play-video-icon">
                <img src="https://static.thumbtackstatic.com/media/primo/static/pro/play-icon.png"
                    alt="Watch Video">
            </span>
        </div>

        <div curtain ng-cloak curtain-visible="displayVideo"
            curtain-class="'Video-popup'" curtain-close-on-click="true"
            class="Video-popup">
            <div class="Video-popup-header"></div>
            <div class="Video-popup-content">
                <youtube-video video-id="'4NmVC8Wpxgs'"
                    player="videoPlayer.player"></youtube-video>
            </div>
        </div>
    </div>

        </div>
        <div class="gallery-row">
                <div id="pro4" ng-controller="VideoControl"
            class="SquareBox small
            first_row_item
            ">
        <div class="SquareBox-aspect-ratio-enforcer"></div>
        <div class="SquareBox-contents ImageBox hover-enabled"
            style="background-image: url(https://static.thumbtackstatic.com/media/primo/static/pro/gallery/eric_v2.jpg);" ng-click="showVideo()">
            <div class="description">
                <p class="name">
                    Eric
                </p>
                <p>
                    <span class="job">Locksmith</span>, Phoenix, AZ
                </p>
            </div>
            <div class="hover-description">
                <p>""</p>
            </div>
            <span class="play-video-icon">
                <img src="https://static.thumbtackstatic.com/media/primo/static/pro/play-icon.png"
                    alt="Watch Video">
            </span>
        </div>

        <div curtain ng-cloak curtain-visible="displayVideo"
            curtain-class="'Video-popup'" curtain-close-on-click="true"
            class="Video-popup">
            <div class="Video-popup-header"></div>
            <div class="Video-popup-content">
                <youtube-video video-id="'aMJaW5eLsis'"
                    player="videoPlayer.player"></youtube-video>
            </div>
        </div>
    </div>

                <div id="pro5" ng-controller="VideoControl"
            class="SquareBox large
            
            right_column_item">
        <div class="SquareBox-aspect-ratio-enforcer"></div>
        <div class="SquareBox-contents ImageBox hover-enabled"
            style="background-image: url(https://static.thumbtackstatic.com/media/primo/static/pro/gallery/bonnie_v2.jpg);" ng-click="showVideo()">
            <div class="description">
                <p class="name">
                    Bonnie
                </p>
                <p>
                    <span class="job">Tutor</span>, Houston, TX
                </p>
            </div>
            <div class="hover-description">
                <p>"To be able to help someone know they can do whatever they want is beautiful."</p>
            </div>
            <span class="play-video-icon">
                <img src="https://static.thumbtackstatic.com/media/primo/static/pro/play-icon.png"
                    alt="Watch Video">
            </span>
        </div>

        <div curtain ng-cloak curtain-visible="displayVideo"
            curtain-class="'Video-popup'" curtain-close-on-click="true"
            class="Video-popup">
            <div class="Video-popup-header"></div>
            <div class="Video-popup-content">
                <youtube-video video-id="'_3NsbqnjNxU'"
                    player="videoPlayer.player"></youtube-video>
            </div>
        </div>
    </div>

            <div id="pro-success" class="SquareBox small first_row_item">
                <div class="SquareBox-aspect-ratio-enforcer"></div>
                <div class="SquareBox-contents gallery-successStories" ng-click="">
                    <div class="gallery-successStories-inner">
                        <img src=
                            "https://static.thumbtackstatic.com/media/primo/static/pro/gallery-success-stories.svg">
                        <h3>Success stories
                        </h3>
                        <p>See what our pros have to say about their Thumbtack experience.
                        </p>
                        <a href="{{URL::to('stories')}}" target="_blank"
                            >Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="CarouselBlock ProsSection-proslist theme-not-desktop-only"
            ng-controller="CarouselController" carousel data-carousel-index="index" ng-cloak>
        <div class="CarouselPlate-frame">
            <div class="CarouselPlate" data-carousel-plate>
                                    <div class="Carousel-item" data-carousel-item>
                            <div id="pro1" ng-controller="VideoControl"
            class="SquareBox large
            first_row_item
            ">
        <div class="SquareBox-aspect-ratio-enforcer"></div>
        <div class="SquareBox-contents ImageBox hover-enabled"
            style="background-image: url(https://static.thumbtackstatic.com/media/primo/static/pro/gallery/sara_v2.jpg);" ng-click="showVideo()">
            <div class="description">
                <p class="name">
                    Sara
                </p>
                <p>
                    <span class="job">Chef</span>, Brooklyn, NY
                </p>
            </div>
            <div class="hover-description">
                <p>"Using Thumbtack, I was able to transition out of my job in finance. I am my own boss, which is phenomenal."</p>
            </div>
            <span class="play-video-icon">
                <img src="https://static.thumbtackstatic.com/media/primo/static/pro/play-icon.png"
                    alt="Watch Video">
            </span>
        </div>

        <div curtain ng-cloak curtain-visible="displayVideo"
            curtain-class="'Video-popup'" curtain-close-on-click="true"
            class="Video-popup">
            <div class="Video-popup-header"></div>
            <div class="Video-popup-content">
                <youtube-video video-id="'bruu4u_Z-SY'"
                    player="videoPlayer.player"></youtube-video>
            </div>
        </div>
    </div>

                    </div>
                                    <div class="Carousel-item" data-carousel-item>
                            <div id="pro1" ng-controller="VideoControl"
            class="SquareBox small
            first_row_item
            ">
        <div class="SquareBox-aspect-ratio-enforcer"></div>
        <div class="SquareBox-contents ImageBox hover-enabled"
            style="background-image: url(https://static.thumbtackstatic.com/media/primo/static/pro/gallery/richard_v2.jpg);" ng-click="showVideo()">
            <div class="description">
                <p class="name">
                    Richard
                </p>
                <p>
                    <span class="job">Photographer</span>, The Bronx, NY
                </p>
            </div>
            <div class="hover-description">
                <p>""</p>
            </div>
            <span class="play-video-icon">
                <img src="https://static.thumbtackstatic.com/media/primo/static/pro/play-icon.png"
                    alt="Watch Video">
            </span>
        </div>

        <div curtain ng-cloak curtain-visible="displayVideo"
            curtain-class="'Video-popup'" curtain-close-on-click="true"
            class="Video-popup">
            <div class="Video-popup-header"></div>
            <div class="Video-popup-content">
                <youtube-video video-id="'jiDNg8Ichgk'"
                    player="videoPlayer.player"></youtube-video>
            </div>
        </div>
    </div>

                    </div>
                                    <div class="Carousel-item" data-carousel-item>
                            <div id="pro1" ng-controller="VideoControl"
            class="SquareBox small
            first_row_item
            ">
        <div class="SquareBox-aspect-ratio-enforcer"></div>
        <div class="SquareBox-contents ImageBox hover-enabled"
            style="background-image: url(https://static.thumbtackstatic.com/media/primo/static/pro/gallery/katie_v2.jpg);" ng-click="showVideo()">
            <div class="description">
                <p class="name">
                    Katie
                </p>
                <p>
                    <span class="job">Pet Sitter</span>, Bradenton, FL
                </p>
            </div>
            <div class="hover-description">
                <p>""</p>
            </div>
            <span class="play-video-icon">
                <img src="https://static.thumbtackstatic.com/media/primo/static/pro/play-icon.png"
                    alt="Watch Video">
            </span>
        </div>

        <div curtain ng-cloak curtain-visible="displayVideo"
            curtain-class="'Video-popup'" curtain-close-on-click="true"
            class="Video-popup">
            <div class="Video-popup-header"></div>
            <div class="Video-popup-content">
                <youtube-video video-id="'4NmVC8Wpxgs'"
                    player="videoPlayer.player"></youtube-video>
            </div>
        </div>
    </div>

                    </div>
                                    <div class="Carousel-item" data-carousel-item>
                            <div id="pro1" ng-controller="VideoControl"
            class="SquareBox small
            first_row_item
            ">
        <div class="SquareBox-aspect-ratio-enforcer"></div>
        <div class="SquareBox-contents ImageBox hover-enabled"
            style="background-image: url(https://static.thumbtackstatic.com/media/primo/static/pro/gallery/eric_v2.jpg);" ng-click="showVideo()">
            <div class="description">
                <p class="name">
                    Eric
                </p>
                <p>
                    <span class="job">Locksmith</span>, Phoenix, AZ
                </p>
            </div>
            <div class="hover-description">
                <p>""</p>
            </div>
            <span class="play-video-icon">
                <img src="https://static.thumbtackstatic.com/media/primo/static/pro/play-icon.png"
                    alt="Watch Video">
            </span>
        </div>

        <div curtain ng-cloak curtain-visible="displayVideo"
            curtain-class="'Video-popup'" curtain-close-on-click="true"
            class="Video-popup">
            <div class="Video-popup-header"></div>
            <div class="Video-popup-content">
                <youtube-video video-id="'aMJaW5eLsis'"
                    player="videoPlayer.player"></youtube-video>
            </div>
        </div>
    </div>

                    </div>
                                    <div class="Carousel-item" data-carousel-item>
                            <div id="pro1" ng-controller="VideoControl"
            class="SquareBox large
            first_row_item
            ">
        <div class="SquareBox-aspect-ratio-enforcer"></div>
        <div class="SquareBox-contents ImageBox hover-enabled"
            style="background-image: url(https://static.thumbtackstatic.com/media/primo/static/pro/gallery/bonnie_v2.jpg);" ng-click="showVideo()">
            <div class="description">
                <p class="name">
                    Bonnie
                </p>
                <p>
                    <span class="job">Tutor</span>, Houston, TX
                </p>
            </div>
            <div class="hover-description">
                <p>"To be able to help someone know they can do whatever they want is beautiful."</p>
            </div>
            <span class="play-video-icon">
                <img src="https://static.thumbtackstatic.com/media/primo/static/pro/play-icon.png"
                    alt="Watch Video">
            </span>
        </div>

        <div curtain ng-cloak curtain-visible="displayVideo"
            curtain-class="'Video-popup'" curtain-close-on-click="true"
            class="Video-popup">
            <div class="Video-popup-header"></div>
            <div class="Video-popup-content">
                <youtube-video video-id="'_3NsbqnjNxU'"
                    player="videoPlayer.player"></youtube-video>
            </div>
        </div>
    </div>

                    </div>
                            </div>
        </div>
        <div class="Carousel-navKabob">
            <span class="Carousel-navLink"
                    ng-class="{'current': index === 0}"
                    ng-click="index = 0;"></span><span class="Carousel-navLink"
                    ng-class="{'current': index === 1}"
                    ng-click="index = 1;"></span><span class="Carousel-navLink"
                    ng-class="{'current': index === 2}"
                    ng-click="index = 2;"></span><span class="Carousel-navLink"
                    ng-class="{'current': index === 3}"
                    ng-click="index = 3;"></span><span class="Carousel-navLink"
                    ng-class="{'current': index === 4}"
                    ng-click="index = 4;"></span>        </div>
        <div class="Carousel-navTrigger theme-previous" ng-click="index = index - 1;">
            <div class="Carousel-navTrigger-arrow"></div>
        </div>
        <div class="Carousel-navTrigger theme-next" ng-click="index = index + 1;">
            <div class="Carousel-navTrigger-arrow"></div>
        </div>
    </div>

</div>

    <div class="GetHiredSection" id="background-top">
    
        <div class="background-before"></div>
        <div class="background" id="background"></div>
        <div class="background-after"></div>
        <div class="ContentSection">
            <div class="dynamic-row">
     
                <div class="text">
                    <h2><span class="desktop-line-break">Get hired on</span> the go
                    </h2>
                    <p>The Thumbtack app makes it easy to quote on jobs and respond to customers
                        from anywhere.
                    </p>
                </div>
            </div>
            <div class="dynamic-row">
                <div class="GetHiredSection-downloads">
                    <a class="GetHiredSection-download bttn"
                        href="http://r.yoz.io/Z3.c.m" target="_blank" rel="nofollow">
                        <img src="https://static.thumbtackstatic.com/media/primo/static/pro/download-apple.png" />
                        <div class="GetHiredSection-download-description">
                            Download for iPhone
                        </div>
                    </a>
                    <a class="GetHiredSection-download bttn"
                       href="http://r.yoz.io/Z3.c.g" target="_blank" rel="nofollow">
                        <img src="https://static.thumbtackstatic.com/media/primo/static/pro/download-googleplay.png" />
                        <div class="GetHiredSection-download-description">
                            Download for Android
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

<div class="theme-alternate">
    <div class="WeMeanBusinessSection">
        <div class="ContentSection">
            <h2>Empowering small businesses
            </h2>
            <p class="WeMeanBusinessSection-description">We give small businesses a voice and
                provide critical resources to help them grow.
            </p>
        </div>
        <div class="WeMeanBusinessSection-card-list ContentSection theme-desktop-only">
            <div class="ThreeUp">
                                    <div class="ThreeUpItem WeMeanBusinessSection-card"
                        ">
                        <img src="https://static.thumbtackstatic.com/media/primo/static/pro/business1.png" />
                        <div class="description">
                            <h3>Pro Tips</h3>
                            <p>Our pro blog features tips and resources for succeeding as a small business.</p>
                            <a href="{{URL::to('proHandBook')}}" target="_blank">Visit the blog</a>
                        </div>
                    </div>
                        <div class="ThreeUpItem WeMeanBusinessSection-card">
                        <img src="https://static.thumbtackstatic.com/media/primo/static/pro/business2.png" />
                        <div class="description">
                            <h3>2015 Small Business Survey</h3>
                            <p>We research the needs of small businesses and advocate for them at the highest levels of government.</p>
                            <a href="{{URL::to('survey')}}" target="_blank">View findings</a>
                        </div>
                    </div>
                                    <div class="ThreeUpItem WeMeanBusinessSection-card"
                        ">
                        <img src="https://static.thumbtackstatic.com/media/primo/static/pro/business3.png" />
                        <div class="description">
                            <h3>Thumbtack Connect Tours</h3>
                            <p>Through local events, we provide our pros with a network for success.</p>
                            <a href="{{URL::to('thumbtackSanDigo')}}" target="_blank">See our events</a>
                        </div>
                    </div>
                            </div>
        </div>
        <div class="WeMeanBusinessSection-card-list CarouselBlock theme-not-desktop-only"
            ng-controller="CarouselController" carousel data-carousel-index="index" ng-cloak>
            <div class="CarouselPlate-frame">
                <div class="CarouselPlate" data-carousel-plate>
                                            <div class="Carousel-item WeMeanBusinessSection-card" data-carousel-item
                                ">
                            <img src="https://static.thumbtackstatic.com/media/primo/static/pro/business1.png" />
                            <div class="description">
                                <h3>Pro Tips</h3>
                                <p>Our pro blog features tips and resources for succeeding as a small business.</p>
                                <a href="{{URL::to('proHandBook')}}"
                                    target="_blank">Visit the blog</a>
                            </div>
                        </div>
                                            <div class="Carousel-item WeMeanBusinessSection-card" data-carousel-item
                              ">
                            <img src="https://static.thumbtackstatic.com/media/primo/static/pro/business2.png" />
                            <div class="description">
                                <h3>2015 Small Business Survey</h3>
                                <p>We research the needs of small businesses and advocate for them at the highest levels of government.</p>
                                <a href="{{URL::to('survey')}}"
                                    target="_blank">View findings</a>
                            </div>
                        </div>
                                            <div class="Carousel-item WeMeanBusinessSection-card" data-carousel-item
                               ">
                            <img src="https://static.thumbtackstatic.com/media/primo/static/pro/business3.png" />
                            <div class="description">
                                <h3>Thumbtack Connect Tours</h3>
                                <p>Through local events, we provide our pros with a network for success.</p>
                                <a href="{{URL::to('thumbtackSanDigo')}}"
                                    target="_blank">See our events</a>
                            </div>
                        </div>
                                    </div>
            </div>
            <div class="Carousel-navKabob">
                <span class="Carousel-navLink"
                        ng-class="{'current': index === 0}"
                        ng-click="index = 0;"></span><span class="Carousel-navLink"
                        ng-class="{'current': index === 1}"
                        ng-click="index = 1;"></span><span class="Carousel-navLink"
                        ng-class="{'current': index === 2}"
                        ng-click="index = 2;"></span>            </div>
            <div class="Carousel-navTrigger theme-previous" ng-click="index = index - 1;">
                <div class="Carousel-navTrigger-arrow"></div>
            </div>
            <div class="Carousel-navTrigger theme-next" ng-click="index = index + 1;">
                <div class="Carousel-navTrigger-arrow"></div>
            </div>
        </div>
    </div>
</div>
@endsection


                        
