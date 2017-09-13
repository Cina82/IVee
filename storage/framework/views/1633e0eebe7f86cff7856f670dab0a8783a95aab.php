<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(URL::to('public/assets/explore-v1-3be7845a.css')); ?>" />

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo e(URL::to('public/wizardDemo/wizard.css')); ?>" rel="stylesheet" />
    <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="<?php echo e(URL::to('public/wizardDemo/javascripts/jquery.validate.min.js')); ?>"></script>
    <script src="<?php echo e(URL::to('public/wizardDemo/javascripts/jquery.validate.unobtrusive.js')); ?>"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo e(URL::to('public/wizardDemo/wizard.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="ExploreV1">
   <div viewport-element="hero">
      <div class="ExploreHero">
         <div class="page-grid">
            <div class="column-lg-6">
               <h1 class="H1-R ExploreHero-heading">Get anything done.</h1>
               <p class="H3-R ExploreHero-subheading">Over 1,100 services. Explore the possibilities.</p>
            </div>
         </div>
         <div class="page-grid">
            <div class="column-lg-4 column-md-6">
               <div class="ExploreHero-form">
                  <div class="SearchForm theme-explore">
                     <form search-form open-request-form-modal from-homepage="" hide-intro-screen="" ng-submit="submitSearch($event)" class="SearchForm-form" action="#" hercule-root-url="https://hercule.thumbtack.com" hercule-version="0" include-test="" page-type="demo" search-origin="explore-v1" event-name="explore-v1" homepage-redirect-to-near-me="">
                        <div class="SearchForm-form-inputGroup 1" dir="rtl">
                           <span class="SearchForm-form-query B2-S" ng-class="{'dropdownOpen': suggestionsOpen}">
                              <input class="query"
                                 ng-class="{'is-empty-state': isEmptyState}"
                                 required
                                 autocomplete="off"
                                 placeholder="?What service do you need"
                                 type="search"
                                 event-track="home page/start service query"
                                 event-track-on="keypress"
                                 event-track-data="{
                                 pageType: 'demo',
                                 searchOrigin: 'explore-v1',
                                 }"
                                 event-track-once
                                 />
                              <div class="SearchForm-form-query-clearQuery">
                                 <label
                                    ng-class="{'is-empty-state': isEmptyState}"
                                    class="SearchForm-form-query-clearQuery-wrapper"
                                    for="clear-input-field"
                                    ng-click="clearSearchField()"
                                    >
                                    <svg-icon
                                       type="declined"
                                       size="sm"
                                       class="SearchForm-form-query-clearQuery-wrapper-icon">
                                    </svg-icon>
                                 </label>
                              </div>
                           </span>
                           <label for="search-submit" class="
                              SearchForm-form-smallSubmit-wrapper
                              is-visible">
                              <svg-icon type="search" size="md" class="HeaderSearch-form-smallSubmit-wrapper-icon">
                              </svg-icon>
                           </label>
                           <button class="
                              SearchForm-form-submitBtn
                              Button
                              theme-large
                              theme-branded             is-hidden
                              is-hidden-at-sm
                              " type="submit" event-track="hercule/click get started" event-track-on="click" event-track-data="{
                              pageType: 'demo',
                              searchOrigin: 'explore-v1',
                              }">
                           Get Started
                           </button>
                        </div>
                     </form>
                  </div>
                </div>
            </div>
         </div>
      </div>
   </div>
   <div class="Moments  theme-explore">
      <div class="Moments-container">
         <div class="Moments-moment">
            <div class="page-grid">
               <div class="column-lg-6">
                  <h4 class="tp-heading-4 Moments-moment-title">Popular in your area</h4>
               </div>
            </div>
            <div class="page-grid theme-full-bleed-at-xs">
               <div class="column-lg-6">
                  <category-carousel count="25" responsive-grid="page">
                     <div class="CategoryCarousel">
                        <div class="CategoryCarousel-paddle paddle-left" ng-click="carousel.onClickLeft()">
                           <svg-icon type="left-caret" size="md">
                           </svg-icon>
                        </div>
                        <div class="CategoryCarousel-container">
                           <div class="CategoryCarousel-list">
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-carousel     " event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;1axLKc3DdQ6g5w&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:0,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;1axLKc3DdQ6g5w&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:0,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('1axLKc3DdQ6g5w', '')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Personal Training 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-carousel     " event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;Ef:ZOOYOXFaD2A&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:1,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;Ef:ZOOYOXFaD2A&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:1,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('Ef:ZOOYOXFaD2A', '')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">>
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          House Cleaning 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-carousel     " event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;DlKFbmZEwCYQyA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:2,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;DlKFbmZEwCYQyA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:2,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('DlKFbmZEwCYQyA', '')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Lawn Mowing and Trimming 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-carousel     " event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;nV8DGI4:dEUXtQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:3,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;nV8DGI4:dEUXtQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:3,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('nV8DGI4:dEUXtQ', '')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Local Moving (under 50 miles)
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-carousel     " event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;kMI95pqKXLU9vQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:4,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;kMI95pqKXLU9vQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:4,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('kMI95pqKXLU9vQ', '')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Massage Therapy 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-carousel     " event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;M:HwIR8qa:MQww&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:5,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;M:HwIR8qa:MQww&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:5,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('M:HwIR8qa:MQww', '')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Handyman 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-carousel     " event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;jc3YVHYCu45H2g&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:6,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;jc3YVHYCu45H2g&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:6,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('jc3YVHYCu45H2g', '')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Event Catering 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-carousel     " event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;4Gs5C$PsIesk5A&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:7,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;4Gs5C$PsIesk5A&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:7,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('4Gs5C$PsIesk5A', '')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Bounce House and Party Inflatables Rental 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-carousel     " event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;bIY6hGfB2q8syQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:8,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;bIY6hGfB2q8syQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:8,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('bIY6hGfB2q8syQ', '')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Private Swim Lessons 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-carousel     " event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;GTdkGWTMaOx4Wg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:9,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;GTdkGWTMaOx4Wg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:9,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('GTdkGWTMaOx4Wg', '')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Dog Training 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-carousel     " event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;Q9sYIW2IZP5AkA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:10,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;Q9sYIW2IZP5AkA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:10,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('Q9sYIW2IZP5AkA', '')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Wedding and Event Makeup 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-carousel     " event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;XyyEps5FZMepLQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:11,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;XyyEps5FZMepLQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:11,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('XyyEps5FZMepLQ', '')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Interior Painting 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-carousel     " event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;iJlabHh2QF9ylg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:12,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;iJlabHh2QF9ylg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:12,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('iJlabHh2QF9ylg', '')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          DJ 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-carousel     " event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;9J5P8q6rNlEGlQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:13,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;9J5P8q6rNlEGlQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:13,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('9J5P8q6rNlEGlQ', '')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Fence and Gate Installation 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-carousel     " event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;Rfn88VIV27Tb3g&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:14,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;Rfn88VIV27Tb3g&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:14,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('Rfn88VIV27Tb3g', '')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Portrait Photography 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-carousel     " event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;Bg9:OPqOradztw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:15,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;Bg9:OPqOradztw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:15,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('Bg9:OPqOradztw', '')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Outdoor Landscaping and Design 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-carousel     " event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;b7cSvw5Y7PhRlA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:16,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;b7cSvw5Y7PhRlA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:16,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('b7cSvw5Y7PhRlA', '')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Wedding Officiant 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-carousel     " event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;1AlrokYQ00L8eQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:17,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;1AlrokYQ00L8eQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:17,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('1AlrokYQ00L8eQ', '')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Roof Installation or Replacement 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-carousel     " event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;6WTJnO6mPxjoag&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:18,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;6WTJnO6mPxjoag&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:18,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('6WTJnO6mPxjoag', '')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Pest Control Services 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-carousel     " event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;kPijy0lr$n4Dgw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:19,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;kPijy0lr$n4Dgw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:19,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('kPijy0lr$n4Dgw', '')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Swimming Pool Cleaning, Maintenance, and Inspection 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-carousel     " event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;dQJN84Ndr5s$Xg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:20,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;dQJN84Ndr5s$Xg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:20,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('dQJN84Ndr5s$Xg', '')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Party Bus Rental 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-carousel     " event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;HSN$F3bPaZ1iaw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:21,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;HSN$F3bPaZ1iaw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:21,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('HSN$F3bPaZ1iaw', '')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Piano Lessons 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-carousel     " event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;Vin8kPc8QyC5KQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:22,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;Vin8kPc8QyC5KQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:22,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('Vin8kPc8QyC5KQ', '')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Computer Repair 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-carousel     " event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;29EdERcHj04lig&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:23,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;29EdERcHj04lig&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:23,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('29EdERcHj04lig', '')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Central Air Conditioning Repair 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-carousel     " event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;VNuwXawPoFKfrw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:24,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;VNuwXawPoFKfrw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:24,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('VNuwXawPoFKfrw', '')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          ACT Tutoring 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div class="
                                    ServiceBox-container
                                    theme-carousel     " event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;1axLKc3DdQ6g5w&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:0,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;1axLKc3DdQ6g5w&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:0,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('1axLKc3DdQ6g5w', '')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Personal Training 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div class="
                                    ServiceBox-container
                                    theme-carousel     " event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;Ef:ZOOYOXFaD2A&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:1,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;Ef:ZOOYOXFaD2A&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:1,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('Ef:ZOOYOXFaD2A', '')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          House Cleaning 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div class="
                                    ServiceBox-container
                                    theme-carousel     " event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;DlKFbmZEwCYQyA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:2,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;DlKFbmZEwCYQyA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:2,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('DlKFbmZEwCYQyA', '')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Lawn Mowing and Trimming 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div class="
                                    ServiceBox-container
                                    theme-carousel     " event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;nV8DGI4:dEUXtQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:3,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;nV8DGI4:dEUXtQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:3,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('nV8DGI4:dEUXtQ', '')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Local Moving (under 50 miles)
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div class="
                                    ServiceBox-container
                                    theme-carousel     " event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;kMI95pqKXLU9vQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:4,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;kMI95pqKXLU9vQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:4,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('kMI95pqKXLU9vQ', '')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Massage Therapy 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div class="
                                    ServiceBox-container
                                    theme-carousel     " event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;M:HwIR8qa:MQww&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:5,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;M:HwIR8qa:MQww&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:5,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('M:HwIR8qa:MQww', '')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Handyman 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="CategoryCarousel-paddle paddle-right" ng-click="carousel.onClickRight()">
                           <svg-icon type="right-caret" size="md">
                           </svg-icon>
                        </div>
                     </div>
                  </category-carousel>
               </div>
            </div>
         </div>
         <div class="Moments-moment">
            <div class="page-grid">
               <div class="column-lg-6">
                  <h4 class="tp-heading-4 Moments-moment-title">Trending now</h4>
               </div>
            </div>
            <div class="page-grid theme-full-bleed-at-xs">
               <div class="column-lg-6">
                  <category-carousel count="6" responsive-grid="page">
                     <div class="CategoryCarousel">
                        <div class="CategoryCarousel-paddle paddle-left" ng-click="carousel.onClickLeft()">
                           <svg-icon type="left-caret" size="md">
                           </svg-icon>
                        </div>
                        <div class="CategoryCarousel-container">
                           <div class="CategoryCarousel-list">
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-carousel     " event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;6nlpb86x4sELeQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:0,&quot;block_position&quot;:1,&quot;block_type&quot;:3}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;6nlpb86x4sELeQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:0,&quot;block_position&quot;:1,&quot;block_type&quot;:3}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('6nlpb86x4sELeQ', '')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Singing Lessons 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-carousel     " event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;oBbEKZglfn$eJQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:1,&quot;block_position&quot;:1,&quot;block_type&quot;:3}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;oBbEKZglfn$eJQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:1,&quot;block_position&quot;:1,&quot;block_type&quot;:3}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('oBbEKZglfn$eJQ', '')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Pet Sitting 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-carousel     " event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;q75MpVw2qNDkmQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:2,&quot;block_position&quot;:1,&quot;block_type&quot;:3}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;q75MpVw2qNDkmQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:2,&quot;block_position&quot;:1,&quot;block_type&quot;:3}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('q75MpVw2qNDkmQ', '')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Junk Removal 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-carousel     " event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;MOc1BYoYDRBwZg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:3,&quot;block_position&quot;:1,&quot;block_type&quot;:3}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;MOc1BYoYDRBwZg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:3,&quot;block_position&quot;:1,&quot;block_type&quot;:3}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('MOc1BYoYDRBwZg', '')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Swimming Pool Installation 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-carousel     " event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;ac9WaewolzmHmw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:4,&quot;block_position&quot;:1,&quot;block_type&quot;:3}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;ac9WaewolzmHmw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:4,&quot;block_position&quot;:1,&quot;block_type&quot;:3}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('ac9WaewolzmHmw', '')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Hair Coloring and Highlights 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-carousel     " event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;4ZinwdwPMD6HGQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:5,&quot;block_position&quot;:1,&quot;block_type&quot;:3}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;4ZinwdwPMD6HGQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:5,&quot;block_position&quot;:1,&quot;block_type&quot;:3}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('4ZinwdwPMD6HGQ', '')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Honeymoon Travel Specialist 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div class="
                                    ServiceBox-container
                                    theme-carousel     " event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;6nlpb86x4sELeQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:0,&quot;block_position&quot;:1,&quot;block_type&quot;:3}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;6nlpb86x4sELeQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:0,&quot;block_position&quot;:1,&quot;block_type&quot;:3}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('6nlpb86x4sELeQ', '')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Singing Lessons 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div class="
                                    ServiceBox-container
                                    theme-carousel     " event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;oBbEKZglfn$eJQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:1,&quot;block_position&quot;:1,&quot;block_type&quot;:3}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;oBbEKZglfn$eJQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:1,&quot;block_position&quot;:1,&quot;block_type&quot;:3}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('oBbEKZglfn$eJQ', '')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Pet Sitting 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div class="
                                    ServiceBox-container
                                    theme-carousel     " event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;q75MpVw2qNDkmQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:2,&quot;block_position&quot;:1,&quot;block_type&quot;:3}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;q75MpVw2qNDkmQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:2,&quot;block_position&quot;:1,&quot;block_type&quot;:3}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('q75MpVw2qNDkmQ', '')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Junk Removal 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div class="
                                    ServiceBox-container
                                    theme-carousel     " event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;MOc1BYoYDRBwZg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:3,&quot;block_position&quot;:1,&quot;block_type&quot;:3}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;MOc1BYoYDRBwZg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:3,&quot;block_position&quot;:1,&quot;block_type&quot;:3}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('MOc1BYoYDRBwZg', '')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Swimming Pool Installation 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div class="
                                    ServiceBox-container
                                    theme-carousel     " event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;ac9WaewolzmHmw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:4,&quot;block_position&quot;:1,&quot;block_type&quot;:3}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;ac9WaewolzmHmw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:4,&quot;block_position&quot;:1,&quot;block_type&quot;:3}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('ac9WaewolzmHmw', '')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Hair Coloring and Highlights 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div class="
                                    ServiceBox-container
                                    theme-carousel     " event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;4ZinwdwPMD6HGQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:5,&quot;block_position&quot;:1,&quot;block_type&quot;:3}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;4ZinwdwPMD6HGQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:5,&quot;block_position&quot;:1,&quot;block_type&quot;:3}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('4ZinwdwPMD6HGQ', '')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Honeymoon Travel Specialist 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="CategoryCarousel-paddle paddle-right" ng-click="carousel.onClickRight()">
                           <svg-icon type="right-caret" size="md">
                           </svg-icon>
                        </div>
                     </div>
                  </category-carousel>
               </div>
            </div>
         </div>


         <div class="Moments-moment" waypoint-track="moments" waypoint-track-data="{ 'moment_index': 0 }">
            <div class="page-grid">
               <div class="column-lg-6">
                  <h4 class="tp-heading-4 Moments-moment-title">Home Improvement</h4>
               </div>
            </div>
            <div class="page-grid theme-full-bleed-at-xs">
               <div class="column-lg-6">
                  <category-carousel count="11" responsive-grid="page">
                     <div class="CategoryCarousel">
                        <div class="CategoryCarousel-paddle paddle-left" ng-click="carousel.onClickLeft()">
                           <svg-icon type="left-caret" size="md">
                           </svg-icon>
                        </div>
                        <div class="CategoryCarousel-container">
                           <div class="CategoryCarousel-list">

                             <?php $__currentLoopData = $homeImprovement; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hmp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-smaller          theme-carousel     "
                                    event-track="moments/click"
                                    event-track-on="click" 
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;Q9sYIW2IZP5AkA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:1,&quot;category_index&quot;:0}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;Q9sYIW2IZP5AkA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:1,&quot;category_index&quot;:0}">
                                    <a class="ServiceBox-item"
                                       onclick="customerQuestion(<?php echo e($hmp->id); ?>)" style="text-decoration: none;"
                                       >
                                    <img src="<?php echo e(URL::to('public/uploads')); ?>/<?php echo e($hmp->image); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          <?php echo e($hmp->name); ?>

                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                               <?php  

                                 $questionDecode = json_decode($hmp->question);
                                 $question = $questionDecode[0]->question;
                                 $count = count($question);

                               ?>
                                 <div class="wizard" id="wizard<?php echo e($hmp->id); ?>" dir="rtl">
                                 
                              <?php 
                                 for($i=0;$i<$count;$i++)
                                 {
                                    $singleQuestion = $question[$i]->question;
                                    $questionType = $question[$i]->questionType;
                                    $options = $question[$i]->options;
                                    
                               ?>
                                    <div class='wizard-step' data-title='<?php echo e($hmp->name); ?>'>
                                      <?php echo e(csrf_field()); ?>

                                       <input type="hidden" name="serviceId" value="<?php echo e($hmp->id); ?>">
                                       <center><h3><?php echo e($singleQuestion); ?></h3></center>
                                       <input type="hidden" name="question[]" value="<?php echo e($singleQuestion); ?>">
                                       <?php if($questionType == 1): ?>
                                       <input type="hidden" name="questionType[]" value="<?php echo e($questionType); ?>">
                                       <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <?php  $random = rand(1,9999999);  ?>
                                       <div class="InputRadio">
                                       <input name="options<?php echo e($i); ?>[]"  value="<?php echo e($opt); ?>" class="ng-scope ng-pristine ng-valid u-visuallyHidden" id="<?php echo e($random); ?>" type="radio"><label class="InputRadio-label" for="<?php echo e($random); ?>"><div class="InputRadio-label-inner ng-scope"><?php echo e($opt); ?></div></label>
                                       </div>
                                       
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                       <?php endif; ?> 
                                       <?php if($questionType == 4): ?>
                                       <input type="hidden" name="questionType[]" value="<?php echo e($questionType); ?>">
                                       <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <?php  $random = rand(1,9999999);  ?>
                                          <div class="InputCheckbox">
                                            <input class="ng-scope ng-valid u-visuallyHidden ng-dirty" id="<?php echo e($random); ?>" type="checkbox" name="options<?php echo e($i); ?>[]" value="<?php echo e($opt); ?>">
                                            <label class="InputCheckbox-label" for="<?php echo e($random); ?>">
                                                <div class="InputCheckbox-label-inner"><?php echo e($opt); ?></div>
                                            </label>
                                        </div>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                       <?php endif; ?>   
                                    </div>
                                   
                                 <?php  }  ?>
                                 </div>
                                 
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        </div>
                        <div class="CategoryCarousel-paddle paddle-right" ng-click="carousel.onClickRight()">
                           <svg-icon type="right-caret" size="md">
                           </svg-icon>
                        </div>
                     </div>
                  </category-carousel>
               </div>
            </div>
         </div> 

         <div class="Moments-moment" waypoint-track="moments" waypoint-track-data="{ 'moment_index': 1 }">
            <div class="page-grid">
               <div class="column-lg-6">
                  <h4 class="tp-heading-4 Moments-moment-title">Weddings and Events</h4>
               </div>
            </div>
            <div class="page-grid theme-full-bleed-at-xs">
               <div class="column-lg-6">
                  <category-carousel count="9" responsive-grid="page">
                     <div class="CategoryCarousel">
                        <div class="CategoryCarousel-paddle paddle-left" ng-click="carousel.onClickLeft()">
                           <svg-icon type="left-caret" size="md">
                           </svg-icon>
                        </div>
                        <div class="CategoryCarousel-container">
                           <div class="CategoryCarousel-list">
                            <?php $__currentLoopData = $event; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $evt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-smaller          theme-carousel     "
                                    event-track="moments/click"
                                    event-track-on="click" 
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;Q9sYIW2IZP5AkA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:1,&quot;category_index&quot;:0}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;Q9sYIW2IZP5AkA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:1,&quot;category_index&quot;:0}">
                                    <a class="ServiceBox-item"
                                      onclick="customerQuestion(<?php echo e($evt->id); ?>)" style="text-decoration: none;">
                                    <img src="<?php echo e(URL::to('public/uploads')); ?>/<?php echo e($evt->image); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          <?php echo e($evt->name); ?>

                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                               <?php  

                                 $questionDecode = json_decode($evt->question);
                                 $question = $questionDecode[0]->question;
                                 $count = count($question);

                               ?>
                                 <div class="wizard" id="wizard<?php echo e($evt->id); ?>" dir="rtl">
                                 
                              <?php 
                                 for($i=0;$i<$count;$i++)
                                 {
                                    $singleQuestion = $question[$i]->question;
                                    $questionType = $question[$i]->questionType;
                                    $options = $question[$i]->options;
                                    
                               ?>
                                    <div class='wizard-step' data-title='<?php echo e($evt->name); ?>'>
                                      <?php echo e(csrf_field()); ?>

                                       <input type="hidden" name="serviceId" value="<?php echo e($evt->id); ?>">
                                       <center><h3><?php echo e($singleQuestion); ?></h3></center>
                                       <input type="hidden" name="question[]" value="<?php echo e($singleQuestion); ?>">
                                       <?php if($questionType == 1): ?>
                                       <input type="hidden" name="questionType[]" value="<?php echo e($questionType); ?>">
                                       <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <?php  $random = rand(1,9999999);  ?>
                                       <div class="InputRadio">
                                       <input name="options<?php echo e($i); ?>[]"  value="<?php echo e($opt); ?>" class="ng-scope ng-pristine ng-valid u-visuallyHidden" id="<?php echo e($random); ?>" type="radio"><label class="InputRadio-label" for="<?php echo e($random); ?>"><div class="InputRadio-label-inner ng-scope"><?php echo e($opt); ?></div></label>
                                       </div>
                                       
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                       <?php endif; ?> 
                                       <?php if($questionType == 4): ?>
                                       <input type="hidden" name="questionType[]" value="<?php echo e($questionType); ?>">
                                       <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <?php  $random = rand(1,9999999);  ?>
                                          <div class="InputCheckbox">
                                            <input class="ng-scope ng-valid u-visuallyHidden ng-dirty" id="<?php echo e($random); ?>" type="checkbox" name="options<?php echo e($i); ?>[]" value="<?php echo e($opt); ?>">
                                            <label class="InputCheckbox-label" for="<?php echo e($random); ?>">
                                                <div class="InputCheckbox-label-inner"><?php echo e($opt); ?></div>
                                            </label>
                                        </div>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                       <?php endif; ?>   
                                    </div>
                                   
                                 <?php  }  ?>
                                 </div>
                                 
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           </div>
                        </div>
                        <div class="CategoryCarousel-paddle paddle-right" ng-click="carousel.onClickRight()">
                           <svg-icon type="right-caret" size="md">
                           </svg-icon>
                        </div>
                     </div>
                  </category-carousel>
               </div>
            </div>
         </div>

<script>
   function customerQuestion(id)
   {  
         

       $('#wizard'+id).wizard({
                title: '',
                validators: [{
                    step: 1,
                    validate: function () {
                        
                    }
                }],
                onSubmit: function () {
                  
                    $('<div>onSubmit called</div>').appendTo('#EventLog');
                    $('#wizard'+id).wizard('end', {
                        info: 'this is an info message',
                        warning: 'this is a warning message',
                        success: 'this is a success message',
                        error: 'this is an error message',
                        autoClose: false // close after 5 seconds
                    });
                },
                onReset: function () {
                    $('<div>onReset called</div>').appendTo('#EventLog');
                    $('#TextBox1').val('');
                    $('#TextBox2').val('');
                },
                onCancel: function () {
                  
                    $('<div>onCancel called</div>').appendTo('#EventLog');
                },
                onClose: function () {
                    $('<div>onClose called</div>').appendTo('#EventLog');
                },
                onOpen: function () {
                   var count = $("#wizard"+id+" .modal-dialog").length; 

                    if(count > 1)
                    { 
                   
                    $("#wizard"+id+" .modal-dialog:last").remove();
                    }
                    $('<div>onOpen called</div>').appendTo('#EventLog');
                },
                previousText: 'Back',
                nextText: 'Next',
                submitText: 'Submit',
                showCancel: true,
                showPrevious: true,
                showProgress: true,
                isModal: true,
                autoOpen: false
            });

      $('#wizard'+id).wizard('open');
   }
   </script>
         <div class="Moments-moment" waypoint-track="moments" waypoint-track-data="{ 'moment_index': 2 }">
            <div class="page-grid">
               <div class="column-lg-6">
                  <h4 class="tp-heading-4 Moments-moment-title">Wellness</h4>
               </div>
            </div>
            <div class="page-grid theme-full-bleed-at-xs">
               <div class="column-lg-6">
                  <category-carousel count="8" responsive-grid="page">
                     <div class="CategoryCarousel">
                        <div class="CategoryCarousel-paddle paddle-left" ng-click="carousel.onClickLeft()">
                           <svg-icon type="left-caret" size="md">
                           </svg-icon>
                        </div>
                        <div class="CategoryCarousel-container">
                           <div class="CategoryCarousel-list">
                                  <?php $__currentLoopData = $wellness; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wls): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-smaller          theme-carousel     "
                                    event-track="moments/click"
                                    event-track-on="click" 
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;Q9sYIW2IZP5AkA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:1,&quot;category_index&quot;:0}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;Q9sYIW2IZP5AkA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:1,&quot;category_index&quot;:0}">
                                    <a class="ServiceBox-item"
                                       onclick="customerQuestion(<?php echo e($wls->id); ?>)" style="text-decoration: none;"
                                       >
                                    <img src="<?php echo e(URL::to('public/uploads')); ?>/<?php echo e($wls->image); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                             <?php echo e($wls->name); ?>

                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                               <?php  

                                 $questionDecode = json_decode($wls->question);
                                 $question = $questionDecode[0]->question;
                                 $count = count($question);

                               ?>
                                 <div class="wizard" id="wizard<?php echo e($wls->id); ?>" dir="rtl">
                                 
                              <?php 
                                 for($i=0;$i<$count;$i++)
                                 {
                                    $singleQuestion = $question[$i]->question;
                                    $questionType = $question[$i]->questionType;
                                    $options = $question[$i]->options;
                                    
                               ?>
                                    <div class='wizard-step' data-title='<?php echo e($wls->name); ?>'>
                                      <?php echo e(csrf_field()); ?>

                                       <input type="hidden" name="serviceId" value="<?php echo e($wls->id); ?>">
                                       <center><h3><?php echo e($singleQuestion); ?></h3></center>
                                       <input type="hidden" name="question[]" value="<?php echo e($singleQuestion); ?>">
                                       <?php if($questionType == 1): ?>
                                       <input type="hidden" name="questionType[]" value="<?php echo e($questionType); ?>">
                                       <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <?php  $random = rand(1,9999999);  ?>
                                       <div class="InputRadio">
                                       <input name="options<?php echo e($i); ?>[]"  value="<?php echo e($opt); ?>" class="ng-scope ng-pristine ng-valid u-visuallyHidden" id="<?php echo e($random); ?>" type="radio"><label class="InputRadio-label" for="<?php echo e($random); ?>"><div class="InputRadio-label-inner ng-scope"><?php echo e($opt); ?></div></label>
                                       </div>
                                       
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                       <?php endif; ?> 
                                       <?php if($questionType == 4): ?>
                                       <input type="hidden" name="questionType[]" value="<?php echo e($questionType); ?>">
                                       <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <?php  $random = rand(1,9999999);  ?>
                                          <div class="InputCheckbox">
                                            <input class="ng-scope ng-valid u-visuallyHidden ng-dirty" id="<?php echo e($random); ?>" type="checkbox" name="options<?php echo e($i); ?>[]" value="<?php echo e($opt); ?>">
                                            <label class="InputCheckbox-label" for="<?php echo e($random); ?>">
                                                <div class="InputCheckbox-label-inner"><?php echo e($opt); ?></div>
                                            </label>
                                        </div>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                       <?php endif; ?>   
                                    </div>
                                   
                                 <?php  }  ?>
                                 </div>
                                 
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           </div>
                        </div>
                        <div class="CategoryCarousel-paddle paddle-right" ng-click="carousel.onClickRight()">
                           <svg-icon type="right-caret" size="md">
                           </svg-icon>
                        </div>
                     </div>
                  </category-carousel>
               </div>
            </div>
         </div>
         <div class="Moments-moment" waypoint-track="moments" waypoint-track-data="{ 'moment_index': 3 }">
            <div class="page-grid">
               <div class="column-lg-6">
                  <h4 class="tp-heading-4 Moments-moment-title">Lessons</h4>
               </div>
            </div>
            <div class="page-grid theme-full-bleed-at-xs">
               <div class="column-lg-6">
                  <category-carousel count="8" responsive-grid="page">
                     <div class="CategoryCarousel">
                        <div class="CategoryCarousel-paddle paddle-left" ng-click="carousel.onClickLeft()">
                           <svg-icon type="left-caret" size="md">
                           </svg-icon>
                        </div>
                        <div class="CategoryCarousel-container">
                           <div class="CategoryCarousel-list">
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-smaller          theme-carousel     " event-track="moments/click" event-track-on="click" event-track-data="{&quot;encodedCategoryId&quot;:&quot;6nlpb86x4sELeQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:4,&quot;category_index&quot;:0}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;6nlpb86x4sELeQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:4,&quot;category_index&quot;:0}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('6nlpb86x4sELeQ', 'moments')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Singing Lessons 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-smaller          theme-carousel     " event-track="moments/click" event-track-on="click" event-track-data="{&quot;encodedCategoryId&quot;:&quot;HSN$F3bPaZ1iaw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:4,&quot;category_index&quot;:1}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;HSN$F3bPaZ1iaw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:4,&quot;category_index&quot;:1}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('HSN$F3bPaZ1iaw', 'moments')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Piano Lessons 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-smaller          theme-carousel     " event-track="moments/click" event-track-on="click" event-track-data="{&quot;encodedCategoryId&quot;:&quot;5pHpU4:bB4:CoA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:4,&quot;category_index&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;5pHpU4:bB4:CoA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:4,&quot;category_index&quot;:2}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('5pHpU4:bB4:CoA', 'moments')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Guitar Lessons 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-smaller          theme-carousel     " event-track="moments/click" event-track-on="click" event-track-data="{&quot;encodedCategoryId&quot;:&quot;y80BH6:wWop3uw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:4,&quot;category_index&quot;:3}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;y80BH6:wWop3uw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:4,&quot;category_index&quot;:3}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('y80BH6:wWop3uw', 'moments')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Spanish Lessons 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-smaller          theme-carousel     " event-track="moments/click" event-track-on="click" event-track-data="{&quot;encodedCategoryId&quot;:&quot;XR7tcaO8ju1OWg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:4,&quot;category_index&quot;:4}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;XR7tcaO8ju1OWg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:4,&quot;category_index&quot;:4}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('XR7tcaO8ju1OWg', 'moments')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          CPR Training 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-smaller          theme-carousel     " event-track="moments/click" event-track-on="click" event-track-data="{&quot;encodedCategoryId&quot;:&quot;aHbV4C2Mn$M$bA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:4,&quot;category_index&quot;:5}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;aHbV4C2Mn$M$bA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:4,&quot;category_index&quot;:5}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('aHbV4C2Mn$M$bA', 'moments')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Math Tutoring 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-smaller          theme-carousel     " event-track="moments/click" event-track-on="click" event-track-data="{&quot;encodedCategoryId&quot;:&quot;shmpmFl7uRYmCg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:4,&quot;category_index&quot;:6}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;shmpmFl7uRYmCg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:4,&quot;category_index&quot;:6}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('shmpmFl7uRYmCg', 'moments')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          SAT Tutoring 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-smaller          theme-carousel     " event-track="moments/click" event-track-on="click" event-track-data="{&quot;encodedCategoryId&quot;:&quot;VNuwXawPoFKfrw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:4,&quot;category_index&quot;:7}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;VNuwXawPoFKfrw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:4,&quot;category_index&quot;:7}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('VNuwXawPoFKfrw', 'moments')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          ACT Tutoring 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div class="
                                    ServiceBox-container
                                    theme-smaller          theme-carousel     " event-track="moments/click" event-track-on="click" event-track-data="{&quot;encodedCategoryId&quot;:&quot;6nlpb86x4sELeQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:4,&quot;category_index&quot;:0}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;6nlpb86x4sELeQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:4,&quot;category_index&quot;:0}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('6nlpb86x4sELeQ', 'moments')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Singing Lessons 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div class="
                                    ServiceBox-container
                                    theme-smaller          theme-carousel     " event-track="moments/click" event-track-on="click" event-track-data="{&quot;encodedCategoryId&quot;:&quot;HSN$F3bPaZ1iaw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:4,&quot;category_index&quot;:1}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;HSN$F3bPaZ1iaw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:4,&quot;category_index&quot;:1}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('HSN$F3bPaZ1iaw', 'moments')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Piano Lessons 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div class="
                                    ServiceBox-container
                                    theme-smaller          theme-carousel     " event-track="moments/click" event-track-on="click" event-track-data="{&quot;encodedCategoryId&quot;:&quot;5pHpU4:bB4:CoA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:4,&quot;category_index&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;5pHpU4:bB4:CoA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:4,&quot;category_index&quot;:2}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('5pHpU4:bB4:CoA', 'moments')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Guitar Lessons 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div class="
                                    ServiceBox-container
                                    theme-smaller          theme-carousel     " event-track="moments/click" event-track-on="click" event-track-data="{&quot;encodedCategoryId&quot;:&quot;y80BH6:wWop3uw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:4,&quot;category_index&quot;:3}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;y80BH6:wWop3uw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:4,&quot;category_index&quot;:3}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('y80BH6:wWop3uw', 'moments')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Spanish Lessons 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div class="
                                    ServiceBox-container
                                    theme-smaller          theme-carousel     " event-track="moments/click" event-track-on="click" event-track-data="{&quot;encodedCategoryId&quot;:&quot;XR7tcaO8ju1OWg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:4,&quot;category_index&quot;:4}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;XR7tcaO8ju1OWg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:4,&quot;category_index&quot;:4}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('XR7tcaO8ju1OWg', 'moments')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          CPR Training 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div class="
                                    ServiceBox-container
                                    theme-smaller          theme-carousel     " event-track="moments/click" event-track-on="click" event-track-data="{&quot;encodedCategoryId&quot;:&quot;aHbV4C2Mn$M$bA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:4,&quot;category_index&quot;:5}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;aHbV4C2Mn$M$bA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:4,&quot;category_index&quot;:5}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('aHbV4C2Mn$M$bA', 'moments')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Math Tutoring 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="CategoryCarousel-paddle paddle-right" ng-click="carousel.onClickRight()">
                           <svg-icon type="right-caret" size="md">
                           </svg-icon>
                        </div>
                     </div>
                  </category-carousel>
               </div>
            </div>
         </div>
         <div class="Moments-moment" waypoint-track="moments" waypoint-track-data="{ 'moment_index': 4 }">
            <div class="page-grid">
               <div class="column-lg-6">
                  <h4 class="tp-heading-4 Moments-moment-title">Business</h4>
               </div>
            </div>
            <div class="page-grid theme-full-bleed-at-xs">
               <div class="column-lg-6">
                  <category-carousel count="11" responsive-grid="page">
                     <div class="CategoryCarousel">
                        <div class="CategoryCarousel-paddle paddle-left" ng-click="carousel.onClickLeft()">
                           <svg-icon type="left-caret" size="md">
                           </svg-icon>
                        </div>
                        <div class="CategoryCarousel-container">
                           <div class="CategoryCarousel-list">
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-smaller          theme-carousel     " event-track="moments/click" event-track-on="click" event-track-data="{&quot;encodedCategoryId&quot;:&quot;pcbn2suax8u21g&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:5,&quot;category_index&quot;:0}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;pcbn2suax8u21g&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:5,&quot;category_index&quot;:0}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('pcbn2suax8u21g', 'moments')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Individual Tax Prep 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-smaller          theme-carousel     " event-track="moments/click" event-track-on="click" event-track-data="{&quot;encodedCategoryId&quot;:&quot;Vin8kPc8QyC5KQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:5,&quot;category_index&quot;:1}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;Vin8kPc8QyC5KQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:5,&quot;category_index&quot;:1}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('Vin8kPc8QyC5KQ', 'moments')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Computer Repair 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-smaller          theme-carousel     " event-track="moments/click" event-track-on="click" event-track-data="{&quot;encodedCategoryId&quot;:&quot;8gKdZ6TAfGSwqQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:5,&quot;category_index&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;8gKdZ6TAfGSwqQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:5,&quot;category_index&quot;:2}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('8gKdZ6TAfGSwqQ', 'moments')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Web Design 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-smaller          theme-carousel     " event-track="moments/click" event-track-on="click" event-track-data="{&quot;encodedCategoryId&quot;:&quot;$1T:O2j8Jlm4qg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:5,&quot;category_index&quot;:3}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;$1T:O2j8Jlm4qg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:5,&quot;category_index&quot;:3}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('$1T:O2j8Jlm4qg', 'moments')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Logo Design 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-smaller          theme-carousel     " event-track="moments/click" event-track-on="click" event-track-data="{&quot;encodedCategoryId&quot;:&quot;:MbpJOOxJsNvvQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:5,&quot;category_index&quot;:4}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;:MbpJOOxJsNvvQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:5,&quot;category_index&quot;:4}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId(':MbpJOOxJsNvvQ', 'moments')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Accounting 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-smaller          theme-carousel     " event-track="moments/click" event-track-on="click" event-track-data="{&quot;encodedCategoryId&quot;:&quot;1rUiax5MEKgM6g&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:5,&quot;category_index&quot;:5}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;1rUiax5MEKgM6g&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:5,&quot;category_index&quot;:5}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('1rUiax5MEKgM6g', 'moments')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Administrative Support 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-smaller          theme-carousel     " event-track="moments/click" event-track-on="click" event-track-data="{&quot;encodedCategoryId&quot;:&quot;8XpwA3Pb$A$QZA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:5,&quot;category_index&quot;:6}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;8XpwA3Pb$A$QZA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:5,&quot;category_index&quot;:6}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('8XpwA3Pb$A$QZA', 'moments')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Marketing 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-smaller          theme-carousel     " event-track="moments/click" event-track-on="click" event-track-data="{&quot;encodedCategoryId&quot;:&quot;KQB6t9KEUcQKDg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:5,&quot;category_index&quot;:7}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;KQB6t9KEUcQKDg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:5,&quot;category_index&quot;:7}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('KQB6t9KEUcQKDg', 'moments')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Search Engine Optimization 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-smaller          theme-carousel     " event-track="moments/click" event-track-on="click" event-track-data="{&quot;encodedCategoryId&quot;:&quot;eWIYfaqxGyd63w&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:5,&quot;category_index&quot;:8}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;eWIYfaqxGyd63w&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:5,&quot;category_index&quot;:8}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('eWIYfaqxGyd63w', 'moments')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Social Media Marketing 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-smaller          theme-carousel     " event-track="moments/click" event-track-on="click" event-track-data="{&quot;encodedCategoryId&quot;:&quot;8GFOthNjZmavXQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:5,&quot;category_index&quot;:9}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;8GFOthNjZmavXQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:5,&quot;category_index&quot;:9}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('8GFOthNjZmavXQ', 'moments')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Business Consulting 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-smaller          theme-carousel     " event-track="moments/click" event-track-on="click" event-track-data="{&quot;encodedCategoryId&quot;:&quot;giwGb4fVT5SXwg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:5,&quot;category_index&quot;:10}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;giwGb4fVT5SXwg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:5,&quot;category_index&quot;:10}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('giwGb4fVT5SXwg', 'moments')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Life Coaching 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div class="
                                    ServiceBox-container
                                    theme-smaller          theme-carousel     " event-track="moments/click" event-track-on="click" event-track-data="{&quot;encodedCategoryId&quot;:&quot;pcbn2suax8u21g&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:5,&quot;category_index&quot;:0}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;pcbn2suax8u21g&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:5,&quot;category_index&quot;:0}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('pcbn2suax8u21g', 'moments')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Individual Tax Prep 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div class="
                                    ServiceBox-container
                                    theme-smaller          theme-carousel     " event-track="moments/click" event-track-on="click" event-track-data="{&quot;encodedCategoryId&quot;:&quot;Vin8kPc8QyC5KQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:5,&quot;category_index&quot;:1}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;Vin8kPc8QyC5KQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:5,&quot;category_index&quot;:1}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('Vin8kPc8QyC5KQ', 'moments')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Computer Repair 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div class="
                                    ServiceBox-container
                                    theme-smaller          theme-carousel     " event-track="moments/click" event-track-on="click" event-track-data="{&quot;encodedCategoryId&quot;:&quot;8gKdZ6TAfGSwqQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:5,&quot;category_index&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;8gKdZ6TAfGSwqQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:5,&quot;category_index&quot;:2}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('8gKdZ6TAfGSwqQ', 'moments')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Web Design 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div class="
                                    ServiceBox-container
                                    theme-smaller          theme-carousel     " event-track="moments/click" event-track-on="click" event-track-data="{&quot;encodedCategoryId&quot;:&quot;$1T:O2j8Jlm4qg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:5,&quot;category_index&quot;:3}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;$1T:O2j8Jlm4qg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:5,&quot;category_index&quot;:3}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('$1T:O2j8Jlm4qg', 'moments')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Logo Design 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div class="
                                    ServiceBox-container
                                    theme-smaller          theme-carousel     " event-track="moments/click" event-track-on="click" event-track-data="{&quot;encodedCategoryId&quot;:&quot;:MbpJOOxJsNvvQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:5,&quot;category_index&quot;:4}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;:MbpJOOxJsNvvQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:5,&quot;category_index&quot;:4}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId(':MbpJOOxJsNvvQ', 'moments')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Accounting 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div class="
                                    ServiceBox-container
                                    theme-smaller          theme-carousel     " event-track="moments/click" event-track-on="click" event-track-data="{&quot;encodedCategoryId&quot;:&quot;1rUiax5MEKgM6g&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:5,&quot;category_index&quot;:5}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;1rUiax5MEKgM6g&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:5,&quot;category_index&quot;:5}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('1rUiax5MEKgM6g', 'moments')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Administrative Support 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="CategoryCarousel-paddle paddle-right" ng-click="carousel.onClickRight()">
                           <svg-icon type="right-caret" size="md">
                           </svg-icon>
                        </div>
                     </div>
                  </category-carousel>
               </div>
            </div>
         </div>
         <div class="Moments-moment" waypoint-track="moments" waypoint-track-data="{ 'moment_index': 5 }">
            <div class="page-grid">
               <div class="column-lg-6">
                  <h4 class="tp-heading-4 Moments-moment-title">Pets</h4>
               </div>
            </div>
            <div class="page-grid theme-full-bleed-at-xs">
               <div class="column-lg-6">
                  <category-carousel count="5" responsive-grid="page">
                     <div class="CategoryCarousel">
                        <div class="CategoryCarousel-paddle paddle-left" ng-click="carousel.onClickLeft()">
                           <svg-icon type="left-caret" size="md">
                           </svg-icon>
                        </div>
                        <div class="CategoryCarousel-container">
                           <div class="CategoryCarousel-list">
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-smaller          theme-carousel     " event-track="moments/click" event-track-on="click" event-track-data="{&quot;encodedCategoryId&quot;:&quot;GTdkGWTMaOx4Wg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:6,&quot;category_index&quot;:0}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;GTdkGWTMaOx4Wg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:6,&quot;category_index&quot;:0}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('GTdkGWTMaOx4Wg', 'moments')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Dog Training 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-smaller          theme-carousel     " event-track="moments/click" event-track-on="click" event-track-data="{&quot;encodedCategoryId&quot;:&quot;Lqp0YedXcpW7hw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:6,&quot;category_index&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;Lqp0YedXcpW7hw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:6,&quot;category_index&quot;:2}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('Lqp0YedXcpW7hw', 'moments')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Dog Sitting 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-smaller          theme-carousel     " event-track="moments/click" event-track-on="click" event-track-data="{&quot;encodedCategoryId&quot;:&quot;JASApCW9DHdI:w&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:6,&quot;category_index&quot;:3}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;JASApCW9DHdI:w&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:6,&quot;category_index&quot;:3}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('JASApCW9DHdI:w', 'moments')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Cat Sitting 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-smaller          theme-carousel     " event-track="moments/click" event-track-on="click" event-track-data="{&quot;encodedCategoryId&quot;:&quot;FBezlgsbZzMVDw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:7,&quot;category_index&quot;:4}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;FBezlgsbZzMVDw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:7,&quot;category_index&quot;:4}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('FBezlgsbZzMVDw', 'moments')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Dog Walking 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="
                                    ServiceBox-container
                                    theme-smaller          theme-carousel     " event-track="moments/click" event-track-on="click" event-track-data="{&quot;encodedCategoryId&quot;:&quot;oBbEKZglfn$eJQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:7,&quot;category_index&quot;:5}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;oBbEKZglfn$eJQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:7,&quot;category_index&quot;:5}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('oBbEKZglfn$eJQ', 'moments')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Pet Sitting 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div class="
                                    ServiceBox-container
                                    theme-smaller          theme-carousel     " event-track="moments/click" event-track-on="click" event-track-data="{&quot;encodedCategoryId&quot;:&quot;GTdkGWTMaOx4Wg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:6,&quot;category_index&quot;:0}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;GTdkGWTMaOx4Wg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:6,&quot;category_index&quot;:0}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('GTdkGWTMaOx4Wg', 'moments')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Dog Training 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div class="
                                    ServiceBox-container
                                    theme-smaller          theme-carousel     " event-track="moments/click" event-track-on="click" event-track-data="{&quot;encodedCategoryId&quot;:&quot;Lqp0YedXcpW7hw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:6,&quot;category_index&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;Lqp0YedXcpW7hw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:6,&quot;category_index&quot;:2}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('Lqp0YedXcpW7hw', 'moments')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Dog Sitting 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div class="
                                    ServiceBox-container
                                    theme-smaller          theme-carousel     " event-track="moments/click" event-track-on="click" event-track-data="{&quot;encodedCategoryId&quot;:&quot;JASApCW9DHdI:w&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:6,&quot;category_index&quot;:3}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;JASApCW9DHdI:w&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:6,&quot;category_index&quot;:3}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('JASApCW9DHdI:w', 'moments')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Cat Sitting 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div class="
                                    ServiceBox-container
                                    theme-smaller          theme-carousel     " event-track="moments/click" event-track-on="click" event-track-data="{&quot;encodedCategoryId&quot;:&quot;FBezlgsbZzMVDw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:7,&quot;category_index&quot;:4}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;FBezlgsbZzMVDw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:7,&quot;category_index&quot;:4}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('FBezlgsbZzMVDw', 'moments')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Dog Walking 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div class="
                                    ServiceBox-container
                                    theme-smaller          theme-carousel     " event-track="moments/click" event-track-on="click" event-track-data="{&quot;encodedCategoryId&quot;:&quot;oBbEKZglfn$eJQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:7,&quot;category_index&quot;:5}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;oBbEKZglfn$eJQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;moments&quot;,&quot;moment_index&quot;:7,&quot;category_index&quot;:5}">
                                    <a class="ServiceBox-item" open-request-form-modal ng-click="openModalWithCategoryId('oBbEKZglfn$eJQ', 'moments')">
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Pet Sitting 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="CategoryCarousel-paddle paddle-right" ng-click="carousel.onClickRight()">
                           <svg-icon type="right-caret" size="md">
                           </svg-icon>
                        </div>
                     </div>

                  </category-carousel>
               </div>
            </div>
         </div>
      </div>
   </div>

   <category-nav>
      <div class="CategoryNavV2  theme-explore ">
         <div class="page-grid">
            <div class="column-lg-6" dir="rtl">
               <h4 class="H4-R CategoryNavV2-title">All Services</h4>
            </div>
         </div>
         <div class="page-grid CategoryNavV2-categoryContainer">
            <div class="column-lg-1 column-md-2 column-sm-2 column-xs-6 CategoryNavV2-category">
               <a class="CategoryNavV2-category-link" href="<?php echo e(URL::to('homeImprovement')); ?>">
                  <div class="CategoryNavV2-category-link-logo" responsive-if="above-xs" responsive-grid="page">
                     <svg-icon type="category-group--home-improvement" size="lg"></svg-icon>
                  </div>
                  <div class="CategoryNavV2-category-link-logo" responsive-if="below-xs" responsive-grid="page">
                     <svg-icon type="category-group--home-improvement" size="md"></svg-icon>
                  </div>
                  <span class="CategoryNavV2-category-link-label">Home Improvement</span>
                  <div class="CategoryNavV2-category-link-expand" responsive-if="below-xs" responsive-grid="page">
                     <svg-icon type="right-caret2" size="md"></svg-icon>
                  </div>
               </a>
            </div>
            <div class="column-lg-1 column-md-2 column-sm-2 column-xs-6 CategoryNavV2-category">
               <a class="CategoryNavV2-category-link" href="<?php echo e(URL::to('events')); ?>">
                  <div class="CategoryNavV2-category-link-logo" responsive-if="above-xs" responsive-grid="page">
                     <svg-icon type="category-group--events" size="lg"></svg-icon>
                  </div>
                  <div class="CategoryNavV2-category-link-logo" responsive-if="below-xs" responsive-grid="page">
                     <svg-icon type="category-group--events" size="md"></svg-icon>
                  </div>
                  <span class="CategoryNavV2-category-link-label">Events</span>
                  <div class="CategoryNavV2-category-link-expand" responsive-if="below-xs" responsive-grid="page">
                     <svg-icon type="right-caret2" size="md"></svg-icon>
                  </div>
               </a>
            </div>
            <div class="column-lg-1 column-md-2 column-sm-2 column-xs-6 CategoryNavV2-category">
               <a class="CategoryNavV2-category-link" href="<?php echo e(URL::to('lessons')); ?>">
                  <div class="CategoryNavV2-category-link-logo" responsive-if="above-xs" responsive-grid="page">
                     <svg-icon type="category-group--lessons" size="lg"></svg-icon>
                  </div>
                  <div class="CategoryNavV2-category-link-logo" responsive-if="below-xs" responsive-grid="page">
                     <svg-icon type="category-group--lessons" size="md"></svg-icon>
                  </div>
                  <span class="CategoryNavV2-category-link-label">Lessons</span>
                  <div class="CategoryNavV2-category-link-expand" responsive-if="below-xs" responsive-grid="page">
                     <svg-icon type="right-caret2" size="md"></svg-icon>
                  </div>
               </a>
            </div>
            <div class="column-lg-1 column-md-2 column-sm-2 column-xs-6 CategoryNavV2-category">
               <a class="CategoryNavV2-category-link" href="<?php echo e(URL::to('wellness')); ?>">
                  <div class="CategoryNavV2-category-link-logo" responsive-if="above-xs" responsive-grid="page">
                     <svg-icon type="category-group--wellness" size="lg"></svg-icon>
                  </div>
                  <div class="CategoryNavV2-category-link-logo" responsive-if="below-xs" responsive-grid="page">
                     <svg-icon type="category-group--wellness" size="md"></svg-icon>
                  </div>
                  <span class="CategoryNavV2-category-link-label">Wellness</span>
                  <div class="CategoryNavV2-category-link-expand" responsive-if="below-xs" responsive-grid="page">
                     <svg-icon type="right-caret2" size="md"></svg-icon>
                  </div>
               </a>
            </div>
            <div class="column-lg-1 column-md-2 column-sm-2 column-xs-6 CategoryNavV2-category">
               <a class="CategoryNavV2-category-link" href="/more-services#category-group-business">
                  <div class="CategoryNavV2-category-link-logo" responsive-if="above-xs" responsive-grid="page">
                     <svg-icon type="category-group--business" size="lg"></svg-icon>
                  </div>
                  <div class="CategoryNavV2-category-link-logo" responsive-if="below-xs" responsive-grid="page">
                     <svg-icon type="category-group--business" size="md"></svg-icon>
                  </div>
                  <span class="CategoryNavV2-category-link-label">Business</span>
                  <div class="CategoryNavV2-category-link-expand" responsive-if="below-xs" responsive-grid="page">
                     <svg-icon type="right-caret2" size="md"></svg-icon>
                  </div>
               </a>
            </div>
            <div class="column-lg-1 column-md-2 column-sm-2 column-xs-6 CategoryNavV2-category">
               <a class="CategoryNavV2-category-link" href="/more-services#category-group-crafts">
                  <div class="CategoryNavV2-category-link-logo" responsive-if="above-xs" responsive-grid="page">
                     <svg-icon type="category-group--crafts" size="lg"></svg-icon>
                  </div>
                  <div class="CategoryNavV2-category-link-logo" responsive-if="below-xs" responsive-grid="page">
                     <svg-icon type="category-group--crafts" size="md"></svg-icon>
                  </div>
                  <span class="CategoryNavV2-category-link-label">Crafts</span>
                  <div class="CategoryNavV2-category-link-expand" responsive-if="below-xs" responsive-grid="page">
                     <svg-icon type="right-caret2" size="md"></svg-icon>
                  </div>
               </a>
            </div>
            <div class="column-lg-1 column-md-2 column-sm-2 column-xs-6 CategoryNavV2-category">
               <a class="CategoryNavV2-category-link" href="/more-services#category-group-designWeb">
                  <div class="CategoryNavV2-category-link-logo" responsive-if="above-xs" responsive-grid="page">
                     <svg-icon type="category-group--design-and-web" size="lg"></svg-icon>
                  </div>
                  <div class="CategoryNavV2-category-link-logo" responsive-if="below-xs" responsive-grid="page">
                     <svg-icon type="category-group--design-and-web" size="md"></svg-icon>
                  </div>
                  <span class="CategoryNavV2-category-link-label">Design &amp; Web</span>
                  <div class="CategoryNavV2-category-link-expand" responsive-if="below-xs" responsive-grid="page">
                     <svg-icon type="right-caret2" size="md"></svg-icon>
                  </div>
               </a>
            </div>
            <div class="column-lg-1 column-md-2 column-sm-2 column-xs-6 CategoryNavV2-category">
               <a class="CategoryNavV2-category-link" href="/more-services#category-group-legal">
                  <div class="CategoryNavV2-category-link-logo" responsive-if="above-xs" responsive-grid="page">
                     <svg-icon type="category-group--legal" size="lg"></svg-icon>
                  </div>
                  <div class="CategoryNavV2-category-link-logo" responsive-if="below-xs" responsive-grid="page">
                     <svg-icon type="category-group--legal" size="md"></svg-icon>
                  </div>
                  <span class="CategoryNavV2-category-link-label">Legal</span>
                  <div class="CategoryNavV2-category-link-expand" responsive-if="below-xs" responsive-grid="page">
                     <svg-icon type="right-caret2" size="md"></svg-icon>
                  </div>
               </a>
            </div>
            <div class="column-lg-1 column-md-2 column-sm-2 column-xs-6 CategoryNavV2-category">
               <a class="CategoryNavV2-category-link" href="/more-services#category-group-personal">
                  <div class="CategoryNavV2-category-link-logo" responsive-if="above-xs" responsive-grid="page">
                     <svg-icon type="category-group--personal" size="lg"></svg-icon>
                  </div>
                  <div class="CategoryNavV2-category-link-logo" responsive-if="below-xs" responsive-grid="page">
                     <svg-icon type="category-group--personal" size="md"></svg-icon>
                  </div>
                  <span class="CategoryNavV2-category-link-label">Personal</span>
                  <div class="CategoryNavV2-category-link-expand" responsive-if="below-xs" responsive-grid="page">
                     <svg-icon type="right-caret2" size="md"></svg-icon>
                  </div>
               </a>
            </div>
            <div class="column-lg-1 column-md-2 column-sm-2 column-xs-6 CategoryNavV2-category">
               <a class="CategoryNavV2-category-link" href="/more-services#category-group-pets">
                  <div class="CategoryNavV2-category-link-logo" responsive-if="above-xs" responsive-grid="page">
                     <svg-icon type="category-group--pets" size="lg"></svg-icon>
                  </div>
                  <div class="CategoryNavV2-category-link-logo" responsive-if="below-xs" responsive-grid="page">
                     <svg-icon type="category-group--pets" size="md"></svg-icon>
                  </div>
                  <span class="CategoryNavV2-category-link-label">Pets</span>
                  <div class="CategoryNavV2-category-link-expand" responsive-if="below-xs" responsive-grid="page">
                     <svg-icon type="right-caret2" size="md"></svg-icon>
                  </div>
               </a>
            </div>
            <div class="column-lg-1 column-md-2 column-sm-2 column-xs-6 CategoryNavV2-category">
               <a class="CategoryNavV2-category-link" href="/more-services#category-group-photography">
                  <div class="CategoryNavV2-category-link-logo" responsive-if="above-xs" responsive-grid="page">
                     <svg-icon type="category-group--photography" size="lg"></svg-icon>
                  </div>
                  <div class="CategoryNavV2-category-link-logo" responsive-if="below-xs" responsive-grid="page">
                     <svg-icon type="category-group--photography" size="md"></svg-icon>
                  </div>
                  <span class="CategoryNavV2-category-link-label">Photography</span>
                  <div class="CategoryNavV2-category-link-expand" responsive-if="below-xs" responsive-grid="page">
                     <svg-icon type="right-caret2" size="md"></svg-icon>
                  </div>
               </a>
            </div>
            <div class="column-lg-1 column-md-2 column-sm-2 column-xs-6 CategoryNavV2-category">
               <a class="CategoryNavV2-category-link" href="/more-services#category-group-repairSupport">
                  <div class="CategoryNavV2-category-link-logo" responsive-if="above-xs" responsive-grid="page">
                     <svg-icon type="category-group--tech-repair" size="lg"></svg-icon>
                  </div>
                  <div class="CategoryNavV2-category-link-logo" responsive-if="below-xs" responsive-grid="page">
                     <svg-icon type="category-group--tech-repair" size="md"></svg-icon>
                  </div>
                  <span class="CategoryNavV2-category-link-label">Tech Repair</span>
                  <div class="CategoryNavV2-category-link-expand" responsive-if="below-xs" responsive-grid="page">
                     <svg-icon type="right-caret2" size="md"></svg-icon>
                  </div>
               </a>
            </div>
            <div class="column-lg-1 column-md-2 column-sm-2 column-xs-6 CategoryNavV2-category" responsive-if="below-xs" responsive-grid="page">
               <a class="CategoryNavV2-category-link" href="/more-services#category-group-writingTranslation">
                  <div class="CategoryNavV2-category-link-logo" responsive-if="above-xs" responsive-grid="page">
                     <svg-icon type="category-group--translation" size="lg"></svg-icon>
                  </div>
                  <div class="CategoryNavV2-category-link-logo" responsive-if="below-xs" responsive-grid="page">
                     <svg-icon type="category-group--translation" size="md"></svg-icon>
                  </div>
                  <span class="CategoryNavV2-category-link-label">Writing, transaction and transcription</span>
                  <div class="CategoryNavV2-category-link-expand" responsive-if="below-xs" responsive-grid="page">
                     <svg-icon type="right-caret2" size="md"></svg-icon>
                  </div>
               </a>
            </div>
         </div>
         <span class="T2-S" responsive-if="above-xs" responsive-grid="page">
         <a class="CategoryNavV2-category-moreLink" href="<?php echo e(URL::to('moreServices')); ?>">
         See more services
         </a>
         </span>
      </div>
   </category-nav>
   <div class="HowTTWorks theme-explore">
      <div class="page-grid">
         <div class="column-lg-6">
            <h4 class="H4-R HowTTWorks-title theme-explore">How Thumbtack works</h4>
         </div>
      </div>
      <div class="page-grid">
         <div class="column-lg-2">
            <div class="HowTTWorks-step">
               <div class="HowTTWorks-circle">
                  <svg-icon type="how-tt-works-pencil_36x36">
                  </svg-icon>
               </div>
               <div class="HowTTWorks-explanation">
                  <h2 class="T2-S">Answer a few questions</h2>
                  <p class="B3-S">
                     Tell us what you need so we can bring you the right pros.
                  </p>
               </div>
            </div>
         </div>
         <div class="column-lg-2">
            <div class="HowTTWorks-step">
               <div class="HowTTWorks-circle">
                  <svg-icon type="how-tt-works-quote_36x36">
                  </svg-icon>
               </div>
               <div class="HowTTWorks-explanation">
                  <h2 class="T2-S">Get quotes</h2>
                  <p class="B3-S">
                     Receive up to five quotes from pros who meet your needs.
                  </p>
               </div>
            </div>
         </div>
         <div class="column-lg-2">
            <div class="HowTTWorks-step">
               <div class="HowTTWorks-circle">
                  <svg-icon type="how-tt-works-avatar_36x36">
                  </svg-icon>
               </div>
               <div class="HowTTWorks-explanation">
                  <h2 class="T2-S">Hire the right pro</h2>
                  <p class="B3-S">
                     Compare quotes, message pros, and hire when ready.
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<script id="template-request-form-section-header" type="text/template">
   <div class="page-grid">
       <div class="column-lg-4 column-lg-offset-1">
           <div class="RequestForm-sectionHeader
                   " ng-class="[
                   (isBrandedScreen
                       ? 'theme-left-aligned' : ''),
                   (isThemeSmaller ? 'theme-smaller' : ''),
                   (isThemeNarrower ? 'theme-narrower' : ''),
                   (isThemeHigher ? 'theme-higher' : ''),
                   (experimentalSpecificPro ? 'theme-specific-pro-experimental' : ''),
                   (themeTitleAlone ?
                                                   'theme-title-alone'
                                               : '')
               ]">
               <span tabindex="0" ng-transclude ng-class="[
                       (isBrandedScreen
                           ? 'theme-inverted H3-R theme-bold theme-title-branded' : 'H4-R')
                   ]"></span>
           </div>
       </div>
   </div>
</script>
<script id="template-request-form-hercule" type="text/template">
   <form ng-submit="deepValidate()
           ? requestForm.updateCategoriesFromQuery(rfHerculeModel.chosenCategory)
           : false" schema="rfHerculeSchema" schema-assign="EmptySchema" schema-yields="rfHerculeModel">
   
       <request-form-template template-id="template-request-form-section-header">
           What are you looking for?
   
           <div ng-if="!$question.field.required" class="T3-S">
               From house painting to personal training, we bring you the right pros for every project on your list.
           </div>
       </request-form-template>
   
       <div class="page-grid">
           <div class="column-lg-6">
               <span search-form class="SearchForm" schema="rfHerculeSchema.chosenCategory" schema-assign="TextInputSchema">
   
                   <input class="query"
                       autocomplete="off"
                       placeholder="What services do you need?"
                       type="text"
                       ng-model="rfHerculeModel.chosenCategory" />
               </span>
           </div>
       </div>
   
       <div class="T3-S RequestForm-error " ng-repeat="$err in $validationErrors" ng-bind="$err">
       </div>
   
       <request-form-template template-id="template-request-form-navigation" scope-vars="hideBack,continueText" hide-back="true" continue-text="'Get started'">
       </request-form-template>
   </form>
</script>
<script id="template-request-form-no-results" type="text/template">
   <form closes-modal-on-submit>
       <request-form-template template-id="template-request-form-section-header">
           We're sorry, no categories matched that query.
           <p>Please try again.</p>
       </request-form-template>
   
       <div class="page-grid">
           <div class="column-lg-6">
   
               <p class="B2-R RequestForm-noResultsMessage">
                   Or, browse categories in
                   <a href="/events">events</a>,
                   <a href="/home-improvement">home</a>,
                   <a href="/lessons">lessons</a>,
                   <a href="/wellness">wellness</a>, and
                   <a href="/more-services">more</a>.
               </p>
           </div>
       </div>
   
       <request-form-template template-id="template-request-form-navigation" scope-vars="hideBack,continueText" hide-back="true" continue-text="'Close'">
       </request-form-template>
   </form>
</script>
<script id="template-request-category-tooltip" type="text/template">
   <div class="RequestForm-categoryInfoBox B3-S">
       <p class="RequestForm-categoryInfoBox-action Link" ng-hide="categoryInfoBoxOpen" ng-click="categoryInfoBoxOpen = true" event-track="request form/click open tooltip" event-track-on="click" ng-init="tooltipIconIsHovered=false" ng-mouseover="tooltipIconIsHovered=true" ng-mouseleave="tooltipIconIsHovered=false">
   
           <span class="TooltipIcon RequestForm-categoryInfoBox-action-icon theme-darker-gray" ng-class="{ 'is-hovered': tooltipIconIsHovered }">
           </span>
           <span class="RequestForm-categoryInfoBox-action-text"> More info</span>
       </p>
   
       <div class="RequestForm-categoryInfoBox-container" ng-show="categoryInfoBoxOpen">
           <div class="RequestForm-categoryInfoBox-container-closeButton" ng-click="categoryInfoBoxOpen = false">
   
               <svg-icon type="close2" size="sm"></svg-icon>
           </div>
   
           <div ng-transclude></div>
       </div>
   </div>
</script>
<script id="template-hire-a-specific-pro-header" type="text/template">
   <div ng-if="requestForm.serviceData" class="RequestForm-proTout-experimentalDesign
           ">
       <div class="page-grid">
           <div class="column-lg-4 column-lg-offset-1" ng-class="{'no-photo': !requestForm.serviceData.profile_picture}">
   
               <div class="RequestForm-proTout-experimentalDesign-content">
                   <img class="RequestForm-proTout-experimentalDesign-image" ng-if="requestForm.serviceData.profile_picture" ng-src="{[{ requestForm.serviceData.profile_picture }]}" />
   
                   <h3 class="RequestForm-proTout-experimentalDesign-text B3-S">
                       <span class="RequestForm-proTout-experimentalDesign-businessName">
                           {[{ requestForm.serviceData.display_name }]}
                       </span>
                       needs a few details to send you a cost estimate.
                   </h3>
               </div>
           </div>
       </div>
   </div>
   <div ng-if="requestForm.serviceData" class="RequestForm-proTout-experimentalDesign-border"></div>
</script>
<script id="template-request-category-chooser-radio" type="text/template">
   <form ng-if="categories.length > 0" event-track="request form/view category chooser" event-track-on-init event-track-data="trackingData.viewCategoryChooser()" ng-init="chooserState = { showCount: 13 }" ng-submit="deepValidate()
           ? setCategory($chosenCategory.value)
           : false" schema="chooserSchema" schema-assign="ObjectValueKeySchema" schema-yields="$chosenCategory" schema-cache-id="request-form-category-chooser">
   
       <request-form-template template-id="template-hire-a-specific-pro-header">
       </request-form-template>
   
       <request-form-template template-id="template-request-form-section-header" scope-vars="isThemeSmaller" is-theme-smaller="true" scope-vars="experimentalSpecificPro" experimental-specific-pro="!!requestForm.serviceData">
   
           Which service are you interested in?
       </request-form-template>
   
       <request-form-template template-id="template-request-category-tooltip" scope-vars="tooltipIsOn" tooltip-is-on="true">
   
           <div ng-repeat="category in categories | limitTo: chooserState.showCount" ng-show="category.category_description">
   
               <h4 class="T2-S RequestForm-categoryInfoBox-category-title">
                   {[{ category.name }]}
               </h4>
               <p class="B2-S RequestForm-categoryInfoBox-category-description">
                   {[{ category.category_description }]}
               </p>
           </div>
       </request-form-template>
   
       <div id="category-chooser" ng-class="{'valid': $valid, 'invalid': $valid === false}">
   
           <!-- NOTE: This mostly duplicates the section below but is used for customer categories
                The section below can be removed once we're fully migrated to customer categories
           -->
           <div ng-if="requestForm.getCustomerCategoryCount() > 0" ng-repeat="category in requestForm.customerCategories
                   | limitTo: chooserState.showCount" class="InputContainer">
   
               <div class="page-grid">
                   <div class="column-lg-6">
                       <input-radio input-radio-label="{[{ category.cca_title }]}">
   
                           <input name="category-chooser" value="{[{ category.cca_customer_category_pk }]}" ng-model="$parent.$parent.$parent.$chosenCategory.value" type="radio">
                       </input-radio>
                   </div>
               </div>
           </div>
   
           <!-- Note: This section is duplicated above. Make sure you test both sections if you're
                running conversion tests on this
            -->
           <div ng-if="requestForm.getCustomerCategoryCount() === 0" ng-repeat="category in categories | limitTo: chooserState.showCount" class="InputContainer">
   
               <div class="page-grid">
                   <div class="column-lg-6">
                       <input-radio input-radio-label="{[{ category.name }]}">
   
                           <input name="category-chooser" value="{[{ category.id }]}" ng-model="$parent.$parent.$parent.$chosenCategory.value" type="radio">
                       </input-radio>
                   </div>
               </div>
           </div>
   
           <div class="T3-S RequestForm-error " ng-repeat="$err in $validationErrors" ng-bind="$err">
           </div>
   
           <div ng-if="chooserState.showCount < categories.length
                   || chooserState.showCount < requestForm.getCustomerCategoryCount()" class="RequestForm-chooserShowMore">
   
               <button class="Link" ng-click="chooserState.showCount = chooserState.showCount + 10">
   
                   (Show more)
               </button>
           </div>
       </div>
   
       <request-form-template template-id="template-request-form-navigation" scope-vars="hideBack" hide-back="true">
       </request-form-template>
   </form>
</script>
<script id="template-request-question-checkbox" type="text/template">
   <div schema="requestFormSchema.questions[$qID].selection" schema-assign="CheckboxArrayInputSchema" schema-optional-if="!question.field.required" ng-init="$qID = question.field.id" ng-class="{'valid': $valid, 'invalid': $valid === false}">
   
       <div ng-repeat="answer in question.field.possible_values" ng-init="$value = '' + answer.value" class="InputContainer">
   
           <div class="page-grid">
               <div class="column-lg-6">
                   <div ng-if="!answer.can_describe">
                       <input-checkbox input-checkbox-label="{[{ answer.label }]}">
   
                           <input name="{[{ requestForm.getQuestionName($qID) }]}" ng-model="$model.questions[$qID].selection[$value]" value="{[{ $value }]}" type="checkbox">
                       </input-checkbox>
                   </div>
   
                   <div ng-if="answer.can_describe" choice-other>
                       <input-checkbox>
                           <input name="{[{ requestForm.getQuestionName($qID) }]}" id="{[{ $qID }]}_{[{ $value }]}" ng-model="$model.questions[$qID].selection[$value]" value="{[{ $value }]}" type="checkbox">
   
                           <label for="{[{ $qID }]}_{[{ $value }]}" class="InputCheckbox-label">
   
                               <input schema="
                                       requestFormSchema.questions[$qID][$value + '_description']" schema-assign="TextInputSchema" schema-optional-if="!$model.questions[$qID].selection[$value]" ng-model="$model.questions[$qID][$value + '_description']" name="metadata_{[{ $qID }]}_descriptions[{[{ $value }]}]" type="text" ng-focus="bottomInputFocus()" ng-blur="bottomInputBlur()" placeholder="{[{ answer.label }]}" class="InputCheckbox-label-inner">
                           </label>
                       </input-checkbox>
                   </div>
               </div>
           </div>
       </div>
   </div>
   
   <div class="T3-S RequestForm-error " ng-repeat="$err in $validationErrors" ng-bind="$err">
   </div>
</script>
<script id="template-request-question-radio" type="text/template">
   <div schema="requestFormSchema.questions[$qID].selection" schema-assign="ObjectValueKeySchema" schema-optional-if="!question.field.required" ng-init="$qID = question.field.id" ng-class="{'valid': $valid, 'invalid': $valid === false}">
   
       <div ng-repeat="answer in question.field.possible_values" ng-init="$value = '' + answer.value" class="InputContainer">
   
           <div class="page-grid">
               <div class="column-lg-6">
                   <div ng-if="!answer.can_describe">
                       <input-radio input-radio-label="{[{ answer.label }]}">
   
                           <input name="{[{ requestForm.getQuestionName($qID) }]}" ng-model="$model.questions[$qID].selection.value" value="{[{ $value }]}" type="radio" />
                       </input-radio>
                   </div>
   
                   <div ng-if="answer.can_describe" choice-other>
                       <input-radio>
                           <input name="{[{ requestForm.getQuestionName($qID) }]}" id="{[{ $qID }]}_{[{ $value }]}" ng-model="$model.questions[$qID].selection.value" value="{[{ $value }]}" type="radio" />
   
                           <label for="{[{ $qID }]}_{[{ $value }]}" class="InputRadio-label">
   
                               <input schema="
                                       requestFormSchema.questions[$qID][$value + '_description']" schema-assign="TextInputSchema" schema-optional-if="$model.questions[$qID].selection.value !==
                                       $value" ng-model="$model.questions[$qID][$value + '_description']" name="metadata_{[{ $qID }]}_descriptions[{[{ $value }]}]" type="text" ng-focus="bottomInputFocus()" ng-blur="bottomInputBlur()" placeholder="{[{ answer.label }]}" />
                           </label>
                       </input-radio>
                   </div>
               </div>
           </div>
       </div>
   </div>
   
   <div class="T3-S RequestForm-error " ng-repeat="$err in $validationErrors" ng-bind="$err">
   </div>
</script>
<script id="template-request-question-visual-checkbox" type="text/template">
   <div schema="requestFormSchema.questions[$qID].selection" schema-assign="CheckboxArrayInputSchema" schema-optional-if="!question.field.required" ng-init="$qID = question.field.id" ng-class="{'valid': $valid, 'invalid': $valid === false}">
   
       <div class="page-grid">
           <div class="column-lg-6">
               <div class="VisualSelectionGroup">
                   <div ng-repeat="answer in question.field.visual_possible_values" ng-init="$value = '' + answer.key" ng-class="{
                           'VisualSelectionGroup-item': !answer.can_describe,
                           'VisualSelectionGroup-other': answer.can_describe,
                       }">
   
                       <visual-selection ng-if="!answer.can_describe" image-src="{[{ answer.picture_url }]}" image-label="{[{ answer.label }]}">
   
                           <input name="{[{ requestForm.getQuestionName($qID) }]}" ng-model="$model.questions[$qID].selection[$value]" value="{[{ $value }]}" type="checkbox" />
                       </visual-selection>
   
                       <div ng-if="answer.can_describe" choice-other>
                           <input-checkbox>
   
                               <input name="{[{ requestForm.getQuestionName($qID) }]}" ng-model="$model.questions[$qID].selection[$value]" value="{[{ $value }]}" type="checkbox" id="{[{ $qID }]}_{[{ $value }]}_selection" />
   
                               <label for="{[{ $qID }]}_{[{ $value }]}_selection" class="InputCheckbox-label">
   
                                   <input schema="
                                           requestFormSchema
                                               .questions[$qID][$value + '_description']" schema-assign="TextInputSchema" schema-optional-if="
                                           !$model.questions[$qID].selection[$value]" ng-model="$model.questions[$qID][$value + '_description']" name="metadata_{[{ $qID }]}_descriptions[{[{ $value }]}]" type="text" ng-focus="bottomInputFocus()" ng-blur="bottomInputBlur()" placeholder="{[{ answer.label }]}" />
                               </label>
                           </input-checkbox>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   
   <div class="T3-S RequestForm-error " ng-repeat="$err in $validationErrors" ng-bind="$err">
   </div>
</script>
<script id="template-request-question-visual-radio" type="text/template">
   <div schema="requestFormSchema.questions[$qID].selection" schema-assign="ObjectValueKeySchema" schema-optional-if="!question.field.required" ng-init="$qID = question.field.id" ng-class="{'valid': $valid, 'invalid': $valid === false}">
   
       <div class="page-grid">
           <div class="column-lg-6">
               <div class="VisualSelectionGroup">
                   <div ng-repeat="answer in question.field.visual_possible_values" ng-init="$value = '' + answer.key" ng-class="{
                           'VisualSelectionGroup-item': !answer.can_describe,
                           'VisualSelectionGroup-other': answer.can_describe,
                       }">
   
                       <visual-selection ng-if="!answer.can_describe" image-src="{[{ answer.picture_url }]}" image-label="{[{ answer.label }]}">
   
                           <input name="{[{ requestForm.getQuestionName($qID) }]}" ng-model="$model.questions[$qID].selection.value" value="{[{ $value }]}" type="radio" />
                       </visual-selection>
   
                       <div ng-if="answer.can_describe" choice-other>
                           <input-radio>
                               <input name="{[{ requestForm.getQuestionName($qID) }]}" name="metadata_{[{ $qID }]}_keys[]" ng-model="$model.questions[$qID].selection.value" value="{[{ $value }]}" type="radio" id="{[{ $qID }]}_{[{ $value }]}_selection" />
   
                               <label for="{[{ $qID }]}_{[{ $value }]}_selection" class="InputRadio-label">
   
                                   <input schema="requestFormSchema
                                           .questions[$qID][$value + '_description']" schema-assign="TextInputSchema" schema-optional-if="
                                           $model.questions[$qID].selection.value !== $value" ng-model="$model.questions[$qID][$value + '_description']" name="metadata_{[{ $qID }]}_descriptions[{[{ $value }]}]" type="text" ng-focus="bottomInputFocus()" ng-blur="bottomInputBlur()" placeholder="{[{ answer.label }]}" />
                               </label>
                           </input-radio>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   
   <div class="T3-S RequestForm-error " ng-repeat="$err in $validationErrors" ng-bind="$err">
   </div>
</script>
<script id="template-request-question-text" type="text/template">
   <div schema="requestFormSchema.questions[question.field.id].description" schema-assign="TextInputSchema" schema-optional-if="!question.field.required" ng-class="{'valid': $valid, 'invalid': $valid === false}" class="page-grid">
   
       <div class="column-lg-6">
           <textarea ng-if="question.field.multi_line" class="RequestForm-textArea" ng-focus="bottomInputFocus()" ng-blur="bottomInputBlur()" ng-model="$model.questions[question.field.id].description" name="metadata_{[{ question.field.id }]}" placeholder="{[{ question.field.placeholder }]}" />
   
           <input ng-if="!question.field.multi_line" ng-model="$model.questions[question.field.id].description" name="metadata_{[{ question.field.id }]}" type="text" placeholder="{[{ question.field.placeholder }]}" />
       </div>
   </div>
   
   <div class="T3-S RequestForm-error " ng-repeat="$err in $validationErrors" ng-bind="$err">
   </div>
</script>
<script id="template-request-questions" type="text/template">
   <div event-track="request form/view category questions" event-track-watch="activeSection.id" event-track-if="activeSection.id.indexOf('question-') === 0" event-track-once event-track-data="trackingData.viewCategoryQuestions()">
   
       <div class="prefilledResponses" ng-repeat="$question in requestForm.skippedFields">
           <input type="hidden" name="{[{ requestForm.getQuestionName($question.field.id) }]}" value="{[{ requestForm.getQuestionAnswer($question.field.id) }]}" />
           <input type="hidden" name="metadata_fields[]" value="{[{ $question.id }]}" />
       </div>
       <fieldset ng-repeat="$question in requestForm.getRequestFormFields()" ng-if="$question.field.type === 'text'
               || $question.field.type === 'enumeration'
               || $question.field.type === 'visual_enumeration'" ng-show="activeSection.id === 'question-' + $question.field.id" request-form-section="'question-' + $question.field.id" hide-progress-bar="$first && !showedCategoryChooser && encodedServiceId" hide-back-button="$first && !showedCategoryChooser && encodedServiceId" schema-validation-subsection event-track="request form/provide category question answer" event-track-on="change" event-track-data="trackingData.provideCategoryQuestionAnswer($question)" ng-class="{
               required: $question.field.required
           }" schema="requestFormSchema.questions[{[{ $question.field.id }]}]" schema-assign="EmptySchema">
   
           <div ng-if="activeSection.id === 'question-' + $question.field.id" event-track="request form/view category question section" event-track-on-init event-track-data="trackingData.viewCategoryQuestionSection($question)"></div>
   
           <input type="hidden" name="metadata_fields[]" value="{[{ $question.id }]}" />
   
           <request-form-template ng-if="$first && !showedCategoryChooser" template-id="template-hire-a-specific-pro-header">
           </request-form-template>
   
           <request-form-template template-id="template-request-form-section-header" scope-vars="
                               experimentalSpecificPro,
                                   isThemeSmaller
               " is-theme-smaller="$question.tooltip" experimental-specific-pro="$first && !showedCategoryChooser">
   
               {[{ $question.label }]}
   
               <div ng-if="$question.subtext" class="B2-S">
                   {[{ $question.subtext }]}
               </div>
   
               <div ng-if="!$question.field.required" class="B3-S">
                   Optional
               </div>
           </request-form-template>
   
           <request-form-template template-id="template-request-category-tooltip" ng-if="$question.tooltip">
               <p class="RequestForm-categoryInfoBox-content" ng-repeat="tooltip in $question.tooltip" ng-bind="tooltip.content" ng-class="{
                           'theme-paragraph': tooltip.extraSpaceBelow,
                           'T2-S theme-title': tooltip.title,
                           'B2-S': !tooltip.title
                       }">
               </p>
           </request-form-template>
   
           <request-form-template ng-if="$question.field.type === 'enumeration' &&
                   $question.field.allows_multiple_values" template-id="template-request-question-checkbox" scope-vars="question" question="$question">
           </request-form-template>
   
           <request-form-template ng-if="$question.field.type === 'enumeration' &&
                   !$question.field.allows_multiple_values" template-id="template-request-question-radio" scope-vars="question" question="$question">
           </request-form-template>
   
           <request-form-template ng-if="$question.field.type === 'visual_enumeration' &&
                   $question.field.allows_multiple_values" template-id="template-request-question-visual-checkbox" scope-vars="question" question="$question">
           </request-form-template>
   
           <request-form-template ng-if="$question.field.type === 'visual_enumeration' &&
                   !$question.field.allows_multiple_values" template-id="template-request-question-visual-radio" scope-vars="question" question="$question">
           </request-form-template>
   
           <request-form-template ng-if="$question.field.type === 'text'" template-id="template-request-question-text" class="RequestForm-standaloneInputSection" scope-vars="question" question="$question">
           </request-form-template>
   
           <request-form-template template-id="template-request-form-navigation" scope-vars="hideBack,continueText" continue-text="
                   $question.field.required || isAnswered($model.questions[$question.field.id])
                       ? 'Next'
                       : 'Skip'
               " hide-back="$first && requestForm.categories.length === 1 && hideIntroScreen
                                       || ($first && !showedCategoryChooser && requestForm.serviceData)" </request-form-template>
       </fieldset>
   </div>
</script>
<script id="template-request-description" type="text/template">
   <div schema="requestFormSchema.anythingElse.anythingElse" schema-assign="EmptySchema" schema-default="{ customerHasMoreInfo: false }">
   
       <request-form-template template-id="template-request-form-section-header">
           Any special requests?
       </request-form-template>
   
       <div class="page-grid">
           <div class="column-lg-6">
               <div ng-class="{'valid': $valid, 'invalid': $valid === false}" schema="requestFormSchema.anythingElse.anythingElse.moreInfo" schema-assign="TextInputSchema" schema-optional>
   
                   <textarea class="RequestForm-textArea" placeholder="Add specific instructions or info the pros should know." ng-model="$model.anythingElse.anythingElse.moreInfo" event-track="request form/provide additional information" event-track-on="blur" event-track-once event-track-if="$valid && form.req_description.$dirty" event-track-data="trackingData.provideAdditionalInformation(
                           $model.anythingElse.anythingElse.moreInfo)" name="req_description">
                   </textarea>
   
                   <div class="T3-S RequestForm-error " ng-repeat="$err in $validationErrors" ng-bind="$err">
                   </div>
               </div>
   
               <div ng-if="!$model.anythingElse.anythingElse.customerHasMoreInfo">
                   <input type="hidden" name="req_description" value="">
               </div>
           </div>
       </div>
   </div>
</script>
<script id="template-request-service-location" type="text/template">
   <div ng-if="category.travel_types.length > 1" schema="requestFormSchema.location.serviceLocation" schema-assign="CheckboxArrayInputSchema" schema-default="{ toprovider: true, tocustomer: true }">
   
       <div ng-class="{'valid': $valid, 'invalid': $valid === false}">
           <request-form-template template-id="template-request-form-section-header">
               How would you like to work with the {[{ category.sentence_taxonym }]}?
           </request-form-template>
   
           <div class="InputContainer is-first page-grid">
               <div class="column-lg-6" ng-if="category.travel_types.indexOf('toprovider') >= 0">
   
                   <input-checkbox input-checkbox-label="{[{ requestForm.getTravelTypeLabel('toprovider') }]}">
   
                       <input id="service-location-toprovider" ng-model="$model.location.serviceLocation.toprovider" event-track="request form/change travel selection" event-track-on="change" event-track-data="trackingData.changeTravelSelection(
                               $model.location.serviceLocation)" name="req_travel[]" value="toprovider" type="checkbox">
                   </input-checkbox>
   
                   <request-form-template ng-if="$model.location.serviceLocation.toprovider" template-id="template-request-service-location-distance">
                   </request-form-template>
               </div>
           </div>
   
           <div class="InputContainer page-grid">
               <div class="column-lg-6" ng-if="category.travel_types.indexOf('tocustomer') >= 0">
   
                   <input-checkbox input-checkbox-label="{[{ requestForm.getTravelTypeLabel('tocustomer') }]}">
   
                       <input id="service-location-tocustomer" ng-model="$model.location.serviceLocation.tocustomer" event-track="request form/change travel selection" event-track-on="change" event-track-data="trackingData.changeTravelSelection(
                               $model.location.serviceLocation)" name="req_travel[]" value="tocustomer" type="checkbox">
                   </input-checkbox>
               </div>
           </div>
   
           <div class="InputContainer page-grid">
               <div class="column-lg-6" ng-if="category.travel_types.indexOf('remote') >= 0">
   
                   <input-checkbox input-checkbox-label="{[{ requestForm.getTravelTypeLabel('remote') }]}">
   
                       <input id="service-location-remote" ng-model="$model.location.serviceLocation.remote" event-track="request form/change travel selection" event-track-on="change" event-track-data="trackingData.changeTravelSelection(
                               $model.location.serviceLocation)" name="req_travel[]" value="remote" type="checkbox">
                   </input-checkbox>
               </div>
           </div>
   
           <div class="page-grid">
               <div class="column-lg-6">
                   <div class="T3-S RequestForm-error " ng-repeat="$err in $validationErrors" ng-bind="$err">
                   </div>
               </div>
           </div>
       </div>
   </div>
</script>
<script id="template-request-service-location-distance-standalone" type="text/template">
   <request-form-template template-id="template-request-form-section-header">
       How far are you willing to travel?
   </request-form-template>
   
   <div class="page-grid">
       <div class="column-lg-6">
           <request-form-template template-id="template-request-service-location-distance">
           </request-form-template>
   
           <div class="T3-S RequestForm-error " ng-repeat="$err in $validationErrors" ng-bind="$err">
           </div>
       </div>
   </div>
</script>
<script id="template-request-service-location-distance" type="text/template">
   <div class="RequestForm-serviceLocationDistance" schema="requestFormSchema.location.distance" schema-assign="ObjectValueKeySchema" schema-default="requestForm.options.location.defaultDistance">
   
       <input type="hidden" name="req_travel_dist" value="{[{ $model.location.distance.value }]}">
   
       <aura-select use-native-dropdown>
           <select id="travel-distance" ng-model="$model.location.distance.value" ng-options="dist.value as dist.label for dist
                   in requestForm.options.location.distances">
           </select>
       </aura-select>
   </div>
</script>
<script id="template-request-image-upload" type="text/template">
   <request-form-template template-id="template-request-form-section-header">
       {[{ category.image_upload_question_copy || "Would you like to add photos to describe your project?" }]}
   </request-form-template>
   
   <div class="InputContainer InputContainer-isFirst">
       <div class="page-grid">
           <div class="column-lg-6">
               <input-radio input-radio-label="No">
   
                   <input ng-model="requestForm.addImages" ng-value="false" type="radio" />
               </input-radio>
           </div>
       </div>
   </div>
   <div class="InputContainer">
       <div class="page-grid">
           <div class="column-lg-6">
               <input-radio input-radio-label="Yes">
   
                   <input ng-model="requestForm.addImages" ng-value="true" type="radio" />
               </input-radio>
           </div>
       </div>
   </div>
   
   <div class="page-grid RequestForm-attachments" ng-show="requestForm.addImages">
       <div>
           <div class="column-lg-3 column-md-6" ng-repeat="attachment in requestForm.attachments">
   
               <div class="RequestForm-attachmentBox">
                   <div class="RequestForm-attachmentPreview" ng-hide="attachment.uploadFailed" ng-class="{'is-focused': attachment.previewInFocus}">
   
                       <div class="RequestForm-attachmentPreview-image" ng-class="{'uploading': attachment.isUploading}" ng-style="{'background-image': requestForm.getImageSource(attachment)}">
                       </div>
   
                       <textarea class="RequestForm-attachmentPreview-description" ng-model="attachment.description" ng-focus="attachment.previewInFocus = true" ng-blur="attachment.previewInFocus = false" type="text" autosize placeholder="Write your description here" maxlength="350">
                       </textarea>
                   </div>
   
                   <div class="RequestForm-attachmentError" ng-show="attachment.uploadFailed">
   
                       <svg-icon class="RequestForm-attachmentError-icon" type="error" size="lg">
                       </svg-icon>
   
                       <span class="B2-S RequestForm-attachmentError-title">
                           Upload failed
                       </span>
   
                       <span class="B2-S RequestForm-attachmentError-text">
                           A problem occurred during the upload.
                       </span>
   
                       <button class="Button theme-secondary theme-large
                           RequestForm-attachmentError-button" ng-click="requestForm.tryAgain($event, attachment)">
   
                           Try Again
                       </button>
                   </div>
   
                   <div class="RequestForm-attachmentBox-close" ng-click="removeAttachment($index)">
   
                       <svg-icon type="cancel" size="sm"></svg-icon>
                   </div>
   
                   <div class="RequestForm-imageLoader" ng-show="attachment.isUploading">
                       <svg-icon type="puff_44x44"></svg-icon>
                   </div>
               </div>
   
               <div class="Spacer-3"></div>
           </div>
   
           <attach-button class="column-lg-6" attachments-bind="attachments" ng-show="requestForm.attachments.length < requestForm.maxAttachments" on-attachment="processImage" accept-file-types="image/bmp, image/gif, image/jpeg, image/jpg, image/png">
   
               <a class="Button theme-large RequestForm-addPhotos theme-secondary">
                   <svg-icon type="add" size="sm"></svg-icon>
                   Add {[{ requestForm.attachments.length > 0 ? "More " : "" }]}Photos
               </a>
           </attach-button>
       </div>
   
       <input type="hidden" name="attachment_data" value="{[{ requestForm.getAttachmentData() }]}">
   </div>
   
   <div class="T3-S RequestForm-error " ng-repeat="$err in requestForm.imageUploadErrors" ng-bind="$err">
   </div>
</script>
<script id="template-request-scheduling-event" type="text/template">
   <request-form-template template-id="template-request-form-section-header">
   
       What day do you need the {[{ category.sentence_name }]}?
   </request-form-template>
   
   <div ng-if="activeSection.id === 'scheduling'" event-track="request form/view scheduling event calendar selector" event-track-on-init event-track-data="trackingData.getSchedulingDefault(requestForm)"></div>
   
   <div class="RequestForm-calendarSelector InputContainer" schema="requestFormSchema.scheduling.eventDay" schema-assign="CalendarSchema" ng-class="{'valid': $valid, 'invalid': $valid === false}">
   
       <calendar-selector is-single-select-calendar="true" is-job-date-selector="true" selected-days="$model.scheduling.eventDay" start-date="schedulingHandler.getCalendarStartDate()">
       </calendar-selector>
   
       <div class="T3-S RequestForm-error " ng-repeat="$err in $validationErrors" ng-bind="$err">
       </div>
   </div>
</script>
<script id="template-request-scheduling-event-time" type="text/template">
   <request-form-template template-id="template-request-form-section-header">
   
       What time do you need the {[{ category.sentence_name }]}?
   </request-form-template>
   
   <div ng-if="activeSection.id === 'schedulingTimes'" event-track="request form/view scheduling event time picker" event-track-on-init event-track-data="trackingData.getSchedulingDefault(requestForm)"></div>
   
   <input type="hidden" name="scheduling_timestamps_array" ng-value="schedulingHandler.finalizedTimestamps" />
   
   <div class="InputContainer theme-group-container">
       <div class="page-grid">
           <div class="column-lg-6">
               <div schema="requestFormSchema.event.eventTime" schema-assign="TimeSchema" class="RequestForm-schedulingSelector" ng-class="{'valid': $valid, 'invalid': $valid === false}">
   
                   <label for="scheduling-time" class="RequestForm-inputLabel T2-S">
                       {[{ schedulingHandler.hasDuration ? 'Start time' : 'Time' }]}
                   </label>
   
                   <aura-select use-native-dropdown>
                       <select id="scheduling-time" ng-model="$model.event.eventTime" ng-options="selectedTime.value as selectedTime.label for
                               selectedTime in schedulingHandler.selectTimesArray">
                       </select>
                   </aura-select>
   
                   <div class="T3-S RequestForm-error " ng-repeat="$err in $validationErrors" ng-bind="$err">
                   </div>
               </div>
               <div ng-if="schedulingHandler.hasDuration">
                   <div ng-if="activeSection.id === 'schedulingTimes'" event-track="request form/view scheduling event time picker (duration)" event-track-on-init event-track-data="trackingData.getSchedulingDefault(requestForm)"></div>
   
                   <request-form-template template-id="template-request-scheduling-event-duration" scope-vars="category" category="requestForm.activeCategory">
                   </request-form-template>
               </div>
           </div>
       </div>
   </div>
</script>
<script id="template-request-scheduling-event-duration" type="text/template">
   <div schema="requestFormSchema.event.eventDuration" schema-assign="{[{
           category.specifiedDurationArray
               ? 'ObjectValueKeySchema'
               : 'DurationSchema'
       }]}" class="RequestForm-schedulingSelector" ng-class="{'valid': $valid, 'invalid': $valid === false}">
   
       <label for="scheduling-duration" class="RequestForm-inputLabel T2-S">
           Duration (hours)
       </label>
   
       <div ng-if="category.specifiedDurationArray">
           <aura-select use-native-dropdown>
               <select id="scheduling-duration" ng-model="$model.event.eventDuration" ng-options="duration in category.specifiedDurationArray">
               </select>
           </aura-select>
       </div>
   
       <div ng-if="!category.specifiedDurationArray">
           <input id="scheduling-duration" ng-model="$model.event.eventDuration" placeholder="ex. &quot;4&quot;" type="tel">
       </div>
   
       <div class="T3-S RequestForm-error " ng-repeat="$err in $validationErrors" ng-bind="$err">
       </div>
   </div>
</script>
<script id="template-request-scheduling-multi-cadence" type="text/template">
   <request-form-template ng-if="schedulingHandler.schedulingArchetype === 'multi_recurring'" template-id="template-request-form-section-header">
   
       How often do you need the {[{ category.sentence_name }]}?
   </request-form-template>
   <request-form-template ng-if="schedulingHandler.schedulingArchetype === 'multi_mixed'" template-id="template-request-form-section-header">
   
       Will you need {[{ category.sentence_name }]} more than once?
   </request-form-template>
   
   <div ng-if="activeSection.id === 'cadence'" event-track="request form/view scheduling cadence preference" event-track-on-init event-track-data="trackingData.getSchedulingDefault(requestForm)"></div>
   
   <div schema="requestFormSchema.cadence.cadencePreference" schema-assign="MultipleChoiceInputSchema">
   
       <div class="InputContainer" ng-repeat="cadence in schedulingHandler.cadenceOptions">
   
           <div class="page-grid">
               <div class="column-lg-6">
                   <input-radio input-radio-label="{[{ cadence.label }]}">
                       <input name="cadence_preference" ng-model="$model.cadence.cadencePreference" value="{[{ cadence.value }]}" type="radio" />
                   </input-radio>
               </div>
           </div>
       </div>
   </div>
   
   <div class="T3-S RequestForm-error " ng-repeat="$err in $validationErrors" ng-bind="$err">
   </div>
</script>
<script id="template-request-scheduling-multi-cadence-days-times" type="text/template">
   <request-form-template template-id="template-request-form-section-header">
   
       When are you available?
   </request-form-template>
   
   <div ng-if="activeSection.id === 'cadenceDaysTimes'" event-track="request form/view scheduling cadence timeslots" event-track-on-init event-track-data="trackingData.getSchedulingDefault(requestForm)"></div>
   
   <input type="hidden" name="scheduling_timestamps_array" ng-value="schedulingHandler.finalizedTimestamps" />
   
   <input type="hidden" name="cadence_days_times" ng-value="schedulingHandler.finalizedCadenceDaysTimes" />
   
   <div class="RequestForm-scheduling-timeslots
           " schema="requestFormSchema.cadenceDaysTimes.daysTimes" schema-assign="CheckboxArrayInputSchema">
   
       <div class="InputContainer" ng-repeat="timeslot in schedulingHandler.cadenceDaysTimes">
           <div class="page-grid">
               <div class="column-lg-6">
                   <input-checkbox input-checkbox-label="{[{ timeslot.value }]}">
   
                       <input type="checkbox" ng-model="$model.cadenceDaysTimes.daysTimes[timeslot.value]">
                   </input-checkbox>
               </div>
           </div>
       </div>
   
       <div class="T3-S RequestForm-error " ng-repeat="$err in $validationErrors" ng-bind="$err">
       </div>
   </div>
</script>
<script id="template-request-scheduling-multi" type="text/template">
   <request-form-template ng-if="schedulingHandler.schedulingArchetype === 'multi_nonrecurring'
           || (schedulingHandler.schedulingArchetype === 'multi_mixed'
           && $model.cadence.cadencePreference === 'just_once')" template-id="template-request-form-section-header">
   
       When would you like the {[{ category.sentence_name }]}?
   </request-form-template>
   
   <div ng-if="activeSection.id === 'scheduling' && !schedulingHandler.isAsapCategory" event-track="request form/view scheduling day preference" event-track-on-init event-track-data="trackingData.getSchedulingDefault(requestForm)"></div>
   
   <div ng-if="activeSection.id === 'scheduling' && schedulingHandler.isAsapCategory" event-track="request form/view scheduling day preference (ASAP)" event-track-on-init event-track-data="trackingData.getSchedulingDefault(requestForm)"></div>
   
   <input type="hidden" name="scheduling_timestamps_array" ng-value="schedulingHandler.finalizedTimestamps" />
   
   <div schema="requestFormSchema.scheduling.dayPreference" schema-assign="MultipleChoiceInputSchema">
   
       <div class="InputContainer" ng-repeat="preference in schedulingHandler.dayPreferences">
           <div class="page-grid">
               <div class="column-lg-6">
                   <input-radio input-radio-label="{[{ preference.label }]}" ng-click="scrollToSchedulingCalendar($event)">
   
                       <input name="scheduling_day_preference" ng-model="$model.scheduling.dayPreference" value="{[{ preference.value }]}" type="radio" />
                   </input-radio>
               </div>
           </div>
       </div>
   </div>
   
   <request-form-template ng-if="$model.scheduling.dayPreference === 'specific_dates'" template-id="template-request-scheduling-multi-calendar">
   </request-form-template>
   
   <div class="T3-S RequestForm-error " ng-repeat="$err in $validationErrors" ng-bind="$err">
   </div>
</script>
<script id="template-request-scheduling-multi-calendar" type="text/template">
   <div class="RequestForm-calendarSelector InputContainer" schema="requestFormSchema.scheduling.selectedDays" schema-assign="CalendarSchema" ng-class="{'valid': $valid, 'invalid': $valid === false}">
   
       <calendar-selector is-job-date-selector="true" selected-days="$model.scheduling.selectedDays" start-date="schedulingHandler.getCalendarStartDate()">
       </calendar-selector>
   </div>
</script>
<script id="template-request-scheduling-timeslots" type="text/template">
   <request-form-template ng-if="$model.scheduling.dayPreference === 'today'
           || $model.scheduling.dayPreference === 'tomorrow'
           || $model.scheduling.dayPreference === 'next_few_days'
           || $model.scheduling.dayPreference === 'within_a_week'" template-id="template-request-scheduling-timeslots-general" scope-vars="category" category="requestForm.activeCategory">
   </request-form-template>
   
   <request-form-template ng-if="$model.scheduling.dayPreference === 'specific_dates'" template-id="template-request-scheduling-timeslots-specific" scope-vars="category" category="requestForm.activeCategory">
   </request-form-template>
</script>
<script id="template-request-scheduling-timeslots-general" type="text/template">
   <request-form-template template-id="template-request-form-section-header">
   
       What times work best for your schedule?
   </request-form-template>
   
   <div ng-if="activeSection.id === 'schedulingTimes'" event-track="request form/view scheduling general timeslots" event-track-on-init event-track-data="trackingData.getSchedulingDefault(requestForm)"></div>
   
   <div class="RequestForm-scheduling-timeslots
           " schema="requestFormSchema.timeslots.general" schema-assign="CheckboxArrayInputSchema">
   
       <div class="InputContainer" ng-class="{ 'disabled': schedulingHandler.isAsapCategory
               && schedulingHandler.checkAsapTodayExpired(
               $model, timeslot.hourOffset) }" ng-repeat="timeslot in schedulingHandler.getTimeslots()">
   
           <div class="page-grid">
               <div class="column-lg-6">
                   <input-checkbox input-checkbox-label="{[{ timeslot.label }]}">
                       <input type="checkbox" ng-model="$model.timeslots.general[timeslot.value]">
                   </input-checkbox>
               </div>
           </div>
       </div>
   
       <div class="T3-S RequestForm-error " ng-repeat="$err in $validationErrors" ng-bind="$err">
       </div>
   </div>
</script>
<script id="template-request-scheduling-timeslots-specific" type="text/template">
   <request-form-template template-id="template-request-form-section-header">
   
       What times work best for your schedule?
   </request-form-template>
   
   <div ng-if="activeSection.id === 'schedulingTimes'" event-track="request form/view scheduling specific timeslots" event-track-on-init event-track-data="trackingData.getSchedulingDefault(requestForm)"></div>
   
   <div class="RequestForm-scheduling-timeslots
           " schema="requestFormSchema.timeslots.specific" schema-assign="CalendarTimeslotSchema">
   
       <div ng-repeat="dateObj in $model.scheduling.selectedDays" ng-init="specificTimeslots = schedulingHandler.generateSpecificTimeslots(dateObj)">
   
           <div class="RequestForm-scheduling-timeslots-label" ng-init="dateLabel = schedulingHandler.generateSplitDateLabel(dateObj)">
   
               {[{ dateLabel.day }]},
   
               <span class="RequestForm-scheduling-timeslots-label-date">
                   {[{ dateLabel.date }]}
               </span>
           </div>
   
           <div class="InputContainer" ng-repeat="timeslot in specificTimeslots">
               <div class="page-grid">
                   <div class="column-lg-6">
                       <input-checkbox input-checkbox-label="{[{ timeslot.label }]}">
   
                           <input type="checkbox" ng-model="$model.timeslots.specific[timeslot.value]">
                       </input-checkbox>
                   </div>
               </div>
           </div>
       </div>
   
       <div class="T3-S RequestForm-error " ng-repeat="$err in $validationErrors" ng-bind="$err">
       </div>
   </div>
</script>
<script id="template-request-scheduling" type="text/template">
   <request-form-template template-id="template-request-form-section-header">
       When do you need {[{ category.sentence_name }]}?
   </request-form-template>
   
   <div ng-if="category.scheduling_type === 'event'" schema="requestFormSchema.scheduling.scheduling" schema-assign="EmptySchema">
   
       <div>
           <input type="hidden" name="req_schedule_description" value="{[{ getRequestSchedulingString($model.scheduling.scheduling) }]}">
           <input type="hidden" name="req_date_estimate" value="4">
           <input type="hidden" name="req_needed_time" value="{[{ $model.scheduling.scheduling.date
                   + ' '
                   + $model.scheduling.scheduling.time }]}">
       </div>
   
       <request-form-template template-id="template-request-scheduling-date-and-time">
       </request-form-template>
   </div>
   
   <div ng-if="category.scheduling_type === 'appointment'" schema="requestFormSchema.scheduling.scheduling" schema-assign="EmptySchema">
   
       <div schema="requestFormSchema.scheduling.scheduling.schedulingType" schema-assign="EmptySchema" schema-default="'I\&#039;m flexible'" ng-class="{'valid': $valid, 'invalid': $valid === false}" class="page-grid">
   
           <div class="column-lg-6">
               <input ng-if="$model.scheduling.scheduling.schedulingType !== 'date'
                       && $model.scheduling.scheduling.schedulingType !== 'other'" type="hidden" name="req_schedule_description" value="{[{ $model.scheduling.scheduling.schedulingType }]}">
   
               <div ng-if="$model.scheduling.scheduling.schedulingType === 'date'">
                   <input type="hidden" name="req_date_estimate" value="4">
                   <input type="hidden" name="req_needed_time" value="{[{ $model.scheduling.scheduling.date
                           + ' '
                           + $model.scheduling.scheduling.time }]}">
               </div>
   
               <input ng-if="$model.scheduling.scheduling.schedulingType === 'other'" type="hidden" name="req_schedule_description" value="{[{ $model.scheduling.scheduling.customDescription }]}">
   
               <div class="RequestForm-schedulingSelector">
                   <aura-select use-native-dropdown aura-select-label="Select an option">
   
                       <select event-track="request form/change scheduling type" event-track-on="change" event-track-data="trackingData.genericSelection(
                               $model.scheduling.scheduling.schedulingType)" ng-model="$model.scheduling.scheduling.schedulingType">
                           <option value="I&#039;m flexible">
   
                               I&#039;m flexible
                           </option>
                           <option value="In the next few days">
                               In the next few days
                           </option>
                           <option value="As soon as possible">
                               As soon as possible
                           </option>
                           <option value="date">
                               On one particular date
                           </option>
                           <option value="other">
                               Other (I'd need to describe)
                           </option>
                       </select>
                   </aura-select>
               </div>
           </div>
       </div>
   
       <div ng-class="{'valid': $valid, 'invalid': $valid === false}" class="page-grid">
   
           <div class="column-lg-6">
               <div schema="requestFormSchema.scheduling.scheduling.customDescription" schema-assign="TextInputSchema" ng-if="$model.scheduling.scheduling.schedulingType === 'other'">
   
                   <textarea placeholder="When would you like to schedule this for?" class="RequestForm-textArea" id="scheduling-description" ng-model="$model.scheduling.scheduling.customDescription">
                   </textarea>
   
                   <div class="T3-S RequestForm-error " ng-repeat="$err in $validationErrors" ng-bind="$err">
                   </div>
               </div>
           </div>
       </div>
   
       <request-form-template ng-if="$model.scheduling.scheduling.schedulingType === 'date'" template-id="template-request-scheduling-date-and-time">
       </request-form-template>
   </div>
</script>
<script id="template-request-scheduling-date-and-time" type="text/template">
   <div class="InputContainer theme-group-container">
       <div class="page-grid">
           <div class="column-lg-6">
               <div schema="requestFormSchema.scheduling.scheduling.date" schema-assign="DateSchema" ng-class="{'valid': $valid, 'invalid': $valid === false}">
   
                   <label for="scheduling-date" class="RequestForm-inputLabel T2-S">
                       {[{ category.scheduling_question_text || "What day do you need the " + category.sentence_taxonym + "?" }]}
                   </label>
   
                   <input date-picker id="scheduling-date" placeholder="Click to pick a date" ng-model="$model.scheduling.scheduling.date" type="text" readonly="readonly">
   
                   <div class="T3-S RequestForm-error " ng-repeat="$err in $validationErrors" ng-bind="$err">
                   </div>
               </div>
           </div>
   
           <div class="column-lg-3">
               <div schema="requestFormSchema.scheduling.scheduling.time" schema-assign="TimeSchema" ng-class="{'valid': $valid, 'invalid': $valid === false}">
   
                   <label for="scheduling-time" class="RequestForm-inputLabel T2-S">
                       At what time?
                   </label>
   
                   <input id="scheduling-time" placeholder="ex. &quot;2pm&quot;" ng-model="$model.scheduling.scheduling.time" type="text">
   
                   <div class="T3-S RequestForm-error " ng-repeat="$err in $validationErrors" ng-bind="$err">
                   </div>
               </div>
           </div>
   
           <div class="column-lg-3">
               <div schema="requestFormSchema.scheduling.scheduling.duration" schema-assign="DurationSchema" schema-optional-if="!(category.requires_duration
                       || $model.scheduling.scheduling.duration)" ng-class="{'valid': $valid, 'invalid': $valid === false}">
   
                   <label for="scheduling-duration" class="RequestForm-inputLabel T2-S">
                       For how many hours?
                       <span ng-if="!category.requires_duration" class="T4-S">
                           (Optional)
                       </span>
                   </label>
   
                   <input id="scheduling-duration" name="req_needed_duration_hours" placeholder="ex. &quot;4&quot;" ng-model="$model.scheduling.scheduling.duration" type="text">
   
                   <div class="T3-S RequestForm-error " ng-repeat="$err in $validationErrors" ng-bind="$err">
                   </div>
               </div>
           </div>
       </div>
   </div>
</script>
<script id="template-request-zip-code" type="text/template">
   <div schema="requestFormSchema.zipCode.zipCode" schema-assign="ZipCodeSchema" schema-default="'{[{ zipCode }]}'" class="page-grid">
   
       <div ng-class="{'valid': $valid, 'invalid': $valid === false}" class="column-lg-4 column-lg-offset-1">
   
           <input id="zip-code" placeholder="Zip code" class="theme-center-align" ng-model="$model.zipCode.zipCode" ng-change="updateZipCode($model.zipCode.zipCode)" event-track="request form/provide zip code" event-track-on="blur" event-track-if="$valid && form.req_zip_code_id.$dirty" event-track-data="trackingData.getDefault()" name="req_zip_code_id" type="text" pattern="\d*" placeholder="Zip code" />
   
           <div class="T3-S RequestForm-error " ng-repeat="$err in $validationErrors" ng-bind="$err">
           </div>
       </div>
   </div>
</script>
<script id="template-request-contact-email" type="text/template">
   <div class="page-grid">
       <div class="column-lg-6">
           <div schema="requestFormSchema.contactInfo.email" schema-assign="EmailSchema" ng-if="!requestForm.options.loggedIn">
   
               <div ng-class="{'valid': $valid, 'invalid': $valid === false}" class="column-lg-4 column-lg-offset-1">
   
                   <input id="email" placeholder="Email address" ng-model="$model.contactInfo.email" event-track="request form/provide email address" event-track-on="blur" event-track-if="$valid && form.usr_email.$dirty" event-track-once event-track-data="trackingData.getDefault()" name="usr_email" type="email">
   
                   <div class="T3-S RequestForm-error " ng-repeat="$err in $validationErrors" ng-bind="$err">
                   </div>
               </div>
           </div>
       </div>
   </div>
</script>
<script id="template-request-email-instant-everything" type="text/template">
   <div class="RequestForm-sectionContent tp-padding--triple" ng-if="!requestForm.options.loggedIn" ng-class="{ 'theme-ios': isUserAgentIos }">
   
       <ul class="request-form__instant-everything-email-gate-avatars">
           <li class="request-form__instant-everything-email-gate-avatar">
               <div class="tp-avatar tp-avatar--large">
                   <img ng-src="https://static.thumbtackstatic.com/media/primo/eng/team/andrew-hsiao.jpg" class="
                               tp-avatar__img
                               request-form__instant-everything-email-gate-avatar-image
                       " />
               </div>
           </li>
           <li class="request-form__instant-everything-email-gate-avatar">
               <div class="tp-avatar tp-avatar--large">
                   <img ng-src="https://static.thumbtackstatic.com/media/primo/eng/team/daniel-capo.jpg" class="
                               tp-avatar__img
                               request-form__instant-everything-email-gate-avatar-image
                       " />
               </div>
           </li>
           <li class="request-form__instant-everything-email-gate-avatar">
               <div class="tp-avatar tp-avatar--large">
                   <img ng-src="https://static.thumbtackstatic.com/media/primo/eng/team/renal-khabibulin.jpg" class="
                               tp-avatar__img
                               request-form__instant-everything-email-gate-avatar-image
                       " />
               </div>
           </li>
           <li class="request-form__instant-everything-email-gate-avatar">
               <div class="tp-avatar tp-avatar--large">
                   <img ng-src="https://static.thumbtackstatic.com/media/primo/eng/team/neha.jpg" class="
                               tp-avatar__img
                               request-form__instant-everything-email-gate-avatar-image
                       " />
               </div>
           </li>
           <li class="request-form__instant-everything-email-gate-avatar">
               <div class="tp-avatar tp-avatar--large">
                   <img ng-src="https://static.thumbtackstatic.com/media/primo/eng/team/dylan-joss.jpg" class="
                               tp-avatar__img
                               request-form__instant-everything-email-gate-avatar-image
                       " />
               </div>
           </li>
       </ul>
       <p class="tp-heading-3 tp-weight--normal tp-margin-top">
           5 Thumbtack pros match your request!
       </p>
       <p class="tp-text-2--static tp-margin-ends--double">
           To get your cost estimates, create an account—
           <!-- This removes the space created by
           the newline --><span class="tp-weight--demi tp-color--brand">it's free</span>.
       </p>
   
       <input schema="requestFormSchema.ixContactInfo.email" schema-assign="EmailSchema" placeholder="Enter email address" ng-model="$model.contactInfo.email" event-track="request form/provide email address" event-track-on="blur" event-track-if="$valid && form.usr_email.$dirty" event-track-once event-track-data="trackingData.getDefault()" name="usr_email" type="email">
   
       <input schema="requestFormSchema.ixFullName.name" schema-assign="FullNameSchema" class="tp-margin-ends" placeholder="Full name" ng-model="$model.fullName.name" event-track="request form/provide full name" event-track-on="blur" event-track-if="$valid && form.usr_full_name.$dirty" event-track-once event-track-data="trackingData.getDefault()" name="usr_full_name" type="text">
   
       <div class="request-form__instant-everything-disclaimer">
           <request-form-template template-id="template-request-legal-disclaimer-standalone">
           </request-form-template>
       </div>
   </div>
   
   <request-form-template ng-if="!requestForm.options.loggedIn" scope-vars="continueText,isLastSection" is-last-section="true" continue-text="See Pros & Estimates" template-id="template-request-form-navigation">
   </request-form-template>
</script>
<script id="template-request-full-name" type="text/template">
   <div class="page-grid">
       <div class="column-lg-4 column-lg-offset-1">
           <div schema="requestFormSchema.fullName.name" schema-assign="FullNameSchema">
               <div ng-class="{'valid': $valid, 'invalid': $valid === false}">
                   <input id="full-name" placeholder="First and last name" class="theme-center-align" ng-model="$model.fullName.name" event-track="request form/provide full name" event-track-on="blur" event-track-if="$valid && form.usr_full_name.$dirty" event-track-once event-track-data="trackingData.getDefault()" name="usr_full_name" type="text">
   
                   <div class="T3-S RequestForm-error " ng-repeat="$err in $validationErrors" ng-bind="$err">
                   </div>
               </div>
           </div>
       </div>
   </div>
</script>
<script id="template-request-form-navigation" type="text/template">
   <div class="page-grid">
       <div class="column-lg-6">
           <div class="RequestForm-sectionFooter">
               <div class="RequestForm-sectionFooter-submit">
                   <button type="submit" ng-class="{
                           'Button': !themeInvertedLinks,
                           'Link RequestForm-sectionFooter-navLink theme-inverted theme-bold':
                               themeInvertedLinks
                       }">
   
                       <span ng-bind="continueText || (isLastSection ? 'Submit' : 'Next')">
                       </span>
   
                       <svg-icon type="right-caret2" size="md" ng-show="themeInvertedLinks">
                       </svg-icon>
   
                       <div class="ThumbtackLoader" ng-if="requestForm.isSubmitting">
                           <svg-icon type="puff_44x44"></svg-icon>
                       </div>
                   </button>
               </div>
   
               <button ng-if="showSkip" class="RequestForm-sectionFooter-skip Link" ng-class="{
                       'theme-inverted': isBrandedScreen
                   }" type="submit">
   
                   Skip
               </button>
   
               <div class="RequestForm-sectionFooter-terms" ng-if="isLastSection" ng-class="{
                       'theme-smaller': isDisclaimerThemeSmaller,
                   }">
                   <p class="theme-secondary RequestForm-sectionFooter-terms-text B5-S" event-track="request form/click legal terms of service" event-track-on="click">
   
                       By clicking Submit you agree to the
                       <a href="/terms" target="_blank">Terms of Use</a> and
                       <a href="/privacy" target="_blank">Privacy Policy</a>.
                   </p>
               </div>
   
               <div ng-hide="hideBack" class="RequestForm-sectionFooter-back">
   
                   <button type="button" class="Link RequestForm-sectionFooter-navLink" ng-click="gotoPreviousSection()" ng-class="{
                           'theme-inverted theme-bold': themeInvertedLinks
                       }">
   
                       <svg-icon ng-if="!themeInvertedLinks" type="left-caret" size="sm">
                       </svg-icon>
   
                       <svg-icon ng-if="themeInvertedLinks" type="right-caret2" class="theme-rotate-180" size="md">
                       </svg-icon>
   
                       Back
                   </button>
               </div>
           </div>
       </div>
   </div>
</script>
<script id="template-request-legal-disclaimer-standalone" type="text/template">
   <div class="RequestForm-legalDisclaimer">
       <p class="B5-S" event-track="request form/click legal terms of service" event-track-on="click" ng-class="{
               'theme-secondary': !isBrandedSection,
               'theme-inverted': isBrandedSection
           }">
   
           <span ng-if="shouldShowInstantEverythingExperience()">
           By clicking See Pros &amp; Estimates you agree to the
           </span>
           <span ng-if="!shouldShowInstantEverythingExperience()">
           By clicking Submit you agree to the
           </span>
           <a class="RequestForm-legalDisclaimer-link" href="/terms" target="_blank">
   
               Terms of Use
           </a> and
           <a class="RequestForm-legalDisclaimer-link" href="/privacy" target="_blank">
   
               Privacy Policy
           </a> .
       </p>
   </div>
</script>
<script id="template-request-explanation" type="text/template">
   <div class="page-grid">
       <div class="column-lg-6">
           <div class="RequestForm-explanation">
   
               <svg-icon type="thumbtack-logo_178x28" alt="Thumbtack" class="RequestForm-thumbtackLogo">
               </svg-icon>
   
               <div tabindex="0" class="RequestForm-explanation-container
                   ">
   
                   <p class="tp-heading-3 RequestForm-explanation-pros theme-inverted
                       " ng-bind="requestForm.introPro" />
                   <p class="tp-heading-3 RequestForm-explanation-base theme-inverted
                       " ng-bind="requestForm.introScreenCopy" />
               </div>
   
           </div>
       </div>
   </div>
   
   <request-form-template template-id="template-request-form-navigation" scope-vars="themeInvertedLinks,hideBack" theme-inverted-links="true" hide-back="!(requestForm.categories.length > 1  || forceShowCategoryChooser)
           ">
   </request-form-template>
</script>
<script id="template-request-intro-zip-instant-everything" type="text/template">
   <div class="RequestForm-sectionContent">
       <div class="RequestForm-sectionContent-inner" ng-class="{
               'theme-ios': isUserAgentIos
           }">
   
           <div class="RequestForm-introZip">
               <div class="RequestForm-introZip-topContainer">
                   <div class="RequestForm-introZip-image" style="background-image: url('https://static.thumbtackstatic.com/_assets/images/release/modules/request-form/images/subway-tiles-79dcd2c7.svg');">
                   </div>
                   <div class="RequestForm-introZip-image RequestForm-introZip-gradient"></div>
                   <div class="RequestForm-introZip-image RequestForm-introZip-cleaningToolsContainer">
                       <div class="RequestForm-introZip-cleaningTools" style="background-image: url('https://static.thumbtackstatic.com/_assets/images/release/modules/request-form/images/cleaning-tools-84459279.svg');">
                       </div>
                   </div>
               </div>
   
               <div class="tp-padding-sides--triple RequestForm-introZip-bottomContainer" schema="requestFormSchema.introZipCode.zipCode" schema-assign="ZipCodeSchema" schema-default="'{[{ zipCode }]}'">
   
                   <div class="tp-heading-3 tp-weight--normal tp-padding-bottom--double">
                       Hire a <span ng-bind="requestForm.activeCategory.taxonym"></span> that checks all the boxes– it only takes
                       <span class="tp-weight--demi tp-color--brand">2 minutes</span>.
                   </div>
                   <div class="tp-text-3--static tp-padding-bottom--double">
                       Thumbtack has
                       <span class="tp-weight--demi">
                           <span ng-bind="prosCountNationwideFormatted"></span>
                       <span ng-bind="requestForm.activeCategory.name"></span> pros
                       </span>
                       nationwide. See the ones near you.
                   </div>
                   <input ng-model="$model.introZipCode.zipCode" type="text" class="tp-text-input tp-text-input--large" placeholder="Zip Code" ng-change="updateZipCode($model.introZipCode.zipCode)" event-track="request form/provide zip code" event-track-on="blur" event-track-if="$valid && form.req_zip_code_id.$dirty" event-track-data="trackingData.getDefault()" name="req_zip_code_id" pattern="\d*">
                   <div class="T3-S RequestForm-error" ng-repeat="$err in $validationErrors" ng-bind="$err">
                   </div>
               </div>
           </div>
       </div>
   </div>
</script>
<script id="template-request-intro-instant-everything" type="text/template">
   <div class="RequestForm-sectionContent">
       <div class="RequestForm-sectionContent-inner theme-no-bottom-padding" ng-class="{
               'theme-ios': isUserAgentIos
           }">
   
           <div class="RequestForm-introMap">
               <div class="tp-padding-sides--triple RequestForm-introMap-topContainer">
                   <div class="tp-heading-3 tp-weight--normal">
                       <span ng-bind="requestForm.activeCategory.plural_taxonym"></span> near you:
                   </div>
                   <div class="tp-heading-3 tp-weight--demi tp-color--brand tp-padding-bottom--double" ng-bind="prosCountByZipCode">
                   </div>
                   <div class="tp-text-3--static">
                       With a few more details, we can get the
                       <span class="tp-weight--demi">right pros and cost estimates</span> for your job.
                   </div>
               </div>
               <div class="RequestForm-introMap-bottomContainer">
                   <div class="RequestForm-introMap-map theme-mobile-only" style="background-image: url('https://static.thumbtackstatic.com/_assets/images/release/modules/request-form/images/mobile-map-2x-fdc28d42.jpg');">
                   </div>
                   <div class="RequestForm-introMap-map theme-desktop-only" style="background-image: url('https://static.thumbtackstatic.com/_assets/images/release/modules/request-form/images/desktop-map-2x-c68d86d6.jpg');">
                   </div>
               </div>
           </div>
       </div>
</script>
<script id="template-request-form-phone-number" type="text/template">
   <div ng-show="isPhoneNumberSubmitting">
       <div class="RequestForm-loadingIcon">
           <svg-icon class="ThumbtackLoader" type="puff_44x44"></svg-icon>
       </div>
   </div>
   
   <div ng-show="!isPhoneNumberSubmitting">
       <form schema="addPhoneNumberSchema" schema-assign="EmptySchema" schema-yields="phoneNumber" name="phoneForm" ng-submit="deepValidate()
               ? addPhoneNumber($event, phoneNumber.phoneNumber, phoneNumber.isPublic)
               : false">
   
           <request-form-template template-id="template-request-form-section-header">
               <p class="RequestForm-phoneNumber-header">
                   Get responses even faster with text alerts.
               </p>
           </request-form-template>
   
           <div class="page-grid">
               <div class="column-lg-4 column-lg-offset-1">
                   <input schema="addPhoneNumberSchema.phoneNumber" schema-assign="PhoneSchema" schema-optional ng-model="phoneNumber.phoneNumber" ng-class="{'valid': $valid, 'invalid': $valid === false}" ng-init="phoneNumber.phoneNumber = existingPhoneNumber" event-track="request form/provide phone number" event-track-on="blur" event-track-once event-track-if="$valid && phoneForm.phone_number.$dirty" event-track-data="trackingData.getDefault()" placeholder="ex 555-555-5555" type="tel" name="phone_number" />
   
                   <div class="T3-S RequestForm-error " ng-repeat="$err in $validationErrors" ng-bind="$err">
                   </div>
   
                   <div ng-if="phoneNumberError" class="T3-S RequestForm-error " ng-bind="phoneNumberError">
                   </div>
               </div>
   
               <div class="column-lg-4 column-lg-offset-1">
                   <input-checkbox input-checkbox-label="{[{
                               requestForm.activeCategory.plural_taxonym
                           }]} may call me directly with quotes">
   
                       <input ng-model="phoneNumber.isPublic" value="public" type="checkbox">
                   </input-checkbox>
               </div>
   
               <div class="column-lg-4 column-lg-offset-1 RequestForm-phoneNumber-description">
                   <p class="theme-secondary B5-S">
   
                       By selecting Next, you
                       <a href="https://help.thumbtack.com/?ar=kA131000000BOWj" target="_blank">
   
                           electronically authorize
                       </a> Thumbtack to send you automated text messages to notify you of quotes and activity from Thumbtack pros. Receiving text messages is optional.
                   </p>
               </div>
           </div>
   
           <request-form-template template-id="template-request-form-navigation" scope-vars="hideBack,showSkip" hide-back="true" show-skip="true">
           </request-form-template>
       </form>
   </div>
</script>
<script id="template-request-form-login" type="text/template">
   <div class="ThumbtackLoader RequestForm-loginLoader" ng-if="isLoginSectionLoading">
       <svg-icon type="puff_44x44"></svg-icon>
   </div>
   
   <form ng-submit="login($event, loginPassword)">
   
       <request-form-template template-id="template-request-form-section-header">
           <p>
               {[{ hasPassword ? "Almost there! You just need to enter your password." : "Project created! Check your email to set your password and secure your account." }]}
           </p>
   
           <span class="B3-S" ng-show="passwordEmailResent">Email sent.</span>
   
           <span class="Link B3-S" ng-click="requirePasswordCreation(email, !hasPassword)" target="_blank">
   
               {[{ hasPassword ? "Forgot password?" : "Didn't receive the email?" }]}
           </span>
       </request-form-template>
   
       <div class="RequestForm-standaloneInputSection">
           <div class="page-grid">
               <div class="column-lg-6">
                   <label for="password" class="RequestForm-inputLabel T2-S">
                       What's your password?
                   </label>
   
                   <input placeholder="Password" type="password" ng-model="loginPassword" ng-change="clearLoginError()" id="password" />
   
                   <div ng-if="loginError" class="T3-S RequestForm-error " ng-bind="loginError">
                   </div>
               </div>
           </div>
       </div>
   
       <request-form-template template-id="template-request-form-navigation" scope-vars="continueText" continue-text="'Get Quotes'">
       </request-form-template>
   </form>
</script>
<script id="template-request-form" type="text/template">
   <div class="RequestForm
           " ng-class="[
           activeSection.formClass,
           requestForm.isSubmitting ? 'theme-branded' : ''
                   ]">
   
       <div event-track="request form/start form flow" event-track-on-init event-track-data="trackingData.startFormFlow(
               requestForm.options.query,
               zipCode
           )">
       </div>
   
       <div class="RequestForm-smallLogo" ng-show="showTopLeftLogo" ng-if="shouldShowInstantEverythingExperience()">
           <svg-icon class="RequestForm-smallLogo-icon" type="thumbtack-logo_178x28"></svg-icon>
       </div>
   
       <div ng-if="requestForm.options.isInModal" class="RequestForm-customClose
               " ng-show="!activeSection.hideCloseButton
               && !requestForm.isSubmitting
               && !requestForm.options.hideClose
               && !postRequestStatus">
   
           <div ng-if="!activeSection.hideExitConfirmation">
               <button class="Link RequestForm-customClose-icon" modal-standard-launcher ng-click="openModalStandard('exit-confirmation')">
   
                   <svg-icon type="close-experimental" size="md"></svg-icon>
               </button>
           </div>
           <div ng-if="activeSection.hideExitConfirmation">
               <button class="Link RequestForm-customClose-icon" ng-click="saveFormProgress()" closes-modal-on-click>
   
                   <svg-icon type="close-experimental" size="md"></svg-icon>
               </button>
           </div>
       </div>
   
       <exit-confirmation current-step="currentStep" total-steps="totalSteps" percent-step-interval="0.05" coefficient="0.7" experiment-variant="exit-confirmation-2a">
       </exit-confirmation>
   
       <div ng-hide="(activeSection.hideProgressBar ||
               requestForm.isSubmitting
                           )" class="page-grid">
   
           <div class="column-lg-4 column-lg-offset-1">
               <div class="RequestForm-progressContainer
                                       ">
   
                   <progress-bar theme-animated label-threshold="0.7" current-step="currentStep" total-steps="totalSteps" percent-step-interval="0.05" coefficient="0.7">
                   </progress-bar>
   
               </div>
           </div>
       </div>
   
       <div ng-show="activeSection.showTopLogo && !requestForm.isSubmitting && !postRequestStatus">
           <div class="RequestForm-topLogo
               " ng-class="{
                   'theme-thinner': animationFinished || animationBeforeEmailIsActive
               }">
               <svg-icon type="thumbtack-logo_178x28"></svg-icon>
           </div>
       </div>
   
       <div ng-if="requestForm.generalError" class="page-grid">
           <div class="column-lg-6">
               <div class="RequestForm-generalError T2-S" ng-bind="requestForm.generalError"></div>
           </div>
       </div>
   
       <div ng-show="(
               !requestForm.categories &&
               (requestForm.options.query || requestForm.options.categoryId)
           ) || (
               requestForm.categories &&
               requestForm.activeCategory.id &&
               !requestForm.form
           )">
   
           <div class="RequestForm-loadingIcon
                               ">
               <svg-icon class="ThumbtackLoader" type="puff_44x44"></svg-icon>
           </div>
       </div>
   
       <div ng-if="requestForm.isSubmitting">
           <div ng-if="shouldShowInstantEverythingExperience()" class="RequestForm-loadingIcon
                               ">
               <svg-icon class="ThumbtackLoader" type="puff_44x44"></svg-icon>
           </div>
           <div ng-if="!shouldShowInstantEverythingExperience()">
   
               <post-request-interstitial>
                   <div class="PostRequestInterstitial
               theme-branded
       ">
   
                       <div class="PostRequestInterstitial-postRequest">
                           <div class="PostRequestInterstitial-postRequest-header">
                               <p class="H4-R theme-inverted">
                                   We're reaching out to the best pros for your project.
                               </p>
                           </div>
                           <div class="PostRequestInterstitial-postRequest-pros">
                               <div class="PostRequestInterstitial-postRequest-sidePro">
                                   <div class="PostRequestInterstitial-postRequest-sidePro-profilePicture">
                                       <div responsive-if="above-md" responsive-grid="page">
                                           <avatar class="Avatar Avatar--md">
                                               <div class="Avatar__circle">
   
                                               </div>
   
                                           </avatar>
   
                                       </div>
                                       <div responsive-if="below-md" responsive-grid="page">
                                           <avatar class="Avatar Avatar--sm">
                                               <div class="Avatar__circle">
   
                                               </div>
   
                                           </avatar>
   
                                       </div>
                                   </div>
                                   <div class="PostRequestInterstitial-postRequest-sidePro-stars">
                                       <svg-icon class="PostRequestInterstitial-postRequest-star" type="star" size="sm"></svg-icon>
                                       <svg-icon class="PostRequestInterstitial-postRequest-star" type="star" size="sm"></svg-icon>
                                       <svg-icon class="PostRequestInterstitial-postRequest-star" type="star" size="sm"></svg-icon>
                                       <svg-icon class="PostRequestInterstitial-postRequest-star" type="star" size="sm"></svg-icon>
                                       <svg-icon class="PostRequestInterstitial-postRequest-star" type="star" size="sm"></svg-icon>
                                   </div>
                               </div>
                               <div class="PostRequestInterstitial-postRequest-centerPro">
                                   <div class="PostRequestInterstitial-postRequest-centerPro-profilePicture">
                                       <div responsive-if="above-md" responsive-grid="page">
                                           <avatar class="Avatar Avatar--mdLg">
                                               <div class="Avatar__circle">
   
                                               </div>
   
                                           </avatar>
   
                                       </div>
                                       <div responsive-if="below-md" responsive-grid="page">
                                           <avatar class="Avatar Avatar--md">
                                               <div class="Avatar__circle">
   
                                               </div>
   
                                           </avatar>
   
                                       </div>
                                   </div>
                                   <div class="PostRequestInterstitial-postRequest-centerPro-stars">
                                       <div responsive-if="above-md" responsive-grid="page">
                                           <svg-icon class="PostRequestInterstitial-postRequest-star" type="star" size="md"></svg-icon>
                                       </div>
                                       <div responsive-if="below-md" responsive-grid="page">
                                           <svg-icon class="PostRequestInterstitial-postRequest-star" type="star" size="sm"></svg-icon>
                                       </div>
                                       <div responsive-if="above-md" responsive-grid="page">
                                           <svg-icon class="PostRequestInterstitial-postRequest-star" type="star" size="md"></svg-icon>
                                       </div>
                                       <div responsive-if="below-md" responsive-grid="page">
                                           <svg-icon class="PostRequestInterstitial-postRequest-star" type="star" size="sm"></svg-icon>
                                       </div>
                                       <div responsive-if="above-md" responsive-grid="page">
                                           <svg-icon class="PostRequestInterstitial-postRequest-star" type="star" size="md"></svg-icon>
                                       </div>
                                       <div responsive-if="below-md" responsive-grid="page">
                                           <svg-icon class="PostRequestInterstitial-postRequest-star" type="star" size="sm"></svg-icon>
                                       </div>
                                       <div responsive-if="above-md" responsive-grid="page">
                                           <svg-icon class="PostRequestInterstitial-postRequest-star" type="star" size="md"></svg-icon>
                                       </div>
                                       <div responsive-if="below-md" responsive-grid="page">
                                           <svg-icon class="PostRequestInterstitial-postRequest-star" type="star" size="sm"></svg-icon>
                                       </div>
                                       <div responsive-if="above-md" responsive-grid="page">
                                           <svg-icon class="PostRequestInterstitial-postRequest-star" type="star" size="md"></svg-icon>
                                       </div>
                                       <div responsive-if="below-md" responsive-grid="page">
                                           <svg-icon class="PostRequestInterstitial-postRequest-star" type="star" size="sm"></svg-icon>
                                       </div>
                                   </div>
                               </div>
                               <div class="PostRequestInterstitial-postRequest-sidePro">
                                   <div class="PostRequestInterstitial-postRequest-sidePro-profilePicture">
                                       <div responsive-if="above-md" responsive-grid="page">
                                           <avatar class="Avatar Avatar--md">
                                               <div class="Avatar__circle">
   
                                               </div>
   
                                           </avatar>
   
                                       </div>
                                       <div responsive-if="below-md" responsive-grid="page">
                                           <avatar class="Avatar Avatar--sm">
                                               <div class="Avatar__circle">
   
                                               </div>
   
                                           </avatar>
   
                                       </div>
                                   </div>
                                   <div class="PostRequestInterstitial-postRequest-sidePro-stars">
                                       <svg-icon class="PostRequestInterstitial-postRequest-star" type="star" size="sm"></svg-icon>
                                       <svg-icon class="PostRequestInterstitial-postRequest-star" type="star" size="sm"></svg-icon>
                                       <svg-icon class="PostRequestInterstitial-postRequest-star" type="star" size="sm"></svg-icon>
                                       <svg-icon class="PostRequestInterstitial-postRequest-star" type="star" size="sm"></svg-icon>
                                       <svg-icon class="PostRequestInterstitial-postRequest-star" type="star" size="sm"></svg-icon>
                                   </div>
                               </div>
                           </div>
                           <div class="PostRequestInterstitial-postRequest-loader">
                               <div class="LoadingDots
       LoadingDots--inverse">
   
                                   <div></div>
                                   <div></div>
                                   <div></div>
                               </div>
   
                           </div>
                       </div>
                   </div>
               </post-request-interstitial>
   
           </div>
       </div>
   
       <div ng-if="postRequestStatus" event-track="post request/overview" event-track-on-init event-track-data="trackingData.getDefault()">
           <post-request-overview request-id="requestIdCreated" />
       </div>
   
       <div ng-if="!requestForm.categories
               && !requestForm.options.categoryId
               && !requestForm.options.query" request-form-section="'hercule'" ng-show="activeSection.id === 'hercule'">
   
           <div ng-init="initDisplayFirstSection()"></div>
   
           <request-form-template template-id="template-request-form-hercule">
           </request-form-template>
       </div>
   
       <div ng-if="requestForm.options.query && requestForm.categories.length === 0" request-form-section="'noResults'" ng-show="activeSection.id === 'noResults'">
   
           <div ng-init="initDisplayFirstSection()"></div>
   
           <request-form-template template-id="template-request-form-no-results">
           </request-form-template>
       </div>
   
       <div ng-if="requestForm.showCategoryChooser()
            || forceShowCategoryChooser" request-form-section="'categoryChooser'" hide-back-button="true" hide-progress-bar="encodedServiceId" ng-show="activeSection.id === 'categoryChooser' &&
               !(requestForm.categories && requestForm.activeCategory.id && !requestForm.form)">
   
           <div ng-init="initDisplayFirstSection()"></div>
   
           <request-form-template template-id="template-request-category-chooser-radio" scope-vars="categories" categories="requestForm.categories">
           </request-form-template>
       </div>
   
       <div ng-if="needPhoneNumber" request-form-section="'phoneNumber'" hide-exit-confirmation="true" hide-progress-bar="true" show-top-logo="true">
   
           <div ng-if="activeSection.id === 'phoneNumber'" event-track="request form/view phone number option" event-track-on-init event-track-data="trackingData.getDefault()">
           </div>
   
           <request-form-template template-id="template-request-form-phone-number">
           </request-form-template>
       </div>
   
       <div ng-cloak ng-if="requestForm.categories && requestForm.form && requestForm.activeCategory.id" ng-hide="requestForm.isSubmitting">
   
           <div ng-init="initDisplayFirstSection()"></div>
   
           <form id="request-form" schema="requestFormSchema" schema-assign="EmptySchema" schema-yields="$model" schema-cache-id="{[{ requestForm.activeCategory.id }]}" name="form" ng-submit="
                   (schedulingHandler.processCustomerSchedulingData($model, activeSection.id)
                       && deepValidate(activeSection.$scope))
                   ? handleSubmit($event, $model.contactInfo.email, $model.fullName.name)
                   : false">
   
               <input type="hidden" name="req_source" value="{[{ requestSource }]}" />
               <input type="hidden" name="request_origin" value="{[{ requestOrigin }]}" />
               <input type="hidden" name="rca" value="{[{ requestForm.activeCategory.id }]}" />
               <input type="hidden" name="rfo" value="{[{ requestForm.form.encoded_form_id }]}" />
               <input type="hidden" name="sav" value="{[{ encodedServiceId }]}" />
               <input type="hidden" name="device_fingerprint" value="{[{ requestForm.deviceFingerprint }]}" />
               <input type="hidden" name="customer_category_pk" value="{[{ requestForm.activeCustomerCategory }]}" />
   
               <div ng-if="shouldShowInstantEverythingExperience()" ng-show="activeSection.id === 'introZipCode'" request-form-section="'introZipCode'" hide-back-button="true" schema="requestFormSchema.introZipCode" schema-assign="EmptySchema" schema-validation-subsection>
   
                   <div ng-if="activeSection.id === 'introZipCode'" event-track="request form/view intro explanation" event-track-on-init event-track-data="trackingData.getDefault()">
                   </div>
   
                   <request-form-template template-id="template-request-intro-zip-instant-everything">
                   </request-form-template>
               </div>
   
               <div ng-if="!hideIntroScreen && shouldShowInstantEverythingExperience()" ng-show="activeSection.id === 'explanationIntro'" request-form-section="'explanationIntro'" hide-back-button="false" schema="requestFormSchema.intro" schema-assign="EmptySchema" schema-validation-subsection>
   
                   <div ng-if="activeSection.id === 'explanationIntro'" event-track="request form/view intro explanation" event-track-on-init event-track-data="trackingData.getDefault()">
                   </div>
   
                   <request-form-template template-id="template-request-intro-instant-everything">
                   </request-form-template>
               </div>
               <div ng-if="!hideIntroScreen && !shouldShowInstantEverythingExperience()
                       && !(encodedServiceId)" ng-show="activeSection.id === 'explanationIntro'" request-form-section="'explanationIntro'" form-class-when-visible="'theme-branded'" is-branded-section="true" hide-progress-bar="true" hide-back-button="!(requestForm.categories.length > 1  || forceShowCategoryChooser)" schema="requestFormSchema.intro" schema-assign="EmptySchema" schema-validation-subsection>
   
                   <div ng-if="activeSection.id === 'explanationIntro'" event-track="request form/view intro explanation" event-track-on-init event-track-data="trackingData.getDefault()">
                   </div>
   
                   <request-form-template template-id="template-request-explanation" scope-vars="category" category="requestForm.activeCategory">
                   </request-form-template>
               </div>
   
               <div schema="requestFormSchema.questions" schema-assign="EmptySchema">
                   <request-form-template template-id="template-request-questions" scope-vars="showedCategoryChooser" showed-category-chooser="showedCategoryChooser()">
                   </request-form-template>
               </div>
   
               <div ng-if="requestForm.activeCategory.allows_image_upload" ng-show="activeSection.id === 'imageUpload'" request-form-section="'imageUpload'" schema-validation-subsection schema="requestFormSchema.imageUpload" schema-assign="EmptySchema">
   
                   <div ng-if="activeSection.id === 'imageUpload'" event-track="request form/view image upload question" event-track-on-init event-track-data="trackingData.getDefault()">
                   </div>
   
                   <request-form-template template-id="template-request-image-upload" scope-vars="category" category="requestForm.activeCategory">
                   </request-form-template>
   
                   <request-form-template template-id="template-request-form-navigation" scope-vars="continueText" continue-text="requestForm.addImages && !activeSection.hasImages
                           ? 'Skip'
                           : ''">
                   </request-form-template>
               </div>
   
               <div ng-if="requestForm.activeCategory.travel_types.length >= 1">
                   <div ng-if="activeSection.id === 'location'" event-track="request form/view location questions" event-track-on-init event-track-data="trackingData.getDefault()"></div>
   
                   <div ng-if="requestForm.activeCategory.travel_types.length === 1">
                       <input type="hidden" name="req_travel[]" value="{[{ requestForm.activeCategory.travel_types[0] }]}">
   
                       <div ng-if="requestForm.activeCategory.travel_types.indexOf('toprovider') !== -1" ng-show="activeSection.id === 'location'" request-form-section="'location'" schema-validation-subsection schema="requestFormSchema.location" schema-assign="EmptySchema">
   
                           <request-form-template template-id="template-request-service-location-distance-standalone">
                           </request-form-template>
   
                           <request-form-template template-id="template-request-form-navigation">
                           </request-form-template>
                       </div>
                   </div>
   
                   <div ng-if="requestForm.activeCategory.travel_types.length > 1" ng-show="activeSection.id === 'location'" request-form-section="'location'" schema-validation-subsection schema="requestFormSchema.location" schema-assign="EmptySchema">
   
                       <request-form-template template-id="template-request-service-location" scope-vars="category" category="requestForm.activeCategory">
                       </request-form-template>
   
                       <request-form-template template-id="template-request-form-navigation">
                       </request-form-template>
                   </div>
               </div>
   
               <div ng-if="schedulingHandler.showNewSchedulingExperience">
                   <div ng-if="schedulingHandler.schedulingArchetype === 'event_with_duration'
                           || schedulingHandler.schedulingArchetype === 'event_no_duration'" ng-show="activeSection.id === 'scheduling'" request-form-section="'scheduling'" schema-validation-subsection schema="requestFormSchema.scheduling" schema-assign="EmptySchema">
   
                       <div ng-if="activeSection.id === 'scheduling'" event-track="request form/view scheduling questions" event-track-on-init event-track-data="trackingData.getSchedulingDefault(requestForm)"></div>
   
                       <request-form-template template-id="template-request-scheduling-event" scope-vars="category" category="requestForm.activeCategory">
                       </request-form-template>
   
                       <request-form-template template-id="template-request-form-navigation">
                       </request-form-template>
                   </div>
   
                   <div ng-if="schedulingHandler.schedulingArchetype === 'event_with_duration'
                           || schedulingHandler.schedulingArchetype === 'event_no_duration'" ng-show="activeSection.id === 'schedulingTimes'" request-form-section="'schedulingTimes'" schema="requestFormSchema.event" schema-assign="EmptySchema">
   
                       <request-form-template template-id="template-request-scheduling-event-time" scope-vars="category" category="requestForm.activeCategory">
                       </request-form-template>
   
                       <request-form-template template-id="template-request-form-navigation">
                       </request-form-template>
                   </div>
   
                   <div ng-if="schedulingHandler.showV2CadenceQuestion
                           && (schedulingHandler.schedulingArchetype === 'multi_recurring'
                           || schedulingHandler.schedulingArchetype === 'multi_mixed')" ng-show="activeSection.id === 'cadence'" request-form-section="'cadence'" schema-validation-subsection schema="requestFormSchema.cadence" schema-assign="EmptySchema">
   
                       <div ng-if="activeSection.id === 'scheduling'" event-track="request form/view scheduling questions" event-track-on-init event-track-data="trackingData.getSchedulingDefault(requestForm)"></div>
   
                       <request-form-template template-id="template-request-scheduling-multi-cadence" scope-vars="category,scheduling" category="requestForm.activeCategory" scheduling="requestForm.scheduling">
                       </request-form-template>
   
                       <request-form-template template-id="template-request-form-navigation">
                       </request-form-template>
                   </div>
   
                   <div ng-if="schedulingHandler.schedulingArchetype === 'multi_recurring'
                           || (schedulingHandler.schedulingArchetype === 'multi_mixed'
                           && $model.cadence.cadencePreference !== 'just_once')" ng-show="activeSection.id === 'cadenceDaysTimes'" request-form-section="'cadenceDaysTimes'" schema-validation-subsection schema="requestFormSchema.cadenceDaysTimes" schema-assign="EmptySchema">
   
                       <request-form-template template-id="template-request-scheduling-multi-cadence-days-times" scope-vars="category,scheduling" category="requestForm.activeCategory" scheduling="requestForm.scheduling">
                       </request-form-template>
   
                       <request-form-template template-id="template-request-form-navigation">
                       </request-form-template>
                   </div>
   
                   <div ng-if="schedulingHandler.schedulingArchetype === 'multi_nonrecurring'
                           || (schedulingHandler.schedulingArchetype === 'multi_mixed'
                           && $model.cadence.cadencePreference === 'just_once')" ng-show="activeSection.id === 'scheduling'" request-form-section="'scheduling'" schema-validation-subsection schema="requestFormSchema.scheduling" schema-assign="EmptySchema">
   
                       <div ng-if="activeSection.id === 'scheduling'" event-track="request form/view scheduling questions" event-track-on-init event-track-data="trackingData.getSchedulingDefault(requestForm)"></div>
   
                       <request-form-template template-id="template-request-scheduling-multi" scope-vars="category,scheduling" category="requestForm.activeCategory" scheduling="requestForm.scheduling">
                       </request-form-template>
   
                       <request-form-template template-id="template-request-form-navigation">
                       </request-form-template>
                   </div>
   
                   <div ng-if="(schedulingHandler.schedulingArchetype === 'multi_nonrecurring'
                           || (schedulingHandler.schedulingArchetype === 'multi_mixed'
                           && $model.cadence.cadencePreference === 'just_once'))
                           && $model.scheduling.dayPreference !== 'as_recommended_by_pro'" ng-show="activeSection.id === 'schedulingTimes'" request-form-section="'schedulingTimes'" schema="requestFormSchema.timeslots" schema-assign="EmptySchema">
   
                       <request-form-template template-id="template-request-scheduling-timeslots" scope-vars="category,scheduling" category="requestForm.activeCategory" scheduling="requestForm.scheduling">
                       </request-form-template>
   
                       <request-form-template template-id="template-request-form-navigation">
                       </request-form-template>
                   </div>
   
                   <div ng-if="schedulingHandler.schedulingArchetype === 'completed_by'">
                       <input type="hidden" name="scheduling_timestamps_array" value="[]" />
                   </div>
               </div>
   
               <div ng-if="!schedulingHandler.showNewSchedulingExperience">
                   <div ng-if="requestForm.activeCategory.scheduling_type === 'event'
                           || requestForm.activeCategory.scheduling_type === 'appointment'" ng-show="activeSection.id === 'originalScheduling'" request-form-section="'originalScheduling'" schema-validation-subsection schema="requestFormSchema.scheduling" schema-assign="EmptySchema">
   
                       <div ng-if="activeSection.id === 'originalScheduling'" event-track="request form/view scheduling questions" event-track-on-init event-track-data="trackingData.getDefault()"></div>
   
                       <request-form-template template-id="template-request-scheduling" scope-vars="category" category="requestForm.activeCategory">
                       </request-form-template>
   
                       <request-form-template template-id="template-request-form-navigation">
                       </request-form-template>
                   </div>
               </div>
   
               <div ng-show="activeSection.id === 'anythingElse'" request-form-section="'anythingElse'" schema-validation-subsection schema="requestFormSchema.anythingElse" schema-assign="EmptySchema">
   
                   <div ng-if="activeSection.id === 'anythingElse'" event-track="request form/view anything else question" event-track-on-init event-track-data="trackingData.getDefault()"></div>
   
                   <request-form-template template-id="template-request-description">
                   </request-form-template>
                   <request-form-template template-id="template-request-form-navigation" scope-vars="continueText" continue-text="$model.anythingElse.anythingElse.moreInfo ? 'Next' : 'Skip'">
                   </request-form-template>
               </div>
   
               <div ng-if="!shouldShowInstantEverythingExperience()" ng-show="activeSection.id === 'zipCode'" request-form-section="'zipCode'" schema-validation-subsection schema="requestFormSchema.zipCode" schema-assign="EmptySchema">
   
                   <div ng-if="activeSection.id === 'zipCode'" event-track="request form/view zipcode input" event-track-on-init event-track-data="trackingData.getDefault()"></div>
   
                   <request-form-template template-id="template-request-form-section-header">
                       Please confirm where you need the {[{ requestForm.activeCategory.sentence_taxonym }]}.
                   </request-form-template>
   
                   <request-form-template template-id="template-request-zip-code" class="RequestForm-standaloneInputSection">
                   </request-form-template>
   
                   <request-form-template template-id="template-request-form-navigation" scope-vars="isLastSection" is-last-section="requestForm.options.loggedIn">
                   </request-form-template>
               </div>
   
               <div ng-if="!requestForm.options.loggedIn && !removeFindProsAnimation" ng-show="activeSection.id === 'findProsAnimation'" form-class-when-visible="'theme-find-pros-animation'" should-show-main-nav="false" hide-progress-bar="true" show-top-logo="true" hide-back-button="true" hide-close-button="true" request-form-section="'findProsAnimation'">
   
                   <div class="RequestForm-findProsWrapper
                       ">
   
                       <div class="find-pros-animation">
                           <div class="find-pros-animation__stage">
                               <div class="find-pros-animation__circle3 find-pros-animation--center"></div>
                               <div class="find-pros-animation__circle2 find-pros-animation--center"></div>
                               <div class="find-pros-animation__circle1 find-pros-animation--center"></div>
   
                               <img src="https://static.thumbtackstatic.com/_assets/images/release/modules/find-pros-animation/images/request-form-32cacb0a.svg" class="find-pros-animation__request-form find-pros-animation--center">
   
                               <img src="https://static.thumbtackstatic.com/_assets/images/release/modules/find-pros-animation/images/check-0a0a748f.svg" class="find-pros-animation__check">
   
                               <div class="find-pros-animation__tile1">
                                   <img src="https://static.thumbtackstatic.com/_assets/images/release/modules/find-pros-animation/images/quote-9cdb1629.svg" class="find-pros-animation__quote">
   
                                   <img src="https://static.thumbtackstatic.com/_assets/images/release/modules/find-pros-animation/images/avatar-male-6f6abe69.svg" class="find-pros-animation__avatar1">
                               </div>
   
                               <div class="find-pros-animation__tile2">
                                   <img src="https://static.thumbtackstatic.com/_assets/images/release/modules/find-pros-animation/images/quote-9cdb1629.svg" class="find-pros-animation__quote">
   
                                   <img src="https://static.thumbtackstatic.com/_assets/images/release/modules/find-pros-animation/images/avatar-male-6f6abe69.svg" class="find-pros-animation__avatar2">
                               </div>
   
                               <div class="find-pros-animation__tile3">
                                   <img src="https://static.thumbtackstatic.com/_assets/images/release/modules/find-pros-animation/images/quote-9cdb1629.svg" class="find-pros-animation__quote">
   
                                   <img src="https://static.thumbtackstatic.com/_assets/images/release/modules/find-pros-animation/images/avatar-female-6f32361e.svg" class="find-pros-animation__avatar3">
                               </div>
                           </div>
                           <div class="find-pros-animation__text H4-R">
                               <p>Matching your answers with pros.</p>
                           </div>
                       </div>
   
                   </div>
               </div>
   
               <div ng-if="!requestForm.options.loggedIn && shouldShowInstantEverythingExperience()" ng-show="activeSection.id === 'ixSubmission'" should-show-main-nav="false" hide-back-button="true" hide-close-button="true" hide-progress-bar="true" form-class-when-visible="'theme-branded'" request-form-section="'ixSubmission'">
   
                   <div>
   
                       <post-request-interstitial>
                           <div class="PostRequestInterstitial
               theme-branded
       ">
   
                               <div class="PostRequestInterstitial-postRequest">
                                   <div class="PostRequestInterstitial-postRequest-header">
                                       <p class="H4-R theme-inverted">
                                           We're reaching out to the best pros for your project.
                                       </p>
                                   </div>
                                   <div class="PostRequestInterstitial-postRequest-pros">
                                       <div class="PostRequestInterstitial-postRequest-sidePro">
                                           <div class="PostRequestInterstitial-postRequest-sidePro-profilePicture">
                                               <div responsive-if="above-md" responsive-grid="page">
                                                   <avatar class="Avatar Avatar--md">
                                                       <div class="Avatar__circle">
   
                                                       </div>
   
                                                   </avatar>
   
                                               </div>
                                               <div responsive-if="below-md" responsive-grid="page">
                                                   <avatar class="Avatar Avatar--sm">
                                                       <div class="Avatar__circle">
   
                                                       </div>
   
                                                   </avatar>
   
                                               </div>
                                           </div>
                                           <div class="PostRequestInterstitial-postRequest-sidePro-stars">
                                               <svg-icon class="PostRequestInterstitial-postRequest-star" type="star" size="sm"></svg-icon>
                                               <svg-icon class="PostRequestInterstitial-postRequest-star" type="star" size="sm"></svg-icon>
                                               <svg-icon class="PostRequestInterstitial-postRequest-star" type="star" size="sm"></svg-icon>
                                               <svg-icon class="PostRequestInterstitial-postRequest-star" type="star" size="sm"></svg-icon>
                                               <svg-icon class="PostRequestInterstitial-postRequest-star" type="star" size="sm"></svg-icon>
                                           </div>
                                       </div>
                                       <div class="PostRequestInterstitial-postRequest-centerPro">
                                           <div class="PostRequestInterstitial-postRequest-centerPro-profilePicture">
                                               <div responsive-if="above-md" responsive-grid="page">
                                                   <avatar class="Avatar Avatar--mdLg">
                                                       <div class="Avatar__circle">
   
                                                       </div>
   
                                                   </avatar>
   
                                               </div>
                                               <div responsive-if="below-md" responsive-grid="page">
                                                   <avatar class="Avatar Avatar--md">
                                                       <div class="Avatar__circle">
   
                                                       </div>
   
                                                   </avatar>
   
                                               </div>
                                           </div>
                                           <div class="PostRequestInterstitial-postRequest-centerPro-stars">
                                               <div responsive-if="above-md" responsive-grid="page">
                                                   <svg-icon class="PostRequestInterstitial-postRequest-star" type="star" size="md"></svg-icon>
                                               </div>
                                               <div responsive-if="below-md" responsive-grid="page">
                                                   <svg-icon class="PostRequestInterstitial-postRequest-star" type="star" size="sm"></svg-icon>
                                               </div>
                                               <div responsive-if="above-md" responsive-grid="page">
                                                   <svg-icon class="PostRequestInterstitial-postRequest-star" type="star" size="md"></svg-icon>
                                               </div>
                                               <div responsive-if="below-md" responsive-grid="page">
                                                   <svg-icon class="PostRequestInterstitial-postRequest-star" type="star" size="sm"></svg-icon>
                                               </div>
                                               <div responsive-if="above-md" responsive-grid="page">
                                                   <svg-icon class="PostRequestInterstitial-postRequest-star" type="star" size="md"></svg-icon>
                                               </div>
                                               <div responsive-if="below-md" responsive-grid="page">
                                                   <svg-icon class="PostRequestInterstitial-postRequest-star" type="star" size="sm"></svg-icon>
                                               </div>
                                               <div responsive-if="above-md" responsive-grid="page">
                                                   <svg-icon class="PostRequestInterstitial-postRequest-star" type="star" size="md"></svg-icon>
                                               </div>
                                               <div responsive-if="below-md" responsive-grid="page">
                                                   <svg-icon class="PostRequestInterstitial-postRequest-star" type="star" size="sm"></svg-icon>
                                               </div>
                                               <div responsive-if="above-md" responsive-grid="page">
                                                   <svg-icon class="PostRequestInterstitial-postRequest-star" type="star" size="md"></svg-icon>
                                               </div>
                                               <div responsive-if="below-md" responsive-grid="page">
                                                   <svg-icon class="PostRequestInterstitial-postRequest-star" type="star" size="sm"></svg-icon>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="PostRequestInterstitial-postRequest-sidePro">
                                           <div class="PostRequestInterstitial-postRequest-sidePro-profilePicture">
                                               <div responsive-if="above-md" responsive-grid="page">
                                                   <avatar class="Avatar Avatar--md">
                                                       <div class="Avatar__circle">
   
                                                       </div>
   
                                                   </avatar>
   
                                               </div>
                                               <div responsive-if="below-md" responsive-grid="page">
                                                   <avatar class="Avatar Avatar--sm">
                                                       <div class="Avatar__circle">
   
                                                       </div>
   
                                                   </avatar>
   
                                               </div>
                                           </div>
                                           <div class="PostRequestInterstitial-postRequest-sidePro-stars">
                                               <svg-icon class="PostRequestInterstitial-postRequest-star" type="star" size="sm"></svg-icon>
                                               <svg-icon class="PostRequestInterstitial-postRequest-star" type="star" size="sm"></svg-icon>
                                               <svg-icon class="PostRequestInterstitial-postRequest-star" type="star" size="sm"></svg-icon>
                                               <svg-icon class="PostRequestInterstitial-postRequest-star" type="star" size="sm"></svg-icon>
                                               <svg-icon class="PostRequestInterstitial-postRequest-star" type="star" size="sm"></svg-icon>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="PostRequestInterstitial-postRequest-loader">
                                       <div class="LoadingDots
       LoadingDots--inverse">
   
                                           <div></div>
                                           <div></div>
                                           <div></div>
                                       </div>
   
                                   </div>
                               </div>
                           </div>
                       </post-request-interstitial>
   
                   </div>
               </div>
   
               <div ng-if="!requestForm.options.loggedIn && shouldShowInstantEverythingExperience()" ng-show="activeSection.id === 'contactInfo'" request-form-section="'contactInfo'" is-last-section="true" hide-progress-bar="true" hide-back-button="true" show-top-logo="true" schema-validation-subsection schema="requestFormSchema.ixContactInfo" schema-assign="EmptySchema">
   
                   <div ng-if="activeSection.id === 'contactInfo'" event-track="request form/view contact form" event-track-on-init event-track-data="trackingData.viewContactForm()"></div>
   
                   <request-form-template template-id="template-request-email-instant-everything" class="RequestForm-standaloneInputSection">
                   </request-form-template>
               </div>
               <div ng-if="!requestForm.options.loggedIn && !shouldShowInstantEverythingExperience()" ng-show="activeSection.id === 'contactInfo'" request-form-section="'contactInfo'" hide-progress-bar="true" show-top-logo="true" schema-validation-subsection schema="requestFormSchema.contactInfo" schema-assign="EmptySchema">
   
                   <div ng-if="activeSection.id === 'contactInfo'" event-track="request form/view contact form" event-track-on-init event-track-data="trackingData.viewContactForm()"></div>
   
                   <request-form-template template-id="template-request-form-section-header">
   
                       We don't share your email with pros.
                   </request-form-template>
   
                   <div class="RequestForm-standaloneInputSection">
                       <request-form-template template-id="template-request-contact-email" scope-vars="category" category="requestForm.activeCategory">
                       </request-form-template>
                   </div>
   
                   <request-form-template ng-if="!requestForm.options.loggedIn" template-id="template-request-form-navigation">
                   </request-form-template>
   
               </div>
   
               <div ng-if="!requestForm.options.loggedIn && !shouldShowInstantEverythingExperience()" ng-show="activeSection.id === 'fullName'" request-form-section="'fullName'" hide-progress-bar="true" show-top-logo="true" schema-validation-subsection schema="requestFormSchema.fullName" schema-assign="EmptySchema">
   
                   <div ng-if="activeSection.id === 'fullName'" event-track="request form/view name input" event-track-on-init event-track-data="trackingData.getDefault()"></div>
   
                   <request-form-template template-id="template-request-form-section-header" is-theme-higher="true">
                       Please enter your full name.
                   </request-form-template>
   
                   <request-form-template template-id="template-request-full-name" class="RequestForm-standaloneInputSection">
                   </request-form-template>
   
                   <request-form-template template-id="template-request-form-navigation" scope-vars="isLastSection,isDisclaimerThemeSmaller" is-last-section="true">
                   </request-form-template>
               </div>
   
           </form>
   
           <div ng-if="!requestForm.options.loggedIn" hide-progress-bar="true" show-top-logo="true" ng-show="activeSection.id === 'login'" request-form-section="'login'">
   
               <request-form-template template-id="template-request-form-login">
               </request-form-template>
           </div>
       </div>
   </div>
</script>
<script id="template-request-modal" type="text/template">
   <div standard-modal disable-backdrop-close="true" hide-close="true">
   
       <request-form form-type="thumbprint" zip-code="'{[{ zipCode }]}'" query="{[{ query }]}" category-id="{[{ categoryId }]}" category-ids="{[{ categoryIds }]}" customer-category-pk="{[{ customerCategoryPk }]}" logged-in="false" from-homepage="{[{ fromHomepage }]}" force-single-form="{[{ forceSingleForm }]}" hercule-version="1" hide-intro-screen="
               {[{ hideIntroScreen }]}
           " intro-emphasize-projects="{[{ introEmphasizeProjects }]}" progress-bar-total-offset="1" is-in-modal="{[{ isInModal }]}" use-unspecified-categories="{[{ useUnspecifiedCategories }]}">
       </request-form>
   </div>
</script>
<?php $__env->stopSection(); ?> <?php $__env->startSection('script'); ?>
<!-- <script src="<?php echo e(URL::To('public/assets/recommendations.es6-d56774e6.js')); ?>">
   </script> -->
<!-- <script src="<?php echo e(URL::To('public/assets/jquery-migrate.min')); ?>"></script> -->
<!-- <script src="<?php echo e(URL::To('public/assets/explore-project-ng.es6-d5b4dbec.js')); ?>">
   </script> -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.thumb', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>