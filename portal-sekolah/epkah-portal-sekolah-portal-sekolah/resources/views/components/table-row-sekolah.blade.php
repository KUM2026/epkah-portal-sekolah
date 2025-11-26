@props(['item', 'index', 'actions' => null])


<tr>
    <td class="border px-3 py-2 text-center">{{ $index }}</td>
    <td class="border px-3 py-2">{{ $item['nama'] }}</td>
    <td class="border px-3 py-2">{{ $item['kod'] ?? 'N/A' }}</td>
    <td class="border px-3 py-2">{{ $item['daerah'] ?? 'N/A' }}</td>
    <td class="border px-3 py-2">{{ $item['penyelaras'] }}</td>
    <td class="border px-3 py-2 text-center">{{ $item['jumlah_murid'] ?? 0 }}</td>
    <td class="border px-3 py-2 text-center">
        <span class="status {{ strtolower($item['status'] ?? 'Aktif') }}">
            {{ $item['status'] ?? 'Aktif' }}
        </span>
    </td>
    <td class="border px-3 py-2 text-center">
            
            <x-action-buttons 
                :id="$item['id']"
                :view="$actions['view'] ?? null"
                :edit="$actions['edit'] ?? null"
                :delete="$actions['delete'] ?? null"
            />
       
</tr>
