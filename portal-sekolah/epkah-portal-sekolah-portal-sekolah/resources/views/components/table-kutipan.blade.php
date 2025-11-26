<div class="chart-box card-shadow">
    <h3 class="mb-4 font-semibold text-green-700">Senarai Kutipan Program Sekolah</h3>

    <div class="overflow-x-auto">
        <table id="senaraiKutipanTable" class="min-w-full text-sm border border-gray-200 rounded-lg">
            <thead class="bg-green-100 text-gray-800">
                <tr>
                    <th class="p-3 border">No.</th>
                    <th class="p-3 border">Nombor Kutipan</th>
                    <th class="p-3 border">Nama Program</th>
                    <th class="p-3 border">Jenis Sisa</th>
                    <th class="p-3 border">Jumlah (kg)</th>
                    <th class="p-3 border">Status</th>
                    <th class="p-3 border">Tarikh</th>
                </tr>
            </thead>

            <tbody>
                {{ $slot }}
            </tbody>
        </table>
    </div>

    <p id="noResults" class="hidden text-center text-gray-500 mt-4">Tiada hasil dijumpai.</p>
</div>
