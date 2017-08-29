<?php

namespace App\Http\Controllers\homeImprovement;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;
use App\Models\Admin\ServiceModel;

class homeImprovementManageController extends Controller
{
    public function homeImprovement(){
    	$data = $this->pageDetails();
    	$homeImprovement = ServiceModel::where('categoryId',10)->get();
        return view('pages.homeImprovement.homeImprovement',compact('data','homeImprovement'));
    }
}
