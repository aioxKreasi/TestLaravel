<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;

    public function Pembelian(){
        return $this->hasMany(Pembelian::class);
    }

    public function Provinsi(){
        return $this->belongsTo(Provinsi::class);
    }

    public function Kabupaten(){
        return $this->belongsTo(Kabupaten::class);
    }

    public function Kecamatan(){
        return $this->belongsTo(Kecamatan::class);
    }

    public function Kelurahan(){
        return $this->belongsTo(Kelurahan::class);
    }
}
