@extends('master')

@section('content')

<div class="container pt-4">
    <h2 class="text-capitalize">edit data pasien {{$listpasien->nama_pasien}}</h2>
    <form action="/listpasien/{{$listpasien->pasien_nik}}/update" class="needs-validation" novalidate method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_pasien">Nama Pasien:</label>
            <input type="text" class="form-control" id="nama_pasien" value="{{$listpasien->nama_pasien}}" placeholder="Masukkan Nama Pasien" name="nama_pasien" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="ttl">Tempat/Tanggal Lahir:</label>
            <div class="form-inline">
                <input type="text" class="form-control col-sm-3" id="tempat_lahir" value="{{$listpasien->tempat_lahir}}" placeholder="Tempat Lahir" name="tempat_lahir" required>
                <input type="date" class="form-control col-sm-3 ml-1" id="tanggal_lahir" value="{{$listpasien->tanggal_lahir}}" placeholder="Tanggal Tes" name="tanggal_lahir" required>
            </div>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="nik">NIK:</label>
            <input type="number" class="form-control" id="nik" value="{{$listpasien->nik}}" placeholder="Masukkan NIK Pasien" name="nik" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" class="form-control" id="alamat" value="{{$listpasien->alamat}}" placeholder="Masukkan Alamat Pasien" name="alamat"
                required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class='form-group mb-3'>
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select name="jenis_kelamin"  class="form-control" required>
                <option value="{{$listpasien->jenis_kelamin}}">Pilih Jenis Kelamin</option>
                <option value="laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="no_hp">Nomor HP:</label>
            <input type="number" class="form-control" id="no_hp" value="{{$listpasien->no_hp}}" placeholder="Masukkan Nomor HP Pasien" name="no_hp" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class='form-group'>
            <label for="golongan_darah">Golongan Darah:</label>
            <select name="golongan_darah" class="form-control" required>
                <option value="{{$listpasien->golongan_darah}}">Pilih Golongan Darah</option>
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
            <input type="number" class="form-control" id="no_hp_keluarga" value="{{$listpasien->no_hp_keluarga}}" placeholder="Masukkan Nomor HP Keluarga" name="no_hp_keluarga" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class='form-group'>
            <label for="kamar">No Kamar:</label>
            <div class="form-inline">
                <select name="kamar" id="kamar" class="custom-select form-control col-sm-3">
                    <option value="">--- Pilih Ruang ---</option>
                    @foreach ($kamar as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
                <select name="detailkamar" id="detailkamar" value="" class="custom-select form-control col-sm-3 ml-1" >
                    <!--<option value="">--- Nomor Kamar ---</option> -->
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="statustes">Status Tes Rapid/Tes PCR:</label>
            <div class="form-inline">
                <select name="status_tes" class="custom-select form-control col-sm-3" required>
                    <option value="{{$listpasien->status_tes}}">Tes Rapid/PCR</option>
                    <option value="rapid">Rapid</option>
                    <option value="pcr">PCR</option>
                </select>
                <select name="status" class="custom-select form-control col-sm-3" required>
                    <option value="{{$listpasien->status}}">Status Tes</option>
                    <option value="positif">positif</option>
                    <option value="negatif">negatif</option>
                </select>
            </div>
            <div>
                <input type="date" class="form-control col-sm-3 ml-1" id="tanggal_tes" value="{{$listpasien->tanggal_tes}}" placeholder="Tanggal Tes" name="tanggal_tes" required>
            </div>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="tanggal_masuk">Tanggal dan Jam Masuk:</label>
            <input type="date" class="form-control col-sm-3" id="tanggal_masuk" value="{{$listpasien->tanggal_masuk}}" name="tanggal_masuk" required>
            <label for="tanggal_keluar">Tanggal dan Jam Keluar:</label>
            <input type="date" class="form-control col-sm-3" id="tanggal_keluar" value="{{$listpasien->tanggal_keluar}}" name="tanggal_keluar" required>
        </div>
        <div class="form-group">
            <label for="asal_pengirim">Asal atau Pengirim:</label>
            <input type="text" class="form-control" id="asal_pengirim" value="{{$listpasien->asal_pengirim}}" placeholder="Rumah Sakit atau Puskesmas" name="asal_pengirim" required>
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
            <input type="number" class="form-control" id="stay" name="stay">
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="swab">Jadwal dan Hasil Swab:</label>
            <div class="form-inline">
                <select name="hasil_swab1" class="form-control" required>
                    <option value="{{$listpasien->hasil_swab1}}">Hasil Swab 1</option>
                    <option value="negatif">Negatif</option>
                    <option value="positif">Positif</option>
                </select>
                <input type="date" class="form-control col-sm-3 ml-1" id="tanggal_swab1" value="{{$listpasien->tanggal_swab1}}" name="tanggal_swab1" required>
            </div>
            <div class="form-inline">
                <select name="hasil_swab2" class="form-control" required>
                    <option value="{{$listpasien->hasil_swab2}}">Hasil Swab 2</option>
                    <option value="negatif">Negatif</option>
                    <option value="positif">Positif</option>
                </select>
                <input type="date" class="form-control col-sm-3 ml-1" id="tanggal_swab2" value="{{$listpasien->tanggal_swab2}}" name="tanggal_swab2" required>
            </div>
            <div class="form-inline">
                <select name="hasil_swab3" class="form-control" required>
                    <option value="{{$listpasien->hasil_swab3}}">Hasil Swab 3</option>
                    <option value="negatif">Negatif</option>
                    <option value="positif">Positif</option>
                </select>
                <input type="date" class="form-control col-sm-3 ml-1" id="tanggal_swab3" value="{{$listpasien->tanggal_swab3}}" name="tanggal_swab3" required>
            </div>
            <div class="form-inline">
                <select name="hasil_swab4" class="form-control" required>
                    <option value="{{$listpasien->hasil_swab4}}">Hasil Swab 4</option>
                    <option value="negatif">Negatif</option>
                    <option value="positif">Positif</option>
                </select>
                <input type="date" class="form-control col-sm-3 ml-1" id="tanggal_swab4" value="{{$listpasien->tanggal_swab4}}" name="tanggal_swab4" required>
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

    $(document).ready(function () {
                $('#kamar').on('change', function () {
                let id = $(this).val();
                $('#detailkamar').empty();
                $('#detailkamar').append(`<option value="0" disabled selected>Processing...</option>`);
                $.ajax({
                type: 'GET',
                url: '/listpasien/{{$listpasien->pasien_nik}}/edit/getkamar/' + id,
                success: function (response) {
                var response = JSON.parse(response);
                console.log(response);   
                $('#detailkamar').empty();
                $('#detailkamar').append(`<option value="0" disabled selected>Pilih Kamar</option>`);
                response.forEach(element => {
                    $('#detailkamar').append(`<option value="${element['id']}">${element['nama']}</option>`);
                    });
                }
            });
        });
    });

</script>

@endsection