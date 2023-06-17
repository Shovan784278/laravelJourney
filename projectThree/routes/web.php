<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProductController;

use Illuminate\Http\Response;
use App\Http\Middleware\DemoMiddleware;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\RegistrationFormValidationMiddleware;
use Illuminate\Support\Facades\Redirect;
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


//here is the problem no.1 about response validation

// Route::get('/middleWare',[DemoController::class, 'DemoAction'])->middleware([DemoMiddleware::class]);

// Route::post('/register', [DemoController::class, 'register'])
//     ->middleware('registration.validation');

// // Route::get('/home', function () {
// //         return Redirect::to('/dashboard', 302);
// //     });

// // Route::get('/dashboard', function () {
// //         return redirect('/dashboard', 302);
// //     });

// // Route::get('/home', [Homecontroller::class, 'index'])->name('home');

// // Route::get('/dashboard', [DashboardController::class,'DashbordIndex'])->name('dashboard');

// //This is the problem No.2 About Response Redirect

// Route::get('/home', function () {
//     return Redirect::to('/dashboard', 302);
// });



// Route::get('/dashboard', function () {
//     return response('Welcome to the dashboard!', 302);
// });




// Route::middleware(['auth'])->group(function () {
//     Route::get('/profile', 'ProfileController@show');
//     Route::get('/settings', 'SettingsController@show');
// });


// Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');



//Route::resource('products', ProductController::class);


Route::resource('/posts', PostsController::class);




