<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    protected $table = 'pembelian';
    protected $fillable = ['nama','studio','film','jam_tayang','no_kursi','jumlah_tiket','total_harga','hari'];
    use HasFactory;

    public function Studio(){
        return $this->belongsTo(Studio::class,'studio');
    }

    public function Film(){
        return $this->belongsTo(Film::class,'film');
    }

    public function Jadwal(){
        return $this->belongsTo(Jadwal::class,'jam_tayang');
    }
}
