<?php

namespace App\Http\Controllers\lessons;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;
use App\Models\Admin\ServiceModel;
use DB;
class lessonsManageController extends Controller
{
    public function lessons(){
    	$data = $this->pageDetails();

    	$lessons = DB::table('serviceQuestion')
            			->join('categoryServices', 'categoryServices.id', '=', 'serviceQuestion.categoryServiceId')
            			->select('categoryServices.id as id','categoryServices.categoryId as catId','categoryServices.name as name','categoryServices.image as image','serviceQuestion.id as qId','serviceQuestion.question as question')
						->where('categoryServices.categoryId',8)
						->get();

		/*$lession = ServiceModel::where('categoryId',8)->get();*/
        return view('pages.lessons.lessons',compact('data','lessons'));
    }
}
