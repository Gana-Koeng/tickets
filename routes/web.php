<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('/frontend/homepage');
});

Route::get('/comingsoon', function () {
    return view('/frontend/comingsoon');
});
Route::get('/showtime', function () {
    return view('/frontend/showtime');
});
Route::get('/contact', function () {
    return view('/frontend/contact');
});

Route::get('/moviedetail', function () {
    return view('/frontend/moviedetail');
});

Route::get('/seat', function () {
    return view('/frontend/seat');
});








Auth::routes();
  
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    // Route::get('/home', [HomeController::class, 'index'])->name('home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::resource('products', ProductController::class);
    Route::resource('seats', SeatController::class);
   
    Route::get('/index', function(){
     return view('/backend/index');
    });
});
 Route::resource('users', UserController::class);
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
  
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});