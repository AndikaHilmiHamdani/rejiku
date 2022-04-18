<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.manajer.user-index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.manajer.user-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_karyawan' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        $request = User::create([
            'nama_karyawan' => $request['nama_karyawan'],
            'alamat' => $request['alamat'],
            'no_hp' => $request['no_hp'],
            'email' => $request['email'],
            'password' => Hash::make($request['password'])
        ])->assignRole('kasir')->save();
        return redirect()->route('user.index')->with('sukses', 'user berhasil ditambahkan');
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
        $users = User::find($id);
        return view('users.manajer.user-edit',compact('users'));
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
        $request->validate([
            'nama_karyawan' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
       
        $request['password']=Hash::make($request['password']);
        User::find($id)->update($request->all());
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('user.index')->with('sukses', 'data berhasil dihapus');
    }
}
