<?php

namespace App\Http\Controllers\privacy;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;


class privacyManageController extends Controller
{
    public function privacy(){
    	$data = $this->pageDetails();
        return view('pages.privacy.privacy',compact('data'));
    }
}
