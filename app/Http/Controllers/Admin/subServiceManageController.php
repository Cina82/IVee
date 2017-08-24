<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\Admin\subServiceModel;
use App\Models\Admin\CategoryModel;
use App\Models\Admin\ServiceModel;
use Image;
use Session;
class subServiceManageController extends Controller
{
    	public function subService()
    	{
            $data = subServiceModel::all();
			return view('pages.admin.subService.subService',compact('data'));
    	}

    	public function newSubService()
        {   
            $post = CategoryModel::all();
            $ary = ServiceModel::all();
            return view('pages.admin.subService.newSubService',compact('ary','post'));
    	}
        public function saveSubService(Request $request)
        {

            $data = $request->all();
            $post = new subServiceModel;
            $post->name=$data['Name'];
            $post->serviceId=$data['subService'];
            $string = str_replace(' ', '-', strtolower($request->Name));
            $slugdata=preg_replace('/[^A-Za-z0-9\-]/', '', $string);
            $post->slug=$slugdata;
            $post->status=$request->status;
            $post->save();
            Session::flash('message', 'SubService Save Successfully.');
            Session::flash('alert-class', 'alert-success');
            return redirect('subService');
        }
        public function showSubEditService($id)
        {
             $ary = ServiceModel::all();
             $post = subServiceModel::find($id);
             return view('pages.admin.subService.editSubService',compact('post','ary'));
        }
        public function EditSubService(Request $request)
        {
             $post = array();
             $post['name'] = $request->input('name');
             $string = str_replace(' ', '-', strtolower($request->input('name')));
             $slugdata=preg_replace('/[^A-Za-z0-9\-]/', '', $string);
             $post['slug']=$slugdata;
             $post['serviceId'] = $request->input('subService');
             $post['status'] = $request->input('status');
             
             $pages = subServiceModel::where('id',$request->input('id'))->update($post);
             Session::flash('message', 'SubService Update Successfully.');
             Session::flash('alert-class', 'alert-success');
             return redirect('subService');
        }
        public function deleteSubService($id)
        {
             $post = subServiceModel::find($id);
             $post->delete();
             Session::flash('message', 'SubService Delete Successfully.');
             Session::flash('alert-class', 'alert-success');
             return redirect('subService');
        }
    	    
}
