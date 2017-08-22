<?php

namespace App\Http\Controllers\howTo;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;


class howToManageController extends Controller
{
    public function howTo(){
    	$data = $this->pageDetails();
        return view('pages.howTo.howTo',compact('data'));
    }
}
