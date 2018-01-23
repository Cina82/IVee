<?php

namespace App\Http\Controllers\customerDash;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\Admin\ServiceModel;
use App\Models\pro\ProfessionalQuotes;
use App\Models\pro\ProfessionalServiceProvide;
use App\Models\customer\CustomerServiceQuestion;
use App\Models\User;
use Session;
use DB;

class customerDashManageController extends Controller
{
    public function viewQuotes($serviceId)
    {
		$post = ProfessionalServiceProvide::all();
		foreach ($post as $posts) {
			$explodService = explode(',',$posts->serviceId);
		    if(in_array($serviceId, $explodService)){
				print_r($serviceId);
			}
    }
    	exit();
        return view('pages.customerDash.viewCustomerQuotes');    	
	}
	public function settings()
	{
		return view('pages.customerDash.settings');    		
	}
	public function profile()
	{	
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
        return view('pages.customerDash.profile',compact('users','serviceName'));
	}
	public function saveAccount(Request $request)
	{
		$post = array();
		$post['first_name'] = $request->usr_first_name;
		$post['last_name'] = $request->usr_last_name;
		$post['email'] = $request->usr_email;
		$pages = User::where('id',Auth::id())->update($post);
		return redirect('customer/account');
	}
	public function account()
	{
		return view('pages.customerDash.account');	
	}
	public function accountEdit()
	{
		return view('pages.customerDash.accountEdit');		
	}
	public function notification()
	{
		return view('pages.customerDash.notification');		
	}
}
