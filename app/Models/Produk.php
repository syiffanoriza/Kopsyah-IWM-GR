<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';

    protected $fillable = ['kode_produk', 'produk', 'satuan', 'kategori', 'jenis', 'harga_jual'];
    
    protected $guarded = ['id'];
}
