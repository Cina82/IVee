<?php

namespace App\Http\Controllers\homeImprovement;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;
use App\Models\Admin\ServiceModel;
use DB;
class homeImprovementManageController extends Controller
{
    public function homeImprovement(){
    	$data = $this->pageDetails();
    	$homeImprovement = DB::table('serviceQuestion')
            			->join('categoryServices', 'categoryServices.id', '=', 'serviceQuestion.categoryServiceId')
            			->select('categoryServices.id as id','categoryServices.categoryId as catId','categoryServices.name as name','categoryServices.image as image','serviceQuestion.id as qId','serviceQuestion.question as question')
						->where('categoryServices.categoryId',22)
						->get();
		
        return view('pages.homeImprovement.homeImprovement',compact('data','homeImprovement'));
    }
}
