<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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

Route::get('/login',[AuthController::class,'loginpage']);
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::group(['prefix' => '/', 'as' => 'admin.','middleware' => 'auth'], function (){

    //Dashboard Route
    Route::get('home', [HomeController::class, 'index'])->name('dashboard');
});
