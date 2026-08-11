<?php

use App\Models\PageContent;

if (! function_exists('content')) {
    function content(
        string $key,
        string $default = ''
    ): string {
        $parts = explode('.', $key, 2);

        if (count($parts) !== 2) {
            return $default;
        }

        [$page, $contentKey] = $parts;

        $value = PageContent::where('page', $page)
            ->where('key', $contentKey)
            ->value('value');

        return $value !== null && $value !== ''
            ? $value
            : $default;
    }
}