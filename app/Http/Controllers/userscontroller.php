<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userscontroller extends Controller
{
    public function getData(Request $req)
    {
        return $req->input();
    }
}
