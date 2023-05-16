<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\baseController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\Table;
use App\Http\Controllers\logController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BookingController;
use App\Models\Book;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard-2',[baseController::class,'userLogin']);
Route::get('/insert',[adminController::class,'seenT']);
//User registration
Route::get('/login',[CustomAuthController::class,'login']);
Route::get('/registration',[CustomAuthController::class,'registration']);
Route::post('/register-user',[CustomAuthController::class,'registerUser'])->name('register-user');

//User login
Route::post('/login-user',[CustomAuthController::class,'loginUser'])->name('login-user');
Route::get('/user',[CustomAuthController::class,'userclass']);

//HOme Part
Route::get('/', [baseController::class,'home']);
Route::get('/book', [baseController::class,'book']);


//Booking online
Route::get('/booking', function(){
    return view('Booking.insert');
});
ROute::post('booking-show',[BookingController::class,'store']);

// Admin Part
Route::get('/admin', [adminController::class,'index']);
Route::post('/admin', [adminController::class,'makeLogin']);
Route::get('/dashboard',[adminController::class,'dashboard']);

//booking
Route::get('/seen',[adminController::class,'index']);
Route::get('/booking_books',[adminController::class,'index']);


//homeBooks
Route::post('/booking', [baseController::class,'show']);




//Book Add/Post
Route::get('/store',function(){
    return view('admin.book.insert');
});
Route::post('/store',[PostController::class,'store']);
Route::get('/show',[PostController::class,'show']);
//HOmeBook
Route::get('/book',[baseController::class,'show']);
//Edit Book
Route::get('/edit/{id}',[PostController::class,'edit']);
Route::post('/update/{id}',[PostController::class,'update']);

//Delete Book
// Route::get('/delete/{id}',[PostController::class,'destory']);
Route::get('/delete/{id}',function(Post  $post, $id){
    $post=Post::find($id);
    $post->delete();
    return  redirect('/show');
});
// Route::get('/edit/{id}',function(Post  $post, $id){
//     $posts=Post::find($id);
//     return  view('edit',['posts'=>$posts]);
// });