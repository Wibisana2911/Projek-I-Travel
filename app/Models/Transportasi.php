<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transportasi extends Model
{
    use HasFactory;
    public function wisata(){
        return $this->hasMany(Wisata::class);
    }
    public function tiket(){
        return $this->hasMany(Tiket::class);
    }
}
