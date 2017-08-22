<?php

namespace App\Http\Controllers\blog;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;
use Illuminate\Validation\Rule;
use App\Models\User;
use Session;

class blogManageController extends Controller
{
    public function blog(){
    	$data = $this->pageDetails();
        return view('pages.blog.blog',compact('data'));
    }
}
