<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Data ni biasanya ambil dari database
        $data = [
            'users' => 00,
            'recycle' => 4.9,
            'carbon' => 5.9,
        ];

        return view('public.dashboard.index', compact('data'));
    }
}