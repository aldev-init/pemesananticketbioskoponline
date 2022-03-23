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
                <table>
                    <tr>
                        <th>Judul Film</th>
                        <th>Jadwal Tayang</th>
                        <th>Kursi</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    {{-- body --}}
                    @foreach ($pembelian as $pbl )
                    <tr>
                        <td>{{$pbl->Film->judul_film}}</td>
                        <td>{{$pbl->hari}},{{$pbl->Jadwal->jam_tayang}}</td>
                        <td>{{$pbl->no_kursi}}</td>
                        <td>{{($pbl->status == 1 ? 'Lunas' : 'Belum Lunas')}}</td>
                        <td><button href="">Detail</button>  | <button type="button" onclick="print({{$pbl->id}})">Cetak</button></td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <p>Halaman 1</p>
        </div>
    @endsection
</body>
<script>
    function print(id) {
        window.location.href = '/tiket/'+id;
    }
</script>
</html>
