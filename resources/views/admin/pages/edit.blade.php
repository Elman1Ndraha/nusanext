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

    <form action="{{ route('admin.pages.update', $page) }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        @csrf

        <!-- Form Section -->
        <div class="space-y-6 bg-white p-6 rounded-lg shadow-md border border-gray-200">
            <h3 class="text-xl font-bold text-gray-800">Form Edit</h3>
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

            <div class="flex items-center gap-3 pt-4">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg">
                    Simpan Perubahan
                </button>
                <a href="{{ route('admin.pages.index') }}" class="text-gray-600 hover:text-gray-900">Batal</a>
            </div>
        </div>

        <!-- Preview Section -->
        <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200 h-fit sticky top-6">
            <h3 class="text-xl font-bold text-gray-800 mb-4">Preview Konten</h3>
            <div class="bg-gray-50 p-4 rounded-lg border border-gray-200 overflow-auto max-h-96">
                @if($page === 'home')
                    <div class="space-y-4 text-sm">
                        <div>
                            <p class="text-gray-500 font-semibold">Hero Title:</p>
                            <p class="text-red-800 font-bold text-lg">{{ $content['hero_title'] ?? '' }}</p>
                        </div>
                        <div>
                            <p class="text-gray-500 font-semibold">Hero Description:</p>
                            <p class="text-gray-600">{{ $content['hero_description'] ?? '' }}</p>
                        </div>
                        <div>
                            <p class="text-gray-500 font-semibold">WhatsApp Label:</p>
                            <p class="text-gray-700">{{ $content['whatsapp_label'] ?? '' }}</p>
                        </div>
                        <div>
                            <p class="text-gray-500 font-semibold">WhatsApp Number:</p>
                            <p class="text-gray-700">{{ $content['whatsapp_number'] ?? '' }}</p>
                        </div>
                        <hr class="my-3">
                        <p class="font-semibold text-gray-700">Features:</p>
                        <div class="space-y-2">
                            @for($i = 1; $i <= 3; $i++)
                                <div class="bg-white p-2 rounded border border-gray-200">
                                    <p class="font-semibold text-gray-700">{{ $content['feature_'.$i.'_title'] ?? '' }}</p>
                                    <p class="text-gray-600 text-xs">{{ $content['feature_'.$i.'_description'] ?? '' }}</p>
                                </div>
                            @endfor
                        </div>
                    </div>
                @elseif($page === 'about')
                    <div class="space-y-4 text-sm">
                        <div>
                            <p class="text-gray-500 font-semibold">Heading:</p>
                            <p class="text-red-800 font-bold text-lg">{{ $content['about_heading'] ?? '' }}</p>
                        </div>
                        <div>
                            <p class="text-gray-500 font-semibold">Description:</p>
                            <p class="text-gray-600">{{ $content['about_description'] ?? '' }}</p>
                        </div>
                        @if($content['about_image'] ?? '')
                            <div>
                                <p class="text-gray-500 font-semibold mb-2">Image:</p>
                                <img src="{{ asset('storage/' . $content['about_image']) }}" alt="About" class="h-32 object-contain rounded border border-gray-300" />
                            </div>
                        @endif
                        <div>
                            <p class="text-gray-500 font-semibold">Paragraf 1:</p>
                            <p class="text-gray-600 text-xs">{{ substr($content['about_paragraph_1'] ?? '', 0, 100) }}...</p>
                        </div>
                        <div>
                            <p class="text-gray-500 font-semibold">Paragraf 2:</p>
                            <p class="text-gray-600 text-xs">{{ substr($content['about_paragraph_2'] ?? '', 0, 100) }}...</p>
                        </div>
                        <hr class="my-3">
                        <p class="font-semibold text-gray-700">Statistics:</p>
                        <div class="grid grid-cols-3 gap-2">
                            @for($i = 1; $i <= 3; $i++)
                                <div class="bg-white p-2 rounded border border-gray-200 text-center">
                                    <p class="font-bold text-red-800">{{ $content['about_stat_'.$i.'_value'] ?? '' }}</p>
                                    <p class="text-gray-600 text-xs">{{ $content['about_stat_'.$i.'_label'] ?? '' }}</p>
                                </div>
                            @endfor
                        </div>
                    </div>
                @elseif($page === 'portfolio')
                    <div class="space-y-4 text-sm">
                        <div>
                            <p class="text-gray-500 font-semibold">Heading:</p>
                            <p class="text-red-800 font-bold text-lg">{{ $content['portfolio_heading'] ?? '' }}</p>
                        </div>
                        <div>
                            <p class="text-gray-500 font-semibold">Description:</p>
                            <p class="text-gray-600">{{ $content['portfolio_description'] ?? '' }}</p>
                        </div>
                        <hr class="my-3">
                        <p class="font-semibold text-gray-700">Projects:</p>
                        @foreach(['1', '2', '4', '5'] as $item)
                            <div class="bg-white p-2 rounded border border-gray-200">
                                <p class="font-semibold text-gray-700">{{ $content['portfolio_item_'.$item.'_title'] ?? '' }}</p>
                                <p class="text-gray-600 text-xs">{{ $content['portfolio_item_'.$item.'_description'] ?? '' }}</p>
                            </div>
                        @endforeach
                    </div>
                @elseif($page === 'testimonial')
                    <div class="space-y-4 text-sm">
                        <div>
                            <p class="text-gray-500 font-semibold">Heading:</p>
                            <p class="text-red-800 font-bold text-lg">{{ $content['testimonial_heading'] ?? '' }}</p>
                        </div>
                        <div>
                            <p class="text-gray-500 font-semibold">Description:</p>
                            <p class="text-gray-600">{{ $content['testimonial_description'] ?? '' }}</p>
                        </div>
                        <p class="text-gray-500 italic mt-3">Lihat halaman untuk preview client testimonial secara lengkap</p>
                    </div>
                @elseif($page === 'contact')
                    <div class="space-y-4 text-sm">
                        <div>
                            <p class="text-gray-500 font-semibold">Heading:</p>
                            <p class="text-red-800 font-bold text-lg">{{ $content['contact_heading'] ?? '' }}</p>
                        </div>
                        <div>
                            <p class="text-gray-500 font-semibold">Description:</p>
                            <p class="text-red-800">{{ $content['contact_description'] ?? '' }}</p>
                        </div>
                        <hr class="my-3">
                        <p class="font-semibold text-gray-700">Contact Info:</p>
                        <div class="space-y-2">
                            <div class="bg-white p-2 rounded border border-gray-200">
                                <p class="font-semibold">{{ $content['contact_location_title'] ?? '' }}</p>
                                <p class="text-gray-600 text-xs whitespace-pre-wrap">{{ $content['contact_location_text'] ?? '' }}</p>
                            </div>
                            <div class="bg-white p-2 rounded border border-gray-200">
                                <p class="font-semibold">{{ $content['contact_phone_title'] ?? '' }}</p>
                                <p class="text-gray-600 text-xs whitespace-pre-wrap">{{ $content['contact_phone_text'] ?? '' }}</p>
                            </div>
                            <div class="bg-white p-2 rounded border border-gray-200">
                                <p class="font-semibold">{{ $content['contact_email_title'] ?? '' }}</p>
                                <p class="text-gray-600 text-xs whitespace-pre-wrap">{{ $content['contact_email_text'] ?? '' }}</p>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </form>
</div>
@endsection