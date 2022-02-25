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
}
