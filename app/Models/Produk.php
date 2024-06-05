<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    public function kategoriProduk(){
        return $this->belongsTo(KategoriProduk::class, 'kategoriProduk_id');
    }

    public function Pembelian(){
        return $this->hasMany(Pembelian::class);
    }
}
