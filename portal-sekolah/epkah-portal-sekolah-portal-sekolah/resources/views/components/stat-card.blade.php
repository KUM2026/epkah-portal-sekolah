@props(['label', 'value', 'delay' => 0, 'color' => 'green', 'icon' => null])

<div class="stat-card flex flex-col items-center justify-center text-center" style="animation-delay: {{ $delay }}s;">
    @if($icon)
        <div class="icon {{ $color }} mb-2">
            <i class="{{ $icon }}"></i>
        </div>
    @endif
    <h3 class="value">{{ $value }}</h3>
    <p class="label">{{ $label }}</p>
</div>
