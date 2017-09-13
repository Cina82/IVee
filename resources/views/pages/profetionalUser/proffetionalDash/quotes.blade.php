@extends('layouts.proffetionalDash')

@section('css')
<link rel="stylesheet" href="{{URL::to('public/assets/quoting-page-872c1fa2.css')}}"/> 
<!-- <link rel="stylesheet" href="{{URL::to('public/assets/core-934e9bc3.css')}}"/>  -->
<link rel="stylesheet" href="{{URL::to('public/assets/coachmark-7b80e26e.css')}}"/> 
<link rel="stylesheet" href="{{URL::to('public/assets/instant-quote-tutorial-modal-98a8d918.css')}}"/> 
@endsection

@section('content')

 <quoting-page base-path="" class="ng-scope">

    <div class="QuotingPage">

        <split-view class="SplitView-mainWrapper ng-isolate-scope" is-content-showing-bind="manager.showContent" id="split-view-main-wrapper">
            <banner-alert disable-close="" hidden-by-default="" banner-id="delete" theme="caution" class="DeleteBanner ng-isolate-scope">
                <div class="BannerAlert is-hidden">
                    <div class="BannerAlert-body theme-caution">
                        <div class="icon closeIcon ng-hide" ng-class="{'close-aligned-left': banner.closeAlignedLeft}" ng-click="banner.dismiss()" ng-hide="banner.disableClose">

                            <svg-icon type="close" size="sm" class="ng-scope theme-small IconContainer">
                                <svg class="Icon" viewBox="0 0 16 16">
                                    <use xlink:href="#thumbprinticon-close_16"></use>
                                </svg>
                            </svg-icon>
                        </div>

                        <div class="BannerAlert-content T3-R theme-inverted" ng-transclude="">
                            <svg-icon type="quote" size="md" class="ng-scope theme-medium IconContainer">
                                <svg class="Icon" viewBox="0 0 24 24">
                                    <use xlink:href="#thumbprinticon-quote_24"></use>
                                </svg>
                            </svg-icon><span class="ng-scope"> Quote template deleted
</span></div>
                    </div>
                </div>
            </banner-alert>

            <div class="SplitView-sidePane RequestDetailsPane HasStickyBottomBar" ng-class="{ 'theme-gate': '' } ">
                <div class="splitViewSide-grid">
                    <div class="column-lg-6">
                    @foreach($customerData as $cust)

                         <article class="RequestDetails ng-scope" request-details="">

                            <div class="RequestDetails-summary">
                                <img src="/boundary-map/image/90255/420/140" alt="Huntington Park, CA">
                                <div class="RequestDetails-customer">
                                    <div class="RequestDetails-avatar">
                                        <avatar class="Avatar Avatar--lg">
                                            <div class="Avatar__circle">
                                                <div class="Avatar__initials">JC</div>

                                            </div>

                                        </avatar>

                                    </div>
                                    <p class="RequestDetails-customer-name T1-R">
                                        {{$cust->userName}}
                                    </p>
                                    <p class="RequestDetails-customer-info B3-S">
                                        Huntington Park, CA 90255
                                    </p>
                                </div>
                                <div sticky-header="" class="RequestDetails-header StickyHeader StickyHeader-unstuck">

                                </div>
                                <div class="RequestDetails-metadata page-grid theme-full-bleed-at-sm">
                                    <div class="RequestDetails-metadata-datum T2-S column-lg-2">
                                        <svg-icon type="quotes" size="sm" class="ng-scope theme-small IconContainer">
                                            <svg class="Icon" viewBox="0 0 16 16">
                                                <use xlink:href="#thumbprinticon-quotes_16"></use>
                                            </svg>
                                        </svg-icon>
                                        1/5
                                        <p class="RequestDetails-metadata-description B4-S">
                                            quotes sent
                                        </p>
                                    </div>
                                    <div class="RequestDetails-metadata-datum T2-S column-lg-2">
                                        <svg-icon type="expiration" size="sm" class="ng-scope theme-small IconContainer">
                                            <svg class="Icon" viewBox="0 0 16 16">
                                                <use xlink:href="#thumbprinticon-expiration_16"></use>
                                            </svg>
                                        </svg-icon>
                                        16h 42m
                                        <p class="RequestDetails-metadata-description B4-S">
                                            until request expires
                                        </p>
                                    </div>
                                    <div class="RequestDetails-metadata-datum T2-S column-lg-2">
                                        <svg-icon type="dollar-skinny_8x15" size="sm" class="ng-scope IconContainer" style="width: 8px; height: 15px;">
                                            <svg class="Icon" viewBox="0 0 8 15">
                                                <use xlink:href="#thumbprinticon-dollar-skinny_8x15"></use>
                                            </svg>
                                        </svg-icon>
                                        1.67
                                        <p class="RequestDetails-metadata-description B4-S">
                                            to send quote
                                        </p>
                                    </div>
                                </div>

                                <div class="RequestDetails-infoBubble">
                                    <span class="tp-text-3--static RequestDetails-infoBubble-heading">
                            Same base price, now in dollars.
                        </span>
                                    <div class="tp-text-3--static RequestDetails-infoBubble-text">
                                        1 credit x $1.67 each = $1.67
                                        <a href="">Learn more</a>
                                    </div>
                                </div>
                                <div class="RequestDetails-header StickyHeader StickyHeader-fixed ng-scope StickyHeader-stuck" style="top: 80px; left: 0px; width: 337.917px;">
                                    <div class="StickyHeader-content StickyHeader-stuckOnly">
                                        <div class="RequestDetails-header-left T1-R">
                                            {{$cust->userName}}
                                        </div>
                                        <div class="RequestDetails-header-right B2-S">
                                            <a ng-click="manager.declineRequest()">Pass</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="RequestDetails-incentiveBanner" id="incentive-banner">
                                New pro discount! Quote for 75% off.
                                <span class="TooltipIcon theme-gray" id="incentiveDetails-991216390"></span>

                            </div>

                            <div class="RequestDetails-details">
                                <dl style="text-align:right !important;">
                                    <dt class="T2-S">Job type</dt>
                                    <dd class="B2-S">
                                        {{$cust->serviceName}}
                                    </dd>
                                    @php $decodeQuestion = json_decode($cust->questionAndOption);
                                    $count = count($decodeQuestion->question);
                                    @endphp
                                    @for($i=0;$i<$count;$i++)
                                    <dt class="T2-S">{{$decodeQuestion->question[$i]}}</dt>
                                    @php $decodeOption = json_decode($decodeQuestion->options);
                                    $option = $decodeOption[$i];
                                    @endphp
                                    <dd class="B2-S">
                                    @foreach($option as $opn)
                                        {{$opn." "}}
                                    @endforeach
                                    </dd>
                                    @endfor
                                    <dt class="T2-S">Need help quoting?</dt>
                                    <dd class="B2-S">
                                        <a href="https://help.thumbtack.com/?vw=sg" target="_blank">Help Center</a>
                                    </dd>
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
                                                                You'll only use credits the first time a customer messages you, calls you, schedules an appointment, marks you as hired, or pays you.
                                                            </p>
                                                        </div>

                                                        <div class="B2-R CustomerContactModal-section ng-scope">
                                                            <div class="T2-R CustomerContactModal-question">
                                                                Why has the cost changed?
                                                            </div>

                                                            <p>
                                                                You'll pay less frequently and get more value for your money because all your dollars go towards a conversation with an interested customer. Remember, credits start at $1.67 each.
                                                            </p>
                                                        </div>

                                                        <div class="CustomerContactModal-section theme-link ng-scope">
                                                            <a class="Link" target="_blank" href="/customer-responses">
            Learn more <svg-icon type="right-caret" size="sm" class="ng-scope theme-small IconContainer"><svg class="Icon" viewBox="0 0 16 16">
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
                            @endforeach
                        </article>

                    </div>

                    <div class="SplitView-mobileOnly">
                        <div class="StickyBarBottom">
                            <button show-content-pane-onclick="" class="Button theme-large" ng-click="manager.showTemplateCardSelector
                                                    ? manager.goToReuseForm()
                                                    : manager.goToQuoteForm();
                                                manager.adjustCurrencyPosition();" event-track="quote form/click show quote form" event-track-on="click" event-track-data="manager.getEventTrackingData()">
                                Send Quote
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="SplitView-contentPane QuotingPage-QuoteView HasStickyBottomBar is-collapsed" ng-class="{ 'theme-gate': '' }">
                <toolbar class="ng-isolate-scope">
                    <div class="Toolbar">
                        <div class="Toolbar-content" dir="rtl" >
                            <div class="Toolbar-left H4-R ng-scope">
                                <span class="Toolbar-left-content ng-binding" ng-bind="manager.getToolbarText()">Create quote</span>
                            </div>

                            <!-- ngIf: manager.showTemplateCardSelector -->

                            <ul class="Toolbar-right ng-scope ng-hide" ng-show="manager.enableTemplateCardSelector &amp;&amp; !manager.showTemplateCardSelector
            &amp;&amp; selector.getActiveTemplateCount() > 0">
                                <li class="Toolbar-item Toolbar-item-text" ng-click="manager.goToReuseForm(); manager.updateShowContentFlag()" event-track="quote form/click cancel" event-track-on="click" event-track-data="manager.getTrackingEventData()">
                                    <span>Cancel</span>
                                </li>

                                <li class="Toolbar-item" ng-hide="manager.model.isNewQuote" ng-click="manager.showMoreModal()" event-track="quote form/click template menu" event-track-on="click" event-track-data="manager.extendTrackingEvent()">
                                    <svg-icon class="theme-rotate-90 ng-scope theme-small IconContainer" type="more" size="sm">
                                        <svg class="Icon" viewBox="0 0 16 16">
                                            <use xlink:href="#thumbprinticon-more_16"></use>
                                        </svg>
                                    </svg-icon>
                                </li>
                            </ul>

                        </div>
                    </div>
                </toolbar>

                <div class="SplitView-mobileOnly">
                    <div class="QuotingPage-mobileHeader StickyHeader StickyHeader-unstuck" sticky-header="">
                    </div>
                    <div class="QuotingPage-mobileHeader StickyHeader StickyHeader-unstuck StickyHeader-fixed ng-scope">
                    </div>
                </div>

                <div class="page-grid" ng-show="manager.isInCardMode || manager.isEditing">
                    <div class="column-lg-4 column-lg-offset-1 column-md-6 column-md-offset-0">
                        <div class="NameAndPage">
                            <inline-edit class="InlineEdit ng-isolate-scope isOnEditPage ng-hide" type-class="B2-S" ng-class="{isOnEditPage: !manager.showTemplateCardSelector}" ng-hide="(!manager.showTemplateCardSelector &amp;&amp; !manager.isEditing) || manager.model.isNewQuote" value="selector.getCurrentTemplate().template_name" placeholder="Untitled template" maxlength="40" on-edit="selector.updateName(value)" show-icon="" event-track="quote form/click template name" event-track-on="click" event-track-data="manager.getEventTrackingData()">
                                <div class="InlineEdit">
                                    <input class="InlineEdit-field B2-S ng-pristine ng-valid" placeholder="Untitled template" maxlength="40" ng-model="value" type="inline-edit">

                                    <div class="InlineEdit-icon" style="left: 136px;">
                                        <!-- ngIf: showIcon -->
                                        <svg-icon type="pencil" size="sm" ng-if="showIcon" class="ng-scope theme-small IconContainer">
                                            <svg class="Icon" viewBox="0 0 16 16">
                                                <use xlink:href="#thumbprinticon-pencil_16"></use>
                                            </svg>
                                        </svg-icon>
                                        <!-- end ngIf: showIcon -->
                                    </div>

                                    <span class="InlineEdit-measurer B2-S" style="">Untitled template</span>
                                </div>
                            </inline-edit>

                            <div class="B2-S theme-secondary ng-binding ng-hide" ng-show="manager.showTemplateCardSelector" ng-bind="selector.getPagination()">1/0</div>
                        </div>
                    </div>
                </div>

                <div class="QuotingPage-quotingSection">
                    <div ng-hide="manager.showTemplateCardSelector" class="">

                        <quote-form manager-bind="manager" show-price-guidance="" price-estimate-upper-bound="" revert-modal-id="" class="ng-scope">
                            <div class="QuoteForm page-grid theme-full-bleed-at-sm has-sticky-bottom-bar" dir="rtl">
                                <form class="QuoteForm-container column-lg-4 column-lg-offset-1 column-md-6 column-md-offset-0 ng-scope ng-valid ng-dirty" id="quote-on-request" method="post" novalidate="true" action="{{URL::to('addProfessionalQuotes')}}">
                                    {{csrf_field()}}
                                    
                                    @foreach($customerData as $cust)
                                     
                                    <fieldset>
                                       <input type="hidden" name="serviceId" value="{{$cust->servId}}">
                                       <input type="hidden" name="custId" value="{{$cust->custId}}">
                                       <input type="hidden" name="serviceName" value="{{$cust->serviceName}}">
                                        <div class="T2-S QuoteForm-sectionHeader">What's your price?</div>

                                        <div class="QuoteForm-section QuoteForm-priceWrap">
                                            <div schema="quoteFormSchema.price" schema-assign="EmptySchema" class="QuoteForm-price ng-scope">
                                                <input-price class="ng-isolate-scope">
                                                    <div class="InputPrice">
                                                        <div class="Flex InputPrice-Flex">
                                                            <div class="InputPrice-currency modifier-prefix H3-R ng-binding ng-scope">
                                                                $
                                                            </div>
                                                            <input class="InputPrice-price-field"  placeholder="0" maxlength="6" ng-disabled="isDisabled" style="padding-right: 20px !important;"type="tel" name="quotePrice" onkeydown='return((event.which >= 48 && event.which <= 57) || (event.which >= 96 && event.which <= 105)) 
                                                                || event.which == 8 || event.which == 46'>
                                                        </div>
                                                        <span class="InputPrice-dummyText" ng-class="{
            'theme-payment-request': themePaymentRequest,
            'theme-offer': inputPrice.themeOffer
        }"></span>
                                                        <div class="InputPrice-inputContainer" ng-transclude="">
                                                            <input schema="quoteFormSchema.price.fixed" schema-assign="NumberSchema" schema-optional-if="quoteForm.model.estimateType.selectedOption !==
                                            '1'" ng-model="quoteForm.model.price.fixed" event-track="quote form/click price field" event-track-on="click" autocomplete="off" name="estimate_fixed_price_per_unit" placeholder="0" maxlength="6" class="ng-scope ng-valid ng-dirty" tabindex="-1" value="" type="hidden">
                                                            <!-- ngRepeat: $err in $validationErrors -->
                                                        </div>
                                                    </div>
                                                </input-price>
                                                <input-price is-disabled="quoteForm.isDisabled" ng-show="quoteForm.model.estimateType.selectedOption ===
                                        '2'" class="ng-isolate-scope ng-hide">
                                                    <div class="InputPrice" ng-class="{ 'theme-offer': inputPrice.themeOffer }">
                                                        <div class="Flex InputPrice-Flex" ng-class="{
                'theme-left-align': inputPrice.leftAlign,
                'theme-offer': inputPrice.themeOffer,
            }">
                                                            <!-- ngIf: inputPrice.prefix -->
                                                            <div ng-if="inputPrice.prefix" class="InputPrice-currency modifier-prefix H3-R ng-binding ng-scope" ng-class="{
                    'theme-error': hasInputError,
                    'theme-payment-request': themePaymentRequest,
                    'theme-left-align': inputPrice.leftAlign,
                    'theme-offer': inputPrice.themeOffer
                }">
                                                                $
                                                            </div>
                                                        <input class="InputPrice-price-field"  placeholder="0" maxlength="6" ng-disabled="isDisabled" style="width: 10px;" type="tel">
                                                            <!-- ngIf: inputPrice.suffix -->
                                                        </div>
                                                        <span class="InputPrice-dummyText" ng-class="{
            'theme-payment-request': themePaymentRequest,
            'theme-offer': inputPrice.themeOffer
        }"></span>
                                                        <div class="InputPrice-inputContainer" ng-transclude="">
                                                            <input schema="quoteFormSchema.price.hourly" schema-assign="NumberSchema" schema-optional-if="quoteForm.model.estimateType.selectedOption !==
                                            '2'" ng-model="quoteForm.model.price.hourly" event-track="quote form/click price field" event-track-on="click" event-track-data="{&quot;encoded_service_id&quot;:&quot;W:h85DrJcpp4SA&quot;,&quot;encoded_request_id&quot;:&quot;psnnfp8d&quot;,&quot;templates_loaded&quot;:0,&quot;is_thumbprint&quot;:true}" autocomplete="off" name="estimate_hourly_price_per_unit" placeholder="0" maxlength="6" class="ng-scope ng-valid ng-dirty" tabindex="-1" value="" type="hidden">
                                                            <!-- ngRepeat: $err in $validationErrors -->
                                                        </div>
                                                    </div>
                                                </input-price>

                                                <input-price is-disabled="quoteForm.isDisabled" ng-show="quoteForm.model.estimateType.selectedOption === '4'" class="ng-isolate-scope ng-hide">
                                                    <div class="InputPrice" ng-class="{ 'theme-offer': inputPrice.themeOffer }">
                                                        <div class="Flex InputPrice-Flex" ng-class="{
                'theme-left-align': inputPrice.leftAlign,
                'theme-offer': inputPrice.themeOffer,
            }">
                                                            <!-- ngIf: inputPrice.prefix -->
                                                            <div ng-if="inputPrice.prefix" class="InputPrice-currency modifier-prefix H3-R ng-binding ng-scope" ng-class="{
                    'theme-error': hasInputError,
                    'theme-payment-request': themePaymentRequest,
                    'theme-left-align': inputPrice.leftAlign,
                    'theme-offer': inputPrice.themeOffer
                }">
                                                                $
                                                            </div>
                                                            <!-- end ngIf: inputPrice.prefix -->
                                                            <input class="InputPrice-price-field" ng-class="{
                    'theme-error': hasInputError,
                    'theme-payment-request': themePaymentRequest,
                    'theme-left-align': inputPrice.leftAlign,
                    'theme-offer': inputPrice.themeOffer
                }" placeholder="0" maxlength="6" ng-disabled="isDisabled" style="width: 10px;" type="tel">
                                                            <!-- ngIf: inputPrice.suffix -->
                                                        </div>
                                                        <span class="InputPrice-dummyText" ng-class="{
            'theme-payment-request': themePaymentRequest,
            'theme-offer': inputPrice.themeOffer
        }">N/A</span>
                                                        <div class="InputPrice-inputContainer" ng-transclude="">
                                                            <input name="estimate_price_na" value="N/A" disabled="" class="ng-scope" tabindex="-1" type="hidden">
                                                        </div>
                                                    </div>
                                                </input-price>
                                            </div>

                                            <div class="B2-S QuoteForm-priceType isFixed" ng-class="{
                        'QuoteForm-priceType' : true,
                        'isSelectable' : false,
                        'isFixed' : true }">

                                                <label>Fixed price</label>
                                                <input name="estimate_type" value="1" type="hidden">
                                            </div>
                                            <div class="QuoteForm-priceGuidance-tooHighWarning B2-S ng-hide" ng-show="quoteForm.showInputPriceTooHighWarning">
                                                <p>
                                                    Heads-up: Your price is
                                                    <span class="QuoteForm-priceGuidance-highlight">higher</span> than typical quotes sent by pros near you for similar requests.
                                                    <a ng-click="quoteForm.clearInputPriceWarning()">Dismiss</a>
                                                </p>
                                            </div>
                                            <div class="QuoteForm-price-validationError B3-S ng-binding ng-hide" ng-show="quoteForm.showPriceTypeValidationError">
                                                A "" price cannot be used for Band Entertainment requests. We've changed your price type to "Fixed price". Please update your price to send your quote.
                                            </div>
                                        </div>

                                        <div class="QuoteForm-message-toggle">
                                            <!-- ngIf: !quoteForm.showQuoteMessageSection -->
                                        </div>
                                        <!-- ngIf: quoteForm.showQuoteMessageSection -->
                                        <div ng-if="quoteForm.showQuoteMessageSection" class="T2-S QuoteForm-sectionHeader ng-scope">
                                            Write a message to {{$cust->userName}}
                                        </div>
                                        <!-- end ngIf: quoteForm.showQuoteMessageSection -->

                                        <!-- ngIf: quoteForm.showQuoteMessageSection -->
                                        <div schema="quoteFormSchema.message" ng-if="quoteForm.showQuoteMessageSection" schema-assign="EmptySchema" class="QuoteForm-section QuoteForm-message ng-scope">
                                            <div class="QuoteForm-message-box">
                                                <!-- ngIf: quoteForm.model.message.text.length >= 1000 -->
                                                <textarea name="message" placeholder="Write your message to {{$cust->userName}}" class="ng-scope ng-pristine ng-valid" style="overflow: hidden; overflow-wrap: break-word; height: 73px;"> </textarea>

                                                <attachment-list-editor attachments-bind="quoteForm.attachments" class="ng-isolate-scope">
                                                    <ul class="AttachmentListEditor" attachments="">
                                                        <!-- NO SPACE
-->
                                                        <!-- ngRepeat: attachment in attachments -->
                                                        <!-- NO SPACE
-->
                                                    </ul>
                                                </attachment-list-editor>

                                                <attachment-list-editor attachments-bind="quoteForm.reusedAttachments" class="ng-isolate-scope">
                                                    <ul class="AttachmentListEditor" attachments="">
                                                        <!-- NO SPACE
-->
                                                        <!-- ngRepeat: attachment in attachments -->
                                                        <!-- NO SPACE
-->
                                                    </ul>
                                                </attachment-list-editor>
                                            </div>

                                            <!-- ngRepeat: $err in $validationErrors -->

                                            <div class="QuoteForm-bottomActions">
                                                <div class="QuoteForm-bottomActions-action">
                                                    <div class="QuoteForm-bottomActions-content">
                                                        <attach-button attachments-bind="quoteForm.attachments" event-track="quote form/click attach file" event-track-on="click" event-track-data="{&quot;encoded_service_id&quot;:&quot;W:h85DrJcpp4SA&quot;,&quot;encoded_request_id&quot;:&quot;psnnfp8d&quot;,&quot;templates_loaded&quot;:0,&quot;is_thumbprint&quot;:true}" event-track-once="" class="ng-isolate-scope">
                                                            <div class="AttachButton">
                                                                <div class="AttachButton__button" attach-button="" ng-click="attachButton.fileInputClick()">
                                                                    <span ng-transclude="">
                                        <svg-icon type="attach" size="sm" class="ng-scope theme-small IconContainer"><svg class="Icon" viewBox="0 0 16 16">
                                         <use xlink:href="#thumbprinticon-attach_16"></use>
                                        </svg>
                                        </svg-icon><span class="ng-scope"> Attach
                                    </span></span>
                                                                </div>
                                                                <input accept="image/jpeg, image/jpg, image/gif, image/png, image/tiff, audio/mpeg, application/zip, application/msword, .doc, .docx, application/vnd.openxmlformats-officedocument.wordprocessingml.document, application/excel, application/msexcel, application/x-msexcel, application/x-ms-excel, application/vnd.ms-excel, application/pdf, application/postscript, application/ppt, text/plain, text/html" type="file">
                                                            </div>

                                                        </attach-button>
                                                    </div>
                                                </div>

                                                <div class="QuoteForm-bottomActions-action" tips-modal="">
                                                    <div class="QuoteForm-bottomActions-content">
                                                        <a href="">
                                                            <svg-icon type="tips" size="sm" class="ng-scope theme-small IconContainer">
                                                                <svg class="Icon" viewBox="0 0 16 16">
                                                                    <use xlink:href="#thumbprinticon-tips_16"></use>
                                                                </svg>
                                                            </svg-icon> Tips
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="SplitView-desktopOnly">
                                        <div class="desktopButtons">
                                            <button class="Button ng-binding ng-isolate-scope" type="submit">Send</button>
                                        </div>
                                    </div>
                                    @endforeach
                                    </fieldset>

                                    <div class="QuoteForm-categoryAlert B3-S theme-secondary ng-hide" ng-show="isInDifferentCategory">
                                        You last used this template for a
                                        <span class="QuoteForm-categoryAlert-originalCategory ng-binding">

                </span> request, make sure it matches Joseph's Band Entertainment needs.
                                    </div>
                                    <basic-modal class="TipsModal ng-isolate-scope" modal-id="tips">
                                        <div modal-basic="" class="Modal " modal-id="tips" style="display: block;">
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
                                                                <div class="Modal-section title-section ng-scope">
                                                                    <div class="T1-S">Tips to write winning messages</div>
                                                                </div>

                                                                <div class="Modal-section copy-section B2-S ng-scope">
                                                                    <p>
                                                                        Your message forms your customer's first impression of you and your business. They love to hire pros who:
                                                                    </p>
                                                                </div>

                                                                <div class="Modal-section copy-section B2-S ng-scope">
                                                                    <ul>
                                                                        <li>Greet them by name.</li>
                                                                        <li>Talk about your relevant past work, qualifications, and expertise.</li>
                                                                        <li>Describe what's included in the price.</li>
                                                                        <li>Encourage them to take the next step and follow up!</li>
                                                                    </ul>
                                                                </div>

                                                                <div class="Modal-section button-section ng-scope">
                                                                    <div></div>

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

                                    

                                    <div class="SplitView-mobileOnly">
                                        <div class="StickyBarBottom">
                                            <button button-one-time-use="" button-one-time-use-on-click="quoteForm.onSubmitButtonClick()" button-one-time-use-validator="
                            deepValidate() &amp;&amp; quoteForm.isTemplatePriceTypeValidForRequest() &amp;&amp;
                            quoteForm.bypassCustomerContactModal()
                        " class="Button ng-binding ng-isolate-scope" ng-bind="quoteForm.getActionText()">Send</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </quote-form>

                    </div>

                    <div ng-show="manager.showTemplateCardSelector &amp;&amp; manager.isInCardMode" class="ng-hide">

                        <template-card-selector manager-bind="manager">
                            <div class="TemplateCardSelector" style="touch-action: pan-y; -moz-user-select: none;">

                                <div class="page-grid has-sticky-bottom-bar">
                                    <div class="column-lg-4 column-lg-offset-1 column-md-6 column-md-offset-0">
                                        <div class="TemplateCardSelector-container
                        " reuse-block="">
                                            <div class="TemplateCardSelector-window">
                                                <div ng-class="{
                                leaveToTheLeft: selector.arrivedFromPreviousStep
                                    &amp;&amp; !manager.model.disableCardAnimations,
                                leaveToTheRight: !selector.arrivedFromPreviousStep
                                    &amp;&amp; !manager.model.disableCardAnimations }" class="leaveToTheLeft">
                                                    <!-- ngRepeat: quoteTemplate in selector.quoteTemplates -->
                                                </div>
                                            </div>

                                            <!-- ngIf: selector.getActiveTemplateCount() > 1 -->
                                        </div>

                                        <div class="Spacer-4 SplitView-desktopOnly"></div>

                                        <div class="Spacer-4 SplitView-desktopOnly"></div>

                                        <div class="AfterTemplateCardSelector SplitView-desktopOnly">
                                            <div class="AfterTemplateCardSelector-leftButtons">
                                                <a class="Link theme theme-caution" ng-click="manager.showDeleteConfirmModal()" event-track="quote form/click delete template" event-track-on="click" event-track-data="manager.getTrackingEventData()">
                            Delete
                        </a>
                                            </div>

                                            <div class="AfterTemplateCardSelector-rightButtons">
                                                <button ng-click="manager.editCurrentTemplate($event)" type="button" class="Button theme-large theme-secondary" ng-class="{'theme-secondary': !manager.isInManagement}" event-track="quote form/click edit template" event-track-on="click" event-track-data="manager.getTrackingEventData()">
                                                    Edit
                                                </button>

                                                <button button-one-time-use="" button-one-time-use-on-click="quoteForm.submitFromCard()" button-one-time-use-validator="
                                                quoteForm.bypassCustomerContactModal()" ng-hide="manager.isInManagement" class="Button theme-large ng-isolate-scope" event-track="quote form/click send template" event-track-on="click" event-track-data="manager.getTrackingEventData()">
                                                    Send
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="TemplateCardSelector-noReuseMessage B2-S theme-secondary" ng-hide="manager.isInManagement">
                                    Don't want to reuse this quote template?
                                    <br>
                                    <a href="" ng-click="manager.clearQuoteForm(); manager.goToQuoteFormCreateNewMode()">
                Create a new one
            </a>
                                </div>
                            </div>
                        </template-card-selector>

                    </div>
                </div>

                <div class="TemplateList ng-hide" ng-show="manager.showTemplateCardSelector &amp;&amp; !manager.isInCardMode">
                    <div class="page-grid theme-full-bleed-at-xs">
                        <div class="column-lg-4 column-lg-offset-1
                                        column-md-6 column-md-offset-0">
                            <ul class="ContentList">
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="reduced-footer">
                    <reduced-footer>
                        <div class="ReducedFooter">
                            <div class="page-grid">
                                <div class="column-lg-3 column-xs-6">
                                    <div class="ReducedFooter-copyright B3-S theme-secondary">
                                        © Thumbtack, Inc. All Rights Reserved
                                    </div>
                                </div>
                                <div class="column-lg-3 column-xs-6">
                                    <div class="ReducedFooter-secondary B3-S theme-secondary">
                                        Questions?
                                        <a href="https://help.thumbtack.com">Help Center</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </reduced-footer>
                </div>
            </div>
            <tooltip trigger="#incentiveDetails-991216390" point-at-center="true" scroll-container="#split-view-main-wrapper" class="ng-isolate-scope">
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

                As our thanks for joining Thumbtack, we wanted to give you 75% off this quote.
            </span></div>
                </div>
            </tooltip>
        </split-view>

        <div modal-basic=""  class="ng-isolate-scope" style="display: block;">
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
                            <div class="RequestDetailsModal ng-scope">

                                <article class="RequestDetails ng-scope" request-details="">

                                    <div class="RequestDetails-summary">
                                        <img src="/boundary-map/image/90255/420/140" alt="Huntington Park, CA">
                                        <div class="RequestDetails-customer">
                                            <div class="RequestDetails-avatar">
                                                <avatar class="Avatar Avatar--lg">
                                                    <div class="Avatar__circle">
                                                        <div class="Avatar__initials">JC</div>

                                                    </div>

                                                </avatar>

                                            </div>
                                            <p class="RequestDetails-customer-name T1-R">
                                                Joseph C.
                                            </p>
                                            <p class="RequestDetails-customer-info B3-S">
                                                Huntington Park, CA 90255
                                            </p>
                                        </div>
                                        <div sticky-header="" class="RequestDetails-header StickyHeader StickyHeader-unstuck">

                                        </div>
                                        <div class="RequestDetails-metadata page-grid theme-full-bleed-at-sm">
                                            <div class="RequestDetails-metadata-datum T2-S column-lg-2">
                                                <svg-icon type="quotes" size="sm" class="ng-scope theme-small IconContainer">
                                                    <svg class="Icon" viewBox="0 0 16 16">
                                                        <use xlink:href="#thumbprinticon-quotes_16"></use>
                                                    </svg>
                                                </svg-icon>
                                                1/5
                                                <p class="RequestDetails-metadata-description B4-S">
                                                    quotes sent
                                                </p>
                                            </div>
                                            <div class="RequestDetails-metadata-datum T2-S column-lg-2">
                                                <svg-icon type="expiration" size="sm" class="ng-scope theme-small IconContainer">
                                                    <svg class="Icon" viewBox="0 0 16 16">
                                                        <use xlink:href="#thumbprinticon-expiration_16"></use>
                                                    </svg>
                                                </svg-icon>
                                                16h 42m
                                                <p class="RequestDetails-metadata-description B4-S">
                                                    until request expires
                                                </p>
                                            </div>
                                            <div class="RequestDetails-metadata-datum T2-S column-lg-2">
                                                <svg-icon type="dollar-skinny_8x15" size="sm" class="ng-scope IconContainer" style="width: 8px; height: 15px;">
                                                    <svg class="Icon" viewBox="0 0 8 15">
                                                        <use xlink:href="#thumbprinticon-dollar-skinny_8x15"></use>
                                                    </svg>
                                                </svg-icon>
                                                1.67
                                                <p class="RequestDetails-metadata-description B4-S">
                                                    to send quote
                                                </p>
                                            </div>
                                        </div>

                                        <div class="RequestDetails-infoBubble">
                                            <span class="tp-text-3--static RequestDetails-infoBubble-heading">
                            Same base price, now in dollars.
                        </span>
                                            <div class="tp-text-3--static RequestDetails-infoBubble-text">
                                                1 credit x $1.67 each = $1.67
                                                <a href="">Learn more</a>
                                            </div>
                                        </div>
                                        <div class="RequestDetails-header StickyHeader StickyHeader-unstuck StickyHeader-fixed ng-scope">
                                            <div class="StickyHeader-content StickyHeader-stuckOnly">
                                                <div class="RequestDetails-header-left T1-R">
                                                    Joseph C.
                                                </div>
                                                <div class="RequestDetails-header-right B2-S">
                                                    <a ng-click="manager.declineRequest()">Pass</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="RequestDetails-incentiveBanner" id="incentive-banner">
                                        New pro discount! Quote for 75% off.
                                        <span class="TooltipIcon theme-gray" id="incentiveDetails-1803758861"></span>

                                    </div>

                                    <div class="RequestDetails-details">
                                        <dl>
                                            <dt class="T2-S">Job type</dt>
                                            <dd class="B2-S">
                                                Band Entertainment
                                            </dd>

                                            <dt class="T2-S">Event type</dt>
                                            <dd class="B2-S">Birthday party</dd>
                                            <dt class="T2-S">Number of guests</dt>
                                            <dd class="B2-S">26 - 50 guests</dd>
                                            <dt class="T2-S">Age of guests</dt>
                                            <dd class="B2-S">12 years old or younger, 13 - 17 years old, 18 - 30 years old, 31 - 50 years old, 51 or older</dd>
                                            <dt class="T2-S">Customer Role</dt>
                                            <dd class="B2-S">Party host</dd>
                                            <dt class="T2-S">Performers needed</dt>
                                            <dd class="B2-S">1</dd>
                                            <dt class="T2-S">Music genre desired</dt>
                                            <dd class="B2-S">Latin</dd>
                                            <dt class="T2-S">Artists or bands client would like performed</dt>
                                            <dd class="B2-S">Cumbia band</dd>
                                            <dt class="T2-S">Songs client would like performed</dt>
                                            <dd class="B2-S">Suavemente, baila este cumbia, mi cucu</dd>
                                            <dt class="T2-S">Vocals needed?</dt>
                                            <dd class="B2-S">Instrumentals and singing</dd>
                                            <dt class="T2-S">Emcee needed</dt>
                                            <dd class="B2-S">No</dd>
                                            <dt class="T2-S">Venue</dt>
                                            <dd class="B2-S">Home</dd>
                                            <dt class="T2-S">Stage location</dt>
                                            <dd class="B2-S">Outdoors</dd>
                                            <dt class="T2-S">Sound system provided?</dt>
                                            <dd class="B2-S">No, professional will need to provide their own sound equipment</dd>
                                            <dt class="T2-S">Desired type of service</dt>
                                            <dd class="B2-S">
                                                <ul>
                                                    <li class="RequestDetails-details isNotSelected">
                                                        <svg-icon type="close" size="sm" class="ng-scope theme-small IconContainer">
                                                            <svg class="Icon" viewBox="0 0 16 16">
                                                                <use xlink:href="#thumbprinticon-close_16"></use>
                                                            </svg>
                                                        </svg-icon>
                                                        $ (basic)
                                                    </li>
                                                    <li class="RequestDetails-details isNotSelected">
                                                        <svg-icon type="close" size="sm" class="ng-scope theme-small IconContainer">
                                                            <svg class="Icon" viewBox="0 0 16 16">
                                                                <use xlink:href="#thumbprinticon-close_16"></use>
                                                            </svg>
                                                        </svg-icon>
                                                        $$ (standard)
                                                    </li>
                                                    <li class="RequestDetails-details isSelected">
                                                        <svg-icon type="check" size="sm" class="ng-scope theme-small IconContainer">
                                                            <svg class="Icon" viewBox="0 0 16 16">
                                                                <use xlink:href="#thumbprinticon-check_16"></use>
                                                            </svg>
                                                        </svg-icon>
                                                        $$$ (premium)
                                                    </li>
                                                    <li class="RequestDetails-details isNotSelected">
                                                        <svg-icon type="close" size="sm" class="ng-scope theme-small IconContainer">
                                                            <svg class="Icon" viewBox="0 0 16 16">
                                                                <use xlink:href="#thumbprinticon-close_16"></use>
                                                            </svg>
                                                        </svg-icon>
                                                        $$$$ (high-end)
                                                    </li>
                                                </ul>
                                            </dd>
                                            <dt class="T2-S">Readiness to hire</dt>
                                            <dd class="B2-S">
                                                <ul>
                                                    <li class="RequestDetails-details isNotSelected">
                                                        <svg-icon type="close" size="sm" class="ng-scope theme-small IconContainer">
                                                            <svg class="Icon" viewBox="0 0 16 16">
                                                                <use xlink:href="#thumbprinticon-close_16"></use>
                                                            </svg>
                                                        </svg-icon>
                                                        Ready to hire the right pro now
                                                    </li>
                                                    <li class="RequestDetails-details isSelected">
                                                        <svg-icon type="check" size="sm" class="ng-scope theme-small IconContainer">
                                                            <svg class="Icon" viewBox="0 0 16 16">
                                                                <use xlink:href="#thumbprinticon-check_16"></use>
                                                            </svg>
                                                        </svg-icon>
                                                        Need some more information before hiring
                                                    </li>
                                                    <li class="RequestDetails-details isNotSelected">
                                                        <svg-icon type="close" size="sm" class="ng-scope theme-small IconContainer">
                                                            <svg class="Icon" viewBox="0 0 16 16">
                                                                <use xlink:href="#thumbprinticon-close_16"></use>
                                                            </svg>
                                                        </svg-icon>
                                                        Conducting initial research
                                                    </li>
                                                </ul>
                                            </dd>

                                            <dt class="T2-S">Message</dt>
                                            <dd ng-non-bindable="">Fun outdoor birthday party!</dd>

                                            <dt class="T2-S">
                    When
                </dt>
                                            <dd class="B2-S">Date: Saturday, September 23, 2017
                                                <br> Time: 8:30 PM
                                                <br> Length: 3 hours</dd>

                                            <dt class="T2-S">Phone number</dt>
                                            <dd class="B2-S">Not available</dd>

                                            <dt class="T2-S">Request expires</dt>
                                            <dd class="B2-S">
                                                At 3:27pm on 09-06-17
                                            </dd>

                                            <dt class="T2-S">Need help quoting?</dt>
                                            <dd class="B2-S">
                                                <a href="https://help.thumbtack.com/?vw=sg" target="_blank">Help Center</a>
                                            </dd>
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
                                                                        You'll only use credits the first time a customer messages you, calls you, schedules an appointment, marks you as hired, or pays you.
                                                                    </p>
                                                                </div>

                                                                <div class="B2-R CustomerContactModal-section ng-scope">
                                                                    <div class="T2-R CustomerContactModal-question">
                                                                        Why has the cost changed?
                                                                    </div>

                                                                    <p>
                                                                        You'll pay less frequently and get more value for your money because all your dollars go towards a conversation with an interested customer. Remember, credits start at $1.67 each.
                                                                    </p>
                                                                </div>

                                                                <div class="CustomerContactModal-section theme-link ng-scope">
                                                                    <a class="Link" target="_blank" href="/customer-responses">
            Learn more <svg-icon type="right-caret" size="sm" class="ng-scope theme-small IconContainer"><svg class="Icon" viewBox="0 0 16 16">
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

        <modal-list hide-cancel-button="" modal-id="choose-an-action" title="Choose an action for this quote template." class="ng-isolate-scope">
            <div modal-basic="" class="Modal ModalList ng-isolate-scope" modal-id="choose-an-action" style="display: block;">
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
                                    <div class="Modal-section title-section">
                                        <div class="T1-S ng-binding">Choose an action for this quote template.</div>
                                    </div>

                                    <ul class="Modal-section list-section" ng-transclude="">
                                        <a class="Link ng-scope ng-hide" ng-click="manager.hideMoreModal(); manager.focusQuoteEditor($event)" ng-show="manager.isEditing" event-track="quote form/click template menu edit" event-track-on="click" event-track-data="manager.getEventTrackingData()">

                                            <li class="ModalList-item">Edit</li>
                                        </a>
                                        <a class="Link ng-scope ng-hide" ng-click="manager.hideMoreModal(); manager.focusNameEditor()" ng-show="manager.isEditing" event-track="quote form/click template menu rename" event-track-on="click" event-track-data="manager.getEventTrackingData()">

                                            <li class="ModalList-item">Rename</li>
                                        </a>
                                        <a class="Link theme-caution ng-scope ng-hide" ng-click="manager.hideMoreModal(); manager.showDeleteConfirmModal()" ng-show="manager.isEditing" event-track="quote form/click template menu delete" event-track-on="click" event-track-data="manager.getEventTrackingData()">

                                            <li class="ModalList-item">Delete</li>
                                        </a>
                                        <a class="Link SplitView-mobileOnly ng-scope" ng-hide="manager.isInManagement" ng-click="manager.hideMoreModal(); manager.showRequestDetailModal()" event-track="quote form/click view request link" event-track-on="click" event-track-data="manager.getEventTrackingData()">

                                            <li class="ModalList-item">View request</li>
                                        </a>
                                    </ul>

                                    <div class="Modal-section cancel-section">
                                        <a class="Link ng-hide" ng-click="cancel()" ng-hide="hideCancelButton">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </modal-list>

        <modal-danger-confirm modal-id="confirm-delete" message="Are you sure you want to delete this quote template?" on-confirm="manager.confirmDelete()" class="ng-isolate-scope">
            <div modal-basic="" class="Modal ModalDangerConfirm ng-isolate-scope" modal-id="confirm-delete" style="display: block;">
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
                                        <div class="T1-S ng-binding" ng-bind="message">Are you sure you want to delete this quote template?</div>
                                    </div>

                                    <div class="Modal-section" ng-transclude="">
                                    </div>

                                    <div class="Modal-section button-section">
                                        <a class="Link" ng-click="onDecline()">Cancel</a>

                                        <!-- TODO(giles): This theme-caution is the only thing that makes this specific to
            dangerous actions. Make this a parameter too, and rename the whole class to a more
            generic modal-confirm. -->
                                        <button class="Button theme-caution ng-binding" ng-click="onConfirmClick()">
                                            Delete
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </modal-danger-confirm>

        <instant-quote-tutorial-modal modal-id="instant-quote-tutorial-modal" pagination-id="instant-quote-tutorial-modal" class="ng-scope">
            <!-- ngIf: instantQuoteTutorialModal.modalId -->
            <modal-standard theme-white-background="" ng-if="instantQuoteTutorialModal.modalId" modal-id="instant-quote-tutorial-modal" class="ng-scope ng-isolate-scope" style="display: block;">
                <div class="ModalStandard theme-white-background" ng-class="{
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
                                    <div class="InstantQuoteTutorialModal ng-scope">
                                        <div class="InstantQuoteTutorialModal-header">
                                            <img src="https://static.thumbtackstatic.com/_assets/images/release/modules/instant-quote-tutorial-modal/images/logo-f7145255.svg" alt="ProAssist logo">
                                        </div>
                                        <div class="InstantQuoteTutorialModal-content">
                                            <div class="theme-same-direction TransitionOutToRight" ng-class="{
                        TransitionOutToLeft: arrivedFromPreviousStep,
                        TransitionOutToRight: !arrivedFromPreviousStep}">
                                                <div ng-switch="" on="page.index">
                                                    <!-- ngSwitchWhen: 0 -->
                                                    <div class="animate-element ng-scope" ng-switch-when="0">
                                                        <div class="InstantQuoteTutorialModal-intro">
                                                            <div class="InstantQuoteTutorialModal-title H3-R">
                                                                New! Thumbtack ProAssist matches you with the right customers and sends your quotes automatically.
                                                            </div>
                                                            <div class="InstantQuoteTutorialModal-subquote T1-S">
                                                                Send quotes for free. Only use credits when customers contact you.
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- ngSwitchWhen: 1 -->

                                                    <!-- ngSwitchWhen: 2 -->

                                                    <!-- ngSwitchWhen: 3 -->

                                                    <!-- ngSwitchWhen: 4 -->

                                                    <!-- ngSwitchWhen: 5 -->

                                                    <!-- ngSwitchWhen: 6 -->

                                                </div>
                                            </div>
                                        </div>

                                        <div class="InstantQuoteTutorialModal-footer">
                                            <!-- ngIf: page.index === 0 -->
                                            <div class="InstantQuoteTutorialModal-footer-container ng-scope" ng-if="page.index === 0">
                                                <button class="Button InstantQuoteTutorialModal-button theme-secondary" ng-click="instantQuoteTutorialModal.navigateNext()">
                                                    Learn More
                                                </button>

                                                <a class="Button InstantQuoteTutorialModal-button" ng-href="">
                        Try It Now
                    </a>
                                            </div>
                                            <!-- end ngIf: page.index === 0 -->

                                            <!-- ngIf: page.index === 6 -->

                                            <!-- ngIf: page.index !== 0 && page.index !== 6 -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </modal-standard>
            <!-- end ngIf: instantQuoteTutorialModal.modalId -->
        </instant-quote-tutorial-modal>

    </div>
</quoting-page>
@endsection
@section('script')
<script src="{{URL::to('public/assets/quoting-page-ng.es6-58d1653f.js')}}"></script>
<script src="{{URL::to('public/assets/example-quotes-infobox-ng.es6-3446fff5.js')}}"></script>
<script src="{{URL::to('public/assets/customer-contact-payment-modal-ng.es6-7bd70a7b.js')}}"></script>

<script src="{{URL::to('public/assets/customer-contact-revert-modal-ng.es6-2a7a0104.js')}}"></script>

@endsection