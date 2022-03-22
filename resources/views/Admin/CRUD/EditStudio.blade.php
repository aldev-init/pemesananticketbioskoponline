@extends('layout.navbarAdmin')
@section('judul','Edit Studio')
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
            <h3>Kelola studio Film</h3>
        </div>
        <div id="daftar">
            <form action="/editstudio/{{$studio->id}}" method="POST">
                @csrf
                <input type="text" name="studio" id="kategori" required value="{{$studio->studio}}">
                <button id="buttonTmbh">Edit studio</button>
            </form>
        </div>
    </div>
    @endsection
</body>
</html>
