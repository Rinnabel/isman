@extends('master')

@section('content')

<div class="container pt-4">
    <h2>Data Pasien Baru</h2>
    <form action="/form/store" class="needs-validation" novalidate method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Pasien:</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Pasien" name="nama" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="ttl">Tempat/Tanggal Lahir:</label>
            <div class="form-inline">
                <input type="text" class="form-control col-sm-3" id="tempat_lahir" placeholder="Tempat Lahir" name="tempat_lahir" required>
                <input type="date" class="form-control col-sm-3 ml-1" id="tanggal_lahir" placeholder="Tanggal Tes" name="tanggal_lahir" required>
            </div>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <!--
        <div class="form-group">
            <label for="umur">Umur:</label>
            <input type="number" class="form-control" id="umur" placeholder="Masukkan Umur Pasien" name="umur" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div> -->
        <div class="form-group">
            <label for="nik">NIK:</label>
            <input type="number" class="form-control" id="nik" placeholder="Masukkan NIK Pasien" name="nik" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat Pasien" name="alamat"
                required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class='form-group mb-3'>
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select name="jenis_kelamin" class="form-control" required>
                <option value="">Pilih Jenis Kelamin</option>
                <option value="laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="no_hp">Nomor HP:</label>
            <input type="number" class="form-control" id="no_hp" placeholder="Masukkan Nomor HP Pasien" name="no_hp" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class='form-group'>
            <label for="golongan_darah">Golongan Darah:</label>
            <select name="golongan_darah" class="form-control" required>
                <option value="">Pilih Golongan Darah</option>
                <option value="a">A</option>
                <option value="b">B</option>
                <option value="o">O</option>
                <option value="ab">AB</option>
            </select>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="no_hp_keluarga">Nomor HP Keluarga:</label>
            <input type="number" class="form-control" id="no_hp_keluarga" placeholder="Masukkan Nomor HP Keluarga" name="no_hp_keluarga" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class='form-group'>
            <label for="kamar">No Kamar:</label>
            <div class="form-inline">
                <select name="nama_ruang" class="custom-select form-control col-sm-3" required>
                    <option value="">Nama Ruang</option>
                    <option value="wk1">WK 1</option>
                    <option value="wk2">WK 2</option>
                    <option value="wk3">WK 3</option>
                    <option value="wk4">WK 4</option>
                </select>
                <select name="nomor" class="custom-select form-control col-sm-3 ml-1" required>
                    <option value="">Nomor Kamar</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="vvip1">VVIP1</option>
                </select>
            </div>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="statustes">Status Tes Rapid/Tes PCR:</label>
            <div class="form-inline">
                <select name="status_tes" class="custom-select form-control col-sm-3" required>
                    <option value="">Tes Rapid/PCR</option>
                    <option value="positif">Rapid</option>
                    <option value="negatif">PCR</option>
                </select>
                <select name="status" class="custom-select form-control col-sm-3" required>
                    <option value="">Status Tes</option>
                    <option value="positif">positif</option>
                    <option value="negatif">negatif</option>
                </select>
            </div>
            <div>
                <input type="date" class="form-control col-sm-3 ml-1" id="tanggal_tes" placeholder="Tanggal Tes" name="tanggal_tes" required>
            </div>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="tanggal_masuk">Tanggal dan Jam Masuk:</label>
            <input type="date" class="form-control col-sm-3" id="tanggal_masuk" name="tanggal_masuk" required>
            <label for="tanggal_keluar">Tanggal dan Jam Keluar:</label>
            <input type="date" class="form-control col-sm-3" id="tanggal_keluar" name="tanggal_keluar" required>
        </div>
        <div class="form-group">
            <label for="asal_pengirim">Asal atau Pengirim:</label>
            <input type="text" class="form-control" id="asal_pengirim" placeholder="Rumah Sakit atau Puskesmas" name="asal_pengirim" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="ket">Keterangan:</label>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="ket">PULANG
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="ket">OPNAME
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="ket">RUJUK
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="ket">
                  <input type="text" class="form-control" id="asal" placeholder="Lainnya" name="asal">
                </label>
              </div>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="stay">Lama Stay:</label>
            <input type="number" class="form-control" id="stay" name="stay" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="swab">Jadwal dan Hasil Swab:</label>
            <div class="form-inline">
                <select name="hasil_swab1" class="form-control" required>
                    <option value="">Hasil Swab 1</option>
                    <option value="negatif">Negatif</option>
                    <option value="positif">Positif</option>
                </select>
                <input type="date" class="form-control col-sm-3 ml-1" id="tanggal_swab1" name="tanggal_swab1" required>
            </div>
            <div class="form-inline">
                <select name="hasil_swab2" class="form-control" required>
                    <option value="">Hasil Swab 2</option>
                    <option value="negatif">Negatif</option>
                    <option value="positif">Positif</option>
                </select>
                <input type="date" class="form-control col-sm-3 ml-1" id="tanggal_swab2" name="tanggal_swab2" required>
            </div>
            <div class="form-inline">
                <select name="hasil_swab3" class="form-control" required>
                    <option value="">Hasil Swab 2</option>
                    <option value="negatif">Negatif</option>
                    <option value="positif">Positif</option>
                </select>
                <input type="date" class="form-control col-sm-3 ml-1" id="tanggal_swab3" name="tanggal_swab3" required>
            </div>
            <div class="form-inline">
                <select name="hasil_swab4" class="form-control" required>
                    <option value="">Hasil Swab 2</option>
                    <option value="negatif">Negatif</option>
                    <option value="positif">Positif</option>
                </select>
                <input type="date" class="form-control col-sm-3 ml-1" id="tanggal_swab4" name="tanggal_swab4" required>
            </div>
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
