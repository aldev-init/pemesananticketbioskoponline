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
        <form action="/pemesanantiket" method="POST">
            @csrf
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
                        <div class="studio">
                            @foreach ($studio as $std )
                            <input type="radio" name="studio" id="studioInp" value="{{$std->id}}" {{($std->id == 1 ? 'required' : '')}}>{{$std->studio}}
                            @endforeach
                        </div>
                    </tr>
                    <tr>
                        <p>Judul Film: </p>
                        <select name="film" id="judulfilmInp">
                            @foreach ($filmall as $flmall )
                                @if($film != null)
                                <option value="{{$flmall->id}}" {{($flmall->id == $film->id ? 'selected' : '')}}>{{$flmall->judul_film}}</option>
                                @else
                                <option value="{{$flmall->id}}">{{$flmall->judul_film}}</option>
                                @endif
                            @endforeach
                        </select>
                    </tr>
                    <tr>
                        <ul>
                            <li>
                                <p style="margin-left: -38px">Jam Tayang: </p>
                                <select name="jam_tayang" id="jamtayangInp" required>
                                    <option value="" selected>-- Pilih Jam --</option>
                                    @foreach ($jadwal as $jdl )
                                    <option value="{{$jdl->id}}">{{$jdl->jam_tayang}}</option>
                                    @endforeach
                                </select>
                            </li>
                            <li>
                                <p>Hari: </p>
                                <select name="hari" id="hariInp" required>
                                    <option value="" selected>-- Pilih Hari --</option>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jumat">Jumat</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Minggu">Minggu</option>
                                </select>
                            </li>
                            <li>
                                <p>No.Kursi: </p>
                                <select name="no_kursi" id="kursiInp" required>
                                    <option value="" selected>-- Pilih No.Kursi --</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                </select>
                            </li>
                            <li>
                                <p style="margin-left: -38px">Jumlah Tiket: </p>
                                <input type="number" name="jumlah_tiket" id="jumlahtiketInp" required>
                            </li>
                            <li>
                                <p>Total Harga: </p>
                                <input type="text" name="total_harga" id="jumlahharga" value="RP." disabled><br>
                            </li>
                            <li>
                                <input type="hidden" name="total_harga" id="totalharga"><br>
                            </li>
                        </ul>
                    </tr>
                    <tr>
                        <button class="button" name="button" value="pesan">Pesan Tiket</button>
                        <button class="button" name="button" value="beli">Beli Tiket</button>
                    </form>
                        <button class="button" type="button" onclick="exit()">Keluar</button>
                    </tr>
                    <tr>
                        <div id="displayjamtayang">
                            <textarea name="" id="" cols="25" rows="10">
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
                            @foreach ($pemesanan as $pmsn )
                            <tr>
                                <td>{{$i=1}}</td>
                                <td>{{$pmsn->nama}}</td>
                                <td>{{$pmsn->Studio->studio}}</td>
                                <td>{{$pmsn->Film->judul_film}}</td>
                                <td>{{$pmsn->Jadwal->jam_tayang}}</td>
                                <td>{{$pmsn->hari}}</td>
                                <td>{{$pmsn->no_kursi}}</td>
                                <td>{{$pmsn->jumlah_tiket}}</td>
                                <td>{{$pmsn->total_harga}}</td>
                                {{$i++}}
                            </tr>
                            @endforeach
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
                        <form action="/hapuspemesanan" method="POST">
                            @csrf
                            <button class="button-end-h" type="submit">Hapus</button>
                        </form>
                    </tr>
                </table>
            </div>
    </div>
    @endsection
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    function exit(){
        window.location.href = "/";
    }

    //jquery system
    $(document).ready(function(){
        //jika terjadi perubahan di field jumlah tiket dan hari
        $('#hariInp,#jumlahtiketInp').change(function(){
            var harga;
            var hari = $('#hariInp').val();
            var jumlahtiket = $('#jumlahtiketInp').val();
            if(hari == "Jumat"){
                harga = 40000;
            }else if(hari == "Sabtu"){
                harga = 50000;
            }else if(hari == "Minggu"){
                harga = 60000;
            }else{
                harga = 30000;
            }
            let totalharga = harga * jumlahtiket;
            $('#jumlahharga').val("RP."+totalharga);
            $('#totalharga').val(totalharga);
        });
    });
</script>
</html>
