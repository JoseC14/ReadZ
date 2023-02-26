<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HistoriaController;
use App\Http\Controllers\CapituloController;
use App\Http\Controllers\UserController;

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

Route::get('/',[HistoriaController::class,'index'])->name('site.index');
Route::get('/show/{id}',[HistoriaController::class,'show'])->name('site.show');
Route::get('/chapters/{id}',[CapituloController::class,'show'])->name('site.chapter');
Route::get('/login',[UserController::class,'login'])->name('site.login');
Route::view('/profile', 'profile')->name('site.profile');

Route::post('/auth',[UserController::class,'auth'])->name('site.auth');
Route::get('/logout',[UserController::class,'logout'])->name('site.logout');
Route::view('/profile/create', 'createprofile')->name('site.createprofile');
Route::post('/profile/store',[UserController::class,'store'])->name('site.storeprofile');