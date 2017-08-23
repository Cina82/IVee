<?php

namespace App\Http\Controllers\customerUser;
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

class customerUserManageController extends Controller
{
    	

        //show all organiser controller
    	public function index()
    	{
			$post = User::where('role_data','4')->get();
			return view('pages.customerUser.pages.customer',compact('post'));
    	}

    	public function newCustomer()
    	{
    		return view('pages.customerUser.pages.newCustomer');
    	}

        //save new Organiser Controller
        public function saveCustomer(Request $request)
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
            Session::flash('message', 'Customer save successfully.');
            Session::flash('alert-class', 'alert-success');
            return redirect('createCustomerUser');
        }
        public function showEditCustomer($id)
        {
             $post = User::find($id);
             return view('pages.customerUser.pages.editCustomer',compact('post'));
        }
        public function EditCustomer(Request $request)
        {
             $post = array();
             $post['first_name'] = $request->input('firstName');
             $post['last_name'] = $request->input('familyName');
             $post['email'] = $request->input('email');
             $post['mobile'] = $request->input('mobile');
             $pages = User::where('id',$request->input('id'))->update($post);
             Session::flash('message', 'Customer update successfully.');
             Session::flash('alert-class', 'alert-success');
             return redirect('createCustomerUser');
        }
        public function deleteCustomer($id)
        {
             $post = User::find($id);
             $post->delete();
             $role = roleManage::where('user_id',$id);    
             $role->delete();
             Session::flash('message', 'Customer delete successfully.');
             Session::flash('alert-class', 'alert-success');
             return redirect('createCustomerUser');
        }
    	    
}
