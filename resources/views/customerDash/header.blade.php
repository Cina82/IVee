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
            <img class="GlobalHeader" src="{{URL::to('public/assets/img/Logo/LogoOrange.png')}}" alt="Ivee" width="178" height="">
            </a>
         </div>
         <div class="HeaderSearch" style="padding-left: 185px !important;max-width: 900px !important;" dir="rtl">
            <div class="HeaderSearch-form">
               <div class="SearchForm theme-tight-header-bar">
                  <form search-form="" open-request-form-modal="" from-homepage="" hide-intro-screen="" ng-submit="submitSearch($event)" class="SearchForm-form ng-scope ng-pristine ng-valid" action="#" hercule-root-url="https://hercule.thumbtack.com" hercule-version="0" include-test="" page-type="10" search-origin="searchform-navbar" event-name="searchform-navbar" homepage-redirect-feature-flag="" popular-category="true">
                     <div class="SearchForm-form-inputGroup 1">
                        <span class="SearchForm-form-query B2-S" ng-class="{'dropdownOpen': suggestionsOpen}">
                           <input class="query is-empty-state" ng-class="{'is-empty-state': isEmptyState}" required="" autocomplete="off" placeholder="?What service do you need" event-track="home page/start service query" event-track-on="keypress" event-track-data="{
                              pageType: '10',
                              searchOrigin: 'searchform-navbar',
                              }" event-track-once="" type="search">
                           <div class="SearchForm-form-query-clearQuery">
                              <label ng-class="{'is-empty-state': isEmptyState}" class="SearchForm-form-query-clearQuery-wrapper is-empty-state" for="clear-input-field" ng-click="clearSearchField()">
                                 <svg-icon type="declined" size="sm" class="SearchForm-form-query-clearQuery-wrapper-icon ng-scope theme-small IconContainer">
                                    <svg class="Icon" viewBox="0 0 16 16">
                                       <use xlink:href="#thumbprinticon-declined_16"></use>
                                    </svg>
                                 </svg-icon>
                              </label>
                           </div>
                        </span>
                        <label for="search-submit" class="SearchForm-form-smallSubmit-wrapper is-visible search-hero__label" dir="rtl">
                           <svg-icon type="search" size="md" class="HeaderSearch-form-smallSubmit-wrapper-icon ng-scope theme-medium IconContainer">
                              <svg class="Icon" viewBox="0 0 24 24">
                                 <use xlink:href="#thumbprinticon-search_24"></use>
                              </svg>
                           </svg-icon>
                        </label>
                        <button class="
                           SearchForm-form-submitBtn
                           Button
                           theme-large
                           is-hidden
                           is-hidden-at-sm
                           " type="submit" formnovalidate="" event-track="hercule/click get started" event-track-on="click" event-track-data="{
                           pageType: '10',
                           searchOrigin: 'searchform-navbar',
                           }">
                        Start
                        </button>
                     </div>
                  </form>
               </div>
            </div>
            <div class="HeaderSearch-button">
               <label for="search-form-toggle" class="HeaderSearch-button-action">
                  <svg-icon type="search" size="md" class="HeaderSearch-button-action-icon HeaderSearch-button-action-search is-visible ng-scope theme-medium IconContainer">
                     <svg class="Icon" viewBox="0 0 24 24">
                        <use xlink:href="#thumbprinticon-search_24"></use>
                     </svg>
                  </svg-icon>
                  <svg-icon type="close" size="sm" class="HeaderSearch-button-action-icon HeaderSearch-button-action-close ng-scope theme-small IconContainer">
                     <svg class="Icon" viewBox="0 0 16 16">
                        <use xlink:href="#thumbprinticon-close_16"></use>
                     </svg>
                  </svg-icon>
               </label>
            </div>
         </div>
         <!--  <div class="header-right-container">
            <div class="header-navigation ">
               <a href="{{URL::to('pro')}}" rel="nofollow" event-track="home page/clicked join as a pro" event-track-on="click class="gray-link">
               Join as a Pro
               </a>
               <a href="{{URL::to('choose-account')}}" rel="nofollow" event-track="home page/clicked sign up" event-track-on="click" class="gray-link">
               Sign Up
               </a>
               <a href="{{URL::to('login') }}" rel="nofollow" event-track="home page/clicked log in" event-track-on="click" class="gray-link log-in-link">
               Log In
               </a>
            </div> -->
         <div class="header-right-container">
            <div class="header-navigation">
               <div class="universal-profile-container">
                  <div class="universal-picture" data-section="universal-picture">
                     <avatar class="Avatar Avatar--sm">
                        <div class="Avatar__circle">
                           <div class="Avatar__initials">{{ $first }}{{ $second }}</div>
                        </div>
                     </avatar>
                     <div class="arrow-tip" data-section="arrow-tip" style="display: none;">
                     </div>
                  </div>
                  <p class="universal-name" data-section="universal-name">
                     <span class="name">{{ Auth::User()->first_name }}</span>
                     <svg-icon type="down-caret" size="sm" class="ng-scope theme-small IconContainer">
                        <svg class="Icon" viewBox="0 0 16 16">
                           <use xlink:href="#thumbprinticon-down-caret_16"></use>
                        </svg>
                     </svg-icon>
                  </p>
                  <div class="profile-box-caret" data-section="arrow-tip" style="display: none;">
                  </div>
                  <div class="box profile-box" data-section="profile-box" style="display: none;">
                     <div class="box-content">
                        <a href="/profile/information" class="picture-big-link">
                           <avatar class="Avatar Avatar--mdLg">
                              <div class="Avatar__circle">
                                 <div class="Avatar__initials">{{ $first }}{{ $second }}</div>
                              </div>
                           </avatar>
                        </a>
                        <div class="box-text-content">
                           <h3 class="name T2-S ">
                              {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                           </h3>
                           <span class="email  T2-S theme-secondary ">
                           {{ Auth::user()->email }}
                           </span><span class="project-count
                              B2-S theme-secondary
                              ">
                            {{ Session::get('serviceCount') }} projects
                           </span>
                        </div>
                     </div>
                    <div class="box-footer profile-box-nav"><a class="GlobalHeader-profileLink" href="{{URL::to('customer/profile')}}">
                       Profile
                       </a><a href="{{URL::to('customer/settings')}}">
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
</div>
@endif

