
<x-layout>
    <x-slot:title>Register</x-slot:title>
    
    <x-slot:header>
        <h2 class="text-xl font-extrabold text-blue-400 hover:text-blue-200 tracking-wider">
            Status
        </h2>
    </x-slot:header>

    <div class="space-y-6">
        {{-- Welcome Card --}}
       <div class="container justify-center w-full px-4 py-8">
        <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div>
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div>
                    <label for="password_confirmation">Password Confirmation:</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required>
                </div>
                <button type="submit">Register</button>
            </form>
                <p>Already have an account? <a href="{{ route('showLogin') }}">Login here</a>.</p>
        </div>
        </div>
    </div>
</x-layout>