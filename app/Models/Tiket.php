<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;
    protected $table = 'tikets';
    public function harga(){
        return $this->hasOne(Harga::class,'id','id_harga');
    }
    public function transaksi(){
        return $this->hasMany(Transaksi::class);
    }

    public function transportasi(){
        return $this->belongsTo(Transportasi::class);
    }
}
