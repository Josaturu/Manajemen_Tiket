<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Laporan Tiket') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold mb-4">Statistik Tiket Berdasarkan Status</h3>

                    <!-- Card untuk Menampilkan Total Tiket -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                        <div class="p-4 bg-blue-50 dark:bg-blue-900 rounded-lg">
                            <p class="text-sm font-medium text-blue-700 dark:text-blue-200">Total Tiket</p>
                            <p class="text-2xl font-semibold text-blue-900 dark:text-blue-100">{{ array_sum($data) }}</p>
                        </div>
                        <div class="p-4 bg-green-50 dark:bg-green-900 rounded-lg">
                            <p class="text-sm font-medium text-green-700 dark:text-green-200">Tiket Open</p>
                            <p class="text-2xl font-semibold text-green-900 dark:text-green-100">{{ $data[0] }}</p>
                        </div>
                        <div class="p-4 bg-yellow-50 dark:bg-yellow-900 rounded-lg">
                            <p class="text-sm font-medium text-yellow-700 dark:text-yellow-200">Tiket In Progress</p>
                            <p class="text-2xl font-semibold text-yellow-900 dark:text-yellow-100">{{ $data[1] }}</p>
                        </div>
                        <div class="p-4 bg-red-50 dark:bg-red-900 rounded-lg">
                            <p class="text-sm font-medium text-red-700 dark:text-red-200">Tiket Closed</p>
                            <p class="text-2xl font-semibold text-red-900 dark:text-red-100">{{ $data[3] }}</p>
                        </div>
                    </div>

                    <!-- Chart -->
                    <div class="mt-6">
                        <canvas id="ticketChart" class="w-full h-64"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script untuk Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('ticketChart').getContext('2d');
        const ticketChart = new Chart(ctx, {
            type: 'bar', // Jenis chart (bisa diubah ke 'pie', 'line', dll.)
            data: {
                labels: @json($labels), // Label untuk sumbu X
                datasets: [{
                    label: 'Jumlah Tiket',
                    data: @json($data), // Data untuk chart
                    backgroundColor: [
                        'rgba(59, 130, 246, 0.2)', // Warna untuk Open
                        'rgba(255, 205, 86, 0.2)', // Warna untuk In Progress
                        'rgba(75, 192, 192, 0.2)', // Warna untuk Resolved
                        'rgba(255, 99, 132, 0.2)', // Warna untuk Closed
                    ],
                    borderColor: [
                        'rgba(59, 130, 246, 1)', // Warna border untuk Open
                        'rgba(255, 205, 86, 1)', // Warna border untuk In Progress
                        'rgba(75, 192, 192, 1)', // Warna border untuk Resolved
                        'rgba(255, 99, 132, 1)', // Warna border untuk Closed
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'top',
                    }
                }
            }
        });
    </script>
</x-app-layout>