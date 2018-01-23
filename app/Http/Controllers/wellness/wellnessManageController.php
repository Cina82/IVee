<?php

namespace App\Http\Controllers\wellness;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;
use App\Models\Admin\ServiceModel;
use DB;
class wellnessManageController extends Controller
{
    public function wellness(){
    	$data = $this->pageDetails();
    	/*$wellness = ServiceModel::where('categoryId',12)->get();*/
    	$wellness = DB::table('serviceQuestion')
            			->join('categoryServices', 'categoryServices.id', '=', 'serviceQuestion.categoryServiceId')
            			->select('categoryServices.id as id','categoryServices.categoryId as catId','categoryServices.name as name','categoryServices.image as image','serviceQuestion.id as qId','serviceQuestion.question as question')
						->where('categoryServices.categoryId',23)
						->get();
		return view('pages.wellness.wellness',compact('data','wellness'));
    }
}
