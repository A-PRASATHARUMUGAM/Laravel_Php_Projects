<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;

class PaymentController extends Controller
{

    public function createCheckoutSession(Request $request)
    {
        Stripe::setApiKey(config('services.stripe.secret'));

        $domain = url('/');

        $checkoutSession = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'inr',
                    'product_data' => [
                        'name' => 'T-Shirt', 
                    ],
                    'unit_amount' => 5000, // Rs.20.00 = 2000 paise
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => $domain . '/success',
            'cancel_url' => $domain . '/cancel',
        ]);

        // Instead of returning JSON, we redirect user directly to Stripe Checkout
        return redirect($checkoutSession->url);
    }

}
