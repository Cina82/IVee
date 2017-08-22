<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\Admin\ProCategoryModel;
use Session;
class proCategoryManageController extends Controller
{
    	public function proCategory()
    	{
            $data = ProCategoryModel::all();
			return view('pages.admin.proCategory.proCategory',compact('data'));
    	}

    	public function newProCategory()
    	{
    		return view('pages.admin.proCategory.newProCategory');
    	}
        public function saveProCategory(Request $request)
        {
            
            $data = $request->all();
            $post = new ProCategoryModel;
            $post->name=$data['name'];
            $post->priority=$data['priority'];
            $post->status=$request->status;
            $string = str_replace(' ', '-', strtolower($request->name));
            $slugdata=preg_replace('/[^A-Za-z0-9\-]/', '', $string);
            $post->slug=$slugdata;
            $post->save();
            Session::flash('message', 'Category Add Successfully.');
            Session::flash('alert-class', 'alert-success');
            return redirect('proCategory');
        }
        public function showProEditCategory($id)
        {
             $post = ProCategoryModel::find($id);
             return view('pages.admin.proCategory.editProCategory',compact('post'));
        }
        public function editProCategory(Request $request)
        {
            
             $post = array();
             $post['name'] = $request->input('name');
             $post['priority'] = $request->input('priority');
             $post['status'] = $request->input('status');
             $string = str_replace(' ', '-', strtolower($request->name));
             $slugdata=preg_replace('/[^A-Za-z0-9\-]/', '', $string);
             $post['slug']=$slugdata;
             $pages = ProCategoryModel::where('id',$request->input('id'))->update($post);
             Session::flash('message', 'Category Update Successfully.');
             Session::flash('alert-class', 'alert-success');
             return redirect('proCategory');
        }
        public function deleteProCategory($id)
        {
             $post = ProCategoryModel::find($id);
             $post->delete();
             Session::flash('message', 'Category Delete Successfully.');
             Session::flash('alert-class', 'alert-success');
             return redirect('proCategory');
        }
    	    
}
