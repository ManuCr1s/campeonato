<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TeamController;


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
    Route::get('/register','register')->name('user.register');
    Route::post('/dni','dni')->name('user.dni');
    Route::post('/send','store')->name('user.send');
    Route::post('/auth','auth')->name('user.auth');
});

Route::middleware('auth')->group(function(){
    Route::get('/dashboard',[UserController::class,'main'])->name('user.dashboard');
    Route::get('/player',[UserController::class,'player'])->name('user.player');
    Route::get('/teams',[UserController::class,'team'])->name('user.team');
    Route::post('/loguot',[UserController::class,'destroy'])->name('user.logout');
    Route::post('/teams',[TeamController::class,'store'])->name('team.show');
    Route::post('/registert',[TeamController::class,'create'])->name('team.show');
});