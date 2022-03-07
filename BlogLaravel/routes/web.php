<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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


Route::middleware('CheckAuth')->group(function(){
    Route::get('/', function () {
        return view('welcome');
    })->name('index');

});
Route::get('register',[AuthController::class,'showFormRegister'])->name('showFormRegister');
    Route::post('register',[AuthController::class,'register'])->name('register')->middleware('CheckRegister');
    Route::get('login',[AuthController::class,'showFormLogin'])->name('showFormLogin');
    Route::post('login',[AuthController::class,'login'])->name('login');
    Route::get('logout',[AuthController::class,'logout'])->name('logout');



