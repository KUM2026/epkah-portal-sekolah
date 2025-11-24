<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index()
    {
        // Dummy data statik
        $data = [
            'nama' => 'IFFAH AMIRAH BINTI MUSTARI',
            'verified' => true,
            'join_date' => 'Sep 18, 2025',
            'jumlah_permohonan' => 0,
            'jumlah_berat' => 0.0,
            'jumlah_rm' => 0.00,
            'jejak_karbon' => 0.0,
            'users' => [ // contoh senarai user statik
                ['name' => 'Ali', 'email' => 'ali@example.com'],
                ['name' => 'Siti', 'email' => 'siti@example.com'],
                ['name' => 'Ahmad', 'email' => 'ahmad@example.com'],
            ],
        ];

        return view('dashboard', compact('data'));
    }
}
