    @extends('layouts.layoutSekolah')

    @section('title', 'Sekolah Dashboard')

    @push('styles')
        @vite('resources/css/sekolah/sekDashboard.css')
        @vite('resources/css/sekolah/sekLaporan.css')
    @endpush

    @push('styles')
        @vite('resources/js/sekolah/sekDashboard.js')
        @vite('resources/js/sekolah/sekLaporan.js')
    @endpush

    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/js/all.min.js"></script>
    @endpush

    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css">

    @section('content')
    <div class="flex min-h-screen">

        <main class="main-content">
            

        <x-welcome-card
        :nama="'Sekolah ABC'"
        :tagline="'Pendidikan kelestarian bermula dari sekolah.'"
        :verified="true"
        :memberSince="'2025-09-18'"
        :buttonText="'Hantar Kitar Semula'"
        :buttonRoute="route('sekolah.hantar')"
    />

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-5">
        <x-stat-box 
            label="Pesanan Baru"
            value="0"
            icon="fi fi-rr-box-open" 
            :isAdmin="true"
        />

        <x-stat-box 
            label="Tugasan Vendor"
            value="0.0"
            icon="fi fi-rr-shop"
            :isAdmin="true"
        />

        <x-stat-box 
            label="Jumlah Kutipan (Kg)"
            value="0.00"
            icon="fi fi-rr-chart-histogram"
            :isAdmin="true"
        />

        <x-stat-box 
            label="Jejak Karbon (CO₂)"
            value="0.0 Co2kg"
            icon="fi fi-rr-leaf"
            :isAdmin="true"
        />
    </div>



            <x-table-filter 
                    title="Filter Kutipan "
                    tableId="tableKutipan"
                    placeholder="Cari berdasarkan nama, ID kutipan..."
                    :statusOptions="[
                        'pending' => 'Pending',
                        'completed' => 'Completed',
                        'rejected' => 'Rejected',
                    ]"
                />


            <div class="table-section mt-6">
                <x-table-header title="Senarai Rekod Kutipan"/>
                <x-table-wrapper>
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border px-3 py-2">Bil</th>
                            <th class="border px-3 py-2">Tarikh Kutipan</th>
                            <th class="border px-3 py-2">Kutipan</th>
                            <th class="border px-3 py-2">Gambar Resit</th>
                            <th class="border px-3 py-2">Status</th>
                            <th class="border px-3 py-2">Pendaftar</th>
                            <th class="border px-3 py-2">Tindakan</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($data as $item)
                            <x-table-row-kutipan 
                                :item="$item" 
                                :index="$loop->iteration"
                                :actions="[
                                'view' => 'admin.sekolah.view',
                                'edit' => 'admin.sekolah.edit',
                                'delete' => 'admin.sekolah.destroy'
        ]"
                            />
                        @endforeach
                    </tbody>
                </x-table-wrapper>

            </div>

        </main>

    </div>
    @endsection
