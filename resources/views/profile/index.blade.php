<x-app-layout>
    <!-- HEADER -->
    <header class="sticky top-0 bg-white shadow-sm border-b border-gray-200 z-10">
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <h2 class="text-2xl font-semibold text-gray-800">Profile Pengguna</h2>

                <!-- Dropdown User -->
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex items-center space-x-3 focus:outline-none">
                        <div class="text-right hidden sm:block">
                            <p class="text-sm font-medium text-gray-900">{{ auth()->user()->name }}</p>
                            <p class="text-xs text-gray-500">Orang Tua</p>
                        </div>
                        <div class="w-10 h-10 rounded-full overflow-hidden border-2 border-[#44B3E0] shadow-sm">
                            <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?auto=format&fit=crop&w=100&q=80"
                                 alt="Profile" class="w-full h-full object-cover">
                        </div>
                    </button>

                    <div x-show="open" @click.away="open = false" x-transition
                        class="absolute right-0 mt-2 w-64 bg-white rounded-lg shadow-lg border border-gray-200 py-2 z-50"
                        style="display: none;">
                        <div class="px-4 py-3 border-b border-gray-100 flex items-center space-x-3">
                            <div class="w-12 h-12 rounded-full overflow-hidden border-2 border-[#44B3E0]">
                                <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?auto=format&fit=crop&w=100&q=80"
                                     alt="Profile" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-900">{{ auth()->user()->name }}</p>
                                <p class="text-xs text-gray-500">Orang Tua</p>
                            </div>
                        </div>
                        <a href="{{ route('profile.index') }}"
                           class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 transition-colors">
                            <x-heroicon-o-user class="w-5 h-5 mr-3 text-gray-400"/> Profile Pengguna
                        </a>
                        <a href="{{ route('anak.index') }}"
                           class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 transition-colors">
                            <x-heroicon-o-users class="w-5 h-5 mr-3 text-gray-400"/> Data Anak
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- BODY -->
    <div class="max-w-4xl mx-auto py-8 px-4 sm:px-6 lg:px-8"
         x-data="{ isEditing: false, showPasswordForm: false }">

        <!-- Notifikasi -->
        @if (session('success'))
            <div x-data="{ show: true }" x-show="show" x-transition
                 x-init="setTimeout(() => show = false, 4000)"
                 class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg relative mb-6">
                <strong class="font-bold">Sukses!</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
                <span @click="show = false"
                      class="absolute top-0 bottom-0 right-0 px-4 py-3 cursor-pointer">
                    ✕
                </span>
            </div>
        @endif

        <!-- CARD PROFILE -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
            <div class="bg-gradient-to-r from-[#44B3E0] to-[#3A9BC7] px-6 py-4 flex justify-between items-center">
                <h2 class="text-xl font-semibold text-white">Informasi Profile</h2>
                <div class="space-x-2">
                    <button @click="isEditing = true; showPasswordForm = false"
                            x-show="!isEditing && !showPasswordForm"
                            class="px-4 py-2 text-sm font-medium text-white bg-white/20 hover:bg-white/30 rounded-lg">
                        Edit Profile
                    </button>
                    <button @click="showPasswordForm = true; isEditing = false"
                            x-show="!isEditing && !showPasswordForm"
                            class="px-4 py-2 text-sm font-medium text-white bg-white/20 hover:bg-white/30 rounded-lg">
                        Ganti Password
                    </button>
                </div>
            </div>

            <!-- FORM EDIT PROFIL -->
            <form method="POST" action="{{ route('profile.update') }}" x-show="isEditing" class="p-6">
                @csrf
                @method('PATCH')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                        <input type="text" name="name" value="{{ old('name', auth()->user()->name) }}"
                               class="w-full border-gray-300 rounded-lg">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input type="email" name="email" value="{{ old('email', auth()->user()->email) }}"
                               class="w-full border-gray-300 rounded-lg">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir"
                               value="{{ old('tanggal_lahir', auth()->user()->tanggal_lahir) }}"
                               class="w-full border-gray-300 rounded-lg">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Nomor Telepon</label>
                        <input type="text" name="nomor_telepon"
                               value="{{ old('nomor_telepon', auth()->user()->nomor_telepon) }}"
                               class="w-full border-gray-300 rounded-lg">
                    </div>

                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Alamat</label>
                        <textarea name="alamat" rows="3"
                                  class="w-full border-gray-300 rounded-lg">{{ old('alamat', auth()->user()->alamat) }}</textarea>
                    </div>
                </div>

                <div class="mt-6 flex justify-end space-x-3">
                    <button type="button" @click="isEditing = false"
                            class="px-4 py-2 text-sm bg-gray-100 rounded-lg">Batal</button>
                    <button type="submit"
                            class="px-4 py-2 text-sm bg-blue-500 text-white rounded-lg">Simpan</button>
                </div>
            </form>

            <!-- INFORMASI PROFILE (READ-ONLY) -->
            <div x-show="!isEditing && !showPasswordForm" class="p-6 space-y-6">
                <div class="flex items-center space-x-4">
                    <div class="w-20 h-20 rounded-full overflow-hidden border-4 border-[#44B3E0] shadow-lg">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?auto=format&fit=crop&w=200&q=80"
                             class="w-full h-full object-cover" alt="Profile">
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">{{ auth()->user()->name }}</h3>
                        <p class="text-sm text-gray-500">{{ auth()->user()->email }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4">
                    <div>
                        <h4 class="text-sm font-medium text-gray-500">Tanggal Lahir</h4>
                        <p class="text-gray-800">
                            {{ auth()->user()->tanggal_lahir ? \Carbon\Carbon::parse(auth()->user()->tanggal_lahir)->translatedFormat('d F Y') : '-' }}
                        </p>
                    </div>
                    <div>
                        <h4 class="text-sm font-medium text-gray-500">Nomor Telepon</h4>
                        <p class="text-gray-800">{{ auth()->user()->nomor_telepon ?? '-' }}</p>
                    </div>
                    <div class="md:col-span-2">
                        <h4 class="text-sm font-medium text-gray-500">Alamat</h4>
                        <p class="text-gray-800">{{ auth()->user()->alamat ?? '-' }}</p>
                    </div>
                </div>
            </div>

            <!-- FORM GANTI PASSWORD -->
            <form method="POST" action="{{ route('password.update') }}" x-show="showPasswordForm" class="p-6">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="block font-medium text-gray-700">Password Lama</label>
                    <input type="password" name="current_password" class="w-full border-gray-300 rounded-lg mt-1">
                </div>

                <div class="mb-4">
                    <label class="block font-medium text-gray-700">Password Baru</label>
                    <input type="password" name="password" class="w-full border-gray-300 rounded-lg mt-1">
                </div>

                <div class="mb-4">
                    <label class="block font-medium text-gray-700">Konfirmasi Password Baru</label>
                    <input type="password" name="password_confirmation" class="w-full border-gray-300 rounded-lg mt-1">
                </div>

                <div class="flex justify-end space-x-3">
                    <button type="button" @click="showPasswordForm = false"
                            class="px-4 py-2 text-sm bg-gray-100 rounded-lg">Batal</button>
                    <button type="submit"
                            class="px-4 py-2 text-sm bg-blue-500 text-white rounded-lg">Perbarui Password</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
