<?php

namespace App\Http\Controllers\events;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;


class eventsManageController extends Controller
{
    public function events(){

    	$data = $this->pageDetails();
    	return view('pages.events.events',compact('data'));
    }
}
