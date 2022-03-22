@extends('layout.navbarMembers')
@section('judul','Pemesanan Tiket')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/pemesanantiket.css')}}">
</head>
<body>
    @section('body')
    <div id="bodypemesanan">
        <form action="">
            <div id="titlepes">
                <h2>Form Pemesanan Tiket</h2>
            </div>
            <div id="bodyreg">
                <table>
                    <tr>
                        <p>Nama Lengkap: </p>
                        <input type="text" name="nama" id="namaInp" value="{{Auth::user()->nama_lengkap}}">
                    </tr>
                    <tr>
                        <p>Studio: </p>
                        <input type="radio" name="studio" id="studioInp">Studio1
                        <input type="radio" name="studio" id="studioInp">Studio2
                        <input type="radio" name="studio" id="studioInp">Studio3
                        <input type="radio" name="studio" id="studioInp">Studio4
                    </tr>
                    <tr>
                        <p>Judul Film: </p>
                        <select name="film" id="judulfilmInp">
                            @foreach ($filmall as $flmall )
                            <option value="{{$flmall}}" {{($flmall->id == $film->id ? 'selected' : '')}}>{{$flmall->judul_film}}</option>
                            @endforeach
                        </select>
                    </tr>
                    <tr>
                        <ul>
                            <li>
                                <p style="margin-left: -38px">Jam Tayang: </p>
                                <select name="jam_tayang" id="jamtayangInp">
                                    <option value="" selected>-- Pilih Jam --</option>
                                    <option value="09.00">09.00</option>
                                    <option value="10.00">10.00</option>
                                </select>
                            </li>
                            <li>
                                <p>Hari: </p>
                                <select name="hari" id="hariInp">
                                    <option value="" selected>-- Pilih Hari --</option>
                                    <option value="">Senin</option>
                                    <option value="">Selasa</option>
                                    <option value="">Rabu</option>
                                    <option value="">Kamis</option>
                                    <option value="">Jumat</option>
                                    <option value="">Sabtu</option>
                                    <option value="">Minggu</option>
                                </select>
                            </li>
                            <li>
                                <p>No.Kursi: </p>
                                <select name="no_kursi" id="kursiInp">
                                    <option value="" selected>-- Pilih No.Kursi --</option>
                                    <option value="">01</option>
                                    <option value="">02</option>
                                    <option value="">03</option>
                                    <option value="">04</option>
                                    <option value="">05</option>
                                    <option value="">06</option>
                                    <option value="">07</option>
                                </select>
                            </li>
                            <li>
                                <p style="margin-left: -38px">Jumlah Tiket: </p>
                                <input type="text" name="jumlah_tiket" id="jumlahtiketInp">
                            </li>
                            <li>
                                <p>Total Harga: </p>
                                <input type="text" name="jumlah_harga" id="jumlahharga" value="RP." disabled>   <br>
                            </li>
                        </ul>
                    </tr>
                    <tr>
                        <button class="button">Pesan Tiket</button>
                        <button class="button">Beli Tiket</button>
                        <button class="button" type="button" onclick="exit()">Keluar</button>
                    </tr>
                    <tr>
                        <div id="displayjamtayang">
                            <textarea name="displayjamtayang" id="" cols="25" rows="10">
                                Detail Ticket

                                Senin-Kamis: RP.30.000
                                Jumat: RP.40.000
                                Sabtu: RP.50.000
                                Minggu: RP.60.000
                            </textarea>
                        </div>
                    </tr>
                    <tr>
                        <table>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Studio</th>
                                <th>Judul</th>
                                <th>Jam</th>
                                <th>Hari</th>
                                <th>No.Kursi</th>
                                <th>Jumlah Tiket</th>
                                <th>Total Harga</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Muhammad Alghifari</td>
                                <td>Studio 64</td>
                                <td>Spiderman Bocil Kematian Coming</td>
                                <td>12.00</td>
                                <td>Senin</td>
                                <td>04</td>
                                <td>1</td>
                                <td>30.000</td>
                            </tr>
                            {{-- <tr>
                                <td>1</td>
                                <td>Muhammad Alghifari</td>
                                <td>Studio 64</td>
                                <td>Spiderman Bocil Kematian Coming</td>
                                <td>12.00</td>
                                <td>Senin</td>
                                <td>04</td>
                                <td>1</td>
                                <td>30.000</td>
                            </tr> --}}
                        </table>
                    </tr>
                    <tr>
                        <button id="button-end" class="button-end">Verifikasi</button>
                        <button class="button-end-h">Hapus</button>
                    </tr>
                </table>
            </div>

        </form>
    </div>
    @endsection
</body>
<script>
    function exit(){
        window.location.href = "/";
    }
</script>
</html>
