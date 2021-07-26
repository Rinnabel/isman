<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class KamarController extends Controller
{
    //ruang
    public function formruang() {
        return view('kamar.formruang');
    }
    public function storeruang(Request $request) {
        $query = DB::table('kamar')->insert ([
            "nama_ruang" => $request["nama_ruang"]
        ]);
        return redirect('ruang/form/success')->with('success', 'Berhasil disimpan');
    }
    public function success() {
        return view('kamar.formruang');
    }
    public function listruang() {
        $listruang = DB::table('kamar')->get();
        return view('kamar.listruang', compact('listruang'));
    }


    //kamar
    public function formkamar() {
        return view('kamar.formkamar');
    }
}
