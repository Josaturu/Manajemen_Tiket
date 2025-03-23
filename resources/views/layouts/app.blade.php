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
        <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                <div class="px-3 py-3">
                    @if (session()->has('success'))
                        <x-toast-success :message="session('success')"></x-toast-success>
                    @elseif(session()->has('error'))
                        <x-toast-error :message="session('error')"></x-toast-error>
                    @elseif(session()->has('warning'))
                        <x-toast-warning :message="session('warning')"></x-toast-warning>
                    @endif

                    {{ $slot }}
                </div>
            </main>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Inisialisasi carousel
                const carousel = new Carousel(document.getElementById('default-carousel'), {
                interval: 3000 // Waktu animasi otomatis
                });
            });

            document.addEventListener('alpine:init', () => {
                Alpine.data('theme', () => ({
                    isDarkMode: localStorage.getItem('theme') === 'dark',
        
                    toggleTheme() {
                        this.isDarkMode = !this.isDarkMode;
                        localStorage.setItem('theme', this.isDarkMode ? 'dark' : 'light');
                        document.documentElement.classList.toggle('dark', this.isDarkMode);
                    },
        
                    init() {
                        // Set tema awal berdasarkan localStorage atau preferensi sistem
                        if (localStorage.getItem('theme') === 'dark' || 
                            (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                            document.documentElement.classList.add('dark');
                            this.isDarkMode = true;
                        } else {
                            document.documentElement.classList.remove('dark');
                            this.isDarkMode = false;
                        }
                    }
                }));
            });

            document.addEventListener('DOMContentLoaded', function () {
                // Select elements
                const drawer = document.getElementById('drawer-navigation');
                const overlay = document.getElementById('drawer-overlay');

                // Function to open the drawer
                const openDrawer = () => {
                    drawer.classList.remove('-translate-x-full'); // Show the drawer
                    overlay.classList.remove('hidden'); // Show the overlay
                };

                // Function to close the drawer
                const closeDrawer = () => {
                    drawer.classList.add('-translate-x-full'); // Hide the drawer
                    overlay.classList.add('hidden'); // Hide the overlay
                };

                // Open drawer when toggle button is clicked
                document.querySelectorAll('[data-drawer-toggle="drawer-navigation"]').forEach((button) => {
                    button.addEventListener('click', openDrawer);
                });

                // Close drawer when dismiss button or overlay is clicked
                document.querySelectorAll('[data-drawer-dismiss="drawer-navigation"]').forEach((element) => {
                    element.addEventListener('click', closeDrawer);
                });

                // Close drawer when clicking outside (on overlay)
                overlay.addEventListener('click', closeDrawer);
            });

            // User Chart
            const userCtx = document.getElementById('userChart').getContext('2d');
            new Chart(userCtx, {
                type: 'bar',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                    datasets: [{
                        label: 'Pengguna Baru',
                        data: [65, 59, 80, 81, 56, 55],
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Sales Chart
            const salesCtx = document.getElementById('salesChart').getContext('2d');
            new Chart(salesCtx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                    datasets: [{
                        label: 'Penjualan Tiket',
                        data: [65, 59, 80, 81, 56, 55],
                        fill: true,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        tension: 0.1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    </body>
</html>
