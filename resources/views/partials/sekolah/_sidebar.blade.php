@push('styles')
    @vite('resources/css/sekolah/partials/sekSidebar.css')
@endpush

<!-- Sidebar -->
<aside class="w-64 bg-white border-r shadow flex flex-col h-screen fixed">
    <nav class="flex-1">
        <!-- Logo -->
        <div class="flex items-center gap-4 px-6 py-5 border-b">
            <img src="{{ asset('images/Logo e-PKAH.jpeg') }}" 
                 alt="Logo" 
                 class="w-12 h-12 rounded-full shadow">
            <div>
                <span class="text-green-800 font-extrabold text-2xl tracking-wide block">
                    e-PKAH
                </span>
                <span class="text-gray-500 text-sm font-medium tracking-wide">
                    Portal Sekolah
                </span>
            </div>
        </div>

        <!-- Menu -->
        <ul class="px-4 py-6 space-y-3">
            <!-- Paparan Utama -->
            <li>
                <a href="{{ route('sekolah.dashboard') }}" 
                   class="flex items-center gap-3 px-4 py-2 rounded-lg transition-all duration-200
                          hover:bg-green-100 hover:text-green-800
                          {{ request()->routeIs('sekolah.dashboard') ? 'bg-green-200 text-green-900 font-semibold shadow-sm' : 'text-gray-700' }}">
                    <i class="fas fa-home"></i>
                    <span>Paparan Utama</span>
                </a>
            </li>

            <!-- Hantar Kitar Semula -->
            <li>
                <a href="{{ route('sekolah.hantar') }}" 
                   class="flex items-center gap-3 px-4 py-2 rounded-lg transition-all duration-200
                          hover:bg-green-100 hover:text-green-800
                          {{ request()->routeIs('sekolah.hantar') ? 'bg-green-200 text-green-900 font-semibold shadow-sm' : 'text-gray-700' }}">
                    <i class="fas fa-recycle"></i>
                    <span>Hantar Kitar Semula</span>
                </a>
            </li>

            <!-- Laporan Kutipan -->
            <li>
                <a href="{{ route('sekolah.laporan') }}" 
                   class="flex items-center gap-3 px-4 py-2 rounded-lg transition-all duration-200
                          hover:bg-green-100 hover:text-green-800
                          {{ request()->routeIs('sekolah.laporan') ? 'bg-green-200 text-green-900 font-semibold shadow-sm' : 'text-gray-700' }}">
                    <i class="fas fa-clipboard-list"></i>
                    <span>Laporan Kutipan</span>
                </a>
            </li>
        </ul>
    </nav>

    <!-- User Info (melekat bawah) -->
    <div class="user-info px-6 py-4 border-t">
        <div class="name font-semibold">nama_penuh</div>
        <div class="role text-sm text-gray-500">Sekolah</div>
    </div>
</aside>
