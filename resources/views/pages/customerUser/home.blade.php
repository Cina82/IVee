@extends('layouts.customerDash')
@section('content')
<consumer-dashboard>
<style>
.Moments
{
	background-color:#ffffff!important;
}
</style>
        <div class="ConsumerDashboard">
                                            
<div class="BelowHeader1Container ng-isolate-scope" data-is-visible="false" user-type="customer" data-flavor="below_header1" utm-source="projects" android-icon-url="https://static.thumbtackstatic.com/_assets/images/release/components/install-native-app/images/google-play-badge-8c7ddebe.svg" iphone-icon-url="https://static.thumbtackstatic.com/_assets/images/release/components/install-native-app/images/apple-app-store-c62cc2f9.svg">
    <div class="page-grid">
        <div class="column-lg-6">
            <div class="InstallNativeAppBelowHeader1Desktop">
                <div class="InstallNativeAppBelowHeader1Desktop-title T2-S">
                    Get more done on the go
                </div>
                <div class="InstallNativeAppBelowHeader1Desktop-iconWrapper">
                    <a ng-hide="device==='android'" href="http://r.yoz.io/Z3.c.F?utm_source=projects" class="">
                        <img ng-src="https://static.thumbtackstatic.com/_assets/images/release/components/install-native-app/images/apple-app-store-c62cc2f9.svg" src="https://static.thumbtackstatic.com/_assets/images/release/components/install-native-app/images/apple-app-store-c62cc2f9.svg">
                    </a>
                    <a ng-hide="device==='iphone'" href="http://r.yoz.io/Z3.c.G?utm_source=projects" class="">
                        <img ng-src="https://static.thumbtackstatic.com/_assets/images/release/components/install-native-app/images/google-play-badge-8c7ddebe.svg" src="https://static.thumbtackstatic.com/_assets/images/release/components/install-native-app/images/google-play-badge-8c7ddebe.svg">
                    </a>
                </div>
                <div class="InstallNativeAppBelowHeader1Desktop-closeButtonWrapper" ng-click="onClose()">
                    <svg-icon type="close2" size="md" class="ng-scope theme-medium IconContainer"><svg class="Icon" viewBox="0 0 24 24">
    <use xlink:href="#thumbprinticon-close2_24"></use>
</svg>
</svg-icon>
                </div>
            </div>

            <div class="InstallNativeAppBelowHeader1Mobile">
                <div class="InstallNativeAppBelowHeader1Mobile-title T1-R">Get more done on the go</div>
                <div class="InstallNativeAppBelowHeader1Mobile-iconWrapper">
                    <a ng-hide="device==='android'" href="http://r.yoz.io/Z3.c.F?utm_source=projects" class="InstallNativeAppBelowHeader1Mobile-iconWrapper-icon">

                        <img ng-src="https://static.thumbtackstatic.com/_assets/images/release/components/install-native-app/images/apple-app-store-c62cc2f9.svg" src="https://static.thumbtackstatic.com/_assets/images/release/components/install-native-app/images/apple-app-store-c62cc2f9.svg">
                    </a>
                    <a ng-hide="device==='iphone'" href="http://r.yoz.io/Z3.c.G?utm_source=projects" class="InstallNativeAppBelowHeader1Mobile-iconWrapper-icon">

                        <img ng-src="https://static.thumbtackstatic.com/_assets/images/release/components/install-native-app/images/google-play-badge-8c7ddebe.svg" src="https://static.thumbtackstatic.com/_assets/images/release/components/install-native-app/images/google-play-badge-8c7ddebe.svg">
                    </a>
                </div>
                <div class="InstallNativeAppBelowHeader1Mobile-closeButtonWrapper" ng-click="onClose()">
                    <svg-icon type="close2" size="md" class="ng-scope theme-medium IconContainer"><svg class="Icon" viewBox="0 0 24 24">
    <use xlink:href="#thumbprinticon-close2_24"></use>
</svg>
</svg-icon>
                </div>
            </div>
        </div>
    </div>
</div>

            
            
            
                        

<!-- <projects>
    <div class="Projects">
        <div class="page-grid">
            <div class="column-lg-6">
                <div class="Projects-headerWrapper">
                    <div class="Projects-title H4-R">Projects</div>
                    <a href="{{ URL::to('') }}" class="Button theme-secondary theme-medium" event-track="dashboard/start new project" event-track-on="click">
                        Start New Project
                    </a>
                </div>
            </div>
        </div>
        <div class="page-grid theme-flex-columns">
                            <div class="column-lg-6">
                    <span class="B2-R theme-secondary">
                        You haven't created any projects on Thumbtack.
                    </span>
                    <div class="Spacer-18"></div>
                </div>
                                </div>
    </div>
</projects> -->

<projects>
   <div class="Projects">
      <div class="page-grid">
         <div class="column-lg-6">
            <div class="Projects-headerWrapper">
               <div class="Projects-title H4-R">Projects</div>
               <a href="{{URL::to('')}}" class="Button theme-secondary theme-medium" event-track="dashboard/start new project" event-track-on="click">
               Start New Project
               </a>
            </div>
         </div>
      </div>

      <div class="page-grid theme-flex-columns">
        @php $count = 0; @endphp
        @foreach($serviceName as $Servicename)
          
          <div class="column-xs-6 column-sm-6 column-md-3 column-lg-2 Projects-projectCard">
            <div class="Projects-projectCard-innerWrapper">
               <div class="Projects-projectCard-top">
                  <h3 class="Projects-projectCard-top-title T1-R">
                      
                     {{$Servicename[0]->name}}
                  </h3>
                  <h4 class="Projects-projectCard-top-subtitle B2-S theme-secondary">

                    {{$Servicename[0]->created_at}}

                  </h4>
                  <span class="Projects-projectCard-top-cta B3-S">
                  <a href="{{URL::to('')}}">
                  Update
                  </a>
                  </span>
               </div>
               <div class="Projects-projectCard-middle">
                  <ul class="Projects-projectCard-pros">
                    @foreach($users[$count] as $us)
                    
                    <li class="Projects-projectCard-pros-item">
                        <a href="{{URL::to('userProfile')}}/{{$us[0]->id}}" data-trigger="1">
                           <avatar class="Avatar Avatar--md">
                              <div class="Avatar__circle">
                                <img src="{{URL::to('public/thumbtack_image')}}/{{$us[0]->image}}" class="Avatar__image">
                              </div>
                           </avatar>
                        </a>
                     </li>
                     @endforeach 
                     @php $count = $count + 1; @endphp
                  </ul>
                  <div>
                     <p class="T2-S theme-secondary Projects-projectCard-middle-header">
                     </p>
                     <p class="B2-S theme-secondary">
                        You closed this project on July 12, 2017.
                     </p>
                  </div>
               </div>
               <div class="Projects-projectCard-bottom">
                  <a href="{{URL::to('')}}" class="Button theme-medium">
                  View Quotes
                  </a>
                  <p class="Projects-projectCard-actionLink">
                     <span class="Link ng-scope" event-track="dashboard/click request again" event-track-on="click" open-request-form-modal="" ng-click="openModalWithCategoryId(
                        'Q9sYIW2IZP5AkA',
                        'dashboard-renew')">
                     Request again
                     </span>
                  </p>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</projects>




<div class="ConsumerDashboard-recommendationsWrapper">
<div class="Moments  ">
      <div class="Moments-container">
         <div class="Moments-moment">
            <div class="page-grid">
               <div class="column-lg-6">
                  <h4 class="tp-heading-4 Moments-moment-title">Popular in your area</h4>
               </div>
            </div>
            <div class="page-grid theme-full-bleed-at-xs">
               <div class="column-lg-6">
                  <category-carousel count="25" responsive-grid="page" class="ng-scope">
                     <div class="CategoryCarousel">
                        <div class="CategoryCarousel-paddle paddle-left" ng-click="carousel.onClickLeft()">
                           <svg-icon type="left-caret" size="md" class="ng-scope theme-medium IconContainer"><svg class="Icon" viewBox="0 0 24 24">
    <use xlink:href="#thumbprinticon-left-caret_24"/>
</svg>
</svg-icon>
                        </div>
                        <div class="CategoryCarousel-container">
                           <div class="CategoryCarousel-list" style="left: -6116px;">
                              <div class="CategoryCarousel-item">
                                 <div class="ServiceBox-container theme-carousel ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;1axLKc3DdQ6g5w&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:0,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;1axLKc3DdQ6g5w&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:0,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('1axLKc3DdQ6g5w', '')">
                                       <!--         <div
                                          class="ServiceBox-item-image"
                                                          lazy-image
                                              lazy-image-src="https://static7.thumbtackstatic.com/production/hero-images/2992_small"
                                               refresh-on-document-scroll             >
                                          
                                                  </div> -->
                                       <img src="http://192.168.1.9/Thumbtack/public/assets/img/2992_small.jpeg" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Personal Training 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="ServiceBox-container theme-carousel ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;Ef:ZOOYOXFaD2A&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:1,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;Ef:ZOOYOXFaD2A&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:1,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('Ef:ZOOYOXFaD2A', '')">
                                       <!-- <div
                                          class="ServiceBox-item-image"
                                                          lazy-image
                                              lazy-image-src="https://static5.thumbtackstatic.com/production/hero-images/2833_small"
                                               refresh-on-document-scroll             >
                                          
                                                  </div> -->
                                       <img src="http://192.168.1.9/Thumbtack/public/assets/img/2833_thumbnail.jpeg" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          House Cleaning 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="ServiceBox-container theme-carousel ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;DlKFbmZEwCYQyA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:2,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;DlKFbmZEwCYQyA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:2,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('DlKFbmZEwCYQyA', '')">
                                       <!--  <div
                                          class="ServiceBox-item-image"
                                                          lazy-image
                                              lazy-image-src="https://static2.thumbtackstatic.com/production/hero-images/1310_small"
                                               refresh-on-document-scroll             >
                                          
                                          </div> -->
                                       <img src="http://192.168.1.9/Thumbtack/public/assets/img/1310_small.jpeg" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Lawn Mowing and Trimming 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="ServiceBox-container theme-carousel ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;nV8DGI4:dEUXtQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:3,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;nV8DGI4:dEUXtQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:3,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('nV8DGI4:dEUXtQ', '')">
                                       <img src="http://192.168.1.9/Thumbtack/public/assets/img/2992_small.jpeg" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Local Moving (under 50 miles)
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="ServiceBox-container theme-carousel ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;kMI95pqKXLU9vQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:4,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;kMI95pqKXLU9vQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:4,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('kMI95pqKXLU9vQ', '')">
                                       <img src="http://192.168.1.9/Thumbtack/public/assets/img/2992_small.jpeg" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Massage Therapy 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="ServiceBox-container theme-carousel ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;M:HwIR8qa:MQww&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:5,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;M:HwIR8qa:MQww&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:5,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('M:HwIR8qa:MQww', '')">
                                  <img src="http://192.168.1.9/Thumbtack/public/assets/img/2992_small.jpeg" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Handyman 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="ServiceBox-container theme-carousel ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;jc3YVHYCu45H2g&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:6,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;jc3YVHYCu45H2g&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:6,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('jc3YVHYCu45H2g', '')">
                                    <img src="http://192.168.1.9/Thumbtack/public/assets/img/2992_small.jpeg" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Event Catering 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="ServiceBox-container theme-carousel ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;4Gs5C$PsIesk5A&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:7,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;4Gs5C$PsIesk5A&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:7,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('4Gs5C$PsIesk5A', '')">
                                        <img src="http://192.168.1.9/Thumbtack/public/assets/img/2992_small.jpeg" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Bounce House and Party Inflatables Rental 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="ServiceBox-container theme-carousel ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;bIY6hGfB2q8syQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:8,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;bIY6hGfB2q8syQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:8,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('bIY6hGfB2q8syQ', '')">
                                      <img src="http://192.168.1.9/Thumbtack/public/assets/img/2992_small.jpeg" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Private Swim Lessons 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="ServiceBox-container theme-carousel ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;GTdkGWTMaOx4Wg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:9,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;GTdkGWTMaOx4Wg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:9,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('GTdkGWTMaOx4Wg', '')">
                                      <img src="http://192.168.1.9/Thumbtack/public/assets/img/2992_small.jpeg" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Dog Training 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="ServiceBox-container theme-carousel ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;Q9sYIW2IZP5AkA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:10,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;Q9sYIW2IZP5AkA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:10,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('Q9sYIW2IZP5AkA', '')">
                                       <!-- <div
                                          class="ServiceBox-item-image"
                                                          lazy-image
                                              lazy-image-src="https://static5.thumbtackstatic.com/production/hero-images/3009_small"
                                               refresh-on-document-scroll             >
                                          
                                                  </div> -->
                                       <img src="http://192.168.1.9/Thumbtack/public/assets/img/3009_small.jpeg" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Wedding and Event Makeup 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="ServiceBox-container theme-carousel ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;XyyEps5FZMepLQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:11,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;XyyEps5FZMepLQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:11,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('XyyEps5FZMepLQ', '')">
                                       <img src="http://192.168.1.9/Thumbtack/public/assets/img/2992_small.jpeg" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Interior Painting 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="ServiceBox-container theme-carousel ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;iJlabHh2QF9ylg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:12,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;iJlabHh2QF9ylg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:12,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('iJlabHh2QF9ylg', '')">
                                      <img src="http://192.168.1.9/Thumbtack/public/assets/img/2992_small.jpeg" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          DJ 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="ServiceBox-container theme-carousel ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;9J5P8q6rNlEGlQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:13,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;9J5P8q6rNlEGlQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:13,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('9J5P8q6rNlEGlQ', '')">
                                      <img src="http://192.168.1.9/Thumbtack/public/assets/img/2992_small.jpeg" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Fence and Gate Installation 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="ServiceBox-container theme-carousel ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;Rfn88VIV27Tb3g&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:14,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;Rfn88VIV27Tb3g&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:14,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('Rfn88VIV27Tb3g', '')">
                                        <img src="http://192.168.1.9/Thumbtack/public/assets/img/2992_small.jpeg" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Portrait Photography 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="ServiceBox-container theme-carousel ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;Bg9:OPqOradztw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:15,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;Bg9:OPqOradztw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:15,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('Bg9:OPqOradztw', '')">
                                        <img src="http://192.168.1.9/Thumbtack/public/assets/img/2992_small.jpeg" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Outdoor Landscaping and Design 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="ServiceBox-container theme-carousel ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;b7cSvw5Y7PhRlA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:16,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;b7cSvw5Y7PhRlA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:16,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('b7cSvw5Y7PhRlA', '')">
                                        <img src="http://192.168.1.9/Thumbtack/public/assets/img/2992_small.jpeg" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Wedding Officiant 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="ServiceBox-container theme-carousel ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;1AlrokYQ00L8eQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:17,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;1AlrokYQ00L8eQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:17,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('1AlrokYQ00L8eQ', '')">
                                      <img src="http://192.168.1.9/Thumbtack/public/assets/img/2992_small.jpeg" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Roof Installation or Replacement 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="ServiceBox-container theme-carousel ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;6WTJnO6mPxjoag&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:18,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;6WTJnO6mPxjoag&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:18,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('6WTJnO6mPxjoag', '')">
                                     <img src="http://192.168.1.9/Thumbtack/public/assets/img/2992_small.jpeg" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Pest Control Services 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="ServiceBox-container theme-carousel ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;kPijy0lr$n4Dgw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:19,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;kPijy0lr$n4Dgw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:19,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('kPijy0lr$n4Dgw', '')">
                                     <img src="http://192.168.1.9/Thumbtack/public/assets/img/2992_small.jpeg" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Swimming Pool Cleaning, Maintenance, and Inspection 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="ServiceBox-container theme-carousel ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;dQJN84Ndr5s$Xg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:20,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;dQJN84Ndr5s$Xg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:20,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('dQJN84Ndr5s$Xg', '')">
                                    <img src="http://192.168.1.9/Thumbtack/public/assets/img/2992_small.jpeg" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Party Bus Rental 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="ServiceBox-container theme-carousel ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;HSN$F3bPaZ1iaw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:21,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;HSN$F3bPaZ1iaw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:21,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('HSN$F3bPaZ1iaw', '')">
                                    <img src="http://192.168.1.9/Thumbtack/public/assets/img/2992_small.jpeg" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Piano Lessons 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="ServiceBox-container theme-carousel ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;Vin8kPc8QyC5KQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:22,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;Vin8kPc8QyC5KQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:22,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('Vin8kPc8QyC5KQ', '')">
                                    <img src="http://192.168.1.9/Thumbtack/public/assets/img/2992_small.jpeg" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Computer Repair 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="ServiceBox-container theme-carousel ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;29EdERcHj04lig&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:23,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;29EdERcHj04lig&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:23,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('29EdERcHj04lig', '')">
                                    <img src="http://192.168.1.9/Thumbtack/public/assets/img/2992_small.jpeg" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Central Air Conditioning Repair 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="ServiceBox-container theme-carousel ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;VNuwXawPoFKfrw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:24,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;VNuwXawPoFKfrw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:24,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('VNuwXawPoFKfrw', '')">
                                     <img src="http://192.168.1.9/Thumbtack/public/assets/img/2992_small.jpeg" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          ACT Tutoring 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div class="ServiceBox-container theme-carousel ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;1axLKc3DdQ6g5w&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:0,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;1axLKc3DdQ6g5w&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:0,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('1axLKc3DdQ6g5w', '')">
                                       <!-- <div
                                          class="ServiceBox-item-image"
                                                          lazy-image
                                              lazy-image-src="https://static7.thumbtackstatic.com/production/hero-images/2992_small"
                                               refresh-on-document-scroll             >
                                          
                                                  </div> -->
                                       <img src="http://192.168.1.9/Thumbtack/public/assets/img/2992_small.jpeg" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Personal Training 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div class="ServiceBox-container theme-carousel ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;Ef:ZOOYOXFaD2A&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:1,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;Ef:ZOOYOXFaD2A&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:1,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('Ef:ZOOYOXFaD2A', '')">
                                       <!--  <div
                                          class="ServiceBox-item-image"
                                                          lazy-image
                                              lazy-image-src="https://static5.thumbtackstatic.com/production/hero-images/2833_small"
                                               refresh-on-document-scroll             >
                                          
                                                  </div> -->
                                       <img src="http://192.168.1.9/Thumbtack/public/assets/img/2833_thumbnail.jpeg" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          House Cleaning 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div class="ServiceBox-container theme-carousel ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;DlKFbmZEwCYQyA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:2,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;DlKFbmZEwCYQyA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:2,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('DlKFbmZEwCYQyA', '')">
                                       <!--     <div
                                          class="ServiceBox-item-image"
                                                          lazy-image
                                              lazy-image-src="https://static2.thumbtackstatic.com/production/hero-images/1310_small"
                                               refresh-on-document-scroll             >
                                          
                                                  </div> -->
                                       <img src="http://192.168.1.9/Thumbtack/public/assets/img/1310_small.jpeg" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Lawn Mowing and Trimming 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div class="ServiceBox-container theme-carousel ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;nV8DGI4:dEUXtQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:3,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;nV8DGI4:dEUXtQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:3,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('nV8DGI4:dEUXtQ', '')">
                                     <img src="http://192.168.1.9/Thumbtack/public/assets/img/2992_small.jpeg" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Local Moving (under 50 miles)
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div class="ServiceBox-container theme-carousel ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;kMI95pqKXLU9vQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:4,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;kMI95pqKXLU9vQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:4,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('kMI95pqKXLU9vQ', '')">
                                      <img src="http://192.168.1.9/Thumbtack/public/assets/img/2992_small.jpeg" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Massage Therapy 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div class="ServiceBox-container theme-carousel ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;M:HwIR8qa:MQww&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:5,&quot;block_position&quot;:0,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;M:HwIR8qa:MQww&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:5,&quot;block_position&quot;:0,&quot;block_type&quot;:2}">
                                    <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('M:HwIR8qa:MQww', '')">
                                    <img src="http://192.168.1.9/Thumbtack/public/assets/img/2992_small.jpeg" class="ServiceBox-item-image">
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
                           <svg-icon type="right-caret" size="md" class="ng-scope theme-medium IconContainer"><svg class="Icon" viewBox="0 0 24 24">
    <use xlink:href="#thumbprinticon-right-caret_24"/>
</svg>
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
                  <category-carousel count="6" responsive-grid="page" class="ng-scope">
                     <div class="CategoryCarousel">
                        <div class="CategoryCarousel-paddle paddle-left" ng-click="carousel.onClickLeft()">
                           <svg-icon type="left-caret" size="md" class="ng-scope theme-medium IconContainer"><svg class="Icon" viewBox="0 0 24 24">
    <use xlink:href="#thumbprinticon-left-caret_24"/>
</svg>
</svg-icon>
                        </div>
                        <div class="CategoryCarousel-container">
                           <div class="CategoryCarousel-list" style="left: 0px;">
                              <div class="CategoryCarousel-item">
                                 <div class="ServiceBox-container theme-carousel ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;6nlpb86x4sELeQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:0,&quot;block_position&quot;:1,&quot;block_type&quot;:3}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;6nlpb86x4sELeQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:0,&quot;block_position&quot;:1,&quot;block_type&quot;:3}">
                                    <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('6nlpb86x4sELeQ', '')">
                                       <!-- <div
                                          class="ServiceBox-item-image"
                                                          lazy-image
                                              lazy-image-src="https://static2.thumbtackstatic.com/production/hero-images/2250_small"
                                               refresh-on-document-scroll             >
                                          
                                                  </div> -->
                                       <img src="http://192.168.1.9/Thumbtack/public/assets/img/2250_small.jpeg" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Singing Lessons 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="ServiceBox-container theme-carousel ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;oBbEKZglfn$eJQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:1,&quot;block_position&quot;:1,&quot;block_type&quot;:3}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;oBbEKZglfn$eJQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:1,&quot;block_position&quot;:1,&quot;block_type&quot;:3}">
                                    <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('oBbEKZglfn$eJQ', '')">
                                       <!-- <div
                                          class="ServiceBox-item-image"
                                                          lazy-image
                                              lazy-image-src="https://static5.thumbtackstatic.com/production/hero-images/2240_small"
                                               refresh-on-document-scroll             >
                                          
                                                  </div> -->
                                       <img src="http://192.168.1.9/Thumbtack/public/assets/img/2240_small.jpeg" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Pet Sitting 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="ServiceBox-container theme-carousel ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;q75MpVw2qNDkmQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:2,&quot;block_position&quot;:1,&quot;block_type&quot;:3}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;q75MpVw2qNDkmQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:2,&quot;block_position&quot;:1,&quot;block_type&quot;:3}">
                                    <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('q75MpVw2qNDkmQ', '')">
                                     <img src="http://192.168.1.9/Thumbtack/public/assets/img/2992_small.jpeg" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Junk Removal 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="ServiceBox-container theme-carousel ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;MOc1BYoYDRBwZg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:3,&quot;block_position&quot;:1,&quot;block_type&quot;:3}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;MOc1BYoYDRBwZg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:3,&quot;block_position&quot;:1,&quot;block_type&quot;:3}">
                                    <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('MOc1BYoYDRBwZg', '')">
                                     <img src="http://192.168.1.9/Thumbtack/public/assets/img/2992_small.jpeg" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Swimming Pool Installation 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="ServiceBox-container theme-carousel ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;ac9WaewolzmHmw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:4,&quot;block_position&quot;:1,&quot;block_type&quot;:3}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;ac9WaewolzmHmw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:4,&quot;block_position&quot;:1,&quot;block_type&quot;:3}">
                                    <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('ac9WaewolzmHmw', '')">
                                     <img src="http://192.168.1.9/Thumbtack/public/assets/img/2992_small.jpeg" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Hair Coloring and Highlights 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item">
                                 <div class="ServiceBox-container theme-carousel ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;4ZinwdwPMD6HGQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:5,&quot;block_position&quot;:1,&quot;block_type&quot;:3}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;4ZinwdwPMD6HGQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:5,&quot;block_position&quot;:1,&quot;block_type&quot;:3}">
                                    <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('4ZinwdwPMD6HGQ', '')">
                                     <img src="http://192.168.1.9/Thumbtack/public/assets/img/2992_small.jpeg" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Honeymoon Travel Specialist 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div class="ServiceBox-container theme-carousel ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;6nlpb86x4sELeQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:0,&quot;block_position&quot;:1,&quot;block_type&quot;:3}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;6nlpb86x4sELeQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:0,&quot;block_position&quot;:1,&quot;block_type&quot;:3}">
                                    <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('6nlpb86x4sELeQ', '')">
                                       <!-- <div
                                          class="ServiceBox-item-image"
                                                          lazy-image
                                              lazy-image-src="https://static2.thumbtackstatic.com/production/hero-images/2250_small"
                                               refresh-on-document-scroll             >
                                          
                                                  </div> -->
                                       <img src="http://192.168.1.9/Thumbtack/public/assets/img/2250_small.jpeg" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Singing Lessons 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div class="ServiceBox-container theme-carousel ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;oBbEKZglfn$eJQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:1,&quot;block_position&quot;:1,&quot;block_type&quot;:3}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;oBbEKZglfn$eJQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:1,&quot;block_position&quot;:1,&quot;block_type&quot;:3}">
                                    <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('oBbEKZglfn$eJQ', '')">
                                       <!-- <div
                                          class="ServiceBox-item-image"
                                                          lazy-image
                                              lazy-image-src="https://static5.thumbtackstatic.com/production/hero-images/2240_small"
                                               refresh-on-document-scroll             >
                                          
                                                  </div> -->
                                       <img src="http://192.168.1.9/Thumbtack/public/assets/img/2240_small.jpeg" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Pet Sitting 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div class="ServiceBox-container theme-carousel ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;q75MpVw2qNDkmQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:2,&quot;block_position&quot;:1,&quot;block_type&quot;:3}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;q75MpVw2qNDkmQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:2,&quot;block_position&quot;:1,&quot;block_type&quot;:3}">
                                    <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('q75MpVw2qNDkmQ', '')">
                                    <img src="http://192.168.1.9/Thumbtack/public/assets/img/2992_small.jpeg" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Junk Removal 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div class="ServiceBox-container theme-carousel ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;MOc1BYoYDRBwZg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:3,&quot;block_position&quot;:1,&quot;block_type&quot;:3}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;MOc1BYoYDRBwZg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:3,&quot;block_position&quot;:1,&quot;block_type&quot;:3}">
                                    <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('MOc1BYoYDRBwZg', '')">
                                     <img src="http://192.168.1.9/Thumbtack/public/assets/img/2992_small.jpeg" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Swimming Pool Installation 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div class="ServiceBox-container theme-carousel ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;ac9WaewolzmHmw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:4,&quot;block_position&quot;:1,&quot;block_type&quot;:3}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;ac9WaewolzmHmw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:4,&quot;block_position&quot;:1,&quot;block_type&quot;:3}">
                                    <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('ac9WaewolzmHmw', '')">
                                     <img src="http://192.168.1.9/Thumbtack/public/assets/img/2992_small.jpeg" class="ServiceBox-item-image">
                                       <div class="ServiceBox-item-label">
                                          <span class=" tp-heading-6 ">
                                          Hair Coloring and Highlights 
                                          </span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="CategoryCarousel-item item-cloned">
                                 <div class="ServiceBox-container theme-carousel ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;4ZinwdwPMD6HGQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:5,&quot;block_position&quot;:1,&quot;block_type&quot;:3}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;4ZinwdwPMD6HGQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:null,&quot;position&quot;:5,&quot;block_position&quot;:1,&quot;block_type&quot;:3}">
                                    <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('4ZinwdwPMD6HGQ', '')">
                                     <img src="http://192.168.1.9/Thumbtack/public/assets/img/2992_small.jpeg" class="ServiceBox-item-image">
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
                           <svg-icon type="right-caret" size="md" class="ng-scope theme-medium IconContainer"><svg class="Icon" viewBox="0 0 24 24">
    <use xlink:href="#thumbprinticon-right-caret_24"/>
</svg>
</svg-icon>
                        </div>
                     </div>
                  </category-carousel>
               </div>
            </div>
         </div>
        
        
         
         
         
      </div>
   </div>
                            </div>
            
            
                        <app-upsell reset-timeout-duration="4000" class="ng-scope">
    <div class="app-upsell ng-scope is-loaded" responsive-image="" responsive-grid="page" uses-densities="" above-sm="{
                '1x': 'https://static.thumbtackstatic.com/_assets/images/release/modules/app-upsell/images/appupsell-bg-1x-56aa6732.jpg',
                '2x': 'https://static.thumbtackstatic.com/_assets/images/release/modules/app-upsell/images/appupsell-bg-2x-e8c738a7.jpg'
            }" below-sm="false" style="background-image: url(&quot;https://static.thumbtackstatic.com/_assets/images/release/modules/app-upsell/images/appupsell-bg-1x-56aa6732.jpg&quot;);">

        <div class="tp-wrap-snap">
            <div class="tp-grid">
                <div class="tp-col tp-col--12 tp-col--md-6">
                    <h3 class="app-upsell__heading tp-heading-3">Bring Thumbtack with you!</h3>
                    <p class="app-upsell__subtitle">We've made it even easier to accomplish your projects. Send request and receive quotes wherever you are.</p>
                    <div class="tp-input-row app-upsell__form">
                        <input name="cellphone" size="1" class="tp-text-input tp-text-input--large ng-pristine ng-valid" placeholder="Phone number" ng-model="$parent.phoneNumber" type="text">
                        <button type="submit" class="tp-button tp-button--highlight tp-button--large ng-binding" event-track="home page/clicked text me a link" event-track-on="click" ng-bind="transmissionStatus || 'Text me a link'" ng-click="send()">Text me a link</button>
                    </div>
                    <a href="http://r.yoz.io/Z3.c.F">
                        <img src="https://static.thumbtackstatic.com/_assets/images/release/components/install-native-app/images/apple-app-store-c62cc2f9.svg">
                    </a>
                    <a href="http://r.yoz.io/Z3.c.G">
                        <img src="https://static.thumbtackstatic.com/_assets/images/release/components/install-native-app/images/google-play-badge-8c7ddebe.svg">
                    </a>
                </div>
            </div>
        </div>
    </div>
</app-upsell>

        </div>
    </consumer-dashboard>
@endsection