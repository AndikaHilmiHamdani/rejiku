<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MidtransController extends Controller
{
    public function paymentgateway()
    {
        //call initialize midtrans payment gateway
        $this->initMidtrans();

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 10000,
            ),

            'item_details' => array(
                array(
                    'id' => 'ITEM1',
                    'price' => 10000,
                    'quantity' => 1,
                    'name' => 'abc',
                    'brand' => 'def',
                    'categoty' => 'ghi',
                    'merchant_name' => 'jkl',
                )
            ),

            'customer_details' => array(
                'first_name' => 'dobleh',
                'last_name' => 'jamal',
                'email' => 'abc@abc.com',
                'phone' => '+6213456',

                'billing_address' => array(
                    'first_name' => 'dobleh',
                    'last_name' => 'jamal',
                    'email' => 'abc@abc.com',
                    'phone' => '+6213456',
                    'address' => 'aaa',
                    'city' => 'bbb',
                    'postal_code' => '123',
                    'country_code' => 'IDN'
                ),

                'shipping_address' => array(
                    'first_name' => 'dobleh',
                    'last_name' => 'jamal',
                    'email' => 'abc@abc.com',
                    'phone' => '+6213456',
                    'address' => 'aaa',
                    'city' => 'bbb',
                    'postal_code' => '123',
                    'country_code' => 'IDN'
                )
                
            )
        );
        
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view('home', ['snapToken' => $snapToken]);
    }
}
