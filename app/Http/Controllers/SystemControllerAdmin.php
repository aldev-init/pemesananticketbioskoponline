<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class SystemControllerAdmin extends Controller
{
    public function logoutadmin(){
        Auth::guard('admin')->logout();
        return redirect('/login');
    }
}
