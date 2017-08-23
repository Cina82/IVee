<?php

namespace App\Http\Controllers\Admin;
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

class adminManageController extends Controller
{
    	protected function validator(array $data)
        {
            return Validator::make($data,
            [
                'email'                 => 'required|email|max:255|unique:users',
                'password'              => 'required|min:6|max:20|confirmed',
                'conform_password' => 'required|same:password',
            ]);
        }

        //show all organiser controller
    	public function index()
    	{
            
			$post = User::where('role_data','2')->get();
			return view('pages.superadmin.pages.organiser',compact('post'));
    	}

    	public function newAdmin()
    	{
    		return view('pages.superadmin.pages.newOrganiser');
    	}

        //save new Organiser Controller
        public function saveAdmin(Request $request)
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
            Session::flash('message', 'admin added successfully.');
            Session::flash('alert-class', 'alert-success');
            return redirect('createAdmin');
        }
        public function showAdmin($id)
        {
             $post = User::find($id);
             return view('pages.superadmin.pages.editOrganiser',compact('post'));
        }
        public function editAdmin(Request $request)
        {
             
             $post = array();
             $post['first_name'] = $request->input('firstName');
             $post['last_name'] = $request->input('familyName');
             $post['email'] = $request->input('email');
             $post['mobile'] = $request->input('mobile');
             $pages = User::where('id',$request->input('id'))->update($post);
             Session::flash('message', 'admin Updated successfully.');
             Session::flash('alert-class', 'alert-success');
             return redirect('createAdmin');
        }
        public function deleteAdmin($id)
        {
             $post = User::find($id);
             $post->delete();
             $role = roleManage::where('user_id',$id);    
             $role->delete();
             Session::flash('message', 'admin Deleted successfully.');
             Session::flash('alert-class', 'alert-success');
             return redirect('createAdmin');
        }
    	    
}
