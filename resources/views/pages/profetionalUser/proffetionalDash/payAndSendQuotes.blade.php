@extends('layouts.thumb')
@section('css')
<link rel="stylesheet" type="text/css" href="{{URL::to('public/assets/quote-payment-page-dollars-b36dc432.css')}}">

@endsection
@section('content')
 <quote-payment-page-dollars class="ng-scope">
   <form action="{{URL::to('proffetionalDash/AddQuotesCredit')}}" method="post" class="ng-valid ng-dirty">
      
      {{ csrf_field() }}
      @if ($message = Session::get('success'))

               @php echo $message; @endphp
                <div class="custom-alerts alert alert-success fade in">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    {!! $message !!}
                </div>
                <?php Session::forget('success');?>
                @endif

                @if ($message = Session::get('error'))
                <div class="custom-alerts alert alert-danger fade in">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    {!! $message !!}
                </div>
            <?php Session::forget('error');?>
      @endif

      <div class="quote-payment-page-dollars">
         <div class="quote-payment-page-dollars__container tp-wrap">
            <h1 class="quote-payment-page-dollars__header tp-heading-4">
               Let's get you ready to send quotes with an offer for new pros.
            </h1>
            <div class="quote-payment-page-dollars__module">
               <intro-offers class="ng-isolate-scope">
                  <div class="intro-offers">
                  
                     <div class="intro-offers__heading">Add an amount to your Ivee balance</div>
                     <!-- ngRepeat: offer in introOffers.introOffers track by $index -->
                     <div class="intro-offers__offer ng-scope" ng-repeat="offer in introOffers.introOffers track by $index">
                        <div class="tp-input-wrap">
                           <input class="tp-radio-input" name="amount" id="intro_offer_selection-0" value="15" type="radio">
                           <div class="tp-radio-image intro-offers__radio-image"></div>
                           <label class="tp-label" for="intro_offer_selection-0">
                              <div class="intro-offers__radio-label">
                                 <div class="intro-offers__card">
                                    <svg-icon class="intro-offers__card__tack ng-scope theme-small IconContainer" type="thumbtack" size="sm">
                                       <svg class="Icon" viewBox="0 0 16 16">
                                          <use xlink:href="#thumbprinticon-thumbtack_16"></use>
                                       </svg>
                                    </svg-icon>
                                    <span class="intro-offers__card__amount tp-text-1--static ng-binding">
                                    $15
                                    </span>
                                 </div>
                                 <div class="intro-offers__offer-details">
                                    <span class="ng-binding">You pay $10.50</span>
                                    <span class="tp-color--muted ng-binding">
                                    Get
                                    $4.50
                                    more in credit
                                    </span>
                                 </div>
                              </div>
                           </label>
                        </div>
                     </div>
                     
                     <div class="intro-offers__offer ng-scope" ng-repeat="offer in introOffers.introOffers track by $index">
                        <div class="tp-input-wrap">
                           <input class="tp-radio-input" name="amount" id="intro_offer_selection-1" value="25" type="radio">
                           <div class="tp-radio-image intro-offers__radio-image"></div>
                           <label class="tp-label" for="intro_offer_selection-1">
                              <div class="intro-offers__radio-label">
                                 <div class="intro-offers__card">
                                    <svg-icon class="intro-offers__card__tack ng-scope theme-small IconContainer" type="thumbtack" size="sm">
                                       <svg class="Icon" viewBox="0 0 16 16">
                                          <use xlink:href="#thumbprinticon-thumbtack_16"></use>
                                       </svg>
                                    </svg-icon>
                                    <span class="intro-offers__card__amount tp-text-1--static ng-binding">
                                    $25
                                    </span>
                                 </div>
                                 <div class="intro-offers__offer-details">
                                    <span class="ng-binding">You pay $17.50</span>
                                    <span class="tp-color--muted ng-binding">
                                    Get
                                    $7.50
                                    more in credit
                                    </span>
                                 </div>
                              </div>
                           </label>
                        </div>
                     </div>
                     
                     <div class="intro-offers__offer ng-scope" ng-repeat="offer in introOffers.introOffers track by $index">
                        <div class="tp-input-wrap">
                           <input class="tp-radio-input" name="amount" id="intro_offer_selection-2" value="35" type="radio">
                           <div class="tp-radio-image intro-offers__radio-image"></div>
                           <label class="tp-label" for="intro_offer_selection-2">
                              <div class="intro-offers__radio-label">
                                 <div class="intro-offers__card">
                                    <svg-icon class="intro-offers__card__tack ng-scope theme-small IconContainer" type="thumbtack" size="sm">
                                       <svg class="Icon" viewBox="0 0 16 16">
                                          <use xlink:href="#thumbprinticon-thumbtack_16"></use>
                                       </svg>
                                    </svg-icon>
                                    <span class="intro-offers__card__amount tp-text-1--static ng-binding">
                                    $35
                                    </span>
                                 </div>
                                 <div class="intro-offers__offer-details">
                                    <span class="ng-binding">You pay $24.50</span>
                                    <span class="tp-color--muted ng-binding">
                                    Get
                                    $10.50
                                    more in credit
                                    </span>
                                 </div>
                              </div>
                           </label>
                        </div>
                     </div>
                  </div>
               </intro-offers>

            </div>
           

            <div class="quote-payment-page-dollars__auto-refund">
               <div class="tp-text-3--static quote-payment-page-dollars__auto-refund__header">
                  Auto-refund
               </div>
               <div class="tp-text-3--static quote-payment-page-dollars__auto-refund__desc">
                  If the customer doesn't look at your quote within two days,
                  don't worry about it. We'll refund the amount to your Ivee balance.
               </div>
            </div>

            <div class="quote-payment-page-dollars__send-button-container ng-scope">
                        <button type="submit" class="quote-payment-page-dollars__send-button-container__button tp-button tp-button--large tp-button--full ng-isolate-scope"><div class="LoadingButton">Pay and send quote</div>
                        </button>
            </div>

         </div>
      </div>
   </form>
   
</quote-payment-page-dollars>
@endsection
@section('javascript')
<script type="text/javascript" src="{{URL::to('public/assets/quote-payment-page-dollars-ng.es6-28602612.js')}}"></script>
<!-- <script type="text/javascript" src="{{URL::to('public/assets/core.es6-5c8da3c3.js')}}"></script>
 -->

@endsection