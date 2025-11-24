@props([
    'nama' => 'Nama Pengguna',
    'tagline' => null,
    'verified' => true,
    'memberSince' => null,
    'buttonText' => null,
    'buttonRoute' => '#',
    'isAdmin' => false,
    'stats' => [],
    'buttonIcon' => null,
])

{{-- ========================= --}}
{{-- PAPARAN ADMIN (DASHBOARD) --}}
{{-- ========================= --}}

@if($isAdmin === true)

<div class="welcome-card !from-green-700 !to-green-600 !text-white p-8 rounded-3xl !shadow-lg flex flex-col gap-10">

    {{-- HEADER --}}
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6 mb-6">

        <div>
            <h1 class="text-4xl font-bold tracking-tight drop-shadow-[0_3px_6px_rgba(255,255,255,0.08)]
                       transition-all duration-300 hover:scale-[1.02]
                       hover:drop-shadow-[0_4px_10px_rgba(255,255,255,0.15)]
                       flex items-center gap-2">
                Selamat Datang, {{ $nama }} 👋
            </h1>

            @if($tagline)
                <p class="mt-3 text-sm flex items-center gap-2 opacity-90 tracking-wide">
                    <i class="fas fa-clock"></i>
                    <span>{{ $tagline }}</span>
                </p>
            @endif
        </div>

        @if($buttonText)
            <button class="btn-yellow inline-flex items-center gap-2"
                    onclick="window.location='{{ $buttonRoute }}'">
                <i class="fas fa-plus"></i> {{ $buttonText }}
            </button>
        @endif

    </div>

    {{-- Divider --}}
    @if(count($stats))
        <div class="border-t border-white/40"></div>

        {{-- STATISTICS --}}
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">

            <div>
                <p class="text-3xl font-bold">{{ now()->format('H:i') }}</p>
                <span class="text-white/80 text-sm tracking-wide">Masa semasa</span>
            </div>

            <div>
                <p class="text-3xl font-bold">{{ $penggunaOnline ?? 0 }}</p>
                <span class="text-white/80 text-sm tracking-wide">Pengguna Online</span>
            </div>

            <div>
                <p class="text-3xl font-bold">{{ $statusSistem ?? '99.9%' }}</p>
                <span class="text-white/80 text-sm tracking-wide">Status Sistem</span>
            </div>

            <div>
                <p class="text-3xl font-bold">{{ $tugasTertunggak ?? 0 }}</p>
                <span class="text-white/80 text-sm tracking-wide">Tugas Tertunggak</span>
            </div>

        </div>
    @endif

</div>

{{-- ========================= --}}
{{-- PAPARAN ADMIN BIASA --}}
{{-- ========================= --}}

@elseif($isAdmin === 'simple')

<div class="welcome-card p-6 rounded-2xl shadow-md bg-white text-gray-700 gap-2 mb-8">
    <div class="flex flex-col"> 
        <h1 class="text-2xl font-bold">{{ $nama }}</h1>

        @if($tagline)
            <p class="text-sm mt-1">{{ $tagline }}</p>
        @endif
    </div>

   @if($buttonText)
    <a href="{{ $buttonRoute }}"
       class="btn-yellow inline-flex items-center gap-2 mt-4">
       @if($buttonIcon)
           <i class="{{ $buttonIcon }}"></i>
       @endif
       {{ $buttonText }}
    </a>
@endif

</div>

{{-- ========================= --}}
{{-- PAPARAN SEKOLAH / USER --}}
{{-- ========================= --}}

@else

<div class="welcome-card p-6 rounded-2xl shadow-md bg-white text-gray-700">

    {{-- TITLE + TAGLINE --}}
    <div class="flex flex-col">
        <h1 class="text-2xl font-bold">Selamat kembali, {{ $nama }}!</h1>

        @if($tagline)
            <p class="text-sm mt-1">{{ $tagline }}</p>
        @endif

      <div class="flex items-center gap-3 mt-3 text-sm">

    @if($verified)
        <span class="inline-flex items-center gap-1">
            <i class="fas fa-check-circle"></i> Verified
        </span>
    @endif

    @if($verified && $memberSince)
        <span class="">|</span>
    @endif

    @if($memberSince)
        <span class="inline-flex items-center gap-1 ">
            <i class="fas fa-user"></i>
            Ahli sejak {{ \Carbon\Carbon::parse($memberSince)->format('M d, Y') }}
        </span>
    @endif

</div>

    </div>

    {{-- BUTTON --}}
    @if($buttonText)
        <a href="{{ $buttonRoute }}" 
           class="btn-yellow inline-flex items-center gap-2 mt-4">
            <i class="fas fa-recycle"></i> {{ $buttonText }}
        </a>
    @endif

</div>



@endif
