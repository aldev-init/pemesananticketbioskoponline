<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Kategori;
use Illuminate\Http\Request;

class PagesControllerAdmin extends Controller
{
    public function kelolafilm()
    {
        $film = Film::all();
        return view('Admin.KelolaFilm',compact('film'));
    }

    public function kelolajam(){
        $film = Film::all();
        return view('Admin.KelolaJam',compact('film'));
    }

    public function detailfilm($id){
        $film = Film::where('id',$id)->first();
        return view('Admin.CRUD.DetailFilm',compact('film'));
    }

    public function kelolakategori(){
        $kategori = Kategori::all();
        return view('Admin.KelolaKategori',compact('kategori'));
    }


    //CRUD
    //tambahfilm
    public function tambahfilm(){
        $kategori = Kategori::all();
        return view('Admin.CRUD.TambahFilm',compact('kategori'));
    }

    public function tambahkategori(){
        return view('Admin.CRUD.TambahKategori');
    }

    public function editkategori($id){
        $kategori = Kategori::where('id',$id)->first();
        return view('Admin.CRUD.EditKategori',compact('kategori'));
    }
}
