@extends('layout.navbarMembers')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/loginmember.css')}}">
</head>
<body>
    @section('body')
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
    @endsection
</body>
</html>
