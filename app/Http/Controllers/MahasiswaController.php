<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function tampil(){
        $arrMahasiswa = ["Risa Lestari","Rudi Hermawan","Bambang Kusumo", "Lisa Permata"];
        return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
    }
}
