<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\Admin\CategoryModel;
use Session;
class categoryManageController extends Controller
{
    	public function category()
    	{
            $data = CategoryModel::all();
			return view('pages.admin.category.category',compact('data'));
    	}

    	public function newCategory()
    	{
    		return view('pages.admin.category.newCategory');
    	}
        public function saveCategory(Request $request)
        {
            
            $data = $request->all();
            $post = new CategoryModel;
            $post->name=$data['name'];
            $post->priority=$data['priority'];
            $post->status=$request->status;
            $string = str_replace(' ', '-', strtolower($request->name));
            $slugdata=preg_replace('/[^A-Za-z0-9\-]/', '', $string);
            $post->slug=$slugdata;
            $post->save();
            Session::flash('message', 'Category Add Successfully.');
            Session::flash('alert-class', 'alert-success');
            return redirect('category');
        }
        public function showEditCategory($id)
        {
             $post = CategoryModel::find($id);
             return view('pages.admin.category.editCategory',compact('post'));
        }
        public function editCategory(Request $request)
        {
             $post = array();
             $post['name'] = $request->input('name');
             $post['priority'] = $request->input('priority');
             $post['status'] = $request->input('status');
             $string = str_replace(' ', '-', strtolower($request->name));
             $slugdata=preg_replace('/[^A-Za-z0-9\-]/', '', $string);
             $post['slug']=$slugdata;
             $pages = CategoryModel::where('id',$request->input('id'))->update($post);
             Session::flash('message', 'Category Update Successfully.');
             Session::flash('alert-class', 'alert-success');
             return redirect('category');
        }
        public function deleteCategory($id)
        {
             $post = CategoryModel::find($id);
             $post->delete();
             Session::flash('message', 'Category Delete Successfully.');
             Session::flash('alert-class', 'alert-success');
             return redirect('category');
        }
    	    
}
