@extends('layouts.proffetionalDash')
@section('css')
<link rel="stylesheet" type="text/css" href="{{URL::to('public/assets/core-676af24e.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::to('public/assets/pro-profile-bundle-57e4d64a.css')}}">
<style type="text/css">
    .dkYGjd {
    width: 72px;
    height: 72px;
    font-size: 14px;
    position: relative;
}
</style>
<script src="{{URL::to('public/assets/pro-profile-bundle.es6-e59fc1ab.js')}}"></script>
@endsection

@section('content')
<pro-profile class="ng-scope">
   <div class="pro-profile">
      <div class="pro-profile__loading-screen ng-hide" ng-show="!proProfile.isInit">
         <div class="LoadingDots">
            
         </div>
      </div>
      <div class="pro-profile__content tp-wrap" ng-show="proProfile.originalData.service &amp;&amp; proProfile.isInit">
         <div class="tp-grid tp-grid--center tp-grid--flush">
            <div class="tp-col tp-col--12 tp-col--md-8">
               <section class="pro-profile__section pro-profile-business-info" ng-class="{
                  'pro-profile-business-info--edit': proProfile.inEditView
                  &amp;&amp; proProfile.currentSection === 'business-info'
                  }">
                  <header class="pro-profile__section__header" data-router-id="business-info">
                     <button class="tp-button--reset tp-link tp-weight--medium" type="button" ng-click="proProfile.triggerSectionChange('business-info')" ng-show="proProfile.isEditable
                        &amp;&amp; !proProfile.currentSection">
                     Edit
                     </button>
                     <div class="pro-profile__section__header__edit                                             Flex-horizontal-center ng-hide" ng-show="proProfile.isEditable &amp;&amp; proProfile.inEditView
                        &amp;&amp; proProfile.currentSection === 'business-info'">
                        <button type="button" class="tp-link pro-profile__section__top-link" ng-click="proProfile.save()" ng-disabled="proProfile.isUploadingPicture">
                        Save
                        </button>
                        <button type="button" class="tp-link tp-link--bad-news
                           pro-profile__section__top-link" ng-click="proProfile.cancelChanges()" ng-disabled="proProfile.isUploadingPicture">
                        Cancel
                        </button>
                     </div>
                  </header>
                  <pro-profile-business-info current-section="proProfile.currentSection" in-edit-view="proProfile.inEditView" is-editable="proProfile.isEditable" show-ask-for-reviews-modal="proProfile.showAskForReviewsModal" default-profile-picture="https://static.thumbtackstatic.com/media/profile/img-profile-missing.png" service="proProfile.model.answerData.service" handle-edit-open="proProfile.triggerSectionChange" class="ng-isolate-scope">
                     <div class="pro-profile-business-info">
                        <div class="pro-profile__section__content pro-profile-business-info__content" ng-hide="inEditView &amp;&amp; currentSection === 'business-info'">
                           <!-- ngIf: service -->
                           <pro-profile-business-info-react ng-if="service" pro-avatar-card-data="proProfileBI.getProAvatarCardData(service)" open-ask-for-reviews-modal="openAskForReviewsModal" pro-business-info-fields-data="proProfileBI.getProBusinessInfoFieldsData(service)" handle-edit-open="handleEditOpen" class="ng-scope">
                              <div data-reactroot="">
                                 <div class="pro-avatar-card">
                                    <div class="pro-avatar-card__avatar-container">
                                       <div class="sc-ifAKCX dkYGjd"><img class="sc-bxivhb hdJNiG" src="{{URL::to('public/thumbtack_image')}}/{{ Auth::User()->image }}" height="72px" width="72px" /></div>
                                    </div>
                                    <div class="pro-avatar-card__description">
                                       <h1 class="pro-avatar-card__business-name">{{ Auth::User()->first_name }}</h1>
                                       <div class="pro-avatar-card__reputation">
                                          <div class="pro-avatar-card__review-stars">
                                             <div class="sc-bZQynM dJMLv" title="0 out of 5 star rating">
                                                <div class="sc-gzVnrw gzeXL">
                                                   <div>
                                                      
                                                   </div>
                                                </div>
                                                <div>
                                                  
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <ul class="pro-business-info-fields">
                                    <li class="pro-profile__section__content-block">
                                       <div class="pro-business-info-field">
                                          <div class="pro-business-info-field__wrapper">
                                             <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" class="pro-business-info-field__icon">
                                                <path d="M2.985 15.063c1.844-.001 4.339-1.555 7.416-4.621 2.913-2.909 4.551-5.553 4.611-7.445-.046-.286-1.056-1.298-1.965-1.945-.26-.18-.436-.099-.464-.069a236.41 236.41 0 0 0-2.085 3.134.835.835 0 0 0 .106.463c.094.183.367.666.77 1.372l.257.439-.301.418c-.257.364-.879 1.17-2.13 2.416-1.264 1.262-2.067 1.875-2.434 2.128l-.404.289-.736-.416a60.945 60.945 0 0 0-1.071-.598c-.261-.137-.437-.126-.474-.107-.262.164-2.871 1.898-3.111 2.073-.006.007-.032.058-.032.154 0 .117.04.251.102.341.725 1.03 1.658 1.924 1.945 1.974M12.735 0c.229 0 .529.061.851.285.028.02 2.364 1.693 2.364 2.727-.087 2.747-2.705 5.917-4.886 8.095C7.759 14.4 5.115 16 2.981 16 1.953 16 .338 13.722.269 13.624A1.577 1.577 0 0 1 0 12.748c0-.39.153-.724.42-.915.257-.187 2.883-1.932 3.162-2.106.361-.229.888-.204 1.41.071.194.102.713.395 1.096.611l.217.122c.33-.236 1.076-.816 2.233-1.97 1.122-1.118 1.707-1.852 1.976-2.224a59.52 59.52 0 0 1-.739-1.317 1.76 1.76 0 0 1-.223-.824c0-.214.05-.411.146-.569.18-.289 1.92-2.906 2.12-3.187.157-.227.44-.389.753-.429.05-.007.105-.011.164-.011" fill-rule="evenodd"></path>
                                             </svg>
                                             <div class="pro-business-info-field__content">
                                                <div class="tp-text-2--static tp-weight--medium">Phone</div>
                                                <div class="pro-business-info-field__value">{{Auth::User()->mobile}}</div>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="pro-profile__section__content-block">
                                       <div class="pro-business-info-field">
                                          <div class="pro-business-info-field__wrapper">
                                             <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" class="pro-business-info-field__icon">
                                                <path d="M15 4.063H1V2.5C1 1.673 1.673 1 2.5 1h11c.827 0 1.5.673 1.5 1.5v1.563zm0 9.438c0 .827-.673 1.5-1.5 1.5h-11c-.827 0-1.5-.673-1.5-1.5V5.063h14V13.5zM13.5 0h-11A2.5 2.5 0 0 0 0 2.5v11A2.5 2.5 0 0 0 2.5 16h11a2.5 2.5 0 0 0 2.5-2.5v-11A2.5 2.5 0 0 0 13.5 0zM6.062 1.878a.75.75 0 1 0 0 1.5.75.75 0 0 0 0-1.5m-1.77 0a.75.75 0 1 0 .001 1.5.75.75 0 0 0 0-1.5m-1.77 0a.75.75 0 1 0 0 1.5.75.75 0 0 0 0-1.5" fill-rule="evenodd"></path>
                                             </svg>
                                             <div class="pro-business-info-field__content">
                                                <div class="tp-text-2--static tp-weight--medium">Website</div>
                                                <div class="pro-business-info-field__placeholder">{{Auth::User()->email}}</div>
                                             </div>
                                          </div>
                                          <button class="pro-business-info-field__add tp-button" type="button">Add</button>
                                       </div>
                                    </li>
                                    <li class="pro-profile__section__content-block">
                                       <div class="pro-business-info-field">
                                          <div class="pro-business-info-field__wrapper">
                                             <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" class="pro-business-info-field__icon">
                                                <path d="M8 4.277c-.99 0-1.796.82-1.796 1.829 0 1.008.805 1.827 1.796 1.827.99 0 1.797-.82 1.797-1.827 0-1.009-.806-1.829-1.797-1.829zm0 4.707c-1.56 0-2.828-1.29-2.828-2.878 0-1.587 1.268-2.88 2.828-2.88 1.56 0 2.83 1.293 2.83 2.88S9.56 8.984 8 8.984zM8 .928c-2.805 0-5.088 2.29-5.088 5.106 0 2.21 3.405 6.623 5.088 8.579 1.683-1.956 5.088-6.37 5.088-8.58C13.088 3.22 10.805.929 8 .929zM8 16l-.337-.377C7.431 15.363 2 9.247 2 6.033 2 2.708 4.691 0 8 0s6 2.707 6 6.034c0 3.213-5.431 9.33-5.663 9.589L8 16z" fill-rule="evenodd"></path>
                                             </svg>
                                             <div class="pro-business-info-field__content">
                                                <div class="tp-text-2--static tp-weight--medium">Address</div>
                                                <div class="pro-business-info-field__value">
                                                   <div>
                                                      <div></div>
                                                      <div>Anaheim, CA 92806</div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="pro-profile__section__content-block">
                                       <div class="pro-business-info-field">
                                          <div class="pro-business-info-field__wrapper">
                                             <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" class="pro-business-info-field__icon">
                                                <path d="M12.52 6.452v-3.4H15c-.07 1.46-.57 3.1-2.48 3.4zm-1 .66l-.03.24c-.22 1.74-1.57 3.1-3.22 3.23-.132.016-.294.008-.54 0-1.64-.13-3.017-1.624-3.227-3.364l-.023-.176v-6.04h7.04v6.11zm-8.04-.66c-1.9-.3-2.41-1.94-2.47-3.4h2.47v3.4zm11.83-4.4h-2.79V.002H3.48v2.05H.7s-.7 0-.7.68c0 1.28.31 4.37 3.53 4.74.27 2.21 1.99 3.94 4.13 4.11v2.75H5.92a.34.34 0 1 0 0 .68h4.17c.19 0 .35-.15.35-.34 0-.19-.16-.34-.35-.34H8.35v-2.75c2.14-.17 3.86-1.91 4.13-4.11 3.21-.37 3.52-3.46 3.52-4.74 0-.68-.69-.68-.69-.68zM10.868 16h-5.73a.354.354 0 0 1-.357-.351c0-.194.16-.352.358-.352h5.729c.198 0 .358.158.358.352 0 .194-.16.351-.358.351" fill-rule="evenodd"></path>
                                             </svg>
                                             <div class="pro-business-info-field__content">
                                                <div class="tp-text-2--static tp-weight--medium">Year founded</div>
                                                <div class="pro-business-info-field__placeholder">1999</div>
                                             </div>
                                          </div>
                                          <button class="pro-business-info-field__add tp-button" type="button">Add</button>
                                       </div>
                                    </li>
                                    <li class="pro-profile__section__content-block">
                                       <div class="pro-business-info-field">
                                          <div class="pro-business-info-field__wrapper">
                                             <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" class="pro-business-info-field__icon">
                                                <path d="M15.31 10.202c-.297-.27-2.32-.79-3.353-1.05.969-.93 1.545-2.491 1.545-3.981 0-2.3-.636-4.171-3.503-4.171-.91 0-1.574.2-2.085.53.696.06 1.246.23 1.671.5.136-.01.261-.03.415-.03C12.083 2 12.5 3.43 12.5 5.21c0 1.28-.513 2.691-1.379 3.371v.67l.138.45c1.039.27 2.796.73 3.221.92.593.27.783 1.6 0 1.88h-1.53c.058.31.066.641.005.961 2.482-.08 2.686-.26 2.686-.26.66-.9.33-2.4-.33-3zm-4.832 3.8l-4.54-.01-4.43.01c-.893-.32-.44-1.61.157-1.88.453-.2 2.208-.72 3.091-.97l.121-.4v-.69C4.012 9.331 3.5 7.821 3.5 6.44 3.5 4.54 3.916 3 6 3s2.5 1.54 2.5 3.44c0 1.38-.514 2.89-1.38 3.62v.69l.138.45c1.039.27 2.796.73 3.221.92.593.27.784 1.601 0 1.881zM7.917 10.64c.993-.98 1.584-2.65 1.584-4.23C9.501 3.97 8.865 2 6 2 3.132 2 2.496 3.97 2.496 6.41c0 1.59.595 3.26 1.593 4.24-1.044.25-3.083.77-3.392 1.05-.665.6-1 2.1-.335 2.999 0 0 .38.3 5.664.3 5.283 0 5.614-.3 5.614-.3.66-.9.33-2.4-.331-3-.3-.27-2.37-.81-3.392-1.06z" fill-rule="evenodd"></path>
                                             </svg>
                                             <div class="pro-business-info-field__content">
                                                <div class="tp-text-2--static tp-weight--medium">Number of employees</div>
                                                <div class="pro-business-info-field__placeholder">1</div>
                                             </div>
                                          </div>
                                          <button class="pro-business-info-field__add tp-button" type="button">Add</button>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </pro-profile-business-info-react>
                           <!-- end ngIf: service -->
                        </div>
                        <div class="pro-profile__section__edit pro-profile-business-info__edit ng-hide" ng-show="inEditView &amp;&amp; currentSection === 'business-info' &amp;&amp; isEditable">
                           <div class="pro-profile-business-info__update-picture">
                              <img ng-src="https://static.thumbtackstatic.com/pictures/24284/agbpsd4u2nkd1i1mmj97e4m00_400.png" alt="Scott Bs" class="pro-profile-business-info__profile-pic" src="https://static.thumbtackstatic.com/pictures/24284/agbpsd4u2nkd1i1mmj97e4m00_400.png">
                              <div picture-upload="" track-progress="" picture-upload-id="profile-picture" target="/profile/services/W:h85DrJcpp4SA/edit/add-profile-picture?_json_expected" class="ng-scope">
                                 <input style="display: none" multiple="" name="picture" accept="image/*" type="file">
                                 <span upload-extra="override_user_picture" value="true" class="ng-scope"></span>
                                 <button upload-trigger="" type="button" loading-button="" is-loading="pictureUpload.isUploading" class="tp-button tp-button--small ng-scope ng-isolate-scope">
                                    <div class="LoadingButton">
                                       <!-- ngIf: isLoading -->
                                       <span ng-style="{ 'visibility': isLoading ? 'hidden' : 'visible' }" ng-transclude="" style="visibility: visible;"><span class="ng-scope">
                                       Update Picture
                                       </span></span>
                                    </div>
                                 </button>
                              </div>
                              <modal-basic class="Modal ng-isolate-scope" modal-id="crop-modal" style="display: block;">
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
                                             <profile-picture service-id="W:h85DrJcpp4SA" picture-id="0PjYw3$SOqzNzA" crop-dimensions="690,690" profile-src="https://static.thumbtackstatic.com/pictures/24284/agbpsd4u2nkd1i1mmj97e4m00_400.png" class="ng-scope">
                                                <div class="Modal-content">
                                                   <div class="Modal-section title-section">
                                                      <p class="tp-text-1--static tp-weight--medium">Profile Picture</p>
                                                      <p class="tp-text-2--static">
                                                         Click and drag on the image to crop your picture.
                                                      </p>
                                                   </div>
                                                   <div class="Modal-section pro-profile__profile-picture-edit"></div>
                                                   <div class="Modal-section button-section">
                                                      <button class="tp-button tp-button--medium tp-button--secondary ng-isolate-scope" type="button" loading-button="" is-loading="profilePicture.isRotating" ng-disabled="profilePicture.isSaving" ng-click="profilePicture.rotate()">
                                                         <div class="LoadingButton">
                                                            <!-- ngIf: isLoading -->
                                                            <span ng-style="{ 'visibility': isLoading ? 'hidden' : 'visible' }" ng-transclude="" style="visibility: visible;"><span class="ng-scope">
                                                            Rotate
                                                            </span></span>
                                                         </div>
                                                      </button>
                                                      <button class="tp-button tp-button--medium ng-isolate-scope" type="button" loading-button="" is-loading="profilePicture.isSaving" ng-disabled="profilePicture.isRotating" ng-click="profilePicture.saveCrop()">
                                                         <div class="LoadingButton">
                                                            <!-- ngIf: isLoading -->
                                                            <span ng-style="{ 'visibility': isLoading ? 'hidden' : 'visible' }" ng-transclude="" style="visibility: visible;"><span class="ng-scope">
                                                            Save Selection
                                                            </span></span>
                                                         </div>
                                                      </button>
                                                   </div>
                                                </div>
                                             </profile-picture>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </modal-basic>
                           </div>
                           <form class="pro-profile-business-info__update-form ng-pristine ng-valid">
                              <input-text class="pro-profile-business-info__input ng-isolate-scope" input-text-label="Business Name" theme-standalone-label="">
                                 <div class="InputText">
                                    <label class="tp-label ng-binding" ng-class="{ 'u-visuallyHidden': !themeStandaloneLabel }" for="inputText1" ng-bind="label">Business Name</label>
                                    <span class="u-visuallyHidden ng-binding" role="alert" id="inputText1-error"></span>
                                    <div class="InputText-inputAndErrorContainer" ng-class="{ 'InputText-prefixIcon': hasPrefixIcon }">
                                       <div class="InputText-inputContainer" ng-transclude="" ng-class="{
                                          'InputText-inputInvalid': isValid === false,
                                          'InputText-inputValid': isValid === true
                                          }">
                                          <input ng-model="service.business_name" class="ng-scope ng-pristine ng-valid" id="inputText1" type="text">
                                       </div>
                                       <div class="InputText-errorMask ng-binding"></div>
                                    </div>
                                 </div>
                              </input-text>
                              <input-text class="pro-profile-business-info__input ng-isolate-scope" input-text-label="Phone number" numeric-only="" theme-standalone-label="">
                                 <div class="InputText">
                                    <label class="tp-label ng-binding" ng-class="{ 'u-visuallyHidden': !themeStandaloneLabel }" for="inputText2" ng-bind="label">Phone number</label>
                                    <span class="u-visuallyHidden ng-binding" role="alert" id="inputText2-error"></span>
                                    <div class="InputText-inputAndErrorContainer" ng-class="{ 'InputText-prefixIcon': hasPrefixIcon }">
                                       <div class="InputText-inputContainer" ng-transclude="" ng-class="{
                                          'InputText-inputInvalid': isValid === false,
                                          'InputText-inputValid': isValid === true
                                          }">
                                          <input placeholder="000 000 0000" ng-model="service.phone_number.text" class="ng-scope ng-pristine ng-valid" id="inputText2" type="tel">
                                       </div>
                                       <div class="InputText-errorMask ng-binding"></div>
                                    </div>
                                 </div>
                              </input-text>
                              <input-text class="pro-profile-business-info__input ng-isolate-scope" input-text-label="Website" theme-standalone-label="">
                                 <div class="InputText">
                                    <label class="tp-label ng-binding" ng-class="{ 'u-visuallyHidden': !themeStandaloneLabel }" for="inputText3" ng-bind="label">Website</label>
                                    <span class="u-visuallyHidden ng-binding" role="alert" id="inputText3-error"></span>
                                    <div class="InputText-inputAndErrorContainer" ng-class="{ 'InputText-prefixIcon': hasPrefixIcon }">
                                       <div class="InputText-inputContainer" ng-transclude="" ng-class="{
                                          'InputText-inputInvalid': isValid === false,
                                          'InputText-inputValid': isValid === true
                                          }">
                                          <input placeholder="www.websitename.com" ng-model="service.website.display_url" class="ng-scope ng-pristine ng-valid" id="inputText3" type="text">
                                       </div>
                                       <div class="InputText-errorMask ng-binding"></div>
                                    </div>
                                 </div>
                              </input-text>
                              <input-text class="pro-profile-business-info__input ng-isolate-scope" input-text-label="Address" theme-standalone-label="">
                                 <div class="InputText">
                                    <label class="tp-label ng-binding" ng-class="{ 'u-visuallyHidden': !themeStandaloneLabel }" for="inputText4" ng-bind="label">Address</label>
                                    <span class="u-visuallyHidden ng-binding" role="alert" id="inputText4-error"></span>
                                    <div class="InputText-inputAndErrorContainer" ng-class="{ 'InputText-prefixIcon': hasPrefixIcon }">
                                       <div class="InputText-inputContainer" ng-transclude="" ng-class="{
                                          'InputText-inputInvalid': isValid === false,
                                          'InputText-inputValid': isValid === true
                                          }">
                                          <input placeholder="Address line 1" ng-model="service.address.address1" class="ng-scope ng-pristine ng-valid" id="inputText4" type="text">
                                       </div>
                                       <div class="InputText-errorMask ng-binding"></div>
                                    </div>
                                 </div>
                              </input-text>
                              <input-text class="pro-profile-business-info__input--condensed ng-isolate-scope" theme-standalone-label="">
                                 <div class="InputText">
                                    <label class="tp-label ng-binding" ng-class="{ 'u-visuallyHidden': !themeStandaloneLabel }" for="inputText5" ng-bind="label"></label>
                                    <span class="u-visuallyHidden ng-binding" role="alert" id="inputText5-error"></span>
                                    <div class="InputText-inputAndErrorContainer" ng-class="{ 'InputText-prefixIcon': hasPrefixIcon }">
                                       <div class="InputText-inputContainer" ng-transclude="" ng-class="{
                                          'InputText-inputInvalid': isValid === false,
                                          'InputText-inputValid': isValid === true
                                          }">
                                          <input ng-model="service.address.address2" placeholder="Suite / Apt" class="ng-scope ng-pristine ng-valid" id="inputText5" type="text">
                                       </div>
                                       <div class="InputText-errorMask ng-binding"></div>
                                    </div>
                                 </div>
                              </input-text>
                              <input-text class="pro-profile-business-info__input--condensed ng-isolate-scope" theme-standalone-label="">
                                 <div class="InputText">
                                    <label class="tp-label ng-binding" ng-class="{ 'u-visuallyHidden': !themeStandaloneLabel }" for="inputText6" ng-bind="label"></label>
                                    <span class="u-visuallyHidden ng-binding" role="alert" id="inputText6-error"></span>
                                    <div class="InputText-inputAndErrorContainer" ng-class="{ 'InputText-prefixIcon': hasPrefixIcon }">
                                       <div class="InputText-inputContainer" ng-transclude="" ng-class="{
                                          'InputText-inputInvalid': isValid === false,
                                          'InputText-inputValid': isValid === true
                                          }">
                                          <input ng-model="service.address.zip_code_id" placeholder="Zip Code" class="ng-scope ng-pristine ng-valid" id="inputText6" type="text">
                                       </div>
                                       <div class="InputText-errorMask ng-binding"></div>
                                    </div>
                                 </div>
                              </input-text>
                              <input-text class="pro-profile-business-info__input--condensed ng-isolate-scope" input-text-label="Year founded" numeric-only="" theme-standalone-label="">
                                 <div class="InputText">
                                    <label class="tp-label ng-binding" ng-class="{ 'u-visuallyHidden': !themeStandaloneLabel }" for="inputText7" ng-bind="label">Year founded</label>
                                    <span class="u-visuallyHidden ng-binding" role="alert" id="inputText7-error"></span>
                                    <div class="InputText-inputAndErrorContainer" ng-class="{ 'InputText-prefixIcon': hasPrefixIcon }">
                                       <div class="InputText-inputContainer" ng-transclude="" ng-class="{
                                          'InputText-inputInvalid': isValid === false,
                                          'InputText-inputValid': isValid === true
                                          }">
                                          <input ng-model="service.founding_year" class="ng-scope ng-pristine ng-valid" id="inputText7" type="text">
                                       </div>
                                       <div class="InputText-errorMask ng-binding"></div>
                                    </div>
                                 </div>
                              </input-text>
                              <input-text class="pro-profile-business-info__input--condensed ng-isolate-scope" input-text-label="Number of employees" numeric-only="" theme-standalone-label="">
                                 <div class="InputText">
                                    <label class="tp-label ng-binding" ng-class="{ 'u-visuallyHidden': !themeStandaloneLabel }" for="inputText8" ng-bind="label">Number of employees</label>
                                    <span class="u-visuallyHidden ng-binding" role="alert" id="inputText8-error"></span>
                                    <div class="InputText-inputAndErrorContainer" ng-class="{ 'InputText-prefixIcon': hasPrefixIcon }">
                                       <div class="InputText-inputContainer" ng-transclude="" ng-class="{
                                          'InputText-inputInvalid': isValid === false,
                                          'InputText-inputValid': isValid === true
                                          }">
                                          <input ng-model="service.employee_count" class="ng-scope ng-pristine ng-valid" id="inputText8" type="text">
                                       </div>
                                       <div class="InputText-errorMask ng-binding"></div>
                                    </div>
                                 </div>
                              </input-text>
                           </form>
                        </div>
                     </div>
                  </pro-profile-business-info>
               </section>
               <div class="pro-profile__section">
                  <header class="pro-profile__section__header" data-router-id="credentials">
                     <h1 class="tp-text-1--static tp-weight--medium pro-profile__section__title">
                        Credentials
                     </h1>
                  </header>
                  <pro-profile-credentials has-background-check="proProfile.originalData.service.has_background_check" background-check-url="proProfile.getCheckrUrl()" add-license-url="proProfile.getAddLicenseUrl()" manage-licenses-url="'/profile/credentials'" licenses="proProfile.originalData.service.full_user_licenses">
                     <div data-reactroot="" class="pro-profile-credentials">
                        <div class="pro-profile-credentials__type pro-profile-credentials__licenses">
                           <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" class="pro-profile-credentials__type-icon">
                              <path d="M8 15c-3.559-2.08-5.351-6.08-6.226-9h12.454C13.353 8.92 11.56 12.92 8 15zM8 1.5s3 2.5 7.001 1c0 0-.121 1.03-.5 2.52V5H1.5v.02c-.379-1.49-.499-2.52-.499-2.52C5 4 8 1.5 8 1.5zM8 0S5 4 0 1c0 0 .5 11.5 8 15 7.501-3.5 8.001-15 8.001-15C11 4 8 0 8 0z" fill-rule="evenodd"></path>
                           </svg>
                           <a class="pro-profile-credentials__link" href="/profile/services/W:h85DrJcpp4SA/license">Add a professional license</a>
                        </div>
                        <div class="pro-profile-credentials__type pro-profile-background-check">
                           <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" class="pro-profile-credentials__type-icon">
                              <path d="M11.12 7.14l-3.686 4.61-1.612-1.61a.476.476 0 0 0-.679 0 .482.482 0 0 0 0 .68l1.96 1.96c.014.02.022.04.04.06.055.05.119.09.187.12.175.07.385.04.529-.1.012-.02.017-.03.027-.04l3.956-4.96a.505.505 0 0 0 0-.72.51.51 0 0 0-.722 0zM14.001 15h-12V3h2.5v2H11.5V3h2.501v12zM5.5 2H7v-.5c0-.28.225-.5.501-.5H8.5c.277 0 .501.22.501.5V2h1.5v2H5.5V2zm6 0V1H10a1 1 0 0 0-.999-1H7c-.551 0-.999.45-.999 1h-1.5v1H1v14h14.001V2H11.5z" fill-rule="evenodd"></path>
                           </svg>
                           <a class="pro-profile-credentials__link" href="https://checkr.com/apply/thumbtack/e9c68059deb?custom_id=186v8t4s">Add a background check</a>
                        </div>
                     </div>
                  </pro-profile-credentials>
               </div>
               <div class="pro-profile__section">
                  <header class="pro-profile__section__header" data-router-id="media">
                     <h1 class="tp-text-1--static tp-weight--medium pro-profile__section__title">
                        Media
                     </h1>
                  </header>
                  <media-section>
                     <div class="media-section">
                        <!-- ngIf: !mediaSection.isEditing && mediaSection.service.media.length === 0 -->
                        <div class="pro-profile__section__content ng-scope" ng-if="!mediaSection.isEditing &amp;&amp; mediaSection.service.media.length === 0">
                           <div class="pro-profile__section__content-block
                              Flex Flex-horizontal-center media-section__prompt-container">
                              <div>
                                 <h2 class="tp-text-2--static tp-weight--medium">
                                    You haven't added any media yet
                                 </h2>
                                 <p class="tp-text-3--static">
                                    Improve your chances of getting hired by adding
                                    some pictures
                                 </p>
                              </div>
                              <button type="button" class="tp-button tp-button--medium media-section__add-btn" ng-click="mediaSection.setEditing()">
                              Add media
                              </button>
                           </div>
                        </div>
                        <!-- end ngIf: !mediaSection.isEditing && mediaSection.service.media.length === 0 -->
                        <!-- ngIf: mediaSection.isEditing ||
                           mediaSection.service.media.length > 0 -->
                        <!-- ngIf: mediaSection.service.media.length > 0 -->
                     </div>
                  </media-section>
               </div>
               <div class="pro-profile__section">
                  <header class="pro-profile__section__header" data-router-id="services">
                     <h1 class="tp-text-1--static tp-weight--medium pro-profile__section__title">
                        About
                     </h1>
                     <button class="tp-button--reset tp-link tp-weight--medium" type="button" ng-click="proProfile.triggerSectionChange('services')" ng-show="proProfile.isEditable
                        &amp;&amp; !proProfile.currentSection">
                     Edit
                     </button>
                     <div class="pro-profile__section__header__edit                                             Flex-horizontal-center ng-hide" ng-show="proProfile.isEditable &amp;&amp; proProfile.inEditView
                        &amp;&amp; proProfile.currentSection === 'services'">
                        <button type="button" class="tp-link pro-profile__section__top-link" ng-click="proProfile.save()" ng-disabled="proProfile.isUploadingPicture">
                        Save
                        </button>
                        <button type="button" class="tp-link tp-link--bad-news
                           pro-profile__section__top-link" ng-click="proProfile.cancelChanges()" ng-disabled="proProfile.isUploadingPicture">
                        Cancel
                        </button>
                     </div>
                  </header>
                  <div class="pro-profile__section__content" ng-hide="proProfile.inEditView
                     &amp;&amp; proProfile.currentSection === 'services'">
                     <div class="pro-profile__section__content-block">
                        <h2 class="tp-text-2--static tp-weight--medium">
                           How does your business stand out?
                        </h2>
                        <p class="tp-text-3--static">
                           <!-- ngIf: proProfile.model.answerData
                              .requiredAnswers[1] --><span class="pro-profile__section__content-block--pre-line ng-binding ng-scope" ng-bind="proProfile.model.answerData
                              .requiredAnswers[1]" ng-if="proProfile.model.answerData
                              .requiredAnswers[1]">We offer state of the art technology, eco-friendly products and equipment, competitive prices, and excellent customer service</span><!-- end ngIf: proProfile.model.answerData
                              .requiredAnswers[1] -->
                           <!-- ngIf: !proProfile.model.answerData
                              .requiredAnswers[1] -->
                        </p>
                     </div>
                     <div class="pro-profile__section__content-block">
                        <h2 class="tp-text-2--static tp-weight--medium">
                           What do you enjoy about the work you do?
                        </h2>
                        <p class="tp-text-3--static">
                           <!-- ngIf: proProfile.model.answerData
                              .requiredAnswers[2] --><span class="pro-profile__section__content-block--pre-line ng-binding ng-scope" ng-bind="proProfile.model.answerData
                              .requiredAnswers[2]" ng-if="proProfile.model.answerData
                              .requiredAnswers[2]">. We use only non-toxic and environmentally friendly cleaning agents, leaving your carpet squeaky clean and free from allergens.</span><!-- end ngIf: proProfile.model.answerData
                              .requiredAnswers[2] -->
                           <!-- ngIf: !proProfile.model.answerData
                              .requiredAnswers[2] -->
                        </p>
                     </div>
                  </div>
                  <div class="pro-profile__section__edit ng-hide" ng-show="proProfile.inEditView
                     &amp;&amp; proProfile.currentSection === 'services'
                     &amp;&amp; proProfile.isEditable">
                     <div class="pro-profile__section__edit__textarea">
                        <h2 class="tp-text-2--static tp-weight--medium tp-color--base">
                           How does your business stand out?
                        </h2>
                        <textarea ng-model="proProfile.model.answerData
                           .requiredAnswers[1]" class="ng-pristine ng-valid"></textarea>
                     </div>
                     <div class="pro-profile__section__edit__textarea">
                        <h2 class="tp-text-2--static tp-weight--medium tp-color--base">
                           What do you enjoy about the work you do?
                        </h2>
                        <textarea ng-model="proProfile.model.answerData
                           .requiredAnswers[2]" class="ng-pristine ng-valid"></textarea>
                     </div>
                  </div>
               </div>
               <div class="pro-profile__section pro-profile__section--reviews">
                  <header class="pro-profile__section__header" data-router-id="reviews">
                     <h1 class="tp-text-1--static tp-weight--medium pro-profile__section__title">
                        Reviews
                     </h1>
                  </header>
                  <pro-profile-reviews service="proProfile.originalData.service" show-ask-for-reviews-modal="proProfile.showAskForReviewsModal" reviews-page-url="/profile/services/W:h85DrJcpp4SA/reviews" class="ng-isolate-scope">
                     <div class="pro-profile-reviews">
                        <div class="pro-profile-reviews__reviews-container">
                           <div class="pro-profile-reviews__reviews-container__info">
                              <review-score-summary class="pro-profile-reviews__reviews-container__info__summary ng-isolate-scope" is-top-pro="proProfileReviews.service.is_top_pro" review-count="proProfileReviews.service.review_count" reviews-header-rating="proProfileReviews.service.reviews_header_rating">
                                 <div class="review-score-summary">
                                    <div class="review-score-summary__ratings-container">
                                       <div class="review-score-summary__average-rating tp-heading-4 ng-binding" ng-bind="reviewsHeaderRating">0.0</div>
                                       <!-- ngIf: isTopPro -->
                                    </div>
                                    <review-stars class="review-score-summary__review-stars review-score-summary__review-stars--small ng-scope" size="sm" display-only-rating="reviewsHeaderRating" hide-rating="">
                                       <div class="ReviewStars">
                                          <!-- ngIf: reviewStars.options.displayOnlyRating === true -->
                                          <div class="ReviewStars-container ng-scope" ng-if="reviewStars.options.displayOnlyRating === true">
                                             <!-- ngRepeat: i in [1,2,3,4,5] track by $index -->
                                             <svg-icon ng-repeat="i in [1,2,3,4,5] track by $index" ng-class="{'filled': reviewStars.getRatingAsInt() >= i }" type="star" size="sm" class="ng-scope theme-small IconContainer">
                                                <svg class="Icon" viewBox="0 0 16 16">
                                                   <use xlink:href="#thumbprinticon-star_16"></use>
                                                </svg>
                                             </svg-icon>
                                             <!-- end ngRepeat: i in [1,2,3,4,5] track by $index -->
                                             <svg-icon ng-repeat="i in [1,2,3,4,5] track by $index" ng-class="{'filled': reviewStars.getRatingAsInt() >= i }" type="star" size="sm" class="ng-scope theme-small IconContainer">
                                                <svg class="Icon" viewBox="0 0 16 16">
                                                   <use xlink:href="#thumbprinticon-star_16"></use>
                                                </svg>
                                             </svg-icon>
                                             <!-- end ngRepeat: i in [1,2,3,4,5] track by $index -->
                                             <svg-icon ng-repeat="i in [1,2,3,4,5] track by $index" ng-class="{'filled': reviewStars.getRatingAsInt() >= i }" type="star" size="sm" class="ng-scope theme-small IconContainer">
                                                <svg class="Icon" viewBox="0 0 16 16">
                                                   <use xlink:href="#thumbprinticon-star_16"></use>
                                                </svg>
                                             </svg-icon>
                                             <!-- end ngRepeat: i in [1,2,3,4,5] track by $index -->
                                             <svg-icon ng-repeat="i in [1,2,3,4,5] track by $index" ng-class="{'filled': reviewStars.getRatingAsInt() >= i }" type="star" size="sm" class="ng-scope theme-small IconContainer">
                                                <svg class="Icon" viewBox="0 0 16 16">
                                                   <use xlink:href="#thumbprinticon-star_16"></use>
                                                </svg>
                                             </svg-icon>
                                             <!-- end ngRepeat: i in [1,2,3,4,5] track by $index -->
                                             <svg-icon ng-repeat="i in [1,2,3,4,5] track by $index" ng-class="{'filled': reviewStars.getRatingAsInt() >= i }" type="star" size="sm" class="ng-scope theme-small IconContainer">
                                                <svg class="Icon" viewBox="0 0 16 16">
                                                   <use xlink:href="#thumbprinticon-star_16"></use>
                                                </svg>
                                             </svg-icon>
                                             <!-- end ngRepeat: i in [1,2,3,4,5] track by $index -->
                                             <!-- ngIf: !reviewStars.options.hideRating -->
                                          </div>
                                          <!-- end ngIf: reviewStars.options.displayOnlyRating === true -->
                                          <!-- ngIf: reviewStars.options.displayOnlyRating === false -->
                                          <!-- ngIf: reviewStars.options.displayOnlyRating === false -->
                                          <!-- ngIf: reviewStars.options.displayOnlyRating === false -->
                                       </div>
                                    </review-stars>
                                    <review-stars class="review-score-summary__review-stars review-score-summary__review-stars--large ng-scope" size="md" display-only-rating="reviewsHeaderRating" hide-rating="">
                                       <div class="ReviewStars">
                                          <!-- ngIf: reviewStars.options.displayOnlyRating === true -->
                                          <div class="ReviewStars-container ng-scope" ng-if="reviewStars.options.displayOnlyRating === true">
                                             <!-- ngRepeat: i in [1,2,3,4,5] track by $index -->
                                             <svg-icon ng-repeat="i in [1,2,3,4,5] track by $index" ng-class="{'filled': reviewStars.getRatingAsInt() >= i }" type="star" size="md" class="ng-scope theme-medium IconContainer">
                                                <svg class="Icon" viewBox="0 0 24 24">
                                                   <use xlink:href="#thumbprinticon-star_24"></use>
                                                </svg>
                                             </svg-icon>
                                             <!-- end ngRepeat: i in [1,2,3,4,5] track by $index -->
                                             <svg-icon ng-repeat="i in [1,2,3,4,5] track by $index" ng-class="{'filled': reviewStars.getRatingAsInt() >= i }" type="star" size="md" class="ng-scope theme-medium IconContainer">
                                                <svg class="Icon" viewBox="0 0 24 24">
                                                   <use xlink:href="#thumbprinticon-star_24"></use>
                                                </svg>
                                             </svg-icon>
                                             <!-- end ngRepeat: i in [1,2,3,4,5] track by $index -->
                                             <svg-icon ng-repeat="i in [1,2,3,4,5] track by $index" ng-class="{'filled': reviewStars.getRatingAsInt() >= i }" type="star" size="md" class="ng-scope theme-medium IconContainer">
                                                <svg class="Icon" viewBox="0 0 24 24">
                                                   <use xlink:href="#thumbprinticon-star_24"></use>
                                                </svg>
                                             </svg-icon>
                                             <!-- end ngRepeat: i in [1,2,3,4,5] track by $index -->
                                             <svg-icon ng-repeat="i in [1,2,3,4,5] track by $index" ng-class="{'filled': reviewStars.getRatingAsInt() >= i }" type="star" size="md" class="ng-scope theme-medium IconContainer">
                                                <svg class="Icon" viewBox="0 0 24 24">
                                                   <use xlink:href="#thumbprinticon-star_24"></use>
                                                </svg>
                                             </svg-icon>
                                             <!-- end ngRepeat: i in [1,2,3,4,5] track by $index -->
                                             <svg-icon ng-repeat="i in [1,2,3,4,5] track by $index" ng-class="{'filled': reviewStars.getRatingAsInt() >= i }" type="star" size="md" class="ng-scope theme-medium IconContainer">
                                                <svg class="Icon" viewBox="0 0 24 24">
                                                   <use xlink:href="#thumbprinticon-star_24"></use>
                                                </svg>
                                             </svg-icon>
                                             <!-- end ngRepeat: i in [1,2,3,4,5] track by $index -->
                                             <!-- ngIf: !reviewStars.options.hideRating -->
                                          </div>
                                          <!-- end ngIf: reviewStars.options.displayOnlyRating === true -->
                                          <!-- ngIf: reviewStars.options.displayOnlyRating === false -->
                                          <!-- ngIf: reviewStars.options.displayOnlyRating === false -->
                                          <!-- ngIf: reviewStars.options.displayOnlyRating === false -->
                                       </div>
                                    </review-stars>
                                    <ng-pluralize class="tp-text-3--static review-score-summary__review-count" count="reviewCount" when="{ one: '{} review', other: '{} reviews' }">0 reviews</ng-pluralize>
                                 </div>
                              </review-score-summary>
                              <review-bars class="pro-profile-reviews__reviews-container__info__review-bars ng-isolate-scope" ratings-count-bind="proProfileReviews.service.rating_counts">
                                 <div class="review-bars">
                                    <!-- ngRepeat: bar in reviewBars.bars -->
                                    <div class="review-bars__rating-container ng-scope" ng-repeat="bar in reviewBars.bars">
                                       <div class="review-bars__rating B3-R ng-binding" ng-bind="bar.rating">5</div>
                                       <div class="review-bars__icon">
                                          <svg-icon type="star_8x8" class="ng-scope IconContainer" style="width: 8px; height: 8px;">
                                             <svg class="Icon" viewBox="0 0 8 8">
                                                <use xlink:href="#thumbprinticon-star_8x8"></use>
                                             </svg>
                                          </svg-icon>
                                       </div>
                                       <div class="review-bars__rating-bar">
                                          <div class="review-bars__rating-fill" ng-style="bar.width" style="width: 0%;">
                                          </div>
                                       </div>
                                       <div class="review-bars__rating-pct B3-R ng-binding" ng-bind="bar.pct">0%</div>
                                    </div>
                                    <!-- end ngRepeat: bar in reviewBars.bars -->
                                    <div class="review-bars__rating-container ng-scope" ng-repeat="bar in reviewBars.bars">
                                       <div class="review-bars__rating B3-R ng-binding" ng-bind="bar.rating">4</div>
                                       <div class="review-bars__icon">
                                          <svg-icon type="star_8x8" class="ng-scope IconContainer" style="width: 8px; height: 8px;">
                                             <svg class="Icon" viewBox="0 0 8 8">
                                                <use xlink:href="#thumbprinticon-star_8x8"></use>
                                             </svg>
                                          </svg-icon>
                                       </div>
                                       <div class="review-bars__rating-bar">
                                          <div class="review-bars__rating-fill" ng-style="bar.width" style="width: 0%;">
                                          </div>
                                       </div>
                                       <div class="review-bars__rating-pct B3-R ng-binding" ng-bind="bar.pct">0%</div>
                                    </div>
                                    <!-- end ngRepeat: bar in reviewBars.bars -->
                                    <div class="review-bars__rating-container ng-scope" ng-repeat="bar in reviewBars.bars">
                                       <div class="review-bars__rating B3-R ng-binding" ng-bind="bar.rating">3</div>
                                       <div class="review-bars__icon">
                                          <svg-icon type="star_8x8" class="ng-scope IconContainer" style="width: 8px; height: 8px;">
                                             <svg class="Icon" viewBox="0 0 8 8">
                                                <use xlink:href="#thumbprinticon-star_8x8"></use>
                                             </svg>
                                          </svg-icon>
                                       </div>
                                       <div class="review-bars__rating-bar">
                                          <div class="review-bars__rating-fill" ng-style="bar.width" style="width: 0%;">
                                          </div>
                                       </div>
                                       <div class="review-bars__rating-pct B3-R ng-binding" ng-bind="bar.pct">0%</div>
                                    </div>
                                    <!-- end ngRepeat: bar in reviewBars.bars -->
                                    <div class="review-bars__rating-container ng-scope" ng-repeat="bar in reviewBars.bars">
                                       <div class="review-bars__rating B3-R ng-binding" ng-bind="bar.rating">2</div>
                                       <div class="review-bars__icon">
                                          <svg-icon type="star_8x8" class="ng-scope IconContainer" style="width: 8px; height: 8px;">
                                             <svg class="Icon" viewBox="0 0 8 8">
                                                <use xlink:href="#thumbprinticon-star_8x8"></use>
                                             </svg>
                                          </svg-icon>
                                       </div>
                                       <div class="review-bars__rating-bar">
                                          <div class="review-bars__rating-fill" ng-style="bar.width" style="width: 0%;">
                                          </div>
                                       </div>
                                       <div class="review-bars__rating-pct B3-R ng-binding" ng-bind="bar.pct">0%</div>
                                    </div>
                                    <!-- end ngRepeat: bar in reviewBars.bars -->
                                    <div class="review-bars__rating-container ng-scope" ng-repeat="bar in reviewBars.bars">
                                       <div class="review-bars__rating B3-R ng-binding" ng-bind="bar.rating">1</div>
                                       <div class="review-bars__icon">
                                          <svg-icon type="star_8x8" class="ng-scope IconContainer" style="width: 8px; height: 8px;">
                                             <svg class="Icon" viewBox="0 0 8 8">
                                                <use xlink:href="#thumbprinticon-star_8x8"></use>
                                             </svg>
                                          </svg-icon>
                                       </div>
                                       <div class="review-bars__rating-bar">
                                          <div class="review-bars__rating-fill" ng-style="bar.width" style="width: 0%;">
                                          </div>
                                       </div>
                                       <div class="review-bars__rating-pct B3-R ng-binding" ng-bind="bar.pct">0%</div>
                                    </div>
                                    <!-- end ngRepeat: bar in reviewBars.bars -->
                                 </div>
                              </review-bars>
                           </div>
                           <!-- ngIf: proProfileReviews.hasCharacteristicLabels() -->
                           <!-- ngIf: proProfileReviews.reviewThreads.length > 0 -->
                           <!-- ngIf: proProfileReviews.reviewThreads.length === 0 -->
                           <div ng-if="proProfileReviews.reviewThreads.length === 0" class="pro-profile-reviews__no-reviews tp-text-1--static ng-scope">
                              No reviews
                           </div>
                           <!-- end ngIf: proProfileReviews.reviewThreads.length === 0 -->
                        </div>
                        <ask-for-reviews show-modal="showAskForReviewsModal" class="ng-isolate-scope">
                           <div class="ask-for-reviews">
                              <img ng-src="https://static.thumbtackstatic.com/_assets/images/release/pages/profile-reviews/submodules/ask-for-reviews/images/star-56386670.svg" class="ask-for-reviews__image" alt="Star icon" src="https://static.thumbtackstatic.com/_assets/images/release/pages/profile-reviews/submodules/ask-for-reviews/images/star-56386670.svg">
                              <div class="ask-for-reviews__body">
                                 <div class="ask-for-reviews__text">
                                    <div class="T1-R">
                                       Get more reviews, get hired more
                                    </div>
                                    <p class="B2-R">
                                       Ask past customers to leave a review for you on Thumbtack.
                                    </p>
                                 </div>
                                 <button class="ask-for-reviews__button ask-for-reviews__button--large Button theme-large" ng-click="onAskForReviewsClick()">
                                 Ask for reviews
                                 </button>
                                 <button class="ask-for-reviews__button ask-for-reviews__button--medium Button theme-medium" ng-click="onAskForReviewsClick()">
                                 Ask for reviews
                                 </button>
                              </div>
                           </div>
                        </ask-for-reviews>
                      
                     </div>
                  </pro-profile-reviews>
               </div>
               <div class="pro-profile__section">
                  <header class="pro-profile__section__header" data-router-id="q-and-a">
                     <h1 class="tp-text-1--static tp-weight--medium pro-profile__section__title">
                        Questions and Answers
                     </h1>
                     <button class="tp-button--reset tp-link tp-weight--medium" type="button" ng-click="proProfile.triggerSectionChange('q-and-a')" ng-show="proProfile.isEditable
                        &amp;&amp; !proProfile.currentSection">
                     Edit
                     </button>
                     <div class="pro-profile__section__header__edit                                             Flex-horizontal-center ng-hide" ng-show="proProfile.isEditable &amp;&amp; proProfile.inEditView
                        &amp;&amp; proProfile.currentSection === 'q-and-a'">
                        <button type="button" class="tp-link pro-profile__section__top-link" ng-click="proProfile.save()" ng-disabled="proProfile.isUploadingPicture">
                        Save
                        </button>
                        <button type="button" class="tp-link tp-link--bad-news
                           pro-profile__section__top-link" ng-click="proProfile.cancelChanges()" ng-disabled="proProfile.isUploadingPicture">
                        Cancel
                        </button>
                     </div>
                  </header>
                  <div class="pro-profile__section__content" ng-hide="proProfile.inEditView
                     &amp;&amp; proProfile.currentSection === 'q-and-a'">
                     <!-- ngRepeat: (key, service_question)
                        in proProfile.model.answerData.questions -->
                     <div class="pro-profile__section__content-block ng-scope" ng-repeat="(key, service_question)
                        in proProfile.model.answerData.questions">
                        <h2 class="tp-text-2--static tp-weight--medium ng-binding" ng-bind="service_question.question">What should the customer know about your pricing (e.g., discounts, fees)?</h2>
                        <!-- ngIf: service_question.answer -->
                        <!-- ngIf: !service_question.answer -->
                        <p class="tp-text-3--static ng-scope" ng-if="!service_question.answer">
                           Not Answered
                        </p>
                        <!-- end ngIf: !service_question.answer -->
                     </div>
                     <!-- end ngRepeat: (key, service_question)
                        in proProfile.model.answerData.questions -->
                     <div class="pro-profile__section__content-block ng-scope" ng-repeat="(key, service_question)
                        in proProfile.model.answerData.questions">
                        <h2 class="tp-text-2--static tp-weight--medium ng-binding" ng-bind="service_question.question">What is your typical process for working with a new customer?</h2>
                        <!-- ngIf: service_question.answer -->
                        <!-- ngIf: !service_question.answer -->
                        <p class="tp-text-3--static ng-scope" ng-if="!service_question.answer">
                           Not Answered
                        </p>
                        <!-- end ngIf: !service_question.answer -->
                     </div>
                     <!-- end ngRepeat: (key, service_question)
                        in proProfile.model.answerData.questions -->
                     <div class="pro-profile__section__content-block ng-scope" ng-repeat="(key, service_question)
                        in proProfile.model.answerData.questions">
                        <h2 class="tp-text-2--static tp-weight--medium ng-binding" ng-bind="service_question.question">What education and/or training do you have that relates to your work?</h2>
                        <!-- ngIf: service_question.answer -->
                        <!-- ngIf: !service_question.answer -->
                        <p class="tp-text-3--static ng-scope" ng-if="!service_question.answer">
                           Not Answered
                        </p>
                        <!-- end ngIf: !service_question.answer -->
                     </div>
                     <!-- end ngRepeat: (key, service_question)
                        in proProfile.model.answerData.questions -->
                     <div class="pro-profile__section__content-block ng-scope" ng-repeat="(key, service_question)
                        in proProfile.model.answerData.questions">
                        <h2 class="tp-text-2--static tp-weight--medium ng-binding" ng-bind="service_question.question">How did you get started doing this type of work?</h2>
                        <!-- ngIf: service_question.answer -->
                        <!-- ngIf: !service_question.answer -->
                        <p class="tp-text-3--static ng-scope" ng-if="!service_question.answer">
                           Not Answered
                        </p>
                        <!-- end ngIf: !service_question.answer -->
                     </div>
                     <!-- end ngRepeat: (key, service_question)
                        in proProfile.model.answerData.questions -->
                     <div class="pro-profile__section__content-block ng-scope" ng-repeat="(key, service_question)
                        in proProfile.model.answerData.questions">
                        <h2 class="tp-text-2--static tp-weight--medium ng-binding" ng-bind="service_question.question">What types of customers have you worked with?</h2>
                        <!-- ngIf: service_question.answer -->
                        <!-- ngIf: !service_question.answer -->
                        <p class="tp-text-3--static ng-scope" ng-if="!service_question.answer">
                           Not Answered
                        </p>
                        <!-- end ngIf: !service_question.answer -->
                     </div>
                     <!-- end ngRepeat: (key, service_question)
                        in proProfile.model.answerData.questions -->
                     <div class="pro-profile__section__content-block ng-scope" ng-repeat="(key, service_question)
                        in proProfile.model.answerData.questions">
                        <h2 class="tp-text-2--static tp-weight--medium ng-binding" ng-bind="service_question.question">Describe a recent project you are fond of. How long did it take?</h2>
                        <!-- ngIf: service_question.answer -->
                        <!-- ngIf: !service_question.answer -->
                        <p class="tp-text-3--static ng-scope" ng-if="!service_question.answer">
                           Not Answered
                        </p>
                        <!-- end ngIf: !service_question.answer -->
                     </div>
                     <!-- end ngRepeat: (key, service_question)
                        in proProfile.model.answerData.questions -->
                     <div class="pro-profile__section__content-block ng-scope" ng-repeat="(key, service_question)
                        in proProfile.model.answerData.questions">
                        <h2 class="tp-text-2--static tp-weight--medium ng-binding" ng-bind="service_question.question">What advice would you give a customer looking to hire a provider in your area of work?</h2>
                        <!-- ngIf: service_question.answer -->
                        <!-- ngIf: !service_question.answer -->
                        <p class="tp-text-3--static ng-scope" ng-if="!service_question.answer">
                           Not Answered
                        </p>
                        <!-- end ngIf: !service_question.answer -->
                     </div>
                     <!-- end ngRepeat: (key, service_question)
                        in proProfile.model.answerData.questions -->
                     <div class="pro-profile__section__content-block ng-scope" ng-repeat="(key, service_question)
                        in proProfile.model.answerData.questions">
                        <h2 class="tp-text-2--static tp-weight--medium ng-binding" ng-bind="service_question.question">What questions should customers think through before talking to professionals about their project?</h2>
                        <!-- ngIf: service_question.answer -->
                        <!-- ngIf: !service_question.answer -->
                        <p class="tp-text-3--static ng-scope" ng-if="!service_question.answer">
                           Not Answered
                        </p>
                        <!-- end ngIf: !service_question.answer -->
                     </div>
                     <!-- end ngRepeat: (key, service_question)
                        in proProfile.model.answerData.questions -->
                  </div>
                  <div class="pro-profile__section__edit ng-hide" ng-show="proProfile.inEditView
                     &amp;&amp; proProfile.currentSection === 'q-and-a'
                     &amp;&amp; proProfile.isEditable">
                     <!-- ngRepeat: (key, service_question) in
                        proProfile.model.answerData.questions -->
                     <div class="pro-profile__section__edit__textarea ng-scope" ng-repeat="(key, service_question) in
                        proProfile.model.answerData.questions">
                        <h2 class="tp-text-2--static tp-weight--medium tp-color--muted ng-binding" ng-bind="service_question.question">What should the customer know about your pricing (e.g., discounts, fees)?</h2>
                        <textarea ng-model="proProfile.model.answerData
                           .questions[key].answer" class="ng-pristine ng-valid"></textarea>
                     </div>
                     <!-- end ngRepeat: (key, service_question) in
                        proProfile.model.answerData.questions -->
                     <div class="pro-profile__section__edit__textarea ng-scope" ng-repeat="(key, service_question) in
                        proProfile.model.answerData.questions">
                        <h2 class="tp-text-2--static tp-weight--medium tp-color--muted ng-binding" ng-bind="service_question.question">What is your typical process for working with a new customer?</h2>
                        <textarea ng-model="proProfile.model.answerData
                           .questions[key].answer" class="ng-pristine ng-valid"></textarea>
                     </div>
                     <!-- end ngRepeat: (key, service_question) in
                        proProfile.model.answerData.questions -->
                     <div class="pro-profile__section__edit__textarea ng-scope" ng-repeat="(key, service_question) in
                        proProfile.model.answerData.questions">
                        <h2 class="tp-text-2--static tp-weight--medium tp-color--muted ng-binding" ng-bind="service_question.question">What education and/or training do you have that relates to your work?</h2>
                        <textarea ng-model="proProfile.model.answerData
                           .questions[key].answer" class="ng-pristine ng-valid"></textarea>
                     </div>
                     <!-- end ngRepeat: (key, service_question) in
                        proProfile.model.answerData.questions -->
                     <div class="pro-profile__section__edit__textarea ng-scope" ng-repeat="(key, service_question) in
                        proProfile.model.answerData.questions">
                        <h2 class="tp-text-2--static tp-weight--medium tp-color--muted ng-binding" ng-bind="service_question.question">How did you get started doing this type of work?</h2>
                        <textarea ng-model="proProfile.model.answerData
                           .questions[key].answer" class="ng-pristine ng-valid"></textarea>
                     </div>
                     <!-- end ngRepeat: (key, service_question) in
                        proProfile.model.answerData.questions -->
                     <div class="pro-profile__section__edit__textarea ng-scope" ng-repeat="(key, service_question) in
                        proProfile.model.answerData.questions">
                        <h2 class="tp-text-2--static tp-weight--medium tp-color--muted ng-binding" ng-bind="service_question.question">What types of customers have you worked with?</h2>
                        <textarea ng-model="proProfile.model.answerData
                           .questions[key].answer" class="ng-pristine ng-valid"></textarea>
                     </div>
                     <!-- end ngRepeat: (key, service_question) in
                        proProfile.model.answerData.questions -->
                     <div class="pro-profile__section__edit__textarea ng-scope" ng-repeat="(key, service_question) in
                        proProfile.model.answerData.questions">
                        <h2 class="tp-text-2--static tp-weight--medium tp-color--muted ng-binding" ng-bind="service_question.question">Describe a recent project you are fond of. How long did it take?</h2>
                        <textarea ng-model="proProfile.model.answerData
                           .questions[key].answer" class="ng-pristine ng-valid"></textarea>
                     </div>
                     <!-- end ngRepeat: (key, service_question) in
                        proProfile.model.answerData.questions -->
                     <div class="pro-profile__section__edit__textarea ng-scope" ng-repeat="(key, service_question) in
                        proProfile.model.answerData.questions">
                        <h2 class="tp-text-2--static tp-weight--medium tp-color--muted ng-binding" ng-bind="service_question.question">What advice would you give a customer looking to hire a provider in your area of work?</h2>
                        <textarea ng-model="proProfile.model.answerData
                           .questions[key].answer" class="ng-pristine ng-valid"></textarea>
                     </div>
                     <!-- end ngRepeat: (key, service_question) in
                        proProfile.model.answerData.questions -->
                     <div class="pro-profile__section__edit__textarea ng-scope" ng-repeat="(key, service_question) in
                        proProfile.model.answerData.questions">
                        <h2 class="tp-text-2--static tp-weight--medium tp-color--muted ng-binding" ng-bind="service_question.question">What questions should customers think through before talking to professionals about their project?</h2>
                        <textarea ng-model="proProfile.model.answerData
                           .questions[key].answer" class="ng-pristine ng-valid"></textarea>
                     </div>
                     <!-- end ngRepeat: (key, service_question) in
                        proProfile.model.answerData.questions -->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <reviews-modal show-modal="proProfile.showAskForReviewsModal" class="ng-isolate-scope">
      <!-- ngIf: showModal -->
   </reviews-modal>
</pro-profile>
@endsection
@section('javascript')

@endsection
