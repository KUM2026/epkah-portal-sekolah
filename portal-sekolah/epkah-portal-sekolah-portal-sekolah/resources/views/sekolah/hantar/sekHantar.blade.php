@extends('layouts.layoutSekolah')

@push('styles')
    @vite('resources/css/sekolah/sekHantar.css')
    @vite('resources/css/sekolah/sekDashboard.css')
@endpush

@push('scripts')
    @vite('resources/js/sekolah/sekHantar.js')  
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/js/all.min.js"></script>
@endpush


@section('title', 'Hantar Kitar Semula')

@section('content')
<div class="p-3 space-y-5">

    <x-header 
        title="Hantar Kitar Semula" 
        type="hantar"
        subtitle="Setiap sisa yang anda asingkan, adalah harapan baru untuk bumi kita."
    />

    <!-- Side by side cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
        <x-card title="Maklumat Program">
            <x-input-program />
        </x-card>

        <x-card title="Tambah Bahan Kitar Semula">
            <x-input-bahan />
        </x-card>
    </div>

    <!-- Full width cards -->
    <x-card title="Senarai Bahan Kitar Semula">
        <x-table-bahan />
    </x-card>

    <x-card title="Maklumat Vendor">
        <x-vendor />
    </x-card>

    <div class="d-grid">
        <button class="btn btn-success btn-lg">Hantar</button>
    </div>

</div>

@endsection
