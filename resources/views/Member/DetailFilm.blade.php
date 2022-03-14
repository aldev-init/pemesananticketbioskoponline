@extends('layout.navbarMembers')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/detailfilm.css')}}">
    <title>{{$film->judul_film}} | LayarKacaKinclong22</title>
</head>
<body>
    @section('body')
    <div id="bodydaftar">
        <div id="judulfilm">
            <h3>{{$film->judul_film}}</h3>
        </div>
        <video width="100%"  height="100%" autoplay controls muted>
            <source src="{{asset('storage/'.$film->video)}}" type="">
        </video>
        <div id="infofilm">
            <p>Judul Film : {{$film->judul_film}}</p>
            <p>Kategori : {{$film->Kategori->kategori}}</p>
            <p>Produser : {{$film->produser}}</p>
            <p>Produksi : {{$film->produksi}}</p>
            <p>Home Page : {{($film->home_page != null ? $film->home_page : "-")}}</p>
            <p>Durasi : {{$film->durasi}}</p>
            <p>Sinopsis : {{$film->sinopsis}}</p>
        </div>
        <div class="button">
            <form action="/pemesanantiket/{{$film->id}}" method="GET">
                <button id="buttonPt">Pesan Tiket</button>
            </form>
        </div>
    </div>
    @endsection
</body>
</html>
