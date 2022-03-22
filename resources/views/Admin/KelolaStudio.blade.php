@extends('layout.navbarAdmin')
@section('judul','Kelola Studio')
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
            <h3>Kelola Studio Film</h3>
        </div>
        <div id="daftar">
            <button id="buttonTmbh" type="button" onclick="redirect()">Tambah Studio</button>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Studio</th>
                    <th>Action</th>
                </tr>
                {{-- ----- --}}
                @foreach ($studio as $std )
                <tr>
                    <td>{{$std->id}}</td>
                    <td>{{$std->studio}}</td>
                    <td><a href="/editstudio/{{$std->id}}">Edit</a> | <a href="/hapusstudio/{{$std->id}}">Hapus</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    @endsection
</body>
<script>
    function redirect(){
        window.location.href = "/tambahstudio";
    }
</script>
@if (Session::has('status'))
    <script>
        alert('{{Session::get("status")}}');
    </script>
@endif
</html>
