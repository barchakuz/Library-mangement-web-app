<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class baseController extends Controller
{
   public function home(){
      return view('home');
   }
   public function book(){
      return view('mainBook');
   }

  public function show(Post $post)
  {
      $posts=Post::all();
      return view('mainBook',['posts'=>$posts]);
  }
  public function userLogin(){
   $posts=Post::all();
   return view('dashboard2',['posts'=>$posts]);
   
  }

}
