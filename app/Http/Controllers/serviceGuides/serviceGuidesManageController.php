<?php

namespace App\Http\Controllers\serviceGuides;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;


class serviceGuidesManageController extends Controller
{
    public function serviceGuides(){
    	$data = $this->pageDetails();
        return view('pages.serviceGuides.serviceGuides',compact('data'));
    }
}
