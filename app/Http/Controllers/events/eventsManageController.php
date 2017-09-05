<?php

namespace App\Http\Controllers\events;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;
use App\Models\Admin\ServiceModel;
use DB;
class eventsManageController extends Controller
{
    public function events(){

    	$data = $this->pageDetails();
    	/*$event = ServiceModel::where('categoryId',11)->get();*/
    	$event = DB::table('serviceQuestion')
            			->join('categoryServices', 'categoryServices.id', '=', 'serviceQuestion.categoryServiceId')
            			->select('categoryServices.id as id','categoryServices.categoryId as catId','categoryServices.name as name','categoryServices.image as image','serviceQuestion.id as qId','serviceQuestion.question as question')
						->where('categoryServices.categoryId',11)
						->get();
		return view('pages.events.events',compact('data','event'));
    }
}
