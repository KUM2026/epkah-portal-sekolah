<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>

    {{-- Load Tailwind + App CSS + Sidebar CSS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')

    {{-- Font Awesome --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-50 text-gray-800">

    <div class="flex h-screen overflow-hidden">
        {{-- Sidebar (fixed on the left) --}}
        @include('partials.admin._sidebar')

        {{-- Main content (navbar + page) --}}
        <div class="flex-1 flex flex-col ml-64">
            
            {{-- Navbar (fixed at top) --}}
            <div class="fixed top-0 left-64 right-0 z-50 bg-white shadow">
                @include('partials._navbarContent')
            </div>

            {{-- Page content --}}
            <main class="flex-1 overflow-y-auto bg-gray-50 p-6 mt-[72px]">
                @yield('content')
            </main>
        </div>
    </div>

    {{-- AlpineJS for interactivity --}}
    <script src="//unpkg.com/alpinejs" defer></script>

    {{-- Page-specific scripts --}}
    @stack('scripts')

    {{-- Sidebar toggle for mobile --}}
    <script>
        (function(){
            const btn = document.getElementById('mobileSidebarToggle');
            const sidebar = document.getElementById('adminSidebar');
            if (btn && sidebar) {
                btn.addEventListener('click', () => {
                    sidebar.classList.toggle('-translate-x-full');
                });
            }
        })();
    </script>
</body>
</html>
