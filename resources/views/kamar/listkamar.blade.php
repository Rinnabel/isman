@extends('master')

@section('content')

<div class="container pt-4" style="margin-top:50px">
  <h2>List Kamar</h2>
  <br>
    <table class="table table-bordered">
        <thead>                  
          <tr>
            <th style="width: 10px">No</th>
            <th>Nama Ruang</th>
            <th>Nama Kamar</th>
            <th style="width: 150px">Edit Kamar</th>
            <th style="width: 150px">Delete Kamar</th>
          </tr>
        </thead>
        <tbody>
          @forelse($listkamar as $key => $listkamar)
            <tr>
              <td> {{ $key + 1 }} </td>
              <td> {{ $listkamar->nama_ruang}} </td>
              <td> {{ $listkamar->nama}}</td>
              <td>
                <a class="btn btn-info btn-sm" href="">Edit</a>
              </td>
              <td>
                <form action="/kamar/list/{{$listkamar->id}}" method="POST">
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