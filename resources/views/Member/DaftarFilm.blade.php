@extends('layout.navbarMembers')
@section('judul','Daftar Film')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/daftarfilm.css')}}">
</head>
<body>
    @section('body')
    <div id="bodydaftar">
        <div id="judulfilm">
            <h3>Daftar Film</h3>
        </div>
        <div id="daftar">
            <ul>
                <li>
                    <p>Spiderman No Way Home</p>
                    <iframe width="300" height="150" src="https://www.youtube.com/embed/JfVOs4VSpmA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>
                    <button class="detail-button">Lihat Detail</button>
                </li>
                <li>
                    <p>Doctor Strange Multiverse Of Madness</p>
                    <iframe width="300" height="150" src="https://www.youtube.com/embed/aWzlQ2N6qqg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>
                    <button class="detail-button">Lihat Detail</button>
                </li>
                <li>
                    <p>Doctor Strange Multiverse Of Madness</p>
                    <iframe width="300" height="150" src="https://www.youtube.com/embed/8YjFbMbfXaQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>
                    <button class="detail-button">Lihat Detail</button>
                </li>
                <li>
                    <p>Doctor Strange Multiverse Of Madness</p>
                    <iframe width="300" height="150" src="https://www.youtube.com/embed/8YjFbMbfXaQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>
                    <button class="detail-button">Lihat Detail</button>
                </li>
            </ul>
        </div>
        <p>Halaman 1</p>
    </div>
    @endsection
</body>
</html>
