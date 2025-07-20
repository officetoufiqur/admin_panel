<nav x-data="{ open: false }" class="bg-gray-50 border-b border-gray-100 fixed top-0 w-full">
    <!-- Primary Navigation Menu -->
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center px-2">
            <div id="topbar" class="flex items-center lg:pl-64 transition-all duration-300 ease-in-out">
                <div class="toggle-btn flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="cursor-pointer hidden lg:block font-semibold"
                        width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-panel-left-icon">
                        <rect width="18" height="18" x="3" y="3" rx="2"></rect>
                        <path d="M9 3v18"></path>
                    </svg>
                </div>
                <div class="flex items-center">
                    <div class="shrink-0 flex items-center my-5 lg:hidden">
                        <a href="{{ route('dashboard') }}" class="text-2xl font-bold ml-3">
                            BrandName
                        </a>
                    </div>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="flex items-center">
                <div class="sm:flex sm:items-center sm:ms-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 border border-transparent leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
                <i class="fa-solid fa-bars-staggered cursor-pointer lg:hidden toggle-navbtn"></i>
            </div>
        </div>
    </div>

</nav>
@push('scripts')
    <script>
        const toggleBtn = document.querySelector('.toggle-btn');
        const toggleNavbtn = document.querySelector('.toggle-navbtn');
        const sidebar = document.querySelector('#sidebar-multi-level-sidebar');
        const topbar = document.querySelector('#topbar');
        const main = document.querySelector('#main');

        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('lg:w-[2.5%]');
            topbar.classList.toggle('lg:pl-8');
            main.classList.toggle('lg:ml-[4%]');
        });

        toggleNavbtn.addEventListener('click', () => {
            sidebar.classList.toggle('w-96');
        });
    </script>
@endpush
