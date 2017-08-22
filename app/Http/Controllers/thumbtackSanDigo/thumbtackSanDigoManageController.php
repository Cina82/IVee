<?php

namespace App\Http\Controllers\thumbtackSanDigo;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;
use Illuminate\Validation\Rule;
use App\Models\User;
use Session;

class thumbtackSanDigoManageController extends Controller
{
    public function thumbtackSanDigo(){
    	$data = $this->pageDetails();
        return view('pages.thumbtackSanDigo.thumbtackSanDigo',compact('data'));
    }
}
