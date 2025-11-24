@extends('layouts.layoutAdmin')

@section('title', 'Admin Dashboard')

@push('styles')
    @vite('resources/css/sekolah/sekDashboard.css')
    @vite('resources/css/sekolah/sekLaporan.css')
@endpush

@push('styles')
    @vite('resources/js/sekolah/sekDashboard.js')
    @vite('resources/js/sekolah/sekLaporan.js')
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/js/all.min.js"></script>
@endpush

<link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">
<link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css">

@section('content')
<div class="flex min-h-screen">
 
    <main class="main-content space-y-6">

    {{-- Header / Greeting --}}
<x-welcome-card
    :nama="session('nama')"
    :isAdmin="true"
    :tagline="now()->format('F d, Y')"
    :buttonText="'Tambah Sekolah'"
    :buttonRoute="route('admin.sekolah.create')"
    :stats="[
        ['label'=>'Jumlah Sekolah','value'=>count($senaraiSekolah ?? []),'icon'=>'fi fi-rr-school'],
        ['label'=>'Jumlah Murid','value'=>collect($senaraiSekolah ?? [])->sum('jumlah_murid'),'icon'=>'fi fi-rr-users'],
        ['label'=>'Sekolah Tertinggi','value'=>($sekolahTertinggi['nama'] ?? 'Tiada').' – '.($sekolahTertinggi['jumlah_murid'] ?? 0),'icon'=>'fi fi-rr-star'],
        ['label'=>'Kitar Semula (Kg)','value'=>1280,'icon'=>'fi fi-rr-recycle']
    ]"
/>


{{-- Quick Actions --}}
<div class="stats">

    <x-stat-box 
        label="Pesanan Baru"
        value="0"
        icon="fi fi-rr-box-open" 
        :isAdmin="true"
    />

    <x-stat-box 
    label="Tugasan Vendor"
    value="0.0"
    icon="fi fi-rr-shop"
    :isAdmin="true"
    />
    <x-stat-box 
        label="Jumlah Kutipan (Kg)"
        value="0.00"
        icon="fi fi-rr-chart-histogram"
        :isAdmin="true"
    />

    <x-stat-box 
        label="Jejak Karbon (CO₂)"
        value="0.0 Co2kg"
        icon="fi fi-rr-leaf"
        :isAdmin="true"
    />

</div>
    {{-- Waste Collection Chart --}}
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


{{-- Recent Activities + Latest Users --}}
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

    {{-- Recent Activities --}}
    <div class="bg-white rounded-2xl shadow-md border border-gray-100 p-6 fade-in">
        <h3 class="text-lg font-semibold text-gray-700 mb-4 flex items-center gap-2">
            <i class="fas fa-history text-green-600"></i> Aktiviti Terkini
        </h3>

        <ul class="space-y-4 text-gray-600 text-sm">

            <x-activity-item
                color="bg-indigo-100 text-indigo-600"
                icon="fas fa-user-edit"
                user="Admin A"
                desc="mengemaskini maklumat vendor."
                time="10 Nov 2025, 9:15 AM"
            />

            <x-activity-item
                color="bg-green-100 text-green-600"
                icon="fas fa-database"
                user="Admin B"
                desc="menambah data kutipan baru."
                time="9 Nov 2025, 4:42 PM"
            />

            <x-activity-item
                color="bg-yellow-100 text-yellow-600"
                icon="fas fa-envelope"
                user="Admin C"
                desc="menghantar laporan bulanan kepada vendor."
                time="8 Nov 2025, 11:03 AM"
            />

        </ul>
    </div>

    {{-- Latest Users --}}
    <x-user-list>
    <x-user-item 
        avatar="https://i.pravatar.cc/40?img=1"
        name="Aina Binti Razak"
        registered="10 Nov 2025"
        status="Aktif"
        statusColor="green"
    />

    <x-user-item 
        avatar="https://i.pravatar.cc/40?img=2"
        name="Hafiz Bin Ahmad"
        registered="9 Nov 2025"
        status="Offline"
        statusColor="yellow"
    />

    <x-user-item 
        avatar="https://i.pravatar.cc/40?img=3"
        name="Siti Nur Balqis"
        registered="8 Nov 2025"
        status="Aktif"
        statusColor="green"
    />
</x-user-list>


</div>

@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('wasteChart');
new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Jan','Feb','Mac','Apr','Mei','Jun','Jul','Ogo','Sep','Okt','Nov','Dis'],
        datasets: [{
            label: 'Sisa (Kg)',
            data: [5, 8, 12, 6, 15, 20, 25, 30, 18, 22, 26, 35],
            borderColor: '#16a34a',
            backgroundColor: 'rgba(34,197,94,0.15)',
            tension: 0.4,
            fill: true,
            pointBackgroundColor: '#16a34a',
            pointRadius: 5,
            pointHoverRadius: 7
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: { 
                display: true,
                labels: { color: '#374151', font: { size: 14 } }
            },
            tooltip: {
                backgroundColor: '#14532d',
                titleColor: '#fff',
                bodyColor: '#fff',
                borderColor: '#22c55e',
                borderWidth: 1,
                padding: 10
            }
        },
        scales: {
            x: { 
                ticks: { color: '#6b7280' },
                grid: { color: 'rgba(0,0,0,0.05)' }
            },
            y: { 
                ticks: { color: '#6b7280' },
                grid: { color: 'rgba(0,0,0,0.05)' }
            }
        }
    }
});
</script>
@endpush
