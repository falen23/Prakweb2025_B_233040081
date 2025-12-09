<x-layout>
    <x-slot:title>Login</x-slot:title>

    <x-slot:header>
        <h2 class="text-xl font-extrabold text-blue-400 hover:text-blue-200 tracking-wider">
            Status
        </h2>
    </x-slot:header>

    <div class="space-y-6">
        <div class="container justify-center w-full px-4 py-8">
            <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg">
                <form action="{{ route('login') }}" method="POST" novalidate>
                    @csrf

                    @if (session('error'))
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                            {{ session('error') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                            <ul class="list-disc list-inside">
                                @foreach ($errors->all() as $err)
                                    <li>{{ $err }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium">Email:</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required
                            class="w-full border rounded px-3 py-2">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium">Password:</label>
                        <input type="password" id="password" name="password" required
                            class="w-full border rounded px-3 py-2">
                    </div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Login</button>
                </form>

                <p class="mt-4">Doesn’t have an account? <a href="{{ route('showRegister') }}"
                        class="text-blue-600 underline">Register here</a>.</p>
            </div>
        </div>
    </div>
</x-layout>
