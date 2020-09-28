<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    //
    public function processPayment(Request $request) {
        \Stripe\Stripe::setApiKey("sk_test_t0REybu05NN7UsKbD6GZzTiI00tCyO8ARC");

        $token = $_POST['stripeToken'];
        $charge = \Stripe\Charge::create([
            'amount' => $request->amount,
            'currency' => 'cad',
            'description' => 'Test Charge',
            'source' => $token
        ], [
            'success_url' => '/success?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => '/cancel',
        ]);
    }
}
