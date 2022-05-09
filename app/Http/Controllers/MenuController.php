<?php

namespace App\Http\Controllers;

use App\Models\Kategori_Menu;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori_menu = Kategori_Menu::all();
        $menu = Menu::all();
        return view('users.manajer.menu.menu-create', compact('menu','kategori_menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //up foto
        if ($request->file('image')) {
            $image_name = $request->file('image')->store('images', 'public');
        } else {
            $image_name= 'img/user.png';
        }
        $request->validate([
            'id_kategori' => 'required',
            'nama_menu' => 'required',
            'price' => 'required',
            'image' => 'required',
        ]);
        $menu = new Menu();
        $menu->kategori_menu->id_kategori= $request->get('id_kategori');
        $menu->nama_menu = $request->get('nama_menu');
        $menu->price= $request->get('price');
        $menu ->image = $image_name;
        $menu->save();

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
