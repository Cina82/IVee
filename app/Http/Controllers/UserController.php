<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\User;
use App\Models\Admin\ServiceModel;
use App\Models\Admin\CategoryModel;
use App\Models\customer\CustomerServiceQuestion;
use App\Models\pro\ProfessionalServiceProvide;
use App\Models\pro\ProfessionalQuotes;
use App\Models\Tracker;
use App\Models\Roles;
use Session;
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
        Tracker::hit();
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $user = Auth::user();
		
        if ($user->isSuperadmin()) {

            return view('pages.superadmin.home');

        }

        if ($user->isAdmin()){
            $webVisitor=Roles::select('hits')->where('date',date('Y-m-d'))->get()->toArray();
            $cust=User::where('role_data',4)->count();
            $proCust=User::where('role_data',3)->count();
            $MainCategory=CategoryModel::all()->count();
            $services=ServiceModel::all()->count();
            $reqService=CustomerServiceQuestion::all()->count();
            
            $user=User::all()->count();
            return view('pages.admin.home',compact('cust','proCust','services','webVisitor','user','MainCategory','reqService'));

        }
        if ($user->isCustomer()) {

            $service = CustomerServiceQuestion::where('customerId',Auth::id())->get();
            $serviceCount = CustomerServiceQuestion::where('customerId',Auth::id())->count();
            session()->put('serviceCount', $serviceCount);
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
                        $userDetails = DB::table('professionalQuotes')
                        ->join('users', 'users.id', '=', 'professionalQuotes.userId')
                        ->select('professionalQuotes.id as id','professionalQuotes.serviceId as servId','professionalQuotes.userId as userId','users.image as image')
                        ->where('professionalQuotes.customerId',Auth::id())
                        ->where('professionalQuotes.serviceId',$serviceId)
                        ->where('professionalQuotes.userId',$userId)
                        ->limit(3)
                        ->get()->toArray();
                        
                        $user[] = $userDetails;
                    }   
                }
                $users[] = $user;
            }
            return view('pages.customerUser.home',compact('users','serviceName'));

        }
        if ($user->isProfetional()) {
            
          $proDetails = ProfessionalServiceProvide::where('userId',Auth::id())->get();
          $customerData = array();
         foreach ($proDetails as $proDetail) {

            $serviceIdArray =explode(',',$proDetail->serviceId);
            $count = count($serviceIdArray);
            $data  = array();
            for ($i=0; $i < $count; $i++) { 
                $serviceId = $serviceIdArray[$i];    
                
                $serviceDetails = ServiceModel::select('id','name','created_at')->where('id',$serviceId)->get();
                $customerServiceName = $serviceDetails[0]->name;
                $customerServiceId = $serviceDetails[0]->id;
                $post = CustomerServiceQuestion::all();
                foreach ($post as $posts) {
                    if($posts['serviceId'] == $serviceId)
                    {   
                        $userId = $posts->customerId;
                        $name = User::select('first_name')->where('id',$userId)->get()->toArray();
                        $data['serviceId']=$customerServiceId;
                        $data['serviceName']=$customerServiceName;
                        $data['userId']=$userId;
                        $data['questionAndOption']=$posts->questionAndOption;
                        $data['name']=$name[0]['first_name'];
                    }

                }
                $customerData[]=$data;
            }

        }
        return view('pages.profetionalUser.home',compact('customerData'));

        }
                
    }

}