<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\weatherController;


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


// Route::get('/hello',function () {
//     return "Hello, World!";
// });

Route::controller(StudentController::class) -> group(function(){

    Route::get('/students',[StudentController::class,'student']);


 Route::get('/students/{id}',[StudentController::class,'getStudent']);

// Route::get('/students/{id}/name',[StudentController::class,'getName']);

Route::get('/students/{id}/{field}',[StudentController::class,'getField']);


});



// Route::get('/weather/{city?}',[weatherController::class,'getWeather']);