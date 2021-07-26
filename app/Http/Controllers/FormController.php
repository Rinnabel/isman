<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FormController extends Controller
{
    public function create() {
        return view('form.form');
    }

    public function success() {
        return view('form.form');
    }
    
    public function store(Request $request) {
        //dd($request);

        $query = DB::table('pasien')->insert([
            "nama" => $request["nama"],
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
            "tanggal_masuk" => $request["tanggal_masuk"],
            "tanggal_keluar" => $request["tanggal_keluar"],
            "asal_pengirim" => $request["asal_pengirim"],
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

        

        $query = DB::table('detailkamar')->insert ([
            "nomor" => $request["nomor"]
        ]);

        return redirect('/form/success')->with('success', 'Berhasil disimpan');
    }
}

