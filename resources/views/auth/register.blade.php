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
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #f8fdff 0%, #E2E8F0 100%);
        }
    </style>
</head>
<body class="gradient-bg min-h-screen flex flex-col">
    <!-- Navbar -->
    <nav class="w-full flex justify-between items-center px-6 py-4 bg-white shadow-sm">
        <div class="text-2xl font-bold text-gray-800">
            <span class="text-accent">DELAY</span><span class="text-pink">2</span><span class="text-logo">SAY</span>
        </div>
        <ul class="flex space-x-6 font-medium text-gray-600">
            <li><a href="/" class="hover:text-primary transition-colors duration-200">Home</a></li>
            <li><a href="/edukasi" class="hover:text-primary transition-colors duration-200">Edukasi</a></li>
            <li><a href="/tentang" class="hover:text-primary transition-colors duration-200">Tentang</a></li>
            <li><a href="/login" class="text-primary font-semibold">Login</a></li>
        </ul>
    </nav>

    {{-- Main Content --}}
        <div class="flex-1 flex items-center justify-center px-4 py-12">
              <div class="w-full max-w-xl bg-white rounded-2xl shadow-lg p-10">
            {{-- Header Section --}}
            <!-- Header -->
            <div class="text-center mt-3 justify-between mb-8">
                <h1 class="text-3xl font-bold text-gray-800 mb-2"><span class="text-accent">DELAY</span><span class="text-pink">2</span><span class="text-logo">SAY</span>
                <p class="text-sm font-normal text-gray-500">Early Speech Delay Detection Platform</p>
            </div>

    {{-- Form Section --}}
            <form action="{{ route('register') }}" method="POST" class="p-6 space-y-6">
                @csrf

                {{-- Name Field --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}"
                               class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition"
                               placeholder="Name">
                        @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Email Field --}}
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                               class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition"
                               placeholder="name@gmail.com">
                        @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                {{-- Password Fields --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                        <div class="relative">
                            <input type="password" id="password" name="password"
                                   class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition"
                                   placeholder="••••••••">
                            <button type="button" class="absolute right-3 top-2.5 text-gray-400 hover:text-gray-600 toggle-password">
                                <i class="far fa-eye"></i>
                            </button>
                        </div>
                        @error('password')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                        <div class="relative">
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                   class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition"
                                   placeholder="••••••••">
                            <button type="button" class="absolute right-3 top-2.5 text-gray-400 hover:text-gray-600 toggle-password">
                                <i class="far fa-eye"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Button -->
                <button type="submit"
                    class="w-full bg-primary text-white py-3 rounded-lg font-semibold hover:bg-secondary transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">
                    Sign Up
                </button>

                <!-- Divider -->
                <div class="flex items-center my-6">
                    <hr class="flex-grow border-gray-200">
                    <span class="px-3 text-xs text-gray-400 font-medium">or</span>
                    <hr class="flex-grow border-gray-200">
                </div>

                <!-- Link to Register -->
                <p class="text-center text-sm text-gray-600">
                    Already have an account?
                    <a href="{{ route('login') }}" class="text-primary font-semibold hover:text-secondary transition-colors duration-200">Sign In</a>
                </p>
            </form>
        </div>
</div>

    <script>
        // Simple form interaction
        document.addEventListener('DOMContentLoaded', function() {
            const inputs = document.querySelectorAll('input');
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('ring-2', 'ring-primary', 'ring-opacity-20');
                });
                
                input.addEventListener('blur', function() {
                    this.parentElement.classList.remove('ring-2', 'ring-primary', 'ring-opacity-20');
                });
            });
        });
    </script>
</body>
</html>