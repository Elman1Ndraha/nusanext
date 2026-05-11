@extends('components.layout') {{-- Menggunakan layout yang sama seperti halaman utama --}}

@section('title', 'Admin Dashboard') {{-- Judul halaman admin --}}

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Admin Dashboard</h1> {{-- Header dashboard --}}

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        {{-- Card untuk total users --}}
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-2">Total Users</h2>
            <p class="text-2xl font-bold text-blue-600">{{ $data['total_users'] }}</p>
        </div>

        {{-- Card untuk admin users --}}
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-2">Admin Users</h2>
            <p class="text-2xl font-bold text-green-600">{{ $data['admin_users'] }}</p>
        </div>

        {{-- Card lain bisa ditambahkan nanti, misalnya untuk posts, dll --}}
    </div>

    {{-- Link untuk logout atau navigasi lain --}}
    <div class="mt-8 flex flex-wrap gap-4">
        <a href="{{ route('admin.pages.index') }}" class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded">
            Kelola Konten Halaman
        </a>
        <form action="{{ route('logout') }}" method="POST" class="inline">
            @csrf
            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                Logout
            </button>
        </form>
        <a href="{{ route('index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Kembali ke Halaman Utama
        </a>
    </div>
</div>
@endsection