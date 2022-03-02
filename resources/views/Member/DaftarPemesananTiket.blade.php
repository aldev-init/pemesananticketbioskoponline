@extends('layout.navbarMembers')
@section('judul','Daftar Pemesanan Ticket')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/daftarpemesananticket.css')}}">
</head>
<body>
    @section('body')
        <div id="container">
            <div id="judulcontent">
                <h3>Daftar Pemesanan Ticket Oleh: {{Auth::user()->nama_lengkap}}</h3>
            </div>
            <div id="bodycontent">
                <table >
                    <tr>
                        <th>Judul Film</th>
                        <th>Jadwal Tayang</th>
                        <th>Bangku</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    {{-- body --}}
                    <tr>
                        <td>Spiderman,This Is My Home</td>
                        <td>26/05/2020</td>
                        <td>A1</td>
                        <td>Belum Dibayar</td>
                        <td><button href="">Detail</button>  | <button href="">Cetak</button></td>
                    </tr>
                    <tr>
                        <td>Spiderman,This Is My Wife</td>
                        <td>12/05/2020</td>
                        <td>A12</td>
                        <td>Belum Dibayar</td>
                        <td><button href="">Detail</button>  | <button href="">Cetak</button></td>
                    </tr>
                    <tr>
                        <td>Spiderman,This Is My Verse</td>
                        <td>08/05/2020</td>
                        <td>A3</td>
                        <td>Belum Dibayar</td>
                        <td><button href="">Detail</button>  | <button href="">Cetak</button></td>
                    </tr>
                </table>
            </div>
            <p>Halaman 1</p>
        </div>
    @endsection
</body>
</html>
