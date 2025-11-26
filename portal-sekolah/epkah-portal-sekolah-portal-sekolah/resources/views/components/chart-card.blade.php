@props(['title', 'canvasId', 'dropdown' => null])

<div {{ $attributes->merge(['class' => 'chart-box card-shadow']) }}>
    <div class="flex justify-between items-center mb-4">
        <h3>{{ $title }}</h3>

        @if($dropdown)
            <select id="{{ $dropdown['id'] }}" class="border p-2 rounded focus:ring focus:ring-green-300">
                @foreach($dropdown['options'] as $value => $label)
                    <option value="{{ $value }}">{{ $label }}</option>
                @endforeach
            </select>
        @endif
    </div>

    <div class="chart-container {{ $attributes['class'] }}">
        <canvas id="{{ $canvasId }}" class="w-full h-full"></canvas>
    </div>
</div>
