<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\User;
use App\Models\Admin\ServiceModel;

class UserController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = Auth::user();
		
        if ($user->isSuperadmin()) {

            return view('pages.superadmin.home');

        }

        if ($user->isAdmin()) {
            $cust=User::where('role_data',4)->count();
            $proCust=User::where('role_data',3)->count();
            $services=ServiceModel::all()->count();
            return view('pages.admin.home',compact('cust','proCust','services'));

        }
        if ($user->isCustomer()) {

            return view('pages.customerUser.home');

        }
        if ($user->isProfetional()) {

            return view('pages.profetionalUser.home');

        }
                
    }

}