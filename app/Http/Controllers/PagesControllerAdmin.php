<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class PagesControllerAdmin extends Controller
{
    public function kelolafilm()
    {
        $film = Film::all();
        return view('Admin.KelolaFilm',compact('film'));
    }


    //CRUD
    //tambahfilm
    public function tambahfilm(){
        return view('Admin.CRUD.TambahFilm');
    }
}
