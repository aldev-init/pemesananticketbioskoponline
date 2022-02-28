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
                        <input type="text" name="nama" id="namaInp">
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
                        <input type="text" name="judul_film" id="judulInp" value="Spiderman" disabled>
                    </tr>
                    <tr>
                        <p>Email: </p>
                        <input type="text" name="email" id="emailInp">
                    </tr>
                    <tr>
                        <p>Jam Tayang: </p>
                        <select name="jam_tayang" id="jamtayangInp">
                            <option value="" selected>-- Pilih Jam --</option>
                            <option value="09.00">09.00</option>
                            <option value="10.00">10.00</option>
                        </select>
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
    @endsection
</body>
</html>
