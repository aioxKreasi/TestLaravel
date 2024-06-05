<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;

    public function Kabupaten(){
        return $this->hasMany(Kabupaten::class);
    }

    public function Pembeli(){
        return $this->hasMany(Pembeli::class);
    }
}
