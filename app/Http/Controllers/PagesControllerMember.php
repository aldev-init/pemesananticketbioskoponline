<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;

class PagesControllerMember extends Controller
{
    public function login(){
        return view('Member.LoginRegis');
    }

    public function home(){
        $film = Film::all();
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
        return view('Member.DaftarPemesananTiket');
    }

    public function pemesanantiket(){

        return redirect('/pemesanantiket/4');
    }
    public function pemesanantiketid($id){
        $film = Film::where('id',$id)->first();
        $filmall = Film::all();
        return view('Member.PemesananTiket',compact('film','filmall'));
    }
}
