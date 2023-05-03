<?php

namespace App\Http\Controllers;

use Auth;

use App\Models\User;
use App\Http\Requests;
use App\Models\Institute;
use Illuminate\Http\Request;
use App\Payment; // Payment Model
use Paystack; // Paystack package
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class PaymentController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway(Request $request)
    {

        try {
            $institute = Institute::whereAcronym($request->institute)->first();

            // Get the exchange rate
            $response = Http::get('https://openexchangerates.org/api/latest.json', [
                'app_id' => config('app.openExchange'),
                'symbols' => 'GHS'
            ]);
            $data = $response->json();
            $exchange_rate = $data['rates']['GHS'];
            $ghs_amount = $institute->price * ($exchange_rate + 1) * 100;
            $reference = Paystack::genTranxRef();

            $data = array(
                "amount" => round($ghs_amount),
                "reference" =>  $reference,
                "email" => Auth::user()->email,
                "currency" => "GHS",
                "orderID" => "123456789",
                "channels" => ['card', 'bank', 'ussd', 'qr', 'mobile_money', 'bank_transfer']
            );

            return Paystack::getAuthorizationUrl($data)->redirectNow();

        } catch (\Exception $e) {
            return Redirect::back()->withMessage(['msg' => 'The paystack token has expired. Please refresh the page and try again.', 'type' => 'error']);
        }
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {

        $paymentDetails = Paystack::getPaymentData();
        dd($paymentDetails['status']);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}
