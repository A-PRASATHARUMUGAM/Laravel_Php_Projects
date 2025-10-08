<?php

use App\Http\Controllers\auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\CreateController;


//get  = Read the data
//post = Create the data 
//put  = Update the data 
//patch = partially  update 
//Delete = Remove the data 


//Show the  data
Route::get('/create',[CreateController::class,'index']);

//Create the data
Route::post('/create/post',[CreateController::class,'store'])->name('create');

//Update the data 
Route::put('/create/{id}/edit',[CreateController::class,'update'])->name('customer.update');

//Delete the Data
Route::delete('/create/{id}',[CreateController::class,'destroy'])->name('customer.delete');

