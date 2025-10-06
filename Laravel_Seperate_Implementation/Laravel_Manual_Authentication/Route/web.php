<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\auth\registerController;
use App\Http\Controllers\auth\loginController;
use GuzzleHttp\Middleware;


Route::view('/','welcome');


Route::view('/register','auth.register')->middleware('guest');

Route::post('/store',[registerController::class,'registerfunct']);



Route::view('/login','auth.login')->middleware('guest')->name('login');

Route::post('/authentication',[loginController::class,'loginfunct']);

Route::view('/home','home')->middleware('auth');

Route::get('/logout',[loginController::class,'logout']);
