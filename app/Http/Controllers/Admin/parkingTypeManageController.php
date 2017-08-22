<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Models\Model;
use App\Http\Controllers\Controller;
use App\Models\Admin\ParkingTypesModel;
use Auth;
use Session;
class parkingTypeManageController extends Controller
{
   public function index()
   {
   		$post = ParkingTypesModel::where('organiser_id',Auth::id())->get();
		return view('pages.admin.pages.parkingType',compact('post'));
   }
   public function newParkingType()
   {
    	return view('pages.admin.pages.newParkingType');
   }
   public function saveParkingType(Request $request)
   {
        $data = $request->all();
       	$post = new ParkingTypesModel;
        $post->parkingType=$data['parkingType'];
        $post->organiser_id=Auth::id();
        $post->save();
        Session::flash('message', 'Parking Type data Saved.');
        Session::flash('alert-class', 'alert-success');
        return redirect('parkingType');
   }
   public function showEditParkingType($id)
   {
        $post = ParkingTypesModel::find($id);

        return view('pages.admin.pages.editParkingType',compact('post'));
   }
   public function editTypeParking(Request $request)
   {
   		$post = array();
        $post['parkingType'] = $request->input('parkingType');
        $pages = ParkingTypesModel::where('id',$request->input('id'))->update($post);
        Session::flash('message', 'Parking Type data Updated.');
        Session::flash('alert-class', 'alert-success');
        return redirect('parkingType');
   }
   public function deleteParkingType($id)
   {
      	$post = ParkingTypesModel::find($id);
        $post->delete();
        Session::flash('message', 'Organiser data Deleted.');
        Session::flash('alert-class', 'alert-success');
        return redirect('parkingType');
        }
}
