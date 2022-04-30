<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori_Menu extends Model
{
    use HasFactory;
    protected $table = "kategori_menu"; // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswas
    public $timestamps = false;
    protected $primaryKey = 'id_kategori'; // Memanggil isi DB Dengan primarykey
    protected $fillable = [
        'nama_kategori',
    ];
}
