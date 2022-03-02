{{-- Here it is parent code html for child --}}
{{-- inheritance concept --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/navbaradmin.css')}}">
    <title>@yield('judul') | Admin</title>
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
                <li><a href="">Manage About</a></li>
                <li><a href="">Kelola Help</a></li>
                <li><a href="">Manage Members</a></li>
                <li><a href="/logoutadmin">Logout</a></li>
                @if (Auth::guard('admin')->check())
                    <li><b><a id="welcome" href="">Hello Admin</a></b></li>
                @endif
            </ul>
        </div>
    </nav>
    <div id="sidebar">
        <div id="titlebar">
            <h3>Menu Administrator</h3>
        </div>
        <div id="bodybar">
            <ul>
                <li>
                    <div class="button">
                        <a href="">Kelola Jam</a>
                    </div>
                </li>
                <li>
                    <div class="button">
                        <a href="">Kelola Studio</a>
                    </div>
                </li>
                <li>
                    <div class="button">
                        <a href="">Kelola Kategori Film</a>
                    </div>
                </li>
                <li>
                    <div class="button">
                        <a href="/kelolafilm">Kelola Film</a>
                    </div>
                </li>
                <li>
                    <div class="button">
                        <a href="">Kelola Pemesanan</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div id="mainbody">
        @yield('body')
    </div>
</body>
</html>
