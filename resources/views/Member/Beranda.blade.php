@extends('layout.navbarMembers')
@section('judul','Beranda')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/berandamember.css')}}">
</head>
<body>
    @section('body')
    <div id="bodydaftar">
        <table>
            <tr>
                <div id="judulfilm">
                    <h3>Ethernals</h3>
                </div>
                <img src="{{asset('img/film/Ethernals.jpg')}}" alt="">
                <div id="infofilm">
                    <p>Judul Film : Ethernals</p>
                    <p>Produser : Unknown</p>
                    <p>Produksi : Unknown</p>
                    <p>Home Page : bla bla</p>
                    <p>Durasi : 2 Jam</p>
                    <p>Sinopsis : Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam magnam, quo delectus nulla reprehenderit placeat iusto quibusdam voluptate quasi quod? Officia sed distinctio natus a libero, repellendus veniam officiis sunt!</p>
                </div>
            </tr>
            <hr>
            <tr>
                <div id="judulfilm">
                    <h3>Boba Feet</h3>
                </div>
                <img src="{{asset('img/film/BobaFeet.jpg')}}" alt="">
                <div id="infofilm">
                    <p>Judul Film : Boba Feet</p>
                    <p>Produser : Unknown</p>
                    <p>Produksi : Unknown</p>
                    <p>Home Page : bla bla</p>
                    <p>Durasi : 2 Jam</p>
                    <p>Sinopsis : Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam magnam, quo delectus nulla reprehenderit placeat iusto quibusdam voluptate quasi quod? Officia sed distinctio natus a libero, repellendus veniam officiis sunt!</p>
                </div>
            </tr>
        </table>
        <p>Halaman 1</p>
    </div>
    @endsection
</body>
</html>
