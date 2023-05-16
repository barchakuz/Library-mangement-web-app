<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;

class CustomAuthController extends Controller
{
    public function login(){
        return view("auth.login");

    }
    public function registration(){
        return view("auth.registration");

    }
    public function registerUser(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $res = $user->save();
        if($res){
            return back()->with('success','You have Registerd Successfully');
        }else{
            return back()->with('fail','Something is wrong');
        }
    }
    public function loginUser(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $user = User::where('email','=',$request->email)->first();
        if($user){
            if($request->password && $user->password){
                // $request->session->put('loginId',$user->id);
                return redirect("dashboard-2");

            }else{
                return back()->with('fail','Incorrect Password');
            }

        }else{
            return back()->with('fail','This is not registered');
        }

    }
   
}
