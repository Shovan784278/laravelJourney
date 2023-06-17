<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    function DemoAction(Request $request):array{
        // $name = $request->input(key:'name');
        // $age = $request->input(key:'age');
        //  return "My name is ${name} and age is ${age}";

        return $request->input();
    }

    function DemoHeadPost(Request $request):string{

        //If we want to find the specific request from the header then we can use this method to find.
        $name = $request->header(key:'name'); 
       $token =  $request->header(key:'token');
        return "The name is ${name} and the token is ${token}";

        //If we want to find all the default headers we will use the 
        // return $request->header();


    }

    function HeaderBodyParams(Request $request):array{

        //If we want to find to get all the header ,body and url parameters then we can use this method..

        $pin = $request->header(key:'pin');

        $division = $request->input(key:'Division');
        $zila = $request->input(key:'Zila');
        $name = $request->name;
        $age = $request->age;

        return array(
            
            "pin" => $pin,
            "Division" => $division,
            "Zila" => $zila,
            "name" => $name,
            "age" => $age,
        );

    }

    function FormData(Request $request):array{

        //Here we can find all the Formdata by this input() method.. 
        return $request->input();
    }


    function fileData(Request $request):array{

        $photo = $request->file('photo');
        $fileSize = filesize($photo);
        $fileType = filetype($photo);
        $fileOriginalName = $photo-> getClientOriginalName();
        $TempFileName = $photo->getFilename();
        $Extension = $photo->extension();


        return array(

            'filesize' => $fileSize,
            'fileType' => $fileType,
            'fileOriginalName' => $fileOriginalName,
            'Tempfile' => $TempFileName,
            'Extension' => $Extension
        );

    }


    function fileUpload(Request $request):bool{

        $image = $request->file(key:'photo');
        $image->storeAs('upload', $image->getClientOriginalName());
         $image->move(public_path(path : 'upload/images'), $image->getClientOriginalName());

        return true;
    }

    function ipAddress(Request $request):array{

       //return $request->ip();

    //return $request->getAcceptableContentTypes();

        // if($request->accepts(['application/json'])){

        //     return "True";
        // }else{
        //     return "false";
        // }

        //return $request->cookie(key: 'Cookie_1');
        
        return $request->cookie();

    }


    //Here is the response part start..Previously we discussed Request part--------
    

    function responseFormat(Request $request):null|array|int|string|bool{

        //return null;
        //return ['Shovan','Subrato','Anik','Sumit'];
        return ([
            'Fname' => 'Shovan',
            'Lname' => 'Nag'
        ]); //This is associative array
            
       
        //return 100;
        //return "Hello World";
        //return true;

    }


    function differentJson(Request $request):JsonResponse{

        // $msg = "Success";
        // $data = ['name' => 'Shovan', 'City' => 'Rajbari'];

        $code = 201;
        $content = array('Fname' => 'Shovan', 'lname' => 'Nag');
        return response()->json($content,$code);


    }


    function ReDirect1(Request $request):string{

        return redirect(to: "/ReDirect2");
        
    }

    function ReDirect2(Request $request):string{

        return "Hello! i'm from ReDirect1";
    }


    function FileBinary(){

        $FilePath = 'upload/images/erp.png';
        return response()->file($FilePath);
    }

    function FileDownload(){

        $FilePath = 'upload/images/erp.png';
        return response()->download($FilePath);
    }


    function setCookei(){

        $name = 'token';
        $value = 'This is my data xyz';
        $minutes = 60;
        $path = "/";
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        return response('Hi')->cookie(
            $name, $value,  $minutes, $path, $domain, $secure, $httpOnly

        );
    }

    function AttachingHeader(Request $request){

       // return response("Hello")->header('value1', 'header1');

        //If we want to set multiple header then we can use this method

        return response("Hello")
                ->header('value1', 'header1')
                ->header('value2', 'header2')
                ->header('value3', 'header3');
    }

    function ViewResponse(Request $request){

        return response()->view('Home');
    }
    

    //-----------------Here is the response session part start -----------

    function putData(Request $request):bool{

        $email = $request->email;
        $request->session()->put('UserEmail', $email);
        return true;
    }


    function SessionGetData(Request $request):string{
 
        return $request->session()->get('UserEmail', 'default');
    }


    function pullData(Request $request):string{
 
        return $request->session()->pull('UserEmail', 'default');
    }

    function forgetData(Request $request):bool{

        $request->session()->forget('UserEmail');
        return true;
    }



    function flusData(Request $request):bool{

        $request->session()->flush();
        return true;
    }

}
