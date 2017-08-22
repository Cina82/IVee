<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Producthistory;
use Session;
use Image;

class RunCommand extends Controller {

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
//		$arr = shell_exec('git init https://patelchandani@bitbucket.org/taylormoss15/trackly.git');
		echo "<pre>";
		$test = system('cd /home4/tmoss15/public_html/taylor-moss.com/ && git pull 2>&1', $arr);
		dd($arr);
		
	}

}
