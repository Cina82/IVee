@extends('layouts.professionalQuestion')
 @section('css')
<link rel="stylesheet" href="{{ URL::To('public/assets/infobox-8f290aa0.css') }}" />
<link rel="stylesheet" href="{{ URL::To('public/assets/pro-value-preview-ed3e15f9') }}" />
<link rel="stylesheet" href="{{ URL::To('public/assets/search-form-c804e432.css') }}" />
<link rel="stylesheet" href="{{ URL::To('public/assets/core-0fe50382.css') }}" />
<link rel="stylesheet" href="{{ URL::To('public/assets/index-1e7617cc.css') }}" />
<!-- <link rel="stylesheet" href="{{URL::to('public/assets/core-069d350d.css')}}"/> -->
<link rel="stylesheet" href="{{ URL::To('public/assets/banner-app-upsell-62ab7e10.css') }}" />
<link rel="stylesheet" href="{{ URL::To('public/assets/css/jquery.steps.css')}}">
<script src="{{ URL::To('public/assets/lib/modernizr-2.6.2.min.js')}}"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
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
            }" style="width: 25%; opacity: 1;"></div>
                    </div> <span class="progress-bar__label tp-text-4--static ng-binding ng-hide" ng-class="{
            'progress-bar__label--left': progressBar.options.themeLabelLeft,
        }" ng-show="progressBar.shouldShow() || progressBar.options.themeFixedHeight" ng-bind="progressBar.shouldShow() ? progressBar.getLabel() : ''"></span>
                </div>
            </progress-bar>
        </div>
    </div>
    <div class="divs">
        <!-- section one -->
        <form method="get" action="saveServiceProvide">
        <section class="cls1">
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
                    <div class="column-lg-4 column-lg-offset-1 column-md-6 column-md-offset-0">@foreach($services as $service)
                        <div class="InputContainer ng-scope" ng-repeat="service in services">
                            <div class="page-grid">
                                <div class="column-lg-6">
                                    <div class="InputContainer-inner">
                                        <input-checkbox input-checkbox-label="Guitar Lessons" class="ng-isolate-scope">
                                            <div class="InputCheckbox">
                                                <input ng-model="service.selected" class="ng-scope ng-pristine ng-valid u-visuallyHidden" id="inputCheckbox{{$service['id']}}" type="checkbox" value="{{$service['id']}}" name="provideservice[]">
                                                <label class="InputCheckbox-label" for="inputCheckbox{{$service['id']}}">
                                                    <div class="InputCheckbox-label-inner">{{$service['name']}}</div>
                                                </label>
                                            </div>
                                        </input-checkbox>
                                    </div>
                                </div>
                            </div>
                        </div>@endforeach</div>
                    <div class="column-lg-4 column-lg-offset-1 column-md-6 column-md-offset-0">&nbsp;</div>
                    <div class="column-lg-2 column-lg-offset-2 column-md-12 column-md-offset-0" style="float: right;">
                        <button class="Button next" onclick="showSubServices()">Next</button>
                    </div>
                </div>
        </section>
        <!-- section Two -->
        <section class="cls2">
                <div class="page-grid">
                    <div class="column-lg-4 column-lg-offset-1 column-md-6 column-md-offset-0">
                        <div class="Step-StepTitle">
                            <h2 class="H4-R">In addition to guitar lessons, do you provide any other services?</h2>
                            <h3 class="B2-S">
                                You can edit these later if you'd like.
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="InputContainerCollection page-grid theme-except-mobile">
                    <div class="column-lg-4 column-lg-offset-1 column-md-6 column-md-offset-0" id="subService"></div>
                    <div class="column-lg-4 column-lg-offset-1 column-md-6 column-md-offset-0">&nbsp;</div>
                    <div class="column-lg-3 column-lg-offset-1 column-md-12 column-md-offset-0" style="float: right;">
                        <button class="Button prev" id="prev">Back</button>
                        <button class="Button next" id="next" onclick="return checkboxvalidation()">Next</button>
                    </div>
                </div>
        </section>
        <!-- section Three -->
        <section class="cls3">
           
                <div class="page-grid">
                    <div class="column-lg-4 column-lg-offset-1 column-md-6 column-md-offset-0">
                        <div class="Step-StepTitle">
                            <h2 class="H4-R">Do you travel to your customers or do they come to you?</h2>
                        </div>
                    </div>
                </div>
                <div class="InputContainerCollection page-grid theme-except-mobile" ng-hide="isLoading()">
                    <div class="column-lg-4 column-lg-offset-1 column-md-6 column-md-offset-0">
                        <!-- ngRepeat: key in preferenceKeys -->
                        <div class="InputContainer ng-scope" ng-repeat="key in preferenceKeys">
                            <div class="page-grid">
                                <div class="column-lg-6">
                                    <input-checkbox input-checkbox-label="I travel to my customers" class="CheckboxSection-item ng-isolate-scope">
                                        <div class="InputCheckbox" ng-transclude="">
                                            <input ng-model="preferences[key].selected" class="ng-scope ng-valid u-visuallyHidden ng-dirty" id="inputCheckbox2" type="checkbox" name="travelCustomer[]" value="1">
                                            <label class="InputCheckbox-label" for="inputCheckbox2">
                                                <div class="InputCheckbox-label-inner">I travel to my customers</div>
                                            </label>
                                        </div>
                                    </input-checkbox>
                                </div>
                            </div>
                        </div>
                        <!-- end ngRepeat: key in preferenceKeys -->
                        <div class="InputContainer ng-scope" ng-repeat="key in preferenceKeys">
                            <div class="page-grid">
                                <div class="column-lg-6">
                                    <input-checkbox input-checkbox-label="My customers travel to me" class="CheckboxSection-item ng-isolate-scope">
                                        <div class="InputCheckbox" ng-transclude="">
                                            <input ng-model="preferences[key].selected" class="ng-scope ng-pristine ng-valid u-visuallyHidden" id="inputCheckbox3" type="checkbox" name="travelCustomer[]" value="2">
                                            <label class="InputCheckbox-label" for="inputCheckbox3">
                                                <div class="InputCheckbox-label-inner">My customers travel to me</div>
                                            </label>
                                        </div>
                                    </input-checkbox>
                                </div>
                            </div>
                        </div>
                        <!-- end ngRepeat: key in preferenceKeys -->
                        <div class="InputContainer ng-scope" ng-repeat="key in preferenceKeys">
                            <div class="page-grid">
                                <div class="column-lg-6">
                                    <input-checkbox input-checkbox-label="Neither (phone or Internet only)" class="CheckboxSection-item ng-isolate-scope">
                                        <div class="InputCheckbox" ng-transclude="">
                                            <input ng-model="preferences[key].selected" class="ng-scope ng-pristine ng-valid u-visuallyHidden" id="inputCheckbox4" type="checkbox" name="travelCustomer[]" value="3">
                                            <label class="InputCheckbox-label" for="inputCheckbox4">
                                                <div class="InputCheckbox-label-inner">Neither (phone or Internet only)</div>
                                            </label>
                                        </div>
                                    </input-checkbox>
                                </div>
                            </div>
                        </div>
                        <!-- end ngRepeat: key in preferenceKeys -->
                    </div>
                </div>
                <div class="InputContainerCollection page-grid theme-except-mobile" ng-show="
                            preferences.tocustomer.selected ||
                            preferences.toprovider.selected ||
                            preferences.remote.selected
                        ">
                    <div class="column-lg-4 column-lg-offset-1 column-md-6 column-md-offset-0">
                        <div class="InputContainer
                                InputContainer-isGroupContainer2">
                            <div class="page-grid">
                                <div class="InputContainer-item column-lg-3 form-field  form-field " ng-class="{valid: valid(), invalid: invalid()}" field="" expr="travel.zip">
                                    <div ng-transclude="">
                                        <label class="InputContainer-itemLabel ng-scope">What is your zip code?</label>
                                        <input-text input-text-label="Zip code" class="ng-scope ng-isolate-scope">
                                            <div class="InputText">
                                                <label class="tp-label ng-binding u-visuallyHidden" ng-class="{ 'u-visuallyHidden': !themeStandaloneLabel }" for="inputText1" ng-bind="label">Zip code</label> <span class="u-visuallyHidden ng-binding" role="alert" id="inputText1-error"></span>
                                                <div class="InputText-inputAndErrorContainer" ng-class="{ 'InputText-prefixIcon': hasPrefixIcon }">
                                                    <div class="InputText-inputContainer" ng-transclude="" ng-class="{
                'InputText-inputInvalid': isValid === false,
                'InputText-inputValid': isValid === true
            }">
                                                        <input name="zip" required="" ng-model="service.address.zip" ng-pattern="/^[0-9]{5}$/" class="ng-scope ng-pristine ng-invalid ng-invalid-required ng-valid-pattern" id="inputText1" placeholder="Zip code" type="text">
                                                    </div>
                                                    <div class="InputText-errorMask ng-binding"></div>
                                                </div>
                                            </div>
                                        </input-text>
                                    </div><span class="subtext-form subtext-form-invalid ng-hide" ng-show="invalid()"><!-- ngIf: field.$error.required --><span ng-if="field.$error.required" class="ng-scope">Required</span>
                                    <!-- end ngIf: field.$error.required -->
                                    <!-- ngIf: field.$error.pattern || field.$error.phone || field.$error.email -->
                                    <!-- ngIf: field.$error.contact -->
                                    <!-- ngIf: field.$error.minlength -->
                                    <!-- ngIf: field.$error.maxlength -->
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="InputContainerCollection page-grid theme-except-mobile">
                    <div class="column-lg-4 column-lg-offset-1 column-md-6 column-md-offset-0" id="subService"></div>
                    <div class="column-lg-4 column-lg-offset-1 column-md-6 column-md-offset-0">&nbsp;</div>
                    <div class="column-lg-3 column-lg-offset-1 column-md-12 column-md-offset-0" style="float: right;">
                        <button class="Button prev" id="prev">Back</button>
                        <button type="submit" class="Button" onclick="return checkboxvalidation()">Next</button>
                    </div>
                </div>
            
        </section>
        </form>
    </div>
</div>
</div>
<script>
    $(document).ready(function(){
        $(".divs section").each(function(e) {
            if (e != 0)
                $(this).hide();
        });
        $(".next").click(function(){
            if ($(".divs form section:visible").next().length != 0 && $("input[type=checkbox]:checked").length > 0)
            {
                $(".divs form section:visible").next().show().prev().hide();
            }
            else{
                $(".divs form section:visible").hide();
                $(".divs form section:first").show();
            }
            return false;
        });
        $(".prev").click(function(){
            if ($(".divs form section:visible").prev().length != 0)
                $(".divs form section:visible").prev().show().next().hide();
            else {
                $(".divs form section:visible").hide();
                $(".divs form section:last").show();
            }
            return false;
        });
    });
    function showSubServices(){
            var val = [];
            $(':checkbox:checked').each(function(i){
              val[i] = $(this).val();
            });
            
            $.ajax({
                    'url':'prosubService',
                    'data': { val: val },
                    'success':function(data){
                    $("#subService").html(data);
                   },
                  });
            }
</script>
<!-- <script type="text/javascript">
    
    function checkboxvalidation(){
      checked = $("input[type=checkbox]:checked").length;
      if(!checked) {
        var x =confirm("You must check at least one checkbox.");
        if(x){
        return true;}
        else{
        return false;}
      }
    }
</script> -->
@endsection @section('script')
<script src="{{URL::to('public/assets/infobox-ng.es6-7ec74ac8.js')}}"></script>
<script src="{{URL::to('public/assets/pro-value-preview-ng.es6-3c52740f.js')}}"></script>
<script src="{{URL::to('public/assets/core.es6-133487fe.js')}}"></script>@endsection