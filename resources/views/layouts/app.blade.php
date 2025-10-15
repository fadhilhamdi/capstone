<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel Dashboard') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans antialiased">
    <div class="flex h-screen overflow-hidden"> {{-- Changed min-h-screen to h-screen and added overflow-hidden --}}
        <x-sidebar />

        <main class="flex-1 overflow-y-auto"> {{-- Removed p-8, added overflow-y-auto --}}
            {{ $slot }}
        </main>
    </div>
</body>
</html>