@extends('master')

@section('content')

<div class="container-fluid">
    <p>Cari Data Pegawai :</p>
    <form class="form-inline" action="/cari" method="GET">
        <input class="form-control mr-sm-2" name="cari" type="text" placeholder="Cari Pasien" value="{{ old('cari') }}">
        <button class="btn btn-success" type="submit">Search</button>
    </form>

    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width: 10px">No</th>
                <th>Nama Pasien</th>
                <th>NIK Pasien</th>
                <th>Ruang</th>
                <th>Kamar</th>
                <th style="width: 150px">Edit Data</th>
                <th style="width: 150px">Detail Data</th>
                <th style="width: 150px">Delete Data</th>
            </tr>
        </thead>
        <tbody>
            @forelse($listpasien as $key => $listpasien)
            <tr>
                <td> {{ $key + 1 }} </td>
                <td> {{ $listpasien->nama_pasien}} </td>
                <td> {{ $listpasien->pasien_nik}} </td>
                <td> {{ $listpasien->nama_ruang}} </td>
                <td> {{ $listpasien->nama}} </td>

                <td>
                    <a class="btn btn-info btn-sm" href="/listpasien/{{$listpasien->pasien_nik}}/edit">Edit</a>
                </td>
                <td>
                    <a class="btn btn-info btn-sm" href="/listpasien/{{$listpasien->pasien_nik}}">Show</a>
                </td>
                <td>
                  <form action="/listpasien/{{$listpasien->pasien_nik}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                </form>
              </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" align="center">Belum ada Data</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
