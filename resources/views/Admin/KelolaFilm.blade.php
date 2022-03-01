@extends('layout.navbarAdmin')
@section('judul','Kelola Film')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/kelolafilm.css')}}">
</head>
<body>
    @section('body')
    <div id="bodydaftar">
        <div id="judul">
            <h3>Daftar Film</h3>
            <button id="add-film">Tambah Film</button>
        </div>
        <div id="daftar">
            <ul>
                <li>
                    <p class="judulfilm">Spiderman No Way Home</p>
                    <iframe width="300" height="150" src="https://www.youtube.com/embed/JfVOs4VSpmA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>
                    <button class="detail-button">Lihat Detail</button>
                    <button class="hapus-button">Hapus</button>
                </li>
                <li>
                    <p class="judulfilm">Doctor Strange Multiverse Of Madness</p>
                    <iframe width="300" height="150" src="https://www.youtube.com/embed/aWzlQ2N6qqg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>
                    <button class="detail-button">Lihat Detail</button>
                    <button class="hapus-button">Hapus</button>
                </li>
                <li>
                    <p class="judulfilm">Marvel Shang Chi</p>
                    <iframe width="300" height="150" src="https://www.youtube.com/embed/8YjFbMbfXaQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>
                    <button class="detail-button">Lihat Detail</button>
                    <button class="hapus-button">Hapus</button>
                </li>
                <li>
                    <p class="judulfilm">The Social Network</p>
                    <iframe width="300" height="150" src="https://www.youtube.com/embed/2RB3edZyeYw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>
                    <button class="detail-button">Lihat Detail</button>
                    <button class="hapus-button">Hapus</button>
                </li>
            </ul>
        </div>
        <p>Halaman 1</p>
    </div>
    @endsection
</body>
</html>
