@extends('layouts.proffetionalDash')
@section('css')
<link rel="stylesheet" type="text/css" href="{{URL::to('public/assets/pro-jobs-00b418b7.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::to('public/assets/pro-insights-c6b8074e.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::to('public/assets/quartile-comparison-c00a0976.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::to('public/assets/core-10a9b2eb.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::to('public/assets/get-hired-guide-bfa7a78e.css')}}">

@endsection
@section('content')


<div class="pro-insights">
   <div class="tp-wrap-snap tp-wrap--bleed-below-small tp-grid">
      <div class="tp-col tp-col--12 tp-wrap--bleed-below-small">
         <div class="pro-insights__page-header">
            <span class="pro-insights__page-name">Insights —</span>
            <span class="pro-insights__date-string">September 4 - Today</span>
         </div>
         <card class="pro-insights__card ng-isolate-scope">
            
            <div class="Card">
               <span class="TooltipIcon theme-gray Card-tooltip" ng-click="card.onTooltipClick()"></span>
               <div ng-transclude="">
                  <div class="pro-insights__activity ng-scope ng-isolate-scope" id="your-activity" waypoint-track="insights service activity">
                     <div class="pro-insights__card-title">
                        Your Activity
                     </div>
                     <div class="pro-insights__subtitle">
                        A snapshot of your activity across all types of jobs
                     </div>
                     <div class="pro-insights__activity__overview">
                        <div class="pro-insights__activity__stat">
                           <div class="pro-insights__activity__stat-title">
                              Quotes sent
                              <span class="TooltipIcon pro-insights__tooltip" id="quotes-sent" event-track="pro insights/click tooltip" event-track-on="click" event-track-once="" event-track-data="{
                                 tooltip: 'quotes-sent'
                                 }">
                              </span>
                           </div>
                           <div class="tp-heading-3 tp-color--brand">
                              0
                           </div>
                        </div>
                        <div class="pro-insights__activity__stat">
                           <div class="pro-insights__activity__stat-title">
                              New contacts
                              <span class="TooltipIcon pro-insights__tooltip" id="new-contacts" event-track="pro insights/click tooltip" event-track-on="click" event-track-once="" event-track-data="{
                                 tooltip: 'new-contacts'
                                 }">
                              </span>
                           </div>
                           <div class="tp-heading-3 tp-color--brand">
                              0
                           </div>
                        </div>
                        <div class="pro-insights__activity__stat">
                           <div class="pro-insights__activity__stat-title">
                              New reviews
                              <span class="TooltipIcon pro-insights__tooltip" id="reviews" event-track="pro insights/click tooltip" event-track-on="click" event-track-once="" event-track-data="{
                                 tooltip: 'reviews'
                                 }">
                              </span>
                           </div>
                           <div class="tp-heading-3 tp-color--brand">
                              0
                           </div>
                        </div>
                     </div>
                     <tooltip trigger="#quotes-sent" point-at-center="true" scroll-container="#your-activity" class="ng-isolate-scope">
                        <div class="Tooltip close-button-enabled" ng-class="{
                           'theme-small': themeSmall,
                           'is-visible': tooltip.isVisible,
                           'close-button-enabled': !tooltip.options.hideCloseButton,
                           'pointer-overlap': pointerOverlap,
                           'theme-transparent': themeTransparent,
                           'theme-unlimited-white': themeUnlimitedWhite,
                           }">
                           <div class="Tooltip-pointer"></div>
                           <!-- ngIf: !tooltip.options.hideCloseButton -->
                           <div class="Tooltip-closeWrapper ng-scope" ng-if="!tooltip.options.hideCloseButton">
                              <svg-icon class="Tooltip-close ng-scope theme-small IconContainer" type="close2" size="sm" ng-click="tooltip.onCloseButtonClick()">
                                 <svg class="Icon" viewBox="0 0 16 16">
                                    <use xlink:href="#thumbprinticon-close2_16"></use>
                                 </svg>
                              </svg-icon>
                           </div>
                           <!-- end ngIf: !tooltip.options.hideCloseButton -->
                           <div ng-transclude="" class="Tooltip-text B3-S theme-inverted"><span class="ng-scope">
                              The number of quotes sent to customers.
                              </span>
                           </div>
                        </div>
                     </tooltip>
                     <tooltip trigger="#new-contacts" point-at-center="true" scroll-container="#your-activity" class="ng-isolate-scope">
                        <div class="Tooltip close-button-enabled" ng-class="{
                           'theme-small': themeSmall,
                           'is-visible': tooltip.isVisible,
                           'close-button-enabled': !tooltip.options.hideCloseButton,
                           'pointer-overlap': pointerOverlap,
                           'theme-transparent': themeTransparent,
                           'theme-unlimited-white': themeUnlimitedWhite,
                           }">
                           <div class="Tooltip-pointer"></div>
                           <!-- ngIf: !tooltip.options.hideCloseButton -->
                           <div class="Tooltip-closeWrapper ng-scope" ng-if="!tooltip.options.hideCloseButton">
                              <svg-icon class="Tooltip-close ng-scope theme-small IconContainer" type="close2" size="sm" ng-click="tooltip.onCloseButtonClick()">
                                 <svg class="Icon" viewBox="0 0 16 16">
                                    <use xlink:href="#thumbprinticon-close2_16"></use>
                                 </svg>
                              </svg-icon>
                           </div>
                           <!-- end ngIf: !tooltip.options.hideCloseButton -->
                           <div ng-transclude="" class="Tooltip-text B3-S theme-inverted"><span class="ng-scope">
                              The number of customers who responded to your quotes.
                              </span>
                           </div>
                        </div>
                     </tooltip>
                     <tooltip trigger="#reviews" point-at-center="true" scroll-container="#your-activity" class="ng-isolate-scope">
                        <div class="Tooltip close-button-enabled" ng-class="{
                           'theme-small': themeSmall,
                           'is-visible': tooltip.isVisible,
                           'close-button-enabled': !tooltip.options.hideCloseButton,
                           'pointer-overlap': pointerOverlap,
                           'theme-transparent': themeTransparent,
                           'theme-unlimited-white': themeUnlimitedWhite,
                           }">
                           <div class="Tooltip-pointer"></div>
                           <!-- ngIf: !tooltip.options.hideCloseButton -->
                           <div class="Tooltip-closeWrapper ng-scope" ng-if="!tooltip.options.hideCloseButton">
                              <svg-icon class="Tooltip-close ng-scope theme-small IconContainer" type="close2" size="sm" ng-click="tooltip.onCloseButtonClick()">
                                 <svg class="Icon" viewBox="0 0 16 16">
                                    <use xlink:href="#thumbprinticon-close2_16"></use>
                                 </svg>
                              </svg-icon>
                           </div>
                           <!-- end ngIf: !tooltip.options.hideCloseButton -->
                           <div ng-transclude="" class="Tooltip-text B3-S theme-inverted"><span class="ng-scope">
                              The number of reviews you received from customers.
                              </span>
                           </div>
                        </div>
                     </tooltip>
                  </div>
               </div>
            </div>
         </card>
         @foreach($data as $dt)
         <card class="pro-insights__card ng-isolate-scope">
            <div class="Card">
               <span class="TooltipIcon theme-gray Card-tooltip" ng-click="card.onTooltipClick()"></span>
               <div ng-transclude="">
                  <div class="Card-section pro-category-insights__title-section ng-scope">
                     <div class="pro-category-insights__title">
                           <span class="pro-category-insights__title__text">
                              {{$dt[0]->serviceName}}
                           </span>
                           <div class="pro-category-insights__chart-icon"></div>
                     </div>
                  </div>

                  <div waypoint-track="insights competitive reports" class="pro-insights__report ng-scope ng-isolate-scope">
                     <a class="pro-insights__category" href="" event-track="pro insights/click view report" event-track-on="click" event-track-once="" event-track-data="{
                        category: 12
                        }">
                        <div class="pro-insights__job-type">
                           <div class="pro-insights__category-name">
                            <!-- {{$dt[0]->serviceName}} -->
                           </div>
                           <div>
                              <span class="pro-insights__category-stat">
                              {{$dt[0]->counts}}
                              </span>
                              <span class="pro-insights__subtitle">
                              quotes                                        sent,
                              </span>
                              <span class="pro-insights__category-stat">
                              0
                              </span>
                              <span class="pro-insights__subtitle">
                              new contacts
                              </span>
                           </div>
                        </div>
                        <div class="pro-insights__performance">
                           <div class="quartile-comparison">
                              <div style="margin-left:0%">
                                 <div class="quartile-comparison__box">
                                    YOU
                                 </div>
                                 <div class="quartile-comparison__arrow"></div>
                              </div>
                              <div class="quartile-comparison__graph">
                                 <div class="quartile-comparison__line first-quartile">
                                 </div>
                                 <div class="quartile-comparison__line second-quartile">
                                 </div>
                                 <div class="quartile-comparison__line third-quartile">
                                 </div>
                                 <div class="quartile-comparison__line fourth-quartile">
                                 </div>
                              </div>
                              <div class="quartile-comparison__labels">
                                 <div>Low</div>
                                 <div>High</div>
                              </div>
                           </div>
                        </div>
                        <button class="tp-button tp-button--primary tp-button
                           pro-insights__report-button">
                        View Report
                        </button>
                     </a>
                  </div>
               </div>
            </div>
         </card>
        @endforeach
      </div>
   </div>
   <div class="tp-wrap-snap tp-grid">
      <div class="tp-col tp-col--12">
         <div class="get-hired-guide">
            <div class="get-hired-guide__title ng-isolate-scope" waypoint-track="insights get hired more">
               Get Hired More
            </div>
            <div class="get-hired-guide__subtitle">
               Tips from successful pros
            </div>
            <div class="get-hired-guide__guide">
               <div class="get-hired-guide__get-help">
                  <img class="get-hired-guide__get-help__image" src="{{URL::to('public/assets/img/build-your-profile-e4fa5c8b.png')}}">
                  <div>
                     <div class="get-hired-guide__get-help__title">
                        Build your profile.
                     </div>
                     <div class="tp-color--muted">
                        Add lots of photos and examples.
                     </div>
                     <a href="" target="_blank">
                     Learn more
                     </a>
                  </div>
               </div>
               <div class="get-hired-guide__get-help">
                  <img class="get-hired-guide__get-help__image" src="{{URL::to('public/assets/img/get-reviews-0e011444.png')}}">
                  <div>
                     <div class="get-hired-guide__get-help__title">
                        Get more reviews.
                     </div>
                     <div class="tp-color--muted">
                        They don’t all have to be from Thumbtack customers.
                     </div>
                     <a href="https://www.thumbtack.com/blog/get-hired-guide/reviews/" target="_blank">
                     Learn more
                     </a>
                  </div>
               </div>
               <div class="get-hired-guide__get-help">
                  <img class="get-hired-guide__get-help__image" src="{{URL::to('public/assets/img/set-preferences-9676643c.png')}}">
                  <div>
                     <div class="get-hired-guide__get-help__title">
                        Set your preferences.
                     </div>
                     <div class="tp-color--muted">
                        Make sure we're sending you the right customers.
                     </div>
                     <a href="" target="_blank">
                     Learn more
                     </a>
                  </div>
               </div>
               <div class="get-hired-guide__get-help">
                  <img class="get-hired-guide__get-help__image" src="{{URL::to('public/assets/img/winning-quote-48b93704.png')}}">
                  <div>
                     <div class="get-hired-guide__get-help__title">
                        Send winning quotes.
                     </div>
                     <div class="tp-color--muted">
                        Customize your price and message.
                     </div>
                     <a href="https://www.thumbtack.com/blog/get-hired-guide/quotes/" target="_blank">
                     Learn more
                     </a>
                  </div>
               </div>
               <div class="get-hired-guide__get-help">
                  <img class="get-hired-guide__get-help__image" src="https://static.thumbtackstatic.com/_assets/images/release/modules/get-hired-guide/images/follow-up-93536e1b.png">
                  <div>
                     <div class="get-hired-guide__get-help__title">
                        Follow up.
                     </div>
                     <div class="tp-color--muted">
                        Start a conversation and seal the deal.
                     </div>
                     <a href="" target="_blank">
                     Learn more
                     </a>
                  </div>
               </div>
               <div class="get-hired-guide__get-help">
                  <img class="get-hired-guide__get-help__hired-image" src="{{URL::to('public/assets/img/hired-5670cda6.png')}}">
                  <div>
                     <div class="get-hired-guide__get-help__title">
                        You’re  hired.
                     </div>
                     <div class="tp-color--muted">
                        Here's how to keep up your momentum.
                     </div>
                     <a href="https://www.thumbtack.com/blog/get-hired-guide/hired/" target="_blank">
                     Learn more
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>


@endsection