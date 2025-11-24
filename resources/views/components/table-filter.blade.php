@props([
    'title',
    'placeholder' => 'Cari...',
    'statusOptions' => [],
    'showSearch' => true,
    'showStatus' => true,
    'showDate' => true, 
    'tableId' => null, // WAJIB untuk dynamic ID
])

<div class="filter-box card-shadow mt-6 mb-4">
    <h3 class="mb-4 font-semibold text-green-700">{{ $title }}</h3>

    <form id="filterForm">
        <div class="flex flex-col sm:flex-row gap-4">

            {{-- Carian --}}
            @if($showSearch)
            <div class="flex-1">
                <label class="block mb-1 text-sm font-medium">Carian</label>
                <input 
                    id="searchInput" 
                    type="text" 
                    placeholder="{{ $placeholder }}"
                    class="input-field w-full border rounded px-3 py-2"
                >
            </div>
            @endif

            {{-- Status --}}
            @if($showStatus)
            <div class="flex-1">
                <label class="block mb-1 text-sm font-medium">Status</label>
                <select 
                    id="statusFilter" 
                    class="input-field w-full border rounded px-3 py-2"
                >
                    <option value="">Semua Status</option>
                    @foreach($statusOptions as $value => $label)
                        <option value="{{ $value }}">{{ $label }}</option>
                    @endforeach
                </select>
            </div>
            @endif

            {{-- Tarikh Dari / Hingga --}}
            @if($showDate)
            <div class="flex-1">
                <label class="block mb-1 text-sm font-medium">Tarikh Dari</label>
                <input id="startDate" type="date" class="input-field w-full border rounded px-3 py-2">
            </div>
            <div class="flex-1">
                <label class="block mb-1 text-sm font-medium">Hingga</label>
                <input id="endDate" type="date" class="input-field w-full border rounded px-3 py-2">
            </div>
            @endif
            

        </div>
    </form>
</div>
