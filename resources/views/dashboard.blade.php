<x-app-layout>
    <header class="sticky top-0 bg-white shadow-sm border-b border-gray-200 z-10">
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <div> {{-- Wrapper for title, mb-8 removed --}}
                    <h2 class="text-3xl font-bold text-gray-800 mb-2">Dashboard</h2>
                    <p class="text-gray-500">Selamat datang di dashboard deteksi dini speech delay</p>
                </div>
                
                <div class="relative" x-data="{ open: false }">
                    <button 
                        @click="open = !open"
                        class="flex items-center space-x-3 focus:outline-none"
                    >
                        <div class="text-right hidden sm:block">
                            <p class="text-sm font-medium text-gray-900">{{ auth()->user()->name }}</p>
                            <p class="text-xs text-gray-500">Orang Tua</p>
                        </div>
                        <div class="w-10 h-10 rounded-full overflow-hidden border-2 border-[#44B3E0] shadow-sm">
                            <img 
                                src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80" 
                                alt="Profile" 
                                class="w-full h-full object-cover"
                            >
                        </div>
                    </button>

                    <div 
                        x-show="open" 
                        @click.away="open = false"
                        x-transition
                        class="absolute right-0 mt-2 w-64 bg-white rounded-lg shadow-lg border border-gray-200 py-2 z-50"
                        style="display: none;"
                    >
                        {{-- ... Isi dropdown menu Anda tidak perlu diubah ... --}}
                        <div class="px-4 py-3 border-b border-gray-100">
                            <div class="flex items-center space-x-3">
                                <div class="w-12 h-12 rounded-full overflow-hidden border-2 border-[#44B3E0]">
                                    <img 
                                        src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80" 
                                        alt="Profile" 
                                        class="w-full h-full object-cover"
                                    >
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-gray-900">{{ auth()->user()->name }}</p>
                                    <p class="text-xs text-gray-500">Orang Tua</p>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('profile.index') }}" class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 transition-colors duration-200">
                            <svg class="w-5 h-5 text-gray-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                            Profile Pengguna
                        </a>
                        <a href="#" class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 transition-colors duration-200">
                            <svg class="w-5 h-5 text-gray-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/></svg>
                            Data Anak
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="p-6 lg:p-8 bg-gray-50">
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