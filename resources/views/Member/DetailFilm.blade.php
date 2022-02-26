@extends('layout.navbarMembers')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/detailfilm.css')}}">
    <title>Detail Film | LayarKacaKinclong-22</title>
</head>
<body>
    @section('body')
    <div id="menufilm">
        <nav>
            <ul>
                <li>
                    <img src="{{asset('img/film/Ethernals.jpg')}}" alt="">
                </li>
                <li>
                    <img src="{{asset('img/film/BobaFeet.jpg')}}" alt="">
                </li>
                <li>
                    <img src="{{asset('img/film/Shangci.jpg')}}" alt="">
                </li>
                <li>
                    <img src="{{asset('img/film/Spiderman.jpg')}}" alt="">
                </li>
                <li>
                    <img src="{{asset('img/film/SnowPiercer.jpg')}}" alt="">
                </li>
                <li>
                    <img src="{{asset('img/film/venom.jpg')}}" alt="">
                </li>
            </ul>
        </nav>
        <hr id="line">
    </div>
    <div id="daftarfilm">
            <div id="bodydaftar">
                <div id="judulfilm">
                    <h3>Spiderman : Far From PC</h3>
                </div>
                <video width="100%"  height="100%" autoplay controls muted>
                    <source src="{{asset('video/SPIDER-MAN_ WINDAH PARKER - Official Trailer (HD).mp4')}}" type="">
                </video>
                <div id="infofilm">
                    <p>Judul Film : Far From PC</p>
                    <p>Produser : Windah Basudara</p>
                    <p>Produksi : Brand NCG</p>
                    <p>Home Page : -</p>
                    <p>Durasi : 2 Jam</p>
                    <p>Sinopsis : Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam magnam, quo delectus nulla reprehenderit placeat iusto quibusdam voluptate quasi quod? Officia sed distinctio natus a libero, repellendus veniam officiis sunt!</p>
                </div>
            </div>
    </div>
    <div id="formlogin">
        <form action="" method="post">
            @csrf
            <div id="title">
                <h2>Form Login Costumer</h2>
            </div>
            <div id="bodylogin">
                <table>
                    <tr>
                        {{-- <p>Username: </p> --}}
                        <input type="text" name="username" id="usernameInpLg" placeholder="Username"><br>
                    </tr>
                    <tr>
                        {{-- <p>Password: </p> --}}
                        <input type="text" name="password" id="passwordInpLg" placeholder="Password"><br>
                    </tr>
                    <tr>
                        <button id="buttonLg">Login</button>
                        <button>Batal</button>
                        {{-- <a href=""></a> --}}
                    </tr>
                </table>
            </div>
        </form>
    </div>
    <div id="movie">
        <div id="titlemovie">
            <h2>New Movie Trailer</h2>
        </div>
        <div id="bodymovie">
            <p>Spiderman Bocil Kematian Coming</p>
            <video width="100%" height="250px" controls autoplay muted id="videomovie" title="Spiderman No Way Bocil Kematian">
                <source src="{{asset('video/spiderman windah.mp4')}}" type="video/mp4">
            </video>
        </div>
    </div>
    @endsection
</body>
</html>
