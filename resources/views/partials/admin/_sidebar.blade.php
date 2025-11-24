<!-- resources/views/admin/partials/sidebar.blade.php -->

<!-- Overlay (Mobile) -->
<div id="sidebarOverlay" class="fixed inset-0 bg-black bg-opacity-30 z-30 hidden md:hidden"></div>

<!-- Button Toggle (Mobile) -->
<button id="sidebarToggle" class="fixed top-4 left-4 z-50 p-2 bg-white text-gray-700 rounded-md shadow-md hover:bg-gray-100 transition md:hidden">
    <i class="fas fa-bars"></i>
</button>

<aside id="adminSidebar"
       class="w-64 bg-white border-r shadow-lg flex flex-col h-screen fixed transform -translate-x-full md:translate-x-0 transition-transform duration-300 z-40">
    
    <!-- Logo / Header -->
    <div class="flex items-center gap-4 px-6 py-5 border-b">
        <img src="{{ asset('images/Logo e-PKAH.jpeg') }}" 
             alt="Logo" 
             class="w-12 h-12 rounded-full shadow-sm">
        <div>
            <span class="text-green-700 font-bold text-xl tracking-wide block">e-PKAH</span>
            <span class="text-gray-500 text-sm font-medium tracking-wide">Admin Panel</span>
        </div>
    </div>

    <!-- Menu -->
    <nav class="flex-1 overflow-y-auto px-4 py-6 space-y-5">
        {{-- Main Menu --}}
        <div>
            <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2 px-4">Main Menu</p>
            <a href="{{ route('admin.dashboard') }}"
               class="flex items-center gap-3 px-4 py-2 rounded-lg transition-colors duration-200
                      hover:bg-gray-100 hover:text-green-700
                      {{ request()->routeIs('admin.dashboard') ? 'bg-green-100 text-green-800 font-medium' : 'text-gray-700' }}">
                <i class="fas fa-home w-5 text-center"></i>
                <span>Dashboard</span>
            </a>

            <a href="{{ route('admin.pengguna') }}"
               class="flex items-center gap-3 px-4 py-2 rounded-lg transition-colors duration-200
                      hover:bg-gray-100 hover:text-green-700
                      {{ request()->routeIs('admin.pengguna') ? 'bg-green-100 text-green-800 font-medium' : 'text-gray-700' }}">
                <i class="fas fa-users w-5 text-center"></i>
                <span>Pengguna</span>
            </a>

            <a href="{{ route('admin.vendor') }}"
               class="flex items-center gap-3 px-4 py-2 rounded-lg transition-colors duration-200
                      hover:bg-gray-100 hover:text-green-700
                      {{ request()->routeIs('admin.vendor') ? 'bg-green-100 text-green-800 font-medium' : 'text-gray-700' }}">
                <i class="fas fa-store w-5 text-center"></i>
                <span>Vendor</span>
            </a>
        </div>

        {{-- Pengurusan --}}
        <div>
            <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2 px-4">Pengurusan</p>
            <li x-data="{ open: false }">
    <button @click="open = !open" class="flex items-center justify-between w-full p-2 rounded hover:bg-gray-100">
        <span class="flex items-center">
            <i class="fa-solid fa-school mr-3"></i> Sekolah
        </span>
        <i :class="open ? 'fa-solid fa-chevron-down' : 'fa-solid fa-chevron-up'"></i>
    </button>
    <!-- Submenu -->
    <ul x-show="open" x-transition class="pl-8 mt-1 space-y-1 text-gray-700">
        <li>
            <a href="{{ route('admin.sekolah.index') }}" class="block p-2 rounded hover:bg-gray-100">
                Senarai Sekolah
            </a>
        </li>
        <li>
            <a href="{{ route('admin.sekolah.create') }}" class="block p-2 rounded hover:bg-gray-100">
                Tambah Sekolah
            </a>
        </li>
    </ul>
</li>

        {{-- Laporan --}}
        <div>
            <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2 px-4">Laporan</p>
            <a href="{{ route('admin.laporan') }}"
               class="flex items-center gap-3 px-4 py-2 rounded-lg transition-colors duration-200
                      hover:bg-gray-100 hover:text-green-700
                      {{ request()->routeIs('admin.laporan') ? 'bg-green-100 text-green-800 font-medium' : 'text-gray-700' }}">
                <i class="fas fa-clipboard-list w-5 text-center"></i>
                <span>Laporan</span>
            </a>
        </div>

    </nav>

    <!-- User Info -->
    <div class="px-6 py-4 border-t">
        <div class="font-semibold">{{ auth()->user()->name ?? 'Admin' }}</div>
        <div class="text-sm text-gray-500">Admin</div>
        <form action="{{ route('logout') }}" method="POST" class="mt-2">
            @csrf
            <button type="submit" class="w-full px-4 py-2 bg-red-500 text-white font-medium rounded-lg hover:bg-red-600 transition-all flex items-center justify-center">
                <i class="fas fa-sign-out-alt mr-2"></i>
                Log Keluar
            </button>
        </form>
    </div>
</aside>

<!-- JS Toggle -->
<script>
    const sidebar = document.getElementById('adminSidebar');
    const toggleBtn = document.getElementById('sidebarToggle');
    const overlay = document.getElementById('sidebarOverlay');

    function openSidebar() {
        sidebar.classList.remove('-translate-x-full');
        overlay.classList.remove('hidden');
    }

    function closeSidebar() {
        sidebar.classList.add('-translate-x-full');
        overlay.classList.add('hidden');
    }

    toggleBtn.addEventListener('click', () => {
        if(sidebar.classList.contains('-translate-x-full')){
            openSidebar();
        } else {
            closeSidebar();
        }
    });

    overlay.addEventListener('click', closeSidebar);

    // Optional: klik luar sidebar (desktop)
    document.addEventListener('click', (e) => {
        if (window.innerWidth < 768 && !sidebar.contains(e.target) && !toggleBtn.contains(e.target)) {
            closeSidebar();
        }
    });
</script>

