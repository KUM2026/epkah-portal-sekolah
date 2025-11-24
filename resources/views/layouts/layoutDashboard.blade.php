<!DOCTYPE html>
<html lang="ms">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'e-PKAH')</title>

  {{-- Tailwind & AOS --}}
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

  {{-- CSS tambahan --}}
  @stack('styles')
</head>
<body class="font-sans bg-gray-50 text-gray-900">

  {{-- Main content dari setiap page --}}
  @yield('content')

  {{-- Script global --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script>
    AOS.init();
  </script>

  {{-- JS tambahan --}}
  @stack('scripts')
</body>
</html>
