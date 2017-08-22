<?php
namespace App\Api\V1\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Dingo\Api\Routing\Helpers;
use App\ShowParkingModel;
use JWTAuth;
use DB;
use Response;
class parkingController extends Controller
{
   use Helpers;
   private function  currentUser()
   {
      return JWTAuth::parseToken()->authenticate();
   }
   public function showParking()
   {	    
      //get current user login id
      $id = $this->currentUser()->id;
      $parking = DB::table('tbl_parking')
      ->where('organiser_id',$id)
      ->orderBy('created_at', 'DESC')
      ->get();
      return Response::json(array('error'=>'false','parking'=>$parking));
   }
   
}
