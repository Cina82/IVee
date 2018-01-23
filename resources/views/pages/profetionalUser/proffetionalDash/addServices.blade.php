@extends('layouts.proffetionalDash')
@section('css')
<link rel="stylesheet" type="text/css" href="{{URL::to('public/assets/add-service-page-6b56b565.css')}}">
@endsection
@section('content')
<add-service-page business-id="W:h85DrJcpp4SA" class="ng-scope">
        <div class="add-service-page">
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
                                <span search-form="" hercule-root-url="https://hercule.thumbtack.com" hercule-version="" hercule-limit="10" more-results-hercule="true" dropdown-container-selector=".add-service-page__dropdown-container" class="SearchForm add-service-page__form__input-wrap ng-scope">
                                    <input class="add-service-page__form__input tp-text-input ng-pristine ng-invalid ng-invalid-required" required="" autocomplete="off" placeholder="What service do you provide?" ng-model="addService.typeSelection" type="text">
                                </span>
                            </form>
                        </div>
                        <div class="add-service-page__suggestions ng-hide" ng-show="addService.suggestionsOpen">
                            <div class="add-service-page__suggestions__title tp-text-3--static">
                                Suggested Services
                            </div>
                            <div class="add-service-page__dropdown-container"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </add-service-page>
@endsection