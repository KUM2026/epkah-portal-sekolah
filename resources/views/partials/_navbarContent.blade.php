{{-- resources/views/partials/_navbarContent.blade.php --}}
@php
    // Dummy user data (no DB required)
    $user = [
        'name' => 'IFFAH AMIRAH',
        'avatar' => 'https://ui-avatars.com/api/?name=John+Doe'
    ];
@endphp

<nav class="bg-white shadow-md sticky top-0 z-50" role="navigation" aria-label="Primary navigation">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">

            {{-- Logo --}}
            <div class="flex-shrink-0 flex items-center">
                </div>
                
            {{-- Desktop Right Menu --}}
            <div class="hidden md:flex md:items-center md:space-x-4">

                {{-- Notifications --}}
                <button class="relative p-2 rounded-full hover:bg-gray-100 focus:outline-none" aria-label="Notifications">
                    <svg class="h-6 w-6 text-gray-600 hover:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6 6 0 10-12 0v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                    <span class="absolute top-0 right-0 inline-block w-2 h-2 bg-red-500 rounded-full" aria-hidden="true"></span>
                </button>

                {{-- Profile Dropdown --}}
                <div class="relative">
                    <button id="profileBtn" aria-haspopup="true" aria-expanded="false" class="flex items-center space-x-2 rounded-full hover:bg-gray-100 p-1 focus:outline-none" title="Profile">
                        <img class="h-8 w-8 rounded-full object-cover" src="{{ $user['avatar'] }}" alt="Profile" />
                        <svg class="h-4 w-4 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    {{-- Dropdown menu --}}
                    <div id="profileDropdown" class="hidden absolute right-0 mt-2 w-48 bg-white border rounded-md shadow-lg py-1 z-50" role="menu" aria-label="Profile menu">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Profile</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Settings</a>
                        <button class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Logout</button>
                    </div>
                </div>
            </div>

            {{-- Mobile menu button --}}
            <div class="md:hidden flex items-center">
                <button id="mobileMenuBtn" aria-controls="mobileMenu" aria-expanded="false" aria-label="Open menu" class="p-2 rounded-md text-gray-600 hover:bg-gray-100 focus:outline-none">
                    <svg id="mobileMenuIconOpen" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"/>
                    </svg>
                    <svg id="mobileMenuIconClose" class="h-6 w-6 hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

        </div>
    </div>

    {{-- Mobile Menu --}}
    <div id="mobileMenu" class="md:hidden hidden px-4 pt-2 pb-4 space-y-1" role="menu" aria-label="Mobile menu">
        <a href="#" class="block px-3 py-2 rounded text-gray-700 hover:bg-gray-100" role="menuitem">Home</a>
        <a href="#" class="block px-3 py-2 rounded text-gray-700 hover:bg-gray-100" role="menuitem">Profile</a>
        <a href="#" class="block px-3 py-2 rounded text-gray-700 hover:bg-gray-100" role="menuitem">Settings</a>
        <button class="w-full text-left px-3 py-2 rounded text-gray-700 hover:bg-gray-100" role="menuitem">Logout</button>
    </div>
</nav>

{{-- JS for dropdown and mobile menu --}}
<script>
(function(){
    // Mobile Menu
    const mobileBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    const mobileOpen = document.getElementById('mobileMenuIconOpen');
    const mobileClose = document.getElementById('mobileMenuIconClose');

    mobileBtn?.addEventListener('click', (e) => {
        e.stopPropagation();
        const isHidden = mobileMenu.classList.contains('hidden');
        mobileMenu.classList.toggle('hidden', !isHidden);
        mobileOpen.classList.toggle('hidden', isHidden);
        mobileClose.classList.toggle('hidden', !isHidden);
        mobileBtn.setAttribute('aria-expanded', isHidden ? 'true' : 'false');
    });

    document.addEventListener('click', (e) => {
        if (!mobileMenu.contains(e.target) && !mobileBtn.contains(e.target)) {
            mobileMenu.classList.add('hidden');
            mobileOpen.classList.remove('hidden');
            mobileClose.classList.add('hidden');
            mobileBtn.setAttribute('aria-expanded', 'false');
        }
    });

    // Profile Dropdown
    const profileBtn = document.getElementById('profileBtn');
    const profileDropdown = document.getElementById('profileDropdown');

    profileBtn?.addEventListener('click', (e) => {
        e.stopPropagation();
        profileDropdown.classList.toggle('hidden');
        profileBtn.setAttribute('aria-expanded', !profileDropdown.classList.contains('hidden'));
    });

    document.addEventListener('click', () => {
        profileDropdown.classList.add('hidden');
        profileBtn.setAttribute('aria-expanded', 'false');
    });
})();
</script>
