<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\ServiceModel;
use DB;
class WelcomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        $homeImprovement = DB::table('serviceQuestion')
                        ->join('categoryServices', 'categoryServices.id', '=', 'serviceQuestion.categoryServiceId')
                        ->select('categoryServices.id as id','categoryServices.categoryId as catId','categoryServices.name as name','categoryServices.image as image','serviceQuestion.id as qId','serviceQuestion.question as question')
                        ->where('categoryServices.categoryId',22)
                        ->get();
        $event = DB::table('serviceQuestion')
                        ->join('categoryServices', 'categoryServices.id', '=', 'serviceQuestion.categoryServiceId')
                        ->select('categoryServices.id as id','categoryServices.categoryId as catId','categoryServices.name as name','categoryServices.image as image','serviceQuestion.id as qId','serviceQuestion.question as question')
                        ->where('categoryServices.categoryId',28)
                        ->get();
        $wellness = DB::table('serviceQuestion')
                        ->join('categoryServices', 'categoryServices.id', '=', 'serviceQuestion.categoryServiceId')
                        ->select('categoryServices.id as id','categoryServices.categoryId as catId','categoryServices.name as name','categoryServices.image as image','serviceQuestion.id as qId','serviceQuestion.question as question')
                        ->where('categoryServices.categoryId',23)
                        ->get();
        /*$moreService = DB::table('serviceQuestion')
                        ->join('categoryServices', 'categoryServices.id', '=', 'serviceQuestion.categoryServiceId')
                        ->select('categoryServices.id as id','categoryServices.categoryId as catId','categoryServices.name as name','categoryServices.image as image','serviceQuestion.id as qId','serviceQuestion.question as question')
                        ->where('categoryServices.categoryId',9)
                        ->get();

    	$homeImprovement = ServiceModel::where('categoryId',10)->get();
    	$event = ServiceModel::where('categoryId',11)->get();
    	$wellness = ServiceModel::where('categoryId',12)->get();*/
    	$moreService = ServiceModel::where('categoryId',29)->get();
    	return view('welcome',compact('homeImprovement','event','wellness','moreService'));
    }
    
}
