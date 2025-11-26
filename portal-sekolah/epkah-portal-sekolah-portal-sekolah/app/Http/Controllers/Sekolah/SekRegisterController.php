<?php

namespace App\Http\Controllers\Sekolah;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SekRegisterController extends Controller
{
    // Papar borang
    public function create()
    {
        return view('sekolah.sekRegister');
    }

    // Hantar borang (tanpa simpan DB)
    public function store(Request $request)
    {
        $request->validate([
            'nama_penuh'     => 'required|string|max:255',
            'email'          => 'required|email',
            'kod_sekolah'    => 'required|string|max:50',
            'jenis_sekolah'  => 'required|string',
            'ppd'            => 'required|string|max:255',
            'nama_sekolah'   => 'required|string|max:255',
            'poskod'         => 'required|string|max:10',
            'bandar'         => 'required|string|max:255',
            'negeri'         => 'required|string|max:255',
            'no_tel_sekolah' => 'required|string|max:20',
            'bil_murid'      => 'required|integer|min:0',
            'bil_guru'       => 'required|integer|min:0',
            'email_guru'     => 'required|email',
            'password'       => 'required|confirmed|min:8',
        ]);

        return view('sekolah.success', [
            'data' => $request->all()
        ]);
    }
}
