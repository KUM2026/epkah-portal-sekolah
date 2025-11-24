@extends('layouts.layoutRegister')

@push('styles')
    @vite('resources/css/auth/register.css')
@endpush

@push('scripts')
    @vite('resources/js/register.js')
@endpush

@section('content')
<div class="register-page">
    <div class="register-card">

        <!-- Header -->
        <div class="register-header text-center mb-6">
            <img src="{{ asset('images/Logo e-PKAH.jpeg') }}" alt="Logo e-PKAH" class="register-logo mb-2">
            <h1 class="register-title text-2xl font-bold text-green-700">e-PKAH</h1>
            <p class="register-subtitle text-gray-600 text-sm">
                Inisiatif Memperkasakan Pendidikan Kelestarian Kepada Ekonomi Kitaran Di Negeri Kelantan
            </p>
        </div>

        <!-- SOCIAL REGISTER BUTTONS -->
<div class="social-login flex gap-4 mb-6 justify-center">

    <!-- Google -->
    <a href="{{ route('auth.google.redirect') }}" class="social-btn flex items-center justify-center transition w-12 h-12 rounded-full bg-white hover:bg-gray-100">
        <!-- Minimalist Google SVG -->
        <svg class="w-6 h-6" viewBox="0 0 533.5 544.3" xmlns="http://www.w3.org/2000/svg">
            <path fill="#4285F4" d="M533.5 278.4c0-17.6-1.4-35.2-4.3-52H272v98.7h146.9c-6.4 34.4-25.3 63.6-53.8 83.2v69.1h87c51-47 80.4-116 80.4-198z"/>
            <path fill="#34A853" d="M272 544.3c72.6 0 133.5-24 178-65.1l-87-69.1c-24.2 16.2-55.3 25.6-91 25.6-69.9 0-129-47.3-150-111.3H34v69.9C78.5 479.8 168.3 544.3 272 544.3z"/>
            <path fill="#FBBC05" d="M122 325.7c-5.3-15.8-8.3-32.5-8.3-49.7s3-33.9 8.3-49.7v-69.9H34c-18.3 36.6-28.8 77.9-28.8 119.6s10.5 83 28.8 119.6l88-69.8z"/>
            <path fill="#EA4335" d="M272 107.7c37.6 0 71.3 12.9 97.9 38.2l73.3-73.3C401.4 24 340.5 0 272 0 168.3 0 78.5 64.5 34 164.6l88 69.8c21-64 80.1-111.3 150-111.3z"/>
        </svg>
    </a>

    <!-- Facebook -->
    <a href="{{ route('auth.facebook.redirect') }}" class="social-btn flex items-center justify-center transition w-12 h-12 rounded-full bg-blue-600 hover:bg-blue-500">
        <!-- Minimalist Facebook SVG -->
        <svg class="w-6 h-6 text-white" viewBox="0 0 320 512" xmlns="http://www.w3.org/2000/svg">
            <path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06H293V6.26S259.36 0 225.36 0c-73.08 0-121.36 44.38-121.36 124.72v70.62H22.89V288h81.11v224h100.2V288z"/>
        </svg>
    </a>

</div>



        {{-- OR separator --}}
                <div class="relative mb-6">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-white text-gray-500">atau daftar dengan email</span>
                    </div>
                </div>

        <!-- Form -->
        <form action="#" method="POST" class="register-form space-y-4">
            @csrf

            <!-- ROLE -->
            <div class="form-group">
                <label for="role" class="font-semibold">Pilih Peranan Anda</label>
                <select id="role" name="role" required>
                    <option value="pengguna">Pengguna</option>
                    <option value="vendor">Vendor</option>
                    <option value="sekolah">Sekolah</option>
                </select>
            </div>

            <!-- UMUM -->
            <div class="form-group">
                <label for="name" class="font-semibold">Nama Penuh</label>
                <input type="text" id="name" name="name" placeholder="Contoh: Ahmad Ali" required>
            </div>

            <div class="form-group">
                <label for="email" class="font-semibold">Alamat E-mel</label>
                <input type="email" id="email" name="email" placeholder="example@gmail.com" required>
            </div>

            <!-- VENDOR FIELDS -->
            <div id="vendorFields" class="hidden">
                <div class="form-group">
                    <label for="company_name" class="font-semibold">Nama Syarikat</label>
                    <input type="text" id="company_name" name="company_name" placeholder="Contoh: EcoRecycle Sdn Bhd">
                </div>
                <div class="form-group">
                    <label for="ssm_number" class="font-semibold">No. SSM</label>
                    <input type="text" id="ssm_number" name="ssm_number" placeholder="Contoh: 2023123456">
                </div>
            </div>

            <!-- SEKOLAH FIELDS -->
            <div id="schoolFields" class="hidden">

                <div class="form-group">
                    <label for="school_code" class="font-semibold">Kod Sekolah</label>
                    <input type="text" id="school_code" name="school_code" placeholder="Contoh: KEA1234">
                </div>

                <div class="form-group">
                    <label for="school_type" class="font-semibold">Jenis Sekolah</label>
                    <input type="text" id="school_type" name="school_type" placeholder="Contoh: Menengah/Kebangsaan">
                </div>

                <div class="form-group">
                    <label for="education_office" class="font-semibold">Pejabat Pendidikan Daerah</label>
                    <input type="text" id="education_office" name="education_office" placeholder="Contoh: Kota Bharu">
                </div>

                <!-- ADDRESS SEKOLAH -->
                <div class="p-4 rounded-lg bg-gray-50">
                    <h2 class="font-semibold mb-2">Maklumat Alamat Sekolah</h2>

                    <div class="form-group">
                        <label for="school_name" class="font-semibold">Nama Sekolah</label>
                        <input type="text" id="school_name" name="school_name" placeholder="Contoh: SMK Kota Bharu">
                    </div>

                    <div class="form-group">
                        <label for="school_address" class="font-semibold">Alamat</label>
                        <textarea id="school_address" name="school_address" placeholder="Alamat lengkap" class="w-full border border-gray-300 rounded px-3 py-2"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="school_postcode" class="font-semibold">Poskod</label>
                        <input type="text" id="school_postcode" name="school_postcode" placeholder="Contoh: 15000">
                    </div>

                    <div class="flex gap-4">
                        <div class="form-group flex-1">
                            <label for="school_city" class="font-semibold">Bandar</label>
                            <input type="text" id="school_city" name="school_city" placeholder="Contoh: Kota Bharu">
                        </div>

                        <div class="form-group flex-1">
                            <label for="school_state" class="font-semibold">Negeri</label>
                            <input type="text" id="school_state" name="school_state" placeholder="Contoh: Kelantan">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="school_phone" class="font-semibold">No. Telefon Sekolah</label>
                    <input type="text" id="school_phone" name="school_phone" placeholder="Contoh: 09-1234567">
                </div>

                <div class="form-group">
                    <label for="student_count" class="font-semibold">Bilangan Murid</label>
                    <input type="number" id="student_count" name="student_count" placeholder="Contoh: 500">
                </div>

                <div class="form-group">
                    <label for="teacher_count" class="font-semibold">Bilangan Guru</label>
                    <input type="number" id="teacher_count" name="teacher_count" placeholder="Contoh: 30">
                </div>

                <div class="form-group">
                    <label for="coordinator_name" class="font-semibold">Nama Guru Penyelarasan</label>
                    <input type="text" id="coordinator_name" name="coordinator_name" placeholder="Contoh: Cikgu Ali">
                </div>

                <div class="form-group">
                    <label for="coordinator_phone" class="font-semibold">No. Telefon Guru</label>
                    <input type="text" id="coordinator_phone" name="coordinator_phone" placeholder="Contoh: 012-3456789">
                </div>

                <div class="form-group">
                    <label for="coordinator_email" class="font-semibold">E-mel Guru</label>
                    <input type="email" id="coordinator_email" name="coordinator_email" placeholder="example@gmail.com">
                </div>

                <!-- BANK -->
                <div class="p-4 rounded-lg bg-gray-50">
                    <h2 class="font-semibold mb-2">Maklumat Akaun Bank Sekolah</h2>

                    <div class="form-group">
                        <label for="bank_name" class="font-semibold">Nama Bank</label>
                        <input type="text" id="bank_name" name="bank_name" placeholder="Contoh: Maybank">
                    </div>

                    <div class="form-group">
                        <label for="account_number" class="font-semibold">No. Akaun Bank</label>
                        <input type="text" id="account_number" name="account_number" placeholder="Contoh: 1234567890">
                    </div>
                </div>
            </div>

            <!-- ADDRESS UNTUK PENGGUNA & VENDOR -->
            <div id="addressFields" class="hidden">
                <div class="p-4 rounded-lg bg-gray-50">
                    <h2 class="font-semibold mb-2">Maklumat Alamat</h2>

                    <div class="form-group">
                        <label for="address" class="font-semibold">Alamat Penuh</label>
                        <input type="text" id="address" name="address" placeholder="Contoh: No 1, Jalan Hijau 15150 KB">
                    </div>

                    <div class="form-group">
                        <label for="postcode" class="font-semibold">Poskod</label>
                        <input type="text" id="postcode" name="postcode" placeholder="Contoh: 15150">
                    </div>

                    <div class="form-group">
                        <label for="city" class="font-semibold">Bandar</label>
                        <input type="text" id="city" name="city" placeholder="Contoh: Kota Bharu">
                    </div>

                    <div class="form-group">
                        <label for="state" class="font-semibold">Negeri</label>
                        <input type="text" id="state" name="state" placeholder="Contoh: Kelantan">
                    </div>
                </div>
            </div>

            <!-- WAKIL INSTITUSI -->
            <div class="form-group flex items-center space-x-2 mb-2">
                <input type="checkbox" id="showRepresentative" class="h-4 w-4 text-green-600">
                <label for="showRepresentative" class="text-sm text-gray-700 cursor-pointer">
                    Saya mewakili institusi/sekolah
                </label>
            </div>

            <div id="representativeFields" class="hidden">
                <div class="p-4 rounded-lg bg-green-50 border border-green-200 shadow">
                    <h2 class="font-semibold mb-3 text-green-700 text-lg">Maklumat Wakil Institusi</h2>

                    <div class="form-group">
                        <label for="representative_name" class="font-semibold text-green-700">Nama Institusi/Sekolah</label>
                        <input type="text" id="representative_name" name="representative_name" placeholder="Nama institusi">
                    </div>
                </div>
            </div>

            <!-- PASSWORD -->
            <div id="passwordFields" class="hidden">

                <div class="form-group password-wrapper">
                    <label for="password" class="font-semibold">Kata Laluan</label>
                    <input type="password" id="password" name="password" placeholder="********" required>
                </div>

                <div class="form-group password-wrapper">
                    <label for="password_confirmation" class="font-semibold">Sahkan Kata Laluan</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="********" required>
                </div>
            </div>

            <!-- TERMS -->
            <div class="form-group flex items-center space-x-2">
                <input type="checkbox" id="terms" name="terms" required class="h-4 w-4 text-green-600">
                <label for="terms" class="text-sm text-gray-700">
                    Saya bersetuju dengan <a href="#" class="text-green-700 font-semibold">Terma & Syarat</a>.
                </label>
            </div>

            <!-- SUBMIT -->
            <button type="submit" class="register-btn w-full bg-green-600 text-white py-2 rounded-lg font-semibold hover:bg-green-700">
                Daftar Akaun
            </button>
        </form>

        <!-- FOOTER -->
        <div class="mt-6 text-center text-sm">
            <p>Sudah ahli? <a href="/login" class="text-green-700 font-semibold">Log masuk di sini</a></p>
        </div>

        

    </div>
</div>
@endsection
