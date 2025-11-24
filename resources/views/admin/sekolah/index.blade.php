@extends('layouts.layoutAdmin')

@section('title', 'Pengurusan Sekolah')

@push('styles')
    @vite('resources/css/admin/adminSekolah.css')
    @vite('resources/css/sekolah/sekDashboard.css')
    @vite('resources/css/sekolah/sekLaporan.css')
@endpush

@push('scripts')
    @vite('resources/js/admin/adminSekolah.js')
    @vite('resources/js/sekolah/sekDashboard.js')
    @vite('resources/js/sekolah/sekLaporan.js')
@endpush


<link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">
<link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css">


@section('content')
<div class="admin-dashboard fade-in">

        {{-- Header --}}
<x-welcome-card
    nama="Pengurusan Sekolah"
    :isAdmin="'simple'"
    tagline="Lihat statistik kutipan & senarai sekolah berdaftar dalam portal e-PKAH."
    :verified="false"
    buttonText="Tambah Sekolah"
    :buttonRoute="route('admin.sekolah.create')"
    buttonIcon="fas fa-recycle"
/>
@php
    $sekolahTertinggi = collect($senaraiSekolah)->sortByDesc('jumlah_murid')->first();
@endphp


<div class="stats">

    <x-stat-box 
        label="Jumlah Sekolah"
        :value="count($senaraiSekolah)"
        icon="fi fi-rr-school"
        :isAdmin="true"
    />

    <x-stat-box 
        label="Jumlah Murid"
        :value="collect($senaraiSekolah)->sum('jumlah_murid')"
        icon="fi fi-rr-users"
        :isAdmin="true"
    />

    <x-stat-box 
        label="Sekolah Tertinggi"
        :value="($sekolahTertinggi['nama'] ?? 'Tiada') . ' – ' . ($sekolahTertinggi['jumlah_murid'] ?? 0) . ' murid'"
        icon="fi fi-rr-star"
        :isAdmin="true"
    />

    <x-stat-box 
        label="Kitar Semula (kg)"
        :value="1280"
        icon="fi fi-rr-recycle"
        :isAdmin="true"
    />

    <x-stat-box 
        label="Kitar Semula (kg)"
        :value="1280"
        icon="fi fi-rr-recycle"
        :isAdmin="true"
    />

</div>

<div class="chart-section grid grid-cols-1 xl:grid-cols-2 gap-8 mt-8">
    <x-chart-card
        title="Kutipan Mengikut Bulan (3R, e-Waste, UCO)"
        canvasId="monthlyRecycleChart"
        class="card-shadow h-90 xl:h-100 p-8"
        :dropdown="[
            'id' => 'jenisInput',
            'options' => [
                '' => 'Semua Jenis',
                'UCO' => 'Minyak Masak Terpakai (UCO)',
                '3R' => 'Barang Kitar Semula (3R)',
                'E-Waste' => 'Sisa Elektronik',
            ]
        ]"
    />

    <x-chart-card
        title="Purata Kutipan Setiap Sekolah (kg)"
        canvasId="avgSchoolChart"
        class="card-shadow h-90 xl:h-100 p-8"
        :dropdown="[
            'id' => 'tahunInput',
            'options' => [
                '' => 'Semua Tahun',
                '2023' => '2023',
                '2024' => '2024',
                '2025' => '2025',
            ]
        ]"
    />
</div>


<x-table-filter
    title="Cari Sekolah" 
    placeholder="Nama Sekolah..." 
    :statusOptions="['aktif' => 'Aktif', 'tidak_aktif' => 'Tidak Aktif']"
    :showDate="false"
    tableId="schoolTable"
/>

    {{-- Senarai Sekolah Berdaftar --}}
<div class="table-section mt-6">
<x-table-header title="Senarai Sekolah Berdaftar"/>    
<x-table-wrapper id="schoolTable">
    <thead>
        <tr class="bg-gray-100">
            <th class="border px-3 py-2">Bil</th>
            <th class="border px-3 py-2">Nama Sekolah</th>
            <th class="border px-3 py-2">Kod Sekolah</th>
            <th class="border px-3 py-2">Daerah</th>
            <th class="border px-3 py-2">Guru Penyelaras</th>
            <th class="border px-3 py-2">Jumlah Murid</th>
            <th class="border px-3 py-2">Status</th>
            <th class="border px-3 py-2">Tindakan</th>
        </tr>
    </thead>

    <tbody>
        @foreach($senaraiSekolah as $index => $item)
            <x-table-row-sekolah 
                :item="$item" 
                :index="$loop->iteration"
                :item="$item" 
                :index="$loop->iteration"
                :actions="[
                'view' => 'admin.sekolah.view',
                'edit' => 'admin.sekolah.edit',
                'delete' => 'admin.sekolah.destroy'
                ]"
            />
        @endforeach
    </tbody>
</x-table-wrapper>
</div>

</div>
@endsection
