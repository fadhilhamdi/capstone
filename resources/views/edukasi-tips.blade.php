<x-app-layout>
    <div class="min-h-screen bg-gray-50">
        <!-- White Header -->
        <div class="bg-white shadow-sm border-b border-gray-200">
            <div class="px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center py-4">
                    <!-- Page Title -->
                    <h1 class="text-2xl font-bold text-gray-800">Edukasi & Tips</h1>
                    
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

         <!-- Section Fitur Utama -->
  <section>
    <div class="cards">
      <!-- Card 1 -->
      <a href="#" class="card" style="background:#fde68a;">
        <img src="{{ asset('img/screening.png') }}" alt="Screening Gejala">
        <div class="card-title">Screening Gejala</div>
        <div class="icon-circle">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
          </svg>
        </div>
      </a>

      <!-- Card 2 -->
      <a href="#" class="card" style="background:#fbcfe8;">
        <img src="{{ asset('img/diagnosis-awal.png') }}" alt="Diagnosis Awal">
        <div class="card-title">Diagnosis Awal</div>
        <div class="icon-circle">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
          </svg>
        </div>
      </a>

      <!-- Card 3 -->
      <a href="#" class="card" style="background:#bae6fd;">
        <img src="{{ asset('img/monitoring.png') }}" alt="Monitoring">
        <div class="card-title">Monitoring Perkembangan</div>
        <div class="icon-circle">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
          </svg>
        </div>
      </a>

      <!-- Card 4 -->
      <a href="#" class="card" style="background:#bfdbfe;">
        <img src="{{ asset('img/edukasi-tips.png') }}" alt="Edukasi">
        <div class="card-title">Edukasi & Tips</div>
        <div class="icon-circle">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
          </svg>
        </div>
      </a>
    </div>

    <!-- Style -->
    <style>
      body {
        font-family: "Poppins", sans-serif;
        background: #fff;
        margin: 0;
        padding: 0;
      }
      section {
        padding: 180px 0;
      }
      h2 {
        text-align: center;
        font-size: 28px;
        font-weight: bold;
        color: #333;
        margin-bottom: 40px;
      }
      .cards {
        display: flex;
        justify-content: center;
        gap: 20px;
        flex-wrap: wrap;
        max-width: 1200px;
        margin: 0 auto;
      }
      .card {
        border-radius: 12px;
        width: 270px;
        height: 380px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        padding: 15px;
        text-decoration: none;
        color: inherit;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }
      .card:hover {
        transform: translateY(-8px) scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      }
      .card img {
        width: 150px;
        height: 150px;
        object-fit: cover;
        border-radius: 8px;
        margin-top: 40px;
      }
      .card-title {
        text-align: center;
        font-weight: bold;
        font-size: 23px;
      }
      .icon-circle {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        background: #e5e7eb;
        display: flex;
        align-items: center;
        justify-content: center;
        transition:  0.3s ease;
      }
      .card:hover .icon-circle {
        background: #374151;
      }
      .icon-circle svg {
        width: 24px;
        height: 24px;
        color: #374151;
        transition: color 0.3s ease;
      }
      .card:hover .icon-circle svg {
        color: #fff;
      }
    </style>
</x-app-layout>