<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kasir= User::create([
            'nama_karyawan'=>'kasir 1',
            'email'=>'kasir1@rejiku.com',
            'alamat'=> 'jalanin aja dulu',
            'no_hp'=>'12344',
            'password'=>Hash::make('12345678'),
        ]);
        $kasir ->assignRole('kasir'); 
        
        $kasir= User::create([
            'nama_karyawan'=>'Kasir 2',
            'alamat'=> 'jalan yok',
            'no_hp'=>'12344',
            'email'=>'kasir2@rejiku.com',
            'password'=>Hash::make('12345678'),
        ]);
        $kasir ->assignRole('kasir');
    }
}
