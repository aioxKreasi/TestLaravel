<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    use HasFactory;

    public function Provinsi(){
        return $this->belongsTo(Provinsi::class);
    }

    public function Kecamatan(){
        return $this->hasMany(Kecamatan::class);
    }

    public function Pembeli(){
        return $this->hasMany(Pembeli::class);
    }
}
