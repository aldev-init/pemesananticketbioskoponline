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
                @foreach ($film as $flm )
                <li>
                    <p>{{$flm->judul_film}}</p>
                    <video controls width="300" height="150" src="{{asset('storage/'.$flm->video)}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></video><br>
                    <button class="detail-button" type="button" onclick="redirect({{$flm->id}})">Lihat Detail</button>
                </li>
                @endforeach
            </ul>
        </div>
        <p>Halaman 1</p>
    </div>
    @endsection
</body>
<script>
    function redirect(id){
        window.location.href = "/film/"+id;
    }
</script>
</html>
