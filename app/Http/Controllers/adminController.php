<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\admin;
use App\Models\Post;
use Session;

class adminController extends Controller
{
    public function index(){
        return view('admin.login');
     }
     public function makeLogin(Request $request){
        $validator = Validator::make($request->all(),[
            'password' => 'required',
            'username' => 'required',
        ]);
        if($validator->fails()){
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $admin =admin::where('username',$request->username)->where('password',$request->password)->get()->toArray();
        if($admin){
            return  redirect('dashboard');
        }else{
            return back();
        }
       
     }
     public function dashboard(){
        return view('admin.dashboard');
    }
    

    public function seenT(Post $post)
    {
        return view('insert');
    } 
   
}
