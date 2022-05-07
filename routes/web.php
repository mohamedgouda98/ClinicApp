<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DiagnosisController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatientController;
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


//login
Route::get('/login',[AuthController::class,'loginpage'])->name('loginpage');
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::group(['prefix' => '/admin', 'as' => 'admin.','middleware' => 'auth'], function (){

    //Dashboard Route
    Route::get('/home', [HomeController::class, 'index'])->name('dashboard');
    //logout
    Route::post('/logout',[AuthController::class,'logout'])->name('logout');
    //Patient Route
    Route::group(['prefix' => 'patients', 'as' => 'patient.'], function (){
       Route::get('/index', [PatientController::class, 'index'])->name('index');
       Route::get('/search', [PatientController::class, 'search'])->name('search');
       Route::get('/create', [PatientController::class, 'create'])->name('create');
       Route::post('/store', [PatientController::class, 'store'])->name('store');
       Route::get('/show/{patient}', [PatientController::class, 'show'])->name('show');
       Route::get('/edit/{patient}', [PatientController::class, 'edit'])->name('edit');
       Route::put('/update/{patient}', [PatientController::class, 'update'])->name('update');
       Route::get('/create-diagnose/{patient}', [PatientController::class, 'createDiagnose'])->name('create-diagnose');
       Route::delete('/delete', [PatientController::class, 'destroy'])->name('destroy');
    });
    //Diagnosis Route
    Route::group(['prefix' => 'diagnoseis', 'as' => 'diagnose.'], function (){
        Route::get('/index', [DiagnosisController::class, 'index'])->name('index');
        Route::post('/store', [DiagnosisController::class, 'store'])->name('store');
        Route::get('/edit/{diagnosis}', [DiagnosisController::class, 'edit'])->name('edit');
        Route::put('/update/{diagnosis}', [DiagnosisController::class, 'update'])->name('update');
        Route::delete('/delete', [DiagnosisController::class, 'destroy'])->name('destroy');
    });
});


