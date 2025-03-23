<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('FAQ') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold mb-4">Pertanyaan Umum</h3>
                    <div class="space-y-4" x-data="{ open: null }">
                        <!-- FAQ Item 1 -->
                        <div class="border border-gray-200 dark:border-gray-700 rounded-lg">
                            <button @click="open === 1 ? open = null : open = 1"
                                class="flex items-center justify-between w-full p-4 text-left text-gray-900 dark:text-gray-100 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 mr-3 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="font-medium">Apa itu sistem manajemen tiket?</span>
                                </div>
                                <svg class="w-5 h-5 transform transition-transform duration-200"
                                    :class="{ 'rotate-180': open === 1 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div x-show="open === 1" x-collapse class="p-4 pt-0 text-sm text-gray-600 dark:text-gray-400">
                                Sistem manajemen tiket adalah aplikasi yang digunakan untuk mengelola permintaan atau masalah yang diajukan oleh pengguna.
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="border border-gray-200 dark:border-gray-700 rounded-lg">
                            <button @click="open === 2 ? open = null : open = 2"
                                class="flex items-center justify-between w-full p-4 text-left text-gray-900 dark:text-gray-100 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 mr-3 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="font-medium">Bagaimana cara mengajukan tiket?</span>
                                </div>
                                <svg class="w-5 h-5 transform transition-transform duration-200"
                                    :class="{ 'rotate-180': open === 2 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div x-show="open === 2" x-collapse class="p-4 pt-0 text-sm text-gray-600 dark:text-gray-400">
                                Anda dapat mengajukan tiket dengan mengisi formulir yang tersedia di halaman "Tiket".
                            </div>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div class="border border-gray-200 dark:border-gray-700 rounded-lg">
                            <button @click="open === 3 ? open = null : open = 3"
                                class="flex items-center justify-between w-full p-4 text-left text-gray-900 dark:text-gray-100 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 mr-3 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="font-medium">Bagaimana cara melacak status tiket?</span>
                                </div>
                                <svg class="w-5 h-5 transform transition-transform duration-200"
                                    :class="{ 'rotate-180': open === 3 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div x-show="open === 3" x-collapse class="p-4 pt-0 text-sm text-gray-600 dark:text-gray-400">
                                Anda dapat melacak status tiket dengan masuk ke akun Anda dan melihat daftar tiket yang telah diajukan.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>