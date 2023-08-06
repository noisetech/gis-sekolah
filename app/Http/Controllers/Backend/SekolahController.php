<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    public function index(){
        return view('pages.sekolah.index');
    }

    public function data(Request $request){

    }

    public function tambah(){
        return view('pages.sekolah.tambah');
    }

    public function simpan(Request $request){

    }

    public function edit($id){

    }

    public function update(Request $request){

    }

    public function hapus(Request $request){

    }
}
