<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Database\Eloquent\Models\Model;
use App\Models\Admin\pageManage;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	public function pageDetails()
	{
		$lastSegment = collect(request()->segments())->last();
		$post = pageManage::all();

		foreach ($post as $row) {
			# code...
			if($lastSegment == $row['name'])
			{
				return $row;

			}
			
		}
		return null;
	
	}    

}
