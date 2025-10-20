<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Profile') }}
        </h2>
    </x-slot>

    <div class="py-12 max-w-4xl mx-auto space-y-8">

        {{-- FORM UPDATE PROFILE --}}
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-lg font-medium text-gray-900 mb-4">Informasi Profil</h3>
            <form method="POST" action="{{ route('profile.update') }}">
                @csrf
                @method('PATCH')

                <div class="mb-4">
                    <label for="name" class="block font-medium text-gray-700">Nama</label>
                    <input id="name" name="name" type="text" value="{{ old('name', auth()->user()->name) }}" 
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200">
                </div>

                <div class="mb-4">
                    <label for="email" class="block font-medium text-gray-700">Email</label>
                    <input id="email" name="email" type="email" value="{{ old('email', auth()->user()->email) }}" 
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200">
                </div>

                <x-primary-button>Simpan Perubahan</x-primary-button>
            </form>
        </div>

        {{-- FORM UPDATE PASSWORD --}}
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-lg font-medium text-gray-900 mb-4">Ubah Password</h3>
            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="current_password" class="block font-medium text-gray-700">Password Lama</label>
                    <input id="current_password" name="current_password" type="password"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200">
                </div>

                <div class="mb-4">
                    <label for="password" class="block font-medium text-gray-700">Password Baru</label>
                    <input id="password" name="password" type="password"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200">
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="block font-medium text-gray-700">Konfirmasi Password</label>
                    <input id="password_confirmation" name="password_confirmation" type="password"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200">
                </div>

                <x-primary-button>Perbarui Password</x-primary-button>
            </form>
        </div>

    </div>
</x-app-layout>
