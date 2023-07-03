<?php

namespace App\Http\Controllers\Demo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    function About(){
        return view('about');
    }

    function Contact(){
        return view('contact');
    }
}
