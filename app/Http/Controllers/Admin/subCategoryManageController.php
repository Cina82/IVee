<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\Admin\SubCategoryModel;
use App\Models\Admin\CategoryModel;
use Session;
class subCategoryManageController extends Controller
{
    	public function subCategory()
    	{
            $data = SubCategoryModel::all();
			return view('pages.admin.subCategory.subCategory',compact('data'));
    	}

    	public function newSubCategory()
    	{  
            $ary = CategoryModel::all();
    		return view('pages.admin.subCategory.newSubCategory',compact('ary'));
    	}
        public function saveSubCategory(Request $request)
        {
            $data = $request->all();
            $post = new SubCategoryModel;
            $post->mainCategoryId=$data['proCategory'];
            $post->name=$data['name'];
            $post->priority=$data['priority'];
            $post->status=$request->status;
            $string = str_replace(' ', '-', strtolower($request->name));
            $slugdata=preg_replace('/[^A-Za-z0-9\-]/', '', $string);
            $post->slug=$slugdata;

            $post->save();
            Session::flash('message', 'SubCategory Add Successfully.');
            Session::flash('alert-class', 'alert-success');
            return redirect('subCategory');
        }
        public function showEditSubCategory($id)
        {
             $post = SubCategoryModel::find($id);
              $ary = CategoryModel::all();
             return view('pages.admin.subCategory.editSubCategory',compact('post','ary'));
        }
        public function editSubCategory(Request $request)
        {
             $post = array();
             $post['mainCategoryId']=$request->input('proCategory');
             $post['name'] = $request->input('name');
             $post['priority'] = $request->input('priority');
             $post['status'] = $request->input('status');
             $string = str_replace(' ', '-', strtolower($request->name));
             $slugdata=preg_replace('/[^A-Za-z0-9\-]/', '', $string);
             $post['slug']=$slugdata;
             $pages = SubCategoryModel::where('id',$request->input('id'))->update($post);
             Session::flash('message', 'SubCategory Update Successfully.');
             Session::flash('alert-class', 'alert-success');
             return redirect('subCategory');
        }
        public function deleteSubCategory($id)
        {
             $post = SubCategoryModel::find($id);
             $post->delete();
             Session::flash('message', 'SubCategory Delete Successfully.');
             Session::flash('alert-class', 'alert-success');
             return redirect('subCategory');
        }
        public function subCategoryOption($id)
        {
             $post = SubCategoryModel::select('id','name')->where('mainCategoryId',$id)->get();
             foreach ($post as $posts) {
                 echo "<option value='".$posts->id."'>".$posts->name."</option>";
             }

        }
    	    
}
