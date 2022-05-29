<?php

namespace App\Http\Controllers;

use App\Models\Kategori_Menu;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $idUser = auth()->user()->id;
        $current_kategori = $request->input('id_kategori', "1");
        $menu = Menu::all()->where('id_kategori', $current_kategori);
        $kategori = Kategori_Menu::all();
        foreach ($menu as $item) {
            if ($item->image) {
                # code...
                $item->image = Storage::url($item->image);
            }
        }
        return view('home', compact('menu', 'current_kategori', 'kategori', 'idUser'));
    }
}
