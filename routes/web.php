<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SoonController;
use App\Http\Controllers\SoonfrontController;
use App\Http\Controllers\TheaterController;
use App\Http\Controllers\TestingController;

use App\Http\Controllers\ShowtimeController;
use App\Models\Product;
use App\Http\Controllers\ScheduleController;
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

Route::get('/', [HomeController::class, 'index'])->name('welcome');
// Route::get('/showtime', [HomeController::class, 'index']);
Route::get('/comingsoon', [SoonfrontController::class, 'index']);

Route::get('/showtime', [ShowtimeController::class, 'index']);
// Route::get('/showtime', function(){

// Route::get('/movie/{id}', [ TheaterFrontController::class,'index']);
// Route::get('/movie/{id}', [ TheaterFrontController::class,'show'])->name('moviedetail');

// Route::get('/comingsoon', function(){
   
//     return view('frontend.showtime');
// });
Route::get('/moviedetail/{id}', [ MovieController::class,'show'])->name('moviedetail');
Route::get('/contact', [ContactUsController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactUsController::class, 'store'])->name('contact.store');

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

    Route::resource('contacts',ContactController::class);

    Route::resource('/schedules', ScheduleController::class);

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

Route::resource('testing', TestingController::class);