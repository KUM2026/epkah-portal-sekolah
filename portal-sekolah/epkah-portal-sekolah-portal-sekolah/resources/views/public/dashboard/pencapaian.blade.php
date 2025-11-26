<section class="container mx-auto text-center mt-16 mb-20 px-6">
    <h2 class="text-3xl md:text-4xl font-bold mb-12 text-green-800 tracking-tight">Pencapaian Program</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
        <!-- Box 1 -->
        <div data-aos="fade-up" class="card-shadow bg-white p-6 md:p-8 rounded-2xl border-t-4 border-blue-600 flex flex-col items-center hover:scale-[1.02]">
            <p class="text-4xl font-extrabold text-blue-600 mb-2">{{ $data['users'] }}</p>
            <h3 class="text-lg font-semibold mb-1 text-gray-800">Pengguna Berdaftar</h3>
            <p class="text-xs text-gray-500 leading-relaxed">
                Pengguna aktif di seluruh negeri Kelantan yang menyertai program amalan hijau.
            </p>
        </div>

        <!-- Box 2 -->
        <div data-aos="fade-up" data-aos-delay="100" class="card-shadow bg-white p-6 md:p-8 rounded-2xl border-t-4 border-green-600 flex flex-col items-center hover:scale-[1.02]">
            <p class="text-4xl font-extrabold text-green-600 mb-2">{{ $data['recycle'] }} <span class="text-sm font-bold">Tan</span></p>
            <h3 class="text-lg font-semibold mb-1 text-gray-800">Kutipan Barang Kitar Semula</h3>
            <p class="text-xs text-gray-500 leading-relaxed">
                Jumlah barang kitar semula yang berjaya dikumpul dan menjana pendapatan sampingan.
            </p>
        </div>

        <!-- Box 3 -->
        <div data-aos="fade-up" data-aos-delay="200" class="card-shadow bg-white p-6 md:p-8 rounded-2xl border-t-4 border-yellow-500 flex flex-col items-center hover:scale-[1.02]">
            <p class="text-4xl font-extrabold text-yellow-500 mb-2">{{ $data['carbon'] }} <span class="text-sm font-bold">Tan</span></p>
            <h3 class="text-lg font-semibold mb-1 text-gray-800">Jejak Karbon CO<sub>2</sub></h3>
            <p class="text-xs text-gray-500 leading-relaxed">
                Jumlah pengurangan jejak karbon hasil daripada aktiviti kitar semula.
            </p>
        </div>
    </div>
</section>
