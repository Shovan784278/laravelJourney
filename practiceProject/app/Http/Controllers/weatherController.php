<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class weatherController extends Controller
{
    function getWeather($city = null){

        if(!$city){

            return "Please mention a city";
        }
        return "The weather of {$city} is good";
    }
}
