<?php $__env->startSection('css'); ?>
<link rel="stylesheet"
   href="<?php echo e(URL::to('public/assets/category-meta-page-7d47f004.css')); ?>" />

   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo e(URL::to('public/wizardDemo/wizard.css')); ?>" rel="stylesheet" />
    <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="<?php echo e(URL::to('public/wizardDemo/javascripts/jquery.validate.min.js')); ?>"></script>
    <script src="<?php echo e(URL::to('public/wizardDemo/javascripts/jquery.validate.unobtrusive.js')); ?>"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo e(URL::to('public/wizardDemo/wizard.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<hero
   class="Hero "
   responsive-image
   responsive-grid="page"
   uses-densities
   above-md="{
   '1x': '   <?php echo e(URL::to('public/assets/img/wellness-19caf9c8.jpg')); ?>

   ',
   '2x': '  <?php echo e(URL::to('public/assets/img/wellness-19caf9c8.jpg')); ?>

   '
   }"
   above-sm-below-md="{
   '1x': '  <?php echo e(URL::to('public/assets/img/wellness-19caf9c8.jpg')); ?>

   ',
   '2x': '  <?php echo e(URL::to('public/assets/img/wellness-19caf9c8.jpg')); ?>

   '
   }"
   below-sm="{
   '1x': '  <?php echo e(URL::to('public/assets/img/wellness-19caf9c8.jpg')); ?>

   ',
   '2x': '  <?php echo e(URL::to('public/assets/img/wellness-19caf9c8.jpg')); ?>

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
               Wellness
            </h1>
         </div>
         <div class="column-lg-4 column-md-6">
            <h4 class="H4-R Hero-content-subtitle theme-inverted ">
               Improve your well-being. Get introduced to experienced wellness professionals.
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
                     action="wellness#"
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
<?php echo $__env->make('menu.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<install-native-app
   user-type = "customer"
   data-flavor = "below_header2"
   utm-source = "wellness_meta"
   android-icon-url = "https://static.thumbtackstatic.com/_assets/images/release/components/install-native-app/images/google-play-badge-8c7ddebe.svg"
   iphone-icon-url = "https://static.thumbtackstatic.com/_assets/images/release/components/install-native-app/images/apple-app-store-c62cc2f9.svg"
   ></install-native-app>
<popular-services class="PopularServices">
   <div class="page-grid">
      <div class="column-lg-6 PopularServices-title">
         <h2 class="H2-R">Popular Wellness Services</h2>
      </div>
   </div>
   <div class="page-grid theme-flex-columns">
                           <?php $__currentLoopData = $wellness; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wls): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                              <?php  $serviceBox = 0;   ?>
                           
                                 <?php if($serviceBox < 12): ?>
                                 <div class="column-lg-2" >
                                    <div class="ServiceBox-container">
                                       <a class="ServiceBox-item" onclick="customerQuestion(<?php echo e($wls->id); ?>)" style="text-decoration: none;">
                                          <div
                                             class="ServiceBox-item-image"
                                             lazy-image
                                             lazy-image-src="<?php echo e(URL::to('public/uploads')); ?>/<?php echo e($wls->image); ?>" class="ServiceBox-item-image"
                                             >

                                             <div class="ServiceBox-item-overlay">
                                                <span class="ServiceBox-item-cta Button theme-secondary theme-medium">
                                                Request
                                                </span>
                                             </div>
                                          </div>
                                          <div class="ServiceBox-item-label">
                                             <span class=" tp-text-2--static ">
                                             <?php echo e($wls->name); ?>

                                             </span>
                                          </div>
                                       </a>
                                    </div>
                                 </div> 
                              <?php  

                                 $questionDecode = json_decode($wls->question);
                                 $question = $questionDecode[0]->question;
                                 $count = count($question);

                               ?>
                                 <div class="wizard" id="wizard<?php echo e($wls->id); ?>" dir="rtl">
                                 
                              <?php 
                                 for($i=0;$i<$count;$i++)
                                 {
                                    $singleQuestion = $question[$i]->question;
                                    $questionType = $question[$i]->questionType;
                                    $options = $question[$i]->options;
                                    
                               ?>
                                    <div class='wizard-step' data-title='<?php echo e($wls->name); ?>'>
                                      <?php echo e(csrf_field()); ?>

                                       <input type="hidden" name="serviceId" value="<?php echo e($wls->id); ?>">
                                       <center><h3><?php echo e($singleQuestion); ?></h3></center>
                                       <input type="hidden" name="question[]" value="<?php echo e($singleQuestion); ?>">
                                       <?php if($questionType == 1): ?>
                                       <input type="hidden" name="questionType[]" value="<?php echo e($questionType); ?>">
                                       <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <?php  $random = rand(1,9999999);  ?>   
                                       <div class="InputRadio">
                                       <input name="options<?php echo e($i); ?>[]"  value="<?php echo e($opt); ?>" class="ng-scope ng-pristine ng-valid u-visuallyHidden" id="<?php echo e($random); ?>" type="radio"><label class="InputRadio-label" for="<?php echo e($random); ?>"><div class="InputRadio-label-inner ng-scope"><?php echo e($opt); ?></div></label>
                                       </div>
                                       
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                       <?php endif; ?> 
                                       <?php if($questionType == 4): ?>
                                       <input type="hidden" name="questionType[]" value="<?php echo e($questionType); ?>">
                                       <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <?php  $random = rand(1,9999999);  ?>   
                                          <div class="InputCheckbox">
                                            <input class="ng-scope ng-valid u-visuallyHidden ng-dirty" id="<?php echo e($random); ?>" type="checkbox" name="options<?php echo e($i); ?>[]" value="<?php echo e($opt); ?>">
                                            <label class="InputCheckbox-label" for="<?php echo e($random); ?>">
                                                <div class="InputCheckbox-label-inner"><?php echo e($opt); ?></div>
                                            </label>
                                        </div>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                       <?php endif; ?>   
                                    </div>
                                   
                                 <?php  }
                                 $serviceBox = $serviceBox + 1 ;
                                   ?>
                                 </div>
                                 <?php endif; ?>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
 
   </div>
</popular-services>
<more-services class="MoreServices">
   <div class="page-grid">
      <div class="column-lg-6 MoreServices-title">
         <h2 class="H2-R">More Wellness Services</h2>
      </div>
   </div>
   <div class="page-grid">
      <div class="column-lg-6 MoreServices-column" dir="rtl">
         <div class="MoreServices-service">
            <h3 class="H4-R MoreServices-service-header"></h3>
            <ul>
                   <?php $__currentLoopData = $wellness; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wls): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <?php  $i = rand(1,9999999);  ?>
                  <li>
                     <a class="B2-S theme-secondary MoreServices-service-link" onclick="customerQuestion(<?php echo e($i); ?>)" style="text-decoration: none;">
                                 <?php echo e($wls->name); ?> 
                     </a>
                  </li>
               <?php  
                  $questionDecode = json_decode($wls->question);
                  $question = $questionDecode[0]->question;
                  $count = count($question);
                   
                ?>
                  <div class="wizard" id="wizard<?php echo e($i); ?>" dir="rtl">
               <?php 
                     for($i=0;$i<$count;$i++)
                     {
                        $singleQuestion = $question[$i]->question;
                        $questionType = $question[$i]->questionType;
                        $options = $question[$i]->options;
                         
                ?>
                        <div class='wizard-step' data-title='<?php echo e($wls->name); ?>'>
                        <?php echo e(csrf_field()); ?>

                           <input type="hidden" name="serviceId" value="<?php echo e($wls->id); ?>">
                           <center><h3><?php echo e($singleQuestion); ?></h3></center>
                           <input type="hidden" name="question[]" value="<?php echo e($singleQuestion); ?>">
                           <?php if($questionType == 1): ?>
                              <input type="hidden" name="questionType[]" value="<?php echo e($questionType); ?>">
                                       <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <?php  $random = rand(1,9999999);  ?>
                                       <div class="InputRadio">
                                       <input name="options<?php echo e($i); ?>[]"  value="<?php echo e($opt); ?>" class="ng-scope ng-pristine ng-valid u-visuallyHidden" id="<?php echo e($random); ?>" type="radio"><label class="InputRadio-label" for="<?php echo e($random); ?>"><div class="InputRadio-label-inner ng-scope"><?php echo e($opt); ?></div></label>
                                       </div>
                                       
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                       <?php endif; ?> 
                                       <?php if($questionType == 4): ?>
                                       <input type="hidden" name="questionType[]" value="<?php echo e($questionType); ?>">
                                       <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <?php  $random = rand(1,9999999);  ?>
                                          <div class="InputCheckbox">
                                            <input class="ng-scope ng-valid u-visuallyHidden ng-dirty" id="<?php echo e($random); ?>" type="checkbox" name="options<?php echo e($i); ?>[]" value="<?php echo e($opt); ?>">
                                            <label class="InputCheckbox-label" for="<?php echo e($random); ?>">
                                                <div class="InputCheckbox-label-inner"><?php echo e($opt); ?></div>
                                            </label>
                                          </div>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                       <?php endif; ?>   
                        </div>         
               <?php  }  ?>
                  </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
         </div>
      </div>
   </div>

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
                    //$("#wizard"+id+" .modal-dialog:last").remove();
                    /*$("#wizard"+id+" div").remove();*/
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::To('public/assets/jquery-migrate.min')); ?>"></script>
<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.thumb', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>