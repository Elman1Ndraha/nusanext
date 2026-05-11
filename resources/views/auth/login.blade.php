@extends('components.layout') {{-- Menggunakan layout yang sama --}}

@section('title', 'Login') {{-- Judul halaman login --}}

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-6 text-center">Login Admin</h1> {{-- Header form login --}}

        {{-- Menampilkan error jika ada --}}
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('login.post') }}" method="POST">
            @csrf {{-- CSRF token untuk keamanan --}}
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" name="email" id="email" class="w-full px-3 py-2 border rounded-lg" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" name="password" id="password" class="w-full px-3 py-2 border rounded-lg" required>
            </div>
            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Login
            </button>
        </form>

        {{-- Link kembali ke halaman utama --}}
        <div class="mt-4 text-center">
            <a href="{{ route('index') }}" class="text-blue-500 hover:text-blue-700">Kembali ke Halaman Utama</a>
        </div>
    </div>
</div>
@endsection