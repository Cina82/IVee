@extends('layouts.customerDash')

@section('css')
<link rel="stylesheet" type="text/css" href="{{URL::to('public/assets/core-7cb7c92c.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::to('public/assets/consumer-messenger-bundle-1da62d34.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::to('public/assets/blueimp-gallery.min.css')}}">
@endsection

@section('content')

<consumer-messenger class="Flex Flex-fill ng-scope">
   <div class="ConsumerMessenger Flex Flex-fill only-left" ng-class="{
      'only-left': !cm.currentNavState || cm.currentNavState.tabType === 'quotes-list'
      }">
      <three-pane class="Flex Flex-fill ng-scope">
         <div class="ThreePane variant" ng-transclude="">
            <div class="Flex Flex-column left-pane ng-scope">
               <div class="ThreePane-pane theme-left Flex-grow">
                  <quotes-list class="ConsumerMessenger-quotesList ng-scope" request-bind="cm.request" user-bind="cm.user" quotes-view-bind="cm" enable-quotes-list-polling="" quote-tab-type="message-stream" tracking-prefix="consumer messenger" event-track="consumer messenger/init summary view" event-track-on-init="" event-track-data="{&quot;encoded_user_id&quot;:&quot;ce6dgf34&quot;,&quot;encoded_request_id&quot;:&quot;lbc31qkk&quot;}">
                     <div class="QuotesList quotes-list-variant-2" ng-class="quotesList.quotesListVariant">
                        <!-- ngIf: quotesList.quotesListVariant -->
                        <div ng-if="quotesList.quotesListVariant" class="QuotesList-filler ng-scope"></div>
                        <!-- end ngIf: quotesList.quotesListVariant -->
                        <small-project-header request-bind="request" class="ng-scope">
                           <div class="SmallProjectHeader theme-variant-2">
                              <a class="SmallProjectHeader-back" href="/profile/requests">
                                 <svg-icon type="left-caret_11x18" class="ng-scope IconContainer" style="width: 11px; height: 18px;">
                                    <svg class="Icon" viewBox="0 0 11 18">
                                       <use xlink:href="#thumbprinticon-left-caret_11x18"></use>
                                    </svg>
                                 </svg-icon>
                                 <span>Projects</span>
                              </a>
                              <div class="T3-S SmallProjectHeader-title ng-binding" ng-bind="request.model.request_category.taxonym">Presentation Designer</div>
                              <a class="T4-S SmallProjectHeader-unreadCount" ng-click="showRequestDetailsModal()">
                              Your request
                              </a>
                           </div>
                        </small-project-header>
                        <!-- ngIf: !quotesList.quotesListVariant -->
                        <ul class="QuotesList-wrapper">
                           <!-- ngRepeat: quote in quotesList.request.quotes|filter:{hidden: '!true'} -->
                           <li ng-repeat="quote in quotesList.request.quotes|filter:{hidden: '!true'}" ng-class="{
                              'is-selected': quote.model.id === quotesList.currentNavState.tabId,
                              'next-is-selected': quotesList.request.quotes[$index + 1].model.id ===
                              quotesList.currentNavState.tabId
                              }" class="QuotesList-container QuotesList-container--clickable ng-scope">
                              <div class="QuotesList-quoteTab ng-isolate-scope theme-unread" ng-class="{
                                 'was-declined':
                                 (quote.model.status === QuotesViewConstants.BID_STATUS.CANCELLED)
                                 &amp;&amp; !quotesList.quotesListVariant,
                                 'theme-unread': quote.hasUnreadMessages(),
                                 }" show-content-pane-onclick="" tab-id="58ubnana" tab-type="message-stream" ng-click="quotesList.selectQuote(quote, $index)" waypoint-track="quote tab refund view" waypoint-endpoint="/bid/58ubnana/refund-view" waypoint-track-data="{
                                 encoded_bid_id: '58ubnana',
                                 }" waypoint-fully-visible="">
                                 <quote-summary quote-bind="quote" class="ng-scope">
                                    <div class="QuoteSummary quotes-list-variant-2">
                                       <!-- ngIf: quote.hasUnreadMessages(false) -->
                                       <div class="QuoteSummary-content" ng-class="{ 'theme-unread': quote.hasUnreadMessages(false) }">
                                          <div class="QuoteSummary-title">
                                             <div class="QuoteSummary-proAvatar">
                                                <!-- ngIf: !quoteSummary.shouldUseReact -->
                                                <avatar-ng ng-if="!quoteSummary.shouldUseReact" size="md" img-src="quote.model.service.user.picture.sizes.100.url" checked="quote.isPicked()" class="ng-scope ng-isolate-scope">
                                                   <div class="Avatar Avatar--md">
                                                      <div class="Avatar__circle">
                                                         <!-- ngIf: showInitials -->
                                                         <!-- ngIf: imgSrc --><img ng-if="imgSrc" ng-src="https://static.thumbtackstatic.com/pictures/22759/5nvge605k5usm75c57ct99li3c_100.jpg" class="Avatar__image ng-scope" src="https://static.thumbtackstatic.com/pictures/22759/5nvge605k5usm75c57ct99li3c_100.jpg"><!-- end ngIf: imgSrc -->
                                                      </div>
                                                      <span class="Avatar__badge Avatar__badge--micro ng-hide" ng-show="isMicro &amp;&amp; !badgeCount &amp;&amp; !checked">
                                                      </span>
                                                      <span class="Avatar__badge Avatar__badge--count ng-binding ng-hide" ng-show="badgeCount > 0 &amp;&amp; !checked" ng-bind="badgeCount"></span>
                                                      <span class="Avatar__badge Avatar__badge--check ng-hide" ng-show="checked">
                                                         <!-- ngIf: size === 'xl' -->
                                                         <!-- ngIf: size !== 'xl' -->
                                                         <svg-icon ng-if="size !== 'xl'" type="check_9x7" class="ng-scope IconContainer" style="width: 9px; height: 7px;">
                                                            <svg class="Icon" viewBox="0 0 9 7">
                                                               <use xlink:href="#thumbprinticon-check_9x7"></use>
                                                            </svg>
                                                         </svg-icon>
                                                         <!-- end ngIf: size !== 'xl' -->
                                                      </span>
                                                   </div>
                                                </avatar-ng>
                                                <!-- end ngIf: !quoteSummary.shouldUseReact -->
                                                <!-- ngIf: quoteSummary.shouldUseReact -->
                                                <!-- ngIf: quote.model.service.is_top_pro -->
                                                <!-- ngIf: !quote.model.service.is_top_pro && quote.isFromNewPro() -->
                                                <svg-icon class="QuoteSummary-avatarBadge ng-scope IconContainer" ng-if="!quote.model.service.is_top_pro &amp;&amp; quote.isFromNewPro()" type="new-pro-badge_60x16" style="width: 60px; height: 16px;">
                                                   <svg class="Icon" viewBox="0 0 60 16">
                                                      <use xlink:href="#thumbprinticon-new-pro-badge_60x16"></use>
                                                   </svg>
                                                </svg-icon>
                                                <!-- end ngIf: !quote.model.service.is_top_pro && quote.isFromNewPro() -->
                                             </div>
                                             <div class="QuoteSummary-business">
                                                <div class="QuoteSummary-businessName ng-binding" ng-bind="quote.getServiceName()">john terran</div>
                                                <online-status quote-bind="quote" show-timestamp="" class="ng-scope">
                                                   <!-- ngIf: onlineStatus.quote.hasProBeenOnlineRecently() -->
                                                   <div class="online-status ng-scope" ng-if="onlineStatus.quote.hasProBeenOnlineRecently()">
                                                      <div class="online-status__indicator" ng-class="{ 'online-status__indicator--online': onlineStatus.quote.isProOnline() }"></div>
                                                      <!-- ngIf: onlineStatus.showTimestamp -->
                                                      <div class="tp-text-4--static online-status__timestamp ng-binding ng-scope" ng-bind="onlineStatus.getLastOnlineString()" ng-if="onlineStatus.showTimestamp">Online 48m ago</div>
                                                      <!-- end ngIf: onlineStatus.showTimestamp -->
                                                   </div>
                                                   <!-- end ngIf: onlineStatus.quote.hasProBeenOnlineRecently() -->
                                                </online-status>
                                             </div>
                                             <!-- ngIf: !quote.model.estimate.more_info_needed
                                                && quote.model.estimate.total !== 0 -->
                                             <div class="QuoteSummary-price ng-scope" ng-if="!quote.model.estimate.more_info_needed
                                                &amp;&amp; quote.model.estimate.total !== 0">
                                                <price price-model="quote.model.estimate" lightweight="" inherit-style="" class="ng-scope">
                                                   <span class="Price theme-lightweight" ng-class="{
                                                      'theme-lightweight': price.isLightweight,
                                                      'is-centered': price.isProMessenger
                                                      }">
                                                      <!-- ngIf: priceData.price && price.isProMessenger -->
                                                      <!-- ngIf: priceData.details.totalHourlyRate && !price.isLightweight -->
                                                      <!-- ngIf: priceData.details.description && !price.isLightweight -->
                                                      <!-- ngIf: priceData.details.totalPrice && price.showTotalAndPerHourText -->
                                                      <!-- ngIf: priceData.details.longUnit && price.showTotalAndPerHourText -->
                                                      <!-- ngIf: priceData.details.message -->
                                                      <!-- ngIf: priceData.price && price.isLightweight && !price.isProMessenger --><span class="Price-amount ng-binding ng-scope" ng-class="{
                                                         'H4-R': !price.inheritStyle
                                                         }" ng-if="priceData.price &amp;&amp; price.isLightweight &amp;&amp; !price.isProMessenger">
                                                      $10/h
                                                      </span><!-- end ngIf: priceData.price && price.isLightweight && !price.isProMessenger -->
                                                      <!-- ngIf: priceData.price && !price.isLightweight && !price.isProMessenger -->
                                                   </span>
                                                </price>
                                             </div>
                                             <!-- end ngIf: !quote.model.estimate.more_info_needed
                                                && quote.model.estimate.total !== 0 -->
                                          </div>
                                          <div class="QuoteSummary-stats">
                                             <!-- ngIf: quoteSummary.statistics[1] -->
                                             <div class="QuoteSummary-stat ng-scope" ng-if="quoteSummary.statistics[1]">
                                                <div class="QuoteSummary-statText B3-S ng-binding" ng-bind="quoteSummary.statistics[1].text">2</div>
                                                <div class="B4-S theme-secondary ng-binding" ng-bind="quoteSummary.statistics[1].description">Employees</div>
                                             </div>
                                             <!-- end ngIf: quoteSummary.statistics[1] -->
                                             <div class="QuoteSummary-stat">
                                                <div star-rating="" star-rating-bind="quote.model.service.rating" number-of-reviews-bind="quote.model.service.review_count" show-count="" force-count="" class="B4-S ng-isolate-scope">
                                                   <!-- ngIf: starRating.options.showNumericRating -->
                                                   <svg viewBox="0 0 76 12" class="StarRating-stars" alt="0 out of 5 stars">
                                                      <switch>
                                                         <g clip-path="url(#aura-stars-mask)">
                                                            <rect class="StarRating-stars-empty" height="12" width="76"></rect>
                                                            <rect class="StarRating-stars-fill" height="12" ng-attr-width="{[{ starRating.fillWidth }]}" width="0">
                                                            </rect>
                                                         </g>
                                                         <foreignObject>
                                                            <div class="StarRating-stars-fallback ng-binding">0 out of 5 stars</div>
                                                         </foreignObject>
                                                      </switch>
                                                   </svg>
                                                   <!-- ngIf: starRating.options.numberOfReviews || starRating.options.forceCount -->
                                                   <span ng-if="starRating.options.numberOfReviews || starRating.options.forceCount" class="StarRating-numberOfReviews">
                                                      <!-- ngIf: starRating.options.showAbbreviatedCount -->
                                                      <!-- ngIf: !starRating.options.showAbbreviatedCount --><span ng-if="!starRating.options.showAbbreviatedCount" class="ng-scope">
                                                      <span class="u-visuallyHidden">from</span>
                                                      <span ng-bind="starRating.options.numberOfReviews" class="ng-binding">0</span>
                                                      <span ng-class="{'u-visuallyHidden': !starRating.options.showCount }" ng-bind="starRating.getReviewsLabel()" class="ng-binding">reviews</span>
                                                      </span><!-- end ngIf: !starRating.options.showAbbreviatedCount -->
                                                   </span>
                                                   <!-- end ngIf: starRating.options.numberOfReviews || starRating.options.forceCount -->
                                                </div>
                                             </div>
                                             <!-- ngIf: quoteSummary.statistics[0] -->
                                             <div class="QuoteSummary-stat ng-scope" ng-if="quoteSummary.statistics[0]">
                                                <div class="QuoteSummary-statText B3-S ng-binding" ng-bind="quoteSummary.statistics[0].text">15 min</div>
                                                <div class="B4-S theme-secondary ng-binding" ng-bind="quoteSummary.statistics[0].description">Response time</div>
                                             </div>
                                             <!-- end ngIf: quoteSummary.statistics[0] -->
                                          </div>
                                          <div class="QuoteSummary-snippet B3-S">
                                             <span class="QuoteSummary-snippetPrefix ng-binding" ng-bind="quoteSummary.getSnippetPrefix()">5:26 AM</span>
                                             <span class="separator">•</span>
                                             <span ng-bind="quoteSummary.getSnippet()" class="ng-binding">i will give fully customer setif.
                                             </span>
                                          </div>
                                       </div>
                                       <div class="QuoteSummary-cta ng-binding" ng-bind="quoteSummary.getCtaText()">Review estimate and reply</div>
                                    </div>
                                 </quote-summary>
                              </div>
                           </li>
                           
                        </ul>
                        <!-- ngIf: quotesList.initializationText -->
                        <!-- ngIf: quotesList.shouldShowEmptyState() && quotesList.getEmptyStateText() -->
                        <div class="QuotesList-footerSeparator"></div>
                        <!-- ngIf: !quotesList.hideTransclusion && !quotesList.shouldShowEmptyState() -->
                        <div ng-transclude="" ng-if="!quotesList.hideTransclusion &amp;&amp; !quotesList.shouldShowEmptyState()" class="QuotesList-transclusion ng-scope">
                           <guarantee show-hire-prompt="" class="ng-scope">
                              <div class="Guarantee-guaranteeContainer">
                                 <a href="/guarantee" target="_blank">
                                    <div class="Guarantee-guaranteeIconContainer">
                                       <svg-icon type="tt-guarantee-emblem_32x32" class="ng-scope IconContainer" style="width: 32px; height: 32px;">
                                          <svg class="Icon" viewBox="0 0 32 32">
                                             <use xlink:href="#thumbprinticon-tt-guarantee-emblem_32x32"></use>
                                          </svg>
                                       </svg-icon>
                                       <div>
                                          <div class="Guarantee-guaranteeTextContainer">
                                             <span class="B3-S theme-secondary">Thumbtack Guarantee</span>
                                          </div>
                                          <div class="Guarantee-guaranteeTextContainer T3-S theme-secondary ng-binding">
                                             $1M Property Protection
                                          </div>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="Guarantee-guaranteeTextContainerSecondary B3-S" ng-show="showHirePrompt">
                                    <p class="Guarantee-guaranteeText">
                                       You must select "Hire" to be eligible.
                                       <a href="/guarantee" target="_blank">Terms apply</a>
                                    </p>
                                 </div>
                              </div>
                           </guarantee>
                        </div>
                        <!-- end ngIf: !quotesList.hideTransclusion && !quotesList.shouldShowEmptyState() -->
                     </div>
                  </quotes-list>
               </div>
            </div>
            <div class="ConsumerMessenger-paneSpill ng-scope">
               <div class="ConsumerMessenger-postRequestContainer ng-hide" ng-show="cm.isPostRequestVisible()">
                  <post-request show-back="cm.showPostRequestBack()" tracking-prefix="consumer messenger" request-bind="request" quotes-view-bind="cm" class="ng-isolate-scope">
                     <div class="PostRequest-updateStatusBar">
                        <!-- ngIf: !request.hasQuotes() && !request.isExpired() && !request.isCancelled() -->
                        <!-- ngIf: request.hasQuotes() --><span class="PostRequest-updateStatus-updateLink T3-S ng-scope" ng-click="request.goToUpdateStatus(postRequest.trackingPrefix)" ng-if="request.hasQuotes()">
                        <a>Update status</a>
                        </span><!-- end ngIf: request.hasQuotes() -->
                        <!-- ngIf: quotesView -->
                        <div class="PostRequest-updateStatusBar-quotesLink SplitView-mobileOnly T3-S ng-scope" ng-show="showBack()" ng-if="quotesView" ng-click="postRequest.goBack()" show-side-pane-onclick="" event-track="consumer messenger/click view all quotes" event-track-on="click" event-track-data="{&quot;encoded_request_id&quot;:&quot;lbc31qkk&quot;,&quot;is_zero_quotes&quot;:false}">
                           <svg-icon type="left-caret" size="sm" class="ng-scope theme-small IconContainer">
                              <svg class="Icon" viewBox="0 0 16 16">
                                 <use xlink:href="#thumbprinticon-left-caret_16"></use>
                              </svg>
                           </svg-icon>
                           <a ng-bind="request.getUnreadCountString()" class="ng-binding">Quotes (3)</a>
                        </div>
                        <!-- end ngIf: quotesView -->
                     </div>
                     <div class="splitViewContent-grid theme-full-bleed-at-sm">
                        <div class="PostRequest-container column-lg-4 column-lg-offset-1
                           column-md-6 column-md-offset-0">
                           <div class="PostRequest-header">
                              <div class="Spacer-4"></div>
                              <p class="H3-R ng-scope" responsive-if="above-sm" responsive-grid="splitView">
                                 <!-- ngIf: responsiveIfVisible -->
                              <div ng-if="responsiveIfVisible" class="ng-scope">
                                 <div ng-transclude=""><span class="ng-scope">
                                    Project Overview
                                    </span>
                                 </div>
                              </div>
                              <!-- end ngIf: responsiveIfVisible -->
                              </p>
                              <div responsive-if="below-sm" responsive-grid="splitView" class="ng-scope">
                                 <!-- ngIf: responsiveIfVisible -->
                              </div>
                              <div class="Spacer-2"></div>
                              <span class="T3-S" ng-click="postRequest.showRequestDetailsModal()">
                              <a>See request</a>
                              </span>
                           </div>
                           <!-- ngIf: !request.isCancelledByBuyer() && isRequestExpiredWithNoQuotes -->
                           <!-- ngIf: request.isCancelledByBuyer() -->
                        </div>
                     </div>
                     <div class="splitViewContent-grid">
                        <div class="PostRequest-container column-lg-4 column-lg-offset-1
                           column-md-6 column-md-offset-0" ng-class="{'is-newRequest': request.isJustCreated()}">
                           <!-- ngIf: !request.isCancelledByBuyer() && !isRequestExpiredWithNoQuotes -->
                           <div class="PostRequest ng-scope" ng-if="!request.isCancelledByBuyer() &amp;&amp; !isRequestExpiredWithNoQuotes">
                              <div class="PostRequest-section">
                                 <div class="PostRequest-progress">
                                    <div class="is-done PostRequest-fadeIn-stepOne PostRequest-progress-step">
                                       <div class="PostRequest-section-connector-spacer"></div>
                                       <div class="PostRequest-section-indicator">
                                          <svg-icon class="PostRequest-section-doneOnly ng-scope IconContainer" type="check_12x8" style="width: 12px; height: 8px;">
                                             <svg class="Icon" viewBox="0 0 12 8">
                                                <use xlink:href="#thumbprinticon-check_12x8"></use>
                                             </svg>
                                          </svg-icon>
                                       </div>
                                       <div class="B2-R PostRequest-section-title ng-scope" responsive-if="below-sm" responsive-grid="splitView">
                                          <!-- ngIf: responsiveIfVisible -->
                                       </div>
                                       <div class="B2-R PostRequest-section-title ng-scope" responsive-if="above-sm" responsive-grid="splitView">
                                          <!-- ngIf: responsiveIfVisible -->
                                          <div ng-if="responsiveIfVisible" class="ng-scope">
                                             <div ng-transclude=""><span class="ng-scope">
                                                Submit request
                                                </span>
                                             </div>
                                          </div>
                                          <!-- end ngIf: responsiveIfVisible -->
                                       </div>
                                    </div>
                                    <div class="PostRequest-fadeIn-stepTwo PostRequest-progress-step is-done" ng-class="postRequest.getClassesForSection(
                                       postRequest.PRE_QUOTES_SECTION
                                       )">
                                       <div class="PostRequest-section-connector"></div>
                                       <div class="PostRequest-section-indicator">
                                          <svg-icon class="PostRequest-section-doneOnly ng-scope IconContainer" type="check_12x8" style="width: 12px; height: 8px;">
                                             <svg class="Icon" viewBox="0 0 12 8">
                                                <use xlink:href="#thumbprinticon-check_12x8"></use>
                                             </svg>
                                          </svg-icon>
                                          <span class="PostRequest-section-notDoneOnly T3-R theme-inverted">
                                          2
                                          </span>
                                       </div>
                                       <div class="B2-R PostRequest-section-title ng-scope" responsive-if="below-sm" responsive-grid="splitView">
                                          <!-- ngIf: responsiveIfVisible -->
                                       </div>
                                       <div class="B2-R PostRequest-section-title ng-scope" responsive-if="above-sm" responsive-grid="splitView">
                                          <!-- ngIf: responsiveIfVisible -->
                                          <div ng-if="responsiveIfVisible" class="ng-scope">
                                             <div ng-transclude=""><span class="ng-scope">
                                                Get quotes
                                                </span>
                                             </div>
                                          </div>
                                          <!-- end ngIf: responsiveIfVisible -->
                                       </div>
                                    </div>
                                    <div class="PostRequest-fadeIn-stepThree PostRequest-progress-step is-active" ng-class="postRequest.getClassesForSection(
                                       postRequest.POST_QUOTES_SECTION
                                       )">
                                       <div class="PostRequest-section-connector"></div>
                                       <div class="PostRequest-section-indicator">
                                          <svg-icon class="PostRequest-section-doneOnly ng-scope IconContainer" type="check_12x8" style="width: 12px; height: 8px;">
                                             <svg class="Icon" viewBox="0 0 12 8">
                                                <use xlink:href="#thumbprinticon-check_12x8"></use>
                                             </svg>
                                          </svg-icon>
                                          <span class="PostRequest-section-notDoneOnly T3-R theme-inverted">
                                          3
                                          </span>
                                       </div>
                                       <div class="B2-R PostRequest-section-title ng-scope" responsive-if="below-sm" responsive-grid="splitView">
                                          <!-- ngIf: responsiveIfVisible -->
                                       </div>
                                       <div class="B2-R PostRequest-section-title ng-scope" responsive-if="above-sm" responsive-grid="splitView">
                                          <!-- ngIf: responsiveIfVisible -->
                                          <div ng-if="responsiveIfVisible" class="ng-scope">
                                             <div ng-transclude=""><span class="ng-scope">
                                                Contact pros
                                                </span>
                                             </div>
                                          </div>
                                          <!-- end ngIf: responsiveIfVisible -->
                                       </div>
                                    </div>
                                    <div class="PostRequest-fadeIn-stepFour PostRequest-progress-step" ng-class="postRequest.getClassesForSection(
                                       postRequest.POST_HIRE_SECTION
                                       )">
                                       <div class="PostRequest-section-connector"></div>
                                       <div class="PostRequest-section-indicator">
                                          <svg-icon class="PostRequest-section-doneOnly ng-scope IconContainer" type="check_12x8" style="width: 12px; height: 8px;">
                                             <svg class="Icon" viewBox="0 0 12 8">
                                                <use xlink:href="#thumbprinticon-check_12x8"></use>
                                             </svg>
                                          </svg-icon>
                                          <span class="PostRequest-section-notDoneOnly T3-R theme-inverted">
                                          4
                                          </span>
                                       </div>
                                       <div class="B2-R PostRequest-section-title ng-scope" responsive-if="below-sm" responsive-grid="splitView">
                                          <!-- ngIf: responsiveIfVisible -->
                                       </div>
                                       <div class="B2-R PostRequest-section-title ng-scope" responsive-if="above-sm" responsive-grid="splitView">
                                          <!-- ngIf: responsiveIfVisible -->
                                          <div ng-if="responsiveIfVisible" class="ng-scope">
                                             <div ng-transclude=""><span class="ng-scope">
                                                Hire a pro
                                                </span>
                                             </div>
                                          </div>
                                          <!-- end ngIf: responsiveIfVisible -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="PostRequest-fadeIn-stepTwo PostRequest-section PostRequest-section-step is-done" ng-class="postRequest.getClassesForSection(postRequest.PRE_QUOTES_SECTION)">
                                 <!-- ngIf: !postRequest.predictedOnePlusQuotes -->
                                 <div ng-if="!postRequest.predictedOnePlusQuotes" class="ng-scope">
                                    <p class="B2-S PostRequest-section-padded">
                                       You can expect to receive up to five quotes within 24 hours.
                                    </p>
                                 </div>
                                 <!-- end ngIf: !postRequest.predictedOnePlusQuotes -->
                                 <!-- ngIf: postRequest.predictedOnePlusQuotes -->
                                 <div class="PostRequest-separator"></div>
                                 <div class="PostRequest-section-padded">
                                    <p class="B2-S theme-secondary">Quotes include</p>
                                    <div class="PostRequest-quotesInclude B2-S">
                                       <div class="PostRequest-quotesInclude-block">
                                          <div class="PostRequest-quotesInclude-element PostRequest-textWithIcon">
                                             <div responsive-if="below-sm" responsive-grid="splitView" class="ng-scope">
                                                <!-- ngIf: responsiveIfVisible -->
                                             </div>
                                             <div responsive-if="above-sm" responsive-grid="splitView" class="ng-scope">
                                                <!-- ngIf: responsiveIfVisible -->
                                                <div ng-if="responsiveIfVisible" class="ng-scope">
                                                   <div ng-transclude="">
                                                      <svg-icon type="estimate_20x20" class="ng-scope IconContainer" style="width: 20px; height: 20px;">
                                                         <svg class="Icon" viewBox="0 0 20 20">
                                                            <use xlink:href="#thumbprinticon-estimate_20x20"></use>
                                                         </svg>
                                                      </svg-icon>
                                                   </div>
                                                </div>
                                                <!-- end ngIf: responsiveIfVisible -->
                                             </div>
                                             Estimate
                                          </div>
                                          <div class="PostRequest-quotesInclude-element PostRequest-textWithIcon">
                                             <div responsive-if="below-sm" responsive-grid="splitView" class="ng-scope">
                                                <!-- ngIf: responsiveIfVisible -->
                                             </div>
                                             <div responsive-if="above-sm" responsive-grid="splitView" class="ng-scope">
                                                <!-- ngIf: responsiveIfVisible -->
                                                <div ng-if="responsiveIfVisible" class="ng-scope">
                                                   <div ng-transclude="">
                                                      <svg-icon type="profile-single_20x20" class="ng-scope IconContainer" style="width: 20px; height: 20px;">
                                                         <svg class="Icon" viewBox="0 0 20 20">
                                                            <use xlink:href="#thumbprinticon-profile-single_20x20"></use>
                                                         </svg>
                                                      </svg-icon>
                                                   </div>
                                                </div>
                                                <!-- end ngIf: responsiveIfVisible -->
                                             </div>
                                             Profile
                                          </div>
                                       </div>
                                       <div class="PostRequest-quotesInclude-block">
                                          <div class="PostRequest-quotesInclude-element PostRequest-textWithIcon">
                                             <div responsive-if="below-sm" responsive-grid="splitView" class="ng-scope">
                                                <!-- ngIf: responsiveIfVisible -->
                                             </div>
                                             <div responsive-if="above-sm" responsive-grid="splitView" class="ng-scope">
                                                <!-- ngIf: responsiveIfVisible -->
                                                <div ng-if="responsiveIfVisible" class="ng-scope">
                                                   <div ng-transclude="">
                                                      <svg-icon type="star_20x20" class="ng-scope IconContainer" style="width: 20px; height: 20px;">
                                                         <svg class="Icon" viewBox="0 0 20 20">
                                                            <use xlink:href="#thumbprinticon-star_20x20"></use>
                                                         </svg>
                                                      </svg-icon>
                                                   </div>
                                                </div>
                                                <!-- end ngIf: responsiveIfVisible -->
                                             </div>
                                             Reviews
                                          </div>
                                          <div class="PostRequest-quotesInclude-element PostRequest-textWithIcon">
                                             <div responsive-if="below-sm" responsive-grid="splitView" class="ng-scope">
                                                <!-- ngIf: responsiveIfVisible -->
                                             </div>
                                             <div responsive-if="above-sm" responsive-grid="splitView" class="ng-scope">
                                                <!-- ngIf: responsiveIfVisible -->
                                                <div ng-if="responsiveIfVisible" class="ng-scope">
                                                   <div ng-transclude="">
                                                      <svg-icon type="pencil-sheet_20x20" class="ng-scope IconContainer" style="width: 20px; height: 20px;">
                                                         <svg class="Icon" viewBox="0 0 20 20">
                                                            <use xlink:href="#thumbprinticon-pencil-sheet_20x20"></use>
                                                         </svg>
                                                      </svg-icon>
                                                   </div>
                                                </div>
                                                <!-- end ngIf: responsiveIfVisible -->
                                             </div>
                                             Message
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="PostRequest-section-step PostRequest-section PostRequest-fadeIn-stepThree is-active" ng-class="postRequest.getClassesForSection(postRequest.POST_QUOTES_SECTION)">
                                 <div class="PostRequest-section-padded">
                                    <p class="B2-S theme-secondary">You're ready to</p>
                                    <div class="Spacer-3"></div>
                                    <div class="PostRequest-youAreReadyTo">
                                       <div class="PostRequest-textWithIcon B2-S">
                                          <div responsive-if="below-sm" responsive-grid="splitView" class="ng-scope">
                                             <!-- ngIf: responsiveIfVisible -->
                                          </div>
                                          <div responsive-if="above-sm" responsive-grid="splitView" class="ng-scope">
                                             <!-- ngIf: responsiveIfVisible -->
                                             <div ng-if="responsiveIfVisible" class="ng-scope">
                                                <div ng-transclude="">
                                                   <svg-icon type="coins_20x20" class="ng-scope IconContainer" style="width: 20px; height: 20px;">
                                                      <svg class="Icon" viewBox="0 0 20 20">
                                                         <use xlink:href="#thumbprinticon-coins_20x20"></use>
                                                      </svg>
                                                   </svg-icon>
                                                </div>
                                             </div>
                                             <!-- end ngIf: responsiveIfVisible -->
                                          </div>
                                          Compare prices, reviews and profiles.
                                       </div>
                                       <div class="Spacer-5"></div>
                                       <div class="PostRequest-textWithIcon B2-S">
                                          <div responsive-if="below-sm" responsive-grid="splitView" class="ng-scope">
                                             <!-- ngIf: responsiveIfVisible -->
                                          </div>
                                          <div responsive-if="above-sm" responsive-grid="splitView" class="ng-scope">
                                             <!-- ngIf: responsiveIfVisible -->
                                             <div ng-if="responsiveIfVisible" class="ng-scope">
                                                <div ng-transclude="">
                                                   <svg-icon type="speech-bubble_20x20" class="ng-scope IconContainer" style="width: 20px; height: 20px;">
                                                      <svg class="Icon" viewBox="0 0 20 20">
                                                         <use xlink:href="#thumbprinticon-speech-bubble_20x20"></use>
                                                      </svg>
                                                   </svg-icon>
                                                </div>
                                             </div>
                                             <!-- end ngIf: responsiveIfVisible -->
                                          </div>
                                          Message the pros or schedule a time to complete the project.
                                       </div>
                                       <div class="Spacer-5"></div>
                                       <div class="PostRequest-textWithIcon B2-S">
                                          <div responsive-if="below-sm" responsive-grid="splitView" class="ng-scope">
                                             <!-- ngIf: responsiveIfVisible -->
                                          </div>
                                          <div responsive-if="above-sm" responsive-grid="splitView" class="ng-scope">
                                             <!-- ngIf: responsiveIfVisible -->
                                             <div ng-if="responsiveIfVisible" class="ng-scope">
                                                <div ng-transclude="">
                                                   <svg-icon type="trophy-fill_20x20" class="ng-scope IconContainer" style="width: 20px; height: 20px;">
                                                      <svg class="Icon" viewBox="0 0 20 20">
                                                         <use xlink:href="#thumbprinticon-trophy-fill_20x20"></use>
                                                      </svg>
                                                   </svg-icon>
                                                </div>
                                             </div>
                                             <!-- end ngIf: responsiveIfVisible -->
                                          </div>
                                          Select "Hire" for the pro you decide to work with.
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="PostRequest-section-step PostRequest-section PostRequest-fadeIn-stepFour" ng-class="postRequest.getClassesForSection(postRequest.POST_HIRE_SECTION)">
                                 <div class="PostRequest-hire">
                                    <div class="PostRequest-hire-avatar PostRequest-section-padded">
                                       <avatar-ng img-src="request.getHiredQuote().model
                                          .service.user.picture.sizes[100].url" size="lgXl" class="ng-isolate-scope">
                                          <div class="Avatar Avatar--lgXl">
                                             <div class="Avatar__circle">
                                                <!-- ngIf: showInitials -->
                                                <!-- ngIf: imgSrc -->
                                             </div>
                                             <span class="Avatar__badge Avatar__badge--micro ng-hide" ng-show="isMicro &amp;&amp; !badgeCount &amp;&amp; !checked">
                                             </span>
                                             <span class="Avatar__badge Avatar__badge--count ng-binding ng-hide" ng-show="badgeCount > 0 &amp;&amp; !checked" ng-bind="badgeCount"></span>
                                             <span class="Avatar__badge Avatar__badge--check ng-hide" ng-show="checked">
                                                <!-- ngIf: size === 'xl' -->
                                                <!-- ngIf: size !== 'xl' -->
                                                <svg-icon ng-if="size !== 'xl'" type="check_9x7" class="ng-scope IconContainer" style="width: 9px; height: 7px;">
                                                   <svg class="Icon" viewBox="0 0 9 7">
                                                      <use xlink:href="#thumbprinticon-check_9x7"></use>
                                                   </svg>
                                                </svg-icon>
                                                <!-- end ngIf: size !== 'xl' -->
                                             </span>
                                          </div>
                                       </avatar-ng>
                                    </div>
                                    <div class="PostRequest-hire-service PostRequest-section-padded">
                                       <p class="T1-R ng-binding" ng-bind="request.getHiredQuote().model.service.user.display_name"></p>
                                       <div class="Spacer-4">
                                          <span class="B2-R theme-secondary ng-binding">
                                          January 1, 1970
                                          </span>
                                       </div>
                                    </div>
                                    <div class="PostRequest-hire-reviewButton PostRequest-section-padded">
                                       <!-- ngIf: !request.getHiredQuote().isReviewed() --><button class="Button theme-primary theme-large ng-scope" ng-if="!request.getHiredQuote().isReviewed()" ng-click="request.getHiredQuote().review()" event-track="consumer messenger/post request review" event-track-on="click" event-track-data="{&quot;encoded_request_id&quot;:&quot;lbc31qkk&quot;,&quot;is_zero_quotes&quot;:false}">
                                       Review
                                       </button><!-- end ngIf: !request.getHiredQuote().isReviewed() -->
                                       <div class="Spacer-2"></div>
                                       <span class="T3-S" ng-click="postRequest.goToHiredQuote()" event-track="consumer messenger/post request message" event-track-on="click" event-track-data="{&quot;encoded_request_id&quot;:&quot;lbc31qkk&quot;,&quot;is_zero_quotes&quot;:false}">
                                       <a>Send message</a>
                                       </span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- end ngIf: !request.isCancelledByBuyer() && !isRequestExpiredWithNoQuotes -->
                        </div>
                     </div>
                     <div waypoint-track="post request end" waypoint-track-data="{&quot;encoded_request_id&quot;:&quot;lbc31qkk&quot;,&quot;is_zero_quotes&quot;:false}" class="ng-isolate-scope"></div>
                     <div ng-transclude="">
                        <div class="PostRequest-recommendations ng-scope">
                           <recommendation request-origin="post_request_view">
                              <recommendations class="ng-scope">
                                 <div class="Recommendations">
                                    <div class="splitViewContent-grid">
                                       <div class="column-lg-4 column-lg-offset-1 column-md-6 column-md-offset-0">
                                          <div class="Recommendations-header ">
                                             <h2 class="tp-heading-4">Recommended for you</h2>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="
                                       splitViewContent-grid            theme-full-bleed-at-sm">
                                       <div class="column-lg-4 column-lg-offset-1 column-md-6 column-md-offset-0">
                                          <service-carousel count="25" theme-paddles="" class="ng-scope">
                                             <div class="
                                                ServiceCarousel
                                                theme-paddles          theme-grid ">
                                                <div class="ServiceCarousel-paddle paddle-left theme-disabled" ng-class="{ 'theme-disabled': isLeftDisabled() }" ng-click="clickLeft()">
                                                   <div>
                                                      <svg-icon type="left-caret" size="md" class="ng-scope theme-medium IconContainer">
                                                         <svg class="Icon" viewBox="0 0 24 24">
                                                            <use xlink:href="#thumbprinticon-left-caret_24"></use>
                                                         </svg>
                                                      </svg-icon>
                                                   </div>
                                                </div>
                                                <div class="ServiceCarousel-container">
                                                   <div class="ServiceCarousel-list" ng-style="{ 'left': listLeft }" style="left: 0px;">
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;Ef:ZOOYOXFaD2A&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:0,&quot;block_position&quot;:0,&quot;block_type&quot;:1}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;Ef:ZOOYOXFaD2A&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:0,&quot;block_position&quot;:0,&quot;block_type&quot;:1}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('Ef:ZOOYOXFaD2A', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302057772114059444/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  House Cleaning 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;1axLKc3DdQ6g5w&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:1,&quot;block_position&quot;:0,&quot;block_type&quot;:1}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;1axLKc3DdQ6g5w&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:1,&quot;block_position&quot;:0,&quot;block_type&quot;:1}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('1axLKc3DdQ6g5w', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302057894909640837/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Personal Training 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;kMI95pqKXLU9vQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:2,&quot;block_position&quot;:0,&quot;block_type&quot;:1}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;kMI95pqKXLU9vQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:2,&quot;block_position&quot;:0,&quot;block_type&quot;:1}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('kMI95pqKXLU9vQ', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302057788374728798/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Massage Therapy 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;M:HwIR8qa:MQww&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:3,&quot;block_position&quot;:0,&quot;block_type&quot;:1}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;M:HwIR8qa:MQww&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:3,&quot;block_position&quot;:0,&quot;block_type&quot;:1}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('M:HwIR8qa:MQww', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302055612831015091/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Handyman 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;Q9sYIW2IZP5AkA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:4,&quot;block_position&quot;:0,&quot;block_type&quot;:1}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;Q9sYIW2IZP5AkA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:4,&quot;block_position&quot;:0,&quot;block_type&quot;:1}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('Q9sYIW2IZP5AkA', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302057928175804595/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Wedding and Event Makeup 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;nV8DGI4:dEUXtQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:5,&quot;block_position&quot;:0,&quot;block_type&quot;:1}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;nV8DGI4:dEUXtQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:5,&quot;block_position&quot;:0,&quot;block_type&quot;:1}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('nV8DGI4:dEUXtQ', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302055784213602398/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Local Moving (under 50 miles)
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;DlKFbmZEwCYQyA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:6,&quot;block_position&quot;:0,&quot;block_type&quot;:1}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;DlKFbmZEwCYQyA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:6,&quot;block_position&quot;:0,&quot;block_type&quot;:1}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('DlKFbmZEwCYQyA', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302055615651709078/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Lawn Mowing and Trimming 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;GTdkGWTMaOx4Wg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:7,&quot;block_position&quot;:0,&quot;block_type&quot;:1}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;GTdkGWTMaOx4Wg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:7,&quot;block_position&quot;:0,&quot;block_type&quot;:1}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('GTdkGWTMaOx4Wg', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302055782522642612/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Dog Training 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;b7cSvw5Y7PhRlA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:8,&quot;block_position&quot;:0,&quot;block_type&quot;:1}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;b7cSvw5Y7PhRlA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:8,&quot;block_position&quot;:0,&quot;block_type&quot;:1}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('b7cSvw5Y7PhRlA', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302055827907125427/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Wedding Officiant 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;iJlabHh2QF9ylg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:9,&quot;block_position&quot;:0,&quot;block_type&quot;:1}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;iJlabHh2QF9ylg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:9,&quot;block_position&quot;:0,&quot;block_type&quot;:1}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('iJlabHh2QF9ylg', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302056708056653872/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  DJ 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;XyyEps5FZMepLQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:10,&quot;block_position&quot;:0,&quot;block_type&quot;:1}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;XyyEps5FZMepLQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:10,&quot;block_position&quot;:0,&quot;block_type&quot;:1}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('XyyEps5FZMepLQ', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302055623025369182/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Interior Painting 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;N3RO9AsfLUgQUA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:11,&quot;block_position&quot;:0,&quot;block_type&quot;:1}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;N3RO9AsfLUgQUA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:11,&quot;block_position&quot;:0,&quot;block_type&quot;:1}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('N3RO9AsfLUgQUA', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302055853800276101/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Photo Booth Rental 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;q75MpVw2qNDkmQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:12,&quot;block_position&quot;:0,&quot;block_type&quot;:1}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;q75MpVw2qNDkmQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:12,&quot;block_position&quot;:0,&quot;block_type&quot;:1}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('q75MpVw2qNDkmQ', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302057770778697861/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Junk Removal 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;Rfn88VIV27Tb3g&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:13,&quot;block_position&quot;:0,&quot;block_type&quot;:1}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;Rfn88VIV27Tb3g&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:13,&quot;block_position&quot;:0,&quot;block_type&quot;:1}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('Rfn88VIV27Tb3g', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302057227422056628/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Portrait Photography 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;waXovsgJ9vpqCw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:14,&quot;block_position&quot;:0,&quot;block_type&quot;:1}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;waXovsgJ9vpqCw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:14,&quot;block_position&quot;:0,&quot;block_type&quot;:1}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('waXovsgJ9vpqCw', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302056355116966067/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Dog Grooming 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;9J5P8q6rNlEGlQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:15,&quot;block_position&quot;:0,&quot;block_type&quot;:1}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;9J5P8q6rNlEGlQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:15,&quot;block_position&quot;:0,&quot;block_type&quot;:1}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('9J5P8q6rNlEGlQ', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302057970828156976/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Fence and Gate Installation 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;CGoqNwAGYYU2qA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:16,&quot;block_position&quot;:0,&quot;block_type&quot;:1}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;CGoqNwAGYYU2qA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:16,&quot;block_position&quot;:0,&quot;block_type&quot;:1}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('CGoqNwAGYYU2qA', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302056901167276126/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Carpet Cleaning 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;Bg9:OPqOradztw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:17,&quot;block_position&quot;:0,&quot;block_type&quot;:1}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;Bg9:OPqOradztw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:17,&quot;block_position&quot;:0,&quot;block_type&quot;:1}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('Bg9:OPqOradztw', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302055820130066582/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Outdoor Landscaping and Design 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;0bT7XkPMSc3S9Q&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:18,&quot;block_position&quot;:0,&quot;block_type&quot;:1}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;0bT7XkPMSc3S9Q&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:18,&quot;block_position&quot;:0,&quot;block_type&quot;:1}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('0bT7XkPMSc3S9Q', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302055770667557044/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Tree Trimming and Removal 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;4k2DePFNn5crpQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:19,&quot;block_position&quot;:0,&quot;block_type&quot;:1}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;4k2DePFNn5crpQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:19,&quot;block_position&quot;:0,&quot;block_type&quot;:1}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('4k2DePFNn5crpQ', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302055511871455365/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Wedding Photography 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;keOtMVFEEkye3w&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:20,&quot;block_position&quot;:0,&quot;block_type&quot;:1}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;keOtMVFEEkye3w&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:20,&quot;block_position&quot;:0,&quot;block_type&quot;:1}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('keOtMVFEEkye3w', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302055516512526516/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Appliance Repair or Maintenance 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;GJbVQCIaJO4JFQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:21,&quot;block_position&quot;:0,&quot;block_type&quot;:1}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;GJbVQCIaJO4JFQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:21,&quot;block_position&quot;:0,&quot;block_type&quot;:1}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('GJbVQCIaJO4JFQ', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302057896314175668/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Furniture Moving and Heavy Lifting 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;EnUyo8vkqOIHgg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:22,&quot;block_position&quot;:0,&quot;block_type&quot;:1}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;EnUyo8vkqOIHgg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:22,&quot;block_position&quot;:0,&quot;block_type&quot;:1}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('EnUyo8vkqOIHgg', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302056406963544244/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Wedding and Event Hair Styling 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;856A3475nmblEA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:23,&quot;block_position&quot;:0,&quot;block_type&quot;:1}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;856A3475nmblEA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:23,&quot;block_position&quot;:0,&quot;block_type&quot;:1}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('856A3475nmblEA', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302057955395182772/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Event Photography 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;jc3YVHYCu45H2g&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:24,&quot;block_position&quot;:0,&quot;block_type&quot;:1}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;jc3YVHYCu45H2g&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:24,&quot;block_position&quot;:0,&quot;block_type&quot;:1}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('jc3YVHYCu45H2g', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302055838544830644/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Event Catering 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="ServiceCarousel-paddle paddle-right" ng-class="{ 'theme-disabled': isRightDisabled() }" ng-click="clickRight()">
                                                   <div>
                                                      <svg-icon type="right-caret" size="md" class="ng-scope theme-medium IconContainer">
                                                         <svg class="Icon" viewBox="0 0 24 24">
                                                            <use xlink:href="#thumbprinticon-right-caret_24"></use>
                                                         </svg>
                                                      </svg-icon>
                                                   </div>
                                                </div>
                                             </div>
                                          </service-carousel>
                                       </div>
                                    </div>
                                 </div>
                              </recommendations>
                              <recommendations class="ng-scope">
                                 <div class="Recommendations">
                                    <div class="splitViewContent-grid">
                                       <div class="column-lg-4 column-lg-offset-1 column-md-6 column-md-offset-0">
                                          <div class="Recommendations-header ">
                                             <h2 class="tp-heading-4">Popular in your area</h2>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="
                                       splitViewContent-grid            theme-full-bleed-at-sm">
                                       <div class="column-lg-4 column-lg-offset-1 column-md-6 column-md-offset-0">
                                          <service-carousel count="25" theme-paddles="" class="ng-scope">
                                             <div class="
                                                ServiceCarousel
                                                theme-paddles          theme-grid ">
                                                <div class="ServiceCarousel-paddle paddle-left theme-disabled" ng-class="{ 'theme-disabled': isLeftDisabled() }" ng-click="clickLeft()">
                                                   <div>
                                                      <svg-icon type="left-caret" size="md" class="ng-scope theme-medium IconContainer">
                                                         <svg class="Icon" viewBox="0 0 24 24">
                                                            <use xlink:href="#thumbprinticon-left-caret_24"></use>
                                                         </svg>
                                                      </svg-icon>
                                                   </div>
                                                </div>
                                                <div class="ServiceCarousel-container">
                                                   <div class="ServiceCarousel-list" ng-style="{ 'left': listLeft }" style="left: 0px;">
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;Dnr8kGzlCKLOZg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:0,&quot;block_position&quot;:1,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;Dnr8kGzlCKLOZg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:0,&quot;block_position&quot;:1,&quot;block_type&quot;:2}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('Dnr8kGzlCKLOZg', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302056679218266292/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Food Truck or Cart Services 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;4Gs5C$PsIesk5A&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:1,&quot;block_position&quot;:1,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;4Gs5C$PsIesk5A&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:1,&quot;block_position&quot;:1,&quot;block_type&quot;:2}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('4Gs5C$PsIesk5A', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302056318754054238/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Bounce House and Party Inflatables Rental 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;bIY6hGfB2q8syQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:2,&quot;block_position&quot;:1,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;bIY6hGfB2q8syQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:2,&quot;block_position&quot;:1,&quot;block_type&quot;:2}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('bIY6hGfB2q8syQ', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302055635934298245/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Private Swim Lessons 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;1AlrokYQ00L8eQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:3,&quot;block_position&quot;:1,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;1AlrokYQ00L8eQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:3,&quot;block_position&quot;:1,&quot;block_type&quot;:2}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('1AlrokYQ00L8eQ', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302056149361156246/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Roof Installation or Replacement 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;GhsBh:XCyI0ORQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:4,&quot;block_position&quot;:1,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;GhsBh:XCyI0ORQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:4,&quot;block_position&quot;:1,&quot;block_type&quot;:2}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('GhsBh:XCyI0ORQ', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302056478449746053/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Sprinkler and Irrigation System Repair and Maintenance 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;:c31mTWy0Cm68A&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:5,&quot;block_position&quot;:1,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;:c31mTWy0Cm68A&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:5,&quot;block_position&quot;:1,&quot;block_type&quot;:2}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId(':c31mTWy0Cm68A', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302055596637847646/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Multi Service Lawn Care 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;Vin8kPc8QyC5KQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:6,&quot;block_position&quot;:1,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;Vin8kPc8QyC5KQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:6,&quot;block_position&quot;:1,&quot;block_type&quot;:2}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('Vin8kPc8QyC5KQ', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302056575745933445/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Computer Repair 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;Ii65j47qdXdPKg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:7,&quot;block_position&quot;:1,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;Ii65j47qdXdPKg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:7,&quot;block_position&quot;:1,&quot;block_type&quot;:2}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('Ii65j47qdXdPKg', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302056610297479348/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Wedding Catering 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;HSN$F3bPaZ1iaw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:8,&quot;block_position&quot;:1,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;HSN$F3bPaZ1iaw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:8,&quot;block_position&quot;:1,&quot;block_type&quot;:2}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('HSN$F3bPaZ1iaw', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302055752289452211/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Piano Lessons 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;6WTJnO6mPxjoag&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:9,&quot;block_position&quot;:1,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;6WTJnO6mPxjoag&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:9,&quot;block_position&quot;:1,&quot;block_type&quot;:2}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('6WTJnO6mPxjoag', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302056192431399062/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Pest Control Services 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;i8s8fBVNE6Ynhw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:10,&quot;block_position&quot;:1,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;i8s8fBVNE6Ynhw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:10,&quot;block_position&quot;:1,&quot;block_type&quot;:2}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('i8s8fBVNE6Ynhw', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302055666690023472/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Long Distance Moving 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;MO18xmpaxkHcSw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:11,&quot;block_position&quot;:1,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;MO18xmpaxkHcSw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:11,&quot;block_position&quot;:1,&quot;block_type&quot;:2}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('MO18xmpaxkHcSw', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302056468857938099/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Pressure Washing 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;yZUmyVje7z70Mw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:12,&quot;block_position&quot;:1,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;yZUmyVje7z70Mw&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:12,&quot;block_position&quot;:1,&quot;block_type&quot;:2}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('yZUmyVje7z70Mw', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302056351024980101/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Nutritionist 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;Rh9d8VjIA$GYsA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:13,&quot;block_position&quot;:1,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;Rh9d8VjIA$GYsA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:13,&quot;block_position&quot;:1,&quot;block_type&quot;:2}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('Rh9d8VjIA$GYsA', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302057044951826565/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  General Contracting 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;6mKADUN2Z$D73g&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:14,&quot;block_position&quot;:1,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;6mKADUN2Z$D73g&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:14,&quot;block_position&quot;:1,&quot;block_type&quot;:2}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('6mKADUN2Z$D73g', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302057252844822707/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Exterior Painting 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;EImutic0TgVgHQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:15,&quot;block_position&quot;:1,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;EImutic0TgVgHQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:15,&quot;block_position&quot;:1,&quot;block_type&quot;:2}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('EImutic0TgVgHQ', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302056228180238469/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Private Cooking Lessons 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;BJ73HTx7s6kw5g&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:17,&quot;block_position&quot;:1,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;BJ73HTx7s6kw5g&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:17,&quot;block_position&quot;:1,&quot;block_type&quot;:2}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('BJ73HTx7s6kw5g', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302057925839306885/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Wedding Videography 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;NrOTJXyTYoMHaA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:18,&quot;block_position&quot;:1,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;NrOTJXyTYoMHaA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:18,&quot;block_position&quot;:1,&quot;block_type&quot;:2}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('NrOTJXyTYoMHaA', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302055804023857331/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Land Surveying 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;8gKdZ6TAfGSwqQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:19,&quot;block_position&quot;:1,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;8gKdZ6TAfGSwqQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:19,&quot;block_position&quot;:1,&quot;block_type&quot;:2}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('8gKdZ6TAfGSwqQ', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302056602622812339/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Web Design 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;o9Gquvt7q8Arfg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:20,&quot;block_position&quot;:1,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;o9Gquvt7q8Arfg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:20,&quot;block_position&quot;:1,&quot;block_type&quot;:2}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('o9Gquvt7q8Arfg', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302057943731462277/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Audio Recording 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;XR7tcaO8ju1OWg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:21,&quot;block_position&quot;:1,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;XR7tcaO8ju1OWg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:21,&quot;block_position&quot;:1,&quot;block_type&quot;:2}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('XR7tcaO8ju1OWg', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302057769826320517/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  CPR Training 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;rklE6R62OYtHuQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:22,&quot;block_position&quot;:1,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;rklE6R62OYtHuQ&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:22,&quot;block_position&quot;:1,&quot;block_type&quot;:2}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('rklE6R62OYtHuQ', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302055726850261171/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Home Remodeling 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;felKlyYjWPV7FA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:23,&quot;block_position&quot;:1,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;felKlyYjWPV7FA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:23,&quot;block_position&quot;:1,&quot;block_type&quot;:2}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('felKlyYjWPV7FA', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302055520457187376/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Band Entertainment 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;8HROc4dEjopfYA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:24,&quot;block_position&quot;:1,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;8HROc4dEjopfYA&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:24,&quot;block_position&quot;:1,&quot;block_type&quot;:2}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('8HROc4dEjopfYA', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302056356826177669/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Bartending 
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                      <div class="ServiceCarousel-card" ng-style="{ 'min-width': cardsMinWidth }">
                                                         <div class="ServiceBox-container theme-smaller ng-isolate-scope" event-track="recommendation/click" event-track-on="click" waypoint-track="category recommendation" event-track-data="{&quot;encodedCategoryId&quot;:&quot;brzr88JvExh2mg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:25,&quot;block_position&quot;:1,&quot;block_type&quot;:2}" waypoint-track-data="{&quot;encodedCategoryId&quot;:&quot;brzr88JvExh2mg&quot;,&quot;categoryName&quot;:0,&quot;origin&quot;:&quot;post_request_view&quot;,&quot;position&quot;:25,&quot;block_position&quot;:1,&quot;block_type&quot;:2}">
                                                            <a class="ServiceBox-item ng-scope" open-request-form-modal="" ng-click="openModalWithCategoryId('brzr88JvExh2mg', 'post_request_view')">
                                                               <div class="ServiceBox-item-image" style="background-image: url('https://d1vg1gqh4nkuns.cloudfront.net/i/302055740873261189/small/standard/hero')">
                                                                  <div class="ServiceBox-item-overlay">
                                                                     <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                                     Request
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               <div class="ServiceBox-item-label">
                                                                  <span class=" tp-heading-6 ">
                                                                  Private Dance Lessons (for me or my group)
                                                                  </span>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="ServiceCarousel-paddle paddle-right" ng-class="{ 'theme-disabled': isRightDisabled() }" ng-click="clickRight()">
                                                   <div>
                                                      <svg-icon type="right-caret" size="md" class="ng-scope theme-medium IconContainer">
                                                         <svg class="Icon" viewBox="0 0 24 24">
                                                            <use xlink:href="#thumbprinticon-right-caret_24"></use>
                                                         </svg>
                                                      </svg-icon>
                                                   </div>
                                                </div>
                                             </div>
                                          </service-carousel>
                                       </div>
                                    </div>
                                 </div>
                              </recommendations>
                           </recommendation>
                           <div class="Spacer-12"></div>
                           <div class="PostRequest-recommendations-cta">
                              <a href="/" class="Button theme-primary theme-large">
                              Explore More
                              </a>
                           </div>
                           <div class="Spacer-12"></div>
                        </div>
                     </div>
                     <div waypoint-track="post request recommendations end" waypoint-track-data="{&quot;encoded_user_id&quot;:&quot;ce6dgf34&quot;,&quot;encoded_request_id&quot;:&quot;lbc31qkk&quot;}" class="ng-isolate-scope"></div>
                  </post-request>
               </div>
               <div class="ConsumerMessenger-panesRow" ng-show="!cm.isPostRequestVisible()">
                  <div class="ThreePane-pane theme-middle" style="display: none;">
                     <div class="ConsumerMessenger-messageStreamContainer">
                        <!-- ngRepeat: quote in cm.quotes --><!-- ngIf: (
                           cm.isQuoteUiRendered(quote.model.id)
                           || cm.isCurrentQuote(quote)
                           ) --><!-- end ngRepeat: quote in cm.quotes --><!-- ngIf: (
                           cm.isQuoteUiRendered(quote.model.id)
                           || cm.isCurrentQuote(quote)
                           ) --><!-- end ngRepeat: quote in cm.quotes --><!-- ngIf: (
                           cm.isQuoteUiRendered(quote.model.id)
                           || cm.isCurrentQuote(quote)
                           ) --><!-- end ngRepeat: quote in cm.quotes -->
                        <media-gallery gallery-id="cm.messageStreamGalleryId" tracking-prefix="cm.trackingPrefix" tracking-data="cm.trackingData" class="ng-scope">
                           <div class="media-gallery blueimp-gallery media-gallery--show-controls">
                              <div class="media-gallery__slides slides"></div>
                              <div class="media-gallery__signal media-gallery__signal--loading ng-hide" ng-show="mediaGallery.shouldShowLoadingSignal">
                                 <loading-dots color="inverse" class="ng-isolate-scope">
                                    <div class="LoadingDots LoadingDots--inverse" ng-class="{
                                       'LoadingDots--small': size === 'small',
                                       'LoadingDots--muted': color === 'muted',
                                       'LoadingDots--inverse': color === 'inverse'
                                       }">
                                       <div></div>
                                       <div></div>
                                       <div></div>
                                    </div>
                                 </loading-dots>
                              </div>
                              <div class="media-gallery__signal media-gallery__signal--error ng-hide" ng-show="mediaGallery.shouldShowErrorSignal">
                                 <svg-icon type="stop" size="md" class="media-gallery__icon media-gallery__icon--md ng-scope theme-medium IconContainer">
                                    <svg class="Icon" viewBox="0 0 24 24">
                                       <use xlink:href="#thumbprinticon-stop_24"></use>
                                    </svg>
                                 </svg-icon>
                              </div>
                              <a class="media-gallery__arrow media-gallery__arrow--previous media-gallery__control media-gallery__control--disabled" ng-class="{ 'media-gallery__control--disabled': mediaGallery.isShowingFirstSlide() }">
                                 <svg-icon type="left-caret" size="lg" class="ng-scope theme-large IconContainer">
                                    <svg class="Icon" viewBox="0 0 48 48">
                                       <use xlink:href="#thumbprinticon-left-caret_48"></use>
                                    </svg>
                                 </svg-icon>
                              </a>
                              <a class="media-gallery__arrow media-gallery__arrow--next media-gallery__control" ng-class="{ 'media-gallery__control--disabled': mediaGallery.isShowingLastSlide() }">
                                 <svg-icon type="right-caret" size="lg" class="ng-scope theme-large IconContainer">
                                    <svg class="Icon" viewBox="0 0 48 48">
                                       <use xlink:href="#thumbprinticon-right-caret_48"></use>
                                    </svg>
                                 </svg-icon>
                              </a>
                              <a class="media-gallery__close media-gallery__control">
                                 <svg-icon type="close" size="sm" class="ng-scope theme-small IconContainer">
                                    <svg class="Icon" viewBox="0 0 16 16">
                                       <use xlink:href="#thumbprinticon-close_16"></use>
                                    </svg>
                                 </svg-icon>
                              </a>
                              <div class="T3-S media-gallery__metadata media-gallery__control">
                                 <p class="media-gallery__caption"></p>
                                 <p class="media-gallery__count ng-binding" ng-bind="mediaGallery.getSlideIndexLabel()">1 of 0</p>
                              </div>
                           </div>
                        </media-gallery>
                     </div>
                  </div>
                  <div class="ThreePane-pane theme-right" style="display: none;">
                     <div class="ConsumerMessenger-fullPane">
                        <!-- ngRepeat: quote in cm.quotes --><!-- ngIf: (
                           cm.isQuoteUiRendered(quote.model.id)
                           || cm.isCurrentQuote(quote)
                           ) --><!-- end ngRepeat: quote in cm.quotes --><!-- ngIf: (
                           cm.isQuoteUiRendered(quote.model.id)
                           || cm.isCurrentQuote(quote)
                           ) --><!-- end ngRepeat: quote in cm.quotes --><!-- ngIf: (
                           cm.isQuoteUiRendered(quote.model.id)
                           || cm.isCurrentQuote(quote)
                           ) --><!-- end ngRepeat: quote in cm.quotes -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </three-pane>
   </div>
   <div modal-basic="" modal-id="request-details-modal-lbc31qkk" class="ng-isolate-scope" style="display: block;">
      <div class="ModalBasic is-hidden" backdrop="">
         <button type="button" class="ModalBasic-close" ng-hide="hideClose" closes-modal-on-click="">
            <svg-icon type="close" size="sm" class="ng-scope theme-small IconContainer">
               <svg class="Icon" viewBox="0 0 16 16">
                  <use xlink:href="#thumbprinticon-close_16"></use>
               </svg>
            </svg-icon>
         </button>
         <div backdrop="" class="ModalBasic-containerWrapper">
            <div backdrop="" class="ModalBasic-containerWrapper-container">
               <div backdrop="" class="ModalBasic-contents" ng-transclude="">
                  <div class="homepage-customer-request ng-scope">
                     <article class="RequestDetails ng-scope" request-details="">
                        <div class="RequestDetails-summary">
                           <img src="/boundary-map/image/92867/420/140" alt="Orange, CA">
                           <div class="RequestDetails-customer">
                              <div class="RequestDetails-avatar">
                                 <avatar class="Avatar Avatar--lg">
                                    <div class="Avatar__circle">
                                       <div class="Avatar__initials">JN</div>
                                    </div>
                                 </avatar>
                              </div>
                              <p class="RequestDetails-customer-name T1-R">
                                 Jafar N.
                              </p>
                              <p class="RequestDetails-customer-info B3-S">
                                 Orange, CA 92867
                              </p>
                           </div>
                        </div>
                        <div class="RequestDetails-details">
                           <dl>
                              <dt class="T2-S">Job type</dt>
                              <dd class="B2-S">
                                 Presentation Design
                              </dd>
                              <dt class="T2-S">Presentation software</dt>
                              <dd class="B2-S">PowerPoint</dd>
                              <dt class="T2-S">Number of slides</dt>
                              <dd class="B2-S">1-10</dd>
                              <dt class="T2-S">Project scope</dt>
                              <dd class="B2-S">One-time project</dd>
                              <dt class="T2-S">
                                 When
                              </dt>
                              <dd class="B2-S">I'm flexible</dd>
                              <dt class="T2-S">Travel preferences</dt>
                              <dd class="B2-S">
                                 <ul>
                                    <li class="RequestDetails-details-check">
                                       Professionals may travel to my address
                                    </li>
                                    <li class="RequestDetails-details-check">
                                       I will travel to the pro up to 25 miles
                                    </li>
                                    <li class="RequestDetails-details-cancel">
                                       This can be done over the phone or internet
                                    </li>
                                 </ul>
                              </dd>
                              <dt class="T2-S">Phone number</dt>
                              <dd class="B2-S">Not available</dd>
                           </dl>
                        </div>
                        <div modal-basic="" id="image-details-modal" class="ng-isolate-scope" style="display: block;">
                           <div class="ModalBasic is-hidden" backdrop="">
                              <button type="button" class="ModalBasic-close" ng-hide="hideClose" closes-modal-on-click="">
                                 <svg-icon type="close" size="sm" class="ng-scope theme-small IconContainer">
                                    <svg class="Icon" viewBox="0 0 16 16">
                                       <use xlink:href="#thumbprinticon-close_16"></use>
                                    </svg>
                                 </svg-icon>
                              </button>
                              <div backdrop="" class="ModalBasic-containerWrapper">
                                 <div backdrop="" class="ModalBasic-containerWrapper-container">
                                    <div backdrop="" class="ModalBasic-contents" ng-transclude="">
                                       <div class="RequestDetails-imageContainer page-grid ng-scope">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <basic-modal modal-id="customer-contact-learn-more" class="ng-isolate-scope">
                           <div modal-basic="" class="Modal " modal-id="customer-contact-learn-more" style="display: block;">
                              <div class="ModalBasic is-hidden" backdrop="">
                                 <button type="button" class="ModalBasic-close" ng-hide="hideClose" closes-modal-on-click="">
                                    <svg-icon type="close" size="sm" class="ng-scope theme-small IconContainer">
                                       <svg class="Icon" viewBox="0 0 16 16">
                                          <use xlink:href="#thumbprinticon-close_16"></use>
                                       </svg>
                                    </svg-icon>
                                 </button>
                                 <div backdrop="" class="ModalBasic-containerWrapper">
                                    <div backdrop="" class="ModalBasic-containerWrapper-container">
                                       <div backdrop="" class="ModalBasic-contents" ng-transclude="">
                                          <div class="Modal-content ng-scope" ng-transclude="">
                                             <div class="T1-R CustomerContactModal-section theme-title ng-scope">
                                                Pay only for customer responses
                                             </div>
                                             <div class="B2-R CustomerContactModal-section ng-scope">
                                                <div class="T2-R CustomerContactModal-question">
                                                   When will I use credits?
                                                </div>
                                                <p>
                                                   You'll only use credits the first time a customer messages you, calls you, schedules an
                                                   appointment, marks you as hired, or pays you.
                                                </p>
                                             </div>
                                             <div class="B2-R CustomerContactModal-section ng-scope">
                                                <div class="T2-R CustomerContactModal-question">
                                                   Why has the cost changed?
                                                </div>
                                                <p>
                                                   You'll pay less frequently and get more value for your money because all your dollars go
                                                   towards a conversation with an interested customer. Remember, credits start at $1.67
                                                   each.
                                                </p>
                                             </div>
                                             <div class="CustomerContactModal-section theme-link ng-scope">
                                                <a class="Link" target="_blank" href="/customer-responses">
                                                   Learn more 
                                                   <svg-icon type="right-caret" size="sm" class="ng-scope theme-small IconContainer">
                                                      <svg class="Icon" viewBox="0 0 16 16">
                                                         <use xlink:href="#thumbprinticon-right-caret_16"></use>
                                                      </svg>
                                                   </svg-icon>
                                                </a>
                                             </div>
                                             <div class="CustomerContactModal-section theme-button ng-scope">
                                                <div class="Button" closes-modal-on-click="">
                                                   Close
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </basic-modal>
                     </article>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <script id="template-request-form-section-header" type="text/template">
      <div class="page-grid"
          ng-class="{'theme-full-bleed-at-xs': fullBleedTheme}">
          <div class="column-lg-4 column-lg-offset-1
              ">
      
              <div class="RequestForm-sectionHeader"
                  ng-class="[
                      (isBrandedScreen
                          ? 'theme-left-aligned' : ''),
                      (isThemeSmaller ? 'theme-smaller' : ''),
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
   <script id="template-request-form-section-content" type="text/template">
      <div class="request-form__section-content">
          <div class="request-form__section-content__inner"
              ng-class="{
                  'request-form__section-content__inner--no-bottom-padding': removeBottomPadding,
                  'request-form__section-content__inner--centered': centeredContent,
                  'request-form__section-content__inner--ios': isUserAgentIos
              }"
              ng-transclude>
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
      
          <request-form-template template-id="template-request-form-section-content">
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
      
              <div class="T3-S request-form__validation-error"
                  ng-repeat="$err in $validationErrors"
                  ng-bind="$err">
              </div>
          </request-form-template>
      
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
   <script id="template-hire-a-specific-pro-tout-header" type="text/template">
      <div ng-if="requestForm.serviceData" class="RequestForm-proTout">
          <div class="page-grid">
              <div class="column-lg-4 column-lg-offset-1"
                  ng-class="{'no-photo': !requestForm.serviceData.profile_picture}">
      
                  <div class="RequestForm-proTout-content">
                      <img class="RequestForm-proTout-image"
                          ng-if="requestForm.serviceData.profile_picture"
                          ng-src="{[{ requestForm.serviceData.profile_picture }]}" />
      
                      <h3 class="RequestForm-proTout-text B3-S">
                          Pros like
                          <span class="RequestForm-proTout-businessName">
                              {[{ requestForm.serviceData.display_name }]}
                          </span>
                          need a few details to send you a cost estimate.
                      </h3>
                  </div>
              </div>
          </div>
      </div>
      <div ng-if="requestForm.serviceData" class="RequestForm-proTout-border"></div>
   </script>
   <script id="template-request-category-chooser-radio" type="text/template">
      <form
          ng-if="categories.length > 0"
          event-track="request form/view category chooser"
          event-track-on-init
          event-track-data="trackingData.viewCategoryChooser()"
          ng-init="chooserState = { showCount: 13 }"
          ng-submit="deepValidate()
              ? setCategory(chooserModel.chosenCategory.value)
              : false"
          schema="chooserSchema"
          schema-assign="EmptySchema"
          schema-yields="chooserModel"
          schema-cache-id="request-form-category-chooser">
      
          <request-form-template template-id="template-request-form-section-content">
              <request-form-template template-id="template-hire-a-specific-pro-tout-header">
              </request-form-template>
      
                          <request-form-template template-id="template-request-form-section-header"
                  scope-vars="isThemeSmaller"
                  is-theme-smaller="requestForm.getCategoryCountWithDescription() > 0">
      
                  Which service are you interested in?
              </request-form-template>
      
              <request-form-template template-id="template-request-category-tooltip"
                  scope-vars="tooltipIsOn"
                  tooltip-is-on="true"
                  ng-if="requestForm.getCategoryCountWithDescription() > 0">
      
                  <div ng-repeat="category in categories | limitTo: chooserState.showCount"
                      ng-if="category.category_description">
      
                      <h4 class="T2-S RequestForm-categoryInfoBox-category-title">
                          {[{ category.name }]}
                      </h4>
                      <p class="B2-S RequestForm-categoryInfoBox-category-description">
                          {[{ category.category_description }]}
                      </p>
                  </div>
              </request-form-template>
      
              <div id="category-chooser"
                  schema="chooserSchema.chosenCategory"
                  schema-assign="ObjectValueKeySchema"
                  class="request-form__contained-answers"
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
                                  input-radio-label="{[{ category.name }]}">
      
                                  <input name="category-chooser"
                                      value="{[{ category.customer_category_pk }]}"
                                      ng-model="chooserModel.chosenCategory.value"
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
                                      ng-model="chooserModel.chosenCategory.value"
                                      type="radio">
                              </input-radio>
                          </div>
                      </div>
                  </div>
      
                  <div class="T3-S request-form__validation-error"
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
          </request-form-template>
      
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
          class="request-form__contained-answers"
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
                                      ng-attr-placeholder="{[{ answer.label }]}"
                                      class="InputCheckbox-label-inner">
                              </label>
                          </input-checkbox>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      
      <div class="T3-S request-form__validation-error"
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
          class="request-form__contained-answers"
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
                                      ng-attr-placeholder="{[{ answer.label }]}" />
                              </label>
                          </input-radio>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      
      <div class="T3-S request-form__validation-error"
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
                                          ng-attr-placeholder="{[{ answer.label }]}" />
                                  </label>
                              </input-checkbox>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      
      <div class="T3-S request-form__validation-error"
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
                                          ng-attr-placeholder="{[{ answer.label }]}" />
                                  </label>
                              </input-radio>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      
      <div class="T3-S request-form__validation-error"
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
                  ng-attr-placeholder="{[{ question.field.placeholder }]}" />
      
              <input
                  ng-if="!question.field.multi_line"
                                  ng-model="$model.questions[question.field.id].description"
                  name="metadata_{[{ question.field.id }]}"
                  type="text"
                  ng-attr-placeholder="{[{ question.field.placeholder }]}" />
          </div>
      </div>
      
      <div class="T3-S request-form__validation-error"
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
      
              <request-form-template template-id="template-request-form-section-content">
                  <request-form-template template-id="template-request-form-section-header"
                      scope-vars="isThemeSmaller"
                      is-theme-smaller="$question.tooltip">
      
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
              </request-form-template>
      
              <request-form-template
                  template-id="template-request-form-navigation"
                  scope-vars="hideBack,continueText"
                  continue-text="
                      $question.field.required || isAnswered($model.questions[$question.field.id])
                          ? 'Next'
                          : 'Skip'
                  "
                  hide-back="$first && requestForm.categories.length === 1 && requestForm.options.hideIntroScreen
                      && !requestForm.shouldShowBackOnFirstSection">
              </request-form-template>
          </fieldset>
      </div>
   </script>
   <script id="template-request-description" type="text/template">
      <request-form-template template-id="template-request-form-section-content"
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
      
                      <div class="T3-S request-form__validation-error"
                          ng-repeat="$err in $validationErrors"
                          ng-bind="$err">
                      </div>
                  </div>
              </div>
          </div>
      </request-form-template>
   </script>
   <script id="template-request-service-location" type="text/template">
      <request-form-template template-id="template-request-form-section-content"
          ng-if="category.travel_types.length > 1"
          schema="requestFormSchema.location.serviceLocation"
          schema-assign="CheckboxArrayInputSchema"
          schema-default="{ toprovider: true, tocustomer: true }">
      
          <div ng-class="{'valid': $valid, 'invalid': $valid === false}">
              <request-form-template template-id="template-request-form-section-header">
                  How would you like to work with the
                  {[{ requestForm.taxonymInfo.sentence_taxonym }]}?
              </request-form-template>
      
              <div class="request-form__contained-answers">
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
              </div>
      
              <div class="page-grid">
                  <div class="column-lg-6">
                      <div class="T3-S request-form__validation-error"
                          ng-repeat="$err in $validationErrors"
                          ng-bind="$err">
                      </div>
                  </div>
              </div>
          </div>
      </request-form-template>
   </script>
   <script id="template-request-service-location-distance-standalone" type="text/template">
      <request-form-template template-id="template-request-form-section-content">
          <request-form-template template-id="template-request-form-section-header">
              How far are you willing to travel?
          </request-form-template>
      
          <div class="page-grid">
              <div class="column-lg-6">
                  <request-form-template template-id="template-request-service-location-distance">
                  </request-form-template>
      
                  <div class="T3-S request-form__validation-error"
                      ng-repeat="$err in $validationErrors"
                      ng-bind="$err">
                  </div>
              </div>
          </div>
      </request-form-template>
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
      <request-form-template template-id="template-request-form-section-content">
          <request-form-template template-id="template-request-form-section-header">
              {[{
                  category.image_upload_question_copy
                  || "Would you like to add photos to describe your project?"
              }]}
          </request-form-template>
      
          <div class="request-form__contained-answers">
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
                              <loading-dots></loading-dots>
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
      
          <div class="T3-S request-form__validation-error"
              ng-repeat="$err in requestForm.imageUploadErrors"
              ng-bind="$err">
          </div>
      </request-form-template>
   </script>
   <script id="template-request-scheduling-event" type="text/template">
      <request-form-template template-id="template-request-form-section-content">
          <request-form-template template-id="template-request-form-section-header">
              What day do you need the {[{ requestForm.taxonymInfo.sentence_name }]}?
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
      
              <div class="T3-S request-form__validation-error"
                  ng-repeat="$err in $validationErrors"
                  ng-bind="$err">
              </div>
          </div>
      </request-form-template>
   </script>
   <script id="template-request-scheduling-event-time" type="text/template">
      <request-form-template template-id="template-request-form-section-content">
          <request-form-template
              template-id="template-request-form-section-header">
      
              What time do you need the {[{ requestForm.taxonymInfo.sentence_name }]}?
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
                          schema-default="schedulingHandler.defaultSelectedTime"
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
      
                          <div class="T3-S request-form__validation-error"
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
      </request-form-template>
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
      
          <div class="T3-S request-form__validation-error"
              ng-repeat="$err in $validationErrors"
              ng-bind="$err">
          </div>
      </div>
   </script>
   <script id="template-request-scheduling-multi-cadence" type="text/template">
      <request-form-template template-id="template-request-form-section-content">
          <request-form-template
              ng-if="schedulingHandler.schedulingArchetype === 'multi_recurring'"
              template-id="template-request-form-section-header">
      
              How often do you need the {[{ requestForm.taxonymInfo.sentence_name }]}?
          </request-form-template>
          <request-form-template
              ng-if="schedulingHandler.schedulingArchetype === 'multi_mixed'"
              template-id="template-request-form-section-header">
      
              Will you need {[{ requestForm.taxonymInfo.sentence_name }]} more than once?
          </request-form-template>
      
          <div
              ng-if="activeSection.id === 'cadence'"
              event-track="request form/view scheduling cadence preference"
              event-track-on-init
              event-track-data="trackingData.getSchedulingDefault(requestForm)"></div>
      
          <div
              class="request-form__contained-answers"
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
      
          <div class="T3-S request-form__validation-error"
              ng-repeat="$err in $validationErrors"
              ng-bind="$err">
          </div>
      </request-form-template>
   </script>
   <script id="template-request-scheduling-multi-cadence-days-times" type="text/template">
      <request-form-template template-id="template-request-form-section-content">
          <request-form-template
              template-id="template-request-form-section-header">
      
              When do you need this service?
      
              <div class="B2-S">
                  Select all the times that work for you.
              </div>
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
              class="request-form__contained-answers"
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
      
              <div class="T3-S request-form__validation-error"
                  ng-repeat="$err in $validationErrors"
                  ng-bind="$err">
              </div>
          </div>
      </request-form-template>
   </script>
   <script id="template-request-scheduling-multi" type="text/template">
      <request-form-template template-id="template-request-form-section-content">
          <request-form-template
              ng-if="schedulingHandler.schedulingArchetype === 'multi_nonrecurring'
                  || (schedulingHandler.schedulingArchetype === 'multi_mixed'
                  && $model.cadence.cadencePreference === 'just_once')"
              template-id="template-request-form-section-header">
      
              When would you like the {[{ requestForm.taxonymInfo.sentence_name }]}?
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
              class="request-form__contained-answers"
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
      
          <div class="T3-S request-form__validation-error"
              ng-repeat="$err in $validationErrors"
              ng-bind="$err">
          </div>
      </request-form-template>
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
      <request-form-template template-id="template-request-form-section-content">
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
              class="request-form__contained-answers"
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
      
              <div class="T3-S request-form__validation-error"
                  ng-repeat="$err in $validationErrors"
                  ng-bind="$err">
              </div>
          </div>
      </request-form-template>
   </script>
   <script id="template-request-scheduling-timeslots-specific" type="text/template">
      <request-form-template template-id="template-request-form-section-content">
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
              class="request-form__contained-answers"
              schema="requestFormSchema.timeslots.specific"
              schema-assign="CalendarTimeslotSchema">
      
              <div ng-repeat="dateObj in $model.scheduling.selectedDays"
                  ng-init="specificTimeslots = schedulingHandler.generateSpecificTimeslots(dateObj)">
      
                  <div class="RequestForm-schedulingTimeslotsLabel T3-S"
                      ng-class="{ 'first-date': $first }"
                      ng-init="dateLabel = schedulingHandler.generateSplitDateLabel(dateObj)">
      
                      {[{ dateLabel.day }]}, {[{ dateLabel.date }]}
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
      
              <div class="T3-S request-form__validation-error"
                  ng-repeat="$err in $validationErrors"
                  ng-bind="$err">
              </div>
          </div>
      </request-form-template>
   </script>
   <script id="template-request-scheduling" type="text/template">
      <request-form-template template-id="template-request-form-section-content">
          <request-form-template template-id="template-request-form-section-header">
              When do you need {[{ requestForm.taxonymInfo.sentence_name }]}?
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
      
                          <div class="T3-S request-form__validation-error"
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
      </request-form-template>
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
                          "What day do you need the "
                          + requestForm.taxonymInfo.sentence_taxonym + "?"
                          }]}
                      </label>
      
                      <input
                          date-picker
                          id="scheduling-date"
                          placeholder="Click to pick a date"
                          ng-model="$model.scheduling.scheduling.date"
                          type="text"
                          readonly="readonly">
      
                      <div class="T3-S request-form__validation-error"
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
      
                      <div class="T3-S request-form__validation-error"
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
      
                      <div class="T3-S request-form__validation-error"
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
                  pattern="\d*" />
      
              <div
                  class="T3-S request-form__validation-error"
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
      
                      <div class="T3-S request-form__validation-error"
                          ng-repeat="$err in $validationErrors"
                          ng-bind="$err">
                      </div>
                  </div>
              </div>
          </div>
      </div>
   </script>
   <script id="template-request-email-instant-everything" type="text/template">
      <request-form-template template-id="template-request-form-section-content">
          <div class="tp-padding--triple">
              <ul class="request-form__instant-everything-email-gate-avatars">
                  <li ng-repeat="icxAvatar in icxAvatars"
                      class="request-form__instant-everything-email-gate-avatar"
                      ng-class="{
                          'request-form__instant-everything-email-gate-avatar--large-overlap':
                              icxAvatars.length === 5,
                          'request-form__instant-everything-email-gate-avatar--small-overlap':
                              icxAvatars.length === 4,
                          'request-form__instant-everything-email-gate-avatar--no-overlap':
                              icxAvatars.length < 4,
                      }">
      
                      <div class="tp-avatar tp-avatar--medium">
                          <img ng-src="{[{ icxAvatar }]}"
                              class="tp-avatar__img"
                              ng-class="request-form__instant-everything-email-gate-avatar-image"
                          />
                      </div>
                  </li>
              </ul>
              <p class="tp-heading-3 tp-weight--normal tp-margin-top"
                  ng-bind="getInstantMatchesText()">
              </p>
              <p class="tp-text-2--static tp-margin-ends--double">
                  Your privacy is important to us. We don't share your email with pros.
              </p>
      
              <input type="hidden" name="req_pk" value="{[{ requestPk }]}"/>
      
              <input
                  schema="requestFormSchema.icxContactInfo.email"
                  schema-assign="EmailSchema"
                  placeholder="Email address"
                  ng-model="$model.icxContactInfo.email"
                  ng-disabled="requestForm.isIcxEmailSectionLoading"
                  event-track="request form/provide email address"
                  event-track-on="blur"
                  event-track-if="$valid && form.usr_email.$dirty"
                  event-track-once
                  event-track-data="trackingData.getDefault()"
                  name="usr_email"
                  type="email">
      
              <input
                  schema="requestFormSchema.icxContactInfo.name"
                  schema-assign="FullNameSchema"
                  class="tp-margin-ends"
                  placeholder="First & last name"
                  ng-model="$model.icxContactInfo.name"
                  ng-disabled="requestForm.isIcxEmailSectionLoading"
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
      
              <div class="T3-S request-form__validation-error"
                  ng-if="$validationErrors.length > 0">
      
                  <div
                      ng-repeat="$err in $validationErrors"
                      ng-bind="$err">
                  </div>
              </div>
          </div>
      
          <div class="request-form__instant-everything-loader"
              ng-if="requestForm.isIcxEmailSectionLoading">
      
              <div class="LoadingPulse"></div>
          </div>
      </request-form-template>
      
      <request-form-template
          ng-if="!requestForm.options.loggedIn"
          scope-vars="continueText,isLastSection"
          is-last-section="true"
          continue-text="'See Pros & Estimates'"
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
                          class="T3-S request-form__validation-error"
                          ng-repeat="$err in $validationErrors"
                          ng-bind="$err">
                      </div>
                  </div>
              </div>
          </div>
      </div>
   </script>
   <script id="template-request-combined-contact-gate" type="text/template">
      <div class="page-grid">
          <div class="column-lg-4 column-lg-offset-1 column-md-6 column-md-offset-0"
              schema-validation-subsection
              schema="requestFormSchema.combinedContact"
              schema-assign="EmptySchema">
      
              
              <div class="T3-S request-form__validation-error"
                  ng-show="$validationErrors.length > 0">
      
                  <div ng-repeat="$err in $validationErrors" ng-bind="$err">
                  </div>
              </div>
          </div>
      </div>
   </script>
   <script id="template-request-form-navigation" type="text/template">
      <div class="request-form__section-footer"
          ng-class="{
              'request-form__section-footer--branded': isBrandedSection
          }">
      
          <div class="request-form__section-footer__inner">
              <button class="Button theme-bold request-form__section-footer__inner__button"
                  ng-class="{
                      'theme-secondary-branded': isBrandedSection
                  }"
                  ng-disabled="requestForm.isIcxEmailSectionLoading"
                  ng-bind="continueText
                      || (isLastSection
                          ? 'Submit'
                          : 'Next')">
              </button>
      
                          <button
                  class="Link request-form__section-footer__skip-button
                      request-form__section-footer__inner__button"
                  ng-if="skipAction"
                  ng-disabled="requestForm.isIcxEmailSectionLoading"
                  ng-click="skipAction()">
      
                  Skip
              </button>
      
              <button
                  ng-hide="hideBack"
                  class="Button theme-bold request-form__section-footer__back-button
                      request-form__section-footer__inner__button"
                  type="button"
                  ng-class="{
                      'theme-empty-branded': isBrandedSection,
                      'theme-tertiary': !isBrandedSection
                  }"
                  ng-disabled="requestForm.isIcxEmailSectionLoading"
                  ng-click="gotoPreviousSection()">
      
                  Back
              </button>
          </div>
      </div>
   </script>
   <script id="template-request-legal-disclaimer-standalone" type="text/template">
      <div class="RequestForm-legalDisclaimer">
          <p class="B5-S theme-secondary"
              event-track="request form/click legal terms of service"
              event-track-on="click">
      
              <span ng-if="requestForm.shouldShowICX()">
              By clicking See Pros &amp; Estimates you agree to the
              </span>
              <span ng-if="!requestForm.shouldShowICX()">
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
   <script id="template-request-explanation" type="text/template">
      <request-form-template template-id="template-request-form-section-content">
          <div class="RequestForm-explanationExperimental">
              <svg-icon
                  ng-if="!isSecondaryRequestForm"
                  type="thumbtack-logo_178x28"
                  alt="Thumbtack"
                  class="RequestForm-thumbtackLogo">
              </svg-icon>
      
              <div ng-if="!isSecondaryRequestForm"
                  tabindex="0"
                  class="RequestForm-explanation-container">
      
                  <p class="tp-heading-3 RequestForm-explanation-pros theme-inverted"
                      ng-bind="requestForm.introPro"></p>
                  <p class="tp-heading-4 RequestForm-explanation-base theme-inverted"
                      ng-bind="requestForm.introScreenCopy"></p>
              </div>
      
              <div ng-if="isSecondaryRequestForm">
                  <div tabindex="0" class="RequestForm-explanation-container">
                      <div class="RequestForm-explanation-containerForSecondary">
                          <div class="RequestForm-explanation-categoryIcon">
                              <svg-icon
                                  type="{[{ categoryIcons[requestForm.activeCategory.id] }]}"
                                  size="md"
                                  disable-sizing
                              >
                              </svg-icon>
                          </div>
                          <div class="tp-heading-3 RequestForm-explanation-textForSecondary">
                              Request sent!
                              {[{ requestForm.lastCategory ? 'Next' : 'Great! First' }]},
                              we'll match you with the right
                              {[{ requestForm.taxonymInfo.taxonym }]} for your big day.
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </request-form-template>
      
      <request-form-template
          template-id="template-request-form-navigation"
          scope-vars="themeInvertedLinks,hideBack,isBrandedSection,continueText"
          theme-inverted-links="{[{ isSecondaryRequestForm ? 'false' : 'true' }]}"
          continue-text="isSecondaryRequestForm ? 'Get Pros' : 'Next'"
          hide-back="!(requestForm.categories.length > 1  || forceShowCategoryChooser)
              && !requestForm.shouldShowBackOnFirstSection"
          is-branded-section="{[{ isSecondaryRequestForm ? 'false' : 'true' }]}"
      >
      </request-form-template>
   </script>
   <script id="template-request-intro-zip-instant-everything" type="text/template">
      <request-form-template template-id="template-request-form-section-content">
          <div class="RequestForm-introZip">
              <div class="RequestForm-introZip-topContainer">
                  <div class="RequestForm-introZip-hero"
                       responsive-image
                       responsive-grid="page"
                       above-sm="{[{ requestForm.options.icxCategoriesData[requestForm.activeCategory.id].hero_desktop }]}"
                       below-sm="{[{ requestForm.options.icxCategoriesData[requestForm.activeCategory.id].hero_mobile }]}">
                  </div>
              </div>
      
              <div class="tp-padding-sides--triple RequestForm-introZip-bottomContainer"
                  schema="requestFormSchema.introZipCode.zipCode"
                  schema-assign="ZipCodeSchema"
                  schema-default="'{[{ zipCode }]}'">
      
                  <div class="tp-heading-3 tp-weight--normal tp-padding-bottom--double">
                      {[{ requestForm.options.icxCategoriesData[requestForm.activeCategory.id].hire_copy }]}– it only takes
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
                      class="T3-S request-form__validation-error"
                      ng-repeat="$err in $validationErrors"
                      ng-bind="$err">
                  </div>
              </div>
          </div>
      </request-form-template>
   </script>
   <script id="template-request-intro-instant-everything" type="text/template">
      <request-form-template template-id="template-request-form-section-content"
          scope-vars="removeBottomPadding"
          remove-bottom-padding="true">
      
          <div class="RequestForm-introMap">
              <div class="tp-padding-sides--triple RequestForm-introMap-topContainer">
                  <div class="tp-heading-3 tp-weight--normal">
                      <span ng-bind="requestForm.taxonymInfo.plural_taxonym"></span>
                      near you:
                  </div>
                  <div class="tp-heading-3 tp-weight--demi tp-color--brand tp-padding-bottom--double"
                      ng-bind="prosCountByZipCode">
                  </div>
                  <div class="tp-text-3--static">
                      With a few more details, we can get the
                      <span class="tp-weight--demi">right pros and cost estimates</span>
                      for your {[{ requestForm.options.icxCategoriesData[requestForm.activeCategory.id].event_name }]}.
                  </div>
              </div>
              <div class="RequestForm-introMap-bottomContainer">
                  <div class="RequestForm-introMap-map"
                       responsive-image
                       responsive-grid="page"
                       above-sm="https://static.thumbtackstatic.com/_assets/images/release/modules/request-form/images/generic-map-desktop-2x-06be9569.jpg"
                       below-sm="https://static.thumbtackstatic.com/_assets/images/release/modules/request-form/images/generic-map-mobile-2x-9469b1e6.jpg">
                  </div>
              </div>
          </div>
      </request-form-template>
   </script>
   <script id="template-request-form-phone-number" type="text/template">
      <div ng-show="isPhoneNumberSubmitting">
          <request-form-template template-id="template-request-form-section-content">
              <div class="RequestForm-loadingIcon">
                  <loading-dots></loading-dots>
              </div>
          </request-form-template>
      
          <div class="request-form__dummy-section-footer"></div>
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
      
              <request-form-template template-id="template-request-form-section-content">
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
      
                          <div class="T3-S request-form__validation-error"
                              ng-repeat="$err in $validationErrors"
                              ng-bind="$err">
                          </div>
      
                          <div ng-if="phoneNumberError" class="T3-S request-form__validation-error"
                              ng-bind="phoneNumberError">
                          </div>
                      </div>
      
                      <div class="column-lg-4 column-lg-offset-1">
                          <input-checkbox
                              input-checkbox-label="{[{
                                      requestForm.taxonymInfo.plural_taxonym
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
              </request-form-template>
      
              <request-form-template
                  template-id="template-request-form-navigation"
                  scope-vars="hideBack,skipAction"
                  hide-back="true"
                  skip-action="skipAddPhoneNumber">
              </request-form-template>
          </form>
      </div>
   </script>
   <script id="template-request-form-login" type="text/template">
      <div class="RequestForm-loginLoader" ng-if="isLoginSectionLoading">
          <loading-dots></loading-dots>
      </div>
      
      <form ng-submit="login($event, loginState.userPassword)"
          ng-init="loginState = { userPassword: '' }">
      
          <request-form-template template-id="template-request-form-section-content"
              scope-vars="centeredContent"
              centered-content="true">
      
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
                              ng-model="loginState.userPassword"
                              ng-change="clearLoginError()"
                              id="password" />
      
                          <div ng-if="loginError" class="T3-S request-form__validation-error" ng-bind="loginError">
                          </div>
                      </div>
                  </div>
              </div>
          </request-form-template>
      
          <request-form-template
              template-id="template-request-form-navigation"
              scope-vars="continueText"
              continue-text="'Done'">
          </request-form-template>
      </form>
   </script>
   <script id="template-request-form" type="text/template">
      <div
          class="RequestForm"
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
      
          <div class="RequestForm-smallLogo"
              ng-show="showTopLeftLogo"
              ng-if="requestForm.shouldShowICX()">
      
              <svg-icon class="RequestForm-smallLogo-icon" type="thumbtack-logo_178x28"></svg-icon>
          </div>
      
          <div class="request-form__persistent-header">
              <div
                  ng-if="requestForm.options.isInModal"
                  class="request-form__close-modal"
                  ng-show="!activeSection.hideCloseButton
                      && !requestForm.isSubmitting
                      && !requestForm.options.hideClose">
      
                  <div ng-if="!activeSection.hideExitConfirmation">
                      <button class="tp-link tp-button--reset request-form__close-modal__icon"
                          ng-class="{
                              'request-form__close-modal__icon--branded':
                                  activeSection.formClass === 'theme-branded'
                          }"
                          modal-standard-launcher
                          ng-disabled="requestForm.isIcxEmailSectionLoading"
                          ng-click="openModalStandard('exit-confirmation')">
      
                          <svg-icon type="close-experimental" size="md"></svg-icon>
                      </button>
                  </div>
                  <div ng-if="activeSection.hideExitConfirmation">
                      <button class="tp-link tp-button--reset request-form__close-modal__icon"
                          ng-class="{
                              'request-form__close-modal__icon--branded':
                                  activeSection.formClass === 'theme-branded'
                          }"
                          ng-click="saveFormProgress()"
                          closes-modal-on-click>
      
                          <svg-icon type="close-experimental" size="md"></svg-icon>
                      </button>
                  </div>
              </div>
      
              <exit-confirmation
                  current-step="currentStep"
                  total-steps="totalSteps"
                  percent-step-interval="requestForm.progressPercentStepInterval"
                  coefficient="requestForm.progressCoefficient"
                  redirect-url="{[{ isSecondaryRequestForm ? redirectUrl : '' }]}"
              >
              </exit-confirmation>
      
              <div ng-hide="activeSection.hideProgressBar || requestForm.isSubmitting">
                  <div class="request-form__progress-container">
                      <progress-bar
                          theme-animated
                          label-threshold="0.7"
                          current-step="currentStep"
                          total-steps="totalSteps"
                          percent-step-interval="requestForm.progressPercentStepInterval"
                          coefficient="requestForm.progressCoefficient"
                          label-prefix="getProgressBarPrefix()"
                      >
                      </progress-bar>
                  </div>
              </div>
      
              <div ng-show="activeSection.showTopLogo && !requestForm.isSubmitting">
                  <div class="RequestForm-topLogo">
                      <svg-icon type="thumbtack-logo_178x28"></svg-icon>
                  </div>
              </div>
          </div>
      
          <div ng-if="requestForm.generalError" class="page-grid">
              <div class="column-lg-6">
                  <div class="RequestForm-generalError T2-S" ng-bind="requestForm.generalError"></div>
              </div>
          </div>
      
          <div ng-show="!activeSection.id || (
                  requestForm.categories &&
                  requestForm.activeCategory.id &&
                  !requestForm.form
              )">
      
              <request-form-template template-id="template-request-form-section-content">
                  <div class="RequestForm-loadingIcon">
                      <loading-dots></loading-dots>
                  </div>
              </request-form-template>
      
              <div class="request-form__dummy-section-footer"></div>
          </div>
      
          <div ng-if="requestForm.isSubmitting">
              <request-form-template template-id="template-request-form-section-content"
                  scope-vars="centeredContent"
                  centered-content="true">
      
                  <div ng-if="requestForm.shouldShowICX()" class="RequestForm-loadingIcon">
                      <loading-dots></loading-dots>
                  </div>
                  <div ng-if="!requestForm.shouldShowICX()">
                                  
      
      
      
      
      
      
      
      <post-request-interstitial >
      <div class="PostRequestInterstitial theme-branded">
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
              </request-form-template>
      
              <div class="request-form__dummy-section-footer"></div>
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
                                          ? handleSubmit($event, $model.icxContactInfo.email || $model.contactInfo.email)
                                          : false">
      
                  <input type="hidden" name="req_source" value="{[{ requestSource }]}"/>
                  <input type="hidden" name="request_origin" value="{[{ requestOrigin }]}"/>
                  <input type="hidden" name="rca" value="{[{ requestForm.activeCategory.id }]}"/>
                  <input type="hidden" name="rfo" value="{[{ requestForm.form.encoded_form_id }]}"/>
                  <input type="hidden" name="sav" value="{[{ encodedServiceId }]}"/>
                  <input type="hidden" name="device_fingerprint" value="{[{ requestForm.deviceFingerprint }]}"/>
                  <input type="hidden" name="threatmetrix_session_id" value="{[{ requestForm.threatmetrixSessionId }]}"/>
                  <input type="hidden" name="customer_category_pk"
                      value="{[{ requestForm.activeCustomerCategoryPk }]}"/>
      
                  <input type="hidden" name="req_zip_code_id" value="{[{ zipCode }]}"
                      ng-if="requestForm.shouldShowICX() && requestForm.options.hideIcxZipCodeSection"
                  />
                  <div
                      ng-if="requestForm.shouldShowICX() &&
                          !requestForm.options.hideIcxZipCodeSection"
                      ng-show="activeSection.id === 'introZipCode'"
                      request-form-section="'introZipCode'"
                      hide-progress-bar="true"
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
      
                      <request-form-template
                          template-id="template-request-form-navigation"
                          scope-vars="hideBack"
                          hide-back="!(requestForm.categories.length > 1)">
                      </request-form-template>
                  </div>
      
                  <div
                      ng-if="!requestForm.options.hideIntroScreen && requestForm.shouldShowICX()"
                      ng-show="activeSection.id === 'explanationIntro'"
                      request-form-section="'explanationIntro'"
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
      
                      <request-form-template
                          scope-vars="hideBack"
                          hide-back="requestForm.options.hideIcxZipCodeSection"
                          template-id="template-request-form-navigation">
                      </request-form-template>
                  </div>
                  <div
                      ng-if="!requestForm.options.hideIntroScreen && !requestForm.shouldShowICX()"
                      ng-show="activeSection.id === 'explanationIntro'"
                      request-form-section="'explanationIntro'"
                      form-class-when-visible="isSecondaryRequestForm ? '' : 'theme-branded'"
                      is-branded-section="true"
                      hide-progress-bar="true"
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
                      <request-form-template template-id="template-request-questions">
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
                      ng-if="!requestForm.shouldShowICX()"
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
      
                      <request-form-template template-id="template-request-form-section-content">
                          <request-form-template template-id="template-request-form-section-header">
                              Please confirm where you need the
                              {[{ requestForm.taxonymInfo.sentence_taxonym }]}.
                          </request-form-template>
      
                          <request-form-template
                              template-id="template-request-zip-code"
                              class="RequestForm-standaloneInputSection">
                          </request-form-template>
      
                          <request-form-template
                              ng-if="requestForm.options.loggedIn"
                              template-id="template-request-legal-disclaimer-standalone">
                          </request-form-template>
                      </request-form-template>
      
                      <request-form-template
                          template-id="template-request-form-navigation"
                          scope-vars="isLastSection"
                          is-last-section="requestForm.options.loggedIn">
                      </request-form-template>
                  </div>
      
                  <div
                      ng-if="(!requestForm.options.loggedIn && !removeFindProsAnimation) ||
                          (requestForm.options.loggedIn && requestForm.shouldShowICX())"
                      ng-show="activeSection.id === 'findProsAnimation'"
                      form-class-when-visible="'theme-find-pros-animation'"
                      hide-progress-bar="true"
                      show-top-logo="true"
                      hide-close-button="true"
                      is-loading-section="true"
                      request-form-section="'findProsAnimation'">
      
                      <request-form-template template-id="template-request-form-section-content">
                                      <div class="find-pros-animation">
      <div class="find-pros-animation__stage">
          <div class="find-pros-animation__circle3 find-pros-animation--center"></div>
          <div class="find-pros-animation__circle2 find-pros-animation--center"></div>
          <div class="find-pros-animation__circle1 find-pros-animation--center"></div>
      
          <div class="find-pros-animation__request-form-container">
              <img src="https://static.thumbtackstatic.com/_assets/images/release/modules/find-pros-animation/images/request-form-abfd1994.svg"
                  class="find-pros-animation__request-form find-pros-animation--center">
      
              <img src="https://static.thumbtackstatic.com/_assets/images/release/modules/find-pros-animation/images/check-a3fdc2b6.svg"
                  class="find-pros-animation__check">
          </div>
      
          <div class="find-pros-animation__tile1">
              <img src="https://static.thumbtackstatic.com/_assets/images/release/modules/find-pros-animation/images/quote-19136037.svg"
                  class="find-pros-animation__quote">
      
              <img src="https://static.thumbtackstatic.com/_assets/images/release/modules/find-pros-animation/images/avatar-male-acf57e11.svg"
                  class="find-pros-animation__avatar1">
          </div>
      
          <div class="find-pros-animation__tile2">
              <img src="https://static.thumbtackstatic.com/_assets/images/release/modules/find-pros-animation/images/quote-19136037.svg"
                  class="find-pros-animation__quote">
      
              <img src="https://static.thumbtackstatic.com/_assets/images/release/modules/find-pros-animation/images/avatar-male-acf57e11.svg"
                  class="find-pros-animation__avatar2">
          </div>
      
          <div class="find-pros-animation__tile3">
              <img src="https://static.thumbtackstatic.com/_assets/images/release/modules/find-pros-animation/images/quote-19136037.svg"
                  class="find-pros-animation__quote">
      
              <img src="https://static.thumbtackstatic.com/_assets/images/release/modules/find-pros-animation/images/avatar-female-ff47943c.svg"
                  class="find-pros-animation__avatar3">
          </div>
      </div>
      <div class="find-pros-animation__text H4-R">
          <p>Matching your answers with pros.</p>
      </div>
      </div>
      
                      </request-form-template>
      
                      <div class="request-form__dummy-section-footer"></div>
                  </div>
      
                                  <div
                      ng-if="!requestForm.options.loggedIn && requestForm.shouldShowICX()"
                      ng-show="activeSection.id === 'icxEmailGate'"
                      request-form-section="'icxEmailGate'"
                      hide-progress-bar="true"
                      show-top-logo="true"
                      schema-validation-subsection
                      schema="requestFormSchema.icxContactInfo"
                      schema-assign="EmptySchema">
      
                      <div
                          ng-if="activeSection.id === 'icxEmailGate'"
                          event-track="request form/view contact form"
                          event-track-on-init
                          event-track-data="trackingData.viewContactForm()"></div>
      
                      <div
                          ng-if="activeSection.id === 'icxEmailGate'"
                          event-track="request form/view instant matches"
                          event-track-on-init
                          event-track-data="trackingData.viewInstantMatches()"></div>
      
                      <request-form-template
                          template-id="template-request-email-instant-everything">
                      </request-form-template>
                  </div>
      
                  <div
                      ng-if="!requestForm.options.loggedIn && !requestForm.shouldShowICX()"
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
      
                      <request-form-template template-id="template-request-form-section-content"
                          scope-vars="centeredContent"
                          centered-content="true">
      
                          <request-form-template template-id="template-request-form-section-header">
                              We don't share your email with pros.
                          </request-form-template>
      
                          <div class="RequestForm-standaloneInputSection">
                              <request-form-template
                                  template-id="template-request-contact-email"
                                  scope-vars="category"
                                  category="requestForm.activeCategory">
                              </request-form-template>
                          </div>
                      </request-form-template>
      
                      <request-form-template
                          ng-if="!requestForm.options.loggedIn"
                          template-id="template-request-form-navigation">
                      </request-form-template>
                  </div>
      
                  <div
                      ng-if="!requestForm.options.loggedIn && !requestForm.shouldShowICX()"
                      ng-show="activeSection.id === 'fullName'"
                      request-form-section="'fullName'"
                      hide-progress-bar="true"
                      show-top-logo="true"
                      schema-validation-subsection
                      schema="requestFormSchema.fullName"
                      schema-assign="EmptySchema">
      
                      <div
                          ng-if="activeSection.id === 'fullName'"
                          event-track="request form/view name input"
                          event-track-on-init
                          event-track-data="trackingData.getDefault()"></div>
      
                      <request-form-template template-id="template-request-form-section-content"
                          scope-vars="centeredContent"
                          centered-content="true">
      
                          <request-form-template template-id="template-request-form-section-header">
                              Please enter your full name.
                          </request-form-template>
      
                          <request-form-template
                              template-id="template-request-full-name"
                              class="RequestForm-standaloneInputSection">
                          </request-form-template>
      
                          <request-form-template
                              template-id="template-request-legal-disclaimer-standalone">
                          </request-form-template>
                      </request-form-template>
      
                      <request-form-template template-id="template-request-form-navigation"
                          scope-vars="isLastSection"
                          is-last-section="true">
                      </request-form-template>
                  </div>
                  
                              </form>
      
              <div
                  ng-if="!requestForm.options.loggedIn"
                  hide-progress-bar="true"
                  show-top-logo="true"
                  ng-show="activeSection.id === 'login'"
                  request-form-section="'login'">
      
                  <request-form-template template-id="template-request-form-login">
                  </request-form-template>
              </div>
          </div>
      </div>
   </script>
   <script id="template-request-modal" type="text/template">
      <div
          standard-modal
          theme-no-padding="true"
          theme-full-bleed-at-xs="true"
          disable-backdrop-close="true"
          hide-close="true">
      
          <request-form
              form-type="thumbprint"
              zip-code="'{[{ zipCode }]}'"
              query="{[{ query }]}"
              encoded-service-id="{[{ serviceId }]}"
              category-id="{[{ categoryId }]}"
              category-ids="{[{ categoryIds }]}"
              customer-category-pk="{[{ customerCategoryPk }]}"
              from-homepage="{[{ fromHomepage }]}"
                          hercule-version="0"
              hide-intro-screen="
                  {[{ hideIntroScreen }]}
              "
                          fire-submit-request-form-signal="false"
                          intro-emphasize-projects="{[{ introEmphasizeProjects }]}"
              is-in-modal="{[{ isInModal }]}"
              use-unspecified-categories="{[{ useUnspecifiedCategories }]}">
          </request-form>
      </div>
   </script>
   <!-- ngRepeat: quote in cm.quotes -->
   <div ng-repeat="quote in cm.quotes" class="ng-scope">
      <!-- ngIf: quote.hasUnpaidInvoice() -->
      <payment-confirmation-modal modal-id="payment-confirmation-modal-58ubnana" name="" amount="quote.model.invoice.invoice.requestDollarAmount" job-date="quote.model.invoice.invoice.jobDate" class="ng-isolate-scope">
         <modal-standard modal-id="payment-confirmation-modal-58ubnana" class="ng-isolate-scope" style="display: block;">
            <div class="ModalStandard" ng-class="{
               'is-visible': modalStandard.isVisible,
               'theme-opaque': modalStandard.options.themeOpaque,
               'theme-white-background': modalStandard.options.themeWhiteBackground,
               }" backdrop="">
               <button ng-hide="hideClose" class="ModalStandard-close Link" closes-modal-on-click="">
                  <svg-icon type="close" size="sm" class="ng-scope theme-small IconContainer">
                     <svg class="Icon" viewBox="0 0 16 16">
                        <use xlink:href="#thumbprinticon-close_16"></use>
                     </svg>
                  </svg-icon>
               </button>
               <div class="page-grid" backdrop="">
                  <div class="column-lg-4 column-lg-offset-1" backdrop="">
                     <div class="ModalStandard-container" backdrop="">
                        <div class="ModalStandard-contents" ng-transclude="">
                           <div class="PaymentConfirmationModal ng-scope">
                              <div class="PaymentConfirmationModal-title H4-R theme-inverted">
                                 <!-- ngIf: isPro -->
                                 <!-- ngIf: !isPro --><span ng-if="!isPro" class="ng-binding ng-scope">
                                 You've paid  .
                                 </span><!-- end ngIf: !isPro -->
                              </div>
                              <div class="PaymentConfirmationModal-graphic">
                                 <svg-icon type="check_96x72" class="ng-scope IconContainer" style="width: 96px; height: 72px;">
                                    <svg class="Icon" viewBox="0 0 96 72">
                                       <use xlink:href="#thumbprinticon-check_96x72"></use>
                                    </svg>
                                 </svg-icon>
                              </div>
                              <div class="PaymentConfirmationModal-text">
                                 <!-- ngIf: shouldShowAddPayout -->
                                 <!-- ngIf: !isPro -->
                                 <span ng-if="!isPro" class="B2-S theme-inverted ng-scope">
                                    The pro has been notified.
                                    <!-- ngIf: isBeforeJobDate -->
                                 </span>
                                 <!-- end ngIf: !isPro -->
                              </div>
                              <div class="PaymentConfirmationModal-footer">
                                 <!-- ngIf: shouldShowAddPayout -->
                                 <!-- ngIf: shouldShowDone --><button class="Button theme-secondary-success PaymentConfirmationModal-footer-doneButton ng-scope" ng-click="closeModal()" ng-if="shouldShowDone">
                                 Done
                                 </button><!-- end ngIf: shouldShowDone -->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </modal-standard>
      </payment-confirmation-modal>
      <customer-payment-flow quote="quote" request="cm.request" user="cm.user" class="ng-isolate-scope">
         <modal-standard modal-id="customer-init-payment-58ubnana" class="ng-isolate-scope" style="display: block;">
            <div class="ModalStandard" ng-class="{
               'is-visible': modalStandard.isVisible,
               'theme-opaque': modalStandard.options.themeOpaque,
               'theme-white-background': modalStandard.options.themeWhiteBackground,
               }" backdrop="">
               <button ng-hide="hideClose" class="ModalStandard-close Link" closes-modal-on-click="">
                  <svg-icon type="close" size="sm" class="ng-scope theme-small IconContainer">
                     <svg class="Icon" viewBox="0 0 16 16">
                        <use xlink:href="#thumbprinticon-close_16"></use>
                     </svg>
                  </svg-icon>
               </button>
               <div class="page-grid" backdrop="">
                  <div class="column-lg-4 column-lg-offset-1" backdrop="">
                     <div class="ModalStandard-container" backdrop="">
                        <div class="ModalStandard-contents" ng-transclude="">
                           <div class="CustomerPaymentFlow ng-scope" ng-switch="" on="customerPaymentFlow.activePanel">
                              <!-- ngSwitchWhen: tutorial -->
                              <market-payment-tutorial ng-switch-when="tutorial" move-to-next-panel="customerPaymentFlow.moveToMainPanel()" class="ng-scope ng-isolate-scope">
                                 <div class="MarketPaymentTutorial">
                                    <div class="MarketPaymentTutorial-header B1-R theme-inverted">
                                       <span ng-bind="marketPaymentTutorial.isPro
                                          ? 'Get paid the quick and easy way.'
                                          : 'Pay your pro the quick and convenient way.'" class="ng-binding">Pay your pro the quick and convenient way.</span>
                                    </div>
                                    <div class="MarketPaymentTutorial-item">
                                       <div class="MarketPaymentTutorial-icon">
                                          <svg-icon class="MarketPaymentTutorial-cardSvg ng-scope IconContainer" type="card_20x16" style="width: 20px; height: 16px;">
                                             <svg class="Icon" viewBox="0 0 20 16">
                                                <use xlink:href="#thumbprinticon-card_20x16"></use>
                                             </svg>
                                          </svg-icon>
                                       </div>
                                       <div class="MarketPaymentTutorial-copy T2-S theme-inverted">
                                          <span ng-bind="marketPaymentTutorial.isPro
                                             ? 'Funds are securely deposited into your bank account'
                                             : 'Pay with a credit or debit card'" class="ng-binding">Pay with a credit or debit card</span>
                                       </div>
                                    </div>
                                    <div class="MarketPaymentTutorial-item">
                                       <div class="MarketPaymentTutorial-icon">
                                          <svg-icon class="MarketPaymentTutorial-lockSvg ng-scope IconContainer" type="padlock_14x20" style="width: 14px; height: 20px;">
                                             <svg class="Icon" viewBox="0 0 14 20">
                                                <use xlink:href="#thumbprinticon-padlock_14x20"></use>
                                             </svg>
                                          </svg-icon>
                                       </div>
                                       <div class="MarketPaymentTutorial-copy T2-S theme-inverted">
                                          <span ng-bind="marketPaymentTutorial.isPro
                                             ? 'Sensitive data is encrypted and protected'
                                             : 'Sensitive data is encrypted and secure'" class="ng-binding">Sensitive data is encrypted and secure</span>
                                       </div>
                                    </div>
                                    <div class="MarketPaymentTutorial-item">
                                       <div class="MarketPaymentTutorial-icon">
                                          <svg-icon class="MarketPaymentTutorial-checkSvg ng-scope IconContainer" type="check_18x14" style="width: 18px; height: 14px;">
                                             <svg class="Icon" viewBox="0 0 18 14">
                                                <use xlink:href="#thumbprinticon-check_18x14"></use>
                                             </svg>
                                          </svg-icon>
                                       </div>
                                       <div class="MarketPaymentTutorial-copy T2-S theme-inverted">
                                          <span ng-bind="marketPaymentTutorial.isPro
                                             ? 'Low service fee of only 2.5%'
                                             : 'No added fees'" class="ng-binding">No added fees</span>
                                       </div>
                                    </div>
                                    <div class="MarketPaymentTutorial-itemSection">
                                    </div>
                                    <div class="MarketPaymentTutorial-button">
                                       <div class="Button theme-secondary-branded theme-large" ng-click="moveToNextPanel()">
                                          <span ng-bind="marketPaymentTutorial.isPro
                                             ? 'Get Started'
                                             : 'Continue'" class="ng-binding">Continue</span>
                                       </div>
                                    </div>
                                 </div>
                              </market-payment-tutorial>
                              <!-- ngSwitchWhen: main -->
                              <!-- ngSwitchWhen: pay -->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </modal-standard>
         <banner-alert theme="caution" banner-id="customer-payment-stripe-error-58ubnana" is-permanent="" hidden-by-default="" class="ng-isolate-scope">
            <div class="BannerAlert is-hidden">
               <div class="BannerAlert-body theme-caution">
                  <div class="icon closeIcon" ng-class="{'close-aligned-left': banner.closeAlignedLeft}" ng-click="banner.dismiss()" ng-hide="banner.disableClose">
                     <svg-icon type="close" size="sm" class="ng-scope theme-small IconContainer">
                        <svg class="Icon" viewBox="0 0 16 16">
                           <use xlink:href="#thumbprinticon-close_16"></use>
                        </svg>
                     </svg-icon>
                  </div>
                  <div class="BannerAlert-content T3-R theme-inverted" ng-transclude=""><span class="ng-scope">
                     There was a problem with your credit card.
                     Please double-check your information and try again.
                     </span>
                  </div>
               </div>
            </div>
         </banner-alert>
         <banner-alert theme="caution" banner-id="customer-payment-server-error-58ubnana" is-permanent="" hidden-by-default="" class="ng-isolate-scope">
            <div class="BannerAlert is-hidden">
               <div class="BannerAlert-body theme-caution">
                  <div class="icon closeIcon" ng-class="{'close-aligned-left': banner.closeAlignedLeft}" ng-click="banner.dismiss()" ng-hide="banner.disableClose">
                     <svg-icon type="close" size="sm" class="ng-scope theme-small IconContainer">
                        <svg class="Icon" viewBox="0 0 16 16">
                           <use xlink:href="#thumbprinticon-close_16"></use>
                        </svg>
                     </svg-icon>
                  </div>
                  <div class="BannerAlert-content T3-R theme-inverted" ng-transclude=""><span class="ng-scope">
                     We're sorry, but we couldn't process your request at this time.
                     Please try again later.
                     </span>
                  </div>
               </div>
            </div>
         </banner-alert>
      </customer-payment-flow>
   </div>
   <!-- end ngRepeat: quote in cm.quotes -->
   <div ng-repeat="quote in cm.quotes" class="ng-scope">
      <!-- ngIf: quote.hasUnpaidInvoice() -->
      <payment-confirmation-modal modal-id="payment-confirmation-modal-ugt352rd" name="" amount="quote.model.invoice.invoice.requestDollarAmount" job-date="quote.model.invoice.invoice.jobDate" class="ng-isolate-scope">
         <modal-standard modal-id="payment-confirmation-modal-ugt352rd" class="ng-isolate-scope" style="display: block;">
            <div class="ModalStandard" ng-class="{
               'is-visible': modalStandard.isVisible,
               'theme-opaque': modalStandard.options.themeOpaque,
               'theme-white-background': modalStandard.options.themeWhiteBackground,
               }" backdrop="">
               <button ng-hide="hideClose" class="ModalStandard-close Link" closes-modal-on-click="">
                  <svg-icon type="close" size="sm" class="ng-scope theme-small IconContainer">
                     <svg class="Icon" viewBox="0 0 16 16">
                        <use xlink:href="#thumbprinticon-close_16"></use>
                     </svg>
                  </svg-icon>
               </button>
               <div class="page-grid" backdrop="">
                  <div class="column-lg-4 column-lg-offset-1" backdrop="">
                     <div class="ModalStandard-container" backdrop="">
                        <div class="ModalStandard-contents" ng-transclude="">
                           <div class="PaymentConfirmationModal ng-scope">
                              <div class="PaymentConfirmationModal-title H4-R theme-inverted">
                                 <!-- ngIf: isPro -->
                                 <!-- ngIf: !isPro --><span ng-if="!isPro" class="ng-binding ng-scope">
                                 You've paid  .
                                 </span><!-- end ngIf: !isPro -->
                              </div>
                              <div class="PaymentConfirmationModal-graphic">
                                 <svg-icon type="check_96x72" class="ng-scope IconContainer" style="width: 96px; height: 72px;">
                                    <svg class="Icon" viewBox="0 0 96 72">
                                       <use xlink:href="#thumbprinticon-check_96x72"></use>
                                    </svg>
                                 </svg-icon>
                              </div>
                              <div class="PaymentConfirmationModal-text">
                                 <!-- ngIf: shouldShowAddPayout -->
                                 <!-- ngIf: !isPro -->
                                 <span ng-if="!isPro" class="B2-S theme-inverted ng-scope">
                                    The pro has been notified.
                                    <!-- ngIf: isBeforeJobDate -->
                                 </span>
                                 <!-- end ngIf: !isPro -->
                              </div>
                              <div class="PaymentConfirmationModal-footer">
                                 <!-- ngIf: shouldShowAddPayout -->
                                 <!-- ngIf: shouldShowDone --><button class="Button theme-secondary-success PaymentConfirmationModal-footer-doneButton ng-scope" ng-click="closeModal()" ng-if="shouldShowDone">
                                 Done
                                 </button><!-- end ngIf: shouldShowDone -->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </modal-standard>
      </payment-confirmation-modal>
      <customer-payment-flow quote="quote" request="cm.request" user="cm.user" class="ng-isolate-scope">
         <modal-standard modal-id="customer-init-payment-ugt352rd" class="ng-isolate-scope" style="display: block;">
            <div class="ModalStandard" ng-class="{
               'is-visible': modalStandard.isVisible,
               'theme-opaque': modalStandard.options.themeOpaque,
               'theme-white-background': modalStandard.options.themeWhiteBackground,
               }" backdrop="">
               <button ng-hide="hideClose" class="ModalStandard-close Link" closes-modal-on-click="">
                  <svg-icon type="close" size="sm" class="ng-scope theme-small IconContainer">
                     <svg class="Icon" viewBox="0 0 16 16">
                        <use xlink:href="#thumbprinticon-close_16"></use>
                     </svg>
                  </svg-icon>
               </button>
               <div class="page-grid" backdrop="">
                  <div class="column-lg-4 column-lg-offset-1" backdrop="">
                     <div class="ModalStandard-container" backdrop="">
                        <div class="ModalStandard-contents" ng-transclude="">
                           <div class="CustomerPaymentFlow ng-scope" ng-switch="" on="customerPaymentFlow.activePanel">
                              <!-- ngSwitchWhen: tutorial -->
                              <market-payment-tutorial ng-switch-when="tutorial" move-to-next-panel="customerPaymentFlow.moveToMainPanel()" class="ng-scope ng-isolate-scope">
                                 <div class="MarketPaymentTutorial">
                                    <div class="MarketPaymentTutorial-header B1-R theme-inverted">
                                       <span ng-bind="marketPaymentTutorial.isPro
                                          ? 'Get paid the quick and easy way.'
                                          : 'Pay your pro the quick and convenient way.'" class="ng-binding">Pay your pro the quick and convenient way.</span>
                                    </div>
                                    <div class="MarketPaymentTutorial-item">
                                       <div class="MarketPaymentTutorial-icon">
                                          <svg-icon class="MarketPaymentTutorial-cardSvg ng-scope IconContainer" type="card_20x16" style="width: 20px; height: 16px;">
                                             <svg class="Icon" viewBox="0 0 20 16">
                                                <use xlink:href="#thumbprinticon-card_20x16"></use>
                                             </svg>
                                          </svg-icon>
                                       </div>
                                       <div class="MarketPaymentTutorial-copy T2-S theme-inverted">
                                          <span ng-bind="marketPaymentTutorial.isPro
                                             ? 'Funds are securely deposited into your bank account'
                                             : 'Pay with a credit or debit card'" class="ng-binding">Pay with a credit or debit card</span>
                                       </div>
                                    </div>
                                    <div class="MarketPaymentTutorial-item">
                                       <div class="MarketPaymentTutorial-icon">
                                          <svg-icon class="MarketPaymentTutorial-lockSvg ng-scope IconContainer" type="padlock_14x20" style="width: 14px; height: 20px;">
                                             <svg class="Icon" viewBox="0 0 14 20">
                                                <use xlink:href="#thumbprinticon-padlock_14x20"></use>
                                             </svg>
                                          </svg-icon>
                                       </div>
                                       <div class="MarketPaymentTutorial-copy T2-S theme-inverted">
                                          <span ng-bind="marketPaymentTutorial.isPro
                                             ? 'Sensitive data is encrypted and protected'
                                             : 'Sensitive data is encrypted and secure'" class="ng-binding">Sensitive data is encrypted and secure</span>
                                       </div>
                                    </div>
                                    <div class="MarketPaymentTutorial-item">
                                       <div class="MarketPaymentTutorial-icon">
                                          <svg-icon class="MarketPaymentTutorial-checkSvg ng-scope IconContainer" type="check_18x14" style="width: 18px; height: 14px;">
                                             <svg class="Icon" viewBox="0 0 18 14">
                                                <use xlink:href="#thumbprinticon-check_18x14"></use>
                                             </svg>
                                          </svg-icon>
                                       </div>
                                       <div class="MarketPaymentTutorial-copy T2-S theme-inverted">
                                          <span ng-bind="marketPaymentTutorial.isPro
                                             ? 'Low service fee of only 2.5%'
                                             : 'No added fees'" class="ng-binding">No added fees</span>
                                       </div>
                                    </div>
                                    <div class="MarketPaymentTutorial-itemSection">
                                    </div>
                                    <div class="MarketPaymentTutorial-button">
                                       <div class="Button theme-secondary-branded theme-large" ng-click="moveToNextPanel()">
                                          <span ng-bind="marketPaymentTutorial.isPro
                                             ? 'Get Started'
                                             : 'Continue'" class="ng-binding">Continue</span>
                                       </div>
                                    </div>
                                 </div>
                              </market-payment-tutorial>
                              <!-- ngSwitchWhen: main -->
                              <!-- ngSwitchWhen: pay -->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </modal-standard>
         <banner-alert theme="caution" banner-id="customer-payment-stripe-error-ugt352rd" is-permanent="" hidden-by-default="" class="ng-isolate-scope">
            <div class="BannerAlert is-hidden">
               <div class="BannerAlert-body theme-caution">
                  <div class="icon closeIcon" ng-class="{'close-aligned-left': banner.closeAlignedLeft}" ng-click="banner.dismiss()" ng-hide="banner.disableClose">
                     <svg-icon type="close" size="sm" class="ng-scope theme-small IconContainer">
                        <svg class="Icon" viewBox="0 0 16 16">
                           <use xlink:href="#thumbprinticon-close_16"></use>
                        </svg>
                     </svg-icon>
                  </div>
                  <div class="BannerAlert-content T3-R theme-inverted" ng-transclude=""><span class="ng-scope">
                     There was a problem with your credit card.
                     Please double-check your information and try again.
                     </span>
                  </div>
               </div>
            </div>
         </banner-alert>
         <banner-alert theme="caution" banner-id="customer-payment-server-error-ugt352rd" is-permanent="" hidden-by-default="" class="ng-isolate-scope">
            <div class="BannerAlert is-hidden">
               <div class="BannerAlert-body theme-caution">
                  <div class="icon closeIcon" ng-class="{'close-aligned-left': banner.closeAlignedLeft}" ng-click="banner.dismiss()" ng-hide="banner.disableClose">
                     <svg-icon type="close" size="sm" class="ng-scope theme-small IconContainer">
                        <svg class="Icon" viewBox="0 0 16 16">
                           <use xlink:href="#thumbprinticon-close_16"></use>
                        </svg>
                     </svg-icon>
                  </div>
                  <div class="BannerAlert-content T3-R theme-inverted" ng-transclude=""><span class="ng-scope">
                     We're sorry, but we couldn't process your request at this time.
                     Please try again later.
                     </span>
                  </div>
               </div>
            </div>
         </banner-alert>
      </customer-payment-flow>
   </div>
   <!-- end ngRepeat: quote in cm.quotes -->
   <div ng-repeat="quote in cm.quotes" class="ng-scope">
      <!-- ngIf: quote.hasUnpaidInvoice() -->
      <payment-confirmation-modal modal-id="payment-confirmation-modal-cb5dfr33" name="" amount="quote.model.invoice.invoice.requestDollarAmount" job-date="quote.model.invoice.invoice.jobDate" class="ng-isolate-scope">
         <modal-standard modal-id="payment-confirmation-modal-cb5dfr33" class="ng-isolate-scope" style="display: block;">
            <div class="ModalStandard" ng-class="{
               'is-visible': modalStandard.isVisible,
               'theme-opaque': modalStandard.options.themeOpaque,
               'theme-white-background': modalStandard.options.themeWhiteBackground,
               }" backdrop="">
               <button ng-hide="hideClose" class="ModalStandard-close Link" closes-modal-on-click="">
                  <svg-icon type="close" size="sm" class="ng-scope theme-small IconContainer">
                     <svg class="Icon" viewBox="0 0 16 16">
                        <use xlink:href="#thumbprinticon-close_16"></use>
                     </svg>
                  </svg-icon>
               </button>
               <div class="page-grid" backdrop="">
                  <div class="column-lg-4 column-lg-offset-1" backdrop="">
                     <div class="ModalStandard-container" backdrop="">
                        <div class="ModalStandard-contents" ng-transclude="">
                           <div class="PaymentConfirmationModal ng-scope">
                              <div class="PaymentConfirmationModal-title H4-R theme-inverted">
                                 <!-- ngIf: isPro -->
                                 <!-- ngIf: !isPro --><span ng-if="!isPro" class="ng-binding ng-scope">
                                 You've paid  .
                                 </span><!-- end ngIf: !isPro -->
                              </div>
                              <div class="PaymentConfirmationModal-graphic">
                                 <svg-icon type="check_96x72" class="ng-scope IconContainer" style="width: 96px; height: 72px;">
                                    <svg class="Icon" viewBox="0 0 96 72">
                                       <use xlink:href="#thumbprinticon-check_96x72"></use>
                                    </svg>
                                 </svg-icon>
                              </div>
                              <div class="PaymentConfirmationModal-text">
                                 <!-- ngIf: shouldShowAddPayout -->
                                 <!-- ngIf: !isPro -->
                                 <span ng-if="!isPro" class="B2-S theme-inverted ng-scope">
                                    The pro has been notified.
                                    <!-- ngIf: isBeforeJobDate -->
                                 </span>
                                 <!-- end ngIf: !isPro -->
                              </div>
                              <div class="PaymentConfirmationModal-footer">
                                 <!-- ngIf: shouldShowAddPayout -->
                                 <!-- ngIf: shouldShowDone --><button class="Button theme-secondary-success PaymentConfirmationModal-footer-doneButton ng-scope" ng-click="closeModal()" ng-if="shouldShowDone">
                                 Done
                                 </button><!-- end ngIf: shouldShowDone -->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </modal-standard>
      </payment-confirmation-modal>
      <customer-payment-flow quote="quote" request="cm.request" user="cm.user" class="ng-isolate-scope">
         <modal-standard modal-id="customer-init-payment-cb5dfr33" class="ng-isolate-scope" style="display: block;">
            <div class="ModalStandard" ng-class="{
               'is-visible': modalStandard.isVisible,
               'theme-opaque': modalStandard.options.themeOpaque,
               'theme-white-background': modalStandard.options.themeWhiteBackground,
               }" backdrop="">
               <button ng-hide="hideClose" class="ModalStandard-close Link" closes-modal-on-click="">
                  <svg-icon type="close" size="sm" class="ng-scope theme-small IconContainer">
                     <svg class="Icon" viewBox="0 0 16 16">
                        <use xlink:href="#thumbprinticon-close_16"></use>
                     </svg>
                  </svg-icon>
               </button>
               <div class="page-grid" backdrop="">
                  <div class="column-lg-4 column-lg-offset-1" backdrop="">
                     <div class="ModalStandard-container" backdrop="">
                        <div class="ModalStandard-contents" ng-transclude="">
                           <div class="CustomerPaymentFlow ng-scope" ng-switch="" on="customerPaymentFlow.activePanel">
                              <!-- ngSwitchWhen: tutorial -->
                              <market-payment-tutorial ng-switch-when="tutorial" move-to-next-panel="customerPaymentFlow.moveToMainPanel()" class="ng-scope ng-isolate-scope">
                                 <div class="MarketPaymentTutorial">
                                    <div class="MarketPaymentTutorial-header B1-R theme-inverted">
                                       <span ng-bind="marketPaymentTutorial.isPro
                                          ? 'Get paid the quick and easy way.'
                                          : 'Pay your pro the quick and convenient way.'" class="ng-binding">Pay your pro the quick and convenient way.</span>
                                    </div>
                                    <div class="MarketPaymentTutorial-item">
                                       <div class="MarketPaymentTutorial-icon">
                                          <svg-icon class="MarketPaymentTutorial-cardSvg ng-scope IconContainer" type="card_20x16" style="width: 20px; height: 16px;">
                                             <svg class="Icon" viewBox="0 0 20 16">
                                                <use xlink:href="#thumbprinticon-card_20x16"></use>
                                             </svg>
                                          </svg-icon>
                                       </div>
                                       <div class="MarketPaymentTutorial-copy T2-S theme-inverted">
                                          <span ng-bind="marketPaymentTutorial.isPro
                                             ? 'Funds are securely deposited into your bank account'
                                             : 'Pay with a credit or debit card'" class="ng-binding">Pay with a credit or debit card</span>
                                       </div>
                                    </div>
                                    <div class="MarketPaymentTutorial-item">
                                       <div class="MarketPaymentTutorial-icon">
                                          <svg-icon class="MarketPaymentTutorial-lockSvg ng-scope IconContainer" type="padlock_14x20" style="width: 14px; height: 20px;">
                                             <svg class="Icon" viewBox="0 0 14 20">
                                                <use xlink:href="#thumbprinticon-padlock_14x20"></use>
                                             </svg>
                                          </svg-icon>
                                       </div>
                                       <div class="MarketPaymentTutorial-copy T2-S theme-inverted">
                                          <span ng-bind="marketPaymentTutorial.isPro
                                             ? 'Sensitive data is encrypted and protected'
                                             : 'Sensitive data is encrypted and secure'" class="ng-binding">Sensitive data is encrypted and secure</span>
                                       </div>
                                    </div>
                                    <div class="MarketPaymentTutorial-item">
                                       <div class="MarketPaymentTutorial-icon">
                                          <svg-icon class="MarketPaymentTutorial-checkSvg ng-scope IconContainer" type="check_18x14" style="width: 18px; height: 14px;">
                                             <svg class="Icon" viewBox="0 0 18 14">
                                                <use xlink:href="#thumbprinticon-check_18x14"></use>
                                             </svg>
                                          </svg-icon>
                                       </div>
                                       <div class="MarketPaymentTutorial-copy T2-S theme-inverted">
                                          <span ng-bind="marketPaymentTutorial.isPro
                                             ? 'Low service fee of only 2.5%'
                                             : 'No added fees'" class="ng-binding">No added fees</span>
                                       </div>
                                    </div>
                                    <div class="MarketPaymentTutorial-itemSection">
                                    </div>
                                    <div class="MarketPaymentTutorial-button">
                                       <div class="Button theme-secondary-branded theme-large" ng-click="moveToNextPanel()">
                                          <span ng-bind="marketPaymentTutorial.isPro
                                             ? 'Get Started'
                                             : 'Continue'" class="ng-binding">Continue</span>
                                       </div>
                                    </div>
                                 </div>
                              </market-payment-tutorial>
                              <!-- ngSwitchWhen: main -->
                              <!-- ngSwitchWhen: pay -->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </modal-standard>
         <banner-alert theme="caution" banner-id="customer-payment-stripe-error-cb5dfr33" is-permanent="" hidden-by-default="" class="ng-isolate-scope">
            <div class="BannerAlert is-hidden">
               <div class="BannerAlert-body theme-caution">
                  <div class="icon closeIcon" ng-class="{'close-aligned-left': banner.closeAlignedLeft}" ng-click="banner.dismiss()" ng-hide="banner.disableClose">
                     <svg-icon type="close" size="sm" class="ng-scope theme-small IconContainer">
                        <svg class="Icon" viewBox="0 0 16 16">
                           <use xlink:href="#thumbprinticon-close_16"></use>
                        </svg>
                     </svg-icon>
                  </div>
                  <div class="BannerAlert-content T3-R theme-inverted" ng-transclude=""><span class="ng-scope">
                     There was a problem with your credit card.
                     Please double-check your information and try again.
                     </span>
                  </div>
               </div>
            </div>
         </banner-alert>
         <banner-alert theme="caution" banner-id="customer-payment-server-error-cb5dfr33" is-permanent="" hidden-by-default="" class="ng-isolate-scope">
            <div class="BannerAlert is-hidden">
               <div class="BannerAlert-body theme-caution">
                  <div class="icon closeIcon" ng-class="{'close-aligned-left': banner.closeAlignedLeft}" ng-click="banner.dismiss()" ng-hide="banner.disableClose">
                     <svg-icon type="close" size="sm" class="ng-scope theme-small IconContainer">
                        <svg class="Icon" viewBox="0 0 16 16">
                           <use xlink:href="#thumbprinticon-close_16"></use>
                        </svg>
                     </svg-icon>
                  </div>
                  <div class="BannerAlert-content T3-R theme-inverted" ng-transclude=""><span class="ng-scope">
                     We're sorry, but we couldn't process your request at this time.
                     Please try again later.
                     </span>
                  </div>
               </div>
            </div>
         </banner-alert>
      </customer-payment-flow>
   </div>
   <!-- end ngRepeat: quote in cm.quotes -->
</consumer-messenger>


@endsection
@section('javascript')
<script type="text/javascript" src="{{URL::to('public/assets/consumer-messenger-bundle.es6-5b55245e.js')}}"></script>
<script type="text/javascript" src="{{URL::to('public/assets/core.es6-d5bc502b.js')}}"></script>
<script type="text/javascript" src="{{URL::to('public/assets/blueimp-gallery.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('public/assets/core-8adfe544.js')}}"></script>
@endsection