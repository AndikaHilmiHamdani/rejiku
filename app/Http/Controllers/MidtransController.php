<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Order;
use App\Models\User;


use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MidtransController extends Controller
{
    public function paymentgateway(Request $request)
    {
        //Auth user
        Auth::user();
        $id_menu = $request->get('id_menu');
        $quantity = $request->get('quantity');

        $input = [];
        $totalPrice = 0;
        $menu = Menu::all()->whereIn('id_menu', $id_menu);
        foreach ($menu as $item) {
            $menuIndex = array_search($item->id_menu, $id_menu);
            $totalPrice += $item->price;
            array_push($input, [
                "id_menu" => $item->id_menu,
                "quantity" => $quantity[$menuIndex],
                "nama_menu" => $item->nama_menu,
                "price" => $item->price,
                "nama_kategori" => $item->id_kategori,
            ]);
        }
        //get data user all
        $users = User::all();
        //call initialize midtrans payment gateway
        $this->initMidtrans();

        $snapToken = '';
        $order = Order::create();
        $order->save();

        $params = array(
            'transaction_details' => array(
                'order_id' => $order->id,
                'gross_amount' => $totalPrice,
            ),

            'item_details' => array_map(function ($item) {
                return array(
                    'id' => $item['id_menu'],
                    'price' => $item['price'],
                    'quantity' => $item['quantity'],
                    'name' => $item['nama_menu'],
                    'category' => $item['nama_kategori'],
                );
            }, $input),

            'customer_details' => array(
                'first_name' => $users[0]['nama_karyawan'],
                'email' => $users[0]['email'],
                'phone' => $users[0]['no_hp'],

                'shipping_address' => array(
                    'first_name' => $users[0]['nama_karyawan'],
                    'email' => $users[0]['email'],
                    'phone' => $users[0]['no_hp'],
                    'address' => $users[0]['alamat'],
                    'postal_code' => '123',
                    'country_code' => 'IDN'
                )

            )
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        $order->menu = $input;
        $order->total_price = $totalPrice;
        $order->save();

        return view('users.kasir.checkout', ['snapToken' => $snapToken]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'status_code' => 'required',
            'status_message' => 'required',
            'transaction_id' => 'required',
            'order_id' => 'required',
            'gross_amount' => 'required',
            'payment_type' => 'required',
            'transaction_time' => 'required',
            'transaction_status' => 'required',
            'va_numbers' => 'required',
        ]);

        $data = Order::create([
            'status_code' => $request['status_code'],
            'status_message' => $request['status_message'],
            'transaction_id' => $request['transaction_id'],
            'order_id' => $request['order_id'],
            'gross_amount' => $request['gross_amount'],
            'payment_type' => $request['payment_type'],
            'transaction_time' => $request['transaction_time'],
            'transaction_status' => $request['transaction_status'],
            'va_numbers' => $request['va_numbers'],
        ])->save();

        return $data;
    }
}
