<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'produk',
        'kisaran_harga',
        'catatan',
        'nama_lengkap',
        'email',
        'nohp',
        'tipe_pengiriman',
    ];
}
