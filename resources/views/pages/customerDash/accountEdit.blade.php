@extends('layouts.customerDash')
@section('css')
<link rel="stylesheet" type="text/css" href="{{URL::to('public/assets/accountEdit.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::to('public/assets/settings-8635047a.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::to('public/assets/icons-350665ef.css')}}">
<style type="text/css">
 
</style>
@endsection
@section('content')  
<div class="settings-navigation ">
   <div class="wrapper">
      <a href="{{URL::to('customer/account')}}" class="back">
      Account
      </a>
      <h2>Personal Info</h2>
   </div>
</div>
<div class="wrapper content settings">
   <div class="dynamic-row">
      <div class="column-8">
         <h3>Edit Personal Information</h3>
         <ul>
            <li class="info-container">
               <form action="{{URL::to('customer/saveAccount')}}" method="post" id="acct-settings" name="acct-settings" class="acct-settings good-form large" accept-charset="UTF-8" novalidate="novalidate">
                   {{csrf_field()}}
                  <fieldset style="border:0px solid !important;">
                     <div class="form-field form-field-column-6">
                        <label for="usr_first_name" class="">
                        First name
                        </label>
                        <input value="{{Auth::User()->first_name}}" name="usr_first_name" id="usr_first_name" class=" " type="text">
                     </div>
                     <div class="form-field form-field-column-6">
                        <label for="usr_last_name" class="">
                        Last name
                        </label>
                        <input value="{{Auth::User()->last_name}}" name="usr_last_name" id="usr_last_name" class=" " type="text">
                     </div>
                     <div class="form-field">
                        <label for="usr_email" class="">
                        Email
                        </label>
                        <input value="{{Auth::User()->email}}" name="usr_email" id="usr_email" class=" " type="text">
                     </div>
                  </fieldset>
                  <!-- <fieldset>
                     <div class="form-field">
                        <label for="usr_timezone" class="">
                        Time zone
                        </label>
                        <select name="usr_timezone" id="usr_timezone" class=" ">
                           <option value="America/New_York">Eastern  (currently 2:50am)</option>
                           <option value="America/Chicago">Central  (currently 1:50am)</option>
                           <option value="America/Denver">Mountain  (currently 12:50am)</option>
                           <option value="America/Phoenix">Mountain  - Arizona (currently 11:50pm)</option>
                           <option value="America/Los_Angeles" selected="selected">Pacific  (currently 11:50pm)</option>
                           <option value="America/St_Kitts">Atlantic  (currently 2:50am)</option>
                           <option value="America/Juneau">Alaska  (currently 10:50pm)</option>
                           <option value="Pacific/Honolulu">Hawaii  (currently 8:50pm)</option>
                           <option value="Pacific/Guam">Chamorro  (currently 4:50pm)</option>
                        </select>
                     </div>
                  </fieldset> -->
                  <div>&nbsp;</div>
                  <fieldset style="border:0px solid !important;">
                     <div class="form-field">
                        <button class="mini-profile__UploadButton-bGdtMz tp-button tp-button--midium hfIMoI" type="submit">save</button>
                        <a href="{{URL::to('customer/account')}}" class="form-link">Cancel</a>
                     </div>
                  </fieldset>
               </form>
            </li>
         </ul>
      </div>
   </div>
</div>
@endsection

@section('script')

@endsection
