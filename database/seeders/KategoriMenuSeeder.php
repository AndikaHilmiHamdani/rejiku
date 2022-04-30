<?php

namespace Database\Seeders;

use App\Models\Kategori_Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategori_Menu::create([
            'nama_kategori'=>'makanan',
        ]);
        Kategori_Menu::create([
            'nama_kategori'=>'minuman',
        ]);
    }
}
