<div class="chart-box card-shadow">
    <h3 class="mb-4 font-semibold text-green-700">Senarai Sekolah</h3>

    <!-- 🔍 Search Input -->
    <div class="flex gap-3 mb-3">
        <input
            type="text"
            id="schoolTable-search"
            class="border p-2 rounded w-full"
            placeholder="Cari nama sekolah..."
        >

        <select id="schoolTable-status" class="border p-2 rounded">
            <option value="">Semua Status</option>
            <option value="Aktif">Aktif</option>
            <option value="Tidak Aktif">Tidak Aktif</option>
        </select>
    </div>

    <div class="overflow-x-auto">
        <table id="schoolTable" class="min-w-full text-sm border border-gray-200 rounded-lg">
            <thead class="bg-green-100 text-gray-800">
                <tr>
                        <th class="border px-3 py-2">Bil</th>
                        <th class="border px-3 py-2">Nama Sekolah</th>
                        <th class="border px-3 py-2">Kod Sekolah</th>
                        <th class="border px-3 py-2">Daerah</th>
                        <th class="border px-3 py-2">Guru Penyelaras</th>
                        <th class="border px-3 py-2">Jumlah Murid</th>
                        <th class="border px-3 py-2">Status</th>
                        <th class="border px-3 py-2">Tindakan</th>
                </tr>
            </thead>

            <tbody>
                {{ $slot }}
            </tbody>
        </table>
    </div>

    <p id="noResults" class="hidden text-center text-gray-500 mt-4">Tiada hasil dijumpai.</p>
</div>
