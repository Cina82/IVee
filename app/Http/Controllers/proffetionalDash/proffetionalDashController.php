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
use App\Models\Admin\serviceQuotesCredit;
use App\Models\pro\ProfessionalQuotes;
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
                $customerServiceId = $serviceDetails[0]->id;
                $post = CustomerServiceQuestion::all();
                foreach ($post as $posts) {
                    if($posts['serviceId'] == $serviceId)
                    {   
                        $userId = $posts->customerId;
                        $name = User::select('first_name')->where('id',$userId)->get();
                        $data['serviceId']=$customerServiceId;
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
    public function AddQuotesCredit(Request $request)
    {
        $userData = User::select('credits')->where('id',Auth::id())->get();
        $oldCredit = 0;
        foreach ($userData as $key) {
            $oldCredit = (int)$key->credits;
        }
        $post = array();
        $post['credits'] = (int)$request->amount + $oldCredit ;
        $pages = User::where('id',Auth::id())->update($post);
        return redirect('proffetionalDash/Requests');
    }
    public function professionaolQuotes($serviceId,$custId)
    {
          $customerData = DB::table('users')
                        ->join('customerServiceQuestion', 'users.id', '=', 'customerServiceQuestion.customerId')
                        ->join('categoryServices', 'categoryServices.id', '=', 'customerServiceQuestion.serviceId')
                        ->select('customerServiceQuestion.serviceId as servId','customerServiceQuestion.customerId as custId','customerServiceQuestion.questionAndOption as questionAndOption','users.first_name as userName','categoryServices.name as serviceName')
                        ->where('customerServiceQuestion.serviceId',$serviceId)
                        ->where('customerServiceQuestion.customerId',$custId)
                        ->get();

        
        $requireQuotescredit = serviceQuotesCredit::select('credit')->where('serviceId',$serviceId)->get();        
        $reqCredit = 0;
        foreach ($requireQuotescredit as $val) {
            
            $reqCredit = $val['credit'];
        }

        $credit = User::select('credits')->where('id',Auth::id())->get();
        $creditInt = 0;

        foreach ($credit as $value) {
                $creditInt = (float)$value->credits;
        }
        if($creditInt <= $reqCredit){
            return redirect('payAndSendQuotes');
        }
        else{
            return view('pages.profetionalUser.proffetionalDash.quotes',compact('customerData'));
        }
     
    }
    public function addProfessionalQuotes(Request $request)
    {
        $post = new ProfessionalQuotes();
        $post['userId'] = Auth::id();
        $post['customerId'] =$request->custId; 
        $post['serviceId'] =$request->serviceId;
        $post['quotesPrice'] = $request->quotePrice;
        $post['serviceName'] = $request->serviceName;
        $post['quotesMessage'] = $request->message;

        $credit = User::select('credits')->where('id',Auth::id())->get();
        $creditInt = 0;
        foreach ($credit as $value) {
            $creditInt = (int)$value->credits;
        }
        $requireQuotescredit = serviceQuotesCredit::select('credit')->where('serviceId',$request->serviceId)->get();

        $requireCredit = 0;
        foreach ($requireQuotescredit as $value1) {
            $requireCredit = (int)$value1->credit;
        }

        //credit minus per quotes 
        $totalCredit = (float)$creditInt - $requireCredit;
        if($creditInt >= $requireCredit){

            $ary = array();
            $ary['credits'] = $totalCredit;
            $updateCredit = User::where('id',Auth::id())->update($ary);
            $post->save();
            return redirect('proffetionalDash/Sent');
        }
        else{
            $post->save();
            return redirect('payAndSendQuotes');        
        }
    
    }
    public function viewServices()
    {
        $service = ProfessionalServiceProvide::select('serviceId')->where('userId',Auth::id())->get();
        $data = array();
        foreach ($service as $serv) {
            $serviceIdArray = explode(',',$serv['serviceId']);
            for ($i=0; $i < count($serviceIdArray); $i++) { 
                $serviceName = DB::table('professionalQuotes')
                ->select(DB::raw('count(*) as counts, professionalQuotes.serviceId as serviceId, professionalQuotes.serviceName,sum(quotesPrice) AS amountCost'))
                ->where('professionalQuotes.userId',Auth::id())
                ->where('professionalQuotes.serviceId',$serviceIdArray[$i])
                ->groupBy('professionalQuotes.serviceId')
                ->groupBy('professionalQuotes.serviceName')
                ->get();
                $data[] = $serviceName;  
            }
        
        }
        return view('pages.profetionalUser.proffetionalDash.services',compact('data'));
    }

    public function insights()
    {
        $service = ProfessionalServiceProvide::select('serviceId')->where('userId',Auth::id())->get();
        $data = array();
        
        foreach ($service as $serv) {
            $serviceIdArray = explode(',',$serv['serviceId']);
            
            for ($i=0; $i < count($serviceIdArray); $i++) { 
            
                $serviceName = DB::table('professionalQuotes')
                ->select(DB::raw('count(*) as counts, professionalQuotes.serviceId as serviceId, professionalQuotes.serviceName,sum(quotesPrice) AS amountCost'))
                ->where('professionalQuotes.userId',Auth::id())
                ->where('professionalQuotes.serviceId',$serviceIdArray[$i])
                ->groupBy('professionalQuotes.serviceId')
                ->groupBy('professionalQuotes.serviceName')
                ->get();
                $data[] = $serviceName;  
            }
        
        }
        return view('pages.profetionalUser.proffetionalDash.insights',compact('data'));   
    }
    public function payAndSendQuotes()
    {
        return view('pages.profetionalUser.proffetionalDash.payAndSendQuotes');
    }
    public function Hired()
    {
        return view('pages.profetionalUser.proffetionalDash.hired');
    }    	
    public function Sent()
    {
        $sentQuotesData = DB::table('users')
                        ->join('professionalQuotes', 'users.id', '=', 'professionalQuotes.customerId')
                        ->select('users.first_name as name','professionalQuotes.userId as userId','professionalQuotes.customerId as customerId','professionalQuotes.serviceId as serviceId','professionalQuotes.quotesPrice as quotesPrice','professionalQuotes.serviceName as serviceName','professionalQuotes.quotesMessage as quotesMessage')
                        ->where('professionalQuotes.userId',Auth::id())
                        ->get();

        return view('pages.profetionalUser.proffetionalDash.sent',compact('sentQuotesData'));
    }       
    public function Archived()
    {
        return view('pages.profetionalUser.proffetionalDash.archived');
    }       
    
}
