<x-layout>
    <x-slot:title>
        Blog Posts
    </x-slot:title>

    <x-slot:header>
        <h2 class="text-xl font-extrabold text-blue-400 hover:text-blue-200 tracking-wider">
            {{ __('Daftar Peringkat') }}
        </h2>
    </x-slot:header>

    {{-- 
        Class 'space-y-8' memberikan jarak vertikal antar artikel.
        Kita tidak perlu <html> atau <body> lagi karena sudah ada di <x-layout>.
    --}}
    <div class="space-y-8 divide-y divide-gray-100">
        @foreach ($posts as $post)
            <article class="pt-8 first:pt-0">
               
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 hover:text-indigo-600 transition-colors duration-200">
                    <a href="/posts/{{ $post->slug }}">
                        {{ $post->title }}
                    </a>
                </h2>

                {{-- Excerpt / Ringkasan --}}
                <p>
                    {{ $post->excerpt }}
                </p>

                {{-- Link "Baca Selengkapnya" --}}
                <a href="/posts/{{ $post->slug }}" class="inline-flex items-center font-medium text-indigo-600 hover:text-indigo-800 hover:underline">
                    Baca Selengkapnya &raquo;
                </a>
            </article>
        @endforeach
    </div>

</x-layout>