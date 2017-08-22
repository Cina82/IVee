<?php

namespace App\Http\Controllers\prices;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;


class pricesManageController extends Controller
{
    public function prices(){
    	$data = $this->pageDetails();
        return view('pages.prices.prices',compact('data'));
    }
}
