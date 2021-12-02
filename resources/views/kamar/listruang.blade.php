@extends('master')

@section('content')

<div class="container pt-4" style="margin-top:50px">
  <h2>List Ruang</h2>
  <br>  
  <table class="table table-bordered">
        <thead>                  
          <tr>
            <th style="width: 10px">No</th>
            <th>Nama Ruang</th>
            <th style="width: 150px">Edit Ruang</th>
          </tr>
        </thead>
        <tbody>
          @forelse($listruang as $key => $listruang)
            <tr>
              <td> {{ $key + 1 }} </td>
              <td> {{ $listruang->nama_ruang }} </td>
              <td>
                <a class="btn btn-info btn-sm" href="/ruang/{{$listruang->id}}/edit">Edit</a>
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