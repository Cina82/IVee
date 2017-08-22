<?php

namespace App\Http\Controllers\wellness;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;


class wellnessManageController extends Controller
{
    public function wellness(){
    	$data = $this->pageDetails();
        return view('pages.wellness.wellness',compact('data'));
    }
}
