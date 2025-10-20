<x-app-layout>
    <header class="sticky top-0 bg-white shadow-sm border-b border-gray-200 z-10">
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <div>
                    <h2 class="text-2xl font-semibold text-gray-800">Data Anak</h2>
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
                        <a href="{{ route('profile.index') }}" class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 transition-colors duration-200">
                            <svg class="w-5 h-5 text-gray-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/></svg>
                            Data Anak
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="max-w-4xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <!-- Profile Information Card -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
            <!-- Header Section -->
            <div class="bg-gradient-to-r from-[#44B3E0] to-[#3A9BC7] px-6 py-4">
                <div class="flex justify-between items-center">
                    <h2 class="text-xl font-semibold text-white">Informasi Data Anak</h2>
                    <a 
                        href="{{ route('profile.edit') }}" 
                        class="flex items-center px-4 py-2 text-sm font-medium text-white bg-white/20 hover:bg-white/30 rounded-lg transition-colors duration-200 backdrop-blur-sm"
                    >
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                        </svg>
                        Edit Data Anak
                    </a>
                </div>
            </div>
            
            <!-- Content Section -->
            <div class="p-6">

                <!-- User Information Grid -->
                <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                            <div class="bg-gray-50 px-4 py-3 rounded-lg border border-gray-200">
                                <p class="text-gray-900">{{ auth()->user()->name }}</p>
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Tanggal Lahir</label>
                            <div class="bg-gray-50 px-4 py-3 rounded-lg border border-gray-200">
                                <p class="text-gray-900">15 Maret 1985</p>
                            </div>
                        </div>

                         <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Umur</label>
                            <div class="bg-gray-50 px-4 py-3 rounded-lg border border-gray-200">
                                <p class="text-gray-900">1-5</p>
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Jenis Kelamin</label>
                            <div class="bg-gray-50 px-4 py-3 rounded-lg border border-gray-200">
                                <p class="text-gray-900">perempuan/laki-laki</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>