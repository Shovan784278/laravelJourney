<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function Home(Request $request){

        // //$data = ['msg'=>'This is a message'];
        // $num1 = $request-> num1;
        // $num2 = $request-> num2;
        // $sum = $num1+$num2;

        // $data = ['result'=> $sum];
        // //return view('HomePage',$data);


        $data = [
            ['name'=>'Shovan', 'city'=>'Rajbari'],
            ['name'=>'John', 'city'=>'New-York'],
            ['name'=>'Steve', 'city'=>'New-Castle'],
        ];



        return view('HomePage',['users'=>$data]);
    }
}
