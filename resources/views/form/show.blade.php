@extends('master')

@section('content')

<div class="container-fluid">
    <h4>Data Pasien {{$listpasien->nama_pasien}}</h4>
</div>
<br>
<div class="col-sm-6">
    <table class="table table-bordered">
        <tbody>
            <tr>
                <td>Nama Pasien</td>
                <td class="text-capitalize">{{$listpasien->nama_pasien}}</td>
            </tr>
            <tr>
                <td>NIK Pasien</td>
                <td>{{$listpasien->nik}}</td>
            </tr>
            <tr>
                <td>Tempat/Tanggal Lahir</td>
                <td class="text-capitalize">{{$listpasien->tempat_lahir}}, {{$listpasien->tanggal_lahir}}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>{{$listpasien->jenis_kelamin}}</td>
            </tr>
            <tr>
                <td>Golongan Darah</td>
                <td class="text-uppercase">{{$listpasien->golongan_darah}}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td class="text-capitalize">{{$listpasien->alamat}}</td>
            </tr>
            <tr>
                <td>No HP Pasien</td>
                <td>{{$listpasien->no_hp}}</td>
            </tr>
            <tr>
                <td>No HP Keluarga Pasien</td>
                <td>{{$listpasien->no_hp_keluarga}}</td>
            </tr>
            <tr>
                <td>Status Tes</td>
                <td class="text-uppercase">{{$listpasien->status_tes}}, {{$listpasien->status}}</td>
            </tr>
            <tr>
                <td>Tanggal Tes {{$listpasien->status_tes}}</td>
                <td>{{$listpasien->tanggal_tes}}</td>
            </tr>
            <tr>
                <td>Tanggal Masuk</td>
                <td>{{$listpasien->tanggal_masuk}}</td>
            </tr>
            <tr>
                <td>Tanggal Keluar</td>
                <td>{{$listpasien->tanggal_keluar}}</td>
            </tr>
            <tr>
                <td>Asal Pengirim</td>
                <td class="text-uppercase">{{$listpasien->asal_pengirim}}</td>
            </tr>
            <tr>
                <td>Ruang dan Kamar</td>
                <td class="text-uppercase">Ruang {{$listpasien->nama_ruang}}, Kamar {{$listpasien->nama}}</td>
            </tr>
            <tr>
                <td>Tanggal dan Hasil SWAB 1</td>
                <td class="text-uppercase">{{$listpasien->tanggal_swab1}} = {{$listpasien->hasil_swab1}}</td>
            </tr>
            <tr>
                <td>Tanggal dan Hasil SWAB 2</td>
                <td class="text-uppercase">{{$listpasien->tanggal_swab2}} = {{$listpasien->hasil_swab2}}</td>
            </tr>
            <tr>
                <td>Tanggal dan Hasil SWAB 3</td>
                <td class="text-uppercase">{{$listpasien->tanggal_swab3}} = {{$listpasien->hasil_swab3}}</td>
            </tr>
            <tr>
                <td>Tanggal dan Hasil SWAB 4</td>
                <td class="text-uppercase">{{$listpasien->tanggal_swab4}} = {{$listpasien->hasil_swab4}}</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
