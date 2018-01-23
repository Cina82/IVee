<?php

namespace App\Api\V1\Controllers;

use Symfony\Component\HttpKernel\Exception\HttpException;
use JWTAuth;
use App\Http\Controllers\Controller;
use App\Api\V1\Requests\LoginRequest;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use App\ShowParkingModel;
use Dingo\Api\Routing\Helpers;
use Auth;
use DB;
use Response;

class LoginController extends Controller
{
    use Helpers;

    public function login(LoginRequest $request, JWTAuth $JWTAuth)
    {
        $credentials = $request->only(['email', 'password']);
        
        try {
                $token = JWTAuth::attempt($credentials);
                if(!$token) {
                    throw new AccessDeniedHttpException();
                }
                else
                {   
                    $parking = DB::table('tbl_parking')
                    ->where('organiser_id', '=', Auth::id())
                    ->get();

                    $user = DB::table('users')
                    ->select('name','first_name','last_name','email','mobile')
                    ->where('id', '=', Auth::id())
                    ->get();
                    return Response::json(array('error'=>'false','token'=>$token,'userProfile'=>$user,'parking'=>$parking));
                }

            }catch (JWTException $e) {

                 throw new HttpException(500);
            }
            /*return response()
            ->json([
                'status' => 'ok',
                'token' => $token
            ]);*/
    }
    private function  currentUser()
    {
        return JWTAuth::parseToken()->authenticate();
    }
    
}
