<?php

use App\Http\Controllers\DemoController;
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


// Route::get('/hello/{name}/{age}', [DemoController::class, 'DemoAction']);
Route::get('/hello', [DemoController::class, 'DemoAction']);

Route::post('/hello', [DemoController::class, 'DemoAction']);

Route::post('/header',[DemoController::class, 'DemoHeadPost']);

Route::post('/hbp',[DemoController::class, 'HeaderBodyParams']);

Route::post('/formData',[DemoController::class, 'FormData']);

Route::post('/fileData',[DemoController::class, 'fileData']);

Route::post('/fileUpload',[DemoController::class, 'fileUpload']);

Route::post('/ipAddress',[DemoController::class, 'ipAdress']);





//Here is the response part start..Previously we discussed Request part--------

Route::post('/responseFormat',[DemoController::class, 'responseFormat']);

Route::post('/differentJson',[DemoController::class, 'differentJson']);

Route::get('/ReDirect1',[DemoController::class, 'ReDirect1']);

Route::get('/ReDirect2',[DemoController::class, 'ReDirect2']);

Route::get('/FileBinary',[DemoController::class, 'FileBinary']);

Route::get('/FileDownload',[DemoController::class, 'FileDownload']);

Route::get('/setCookei',[DemoController::class, 'setCookei']);

Route::get('/AttachingHeader',[DemoController::class, 'AttachingHeader']);

Route::get('/ViewResponse',[DemoController::class, 'ViewResponse']);


//-----------------Here is the response session part start -----------

Route::get('/putData/{email}',[DemoController::class, 'putData']);

Route::get('/pullData',[DemoController::class, 'pullData']);

Route::get('/SessionGetData',[DemoController::class, 'SessionGetData']);

Route::get('/forgetData',[DemoController::class, 'forgetData']);

Route::get('/flusData',[DemoController::class, 'flusData']);


