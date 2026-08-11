@extends('components.admin-layout')

@section('title', 'Edit Halaman ' . $schema['label'])

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-6 flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold text-slate-900">Edit {{ $schema['label'] }}</h1>
            <p class="mt-2 text-sm text-slate-600">Perbarui konten halaman ini dengan form yang lebih rapi dan mudah dibaca.</p>
        </div>
        <a href="{{ route('admin.pages.index') }}" class="rounded-lg border border-slate-300 bg-white px-4 py-2 font-semibold text-slate-700 hover:bg-slate-100">Kembali</a>
    </div>

    @if(session('success'))
        <div class="mb-6 rounded-lg border border-green-200 bg-green-50 p-4 text-sm text-green-700">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="mb-6 rounded-lg border border-red-200 bg-red-50 p-4 text-sm text-red-700">
            <ul class="list-disc list-inside">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.pages.update', $page) }}" method="POST" enctype="multipart/form-data" class="mx-auto max-w-5xl rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
        @csrf

        <div class="mb-6 border-b border-slate-200 pb-4">
            <h2 class="text-xl font-semibold text-slate-800">{{ strtoupper($page) }}</h2>
            <p class="mt-1 text-sm text-slate-500">Ubah konten utama halaman publik di sini.</p>
        </div>

        <div class="space-y-6">
            @php
                $fieldMap = [];
                foreach ($schema['fields'] as $field) {
                    $fieldMap[$field['key']] = $field;
                }
            @endphp

            @foreach($schema['fields'] as $field)
                @php
                    $value = old($field['key'], $content[$field['key']] ?? '');
                @endphp

                <div class="rounded-xl border border-slate-200 bg-slate-50 p-4">
                    <label class="mb-2 block text-sm font-semibold text-slate-700" for="{{ $field['key'] }}">{{ $field['label'] }}</label>

                    @if($field['type'] === 'textarea')
                        <textarea
                            id="{{ $field['key'] }}"
                            name="{{ $field['key'] }}"
                            rows="{{ $field['rows'] ?? 4 }}"
                            class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm text-slate-700 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-200"
                        >{{ $value }}</textarea>
                    @elseif($field['type'] === 'image')
                        <div class="rounded-lg border border-dashed border-slate-300 bg-white p-4">
                            @if($value)
                                <div class="mb-3">
                                    <p class="mb-2 text-sm font-medium text-slate-600">Foto Saat Ini</p>
                                    <img src="{{ asset('storage/' . $value) }}" alt="Preview {{ $field['label'] }}" class="h-40 w-full rounded-lg object-contain border border-slate-200 bg-slate-50" />
                                </div>
                            @else
                                <p class="mb-3 text-sm text-slate-500">Belum ada foto yang dipilih.</p>
                            @endif
                            <input type="file" id="{{ $field['key'] }}" name="{{ $field['key'] }}" accept="image/*" class="w-full text-sm text-slate-700" />
                        </div>
                    @else
                        <input
                            id="{{ $field['key'] }}"
                            name="{{ $field['key'] }}"
                            type="text"
                            value="{{ $value }}"
                            class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm text-slate-700 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-200"
                        />
                    @endif
                </div>
            @endforeach
        </div>

        <div class="mt-8 flex items-center justify-end gap-3 border-t border-slate-200 pt-4">
            <a href="{{ route('admin.pages.index') }}" class="rounded-lg px-4 py-2 text-sm font-semibold text-slate-600 hover:text-slate-900">Batal</a>
            <button type="submit" class="rounded-lg bg-blue-600 px-6 py-2.5 text-sm font-semibold text-white hover:bg-blue-700">
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>
@endsection