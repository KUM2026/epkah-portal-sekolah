<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sekolah') - e-PKAH</title>

    {{-- Global CSS --}}
    @vite('resources/css/app.css')
    @vite('resources/css/sekolah/partials/sekSidebar.css')
    @vite('resources/css/partials/navbarContent.css')
    @stack('styles')
</head>
<body class="font-sans antialiased bg-gray-50">

    <div class="flex min-h-screen">

        {{-- Sidebar --}}
        <aside class="w-64 bg-white border-r shadow flex flex-col fixed h-full">
            @include('partials.sekolah._sidebar')
        </aside>

        {{-- Main content --}}
        <div class="flex flex-col flex-1 ml-64">

            {{-- Navbar --}}
            <header class="flex items-center justify-between p-4 bg-white shadow sticky top-0 z-10">
                @include('partials._navbarContent')
            </header>

            {{-- Page Content --}}
            <main class="flex-1 p-6 bg-gray-50">
                @yield('content')
            </main>
        </div>
    </div>

    {{-- Global JS --}}
    @vite('resources/js/app.js')
    @stack('scripts')
</body>
</html>
