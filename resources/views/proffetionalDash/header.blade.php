@if (Auth::User())
@php 
$userdata=Auth::User();
$first=substr($userdata->first_name, 0, 1);
$second=substr($userdata->last_name, 0, 1);
@endphp
<div class="glorious-header GlobalHeader" data-section="header">
   <div class="wrapper">
      <div class="row header-row">
         <div class="header-logo">
            <a href="{{URL::to('')}}">
               <!-- <svg-icon class="IconContainer ng-scope" style="min-width:178px;min-height:28px" twig-rendered="">
                  <svg class="Icon" viewBox="0 0 178 28">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#thumbprinticon-thumbtack-logo_178x28"></use>
                  </svg>
                  </svg-icon> -->
               <img class="GlobalHeader" src="{{URL::to('public/assets/img/Logo/LogoOrange.png')}}" alt="Ivee" width="178" height="">
               <img class="GlobalHeader-fallbackLogo" src="https://static1.thumbtackstatic.com/media/logos/thumbtack_brand_152x24.svg" alt="Ivee" width="152" height="24">
            </a>
         </div>
         <div class="header-middle-container">
            <a class="middle-tab " href="{{URL::to('proffetionalDash/Requests')}}" event-track="dashboard/click explore" event-track-on="click">Index
            </a>
            <a class="middle-tab " href="{{URL::to('proffetionalDash/calender')}}" event-track="dashboard/click explore" event-track-on="click">Calender
            </a>
            <a class="middle-tab " href="{{URL::to('professionaolDash/services')}}" event-track="dashboard/click explore" event-track-on="click">Services
            </a>
            <a class="middle-tab " href="{{URL::to('professionaolDash/insights')}}" event-track="dashboard/click explore" event-track-on="click">Insights
            </a>
         </div>
         <div class="header-right-container">
            <div class="header-navigation">
               <div class="universal-profile-container">
                  <div class="universal-picture" data-section="universal-picture">
                     <avatar class="Avatar Avatar--sm">
                        <div class="Avatar__circle">
                           <img src="{{URL::to('public/thumbtack_image')}}/{{ Auth::User()->image }}" class="Avatar__image">
                        </div>
                     </avatar>
                     <div class="arrow-tip" data-section="arrow-tip" style="display: none;">
                     </div>
                  </div>
                  <p class="universal-name" data-section="universal-name">
                     <span class="name">{{ Auth::User()->first_name }}</span>
                     <svg-icon type="down-caret" size="sm" class="ng-scope theme-small IconContainer">
                        <!-- <svg class="Icon" viewBox="0 0 16 16">
                           <use xlink:href="#thumbprinticon-down-caret_16"></use>
                           </svg> -->
                     </svg-icon>
                  </p>
                  <div class="profile-box-caret" data-section="arrow-tip" style="display: none;"></div>
                  <div class="box profile-box" data-section="profile-box" style="display: none;">
                     <div class="box-content">
                        <a href="" class="picture-big-link">
                           <avatar class="Avatar Avatar--mdLg">
                              <div class="Avatar__circle">
                                 <img src="{{URL::to('public/thumbtack_image')}}/{{ Auth::User()->image }}" class="Avatar__image">
                              </div>
                           </avatar>
                        </a>
                        <div class="box-text-content">
                           <h3 class="nameT2-S">{{ Auth::User()->first_name }}</h3>
                           <div>&nbsp;</div>
                           <a href="" class="rating">
                              <span star-rating="" star-rating-bind="" class="ng-isolate-scope">
                                 <svg viewBox="0 0 76 12" class="StarRating-stars" alt="NaN out of 5 stars">
                                    <switch>
                                       <g clip-path="url(#aura-stars-mask)">
                                          <rect class="StarRating-stars-empty" height="12" width="76"></rect>
                                          <rect class="StarRating-stars-fill" height="12" ng-attr-width="{[{ starRating.fillWidth }]}" width="NaN">
                                          </rect>
                                       </g>
                                       <foreignObject>
                                          <div class="StarRating-stars-fallback ng-binding">NaN out of 5 stars</div>
                                       </foreignObject>
                                    </switch>
                                 </svg>
                                 <!-- ngIf: starRating.options.numberOfReviews || starRating.options.forceCount -->
                              </span>
                              <span class="review-count">
                              (0
                              reviews)
                              </span>
                           </a>
                           <div>&nbsp;</div>
                           <a href="" class="Button theme-secondary theme-medium referral-button">
                              <svg-icon ng-src="present_16.svg" type="present" size="sm" class="ng-scope theme-small IconContainer" src="present_16.svg">
                                 <svg class="Icon" viewBox="0 0 16 16">
                                    <use xlink:href="#thumbprinticon-present_16"></use>
                                 </svg>
                              </svg-icon>
                              Get Free Credit
                           </a>
                        </div>
                     </div>
                     <div class="box-footer profile-box-nav"><a class="GlobalHeader-profileLink" href="{{URL::to('professional/profile')}}">
                        Profile
                        </a><a href="{{URL::to('professional/settings')}}">
                        Settings
                        </a><a href="{{URL::to('logout')}}">
                        Log Out
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endif

