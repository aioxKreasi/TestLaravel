<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;

    public function Pembeli(){
        return $this->belongsTo(Pembeli::class);
    }

    public function Produk(){
        return $this->belongsTo(Produk::class);
    }

}
