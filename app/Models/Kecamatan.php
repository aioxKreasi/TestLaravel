<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;
    public function Kabupaten(){
        return $this->belongsTo(Kabupaten::class);
    }

    public function Kelurahan(){
        return $this->hasMany(Kelurahan::class);
    }

    public function Pembeli(){
        return $this->hasMany(Pembeli::class);
    }
}
