<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\Admin\serviceQuotesCredit;
use App\Models\Admin\ServiceModel;
use Image;
use Session;
use DB;
class creditManageController extends Controller
{
    	public function showServiceQuotesCredit()
    	{
            $data = DB::table('showServiceQuotesCredit')
                        ->join('categoryServices', 'categoryServices.id', '=', 'showServiceQuotesCredit.serviceId')
                        ->select('showServiceQuotesCredit.id as id','showServiceQuotesCredit.serviceId as serviceId','categoryServices.name as serviceName','showServiceQuotesCredit.credit as credit')
                        ->get();

            return view('pages.admin.serviceQuotesCredit.showServiceQuotesCredit',compact('data'));
    	}

    	public function newServiceQuotesCredit()
        {
            $ary = ServiceModel::all();
            return view('pages.admin.serviceQuotesCredit.newServiceQuotesCredit',compact('ary'));
    	}
        public function saveServiceQuotesCredit(Request $request)
        {

            $data = $request->all();
            $post = new serviceQuotesCredit;
            $post->serviceId=$data['service'];
            $post->credit=$data['credit'];
            $post->save();
            Session::flash('message', 'Service Quotes credit Save Successfully.');
            Session::flash('alert-class', 'alert-success');
            return redirect('showServiceQuotesCredit');
        }
        public function editServiceQuotesCredit($id)
        {

             $ary = ServiceModel::all();
             $post = serviceQuotesCredit::find($id);
             
             return view('pages.admin.serviceQuotesCredit.editServiceQuotesCredit',compact('post','ary'));
        }
        public function editQuotesCredit(Request $request)
        {
             $post = array();
             $post['serviceId'] = $request->input('service');
             $post['credit'] = $request->input('credit');
             
             $pages = serviceQuotesCredit::where('id',$request->input('id'))->update($post);
             Session::flash('message', 'Service Quotes Credit Update Successfully.');
             Session::flash('alert-class', 'alert-success');
             return redirect('showServiceQuotesCredit');
        }
        public function deleteQuotesCredit($id)
        {
             $post = serviceQuotesCredit::find($id);
             $post->delete();
             Session::flash('message', 'Service Quotes Credit Delete Successfully.');
             Session::flash('alert-class', 'alert-success');
             return redirect('showServiceQuotesCredit');
        }
    	    
}
