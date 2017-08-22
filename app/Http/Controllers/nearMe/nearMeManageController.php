<?php

namespace App\Http\Controllers\nearMe;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;
use Illuminate\Validation\Rule;
use App\Models\User;
use Session;

class nearMeManageController extends Controller
{
    public function nearMe(){
    	$data = $this->pageDetails();
        return view('pages.nearMe.nearMe',compact('data'));
    }
}
