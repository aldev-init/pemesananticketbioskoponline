@extends('layout.navbarAdmin')
@section('judul','Kelola Kategori')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/kelolakategori.css')}}">
</head>
<body>
    @section('body')
    <div id="bodydaftar">
        <div id="judul">
            <h3>Kelola Kategori Film</h3>
        </div>
        <div id="daftar">
            <button id="buttonTmbh" type="button" onclick="redirect()">Tambah Kategori</button>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Kategori</th>
                    <th>Action</th>
                </tr>
                {{-- ----- --}}
                @foreach ($kategori as $ktg )
                <tr>
                    <td>{{$ktg->id}}</td>
                    <td>{{$ktg->kategori}}</td>
                    <td><a href="/editkategori/{{$ktg->id}}">Edit</a> | <a href="/hapuskategori/{{$ktg->id}}">Hapus</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    @endsection
</body>
<script>
    function redirect(){
        window.location.href = "/tambahkategori";
    }
</script>
@if (Session::has('status'))
    <script>
        alert('{{Session::get("status")}}');
    </script>
@endif
</html>
