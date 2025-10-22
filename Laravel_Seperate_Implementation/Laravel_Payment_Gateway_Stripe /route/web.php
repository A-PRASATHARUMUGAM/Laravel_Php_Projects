<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;



Route::get('/', function () {
    return view('buy');
});

Route::post('/create-checkout-session', [PaymentController::class, 'createCheckoutSession'])->name('payment.create');

Route::get('/success', fn() => '<h1>✅ Payment Successful</h1>');
Route::get('/cancel', fn() => '<h1>❌ Payment Cancelled</h1>');
