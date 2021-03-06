<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\Menu;
use App\Models\Order;
use App\Models\User;


use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDF;

class MidtransController extends Controller
{
    public function paymentgateway(Request $request)
    {
        //Auth user
        $idUser = auth()->user()->id;
        $cart = Checkout::with('menu')->where('id_user', '=', $idUser)->get();

        $input = [];
        $totalPrice = 0;
        foreach ($cart as $item) {
            $totalPrice += $item->menu->price;
            array_push($input, [
                "id_menu" => $item->id_menu,
                "quantity" => $item->quantity,
                "nama_menu" => $item->menu->nama_menu,
                "price" => $item->menu->price,
                "nama_kategori" => $item->menu->id_kategori,
            ]);
        }
        //get data user all
        $users = User::all();
        //call initialize midtrans payment gateway
        $this->initMidtrans();

        $snapToken = '';
        $orderId = rand();

        $params = array(
            'transaction_details' => array(
                'order_id' => $orderId,
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

        $order = Order::create([
            "menu" => json_encode($input),
            "total_price" => $totalPrice,
            "order_id" => $orderId,
            "payment_type" => "tunai",
            "transaction_time" => now()
        ]);
        $order->save();

        Checkout::with('menu')->where('id_user', '=', $idUser)->delete();

        return view('users.kasir.checkout', compact('snapToken', 'cart'));
    }

    public function store(Request $request)
    {
        $order_id = $request->get('order_id');
        $va_numbers = $request->get('va_numbers');
        $transaction_id = $request->get('transaction_id');
        $transaction_status = $request->get('transaction_status');
        $payment_type = $request->get('payment_type');
        $transaction_time = $request->get('transaction_time');
        // $signature_key = $request->get('signature_key');

        $order = Order::where('order_id', $order_id)->firstOrFail();
        $order->va_numbers = $va_numbers;
        $order->transaction_id = $transaction_id;
        $order->transaction_status = $transaction_status;
        $order->payment_type = $payment_type;
        $order->transaction_time = $transaction_time;
        $order->save();

        return $order;
    }

    public function cetakpdf()
    {
        
        $order = Order::all();
        foreach ($order as $item) {
            $item->menu = json_decode($item->menu);

            if ($item->va_numbers) {
                $item->va_numbers = json_decode($item->va_numbers);
            }
        }
        $pdf = PDF::loadview('users.manajer.cetakpdf',compact('order'));
        return $pdf->stream();
    }
}
