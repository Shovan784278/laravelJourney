<?php

namespace App\Http\Controllers;
use App\Http\middleware\RegistrationFormValidation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DemoController extends Controller
{
    function DemoAction(Request $request){

        return "Hello";
    }

    // public function __construct()
    // {
    //     $this->middleware('registration.validation');
    // }

    public function register(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        // Display the data or perform any other desired action
        return response()->json([
            'message' => 'Success!',
            'name' => $name,
            'email' => $email,
            'password' => $password,
        ]);
    }

//     public function redirectToDashboard()
// {
//     return redirect('/dashboard');
// }

public function test()
    {
        return response()->json(['message' => 'Test route accessed']);
    }



}
