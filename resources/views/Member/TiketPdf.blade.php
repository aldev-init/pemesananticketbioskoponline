<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="{{asset('css/tiketpdf.css')}}"> --}}
    <title>Document</title>
    <style>
        html{
        margin: 0px 0px 0px 0px ;
        }
        /* #navbar{
            background-color: #187c9e;
            color: #2d3436;
            font-family: 'Open Sans', sans-serif;
            font-size: 20px;
            font-weight: bold;
            padding: 30px;
            width: auto;
            margin: 0px 0px 0px 0px;
        } */
        #navbar h4{
            font-size: 30px;
            margin: -10px 0px 0px 5px;
        }
        #navbar p{
            margin: 0px 0px 0px 5px;
            font-size: small;
        }

        .table{
            margin: 0px 0px 0px 0px ;
            background-color: #34495e;
            width: 96%;
            padding: 20px;
        }

        .table #title-text{
            text-align: center;
            color: white;
            font-size: 30px;
        }
        .table ul{
            margin: -1px 0px 0px 0px;
        }
        .table ul li{
            list-style-type: none;
        }

        .title-content{
            font-size: 25px;
            color: white;
        }

        .text-content{
            color: white;
            font-size: 20px;
        }

    </style>
</head>
<body>
    {{-- <nav>
        <div id="navbar">
            <h4>LayarKacaKinclong-22</h4>
            <p>Pesan Tiket Film Dengan Mudah Dan Cepat</p>
        </div>
    </nav> --}}
    <div class="table">
        <div class="title">
            <p id="title-text">Tiket</p>
        </div>
        <div class="content">
            <ul>
                <li>
                    <p class="title-content">Judul Film</p>
                    <p class="text-content">{{$data->Film->judul_film}}</p>
                </li>
                <li>
                    <p class="title-content">Jumlah Tiket</p>
                    <p class="text-content">{{$data->jumlah_tiket}}</p>
                </li>
                <li>
                    <p class="title-content">No Kursi</p>
                    <p class="text-content">{{$data->no_kursi}}</p>
                </li>
                <li>
                    <p class="title-content">Nama</p>
                    <p class="text-content">{{$data->nama}}</p>
                </li>
                <li>
                    <p class="title-content">Studio</p>
                    <p class="text-content">{{$data->Studio->studio}}</p>
                </li>
                <li>
                    <p class="title-content">Hari</p>
                    <p class="text-content">{{$data->hari}}</p>
                </li>
                <li>
                    <p class="title-content">Jam</p>
                    <p class="text-content">{{$data->Jadwal->jam_tayang}}</p>
                </li>
                <li>
                    <p class="title-content">Total Harga</p>
                    <p class="text-content">RP.{{$data->total_harga}}</p>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>
