<?php

namespace App\Http\Controllers\profetional;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\User;
use App\Models\Admin\OrganiserManage;
use App\Models\Admin\roleManage;
use Session;

class profetionalManageController extends Controller
{
    	

        //show all organiser controller
    	public function index()
    	{
			$post = User::where('role_data','3')->get();
			return view('pages.profetionalUser.pages.profetional',compact('post'));
    	}

    	public function newProfetional()
    	{
    		return view('pages.profetionalUser.pages.newProfetional');
    	}

        //save new Organiser Controller
        public function saveProfetional(Request $request)
        {
            $data = $request->all();
            $post = new organiserManage;
            $post->first_name=$data['firstName'];
            $post->last_name=$data['familyName'];
            $post->email=$data['email'];
            $post->mobile=$data['mobile'];
            $post->password=bcrypt($data['password']);
            $post->role_data=$data['role_id'];
            $post->user_role_id=Auth::id();
            $post->activated=1;
            $post->save();
            $insertedId = $post->id;

            $user = new roleManage;
            $user->role_id=$data['role_id'];
            $user->user_id=$insertedId;
            $user->save();
            Session::flash('message', 'Professional save successfully.');
            Session::flash('alert-class', 'alert-success');
            return redirect('createProfessionalUser');
        }
        public function showEditProfetional($id)
        {
             $post = User::find($id);
            return view('pages.profetionalUser.pages.editProfetional',compact('post'));
        
        }
        public function EditProfetional(Request $request)
        {
             $post = array();
             $post['first_name'] = $request->input('firstName');
             $post['last_name'] = $request->input('familyName');
             $post['email'] = $request->input('email');
             $post['mobile'] = $request->input('mobile');
             $pages = User::where('id',$request->input('id'))->update($post);
             Session::flash('message', 'Professional update successfully.');
             Session::flash('alert-class', 'alert-success');
             return redirect('createProfessionalUser');
        }
        public function deleteProfetional($id)
        {
             $post = User::find($id);
             $post->delete();
             $role = roleManage::where('user_id',$id);    
             $role->delete();
             Session::flash('message', 'Professional delete successfully.');
             Session::flash('alert-class', 'alert-success');
             return redirect('createProfessionalUser');
        }
    	    
}
