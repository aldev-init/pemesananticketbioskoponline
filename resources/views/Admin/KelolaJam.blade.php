@extends('layout.navbarAdmin')
@section('judul','Kelola Jam')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/kelolastudio.css')}}">
</head>
<body>
    @section('body')
    <div id="bodydaftar">
        <div id="judul">
            <h3>Kelola Jam </h3>
        </div>
        <div id="daftar">
            <button id="buttonTmbh" type="button" onclick="redirect()">Tambah Jam</button>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Jam</th>
                    <th>Action</th>
                </tr>
                {{-- ----- --}}
                @foreach ($jadwal as $jdl )
                <tr>
                    <td>{{$jdl->id}}</td>
                    <td>{{$jdl->jam_tayang}}</td>
                    <td><a href="/editjam/{{$jdl->id}}">Edit</a> | <a href="/hapusjam/{{$jdl->id}}">Hapus</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    @endsection
</body>
<script>
    function redirect(){
        window.location.href = "/tambahjam";
    }
</script>
@if (Session::has('status'))
    <script>
        alert('{{Session::get("status")}}');
    </script>
@endif
</html>
