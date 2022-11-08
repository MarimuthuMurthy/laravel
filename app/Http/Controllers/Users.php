<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
     public function loadview()
     {
         $names = ['sam','rammy'];
         print_r($names);
         return view('user',['name'=>'hello']);
     }
}
