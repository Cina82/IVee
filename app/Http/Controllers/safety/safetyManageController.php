<?php

namespace App\Http\Controllers\safety;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;
use Illuminate\Validation\Rule;
use App\Models\User;
use Session;

class safetyManageController extends Controller
{
    public function safety(){
    	$data = $this->pageDetails();
        return view('pages.safety.safety',compact('data'));
    }
}
