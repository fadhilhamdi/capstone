<x-app-layout>
    <div class="min-h-screen bg-gray-50">
        <!-- White Header -->
        <div class="bg-white shadow-sm border-b border-gray-200">
            <div class="px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center py-4">
                    <!-- Page Title -->
                    <h1 class="text-2xl font-bold text-gray-800">Pemeriksaan Awal</h1>
                    
                    <!-- User Profile with Dropdown -->
                    <div class="relative" x-data="{ open: false }">
                        <!-- Profile Trigger -->
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

                        <!-- Dropdown Menu -->
                        <div 
                            x-show="open" 
                            @click.away="open = false"
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 transform scale-95"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="opacity-100 transform scale-100"
                            x-transition:leave-end="opacity-0 transform scale-95"
                            class="absolute right-0 mt-2 w-64 bg-white rounded-lg shadow-lg border border-gray-200 py-2 z-50"
                            style="display: none;"
                        >
                            <!-- User Info -->
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

                            <!-- Profile Link -->
                            <a 
                                href="{{ route('profile.index') }}" 
                                class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 transition-colors duration-200"
                            >
                                <svg class="w-5 h-5 text-gray-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                                Profile Pengguna
                            </a>

                            <!-- Data Anak Link -->
                            <a 
                                href="{{ route('anak.index') }}" 
                                class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 transition-colors duration-200"
                            >
                                <svg class="w-5 h-5 text-gray-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
                                </svg>
                                Data Anak
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="p-6">
            <!-- Screening Section -->
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 mb-6">
                <h2 class="text-lg font-semibold text-gray-700 mb-4">Screening</h2>
                <a href="{{ route('screening.index') }}">
                    <div class="flex items-center justify-center">
                        <button class="bg-[#44B3E0] hover:bg-[#3A9BC7] text-white px-6 py-3 rounded-lg font-medium transition-colors duration-200">
                            + Mulai Screening
                        </button>
                    </div>
                </a>
            </div>

            <!-- Two Column Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- History Screening -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                    <h2 class="text-lg font-semibold text-gray-700 mb-4">History Screening</h2>
                    <div class="bg-gray-50 border-2 border-dashed border-gray-300 rounded-lg h-48 flex items-center justify-center">
                        <span class="text-gray-500 text-sm">Chart Perkembangan Speech</span>
                    </div>
                </div>

                <!-- Diagnosis Awal -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                    <h2 class="text-lg font-semibold text-gray-700 mb-4">Diagnosis Awal</h2>
                    <div class="bg-gray-50 border-2 border-dashed border-gray-300 rounded-lg h-48 flex items-center justify-center">
                        <span class="text-gray-500 text-sm">Chart Perkembangan Speech</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Alpine.js for dropdown functionality -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</x-app-layout>