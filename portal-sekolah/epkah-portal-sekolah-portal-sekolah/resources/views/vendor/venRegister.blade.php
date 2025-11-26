@extends('layouts.vendor')

@section('title', 'Daftar Vendor')
@section('form-title', 'Daftar Sebagai Vendor')

@push('styles')
    @vite('resources/css/vendor/venRegister.css')
@endpush

@include('partials.navbar')

@section('steps')
<div class="steps-container max-w-3xl mx-auto mt-8">
    <div class="steps flex justify-between items-center relative">
        <div class="progress-bar absolute top-1/2 left-0 h-1 bg-green-200 w-full -z-10"></div>
        <div class="progress-bar-active absolute top-1/2 left-0 h-1 bg-green-600 transition-all duration-500 -z-10"></div>

        <div class="step active">1 Akaun</div>
        <div class="step">2 Maklumat Vendor</div>
        <div class="step">3 Kawasan</div>
        <div class="step">4 Kategori Sisa</div>
        <div class="step">5 Dokumen</div>
    </div>
</div>
@endsection

@section('content')
<div class="max-w-3xl mx-auto bg-white shadow-lg rounded-xl p-8 mt-8">
    <form action="{{ route('vendor.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <!-- Step 1 -->
        <div class="form-step active">
            <label class="block font-semibold text-gray-700">Nama Penuh *</label>
            <input type="text" name="name" class="form-control" placeholder="Nama penuh anda" required>

            <label class="block font-semibold text-gray-700 mt-4">Alamat E-mel *</label>
            <input type="email" name="email" class="form-control" placeholder="emel@anda.com" required>

            <label class="block font-semibold text-gray-700 mt-4">Nombor Telefon *</label>
            <input type="text" name="phone" class="form-control" placeholder="+60123456789" required>

            <label class="block font-semibold text-gray-700 mt-4">Kata Laluan *</label>
            <input type="password" name="password" class="form-control" placeholder="Pilih kata laluan yang selamat" required>

            <label class="block font-semibold text-gray-700 mt-4">Sahkan Kata Laluan *</label>
            <input type="password" name="password_confirmation" class="form-control" placeholder="Sahkan kata laluan anda" required>

            <div class="flex items-center mt-4 text-sm">
                <input type="checkbox" required class="mr-2 rounded border-green-400 text-green-600 focus:ring-green-500">
                <span>
                    Saya bersetuju dengan
                    <a href="#" class="text-green-600 underline">Terma & Dasar Privasi</a>
                </span>
            </div>
        </div>

        <!-- Buttons -->
        <div class="flex justify-between mt-6">
            <button type="button" class="prev-btn hidden bg-gray-200 text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-300">
                Sebelumnya
            </button>
            <button type="button" class="next-btn bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700">
                Seterusnya
            </button>
            <button type="submit" class="submit-btn hidden bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700">
                Hantar
            </button>
        </div>
    </form>
</div>
@endsection
