<?php

namespace App\Http\Controllers;

use App\Services\PageContentManager;
use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function index()
    {
        $pages = PageContentManager::getSchema();

        return view('admin.pages.index', compact('pages'));
    }

    public function edit(string $page)
    {
        $schema = PageContentManager::getSchema();

        if (!isset($schema[$page])) {
            abort(404);
        }

        $content = PageContentManager::all($page);

        return view('admin.pages.edit', [
            'page' => $page,
            'schema' => $schema[$page],
            'content' => $content,
        ]);
    }

    public function update(Request $request, string $page)
    {
        $schema = PageContentManager::getSchema();

        if (!isset($schema[$page])) {
            abort(404);
        }

        $rules = [];

        foreach ($schema[$page]['fields'] as $field) {
            if ($field['type'] === 'image') {
                $rules[$field['key']] = 'nullable|image|max:4096';
            } else {
                $rules[$field['key']] = 'nullable|string';
            }
        }

        $validated = $request->validate($rules);

        $saveData = [];

        foreach ($schema[$page]['fields'] as $field) {

            // Jika field adalah gambar dan admin memilih gambar baru
            if ($field['type'] === 'image' && $request->hasFile($field['key'])) {

                $image = $request->file($field['key']);

                $filename = time() . '_' .
                    preg_replace(
                        '/[^a-zA-Z0-9_\.-]/',
                        '_',
                        $image->getClientOriginalName()
                    );

                $path = $image->storeAs(
                    'uploads/pages/' . $page,
                    $filename,
                    'public'
                );

                if ($path) {
                    $saveData[$field['key']] = $path;
                }

            // Jika field adalah teks
            } elseif ($field['type'] !== 'image') {

                // Hanya simpan jika admin benar-benar mengisi field
                if (
                    array_key_exists($field['key'], $validated)
                    && $validated[$field['key']] !== null
                    && $validated[$field['key']] !== ''
                ) {
                    $saveData[$field['key']] = $validated[$field['key']];
                }
            }
        }

        PageContentManager::savePage($page, $saveData);

        return redirect()
            ->route('admin.pages.edit', $page)
            ->with('success', 'Konten halaman berhasil disimpan.');
    }
}