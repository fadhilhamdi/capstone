<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - DELAY2SAY</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#44B3E0',
                        logo: '#4444BB',
                        secondary: '#89D4F3',
                        accent: '#B7CC67',
                        warning: '#FDC564',
                        pink: '#FA9EB7',
                    }
                }
            }
        }
    </script>

<aside class="w-64 bg-white shadow-lg flex flex-col border-r border-gray-100">
    <!-- Logo -->
    <div class="p-6 border-b border-gray-100">
        <div class="flex items-center space-x-3">
            <div class="text-2xl font-bold text-gray-800">
                 <span class="text-accent">DELAY</span><span class="text-pink">2</span><span class="text-logo">SAY</span>
              </div>
        </div>
    </div>

    <!-- Menu -->
    <nav class="flex-1 p-4 space-y-1">
        <!-- Menu Utama -->
        <div class="px-3 py-2">
            <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Menu Utama</p>
        </div>
        
        <a href="{{ route('dashboard') }}" 
           class="flex items-center px-4 py-3 rounded-xl transition-all duration-200 
                  {{ request()->routeIs('dashboard') ? 
                    'bg-gradient-to-r text-white font-semibold bg-primary' : 
                    'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                      d="M3 12l2-2m0 0l7-7 7 7m-9 2v8m-4 0h8"/>
            </svg>
            Dashboard
        </a>
        
        <a href="{{ route('pemeriksaan-awal') }}" 
           class="flex items-center px-4 py-3 rounded-xl transition-all duration-200 
                  {{ request()->routeIs('pemeriksaan-awal') ? 
                    'bg-gradient-to-r text-white font-semibold bg-primary' : 
                    'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                      d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
            </svg>
            Pemeriksaan Awal
        </a>
        
        <a href="{{ route('report.index') }}" 
           class="flex items-center px-4 py-3 rounded-xl transition-all duration-200 
                  {{ request()->routeIs('report.index') ? 
                    'bg-gradient-to-r text-white font-semibold bg-primary' : 
                    'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                      d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
            </svg>
            Report
        </a>
        
        <a href="{{ route('edukasi-tips') }}" 
           class="flex items-center px-4 py-3 rounded-xl transition-all duration-200 
                  {{ request()->routeIs('edukasi-tips') ? 
                    'bg-gradient-to-r text-white font-semibold bg-primary' : 
                    'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                      d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
            </svg>
            Edukasi & Tips
        </a>
    </nav>

    <!-- Logout -->
    <div class="p-4 border-t border-gray-100">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="w-full flex items-center px-4 py-3 rounded-xl text-gray-600 hover:bg-red-50 hover:text-red-600 transition-all duration-200">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                </svg>
                Logout
            </button>
        </form>
    </div>
</aside>