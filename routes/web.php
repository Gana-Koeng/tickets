<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SoonfrontController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\SoonController;
use App\Http\Controllers\TheaterController;
use App\Models\Product;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/comingsoon', [SoonfrontController::class, 'index']);
// Route::get('/comingsoon', function(){
   
    
//     return view('frontend.comingsoon');
// });

Route::get('/moviedetail/{id}', [ MovieController::class,'show'])->name('moviedetail');


Route::get('/contact', [ContactUsFormController::class, 'createForm']);
Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm']);


Auth::routes();
  
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::resource('products', ProductController::class);
    Route::resource('soons', SoonController::class);
    Route::resource('seats', SeatController::class);
    Route::resource('theaters', TheaterController::class);
    Route::controller(SliderController::class)->group(function(){
        Route::get('sliders', 'index');
        Route::post('sliders/store', 'store')->name('sliders.store');
    });
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