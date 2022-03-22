<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Jadwal;
use App\Models\Kategori;
use App\Models\Studio;
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

    public function editfilm(Request $request ,$id){
            //kosong
    }



    public function tambahkategori(Request $request){
        Kategori::create([
            'kategori'=>$request->kategori
        ]);
        return redirect('/kelolakategori')->with('status','Tambah Kategori Berhasil');
    }

    public function editkategori(Request $request,$id){
        $kategori = [
            'kategori'=> $request->kategori
        ];
        Kategori::where('id',$id)->update($kategori);
        return redirect('/kelolakategori')->with('status','Edit Kategori Berhasil');
    }

    public function hapuskategori($id){
        Kategori::where('id',$id)->delete();
        return redirect('/kelolakategori')->with('status','Hapus Kategori Berhasil');
    }


    public function tambahstudio(Request $request){
        Studio::create([
            'studio'=>$request->studio
        ]);
        return redirect('/kelolastudio')->with('status','Tambah Studio Berhasil');
    }

    public function editstudio(Request $request,$id){
        Studio::where('id',$id)->update([
            'studio'=>$request->studio
        ]);
        return redirect('/kelolastudio')->with('status','Edit Studio Berhasil');
    }

    public function hapusstudio($id){
        Studio::where('id',$id)->delete();
        return redirect('/kelolastudio')->with('status','Hapus Studio Berhasil');
    }


    public function tambahjam(Request $request){
        Jadwal::create([
            'jam_tayang'=>$request->jam_tayang,
        ]);
        return redirect('/kelolajam')->with('status','Tambah Jam Tayang Berhasil');
    }

    public function editjam(Request $request,$id){
        Jadwal::where('id',$id)->update([
            'jam_tayang'=>$request->jam_tayang
        ]);
        return redirect('/kelolajam')->with('status','Edit Jam Tayang Berhasil');
    }

    public function hapusjam($id){
        Jadwal::where('id',$id)->delete();
        return redirect('/kelolajam')->with('status','Hapus Jam Tayang Berhasil');
    }
}
