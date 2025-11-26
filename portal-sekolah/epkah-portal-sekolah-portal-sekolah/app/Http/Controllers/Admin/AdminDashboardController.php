<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // Data dummy / boleh tukar dengan DB nanti
        $senaraiSekolah = [
            ['nama' => 'Sekolah A', 'jumlah_murid' => 500],
            ['nama' => 'Sekolah B', 'jumlah_murid' => 300],
        ];

        $sekolahTertinggi = collect($senaraiSekolah)->sortByDesc('jumlah_murid')->first();

        return view('admin.dashboard.index', [
            'senaraiSekolah' => $senaraiSekolah,
            'sekolahTertinggi' => $sekolahTertinggi,
        ]);
    }
}
