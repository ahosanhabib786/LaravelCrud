<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FacebookController;

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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/add',[HomeController::class,'add'])->name('add');
Route::post('/create',[HomeController::class,'create'])->name('create');
Route::get('/manage',[HomeController::class,'manage'])->name('manage');
Route::get('/edit/{id}',[HomeController::class,'edit'])->name('edit');
Route::post('/update/{id}',[HomeController::class,'update'])->name('update');
Route::get('/delete/{id}',[HomeController::class,'delete'])->name('delete');



Route::get('auth',[FacebookController::class,'loginUsingFaceook'])->name('login');
Route::get('callback',[FacebookController::class,'callbackFromFaceook'])->name('callback');
