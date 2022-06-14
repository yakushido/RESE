<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\AuthController;
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


Route::get('/',[ShopController::class,'shops']);
Route::get('/search',[ShopController::class,'search'])->name('shops.search');
Route::get('/detail/{id}',[ShopController::class,'detail'])->name('shops.detail');

Route::post('/reservation/add',[ReservationController::class,'add'])->name('reservation.add');

// Route::get('/registerpage',[AuthController::class,'show'])->name('resisterpage');
// Route::post('/register/add',[AuthController::class,'add'])->name('register.add');

// Route::get('/loginpage',[UserController::class,'show'])->name('loginpage');
// Route::post('/login',[UserController::class,'boot'])->name('login');
// Route::get('/home',[UserController::class,'home'])->name('home');
Route::get('/home', function () {
    dd('ログイン成功');
})->middleware('auth');