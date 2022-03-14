<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table='film';
    protected $fillable = [
        'video',
        'gambar',
        'judul_film',
        'sinopsis',
        'kategori',
        'produser',
        'produksi',
        'home_page',
        'durasi',
        'harga'
    ];
    use HasFactory;

    public function Kategori(){
        return $this->belongsTo(Kategori::class,'kategori');
    }
}
