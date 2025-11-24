@extends('layouts.layoutAdmin')

@section('title', 'Cipta Sekolah Baharu')

@push('styles')
    @vite('resources/css/admin/adminSekolah.css')
    @vite('resources/css/sekolah/sekDashboard.css')
@endpush

@push('scripts')
    @vite('resources/js/admin/adminSekolah.js')
    @vite('resources/js/sekolah/sekHantar.js')  
@endpush

@section('content')
<div class="max-w-7xl mx-auto p-6">
    {{-- Header --}}
<x-welcome-card
    nama="Cipta Sekolah Baru"
    :isAdmin="'simple'"
    tagline="Tambah sekolah baharu ke dalam sistem dengan maklumat lengkap."
    :verified="false"
    buttonText="Kembali ke Pengguna"
    :buttonRoute="route('admin.sekolah.index')"
    buttonIcon="fas fa-arrow-left"
/>


    <form action="{{ route('admin.sekolah.store') }}" method="POST" class="space-y-8 bg-white/60 p-6 rounded-lg shadow-sm border border-green-100">
        @csrf

        {{-- Maklumat Sekolah --}}
      <form action="{{ route('admin.sekolah.store') }}" method="POST" class="space-y-8 bg-white/80 p-6 rounded-2xl shadow-lg border border-green-100">
    @csrf

    {{-- ========================= --}}
    {{-- Maklumat Pentadbir --}}
    {{-- ========================= --}}
    <div class="bg-green-50 p-6 rounded-xl shadow-inner space-y-4">
        <h3 class="font-semibold text-lg text-green-700 flex items-center gap-2">
            <i class="fas fa-user-circle"></i> Maklumat Pentadbir Sekolah
        </h3>

        <div class="grid grid-cols-12 gap-4">
            <label class="col-span-12 sm:col-span-6 flex items-center gap-3">
                <i class="fas fa-id-card text-green-600 w-5"></i>
                <input name="admin_name" required type="text" placeholder="Nama Penuh" class="w-full rounded border border-green-200 p-3 focus:outline-none focus:ring-2 focus:ring-green-300">
            </label>

            <label class="col-span-12 sm:col-span-6 flex items-center gap-3">
                <i class="fas fa-envelope text-green-600 w-5"></i>
                <input name="admin_email" required type="email" placeholder="Alamat E-mel" class="w-full rounded border border-green-200 p-3 focus:outline-none focus:ring-2 focus:ring-green-300">
            </label>

            <label class="col-span-12 sm:col-span-6 flex items-center gap-3">
                <i class="fas fa-lock text-green-600 w-5"></i>
                <input name="password" required type="password" placeholder="Kata Laluan" class="w-full rounded border border-green-200 p-3 focus:outline-none focus:ring-2 focus:ring-green-300">
            </label>

            <label class="col-span-12 sm:col-span-6 flex items-center gap-3">
                <i class="fas fa-lock text-green-600 w-5"></i>
                <input name="password_confirmation" required type="password" placeholder="Sahkan Kata Laluan" class="w-full rounded border border-green-200 p-3 focus:outline-none focus:ring-2 focus:ring-green-300">
            </label>

            <label class="col-span-12 flex items-center gap-3">
                <i class="fas fa-building text-green-600 w-5"></i>
                <input name="education_office" type="text" placeholder="Pejabat Pendidikan Daerah" class="w-full rounded border border-green-200 p-3 focus:outline-none focus:ring-2 focus:ring-green-300">
            </label>
        </div>
    </div>

    {{-- ========================= --}}
    {{-- Maklumat Sekolah --}}
    {{-- ========================= --}}
    <div class="bg-blue-50 p-6 rounded-xl shadow-inner space-y-4">
        <h3 class="font-semibold text-lg text-blue-700 flex items-center gap-2">
            <i class="fas fa-school"></i> Maklumat Sekolah
        </h3>

        <div class="grid grid-cols-12 gap-4">
            <label class="col-span-12 sm:col-span-6 flex items-center gap-3">
                <i class="fas fa-school text-blue-600 w-5"></i>
                <input name="school_name" type="text" placeholder="Nama Sekolah" class="w-full rounded border border-blue-200 p-3 focus:outline-none focus:ring-2 focus:ring-blue-300">
            </label>

            <label class="col-span-12 sm:col-span-6 flex items-center gap-3">
                <i class="fas fa-barcode text-blue-600 w-5"></i>
                <input name="school_code" type="text" placeholder="Kod Sekolah" class="w-full rounded border border-blue-200 p-3 focus:outline-none focus:ring-2 focus:ring-blue-300">
            </label>

            <label class="col-span-12 sm:col-span-6 flex items-center gap-3">
                <i class="fas fa-chalkboard-teacher text-blue-600 w-5"></i>
                <input name="school_type" type="text" placeholder="Jenis Sekolah" class="w-full rounded border border-blue-200 p-3 focus:outline-none focus:ring-2 focus:ring-blue-300">
            </label>

            <label class="col-span-12 sm:col-span-6 flex items-center gap-3">
                <i class="fas fa-phone text-blue-600 w-5"></i>
                <input name="school_phone" type="text" placeholder="No. Telefon Sekolah" class="w-full rounded border border-blue-200 p-3 focus:outline-none focus:ring-2 focus:ring-blue-300">
            </label>

            <label class="col-span-12 sm:col-span-6 flex items-center gap-3">
                <i class="fas fa-users text-blue-600 w-5"></i>
                <input name="student_count" type="number" placeholder="Bilangan Murid" class="w-full rounded border border-blue-200 p-3 focus:outline-none focus:ring-2 focus:ring-blue-300">
            </label>

            <label class="col-span-12 sm:col-span-6 flex items-center gap-3">
                <i class="fas fa-chalkboard text-blue-600 w-5"></i>
                <input name="teacher_count" type="number" placeholder="Bilangan Guru" class="w-full rounded border border-blue-200 p-3 focus:outline-none focus:ring-2 focus:ring-blue-300">
            </label>

            <label class="col-span-12 sm:col-span-6 flex items-center gap-3">
                <i class="fas fa-user-tie text-blue-600 w-5"></i>
                <input name="coordinator_name" type="text" placeholder="Nama Guru Penyelarasan" class="w-full rounded border border-blue-200 p-3 focus:outline-none focus:ring-2 focus:ring-blue-300">
            </label>

            <label class="col-span-12 sm:col-span-6 flex items-center gap-3">
                <i class="fas fa-phone text-blue-600 w-5"></i>
                <input name="coordinator_phone" type="text" placeholder="No. Telefon Guru" class="w-full rounded border border-blue-200 p-3 focus:outline-none focus:ring-2 focus:ring-blue-300">
            </label>

            <label class="col-span-12 flex items-center gap-3">
                <i class="fas fa-envelope text-blue-600 w-5"></i>
                <input name="coordinator_email" type="email" placeholder="E-mel Guru" class="w-full rounded border border-blue-200 p-3 focus:outline-none focus:ring-2 focus:ring-blue-300">
            </label>

            <label class="col-span-12 flex items-start gap-3">
                <i class="fas fa-map-marker-alt text-blue-600 mt-3 w-5"></i>
                <textarea name="school_address" rows="3" placeholder="Alamat Sekolah" class="w-full rounded border border-blue-200 p-3 focus:outline-none focus:ring-2 focus:ring-blue-300"></textarea>
            </label>

            <label class="col-span-12 sm:col-span-4 flex items-center gap-3">
                <i class="fas fa-map-pin text-blue-600 w-5"></i>
                <input name="school_postcode" type="text" placeholder="Poskod" class="w-full rounded border border-blue-200 p-3 focus:outline-none focus:ring-2 focus:ring-blue-300">
            </label>

            <label class="col-span-12 sm:col-span-4 flex items-center gap-3">
                <i class="fas fa-flag text-blue-600 w-5"></i>
                <input name="school_state" type="text" placeholder="Negeri" class="w-full rounded border border-blue-200 p-3 focus:outline-none focus:ring-2 focus:ring-blue-300">
            </label>

            <label class="col-span-12 sm:col-span-4 flex items-center gap-3">
                <i class="fas fa-city text-blue-600 w-5"></i>
                <input name="school_city" type="text" placeholder="Bandar" class="w-full rounded border border-blue-200 p-3 focus:outline-none focus:ring-2 focus:ring-blue-300">
            </label>
        </div>
    </div>

    {{-- ========================= --}}
    {{-- Maklumat Akaun Bank Sekolah --}}
    {{-- ========================= --}}
    <div class="bg-yellow-50 p-6 rounded-xl shadow-inner space-y-4">
        <h3 class="font-semibold text-lg text-yellow-700 flex items-center gap-2">
            <i class="fas fa-university"></i> Maklumat Akaun Bank Sekolah
        </h3>

        <div class="grid grid-cols-12 gap-4">
            <label class="col-span-12 sm:col-span-6 flex items-center gap-3">
                <i class="fas fa-university text-yellow-600 w-5"></i>
                <input name="bank_name" type="text" placeholder="Nama Bank" class="w-full rounded border border-yellow-200 p-3 focus:outline-none focus:ring-2 focus:ring-yellow-300">
            </label>

            <label class="col-span-12 sm:col-span-6 flex items-center gap-3">
                <i class="fas fa-hashtag text-yellow-600 w-5"></i>
                <input name="account_number" type="text" placeholder="No. Akaun Bank" class="w-full rounded border border-yellow-200 p-3 focus:outline-none focus:ring-2 focus:ring-yellow-300">
            </label>
        </div>
    </div>


        {{-- Footer actions --}}
        <div class="flex justify-end items-center gap-4 pt-4">
            <a href="{{ route('admin.sekolah.index') }}" class="px-4 py-2 rounded bg-gray-200 hover:bg-gray-300 text-gray-700">Batal</a>
            <button type="submit" class="px-5 py-2 rounded bg-green-600 hover:bg-green-700 text-white shadow">Hantar</button>
        </div>

    </form>
</div>
@endsection
