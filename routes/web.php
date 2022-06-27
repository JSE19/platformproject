<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home',[App\Http\Controllers\HomeController::class, 'adminhome'])->name('admin')->middleware('is_admin');
//Route::get('/register',[DriverController::class,'index'])->name('register');
//Route::get('/registernew',[DriverController::class,'register'])->name('registernew');
//Route::post('/registerdriver',[DriverController::class,'store'])->name('registerdriver');;
Route::get('editdriver/{id}',[HomeController::class,'edit']);
Route::put('updatedriver/{id}',[HomeController::class,'update']);
Route::put('updateperson/{id}',[HomeController::class,'updateDriver']);
Route::get('delete/{id}',[HomeController::class,'delete']);
