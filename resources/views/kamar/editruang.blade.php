@extends('master')

@section('content')

<div class="container pt-4">
    <h2>Edit Ruang {{$kamar->nama_ruang}}</h2>
    <form role="form" action="/ruang/{{$kamar->id}}/update" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama Ruang:</label>
            <input type="text" class="form-control text-capitalize" id="nama_ruang" value="{{$kamar->nama_ruang}}" placeholder="Masukkan Nama Ruang" name="nama_ruang" value="{{ old('nama_ruang', $kamar->nama_ruang) }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>

@endsection
