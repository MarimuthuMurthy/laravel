<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;

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

Route::get('/', function () {
    return view('welcome');
});

# for routing ..... 


        # 1st method


// Route::get('/about',function(){
//     return view('about');
// });


        # 2nd method
        # limitaion : we cannot pass data in 2nd methods
Route::view("about",'/about');
Route::view("contact",'/contact');

        # for calling controller method 
#            Route::get("path","controller file")
Route::get('/user',[Users::class,'loadview']);
Route::view("hello",'/hello');




