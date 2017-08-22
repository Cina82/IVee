<?php

namespace App\Http\Controllers\proffetionalDash;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\User;
use Session;

class proffetionalDashController extends Controller
{
    
    public function Requests()
    {
        return view('pages.profetionalUser.proffetionalDash.Requests');
    }
    public function Hired()
    {
        return view('pages.profetionalUser.proffetionalDash.hired');
    }    	
    public function Sent()
    {
        return view('pages.profetionalUser.proffetionalDash.sent');
    }       
    public function Archived()
    {
        return view('pages.profetionalUser.proffetionalDash.archived');
    }       
    
}
