@extends('layout.navbarAdmin')
@section('judul','Tambah Film')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/tambahfilm.css')}}">
</head>
<body>
    @section('body')
        <div id="bodydaftar">
            <div id="judul">
                <h3>Tambah Film</h3>
            </div>
            <div id="daftar">
                <form action="/tambahfilm" method="POST" enctype="multipart/form-data">
                    @csrf
                    <ul>
                        <li>
                            <p>Film (*.mp4): </p>
                            <input type="file" name="video" id="file_input" required>
                        </li>
                        <li>
                            <p>Poster (*.jpg | *.png)</p>
                            <input type="file" name="gambar" id="file_input" required>
                        </li>
                        <li>
                            <p>Judul Film</p>
                            <input type="text" name="judul_film" id="text_input" required>
                        </li>
                        <li>
                            <p>Sinopsis</p>
                            <textarea name="sinopsis" id="" cols="30" rows="10" required></textarea>
                        </li>
                        <li>
                            <p>Genre</p>
                            <input type="text" name="kategori" id="text_input" required>
                        </li>
                        <li>
                            <p>Produser</p>
                            <input type="text" name="produser" id="text_input" required>
                        </li>
                        <li>
                            <p>Produksi</p>
                            <input type="text" name="produksi" id="text_input" required>
                        </li>
                        <li>
                            <p>Home Page</p>
                            <input type="text" name="home_page" id="text_input">
                        </li>
                        <li>
                            <p>Durasi</p>
                            <input type="time" name="durasi" id="text_input">
                        </li>
                        <li>
                            <p>Harga Tiket</p>
                            <input type="number" name="harga" id="text_input" required>
                        </li>
                        <li>
                            <button id="buttonTmbh">Tambah Film</button>
                            <button id="buttonRst" type="button" onclick="reset()">Reset</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    @endsection
</body>
    <script>
        function reset(){
            document.getElementById('text_input').html = "";
            document.getElementById('file_input').html = "";
        }
    </script>
    @if (Session::has('status'))
        <script>
            alert("{{Session::get('status')}}");
        </script>
    @endif
</html>
