@props([
    'avatar' => 'https://i.pravatar.cc/40',
    'name' => 'Nama Pengguna',
    'registered' => 'Tarikh daftar',
    'status' => 'Aktif',
    'statusColor' => 'green', // green / yellow / red
])

@php
    $bgClass = "bg-{$statusColor}-100";
    $textClass = "text-{$statusColor}-600";
@endphp

<li class="py-3 flex items-center justify-between">
    <div class="flex items-center gap-3">
        <img src="{{ $avatar }}" class="w-10 h-10 rounded-full ring-2 ring-{{ $statusColor }}-200" alt="{{ $name }}">
        <div>
            <p class="font-semibold">{{ $name }}</p>
            <p class="text-xs text-gray-400">Didaftarkan: {{ $registered }}</p>
        </div>
    </div>
    <span class="px-2 py-1 {{ $bgClass }} {{ $textClass }} text-xs rounded-lg font-semibold">{{ $status }}</span>
</li>
