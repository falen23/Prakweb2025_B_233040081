<x-layout>
    <x-slot:title>
        About
    </x-slot:title>
    <h1>Halaman About</h1>
<x-slot:header>
        <h2 class="text-xl font-extrabold text-blue-400 hover:text-blue-200 tracking-wider">
            Memenangkan Game
        </h2>
    </x-slot:header>

    {{-- Ini adalah konten utama ($slot) yang akan masuk ke kotak putih --}}
    <div class="prose max-w-none">
        <h3 class="text-xl font-extrabold text-blue-400 hover:text-blue-200 tracking-wider mb-4">Mengubah data menjadi Kemenangan</h3>
        
        <p>
            Commander adalah platform analitik yang didirikan untuk menyediakan keuntungan taktis bagi tim E-Sports. Kami menggunakan AI dan pemodelan prediktif untuk membedah setiap pertandingan, memastikan tim Anda selalu selangkah di depan lawan.
        </p>

        <!-- <div class="mt-6">
            <a href="/welcome" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:border-indigo-900 focus:ring ring-indigo-300 disabled:opacity-25 transition ease-in-out duration-150">
                Kontak Kami
            </a>
        </div> -->
    </div>
</x-layout>