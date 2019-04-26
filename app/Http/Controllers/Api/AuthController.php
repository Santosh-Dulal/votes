<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Nexmo\Verify\Client;
use App\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{


    public function login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

            $user = User::where('email',$request->email)->first();
            if (!$user) {
                return response(['status'=>'error','message','User not found']);
            }
           if (Hash::check($request->password,$user->password)) {
                // $http = new Client;
                // $response = $http->post(url('oauth/Token'),[
                //     'form_params'=>[
                //         'grant_type'=>'password',
                //         'client_id'=>'2',
                //         'clent_secrect' => 'hNkLpD1OgzKEzFFAfODmhkIvh0fuU19mRaZ5bUOu',
                //         'email'=>$request->email,
                //         'password'=>$request->password,
                //         'scope'=>''
                //     ]
                // ]);
                $token = $user->createToken('Token Name')->accessToken;

                return response()->json([
                    'token' => $token,

                ]);


           }else{
               return response()->json([
                   'message' => 'Not authorized'
               ]);
           }

    }

    public function logout(Request $request){
        $request->user()->token()->revoke();
        return response()->json([
            'message'=>'Successfully logged out'
        ]);
    }
}
