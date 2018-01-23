

@extends('layouts.proffetionalDash')
@section('css')
<link rel="stylesheet" type="text/css" href="{{URL::to('public/assets/core-676af24e.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::to('public/assets/settings-51e32be1.css')}}">
@endsection
@section('content')
<div class="page-grid">
   <div class="column-lg-6">
      <h1 class="Settings-header H4-R">Settings</h1>
   </div>
</div>
<div class="page-grid Settings-chooser">
   <div class="column-lg-2">
      <a class="Settings-destination" href="">
         <svg-icon class="Settings-destination-icon ng-scope theme-large IconContainer" type="avatar" size="lg">
            <svg class="Icon" viewBox="0 0 48 48">
               <use xlink:href="#thumbprinticon-avatar_48"></use>
            </svg>
         </svg-icon>
         <h2 class="T1-R Settings-destination-title">Account</h2>
         <svg-icon class="Settings-destination-arrow ng-scope theme-small IconContainer" type="down-caret" size="sm">
            <svg class="Icon" viewBox="0 0 16 16">
               <use xlink:href="#thumbprinticon-down-caret_16"></use>
            </svg>
         </svg-icon>
      </a>
   </div>
   <div class="column-lg-2">
      <a class="Settings-destination" href="">
         <svg-icon class="Settings-destination-icon ng-scope theme-large IconContainer" type="controls" size="lg">
            <svg class="Icon" viewBox="0 0 48 48">
               <use xlink:href="#thumbprinticon-controls_48"></use>
            </svg>
         </svg-icon>
         <h2 class="T1-R Settings-destination-title">Travel and Job Preferences</h2>
         <svg-icon class="Settings-destination-arrow ng-scope theme-small IconContainer" type="down-caret" size="sm">
            <svg class="Icon" viewBox="0 0 16 16">
               <use xlink:href="#thumbprinticon-down-caret_16"></use>
            </svg>
         </svg-icon>
      </a>
   </div>
   <div class="column-lg-2">
      <a class="Settings-destination" href="">
         <svg-icon class="Settings-destination-icon ng-scope theme-large IconContainer" type="notification" size="lg">
            <svg class="Icon" viewBox="0 0 48 48">
               <use xlink:href="#thumbprinticon-notification_48"></use>
            </svg>
         </svg-icon>
         <h2 class="T1-R Settings-destination-title">Notifications</h2>
         <svg-icon class="Settings-destination-arrow ng-scope theme-small IconContainer" type="down-caret" size="sm">
            <svg class="Icon" viewBox="0 0 16 16">
               <use xlink:href="#thumbprinticon-down-caret_16"></use>
            </svg>
         </svg-icon>
      </a>
   </div>
   <div class="column-lg-2">
      <a class="Settings-destination" href="">
         <svg-icon class="Settings-destination-icon ng-scope theme-large IconContainer" type="quote" size="lg">
            <svg class="Icon" viewBox="0 0 48 48">
               <use xlink:href="#thumbprinticon-quote_48"></use>
            </svg>
         </svg-icon>
         <h2 class="T1-R Settings-destination-title">Quote Templates</h2>
         <svg-icon class="Settings-destination-arrow ng-scope theme-small IconContainer" type="down-caret" size="sm">
            <svg class="Icon" viewBox="0 0 16 16">
               <use xlink:href="#thumbprinticon-down-caret_16"></use>
            </svg>
         </svg-icon>
      </a>
   </div>
   <div class="column-lg-2">
      <a class="Settings-destination" href="">
         <svg-icon class="Settings-destination-icon ng-scope theme-large IconContainer" type="availability-calendar" size="lg">
            <svg class="Icon" viewBox="0 0 48 48">
               <use xlink:href="#thumbprinticon-availability-calendar_48"></use>
            </svg>
         </svg-icon>
         <h2 class="T1-R Settings-destination-title">Calendar and Availability</h2>
         <svg-icon class="Settings-destination-arrow ng-scope theme-small IconContainer" type="down-caret" size="sm">
            <svg class="Icon" viewBox="0 0 16 16">
               <use xlink:href="#thumbprinticon-down-caret_16"></use>
            </svg>
         </svg-icon>
      </a>
   </div>
   <div class="column-lg-2">
      <a class="Settings-destination" href="/profile/payments">
         <svg-icon class="Settings-destination-icon ng-scope theme-large IconContainer" type="credit-card" size="lg">
            <svg class="Icon" viewBox="0 0 48 48">
               <use xlink:href="#thumbprinticon-credit-card_48"></use>
            </svg>
         </svg-icon>
         <h2 class="T1-R Settings-destination-title">Payments</h2>
         <svg-icon class="Settings-destination-arrow ng-scope theme-small IconContainer" type="down-caret" size="sm">
            <svg class="Icon" viewBox="0 0 16 16">
               <use xlink:href="#thumbprinticon-down-caret_16"></use>
            </svg>
         </svg-icon>
      </a>
   </div>
   <div class="column-lg-2">
      <a class="Settings-destination" href="">
         <svg-icon class="Settings-destination-icon ng-scope theme-large IconContainer" type="money" size="lg">
            <svg class="Icon" viewBox="0 0 48 48">
               <use xlink:href="#thumbprinticon-money_48"></use>
            </svg>
         </svg-icon>
         <h2 class="T1-R Settings-destination-title">Earnings</h2>
         <svg-icon class="Settings-destination-arrow ng-scope theme-small IconContainer" type="down-caret" size="sm">
            <svg class="Icon" viewBox="0 0 16 16">
               <use xlink:href="#thumbprinticon-down-caret_16"></use>
            </svg>
         </svg-icon>
      </a>
   </div>
   <div class="column-lg-2">
      <a class="Settings-destination" href="">
         <svg-icon class="Settings-destination-icon ng-scope theme-large IconContainer" type="social" size="lg">
            <svg class="Icon" viewBox="0 0 48 48">
               <use xlink:href="#thumbprinticon-social_48"></use>
            </svg>
         </svg-icon>
         <h2 class="T1-R Settings-destination-title">Widgets</h2>
         <svg-icon class="Settings-destination-arrow ng-scope theme-small IconContainer" type="down-caret" size="sm">
            <svg class="Icon" viewBox="0 0 16 16">
               <use xlink:href="#thumbprinticon-down-caret_16"></use>
            </svg>
         </svg-icon>
      </a>
   </div>
   <div class="column-lg-2">
      <a class="Settings-destination" href="">
         <svg-icon class="Settings-destination-icon ng-scope theme-large IconContainer" type="business" size="lg">
            <svg class="Icon" viewBox="0 0 48 48">
               <use xlink:href="#thumbprinticon-business_48"></use>
            </svg>
         </svg-icon>
         <h2 class="T1-R Settings-destination-title">Pro Referrals</h2>
         <svg-icon class="Settings-destination-arrow ng-scope theme-small IconContainer" type="down-caret" size="sm">
            <svg class="Icon" viewBox="0 0 16 16">
               <use xlink:href="#thumbprinticon-down-caret_16"></use>
            </svg>
         </svg-icon>
      </a>
   </div>
</div>
@endsection
@section('javascript')
@endsection

