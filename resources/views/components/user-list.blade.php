@props([
    'title' => 'Pengguna Terkini',
    'icon' => 'fas fa-users',
])

 <div class="bg-white rounded-2xl shadow-md border border-gray-100 p-6 fade-in">
    <h3 class="text-lg font-semibold text-gray-700 mb-4 flex items-center gap-2">
        <i class="{{ $icon }} text-green-600"></i> {{ $title }}
    </h3>

    <ul class="divide-y divide-green-100 text-sm text-gray-700">
        {{ $slot }}
    </ul>
</div>
