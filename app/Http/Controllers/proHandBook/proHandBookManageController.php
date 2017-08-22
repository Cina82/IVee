<?php

namespace App\Http\Controllers\proHandBook;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;
use Illuminate\Validation\Rule;
use App\Models\User;
use Session;

class proHandBookManageController extends Controller
{
    public function proHandBook(){
    	$data = $this->pageDetails();
        return view('pages.proHandBook.proHandBook',compact('data'));
    }
}
