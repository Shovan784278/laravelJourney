<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{

    function __constructor(){
        $this->middleware('demo');
    }


    function DemoAction(Request $request):array{

        return $request->header();
    }

    function Throttle(Request $request):string{

        return "Hello";
    }
}
