<?php

namespace App\Http\Controllers\moreServices;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;


class moreServicesManageController extends Controller
{
    public function moreServices(){
    	$data = $this->pageDetails();
        return view('pages.moreServices.moreServices',compact('data'));
    }
}
