<?php

namespace App\Http\Controllers\proCenter;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;
use Illuminate\Validation\Rule;
use App\Models\User;
use Session;

class proCenterManageController extends Controller
{
    public function proCenter(){
    	$data = $this->pageDetails();
        return view('pages.proCenter.proCenter',compact('data'));
    }
}
