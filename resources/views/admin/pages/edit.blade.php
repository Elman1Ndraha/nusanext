@extends('components.layout')

@section('title', 'Edit Halaman ' . $schema['label'])

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-3xl font-bold">Edit Halaman {{ $schema['label'] }}</h1>
            <p class="text-gray-600 mt-2">Perbarui teks dan gambar yang muncul di halaman {{ $schema['label'] }}.</p>
        </div>
        <a href="{{ route('admin.pages.index') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-900 font-semibold py-2 px-4 rounded">Kembali</a>
    </div>

    @if(session('success'))
        <div class="mb-6 rounded-lg bg-green-50 border border-green-200 p-4 text-green-700">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="mb-6 rounded-lg bg-red-50 border border-red-200 p-4 text-red-700">
            <ul class="list-disc list-inside">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.pages.update', $page) }}" method="POST" enctype="multipart/form-data" class="space-y-6 bg-white p-6 rounded-lg shadow-md border border-gray-200">
        @csrf

        @foreach($schema['fields'] as $field)
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2" for="{{ $field['key'] }}">{{ $field['label'] }}</label>

                @php
                    $value = old($field['key'], $content[$field['key']] ?? '');
                @endphp

                @if($field['type'] === 'textarea')
                    <textarea
                        id="{{ $field['key'] }}"
                        name="{{ $field['key'] }}"
                        rows="{{ $field['rows'] ?? 4 }}"
                        class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-blue-500 focus:ring-blue-500"
                    >{{ $value }}</textarea>
                @elseif($field['type'] === 'image')
                    @if($value)
                        <div class="mb-3">
                            <img src="{{ asset('storage/' . $value) }}" alt="Preview {{ $field['label'] }}" class="h-40 object-contain rounded-lg border border-gray-200" />
                        </div>
                    @endif
                    <input type="file" id="{{ $field['key'] }}" name="{{ $field['key'] }}" accept="image/*" class="w-full text-sm text-gray-700" />
                @else
                    <input
                        id="{{ $field['key'] }}"
                        name="{{ $field['key'] }}"
                        type="text"
                        value="{{ $value }}"
                        class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-blue-500 focus:ring-blue-500"
                    />
                @endif
            </div>
        @endforeach

        <div class="flex items-center gap-3">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg">
                Simpan Perubahan
            </button>
            <a href="{{ route('admin.pages.index') }}" class="text-gray-600 hover:text-gray-900">Batal</a>
        </div>
    </form>
</div>
@endsection