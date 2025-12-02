<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-900"> {{-- Latar Belakang Gelap --}}
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Mengambil title dari props atau default --}}
    <title>{{ $title ?? 'Nexus Analytics' }}</title> {{-- Ganti Title --}}

    {{-- Memuat Tailwind CSS --}}
    @vite('resources/css/app.css')

    {{-- Font Inter (Opsional) --}}
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>
<body class="h-full flex flex-col font-sans antialiased text-gray-200"> {{-- Warna Teks Umum Putih/Abu-abu Terang --}}

    {{-- NAVBAR --}}
    <nav class="bg-gray-800 shadow-xl border-b border-blue-600/50"> {{-- Navbar Gelap dengan Garis Aksen Biru --}}
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">

                {{-- Logo / Brand --}}
                <div class="flex items-center">
                    <a href="/" class="text-xl font-extrabold text-blue-400 hover:text-blue-200 tracking-wider"> 
                        COMMANDER
                    </a>
                </div>

                {{-- Menu Links --}}
                <div class="hidden md:flex space-x-8 items-center">
                    <a href="/home" class="text-gray-300 hover:text-blue-400 px-3 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">Home</a>
                    <a href="/about" class="text-gray-300 hover:text-blue-400 px-3 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">About</a>
                    <a href="/categories" class="text-gray-300 hover:text-blue-400 px-3 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">Category</a>
                </div>

                {{-- Mobile Menu Button (Placeholder untuk tampilan mobile sederhana) --}}
                <div class="flex items-center md:hidden">
                    <span class="text-gray-400 text-sm">Menu</span>
                </div>
            </div>
        </div>
    </nav>

    {{-- MAIN CONTENT --}}
    <main class="flex-grow">
        <div class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
            {{-- Header Halaman (Opsional) --}}
            @if(isset($header))
                {{-- Header menggunakan background yang sedikit lebih terang dari body --}}
                <header class="bg-gray-800 shadow-lg rounded-lg mb-6 p-4 border border-blue-700/50">
                    {{ $header }}
                </header>
            @endif

            {{-- Slot Konten Utama --}}
            {{-- Konten Utama dengan background yang sedikit lebih terang dari body --}}
            <div class="bg-gray-800 overflow-hidden shadow-2xl sm:rounded-lg p-8 border border-blue-700/50"> 
                {{ $slot }}
            </div>
        </div>
    </main>

    {{-- FOOTER --}}
    <footer class="bg-gray-950 text-gray-400 py-6 mt-auto border-t border-blue-600/50"> {{-- Footer Paling Gelap --}}
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center">
            <p class="text-sm">&copy; {{ date('Y') }} Commander Analytics. All rights reserved.</p> {{-- Ganti Nama Footer --}}
            <div class="flex space-x-4 mt-4 md:mt-0">
                <a href="#" class="text-gray-500 hover:text-blue-400 transition">Privacy Policy</a>
                <a href="#" class="text-gray-500 hover:text-blue-400 transition">Terms of Service</a>
            </div>
        </div>
    </footer>

</body>
</html>