<nav class="fixed top-0 left-0 w-full z-50 mt-3">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <!-- Brand -->
            <div class="flex items-center gap-4">
                <a href="{{ route('home') }}" class="text-2xl font-bold text-gray-900">BrandName</a>
            </div>

            <!-- Desktop Links -->
            <div class="hidden lg:flex gap-8">
                <a href="{{ route('dashboard') }}" class="text-lg font-medium text-gray-900 hover:text-gray-600 transition">Dashboard</a>
                <a href="#" class="text-lg font-medium text-gray-900 hover:text-gray-600 transition">Team</a>
                <a href="#" class="text-lg font-medium text-gray-900 hover:text-gray-600 transition">Projects</a>
                <a href="#" class="text-lg font-medium text-gray-900 hover:text-gray-600 transition">Calendar</a>
            </div>

            <!-- Right Side (Login/Profile) -->
            <div class="flex items-center gap-4">
                @if (Route::has('login'))
                    @auth
                        <!-- Notification Icon -->
                        <button type="button" class="text-gray-600 hover:text-gray-800">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0018 9.75V9a6 6 0 00-12 0v.75a8.967 8.967 0 01-2.312 6.022 23.85 23.85 0 005.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0 3 3 0 005.714 0z" />
                            </svg>
                        </button>

                        <!-- Profile Dropdown -->
                        <div class="relative">
                            <button id="user-menu-button" class="focus:outline-none">
                                <img class="w-8 h-8 rounded-full"
                                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="user avatar">
                            </button>
                            <div id="user-menu"
                                class="hidden absolute right-0 mt-2 w-48 bg-white border rounded-md shadow-lg py-2 z-50">
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profile</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Settings</a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit"
                                        class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</button>
                                </form>
                            </div>
                        </div>
                    @else
                        <a href="{{ route('login') }}"
                            class="text-gray-900 text-lg font-medium hover:text-gray-600">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="text-gray-900 text-lg font-medium hover:text-gray-600">Register</a>
                        @endif
                    @endauth
                @endif

                <!-- Mobile Toggle -->
                <button id="toggle-navbtn" class="lg:hidden text-gray-800 text-2xl focus:outline-none">
                    <i class="fas fa-bars-staggered"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden lg:hidden bg-white shadow-md">
        <div class="px-4 pt-4 pb-3 space-y-1">
            <a href="#" class="block text-base font-medium text-gray-700 hover:bg-gray-100 px-3 py-2 rounded-md">Dashboard</a>
            <a href="#" class="block text-base font-medium text-gray-700 hover:bg-gray-100 px-3 py-2 rounded-md">Team</a>
            <a href="#" class="block text-base font-medium text-gray-700 hover:bg-gray-100 px-3 py-2 rounded-md">Projects</a>
            <a href="#" class="block text-base font-medium text-gray-700 hover:bg-gray-100 px-3 py-2 rounded-md">Calendar</a>
        </div>
    </div>
</nav>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const userBtn = document.getElementById('user-menu-button');
        const userMenu = document.getElementById('user-menu');
        const toggleNavBtn = document.getElementById('toggle-navbtn');
        const mobileMenu = document.getElementById('mobile-menu');

        if (userBtn && userMenu) {
            userBtn.addEventListener('click', () => {
                userMenu.classList.toggle('hidden');
            });
        }

        if (toggleNavBtn && mobileMenu) {
            toggleNavBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }

        // Optional: close dropdown on outside click
        document.addEventListener('click', function (event) {
            if (!userBtn.contains(event.target) && !userMenu.contains(event.target)) {
                userMenu?.classList.add('hidden');
            }
        });
    });
</script>
