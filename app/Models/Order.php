<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = "order"; // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswas
    public $timestamps = false;
    protected $primaryKey = 'id'; // Memanggil isi DB Dengan primarykey
    protected $fillable = [
        'order_id',
        'menu',
        'total_price',
        'transaction_id',
        'payment_type',
        'transaction_time',
        'transaction_status',
        'va_numbers',
        'pdf_url',
    ];
}
