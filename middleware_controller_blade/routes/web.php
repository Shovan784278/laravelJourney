<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeTwoController;
use App\Http\Controllers\PhotoController;
use App\Http\Middleware\DemoMiddileWare;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello',[DemoController::class, 'DemoAction'])->middleware([DemoMiddileWare::class]);

//------------------------ Throttle part ------------------------------------

// Route::get('/throttle',[DemoController::class, 'Throttle'])
//     ->middleware('throttle:5,1'); //we can use another way to throttle..we can use throttle inside the middleware group inside kernal.php.. for check this go to  kernal.php

Route::get('/throttle',[DemoController::class, 'Throttle']);  //throttle hit rate limit


Route::resource('photos',PhotoController::class); //This Route is for SingleAction 


//-------------------------- Here is blade part start -----------------------

//Route::get('/{num1}/{num2}',[HomeController::class, 'Home']);

Route::get('/home',[HomeController::class, 'Home']);


Route::get('/homepage',[HomeTwoController::class, 'HomePage']);
