<?php

namespace App\Http\Controllers\customerDash;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Session;

class customerDashManageController extends Controller
{
    public function viewQuotes()
    {
        return view('pages.customerDash.viewCustomerQuotes');
    }    	
}
