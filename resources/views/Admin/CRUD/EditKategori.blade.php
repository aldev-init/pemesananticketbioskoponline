@extends('layout.navbarAdmin')
@section('judul','Edit Kategori')
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
            <h3>Kelola Kategori Film</h3>
        </div>
        <div id="daftar">
            <form action="/editkategori/{{$kategori->id}}" method="POST">
                @csrf
                <input type="text" name="kategori" id="kategori" required value="{{$kategori->kategori}}">
                <button id="buttonTmbh">Edit Kategori</button>
            </form>
        </div>
    </div>
    @endsection
</body>
</html>
