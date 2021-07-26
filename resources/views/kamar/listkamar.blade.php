@extends('master')

@section('content')

<div class="container">
    <table class="table table-bordered">
        <thead>                  
          <tr>
            <th style="width: 10px">No</th>
            <th>Judul</th>
            <th>Isi</th>
            <th style="width: 40px">Action</th>
          </tr>
        </thead>
        <tbody>
          @forelse($pertanyaan as $key => $pertanyaan)
            <tr>
              <td> {{ $key + 1 }} </td>
              <td> {{ $pertanyaan->judul }} </td>
              <td> {{ $pertanyaan->isi }} </td>
              <td>
                <a class="btn btn-info btn-sm" href="/pertanyaan/{{$pertanyaan->id}}">Show</a>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="4" align="center">Tak ada pertanyaan nih</td>
            </tr>
          @endforelse
        </tbody>
      </table>
</div>