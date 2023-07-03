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


Route::controller(DemoController::class)->group(function () {

    Route::get('/products', 'DemoAction');

    Route::get('/brands', 'Brands');

    Route::get('/brandsPrice', 'ProductsPrice');

    Route::get('/clause', 'Clause');

    Route::get('/innerJoin', 'InnerJoin');

    Route::get('/leftJoin', 'LeftJoin');

    Route::get('/advanceJoin', 'AdvanceJoin');

    Route::get('/union', 'Union');

    Route::get('/whereClause', 'WhereClause');

    Route::get('/order', 'Order');

    //Route::get('/insertData', 'InsertData');

    Route::get('/pagination', 'Pagination');

    
});
