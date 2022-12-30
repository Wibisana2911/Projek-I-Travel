<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Harga extends Model
{
    use HasFactory;
    protected $table = 'hargas';
    public function transaksi(){
        return $this->hasMany(Transaksi::class);
    }

    public function tiket(){
        return $this->hasOne(Tiket::class);
    }
}
