<x-app-layout>
    <div class="p-4">
        <!-- Navbar -->
        {{-- <nav class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-4 mb-6">
            <div class="flex justify-between items-center">
                <h1 class="text-2xl font-bold text-gray-800 dark:text-white">Dashboard</h1>
                <button data-drawer-target="drawer-navigation" data-drawer-toggle="drawer-navigation" 
                        class="p-2 text-gray-500 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"/>
                    </svg>
                </button>
            </div>
        </nav> --}}

        <!-- Drawer Login/Register -->
        {{-- <div id="drawer-navigation" class="fixed top-0 left-0 z-40 w-64 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-navigation-label">
            <h3 class="text-lg font-bold mb-4 text-gray-800 dark:text-white">Masuk/Daftar</h3>
            
            <!-- Form Login -->
            <div class="mb-4">
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    </div>
                    <div class="mb-4">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                    </div>
                    <x-primary-button class="w-full justify-center">
                        {{ __('Log in') }}
                    </x-primary-button>
                </form>
            </div>

            <!-- Tombol Close -->
            <button data-drawer-dismiss="drawer-navigation" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close menu</span>
            </button>
        </div>

        <!-- Overlay -->
        <div id="drawer-overlay" class="hidden fixed inset-0 z-30 bg-black bg-opacity-50" data-drawer-dismiss="drawer-navigation"></div> --}}

        <!-- Carousel Banner -->
        <div id="default-carousel" class="relative mb-6" data-carousel="slide">
            <!-- Carousel Wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Slide 1 (Active) -->
                <div class="duration-700 ease-in-out" data-carousel-item="active">
                    <img src="{{ asset('img/banner_1.png') }}" 
                        class="absolute block w-full h-full object-cover" 
                        alt="First slide">
                </div>
                <!-- Slide 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('img/banner_2.png') }}" 
                        class="absolute block w-full h-full object-cover" 
                        alt="Second slide">
                </div>
            </div>
            
            <!-- Tombol Navigasi -->
            <button type="button" class="absolute top-1/2 left-4 -translate-y-1/2 z-30 flex items-center justify-center h-12 w-12 rounded-full bg-white/30 dark:bg-gray-800/30 hover:bg-white/50 dark:hover:bg-gray-800/60 focus:outline-none focus:ring-4 focus:ring-white dark:focus:ring-gray-800/70" data-carousel-prev>
                <svg class="w-6 h-6 text-gray-800 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                <span class="sr-only">Previous</span>
            </button>
            <button type="button" class="absolute top-1/2 right-4 -translate-y-1/2 z-30 flex items-center justify-center h-12 w-12 rounded-full bg-white/30 dark:bg-gray-800/30 hover:bg-white/50 dark:hover:bg-gray-800/60 focus:outline-none focus:ring-4 focus:ring-white dark:focus:ring-gray-800/70" data-carousel-next>
                <svg class="w-6 h-6 text-gray-800 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                <span class="sr-only">Next</span>
            </button>
        </div>

        <!-- Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                <div class="flex justify-between items-center mb-4">
                    <div class="p-3 bg-blue-500 rounded-full">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
                    </div>
                    <span class="text-sm text-gray-500 dark:text-gray-400">Wisata</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">150+</h3>
                <p class="text-gray-600 dark:text-gray-400">Destinasi Wisata</p>
            </div>
            
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                <div class="flex justify-between items-center mb-4">
                    <div class="p-3 bg-green-500 rounded-full">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3l5 5-5 5"/></svg>
                    </div>
                    <span class="text-sm text-gray-500 dark:text-gray-400">Konser</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">25+</h3>
                <p class="text-gray-600 dark:text-gray-400">Event Konser</p>
            </div>
            
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                <div class="flex justify-between items-center mb-4">
                    <div class="p-3 bg-purple-500 rounded-full">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
                    </div>
                    <span class="text-sm text-gray-500 dark:text-gray-400">Lainnya</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">50+</h3>
                <p class="text-gray-600 dark:text-gray-400">Event Lainnya</p>
            </div>
        </div>

        <!-- Charts -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
                <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-4">Statistik Pengguna</h3>
                <canvas id="userChart"></canvas>
            </div>
            
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
                <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-4">Penjualan Tiket</h3>
                <canvas id="salesChart"></canvas>
            </div>
        </div>

        <!-- Table -->
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Event</th>
                        <th scope="col" class="px-6 py-3">Tanggal</th>
                        <th scope="col" class="px-6 py-3">Penjualan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">Konser Musik</td>
                        <td class="px-6 py-4">15/08/2023</td>
                        <td class="px-6 py-4">Rp 15.000.000</td>
                    </tr>
                    <!-- Tambahkan data lainnya -->
                </tbody>
            </table>
        </div>

        <!-- Footer -->
        <footer class="bg-white dark:bg-gray-800 rounded-lg p-6 mt-6">
            <div class="flex justify-between items-center">
                <div class="text-gray-500 dark:text-gray-400">
                    © 2023 Ticketing System
                </div>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.247-2.229-.616v.064c0 2.385 1.693 4.374 3.946 4.827-.4.033-.8.048-1.2.048-.3 0-.6-.015-.9-.045.7.5 1.543 1.0 2.4 1.0 2.13 0 4.24-1.3 4.24-4.24l-.005-.112C15.332 11.45 16 9.95 16 8.444c0-1.442-.7-2.72-1.794-3.618a4.38 4.38 0 011.08-5.162c-.38-.15-.8-.25-1.24-.25H8.97c-.026 0-.05.001-.074.004A7.958 7.958 0 008 2.084V3.9c0 .05.02.1.056.14l3.24 2.16c.18.12.28.3.28.48v6.66c.002.276-.226.502-.502.502H8.5c-.276 0-.502-.226-.502-.502V9.998c0-.18.1-.36.28-.48l3.24-2.16a.146.146 0 01.146-.056h.002c.423 0 .818.295 1.032.713a2.175 2.175 0 01-.724 1.662c-.395.25-1.04.375-1.93.375-1.53 0-2.8-1.06-2.8-2.6 0-1.54 1.27-2.8 2.8-2.8 1.04 0 1.93.375 1.93.375s.366.23.724.486c.19.138.444.21.724.21.28 0 .536-.072.724-.21.36-.256.724-.646.724-1.156 0-.886-.714-1.594-1.594-1.594-.88 0-1.594.708-1.594 1.594z"/></svg>
                    </a>
                </div>
            </div>
        </footer>
    </div>
</x-app-layout>