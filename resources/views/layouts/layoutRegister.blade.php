<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-PKAH</title>

    {{-- Global CSS & JS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Page specific CSS --}}
    @stack('styles')
</head>
<body class="bg-gradient-to-br from-green-50 via-white to-green-100 min-h-screen font-sans">

    <!-- Navbar -->
    @include('partials._navbar')
    
    <!-- Main Content -->
    <main class="max-w-4xl mx-auto mt-12 px-4">
        @yield('content')
    </main>

    {{-- Page specific JS --}}
    @stack('scripts')
</body>
</html>
