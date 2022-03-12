<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class SystemControllerAdmin extends Controller
{
    public function logoutadmin(){
        Auth::guard('admin')->logout();
        return redirect('/login');
    }

    public function tambahfilm(Request $request){
        // dd($request->file('video')->getClientOriginalExtension(),$request->file('gambar')->getClientOriginalExtension());
        // if($request->file('video')->getClientOriginalExtension() != 'mp4' || $request->file('gambar')->getClientOriginalExtension() != 'jpg' || $request->file('gambar')->getClientOriginalExtension() != 'png'){
        //     return redirect('/tambahfilm')->with('status','Periksa Ekstensi File Video Atau Gambar,Pastikan Sudah Benar');
        // }
        Film::create([
            'video'=>$request->file('video')->store('video'),
            'gambar'=>$request->file('gambar')->store('gambar'),
            'judul_film'=>$request->judul_film,
            'sinopsis'=>$request->sinopsis,
            'kategori'=>$request->kategori,
            'produser'=>$request->produser,
            'produksi'=>$request->produksi,
            'home_page'=>$request->home_page,
            'durasi'=>$request->durasi,
            'harga'=>$request->harga
        ]);
        return redirect('/kelolafilm')->with('status','Tambah Film Berhasil');
    }

    public function hapusfilm($id){
        $film = Film::where('id',$id)->first();
        $video = $film->video;
        $gambar = $film->gambar;
        Film::destroy($id);
        Storage::delete($video);
        Storage::delete($gambar);
        return redirect('/kelolafilm')->with('status','Hapus Film Berhasil');
    }
}
