<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class fluentController extends Controller
{
    public function index()
    {
        echo '<h1>fluent strings</h1>';
        $slice1 = Str::of('Welcome to my youtube channel')->after('Welcome to');
        echo $slice1 . "<br>";
        $slice2 = Str::afterLast('App/A/B/C/D/E', '//');
        echo $slice2 . "<br>";
        $slice3 = Str::before('this is my house', 'my house');
        echo $slice3 . "<br>";
        $slice4 = Str::beforeLast('this is a is a best', 'a');
        echo $slice4 . "<br>";
        $slice5 = Str::between('this is my house', 'this', 'house');
        echo $slice5 . "<br`>`";
        $slice6 = Str::of("hello")->append('world');
        echo $slice6 . "<br>";
        $slice7 = Str::lower('HI IAM SMART');
        echo $slice7 . "<br>";
        $slice8 = Str::upper('hi iam smmater than slice7');
        echo $slice8 . "<br>";
        $slice9 = Str::replace('iam ugly beauty', 'ugly', 'very');
        echo $slice9 . "<br>";
        $slice10 = Str::title('iam title');
        echo $slice10 . "<br>";
        $slice11 = Str::of('laravel 8 framework')->slug('-');
        echo $slice11 . "<br>";
        $slice12 = Str::of('this is substring')->substr(8);
        echo $slice12 . "<br>";
        $slice13 = Str::of('this is substring')->substr(8, 5);
        echo $slice13 . "<br>";
        $slice14 = Str::of('/this is /substring/')->trim('/');
        echo $slice14 . "<br>";
    }
}
