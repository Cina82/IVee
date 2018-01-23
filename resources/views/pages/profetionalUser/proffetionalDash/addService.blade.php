@extends('layouts.proffetionalDash')
@section('css')
<link rel="stylesheet" type="text/css" href="{{URL::to('public/assets/add-service-page-6b56b565.css')}}">
<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
@endsection
@section('content')
<add-service-page business-id="W:h85DrJcpp4SA" class="ng-scope">
<script>
      $(document).ready(function()
      {
            $("#serviceSearch").keyup(function(){  
            	var searchval = $(this).val();
                     if(searchval == ""){
                        $("#suggesstion-box").hide();
                     }
                     else{ 
                           $.ajax({
                           'url':'{{ URL::to("proServiceSearch") }}/'+searchval,
                           'success':function(message)
                           {
                              $("#suggesstion-box").show();
                              $("#suggesstion-box").html(message);
                              $("#suggesstion-box").css("background","#ffffff");
                           } 
                        }); 
                     }
            });
      });
</script>

        <div class="add-service-page" dir="rtl">
            <div class="tp-wrap">
                <div class="tp-col tp-col--12">
                    <div class="add-service-page__title tp-heading-4">
                        Add Service
                    </div>
                    <div class="SearchForm theme-add-service">
                        <div class="add-service-page__search-wrapper">
                            <form ng-submit="addService.navigateToServiceSettings($event)" class="add-service-page__form ng-pristine ng-invalid ng-invalid-required">
                                <button type="submit" class="add-service-page__form__button" data-sticky-partner="">
                                    <svg-icon type="search" size="md" class="add-service-page__form__icon ng-scope theme-medium IconContainer"><svg class="Icon" viewBox="0 0 24 24">
    								<use xlink:href="#thumbprinticon-search_24"></use>
									</svg>
									</svg-icon>
                                </button>
                                <span search-form="" hercule-limit="10" more-results-hercule="true" dropdown-container-selector=".add-service-page__dropdown-container" class="SearchForm add-service-page__form__input-wrap ng-scope">
                                    <input class="add-service-page__form__input tp-text-input ng-pristine ng-invalid ng-invalid-required" required="" autocomplete="off" placeholder="?What service do you provide" type="text" id="serviceSearch">
                                </span>
                            </form>
                            <div id="suggesstion-box" style="display: none; padding-left: 200px; background: #fff;" ></div>
                     </div>
                        </div>
                        <div class="add-service-page__suggestions ng-hide" ng-show="addService.suggestionsOpen">
                            <div class="add-service-page__suggestions__title tp-text-3--static">
                                Suggested Services
                            </div>
                            <div class="add-service-page__dropdown-container">
                            	<div class="SearchForm-dropdown theme-hercule-results open">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </add-service-page>
@endsection