<?php

namespace Database\Seeders;

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
        DB::table('users')->insert([
            'nama_karyawan'=>'Kasir2',
            'email'=>'kasir1@rejiku.com',
            'alamat'=> 'jalanin aja dulu',
            'no_hp'=>'12344',
            'password'=>Hash::make('12345678'),
        ]);
    }
}
