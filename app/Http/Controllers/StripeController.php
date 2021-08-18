<?php

namespace App\Http\Controllers;

use App\c;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'billing_email' => 'required|email',
            'cc' => 'required',
            'exp_date' => 'required',
            'cvc' => 'required',
        ]);
    
    
        // $stripe = new \Stripe\StripeClient('sk_test_51J0YgzFqMj1k5Rz5EASlkGM8x23G17NBgrtl36opn2is578lqOFcqXgrMVq1dmPbIFLNHxMtIW6wJg4oWrseV2BU00hK2XgdA0');
        $stripe = new \Stripe\StripeClient('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');
     
        $exp_date = $request->exp_date;
        $cvc = $request->cvc;


        $card = [
            'number' => '4242424242424242',
            'exp_month' => '01',
            'exp_year' => '2022',
            'cvc' => $cvc,
        ];


        $stripe = new \Stripe\StripeClient('sk_test_n4PP5wnx5j42xhC9pmzfsefF00GnQvHVlX');
        
        // dd($exp_year,$exp_month);
        // CREATE TOKEN
        $token = $stripe->tokens->create([
            'card' => $card,
        ]);
        // dd($token);
        $token_id = $token->id;
        

        // CREATE CUSTOMER
        $customer = $stripe->customers->create([
            // 'description' => 'Test Customer',
            'email' => $request->billing_email,
            'source' => $token_id,
        ]);

        // CHARGE
        $charge = $stripe->charges->create([
            'receipt_email' => $request->billing_email,
            'amount' => $request->amount,
            'source' => $token_id,
            'currency' => 'usd',
            'description' => $request->description,
            'customer' => $customer->id,
            // 'billing' => [
            //     'address' => [
            //         'line1' => $request->billing_address,
            //         'line2' => '',
            //         'city' => $request->billing_city,
            //         'country' => $request->billing_country,
            //         'postal_code' => $request->billing_postal_code,
            //         'state' => $request->billing_state,
            //     ],
            //     'email' => $request->billing_address,
            //     'name' => $request->billing_firstname. ' ' .$request->billing_lastname,
            //     'phone' => '',
            // ],
            'shipping' => [
                'address' => [
                    'line1' => isset($request->shipping_address) ? $request->shipping_address : $request->billing_address,
                    'line2' => '',
                    'city' => isset($request->shipping_city) ? $request->shipping_city : $request->billing_city,
                    'country' => isset($request->shipping_country) ? $request->shipping_country : $request->billing_country,
                    'postal_code' => isset($request->shipping_postal_code) ? $request->shipping_postal_code : $request->billing_postal_code,
                    'state' => isset($request->shipping_state) ? $request->shipping_state : $request->billing_state,
                ],
                'name' => $request->billing_firstname. ' ' . $request->billing_lastname,
                // 'carrier' => '',
                'phone' => '',
                // 'tracking_number' => ''
            ],
        ]);
    
    
        return response()->json([
            'success' => true,
            'data' => $charge
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function show(c $c)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, c $c)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function destroy(c $c)
    {
        //
    }
}
