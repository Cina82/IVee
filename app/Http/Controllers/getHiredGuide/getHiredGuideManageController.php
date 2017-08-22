<?php

namespace App\Http\Controllers\getHiredGuide;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;
use Illuminate\Validation\Rule;
use App\Models\User;
use Session;

class getHiredGuideManageController extends Controller
{
    public function getHiredGuide(){
    	$data = $this->pageDetails();
        return view('pages.getHired.getHiredGuide',compact('data'));
    }
    public function getHiredGuideProfile(){
    	$data = $this->pageDetails();
        return view('pages.getHired.getHiredGuideProfile',compact('data'));
    }
    public function getHiredGuideReview(){
    	$data = $this->pageDetails();
        return view('pages.getHired.getHiredGuideReview',compact('data'));
    }
    public function getHiredGuidePreference(){
    	$data = $this->pageDetails();
        return view('pages.getHired.getHiredGuidePreference',compact('data'));
    }
    public function getHiredGuideQuote(){
    	$data = $this->pageDetails();
        return view('pages.getHired.getHiredGuideQuote',compact('data'));
    }
     public function getHiredGuideFollowup(){
    	$data = $this->pageDetails();
        return view('pages.getHired.getHiredGuideFollowup',compact('data'));
    }
    public function getHiredGuideHired(){
    	$data = $this->pageDetails();
        return view('pages.getHired.getHiredGuideHired',compact('data'));
    }
    
    
}
