<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\UserController;
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

Route::get('/home', [HomeController::class,'home']);

Route::get('/category/foodbeverage', [CategoryController::class,'foodandbeverage']);
Route::get('/category/beautyhealth', [CategoryController::class,'beautyhealth']);
Route::get('/category/homecare', [CategoryController::class,'homecare']);
Route::get('/category/babykid', [CategoryController::class,'babykid']);

Route::get('/user/{id}/nama/{nama}',[UserController::class,'user']);

Route::get('penjualan',[PenjualanController::class,'penjualan']);