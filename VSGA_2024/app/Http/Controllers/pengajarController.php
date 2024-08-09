<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pengajarController extends Controller
{
    //
    public function daftarPengajar(){
        return 'Form pendaftaran pengajar mahasiswa';
    }
    public function tablePengajar(){
        return 'Tabel data pengajar mahasiswa';
    }
    public function blogPengajar(){
        return 'Halaman blog mahasiswa';
    }
}
