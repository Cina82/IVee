<?php

namespace App\Http\Controllers\explore;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;
use DB;

class exploreManageController extends Controller
{
    public function explore(){
    	$data = $this->pageDetails();
    	$homeImprovement = DB::table('serviceQuestion')
                        ->join('categoryServices', 'categoryServices.id', '=', 'serviceQuestion.categoryServiceId')
                        ->select('categoryServices.id as id','categoryServices.categoryId as catId','categoryServices.name as name','categoryServices.image as image','serviceQuestion.id as qId','serviceQuestion.question as question')
                        ->where('categoryServices.categoryId',10)
                        ->get();
        $event = DB::table('serviceQuestion')
                        ->join('categoryServices', 'categoryServices.id', '=', 'serviceQuestion.categoryServiceId')
                        ->select('categoryServices.id as id','categoryServices.categoryId as catId','categoryServices.name as name','categoryServices.image as image','serviceQuestion.id as qId','serviceQuestion.question as question')
                        ->where('categoryServices.categoryId',11)
                        ->get();
        $wellness = DB::table('serviceQuestion')
                        ->join('categoryServices', 'categoryServices.id', '=', 'serviceQuestion.categoryServiceId')
                        ->select('categoryServices.id as id','categoryServices.categoryId as catId','categoryServices.name as name','categoryServices.image as image','serviceQuestion.id as qId','serviceQuestion.question as question')
                        ->where('categoryServices.categoryId',12)
                        ->get();
        return view('pages.explore.explore',compact('data','homeImprovement','event','wellness'));
    }
}
