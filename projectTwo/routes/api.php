<?php

use App\Http\Controllers\DemoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::get('/hello/{name}/{age}', [DemoController::class, 'DemoAction']);

Route::get('/hello', [DemoController::class, 'DemoAction']);

Route::post('/hello', [DemoController::class, 'DemoAction']);

Route::post('/header',[DemoController::class, 'DemoHeadPost']);

Route::post('/hbp/{name}/{age}',[DemoController::class, 'HeaderBodyParams']);

Route::post('/formData',[DemoController::class, 'FormData']);

Route::post('/fileData',[DemoController::class, 'fileData']);

Route::post('/fileUpload',[DemoController::class, 'fileUpload']);

Route::post('/ipAddress',[DemoController::class, 'ipAddress']);

Route::post('/responseFormat',[DemoController::class, 'responseFormat']);

Route::post('/differentJson',[DemoController::class, 'differentJson']);

Route::get('/ReDirect1',[DemoController::class, 'ReDirect1']);

Route::get('/ReDirect2',[DemoController::class, 'ReDirect2']);

Route::get('/FileBinary',[DemoController::class, 'FileBinary']);

Route::get('/FileDownload',[DemoController::class, 'FileDownload']);

Route::get('/AttachingHeader',[DemoController::class, 'AttachingHeader']);

