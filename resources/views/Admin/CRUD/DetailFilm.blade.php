@extends('layout.navbarAdmin')
@section('judul','Detail Film')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/detailfilmadmin.css')}}">
</head>
<body>
    @section('body')
    <div id="bodydaftar">
        <div id="judul">
            <h3>Tambah Film</h3>
        </div>
        <div id="daftar">
            <form action="/editfilm/{{$film->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <ul>
                    <li>
                        <p>Film (*.mp4): </p>
                        <video controls width="300" height="150" src="{{asset('storage/'.$film->video)}}"></video>
                    </li>
                    <li>
                        <p>Poster (*.jpg | *.png)</p>
                        <img width="185px" height="278px" src="{{asset('storage/'.$film->gambar)}}" alt="">
                    </li>
                    <li>
                        <p>Judul Film</p>
                        <input type="text" name="judul_film" id="text_input" required value="{{$film->judul_film}}">
                    </li>
                    <li>
                        <p>Sinopsis</p>
                        <textarea name="sinopsis" id="" cols="30" rows="10" required>{{$film->sinopsis}}</textarea>
                    </li>
                    <li>
                        <p>Genre</p>
                        <input type="text" name="kategori" id="text_input" required value="{{$film->Kategori->kategori}}">
                    </li>
                    <li>
                        <p>Produser</p>
                        <input type="text" name="produser" id="text_input" required value="{{$film->produser}}">
                    </li>
                    <li>
                        <p>Produksi</p>
                        <input type="text" name="produksi" id="text_input" required value="{{$film->produksi}}">
                    </li>
                    <li>
                        <p>Home Page</p>
                        <input type="text" name="home_page" id="text_input" value="{{$film->home_page}}">
                    </li>
                    <li>
                        <p>Durasi</p>
                        <input type="time" name="durasi" id="text_input" value="{{$film->durasi}}">
                    </li>
                    <li>
                        <p>Harga Tiket</p>
                        <input type="number" name="harga" id="text_input" required value="{{$film->harga}}">
                    </li>
                    {{-- <li>
                        <button id="buttonTmbh">Edit Film</button>
                        <button id="buttonRst" type="button" onclick="reset()">Reset</button>
                    </li> --}}
                </ul>
            </form>
        </div>
    </div>
    @endsection
</body>
</html>
