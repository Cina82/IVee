<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\Admin\PaymentSetting;
use Image;
use Session;
use DB;
class paymentSettingController extends Controller
{
    	public function showPaymentSetting()
    	{
            $data = PaymentSetting::all();
            return view('pages.admin.paymentSetting.showPaymentSetting',compact('data'));
    	}

    	public function newPaymentSetting()
        {
            
            return view('pages.admin.paymentSetting.newPaymentSetting ');
    	}
        public function savePaymentSetting(Request $request)
        {

            $data = $request->all();
            $post = new PaymentSetting;
            if($data['paymentType'] == 'sandbox')
            {
                $post->marchantName=$data['sdxmarchantName'];
                $post->clientId=$data['sdxclientId'];
                $post->secretKey=$data['sdxsecretKey'];
                $post->paymentType=$data['paymentType'];
                $post->save();    
                
            }
            else
            {
                $post->marchantName=$data['marchantName'];
                $post->clientId=$data['clientId'];
                $post->secretKey=$data['secretKey'];
                $post->paymentType=$data['paymentType'];
                $post->save();    
                
            }
            return redirect('paymentSetting');
            Session::flash('message', 'Paymnet Setting Save Successfully.');
            Session::flash('alert-class', 'alert-success');
            return redirect('paymentSetting');
        }
        public function showEditPaymentSetting($id)
        {

             
             $post = PaymentSetting::find($id);
             return view('pages.admin.paymentSetting.editPaymentSetting',compact('post'));
        }
        public function editPaymentSetting(Request $request)
        {

            $data = $request->all();
            $post = array();
            if($data['paymentType'] == 'sandbox')
            {
                $post['marchantName']=$data['sdxmarchantName'];
                $post['clientId']=$data['sdxclientId'];
                $post['secretKey']=$data['sdxsecretKey'];
                $post['paymentType']=$data['paymentType'];
                 $pages = PaymentSetting::where('id',$request->input('id'))->update($post);
            }
            else
            {
                $post['marchantName']=$data['marchantName'];
                $post['clientId']=$data['clientId'];
                $post['secretKey']=$data['secretKey'];
                $post['paymentType']=$data['paymentType'];
                $pages = PaymentSetting::where('id',$request->input('id'))->update($post);
            }

             Session::flash('message', 'Payment Setting Update Successfully.');
             Session::flash('alert-class', 'alert-success');
             return redirect('paymentSetting');
        }
        public function deletePaymentSetting($id)
        {
             $post = PaymentSetting::find($id);
             $post->delete();
             Session::flash('message', 'Payment Setting Delete Successfully.');
             Session::flash('alert-class', 'alert-success');
             return redirect('paymentSetting');
        }
    	    
}
