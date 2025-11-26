@props([
    'label' => 'Label',
    'value' => '0',
    'icon' => null,
    'verified' => true,
    'isAdmin' => false,
])

<div class="stat-box flex flex-col items-center p-6 rounded-2xl shadow transition transform hover:scale-[1.03]">
    
    @if($icon && $isAdmin)
        <i class="{{ $icon }}"></i>
    @endif

    <h2 class="mt-3">{{ $value }}</h2>
    <p class="mt-1">{{ $label }}</p>
</div>
