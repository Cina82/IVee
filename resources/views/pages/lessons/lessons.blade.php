

@extends('layouts.thumb')
@section('css')
<link rel="stylesheet"
   href="{{URL::to('public/assets/category-meta-page-7d47f004.css')}}" />
<link rel="stylesheet"
   href="{{URL::to('public/assets/core-069d350d.css')}}"/>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{URL::to('public/wizardDemo/wizard.css')}}" rel="stylesheet" />
    <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="{{URL::to('public/wizardDemo/javascripts/jquery.validate.min.js')}}"></script>
    <script src="{{URL::to('public/wizardDemo/javascripts/jquery.validate.unobtrusive.js')}}"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{URL::to('public/wizardDemo/wizard.js')}}"></script>

  
@endsection
@section('content')

<hero
   class="Hero "
   responsive-image
   responsive-grid="page"
   uses-densities
   above-md="{
   '1x': ' {{URL::to('public/assets/img/lessons-91b449c8.jpg')}}
   ',
   '2x': '  {{URL::to('public/assets/img/lessons-91b449c8.jpg')}}
   '
   }"
   above-sm-below-md="{
   '1x': '  {{URL::to('public/assets/img/lessons-91b449c8.jpg')}}
   ',
   '2x': '  {{URL::to('public/assets/img/lessons-91b449c8.jpg')}}
   '
   }"
   below-sm="{
   '1x': '   {{URL::to('public/assets/img/lessons-91b449c8.jpg')}}
   ',
   '2x': ' {{URL::to('public/assets/img/lessons-91b449c8.jpg')}}
   '
   }"
   >
   <div class="Hero-tint "
      >
   </div>
   <div class="page-grid Hero-grid">
      <div class="Hero-content">
         <div class="column-lg-6">
            <h1 class="Hero-content-title tp-heading-1 ">
               Lessons
            </h1>
         </div>
         <div class="column-lg-4 column-md-6">
            <h4 class="H4-R Hero-content-subtitle theme-inverted ">
               Improve your skills. Get introduced to the right teachers.
            </h4>
         </div>
         <div class="column-lg-4 column-md-6">
            <div class="Hero-content-cta">
               <div class="SearchForm theme-default">
                  <form search-form open-request-form-modal
                     from-homepage=""
                     hide-intro-screen=""
                     ng-submit="submitSearch($event)"
                     class="SearchForm-form"
                     action="lessons#"
                     hercule-root-url=""
                     hercule-version=""
                     include-test=""
                     page-type="0"
                     search-origin="searchform-homepage"
                     event-name="searchform-homepage"
                     homepage-redirect-to-near-me=""
                     >
                     <div class="SearchForm-form-inputGroup multi-line-sm" dir="rtl" >
                        <span class="SearchForm-form-query B2-S"
                           ng-class="{'dropdownOpen': suggestionsOpen}">
                           <input class="query"
                              ng-class="{'is-empty-state': isEmptyState}"
                              required
                              autocomplete="off"
                              placeholder="?What service do you need"
                              type="search"
                              event-track="home page/start service query"
                              event-track-on="keypress"
                              event-track-data="{
                              pageType: '0',
                              searchOrigin: 'searchform-homepage',
                              }"
                              event-track-once
                              />
                           <div class="SearchForm-form-query-clearQuery">
                              <label
                                 ng-class="{'is-empty-state': isEmptyState}"
                                 class="SearchForm-form-query-clearQuery-wrapper"
                                 for="clear-input-field"
                                 ng-click="clearSearchField()"
                                 >
                                 <svg-icon
                                    type="declined"
                                    size="sm"
                                    class="SearchForm-form-query-clearQuery-wrapper-icon">
                                 </svg-icon>
                              </label>
                           </div>
                        </span>
                        <button class="
                           SearchForm-form-submitBtn
                           Button
                           theme-large
                           "
                           type="submit"
                           event-track="hercule/click get started"
                           event-track-on="click"
                           event-track-data="{
                           pageType: '0',
                           searchOrigin: 'searchform-homepage',
                           }">
                        Get Started
                        </button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</hero>
@include('menu.menu')
<install-native-app
   user-type = "customer"
   data-flavor = "below_header2"
   utm-source = "lessons_meta"
   android-icon-url = "https://static.thumbtackstatic.com/_assets/images/release/components/install-native-app/images/google-play-badge-8c7ddebe.svg"
   iphone-icon-url = "https://static.thumbtackstatic.com/_assets/images/release/components/install-native-app/images/apple-app-store-c62cc2f9.svg"
   ></install-native-app>
<popular-services class="PopularServices">
   <div class="page-grid">
      <div class="column-lg-6 PopularServices-title">
         <h2 class="H2-R">Popular  Services</h2>
      </div>
   </div>
   <div class="page-grid theme-flex-columns">
                           @php $serviceBox = 0; @endphp
                           @foreach($lessons as $lsn)
                                 @if($serviceBox < 12)
                               <div class="column-lg-2" >
                                    <div class="ServiceBox-container">
                                       <a class="ServiceBox-item" onclick="customerQuestion({{$lsn->id}})" style="text-decoration: none;">
                                          <div
                                             class="ServiceBox-item-image"
                                             lazy-image
                                             lazy-image-src="{{URL::to('public/uploads')}}/{{$lsn->image}}" class="ServiceBox-item-image"
                                             >

                                             <div class="ServiceBox-item-overlay">
                                                <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                Request
                                                </span>
                                             </div>
                                          </div>
                                          <div class="ServiceBox-item-label">
                                             <span class=" tp-text-2--static ">
                                             {{$lsn->name}}
                                             </span>
                                          </div>
                                       </a>
                                    </div>
                                 </div> 
                              @php 

                                 $questionDecode = json_decode($lsn->question);
                                 $question = $questionDecode[0]->question;
                                 $count = count($question);

                              @endphp
                                 <div class="wizard" id="wizard{{$lsn->id}}" dir="rtl">
                                 
                              @php
                                 for($i=0;$i<$count;$i++)
                                 {
                                    $singleQuestion = $question[$i]->question;
                                    $questionType = $question[$i]->questionType;
                                    $options = $question[$i]->options;
                                    
                              @endphp
                                    <div class='wizard-step' data-title='{{$lsn->name}}'>
                                      {{csrf_field()}}
                                       <input type="hidden" name="serviceId" value="{{$lsn->id}}">
                                       <center><h3>{{$singleQuestion}}</h3></center>
                                       <input type="hidden" name="question[]" value="{{$singleQuestion}}">
                                       @if($questionType == 1)
                                       <input type="hidden" name="questionType[]" value="{{$questionType}}">
                                       @foreach($options as $opt)
                                       @php $random = rand(1,9999999); @endphp
                                       <div class="InputRadio">
                                       <input name="options{{$i}}[]"  value="{{$opt}}" class="ng-scope ng-pristine ng-valid u-visuallyHidden" id="{{$random}}" type="radio"><label class="InputRadio-label" for="{{$random}}"><div class="InputRadio-label-inner ng-scope">{{$opt}}</div></label>
                                       </div>
                                       
                                       @endforeach
                                       @endif 
                                       @if($questionType == 4)
                                       <input type="hidden" name="questionType[]" value="{{$questionType}}">
                                       @foreach($options as $opt)
                                       @php $random = rand(1,9999999); @endphp
                                          <div class="InputCheckbox">
                                            <input class="ng-scope ng-valid u-visuallyHidden ng-dirty" id="{{$random}}" type="checkbox" name="options{{$i}}[]" value="{{$opt}}">
                                            <label class="InputCheckbox-label" for="{{$random}}">
                                                <div class="InputCheckbox-label-inner">{{$opt}}</div>
                                            </label>
                                        </div>
                                       @endforeach
                                       @endif   
                                    </div>
                                   
                                 @php }
                                 $serviceBox = $serviceBox + 1 ;
                                  @endphp
                                 </div>
                                 @endif
                           @endforeach
   </div>
</popular-services>
<more-services class="MoreServices">
   <div class="page-grid">
      <div class="column-lg-6 MoreServices-title">
         <h2 class="H2-R">More  Services</h2>
      </div>
   </div>
   <div class="page-grid" dir="rtl">
      <div class="column-lg-6 MoreServices-column">
         <div class="MoreServices-service">
            <h3 class="H4-R MoreServices-service-header"></h3>
            <ul>
               @foreach($lessons as $lsn)
                  @php $i = rand(1,9999999); @endphp
                  <li>
                     <a class="B2-S theme-secondary MoreServices-service-link" onclick="customerQuestion({{$i}})" style="text-decoration: none;">
                                 {{$lsn->name}} 
                     </a>
                  </li>
               @php 
                  $questionDecode = json_decode($lsn->question);
                  $question = $questionDecode[0]->question;
                  $count = count($question);
               @endphp
                  <div class="wizard" id="wizard{{$i}}" dir="rtl">
               @php
                     for($i=0;$i<$count;$i++)
                     {
                        $singleQuestion = $question[$i]->question;
                        $questionType = $question[$i]->questionType;
                        $options = $question[$i]->options;

               @endphp
                        <div class='wizard-step' data-title='{{$lsn->name}}'>
                        {{csrf_field()}}
                           <input type="hidden" name="serviceId" value="{{$lsn->id}}">
                           <center><h3>{{$singleQuestion}}</h3></center>
                           <input type="hidden" name="question[]" value="{{$singleQuestion}}">
                           @if($questionType == 1)
                              <input type="hidden" name="questionType[]" value="{{$questionType}}">
                                       @foreach($options as $opt)
                                       @php $random = rand(1,9999999); @endphp
                                       <div class="InputRadio">
                                       <input name="options{{$i}}[]"  value="{{$opt}}" class="ng-scope ng-pristine ng-valid u-visuallyHidden" id="{{$random}}" type="radio"><label class="InputRadio-label" for="{{$random}}"><div class="InputRadio-label-inner ng-scope">{{$opt}}</div></label>
                                       </div>
                                       
                                       @endforeach
                                       @endif 
                                       @if($questionType == 4)
                                       <input type="hidden" name="questionType[]" value="{{$questionType}}">
                                       @foreach($options as $opt)
                                        @php $random = rand(1,9999999); @endphp
                                          <div class="InputCheckbox">
                                            <input class="ng-scope ng-valid u-visuallyHidden ng-dirty" id="{{$random}}" type="checkbox" name="options{{$i}}[]" value="{{$opt}}">
                                            <label class="InputCheckbox-label" for="{{$random}}">
                                                <div class="InputCheckbox-label-inner">{{$opt}}</div>
                                            </label>
                                          </div>
                                       @endforeach
                                       @endif   
                        </div>         
               @php } @endphp
                  </div>
               @endforeach

              
            </ul>
         </div>
      </div>
   </div>
   <!-- <script>
   function customerQuestion(id)
   {  
      $.ajax({
         'url':'customerQuestion',
         'data': { id: id },
         'success':function(data){

            $("#wizard").html(data);
            $('#wizard').wizard('open');
         },
         });
   }
   </script> -->
   <script>
   function customerQuestion(id)
   {  
         

       $('#wizard'+id).wizard({
                title: '',
                validators: [{
                    step: 1,
                    validate: function () {
                        
                    }
                }],
                onSubmit: function () {
                  
                    $('<div>onSubmit called</div>').appendTo('#EventLog');
                    $('#wizard'+id).wizard('end', {
                        info: 'this is an info message',
                        warning: 'this is a warning message',
                        success: 'this is a success message',
                        error: 'this is an error message',
                        autoClose: false // close after 5 seconds
                    });
                },
                onReset: function () {
                    $('<div>onReset called</div>').appendTo('#EventLog');
                    $('#TextBox1').val('');
                    $('#TextBox2').val('');
                },
                onCancel: function () {
                  
                    $('<div>onCancel called</div>').appendTo('#EventLog');
                },
                onClose: function () {
                    $('<div>onClose called</div>').appendTo('#EventLog');
                },
                onOpen: function () {
                  var count = $("#wizard"+id+" .modal-dialog").length; 

                    if(count > 1)
                    { 
                   
                    $("#wizard"+id+" .modal-dialog:last").remove();
                    }
                    $('<div>onOpen called</div>').appendTo('#EventLog');
                },
                previousText: 'Back',
                nextText: 'Next',
                submitText: 'Submit',
                showCancel: true,
                showPrevious: true,
                showProgress: true,
                isModal: true,
                autoOpen: false
            });

      $('#wizard'+id).wizard('open');
   }
   </script>
</more-services>
@endsection
@section('script')
<script src="{{URL::To('public/assets/jquery-migrate.min')}}"></script>
<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<!-- <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script> -->
@endsection

