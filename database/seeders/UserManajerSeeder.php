<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserManajerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manajer= User::create([
            'nama_karyawan'=>'Manajer',
            'alamat'=> 'jalanin doang ga jadian',
            'no_hp'=>'12344',
            'email'=>'manajer@rejiku.com',
            'password'=>Hash::make('12345678'),
        ]);
        $manajer ->assignRole('manajer');
    }
}
