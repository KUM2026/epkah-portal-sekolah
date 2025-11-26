<?php

namespace App\Http\Controllers\Sekolah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SekHantarController extends Controller
{
    public function index()
    {
        return view('sekolah.hantar.sekHantar');
        // kalau file blade ada di: resources/views/sekolah/sekHantar.blade.php
        // kalau folder: resources/views/sekolah/hantar/index.blade.php
        // guna: return view('sekolah.hantar.index');
    }
}
