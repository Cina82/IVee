

@extends('layouts.thumb')
@section('css')
<link rel="stylesheet"
   href="{{URL::to('public/assets/category-meta-page-7d47f004.css')}}" />
@endsection
@section('content')
<hero
   class="Hero "
   responsive-image
   responsive-grid="page"
   uses-densities
   above-md="{
   '1x': ' {{URL::to('public/assets/img/lessons-91b449c8.jpg')}}
   ',
   '2x': '  {{URL::to('public/assets/img/lessons-91b449c8.jpg')}}
   '
   }"
   above-sm-below-md="{
   '1x': '  {{URL::to('public/assets/img/lessons-91b449c8.jpg')}}
   ',
   '2x': '  {{URL::to('public/assets/img/lessons-91b449c8.jpg')}}
   '
   }"
   below-sm="{
   '1x': '   {{URL::to('public/assets/img/lessons-91b449c8.jpg')}}
   ',
   '2x': ' {{URL::to('public/assets/img/lessons-91b449c8.jpg')}}
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
               Lessons
            </h1>
         </div>
         <div class="column-lg-4 column-md-6">
            <h4 class="H4-R Hero-content-subtitle theme-inverted ">
               Improve your skills. Get introduced to the right teachers.
            </h4>
         </div>
         <div class="column-lg-4 column-md-6">
            <div class="Hero-content-cta">
               <div class="SearchForm theme-default">
                  <form search-form open-request-form-modal
                     from-homepage=""
                     hide-intro-screen=""
                     ng-submit="submitSearch($event)"
                     class="SearchForm-form"
                     action="lessons#"
                     hercule-root-url=""
                     hercule-version=""
                     include-test=""
                     page-type="0"
                     search-origin="searchform-homepage"
                     event-name="searchform-homepage"
                     homepage-redirect-to-near-me=""
                     >
                     <div class="SearchForm-form-inputGroup multi-line-sm" dir="rtl" >
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
                              pageType: '0',
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
                           pageType: '0',
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
@include('menu.menu')
<install-native-app
   user-type = "customer"
   data-flavor = "below_header2"
   utm-source = "lessons_meta"
   android-icon-url = "https://static.thumbtackstatic.com/_assets/images/release/components/install-native-app/images/google-play-badge-8c7ddebe.svg"
   iphone-icon-url = "https://static.thumbtackstatic.com/_assets/images/release/components/install-native-app/images/apple-app-store-c62cc2f9.svg"
   ></install-native-app>
<popular-services class="PopularServices">
   <div class="page-grid">
      <div class="column-lg-6 PopularServices-title">
         <h2 class="H2-R">Popular  Services</h2>
      </div>
   </div>
   <div class="page-grid theme-flex-columns">
      <div class="column-lg-2">
         <div
            class="
            ServiceBox-container
            "
            event-track-data="{&quot;encodedCategoryId&quot;:&quot;6nlpb86x4sELeQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null}"
            waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;6nlpb86x4sELeQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null}">
            <a class="ServiceBox-item"
               open-request-form-modal
               ng-click="openModalWithCategoryId('6nlpb86x4sELeQ', '')"
               >
               <div
                  class="ServiceBox-item-image"
                  lazy-image
                  lazy-image-src="{{URL::to('public/assets/img/2992_small.jpeg')}}"
                  >
                  <div class="ServiceBox-item-overlay">
                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                     Request
                     </span>
                  </div>
               </div>
               <div class="ServiceBox-item-label">
                  <span class=" tp-text-2--static ">
                  Singing Lessons 
                  </span>
               </div>
            </a>
         </div>
      </div>
      <div class="column-lg-2">
         <div
            class="
            ServiceBox-container
            "
            event-track-data="{&quot;encodedCategoryId&quot;:&quot;HSN$F3bPaZ1iaw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null}"
            waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;HSN$F3bPaZ1iaw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null}">
            <a class="ServiceBox-item"
               open-request-form-modal
               ng-click="openModalWithCategoryId('HSN$F3bPaZ1iaw', '')"
               >
               <div
                  class="ServiceBox-item-image"
                  lazy-image
                  lazy-image-src="{{URL::to('public/assets/img/2992_small.jpeg')}}"
                  >
                  <div class="ServiceBox-item-overlay">
                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                     Request
                     </span>
                  </div>
               </div>
               <div class="ServiceBox-item-label">
                  <span class=" tp-text-2--static ">
                  Piano Lessons 
                  </span>
               </div>
            </a>
         </div>
      </div>
      <div class="column-lg-2">
         <div
            class="
            ServiceBox-container
            "
            event-track-data="{&quot;encodedCategoryId&quot;:&quot;4Q3S2WIQQ7e1yA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null}"
            waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;4Q3S2WIQQ7e1yA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null}">
            <a class="ServiceBox-item"
               open-request-form-modal
               ng-click="openModalWithCategoryId('4Q3S2WIQQ7e1yA', '')"
               >
               <div
                  class="ServiceBox-item-image"
                  lazy-image
                  lazy-image-src="{{URL::to('public/assets/img/2992_small.jpeg')}}"
                  >
                  <div class="ServiceBox-item-overlay">
                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                     Request
                     </span>
                  </div>
               </div>
               <div class="ServiceBox-item-label">
                  <span class=" tp-text-2--static ">
                  Self Defense Lessons 
                  </span>
               </div>
            </a>
         </div>
      </div>
      <div class="column-lg-2">
         <div
            class="
            ServiceBox-container
            "
            event-track-data="{&quot;encodedCategoryId&quot;:&quot;HUJxSmHqAhDm4A&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null}"
            waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;HUJxSmHqAhDm4A&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null}">
            <a class="ServiceBox-item"
               open-request-form-modal
               ng-click="openModalWithCategoryId('HUJxSmHqAhDm4A', '')"
               >
               <div
                  class="ServiceBox-item-image"
                  lazy-image
                  lazy-image-src="{{URL::to('public/assets/img/2992_small.jpeg')}}"
                  >
                  <div class="ServiceBox-item-overlay">
                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                     Request
                     </span>
                  </div>
               </div>
               <div class="ServiceBox-item-label">
                  <span class=" tp-text-2--static ">
                  Reading and Writing Tutoring 
                  </span>
               </div>
            </a>
         </div>
      </div>
      <div class="column-lg-2">
         <div
            class="
            ServiceBox-container
            "
            event-track-data="{&quot;encodedCategoryId&quot;:&quot;aHbV4C2Mn$M$bA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null}"
            waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;aHbV4C2Mn$M$bA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null}">
            <a class="ServiceBox-item"
               open-request-form-modal
               ng-click="openModalWithCategoryId('aHbV4C2Mn$M$bA', '')"
               >
               <div
                  class="ServiceBox-item-image"
                  lazy-image
                  lazy-image-src="{{URL::to('public/assets/img/2992_small.jpeg')}}"
                  >
                  <div class="ServiceBox-item-overlay">
                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                     Request
                     </span>
                  </div>
               </div>
               <div class="ServiceBox-item-label">
                  <span class=" tp-text-2--static ">
                  Math Tutoring 
                  </span>
               </div>
            </a>
         </div>
      </div>
      <div class="column-lg-2">
         <div
            class="
            ServiceBox-container
            "
            event-track-data="{&quot;encodedCategoryId&quot;:&quot;y6HwE0mUynjRbA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null}"
            waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;y6HwE0mUynjRbA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null}">
            <a class="ServiceBox-item"
               open-request-form-modal
               ng-click="openModalWithCategoryId('y6HwE0mUynjRbA', '')"
               >
               <div
                  class="ServiceBox-item-image"
                  lazy-image
                  lazy-image-src="{{URL::to('public/assets/img/2992_small.jpeg')}}"
                  >
                  <div class="ServiceBox-item-overlay">
                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                     Request
                     </span>
                  </div>
               </div>
               <div class="ServiceBox-item-label">
                  <span class=" tp-text-2--static ">
                  Private Yoga Instruction 
                  </span>
               </div>
            </a>
         </div>
      </div>
      <div class="column-lg-2">
         <div
            class="
            ServiceBox-container
            "
            event-track-data="{&quot;encodedCategoryId&quot;:&quot;XR7tcaO8ju1OWg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null}"
            waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;XR7tcaO8ju1OWg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null}">
            <a class="ServiceBox-item"
               open-request-form-modal
               ng-click="openModalWithCategoryId('XR7tcaO8ju1OWg', '')"
               >
               <div
                  class="ServiceBox-item-image"
                  lazy-image
                  lazy-image-src="{{URL::to('public/assets/img/2992_small.jpeg')}}"
                  >
                  <div class="ServiceBox-item-overlay">
                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                     Request
                     </span>
                  </div>
               </div>
               <div class="ServiceBox-item-label">
                  <span class=" tp-text-2--static ">
                  CPR Training 
                  </span>
               </div>
            </a>
         </div>
      </div>
      <div class="column-lg-2">
         <div
            class="
            ServiceBox-container
            "
            event-track-data="{&quot;encodedCategoryId&quot;:&quot;p446ZYiiD$vHyQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null}"
            waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;p446ZYiiD$vHyQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null}">
            <a class="ServiceBox-item"
               open-request-form-modal
               ng-click="openModalWithCategoryId('p446ZYiiD$vHyQ', '')"
               >
               <div
                  class="ServiceBox-item-image"
                  lazy-image
                  lazy-image-src="{{URL::to('public/assets/img/2992_small.jpeg')}}"
                  >
                  <div class="ServiceBox-item-overlay">
                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                     Request
                     </span>
                  </div>
               </div>
               <div class="ServiceBox-item-label">
                  <span class=" tp-text-2--static ">
                  Drawing Lessons 
                  </span>
               </div>
            </a>
         </div>
      </div>
      <div class="column-lg-2">
         <div
            class="
            ServiceBox-container
            "
            event-track-data="{&quot;encodedCategoryId&quot;:&quot;1axLKc3DdQ6g5w&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null}"
            waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;1axLKc3DdQ6g5w&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null}">
            <a class="ServiceBox-item"
               open-request-form-modal
               ng-click="openModalWithCategoryId('1axLKc3DdQ6g5w', '')"
               >
               <div
                  class="ServiceBox-item-image"
                  lazy-image
                  lazy-image-src="{{URL::to('public/assets/img/2992_small.jpeg')}}"
                  >
                  <div class="ServiceBox-item-overlay">
                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                     Request
                     </span>
                  </div>
               </div>
               <div class="ServiceBox-item-label">
                  <span class=" tp-text-2--static ">
                  Personal Training 
                  </span>
               </div>
            </a>
         </div>
      </div>
      <div class="column-lg-2">
         <div
            class="
            ServiceBox-container
            "
            event-track-data="{&quot;encodedCategoryId&quot;:&quot;brzr88JvExh2mg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null}"
            waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;brzr88JvExh2mg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null}">
            <a class="ServiceBox-item"
               open-request-form-modal
               ng-click="openModalWithCategoryId('brzr88JvExh2mg', '')"
               >
               <div
                  class="ServiceBox-item-image"
                  lazy-image
                  lazy-image-src="{{URL::to('public/assets/img/2992_small.jpeg')}}"
                  >
                  <div class="ServiceBox-item-overlay">
                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                     Request
                     </span>
                  </div>
               </div>
               <div class="ServiceBox-item-label">
                  <span class=" tp-text-2--static ">
                  Dance Lessons 
                  </span>
               </div>
            </a>
         </div>
      </div>
      <div class="column-lg-2">
         <div
            class="
            ServiceBox-container
            "
            event-track-data="{&quot;encodedCategoryId&quot;:&quot;h55cb6iWAT1c0Q&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null}"
            waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;h55cb6iWAT1c0Q&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null}">
            <a class="ServiceBox-item"
               open-request-form-modal
               ng-click="openModalWithCategoryId('h55cb6iWAT1c0Q', '')"
               >
               <div
                  class="ServiceBox-item-image"
                  lazy-image
                  lazy-image-src="{{URL::to('public/assets/img/2992_small.jpeg')}}"
                  >
                  <div class="ServiceBox-item-overlay">
                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                     Request
                     </span>
                  </div>
               </div>
               <div class="ServiceBox-item-label">
                  <span class=" tp-text-2--static ">
                  Acting Lessons 
                  </span>
               </div>
            </a>
         </div>
      </div>
      <div class="column-lg-2">
         <div
            class="
            ServiceBox-container
            "
            event-track-data="{&quot;encodedCategoryId&quot;:&quot;v67iVsKxE7SWxg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null}"
            waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;v67iVsKxE7SWxg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null}">
            <a class="ServiceBox-item"
               open-request-form-modal
               ng-click="openModalWithCategoryId('v67iVsKxE7SWxg', '')"
               >
               <div
                  class="ServiceBox-item-image"
                  lazy-image
                  lazy-image-src="{{URL::to('public/assets/img/2992_small.jpeg')}}"
                  >
                  <div class="ServiceBox-item-overlay">
                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                     Request
                     </span>
                  </div>
               </div>
               <div class="ServiceBox-item-label">
                  <span class=" tp-text-2--static ">
                  Tennis Instruction 
                  </span>
               </div>
            </a>
         </div>
      </div>
   </div>
</popular-services>
<more-services class="MoreServices">
   <div class="page-grid">
      <div class="column-lg-6 MoreServices-title">
         <h2 class="H2-R">More  Services</h2>
      </div>
   </div>
   <div class="page-grid" dir="rtl">
      <div class="column-lg-6 MoreServices-column">
         <div class="MoreServices-service">
            <h3 class="H4-R MoreServices-service-header"></h3>
            <ul>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/act-tutoring/">
                  ACT Tutoring
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/asvab-tutoring/">
                  ASVAB Tutoring
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/algebra-tutoring/">
                  Algebra Tutoring
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/basic-math-tutoring/">
                  Basic Math Tutoring
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/biology-tutoring/">
                  Biology Tutoring
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/calculus-tutoring/">
                  Calculus Tutoring
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/chemistry-tutoring/">
                  Chemistry Tutoring
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/college-admissions-counseling/">
                  College Admissions Counseling
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/college-level-math-tutoring/">
                  College-level Math Tutoring
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/economics-tutoring/">
                  Economics Tutoring
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/elementary-school-math-tutoring-(k-5)/">
                  Elementary School Math Tutoring (K-5)
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/ged-tutoring/">
                  GED Tutoring
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/gmat-tutoring/">
                  GMAT Tutoring
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/gre-tutoring/">
                  GRE Tutoring
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/geometry-tutoring/">
                  Geometry Tutoring
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/grad-school-math-tutoring/">
                  Grad School Math Tutoring
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/high-school-math-tutoring-(grades-9-12)/">
                  High School Math Tutoring (Grades 9-12)
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/history-tutoring/">
                  History Tutoring
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/isee-tutoring/">
                  ISEE Tutoring
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/lsat-tutoring/">
                  LSAT Tutoring
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/mcat-tutoring/">
                  MCAT Tutoring
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/math-tutoring/">
                  Math Tutoring
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/middle-school-math-tutoring-(grades-6-8)/">
                  Middle School Math Tutoring (Grades 6-8)
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/multi-subject-tutoring/">
                  Multi-Subject Tutoring
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/nclex-tutoring/">
                  NCLEX Tutoring
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/physics-tutoring/">
                  Physics Tutoring
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/precalculus-tutoring/">
                  Precalculus Tutoring
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/reading-and-writing-tutoring/">
                  Reading and Writing Tutoring
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/sat-ii-tutoring/">
                  SAT II Tutoring
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/sat-tutoring/">
                  SAT Tutoring
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/science-tutoring/">
                  Science Tutoring
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/social-studies-tutoring/">
                  Social Studies Tutoring
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/statistics-tutoring/">
                  Statistics Tutoring
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/toefl-tutoring/">
                  TOEFL Tutoring
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/teacher-training/">
                  Teacher Training
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/trigonometry-tutoring/">
                  Trigonometry Tutoring
                  </a>
               </li>
            </ul>
         </div>
         <div class="MoreServices-service">
            <h3 class="H4-R MoreServices-service-header"></h3>
            <ul>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/private-cooking-lessons/">
                  Private Cooking Lessons
                  </a>
               </li>
            </ul>
         </div>
         <div class="MoreServices-service">
            <h3 class="H4-R MoreServices-service-header"></h3>
            <ul>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/hip-hop-dance-lessons/">
                  Hip Hop Dance Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/private-dance-lessons-(for-me-or-my-group)/">
                  Private Dance Lessons (for me or my group)
                  </a>
               </li>
            </ul>
         </div>
         <div class="MoreServices-service">
            <h3 class="H4-R MoreServices-service-header"></h3>
            <ul>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/climbing-lessons/">
                  Climbing Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/cycling-training/">
                  Cycling Training
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/golf-lessons/">
                  Golf Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/horseback-riding-lessons/">
                  Horseback Riding Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/horseback-riding-lessons-(for-adults)/">
                  Horseback Riding Lessons (for adults)
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/horseback-riding-lessons-(for-children-or-teenagers)/">
                  Horseback Riding Lessons (for children or teenagers)
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/private-swim-lessons/">
                  Private Swim Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/private-tennis-instruction-(for-me-or-my-group)/">
                  Private Tennis Instruction (for me or my group)
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/running-and-jogging-lessons/">
                  Running and Jogging Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/scuba-diving-lessons/">
                  Scuba Diving Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/volleyball-lessons/">
                  Volleyball Lessons
                  </a>
               </li>
            </ul>
         </div>
         <div class="MoreServices-service">
            <h3 class="H4-R MoreServices-service-header"></h3>
            <ul>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/arabic-lessons/">
                  Arabic Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/esl-(english-as-a-second-language)-lessons/">
                  ESL (English as a Second Language) Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/french-lessons/">
                  French Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/german-lessons/">
                  German Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/hebrew-lessons/">
                  Hebrew Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/italian-lessons/">
                  Italian Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/japanese-lessons/">
                  Japanese Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/korean-lessons/">
                  Korean Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/mandarin-lessons/">
                  Mandarin Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/portuguese-lessons/">
                  Portuguese Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/sign-language-lessons/">
                  Sign Language Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/spanish-lessons/">
                  Spanish Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/specialized-language-lessons/">
                  Specialized Language Lessons
                  </a>
               </li>
            </ul>
         </div>
         <div class="MoreServices-service">
            <h3 class="H4-R MoreServices-service-header"></h3>
            <ul>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/bagpipe-lessons/">
                  Bagpipe Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/banjo-lessons/">
                  Banjo Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/banjo-lessons-(for-adults)/">
                  Banjo Lessons (for adults)
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/bass-guitar-lessons/">
                  Bass Guitar Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/bass-guitar-lessons-(for-adults)/">
                  Bass Guitar Lessons (for adults)
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/bass-guitar-lessons-(for-children-or-teenagers)/">
                  Bass Guitar Lessons (for children or teenagers)
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/cello-lessons/">
                  Cello Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/cello-lessons-(for-adults)/">
                  Cello Lessons (for adults)
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/cello-lessons-(for-children-or-teenagers)/">
                  Cello Lessons (for children or teenagers)
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/clarinet-lessons/">
                  Clarinet Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/clarinet-lessons-(for-adults)/">
                  Clarinet Lessons (for adults)
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/clarinet-lessons-(for-children-or-teenagers)/">
                  Clarinet Lessons (for children or teenagers)
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/double-bass-lessons-(for-adults)/">
                  Double Bass Lessons (for adults)
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/double-bass-lessons-(for-children-or-teenagers)/">
                  Double Bass Lessons (for children or teenagers)
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/drum-lessons/">
                  Drum Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/drum-lessons-(for-adults)/">
                  Drum Lessons (for adults)
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/drum-lessons-(for-children-or-teenagers)/">
                  Drum Lessons (for children or teenagers)
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/fiddle-lessons/">
                  Fiddle Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/flute-lessons/">
                  Flute Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/flute-lessons-(for-adults)/">
                  Flute Lessons (for adults)
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/flute-lessons-(for-children-or-teenagers)/">
                  Flute Lessons (for children or teenagers)
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/french-horn-lessons/">
                  French Horn Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/french-horn-lessons-(for-children-or-teenagers)/">
                  French Horn Lessons (for children or teenagers)
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/guitar-lessons/">
                  Guitar Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/harmonica-lessons/">
                  Harmonica Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/harmonica-lessons-(for-adults)/">
                  Harmonica Lessons (for adults)
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/harp-lessons-(for-children-or-teenagers)/">
                  Harp Lessons (for children or teenagers)
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/keyboard-lessons/">
                  Keyboard Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/mandolin-lessons/">
                  Mandolin Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/mandolin-lessons-(for-adults)/">
                  Mandolin Lessons (for adults)
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/music-composition-lessons/">
                  Music Composition Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/music-theory-lessons/">
                  Music Theory Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/oboe-lessons-(for-children-or-teenagers)/">
                  Oboe Lessons (for children or teenagers)
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/piano-lessons/">
                  Piano Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/piano-tuning/">
                  Piano Tuning
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/saxophone-lessons/">
                  Saxophone Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/saxophone-lessons-(for-adults)/">
                  Saxophone Lessons (for adults)
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/saxophone-lessons-(for-children-or-teenagers)/">
                  Saxophone Lessons (for children or teenagers)
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/singing-lessons/">
                  Singing Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/trombone-lessons-(for-adults)/">
                  Trombone Lessons (for adults)
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/trombone-lessons-(for-children-or-teenagers)/">
                  Trombone Lessons (for children or teenagers)
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/trumpet-lessons/">
                  Trumpet Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/trumpet-lessons-(for-adults)/">
                  Trumpet Lessons (for adults)
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/trumpet-lessons-(for-children-or-teenagers)/">
                  Trumpet Lessons (for children or teenagers)
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/ukulele-lessons/">
                  Ukulele Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/ukulele-lessons-(for-adults)/">
                  Ukulele Lessons (for adults)
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/ukulele-lessons-(for-children-or-teenagers)/">
                  Ukulele Lessons (for children or teenagers)
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/viola-lessons/">
                  Viola Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/viola-lessons-(for-adults)/">
                  Viola Lessons (for adults)
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/viola-lessons-(for-children-or-teenagers)/">
                  Viola Lessons (for children or teenagers)
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/violin-lessons/">
                  Violin Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/violin-lessons-(for-adults)/">
                  Violin Lessons (for adults)
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/violin-lessons-(for-children-or-teenagers)/">
                  Violin Lessons (for children or teenagers)
                  </a>
               </li>
            </ul>
         </div>
         <div class="MoreServices-service">
            <h3 class="H4-R MoreServices-service-header"></h3>
            <ul>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/accounting-training/">
                  Accounting Training
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/acting-lessons/">
                  Acting Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/arts-and-crafts-lessons/">
                  Arts and Crafts Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/audio-production-lessons/">
                  Audio Production Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/business-finance-training/">
                  Business Finance Training
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/cpr-training/">
                  CPR Training
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/calligraphy-lessons/">
                  Calligraphy Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/chess-lessons/">
                  Chess Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/comedy-lessons/">
                  Comedy Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/computer-lessons/">
                  Computer Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/crocheting-lessons/">
                  Crocheting Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/drawing-lessons/">
                  Drawing Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/driving-lessons/">
                  Driving Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/fabric-arts-lessons/">
                  Fabric Arts Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/fashion-and-costume-design-instruction/">
                  Fashion and Costume Design Instruction
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/filmmaking-lessons/">
                  Filmmaking Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/firearm-instruction/">
                  Firearm Instruction
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/first-aid-training/">
                  First Aid Training
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/flower-arranging-instruction/">
                  Flower Arranging Instruction
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/graphic-design-instruction/">
                  Graphic Design Instruction
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/jewelry-making-lessons/">
                  Jewelry Making Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/knitting-lessons/">
                  Knitting Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/leadership-development-training/">
                  Leadership Development Training
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/magic-lessons/">
                  Magic Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/makeup-artistry-lessons/">
                  Makeup Artistry Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/marketing-training/">
                  Marketing Training
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/medical-coding-training/">
                  Medical Coding Training
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/negotiation-training/">
                  Negotiation Training
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/neonatal-resuscitation-program-lessons/">
                  Neonatal Resuscitation Program Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/painting-lessons/">
                  Painting Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/personal-finance-instruction/">
                  Personal Finance Instruction
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/photography-lessons/">
                  Photography Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/pokemon-go-expert/">
                  Pokemon Go Expert
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/public-speaking-lessons/">
                  Public Speaking Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/quilting-lessons/">
                  Quilting Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/real-estate-training/">
                  Real Estate Training
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/reiki-lessons/">
                  Reiki Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/safety-and-first-aid-instruction/">
                  Safety and First Aid Instruction
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/sales-training/">
                  Sales Training
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/sculpting-lessons/">
                  Sculpting Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/search-engine-optimization-training/">
                  Search Engine Optimization Training
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/self-defense-lessons/">
                  Self Defense Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/sewing-lessons/">
                  Sewing Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/silkscreening-lessons/">
                  Silkscreening Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/voice-over-lessons/">
                  Voice Over Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/welding-instruction/">
                  Welding Instruction
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/wine-appreciation-lessons/">
                  Wine Appreciation Lessons
                  </a>
               </li>
            </ul>
         </div>
         <div class="MoreServices-service">
            <h3 class="H4-R MoreServices-service-header"></h3>
            <ul>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/archery-lessons/">
                  Archery Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/baseball-lessons/">
                  Baseball Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/basketball-lessons/">
                  Basketball Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/ice-skating-instruction/">
                  Ice Skating Instruction
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/skateboarding-lessons/">
                  Skateboarding Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/soccer-lessons/">
                  Soccer Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/softball-lessons/">
                  Softball Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/surfing-lessons/">
                  Surfing Lessons
                  </a>
               </li>
               <li>
                  <a class="B2-S theme-secondary MoreServices-service-link"
                     href="https://www.thumbtack.com/hire/table-tennis-lessons/">
                  Table Tennis Lessons
                  </a>
               </li>
            </ul>
         </div>
      </div>
   </div>
</more-services>
</div>
</category-meta-page>
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
                   <a href="events">events</a>,
                   <a href="home-improvement">home</a>,
                   <a href="lessons">lessons</a>,
                   <a href="wellness">wellness</a>, and
                   <a href="more-services">more</a>.
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
                   <a href="terms/index.html" target="_blank">Terms of Use</a> and
                   <a href="privacy/index.html" target="_blank">Privacy Policy</a>.
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
               href="terms/index.html"
               target="_blank">
   
               Terms of Use
           </a>
           and
           <a class="RequestForm-legalDisclaimer-link"
               href="privacy/index.html"
               target="_blank">
   
               Privacy Policy
           </a>
           .
       </p>
   </div>
</script>
<script id="template-request-explanation" type="text/template">
   <div class="page-grid">
   <div class="column-lg-6">
       <div class="RequestForm-explanation">
   
           <svg-icon
               type="thumbtack-logo_178x28"
               alt="Thumbtack"
               class="RequestForm-thumbtackLogo">
           </svg-icon>
   
           <div tabindex="0" class="RequestForm-explanation-container
               ">
   
               <p class="tp-heading-3 RequestForm-explanation-pros theme-inverted
                   "
                   ng-bind="requestForm.introPro"/>
               <p class="tp-heading-3 RequestForm-explanation-base theme-inverted
                   "
                   ng-bind="requestForm.introScreenCopy"/>
           </div>
   
           </div>
   </div>
   </div>
   
   <request-form-template
   template-id="template-request-form-navigation"
   scope-vars="themeInvertedLinks,hideBack"
   theme-inverted-links="true"
   hide-back="!(requestForm.categories.length > 1  || forceShowCategoryChooser)
       ">
   </request-form-template>
</script>
<script id="template-request-intro-zip-instant-everything" type="text/template">
   <div class="RequestForm-sectionContent">
       <div class="RequestForm-sectionContent-inner"
           ng-class="{
               'theme-ios': isUserAgentIos
           }">
   
           <div class="RequestForm-introZip">
               <div class="RequestForm-introZip-topContainer">
                   <div class="RequestForm-introZip-image"
                       style="background-image: url('https://static.thumbtackstatic.com/_assets/images/release/modules/request-form/images/subway-tiles-79dcd2c7.svg');">
                   </div>
                   <div class="RequestForm-introZip-image RequestForm-introZip-gradient"></div>
                   <div class="RequestForm-introZip-image RequestForm-introZip-cleaningToolsContainer">
                       <div class="RequestForm-introZip-cleaningTools"
                           style="background-image: url('https://static.thumbtackstatic.com/_assets/images/release/modules/request-form/images/cleaning-tools-84459279.svg');">
                       </div>
                   </div>
               </div>
   
               <div class="tp-padding-sides--triple RequestForm-introZip-bottomContainer"
                   schema="requestFormSchema.introZipCode.zipCode"
                   schema-assign="ZipCodeSchema"
                   schema-default="'{[{ zipCode }]}'">
   
                   <div class="tp-heading-3 tp-weight--normal tp-padding-bottom--double">
                       Hire a <span ng-bind="requestForm.activeCategory.taxonym"></span>
                       that checks all the boxes– it only takes
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
                   <input
                       ng-model="$model.introZipCode.zipCode"
                       type="text"
                       class="tp-text-input tp-text-input--large"
                       placeholder="Zip Code"
                       ng-change="updateZipCode($model.introZipCode.zipCode)"
                       event-track="request form/provide zip code"
                       event-track-on="blur"
                       event-track-if="$valid && form.req_zip_code_id.$dirty"
                       event-track-data="trackingData.getDefault()"
                       name="req_zip_code_id"
                       pattern="\d*">
                   <div
                       class="T3-S RequestForm-error"
                       ng-repeat="$err in $validationErrors"
                       ng-bind="$err">
                   </div>
               </div>
           </div>
       </div>
   </div>
</script>
<script id="template-request-intro-instant-everything" type="text/template">
   <div class="RequestForm-sectionContent">
       <div class="RequestForm-sectionContent-inner theme-no-bottom-padding"
           ng-class="{
               'theme-ios': isUserAgentIos
           }">
   
       <div class="RequestForm-introMap">
           <div class="tp-padding-sides--triple RequestForm-introMap-topContainer">
               <div class="tp-heading-3 tp-weight--normal">
                   <span ng-bind="requestForm.activeCategory.plural_taxonym"></span> near you:
               </div>
               <div class="tp-heading-3 tp-weight--demi tp-color--brand tp-padding-bottom--double"
                   ng-bind="prosCountByZipCode">
               </div>
               <div class="tp-text-3--static">
                   With a few more details, we can get the
                   <span class="tp-weight--demi">right pros and cost estimates</span>
                   for your job.
               </div>
           </div>
           <div class="RequestForm-introMap-bottomContainer">
               <div class="RequestForm-introMap-map theme-mobile-only"
                   style="background-image: url('https://static.thumbtackstatic.com/_assets/images/release/modules/request-form/images/mobile-map-2x-fdc28d42.jpg');">
               </div>
               <div class="RequestForm-introMap-map theme-desktop-only"
                   style="background-image: url('https://static.thumbtackstatic.com/_assets/images/release/modules/request-form/images/desktop-map-2x-c68d86d6.jpg');">
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
       <form
           schema="addPhoneNumberSchema"
           schema-assign="EmptySchema"
           schema-yields="phoneNumber"
                       name="phoneForm"
           ng-submit="deepValidate()
               ? addPhoneNumber($event, phoneNumber.phoneNumber, phoneNumber.isPublic)
               : false">
   
                       <request-form-template template-id="template-request-form-section-header">
               <p class="RequestForm-phoneNumber-header">
                   Get responses even faster with text alerts.
               </p>
           </request-form-template>
   
           <div class="page-grid">
               <div class="column-lg-4 column-lg-offset-1">
                   <input
                       schema="addPhoneNumberSchema.phoneNumber"
                       schema-assign="PhoneSchema"
                       schema-optional
                       ng-model="phoneNumber.phoneNumber"
                       ng-class="{'valid': $valid, 'invalid': $valid === false}"
                       ng-init="phoneNumber.phoneNumber = existingPhoneNumber"
                       event-track="request form/provide phone number"
                       event-track-on="blur"
                       event-track-once
                       event-track-if="$valid && phoneForm.phone_number.$dirty"
                       event-track-data="trackingData.getDefault()"
                       placeholder="ex 555-555-5555"
                       type="tel"
                       name="phone_number"/>
   
                   <div class="T3-S RequestForm-error "
                       ng-repeat="$err in $validationErrors"
                       ng-bind="$err">
                   </div>
   
                   <div ng-if="phoneNumberError" class="T3-S RequestForm-error "
                       ng-bind="phoneNumberError">
                   </div>
               </div>
   
               <div class="column-lg-4 column-lg-offset-1">
                   <input-checkbox
                       input-checkbox-label="{[{
                               requestForm.activeCategory.plural_taxonym
                           }]} may call me directly with quotes">
   
                       <input
                           ng-model="phoneNumber.isPublic"
                           value="public"
                           type="checkbox">
                   </input-checkbox>
               </div>
   
               <div class="column-lg-4 column-lg-offset-1 RequestForm-phoneNumber-description">
                   <p class="theme-secondary B5-S">
   
                       By selecting Next, you
                       <a href="https://help.thumbtack.com/?ar=kA131000000BOWj"
                           target="_blank">
   
                           electronically authorize
                       </a>
                       Thumbtack to send you automated text messages to notify you of quotes and
                       activity from Thumbtack pros. Receiving text messages is optional.
                   </p>
                </div>
           </div>
           
           <request-form-template
               template-id="template-request-form-navigation"
                                   scope-vars="hideBack,showSkip"
                               hide-back="true"
               show-skip="true">
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
               {[{ hasPassword
                   ? "Almost there! You just need to enter your password."
                   : "Project created! Check your email to set your password and secure your account."
               }]}
           </p>
   
           <span class="B3-S" ng-show="passwordEmailResent">Email sent.</span>
   
           <span
               class="Link B3-S"
               ng-click="requirePasswordCreation(email, !hasPassword)"
               target="_blank">
   
               {[{ hasPassword ? "Forgot password?" : "Didn't receive the email?" }]}
           </span>
       </request-form-template>
   
       <div class="RequestForm-standaloneInputSection">
           <div class="page-grid">
               <div class="column-lg-6">
                   <label for="password" class="RequestForm-inputLabel T2-S">
                       What's your password?
                   </label>
   
                   <input
                       placeholder="Password"
                       type="password"
                       ng-model="loginPassword"
                       ng-change="clearLoginError()"
                       id="password" />
   
                   <div ng-if="loginError" class="T3-S RequestForm-error " ng-bind="loginError">
                   </div>
               </div>
           </div>
       </div>
       
       <request-form-template
           template-id="template-request-form-navigation"
           scope-vars="continueText"
           continue-text="'Get Quotes'">
       </request-form-template>
   </form>
</script>
<script id="template-request-form" type="text/template">
   <div
       class="RequestForm
           "
       ng-class="[
           activeSection.formClass,
           requestForm.isSubmitting ? 'theme-branded' : ''
                   ]">
   
       <div
           event-track="request form/start form flow"
           event-track-on-init
           event-track-data="trackingData.startFormFlow(
               requestForm.options.query,
               zipCode
           )">
       </div>
   
       <div class="RequestForm-smallLogo" ng-show="showTopLeftLogo" ng-if="shouldShowInstantEverythingExperience()">
           <svg-icon class="RequestForm-smallLogo-icon" type="thumbtack-logo_178x28"></svg-icon>
       </div>
   
               <div
           ng-if="requestForm.options.isInModal"
           class="RequestForm-customClose
               "
           ng-show="!activeSection.hideCloseButton
               && !requestForm.isSubmitting
               && !requestForm.options.hideClose
               && !postRequestStatus">
   
                       <div ng-if="!activeSection.hideExitConfirmation">
               <button class="Link RequestForm-customClose-icon"
                   modal-standard-launcher
                   ng-click="openModalStandard('exit-confirmation')">
   
                   <svg-icon type="close-experimental" size="md"></svg-icon>
               </button>
           </div>
           <div ng-if="activeSection.hideExitConfirmation">
               <button class="Link RequestForm-customClose-icon"
                   ng-click="saveFormProgress()"
                   closes-modal-on-click>
   
                   <svg-icon type="close-experimental" size="md"></svg-icon>
               </button>
           </div>
                   </div>
   
       <exit-confirmation
           current-step="currentStep"
           total-steps="totalSteps"
           percent-step-interval="0.05"
           coefficient="0.7"
           experiment-variant="exit-confirmation-3b">
       </exit-confirmation>
   
       <div
           ng-hide="(activeSection.hideProgressBar ||
               requestForm.isSubmitting
                           )"
                       class="page-grid"
           >
   
                       <div class="column-lg-4 column-lg-offset-1">
                           <div class="RequestForm-progressContainer
                                       ">
   
                   <progress-bar
                       theme-animated
                       label-threshold="0.7"
                                               current-step="currentStep"
                       total-steps="totalSteps"
                       percent-step-interval="0.05"
                       coefficient="0.7">
                   </progress-bar>
   
               </div>
                       </div>
                   </div>
   
       <div ng-show="activeSection.showTopLogo && !requestForm.isSubmitting && !postRequestStatus">
           <div class="RequestForm-topLogo
               "
               ng-class="{
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
                       
   
   
   
   
   
   
   
   <post-request-interstitial >
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
                                                   <svg-icon class="PostRequestInterstitial-postRequest-star"
                               type="star" size="sm"></svg-icon>
                                                   <svg-icon class="PostRequestInterstitial-postRequest-star"
                               type="star" size="sm"></svg-icon>
                                                   <svg-icon class="PostRequestInterstitial-postRequest-star"
                               type="star" size="sm"></svg-icon>
                                                   <svg-icon class="PostRequestInterstitial-postRequest-star"
                               type="star" size="sm"></svg-icon>
                                                   <svg-icon class="PostRequestInterstitial-postRequest-star"
                               type="star" size="sm"></svg-icon>
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
                               <svg-icon class="PostRequestInterstitial-postRequest-star"
                                   type="star" size="md"></svg-icon>
                           </div>
                           <div responsive-if="below-md" responsive-grid="page">
                               <svg-icon class="PostRequestInterstitial-postRequest-star"
                                   type="star" size="sm"></svg-icon>
                           </div>
                                                   <div responsive-if="above-md" responsive-grid="page">
                               <svg-icon class="PostRequestInterstitial-postRequest-star"
                                   type="star" size="md"></svg-icon>
                           </div>
                           <div responsive-if="below-md" responsive-grid="page">
                               <svg-icon class="PostRequestInterstitial-postRequest-star"
                                   type="star" size="sm"></svg-icon>
                           </div>
                                                   <div responsive-if="above-md" responsive-grid="page">
                               <svg-icon class="PostRequestInterstitial-postRequest-star"
                                   type="star" size="md"></svg-icon>
                           </div>
                           <div responsive-if="below-md" responsive-grid="page">
                               <svg-icon class="PostRequestInterstitial-postRequest-star"
                                   type="star" size="sm"></svg-icon>
                           </div>
                                                   <div responsive-if="above-md" responsive-grid="page">
                               <svg-icon class="PostRequestInterstitial-postRequest-star"
                                   type="star" size="md"></svg-icon>
                           </div>
                           <div responsive-if="below-md" responsive-grid="page">
                               <svg-icon class="PostRequestInterstitial-postRequest-star"
                                   type="star" size="sm"></svg-icon>
                           </div>
                                                   <div responsive-if="above-md" responsive-grid="page">
                               <svg-icon class="PostRequestInterstitial-postRequest-star"
                                   type="star" size="md"></svg-icon>
                           </div>
                           <div responsive-if="below-md" responsive-grid="page">
                               <svg-icon class="PostRequestInterstitial-postRequest-star"
                                   type="star" size="sm"></svg-icon>
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
                                                   <svg-icon class="PostRequestInterstitial-postRequest-star"
                               type="star" size="sm"></svg-icon>
                                                   <svg-icon class="PostRequestInterstitial-postRequest-star"
                               type="star" size="sm"></svg-icon>
                                                   <svg-icon class="PostRequestInterstitial-postRequest-star"
                               type="star" size="sm"></svg-icon>
                                                   <svg-icon class="PostRequestInterstitial-postRequest-star"
                               type="star" size="sm"></svg-icon>
                                                   <svg-icon class="PostRequestInterstitial-postRequest-star"
                               type="star" size="sm"></svg-icon>
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
   
       <div ng-if="postRequestStatus"
            event-track="post request/overview"
            event-track-on-init
            event-track-data="trackingData.getDefault()">
           <post-request-overview
               request-id="requestIdCreated" />
       </div>
   
       <div ng-if="!requestForm.categories
               && !requestForm.options.categoryId
               && !requestForm.options.query"
           request-form-section="'hercule'"
           ng-show="activeSection.id === 'hercule'">
   
           <div ng-init="initDisplayFirstSection()"></div>
   
           <request-form-template template-id="template-request-form-hercule">
           </request-form-template>
       </div>
   
       <div ng-if="requestForm.options.query && requestForm.categories.length === 0"
           request-form-section="'noResults'"
           ng-show="activeSection.id === 'noResults'">
   
           <div ng-init="initDisplayFirstSection()"></div>
   
           <request-form-template template-id="template-request-form-no-results">
           </request-form-template>
       </div>
   
       <div ng-if="requestForm.showCategoryChooser()
            || forceShowCategoryChooser"
           request-form-section="'categoryChooser'"
           hide-back-button="true"
                       hide-progress-bar="encodedServiceId"
                       ng-show="activeSection.id === 'categoryChooser' &&
               !(requestForm.categories && requestForm.activeCategory.id && !requestForm.form)">
   
           <div ng-init="initDisplayFirstSection()"></div>
   
           <request-form-template
               template-id="template-request-category-chooser-radio"
               scope-vars="categories"
               categories="requestForm.categories">
           </request-form-template>
       </div>
   
       <div
           ng-if="needPhoneNumber"
           request-form-section="'phoneNumber'"
           hide-exit-confirmation="true"
           hide-progress-bar="true"
           show-top-logo="true">
   
           <div
               ng-if="activeSection.id === 'phoneNumber'"
               event-track="request form/view phone number option"
               event-track-on-init
               event-track-data="trackingData.getDefault()">
           </div>
   
           <request-form-template template-id="template-request-form-phone-number">
           </request-form-template>
       </div>
   
       <div
           ng-cloak
           ng-if="requestForm.categories && requestForm.form && requestForm.activeCategory.id"
           ng-hide="requestForm.isSubmitting">
   
           <div ng-init="initDisplayFirstSection()"></div>
   
           <form
                               id="request-form"
                               schema="requestFormSchema"
               schema-assign="EmptySchema"
               schema-yields="$model"
               schema-cache-id="{[{ requestForm.activeCategory.id }]}"
                               name="form"
               ng-submit="
                   (schedulingHandler.processCustomerSchedulingData($model, activeSection.id)
                       && deepValidate(activeSection.$scope))
                   ? handleSubmit($event, $model.contactInfo.email, $model.fullName.name)
                   : false">
   
               <input type="hidden" name="req_source" value="{[{ requestSource }]}"/>
               <input type="hidden" name="request_origin" value="{[{ requestOrigin }]}"/>
               <input type="hidden" name="rca" value="{[{ requestForm.activeCategory.id }]}"/>
               <input type="hidden" name="rfo" value="{[{ requestForm.form.encoded_form_id }]}"/>
               <input type="hidden" name="sav" value="{[{ encodedServiceId }]}"/>
               <input type="hidden" name="device_fingerprint" value="{[{ requestForm.deviceFingerprint }]}"/>
               <input type="hidden" name="customer_category_pk"
                   value="{[{ requestForm.activeCustomerCategory }]}"/>
   
               <div
                   ng-if="shouldShowInstantEverythingExperience()"
                   ng-show="activeSection.id === 'introZipCode'"
                   request-form-section="'introZipCode'"
                   hide-back-button="true"
                   schema="requestFormSchema.introZipCode"
                   schema-assign="EmptySchema"
                   schema-validation-subsection>
   
                   <div
                       ng-if="activeSection.id === 'introZipCode'"
                       event-track="request form/view intro explanation"
                       event-track-on-init
                       event-track-data="trackingData.getDefault()">
                   </div>
   
                   <request-form-template
                       template-id="template-request-intro-zip-instant-everything">
                   </request-form-template>
               </div>
   
               <div
                   ng-if="!hideIntroScreen && shouldShowInstantEverythingExperience()"
                   ng-show="activeSection.id === 'explanationIntro'"
                   request-form-section="'explanationIntro'"
                   hide-back-button="false"
                   schema="requestFormSchema.intro"
                   schema-assign="EmptySchema"
                   schema-validation-subsection>
   
                   <div
                       ng-if="activeSection.id === 'explanationIntro'"
                       event-track="request form/view intro explanation"
                       event-track-on-init
                       event-track-data="trackingData.getDefault()">
                   </div>
   
                   <request-form-template
                       template-id="template-request-intro-instant-everything">
                   </request-form-template>
               </div>
               <div
                                       ng-if="!hideIntroScreen && !shouldShowInstantEverythingExperience()
                       && !(encodedServiceId)"
                                       ng-show="activeSection.id === 'explanationIntro'"
                   request-form-section="'explanationIntro'"
                   form-class-when-visible="'theme-branded'"
                   is-branded-section="true"
                   hide-progress-bar="true"
                   hide-back-button="!(requestForm.categories.length > 1  || forceShowCategoryChooser)"
                   schema="requestFormSchema.intro"
                   schema-assign="EmptySchema"
                   schema-validation-subsection>
   
                   <div
                       ng-if="activeSection.id === 'explanationIntro'"
                       event-track="request form/view intro explanation"
                       event-track-on-init
                       event-track-data="trackingData.getDefault()">
                   </div>
   
                   <request-form-template
                       template-id="template-request-explanation"
                       scope-vars="category"
                       category="requestForm.activeCategory">
                   </request-form-template>
               </div>
   
               <div schema="requestFormSchema.questions" schema-assign="EmptySchema">
                   <request-form-template template-id="template-request-questions"
                                               scope-vars="showedCategoryChooser"
                       showed-category-chooser="showedCategoryChooser()"
                       >
                   </request-form-template>
               </div>
   
               <div
                   ng-if="requestForm.activeCategory.allows_image_upload"
                   ng-show="activeSection.id === 'imageUpload'"
                   request-form-section="'imageUpload'"
                   schema-validation-subsection
                   schema="requestFormSchema.imageUpload"
                   schema-assign="EmptySchema">
   
                   <div
                       ng-if="activeSection.id === 'imageUpload'"
                       event-track="request form/view image upload question"
                       event-track-on-init
                       event-track-data="trackingData.getDefault()">
                   </div>
   
                   <request-form-template
                       template-id="template-request-image-upload"
                       scope-vars="category"
                       category="requestForm.activeCategory">
                   </request-form-template>
   
                                       <request-form-template
                       template-id="template-request-form-navigation"
                       scope-vars="continueText"
                       continue-text="requestForm.addImages && !activeSection.hasImages
                           ? 'Skip'
                           : ''">
                   </request-form-template>
                                   </div>
   
                               <div ng-if="requestForm.activeCategory.travel_types.length >= 1">
                   <div
                       ng-if="activeSection.id === 'location'"
                       event-track="request form/view location questions"
                       event-track-on-init
                       event-track-data="trackingData.getDefault()"></div>
   
                   <div ng-if="requestForm.activeCategory.travel_types.length === 1">
                       <input
                           type="hidden"
                           name="req_travel[]"
                           value="{[{ requestForm.activeCategory.travel_types[0] }]}">
   
                       <div
                           ng-if="requestForm.activeCategory.travel_types.indexOf('toprovider') !== -1"
                           ng-show="activeSection.id === 'location'"
                           request-form-section="'location'"
                           schema-validation-subsection
                           schema="requestFormSchema.location"
                           schema-assign="EmptySchema">
   
                           <request-form-template
                               template-id="template-request-service-location-distance-standalone">
                           </request-form-template>
   
                                                       <request-form-template template-id="template-request-form-navigation">
                           </request-form-template>
                                                   </div>
                   </div>
   
                   <div
                       ng-if="requestForm.activeCategory.travel_types.length > 1"
                       ng-show="activeSection.id === 'location'"
                       request-form-section="'location'"
                       schema-validation-subsection
                       schema="requestFormSchema.location"
                       schema-assign="EmptySchema">
   
                       <request-form-template
                           template-id="template-request-service-location"
                           scope-vars="category"
                           category="requestForm.activeCategory">
                       </request-form-template>
   
                                               <request-form-template template-id="template-request-form-navigation">
                       </request-form-template>
                                           </div>
               </div>
   
                               <div ng-if="schedulingHandler.showNewSchedulingExperience">
                                       <div
                       ng-if="schedulingHandler.schedulingArchetype === 'event_with_duration'
                           || schedulingHandler.schedulingArchetype === 'event_no_duration'"
                       ng-show="activeSection.id === 'scheduling'"
                       request-form-section="'scheduling'"
                                               schema-validation-subsection
                       schema="requestFormSchema.scheduling"
                       schema-assign="EmptySchema">
   
                       <div
                           ng-if="activeSection.id === 'scheduling'"
                           event-track="request form/view scheduling questions"
                           event-track-on-init
                           event-track-data="trackingData.getSchedulingDefault(requestForm)"></div>
   
                       <request-form-template
                           template-id="template-request-scheduling-event"
                           scope-vars="category"
                           category="requestForm.activeCategory">
                       </request-form-template>
   
                                               <request-form-template
                           template-id="template-request-form-navigation">
                       </request-form-template>
                                           </div>
   
                   <div
                       ng-if="schedulingHandler.schedulingArchetype === 'event_with_duration'
                           || schedulingHandler.schedulingArchetype === 'event_no_duration'"
                       ng-show="activeSection.id === 'schedulingTimes'"
                       request-form-section="'schedulingTimes'"
                                               schema="requestFormSchema.event"
                       schema-assign="EmptySchema">
   
                       <request-form-template
                           template-id="template-request-scheduling-event-time"
                           scope-vars="category"
                           category="requestForm.activeCategory">
                       </request-form-template>
   
                                               <request-form-template
                           template-id="template-request-form-navigation">
                       </request-form-template>
                                           </div>
   
                                       <div
                       ng-if="schedulingHandler.showV2CadenceQuestion
                           && (schedulingHandler.schedulingArchetype === 'multi_recurring'
                           || schedulingHandler.schedulingArchetype === 'multi_mixed')"
                       ng-show="activeSection.id === 'cadence'"
                       request-form-section="'cadence'"
                                               schema-validation-subsection
                       schema="requestFormSchema.cadence"
                       schema-assign="EmptySchema">
   
                       <div
                           ng-if="activeSection.id === 'scheduling'"
                           event-track="request form/view scheduling questions"
                           event-track-on-init
                           event-track-data="trackingData.getSchedulingDefault(requestForm)"></div>
   
                       <request-form-template
                           template-id="template-request-scheduling-multi-cadence"
                           scope-vars="category,scheduling"
                           category="requestForm.activeCategory"
                           scheduling="requestForm.scheduling">
                       </request-form-template>
   
                                               <request-form-template
                           template-id="template-request-form-navigation">
                       </request-form-template>
                                           </div>
   
                                       <div
                       ng-if="schedulingHandler.schedulingArchetype === 'multi_recurring'
                           || (schedulingHandler.schedulingArchetype === 'multi_mixed'
                           && $model.cadence.cadencePreference !== 'just_once')"
                       ng-show="activeSection.id === 'cadenceDaysTimes'"
                       request-form-section="'cadenceDaysTimes'"
                                               schema-validation-subsection
                       schema="requestFormSchema.cadenceDaysTimes"
                       schema-assign="EmptySchema">
   
                       <request-form-template
                           template-id="template-request-scheduling-multi-cadence-days-times"
                           scope-vars="category,scheduling"
                           category="requestForm.activeCategory"
                           scheduling="requestForm.scheduling">
                       </request-form-template>
   
                                               <request-form-template
                           template-id="template-request-form-navigation">
                       </request-form-template>
                                           </div>
   
                                       <div
                       ng-if="schedulingHandler.schedulingArchetype === 'multi_nonrecurring'
                           || (schedulingHandler.schedulingArchetype === 'multi_mixed'
                           && $model.cadence.cadencePreference === 'just_once')"
                       ng-show="activeSection.id === 'scheduling'"
                       request-form-section="'scheduling'"
                                               schema-validation-subsection
                       schema="requestFormSchema.scheduling"
                       schema-assign="EmptySchema">
   
                       <div
                           ng-if="activeSection.id === 'scheduling'"
                           event-track="request form/view scheduling questions"
                           event-track-on-init
                           event-track-data="trackingData.getSchedulingDefault(requestForm)"></div>
   
                       <request-form-template
                           template-id="template-request-scheduling-multi"
                           scope-vars="category,scheduling"
                           category="requestForm.activeCategory"
                           scheduling="requestForm.scheduling">
                       </request-form-template>
   
                                               <request-form-template
                           template-id="template-request-form-navigation">
                       </request-form-template>
                                           </div>
   
                                       <div
                       ng-if="(schedulingHandler.schedulingArchetype === 'multi_nonrecurring'
                           || (schedulingHandler.schedulingArchetype === 'multi_mixed'
                           && $model.cadence.cadencePreference === 'just_once'))
                           && $model.scheduling.dayPreference !== 'as_recommended_by_pro'"
                       ng-show="activeSection.id === 'schedulingTimes'"
                       request-form-section="'schedulingTimes'"
                                               schema="requestFormSchema.timeslots"
                       schema-assign="EmptySchema">
   
                       <request-form-template
                           template-id="template-request-scheduling-timeslots"
                           scope-vars="category,scheduling"
                           category="requestForm.activeCategory"
                           scheduling="requestForm.scheduling">
                       </request-form-template>
   
                                               <request-form-template
                           template-id="template-request-form-navigation">
                       </request-form-template>
                                           </div>
   
                                       <div
                       ng-if="schedulingHandler.schedulingArchetype === 'completed_by'">
                       <input
                           type="hidden"
                           name="scheduling_timestamps_array"
                           value="[]" />
                   </div>
               </div>
   
                               <div ng-if="!schedulingHandler.showNewSchedulingExperience">
                   <div
                       ng-if="requestForm.activeCategory.scheduling_type === 'event'
                           || requestForm.activeCategory.scheduling_type === 'appointment'"
                       ng-show="activeSection.id === 'originalScheduling'"
                       request-form-section="'originalScheduling'"
                                               schema-validation-subsection
                       schema="requestFormSchema.scheduling"
                       schema-assign="EmptySchema">
   
                       <div
                           ng-if="activeSection.id === 'originalScheduling'"
                           event-track="request form/view scheduling questions"
                           event-track-on-init
                           event-track-data="trackingData.getDefault()"></div>
   
                       <request-form-template
                           template-id="template-request-scheduling"
                           scope-vars="category"
                           category="requestForm.activeCategory">
                       </request-form-template>
   
                                               <request-form-template template-id="template-request-form-navigation">
                       </request-form-template>
                                           </div>
               </div>
   
               <div
                   ng-show="activeSection.id === 'anythingElse'"
                   request-form-section="'anythingElse'"
                   schema-validation-subsection
                   schema="requestFormSchema.anythingElse"
                   schema-assign="EmptySchema">
   
                   <div
                       ng-if="activeSection.id === 'anythingElse'"
                       event-track="request form/view anything else question"
                       event-track-on-init
                       event-track-data="trackingData.getDefault()"></div>
   
                   <request-form-template template-id="template-request-description">
                   </request-form-template>
                                       <request-form-template
                       template-id="template-request-form-navigation"
                       scope-vars="continueText"
                       continue-text="$model.anythingElse.anythingElse.moreInfo ? 'Next' : 'Skip'">
                   </request-form-template>
                                   </div>
   
               <div
                   ng-if="!shouldShowInstantEverythingExperience()"
                   ng-show="activeSection.id === 'zipCode'"
                   request-form-section="'zipCode'"
                                       schema-validation-subsection
                   schema="requestFormSchema.zipCode"
                   schema-assign="EmptySchema">
   
                   <div
                       ng-if="activeSection.id === 'zipCode'"
                       event-track="request form/view zipcode input"
                       event-track-on-init
                       event-track-data="trackingData.getDefault()"></div>
   
                                       <request-form-template template-id="template-request-form-section-header">
                       Please confirm where you need the
                       {[{ requestForm.activeCategory.sentence_taxonym }]}.
                   </request-form-template>
   
                   <request-form-template
                       template-id="template-request-zip-code"
                       class="RequestForm-standaloneInputSection">
                   </request-form-template>
   
                   
                   
                                       <request-form-template
                       template-id="template-request-form-navigation"
                       scope-vars="isLastSection"
                       is-last-section="requestForm.options.loggedIn">
                   </request-form-template>
                                   </div>
   
               
               <div
                   ng-if="!requestForm.options.loggedIn && !removeFindProsAnimation"
                   ng-show="activeSection.id === 'findProsAnimation'"
                   form-class-when-visible="'theme-find-pros-animation'"
                   should-show-main-nav="false"
                   hide-progress-bar="true"
                   show-top-logo="true"
                   hide-back-button="true"
                   hide-close-button="true"
                   request-form-section="'findProsAnimation'">
   
   
                   <div class="RequestForm-findProsWrapper
                       ">
   
                                                               
   <div class="find-pros-animation-more-animation">
   <div class="find-pros-animation-more-animation__stage">
       <div class="find-pros-animation-more-animation__circle3 find-pros-animation-more-animation--center"></div>
       <div class="find-pros-animation-more-animation__circle2 find-pros-animation-more-animation--center"></div>
       <div class="find-pros-animation-more-animation__circle1 find-pros-animation-more-animation--center"></div>
   
       <div class="find-pros-animation-more-animation__request-form
           find-pros-animation-more-animation--center">
   
           <img src="https://static.thumbtackstatic.com/_assets/images/release/modules/find-pros-animation/images/lines-39ac667a.svg"
               class="find-pros-animation-more-animation__lines1">
   
           <img src="https://static.thumbtackstatic.com/_assets/images/release/modules/find-pros-animation/images/lines-39ac667a.svg"
               class="find-pros-animation-more-animation__lines2">
   
           <img src="https://static.thumbtackstatic.com/_assets/images/release/modules/find-pros-animation/images/lines-39ac667a.svg"
               class="find-pros-animation-more-animation__lines3">
       </div>
   
       <img src="https://static.thumbtackstatic.com/_assets/images/release/modules/find-pros-animation/images/check-0a0a748f.svg"
           class="find-pros-animation-more-animation__check">
   
       <div class="find-pros-animation-more-animation__tile1">
           <img src="https://static.thumbtackstatic.com/_assets/images/release/modules/find-pros-animation/images/quote-9cdb1629.svg"
               class="find-pros-animation-more-animation__quote">
   
           <img src="https://static.thumbtackstatic.com/_assets/images/release/modules/find-pros-animation/images/avatar-male-6f6abe69.svg"
               class="find-pros-animation-more-animation__avatar1">
       </div>
   
       <div class="find-pros-animation-more-animation__tile2">
           <img src="https://static.thumbtackstatic.com/_assets/images/release/modules/find-pros-animation/images/quote-9cdb1629.svg"
               class="find-pros-animation-more-animation__quote">
   
           <img src="https://static.thumbtackstatic.com/_assets/images/release/modules/find-pros-animation/images/avatar-male-6f6abe69.svg"
               class="find-pros-animation-more-animation__avatar2">
       </div>
   
       <div class="find-pros-animation-more-animation__tile3">
           <img src="https://static.thumbtackstatic.com/_assets/images/release/modules/find-pros-animation/images/quote-9cdb1629.svg"
               class="find-pros-animation-more-animation__quote">
   
           <img src="https://static.thumbtackstatic.com/_assets/images/release/modules/find-pros-animation/images/avatar-female-6f32361e.svg"
               class="find-pros-animation-more-animation__avatar3">
       </div>
   </div>
   <div class="find-pros-animation-more-animation__scene0-text H4-R">
       <p>Reviewing your answers.</p>
   </div>
   <div class="find-pros-animation-more-animation__text H4-R">
       <p>Matching you with pros.</p>
   </div>
   </div>
   
                                           </div>
               </div>
   
               <div
                   ng-if="!requestForm.options.loggedIn && shouldShowInstantEverythingExperience()"
                   ng-show="activeSection.id === 'ixSubmission'"
                   should-show-main-nav="false"
                   hide-back-button="true"
                   hide-close-button="true"
                   hide-progress-bar="true"
                   form-class-when-visible="'theme-branded'"
                   request-form-section="'ixSubmission'">
   
                   <div>
                                  
   
   
   
   
   
   
   
   <post-request-interstitial >
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
                                                   <svg-icon class="PostRequestInterstitial-postRequest-star"
                               type="star" size="sm"></svg-icon>
                                                   <svg-icon class="PostRequestInterstitial-postRequest-star"
                               type="star" size="sm"></svg-icon>
                                                   <svg-icon class="PostRequestInterstitial-postRequest-star"
                               type="star" size="sm"></svg-icon>
                                                   <svg-icon class="PostRequestInterstitial-postRequest-star"
                               type="star" size="sm"></svg-icon>
                                                   <svg-icon class="PostRequestInterstitial-postRequest-star"
                               type="star" size="sm"></svg-icon>
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
                               <svg-icon class="PostRequestInterstitial-postRequest-star"
                                   type="star" size="md"></svg-icon>
                           </div>
                           <div responsive-if="below-md" responsive-grid="page">
                               <svg-icon class="PostRequestInterstitial-postRequest-star"
                                   type="star" size="sm"></svg-icon>
                           </div>
                                                   <div responsive-if="above-md" responsive-grid="page">
                               <svg-icon class="PostRequestInterstitial-postRequest-star"
                                   type="star" size="md"></svg-icon>
                           </div>
                           <div responsive-if="below-md" responsive-grid="page">
                               <svg-icon class="PostRequestInterstitial-postRequest-star"
                                   type="star" size="sm"></svg-icon>
                           </div>
                                                   <div responsive-if="above-md" responsive-grid="page">
                               <svg-icon class="PostRequestInterstitial-postRequest-star"
                                   type="star" size="md"></svg-icon>
                           </div>
                           <div responsive-if="below-md" responsive-grid="page">
                               <svg-icon class="PostRequestInterstitial-postRequest-star"
                                   type="star" size="sm"></svg-icon>
                           </div>
                                                   <div responsive-if="above-md" responsive-grid="page">
                               <svg-icon class="PostRequestInterstitial-postRequest-star"
                                   type="star" size="md"></svg-icon>
                           </div>
                           <div responsive-if="below-md" responsive-grid="page">
                               <svg-icon class="PostRequestInterstitial-postRequest-star"
                                   type="star" size="sm"></svg-icon>
                           </div>
                                                   <div responsive-if="above-md" responsive-grid="page">
                               <svg-icon class="PostRequestInterstitial-postRequest-star"
                                   type="star" size="md"></svg-icon>
                           </div>
                           <div responsive-if="below-md" responsive-grid="page">
                               <svg-icon class="PostRequestInterstitial-postRequest-star"
                                   type="star" size="sm"></svg-icon>
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
                                                   <svg-icon class="PostRequestInterstitial-postRequest-star"
                               type="star" size="sm"></svg-icon>
                                                   <svg-icon class="PostRequestInterstitial-postRequest-star"
                               type="star" size="sm"></svg-icon>
                                                   <svg-icon class="PostRequestInterstitial-postRequest-star"
                               type="star" size="sm"></svg-icon>
                                                   <svg-icon class="PostRequestInterstitial-postRequest-star"
                               type="star" size="sm"></svg-icon>
                                                   <svg-icon class="PostRequestInterstitial-postRequest-star"
                               type="star" size="sm"></svg-icon>
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
   
               <div
                   ng-if="!requestForm.options.loggedIn && shouldShowInstantEverythingExperience()"
                   ng-show="activeSection.id === 'contactInfo'"
                   request-form-section="'contactInfo'"
                   is-last-section="true"
                   hide-progress-bar="true"
                   hide-back-button="true"
                   show-top-logo="true"
                   schema-validation-subsection
                   schema="requestFormSchema.ixContactInfo"
                   schema-assign="EmptySchema">
   
                   <div
                       ng-if="activeSection.id === 'contactInfo'"
                       event-track="request form/view contact form"
                       event-track-on-init
                       event-track-data="trackingData.viewContactForm()"></div>
   
                                       <request-form-template
                       template-id="template-request-email-instant-everything"
                       class="RequestForm-standaloneInputSection">
                   </request-form-template>
                                   </div>
               <div
                   ng-if="!requestForm.options.loggedIn && !shouldShowInstantEverythingExperience()"
                   ng-show="activeSection.id === 'contactInfo'"
                   request-form-section="'contactInfo'"
                   hide-progress-bar="true"
                   show-top-logo="true"
                   schema-validation-subsection
                   schema="requestFormSchema.contactInfo"
                   schema-assign="EmptySchema">
   
                   <div
                       ng-if="activeSection.id === 'contactInfo'"
                       event-track="request form/view contact form"
                       event-track-on-init
                       event-track-data="trackingData.viewContactForm()"></div>
   
                   
                   
                                           <request-form-template template-id="template-request-form-section-header"
                           >
   
                           We don't share your email with pros.
                       </request-form-template>
   
                       <div
                                                           class="RequestForm-standaloneInputSection"
                                                   >
                           <request-form-template
                               template-id="template-request-contact-email"
                               scope-vars="category"
                               category="requestForm.activeCategory">
                           </request-form-template>
                       </div>
                   
                   
   
                   
                   
                   <request-form-template
                       ng-if="!requestForm.options.loggedIn"
                       template-id="template-request-form-navigation">
                   </request-form-template>
   
                   
                                   </div>
   
               <div
                   ng-if="!requestForm.options.loggedIn && !shouldShowInstantEverythingExperience()"
                   ng-show="activeSection.id === 'fullName'"
                   request-form-section="'fullName'"
                   hide-progress-bar="true"
                   show-top-logo="true"
                                       schema-validation-subsection
                   schema="requestFormSchema.fullName"
                   schema-assign="EmptySchema"
                   >
   
                   <div
                       ng-if="activeSection.id === 'fullName'"
                       event-track="request form/view name input"
                       event-track-on-init
                       event-track-data="trackingData.getDefault()"></div>
   
                   
                   
                   <request-form-template template-id="template-request-form-section-header"
                                               is-theme-higher="true">
                       Please enter your full name.
                   </request-form-template>
   
                   <request-form-template
                       template-id="template-request-full-name"
                                                   class="RequestForm-standaloneInputSection"
                       >
                   </request-form-template>
   
                   
                   
                                       <request-form-template template-id="template-request-form-navigation"
                       scope-vars="isLastSection,isDisclaimerThemeSmaller"
                       is-last-section="true"
                       >
                   </request-form-template>
                                   </div>
   
                           </form>
   
           <div
               ng-if="!requestForm.options.loggedIn"
               hide-progress-bar="true"
               show-top-logo="true"
               ng-show="activeSection.id === 'login'"
               request-form-section="'login'"
               >
   
               <request-form-template template-id="template-request-form-login">
               </request-form-template>
           </div>
       </div>
   </div>
</script>
<script id="template-request-modal" type="text/template">
   <div
       standard-modal
               disable-backdrop-close="true"
       hide-close="true">
   
       <request-form
           form-type="thumbprint"
           zip-code="'{[{ zipCode }]}'"
           query="{[{ query }]}"
           category-id="{[{ categoryId }]}"
           category-ids="{[{ categoryIds }]}"
           customer-category-pk="{[{ customerCategoryPk }]}"
           logged-in="false"
           from-homepage="{[{ fromHomepage }]}"
           force-single-form="{[{ forceSingleForm }]}"
                       hercule-version="1"
                       hide-intro-screen="
               {[{ hideIntroScreen }]}
           "
                       find-pros-animation-duration="8000"
                       intro-emphasize-projects="{[{ introEmphasizeProjects }]}"
           progress-bar-total-offset="1"
                       
           is-in-modal="{[{ isInModal }]}"
           use-unspecified-categories="{[{ useUnspecifiedCategories }]}">
       </request-form>
   </div>
</script>
@endsection
@section('script')
<script src="{{URL::To('public/assets/jquery-migrate.min')}}"></script>
@endsection

