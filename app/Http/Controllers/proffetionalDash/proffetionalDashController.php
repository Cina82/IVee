<?php

namespace App\Http\Controllers\proffetionalDash;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\User;
use App\Models\pro\ProfessionalServiceProvide;
use App\Models\customer\CustomerServiceQuestion;
use App\Models\Admin\ServiceModel;
use Session;
use DB;
class proffetionalDashController extends Controller
{
    
    public function Requests()
    {

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
                $post = CustomerServiceQuestion::all();
                foreach ($post as $posts) {
                    if($posts['serviceId'] == $serviceId)
                    {   
                        $userId = $posts->customerId;
                        $name = User::select('first_name')->where('id',$userId)->get();
                        $data['serviceName']=$customerServiceName;
                        $data['userId']=$userId;
                        $data['questionAndOption']=$posts->questionAndOption;
                        $data['name']=$name[0]->first_name;
                    }

                }
                $customerData[]=$data;
            }
         
        }

        return view('pages.profetionalUser.proffetionalDash.Requests',compact('customerData'));
    }
    public function Hired()
    {
        return view('pages.profetionalUser.proffetionalDash.hired');
    }    	
    public function Sent()
    {
        return view('pages.profetionalUser.proffetionalDash.sent');
    }       
    public function Archived()
    {
        return view('pages.profetionalUser.proffetionalDash.archived');
    }       
    
}
