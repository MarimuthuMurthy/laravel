<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function index()
    {
        $fruits = array(
            'Mango',
            'orange',
            'banana',
            'Apple'
        );
        return view('welcome',compact('fruits'));
    }
}
