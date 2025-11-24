@props([
    'title',
    'subtitle',
    'impak' => null, 
    'type' => 'hantar',
])

@if($type === 'hantar')
    <div class="welcome-card from-green-700 !to-green-600 text-white p-5 rounded-3xl !shadow-lg flex flex-col gap-2 mb-8">
        <div class="card-body text-center">
            <h1 class="mb-2">{{ $title }}</h1>
            <p class="text-white">{{ $subtitle }}</p>
        </div>
    </div>
@elseif($type === 'report')
    <div class="header-box flex justify-between items-center bg-gray-100 p-4 rounded-lg mb-6">
        <div>
            <h2>{{ $title }}</h2>
            <p>{{ $subtitle }}</p>
        </div>
        @if($impak)
            <div class="meta font-semibold">
                Jumlah Impak: {{ $impak }} kg
            </div>
        @endif
    </div>
@endif
