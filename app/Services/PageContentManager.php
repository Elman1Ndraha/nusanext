<?php

namespace App\Services;
use App\Models\PageContent;



class PageContentManager
{
    protected const STORAGE_FILE = 'page_contents.json';

    public static function getSchema(): array
    {
        return [
            'home' => [
                'label' => 'Beranda',
                'fields' => [
                    ['key' => 'hero_title', 'label' => 'Judul Hero', 'type' => 'textarea', 'rows' => 2, 'default' => 'Selamat Datang di Nusanext'],
                    ['key' => 'hero_description', 'label' => 'Deskripsi Hero', 'type' => 'textarea', 'rows' => 3, 'default' => 'Kami adalah tim profesional yang berdedikasi untuk menghadirkan solusi digital terbaik. Dengan pengalaman bertahun-tahun, kami siap membawa bisnis Anda ke level selanjutnya.'],
                    ['key' => 'whatsapp_label', 'label' => 'Label Tombol WhatsApp', 'type' => 'text', 'default' => 'WhatsApp Kami'],
                    ['key' => 'whatsapp_number', 'label' => 'Nomor WhatsApp (format internasional)', 'type' => 'text', 'default' => '+62895321348641'],
                    ['key' => 'learn_more_label', 'label' => 'Label Tombol Pelajari', 'type' => 'text', 'default' => 'Pelajari Selengkapnya'],
                    ['key' => 'feature_1_title', 'label' => 'Judul Fitur 1', 'type' => 'text', 'default' => 'Cepat & Efisien'],
                    ['key' => 'feature_1_description', 'label' => 'Deskripsi Fitur 1', 'type' => 'textarea', 'rows' => 2, 'default' => 'Proses yang streamlined dan hasil yang cepat tanpa mengorbankan kualitas.'],
                    ['key' => 'feature_2_title', 'label' => 'Judul Fitur 2', 'type' => 'text', 'default' => 'Solusi Tepat Sasaran'],
                    ['key' => 'feature_2_description', 'label' => 'Deskripsi Fitur 2', 'type' => 'textarea', 'rows' => 2, 'default' => 'Kami memahami kebutuhan Anda dan memberikan solusi yang custom sesuai bisnis.'],
                    ['key' => 'feature_3_title', 'label' => 'Judul Fitur 3', 'type' => 'text', 'default' => 'Support 24/7'],
                    ['key' => 'feature_3_description', 'label' => 'Deskripsi Fitur 3', 'type' => 'textarea', 'rows' => 2, 'default' => 'Tim kami siap membantu Anda kapan saja, di mana saja dengan respons cepat.'],
                    [
                        'key' => 'hero_card_title',
                        'label' => 'Judul Kartu Hero',
                        'type' => 'text',
                        'default' => 'Inovasi Digital',
                    ],

                    [
                        'key' => 'hero_card_description',
                        'label' => 'Deskripsi Kartu Hero',
                        'type' => 'textarea',
                        'rows' => 3,
                        'default' => 'Transformasi bisnis Anda dengan teknologi modern, solusi digital kreatif, dan pengembangan sistem yang profesional.',
                    ],

                    [
                        'key' => 'pricing_heading',
                        'label' => 'Judul Paket Website',
                        'type' => 'text',
                        'default' => 'Paket Website',
                    ],

                    [
                        'key' => 'pricing_description',
                        'label' => 'Deskripsi Paket Website',
                        'type' => 'textarea',
                        'rows' => 2,
                        'default' => 'Mulai branding bisnismu dengan website profesional. Pilih paket yang paling sesuai dengan kebutuhanmu.',
                    ],
                ],
            ],
            'about' => [
                'label' => 'Tentang Kami',
                'fields' => [
                    ['key' => 'about_heading', 'label' => 'Judul Bagian', 'type' => 'text', 'default' => 'Tentang Kami'],
                    ['key' => 'about_description', 'label' => 'Subjudul Bagian', 'type' => 'text', 'default' => 'NusaNext adalah perusahaan yang berfokus pada transformasi digital dan pengembangan solusi inovatif.'],
                    ['key' => 'about_paragraph_1', 'label' => 'Paragraf 1', 'type' => 'textarea', 'rows' => 3, 'default' => 'NusaNext adalah perusahaan yang berfokus pada transformasi digital dan pengembangan solusi inovatif. Dengan tim yang terdiri dari profesional berpengalaman, kami telah membantu ratusan perusahaan mencapai tujuan bisnis mereka.'],
                    ['key' => 'about_paragraph_2', 'label' => 'Paragraf 2', 'type' => 'textarea', 'rows' => 3, 'default' => 'Kami percaya bahwa teknologi seharusnya membuat hidup lebih mudah, bukan lebih rumit. Oleh karena itu, kami selalu fokus pada user experience dan memberikan solusi yang intuitif serta efektif.'],
                    ['key' => 'about_image', 'label' => 'Gambar About', 'type' => 'image', 'default' => ''],
                    ['key' => 'about_paragraph_3', 'label' => 'Paragraf 3', 'type' => 'textarea', 'rows' => 3, 'default' => 'Visi kami adalah menjadi partner terpercaya dalam transformasi digital bisnis Anda, sementara misi kami adalah memberikan solusi berkualitas tinggi yang menghasilkan ROI maksimal.'],
                    ['key' => 'about_stat_1_value', 'label' => 'Nilai Statistik 1', 'type' => 'text', 'default' => '500+'],
                    ['key' => 'about_stat_1_label', 'label' => 'Label Statistik 1', 'type' => 'text', 'default' => 'Proyek Selesai'],
                    ['key' => 'about_stat_2_value', 'label' => 'Nilai Statistik 2', 'type' => 'text', 'default' => '15+'],
                    ['key' => 'about_stat_2_label', 'label' => 'Label Statistik 2', 'type' => 'text', 'default' => 'Tim Ahli'],
                    ['key' => 'about_stat_3_value', 'label' => 'Nilai Statistik 3', 'type' => 'text', 'default' => '5+'],
                    ['key' => 'about_stat_3_label', 'label' => 'Label Statistik 3', 'type' => 'text', 'default' => 'Tahun Pengalaman'],
                ],
            ],
            'portfolio' => [
                'label' => 'Portfolio',
                'fields' => [
                    ['key' => 'portfolio_heading', 'label' => 'Judul Bagian', 'type' => 'text', 'default' => 'Portfolio Kami'],
                    ['key' => 'portfolio_description', 'label' => 'Deskripsi Bagian', 'type' => 'textarea', 'rows' => 2, 'default' => 'Lihat contoh project dan website yang telah kami buat'],
                    ['key' => 'portfolio_item_1_title', 'label' => 'Project 1 Judul', 'type' => 'text', 'default' => 'Company Website'],
                    ['key' => 'portfolio_item_1_description', 'label' => 'Project 1 Deskripsi', 'type' => 'textarea', 'rows' => 2, 'default' => 'Website perusahaan modern dengan design yang elegan dan responsive.'],
                    ['key' => 'portfolio_item_2_title', 'label' => 'Project 2 Judul', 'type' => 'text', 'default' => 'E-Commerce Store'],
                    ['key' => 'portfolio_item_2_description', 'label' => 'Project 2 Deskripsi', 'type' => 'textarea', 'rows' => 2, 'default' => 'Platform e-commerce lengkap dengan sistem pembayaran dan inventory management.'],
                    ['key' => 'portfolio_item_4_title', 'label' => 'Project 4 Judul', 'type' => 'text', 'default' => 'Blog Platform'],
                    ['key' => 'portfolio_item_4_description', 'label' => 'Project 4 Deskripsi', 'type' => 'textarea', 'rows' => 2, 'default' => 'Platform blog dengan CMS terintegrasi untuk manajemen konten yang mudah.'],
                    ['key' => 'portfolio_item_5_title', 'label' => 'Project 5 Judul', 'type' => 'text', 'default' => 'SaaS Platform'],
                    ['key' => 'portfolio_item_5_description', 'label' => 'Project 5 Deskripsi', 'type' => 'textarea', 'rows' => 2, 'default' => 'Platform SaaS dengan fitur subscription dan analytics dashboard yang powerful.'],
                ],
            ],
            'testimonial' => [
                'label' => 'Testimonial',
                'fields' => [
                    ['key' => 'testimonial_heading', 'label' => 'Judul Bagian', 'type' => 'text', 'default' => 'Apa Kata Klien NusaNext?'],
                    ['key' => 'testimonial_description', 'label' => 'Deskripsi Bagian', 'type' => 'textarea', 'rows' => 2, 'default' => 'Kepercayaan mereka adalah prioritas kami'],
                ],
            ],
            'contact' => [
                'label' => 'Kontak',
                'fields' => [
                    ['key' => 'contact_heading', 'label' => 'Judul Bagian', 'type' => 'text', 'default' => 'Hubungi Kami'],
                    ['key' => 'contact_description', 'label' => 'Deskripsi Bagian', 'type' => 'text', 'default' => 'Kami siap mendengarkan kebutuhan bisnis Anda'],
                    ['key' => 'contact_location_title', 'label' => 'Judul Lokasi', 'type' => 'text', 'default' => 'Lokasi'],
                    ['key' => 'contact_location_text', 'label' => 'Informasi Lokasi', 'type' => 'textarea', 'rows' => 2, 'default' => 'Jl. Elang laut. 123 Jakarta Barat 11730 Indonesia'],
                    ['key' => 'contact_phone_title', 'label' => 'Judul Telepon', 'type' => 'text', 'default' => 'Telepon'],
                    ['key' => 'contact_phone_text', 'label' => 'Nomor Telepon', 'type' => 'textarea', 'rows' => 2, 'default' => '+62 895-3213-48641 +62 895-3213-48641 Senin - Jumat, 09:00 - 18:00'],
                    ['key' => 'contact_email_title', 'label' => 'Judul Email', 'type' => 'text', 'default' => 'Email'],
                    ['key' => 'contact_email_text', 'label' => 'Alamat Email', 'type' => 'textarea', 'rows' => 2, 'default' => 'agusraha66@gmail.com nusanext@gmail.com Respon dalam 24 jam'],
                    ['key' => 'contact_form_heading', 'label' => 'Judul Formulir', 'type' => 'text', 'default' => 'Kirim Pesan Anda'],
                    ['key' => 'contact_submit_label', 'label' => 'Teks Tombol Kirim', 'type' => 'text', 'default' => 'Kirim Pesan'],
                    ['key' => 'contact_status_text', 'label' => 'Status Online', 'type' => 'text', 'default' => 'Saat ini kami online'],
                ],
            ],
            'bootcamp' => [
                'label' => 'Bootcamp',
                'fields' => [
                    ['key' => 'bootcamp_heading', 'label' => 'Judul Bagian', 'type' => 'text', 'default' => 'Program Bootcamp Intensif'],
                    ['key' => 'bootcamp_description', 'label' => 'Deskripsi Bagian', 'type' => 'textarea', 'rows' => 3, 'default' => 'Tingkatkan skill Anda dengan program bootcamp intensif selama 3-6 bulan. Dapatkan sertifikat dan job placement assistance setelah lulus.'],
                    ['key' => 'bootcamp_duration', 'label' => 'Durasi Program', 'type' => 'text', 'default' => '3-6 Bulan'],
                    ['key' => 'bootcamp_capacity', 'label' => 'Kapasitas Per Batch', 'type' => 'text', 'default' => '20 Peserta'],
                    ['key' => 'bootcamp_benefit_1', 'label' => 'Manfaat 1', 'type' => 'text', 'default' => 'Mentor Berpengalaman'],
                    ['key' => 'bootcamp_benefit_2', 'label' => 'Manfaat 2', 'type' => 'text', 'default' => 'Sertifikat Resmi'],
                    ['key' => 'bootcamp_benefit_3', 'label' => 'Manfaat 3', 'type' => 'text', 'default' => 'Job Placement'],
                    ['key' => 'bootcamp_benefit_4', 'label' => 'Manfaat 4', 'type' => 'text', 'default' => 'Portfolio Development'],
                ],
            ],
            'course' => [
                'label' => 'Kursus',
                'fields' => [
                    ['key' => 'course_heading', 'label' => 'Judul Bagian', 'type' => 'text', 'default' => 'Kursus Online Fleksibel'],
                    ['key' => 'course_description', 'label' => 'Deskripsi Bagian', 'type' => 'textarea', 'rows' => 3, 'default' => 'Belajar dengan fleksibel sesuai jadwal Anda. Akses materi kapan saja, di mana saja dengan durasi course yang beragam.'],
                    ['key' => 'course_duration', 'label' => 'Durasi Rata-rata', 'type' => 'text', 'default' => '4-8 Minggu'],
                    ['key' => 'course_modules', 'label' => 'Jumlah Module', 'type' => 'text', 'default' => '50+ Course'],
                    ['key' => 'course_benefit_1', 'label' => 'Manfaat 1', 'type' => 'text', 'default' => 'Akses Seumur Hidup'],
                    ['key' => 'course_benefit_2', 'label' => 'Manfaat 2', 'type' => 'text', 'default' => 'Sertifikat Course'],
                    ['key' => 'course_benefit_3', 'label' => 'Manfaat 3', 'type' => 'text', 'default' => 'Support Komunitas'],
                    ['key' => 'course_benefit_4', 'label' => 'Manfaat 4', 'type' => 'text', 'default' => 'Update Konten Berkala'],
                ],
            ],
        ];
    }

    public static function pages(): array
    {
        return array_keys(self::getSchema());
    }

    public static function pageLabel(string $page): string
    {
        $schema = self::getSchema();
        return $schema[$page]['label'] ?? ucfirst($page);
    }

    public static function get(string $page, string $key, string $default = ''): string
{
    $content = PageContent::where('page', $page)
        ->where('key', $key)
        ->value('value');

    if ($content !== null) {
        return (string) $content;
    }

    return $default ?: self::getDefault($page, $key);
    }

    public static function all(string $page): array
    {
        return PageContent::where('page', $page)
        ->pluck('value', 'key')
        ->toArray();
    }

    public static function savePage(string $page, array $values): void
    {
        foreach ($values as $key => $value) {
            PageContent::updateOrCreate(
             [
                'page' => $page,
                'key' => $key,
             ],
             [
                'value' => $value,
                'type' => 'text',
            ]
        );
    }
    }

    protected static function getDefault(string $page, string $key): string
    {
        $schema = self::getSchema();
        foreach ($schema[$page]['fields'] ?? [] as $field) {
            if ($field['key'] === $key) {
                return $field['default'] ?? '';
            }
        }
        return '';
    }

    protected static function loadData(): array
    {
        $path = storage_path('app/' . self::STORAGE_FILE);

        if (!file_exists($path)) {
            return [];
        }

        $json = file_get_contents($path);
        if ($json === false) {
            return [];
        }

        $decoded = json_decode($json, true);
        return is_array($decoded) ? $decoded : [];
    }

    protected static function saveData(array $data): void
    {
        $path = storage_path('app/' . self::STORAGE_FILE);
        $json = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        file_put_contents($path, $json);
    }
}
