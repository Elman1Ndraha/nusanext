@extends('components.admin-layout')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Admin Dashboard</h1>

    <div class="mb-8 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
        <h2 class="mb-4 text-xl font-semibold text-slate-800">Alur CMS</h2>
        <div class="flex flex-col items-center gap-3 md:flex-row md:justify-center">
            <div class="w-full rounded-xl border border-slate-200 bg-slate-900 px-4 py-3 text-center text-sm font-semibold text-white shadow-sm md:w-40">
                ADMIN
            </div>
            <div class="text-2xl text-slate-400">↓</div>
            <div class="w-full rounded-xl border border-slate-200 bg-blue-600 px-4 py-3 text-center text-sm font-semibold text-white shadow-sm md:w-48">
                Admin Dashboard
            </div>
            <div class="text-2xl text-slate-400">↓</div>
            <div class="w-full rounded-xl border border-slate-200 bg-teal-600 px-4 py-3 text-center text-sm font-semibold text-white shadow-sm md:w-40">
                MySQL
            </div>
            <div class="text-2xl text-slate-400">↓</div>
            <div class="w-full rounded-xl border border-slate-200 bg-emerald-600 px-4 py-3 text-center text-sm font-semibold text-white shadow-sm md:w-48">
                Website Publik
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-2">Total Users</h2>
            <p class="text-2xl font-bold text-blue-600">{{ $data['total_users'] }}</p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-2">Admin Users</h2>
            <p class="text-2xl font-bold text-green-600">{{ $data['admin_users'] }}</p>
        </div>
    </div>

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
        <a href="{{ route('home') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Kembali ke Halaman Utama
        </a>
    </div>
</div>
@endsection