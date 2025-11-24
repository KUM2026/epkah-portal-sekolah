@extends('layouts.layoutSekolah')

@push('styles')
    @vite('resources/css/sekolah/sekLaporan.css')
@endpush

@push('scripts')
    @vite('resources/js/sekolah/sekLaporan.js')  
     @vite('resources/js/sekolah/sekDashboard.js')  
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/js/all.min.js"></script>
@endpush

@section('title', 'Laporan Kutipan Saya')

@section('content')
<div class="container">


<x-header
    title="Kutipan Saya"
    subtitle="Tahniah, bumi kita lebih hijau kerana anda."
    type="report"
    :impak="$jumlahImpak"
/>

    <div class="stats">
        <x-stat-card :value="$data['jumlahPermohonan']" label="Jumlah Permohonan" delay="0s"/>
        <x-stat-card :value="$data['dalamProses']" label="Dalam Proses" delay=".1s"/>
        <x-stat-card :value="$data['selesai']" label="Selesai" delay=".2s"/>
        <x-stat-card :value="$data['program']" label="Program" delay=".3s"/>
    </div>

    <x-chart-card 
    title="Carta Kutipan"
    canvasId="collectionChart"
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


    <x-table-filter
    title="Filter Kutipan"
    tableId="tableKutipan"
    placeholder="Cari nombor kutipan / nama program..."
    :statusOptions="[
        'Dalam Proses' => 'Dalam Proses',
        'Selesai' => 'Selesai',
    ]"
/>

    <x-table-kutipan>
        @php
            // Dummy data array
            $kampens = [
                ['kod' => 'KTP001', 'nama' => 'Kempen 3R Sekolah Hijau', 'jenis' => '3R', 'jumlah' => 120, 'status' => 'Selesai', 'tarikh' => '2025-04-15'],
                ['kod' => 'KTP002', 'nama' => 'Kempen E-Waste Sekolah', 'jenis' => 'E-Waste', 'jumlah' => 80, 'status' => 'Selesai', 'tarikh' => '2025-04-16'],
                ['kod' => 'KTP003', 'nama' => 'Kempen Minyak Masak Terpakai', 'jenis' => 'UCO', 'jumlah' => 150, 'status' => 'Dalam Proses', 'tarikh' => '2025-04-17'],
                ['kod' => 'KTP004', 'nama' => 'Kempen Kitar Semula Plastik', 'jenis' => '3R', 'jumlah' => 200, 'status' => 'Selesai', 'tarikh' => '2025-04-18'],
                ['kod' => 'KTP005', 'nama' => 'Kempen Kitar Semula Kertas', 'jenis' => '3R', 'jumlah' => 90, 'status' => 'Dalam Proses', 'tarikh' => '2025-04-19'],
            ];
        @endphp

        @foreach($kampens as $kampen)
            <tr>
                <td class="p-3 border">{{ $loop->iteration }}</td>
                <td class="p-3 border">{{ $kampen['kod'] }}</td>
                <td class="p-3 border">{{ $kampen['nama'] }}</td>
                <td class="p-3 border">{{ $kampen['jenis'] }}</td>
                <td class="p-3 border">{{ $kampen['jumlah'] }}</td>
                <td class="p-3 border {{ $kampen['status'] == 'Selesai' ? 'text-green-700 font-semibold' : 'text-yellow-600 font-semibold' }}">
                    {{ $kampen['status'] }}
                </td>
                <td class="p-3 border">{{ $kampen['tarikh'] }}</td>
            </tr>
        @endforeach
</x-table-kutipan>
</div>
@endsection

