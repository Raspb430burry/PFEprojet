<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function Register(Request $request){
        $user=new User;
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=Hash::make($request->input('password'));
        $user->save();
        return $user;
    }
    function Login(Request $request){
        $user=User::where('email',$request->email)->first();
        if(!$user && !Hash::check($request->password,$user->password))
        {
            return ["error"=>"Email or password not valide"];
        }
        return $user;
    }

}
