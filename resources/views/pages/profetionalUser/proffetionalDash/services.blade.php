@extends('layouts.proffetionalDash')
@section('css')
<link rel="stylesheet" type="text/css" href="{{URL::to('public/assets/pro-jobs-00b418b7.css')}}">
@endsection
@section('content')
<div id="root">

    <div data-reactroot="" class="pro-jobs-container tp-wrap">
        <div class="tp-grid tp-grid--center">
            <div class="tp-col tp-col--12 tp-col--md-8">
                <div class="pro-jobs-container__section-title">
                    <h1 class="tp-heading-4">Services</h1><a class="pro-jobs-container__add-service" href="{{URL::to('professionalDash/addService')}}">+ Add</a></div>
            </div>
        </div>
        <section class="pro-jobs-container__jobs tp-grid tp-grid--center tp-grid--flush">
            <div class="tp-col tp-col--12 tp-col--md-8">
            
            @foreach($data as $dt)
                @if(!empty($dt[0]))
                <div class="job-card" dir="rtl">
                    <div class="job-card__container">
                        <a class="job-card__info job-card__padded" href="">
                            <div>
                                <div class="tp-heading-4 tp-weight--demi job-card__info__label">{{$dt[0]->serviceName}}</div>
                            </div>
                        </a>
                        <a class="job-card__stats-container job-card__padded job-card__section job-card__section--link" href="">
                            <div class="job-card__stats-container__inner">
                                <div class="job-card__stat">
                                    <div class="tp-heading-4 job-card__stat__number">{{$dt[0]->counts}}</div>
                                    <div class="tp-text-3--static tp-color--dark">quotes sent</div>
                                </div>
                                <div class="job-card__stat">
                                    <div class="tp-heading-4 job-card__stat__number">0</div>
                                    <div class="tp-text-3--static tp-color--dark">contacts</div>
                                </div>
                                <div class="job-card__stat">
                                    <div class="tp-heading-4 job-card__stat__number">{{$dt[0]->amountCost}}</div>
                                    <div class="tp-text-3--static tp-color--dark">spent</div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="Flex Flex-horizontal-center job-card__settings-link job-card__padded job-card__section job-card__section--link">
                            <div class="job-card__settings-link__label-container">
                                Edit settings
                           </div>
                        </a>
                    </div>
                </div>
                @endif
            @endforeach
            

                <a class="pro-jobs-container__add-service pro-jobs-container__add-service--full-link" href="{{URL::to('professionalDash/addService')}}">+ Add Service</a>

            </div>
        </section>
        <div class="tp-grid tp-grid--center tp-grid--flush">
            <div class="services-settings-container tp-col tp-col--12 tp-col--md-8 services-settings-container__collapsed">
                <div class="services-settings-container__display-control-header"><span class="services-settings-container__display-control">Advanced Settings</span></div>
                <section class="services-settings-container__setting">
                    <div class="tp-grid tp-grid--center tp-grid--flush">
                        <div class="tp-col tp-col--12">
                            <div class="tp-form-fields">
                                <div class="tp-form-field__item services-settings-toggle accept_related_categories-toggle">
                                    <div class="tp-input-wrap tp-display--inline-block">
                                        <input class="tp-checkbox-input" name="accept_related_categories-toggle" id="accept_related_categories-toggle" value="on" type="checkbox">
                                        <div class="tp-checkbox-image"></div>
                                        <label class="tp-label tp-color--muted tp-text-3--static tp-weight--medium" for="accept_related_categories-toggle">Suggest jobs related to my preferences</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="services-settings-container__setting">
                    <div class="tp-grid tp-grid--center tp-grid--flush">
                        <div class="tp-col tp-col--12">
                            <div class="tp-form-fields">
                                <div class="tp-form-field__item services-settings-toggle accepts_nearby_results-toggle">
                                    <div class="tp-input-wrap tp-display--inline-block">
                                        <input class="tp-checkbox-input" name="accepts_nearby_results-toggle" id="accepts_nearby_results-toggle" value="on" type="checkbox">
                                        <div class="tp-checkbox-image"></div>
                                        <label class="tp-label tp-color--muted tp-text-3--static tp-weight--medium" for="accepts_nearby_results-toggle">Suggest jobs near my travel area</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
@endsection