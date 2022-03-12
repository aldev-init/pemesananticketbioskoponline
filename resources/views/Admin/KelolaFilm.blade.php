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
            <button id="add-film" type="button" onclick="tambahfilm()">Tambah Film</button>
        </div>
        <div id="daftar">
            <ul>
                @foreach ($film as $flm )
                <li>
                    <p class="judulfilm">{{$flm->judul_film}}</p>
                    <video width="300" height="150" src="{{asset('storage/'.$flm->video)}}" controls></video><br>
                    <button class="detail-button">Lihat Detail</button>
                    <form action="/hapusfilm/{{$flm->id}}" method="POST">
                        @csrf
                        <button class="hapus-button">Hapus</button>
                    </form>
                </li>
                @endforeach
            </ul>
        </div>
        <p>Halaman 1</p>
    </div>
    @endsection
</body>
<script>
    function tambahfilm(){
        window.location.href = "/tambahfilm";
    }
</script>
@if (Session::has('status'))
    <script>
        alert("{{Session::get('status')}}");
    </script>
@endif
</html>
