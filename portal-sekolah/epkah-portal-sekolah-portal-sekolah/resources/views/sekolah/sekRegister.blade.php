@extends('layouts.sekolah')

@section('title', 'Pendaftaran Sekolah')

@push('styles')
    @vite('resources/css/sekolah/sekRegister.css')
@endpush

@include('partials.navbar')

@section('content')

<!-- Card Form -->
<div class="max-w-5xl mx-auto bg-white shadow-lg rounded-2xl p-10 mt-10 border border-gray-100">

    <!-- Header dalam card -->
    <div class="register-header text-center mb-8">
        <!-- Logo -->
        <img src="{{ asset('images/Logo e-PKAH.jpeg') }}" class="register-logo">

        <!-- Title -->
        <h1 class="text-3xl font-extrabold text-green-700 tracking-wide">
            e-PKAH
        </h1>

        <!-- Subtitle -->
        <p class="text-gray-600 text-sm max-w-xl mx-auto mt-2 leading-relaxed">
            Inisiatif Memperkasakan Pendidikan Kelestarian Kepada Ekonomi Kitaran 
            Di Negeri Kelantan
        </p>
    </div>

    <!-- Section Title -->
    <div class="text-center mb-8">
    <i data-lucide="school" class="w-8 h-8 text-green-600 mx-auto mb-2"></i>
    <h2 class="text-2xl font-bold text-gray-800">
        Pendaftaran Sekolah
    </h2>
    </div>

    <form action="{{ route('sekolah.register.store') }}" method="POST" class="space-y-10">
        @csrf

        <!-- Section: Profil Sekolah -->
        <div class="section-box">
            <h3 class="section-title">
                <i data-lucide="building" class="w-5 h-5 text-green-600"></i>
                Maklumat Profil
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label>Nama Penuh *</label>
                    <input type="text" name="nama_penuh" class="form-control" required>
                </div>
                <div>
                    <label>Emel *</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div>
                    <label>Kod Sekolah *</label>
                    <input type="text" name="kod_sekolah" class="form-control" required>
                </div>
                <div>
                    <label>Jenis Sekolah *</label>
                    <select name="jenis_sekolah" class="form-control" required>
                        <option value="">-- Pilih Jenis --</option>
                        <option value="smk-kerajaan">Sekolah Menengah (Kerajaan)</option>
                        <option value="smk-swasta">Sekolah Menengah (Swasta)</option>
                        <option value="smk-yik">Sekolah Menengah (YIK)</option>
                        <option value="srk-kerajaan">Sekolah Rendah (Kerajaan)</option>
                        <option value="srk-swasta">Sekolah Rendah (Swasta)</option>
                        <option value="srk-yik">Sekolah Rendah (YIK)</option>
                        <option value="tadika">Tadika</option>
                    </select>
                </div>
                <div>
                    <label>Pejabat Pendidikan Daerah *</label>
                    <select name="ppd" class="form-control" required>
                        <option value="">-- Pilih PPD --</option>
                        <option value="ppd-kb">PPD Kota Bharu</option>
                        <option value="ppd-pm">PPD Pasir Mas</option>
                        <option value="ppd-tpt">PPD Tumpat</option>
                        <option value="ppd-bachok">PPD Bachok</option>
                        <option value="ppd-kk">PPD Kuala Krai</option>
                        <option value="ppd-pp">PPD Pasir Puteh</option>
                        <option value="ppd-machang">PPD Machang</option>
                        <option value="ppd-tm">PPD Tanah Merah</option>
                        <option value="ppd-jeli">PPD Jeli</option>
                        <option value="ppd-gm">PPD Gua Musang</option>
                        <option value="yik">Yayasan Islam Kelantan</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Section: Alamat Sekolah -->
        <div class="section-box">
            <h3 class="section-title">
                <i data-lucide="map-pin" class="w-5 h-5 text-green-600"></i>
                Maklumat Alamat Sekolah
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label>Nama Sekolah</label>
                    <input type="text" name="nama_sekolah" class="form-control">
                </div>
                <div>
                    <label>Alamat</label>
                    <textarea name="address" class="form-control"></textarea>
                </div>
                <div>
                    <label>Poskod</label>
                    <input type="text" name="poskod" class="form-control">
                </div>
                <div>
                    <label>Bandar</label>
                    <input type="text" name="bandar" class="form-control">
                </div>
                <div>
                    <label>Negeri</label>
                    <input type="text" name="negeri" class="form-control">
                </div>
            </div>
        </div>

        <!-- Section: Bank -->
        <div class="section-box">
            <h3 class="section-title">
                <i data-lucide="banknote" class="w-5 h-5 text-green-600"></i>
                Maklumat Akaun Bank Sekolah
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label>Nama Bank</label>
                    <input type="text" name="bank_name" class="form-control">
                </div>
                <div>
                    <label>No Akaun</label>
                    <input type="text" name="account_number" class="form-control">
                </div>
            </div>
        </div>

        <!-- Section: Statistik Sekolah -->
        <div class="section-box">
            <h3 class="section-title">
                <i data-lucide="users" class="w-5 h-5 text-green-600"></i>
                Maklumat Sekolah
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label>No Telefon Sekolah *</label>
                    <input type="text" name="no_tel_sekolah" class="form-control" required>
                </div>
                <div>
                    <label>Bilangan Murid *</label>
                    <input type="number" name="bil_murid" class="form-control" required>
                </div>
                <div>
                    <label>Bilangan Guru *</label>
                    <input type="number" name="bil_guru" class="form-control" required>
                </div>
                <div>
                    <label>Emel Guru *</label>
                    <input type="email" name="email_guru" class="form-control" required>
                </div>
            </div>
        </div>

        <!-- Section: Akaun Login -->
        <div class="section-box">
            <h3 class="section-title">
                <i data-lucide="lock" class="w-5 h-5 text-green-600"></i>
                Maklumat Akaun Login
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label>Kata Laluan *</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div>
                    <label>Sahkan Kata Laluan *</label>
                    <input type="password" name="password_confirmation" class="form-control" required>
                </div>
            </div>
        </div>

        <!-- Checkbox -->
        <div class="pt-4">
            <label class="inline-flex items-center gap-2">
                <input type="checkbox" name="terms" class="rounded text-green-600" required>
                <span class="text-sm text-gray-700">
                    Saya bersetuju dengan
                    <a href="#" class="text-green-600 underline">Terma & Dasar Privasi</a>
                </span>
            </label>
        </div>

        <!-- Buttons -->
    <div class="text-center mb-8">
        <button type="submit" 
            class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 shadow-md transition">
            Daftar
        </button>

        <!-- Already have account -->
        <p class="mt-4 text-sm text-gray-600">
            Dah ada akaun? 
            <a href="{{ route('login') }}" class="text-green-600 font-semibold hover:underline">
                Log masuk di sini
            </a>
        </p>
    </div>

    </form>
</div>
@endsection
