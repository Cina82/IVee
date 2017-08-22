<?php

namespace App\Http\Controllers\survey;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;
use Illuminate\Validation\Rule;
use App\Models\User;
use Session;

class surveyManageController extends Controller
{
    public function survey(){
    	$data = $this->pageDetails();
        return view('pages.survey.survey',compact('data'));
    }
}
