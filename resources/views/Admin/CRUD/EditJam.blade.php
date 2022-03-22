@extends('layout.navbarAdmin')
@section('judul','Edit Jam')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/tambahkategori.css')}}">
</head>
<body>
    @section('body')
    <div id="bodydaftar">
        <div id="judul">
            <h3>Kelola Jam </h3>
        </div>
        <div id="daftar">
            <form action="/editjam/{{$jadwal->id}}" method="POST">
                @csrf
                <input type="time" name="jam_tayang" id="kategori" required value="{{$jadwal->jam_tayang}}">
                <button id="buttonTmbh">Edit Jam</button>
            </form>
        </div>
    </div>
    @endsection
</body>
</html>
