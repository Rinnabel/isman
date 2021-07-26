@extends('master')

@section('content')

<div class="container">
    <table class="table table-bordered">
        <thead>                  
          <tr>
            <th style="width: 10px">No</th>
            <th>Nama Ruang</th>
            <th style="width: 40px">Action</th>
          </tr>
        </thead>
        <tbody>
          @forelse($listruang as $key => $listruang)
            <tr>
              <td> {{ $key + 1 }} </td>
              <td> {{ $listruang->nama_ruang }} </td>
              <td>
                <a class="btn btn-info btn-sm" href="/pertanyaan/{{$listruang->id}}">Show</a>
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