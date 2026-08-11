@extends('components.admin-layout')

@section('title', 'Kelola Halaman')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Kelola Halaman</h1>

    <div class="grid gap-6 md:grid-cols-2">
        @foreach($pages as $slug => $page)
            <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200">
                <h2 class="text-xl font-semibold mb-2">{{ $page['label'] }}</h2>
                <p class="text-gray-600 mb-4">Edit teks dan konten utama untuk halaman {{ $page['label'] }}.</p>
                <a href="{{ route('admin.pages.edit', $slug) }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">
                    Edit Halaman
                </a>
            </div>
        @endforeach
    </div>

    <div class="mt-8">
        <a href="{{ route('admin.dashboard') }}" class="text-blue-600 hover:underline">&larr; Kembali ke Dashboard</a>
    </div>
</div>
@endsection