<?php

namespace App\Http\Controllers\lessons;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;


class lessonsManageController extends Controller
{
    public function lessons(){
    	$data = $this->pageDetails();
        return view('pages.lessons.lessons',compact('data'));
    }
}
