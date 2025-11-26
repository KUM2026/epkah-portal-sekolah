<!-- Tambah dalam <head> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<nav class="bg-white shadow-lg px-8 py-4 flex items-center justify-between rounded-b-xl">
        <div class="flex items-center gap-4">
            <img src="{{ asset('images/Logo e-PKAH.jpeg') }}" alt="Logo" class="w-12 h-12 rounded-full shadow">
            <span class="text-green-800 font-extrabold text-2xl tracking-wide">e-PKAH</span>
        </div>
        <ul class="flex gap-8">
            <li>
                <a href="{{ route('public.dashboard') }}" class="text-green-700 font-semibold hover:text-green-900 transition">
                    Utama
                </a>
            </li>
            <li><a href="#" class="hover:text-green-700 transition">Tentang Program</a></li>
            <li><a href="#" class="hover:text-green-700 transition">Pusat Kitar Semula</a></li>
            <li><a href="#" class="hover:text-green-700 transition">Program Terkini</a></li>
            <li><a href="#" class="hover:text-green-700 transition">Log Masuk</a></li>
        </ul>

        <div class="flex items-center gap-4">
        <div class="flex items-center gap-3 text-green-700">
            <i class="fas fa-bell text-2xl hover:text-green-500 cursor-pointer"></i>
        </div>
        <a href="{{ route('login') }}" 
        class="bg-gradient-to-r from-green-500 to-green-200 text-white px-5 py-2 rounded-xl shadow hover:scale-105 transform transition duration-200 inline-block">
            Log Masuk
        </a>
        <a href="{{ route('register') }}" 
        class="bg-gradient-to-r from-green-500 to-green-700 text-white px-5 py-2 rounded-xl shadow hover:scale-105 transform transition duration-200 inline-block">
            Daftar Akaun
        </a>

    </div>
        
    </nav>