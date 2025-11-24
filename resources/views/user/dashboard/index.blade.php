@extends('layouts.app')

@section('title', 'Dashboard')

@push('styles')
    @vite('resources/css/dashboard.css')
@endpush

@push('scripts')
    @vite('resources/js/dashboard.js')
@endpush

@section('content')
<div class="dashboard">

    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="logo">e-PKAH</div>
        <nav>
            <ul>
                <li><a href="#" class="active">📊 Paparan Utama</a></li>
                <li><a href="#">♻️ Hantar Kitar Semula</a></li>
                <li><a href="#">📑 Laporan Kutipan</a></li>
                <li><a href="#">👤 Profil</a></li>
            </ul>
        </nav>
        <div class="user-box">
            <div class="user-name">IFFAH AMIRAH BINTI MUSTARI</div>
            <div class="user-role">User Account</div>
        </div>
    </aside>

    <!-- Main content -->
    <main class="main-content">
        <header class="welcome-box">
            <h1>Selamat kembali, <span class="highlight">IFFAH AMIRAH BINTI MUSTARI!</span></h1>
            <p>Setiap sisa yang anda asingkan, adalah harapan baru untuk bumi kita.</p>
            <div class="status">
                <span class="badge success">✔ Verified</span>
                <span class="badge gray">📅 Ahli sejak Sep 18, 2025</span>
            </div>
            <button class="btn btn-yellow">+ Hantar Kitar Semula</button>
        </header>

        <!-- Info cards -->
        <section class="cards-grid">
            <div class="card">
                <h2>Jumlah Permohonan</h2>
                <p class="value">0</p>
            </div>
            <div class="card yellow">
                <h2>Jumlah Berat (Kg)</h2>
                <p class="value">0.0</p>
            </div>
            <div class="card green">
                <h2>RM</h2>
                <p class="value">0.00</p>
            </div>
            <div class="card blue">
                <h2>Jejak Karbon</h2>
                <p class="value">0.0 Co2kg</p>
            </div>
        </section>

        <!-- Activity & Report -->
        <section class="grid-2">
            <div class="card full">
                <h2>Aktiviti Terkini</h2>
                <p class="muted">Tiada aktiviti terkini. Mulakan dengan meminta Kitar Semula!</p>
            </div>
            <div class="card full">
                <h2>Senarai Kutipan</h2>
                <p class="muted">Tiada kutipan dijumpai. Kutipan akan muncul di sini apabila selesai!</p>
            </div>
        </section>
    </main>
</div>
@endsection
