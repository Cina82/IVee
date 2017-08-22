<?php

namespace App\Http\Controllers\stories;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;
use Illuminate\Validation\Rule;
use App\Models\User;
use Session;

class storiesManageController extends Controller
{
    public function stories(){
    	$data = $this->pageDetails();
        return view('pages.stories.stories',compact('data'));
    }
}
