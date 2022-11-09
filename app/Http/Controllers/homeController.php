<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
     public function loadview()
     {
         $details = array(
            "number" => 6303692945,
            "email"=>"murthy2001@gmail.com",
            "address"=>'tirupati'
         );
         return view('contact',compact('details'));
     }
}
