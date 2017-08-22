<?php

namespace App\Http\Controllers\proApp;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;


class proAppManageController extends Controller
{
    public function proApp(){
    	$data = $this->pageDetails();
        return view('pages.proApp.proApp',compact('data'));
    }
}
