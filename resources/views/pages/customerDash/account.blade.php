@extends('layouts.customerDash')
@section('css')
<link rel="stylesheet" type="text/css" href="{{URL::to('public/assets/settings-page-31588688.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::to('public/assets/core-159e4f5e.css')}}">

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
                           SettingsNavigation-active " href="{{URL::to('customer/account')}}">
                           <span class="SettingsPage-list-item-text T2-S
                              ">
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
                           " href="{{URL::to('customer/notification')}}">
                           <span class="SettingsPage-list-item-text T2-S
                              theme-secondary ">
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
            <account-settings-panel>
               <div class="AccountSettingsPanel page-grid theme-full-bleed-at-sm">
                  <div class="SettingsPage-maxContainer">
                     <h1 class="SettingsPage-mainHeader T1-R">
                        Account
                     </h1>
                     <div class="SettingsPage-list">
                        <a class="SettingsPage-list-item" title="edit name" href="{{URL::to('customer/accountEdit')}}">
                           <span class="SettingsPage-list-item-text T2-S">
                           {{ Auth::User()->first_name }}
                           </span>
                           <svg-icon class="SettingsPage-list-item-arrow ng-scope theme-small IconContainer" type="down-caret" size="sm">
                              <svg class="Icon" viewBox="0 0 16 16">
                                 <use xlink:href="#thumbprinticon-down-caret_16"></use>
                              </svg>
                           </svg-icon>
                        </a>
                        <a class="SettingsPage-list-item" title="edit email" href="{{URL::to('customer/accountEdit')}}">
                           <span class="SettingsPage-list-item-text T2-S">
                           {{ Auth::User()->email }}                           </span>
                           <svg-icon class="SettingsPage-list-item-arrow ng-scope theme-small IconContainer" type="down-caret" size="sm">
                              <svg class="Icon" viewBox="0 0 16 16">
                                 <use xlink:href="#thumbprinticon-down-caret_16"></use>
                              </svg>
                           </svg-icon>
                        </a>
                        <a class="SettingsPage-list-item" title="edit password" href="">
                           <span class="SettingsPage-list-item-text T2-S">
                           Password
                           </span>
                           <svg-icon class="SettingsPage-list-item-arrow ng-scope theme-small IconContainer" type="down-caret" size="sm">
                              <svg class="Icon" viewBox="0 0 16 16">
                                 <use xlink:href="#thumbprinticon-down-caret_16"></use>
                              </svg>
                           </svg-icon>
                        </a>
                     </div>
                     <h3 class="SettingsPage-subtitle T4-S theme-secondary">Account Delete</h3>
                     <div class="SettingsPage-list">
                        <a class="SettingsPage-list-item" title="deactivate account" href="">
                           <span class="SettingsPage-list-item-text T2-S">
                           Deactivate account
                           </span>
                           <svg-icon class="SettingsPage-list-item-arrow ng-scope theme-small IconContainer" type="down-caret" size="sm">
                              <svg class="Icon" viewBox="0 0 16 16">
                                 <use xlink:href="#thumbprinticon-down-caret_16"></use>
                              </svg>
                           </svg-icon>
                        </a>
                     </div>
                  </div>
               </div>
            </account-settings-panel>
         </div>
      </split-view>
   </div>
</settings-page>
@endsection

@section('script')

@endsection
