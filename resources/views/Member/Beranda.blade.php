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
            @foreach ($film as $flm )
            <tr>
                <div id="judulfilm">
                    <h3>{{$flm->judul_film}}</h3>
                </div>
                <a href="/film/{{$flm->id}}">
                    <img width="185px" height="278px" src="{{asset('storage/'.$flm->gambar)}}" alt="">
                </a>
                <div id="infofilm">
                    <p>Judul Film : {{$flm->judul_film}}</p>
                    <p>Kategori : {{$flm->Kategori->kategori}}</p>
                    <p>Produser : {{$flm->produser}}</p>
                    <p>Produksi : {{$flm->produksi}}</p>
                    <p>Home Page : {{($flm->home_page != null ? $flm->home_page : "-")}}</p>
                    <p>Durasi : {{$flm->durasi}}</p>
                    <p>Sinopsis : {{$flm->sinopsis}}</p>
                    {{-- <div class="sinopsis">
                        <p style="overflow: hidden;">{{$flm->sinopsis}}</p>
                    </div> --}}
                </div>
            </tr>
            <hr>
            @endforeach
        </table>
        <p>Halaman 1</p>
    </div>
    @endsection
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    // $(document).ready(function(){
    //     $('.sinopsis').hide();
    //     $('#show').click(function(){
    //         $('.sinopsis').show();
    //     })
    // })
</script>
</html>
