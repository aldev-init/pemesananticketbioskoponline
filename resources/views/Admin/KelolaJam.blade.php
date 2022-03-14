@extends('layout.navbarAdmin')
@section('judul','Kelola Jam')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/kelolafilm.css')}}">
</head>
<body>
    @section('body')
    <div id="bodydaftar">
        <div id="judul">
            <h3>Kelola Jam Film</h3>
        </div>
        <div id="daftar">
            <select name="film" id="">
                <option value="" selected>Pilih Film</option>
                @foreach ($film as $flm )
                    <option value="{{$flm->id}}">{{$flm->judul_film}}</option>
                @endforeach
            </select>
        </div>
    </div>
    @endsection
</body>
</html>
