<?php

namespace App\Http\Controllers\howThumbtackWorks;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;
use Illuminate\Validation\Rule;
use App\Models\User;
use Session;

class howThumbtackWorksManageController extends Controller
{
    public function howThumbtackWorks(){
    	$data = $this->pageDetails();
        return view('pages.howThumbtackWorks.howThumbtackWorks',compact('data'));
    }
}
