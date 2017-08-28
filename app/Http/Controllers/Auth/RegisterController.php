<?php

namespace App\Http\Controllers\Auth;

use App;
use App\Models\User;
use App\Traits\CaptchaTrait;
use App\Traits\CaptureIpTrait;
use App\Traits\ActivationTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use jeremykenedy\LaravelRoles\Models\Permission;
use jeremykenedy\LaravelRoles\Models\Role;
use App\Models\pro\ProfessionalServiceProvide;
use Session;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use ActivationTrait;
    use CaptchaTrait;
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/activate';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', [
            'except' => 'logout'
        ]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        /*$data['captcha'] = $this->captchaCheck();*/

        /*if (App::environment('local')) {
            $data['captcha'] = true;
        }*/
        if($data['id'] == 3)
        {

        
            return Validator::make($data,
            [
                'name'                  => 'required|max:255',
                'familyName'             => 'required|max:255',
                'email'                 => 'email|max:255',
                'driverLicense'         => 'required|min:10|unique:users',
                'mobile'                => 'required|min:10|regex:/[0-9]/|unique:users',
                'image'                 => 'required',
                'userName'              => 'required|unique:users',  
                'password'              => 'required|min:6|max:20',
            ],
            [
                'name.unique'                   => trans('Name Alredy Taken'),
                'name.required'                 => trans('Name Required'),
                'familyName.required'            => trans('FamilyName Required'),
                'email.email'                   => trans('auth.emailInvalid'),
                'driverLicense.required'        => trans('DriverLicense Required'),
                'driverLicense.min'             => trans('DriverLicense Min 10 Digits'),
                'driverLicense.unique'          => trans('DriverLicense Alredy Taken'),
                'mobile.required'               => trans('Phone Number Invalid'),
                'mobile.min'                    => trans('Phone Number Minimum 10 digits'),
                'mobile.unique'                 => trans('phoneNumber Alredy Taken'),
                'image.required'                => trans('image Required'),
                'userName.required'             => trans('UserName Required'),
                'userName.unique'               => trans('UserName Alredy Taken'),
                'password.required'             => trans('auth.passwordRequired'),
                'password.min'                  => trans('auth.PasswordMin'),
                'password.max'                  => trans('auth.PasswordMax'),
            ]
            );

        }
        if($data['id'] == 4)
        {
            
            return Validator::make($data,
            [
                'name'                  => 'required|max:255',
                'familyName'             => 'required|max:255',
                'email'                 => 'email|max:255',
                'mobile'                => 'required|min:10|regex:/[0-9]/|unique:users',
                
            ],
            [
                'name.unique'                   => trans('Name Alredy Taken'),
                'name.required'                 => trans('Name Required'),
                'familyName.required'            => trans('FamilyName Required'),
                'email.email'                   => trans('auth.emailInvalid'),
                'mobile.required'               => trans('Phone Number Invalid'),
                'mobile.min'                    => trans('Phone Number Minimum 10 digits'),
                'mobile.unique'                 => trans('phoneNumber Alredy Taken'),
            ]
            );

        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {

        $ipAddress  = new CaptureIpTrait;

        if($data['id'] == 3)
        {

            $role= Role::where('name', '=', 'Profetional')->first();
            $user =  User::create([
            'name'              => $data['name'],
            'first_name'        => $data['name'],
            'last_name'         => $data['familyName'],
            'email'             => $data['email'],
            'driverLicense'     => $data['driverLicense'],
            'mobile'            => $data['mobile'],
            'user_role_id'      => $data['id'],
            'zipCode'           => $data['zipCode'],
            'userName'          => $data['userName'],
            'password'          => bcrypt($data['password']),
            'image'             => $data['image'],
            'token'             => str_random(64),
            'signup_ip_address' => $ipAddress->getClientIp(),
            'activated'         => !config('settings.activation')
        ]);
            $servicePrivideJson = session('servicePrivideJson');
             $servicePrivide = ProfessionalServiceProvide::create([
                'userId'              => $user->id,
                'services'            =>$servicePrivideJson  
             ]);
            $user->attachRole($role);
            $this->initiateEmailActivation($user);
            return $user;
        }
        if($data['id'] == 4)
        {

            $role= Role::where('name', '=', 'Customer')->first();
            $user =  User::create([
            'name'              => $data['name'],
            'first_name'        => $data['name'],
            'last_name'         => $data['familyName'],
            'email'             => $data['email'],
            'mobile'            => $data['mobile'],
            'user_role_id'      => $data['id'],
            'zipCode'           => $data['zipCode'],
            'token'             => str_random(64),
            'signup_ip_address' => $ipAddress->getClientIp(),
            'activated'         => !config('settings.activation')
        ]);

            $user->attachRole($role);
            $this->initiateEmailActivation($user);

            return $user;
        }
        

    }
    
}