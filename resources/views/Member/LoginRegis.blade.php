@extends('layout.navbarMembers')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/loginmember.css')}}">
    <title>Login & Register | Layar Kaca Kinclong</title>
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
    <div id="formregis">
        <form action="" method="post">
            @csrf
            <div id="titlereg">
                <h2>Form Registrasi Costumer</h2>
            </div>
            <div id="bodyreg">
                <p>*Silahkan mengisi formulir pendaftaran jika anda tidak punya akun</p>
                <table>
                    <tr>
                        <p>Nama Lengkap: </p>
                        <input type="text" name="nama" id="namaInp">
                    </tr>
                    <tr>
                        <p>Username: </p>
                        <input type="text" name="username" id="usernameInp">
                    </tr>
                    <tr>
                        <p>Password: </p>
                        <input type="text" name="password" id="passwordInp">
                    </tr>
                    <tr>
                        <p>Email: </p>
                        <input type="text" name="email" id="emailInp">
                    </tr>
                    <tr>
                        <p>No Telepon: </p>
                        <input type="text" name="no_telp" id="notelpInp">
                    </tr>
                    <tr>
                        <p>Alamat Lengkap: </p>
                        <textarea name="alamat_lengkap" id="alamatlengkapInp" cols="40" rows="10"></textarea><br>
                    </tr>
                    <tr >
                        <button class="button">Mendaftar</button>
                        <button>Batal</button>
                    </tr>
                </table>
            </div>
        </form>
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
