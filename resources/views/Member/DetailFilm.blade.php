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
            <h3>Spiderman,No Way Home</h3>
        </div>
        <video width="100%"  height="100%" autoplay controls muted>
            <source src="{{asset('video/SPIDER-MAN_ NO WAY HOME - Official Trailer (HD).mp4')}}" type="">
        </video>
        <div id="infofilm">
            <p>Judul Film : Spiderman,No Way Home</p>
            <p>Produser : -</p>
            <p>Produksi : Marvel Studios</p>
            <p>Home Page : -</p>
            <p>Durasi : 2 Jam</p>
            <p>Sinopsis : Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam magnam, quo delectus nulla reprehenderit placeat iusto quibusdam voluptate quasi quod? Officia sed distinctio natus a libero, repellendus veniam officiis sunt!</p>
        </div>
    </div>
    @endsection
</body>
</html>
