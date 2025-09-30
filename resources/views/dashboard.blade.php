<x-app-layout>
    <!-- Header -->
    <div class="mb-8">
        <h2 class="text-3xl font-bold text-gray-800 mb-2">Dashboard</h2>
        <p class="text-gray-500">Selamat datang di dashboard deteksi dini speech delay</p>
    </div>

    <!-- Statistik Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Card 1 -->
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow duration-200">
            <p class="text-gray-500 text-sm font-medium">Total Screening</p>
            <h3 class="text-3xl font-bold text-gray-800 my-2">24</h3>
            <div class="flex items-center text-green-600 text-sm font-medium">
                +12% dari bulan lalu
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow duration-200">
            <p class="text-gray-500 text-sm font-medium">Tingkatan Gejala</p>
            <h3 class="text-3xl font-bold text-gray-800 my-2">3</h3>
            <p class="text-[#FDC564] text-sm font-medium">Butuh tindak lanjut</p>
        </div>

        <!-- Card 3 -->
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow duration-200">
            <p class="text-gray-500 text-sm font-medium">Normal</p>
            <h3 class="text-3xl font-bold text-gray-800 my-2">21</h3>
            <p class="text-[#B7CC67] text-sm font-medium">Perkembangan baik</p>
        </div>

        <!-- Card 4 -->
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow duration-200">
            <p class="text-gray-500 text-sm font-medium">Reminder Aktif</p>
            <h3 class="text-3xl font-bold text-gray-800 my-2">5</h3>
            <p class="text-[#FA9EB7] text-sm font-medium">Jadwal mendatang</p>
        </div>
    </div>

    <!-- Grafik & Aktivitas -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
        <!-- Grafik -->
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 lg:col-span-2">
            <div class="flex items-center justify-between mb-6">
                <h4 class="font-semibold text-gray-700">Grafik Perkembangan</h4>
                <div class="flex space-x-2">
                    <button class="px-3 py-1 text-xs bg-gray-100 rounded-lg text-gray-600 hover:bg-gray-200">Minggu</button>
                    <button class="px-3 py-1 text-xs bg-[#44B3E0] text-white rounded-lg">Bulan</button>
                    <button class="px-3 py-1 text-xs bg-gray-100 rounded-lg text-gray-600 hover:bg-gray-200">Tahun</button>
                </div>
            </div>
            <div class="h-64 flex items-center justify-center text-gray-400 border-2 border-dashed border-gray-200 rounded-xl">
                <div class="text-center">
                    <svg class="w-12 h-12 mx-auto text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                    <p class="mt-2">Chart Perkembangan Speech</p>
                </div>
            </div>
        </div>
        
        <!-- Aktivitas -->
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
            <div class="flex items-center justify-between mb-6">
                <h4 class="font-semibold text-gray-700">Aktivitas Terbaru</h4>
                <button class="text-[#44B3E0] text-sm font-medium">Lihat semua</button>
            </div>
            <ul class="space-y-4">
                <li class="p-4 rounded-xl border border-gray-100 hover:border-[#44B3E0] transition-colors duration-200">
                    <div class="flex items-center space-x-3">
                        <div class="w-2 h-2 bg-[#B7CC67] rounded-full"></div>
                        <span class="text-gray-700 font-medium flex-1">Hasil screening Januari</span>
                    </div>
                    <span class="text-gray-500 text-sm mt-2 block">3 bulan yang lalu</span>
                </li>
                <li class="p-4 rounded-xl border border-gray-100 hover:border-[#44B3E0] transition-colors duration-200">
                    <div class="flex items-center space-x-3">
                        <div class="w-2 h-2 bg-[#FDC564] rounded-full"></div>
                        <span class="text-gray-700 font-medium flex-1">Hasil Screening Februari</span>
                    </div>
                    <span class="text-gray-500 text-sm mt-2 block">2 bulan yang lalu</span>
                </li>
                <li class="p-4 rounded-xl border border-gray-100 hover:border-[#44B3E0] transition-colors duration-200">
                    <div class="flex items-center space-x-3">
                        <div class="w-2 h-2 bg-[#FA9EB7] rounded-full"></div>
                        <span class="text-gray-700 font-medium flex-1">Hasil Screening Maret</span>
                    </div>
                    <span class="text-gray-500 text-sm mt-2 block">1 bulan yang lalu</span>
                </li>
            </ul>
        </div>
    </div>

    <!-- Aksi Cepat -->
    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
        <h4 class="font-semibold text-gray-700 mb-6">Aksi Cepat</h4>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <button class="bg-gradient-to-r from-[#44B3E0] to-[#89D4F3] text-white px-6 py-4 rounded-xl font-semibold hover:shadow-lg transition-all duration-200 flex items-center justify-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                </svg>
                <span>Mulai Screening</span>
            </button>
            <button class="border border-gray-200 px-6 py-4 rounded-xl text-gray-700 font-medium hover:border-[#B7CC67] hover:text-[#B7CC67] transition-all duration-200 flex items-center justify-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
                <span>Lihat Laporan</span>
            </button>
            <button class="border border-gray-200 px-6 py-4 rounded-xl text-gray-700 font-medium hover:border-[#FDC564] hover:text-[#FDC564] transition-all duration-200 flex items-center justify-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <span>Atur Reminder</span>
            </button>
            <button class="border border-gray-200 px-6 py-4 rounded-xl text-gray-700 font-medium hover:border-[#FA9EB7] hover:text-[#FA9EB7] transition-all duration-200 flex items-center justify-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                </svg>
                <span>Edukasi</span>
            </button>
        </div>
    </div>
</x-app-layout>