@extends('layout.navbarMembers')
@section('judul','Film Anu')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/detailfilm.css')}}">
</head>
<body>
    @section('body')
    <div id="bodydaftar">
        <div id="judulfilm">
            <h3>Spiderman,Far From PC</h3>
        </div>
        <video width="100%"  height="100%" autoplay controls muted>
            <source src="{{asset('video/windah.mp4')}}" type="">
        </video>
        <div id="infofilm">
            <p>Judul Film : Spiderman,Far From PC</p>
            <p>Produser : Windah Basudara</p>
            <p>Produksi : Brand NCG</p>
            <p>Home Page : -</p>
            <p>Durasi : 2 Jam</p>
            <p>Sinopsis : Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam magnam, quo delectus nulla reprehenderit placeat iusto quibusdam voluptate quasi quod? Officia sed distinctio natus a libero, repellendus veniam officiis sunt!</p>
        </div>
    </div>
    @endsection
</body>
</html>
