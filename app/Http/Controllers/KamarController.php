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
    public function editruang($id) {
        $kamar = DB::table('kamar')->where('id', $id)->first();

        return view('kamar.editruang', compact('kamar'));
    }

    public function updateruang($id, Request $request)
    {
        $query = DB::table('kamar')
            ->where('id', $id)
            ->update([
                "nama_ruang" => $request["nama_ruang"]
            ]);
            return redirect('ruang/list')->with('success', 'Berhasil disimpan');
    }


    //kamar
    public function formkamar() {
        $kamar = DB::table('kamar')->pluck("nama_ruang","id");
        return view('kamar.formkamar',compact('kamar'));
    }
    public function storekamar(Request $request) {
        $query = DB::table('detailkamar')->insert ([
            "kamar_id" => $request["ruang"],
            "nama" => $request["nama"]
        ]);
        return redirect('kamar/form/success');
    }
    public function listkamar() {
        $listkamar = DB::table('detailkamar')
            ->join('kamar', 'kamar.id', '=', 'detailkamar.kamar_id')
            ->select('detailkamar.*', 'kamar.nama_ruang')
            ->orderBy('nama_ruang', 'desc')
            ->orderBy('nama', 'asc')
            ->get();
        return view('kamar.listkamar', compact('listkamar'));
    }

    public function editkamar($id) {
        $kamar = DB::table('kamar')->pluck("nama_ruang","id");
        
        $detailkamar = DB::table('detailkamar')->where('id', $id)->first();

        return view('kamar.editkamar', compact('detailkamar', 'kamar'));
    }

    public function updatekamar($id, Request $request)
    {
        $query = DB::table('detailkamar')
            ->where('id', $id)
            ->update([
                "kamar_id" => $request["ruang"],
                "nama" => $request["nama"]
            ]);
            return redirect('kamar/list')->with('success', 'Berhasil disimpan');
    }

    public function deletekamar($id){
        $query = DB::table('detailkamar')->where('id', $id)->delete();
        
        return redirect('/kamar/list');
    }
}
