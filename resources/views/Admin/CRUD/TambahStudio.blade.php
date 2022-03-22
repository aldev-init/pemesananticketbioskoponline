@extends('layout.navbarAdmin')
@section('judul','Tambah Studio')
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
            <h3>Kelola Studio Film</h3>
        </div>
        <div id="daftar">
            <form action="/tambahstudio" method="POST">
                @csrf
                <input type="text" name="studio" id="kategori" required>
                <button id="buttonTmbh">Tambah Studio</button>
            </form>
        </div>
    </div>
    @endsection
</body>
</html>
