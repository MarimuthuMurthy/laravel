<?php

use App\Http\Controllers\clientController;
use App\Http\Controllers\fluentController;
use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\paginationController;
use App\Http\Controllers\postController;
use App\Http\Controllers\sessionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\userscontroller;
use App\paymentGateway\payment;

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

Route::get('/', [productController::class, 'index']);

# for routing ..... 


# 1st method


// Route::get('/about',function(){
//     return view('about');
// });


# 2nd method
# limitaion : we cannot pass data in 2nd methods
Route::view("about", '/about');
Route::get('/contact', [homeController::class, 'loadview']);

# for calling controller method 
#            Route::get("path","controller file")
# Route::get('/user',[Users::class,'loadview']);
Route::post('/usersForm', [userscontroller::class, 'getdata'])->name('usersForm.getdata');
Route::view("login", "usersForm");
Route::view("hello", '/hello')->middleware('protectedPage1');
Route::view("noaccess", '/noaccess');

#       group middleware
Route::group(['middleware' => ['protectedPage']], function () {
        Route::view("home", '/home');
});
Route::get('/posts',[clientController::class,'getAllPosts']);
Route::get('/posts/{id}',[clientController::class,'getPostById']);
Route::get('/add-posts',[clientController::class,'addPost']);
Route::get('/update-posts',[clientController::class,'updatePost']);
Route::get('/delete/{id}',[clientController::class,'deletePost']);
Route::get('/fluent-string',[fluentController::class , 'index'])->name('fluent.index');
Route::get('/hi',[UserController::class,'index']);
Route::get('/login',[loginController::class , 'index'])->name('login.index');
Route::post('/login',[loginController::class,'loginSubmit'])->name('login.submit');
Route::get('/session',[sessionController::class,'getSessionData'])->name('session.getSessionData');
Route::get('/session/set',[sessionController::class,'storeSessionData'])->name('session.storeData');
Route::get('/session/remove',[sessionController::class,'deleteSessionData'])->name('session.delete');
Route::get('/posts',[postController::class , 'getAllPost'])->name('posts.getAllPost');
Route::get('/addPost',[postController::class,'addPost'])->name('posts.addPost');
Route::post('/addPost',[postController::class,'addPostSubmit'])->name('posts.addPostSubmit');
Route::get('/getPost/{id}',[postController::class,'readPostById'])->name('posts.readPostById');
Route::get('/deletePost/{id}',[postController::class,'deletePostById'])->name('posts.deletePostById');
Route::get('/editPost/{id}',[postController::class,'updatePostById'])->name('posts.updatePostById');
Route::post('/updatePost',[postController::class,'updatePostByIdSubmit'])->name('posts.updatePostByIdSubmit');
Route::get('/innerJoin',[postController::class,'innerJoinClause'])->name('post.innerJoinClause');
Route::get('/leftJoin',[postController::class,'leftJoinClause'])->name('post.leftJoinClause');
Route::get('/rightJoin',[postController::class,'rightJoinClause'])->name('post.rightJoinClause');
Route::get('/allPostsModel',[postController::class , 'getAllPostsUsingModel'])->name('posts.getAllPostsUsingModel');
Route::view('test','/test');
Route::get('/home',function(){return view('index');});
Route::get('/about',function(){return view('about');});
Route::get('/contact',function(){return view('contact');});
Route::get('/users',[paginationController::class,'allUsers'])->name('users.allUsers');
Route::get('/payment',function(){
        return Payment::process();
});