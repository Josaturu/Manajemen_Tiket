<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TicketPro - Sistem Manajemen Tiket</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</head>
<body class="bg-gray-50 dark:bg-gray-900">
    <!-- Navbar -->
    <nav class="bg-white dark:bg-gray-800 border-b dark:border-gray-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="/" class="text-2xl font-bold text-gray-800 dark:text-white">
                        TicketPro
                    </a>
                </div>
                <div class="hidden sm:ml-6 sm:flex sm:items-center">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="ml-8 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                                Login
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                                    Register
                                </a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="bg-gradient-to-r from-blue-600 to-purple-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div>
                    <h1 class="text-5xl font-bold mb-4">Sistem Manajemen Tiket Terintegrasi</h1>
                    <p class="text-xl mb-8">Kelola tiket konser, wisata, dan event lainnya dengan mudah dalam satu platform</p>
                    <a href="#features" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-700 hover:bg-blue-800">
                        Pelajari Fitur
                    </a>
                </div>
                <div class="hidden md:block">
                    <img src="img/banner4.png" alt="Ticket Management" class="rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </header>

    <!-- Features Section -->
    <section id="features" class="py-16 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold text-gray-900 dark:text-white">Fitur Utama</h2>
                <p class="mt-2 text-lg text-gray-600 dark:text-gray-400">Semua yang Anda butuhkan untuk manajemen tiket profesional</p>
            </div>
            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-6 bg-gray-50 dark:bg-gray-800 rounded-lg shadow hover:shadow-lg transition-shadow">
                    <div class="flex items-center justify-center w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-full mb-4">
                        <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-2">Pemesanan Tiket Cepat</h3>
                    <p class="text-gray-600 dark:text-gray-400">Proses pemesanan dalam 3 langkah mudah</p>
                </div>
                <div class="p-6 bg-gray-50 dark:bg-gray-800 rounded-lg shadow hover:shadow-lg transition-shadow">
                    <div class="flex items-center justify-center w-12 h-12 bg-green-100 dark:bg-green-900 rounded-full mb-4">
                        <svg class="w-6 h-6 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-2">Manajemen Event</h3>
                    <p class="text-gray-600 dark:text-gray-400">Buat dan kelola event dengan mudah</p>
                </div>
                <div class="p-6 bg-gray-50 dark:bg-gray-800 rounded-lg shadow hover:shadow-lg transition-shadow">
                    <div class="flex items-center justify-center w-12 h-12 bg-purple-100 dark:bg-purple-900 rounded-full mb-4">
                        <svg class="w-6 h-6 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9m0 10h2m-2 0h4m-4-4h4m-6 4h6"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-2">Laporan Real-time</h3>
                    <p class="text-gray-600 dark:text-gray-400">Pantau penjualan dan statistik secara real-time</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="py-16 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-12">Apa Kata Pengguna</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white dark:bg-gray-900 p-6 rounded-lg shadow-lg">
                    <p class="text-gray-600 dark:text-gray-400 mb-4">"Sistem ini mengubah cara kami mengelola event! Sangat mudah digunakan dan fiturnya lengkap."</p>
                    <div class="flex items-center">
                        <img class="w-10 h-10 rounded-full mr-4" src="https://randomuser.me/api/portraits/women/20.jpg" alt="Avatar">
                        <div>
                            <p class="font-semibold text-gray-800 dark:text-white">Sarah</p>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Event Organizer</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white dark:bg-gray-900 p-6 rounded-lg shadow-lg">
                    <p class="text-gray-600 dark:text-gray-400 mb-4">"Pengalaman terbaik dalam manajemen tiket online. Support yang responsif dan fitur yang up-to-date."</p>
                    <div class="flex items-center">
                        <img class="w-10 h-10 rounded-full mr-4" src="https://randomuser.me/api/portraits/men/30.jpg" alt="Avatar">
                        <div>
                            <p class="font-semibold text-gray-800 dark:text-white">Andi</p>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Konser Organizer</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white dark:bg-gray-900 p-6 rounded-lg shadow-lg">
                    <p class="text-gray-600 dark:text-gray-400 mb-4">"Sudah coba beberapa platform, TicketPro paling lengkap fitur analitiknya."</p>
                    <div class="flex items-center">
                        <img class="w-10 h-10 rounded-full mr-4" src="https://randomuser.me/api/portraits/women/40.jpg" alt="Avatar">
                        <div>
                            <p class="font-semibold text-gray-800 dark:text-white">Dewi</p>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Wisata Manager</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="py-16 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">Paket Berlangganan</h2>
                <p class="text-lg text-gray-600 dark:text-gray-400">Pilih paket yang sesuai dengan kebutuhan bisnis Anda</p>
            </div>
            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-lg shadow hover:shadow-lg transition-shadow">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Basic</h3>
                    <p class="text-3xl font-bold text-gray-900 dark:text-white mb-4">Rp 250.000/bulan</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center text-gray-600 dark:text-gray-400">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            10 Event/Bulan
                        </li>
                        <li class="flex items-center text-gray-600 dark:text-gray-400">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            500 Tiket/Bulan
                        </li>
                        <li class="flex items-center text-gray-600 dark:text-gray-400">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Laporan Dasar
                        </li>
                    </ul>
                    <a href="#" class="block w-full bg-blue-600 text-white py-2 rounded-md text-center hover:bg-blue-700 transition-colors">
                        Pilih Paket
                    </a>
                </div>
                <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-lg shadow hover:shadow-lg transition-shadow">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Pro</h3>
                    <p class="text-3xl font-bold text-gray-900 dark:text-white mb-4">Rp 500.000/bulan</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center text-gray-600 dark:text-gray-400">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            50 Event/Bulan
                        </li>
                        <li class="flex items-center text-gray-600 dark:text-gray-400">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            5.000 Tiket/Bulan
                        </li>
                        <li class="flex items-center text-gray-600 dark:text-gray-400">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Laporan Lanjutan
                        </li>
                    </ul>
                    <a href="#" class="block w-full bg-blue-600 text-white py-2 rounded-md text-center hover:bg-blue-700 transition-colors">
                        Pilih Paket
                    </a>
                </div>
                <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-lg shadow hover:shadow-lg transition-shadow">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Enterprise</h3>
                    <p class="text-3xl font-bold text-gray-900 dark:text-white mb-4">Hubungi Kami</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center text-gray-600 dark:text-gray-400">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Event Unlimited
                        </li>
                        <li class="flex items-center text-gray-600 dark:text-gray-400">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Tiket Unlimited
                        </li>
                        <li class="flex items-center text-gray-600 dark:text-gray-400">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Custom Fitur
                        </li>
                    </ul>
                    <a href="#" class="block w-full bg-blue-600 text-white py-2 rounded-md text-center hover:bg-blue-700 transition-colors">
                        Konsultasi
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-white text-lg font-semibold mb-4">TicketPro</h3>
                    <p class="text-gray-400">Platform manajemen tiket terlengkap untuk berbagai jenis event</p>
                </div>
                <div>
                    <h3 class="text-white text-lg font-semibold mb-4">Menu Cepat</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Fitur</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Harga</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Testimoni</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Kontak</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-white text-lg font-semibold mb-4">Hubungi Kami</h3>
                    <p class="text-gray-400 mb-2">support@ticketpro.com</p>
                    <p class="text-gray-400">+62 812-3456-7890</p>
                </div>
            </div>
            <div class="mt-8 border-t border-gray-700 pt-8">
                <p class="text-center text-gray-400">© 2024 TicketPro. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>