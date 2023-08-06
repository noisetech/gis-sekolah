<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KecamatanController extends Controller
{
    public function index()
    {
        return view('pages.kecamatan.index');
    }

    public function data(Request $request)
    {
    }

    public function tambah()
    {
        return view('pages.kecamatan.tambah');
    }

    public function simpan(Request $request)
    {
        $kecamatan = DB::table('kecamatan')->insert([
            'kecamatan' => $request->kecamatan,
            'geojson' => $request->geojson
        ]);

        if ($kecamatan) {
            return response()->json([
                'status' => 'success',
                'title' => 'Berhasil',
                'message' => 'Data ditambah'
            ]);
        }
    }

    public function edit($id)
    {
        $kecamatan = DB::table('kecamatan')->where('id', $id)->first();

        return view('pages.kecamatan.edit', [
            'kecamatan' => $kecamatan
        ]);
    }


    public function update(Request $request)
    {
        $kecamatan = DB::table('kecamatan')->where('id')
            ->update([
                'kecamatan' => $request->kecamatan,
                'gejson' => $request->geojson
            ]);

        if ($kecamatan) {
            return response()->json([
                'status' => 'success',
                'title' => 'Berhasil',
                'mesage' => 'Data diubah'
            ]);
        }
    }

    public function hapus(Request $request)
    {
        $kecamatan = DB::table('kecamatan')->where('id', $request->id)->delete();

        if ($kecamatan) {
            return response()->json([
                'status' => 'success',
                'title' => 'Berhasil',
                'message' => 'Data dihapus'
            ]);
        }
    }
}
