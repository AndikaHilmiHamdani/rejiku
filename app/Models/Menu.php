<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table = "menu"; // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswas
    public $timestamps = false;
    protected $primaryKey = 'id_menu'; // Memanggil isi DB Dengan primarykey
    protected $fillable = [
        'id_kategori',
        'nama_menu',
        'price',
        'image'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori_Menu::class);
    }
}
