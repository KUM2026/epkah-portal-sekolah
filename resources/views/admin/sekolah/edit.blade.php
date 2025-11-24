@extends('layouts.layoutAdmin')

@section('title', 'Edit Sekolah')

@section('content')
<div class="px-6 py-8">

    {{-- Card Container --}}
    <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100">
        <h2 class="text-2xl font-bold text-emerald-600 mb-6">Edit Maklumat Sekolah</h2>

        <form action="{{ route('admin.sekolah.update', $sekolah->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            {{-- Form Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                {{-- Nama Sekolah --}}
                <div>
                    <label for="nama_sekolah" class="block font-semibold text-gray-700 mb-1">Nama Sekolah</label>
                    <input type="text" id="nama_sekolah" name="nama_sekolah" value="{{ $sekolah->nama }}"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-400 focus:border-emerald-400">
                </div>

                {{-- Kod Sekolah --}}
                <div>
                    <label for="kod_sekolah" class="block font-semibold text-gray-700 mb-1">Kod Sekolah</label>
                    <input type="text" id="kod_sekolah" name="kod_sekolah" value="{{ $sekolah->kod }}"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-400 focus:border-emerald-400">
                </div>

                {{-- Daerah --}}
                <div>
                    <label for="daerah" class="block font-semibold text-gray-700 mb-1">Daerah</label>
                    <input type="text" id="daerah" name="daerah" value="{{ $sekolah->daerah }}"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-400 focus:border-emerald-400">
                </div>

                {{-- Guru Penyelaras --}}
                <div>
                    <label for="guru_penyelaras" class="block font-semibold text-gray-700 mb-1">Guru Penyelaras</label>
                    <input type="text" id="guru_penyelaras" name="guru_penyelaras" value="{{ $sekolah->penyelaras }}"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-400 focus:border-emerald-400">
                </div>

                {{-- Jumlah Murid --}}
                <div>
                    <label for="jumlah_murid" class="block font-semibold text-gray-700 mb-1">Jumlah Murid</label>
                    <input type="number" id="jumlah_murid" name="jumlah_murid" value="{{ $sekolah->jumlah_murid }}"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-400 focus:border-emerald-400">
                </div>

                {{-- Status --}}
                <div>
                    <label for="status" class="block font-semibold text-gray-700 mb-1">Status</label>
                    <select id="status" name="status"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-400 focus:border-emerald-400">
                        <option value="Aktif" {{ $sekolah->status == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                        <option value="Dalam Proses" {{ $sekolah->status == 'Dalam Proses' ? 'selected' : '' }}>Dalam Proses</option>
                    </select>
                </div>
            </div>

            {{-- Buttons --}}
            <div class="flex items-center gap-3 pt-4">
                <button type="submit"
                    class="bg-emerald-500 hover:bg-emerald-600 text-white font-semibold px-6 py-2 rounded-lg transition duration-200">
                    Simpan
                </button>

                <a href="{{ route('admin.sekolah.index') }}"
                    class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold px-6 py-2 rounded-lg transition duration-200">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
