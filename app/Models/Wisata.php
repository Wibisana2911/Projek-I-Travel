<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_wisata',
        'gambar',
        'deskripsi',
        'lokasi',
        'date',
        'created_at',
        'updated_at'
    ];
    public function transportasi(){
        return $this->belongsTo(Transportasi::class);
    }
}
