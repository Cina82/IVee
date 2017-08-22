<?php

namespace App\Http\Controllers\homeImprovement;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;


class homeImprovementManageController extends Controller
{
    public function homeImprovement(){
    	$data = $this->pageDetails();
    	
        return view('pages.homeImprovement.homeImprovement',compact('data'));
    }
}
