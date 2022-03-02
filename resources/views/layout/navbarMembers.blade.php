{{-- Here it is parent code html for child --}}
{{-- inheritance concept --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/navbarmembersCss.css')}}">
    <title>@yield('judul') | LayarKacaKinclong-22</title>
</head>
<body>
    <nav>
        <div id="navbar">
            <h4>LayarKacaKinclong-22</h4>
            <p>Pesan Tiket Film Dengan Mudah Dan Cepat</p>
        </div>
    </nav>
    <nav>
        <div id="subnavbar">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="">Now Playing</a></li>
                <li><a href="">Coming Soon</a></li>
                <li><a href="">Theater</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Help</a></li>
                @if (Auth::check())
                <li><a style="margin-left: 400px; color: #3498db">WELCOME {{strtoupper(Auth::user()->nama_lengkap)}}</a></li>
                @endif
            </ul>
        </div>
    </nav>
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
    @if (!Auth::check())
    <div id="formlogin">
        <form action="/login" method="post">
            @csrf
            <div id="title">
                <h2>Form Login Costumer</h2>
            </div>
            <div id="bodylogin">
                <table>
                    <tr>
                        {{-- <p>Username: </p> --}}
                        <input type="text" name="username" id="usernameInpLg" placeholder="Username*" required><br>
                    </tr>
                    <tr>
                        {{-- <p>Password: </p> --}}
                        <input type="password" name="password" id="passwordInpLg" placeholder="Password*" required><br>
                    </tr>
                    <tr>
                        <button id="buttonLg">Login</button>
                        <button type="button" id="buttonBt" onclick="batal()">Batal</button>
                        {{-- <a href=""></a> --}}
                    </tr>
                </table>
            </div>
        </form>
    </div>
    @else
    <div id="formlogin">
        <form action="/logout" method="post">
            @csrf
            <div id="title">
                <h2>Menu Member</h2>
            </div>
            <div id="bodylogin">
                <table>
                    <tr>
                        <p class="text-auth">Selamat Datang</p>
                        <p class="text-auth">{{Auth::user()->nama_lengkap}}</p>
                    </tr>
                    <tr>
                        <a href="" id="menu-link-btn">Laporan Pemesanan</a><br>
                    </tr>
                    <tr>
                        <a href="" id="menu-link-btn">Kelola Profile</a><br>
                    </tr>
                    <tr>
                        <a href="" id="menu-link-btn">Ganti Password</a><br>
                    </tr>
                    <tr>
                        <a href="/logout" id="menu-link-btn">Logout</a><br>
                    </tr>
                </table>
            </div>
        </form>
    </div>
    @endif
    {{-- untuk kondisi responsive movie menu,karena login terlalu panjang kebawah --}}
    @if (Auth::check())
    <div id="movie" style="transform: translate(0px,490px);">
        <div id="titlemovie">
            <h2>New Movie Trailer</h2>
        </div>
        <div id="bodymovie">
            <p>Spiderman Bocil Kematian Coming</p>
            <video width="100%" height="250px" autoplay controls muted id="videomovie" loop>
                <source src="{{asset('video/spiderman windah.mp4')}}" type="video/mp4">
            </video>
        </div>
    </div>
    @else
    <div id="movie" style="transform: translate(0px,320px);">
        <div id="titlemovie">
            <h2>New Movie Trailer</h2>
        </div>
        <div id="bodymovie">
            <p>Spiderman Bocil Kematian Coming</p>
            <video width="100%" height="250px" autoplay controls muted id="videomovie" loop>
                <source src="{{asset('video/spiderman windah.mp4')}}" type="video/mp4">
            </video>
        </div>
    </div>
    @endif

    <div id="content">
        @yield('body')
    </div>
</body>
<script>
    function batal(){
        document.getElementById('usernameInpLg').value = "";
        document.getElementById('passwordInpLg').value = "";
    }
</script>
</html>

