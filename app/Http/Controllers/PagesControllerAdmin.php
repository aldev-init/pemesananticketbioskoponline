<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Jadwal;
use App\Models\Kategori;
use App\Models\Studio;
use Illuminate\Http\Request;

class PagesControllerAdmin extends Controller
{
    public function kelolafilm()
    {
        $film = Film::all();
        return view('Admin.KelolaFilm',compact('film'));
    }

    public function kelolajam(){
        $jadwal = Jadwal::all();
        return view('Admin.KelolaJam',compact('jadwal'));
    }

    public function detailfilm($id){
        $film = Film::where('id',$id)->first();
        return view('Admin.CRUD.DetailFilm',compact('film'));
    }

    public function kelolakategori(){
        $kategori = Kategori::all();
        return view('Admin.KelolaKategori',compact('kategori'));
    }

    public function kelolastudio(){
        $studio = Studio::all();
        return view('Admin.KelolaStudio',compact('studio'));
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


    public function tambahstudio(){
        return view('Admin.CRUD.TambahStudio');
    }

    public function editstudio(Request $request ,$id){
        $studio = Studio::where('id',$id)->first();
        return view('Admin.CRUD.EditStudio',compact('studio'));
    }


    public function tambahjam(){
        return view('Admin.CRUD.TambahJam');
    }

    public function editjam(Request $request,$id){
        $jadwal = Jadwal::where('id',$id)->first();
        return view('Admin.CRUD.EditJam',compact('jadwal'));
    }
}
