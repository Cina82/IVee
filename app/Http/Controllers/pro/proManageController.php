<?php

namespace App\Http\Controllers\pro;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;
use Illuminate\Validation\Rule;
use App\Models\User;
use Session;
use DB;

class proManageController extends Controller
{
    public function pro(){
    	$data = $this->pageDetails();
		$category = DB::table('mainCategory')
            ->select('id','name')
            ->get();
		$category1 = DB::table('mainCategory')
            ->select('id','name')
			->orderBy('id','ASC')
			->limit(1)
            ->get();
		$catone = $category1['0']->id;
		$subcategory = DB::table('mainCategory')
            			->join('categoryServices', 'mainCategory.id', '=', 'categoryServices.categoryId')
            			->select('categoryServices.id','categoryServices.name')
						->where('mainCategory.id',$catone)
						->get();
		$alldata = DB::table('mainCategory')
            			->join('categoryServices', 'mainCategory.id', '=', 'categoryServices.categoryId')
            			->select('mainCategory.id as mid','mainCategory.name as mname','categoryServices.id as cid','categoryServices.name as cname')
						->get();
		
		return view('pages.pro.pro',compact('data','category','subcategory','alldata'));
    }
	public function prosubcat($id)
    {
    	
    	$subcategory = DB::table('mainCategory')
            			->join('SubCategory', 'mainCategory.id', '=', 'SubCategory.mainCategoryId')
            			->select('SubCategory.id','SubCategory.name')
						->where('mainCategory.id',$id)
						->get();
        /*                $subcategory = DB::table('mainCategory')
                        ->join('categoryServices', 'mainCategory.id', '=', 'categoryServices.categoryId')
                        ->select('categoryServices.id','categoryServices.name')
                        ->where('mainCategory.id',$id)
                        ->get();
        */
		foreach ($subcategory as $ss) {
			$name=$ss->name;	
			print_r("<div class='BrowseSection-submetaBox ng-scope'>

                    <a class='BrowseSection-submeta ng-binding' ng-href='' href=''>
                      $name
                        <svg class='BrowseSection-submetaIcon'>
                            <use xlink:href='#thumbprinticon-right-caret_16'></use>
                        </svg>

                    </a>
                </div>");
			
		}
		
		 
    }
    public function prosignup(){
    	return view('auth.proffetionalHire');
    }
    
}




               