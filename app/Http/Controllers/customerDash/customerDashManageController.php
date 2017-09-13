<?php

namespace App\Http\Controllers\customerDash;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\pro\ProfessionalQuotes;
use Session;

class customerDashManageController extends Controller
{
    public function viewQuotes($serviceId)
    {
    	print_r(Auth::id());
    	exit();
    	$quotesData = ProfessionalQuotes::where('userId',Auth::id())->where('serviceId',$serviceId)->get();
    	print_r($quotesData);
    	exit;
        return view('pages.customerDash.viewCustomerQuotes');
    }    	
}
