<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesControllerAdmin extends Controller
{
    public function kelolafilm()
    {
        return view('Admin.KelolaFilm');
    }
}
