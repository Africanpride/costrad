<?php

namespace App\Http\Controllers;

use Auth;

use Exception;
use Carbon\Carbon;
use App\Models\User;
use App\Http\Requests;
use App\Models\Invoice;
use App\Models\Institute;
use App\Models\Transaction;
use App\Models\ExchangeRate;
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

    public function donationGateway(Request $request)
    {

        if ($request->has('anonymousDonation')) {

            $validatedData = $request->validate([
                'name' => 'nullable',
                'email' => 'nullable',
                'amount' => 'required|numeric',
            ]);
        } else {
            $validatedData = $request->validate([
                'name' => 'required',
                'email' => 'required',
                'amount' => 'required|numeric',
            ]);
        }

        return redirect()->back()->with('status', 'Your status message here.');

        dd($request->has('anonymousDonation'));
        // Get the exchange rate
        $exchange_rate = ExchangeRate::getExchangeRate();

        $ghs_amount = $validatedData->amount * ($exchange_rate + 1) * 100 * 1.02;
        $reference = Paystack::genTranxRef();
        dd($reference);
        try {

            $data = array(
                "amount" => round($ghs_amount),
                "reference" =>  $reference,
                "email" => $validatedData->email ?? Auth::user()->email,
                "currency" => "GHS",
                "orderID" => "123456789",
                "channels" => ['card', 'bank', 'ussd', 'qr', 'mobile_money', 'bank_transfer'],
                "metadata" => [
                    "donation" => true,
                ]
            );

            return Paystack::getAuthorizationUrl($data)->redirectNow();
        } catch (\Exception $e) {
            return Redirect::back()->withMessage(['msg' => 'The paystack token has expired. Please refresh the page and try again.', 'type' => 'error']);
        }
    }

    public function redirectToGateway(Request $request)
    {

        try {
            $invoice = new Invoice();
            $invoice->participant_id = Auth::user()->id;
            $invoice->status = 'pending';
            $invoice->save();

            $institute = Institute::whereAcronym($request->institute)->first();
            // Get the exchange rate
            $response = Http::get('https://openexchangerates.org/api/latest.json', [
                'app_id' => config('app.openExchange'),
                'symbols' => 'GHS'
            ]);

            $responseData = $response->json();
            $exchange_rate = $responseData['rates']['GHS'];
            $ghs_amount = $institute->price * ($exchange_rate + 1) * 100 * 1.02;
            $reference = Paystack::genTranxRef();

            $data = array(
                "amount" => round($ghs_amount),
                "reference" =>  $reference,
                "email" => Auth::user()->email,
                "currency" => "GHS",
                "orderID" => "123456789",
                "channels" => ['card', 'bank', 'ussd', 'qr', 'mobile_money', 'bank_transfer'],
                "metadata" => [
                    "institute_id" => $institute->id,
                    "invoice_id" => $invoice->id,

                ]
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
    public function handleGatewayCallback(Request $request)
    {

        try {

            $paymentDetails = Paystack::getPaymentData();
            if ($paymentDetails['status'] == true) {

                $invoice = Invoice::whereId($paymentDetails['data']['metadata']['invoice_id'])->first();

                $transaction = new Transaction();
                $transaction->amount = $paymentDetails['data']['amount'];
                $transaction->description = 'Payment for services rendered';
                $transaction->fees = $paymentDetails['data']['fees'];
                $transaction->participant_id = Auth::user()->id;
                $transaction->reference = $paymentDetails['data']['reference'];
                $transaction->authorization_code = $paymentDetails['data']['authorization']['authorization_code'];
                $transaction->transaction_date = Carbon::parse($paymentDetails['data']['created_at'])->toDateTimeString();
                $transaction->currency = $paymentDetails['data']['currency'];
                $transaction->ipAddress = $paymentDetails['data']['ip_address'];
                $transaction->institute_id = $paymentDetails['data']['metadata']['institute_id'];

                $transaction->invoice()->associate($invoice);
                $transaction->save();

                dd('saved successfully');
            }
        } catch (\Exception $e) {
            dd($e);
            return Redirect::back()->withMessage(['msg' => 'The paystack token has expired. Please refresh the page and try again.', 'type' => 'error']);
        }


        $validatedData = $request->validate([
            'payment_status' => 'required|in:success,failure',
            'participant_id' => 'required|exists:users,id',
            'amount' => 'required|numeric',
            'transaction_id' => 'required|string|unique:transactions',
            'transaction_reference' => 'required|string|unique:transactions',
            'transaction_date' => 'required|date',
            'currency' => 'required|string',
            'institute_id' => 'required|exists:institutes,id',
            'ipAddress' => 'nullable|ip',
            // ... add any additional validation rules as needed
        ]);

        // If the payment was successful, create a new transaction
        if ($validatedData['payment_status'] === 'success') {
            $transaction = Transaction::create($validatedData);
            return response()->json([
                'message' => 'Transaction created successfully',
                'transaction' => $transaction,
            ], 201);
        }

        // If the payment failed, return an error response
        return response()->json([
            'message' => 'Payment failed',
        ], 400);


        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}
