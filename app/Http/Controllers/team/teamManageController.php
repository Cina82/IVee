<?php

namespace App\Http\Controllers\team;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;
use Illuminate\Validation\Rule;
use App\Models\User;
use Session;

class teamManageController extends Controller
{
    public function team(){
    	$data = $this->pageDetails();
        return view('pages.team.team',compact('data'));
    }
}
