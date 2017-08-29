<?php

namespace App\Http\Controllers\wellness;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;
use App\Models\Admin\ServiceModel;

class wellnessManageController extends Controller
{
    public function wellness(){
    	$data = $this->pageDetails();
    	$wellness = ServiceModel::where('categoryId',12)->get();
        return view('pages.wellness.wellness',compact('data','wellness'));
    }
}
