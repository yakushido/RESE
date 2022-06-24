<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\ManagementController;


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
Route::get('/detail/{shop_id}',[ShopController::class,'detail'])->name('shops.detail');

Route::group(['middleware'=>'auth'],function () {
Route::post('/reservation/{shop_id}',[ReservationController::class,'add'])->name('reservation.add');
Route::get('/home',[UserController::class,'home'])->name('home');
Route::post('/favorite/add/{shop_id}',[FavoriteController::class,'add'])->name('favorite.add');
Route::post('/favorite/delete/{shop_id}',[FavoriteController::class,'delete'])->name('favorite.delete');
Route::post('/reservation/delete/{id}',[ReservationController::class,'delete'])->name('reservation.delete');
Route::get('/reservation/update/{id}',[ReservationController::class,'show'])->name('reservation.show');
Route::post('/update/{id}',[ReservationController::class,'update'])->name('update');
});

Route::get('/done',[ReservationController::class,'done']);
Route::get('/thanks',[AuthController::class,'thanks']);

Route::get('/admin',[ManagementController::class,'show'])->name('admin');
Route::post('/admin/add',[ManagementController::class,'add'])->name('manager.add');
