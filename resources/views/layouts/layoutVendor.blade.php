<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Pendaftaran Vendor')</title>

    {{-- Global Styles --}}
    @vite('resources/css/app.css')
    @stack('styles')
</head>
<body class="bg-gray-100">

    <div class="min-h-screen flex flex-col items-center justify-start py-10">
        {{-- Title --}}
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Pendaftaran Vendor</h1>

        {{-- Content Card --}}
        <div class="bg-white shadow-lg rounded-lg w-full max-w-3xl">
            {{-- Card Header --}}
            <div class="bg-gradient-to-r from-green-700 to-green-500 text-white p-4 rounded-t-lg">
                <h2 class="text-lg font-semibold">@yield('form-title', 'Daftar Sebagai Vendor')</h2>
            </div>

            {{-- Steps --}}
            <div class="flex justify-between px-6 py-4 bg-green-50 border-b">
                @yield('steps')
            </div>

            {{-- Form Content --}}
            <div class="p-6">
                @yield('content')
            </div>
        </div>
    </div>

    {{-- Global Scripts --}}
    @vite('resources/js/app.js')
    @stack('scripts')
</body>
</html>
