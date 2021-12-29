@extends('master')

@section('content')

<div class="container pt-4">
    <h2>Data Kamar</h2>
    <form action="/ruang/form/store" class="needs-validation" novalidate method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Ruang:</label>
            <input type="text" class="form-control" id="nama_ruang" placeholder="Masukkan Nama Ruang" name="nama_ruang" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
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