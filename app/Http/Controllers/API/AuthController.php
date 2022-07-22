<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Auth;

class AuthController extends Controller
{
  public function register(Request $request){
    $validator=Validator::make($request->all(),[
      'name'=>'required|max:191',
      'email'=>'required|email|max:191|unique:users,email',
      'password'=>'required|min:8',
    ]);

    if ($validator->fails()) {
        return response()->json([
           'validattor_errors'=>$validator->message(),
        ]);
    }
    else
    {
        $user=User::create([
           'name'=>$request->name,
           'email'=>$request->email,
           'password'=>Hash::make($request->password),
        ]);
        $token=$user->createToken($user->email.'_Token')->plainTextToken;
        return response()->json([
           'status'=>200,
           'username'=>$user->name,
           'token'=>$token,
           'message'=>'Register Successfully',
        ]);
    }
  }

   public function login(Request $req){

   if (Auth::attempt($req->only('email','password'))) {
             $user= Auth::User();
             $token=$user->createToken($user->email.'_Token')->plainTextToken;
             return response([
                'message'=>"successfull login",
                'token'=>$token,
                'User'=>$user
            ],200);
         } 
      return response([
              'message'=>"successfull not login",  
        ],401);        
    }
}
