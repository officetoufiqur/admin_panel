<aside id="sidebar-multi-level-sidebar"
    class="fixed top-0 left-0 z-40 h-screen bg-gray-50 transition-all duration-300 ease-in-out lg:w-[15%] w-0 mt-16 lg:mt-0 overflow-x-hidden"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50">
        {{-- brand name --}}
        <div class="shrink-0 flex items-center mb-5 mt-1">
            <a href="{{ route('dashboard') }}" class="text-2xl font-bold ml-3">
                BrandName
            </a>
        </div>

        <ul class="space-y-2 font-medium">
            <li>
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    <x-slot name="icon">
                        <i class="fa-solid fa-gauge"></i>
                    </x-slot>
                    Dashboard
                </x-nav-link>
            </li>
            <li>
                @php
                    $isEcommerceActive =
                        request()->routeIs('dashboard') || request()->is('billing*') || request()->is('invoice*');
                @endphp
                <button type="button" id="droupdown_menu"
                    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100"
                    aria-controls="dropdownItems">
                    <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
                        <path
                            d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
                    </svg>
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">E-commerce</span>
                    <svg class="w-2.5 h-2.5 arrow-icon transform transition-transform duration-200 {{ $isEcommerceActive ? 'rotate-180' : '' }}" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul id="dropdownItems" class="{{ $isEcommerceActive ? '' : 'hidden' }} py-2 space-y-2">
                    <li>
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="pl-11 text-m">
                            Dashboard
                        </x-nav-link>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 {{ request()->is('billing*') ? 'bg-gray-100' : '' }}">Billing</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 {{ request()->is('invoice*') ? 'bg-gray-100' : '' }}">Invoice</a>
                    </li>
                </ul>
            </li>
            <li>
                <x-nav-link >
                    <x-slot name="icon">
                        <i class="fa-solid fa-gauge"></i>
                    </x-slot>
                    Another
                </x-nav-link>
            </li>
        </ul>
    </div>
</aside>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get the toggle button and dropdown
        const toggleButton = document.getElementById('droupdown_menu');
        const dropdown = document.getElementById('dropdownItems');
        const arrowIcon = document.querySelector('.arrow-icon');

        if (toggleButton && dropdown && arrowIcon) {
            toggleButton.addEventListener('click', function() {
                // Toggle dropdown visibility
                dropdown.classList.toggle('hidden');
                
                // Toggle arrow rotation
                arrowIcon.classList.toggle('rotate-180');
            });
        }
    });
</script>