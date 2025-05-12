<?php

use Illuminate\Support\Facades\Route;
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

Route::controller(UserController::class)->group(function(){
    Route::get('/','index')->name('user.login');
    Route::get('/login','index')->name('user.login');
    Route::get('/register',[UserController::class,'register'])->name('user.register');
});

Route::middleware('auth')->group(function(){
    Route::get('/dashboard',[UserController::class,'main'])->name('user.dashboard');
    Route::get('/player',[UserController::class,'player'])->name('user.player');
    Route::get('/teams',[UserController::class,'team'])->name('user.team');
});