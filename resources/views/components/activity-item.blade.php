@props([
    'color' => 'bg-gray-100 text-gray-600',
    'icon' => 'fas fa-info-circle',
    'user' => 'Admin',
    'desc' => '',
    'time' => '',
])

<li class="flex items-start gap-3">
    <div class="{{ $color }} p-2 rounded-lg">
        <i class="{{ $icon }} "></i>
    </div>

    <div>
        <p><strong>{{ $user }}</strong> {{ $desc }}</p>
        <p class="text-xs text-gray-400">{{ $time }}</p>
    </div>
</li>
