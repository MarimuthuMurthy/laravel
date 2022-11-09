<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class userscontroller extends Controller
{
    public function getData(Request $req)
    {
        $req->validate(
            ['username'=>'Required | min:7 | max:15','password'=>'Required | min:8 | max:15']
        );
        return $req->input();
    }
}

