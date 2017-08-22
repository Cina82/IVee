<?php

namespace App\Http\Controllers\howItWorks;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;
use Illuminate\Validation\Rule;
use App\Models\User;
use Session;

class howItWorksManageController extends Controller
{
    public function howItWorks(){
    	$data = $this->pageDetails();
        return view('pages.howItWorks.howItWorks',compact('data'));
    }
}
