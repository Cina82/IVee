<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\User;
use App\Models\Admin\pageManage;
use Session;
class pageManageController extends Controller
{
    	

        

    	public function page()
    	{
            $data = $this->pageDetails();
            $post = pageManage::all();
			return view('pages.admin.pages.page',compact('data','post'));
    	}

    	public function newPage()
    	{
    		return view('pages.admin.pages.newPage');
    	}

        //save new Organiser Controller
        public function savePage(Request $request)
        {
            $data = $request->all();
            $post = new pageManage;
            $post->name=$data['name'];
            $post->metaTitle=$data['metaTitle'];
            $post->metaDescription=$data['metaDescription'];
            $post->metaValue=$data['metaValue'];
            $post->save();
            Session::flash('message', 'Page data Saved.');
            Session::flash('alert-class', 'alert-success');
            return redirect('page');
        }
        public function showEditPage($id)
        {
             $post = pageManage::find($id);
             return view('pages.admin.pages.editPage',compact('post'));
        }
        public function editPage(Request $request)
        {
             $post = array();
             $post['name'] = $request->input('name');
             $post['metaTitle'] = $request->input('metaTitle');
             $post['metaDescription'] = $request->input('metaDescription');
             $post['metaValue'] = $request->input('metaValue');
             $pages = pageManage::where('id',$request->input('id'))->update($post);
             Session::flash('message', 'Page data Updated.');
             Session::flash('alert-class', 'alert-success');
             return redirect('page');
        }
        public function deletePage($id)
        {
             $post = pageManage::find($id);
             $post->delete();
             Session::flash('message', 'Page data Deleted.');
             Session::flash('alert-class', 'alert-success');
             return redirect('page');
        }
    	    
}
