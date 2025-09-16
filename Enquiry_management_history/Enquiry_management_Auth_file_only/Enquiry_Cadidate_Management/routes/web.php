<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Controller;
use App\Http\Livewire\Enquiry\Enquiry;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
;   
Route::view('/register','livewire.auth.register')->middleware('guest')->name('register');
Route::post('/store',[RegisterController::class,'store']);

Route::view('/home','livewire.dashboard.dashboard')->middleware('auth')->name('home');

Route::view('/enquiry','livewire.enquiry.enquiry')->middleware('auth')->name('enquiry');

Route::view('/login','livewire.auth.login')->middleware('guest')->name('login');

Route::post('/authenticate', [LoginController::class,'authenticate']);

Route::get('/logout',[LoginController::class,'logout']);    


