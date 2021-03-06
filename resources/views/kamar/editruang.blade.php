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

<script>
    // Disable form submissions if there are invalid fields
    (function () {
        'use strict';
        window.addEventListener('load', function () {
            // Get the forms we want to add validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>

@endsection
