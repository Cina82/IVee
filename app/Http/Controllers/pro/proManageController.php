<?php

namespace App\Http\Controllers\pro;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;
use Illuminate\Validation\Rule;
use App\Models\User;
use App\Models\Admin\ServiceModel;
use App\Models\Admin\subServiceModel;
use App\Models\pro\ProfessionalServiceProvide;
use Session;
use DB;

class proManageController extends Controller
{
    public function pro(){
    	$data = $this->pageDetails();
		$category = DB::table('mainCategory')
            ->select('id','name')
            ->orderBy('id','ASC')
            ->get();
		$category1 = DB::table('mainCategory')
            ->select('id','name')
			->orderBy('id','ASC')
			->limit(1)
            ->get();
		$catone = $category1['0']->id;
        $subcategory = DB::table('mainCategory')
            			->join('SubCategory', 'mainCategory.id', '=', 'SubCategory.mainCategoryId')
            			->select('SubCategory.id','SubCategory.name')
						->where('mainCategory.id',$catone)
						->get();
        
		$alldata = DB::table('mainCategory')
            			->join('categoryServices', 'mainCategory.id', '=', 'categoryServices.categoryId')
            			->select('mainCategory.id as mid','mainCategory.name as mname','categoryServices.id as cid','categoryServices.name as cname')
						->get();
		
		return view('pages.pro.pro',compact('data','category','subcategory','alldata'));
    }
	public function prosubcat($id)
    {
    	
    	$subcategory = DB::table('mainCategory')
            			->join('SubCategory', 'mainCategory.id', '=', 'SubCategory.mainCategoryId')
            			->select('SubCategory.id','SubCategory.name')
						->where('mainCategory.id',$id)
						->get();
        /*                $subcategory = DB::table('mainCategory')
                        ->join('categoryServices', 'mainCategory.id', '=', 'categoryServices.categoryId')
                        ->select('categoryServices.id','categoryServices.name')
                        ->where('mainCategory.id',$id)
                        ->get();
        */
		foreach ($subcategory as $ss) {
			$name=$ss->name;	
			print_r("<div class='BrowseSection-submetaBox ng-scope'>

                    <a class='BrowseSection-submeta ng-binding' href='serviceProvide{$ss->id}'>
                      $name
                        <svg class='BrowseSection-submetaIcon'>
                            <use xlink:href='#thumbprinticon-left-caret_16'></use>
                        </svg>

                    </a>
                </div>");
			
		}
	}
    public function prosubService()
    {   
        $val[] = $_GET['val'];
        $i = count($val);
        $items = subServiceModel::select('id','name')->where('serviceId',$val)->get();

        foreach($items as $service)
        {
                  print_r("<div class='InputContainer ng-scope' ng-repeat='service in services'>
                        <div class='page-grid'>
                            <div class='column-lg-6'>
                                <div class='InputContainer-inner'>
                                    <input-checkbox input-checkbox-label='Guitar Lessons' class='ng-isolate-scope'>
                                        <div class='InputCheckbox'>
                                            <input ng-model='service.selected' class='ng-scope ng-pristine ng-valid u-visuallyHidden' id='inputCheckbox1{{$service['id']}}' type='checkbox' value ='".$service['id']."' name='additionalService[]'>
                                            <label class='InputCheckbox-label' for='inputCheckbox1{{$service['id']}}'>
                                                <div class='InputCheckbox-label-inner'>". $service['name']."</div>
                                            </label>
                                        </div>
                                    </input-checkbox>
                                </div>
                            </div>
                        </div>
                    </div>");
        }

        
    }
    public function saveServiceProvide(Request $request)
    {
        $proService = implode(",",$request->input('provideservice'));
        $proTravel = implode(",",$request->input('travelCustomer'));
        
        $proData = array();
        $proData['provideservice']=$request->input('provideservice');
        $proData['additionalService']=$request->input('additionalService');
        $proData['travelCustomer']=$request->input('travelCustomer');
        $proData['zip']=$request->input('zip');
        $encodeData = json_encode($proData);
        $request->session()->put('servicePrivideJson', $encodeData);
        $request->session()->put('proServiceId', $proService);
        $request->session()->put('proTravel', $proTravel);
        if (Auth::check())
        {
            $savePro = new ProfessionalServiceProvide();
            $savePro['userId'] = Auth::id();
            $savePro['serviceId'] =$proService;
            $savePro['proTravel'] =$proTravel;
            $savePro['services'] =$encodeData;
            $savePro->save();
            return redirect('login');
        }
        else
        {
           return redirect('prosignup');
        }
        
    }
    public function prosignup(){
    	return view('auth.proffetionalHire');
    }
    public function showServiceProvide($id)
    {
        $services = ServiceModel::where('subCategoryId',$id)->get();
        return view('pages.pro.services',compact('services'));
        
    }
    
}




               