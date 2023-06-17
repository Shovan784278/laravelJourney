<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeTwoController extends Controller
{
    function HomePage(Request $request){

        return view('Home');
    }
}
