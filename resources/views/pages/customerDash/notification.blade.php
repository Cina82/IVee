
@extends('layouts.customerDash')
@section('css')
<link rel="stylesheet" type="text/css" href="{{URL::to('public/assets/settings-page-31588688.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::to('public/assets/core-159e4f5e.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::to('public/assets/notifications-panel-e282e5c5.css')}}">

@endsection
@section('content')
<settings-page>
   <div class="SettingsPage">
      <split-view class="SplitView-mainWrapper is-contentShowing ng-isolate-scope" is-content-showing-bind="showContent">
         <div class="SplitView-sidePane">
            <div class="splitViewSide-grid">
               <settings-navigation>
                  <div class="SettingsNavigation">
                     <a class="SettingsPage-sideHeader T1-R" href="/profile/settings">Settings</a>
                     <div class="SettingsNavigation-list">
                        <a class="SettingsPage-list-item
                           " href="{{URL::to('customer/account')}}">
                           <span class="SettingsPage-list-item-text T2-S
                              theme-secondary ">
                           Account
                           </span>
                           <div>
                              <svg-icon class="SettingsPage-list-item-arrow arrow ng-scope theme-small IconContainer" type="down-caret" size="sm">
                                 <svg class="Icon" viewBox="0 0 16 16">
                                    <use xlink:href="#thumbprinticon-down-caret_16"></use>
                                 </svg>
                              </svg-icon>
                           </div>
                        </a>
                        <a class="SettingsPage-list-item
                           SettingsNavigation-active " href="{{URL::to('customer/notification')}}">
                           <span class="SettingsPage-list-item-text T2-S
                              ">
                           Notifications
                           </span>
                           <div>
                              <svg-icon class="SettingsPage-list-item-arrow arrow ng-scope theme-small IconContainer" type="down-caret" size="sm">
                                 <svg class="Icon" viewBox="0 0 16 16">
                                    <use xlink:href="#thumbprinticon-down-caret_16"></use>
                                 </svg>
                              </svg-icon>
                           </div>
                        </a>
                     </div>
                  </div>
               </settings-navigation>
            </div>
         </div>
         <div class="SplitView-contentPane is-collapsed">
            <notifications-panel class="ng-scope">
               <modal-danger-confirm modal-id="confirm-unsubscribe" message="Are you sure you want to unsubscribe from
                  ?" on-confirm="notificationsPanel.doChange()" action-text="Unsubscribe" class="ng-isolate-scope">
                  <div modal-basic="" class="Modal ModalDangerConfirm ng-isolate-scope" modal-id="confirm-unsubscribe" style="display: block;">
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
                                 <div class="Modal-content ng-scope">
                                    <div class="Modal-section title-section" ng-show="message">
                                       <div class="T1-S ng-binding" ng-bind="message">Are you sure you want to unsubscribe from
                                          ?
                                       </div>
                                    </div>
                                    <div class="Modal-section" ng-transclude="">
                                    </div>
                                    <div class="Modal-section button-section">
                                       <a class="Link" ng-click="onDecline()">Cancel</a>
                                       <!-- TODO(giles): This theme-caution is the only thing that makes this specific to
                                          dangerous actions. Make this a parameter too, and rename the whole class to a more
                                          generic modal-confirm. -->
                                       <button class="Button theme-caution ng-binding" ng-click="onConfirmClick()">
                                       Unsubscribe
                                       </button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </modal-danger-confirm>
               <modal-danger-confirm modal-id="confirm-unsubscribe-all" message="Are you sure you want to unsubscribe from all Thumbtack notifications?" on-confirm="notificationsPanel.unsubscribeAll()" action-text="Unsubscribe All" class="ng-isolate-scope">
                  <div modal-basic="" class="Modal ModalDangerConfirm ng-isolate-scope" modal-id="confirm-unsubscribe-all" style="display: block;">
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
                                 <div class="Modal-content ng-scope">
                                    <div class="Modal-section title-section" ng-show="message">
                                       <div class="T1-S ng-binding" ng-bind="message">Are you sure you want to unsubscribe from all Thumbtack notifications?</div>
                                    </div>
                                    <div class="Modal-section" ng-transclude="">
                                    </div>
                                    <div class="Modal-section button-section">
                                       <a class="Link" ng-click="onDecline()">Cancel</a>
                                       <!-- TODO(giles): This theme-caution is the only thing that makes this specific to
                                          dangerous actions. Make this a parameter too, and rename the whole class to a more
                                          generic modal-confirm. -->
                                       <button class="Button theme-caution ng-binding" ng-click="onConfirmClick()">
                                       Unsubscribe All
                                       </button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </modal-danger-confirm>
               <div class="NotificationsPanel page-grid theme-full-bleed-at-sm">
                  <div class="SettingsPage-maxContainer">
                     <h1 class="NotificationsPanel-mainHeader H4-R">
                        Notifications
                     </h1>
                     <div>
                        <h4 class="T2-R NotificationsPanel-subHeader">
                           Your Projects
                        </h4>
                        <div class="SettingsPage-list">
                           <div class="SettingsPage-list-item" ng-class="{
                              'is-hidden': !notificationsPanel.shouldShow(
                              'sms_bid_notifications', false
                              )
                              }">
                              <span class="SettingsPage-list-item-text
                                 NotificationsPanel-settingText">
                                 <div class="T2-S">
                                    All Text Notifications
                                 </div>
                              </span>
                              <div class="SettingsPage-list-item-toggle Toggle ng-scope" ng-transclude="">
                                 <input class="ModalDangerLauncher ng-scope ng-valid u-visuallyHidden ng-dirty" name="sms_bid_notifications" ng-model="answers[userBucket].sms_bid_notifications.key" ng-change="notificationsPanel.confirmChange(
                                    'sms_bid_notifications',
                                    'All Text Notifications',
                                    false,
                                    false
                                    )" id="thumbprintToggle-1" type="checkbox">
                                 <label for="thumbprintToggle-1"></label>
                              </div>
                           </div>
                           <div class="SettingsPage-list-item" ng-class="{
                              'is-hidden': !notificationsPanel.shouldShow(
                              'push_bid_notifications', false
                              )
                              }">
                              <span class="SettingsPage-list-item-text
                                 NotificationsPanel-settingText">
                                 <div class="T2-S">
                                    All Push Notifications
                                 </div>
                              </span>
                              <div class="SettingsPage-list-item-toggle Toggle ng-scope" ng-transclude="">
                                 <input class="ModalDangerLauncher ng-scope ng-pristine ng-valid u-visuallyHidden" name="push_bid_notifications" ng-model="answers[userBucket].push_bid_notifications.key" ng-change="notificationsPanel.confirmChange(
                                    'push_bid_notifications',
                                    'All Push Notifications',
                                    false,
                                    false
                                    )" id="thumbprintToggle-2" type="checkbox">
                                 <label for="thumbprintToggle-2"></label>
                              </div>
                           </div>
                        </div>
                        <h4 class="T2-R NotificationsPanel-subHeader">
                           Email me about...
                        </h4>
                        <div class="SettingsPage-list">
                           <div class="SettingsPage-list-item" ng-class="{
                              'is-hidden': !notificationsPanel.shouldShow(
                              'customer_tips', false
                              )
                              }">
                              <span class="SettingsPage-list-item-text
                                 NotificationsPanel-settingText">
                                 <div class="T2-S">
                                    Helpful tips and inspiration
                                 </div>
                                 <div class="B3-S">
                                    Cost guides, project checklists, and tips from Thumbtack pros
                                 </div>
                              </span>
                              <div class="SettingsPage-list-item-toggle Toggle ng-scope" ng-transclude="">
                                 <input class="ModalDangerLauncher ng-scope ng-pristine ng-valid u-visuallyHidden" name="customer_tips" ng-model="answers[userBucket].customer_tips.key" ng-change="notificationsPanel.confirmChange(
                                    'customer_tips',
                                    'Helpful tips and inspiration',
                                    false,
                                    false
                                    )" id="thumbprintToggle-3" type="checkbox">
                                 <label for="thumbprintToggle-3"></label>
                              </div>
                           </div>
                           <div class="SettingsPage-list-item" ng-class="{
                              'is-hidden': !notificationsPanel.shouldShow(
                              'customer_recommendations', false
                              )
                              }">
                              <span class="SettingsPage-list-item-text
                                 NotificationsPanel-settingText">
                                 <div class="T2-S">
                                    Recommendations
                                 </div>
                                 <div class="B3-S">
                                    Personalized suggestions for projects, pros, and more
                                 </div>
                              </span>
                              <div class="SettingsPage-list-item-toggle Toggle ng-scope" ng-transclude="">
                                 <input class="ModalDangerLauncher ng-scope ng-pristine ng-valid u-visuallyHidden" name="customer_recommendations" ng-model="answers[userBucket].customer_recommendations.key" ng-change="notificationsPanel.confirmChange(
                                    'customer_recommendations',
                                    'Recommendations',
                                    false,
                                    false
                                    )" id="thumbprintToggle-4" type="checkbox">
                                 <label for="thumbprintToggle-4"></label>
                              </div>
                           </div>
                           <div class="SettingsPage-list-item" ng-class="{
                              'is-hidden': !notificationsPanel.shouldShow(
                              'customer_offers', false
                              )
                              }">
                              <span class="SettingsPage-list-item-text
                                 NotificationsPanel-settingText">
                                 <div class="T2-S">
                                    Special Offers
                                 </div>
                                 <div class="B3-S">
                                    Discounts, rewards, and promotions
                                 </div>
                              </span>
                              <div class="SettingsPage-list-item-toggle Toggle ng-scope" ng-transclude="">
                                 <input class="ModalDangerLauncher ng-scope ng-pristine ng-valid u-visuallyHidden" name="customer_offers" ng-model="answers[userBucket].customer_offers.key" ng-change="notificationsPanel.confirmChange(
                                    'customer_offers',
                                    'Special Offers',
                                    false,
                                    false
                                    )" id="thumbprintToggle-5" type="checkbox">
                                 <label for="thumbprintToggle-5"></label>
                              </div>
                           </div>
                           <div class="SettingsPage-list-item" ng-class="{
                              'is-hidden': !notificationsPanel.shouldShow(
                              'customer_feedback', false
                              )
                              }">
                              <span class="SettingsPage-list-item-text
                                 NotificationsPanel-settingText">
                                 <div class="T2-S">
                                    Invitations to give feedback
                                 </div>
                                 <div class="B3-S">
                                    Quick surveys to get your ideas for improving Thumbtack
                                 </div>
                              </span>
                              <div class="SettingsPage-list-item-toggle Toggle ng-scope" ng-transclude="">
                                 <input class="ModalDangerLauncher ng-scope ng-pristine ng-valid u-visuallyHidden" name="customer_feedback" ng-model="answers[userBucket].customer_feedback.key" ng-change="notificationsPanel.confirmChange(
                                    'customer_feedback',
                                    'Invitations to give feedback',
                                    false,
                                    false
                                    )" id="thumbprintToggle-6" type="checkbox">
                                 <label for="thumbprintToggle-6"></label>
                              </div>
                           </div>
                           <div class="SettingsPage-list-item" ng-class="{
                              'is-hidden': !notificationsPanel.shouldShow(
                              'customer_reminders', false
                              )
                              }">
                              <span class="SettingsPage-list-item-text
                                 NotificationsPanel-settingText">
                                 <div class="T2-S">
                                    Reminders
                                 </div>
                                 <div class="B3-S">
                                    Incomplete request reminders, recurring project reminders, and more
                                 </div>
                              </span>
                              <div class="SettingsPage-list-item-toggle Toggle ng-scope" ng-transclude="">
                                 <input class="ModalDangerLauncher ng-scope ng-pristine ng-valid u-visuallyHidden" name="customer_reminders" ng-model="answers[userBucket].customer_reminders.key" ng-change="notificationsPanel.confirmChange(
                                    'customer_reminders',
                                    'Reminders',
                                    false,
                                    false
                                    )" id="thumbprintToggle-7" type="checkbox">
                                 <label for="thumbprintToggle-7"></label>
                              </div>
                           </div>
                           <div class="SettingsPage-list-item" ng-class="{
                              'is-hidden': !notificationsPanel.shouldShow(
                              'customer_other', false
                              )
                              }">
                              <span class="SettingsPage-list-item-text
                                 NotificationsPanel-settingText">
                                 <div class="T2-S">
                                    Other
                                 </div>
                                 <div class="B3-S">
                                    Feature updates and product announcements
                                 </div>
                              </span>
                              <div class="SettingsPage-list-item-toggle Toggle ng-scope" ng-transclude="">
                                 <input class="ModalDangerLauncher ng-scope ng-pristine ng-valid u-visuallyHidden" name="customer_other" ng-model="answers[userBucket].customer_other.key" ng-change="notificationsPanel.confirmChange(
                                    'customer_other',
                                    'Other',
                                    false,
                                    false
                                    )" id="thumbprintToggle-8" type="checkbox">
                                 <label for="thumbprintToggle-8"></label>
                              </div>
                           </div>
                        </div>
                        <div class="Spacer-7"></div>
                        <button class="Button theme-caution theme-large
                           NotificationsPanel-UnsubscribeAll" ng-click="notificationsPanel.confirmUnsubscribeAll()">
                        Unsubscribe All
                        </button>
                     </div>
                  </div>
               </div>
               <alert alert-id="notification-settings-update-error" theme="caution" class="ng-scope">
                  <div class="alert T2-S alert--caution" ng-class="{
                     'alert--visible': alert.isVisible,
                     'alert--caution': alert.theme === 'caution',
                     'alert--success': alert.theme === 'success',
                     }">
                     <div class="alert__content">
                        <div ng-transclude=""><span class="ng-scope">
                           There was an error updating your notification settings. Please reload the page and
                           try again.
                           </span>
                        </div>
                        <div class="alert__message ng-binding" ng-bind="alert.message"></div>
                        <svg-icon class="alert__close ng-scope theme-small IconContainer" type="close" size="sm" ng-click="alert.hide()">
                           <svg class="Icon" viewBox="0 0 16 16">
                              <use xlink:href="#thumbprinticon-close_16"></use>
                           </svg>
                        </svg-icon>
                     </div>
                  </div>
               </alert>
               <div modal-basic="" class="Modal ModalPrompt NotificationsPanel-modal ng-isolate-scope" modal-id="add-phone-number" style="display: block;">
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
                              <div class="Modal-content ng-scope">
                                 <form id="notificationPanelPhoneNumber" schema="phoneNumber" schema-assign="EmptySchema" schema-yields="$parent.$parent.notificationsPanel.input" ng-submit="$parent.$parent.notificationsPanel.isValidNumber(deepValidate())" class="ng-scope ng-pristine ng-valid" novalidate="true">
                                    <div class="Modal-section title-section">
                                       <div class="T1-S">Please add a phone number</div>
                                    </div>
                                    <div class="Modal-section responsive-section">
                                       <input schema="phoneNumber.servicePhone" schema-assign="PhoneSchema" ng-model="notificationsPanel.input.servicePhone" placeholder="Enter a phone number" class="inputField ng-scope ng-pristine ng-valid" maxlength="10" type="tel">
                                       <!-- ngRepeat: $err in $validationErrors -->
                                    </div>
                                    <div class="Modal-section button-section">
                                       <a class="Link" ng-click="$parent.$parent.notificationsPanel.onDecline()">Cancel</a>
                                       <button class="Button ng-isolate-scope" type="submit" loading-button="" is-loading="$parent.$parent.notificationsPanel.isLoading">
                                          <div class="LoadingButton">
                                             <!-- ngIf: isLoading -->
                                             <span ng-style="{ 'visibility': isLoading ? 'hidden' : 'visible' }" ng-transclude="" style="visibility: visible;"><span class="ng-scope">
                                             Save Phone Number
                                             </span></span>
                                          </div>
                                       </button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </notifications-panel>
         </div>
      </split-view>
   </div>
</settings-page>
@endsection

@section('script')
<script type="text/javascript" src="{{URL::to('public/assets/522561.js')}}"></script>
@endsection
