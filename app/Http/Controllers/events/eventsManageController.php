<?php

namespace App\Http\Controllers\events;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;
use App\Models\Admin\ServiceModel;

class eventsManageController extends Controller
{
    public function events(){

    	$data = $this->pageDetails();
    	$event = ServiceModel::where('categoryId',11)->get();
    	return view('pages.events.events',compact('data','event'));
    }
}
