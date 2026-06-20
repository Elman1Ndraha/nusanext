# 📋 Rencana Refactoring: Konversi SPA ke Multi-Page Layout dengan Sticky Header

## 🎯 Tujuan Perubahan
Mengubah struktur website dari Single Page Application (SPA) dengan landing page menjadi struktur multi-halaman yang lebih terstruktur, dimana:
- **Header tetap sticky** saat user scroll
- **Setiap halaman menampilkan konten spesifik** (tidak lagi semua konten dalam 1 halaman)
- **Footer ada di semua halaman** (di bawah setiap konten)
- **User experience lebih baik** di desktop dan mobile

---

## 📊 Struktur Saat Ini

```
Routes (web.php)
├── GET / (HomeController@index) → 'home'
├── GET /about (HomeController@about) → 'about'
├── GET /portfolio (HomeController@portfolio) → 'portfolio'
├── GET /program/kursus (CourseController@index) → 'kursus'
├── GET /program/bootcamp (BootcampController@index) → 'bootcamp'
├── GET /testimonial (HomeController@testimonial) → 'testimonial'
└── GET /contact (HomeController@contact) → 'contact'

Views (resources/views/)
├── index.blade.php (Landing page?)
├── pages/
├── kursus/
├── components/
│   └── header.blade.php (navbar)
│   └── footer.blade.php (footer)
└── admin/, auth/
```

---

## 🏗️ Struktur Target

```
Layout Master
├── resources/views/layouts/app.blade.php (Layout utama dengan header + footer)
│   ├── @include('components.header') [sticky]
│   ├── @yield('content') [konten page spesifik]
│   └── @include('components.footer')

Views (terpisah per halaman)
├── resources/views/pages/home.blade.php
├── resources/views/pages/about.blade.php
├── resources/views/pages/portfolio.blade.php
├── resources/views/pages/contact.blade.php
├── resources/views/kursus/
│   ├── index.blade.php (daftar kursus)
│   └── show.blade.php (detail kursus)
└── resources/views/bootcamp/
    ├── index.blade.php
    └── show.blade.php
```

---

## 📝 Perubahan yang Akan Dilakukan

### ✅ Phase 1: Struktur Layout
- [ ] Buat `resources/views/layouts/app.blade.php` (master layout)
- [ ] Update `resources/views/components/header.blade.php` (sudah sticky ✓)
- [ ] Pastikan `resources/views/components/footer.blade.php` lengkap dan siap
- [ ] Tambahkan Tailwind responsive classes untuk layout

### ✅ Phase 2: Pisahkan View per Halaman
- [ ] Buat `resources/views/pages/home.blade.php` (konten home saja)
- [ ] Buat `resources/views/pages/about.blade.php` (konten about saja)
- [ ] Buat `resources/views/pages/portfolio.blade.php`
- [ ] Update view kursus dan bootcamp
- [ ] Update view testimonial dan contact

### ✅ Phase 3: Update Controller
- [ ] Update HomeController untuk return view berbeda per halaman
- [ ] Pastikan setiap route return layout dengan content yang tepat

### ✅ Phase 4: Testing
- [ ] Test sticky header di setiap halaman
- [ ] Test footer ada di bawah setiap halaman
- [ ] Test mobile responsiveness
- [ ] Test scroll behavior

---

## ❓ Pertanyaan yang Perlu Dijawab Sebelum Mulai

### 1. **Konten Halaman Saat Ini**
   ```
   ❓ Dimana konten home, about, kursus, dll sekarang berada?
   
   Kemungkinan:
   - A) Semua di index.blade.php dalam satu halaman (sections)
   - B) Sudah terpisah di folder pages/, kursus/, dll
   - C) Lainnya?
   
   👉 JAWAB: ___________________________________________
   ```

### 2. **Footer Component**
   ```
   ❓ Footer sudah lengkap atau perlu konten tambahan?
   
   - Apa saja yang ada di footer? (links, copyright, contact info, dll)
   - Apakah footer sama di semua halaman?
   
   👉 JAWAB: ___________________________________________
   ```

### 3. **Konten Dinamis**
   ```
   ❓ Apakah ada konten yang perlu ditarik dari database?
   
   - Kursus list dari database?
   - Testimonial dari database?
   - Contact info dari config?
   
   👉 JAWAB: ___________________________________________
   ```

### 4. **CSS/Styling**
   ```
   ❓ Apakah styling setiap halaman sudah ada atau perlu dibuat?
   
   - Apakah menggunakan Tailwind CSS?
   - Apakah ada custom CSS files?
   - Apakah ada CSS untuk setiap section?
   
   👉 JAWAB: ___________________________________________
   ```

### 5. **Mobile Navigation**
   ```
   ❓ Apakah mobile menu perlu perubahan?
   
   - Mobile menu sudah responsive?
   - Perlu adjustment untuk sticky header?
   
   👉 JAWAB: ___________________________________________
   ```

---

## 📁 File yang Akan Dibuat/Diubah

### 🆕 Akan Dibuat
- `resources/views/layouts/app.blade.php` (master layout)
- `resources/views/pages/home.blade.php`
- `resources/views/pages/about.blade.php`
- `resources/views/pages/portfolio.blade.php`
- `resources/views/pages/contact.blade.php`
- Mungkin file lainnya sesuai kebutuhan

### 📝 Akan Diupdate
- `resources/views/components/header.blade.php` (minor adjustment)
- `resources/views/components/footer.blade.php` (pastikan lengkap)
- `app/Http/Controllers/HomeController.php`
- `app/Http/Controllers/CourseController.php`
- `app/Http/Controllers/BootcampController.php`

---

## 💡 Catatan Penting

1. **Backward Compatibility**: Pastikan routing tetap sama agar link tidak rusak
2. **SEO**: Perhatikan meta tags di setiap halaman
3. **Performance**: Lazy load images jika perlu
4. **Mobile First**: Design tetap responsive untuk mobile

---

## 🚀 Langkah Implementasi

```
1. Jawab pertanyaan di atas ❓
2. Saya akan menganalisis struktur view existing
3. Buat layout master (app.blade.php)
4. Pisahkan view per halaman
5. Update controller
6. Testing di browser
7. Refinement jika ada bug
```

---

**Status**: ⏳ Menunggu jawaban dari Anda untuk melanjutkan ke Phase Implementation

