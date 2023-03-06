<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);

Route::group(['middleware' => ['auth:masyarakat,petugas']], function(){
    Route::resource('/', DashboardController::class);
    Route::get('/logout', [LoginController::class, 'logout']);
});
