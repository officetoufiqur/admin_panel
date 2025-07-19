<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/flowbite@2.3.0/dist/flowbite.min.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="">
        @include('layouts.navigation')
        @include('layouts.sidebar')
        <!-- Page Content -->
        <main id="main" class="mt-20 lg:ml-[16%] bg-white transition-all duration-300 ease-in-out">
            {{ $slot }}
        </main>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @stack('scripts')
    <script>
        const toggleBtn = document.querySelector('.toggle-btn');
        const toggleNavbtn = document.querySelector('.toggle-navbtn');
        const sidebar = document.querySelector('#sidebar-multi-level-sidebar');
        const topbar = document.querySelector('#topbar');
        const main = document.querySelector('#main');

        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('lg:w-[2.5%]');
            topbar.classList.toggle('lg:pl-[2.5%]');
            main.classList.toggle('lg:ml-[4%]');
        });

        toggleNavbtn.addEventListener('click', () => {
            sidebar.classList.toggle('w-96');
        });
    </script>
</body>

</html>
