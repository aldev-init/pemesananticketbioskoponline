<?php

namespace App\Http\Controllers;

use App\Models\AdminData;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class SystemControllerMember extends Controller
{
    public function register(Request $request){
        // dd($request->all());
        $member = Member::create([
            'nama_lengkap'=>$request->nama_lengkap,
            'username'=>$request->username,
            'password'=>Hash::make($request->password),
            'email'=>$request->email,
            'no_telp'=>$request->no_telp,
            'alamat_lengkap'=>$request->alamat_lengkap,
        ]);
        if($member){
            return redirect('/login')->with('status','Register Berhasil,Silahkan Login');
        }else{
            return redirect('/login')->with('status','Register Gagal,Silahkan Coba Lagi');
        }

    }

    public function login(Request $request){
        if($request->username == 'admin'){
            $admin = AdminData::where([
                'username'=>$request->username,
                'password'=>$request->password
            ])->first();
            if($admin){
                Auth::guard('admin')->login($admin);
                if(Auth::guard('admin')->check()){
                    return redirect('/kelolafilm');
                }
            }else{
                return redirect('/login')->with('status','Username atau Password Salah');
            }
        }else{
            if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){
                if(Auth::check()){
                    return redirect('/pemesanantiket');
                }
            }else{
                return redirect('/login')->with('status','Login Gagal,Silahkan Coba Lagi');
            }
        }
    }

    public function logout(Request $request){
        //penghancuran sesi / session
        $request->session()->invalidate();
        //logout
        Auth::logout();
        return redirect('/login');
    }
}
