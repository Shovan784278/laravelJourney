<?php

use App\Http\Controllers\ActionController;
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


Route::controller(ActionController::class)->group(function (){

    Route::get('/', 'postData'); // Update the route to point to 'postData'
    Route::get('/postData', 'postData');
    Route::get('/categoryPost/{category_id}', 'categoryPost'); 

    Route::get('/posts/{id}/delete', 'softDelete');

    Route::get('/softData', 'softData');

});