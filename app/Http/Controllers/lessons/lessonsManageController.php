<?php

namespace App\Http\Controllers\lessons;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;
use App\Models\Admin\ServiceModel;

class lessonsManageController extends Controller
{
    public function lessons(){
    	$data = $this->pageDetails();
    	$lession = ServiceModel::where('categoryId',8)->get();
        return view('pages.lessons.lessons',compact('data','lession'));
    }
}
