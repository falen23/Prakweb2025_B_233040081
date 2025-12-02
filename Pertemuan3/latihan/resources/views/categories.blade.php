<x-layout>
    <x-slot:title>Daftar Kategori</x-slot:title>

    <x-slot:header>
        <h2 class="text-xl font-extrabold text-blue-400 hover:text-blue-200 tracking-wider">
            Explore statistik
        </h2>
    </x-slot:header>

    <div class="py-6">
        <div class="max-w-7xl mx-auto">
            <p class=" mb-6">Temukan statistik menarik berdasarkan team favorit Anda.</p>
            
            {{-- Menggunakan Grid Layout --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach ($categories as $category)
                    <a href="/categories/{{ $category->slug }}" class="group block max-w-xs mx-auto rounded-lg p-6 bg-white ring-1 ring-slate-900/5 shadow-lg space-y-3 hover:bg-indigo-500 hover:ring-indigo-500 transition-all duration-200 ease-in-out">
                        <div class="flex items-center space-x-3">
                            {{-- Ikon Folder Sederhana --}}
                            <svg class="h-6 w-6 stroke-indigo-500 group-hover:stroke-white" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                            </svg>
                            <h3 class="text-slate-900 group-hover:text-white text-lg font-semibold">{{ $category->name }}</h3>
                        </div>
                        <p class="text-slate-500 group-hover:text-indigo-100">
                            Lihat semua statistik di Category
                        </p>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>