@extends('layout.navbarAdmin')
@section('judul','Tambah Jam')
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
            <h3>Kelola Jam</h3>
        </div>
        <div id="daftar">
            <form action="/tambahjam" method="POST">
                @csrf
                <input type="time" name="jam_tayang" id="kategori" required>
                <button id="buttonTmbh">Tambah Jam</button>
            </form>
        </div>
    </div>
    @endsection
</body>
</html>
