<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionController extends Controller
{
    public function getSessionData(Request $request)
    {
        if($request->session()->has('name'))
        {
            var_dump($request->session());
            echo $request->session()->get('name');
        }else
        {
            echo "session not present";
        }
    }
    public function storeSessionData(Request $request)
    {
        $request->session()->put('name','murthy');
        echo "data has been added to session";
    }
    public function deleteSessionData(Request $request)
    {
        $request->session()->forget('name');
        echo "session has been removed";
    }
}

