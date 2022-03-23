<?php

namespace App\Http\Controllers;

use App\Models\AdminData;
use App\Models\Member;
use App\Models\Pembelian;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use PDF;

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
            'role'=>"member",
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

    public function pemesanantiket(Request $request){
        // dd($request->all());
        if($request->button == 'pesan'){
            Pemesanan::create([
                'nama'=>$request->nama,
                'studio'=>$request->studio,
                'film'=>$request->film,
                'jam_tayang'=>$request->jam_tayang,
                'no_kursi'=>$request->no_kursi,
                'jumlah_tiket'=>$request->jumlah_tiket,
                'total_harga'=>$request->total_harga,
                'hari'=>$request->hari,
            ]);
            return redirect('/pemesanantiket');
        }else{
            Pembelian::create([
                'nama'=>$request->nama,
                'studio'=>$request->studio,
                'film'=>$request->film,
                'jam_tayang'=>$request->jam_tayang,
                'no_kursi'=>$request->no_kursi,
                'jumlah_tiket'=>$request->jumlah_tiket,
                'total_harga'=>$request->total_harga,
                'hari'=>$request->hari,
            ]);

            return redirect('/daftarpemesanantiket');
        }
    }

    public function hapuspemesanan(){
        Pemesanan::truncate();
        return redirect('/pemesanantiket');
    }

    public function tiket($id){
        $data = Pembelian::where('id',$id)->first();
        $pdf = PDF::loadView('Member.TiketPdf',compact('data'))->setPaper('A4','potrait');
        // dd($pdf);
        return $pdf->download('Tiket '.$data->Film->judul_film.'.pdf');
    }

    public function debugtiket(){
        return view('Member.TiketPdf');
    }
}
