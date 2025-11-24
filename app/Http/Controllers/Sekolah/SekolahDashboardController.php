<?php

namespace App\Http\Controllers\Sekolah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SekolahDashboardController extends Controller
{
    /**
     * Papar dashboard sekolah
     */
    public function index()
    {
        // Dummy / contoh data untuk kutipan sampah (tambah 'berat' sebagai numeric)
        $data = [
            [
                'id' => 1,
                'tarikh' => '2025-01-01',
                'kutipan' => '5 KG',
                'berat' => 5.0,
                'resit' => 'resit.jpg',
                'jualan' => 50.0,
                'status' => 'Lulus',
                'pendaftar' => 'Cik Aisyah'
            ],
            [
                'id' => 2,
                'tarikh' => '2025-02-10',
                'kutipan' => '3 KG',
                'berat' => 3.0,
                'resit' => 'resit2.jpg',
                'jualan' => 50.0,
                'status' => 'Menunggu',
                'pendaftar' => 'En Amir'
            ],
            [
                'id' => 3,
                'tarikh' => '2025-03-15',
                'kutipan' => '7.5 KG',
                'berat' => 7.5,
                'resit' => 'resit3.jpg',
                'jualan' => 50.0,
                'status' => 'Ditolak',
                'pendaftar' => 'Cik Nur'
            ],
            [
                'id' => 4,
                'tarikh' => '2025-04-05',
                'kutipan' => '4.2 KG',
                'berat' => 4.2,
                'resit' => 'resit4.jpg',
                'jualan' => 50.0,
                'status' => 'Lulus',
                'pendaftar' => 'En Harun'
            ],
        ];

        // Kira statistik berdasarkan data (gunakan nilai 'berat')
        $jumlah_kutipan = array_sum(array_column($data, 'berat'));

        $stats = [
            'jumlah_kutipan' => $jumlah_kutipan, // dalam KG
            'jumlah_pending' => count(array_filter($data, function ($d) { return strtolower($d['status']) === 'menunggu'; })),
            'jumlah_lulus' => count(array_filter($data, function ($d) { return strtolower($d['status']) === 'lulus'; })),
            'jumlah_ditolak' => count(array_filter($data, function ($d) { return strtolower($d['status']) === 'ditolak'; })),
        ];

        return view('sekolah.dashboard.index', compact('data', 'stats'));
    }

    /**
     * Papar profile sekolah (dummy data)
     */
    public function profile()
    {
        // Dummy data sementara
        $sekolah = [
    // Maklumat Sekolah
    'nama' => 'Sekolah ABC',
    'kod' => 'ABC123',
    'jenis_sekolah' => 'Sekolah Menengah Kebangsaan',
    'telefon' => '09-1234567',
    'jumlah_murid' => 120,
    'jumlah_guru' => 15,
    'alamat' => 'Jalan Pendidikan 1, Taman Ilmu',
    'poskod' => '15000',
    'negeri' => 'Kelantan',
    'bandar' => 'Kota Bharu',

    // Maklumat Penyelaras
    'penyelaras' => 'Cikgu Amir',
    'telefon_penyelaras' => '019-1234567',
    'email_penyelaras' => 'amir@sekolahabc.edu.my',

    // Maklumat Pentadbir
    'admin_name' => 'Cikgu Hana',
    'admin_email' => 'hana@sekolahabc.edu.my',
    'education_office' => 'Pejabat Pendidikan Daerah Kota Bharu',

    // Maklumat Akaun Bank
    'bank' => 'Bank Rakyat',
    'no_akaun' => '1234567890',

    // Status & Tarikh
    'status' => 'Aktif',
    'tarikh_daftar' => '2025-09-18',
];

        return view('sekolah.dashboard.profile', compact('sekolah'));
    }
}
