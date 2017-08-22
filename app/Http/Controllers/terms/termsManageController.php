<?php

namespace App\Http\Controllers\terms;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;


class termsManageController extends Controller
{
    public function terms(){
    	$data = $this->pageDetails();
        return view('pages.terms.terms',compact('data'));
    }
}
