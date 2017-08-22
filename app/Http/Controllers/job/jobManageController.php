<?php

namespace App\Http\Controllers\job;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;


class jobManageController extends Controller
{
    public function job(){
    	$data = $this->pageDetails();
        return view('pages.job.job',compact('data'));
    }
}
