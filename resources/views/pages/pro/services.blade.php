@extends('layouts.professionalQuestion')

@section('css')
 <link rel="stylesheet" href="{{ URL::To('public/assets/infobox-8f290aa0.css') }}" />
 <link rel="stylesheet" href="{{ URL::To('public/assets/pro-value-preview-ed3e15f9') }}" />
 <link rel="stylesheet" href="{{ URL::To('public/assets/search-form-c804e432.css') }}" />
 <link rel="stylesheet" href="{{ URL::To('public/assets/core-0fe50382.css') }}" />
 <link rel="stylesheet" href="{{ URL::To('public/assets/index-1e7617cc.css') }}" />
 <link rel="stylesheet" href="{{ URL::To('public/assets/banner-app-upsell-62ab7e10.css') }}" />

<link rel="stylesheet" href="{{ URL::To('public/assets/css/jquery.steps.css')}}">
<script src="{{ URL::To('public/assets/lib/modernizr-2.6.2.min.js')}}"></script>
<script src="{{ URL::To('public/assets/lib/jquery-1.9.1.min.js')}}"></script>
<script src="{{ URL::To('public/assets/lib/jquery.cookie-1.3.1.js')}}"></script>
<script src="{{ URL::To('public/assets/build/jquery.steps.js')}}"></script>
@endsection
@section('content')
<div ng-controller="WizardController" ng-show="step != 'initial'" class="ng-scope">
    <div class="page-grid">
        <div class="column-lg-2 column-lg-offset-2 column-sm-4 column-sm-offset-1 column-xs-4
                    column-xs-offset-1">
            <progress-bar class="ProgressBar ng-isolate-scope" theme-quiet="" current-step="currentStepIndex" total-steps="totalStepsCount">
                <div class="progress-bar">
                    <div class="progress-bar__container" ng-class="{
            'progress-bar__container--squared-corners' : progressBar.options.themeSquaredCorners
        }">
                        <div class="progress-bar__progress" ng-class="{
                'progress-bar__progress--animated' : progressBar.options.themeAnimated,
                'progress-bar__progress--branded' : progressBar.options.themeBranded,
                'progress-bar__progress--squared-corners' : progressBar.options.themeSquaredCorners
            }" ng-style="{
                'width': progressBar.getPercentage() * 100 + '%',
                'opacity': progressBar.getOpacity()
            }" style="width: 25%; opacity: 1;">
                        </div>
                    </div>

                    <span class="progress-bar__label tp-text-4--static ng-binding ng-hide" ng-class="{
            'progress-bar__label--left': progressBar.options.themeLabelLeft,
        }" ng-show="progressBar.shouldShow() || progressBar.options.themeFixedHeight" ng-bind="progressBar.shouldShow() ? progressBar.getLabel() : ''"></span>
                </div>
            </progress-bar>
        </div>
    </div>

    <section class="Step ng-scope" ng-controller="ServicesController" ng-show="step === 'services'" id="example-basic">
        <form name="services" class="box ng-pristine ng-valid" ng-submit="next()" novalidate="">
            <div class="page-grid">
                <div class="column-lg-4 column-lg-offset-1 column-md-6 column-md-offset-0">
                    <div class="Step-StepTitle">
                        <h2 class="H4-R">What services do you provide?</h2>
                        <h3 class="B2-S">
                                You can edit these later if you'd like.
                            </h3>
                    </div>
                </div>
            </div>

            <div class="InputContainerCollection page-grid theme-except-mobile">
                <div class="column-lg-4 column-lg-offset-1 column-md-6 column-md-offset-0">
                   
                   @foreach($services as $service)
                    <div class="InputContainer ng-scope" ng-repeat="service in services">
                        <div class="page-grid">
                            <div class="column-lg-6">
                                <div class="InputContainer-inner">
                                    <input-checkbox input-checkbox-label="Guitar Lessons" class="ng-isolate-scope">
                                        <div class="InputCheckbox">

                                            <input ng-model="service.selected" class="ng-scope ng-pristine ng-valid u-visuallyHidden" id="inputCheckbox{{$service['id']}}" type="checkbox" value="{{$service['id']}}">
                                            <label class="InputCheckbox-label" for="inputCheckbox{{$service['id']}}">
                                                <div class="InputCheckbox-label-inner">{{$service['name']}}</div>
                                            </label>
                                        </div>
                                    </input-checkbox>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    </div>
                </div>
                </form>
                </section>
                
            </div>
<script>
    $("#example-basic").steps({
        bodyTag: "section",
        transitionEffect: "slideLeft",
        autoFocus: true
    });
</script>
               

@endsection
@section('script')
<script src="{{URL::to('public/assets/infobox-ng.es6-7ec74ac8.js')}}"></script>
<script src="{{URL::to('public/assets/pro-value-preview-ng.es6-3c52740f.js')}}"></script>
<script src="{{URL::to('public/assets/core.es6-133487fe.js')}}"></script>
@endsection


                        
