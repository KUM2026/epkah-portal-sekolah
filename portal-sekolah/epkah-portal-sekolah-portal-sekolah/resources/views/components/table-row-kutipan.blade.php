@props(['item', 'index', 'actions' => null])

<tr>
    <td class="border px-3 py-2">{{ $index }}</td>
    <td class="border px-3 py-2">{{ $item['tarikh'] }}</td>

    <td class="border px-3 py-2">
        Berat: {{ $item['berat'] }}kg <br>
        Jualan: RM{{ number_format($item['jualan'], 2) }}
    </td>

    <td class="border px-3 py-2">
        <img src="{{ $item['resit'] }}" class="resit-img w-16">
    </td>

    <td class="border px-3 py-2">
        <span class="status success text-green-700 font-semibold">
            {{ $item['status'] }}
        </span>
    </td>

    <td class="border px-3 py-2">{{ $item['pendaftar'] }}</td>

    @if($actions)
        <td class="border px-3 py-2">
            <x-action-buttons 
                :id="$item['id']"
                :view="$actions['view'] ?? null"
                :edit="$actions['edit'] ?? null"
                :delete="$actions['delete'] ?? null"
            />
        </td>
    @endif
</tr>
