<?php

namespace App\Http\Controllers;
use App\Models\Books;


class BookingController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Booking.insert');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post= new Post;
        $post->post_title=$request->get('title');
        $post->post_author=$request->get('name');
        $post->save();
        return  "Complete";


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @param  \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $posts=Post::all();
        return view('admin.book.show',['posts'=>$posts]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post, $id)
    {
        $posts=Post::find($id);
        return  view('admin.book.edit',['posts'=>$posts]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Post  $post, $id)
    {
        $posts=Post::find($id);
        $posts->post_title=$request->get('title');
        $posts->post_author=$request->get('name');
        $posts->save();
        return redirect('show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
