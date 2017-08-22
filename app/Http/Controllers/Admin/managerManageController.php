<?php

namespace App\Http\Controllers\Admin;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin\OrganiserManage;
use App\Models\Admin\roleManage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Eloquent\Models\Model;
use Session;
class managerManageController extends Controller
{   
    // create manager Via Organiser controllers
   	public function index()
   	{
		$post = User::where('role_data','3')
		->where('user_role_id',Auth::id())
		->get();
		return view('pages.owner.pages.manager',compact('post'));
   	}
   	public function newManager()
    {
        $getCreatedManager = User::select('noManagerCreate')
        ->where('id',Auth::id())->get();
        $count = User::where('role_data',3)
        ->where('user_role_id',Auth::id())->count();
        
        if($count < $getCreatedManager[0]->noManagerCreate)
        {
    	   return view('pages.owner.pages.newManager');
        }
        else{
            
            Session::flash('message', 'Create Manager limits has been Over');
            Session::flash('alert-class', 'alert-danger');
            return redirect()->back();
        }
    }
    public function saveManager(Request $request)
    {
        
            $data = $request->all();
            $post = new organiserManage;
            $post->name=$data['name'];
            $post->first_name=$data['first_name'];
            $post->last_name=$data['last_name'];
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
            Session::flash('message', 'Manager data Saved.');
            Session::flash('alert-class', 'alert-success');
            return redirect('manager');        
    }
    public function showEditManager($id)
    {
        $post = User::find($id);
        return view('pages.owner.pages.editManager',compact('post'));
    }
    public function editManager(Request $request)
    {
        $post = array();
        $post['name'] = $request->input('name');
        $post['first_name'] = $request->input('first_name');
        $post['last_name'] = $request->input('last_name');
        $post['email'] = $request->input('email');
        $post['mobile'] = $request->input('mobile');
        $pages = User::where('id',$request->input('id'))->update($post);
        Session::flash('message', 'Manager data Updated.');
        Session::flash('alert-class', 'alert-success');
        return redirect('manager');
    }
    public function deleteManager($id)
    {
        $post = User::find($id);
        $post->delete();
        $role = roleManage::where('user_id',$id);    
        $role->delete();
        Session::flash('message', 'Manager data Deleted.');
        Session::flash('alert-class', 'alert-success');
        return redirect('manager');
    }

    // create manager Via Superadmin controllers

    public function createManagerViaAdmin()
    {
        $post = User::where('role_data','2')->get();
        return view('pages.owner.pages.newManagerViaAdmin',compact('post'));
     
    }
    public function saveManagerViaAdmin(Request $request)
    {
        $data = $request->all();
        $post = new organiserManage;
        $post->name=$data['name'];
        $post->first_name=$data['first_name'];
        $post->last_name=$data['last_name'];
        $post->email=$data['email'];
        $post->mobile=$data['mobile'];
        $post->password=bcrypt($data['password']);
        $post->role_data=$data['role_id'];
        $post->user_role_id=$data['organiser'];
        $post->activated=1;
        $post->save();
        $insertedId = $post->id;

        $user = new roleManage;
        $user->role_id=$data['role_id'];
        $user->user_id=$insertedId;
        $user->save();
        Session::flash('message', 'Manager data saved.');
        Session::flash('alert-class', 'alert-success');
        return redirect('organiser');    
    }
    

}
