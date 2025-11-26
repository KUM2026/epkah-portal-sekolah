<?php

namespace App\Http\Controllers\Sekolah;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;

class SekLaporanController extends Controller
{
    public function index()
    {
        $data = [
            'jumlahPermohonan' => 0,
            'dalamProses' => 0,
            'selesai' => 0,
            'program' => 0,
            'jumlahImpak' => 123, // contoh nilai
            'chartData' => [
                'labels' => ['Jan','Feb','Mac','Apr','Mei','Jun','Jul','Ogos','Sep','Okt','Nov','Dis'],
                'values' => [0,0,0,0,0,0,0,0,0,0,0,0],
            ],
        ];

        // Extract jumlahImpak ke variable baru
        $jumlahImpak = $data['jumlahImpak'] ?? 0;

        // Pass kedua-dua data ke Blade
        return view('sekolah.laporan.sekLaporan', compact('data', 'jumlahImpak'));
    }
}
