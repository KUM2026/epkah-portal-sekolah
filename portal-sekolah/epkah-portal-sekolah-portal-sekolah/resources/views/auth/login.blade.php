@extends('layouts.layoutRegister')

@push('styles')
    @vite('resources/css/auth/register.css')
@endpush

@push('scripts')
    @vite('resources/js/register.js') <!-- nanti untuk toggle password atau validation -->
@endpush

@section('content')
<div class="register-page">
    <div class="register-card">
        <!-- Logo + Title -->
        <div class="register-header text-center mb-6">
            <img src="{{ asset('images/Logo e-PKAH.jpeg') }}" alt="Logo e-PKAH" class="register-logo mb-2">
            <h1 class="register-title text-2xl font-bold text-green-700">Log Masuk e-PKAH</h1>
            <p class="register-subtitle text-gray-600 text-sm">
                Sila log masuk untuk mengakses akaun anda
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

        <!-- Form Login -->
        <form action="#" method="POST" class="register-form space-y-4">
            @csrf

            <div class="form-group">
                <label for="email" class="font-semibold">Alamat E-mel</label>
                <input type="email" id="email" name="email" placeholder="example@gmail.com" required>
            </div>

            <div class="form-group password-wrapper">
                <label for="password" class="font-semibold">Kata Laluan</label>
                <input type="password" id="password" name="password" placeholder="********" required>
                <span id="togglePassword" class="toggle-password">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-.274.835-.64 1.627-1.09 2.357M15.5 15.5l2.5 2.5"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </span>
            </div>

            <div class="form-group flex items-center justify-between text-sm">
                <div class="flex items-center space-x-2">
                    <input type="checkbox" id="remember" name="remember" class="h-4 w-4 text-green-600 border-gray-300 rounded">
                    <label for="remember" class="text-gray-700 select-none">Ingat saya</label>
                </div>

                <a href="#" class="text-green-700 font-semibold">Lupa kata laluan?</a>
            </div>

            <button type="submit" class="register-btn w-full bg-green-600 text-white py-2 rounded-lg font-semibold hover:bg-green-700 transition">
                Log Masuk
            </button>
        </form>

        <!-- Info bawah -->
        <div class="mt-6 text-center text-sm">
            <p>Belum ada akaun? <a href="/register" class="text-green-700 font-semibold">Daftar di sini</a></p>
        </div>
    </div>
</div>
@endsection
