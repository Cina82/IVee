<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\Admin\ServiceModel;
use App\Models\Admin\CategoryModel;
use App\Models\Admin\SubCategoryModel;
use Image;
use Session;
class serviceManageController extends Controller
{
    	public function service()
    	{
            $data = ServiceModel::all();
			return view('pages.admin.service.service',compact('data'));
    	}

    	public function newService()
        {   
            $ary = CategoryModel::all();
            return view('pages.admin.service.newService',compact('ary'));
    	}
        public function saveService(Request $request)
        {
            $data = $request->all();
            $post = new ServiceModel;
            $post->name=$data['name'];
            $post->categoryId=$data['category'];
            $post->subCategoryId=$data['subCategory'];
            $post->priority=$data['priority'];
            $string = str_replace(' ', '-', strtolower($request->name));
            $slugdata=preg_replace('/[^A-Za-z0-9\-]/', '', $string);
            $post->slug=$slugdata;
            $photo = $request->file('image');
            $imagename = time().'.'.$photo->getClientOriginalExtension(); 
            $destinationPath = public_path('/thumbtack_image');
            $thumb_img = Image::make($photo->getRealPath())->resize(480, 380);
            $thumb_img->save($destinationPath.'/'.$imagename,80);
            $destinationPath = public_path('/uploads');
            $photo->move($destinationPath, $imagename);
            $post->image=$imagename;
            
            $post->status=$request->status;
            $post->save();
            Session::flash('message', 'Service Add Successfully.');
            Session::flash('alert-class', 'alert-success');
            return redirect('service');
        }
        public function showEditService($id)
        {
             $ary = CategoryModel::all();
             $post = ServiceModel::find($id);
             $subCategory = SubCategoryModel::select('id','name')->where('mainCategoryId',$post->categoryId)->get();
             return view('pages.admin.service.editService',compact('post','ary','subCategory'));
        }
        public function editService(Request $request)
        {
             $post = array();
             $post['name'] = $request->input('name');

             $string = str_replace(' ', '-', strtolower($request->input('name')));
             $slugdata=preg_replace('/[^A-Za-z0-9\-]/', '', $string);
             $post['slug']=$slugdata;
             $post['priority'] = $request->input('priority');
             $post['status'] = $request->input('status');
             $post['categoryId'] = $request->input('category');
             $post['subCategoryId']=$request->input('subCategory')  ;
            $photo = $request->file('image');
            if($photo != null)
            {
                $imagename = time().'.'.$photo->getClientOriginalExtension(); 
                $destinationPath = public_path('/thumbtack_image');
                $thumb_img = Image::make($photo->getRealPath())->resize(480,380);
                $thumb_img->save($destinationPath.'/'.$imagename,80);
                $destinationPath = public_path('/uploads');
                $photo->move($destinationPath, $imagename);
                $post['image'] = $imagename;
            }
             

             $pages = ServiceModel::where('id',$request->input('id'))->update($post);
             Session::flash('message', 'Service Update Successfully.');
             Session::flash('alert-class', 'alert-success');
             return redirect('service');
        }
        public function deleteService($id)
        {
             $post = ServiceModel::find($id);
             $post->delete();
             Session::flash('message', 'Service Delete Successfully.');
             Session::flash('alert-class', 'alert-success');
             return redirect('service');
        }
    	    
}
