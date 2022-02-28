<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesControllerMember extends Controller
{
    public function login(){
        return view('Member.LoginRegis');
    }

    public function home(){
        return view('Member.Beranda');
    }

    public function film(){
        return view('Member.DetailFilm');
    }

    public function daftarfilm(){
        return view('Member.DaftarFilm');
    }

    public function daftarpemesanantiket(){
        return view('Member.DaftarPemesananTiket');
    }

    public function pemesanantiket(){
        return view('Member.PemesananTiket');
    }
}
