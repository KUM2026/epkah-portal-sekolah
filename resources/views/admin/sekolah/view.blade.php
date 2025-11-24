@extends('layouts.layoutAdmin')

@section('title', 'Lihat Sekolah')

@push('styles')
    @vite('resources/css/sekolah/sekHantar.css')
    @vite('resources/css/sekolah/sekDashboard.css')
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/js/all.min.js"></script>
@endpush

<link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">
<link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css">


@section('content')
<div class="max-w-7xl mx-auto p-6 space-y-6">

    {{-- HEADER --}}
    <x-header 
        title="Maklumat Sekolah" 
        type="hantar"
        subtitle="Lihat maklumat lengkap sekolah di bawah."
    />

    {{-- MAKLMAT PENTADBIR --}}
    <div class="bg-green-50 p-6 rounded-2xl shadow-md border border-green-100 space-y-4">
        <h3 class="font-semibold text-lg text-green-700 flex items-center gap-2">
            <i class="fas fa-user-circle"></i> Maklumat Pentadbir Sekolah
        </h3>

        <div class="grid grid-cols-12 gap-4">

            <div class="col-span-12 sm:col-span-6 flex flex-col gap-1">
                <p class="text-gray-500 text-sm flex items-center gap-2">
                    <i class="fas fa-id-card text-green-600 w-4"></i> Nama Pentadbir
                </p>
                <div class="bg-white px-3 py-2 rounded shadow-inner">
                    {{ $sekolah['admin_name'] ?? '-' }}
                </div>
            </div>

            <div class="col-span-12 sm:col-span-6 flex flex-col gap-1">
                <p class="text-gray-500 text-sm flex items-center gap-2">
                    <i class="fas fa-envelope text-green-600 w-4"></i> E-mel Pentadbir
                </p>
                <div class="bg-white px-3 py-2 rounded shadow-inner">
                    {{ $sekolah['admin_email'] ?? '-' }}
                </div>
            </div>

            <div class="col-span-12 flex flex-col gap-1">
                <p class="text-gray-500 text-sm flex items-center gap-2">
                    <i class="fas fa-building text-green-600 w-4"></i> Pejabat Pendidikan Daerah
                </p>
                <div class="bg-white px-3 py-2 rounded shadow-inner">
                    {{ $sekolah['education_office'] ?? '-' }}
                </div>
            </div>

        </div>
    </div>

    {{-- MAKLUMAT SEKOLAH --}}
    <div class="bg-blue-50 p-6 rounded-2xl shadow-md border border-blue-100 space-y-4">
        <h3 class="font-semibold text-lg text-blue-700 flex items-center gap-2">
            <i class="fas fa-school"></i> Maklumat Sekolah
        </h3>

        <div class="grid grid-cols-12 gap-4">
            @php
            $fields = [
                ['icon' => 'fas fa-school', 'label' => 'Nama Sekolah', 'value' => $sekolah['nama'] ?? '-'],
                ['icon' => 'fas fa-barcode', 'label' => 'Kod Sekolah', 'value' => $sekolah['kod'] ?? '-'],
                ['icon' => 'fas fa-chalkboard-teacher', 'label' => 'Jenis Sekolah', 'value' => $sekolah['jenis_sekolah'] ?? '-'],
                ['icon' => 'fas fa-phone', 'label' => 'Telefon Sekolah', 'value' => $sekolah['telefon'] ?? '-'],
                ['icon' => 'fas fa-users', 'label' => 'Jumlah Murid', 'value' => $sekolah['jumlah_murid'] ?? '-'],
                ['icon' => 'fas fa-chalkboard', 'label' => 'Jumlah Guru', 'value' => $sekolah['jumlah_guru'] ?? '-'],
                ['icon' => 'fas fa-user-tie', 'label' => 'Nama Penyelaras', 'value' => $sekolah['penyelaras'] ?? '-'],
                ['icon' => 'fas fa-phone', 'label' => 'Telefon Penyelaras', 'value' => $sekolah['telefon_penyelaras'] ?? '-'],
                ['icon' => 'fas fa-envelope', 'label' => 'E-mel Penyelaras', 'value' => $sekolah['email_penyelaras'] ?? '-'],
                ['icon' => 'fas fa-map-marker-alt', 'label' => 'Alamat', 'value' => $sekolah['alamat'] ?? '-'],
                ['icon' => 'fas fa-map-pin', 'label' => 'Poskod', 'value' => $sekolah['poskod'] ?? '-'],
                ['icon' => 'fas fa-flag', 'label' => 'Negeri', 'value' => $sekolah['negeri'] ?? '-'],
                ['icon' => 'fas fa-city', 'label' => 'Bandar', 'value' => $sekolah['bandar'] ?? '-'],
            ];
            @endphp

            @foreach($fields as $field)
            <div class="col-span-12 sm:col-span-6 flex flex-col gap-1">
                <p class="text-gray-500 text-sm flex items-center gap-2">
                    <i class="{{ $field['icon'] }} text-blue-600 w-4"></i> {{ $field['label'] }}
                </p>
                <div class="bg-white px-3 py-2 rounded shadow-inner">
                    {{ $field['value'] }}
                </div>
            </div>
            @endforeach
        </div>
    </div>

    {{-- AKAUN BANK --}}
    <div class="bg-yellow-50 p-6 rounded-2xl shadow-md border border-yellow-100 space-y-4">
        <h3 class="font-semibold text-lg text-yellow-700 flex items-center gap-2">
            <i class="fas fa-university"></i> Maklumat Akaun Bank Sekolah
        </h3>

        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 sm:col-span-6 flex flex-col gap-1">
                <p class="text-gray-500 text-sm flex items-center gap-2">
                    <i class="fas fa-university text-yellow-600 w-4"></i> Nama Bank
                </p>
                <div class="bg-white px-3 py-2 rounded shadow-inner">
                    {{ $sekolah['bank'] ?? '-' }}
                </div>
            </div>

            <div class="col-span-12 sm:col-span-6 flex flex-col gap-1">
                <p class="text-gray-500 text-sm flex items-center gap-2">
                    <i class="fas fa-hashtag text-yellow-600 w-4"></i> No. Akaun
                </p>
                <div class="bg-white px-3 py-2 rounded shadow-inner">
                    {{ $sekolah['no_akaun'] ?? '-' }}
                </div>
            </div>
        </div>
    </div>

    {{-- BUTTON --}}
    <div class="pt-4">
        <a href="{{ route('admin.sekolah.index') }}" 
           class="inline-flex items-center gap-2 bg-gray-200 text-gray-700 hover:bg-gray-300 px-4 py-2 rounded-lg shadow">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
    </div>

</div>
@endsection
