<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminSekController extends Controller
{
    // Dummy data
    private $dummySekolah = [
        [
            'id' => 1,
            'nama' => 'SMK Kota Bharu',
            'kod' => 'SMKKB123',
            'daerah' => 'Kota Bharu',
            'penyelaras' => 'Pn. Aisyah',
            'jumlah_murid' => 450,
            'status' => 'Aktif',
            'tarikh_daftar' => '2024-03-12',
        ],
        [
            'id' => 2,
            'nama' => 'SK Wakaf Che Yeh',
            'kod' => 'SKWCY456',
            'daerah' => 'Wakaf Che Yeh',
            'penyelaras' => 'En. Faiz',
            'jumlah_murid' => 320,
            'status' => 'Aktif',
            'tarikh_daftar' => '2024-05-03',
        ],
    ];

    // Senarai sekolah
    public function index()
    {
        $senaraiSekolah = session('senaraiSekolah', $this->dummySekolah);
        return view('admin.sekolah.index', compact('senaraiSekolah'));
    }

    // Papar form tambah sekolah
    public function create()
    {
        return view('admin.sekolah.create'); 
    }

    // Simulasi tambah sekolah tanpa DB
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'kod' => 'required|string|max:50',
            'daerah' => 'required|string|max:100',
            'penyelaras' => 'required|string|max:255',
            'jumlah_murid' => 'required|integer|min:0',
            'status' => 'required|in:Aktif,Tidak Aktif',
        ]);

        $senaraiSekolah = session('senaraiSekolah', $this->dummySekolah);
        $newId = end($senaraiSekolah)['id'] + 1;

        $senaraiSekolah[] = [
            'id' => $newId,
            'nama' => $validated['nama'],
            'kod' => $validated['kod'],
            'daerah' => $validated['daerah'],
            'penyelaras' => $validated['penyelaras'],
            'jumlah_murid' => $validated['jumlah_murid'],
            'status' => $validated['status'],
            'tarikh_daftar' => date('Y-m-d'),
        ];

        session(['senaraiSekolah' => $senaraiSekolah]);

        return redirect()->route('admin.sekolah.index')->with('success', 'Sekolah berjaya ditambah! (Dummy)');
    }

    // Papar info sekolah (dummy)
    public function show($id)
    {
        $senaraiSekolah = session('senaraiSekolah', $this->dummySekolah);
        $sekolah = collect($senaraiSekolah)->firstWhere('id', (int)$id);

        if (!$sekolah) abort(404);

        return view('admin.sekolah.view', compact('sekolah'));
    }

    // Papar form edit (dummy)
    public function edit($id)
    {
        $senaraiSekolah = session('senaraiSekolah', $this->dummySekolah);
        $sekolah = collect($senaraiSekolah)->firstWhere('id', (int)$id);

        if (!$sekolah) abort(404);

        // Convert array ke object supaya Blade boleh guna ->
        $sekolah = (object) $sekolah;

        return view('admin.sekolah.edit', compact('sekolah'));
    }

    // Simulasi kemaskini sekolah tanpa DB
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_sekolah' => 'required|string|max:255',
            'kod_sekolah' => 'required|string|max:50',
            'daerah' => 'required|string|max:100',
            'guru_penyelaras' => 'required|string|max:255',
            'jumlah_murid' => 'required|integer|min:0',
            'status' => 'required|in:Aktif,Dalam Proses',
        ]);

        $senaraiSekolah = session('senaraiSekolah', $this->dummySekolah);

        foreach ($senaraiSekolah as &$s) {
            if ($s['id'] == (int)$id) {
                $s['nama'] = $validated['nama_sekolah'];
                $s['kod'] = $validated['kod_sekolah'];
                $s['daerah'] = $validated['daerah'];
                $s['penyelaras'] = $validated['guru_penyelaras'];
                $s['jumlah_murid'] = $validated['jumlah_murid'];
                $s['status'] = $validated['status'];
                break;
            }
        }

        session(['senaraiSekolah' => $senaraiSekolah]);

        return redirect()->route('admin.sekolah.index')->with('success', 'Maklumat sekolah berjaya dikemaskini! (Dummy)');
    }

    // Simulasi padam sekolah tanpa DB
    public function destroy($id)
    {
        $senaraiSekolah = session('senaraiSekolah', $this->dummySekolah);

        // Filter keluar sekolah yang dipadam
        $senaraiSekolah = array_filter($senaraiSekolah, function ($s) use ($id) {
            return $s['id'] != (int)$id;
        });

        // Reset keys supaya session konsisten
        $senaraiSekolah = array_values($senaraiSekolah);

        // Simpan balik session
        session(['senaraiSekolah' => $senaraiSekolah]);

        return redirect()->route('admin.sekolah.index')->with('success', 'Sekolah berjaya dipadam! (Dummy)');
    }

    
}
