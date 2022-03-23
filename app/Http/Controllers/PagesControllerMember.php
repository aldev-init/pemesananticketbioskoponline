<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Jadwal;
use App\Models\Pembelian;
use App\Models\Pemesanan;
use App\Models\Studio;

class PagesControllerMember extends Controller
{
    public function login(){
        return view('Member.LoginRegis');
    }

    public function home(){
        $film = Film::simplePaginate(2);
        return view('Member.Beranda',compact('film'));
    }

    public function film($id){
        $film = Film::where('id',$id)->first();
        return view('Member.DetailFilm',compact('film'));
    }

    public function daftarfilm(){
        $film = Film::all();
        return view('Member.DaftarFilm',compact('film'));
    }

    public function daftarpemesanantiket(){
        $pembelian = Pembelian::all();
        return view('Member.DaftarPemesananTiket',compact('pembelian'));
    }

    public function pemesanantiket(){
        $film = null;
        $filmall = Film::all();
        $studio = Studio::all();
        $jadwal = Jadwal::all();
        $pemesanan = Pemesanan::all();
        return view('Member.PemesananTiket',compact('filmall','studio','film','jadwal','pemesanan'));
    }
    public function pemesanantiketid($id){
        $film = Film::where('id',$id)->first();
        $filmall = Film::all();
        $studio = Studio::all();
        $jadwal = Jadwal::all();
        $pemesanan = Pemesanan::all();
        return view('Member.PemesananTiket',compact('filmall','studio','film','jadwal','pemesanan'));
    }
}
