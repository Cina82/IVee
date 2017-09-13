<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
| Middleware options can be located in `app/Http/Kernel.php`
|
*/
// Homepage Route
/*Route::get('/', 'Auth\ActivateController@activationRequired')->name('welcome');*/
    Route::get('/', 'WelcomeController@welcome')->name('welcome');
// Authentication Routes
    Auth::routes();

// Public Routes
Route::group(['middleware' => 'web'], function() {
    // Activation Routes
    Route::get('/activate', ['as' => 'activate', 'uses' => 'Auth\ActivateController@initial']);

    Route::get('/activate/{token}', ['as' => 'authenticated.activate', 'uses' => 'Auth\ActivateController@activate']);
    Route::get('/activation', ['as' => 'authenticated.activation-resend', 'uses' => 'Auth\ActivateController@resend']);
    Route::get('/exceeded', ['as' => 'exceeded', 'uses' => 'Auth\ActivateController@exceeded']);

    // Socialite Register Routes
    Route::get('/social/redirect/{provider}', ['as' => 'social.redirect', 'uses' => 'Auth\SocialController@getSocialRedirect']);
    Route::get('/social/handle/{provider}', ['as' => 'social.handle', 'uses' => 'Auth\SocialController@getSocialHandle']);

});

// Registered and Activated User Routes
Route::group(['middleware' => ['auth', 'activated']], function() {

    // Activation Routes
    Route::get('/activation-required', ['uses' => 'Auth\ActivateController@activationRequired'])->name('activation-required');
    Route::get('/logout', ['uses' => 'Auth\LoginController@logout'])->name('logout');

    //  Homepage Route - Redirect based on user role is in controller.
    Route::get('/home', ['as' => 'public.home',   'uses' => 'UserController@index']);

    // Show users profile - viewable by other users.
    Route::get('profile/{username}', [
        'as'        => '{username}',
        'uses'      => 'ProfilesController@show'
    ]);

});

// Registered, activated, and is current user routes.
Route::group(['middleware'=> ['auth', 'activated', 'currentUser']], function () {

    Route::resource(
        'profile',
        'ProfilesController', [
            'only'  => [
                'show',
                'edit',
                'update',
                'create'
            ]
        ]
    );

    // Route to show user avatar
    Route::get('images/profile/{id}/avatar/{image}', [
        'uses'      => 'ProfilesController@userProfileAvatar'
    ]);

    // Route to upload user avatar.
    Route::post('avatar/upload', ['as' => 'avatar.upload', 'uses' => 'ProfilesController@upload']);

});

// route for view/blade file
Route::get('paywithpaypal', array('as' => 'paywithpaypal','uses' => 'PaypalController@payWithPaypal',));
// route for post request
Route::post('paypal', array('as' => 'paypal','uses' => 'PaypalController@postPaymentWithpaypal',));
// route for check status responce
Route::get('paypal', array('as' => 'status','uses' => 'PaypalController@getPaymentStatus',));


//professional management
Route::get('prosignup', 'pro\proManageController@prosignup');
Route::get('prosubcate/{id}','pro\proManageController@prosubcat');
Route::get('prosubService','pro\proManageController@prosubService');
Route::get('serviceProvide{id}','pro\proManageController@showServiceProvide');
Route::get('saveServiceProvide','pro\proManageController@saveServiceProvide');
//End professional management


Route::get('customerQuestion', 'customerQuestion\customerQuestionManageController@customerQuestion');
Route::post('popupQuestionAdd', 'customerQuestion\customerQuestionManageController@popupQuestionAdd');
Route::get('subCategoryOption{id}', 'Admin\subCategoryManageController@subCategoryOption');

Route::get('viewQuotes', 'customerDash\customerDashManageController@viewQuotes');


Route::get('reset', 'Auth\ForgotPasswordController@reset'); 
Route::get('choose-account', 'Auth\LoginController@signUpCategory');
Route::get('professionalHire', 'Auth\LoginController@proffetionalHire');
Route::get('customerHire', 'Auth\LoginController@customerHire');
Route::get('pro', 'pro\proManageController@pro');
Route::get('events', 'events\eventsManageController@events');
Route::get('events', 'events\eventsManageController@events');
Route::get('lessons', 'lessons\lessonsManageController@lessons');

Route::get('wellness', 'wellness\wellnessManageController@wellness');
Route::get('moreServices','moreServices\moreServicesManageController@moreServices');
Route::get('homeImprovement','homeImprovement\homeImprovementManageController@homeImprovement');
Route::get('explore', 'explore\exploreManageController@explore');
Route::get('safety', 'safety\safetyManageController@safety');
Route::get('nearMe', 'nearMe\nearMeManageController@nearMe');
Route::get('jobs', 'job\jobManageController@job');
Route::get('team', 'team\teamManageController@team');
Route::get('blog', 'blog\blogManageController@blog');
Route::get('proApp', 'proApp\proAppManageController@proApp');
Route::get('prices', 'prices\pricesManageController@prices');
Route::get('serviceGuides', 'serviceGuides\serviceGuidesManageController@serviceGuides');
Route::get('howTo', 'howTo\howToManageController@howTo');
Route::get('privacy', 'privacy\privacyManageController@privacy');
Route::get('terms', 'terms\termsManageController@terms');

Route::get('survey', 'survey\surveyManageController@survey');
Route::get('about', 'about\aboutManageController@about');
Route::get('howItWorks', 'howItWorks\howItWorksManageController@howItWorks');
Route::get('stories', 'stories\storiesManageController@stories');
Route::get('proCenter', 'proCenter\proCenterManageController@proCenter');
Route::get('howThumbtackWorks', 'howThumbtackWorks\howThumbtackWorksManageController@howThumbtackWorks');
Route::get('blog', 'blog\blogManageController@blog');
Route::get('proHandBook', 'proHandBook\proHandBookManageController@proHandBook');
Route::get('thumbtackSanDigo', 'thumbtackSanDigo\thumbtackSanDigoManageController@thumbtackSanDigo');

Route::get('getHiredGuide', 'getHiredGuide\getHiredGuideManageController@getHiredGuide');
Route::get('getHiredGuideProfile', 'getHiredGuide\getHiredGuideManageController@getHiredGuideProfile');

Route::get('getHiredGuideReview', 'getHiredGuide\getHiredGuideManageController@getHiredGuideReview');

Route::get('getHiredGuidePreference', 'getHiredGuide\getHiredGuideManageController@getHiredGuidePreference');

Route::get('getHiredGuideQuote', 'getHiredGuide\getHiredGuideManageController@getHiredGuideQuote');

Route::get('getHiredGuideFollowup', 'getHiredGuide\getHiredGuideManageController@getHiredGuideFollowup');

Route::get('getHiredGuideHired', 'getHiredGuide\getHiredGuideManageController@getHiredGuideHired');






// Registered, activated, and is admin routes.
Route::group(['middleware'=> ['auth', 'activated', 'role:superadmin']], function () {
  //controller for Admin
  Route::get('createAdminBySuperAdmin', 'superAdmin\adminManageController@index');
  Route::get('newAdminBySuperAdmin', 'superAdmin\adminManageController@newAdmin');
  Route::post('saveAdminBySuperAdmin', 'superAdmin\adminManageController@saveAdmin');
  Route::get('editAdminBySuperAdmin{id}', 'superAdmin\adminManageController@showAdmin');
  Route::post('editAdminBySuperAdmin', 'superAdmin\adminManageController@EditAdmin');
  Route::get('deleteAdminBySuperAdmin{id}', 'superAdmin\adminManageController@deleteAdmin');
});

// Registered, activated, and is Owner routes.
Route::group(['middleware'=> ['auth', 'activated', 'role:admin']], function () {

  Route::get('createAdmin', 'Admin\adminManageController@index');
  Route::get('newAdmin', 'Admin\adminManageController@newAdmin');
  Route::post('saveAdmin', 'Admin\adminManageController@saveAdmin');
  Route::get('editAdmin{id}', 'Admin\adminManageController@showAdmin');
  Route::post('editAdmin', 'Admin\adminManageController@EditAdmin');
  
  Route::get('createProfessionalUser', 'profetional\profetionalManageController@index');
  Route::get('newProfessionalUser', 'profetional\profetionalManageController@newProfetional');
  Route::post('saveProfessionalUser', 'profetional\profetionalManageController@saveProfetional');
  Route::get('editProfessionalUser{id}', 'profetional\profetionalManageController@showEditProfetional');
  Route::post('editProfessionalUser', 'profetional\profetionalManageController@EditProfetional');
  Route::get('deleteProfessionalUser{id}', 'profetional\profetionalManageController@deleteProfetional');


  Route::get('createCustomerUser', 'customerUser\customerUserManageController@index');
  Route::get('newcreateCustomerUser', 'customerUser\customerUserManageController@newCustomer');
  Route::post('savecreateCustomerUser', 'customerUser\customerUserManageController@saveCustomer');
  Route::get('editcreateCustomerUser{id}', 'customerUser\customerUserManageController@showEditCustomer');
  Route::post('editcreateCustomerUser', 'customerUser\customerUserManageController@EditCustomer');
  Route::get('deletecreateCustomerUser{id}', 'customerUser\customerUserManageController@deleteCustomer');


  //page Management for <meta>
  Route::get('page', 'Admin\pageManageController@page');
  Route::get('newPage', 'Admin\pageManageController@newPage');
  Route::post('savePage', 'Admin\pageManageController@savePage');
  Route::get('editPage{id}', 'Admin\pageManageController@showEditPage');
  Route::post('editPage', 'Admin\pageManageController@EditPage');
  Route::get('deletePage{id}', 'Admin\pageManageController@deletePage');

  //Category Management 
  Route::get('category', 'Admin\categoryManageController@category');
  Route::get('newCategory', 'Admin\categoryManageController@newCategory');
  Route::post('saveCategory', 'Admin\categoryManageController@saveCategory');
  Route::get('editCategory{id}', 'Admin\categoryManageController@showEditCategory');
  Route::post('editCategory', 'Admin\categoryManageController@EditCategory');
  Route::get('deleteCategory{id}', 'Admin\categoryManageController@deleteCategory');

  //proCategory Management 
  Route::get('proCategory', 'Admin\proCategoryManageController@proCategory');
  Route::get('newProCategory', 'Admin\proCategoryManageController@newProCategory');
  Route::post('saveProCategory', 'Admin\proCategoryManageController@saveProCategory');
  Route::get('editProCategory{id}', 'Admin\proCategoryManageController@showProEditCategory');
  Route::post('editProCategory', 'Admin\proCategoryManageController@EditProCategory');
  Route::get('deleteProCategory{id}', 'Admin\proCategoryManageController@deleteProCategory');

  //subcategory Management
  Route::get('subCategory', 'Admin\subCategoryManageController@subCategory');
  Route::get('newSubCategory', 'Admin\subCategoryManageController@newSubCategory');
  Route::post('saveSubCategory', 'Admin\subCategoryManageController@saveSubCategory');
  Route::get('editSubCategory{id}', 'Admin\subCategoryManageController@showEditSubCategory');
  Route::post('editSubCategory', 'Admin\subCategoryManageController@EditSubCategory');
  Route::get('deleteSubCategory{id}', 'Admin\subCategoryManageController@deleteSubCategory');

  //service Management 
  Route::get('service', 'Admin\serviceManageController@service');
  Route::get('newService','Admin\serviceManageController@newService');
  Route::post('saveService','Admin\serviceManageController@saveService');
  Route::get('editService{id}', 'Admin\serviceManageController@showEditService');
  Route::post('editService', 'Admin\serviceManageController@EditService');
  Route::get('deleteService{id}', 'Admin\serviceManageController@deleteService');

  //sub service Management 
  Route::get('subService', 'Admin\subServiceManageController@subService');
  Route::get('newSubService','Admin\subServiceManageController@newSubService');
  Route::post('saveSubService','Admin\subServiceManageController@saveSubService');
  Route::get('editSubService{id}', 'Admin\subServiceManageController@showSubEditService');
  Route::post('editSubService', 'Admin\subServiceManageController@EditSubService');
  Route::get('deleteSubService{id}', 'Admin\subServiceManageController@deleteSubService');

  //Question Management 
  Route::get('question', 'Admin\questionManageController@question');
  Route::get('newQuestion','Admin\questionManageController@newQuestion');
  Route::post('saveQuestion','Admin\questionManageController@saveQuestion');
  Route::get('editQuestion{id}', 'Admin\questionManageController@showEditQuestion');
  Route::post('editQuestion', 'Admin\questionManageController@editQuestion');
  Route::get('deleteQuestion{id}', 'Admin\questionManageController@deleteQuestion');

  //credit Management
  Route::get('showServiceQuotesCredit', 'Admin\creditManageController@showServiceQuotesCredit');
  Route::get('newServiceQuotesCredit','Admin\creditManageController@newServiceQuotesCredit');
  Route::post('saveServiceQuotesCredit','Admin\creditManageController@saveServiceQuotesCredit');
  Route::get('editQuotesCredit{id}', 'Admin\creditManageController@editServiceQuotesCredit');
  Route::post('editQuotesCredit', 'Admin\creditManageController@editQuotesCredit');
  Route::get('deleteQuotesCredit{id}', 'Admin\creditManageController@deleteQuotesCredit');
});

//payment Setting 

Route::get('paymentSetting', 'Admin\paymentSettingController@showPaymentSetting');
 Route::get('newPaymentSetting','Admin\paymentSettingController@newPaymentSetting');
  Route::post('savePaymentSetting','Admin\paymentSettingController@savePaymentSetting');
  Route::get('editPaymentSetting{id}', 'Admin\paymentSettingController@showEditPaymentSetting');
  Route::post('editPaymentSetting', 'Admin\paymentSettingController@editPaymentSetting');
  Route::get('deletePaymentSetting{id}', 'Admin\paymentSettingController@deletePaymentSetting');


Route::get('proffetionalDash/Requests', 'proffetionalDash\proffetionalDashController@Requests');
Route::get('professionaolQuotes/{serviceId}/{custId}', 'proffetionalDash\proffetionalDashController@professionaolQuotes');
Route::get('professionaolDash/services', 'proffetionalDash\proffetionalDashController@viewServices');
Route::get('professionaolDash/insights', 'proffetionalDash\proffetionalDashController@insights');



Route::post('addProfessionalQuotes', 'proffetionalDash\proffetionalDashController@addProfessionalQuotes');
Route::get('payAndSendQuotes', 'proffetionalDash\proffetionalDashController@payAndSendQuotes');

Route::get('proffetionalDash/Hired', 'proffetionalDash\proffetionalDashController@Hired');
Route::get('proffetionalDash/Sent', 'proffetionalDash\proffetionalDashController@Sent');
Route::get('proffetionalDash/Archived', 'proffetionalDash\proffetionalDashController@Archived');



// Registered, activated, and is manager routes.
  Route::group(['middleware'=> ['auth', 'activated', 'role:manager']], function (){
  Route::get('showAssignParking', 
    'Organiser\ParkingController@showManagerParking');

});
