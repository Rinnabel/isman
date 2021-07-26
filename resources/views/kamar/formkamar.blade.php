@extends('master')

@section('content')

<div class="container pt-4">
    <h2>Data Kamar</h2>
    <form action="/kamar/form/store" class="needs-validation" novalidate method="POST">

        <div class="form-group">
            <label for="nama">Nama Kamar:</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Kamar" name="nama" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="nama">Kelas:</label>
            <input type="text" class="form-control" id="kelas" placeholder="Masukkan Kelas" name="kelas" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="nama">Ruang:</label>
            <input type="text" class="form-control" id="ruang" placeholder="Masukkan Ruang" name="ruang" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="nama">Keterangan Ruang:</label>
            <input type="text" class="form-control" id="ket_ruang" placeholder="Masukkan Nama Pasien" name="ket_ruang" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="nama">Fasilitas Kamar:</label>
            <input type="text" class="form-control" id="fasilitas" placeholder="Masukkan Fasilitas Kamar" name="fasilitas" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="nama">Keterangan:</label>
            <input type="text" class="form-control" id="keterangan" placeholder="Masukkan Keterangan" name="keterangan" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="nama">Status:</label>
            <input type="text" class="form-control" id="status" placeholder="Masukkan Status" name="status" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="form-group form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Check this checkbox to continue.</div>
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
