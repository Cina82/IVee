<?php $__env->startSection('css'); ?>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo e(URL::to('public/wizardDemo/wizard.css')); ?>" rel="stylesheet" />
    <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="<?php echo e(URL::to('public/wizardDemo/javascripts/jquery.validate.min.js')); ?>"></script>
    <script src="<?php echo e(URL::to('public/wizardDemo/javascripts/jquery.validate.unobtrusive.js')); ?>"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo e(URL::to('public/wizardDemo/wizard.js')); ?>"></script>   
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="Homepage">
   <div viewport-element="hero">
      <hero
         class="Hero "
         responsive-image
         responsive-grid="page"
         uses-densities
         above-md="{
         '1x': '<?php echo e(URL::to('public/assets/img/home-hero-lg-1x-c459a9bc.jpg')); ?>

         ',
         '2x': '<?php echo e(URL::to('public/assets/img/home-hero-lg-1x-c459a9bc.jpg')); ?>

         '
         }"
         above-sm-below-md="{
         '1x': ' <?php echo e(URL::to('public/assets/img/home-hero-lg-1x-c459a9bc.jpg')); ?>

         ',
         '2x': '<?php echo e(URL::to('public/assets/img/home-hero-lg-1x-c459a9bc.jpg')); ?>

         '
         }"
         below-sm="{ <?php echo e(URL::to('public/assets/img/home-hero-lg-1x-c459a9bc.jpg')); ?>

         ',
         '2x': ' <?php echo e(URL::to('public/assets/img/home-hero-lg-1x-c459a9bc.jpg')); ?>

         '
         }"
         >
         <div class="Hero-tint "
            >
         </div>
         <div class="page-grid Hero-grid">
            <div class="Hero-content">
               <div class="column-lg-6">
                  <h1 class="Hero-content-title tp-heading-1 ">
                     Consider it done.
                  </h1>
               </div>
               <div class="column-lg-4 column-md-6">
                  <h4 class="H4-R Hero-content-subtitle theme-inverted ">
                     From house painting to personal training, we bring you the right pros for every project on your list.
                  </h4>
               </div>
               <div class="column-lg-4 column-md-6">
                  <div class="Hero-content-cta">
                     <div class="SearchForm theme-default">
                        <form search-form open-request-form-modal
                           from-homepage="1"
                           hide-intro-screen=""
                           ng-submit="submitSearch($event)"
                           class="SearchForm-form"
                           action="#"
                           hercule-root-url="https://hercule.thumbtack.com"
                           hercule-version="0"
                           include-test=""
                           page-type="4"
                           search-origin="searchform-homepage"
                           event-name="searchform-homepage"
                           homepage-redirect-to-near-me=""
                           >
                           <div class="SearchForm-form-inputGroup multi-line-sm" dir="rtl">
                           
                              <span class="SearchForm-form-query B2-S"
                                 ng-class="{'dropdownOpen': suggestionsOpen}">
                                 <input class="query"
                                    ng-class="{'is-empty-state': isEmptyState}"
                                    required
                                    autocomplete="off"
                                    placeholder="?What service do you need"
                                    type="search"
                                    event-track="home page/start service query"
                                    event-track-on="keypress"
                                    event-track-data="{
                                    pageType: '4',
                                    searchOrigin: 'searchform-homepage',
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
                              <button class="
                                 SearchForm-form-submitBtn
                                 Button
                                 theme-large
                                 "
                                 type="submit"
                                 event-track="hercule/click get started"
                                 event-track-on="click"
                                 event-track-data="{
                                 pageType: '4',
                                 searchOrigin: 'searchform-homepage',
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
      </hero>
   </div>
   <?php echo $__env->make('menu.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
   <div class="Moments  ">
      <div class="Moments-container">
         <div class="Moments-moment">
          
            <!-- <div class="page-grid theme-full-bleed-at-xs">
               <div class="column-lg-6">
                  <category-carousel
                     count="25"
                     responsive-grid="page">
                     <div class="CategoryCarousel">
                        <div class="CategoryCarousel-paddle paddle-left"
                           ng-click="carousel.onClickLeft()">
                           <svg-icon
                              type="left-caret"
                              size="md">
                           </svg-icon>
                        </div>
                        <div class="CategoryCarousel-container">
                           <div class="CategoryCarousel-list">
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track="recommendation/click"
                                    event-track-on="click"
                                    waypoint-track="category recommendation"
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;1axLKc3DdQ6g5w&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:0,&quot;block_position&quot;:0,&quot;block_type&quot;:2}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;1axLKc3DdQ6g5w&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:0,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item"
                                       open-request-form-modal
                                       ng-click="openModalWithCategoryId('1axLKc3DdQ6g5w', '')"
                                       >
                                      
                                       <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Personal Training 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track="recommendation/click"
                                    event-track-on="click"
                                    waypoint-track="category recommendation"
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;Ef:ZOOYOXFaD2A&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:1,&quot;block_position&quot;:0,&quot;block_type&quot;:2}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;Ef:ZOOYOXFaD2A&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:1,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item"
                                       open-request-form-modal
                                       ng-click="openModalWithCategoryId('Ef:ZOOYOXFaD2A', '')"
                                       >
                                     
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          House Cleaning 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track="recommendation/click"
                                    event-track-on="click"
                                    waypoint-track="category recommendation"
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;DlKFbmZEwCYQyA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:2,&quot;block_position&quot;:0,&quot;block_type&quot;:2}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;DlKFbmZEwCYQyA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:2,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item"
                                       open-request-form-modal
                                       ng-click="openModalWithCategoryId('DlKFbmZEwCYQyA', '')"
                                       >
                                     
                                       <img src="<?php echo e(URL::to('public/assets/img/1310_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Lawn Mowing and Trimming 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track="recommendation/click"
                                    event-track-on="click"
                                    waypoint-track="category recommendation"
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;nV8DGI4:dEUXtQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:3,&quot;block_position&quot;:0,&quot;block_type&quot;:2}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;nV8DGI4:dEUXtQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:3,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item"
                                       open-request-form-modal
                                       ng-click="openModalWithCategoryId('nV8DGI4:dEUXtQ', '')"
                                       >
                                       <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Local Moving (under 50 miles)
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track="recommendation/click"
                                    event-track-on="click"
                                    waypoint-track="category recommendation"
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;kMI95pqKXLU9vQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:4,&quot;block_position&quot;:0,&quot;block_type&quot;:2}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;kMI95pqKXLU9vQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:4,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item"
                                       open-request-form-modal
                                       ng-click="openModalWithCategoryId('kMI95pqKXLU9vQ', '')"
                                       >
                                       <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Massage Therapy 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track="recommendation/click"
                                    event-track-on="click"
                                    waypoint-track="category recommendation"
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;M:HwIR8qa:MQww&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:5,&quot;block_position&quot;:0,&quot;block_type&quot;:2}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;M:HwIR8qa:MQww&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:5,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item"
                                       open-request-form-modal
                                       ng-click="openModalWithCategoryId('M:HwIR8qa:MQww', '')"
                                       >
                                  <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Handyman 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track="recommendation/click"
                                    event-track-on="click"
                                    waypoint-track="category recommendation"
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;jc3YVHYCu45H2g&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:6,&quot;block_position&quot;:0,&quot;block_type&quot;:2}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;jc3YVHYCu45H2g&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:6,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item"
                                       open-request-form-modal
                                       ng-click="openModalWithCategoryId('jc3YVHYCu45H2g', '')"
                                       >
                                    <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Event Catering 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track="recommendation/click"
                                    event-track-on="click"
                                    waypoint-track="category recommendation"
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;4Gs5C$PsIesk5A&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:7,&quot;block_position&quot;:0,&quot;block_type&quot;:2}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;4Gs5C$PsIesk5A&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:7,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item"
                                       open-request-form-modal
                                       ng-click="openModalWithCategoryId('4Gs5C$PsIesk5A', '')"
                                       >
                                        <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Bounce House and Party Inflatables Rental 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track="recommendation/click"
                                    event-track-on="click"
                                    waypoint-track="category recommendation"
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;bIY6hGfB2q8syQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:8,&quot;block_position&quot;:0,&quot;block_type&quot;:2}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;bIY6hGfB2q8syQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:8,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item"
                                       open-request-form-modal
                                       ng-click="openModalWithCategoryId('bIY6hGfB2q8syQ', '')"
                                       >
                                      <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Private Swim Lessons 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track="recommendation/click"
                                    event-track-on="click"
                                    waypoint-track="category recommendation"
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;GTdkGWTMaOx4Wg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:9,&quot;block_position&quot;:0,&quot;block_type&quot;:2}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;GTdkGWTMaOx4Wg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:9,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item"
                                       open-request-form-modal
                                       ng-click="openModalWithCategoryId('GTdkGWTMaOx4Wg', '')"
                                       >
                                      <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Dog Training 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track="recommendation/click"
                                    event-track-on="click"
                                    waypoint-track="category recommendation"
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;Q9sYIW2IZP5AkA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:10,&quot;block_position&quot;:0,&quot;block_type&quot;:2}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;Q9sYIW2IZP5AkA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:10,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item"
                                       open-request-form-modal
                                       ng-click="openModalWithCategoryId('Q9sYIW2IZP5AkA', '')"
                                       >
                                      
                                       <img src="<?php echo e(URL::to('public/assets/img/3009_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Wedding and Event Makeup 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track="recommendation/click"
                                    event-track-on="click"
                                    waypoint-track="category recommendation"
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;XyyEps5FZMepLQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:11,&quot;block_position&quot;:0,&quot;block_type&quot;:2}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;XyyEps5FZMepLQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:11,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item"
                                       open-request-form-modal
                                       ng-click="openModalWithCategoryId('XyyEps5FZMepLQ', '')"
                                       >
                                       <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Interior Painting 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track="recommendation/click"
                                    event-track-on="click"
                                    waypoint-track="category recommendation"
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;iJlabHh2QF9ylg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:12,&quot;block_position&quot;:0,&quot;block_type&quot;:2}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;iJlabHh2QF9ylg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:12,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item"
                                       open-request-form-modal
                                       ng-click="openModalWithCategoryId('iJlabHh2QF9ylg', '')"
                                       >
                                      <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          DJ 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track="recommendation/click"
                                    event-track-on="click"
                                    waypoint-track="category recommendation"
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;9J5P8q6rNlEGlQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:13,&quot;block_position&quot;:0,&quot;block_type&quot;:2}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;9J5P8q6rNlEGlQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:13,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item"
                                       open-request-form-modal
                                       ng-click="openModalWithCategoryId('9J5P8q6rNlEGlQ', '')"
                                       >
                                      <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Fence and Gate Installation 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track="recommendation/click"
                                    event-track-on="click"
                                    waypoint-track="category recommendation"
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;Rfn88VIV27Tb3g&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:14,&quot;block_position&quot;:0,&quot;block_type&quot;:2}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;Rfn88VIV27Tb3g&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:14,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item"
                                       open-request-form-modal
                                       ng-click="openModalWithCategoryId('Rfn88VIV27Tb3g', '')"
                                       >
                                        <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Portrait Photography 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track="recommendation/click"
                                    event-track-on="click"
                                    waypoint-track="category recommendation"
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;Bg9:OPqOradztw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:15,&quot;block_position&quot;:0,&quot;block_type&quot;:2}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;Bg9:OPqOradztw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:15,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item"
                                       open-request-form-modal
                                       ng-click="openModalWithCategoryId('Bg9:OPqOradztw', '')"
                                       >
                                        <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Outdoor Landscaping and Design 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track="recommendation/click"
                                    event-track-on="click"
                                    waypoint-track="category recommendation"
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;b7cSvw5Y7PhRlA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:16,&quot;block_position&quot;:0,&quot;block_type&quot;:2}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;b7cSvw5Y7PhRlA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:16,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item"
                                       open-request-form-modal
                                       ng-click="openModalWithCategoryId('b7cSvw5Y7PhRlA', '')"
                                       >
                                        <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Wedding Officiant 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track="recommendation/click"
                                    event-track-on="click"
                                    waypoint-track="category recommendation"
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;1AlrokYQ00L8eQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:17,&quot;block_position&quot;:0,&quot;block_type&quot;:2}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;1AlrokYQ00L8eQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:17,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item"
                                       open-request-form-modal
                                       ng-click="openModalWithCategoryId('1AlrokYQ00L8eQ', '')"
                                       >
                                      <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Roof Installation or Replacement 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track="recommendation/click"
                                    event-track-on="click"
                                    waypoint-track="category recommendation"
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;6WTJnO6mPxjoag&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:18,&quot;block_position&quot;:0,&quot;block_type&quot;:2}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;6WTJnO6mPxjoag&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:18,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item"
                                       open-request-form-modal
                                       ng-click="openModalWithCategoryId('6WTJnO6mPxjoag', '')"
                                       >
                                     <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Pest Control Services 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track="recommendation/click"
                                    event-track-on="click"
                                    waypoint-track="category recommendation"
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;kPijy0lr$n4Dgw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:19,&quot;block_position&quot;:0,&quot;block_type&quot;:2}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;kPijy0lr$n4Dgw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:19,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item"
                                       open-request-form-modal
                                       ng-click="openModalWithCategoryId('kPijy0lr$n4Dgw', '')"
                                       >
                                     <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Swimming Pool Cleaning, Maintenance, and Inspection 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track="recommendation/click"
                                    event-track-on="click"
                                    waypoint-track="category recommendation"
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;dQJN84Ndr5s$Xg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:20,&quot;block_position&quot;:0,&quot;block_type&quot;:2}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;dQJN84Ndr5s$Xg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:20,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item"
                                       open-request-form-modal
                                       ng-click="openModalWithCategoryId('dQJN84Ndr5s$Xg', '')"
                                       >
                                    <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Party Bus Rental 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track="recommendation/click"
                                    event-track-on="click"
                                    waypoint-track="category recommendation"
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;HSN$F3bPaZ1iaw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:21,&quot;block_position&quot;:0,&quot;block_type&quot;:2}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;HSN$F3bPaZ1iaw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:21,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item"
                                       open-request-form-modal
                                       ng-click="openModalWithCategoryId('HSN$F3bPaZ1iaw', '')"
                                       >
                                    <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Piano Lessons 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track="recommendation/click"
                                    event-track-on="click"
                                    waypoint-track="category recommendation"
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;Vin8kPc8QyC5KQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:22,&quot;block_position&quot;:0,&quot;block_type&quot;:2}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;Vin8kPc8QyC5KQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:22,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item"
                                       open-request-form-modal
                                       ng-click="openModalWithCategoryId('Vin8kPc8QyC5KQ', '')"
                                       >
                                    <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Computer Repair 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track="recommendation/click"
                                    event-track-on="click"
                                    waypoint-track="category recommendation"
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;29EdERcHj04lig&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:23,&quot;block_position&quot;:0,&quot;block_type&quot;:2}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;29EdERcHj04lig&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:23,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item"
                                       open-request-form-modal
                                       ng-click="openModalWithCategoryId('29EdERcHj04lig', '')"
                                       >
                                    <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Central Air Conditioning Repair 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track="recommendation/click"
                                    event-track-on="click"
                                    waypoint-track="category recommendation"
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;VNuwXawPoFKfrw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:24,&quot;block_position&quot;:0,&quot;block_type&quot;:2}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;VNuwXawPoFKfrw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:24,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item"
                                       open-request-form-modal
                                       ng-click="openModalWithCategoryId('VNuwXawPoFKfrw', '')"
                                       >
                                     <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          ACT Tutoring 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track="recommendation/click"
                                    event-track-on="click"
                                    waypoint-track="category recommendation"
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;1axLKc3DdQ6g5w&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:0,&quot;block_position&quot;:0,&quot;block_type&quot;:2}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;1axLKc3DdQ6g5w&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:0,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item"
                                       open-request-form-modal
                                       ng-click="openModalWithCategoryId('1axLKc3DdQ6g5w', '')"
                                       >
                                      
                                       <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Personal Training 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track="recommendation/click"
                                    event-track-on="click"
                                    waypoint-track="category recommendation"
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;Ef:ZOOYOXFaD2A&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:1,&quot;block_position&quot;:0,&quot;block_type&quot;:2}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;Ef:ZOOYOXFaD2A&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:1,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item"
                                       open-request-form-modal
                                       ng-click="openModalWithCategoryId('Ef:ZOOYOXFaD2A', '')"
                                       >
                                       
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
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track="recommendation/click"
                                    event-track-on="click"
                                    waypoint-track="category recommendation"
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;DlKFbmZEwCYQyA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:2,&quot;block_position&quot;:0,&quot;block_type&quot;:2}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;DlKFbmZEwCYQyA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:2,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item"
                                       open-request-form-modal
                                       ng-click="openModalWithCategoryId('DlKFbmZEwCYQyA', '')"
                                       >
                                      
                                       <img src="<?php echo e(URL::to('public/assets/img/1310_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Lawn Mowing and Trimming 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track="recommendation/click"
                                    event-track-on="click"
                                    waypoint-track="category recommendation"
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;nV8DGI4:dEUXtQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:3,&quot;block_position&quot;:0,&quot;block_type&quot;:2}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;nV8DGI4:dEUXtQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:3,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item"
                                       open-request-form-modal
                                       ng-click="openModalWithCategoryId('nV8DGI4:dEUXtQ', '')"
                                       >
                                     <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Local Moving (under 50 miles)
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track="recommendation/click"
                                    event-track-on="click"
                                    waypoint-track="category recommendation"
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;kMI95pqKXLU9vQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:4,&quot;block_position&quot;:0,&quot;block_type&quot;:2}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;kMI95pqKXLU9vQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:4,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item"
                                       open-request-form-modal
                                       ng-click="openModalWithCategoryId('kMI95pqKXLU9vQ', '')"
                                       >
                                      <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Massage Therapy 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track="recommendation/click"
                                    event-track-on="click"
                                    waypoint-track="category recommendation"
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;M:HwIR8qa:MQww&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:5,&quot;block_position&quot;:0,&quot;block_type&quot;:2}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;M:HwIR8qa:MQww&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:5,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item"
                                       open-request-form-modal
                                       ng-click="openModalWithCategoryId('M:HwIR8qa:MQww', '')"
                                       >
                                    <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
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
                        <div
                           class="CategoryCarousel-paddle paddle-right"
                           ng-click="carousel.onClickRight()">
                           <svg-icon
                              type="right-caret"
                              size="md">
                           </svg-icon>
                        </div>
                     </div>
                  </category-carousel>
               </div>
            </div>
         </div> -->
<!--          <div class="Moments-moment">
            <div class="page-grid">
               <div class="column-lg-6">
                  <h4 class="tp-heading-4 Moments-moment-title">Trending now</h4>
               </div>
            </div>
            <div class="page-grid theme-full-bleed-at-xs">
               <div class="column-lg-6">
                  <category-carousel
                     count="6"
                     responsive-grid="page">
                     <div class="CategoryCarousel">
                        <div
                           class="CategoryCarousel-paddle paddle-left"
                           ng-click="carousel.onClickLeft()">
                           <svg-icon
                              type="left-caret"
                              size="md">
                           </svg-icon>
                        </div>
                        <div class="CategoryCarousel-container">
                           <div class="CategoryCarousel-list">
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track="recommendation/click"
                                    event-track-on="click"
                                    waypoint-track="category recommendation"
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;6nlpb86x4sELeQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:0,&quot;block_position&quot;:1,&quot;block_type&quot;:3}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;6nlpb86x4sELeQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:0,&quot;block_position&quot;:1,&quot;block_type&quot;:3}">
                                    <a class="ServiceBox-item"
                                       open-request-form-modal
                                       ng-click="openModalWithCategoryId('6nlpb86x4sELeQ', '')"
                                       >
                                      
                                       <img src="<?php echo e(URL::to('public/assets/img/2250_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Singing Lessons 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track="recommendation/click"
                                    event-track-on="click"
                                    waypoint-track="category recommendation"
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;oBbEKZglfn$eJQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:1,&quot;block_position&quot;:1,&quot;block_type&quot;:3}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;oBbEKZglfn$eJQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:1,&quot;block_position&quot;:1,&quot;block_type&quot;:3}">
                                    <a class="ServiceBox-item"
                                       open-request-form-modal
                                       ng-click="openModalWithCategoryId('oBbEKZglfn$eJQ', '')"
                                       >
                                     
                                       <img src="<?php echo e(URL::to('public/assets/img/2240_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Pet Sitting 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track="recommendation/click"
                                    event-track-on="click"
                                    waypoint-track="category recommendation"
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;q75MpVw2qNDkmQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:2,&quot;block_position&quot;:1,&quot;block_type&quot;:3}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;q75MpVw2qNDkmQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:2,&quot;block_position&quot;:1,&quot;block_type&quot;:3}">
                                    <a class="ServiceBox-item"
                                       open-request-form-modal
                                       ng-click="openModalWithCategoryId('q75MpVw2qNDkmQ', '')"
                                       >
                                     <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Junk Removal 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track="recommendation/click"
                                    event-track-on="click"
                                    waypoint-track="category recommendation"
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;MOc1BYoYDRBwZg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:3,&quot;block_position&quot;:1,&quot;block_type&quot;:3}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;MOc1BYoYDRBwZg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:3,&quot;block_position&quot;:1,&quot;block_type&quot;:3}">
                                    <a class="ServiceBox-item"
                                       open-request-form-modal
                                       ng-click="openModalWithCategoryId('MOc1BYoYDRBwZg', '')"
                                       >
                                     <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Swimming Pool Installation 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track="recommendation/click"
                                    event-track-on="click"
                                    waypoint-track="category recommendation"
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;ac9WaewolzmHmw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:4,&quot;block_position&quot;:1,&quot;block_type&quot;:3}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;ac9WaewolzmHmw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:4,&quot;block_position&quot;:1,&quot;block_type&quot;:3}">
                                    <a class="ServiceBox-item"
                                       open-request-form-modal
                                       ng-click="openModalWithCategoryId('ac9WaewolzmHmw', '')"
                                       >
                                     <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Hair Coloring and Highlights 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track="recommendation/click"
                                    event-track-on="click"
                                    waypoint-track="category recommendation"
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;4ZinwdwPMD6HGQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:5,&quot;block_position&quot;:1,&quot;block_type&quot;:3}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;4ZinwdwPMD6HGQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:5,&quot;block_position&quot;:1,&quot;block_type&quot;:3}">
                                    <a class="ServiceBox-item"
                                       open-request-form-modal
                                       ng-click="openModalWithCategoryId('4ZinwdwPMD6HGQ', '')"
                                       >
                                     <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Honeymoon Travel Specialist 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track="recommendation/click"
                                    event-track-on="click"
                                    waypoint-track="category recommendation"
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;6nlpb86x4sELeQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:0,&quot;block_position&quot;:1,&quot;block_type&quot;:3}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;6nlpb86x4sELeQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:0,&quot;block_position&quot;:1,&quot;block_type&quot;:3}">
                                    <a class="ServiceBox-item"
                                       open-request-form-modal
                                       ng-click="openModalWithCategoryId('6nlpb86x4sELeQ', '')"
                                       >
                                    
                                       <img src="<?php echo e(URL::to('public/assets/img/2250_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Singing Lessons 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track="recommendation/click"
                                    event-track-on="click"
                                    waypoint-track="category recommendation"
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;oBbEKZglfn$eJQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:1,&quot;block_position&quot;:1,&quot;block_type&quot;:3}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;oBbEKZglfn$eJQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:1,&quot;block_position&quot;:1,&quot;block_type&quot;:3}">
                                    <a class="ServiceBox-item"
                                       open-request-form-modal
                                       ng-click="openModalWithCategoryId('oBbEKZglfn$eJQ', '')"
                                       >
                                   
                                       <img src="<?php echo e(URL::to('public/assets/img/2240_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Pet Sitting 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track="recommendation/click"
                                    event-track-on="click"
                                    waypoint-track="category recommendation"
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;q75MpVw2qNDkmQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:2,&quot;block_position&quot;:1,&quot;block_type&quot;:3}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;q75MpVw2qNDkmQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:2,&quot;block_position&quot;:1,&quot;block_type&quot;:3}">
                                    <a class="ServiceBox-item"
                                       open-request-form-modal
                                       ng-click="openModalWithCategoryId('q75MpVw2qNDkmQ', '')"
                                       >
                                    <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Junk Removal 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track="recommendation/click"
                                    event-track-on="click"
                                    waypoint-track="category recommendation"
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;MOc1BYoYDRBwZg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:3,&quot;block_position&quot;:1,&quot;block_type&quot;:3}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;MOc1BYoYDRBwZg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:3,&quot;block_position&quot;:1,&quot;block_type&quot;:3}">
                                    <a class="ServiceBox-item"
                                       open-request-form-modal
                                       ng-click="openModalWithCategoryId('MOc1BYoYDRBwZg', '')"
                                       >
                                     <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Swimming Pool Installation 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track="recommendation/click"
                                    event-track-on="click"
                                    waypoint-track="category recommendation"
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;ac9WaewolzmHmw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:4,&quot;block_position&quot;:1,&quot;block_type&quot;:3}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;ac9WaewolzmHmw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:4,&quot;block_position&quot;:1,&quot;block_type&quot;:3}">
                                    <a class="ServiceBox-item"
                                       open-request-form-modal
                                       ng-click="openModalWithCategoryId('ac9WaewolzmHmw', '')"
                                       >
                                     <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Hair Coloring and Highlights 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track="recommendation/click"
                                    event-track-on="click"
                                    waypoint-track="category recommendation"
                                    event-track-data="{&quot;encodedCategoryId&quot;:&quot;4ZinwdwPMD6HGQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:5,&quot;block_position&quot;:1,&quot;block_type&quot;:3}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;4ZinwdwPMD6HGQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:5,&quot;block_position&quot;:1,&quot;block_type&quot;:3}">
                                    <a class="ServiceBox-item"
                                       open-request-form-modal
                                       ng-click="openModalWithCategoryId('4ZinwdwPMD6HGQ', '')"
                                       >
                                     <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
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
                        <div
                           class="CategoryCarousel-paddle paddle-right"
                           ng-click="carousel.onClickRight()">
                           <svg-icon
                              type="right-caret"
                              size="md">
                           </svg-icon>
                        </div>
                     </div>
                  </category-carousel>
               </div>
            </div>
         </div> -->
         <div
            class="Moments-moment"
            waypoint-track="moments"
            waypoint-track-data="{ 'moment_index': 0 }">
            <div class="page-grid">
               <div class="column-lg-6">
                  <h4 class="tp-heading-4 Moments-moment-title">Home Improvement</h4>
               </div>
            </div>
            <div class="page-grid theme-full-bleed-at-xs">
               <div class="column-lg-6">
                  <category-carousel
                     count="11"
                     responsive-grid="page">
                     <div class="CategoryCarousel">
                        <div
                           class="CategoryCarousel-paddle paddle-left"
                           ng-click="carousel.onClickLeft()">
                           <svg-icon
                              type="left-caret"
                              size="md">
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
                        <div
                           class="CategoryCarousel-paddle paddle-right"
                           ng-click="carousel.onClickRight()">
                           <svg-icon
                              type="right-caret"
                              size="md">
                           </svg-icon>
                        </div>
                     </div>
                  </category-carousel>
               </div>
            </div>
         </div>
         <div
            class="Moments-moment"
            waypoint-track="moments"
            waypoint-track-data="{ 'moment_index': 1 }">
            <div class="page-grid">
               <div class="column-lg-6">
                  <h4 class="tp-heading-4 Moments-moment-title">Weddings and Events</h4>
               </div>
            </div>
            <div class="page-grid theme-full-bleed-at-xs">
               <div class="column-lg-6">
                  <category-carousel
                     count="9"
                     responsive-grid="page">
                     <div class="CategoryCarousel">
                        <div
                           class="CategoryCarousel-paddle paddle-left"
                           ng-click="carousel.onClickLeft()">
                           <svg-icon
                              type="left-caret"
                              size="md">
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
                        <div
                           class="CategoryCarousel-paddle paddle-right"
                           ng-click="carousel.onClickRight()">
                           <svg-icon
                              type="right-caret"
                              size="md">
                           </svg-icon>
                        </div>
                     </div>
                  </category-carousel>
               </div>
            </div>
         </div>
         <div class="Moments-moment"
            waypoint-track="moments"
            waypoint-track-data="{ 'moment_index': 2 }">
            <div class="page-grid">
               <div class="column-lg-6">
                  <h4 class="tp-heading-4 Moments-moment-title">Wellness</h4>
               </div>
            </div>
            <div class="page-grid theme-full-bleed-at-xs">
               <div class="column-lg-6">
                  <category-carousel
                     count="8"
                     responsive-grid="page">
                     <div class="CategoryCarousel">
                        <div
                           class="CategoryCarousel-paddle paddle-left"
                           ng-click="carousel.onClickLeft()">
                           <svg-icon
                              type="left-caret"
                              size="md">
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
                        <div
                           class="CategoryCarousel-paddle paddle-right"
                           ng-click="carousel.onClickRight()">
                           <svg-icon
                              type="right-caret"
                              size="md">
                           </svg-icon>
                        </div>
                     </div>
                  </category-carousel>
               </div>
            </div>
         </div>
         <div
            class="Moments-moment"
            waypoint-track="nearme suggestion cards">
            <div class="page-grid">
               <div class="column-lg-6">
                  <h4 class="tp-heading-4 Moments-moment-title">More Services Near You</h4>
               </div>
            </div>
            <div class="page-grid theme-full-bleed-at-xs">
               <div class="column-lg-6">
                  <category-carousel
                     count="14"
                     responsive-grid="page">
                     <div class="CategoryCarousel">
                        <div
                           class="CategoryCarousel-paddle paddle-left"
                           ng-click="carousel.onClickLeft()">
                           <svg-icon
                              type="left-caret"
                              size="md">
                           </svg-icon>
                        </div>
                        <div class="CategoryCarousel-container">
                           <div class="CategoryCarousel-list">

                           <?php $__currentLoopData = $moreService; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                       open-request-form-modal
                                       ng-click="openModalWithCategoryId('dGELR947mm7esA', 'moments')"
                                       >
                                    <img src="<?php echo e(URL::to('public/uploads')); ?>/<?php echo e($msc['image']); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          <?php echo e($msc['name']); ?> 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                           </div>
                        </div>
                        <div
                           class="CategoryCarousel-paddle paddle-right"
                           ng-click="carousel.onClickRight()">
                           <svg-icon
                              type="right-caret"
                              size="md">
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
       
         <!-- <div
            class="Moments-moment"
            waypoint-track="costpages carousel">
            <div class="page-grid">
               <div class="column-lg-6">
                  <h4 class="tp-heading-4 Moments-moment-title">Pricing &amp; Estimates</h4>
               </div>
            </div>
            <div class="page-grid theme-full-bleed-at-xs">
               <div class="column-lg-6">
                  <category-carousel
                     count="15"
                     responsive-grid="page">
                     <div class="CategoryCarousel">
                        <div
                           class="CategoryCarousel-paddle paddle-left"
                           ng-click="carousel.onClickLeft()">
                           <svg-icon
                              type="left-caret"
                              size="md">
                           </svg-icon>
                        </div>
                        <div class="CategoryCarousel-container">
                           <div class="CategoryCarousel-list">
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track-data="{&quot;encodedCategoryId&quot;:null,&quot;categoryName&quot;:0,&quot;origin&quot;:null}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:null,&quot;categoryName&quot;:0,&quot;origin&quot;:null}">
                                    <a class="ServiceBox-item"
                                       href="/p/wedding-cake-prices"
                                       >
                                       
                                       <img src="<?php echo e(URL::to('public/assets/img/1813_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Wedding cake prices 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track-data="{&quot;encodedCategoryId&quot;:null,&quot;categoryName&quot;:0,&quot;origin&quot;:null}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:null,&quot;categoryName&quot;:0,&quot;origin&quot;:null}">
                                    <a class="ServiceBox-item"
                                       href="/p/party-bus-prices"
                                       >
                                        <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Party bus prices 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track-data="{&quot;encodedCategoryId&quot;:null,&quot;categoryName&quot;:0,&quot;origin&quot;:null}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:null,&quot;categoryName&quot;:0,&quot;origin&quot;:null}">
                                    <a class="ServiceBox-item"
                                       href="/p/carpet-cleaning-prices"
                                       >
                                       <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Carpet cleaning prices 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track-data="{&quot;encodedCategoryId&quot;:null,&quot;categoryName&quot;:0,&quot;origin&quot;:null}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:null,&quot;categoryName&quot;:0,&quot;origin&quot;:null}">
                                    <a class="ServiceBox-item"
                                       href="/p/house-cleaning-prices"
                                       >
                                       
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          House cleaning prices 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track-data="{&quot;encodedCategoryId&quot;:null,&quot;categoryName&quot;:0,&quot;origin&quot;:null}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:null,&quot;categoryName&quot;:0,&quot;origin&quot;:null}">
                                    <a class="ServiceBox-item"
                                       href="/p/dog-grooming-prices"
                                       >
                                     <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Dog grooming prices 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track-data="{&quot;encodedCategoryId&quot;:null,&quot;categoryName&quot;:0,&quot;origin&quot;:null}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:null,&quot;categoryName&quot;:0,&quot;origin&quot;:null}">
                                    <a class="ServiceBox-item"
                                       href="/p/moving-companies-prices"
                                       >
                                       <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Moving companies prices 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track-data="{&quot;encodedCategoryId&quot;:null,&quot;categoryName&quot;:0,&quot;origin&quot;:null}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:null,&quot;categoryName&quot;:0,&quot;origin&quot;:null}">
                                    <a class="ServiceBox-item"
                                       href="/p/mold-removal-cost"
                                       >
                                       <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Mold removal cost 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track-data="{&quot;encodedCategoryId&quot;:null,&quot;categoryName&quot;:0,&quot;origin&quot;:null}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:null,&quot;categoryName&quot;:0,&quot;origin&quot;:null}">
                                    <a class="ServiceBox-item"
                                       href="/p/land-survey-cost"
                                       >
                                    <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Land survey cost 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track-data="{&quot;encodedCategoryId&quot;:null,&quot;categoryName&quot;:0,&quot;origin&quot;:null}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:null,&quot;categoryName&quot;:0,&quot;origin&quot;:null}">
                                    <a class="ServiceBox-item"
                                       href="/p/locksmiths-prices"
                                       >
                                    <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Locksmiths prices 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track-data="{&quot;encodedCategoryId&quot;:null,&quot;categoryName&quot;:0,&quot;origin&quot;:null}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:null,&quot;categoryName&quot;:0,&quot;origin&quot;:null}">
                                    <a class="ServiceBox-item"
                                       href="/p/tree-trimming-cost"
                                       >
                                      <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Tree trimming cost 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track-data="{&quot;encodedCategoryId&quot;:null,&quot;categoryName&quot;:0,&quot;origin&quot;:null}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:null,&quot;categoryName&quot;:0,&quot;origin&quot;:null}">
                                    <a class="ServiceBox-item"
                                       href="/p/cost-to-rewire-a-house"
                                       >
                                      
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Cost to rewire a house 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track-data="{&quot;encodedCategoryId&quot;:null,&quot;categoryName&quot;:0,&quot;origin&quot;:null}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:null,&quot;categoryName&quot;:0,&quot;origin&quot;:null}">
                                    <a class="ServiceBox-item"
                                       href="/p/wedding-djs-cost"
                                       >
                                       <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Wedding DJs cost 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track-data="{&quot;encodedCategoryId&quot;:null,&quot;categoryName&quot;:0,&quot;origin&quot;:null}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:null,&quot;categoryName&quot;:0,&quot;origin&quot;:null}">
                                    <a class="ServiceBox-item"
                                       href="/p/duct-cleaning-cost"
                                       >
                                        <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Duct cleaning cost 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track-data="{&quot;encodedCategoryId&quot;:null,&quot;categoryName&quot;:0,&quot;origin&quot;:null}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:null,&quot;categoryName&quot;:0,&quot;origin&quot;:null}">
                                    <a class="ServiceBox-item"
                                       href="/p/deep-cleaning-cost"
                                       >
                                       <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Deep cleaning cost 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track-data="{&quot;encodedCategoryId&quot;:null,&quot;categoryName&quot;:0,&quot;origin&quot;:null}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:null,&quot;categoryName&quot;:0,&quot;origin&quot;:null}">
                                    <a class="ServiceBox-item"
                                       href="/p/stump-grinding-cost"
                                       >
                                     <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Stump grinding cost 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track-data="{&quot;encodedCategoryId&quot;:null,&quot;categoryName&quot;:0,&quot;origin&quot;:null}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:null,&quot;categoryName&quot;:0,&quot;origin&quot;:null}">
                                    <a class="ServiceBox-item"
                                       href="/p/wedding-cake-prices"
                                       >
                                     
                                       <img src="<?php echo e(URL::to('public/assets/img/1813_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Wedding cake prices 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track-data="{&quot;encodedCategoryId&quot;:null,&quot;categoryName&quot;:0,&quot;origin&quot;:null}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:null,&quot;categoryName&quot;:0,&quot;origin&quot;:null}">
                                    <a class="ServiceBox-item"
                                       href="/p/party-bus-prices"
                                       >
                                     <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Party bus prices 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track-data="{&quot;encodedCategoryId&quot;:null,&quot;categoryName&quot;:0,&quot;origin&quot;:null}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:null,&quot;categoryName&quot;:0,&quot;origin&quot;:null}">
                                    <a class="ServiceBox-item"
                                       href="/p/carpet-cleaning-prices"
                                       >
                                      <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Carpet cleaning prices 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track-data="{&quot;encodedCategoryId&quot;:null,&quot;categoryName&quot;:0,&quot;origin&quot;:null}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:null,&quot;categoryName&quot;:0,&quot;origin&quot;:null}">
                                    <a class="ServiceBox-item"
                                       href="/p/house-cleaning-prices"
                                       >
                                       
                                       <img src="<?php echo e(URL::to('public/assets/img/2833_thumbnail.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          House cleaning prices 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track-data="{&quot;encodedCategoryId&quot;:null,&quot;categoryName&quot;:0,&quot;origin&quot;:null}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:null,&quot;categoryName&quot;:0,&quot;origin&quot;:null}">
                                    <a class="ServiceBox-item"
                                       href="/p/dog-grooming-prices"
                                       >
                                     <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Dog grooming prices 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div
                                    class="
                                    ServiceBox-container
                                    theme-carousel     "
                                    event-track-data="{&quot;encodedCategoryId&quot;:null,&quot;categoryName&quot;:0,&quot;origin&quot;:null}"
                                    waypoint-track-data="{&quot;encodedCategoryId&quot;:null,&quot;categoryName&quot;:0,&quot;origin&quot;:null}">
                                    <a class="ServiceBox-item"
                                       href="/p/moving-companies-prices"
                                       >
                                    <img src="<?php echo e(URL::to('public/assets/img/2992_small.jpeg')); ?>" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Moving companies prices 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div
                           class="CategoryCarousel-paddle paddle-right"
                           ng-click="carousel.onClickRight()">
                           <svg-icon
                              type="right-caret"
                              size="md">
                           </svg-icon>
                        </div>
                     </div>
                  </category-carousel>
               </div>
            </div>
         </div> -->
      </div>
   </div>
   <about-thumbtack>
      <div class="about-thumbtack">
         <div class="tp-wrap-snap">
            <h2 class="about-thumbtack__heading tp-heading-2">How Ivee works</h2>
            <div class="tp-grid tp-grid--middle tp-grid--wide">
               <div class="tp-col tp-col--12 tp-col--md-6">
                  <img class="about-thumbtack__image"
                     responsive-image
                     responsive-grid="page"
                     uses-densities
                     above-md="{
                     '1x': 'https://static.thumbtackstatic.com/_assets/images/release/pages/homepage/submodules/about-thumbtack/images/how-to-1x-4ccfe4e4.png',
                     '2x': 'https://static.thumbtackstatic.com/_assets/images/release/pages/homepage/submodules/about-thumbtack/images/how-to-2x-6d720865.png'
                     }"
                     below-md="{
                     '1x': 'https://static.thumbtackstatic.com/_assets/images/release/pages/homepage/submodules/about-thumbtack/images/how-to-1x-4ccfe4e4.png',
                     '2x': 'https://static.thumbtackstatic.com/_assets/images/release/pages/homepage/submodules/about-thumbtack/images/how-to-2x-6d720865.png'
                     }" />
               </div>
               <div class="tp-col tp-col--12 tp-col--md-6" dir="rtl">
                  <ol>
                     <li class="about-thumbtack__text">
                        <h5 class="about-thumbtack__text__title tp-heading-4">
                           1. Tell us what you need
                        </h5>
                        <p>First, answer a few quick questions about what type of pro you’re looking for.</p>
                     </li>
                     <li class="about-thumbtack__text">
                        <h5 class="about-thumbtack__text__title tp-heading-4">
                           2. Review free quotes
                        </h5>
                        <p>Within hours, you’ll receive up to five custom quotes based on your specific needs.</p>
                     </li>
                     <li class="about-thumbtack__text">
                        <h5 class="about-thumbtack__text__title tp-heading-4">
                           3. Hire the right pro
                        </h5>
                        <p>Compare quotes, profiles, and reviews, then hire the pro that’s right for you.</p>
                     </li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
   </about-thumbtack>
   <states-list>
      <div class="states-list">
         <div class="tp-wrap-snap">
            <h2 class="states-list__heading tp-heading-2">Find us in all 50 states</h2>
            <ol class="states-list__list" dir="rtl">
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/al/">
                  Alabama
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/ak/">
                  Alaska
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/az/">
                  Arizona
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/ar/">
                  Arkansas
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/ca/">
                  California
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/co/">
                  Colorado
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/ct/">
                  Connecticut
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/de/">
                  Delaware
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/fl/">
                  Florida
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/ga/">
                  Georgia
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/hi/">
                  Hawaii
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/id/">
                  Idaho
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/il/">
                  Illinois
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/in/">
                  Indiana
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/ia/">
                  Iowa
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/ks/">
                  Kansas
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/ky/">
                  Kentucky
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/la/">
                  Louisiana
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/me/">
                  Maine
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/md/">
                  Maryland
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/ma/">
                  Massachusetts
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/mi/">
                  Michigan
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/mn/">
                  Minnesota
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/ms/">
                  Mississippi
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/mo/">
                  Missouri
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/mt/">
                  Montana
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/ne/">
                  Nebraska
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/nv/">
                  Nevada
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/nh/">
                  New Hampshire
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/nj/">
                  New Jersey
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/nm/">
                  New Mexico
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/ny/">
                  New York
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/nc/">
                  North Carolina
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/nd/">
                  North Dakota
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/oh/">
                  Ohio
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/ok/">
                  Oklahoma
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/or/">
                  Oregon
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/pa/">
                  Pennsylvania
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/ri/">
                  Rhode Island
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/sc/">
                  South Carolina
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/sd/">
                  South Dakota
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/tn/">
                  Tennessee
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/tx/">
                  Texas
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/ut/">
                  Utah
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/vt/">
                  Vermont
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/va/">
                  Virginia
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/wa/">
                  Washington
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/dc/">
                  Washington, DC
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/wv/">
                  West Virginia
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/wi/">
                  Wisconsin
                  </a>
               </li>
               <li>
                  <a class="tp-link--dark"
                     event-track="home page/clicked usa state"
                     event-track-on="click"
                     href="/wy/">
                  Wyoming
                  </a>
               </li>
            </ol>
         </div>
      </div>
   </states-list>
   <guarantee-tout>
      <div class="guarantee-tout">
         <div responsive-if="below-sm"
            responsive-grid="page">
            <div class="guarantee-tout__image"
               responsive-image
               responsive-grid="page"
               uses-densities
               below-sm="{
               '1x': '<?php echo e(URL::to('public/assets/img/mobile-1x-aaff70a2.jpg')); ?>',
               '2x': '<?php echo e(URL::to('public/assets/img/mobile-2x-cc9383f0.jpg')); ?>'
               }"
               >
            </div>
         </div>
         <div responsive-if="above-sm"
            responsive-grid="page">
            <div class="guarantee-tout__image"
               responsive-image
               responsive-grid="page"
               uses-densities
               above-sm="{
               '1x': '<?php echo e(URL::to('public/assets/img/desktop-1x-2a11cbc8.jpg')); ?>',
               '2x': '<?php echo e(URL::to('public/assets/img/desktop-2x-a267575d.jpg')); ?>'
               }"
               >
            </div>
         </div>
         <div class="tp-wrap-snap">
            <div class="tp-grid tp-grid--flush">
               <div class="tp-col tp-col--12 tp-col--md-6 tp-col--md-offset-6">
                  <div class="guarantee-tout__box">
                     <img class="guarantee-tout__icon"
                        src="https://static.thumbtackstatic.com/_assets/svg/release/tt-guarantee-emblem_48-326a5272.svg.gz">
                     <h3 class="tp-heading-4">Ivee Guarantee</h3>
                     <p class="guarantee-tout__subtitle">$1 Million Property Protection on over a thousand local services.</p>
                     <a class="guarantee-tout__link" href="/guarantee/">Learn more</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </guarantee-tout>
   <customer-stories>
      <div class="customer-stories">
         <div class="tp-wrap-snap">
            <h2 class="customer-stories__heading tp-heading-2">Customers use Ivee to get millions of projects done quickly and easily</h2>
            <div class="tp-grid">
               <div class="customer-stories__item-wrap tp-col tp-col--12 tp-col--md-4">
                  <a href="https://www.thumbtack.com/blog/finding-an-engagement-photographer-on-thumbtack/" class="customer-stories__item"
                     event-track="home page/clicked customer story"
                     event-track-on="click"
                     event-track-data="{ story_type: 'amanda' }">
                     <div class="customer-stories__item__image"
                        style="background-image: url(<?php echo e(URL::to('public/assets/img/amanda-2fa7c886.jpg')); ?>)">
                        <div class="customer-stories__item__image-tint"></div>
                        <h3 class="customer-stories__item__title tp-heading-4">
                           Amanda hired a photographer
                        </h3>
                     </div>
                     <div class="customer-stories__item__content">
                        <div class="customer-stories__item__quote">
                           “<strong>Mickey</strong> is incredibly talented, worked within our budget and gave us GREAT results for the price. He's an awesome guy, and we couldn't be happier with how our engagement photos turned out.”
                        </div>
                        <div class="customer-stories__item__credit">
                           <img src="<?php echo e(URL::to('public/assets/img/pro-mickey-76701e1b.jpg')); ?>"
                              class="customer-stories__item__img">
                           <div class="customer-stories__item__info">
                              <h4 class="customer-stories__item__description">
                                 The pro
                              </h4>
                              <div class="customer-stories__item__name">
                                 Mickey Strider
                              </div>
                              <div class="customer-stories__item__rating">
                                 <span star-rating
                                    star-rating-bind="4.7">
                                 </span>
                                 <span>
                                 (20 reviews)
                                 </span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="customer-stories__item-wrap tp-col tp-col--12 tp-col--md-4">
                  <a href="https://www.thumbtack.com/blog/finding-your-voice-on-thumbtack/" class="customer-stories__item"
                     event-track="home page/clicked customer story"
                     event-track-on="click"
                     event-track-data="{ story_type: 'gurpreet' }">
                     <div class="customer-stories__item__image"
                        style="background-image: url(<?php echo e(URL::to('public/assets/img/gurpreet-e04a1d83.jpg')); ?>)">
                        <div class="customer-stories__item__image-tint"></div>
                        <h3 class="customer-stories__item__title tp-heading-4">
                           Guprit hired a singing teacher
                        </h3>
                     </div>
                     <div class="customer-stories__item__content">
                        <div class="customer-stories__item__quote">
                           “It was an honor learning from <strong>Sam</strong>. He is an amazing singer and teacher! I saw major improvements in my voice, breathing and vocal dynamics; connecting with songs at a level I didn't know existed.”
                        </div>
                        <div class="customer-stories__item__credit">
                           <img src="<?php echo e(URL::to('public/assets/img/pro-sam-da0071d9.jpg')); ?>"
                              class="customer-stories__item__img">
                           <div class="customer-stories__item__info">
                              <h4 class="customer-stories__item__description">
                                 The pro
                              </h4>
                              <div class="customer-stories__item__name">
                                 Sam Shin
                              </div>
                              <div class="customer-stories__item__rating">
                                 <span star-rating
                                    star-rating-bind="4.7">
                                 </span>
                                 <span>
                                 (32 reviews)
                                 </span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="customer-stories__item-wrap tp-col tp-col--12 tp-col--md-4">
                  <a href="https://www.thumbtack.com/blog/thumbtack-artists-mural-supports-colorado-river-at-colfax-whole-foods/" class="customer-stories__item"
                     event-track="home page/clicked customer story"
                     event-track-on="click"
                     event-track-data="{ story_type: 'sarah' }">
                     <div class="customer-stories__item__image"
                        style="background-image: url(<?php echo e(URL::to('public/assets/img/sarah-b78df6e9.jpg')); ?>)">
                        <div class="customer-stories__item__image-tint"></div>
                        <h3 class="customer-stories__item__title tp-heading-4">
                           Sarah hired a mural painter
                        </h3>
                     </div>
                     <div class="customer-stories__item__content">
                        <div class="customer-stories__item__quote">
                           “<strong>Gary</strong> was friendly, professional, and his work was incredible. He helped us create a design we loved within our budget. Whole Foods customers say how much the mural brightens our space!”
                        </div>
                        <div class="customer-stories__item__credit">
                           <img src="<?php echo e(URL::to('public/assets/img/pro-gary-85649e63.jpg')); ?>"
                              class="customer-stories__item__img">
                           <div class="customer-stories__item__info">
                              <h4 class="customer-stories__item__description">
                                 The pro
                              </h4>
                              <div class="customer-stories__item__name">
                                 Gary Gomez
                              </div>
                              <div class="customer-stories__item__rating">
                                 <span star-rating
                                    star-rating-bind="4.7">
                                 </span>
                                 <span>
                                 (26 reviews)
                                 </span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </customer-stories>
   <app-upsell
      reset-timeout-duration="4000">
      <div class="app-upsell"
         responsive-image
         responsive-grid="page"
         uses-densities
         above-sm="{
         '1x': '<?php echo e(URL::to('public/assets/img/appupsell-bg-1x-56aa6732.jpg')); ?>',
         '2x': '<?php echo e(URL::to('public/assets/img/appupsell-bg-2x-e8c738a7.jpg')); ?>'
         }"
         below-sm="false">
         <div class="tp-wrap-snap">
            <div class="tp-grid">
               <div class="tp-col tp-col--12 tp-col--md-6">
                  <h3 class="app-upsell__heading tp-heading-3">Get more done anytime, anywhere</h3>
                  <p class="app-upsell__subtitle">Send project requests, get quotes, and hire the right pro with the free Thumbtack app for iPhone.</p>
                  <div class="tp-input-row app-upsell__form">
                     <input
                        type="text"
                        name="cellphone"
                        size="1"
                        class="tp-text-input tp-text-input--large"
                        placeholder="Phone number"
                        ng-model="$parent.phoneNumber" />
                     <button
                        type="submit"
                        class="tp-button tp-button--highlight tp-button--large"
                        event-track="home page/clicked text me a link"
                        event-track-on="click"
                        ng-bind="transmissionStatus || 'Text me a link'"
                        ng-click="send()">
                     </button>
                  </div>
                  <a href="http://r.yoz.io/Z3.c.F">
                  <img src="https://static.thumbtackstatic.com/_assets/images/release/components/install-native-app/images/apple-app-store-c62cc2f9.svg" />
                  </a>
                  <a href="http://r.yoz.io/Z3.c.G">
                  <img src="https://static.thumbtackstatic.com/_assets/images/release/components/install-native-app/images/google-play-badge-8c7ddebe.svg" />
                  </a>
               </div>
            </div>
         </div>
      </div>
   </app-upsell>
   <testimonial-videos>
      <div class="testimonial-videos">
         <div class="tp-wrap-snap">
            <h2 class="testimonial-videos__heading tp-heading-2">Thousands of professionals are growing their businesses with Thumbtack</h2>
            <div class="tp-grid">
               <div class="tp-col tp-col--12 tp-col--md-8 tp-padding-ends">
                  <a href="#"
                     class="testimonial-videos__item testimonial-videos__item--tall"
                     style="background-image: url(<?php echo e(URL::to('public/assets/img/sara-3e60bf01.jpg')); ?>)"
                     event-track="home page/clicked pro stories"
                     event-track-on="click"
                     open-youtube-modal
                     youtube-autoplay
                     youtube-id="bruu4u_Z-SY">
                     <div class="testimonial-videos__item__text">
                        <div class="testimonial-videos__item__name tp-heading-4">
                           Sara
                        </div>
                        <div class="testimonial-videos__item__job">
                           Chef · Brooklyn, NY
                        </div>
                     </div>
                     <div class="testimonial-videos__item__play-icon">
                        <svg-icon type="play_10x10"></svg-icon>
                     </div>
                  </a>
               </div>
               <div class="tp-col tp-col--12 tp-col--md-4">
                  <div class="tp-grid">
                     <div class="tp-col tp-col--12 tp-padding-ends">
                        <a href="#"
                           class="testimonial-videos__item"
                           style="background-image:
                           url(<?php echo e(URL::to('public/assets/img/richard-2d596554.jpg')); ?>)"
                           event-track="home page/clicked pro stories"
                           event-track-on="click"
                           open-youtube-modal
                           youtube-autoplay
                           youtube-id="jiDNg8Ichgk">
                           <div class="testimonial-videos__item__text">
                              <div class="testimonial-videos__item__name tp-heading-4">
                                 Richard
                              </div>
                              <div class="testimonial-videos__item__job">
                                 Photographer · Bronx, NY
                              </div>
                           </div>
                           <div class="testimonial-videos__item__play-icon">
                              <svg-icon type="play_10x10"></svg-icon>
                           </div>
                        </a>
                     </div>
                     <div class="tp-col tp-col--12 tp-padding-ends">
                        <a href="#"
                           class="testimonial-videos__item"
                           style="background-image:
                           url(<?php echo e(URL::to('public/assets/img/katie-cd576b4e.jpg')); ?>)"
                           event-track="home page/clicked pro stories"
                           event-track-on="click"
                           open-youtube-modal
                           youtube-autoplay
                           youtube-id="4NmVC8Wpxgs">
                           <div class="testimonial-videos__item__text">
                              <div class="testimonial-videos__item__name tp-heading-4">
                                 Kate
                              </div>
                              <div class="testimonial-videos__item__job">
                                 Pet Sitter · Bradenton, FL
                              </div>
                           </div>
                           <div class="testimonial-videos__item__play-icon">
                              <svg-icon type="play_10x10"></svg-icon>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="tp-col tp-col--12 tp-col--md-4 tp-padding-ends">
                  <a href="#"
                     class="testimonial-videos__item"
                     style="background-image:
                     url(<?php echo e(URL::to('public/assets/img/bonnie-86155b0d.jpg')); ?>)"
                     event-track="home page/clicked pro stories"
                     event-track-on="click"
                     open-youtube-modal
                     youtube-autoplay
                     youtube-id="_3NsbqnjNxU">
                     <div class="testimonial-videos__item__text">
                        <div class="testimonial-videos__item__name tp-heading-4">
                           Bonnie
                        </div>
                        <div class="testimonial-videos__item__job">
                           Tutor · Houston, TX
                        </div>
                     </div>
                     <div class="testimonial-videos__item__play-icon">
                        <svg-icon type="play_10x10"></svg-icon>
                     </div>
                  </a>
               </div>
               <div class="tp-col tp-col--12 tp-col--md-4 tp-padding-ends">
                  <a href="#"
                     class="testimonial-videos__item"
                     style="background-image:
                     url(<?php echo e(URL::to('public/assets/img/eric-7d68e969.jpg')); ?>)"
                     event-track="home page/clicked pro stories"
                     event-track-on="click"
                     open-youtube-modal
                     youtube-autoplay
                     youtube-id="aMJaW5eLsis">
                     <div class="testimonial-videos__item__text">
                        <div class="testimonial-videos__item__name tp-heading-4">
                           Eric
                        </div>
                        <div class="testimonial-videos__item__job">
                           Locksmith · Phoenix, AZ
                        </div>
                     </div>
                     <div class="testimonial-videos__item__play-icon">
                        <svg-icon type="play_10x10"></svg-icon>
                     </div>
                  </a>
               </div>
               <div class="tp-col tp-col--12 tp-col--md-4 tp-padding-ends">
                  <div class="testimonial-videos__item testimonial-videos__item--callout">
                     <h4 class="testimonial-videos__item--callout__heading tp-heading-5">
                        Are you a professional looking for new customers?
                     </h4>
                     <a href="/pro" class="tp-button">Sign Up</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </testimonial-videos>
   <homepage-sticky-header
      fallback-logo="<?php echo e(URL::to('public/assets/img/Logo/LogoOrange.png')); ?>"
      corresponding-element="hero">


      <div class="SearchForm theme-default" dir="rtl">
      <form search-form open-request-form-modal
            from-homepage=""
            hide-intro-screen=""
            ng-submit="submitSearch($event)"
            class="SearchForm-form"
            action="#"
            hercule-root-url="https://hercule.thumbtack.com"
            hercule-version="0"
            include-test=""
            page-type="4"
            search-origin="searchform-stickyheader"
            event-name="searchform-stickyheader"
            homepage-redirect-to-near-me=""
            >
            <div class="SearchForm-form-inputGroup 1" >
               <span class="SearchForm-form-query B2-S"
                  ng-class="{'dropdownOpen': suggestionsOpen}">
                  <input class="query"
                     ng-class="{'is-empty-state': isEmptyState}"
                     required
                     autocomplete="off"
                     placeholder="?service do you need"
                     type="search"
                     event-track="home page/start service query"
                     event-track-on="keypress"
                     event-track-data="{
                     pageType: '4',
                     searchOrigin: 'searchform-stickyheader',
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
               <label for="search-submit"
                  class="
                  SearchForm-form-smallSubmit-wrapper
                  is-visible"
                  >
                  <svg-icon
                     type="search"
                     size="md"
                     class="HeaderSearch-form-smallSubmit-wrapper-icon">
                  </svg-icon>
               </label>
               <button class="
                  SearchForm-form-submitBtn
                  Button
                  theme-large
                  is-hidden
                  is-hidden-at-sm
                  "
                  type="submit"
                  event-track="hercule/click get started"
                  event-track-on="click"
                  event-track-data="{
                  pageType: '4',
                  searchOrigin: 'searchform-stickyheader',
                  }">
               Get Started
               </button>
            </div>
         </form>
      </div>
   </homepage-sticky-header>
</div>
<script id="template-request-form-section-header" type="text/template">
   <div class="page-grid">
       <div class="column-lg-4 column-lg-offset-1">
           <div class="RequestForm-sectionHeader
                   "
               ng-class="[
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
               <span tabindex="0"
                   ng-transclude
                   ng-class="[
                       (isBrandedScreen
                           ? 'theme-inverted H3-R theme-bold theme-title-branded' : 'H4-R')
                   ]"></span>
           </div>
       </div>
   </div>
</script>
<script id="template-request-form-hercule" type="text/template">
   <form
       ng-submit="deepValidate()
           ? requestForm.updateCategoriesFromQuery(rfHerculeModel.chosenCategory)
           : false"
       schema="rfHerculeSchema"
       schema-assign="EmptySchema"
       schema-yields="rfHerculeModel">
   
               <request-form-template template-id="template-request-form-section-header">
           What are you looking for?
   
           <div ng-if="!$question.field.required" class="T3-S">
               From house painting to personal training, we bring
               you the right pros for every project on your list.
           </div>
       </request-form-template>
   
       <div class="page-grid">
           <div class="column-lg-6">
               <span
                   search-form
                   class="SearchForm"
                   schema="rfHerculeSchema.chosenCategory"
                   schema-assign="TextInputSchema">
   
                   <input class="query"
                       autocomplete="off"
                       placeholder="What services do you need?"
                       type="text"
                       ng-model="rfHerculeModel.chosenCategory" />
               </span>
           </div>
       </div>
   
       <div class="T3-S RequestForm-error "
           ng-repeat="$err in $validationErrors"
           ng-bind="$err">
       </div>
       
       <request-form-template
           template-id="template-request-form-navigation"
           scope-vars="hideBack,continueText"
           hide-back="true"
           continue-text="'Get started'">
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
   
       <request-form-template
           template-id="template-request-form-navigation"
           scope-vars="hideBack,continueText"
           hide-back="true"
           continue-text="'Close'">
       </request-form-template>
   </form>
</script>
<script id="template-request-category-tooltip" type="text/template">
   <div class="RequestForm-categoryInfoBox B3-S">
       <p class="RequestForm-categoryInfoBox-action Link"
           ng-hide="categoryInfoBoxOpen"
           ng-click="categoryInfoBoxOpen = true"
           event-track="request form/click open tooltip"
           event-track-on="click"
           ng-init="tooltipIconIsHovered=false"
           ng-mouseover="tooltipIconIsHovered=true"
           ng-mouseleave="tooltipIconIsHovered=false">
   
           <span class="TooltipIcon RequestForm-categoryInfoBox-action-icon theme-darker-gray"
               ng-class="{ 'is-hovered': tooltipIconIsHovered }">
           </span>
           <span class="RequestForm-categoryInfoBox-action-text"> More info</span>
       </p>
   
       <div class="RequestForm-categoryInfoBox-container" ng-show="categoryInfoBoxOpen">
           <div class="RequestForm-categoryInfoBox-container-closeButton"
               ng-click="categoryInfoBoxOpen = false">
   
               <svg-icon type="close2" size="sm"></svg-icon>
           </div>
   
           <div ng-transclude></div>
       </div>
   </div>
</script>
<script id="template-hire-a-specific-pro-header" type="text/template">
   <div ng-if="requestForm.serviceData"
       class="RequestForm-proTout-experimentalDesign
           ">
       <div class="page-grid">
           <div class="column-lg-4 column-lg-offset-1"
               ng-class="{'no-photo': !requestForm.serviceData.profile_picture}">
   
               <div class="RequestForm-proTout-experimentalDesign-content">
                   <img class="RequestForm-proTout-experimentalDesign-image"
                       ng-if="requestForm.serviceData.profile_picture"
                       ng-src="{[{ requestForm.serviceData.profile_picture }]}" />
   
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
   <div ng-if="requestForm.serviceData"
      class="RequestForm-proTout-experimentalDesign-border"></div>
</script>
<script id="template-request-category-chooser-radio" type="text/template">
   <form
       ng-if="categories.length > 0"
       event-track="request form/view category chooser"
       event-track-on-init
       event-track-data="trackingData.viewCategoryChooser()"
       ng-init="chooserState = { showCount: 13 }"
       ng-submit="deepValidate()
           ? setCategory($chosenCategory.value)
           : false"
       schema="chooserSchema"
       schema-assign="ObjectValueKeySchema"
       schema-yields="$chosenCategory"
       schema-cache-id="request-form-category-chooser">
   
       
       
               <request-form-template
           template-id="template-hire-a-specific-pro-header">
       </request-form-template>
       
               <request-form-template template-id="template-request-form-section-header"
           scope-vars="isThemeSmaller"
           is-theme-smaller="true"
                       scope-vars="experimentalSpecificPro"
           experimental-specific-pro="!!requestForm.serviceData"
           >
   
           Which service are you interested in?
       </request-form-template>
   
       <request-form-template template-id="template-request-category-tooltip"
           scope-vars="tooltipIsOn"
           tooltip-is-on="true">
   
           <div ng-repeat="category in categories | limitTo: chooserState.showCount"
               ng-show="category.category_description">
   
               <h4 class="T2-S RequestForm-categoryInfoBox-category-title">
                   {[{ category.name }]}
               </h4>
               <p class="B2-S RequestForm-categoryInfoBox-category-description">
                   {[{ category.category_description }]}
               </p>
           </div>
       </request-form-template>
   
       <div id="category-chooser"
                       ng-class="{'valid': $valid, 'invalid': $valid === false}">
   
           <!-- NOTE: This mostly duplicates the section below but is used for customer categories
                The section below can be removed once we're fully migrated to customer categories
           -->
           <div ng-if="requestForm.getCustomerCategoryCount() > 0"
               ng-repeat="category in requestForm.customerCategories
                   | limitTo: chooserState.showCount"
               class="InputContainer">
   
               <div class="page-grid">
                   <div class="column-lg-6">
                       <input-radio
                           input-radio-label="{[{ category.cca_title }]}">
   
                           <input name="category-chooser"
                               value="{[{ category.cca_customer_category_pk }]}"
                               ng-model="$parent.$parent.$parent.$chosenCategory.value"
                               type="radio">
                       </input-radio>
                   </div>
               </div>
           </div>
   
           <!-- Note: This section is duplicated above. Make sure you test both sections if you're
                running conversion tests on this
            -->
           <div ng-if="requestForm.getCustomerCategoryCount() === 0"
               ng-repeat="category in categories | limitTo: chooserState.showCount"
               class="InputContainer">
   
               <div class="page-grid">
                   <div class="column-lg-6">
                       <input-radio
                           input-radio-label="{[{ category.name }]}">
   
                           <input name="category-chooser"
                               value="{[{ category.id }]}"
                               ng-model="$parent.$parent.$parent.$chosenCategory.value"
                               type="radio">
                       </input-radio>
                   </div>
               </div>
           </div>
   
           <div class="T3-S RequestForm-error "
               ng-repeat="$err in $validationErrors"
               ng-bind="$err">
           </div>
   
           <div ng-if="chooserState.showCount < categories.length
                   || chooserState.showCount < requestForm.getCustomerCategoryCount()"
               class="RequestForm-chooserShowMore">
   
               <button class="Link"
                   ng-click="chooserState.showCount = chooserState.showCount + 10">
   
                   (Show more)
               </button>
           </div>
       </div>
       
       <request-form-template
           template-id="template-request-form-navigation"
           scope-vars="hideBack"
           hide-back="true">
       </request-form-template>
   </form>
</script>
<script id="template-request-question-checkbox" type="text/template">
   <div
   schema="requestFormSchema.questions[$qID].selection"
   schema-assign="CheckboxArrayInputSchema"
   schema-optional-if="!question.field.required"
   ng-init="$qID = question.field.id"
   ng-class="{'valid': $valid, 'invalid': $valid === false}">
   
   <div
       ng-repeat="answer in question.field.possible_values"
       ng-init="$value = '' + answer.value"
       class="InputContainer">
   
       <div class="page-grid">
           <div class="column-lg-6">
               <div ng-if="!answer.can_describe">
                   <input-checkbox
                       input-checkbox-label="{[{ answer.label }]}">
   
                       <input
                                                           name="{[{ requestForm.getQuestionName($qID) }]}"
                           ng-model="$model.questions[$qID].selection[$value]"
                           value="{[{ $value }]}"
                           type="checkbox">
                   </input-checkbox>
               </div>
   
               <div ng-if="answer.can_describe" choice-other>
                   <input-checkbox>
                       <input
                           name="{[{ requestForm.getQuestionName($qID) }]}"
                           id="{[{ $qID }]}_{[{ $value }]}"
                                                           ng-model="$model.questions[$qID].selection[$value]"
                           value="{[{ $value }]}"
                           type="checkbox">
   
                       <label
                           for="{[{ $qID }]}_{[{ $value }]}"
                           class="InputCheckbox-label">
   
                           <input
                               schema="
                                   requestFormSchema.questions[$qID][$value + '_description']"
                               schema-assign="TextInputSchema"
                               schema-optional-if="!$model.questions[$qID].selection[$value]"
                               ng-model="$model.questions[$qID][$value + '_description']"
                               name="metadata_{[{ $qID }]}_descriptions[{[{ $value }]}]"
                               type="text"
                               ng-focus="bottomInputFocus()"
                               ng-blur="bottomInputBlur()"
                               placeholder="{[{ answer.label }]}"
                               class="InputCheckbox-label-inner">
                       </label>
                   </input-checkbox>
               </div>
           </div>
       </div>
   </div>
   </div>
   
   <div class="T3-S RequestForm-error "
   ng-repeat="$err in $validationErrors"
   ng-bind="$err">
   </div>
</script>
<script id="template-request-question-radio" type="text/template">
   <div
   schema="requestFormSchema.questions[$qID].selection"
   schema-assign="ObjectValueKeySchema"
   schema-optional-if="!question.field.required"
   ng-init="$qID = question.field.id"
   ng-class="{'valid': $valid, 'invalid': $valid === false}">
   
   <div ng-repeat="answer in question.field.possible_values"
       ng-init="$value = '' + answer.value"
       class="InputContainer">
   
       <div class="page-grid">
           <div class="column-lg-6">
               <div ng-if="!answer.can_describe">
                   <input-radio
                       input-radio-label="{[{ answer.label }]}">
   
                       <input name="{[{ requestForm.getQuestionName($qID) }]}"
                                                           ng-model="$model.questions[$qID].selection.value"
                           value="{[{ $value }]}"
                           type="radio" />
                   </input-radio>
               </div>
   
               <div ng-if="answer.can_describe" choice-other>
                   <input-radio>
                       <input name="{[{ requestForm.getQuestionName($qID) }]}"
                           id="{[{ $qID }]}_{[{ $value }]}"
                                                           ng-model="$model.questions[$qID].selection.value"
                           value="{[{ $value }]}"
                           type="radio" />
   
                       <label
                           for="{[{ $qID }]}_{[{ $value }]}"
                           class="InputRadio-label">
   
                           <input
                               schema="
                                   requestFormSchema.questions[$qID][$value + '_description']"
                               schema-assign="TextInputSchema"
                               schema-optional-if="$model.questions[$qID].selection.value !==
                                   $value"
                               ng-model="$model.questions[$qID][$value + '_description']"
                               name="metadata_{[{ $qID }]}_descriptions[{[{ $value }]}]"
                               type="text"
                               ng-focus="bottomInputFocus()"
                               ng-blur="bottomInputBlur()"
                               placeholder="{[{ answer.label }]}" />
                       </label>
                   </input-radio>
               </div>
           </div>
       </div>
   </div>
   </div>
   
   <div class="T3-S RequestForm-error "
   ng-repeat="$err in $validationErrors"
   ng-bind="$err">
   </div>
</script>
<script id="template-request-question-visual-checkbox" type="text/template">
   <div
       schema="requestFormSchema.questions[$qID].selection"
       schema-assign="CheckboxArrayInputSchema"
       schema-optional-if="!question.field.required"
       ng-init="$qID = question.field.id"
       ng-class="{'valid': $valid, 'invalid': $valid === false}">
   
       <div class="page-grid">
           <div class="column-lg-6">
               <div class="VisualSelectionGroup">
                   <div ng-repeat="answer in question.field.visual_possible_values"
                       ng-init="$value = '' + answer.key"
                       ng-class="{
                           'VisualSelectionGroup-item': !answer.can_describe,
                           'VisualSelectionGroup-other': answer.can_describe,
                       }">
   
                       <visual-selection
                           ng-if="!answer.can_describe"
                           image-src="{[{ answer.picture_url }]}"
                           image-label="{[{ answer.label }]}">
   
                           <input
                               name="{[{ requestForm.getQuestionName($qID) }]}"
                                                               ng-model="$model.questions[$qID].selection[$value]"
                               value="{[{ $value }]}"
                               type="checkbox" />
                       </visual-selection>
   
                       <div ng-if="answer.can_describe" choice-other>
                           <input-checkbox>
   
                               <input
                                   name="{[{ requestForm.getQuestionName($qID) }]}"
                                                                       ng-model="$model.questions[$qID].selection[$value]"
                                   value="{[{ $value }]}"
                                   type="checkbox"
                                   id="{[{ $qID }]}_{[{ $value }]}_selection"/>
   
                               <label for="{[{ $qID }]}_{[{ $value }]}_selection"
                                   class="InputCheckbox-label">
   
                                   <input
                                       schema="
                                           requestFormSchema
                                               .questions[$qID][$value + '_description']"
                                       schema-assign="TextInputSchema"
                                       schema-optional-if="
                                           !$model.questions[$qID].selection[$value]"
                                       ng-model="$model.questions[$qID][$value + '_description']"
                                       name="metadata_{[{ $qID }]}_descriptions[{[{ $value }]}]"
                                       type="text"
                                       ng-focus="bottomInputFocus()"
                                       ng-blur="bottomInputBlur()"
                                       placeholder="{[{ answer.label }]}" />
                               </label>
                           </input-checkbox>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   
   <div class="T3-S RequestForm-error "
       ng-repeat="$err in $validationErrors"
       ng-bind="$err">
   </div>
</script>
<script id="template-request-question-visual-radio" type="text/template">
   <div
       schema="requestFormSchema.questions[$qID].selection"
       schema-assign="ObjectValueKeySchema"
       schema-optional-if="!question.field.required"
       ng-init="$qID = question.field.id"
       ng-class="{'valid': $valid, 'invalid': $valid === false}">
   
       <div class="page-grid">
           <div class="column-lg-6">
               <div class="VisualSelectionGroup">
                   <div ng-repeat="answer in question.field.visual_possible_values"
                       ng-init="$value = '' + answer.key"
                       ng-class="{
                           'VisualSelectionGroup-item': !answer.can_describe,
                           'VisualSelectionGroup-other': answer.can_describe,
                       }">
   
                       <visual-selection
                           ng-if="!answer.can_describe"
                           image-src="{[{ answer.picture_url }]}"
                           image-label="{[{ answer.label }]}">
   
                           <input
                               name="{[{ requestForm.getQuestionName($qID) }]}"
                                                               ng-model="$model.questions[$qID].selection.value"
                               value="{[{ $value }]}"
                               type="radio" />
                       </visual-selection>
   
                       <div ng-if="answer.can_describe" choice-other>
                           <input-radio>
                               <input
                                   name="{[{ requestForm.getQuestionName($qID) }]}"
                                   name="metadata_{[{ $qID }]}_keys[]"
                                                                       ng-model="$model.questions[$qID].selection.value"
                                   value="{[{ $value }]}"
                                   type="radio"
                                   id="{[{ $qID }]}_{[{ $value }]}_selection" />
   
                               <label for="{[{ $qID }]}_{[{ $value }]}_selection"
                                   class="InputRadio-label">
   
                                   <input
                                       schema="requestFormSchema
                                           .questions[$qID][$value + '_description']"
                                       schema-assign="TextInputSchema"
                                       schema-optional-if="
                                           $model.questions[$qID].selection.value !== $value"
                                       ng-model="$model.questions[$qID][$value + '_description']"
                                       name="metadata_{[{ $qID }]}_descriptions[{[{ $value }]}]"
                                       type="text"
                                       ng-focus="bottomInputFocus()"
                                       ng-blur="bottomInputBlur()"
                                       placeholder="{[{ answer.label }]}" />
                               </label>
                           </input-radio>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   
   <div class="T3-S RequestForm-error "
       ng-repeat="$err in $validationErrors"
       ng-bind="$err">
   </div>
</script>
<script id="template-request-question-text" type="text/template">
   <div
       schema="requestFormSchema.questions[question.field.id].description"
       schema-assign="TextInputSchema"
       schema-optional-if="!question.field.required"
       ng-class="{'valid': $valid, 'invalid': $valid === false}"
       class="page-grid">
   
       <div class="column-lg-6">
           <textarea
               ng-if="question.field.multi_line"
               class="RequestForm-textArea"
               ng-focus="bottomInputFocus()"
               ng-blur="bottomInputBlur()"
                               ng-model="$model.questions[question.field.id].description"
               name="metadata_{[{ question.field.id }]}"
               placeholder="{[{ question.field.placeholder }]}" />
   
           <input
               ng-if="!question.field.multi_line"
                               ng-model="$model.questions[question.field.id].description"
               name="metadata_{[{ question.field.id }]}"
               type="text"
               placeholder="{[{ question.field.placeholder }]}" />
       </div>
   </div>
   
   <div class="T3-S RequestForm-error "
       ng-repeat="$err in $validationErrors"
       ng-bind="$err">
   </div>
</script>
<script id="template-request-questions" type="text/template">
   <div
       event-track="request form/view category questions"
       event-track-watch="activeSection.id"
               event-track-if="activeSection.id.indexOf('question-') === 0"
       event-track-once
       event-track-data="trackingData.viewCategoryQuestions()">
   
       <div class="prefilledResponses" ng-repeat="$question in requestForm.skippedFields">
           <input
               type="hidden"
               name="{[{ requestForm.getQuestionName($question.field.id) }]}"
               value="{[{ requestForm.getQuestionAnswer($question.field.id) }]}"/>
           <input
               type="hidden"
               name="metadata_fields[]"
               value="{[{ $question.id }]}"/>
       </div>
       <fieldset
           ng-repeat="$question in requestForm.getRequestFormFields()"
           ng-if="$question.field.type === 'text'
               || $question.field.type === 'enumeration'
               || $question.field.type === 'visual_enumeration'"
           ng-show="activeSection.id === 'question-' + $question.field.id"
           request-form-section="'question-' + $question.field.id"
                       hide-progress-bar="$first && !showedCategoryChooser && encodedServiceId"
           hide-back-button="$first && !showedCategoryChooser && encodedServiceId"
                       schema-validation-subsection
           event-track="request form/provide category question answer"
           event-track-on="change"
           event-track-data="trackingData.provideCategoryQuestionAnswer($question)"
                       ng-class="{
               required: $question.field.required
           }"
           schema="requestFormSchema.questions[{[{ $question.field.id }]}]"
           schema-assign="EmptySchema">
   
           <div
               ng-if="activeSection.id === 'question-' + $question.field.id"
               event-track="request form/view category question section"
               event-track-on-init
               event-track-data="trackingData.viewCategoryQuestionSection($question)"></div>
   
           <input
               type="hidden"
               name="metadata_fields[]"
               value="{[{ $question.id }]}" />
   
           
                       <request-form-template
               ng-if="$first && !showedCategoryChooser"
               template-id="template-hire-a-specific-pro-header">
           </request-form-template>
           
           <request-form-template template-id="template-request-form-section-header"
               scope-vars="
                               experimentalSpecificPro,
                                   isThemeSmaller
               "
               is-theme-smaller="$question.tooltip"
                               experimental-specific-pro="$first && !showedCategoryChooser"
               >
   
               {[{ $question.label }]}
   
               <div ng-if="$question.subtext" class="B2-S">
                   {[{ $question.subtext }]}
               </div>
   
               <div ng-if="!$question.field.required" class="B3-S">
                   Optional
               </div>
           </request-form-template>
   
           <request-form-template template-id="template-request-category-tooltip"
               ng-if="$question.tooltip">
                   <p class="RequestForm-categoryInfoBox-content"
                       ng-repeat="tooltip in $question.tooltip"
                       ng-bind="tooltip.content"
                       ng-class="{
                           'theme-paragraph': tooltip.extraSpaceBelow,
                           'T2-S theme-title': tooltip.title,
                           'B2-S': !tooltip.title
                       }">
                   </p>
           </request-form-template>
   
           <request-form-template
               ng-if="$question.field.type === 'enumeration' &&
                   $question.field.allows_multiple_values"
               template-id="template-request-question-checkbox"
               scope-vars="question"
               question="$question">
           </request-form-template>
   
           <request-form-template
               ng-if="$question.field.type === 'enumeration' &&
                   !$question.field.allows_multiple_values"
               template-id="template-request-question-radio"
               scope-vars="question"
               question="$question">
           </request-form-template>
   
           <request-form-template
               ng-if="$question.field.type === 'visual_enumeration' &&
                   $question.field.allows_multiple_values"
               template-id="template-request-question-visual-checkbox"
               scope-vars="question"
               question="$question">
           </request-form-template>
   
           <request-form-template
               ng-if="$question.field.type === 'visual_enumeration' &&
                   !$question.field.allows_multiple_values"
               template-id="template-request-question-visual-radio"
               scope-vars="question"
               question="$question">
           </request-form-template>
   
           <request-form-template
               ng-if="$question.field.type === 'text'"
               template-id="template-request-question-text"
               class="RequestForm-standaloneInputSection"
               scope-vars="question"
               question="$question">
           </request-form-template>
           
                       <request-form-template
               template-id="template-request-form-navigation"
               scope-vars="hideBack,continueText"
               continue-text="
                   $question.field.required || isAnswered($model.questions[$question.field.id])
                       ? 'Next'
                       : 'Skip'
               "
                               hide-back="$first && requestForm.categories.length === 1 && hideIntroScreen
                                       || ($first && !showedCategoryChooser && requestForm.serviceData)"
                           </request-form-template>
                   </fieldset>
   </div>
</script>
<script id="template-request-description" type="text/template">
   <div
   schema="requestFormSchema.anythingElse.anythingElse"
   schema-assign="EmptySchema"
   schema-default="{ customerHasMoreInfo: false }">
   
   <request-form-template template-id="template-request-form-section-header">
       Any special requests?
   </request-form-template>
   
   <div class="page-grid">
       <div class="column-lg-6">
           <div
               ng-class="{'valid': $valid, 'invalid': $valid === false}"
               schema="requestFormSchema.anythingElse.anythingElse.moreInfo"
               schema-assign="TextInputSchema"
               schema-optional>
   
               <textarea
                   class="RequestForm-textArea"
                   placeholder="Add specific instructions or info the pros should know."
                   ng-model="$model.anythingElse.anythingElse.moreInfo"
                   event-track="request form/provide additional information"
                   event-track-on="blur"
                   event-track-once
                   event-track-if="$valid && form.req_description.$dirty"
                   event-track-data="trackingData.provideAdditionalInformation(
                       $model.anythingElse.anythingElse.moreInfo)"
                   name="req_description">
               </textarea>
   
               <div class="T3-S RequestForm-error "
                   ng-repeat="$err in $validationErrors"
                   ng-bind="$err">
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
   <div ng-if="category.travel_types.length > 1"
   schema="requestFormSchema.location.serviceLocation"
   schema-assign="CheckboxArrayInputSchema"
   schema-default="{ toprovider: true, tocustomer: true }">
   
   <div ng-class="{'valid': $valid, 'invalid': $valid === false}">
       <request-form-template template-id="template-request-form-section-header">
           How would you like to work with the {[{ category.sentence_taxonym }]}?
       </request-form-template>
   
                   <div class="InputContainer is-first page-grid">
           <div
               class="column-lg-6"
               ng-if="category.travel_types.indexOf('toprovider') >= 0">
   
               <input-checkbox
                   input-checkbox-label="{[{ requestForm.getTravelTypeLabel('toprovider') }]}">
   
                   <input
                       id="service-location-toprovider"
                       ng-model="$model.location.serviceLocation.toprovider"
                       event-track="request form/change travel selection"
                       event-track-on="change"
                       event-track-data="trackingData.changeTravelSelection(
                           $model.location.serviceLocation)"
                       name="req_travel[]"
                       value="toprovider"
                       type="checkbox">
               </input-checkbox>
   
               <request-form-template
                   ng-if="$model.location.serviceLocation.toprovider"
                   template-id="template-request-service-location-distance">
               </request-form-template>
           </div>
       </div>
   
       <div class="InputContainer page-grid">
           <div
               class="column-lg-6"
               ng-if="category.travel_types.indexOf('tocustomer') >= 0">
   
               <input-checkbox
                   input-checkbox-label="{[{ requestForm.getTravelTypeLabel('tocustomer') }]}">
   
                   <input
                       id="service-location-tocustomer"
                       ng-model="$model.location.serviceLocation.tocustomer"
                       event-track="request form/change travel selection"
                       event-track-on="change"
                       event-track-data="trackingData.changeTravelSelection(
                           $model.location.serviceLocation)"
                       name="req_travel[]"
                       value="tocustomer"
                       type="checkbox">
               </input-checkbox>
           </div>
       </div>
   
       <div class="InputContainer page-grid">
           <div
               class="column-lg-6"
               ng-if="category.travel_types.indexOf('remote') >= 0">
   
               <input-checkbox
                   input-checkbox-label="{[{ requestForm.getTravelTypeLabel('remote') }]}">
   
                   <input
                       id="service-location-remote"
                       ng-model="$model.location.serviceLocation.remote"
                       event-track="request form/change travel selection"
                       event-track-on="change"
                       event-track-data="trackingData.changeTravelSelection(
                           $model.location.serviceLocation)"
                       name="req_travel[]"
                       value="remote"
                       type="checkbox">
               </input-checkbox>
           </div>
       </div>
       
       <div class="page-grid">
           <div class="column-lg-6">
               <div class="T3-S RequestForm-error "
                   ng-repeat="$err in $validationErrors"
                   ng-bind="$err">
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
   
       <div class="T3-S RequestForm-error "
           ng-repeat="$err in $validationErrors"
           ng-bind="$err">
       </div>
   </div>
   </div>
</script>
<script id="template-request-service-location-distance" type="text/template">
   <div
       class="RequestForm-serviceLocationDistance"
       schema="requestFormSchema.location.distance"
       schema-assign="ObjectValueKeySchema"
       schema-default="requestForm.options.location.defaultDistance">
   
               <input
           type="hidden"
           name="req_travel_dist"
           value="{[{ $model.location.distance.value }]}">
   
               <aura-select use-native-dropdown>
           <select
               id="travel-distance"
               ng-model="$model.location.distance.value"
               ng-options="dist.value as dist.label for dist
                   in requestForm.options.location.distances">
           </select>
       </aura-select>
   </div>
</script>
<script id="template-request-image-upload" type="text/template">
   <request-form-template template-id="template-request-form-section-header">
   {[{
       category.image_upload_question_copy
       || "Would you like to add photos to describe your project?"
   }]}
   </request-form-template>
   
   <div class="InputContainer InputContainer-isFirst">
   <div class="page-grid">
       <div class="column-lg-6">
           <input-radio
               input-radio-label="No">
   
               <input
                   ng-model="requestForm.addImages"
                   ng-value="false"
                   type="radio" />
           </input-radio>
       </div>
   </div>
   </div>
   <div class="InputContainer">
   <div class="page-grid">
       <div class="column-lg-6">
           <input-radio
               input-radio-label="Yes">
   
               <input
                   ng-model="requestForm.addImages"
                   ng-value="true"
                   type="radio" />
           </input-radio>
       </div>
   </div>
   </div>
   
   <div class="page-grid RequestForm-attachments" ng-show="requestForm.addImages">
   <div>
       <div class="column-lg-3 column-md-6"
           ng-repeat="attachment in requestForm.attachments">
   
           <div class="RequestForm-attachmentBox">
               <div class="RequestForm-attachmentPreview"
                   ng-hide="attachment.uploadFailed"
                   ng-class="{'is-focused': attachment.previewInFocus}">
   
                   <div class="RequestForm-attachmentPreview-image"
                       ng-class="{'uploading': attachment.isUploading}"
                       ng-style="{'background-image': requestForm.getImageSource(attachment)}">
                   </div>
   
                   <textarea
                       class="RequestForm-attachmentPreview-description"
                       ng-model="attachment.description"
                       ng-focus="attachment.previewInFocus = true"
                       ng-blur="attachment.previewInFocus = false"
                       type="text"
                       autosize
                       placeholder="Write your description here"
                       maxlength="350">
                   </textarea>
               </div>
   
               <div class="RequestForm-attachmentError"
                   ng-show="attachment.uploadFailed">
   
                   <svg-icon class="RequestForm-attachmentError-icon"
                       type="error"
                       size="lg">
                   </svg-icon>
   
                   <span class="B2-S RequestForm-attachmentError-title">
                       Upload failed
                   </span>
   
                   <span class="B2-S RequestForm-attachmentError-text">
                       A problem occurred during the upload.
                   </span>
   
                   <button class="Button theme-secondary theme-large
                       RequestForm-attachmentError-button"
                       ng-click="requestForm.tryAgain($event, attachment)">
   
                       Try Again
                   </button>
               </div>
   
               <div class="RequestForm-attachmentBox-close"
                   ng-click="removeAttachment($index)">
   
                   <svg-icon type="cancel" size="sm"></svg-icon>
               </div>
   
               <div class="RequestForm-imageLoader" ng-show="attachment.isUploading">
                   <svg-icon type="puff_44x44"></svg-icon>
               </div>
           </div>
   
           <div class="Spacer-3"></div>
       </div>
   
       <attach-button
           class="column-lg-6"
           attachments-bind="attachments"
           ng-show="requestForm.attachments.length < requestForm.maxAttachments"
           on-attachment="processImage"
           accept-file-types="image/bmp, image/gif, image/jpeg, image/jpg, image/png">
   
           <a class="Button theme-large RequestForm-addPhotos theme-secondary">
               <svg-icon type="add" size="sm"></svg-icon>
               Add {[{ requestForm.attachments.length > 0 ? "More " : "" }]}Photos
           </a>
       </attach-button>
   </div>
   
   <input type="hidden" name="attachment_data" value="{[{ requestForm.getAttachmentData() }]}">
   </div>
   
   <div class="T3-S RequestForm-error " ng-repeat="$err in requestForm.imageUploadErrors"
   ng-bind="$err">
   </div>
</script>
<script id="template-request-scheduling-event" type="text/template">
   <request-form-template
   template-id="template-request-form-section-header">
   
   What day do you need the {[{ category.sentence_name }]}?
   </request-form-template>
   
   <div
   ng-if="activeSection.id === 'scheduling'"
   event-track="request form/view scheduling event calendar selector"
   event-track-on-init
   event-track-data="trackingData.getSchedulingDefault(requestForm)"></div>
   
   <div class="RequestForm-calendarSelector InputContainer"
   schema="requestFormSchema.scheduling.eventDay"
   schema-assign="CalendarSchema"
   ng-class="{'valid': $valid, 'invalid': $valid === false}">
   
   <calendar-selector
       is-single-select-calendar="true"
       is-job-date-selector="true"
       selected-days="$model.scheduling.eventDay"
       start-date="schedulingHandler.getCalendarStartDate()">
   </calendar-selector>
   
   <div class="T3-S RequestForm-error "
       ng-repeat="$err in $validationErrors"
       ng-bind="$err">
   </div>
   </div>
</script>
<script id="template-request-scheduling-event-time" type="text/template">
   <request-form-template
   template-id="template-request-form-section-header">
   
   What time do you need the {[{ category.sentence_name }]}?
   </request-form-template>
   
   <div
   ng-if="activeSection.id === 'schedulingTimes'"
   event-track="request form/view scheduling event time picker"
   event-track-on-init
   event-track-data="trackingData.getSchedulingDefault(requestForm)"></div>
   
   <input
   type="hidden"
   name="scheduling_timestamps_array"
   ng-value="schedulingHandler.finalizedTimestamps" />
   
   <div class="InputContainer theme-group-container">
   <div class="page-grid">
       <div class="column-lg-6">
           <div
               schema="requestFormSchema.event.eventTime"
               schema-assign="TimeSchema"
               class="RequestForm-schedulingSelector"
               ng-class="{'valid': $valid, 'invalid': $valid === false}">
   
               <label for="scheduling-time" class="RequestForm-inputLabel T2-S">
                   {[{ schedulingHandler.hasDuration ? 'Start time' : 'Time' }]}
               </label>
   
               <aura-select use-native-dropdown>
                   <select
                       id="scheduling-time"
                       ng-model="$model.event.eventTime"
                       ng-options="selectedTime.value as selectedTime.label for
                           selectedTime in schedulingHandler.selectTimesArray">
                   </select>
               </aura-select>
   
               <div class="T3-S RequestForm-error "
                   ng-repeat="$err in $validationErrors"
                   ng-bind="$err">
               </div>
           </div>
           <div ng-if="schedulingHandler.hasDuration">
               <div
                   ng-if="activeSection.id === 'schedulingTimes'"
                   event-track="request form/view scheduling event time picker (duration)"
                   event-track-on-init
                   event-track-data="trackingData.getSchedulingDefault(requestForm)"></div>
   
               <request-form-template
                   template-id="template-request-scheduling-event-duration"
                   scope-vars="category"
                   category="requestForm.activeCategory">
               </request-form-template>
           </div>
       </div>
   </div>
   </div>
</script>
<script id="template-request-scheduling-event-duration" type="text/template">
   <div
       schema="requestFormSchema.event.eventDuration"
       schema-assign="{[{
           category.specifiedDurationArray
               ? 'ObjectValueKeySchema'
               : 'DurationSchema'
       }]}"
       class="RequestForm-schedulingSelector"
       ng-class="{'valid': $valid, 'invalid': $valid === false}">
   
       <label for="scheduling-duration" class="RequestForm-inputLabel T2-S">
           Duration (hours)
       </label>
   
               <div ng-if="category.specifiedDurationArray">
           <aura-select use-native-dropdown>
               <select
                   id="scheduling-duration"
                   ng-model="$model.event.eventDuration"
                   ng-options="duration in category.specifiedDurationArray">
               </select>
           </aura-select>
       </div>
   
       <div ng-if="!category.specifiedDurationArray">
           <input
               id="scheduling-duration"
               ng-model="$model.event.eventDuration"
               placeholder="ex. &quot;4&quot;"
               type="tel">
       </div>
   
       <div class="T3-S RequestForm-error "
           ng-repeat="$err in $validationErrors"
           ng-bind="$err">
       </div>
   </div>
</script>
<script id="template-request-scheduling-multi-cadence" type="text/template">
   <request-form-template
   ng-if="schedulingHandler.schedulingArchetype === 'multi_recurring'"
   template-id="template-request-form-section-header">
   
   How often do you need the {[{ category.sentence_name }]}?
   </request-form-template>
   <request-form-template
   ng-if="schedulingHandler.schedulingArchetype === 'multi_mixed'"
   template-id="template-request-form-section-header">
   
   Will you need {[{ category.sentence_name }]} more than once?
   </request-form-template>
   
   <div
   ng-if="activeSection.id === 'cadence'"
   event-track="request form/view scheduling cadence preference"
   event-track-on-init
   event-track-data="trackingData.getSchedulingDefault(requestForm)"></div>
   
   <div
           schema="requestFormSchema.cadence.cadencePreference"
   schema-assign="MultipleChoiceInputSchema">
   
   <div
       class="InputContainer"
       ng-repeat="cadence in schedulingHandler.cadenceOptions">
   
       <div class="page-grid">
           <div class="column-lg-6">
               <input-radio input-radio-label="{[{ cadence.label }]}">
                   <input
                       name="cadence_preference"
                       ng-model="$model.cadence.cadencePreference"
                       value="{[{ cadence.value }]}"
                       type="radio" />
               </input-radio>
           </div>
       </div>
   </div>
   </div>
   
   <div class="T3-S RequestForm-error "
   ng-repeat="$err in $validationErrors"
   ng-bind="$err">
   </div>
</script>
<script id="template-request-scheduling-multi-cadence-days-times" type="text/template">
   <request-form-template
   template-id="template-request-form-section-header">
   
   When are you available?
   </request-form-template>
   
   <div
   ng-if="activeSection.id === 'cadenceDaysTimes'"
   event-track="request form/view scheduling cadence timeslots"
   event-track-on-init
   event-track-data="trackingData.getSchedulingDefault(requestForm)"></div>
   
   <input
   type="hidden"
   name="scheduling_timestamps_array"
   ng-value="schedulingHandler.finalizedTimestamps" />
   
   <input
   type="hidden"
   name="cadence_days_times"
   ng-value="schedulingHandler.finalizedCadenceDaysTimes" />
   
   <div
   class="RequestForm-scheduling-timeslots
       "
   schema="requestFormSchema.cadenceDaysTimes.daysTimes"
   schema-assign="CheckboxArrayInputSchema">
   
   <div class="InputContainer" ng-repeat="timeslot in schedulingHandler.cadenceDaysTimes">
       <div class="page-grid">
           <div class="column-lg-6">
               <input-checkbox
                   input-checkbox-label="{[{ timeslot.value }]}">
   
                   <input
                       type="checkbox"
                       ng-model="$model.cadenceDaysTimes.daysTimes[timeslot.value]">
               </input-checkbox>
           </div>
       </div>
   </div>
   
   <div class="T3-S RequestForm-error "
       ng-repeat="$err in $validationErrors"
       ng-bind="$err">
   </div>
   </div>
</script>
<script id="template-request-scheduling-multi" type="text/template">
   <request-form-template
   ng-if="schedulingHandler.schedulingArchetype === 'multi_nonrecurring'
       || (schedulingHandler.schedulingArchetype === 'multi_mixed'
       && $model.cadence.cadencePreference === 'just_once')"
   template-id="template-request-form-section-header">
   
   When would you like the {[{ category.sentence_name }]}?
   </request-form-template>
   
   <div
   ng-if="activeSection.id === 'scheduling' && !schedulingHandler.isAsapCategory"
   event-track="request form/view scheduling day preference"
   event-track-on-init
   event-track-data="trackingData.getSchedulingDefault(requestForm)"></div>
   
   <div
   ng-if="activeSection.id === 'scheduling' && schedulingHandler.isAsapCategory"
   event-track="request form/view scheduling day preference (ASAP)"
   event-track-on-init
   event-track-data="trackingData.getSchedulingDefault(requestForm)"></div>
   
   <input
   type="hidden"
   name="scheduling_timestamps_array"
   ng-value="schedulingHandler.finalizedTimestamps" />
   
   <div
           schema="requestFormSchema.scheduling.dayPreference"
   schema-assign="MultipleChoiceInputSchema">
   
   <div class="InputContainer" ng-repeat="preference in schedulingHandler.dayPreferences">
       <div class="page-grid">
           <div class="column-lg-6">
               <input-radio
                   input-radio-label="{[{ preference.label }]}"
                   ng-click="scrollToSchedulingCalendar($event)">
   
                   <input
                       name="scheduling_day_preference"
                       ng-model="$model.scheduling.dayPreference"
                       value="{[{ preference.value }]}"
                       type="radio" />
               </input-radio>
           </div>
       </div>
   </div>
   </div>
   
   <request-form-template
   ng-if="$model.scheduling.dayPreference === 'specific_dates'"
   template-id="template-request-scheduling-multi-calendar">
   </request-form-template>
   
   <div class="T3-S RequestForm-error "
   ng-repeat="$err in $validationErrors"
   ng-bind="$err">
   </div>
</script>
<script id="template-request-scheduling-multi-calendar" type="text/template">
   <div class="RequestForm-calendarSelector InputContainer"
       schema="requestFormSchema.scheduling.selectedDays"
       schema-assign="CalendarSchema"
       ng-class="{'valid': $valid, 'invalid': $valid === false}">
   
       <calendar-selector
           is-job-date-selector="true"
           selected-days="$model.scheduling.selectedDays"
           start-date="schedulingHandler.getCalendarStartDate()">
       </calendar-selector>
   </div>
</script>
<script id="template-request-scheduling-timeslots" type="text/template">
   <request-form-template
       ng-if="$model.scheduling.dayPreference === 'today'
           || $model.scheduling.dayPreference === 'tomorrow'
           || $model.scheduling.dayPreference === 'next_few_days'
           || $model.scheduling.dayPreference === 'within_a_week'"
       template-id="template-request-scheduling-timeslots-general"
       scope-vars="category"
       category="requestForm.activeCategory">
   </request-form-template>
   
   <request-form-template
       ng-if="$model.scheduling.dayPreference === 'specific_dates'"
       template-id="template-request-scheduling-timeslots-specific"
       scope-vars="category"
       category="requestForm.activeCategory">
   </request-form-template>
</script>
<script id="template-request-scheduling-timeslots-general" type="text/template">
   <request-form-template
   template-id="template-request-form-section-header">
   
   What times work best for your schedule?
   </request-form-template>
   
   <div
   ng-if="activeSection.id === 'schedulingTimes'"
   event-track="request form/view scheduling general timeslots"
   event-track-on-init
   event-track-data="trackingData.getSchedulingDefault(requestForm)"></div>
   
   <div
   class="RequestForm-scheduling-timeslots
       "
   schema="requestFormSchema.timeslots.general"
   schema-assign="CheckboxArrayInputSchema">
   
   <div
       class="InputContainer"
       ng-class="{ 'disabled': schedulingHandler.isAsapCategory
           && schedulingHandler.checkAsapTodayExpired(
           $model, timeslot.hourOffset) }"
       ng-repeat="timeslot in schedulingHandler.getTimeslots()">
   
       <div class="page-grid">
           <div class="column-lg-6">
               <input-checkbox
                   input-checkbox-label="{[{ timeslot.label }]}">
                   <input
                       type="checkbox"
                       ng-model="$model.timeslots.general[timeslot.value]">
               </input-checkbox>
           </div>
       </div>
   </div>
   
   <div class="T3-S RequestForm-error "
       ng-repeat="$err in $validationErrors"
       ng-bind="$err">
   </div>
   </div>
</script>
<script id="template-request-scheduling-timeslots-specific" type="text/template">
   <request-form-template
   template-id="template-request-form-section-header">
   
   What times work best for your schedule?
   </request-form-template>
   
   <div
   ng-if="activeSection.id === 'schedulingTimes'"
   event-track="request form/view scheduling specific timeslots"
   event-track-on-init
   event-track-data="trackingData.getSchedulingDefault(requestForm)"></div>
   
   <div
   class="RequestForm-scheduling-timeslots
       "
   schema="requestFormSchema.timeslots.specific"
   schema-assign="CalendarTimeslotSchema">
   
   <div ng-repeat="dateObj in $model.scheduling.selectedDays"
       ng-init="specificTimeslots = schedulingHandler.generateSpecificTimeslots(dateObj)">
   
       <div class="RequestForm-scheduling-timeslots-label"
           ng-init="dateLabel = schedulingHandler.generateSplitDateLabel(dateObj)">
   
           {[{ dateLabel.day }]},
   
           <span class="RequestForm-scheduling-timeslots-label-date">
               {[{ dateLabel.date }]}
           </span>
       </div>
   
       <div class="InputContainer" ng-repeat="timeslot in specificTimeslots">
           <div class="page-grid">
               <div class="column-lg-6">
                   <input-checkbox
                       input-checkbox-label="{[{ timeslot.label }]}">
   
                       <input
                           type="checkbox"
                           ng-model="$model.timeslots.specific[timeslot.value]">
                   </input-checkbox>
               </div>
           </div>
       </div>
   </div>
   
   <div class="T3-S RequestForm-error "
       ng-repeat="$err in $validationErrors"
       ng-bind="$err">
   </div>
   </div>
</script>
<script id="template-request-scheduling" type="text/template">
   <request-form-template template-id="template-request-form-section-header">
   When do you need {[{ category.sentence_name }]}?
   </request-form-template>
   
   <div
   ng-if="category.scheduling_type === 'event'"
   schema="requestFormSchema.scheduling.scheduling"
   schema-assign="EmptySchema">
   
   <div>
       <input type="hidden" name="req_schedule_description"
           value="{[{ getRequestSchedulingString($model.scheduling.scheduling) }]}">
       <input type="hidden" name="req_date_estimate"
           value="4">
       <input type="hidden" name="req_needed_time"
           value="{[{ $model.scheduling.scheduling.date
               + ' '
               + $model.scheduling.scheduling.time }]}">
   </div>
   
   <request-form-template template-id="template-request-scheduling-date-and-time">
   </request-form-template>
   </div>
   
   <div
   ng-if="category.scheduling_type === 'appointment'"
   schema="requestFormSchema.scheduling.scheduling"
   schema-assign="EmptySchema">
   
   <div
       schema="requestFormSchema.scheduling.scheduling.schedulingType"
       schema-assign="EmptySchema"
                   schema-default="'I\&#039;m flexible'"
       ng-class="{'valid': $valid, 'invalid': $valid === false}"
       class="page-grid">
   
       <div class="column-lg-6">
           <input
               ng-if="$model.scheduling.scheduling.schedulingType !== 'date'
                   && $model.scheduling.scheduling.schedulingType !== 'other'"
               type="hidden"
               name="req_schedule_description"
               value="{[{ $model.scheduling.scheduling.schedulingType }]}">
   
           <div ng-if="$model.scheduling.scheduling.schedulingType === 'date'">
               <input type="hidden" name="req_date_estimate"
                   value="4">
               <input type="hidden" name="req_needed_time"
                   value="{[{ $model.scheduling.scheduling.date
                       + ' '
                       + $model.scheduling.scheduling.time }]}">
           </div>
   
           <input
               ng-if="$model.scheduling.scheduling.schedulingType === 'other'"
               type="hidden"
               name="req_schedule_description"
               value="{[{ $model.scheduling.scheduling.customDescription }]}">
   
           <div class="RequestForm-schedulingSelector">
               <aura-select
                   use-native-dropdown
                   aura-select-label="Select an option">
   
                   <select
                       event-track="request form/change scheduling type"
                       event-track-on="change"
                       event-track-data="trackingData.genericSelection(
                           $model.scheduling.scheduling.schedulingType)"
                       ng-model="$model.scheduling.scheduling.schedulingType">
                       <option
                           value="I&#039;m flexible">
   
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
   
   <div ng-class="{'valid': $valid, 'invalid': $valid === false}"
       class="page-grid">
   
       <div class="column-lg-6">
           <div
               schema="requestFormSchema.scheduling.scheduling.customDescription"
               schema-assign="TextInputSchema"
               ng-if="$model.scheduling.scheduling.schedulingType === 'other'">
   
               <textarea
                   placeholder="When would you like to schedule this for?"
                   class="RequestForm-textArea"
                   id="scheduling-description"
                   ng-model="$model.scheduling.scheduling.customDescription">
               </textarea>
   
               <div class="T3-S RequestForm-error "
                   ng-repeat="$err in $validationErrors"
                   ng-bind="$err">
               </div>
           </div>
       </div>
   </div>
   
   <request-form-template
       ng-if="$model.scheduling.scheduling.schedulingType === 'date'"
       template-id="template-request-scheduling-date-and-time">
   </request-form-template>
   </div>
</script>
<script id="template-request-scheduling-date-and-time" type="text/template">
   <div class="InputContainer theme-group-container">
       <div class="page-grid">
           <div class="column-lg-6">
               <div
                   schema="requestFormSchema.scheduling.scheduling.date"
                   schema-assign="DateSchema"
                   ng-class="{'valid': $valid, 'invalid': $valid === false}">
   
                   <label
                       for="scheduling-date"
                       class="RequestForm-inputLabel T2-S">
                       {[{ category.scheduling_question_text ||
                           "What day do you need the " + category.sentence_taxonym + "?" }]}
                   </label>
   
                   <input
                       date-picker
                       id="scheduling-date"
                       placeholder="Click to pick a date"
                       ng-model="$model.scheduling.scheduling.date"
                       type="text"
                       readonly="readonly">
   
                   <div class="T3-S RequestForm-error "
                       ng-repeat="$err in $validationErrors"
                       ng-bind="$err">
                   </div>
               </div>
           </div>
   
           <div class="column-lg-3">
               <div
                   schema="requestFormSchema.scheduling.scheduling.time"
                   schema-assign="TimeSchema"
                   ng-class="{'valid': $valid, 'invalid': $valid === false}">
   
                   <label for="scheduling-time" class="RequestForm-inputLabel T2-S">
                       At what time?
                   </label>
   
                   <input
                       id="scheduling-time"
                       placeholder="ex. &quot;2pm&quot;"
                       ng-model="$model.scheduling.scheduling.time"
                       type="text">
   
                   <div class="T3-S RequestForm-error "
                       ng-repeat="$err in $validationErrors"
                       ng-bind="$err">
                   </div>
               </div>
           </div>
   
           <div class="column-lg-3">
               <div
                   schema="requestFormSchema.scheduling.scheduling.duration"
                   schema-assign="DurationSchema"
                                       schema-optional-if="!(category.requires_duration
                       || $model.scheduling.scheduling.duration)"
                   ng-class="{'valid': $valid, 'invalid': $valid === false}">
   
                   <label for="scheduling-duration" class="RequestForm-inputLabel T2-S">
                       For how many hours?
                       <span ng-if="!category.requires_duration" class="T4-S">
                           (Optional)
                       </span>
                   </label>
   
                   <input
                       id="scheduling-duration"
                       name="req_needed_duration_hours"
                       placeholder="ex. &quot;4&quot;"
                       ng-model="$model.scheduling.scheduling.duration"
                       type="text">
   
                   <div class="T3-S RequestForm-error "
                       ng-repeat="$err in $validationErrors"
                       ng-bind="$err">
                   </div>
               </div>
           </div>
       </div>
   </div>
</script>
<script id="template-request-zip-code" type="text/template">
   <div
       schema="requestFormSchema.zipCode.zipCode"
       schema-assign="ZipCodeSchema"
       schema-default="'{[{ zipCode }]}'"
       class="page-grid">
   
       <div
           ng-class="{'valid': $valid, 'invalid': $valid === false}"
           class="column-lg-4 column-lg-offset-1">
   
           <input
               id="zip-code"
               placeholder="Zip code"
               class="theme-center-align"
               ng-model="$model.zipCode.zipCode"
               ng-change="updateZipCode($model.zipCode.zipCode)"
               event-track="request form/provide zip code"
               event-track-on="blur"
               event-track-if="$valid && form.req_zip_code_id.$dirty"
               event-track-data="trackingData.getDefault()"
               name="req_zip_code_id"
               type="text"
               pattern="\d*"
               placeholder="Zip code" />
   
           <div
               class="T3-S RequestForm-error "
               ng-repeat="$err in $validationErrors"
               ng-bind="$err">
           </div>
       </div>
   </div>
</script>
<script id="template-request-contact-email" type="text/template">
   <div class="page-grid">
       <div class="column-lg-6">
           <div
               schema="requestFormSchema.contactInfo.email"
               schema-assign="EmailSchema"
               ng-if="!requestForm.options.loggedIn">
   
               <div ng-class="{'valid': $valid, 'invalid': $valid === false}"
                    class="column-lg-4 column-lg-offset-1">
   
                   <input
                       id="email"
                       placeholder="Email address"
                       ng-model="$model.contactInfo.email"
                       event-track="request form/provide email address"
                       event-track-on="blur"
                       event-track-if="$valid && form.usr_email.$dirty"
                       event-track-once
                       event-track-data="trackingData.getDefault()"
                       name="usr_email"
                       type="email">
   
                   <div class="T3-S RequestForm-error "
                       ng-repeat="$err in $validationErrors"
                       ng-bind="$err">
                   </div>
               </div>
           </div>
       </div>
   </div>
</script>
<script id="template-request-email-instant-everything" type="text/template">
   <div class="RequestForm-sectionContent tp-padding--triple"
       ng-if="!requestForm.options.loggedIn"
       ng-class="{ 'theme-ios': isUserAgentIos }">
   
       <ul class="request-form__instant-everything-email-gate-avatars">
                                       <li class="request-form__instant-everything-email-gate-avatar">
                   <div class="tp-avatar tp-avatar--large">
                       <img ng-src="https://static.thumbtackstatic.com/media/primo/eng/team/andrew-hsiao.jpg"
                           class="
                               tp-avatar__img
                               request-form__instant-everything-email-gate-avatar-image
                       " />
                   </div>
               </li>
                           <li class="request-form__instant-everything-email-gate-avatar">
                   <div class="tp-avatar tp-avatar--large">
                       <img ng-src="https://static.thumbtackstatic.com/media/primo/eng/team/daniel-capo.jpg"
                           class="
                               tp-avatar__img
                               request-form__instant-everything-email-gate-avatar-image
                       " />
                   </div>
               </li>
                           <li class="request-form__instant-everything-email-gate-avatar">
                   <div class="tp-avatar tp-avatar--large">
                       <img ng-src="https://static.thumbtackstatic.com/media/primo/eng/team/renal-khabibulin.jpg"
                           class="
                               tp-avatar__img
                               request-form__instant-everything-email-gate-avatar-image
                       " />
                   </div>
               </li>
                           <li class="request-form__instant-everything-email-gate-avatar">
                   <div class="tp-avatar tp-avatar--large">
                       <img ng-src="https://static.thumbtackstatic.com/media/primo/eng/team/neha.jpg"
                           class="
                               tp-avatar__img
                               request-form__instant-everything-email-gate-avatar-image
                       " />
                   </div>
               </li>
                           <li class="request-form__instant-everything-email-gate-avatar">
                   <div class="tp-avatar tp-avatar--large">
                       <img ng-src="https://static.thumbtackstatic.com/media/primo/eng/team/dylan-joss.jpg"
                           class="
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
           To get your cost estimates, create an account—<!-- This removes the space created by
           the newline --><span class="tp-weight--demi tp-color--brand">it's free</span>.
       </p>
   
       <input
           schema="requestFormSchema.ixContactInfo.email"
           schema-assign="EmailSchema"
           placeholder="Enter email address"
           ng-model="$model.contactInfo.email"
           event-track="request form/provide email address"
           event-track-on="blur"
           event-track-if="$valid && form.usr_email.$dirty"
           event-track-once
           event-track-data="trackingData.getDefault()"
           name="usr_email"
           type="email">
   
       <input
           schema="requestFormSchema.ixFullName.name"
           schema-assign="FullNameSchema"
           class="tp-margin-ends"
           placeholder="Full name"
           ng-model="$model.fullName.name"
           event-track="request form/provide full name"
           event-track-on="blur"
           event-track-if="$valid && form.usr_full_name.$dirty"
           event-track-once
           event-track-data="trackingData.getDefault()"
           name="usr_full_name"
           type="text">
   
       <div class="request-form__instant-everything-disclaimer">
           <request-form-template
               template-id="template-request-legal-disclaimer-standalone">
           </request-form-template>
       </div>
   </div>
   
       <request-form-template
       ng-if="!requestForm.options.loggedIn"
               scope-vars="continueText,isLastSection"
               is-last-section="true"
       continue-text="See Pros & Estimates"
       template-id="template-request-form-navigation">
   </request-form-template>
</script>
<script id="template-request-full-name" type="text/template">
   <div class="page-grid">
       <div class="column-lg-4 column-lg-offset-1">
           <div schema="requestFormSchema.fullName.name" schema-assign="FullNameSchema">
               <div ng-class="{'valid': $valid, 'invalid': $valid === false}">
                   <input
                       id="full-name"
                       placeholder="First and last name"
                       class="theme-center-align"
                       ng-model="$model.fullName.name"
                       event-track="request form/provide full name"
                       event-track-on="blur"
                       event-track-if="$valid && form.usr_full_name.$dirty"
                       event-track-once
                       event-track-data="trackingData.getDefault()"
                       name="usr_full_name"
                       type="text">
   
                   <div
                       class="T3-S RequestForm-error "
                       ng-repeat="$err in $validationErrors"
                       ng-bind="$err">
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
               <button
                   type="submit"
                   ng-class="{
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
   
           <button
               ng-if="showSkip"
               class="RequestForm-sectionFooter-skip Link"
               ng-class="{
                   'theme-inverted': isBrandedScreen
               }"
               type="submit">
   
               Skip
           </button>
   
           <div class="RequestForm-sectionFooter-terms" ng-if="isLastSection"
               ng-class="{
                   'theme-smaller': isDisclaimerThemeSmaller,
               }">
               <p class="theme-secondary RequestForm-sectionFooter-terms-text B5-S"
                   event-track="request form/click legal terms of service"
                   event-track-on="click">
   
                   By clicking Submit you agree to the
                   <a href="/terms" target="_blank">Terms of Use</a> and
                   <a href="/privacy" target="_blank">Privacy Policy</a>.
               </p>
           </div>
   
           <div ng-hide="hideBack"
               class="RequestForm-sectionFooter-back">
   
               <button
                   type="button"
                   class="Link RequestForm-sectionFooter-navLink"
                                           ng-click="gotoPreviousSection()"
                   ng-class="{
                       'theme-inverted theme-bold': themeInvertedLinks
                   }">
   
                   <svg-icon
                       ng-if="!themeInvertedLinks"
                       type="left-caret"
                       size="sm">
                   </svg-icon>
   
                   <svg-icon
                       ng-if="themeInvertedLinks"
                       type="right-caret2"
                       class="theme-rotate-180"
                       size="md">
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
       <p class="B5-S"
           event-track="request form/click legal terms of service"
           event-track-on="click"
           ng-class="{
               'theme-secondary': !isBrandedSection,
               'theme-inverted': isBrandedSection
           }">
   
           <span ng-if="shouldShowInstantEverythingExperience()">
           By clicking See Pros &amp; Estimates you agree to the
           </span>
           <span ng-if="!shouldShowInstantEverythingExperience()">
           By clicking Submit you agree to the
           </span>
           <a class="RequestForm-legalDisclaimer-link"
               href="/terms"
               target="_blank">
   
               Terms of Use
           </a>
           and
           <a class="RequestForm-legalDisclaimer-link"
               href="/privacy"
               target="_blank">
   
               Privacy Policy
           </a>
           .
       </p>
   </div>
</script>




<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.thumb', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>