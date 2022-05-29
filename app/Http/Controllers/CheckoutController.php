<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth:api');
    // }

    public function list(Request $request)
    {
        $idUser = $request->get('id_user');
        $foundItem = Checkout::with(['menu' => function ($query) {
            $query->select('id_menu', 'nama_menu', 'price');
        }])
            ->where('id_user', '=', $idUser)
            ->get();
        return response()->json($foundItem);
    }

    public function store(Request $request)
    {
        $idUser = $request->get('id_user');
        $idMenu = $request->get('id_menu');
        $quantity = $request->get('quantity');

        $foundItem = Checkout::where('id_user', '=', $idUser)
            ->where('id_menu', '=', $idMenu)
            ->first();
        if ($foundItem) {
            $foundItem->quantity += $quantity;
            if ($foundItem->quantity <= 0) {
                $foundItem->delete();
            } else {
                $foundItem->save();
            }
        } else {
            $foundItem = Checkout::create([
                'id_user' => $idUser,
                'id_menu' => $idMenu,
                'quantity' => $quantity,
            ]);
            $foundItem->save();
        }

        return response()->json($foundItem);
    }
}
