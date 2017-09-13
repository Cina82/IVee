<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\User;
use App\Models\Admin\ServiceModel;
use App\Models\customer\CustomerServiceQuestion;
use App\Models\pro\ProfessionalServiceProvide;
use DB;

class UserController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $test = "";
        $user = Auth::user();
		
        if ($user->isSuperadmin()) {

            return view('pages.superadmin.home');

        }

        if ($user->isAdmin()) {
            $cust=User::where('role_data',4)->count();
            $proCust=User::where('role_data',3)->count();
            $services=ServiceModel::all()->count();
            return view('pages.admin.home',compact('cust','proCust','services'));

        }
        if ($user->isCustomer()) {

            $service = CustomerServiceQuestion::where('customerId',Auth::id())->get();
            $serviceName = array();
            $users =array();
            foreach ($service as $services) {
                $decodeService = json_decode($services);
                $serviceId = $decodeService->serviceId;
                $serviceName[] = ServiceModel::select('id','name','created_at')->where('id',$serviceId)->get();
                $post = ProfessionalServiceProvide::all();
                $user = array();     
                foreach ($post as $posts) {
                    $explodService = explode(',',$posts->serviceId);
                    if(in_array($serviceId, $explodService))
                    {
                        $userId = $posts->userId;
                        $userDetails = User::where('id',$userId)->get();
                        $user[] = $userDetails;
                    }   
                }
                $users[] = $user;
            }
            
            return view('pages.customerUser.home',compact('users','serviceName'));

        }
        if ($user->isProfetional()) {

            return view('pages.profetionalUser.home');

        }
                
    }

}