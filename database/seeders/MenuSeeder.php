<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::create([
            'id_kategori' => 1,
            'nama_menu'=>'sop ayam',
            'price'=>10000,
        ]);
        Menu::create([
            'id_kategori' => 1,
            'nama_menu'=>'nasi goreng',
            'price'=>15000,
        ]);
        Menu::create([
            'id_kategori' => 2,
            'nama_menu'=>'wes teler',
            'price'=>5000,
        ]);
    }
}
