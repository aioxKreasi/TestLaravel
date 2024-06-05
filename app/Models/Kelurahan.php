<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;

    public function Kecamatan(){
        return $this->belongsTo(Kecamatan::class);
    }

    public function Pembeli(){
        return $this->hasMany(Pembeli::class);
    }
}
