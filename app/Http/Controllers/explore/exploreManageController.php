<?php

namespace App\Http\Controllers\explore;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;


class exploreManageController extends Controller
{
    public function explore(){
    	$data = $this->pageDetails();
        return view('pages.explore.explore',compact('data'));
    }
}
