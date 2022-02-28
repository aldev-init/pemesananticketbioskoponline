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
                <li>
                    <p>Spiderman This Is My Home</p>
                    <video width="100%" height="150px" controls>
                        <source src="{{asset('video/spiderman windah.mp4')}}" type="">
                    </video><br>
                    <button>Lihat Detail</button>
                </li>
                <li>
                    <p>Spiderman Windah Parker</p>
                    <video width="100%" height="150px" controls>
                        <source src="{{asset('video/windah.mp4')}}" type="">
                    </video><br>
                    <button>Lihat Detail</button>
                </li>
                <li>
                    <p>Spiderman Windah Parker</p>
                    <video width="100%" height="150px" controls>
                        <source src="{{asset('video/windah.mp4')}}" type="">
                    </video><br>
                    <button>Lihat Detail</button>
                </li>
                <li>
                    <p>Spiderman This Is My Home</p>
                    <video width="100%" height="150px" controls>
                        <source src="{{asset('video/spiderman windah.mp4')}}" type="">
                    </video><br>
                    <button>Lihat Detail</button>
                </li>
            </ul>
        </div>
        <p>Halaman 1</p>
    </div>
    @endsection
</body>
</html>
