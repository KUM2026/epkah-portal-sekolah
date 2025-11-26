<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller; // 🔥 tambah ni
use Illuminate\Http\Request;

class VenController extends Controller
{
    // Papar borang
    public function create()
    {
        return view('vendor.venRegister'); // pastikan resources/views/venRegister.blade.php wujud
    }

    // Simpan data pendaftaran (sementara tanpa DB)
    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|email',
            'phone'     => 'required|string|max:20',
            'password'  => 'required|min:6|confirmed',
        ]);

        // Kalau tak guna DB, kita simulate "success"
        return redirect()->route('vendor.create')
            ->with('success', 'Pendaftaran berjaya (dummy, tak simpan DB)');
    }
}
