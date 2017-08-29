<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\ServiceModel;
class WelcomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
    	$homeImprovement = ServiceModel::where('categoryId',10)->get();
    	$event = ServiceModel::where('categoryId',11)->get();
    	$wellness = ServiceModel::where('categoryId',12)->get();
    	$moreService = ServiceModel::where('categoryId',9)->get();
    	return view('welcome',compact('homeImprovement','event','wellness','moreService'));
    }
    
}
