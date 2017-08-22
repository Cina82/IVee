<?php

namespace App\Http\Controllers\about;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;
use Illuminate\Validation\Rule;
use App\Models\User;
use Session;

class aboutManageController extends Controller
{
    public function about(){
    	$data = $this->pageDetails();
        return view('pages.about.about',compact('data'));
    }
}
