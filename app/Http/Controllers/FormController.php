<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FormController extends Controller
{
    public function create() {
        $kamar = DB::table('kamar')->pluck("nama_ruang","id");
        return view('form.form', compact('kamar'));
        //return view('master');
    }

    public function getKamar($id) {
        echo json_encode(DB::table('detailkamar')->where('kamar_id', $id)->get());
    }
    
    public function store(Request $request) {
        //dd($request);

        $query = DB::table('pasien')->insert([
            "nama_pasien" => $request["nama_pasien"],
            "tempat_lahir" => $request["tempat_lahir"],
            "tanggal_lahir" => $request["tanggal_lahir"],
            "nik" => $request["nik"],
            "jenis_kelamin" => $request["jenis_kelamin"],
            "alamat" => $request["alamat"],
            "no_hp" => $request["no_hp"],
            "golongan_darah" => $request["golongan_darah"],
            "no_hp_keluarga" => $request["no_hp_keluarga"]
        ]);

        $query = DB::table('register')->insert ([
            "pasien_nik" => $request["nik"],
            "tanggal_masuk" => $request["tanggal_masuk"],
            "tanggal_keluar" => $request["tanggal_keluar"],
            "asal_pengirim" => $request["asal_pengirim"],
            "detailkamar_id" => $request["detailkamar"],
            "status_tes" =>$request["status_tes"],
            "status" =>$request["status"],
            "tanggal_tes" =>$request["tanggal_tes"],
            "tanggal_swab1" =>$request["tanggal_swab1"],
            "hasil_swab1" =>$request["hasil_swab1"],
            "tanggal_swab2" =>$request["tanggal_swab2"],
            "hasil_swab2" =>$request["hasil_swab2"],
            "tanggal_swab3" =>$request["tanggal_swab3"],
            "hasil_swab3" =>$request["hasil_swab3"],
            "tanggal_swab4" =>$request["tanggal_swab4"],
            "hasil_swab4" =>$request["hasil_swab4"],
        ]);

        return redirect('/form/success')->with('success', 'Berhasil disimpan');
    }

    public function listpasien() {
        $listpasien = DB::table('register')
            ->join('pasien', 'pasien.nik', '=', 'register.pasien_nik')
            ->join('detailkamar', 'detailkamar.id', '=', 'register.detailkamar_id')
            ->join('kamar', 'kamar.id', '=', 'detailkamar.kamar_id')
            ->select('pasien.nama_pasien', 'register.pasien_nik', 'kamar.nama_ruang', 'detailkamar.nama')
            ->get();
        
        return view('form.indexform', compact('listpasien'));
    }

    public function cari(Request $request) {
        $cari = $request->cari;
        $listpasien = DB::table('register')
            ->join('pasien', 'pasien.nik', '=', 'register.pasien_nik')
            ->join('detailkamar', 'detailkamar.id', '=', 'register.detailkamar_id')
            ->join('kamar', 'kamar.id', '=', 'detailkamar.kamar_id')
            ->select('pasien.nama_pasien', 'register.pasien_nik', 'kamar.nama_ruang', 'detailkamar.nama')
            ->where('nama_pasien','like',"%".$cari."%")
            ->paginate();

        return view('form.indexform', compact('listpasien'));
    }

    public function show($pasien_nik) {
        $listpasien = DB::table('register')
            ->join('pasien', 'pasien.nik', '=', 'register.pasien_nik')
            ->join('detailkamar', 'detailkamar.id', '=', 'register.detailkamar_id')
            ->join('kamar', 'kamar.id', '=', 'detailkamar.kamar_id')
            ->select('pasien.*', 'register.*', 'kamar.nama_ruang', 'detailkamar.nama')
            ->where('pasien_nik', $pasien_nik)->first();
        
        return view('form.show', compact('listpasien'));
    }

    
    public function delete($nik){
        $query = DB::table('register')->where('pasien_nik', $nik)->delete();
        $query1 = DB::table('pasien')->where('nik', $nik)->delete();
        
        return redirect('/');
    }

    public function edit($pasien_nik) {
        $kamar = DB::table('kamar')->pluck("nama_ruang","id");
        $listpasien = DB::table('register')
            ->join('pasien', 'pasien.nik', '=', 'register.pasien_nik')
            ->join('detailkamar', 'detailkamar.id', '=', 'register.detailkamar_id')
            ->join('kamar', 'kamar.id', '=', 'detailkamar.kamar_id')
            ->select('pasien.*', 'register.*', 'kamar.nama_ruang', 'detailkamar.nama')
            ->where('pasien_nik', $pasien_nik)->first();
        
        return view('form.edit', compact('listpasien', 'kamar'));
    }
    public function update($pasien_nik, Request $request) {
        $query = DB::table('pasien')
        ->where('nik', $pasien_nik)
        ->update([
            "nama_pasien" => $request["nama_pasien"],
            "tempat_lahir" => $request["tempat_lahir"],
            "tanggal_lahir" => $request["tanggal_lahir"],
            "nik" => $request["nik"],
            "jenis_kelamin" => $request["jenis_kelamin"],
            "alamat" => $request["alamat"],
            "no_hp" => $request["no_hp"],
            "golongan_darah" => $request["golongan_darah"],
            "no_hp_keluarga" => $request["no_hp_keluarga"]
        ]);

        $query = DB::table('register')
        ->where('pasien_nik', $pasien_nik)
        ->update([
            "pasien_nik" => $request["nik"],
            "tanggal_masuk" => $request["tanggal_masuk"],
            "tanggal_keluar" => $request["tanggal_keluar"],
            "asal_pengirim" => $request["asal_pengirim"],
            "detailkamar_id" => $request["detailkamar"],
            "status_tes" =>$request["status_tes"],
            "status" =>$request["status"],
            "tanggal_tes" =>$request["tanggal_tes"],
            "tanggal_swab1" =>$request["tanggal_swab1"],
            "hasil_swab1" =>$request["hasil_swab1"],
            "tanggal_swab2" =>$request["tanggal_swab2"],
            "hasil_swab2" =>$request["hasil_swab2"],
            "tanggal_swab3" =>$request["tanggal_swab3"],
            "hasil_swab3" =>$request["hasil_swab3"],
            "tanggal_swab4" =>$request["tanggal_swab4"],
            "hasil_swab4" =>$request["hasil_swab4"],
        ]);

        return redirect('/');
    }
}



