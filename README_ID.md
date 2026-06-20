# 🚀 NusaNext - Platform Edukasi Digital

> Solusi digital terpercaya untuk bisnis Anda

## 📚 Daftar Isi

- [Tentang Project](#tentang-project)
- [Tech Stack](#tech-stack)
- [Struktur Folder](#struktur-folder)
- [Setup & Installation](#setup--installation)
- [Rencana Refactoring](#rencana-refactoring)
- [Halaman-Halaman](#halaman-halaman)
- [Pengembangan](#pengembangan)
- [Deployment](#deployment)
- [Kontribusi](#kontribusi)

---

## 📖 Tentang Project

**NusaNext** adalah platform edukasi digital yang menyediakan:
- 📖 **Kursus Online** - Pembelajaran dengan video berkualitas
- 🎓 **Bootcamp** - Program intensif pengembangan skill
- 💬 **Testimonial** - Review dari pengguna
- ✉️ **Hubungi Kami** - Channel komunikasi dengan tim

### Status Fitur
- ✅ Frontend landing page
- ✅ Navbar sticky header dengan dropdown menu
- ✅ Footer di semua halaman
- ⚙️ Admin panel untuk edit konten (dalam development)
- 🔐 Role-based access control (admin)
- ⏳ Upload video/file by admin (planned)
- ⏳ User authentication system (planned)

---

## 🛠️ Tech Stack

### Backend
- **Framework**: Laravel 11 (PHP)
- **Database**: MySQL/SQLite
- **Authentication**: Laravel Auth + Custom Roles
- **Validation**: Laravel Validation

### Frontend
- **Template**: Blade (Laravel)
- **CSS**: Tailwind CSS v3 + Custom CSS
- **JavaScript**: Vanilla JS (dengan Alpine.js ready)
- **Build Tool**: Vite
- **Package Manager**: npm / Composer

### Development Tools
- **Testing**: PHPUnit
- **API**: Laravel RESTful
- **Migration**: Laravel Migrations
- **Seeding**: Database Seeders

---

## 📁 Struktur Folder

```
nusanext/
│
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── HomeController.php         (Halaman utama: home, about, dll)
│   │   │   ├── CourseController.php       (Kursus online)
│   │   │   ├── BootcampController.php     (Bootcamp)
│   │   │   ├── AdminController.php        (Admin dashboard)
│   │   │   ├── AdminPageController.php    (Admin edit konten)
│   │   │   └── AuthController.php         (Authentication)
│   │   └── Middleware/
│   │
│   ├── Models/
│   │   └── User.php
│   │
│   ├── Services/
│   │   └── PageContentManager.php         (Manager konten halaman)
│   │
│   └── Providers/
│       └── AppServiceProvider.php
│
├── config/                                 (Konfigurasi app)
├── database/
│   ├── migrations/                        (Database schema)
│   ├── seeders/                           (Initial data)
│   └── factories/
│
├── public/                                 (Asset publik)
│   ├── images/
│   ├── build/                             (Compiled assets)
│   └── index.php
│
├── resources/
│   ├── css/
│   │   └── app.css                        (Custom CSS)
│   │
│   ├── js/
│   │   ├── app.js                         (Main JS)
│   │   └── bootstrap.js                   (Bootstrap app)
│   │
│   └── views/                             (📍 HALAMAN UTAMA)
│       ├── index.blade.php                (Landing page - deprecated)
│       │
│       ├── layouts/
│       │   └── app.blade.php              (Master layout - akan dibuat)
│       │
│       ├── pages/                         (📄 Halaman konten)
│       │   ├── home.blade.php             (Halaman home)
│       │   ├── about.blade.php            (Tentang kami)
│       │   ├── portfolio.blade.php        (Portfolio)
│       │   ├── contact.blade.php          (Kontak)
│       │   └── testimonial.blade.php      (Testimoni)
│       │
│       ├── kursus/                        (📚 Halaman kursus)
│       │   ├── index.blade.php            (Daftar kursus)
│       │   └── show.blade.php             (Detail kursus)
│       │
│       ├── bootcamp/                      (🎓 Halaman bootcamp)
│       │   └── index.blade.php            (Daftar bootcamp)
│       │
│       ├── components/                    (🎨 Reusable components)
│       │   ├── header.blade.php           (Navbar - sticky ✅)
│       │   ├── footer.blade.php           (Footer)
│       │   └── ...
│       │
│       ├── admin/                         (👨‍💼 Admin panel)
│       │   ├── dashboard.blade.php
│       │   └── pages/
│       │
│       └── auth/                          (🔐 Authentication)
│           └── login.blade.php
│
├── routes/
│   └── web.php                            (Route definitions)
│
├── storage/                               (File storage)
│   ├── app/
│   │   ├── page_contents.json             (Konten halaman JSON)
│   │   └── private/
│   └── logs/
│
├── tests/                                 (Unit & Feature tests)
├── bootstrap/                             (Bootstrap files)
│
├── vite.config.js                         (Vite configuration)
├── tailwind.config.js                     (Tailwind configuration)
├── composer.json                          (PHP dependencies)
├── package.json                           (NPM dependencies)
├── phpunit.xml                            (Test configuration)
├── artisan                                (Laravel CLI)
│
└── README.md                              (File ini)
```

---

## 🚀 Setup & Installation

### Prerequisite
- PHP 8.2+
- Composer
- Node.js 18+
- npm/yarn
- MySQL 8.0+ atau SQLite

### Langkah-Langkah

#### 1. Clone Repository
```bash
git clone <repo-url>
cd nusanext
```

#### 2. Install Dependencies
```bash
# PHP dependencies
composer install

# NPM dependencies
npm install
```

#### 3. Setup Environment
```bash
# Copy .env example
cp .env.example .env

# Generate app key
php artisan key:generate

# Update database credentials di .env
# DB_DATABASE=nusanext
# DB_USERNAME=root
# DB_PASSWORD=
```

#### 4. Database Setup
```bash
# Run migrations
php artisan migrate

# Seed initial data
php artisan db:seed

# Seed admin user (optional)
php artisan db:seed --class=AdminUserSeeder
```

#### 5. Build Assets
```bash
# Development
npm run dev

# Production
npm run build
```

#### 6. Run Application
```bash
# Development server
php artisan serve

# Akses di browser: http://localhost:8000
```

---

## 🔄 Rencana Refactoring

### Current State
- ⚠️ SPA (Single Page Application) - semua konten dalam landing page
- ⚠️ Header tidak sticky
- ⚠️ Footer tidak di semua halaman

### Target State ✅
- ✅ Multi-page structure dengan route terpisah
- ✅ Header sticky di atas saat scroll
- ✅ Footer di semua halaman
- ✅ Layout master (app.blade.php)
- ✅ View terpisah per halaman

### Phase Implementation

**Phase 1: Layout Setup**
- Buat master layout (app.blade.php)
- Update header dengan sticky positioning (sudah done ✅)
- Pastikan footer lengkap dan responsive

**Phase 2: View Separation**
- Pisahkan view per halaman dari landing page
- Gunakan layout master di setiap halaman
- Pastikan konten semantic dan accessible

**Phase 3: Controller Update**
- Update HomeController untuk return view berbeda
- Pastikan data flow dari controller ke view tepat

**Phase 4: Testing & QA**
- Test di desktop dan mobile
- Test sticky header behavior
- Test footer visibility
- Test navigation links

Lihat file `REFACTORING_PLAN.md` untuk detail lengkap.

---

## 📄 Halaman-Halaman

### Public Pages

#### 🏠 Home (`/`)
- **Controller**: HomeController@index
- **View**: resources/views/pages/home.blade.php
- **Konten**: Hero section, featured programs, CTA buttons
- **Status**: ✅ Ada

#### 📖 About (`/about`)
- **Controller**: HomeController@about
- **View**: resources/views/pages/about.blade.php
- **Konten**: Tentang NusaNext, visi misi, team
- **Status**: ✅ Ada

#### 🎨 Portfolio (`/portfolio`)
- **Controller**: HomeController@portfolio
- **View**: resources/views/pages/portfolio.blade.php
- **Konten**: Portfolio projects, case studies
- **Status**: ✅ Ada

#### 📚 Kursus (`/program/kursus`)
- **Controller**: CourseController@index
- **View**: resources/views/kursus/index.blade.php
- **Konten**: Daftar kursus online, filter, search
- **Status**: ✅ Ada

#### 🎓 Bootcamp (`/program/bootcamp`)
- **Controller**: BootcampController@index
- **View**: resources/views/bootcamp/index.blade.php
- **Konten**: Daftar bootcamp, jadwal, harga
- **Status**: ✅ Ada

#### 💬 Testimonial (`/testimonial`)
- **Controller**: HomeController@testimonial
- **View**: resources/views/pages/testimonial.blade.php
- **Konten**: Review dari user, rating
- **Status**: ✅ Ada

#### ✉️ Contact (`/contact`)
- **Controller**: HomeController@contact
- **View**: resources/views/pages/contact.blade.php
- **Konten**: Form kontak, social media links, alamat
- **Status**: ✅ Ada

### Admin Pages

#### 🔐 Login (`/login`)
- **Controller**: AuthController@showLoginForm
- **View**: resources/views/auth/login.blade.php
- **Proteksi**: Public
- **Status**: ✅ Ada

#### 👨‍💼 Admin Dashboard (`/admin/dashboard`)
- **Controller**: AdminController@dashboard
- **Proteksi**: Middleware admin
- **Status**: ✅ Ada

#### ✏️ Edit Pages (`/admin/pages/{page}/edit`)
- **Controller**: AdminPageController@edit
- **Proteksi**: Middleware admin
- **Fungsi**: Edit konten halaman
- **Status**: ⚙️ Development

---

## 👨‍💻 Pengembangan

### Development Workflow

#### 1. Frontend Development
```bash
# Watch CSS & JS changes
npm run dev

# Build untuk production
npm run build
```

#### 2. Backend Development
```bash
# Run artisan server
php artisan serve

# Artisan commands
php artisan tinker               # PHP REPL
php artisan make:model Model    # Generate model
php artisan make:controller Controller  # Generate controller
```

#### 3. Database Development
```bash
# Create migration
php artisan make:migration migration_name

# Run migration
php artisan migrate

# Rollback
php artisan migrate:rollback

# Fresh migration (drop & recreate)
php artisan migrate:fresh --seed
```

### Coding Standards

#### PHP/Laravel
- PSR-12 coding standard
- Use type hints untuk function parameters
- Single responsibility principle
- Repository pattern untuk database queries

#### Blade Templates
- Use semantic HTML5 tags
- Hindari inline styles (gunakan Tailwind CSS)
- Reusable components di `components/`
- Comment untuk complex logic

#### CSS/Tailwind
- Mobile-first approach
- Responsive breakpoints: sm, md, lg, xl, 2xl
- Custom CSS di `resources/css/` untuk specific styling
- Avoid hardcoding colors (gunakan Tailwind variables)

#### JavaScript
- Vanilla JS untuk simple interactions
- Alpine.js untuk reactive components
- Event delegation untuk performance
- Avoid global variables

### Testing

```bash
# Run PHPUnit tests
php artisan test

# Run specific test file
php artisan test tests/Feature/ExampleTest.php

# Generate coverage report
php artisan test --coverage
```

---

## 🚀 Deployment

### Preparation
```bash
# Update .env untuk production
APP_ENV=production
APP_DEBUG=false
```

### Deploy to Server
```bash
# 1. Push code ke repository
git push origin main

# 2. SSH ke server
ssh user@server

# 3. Pull latest code
git pull origin main

# 4. Install dependencies
composer install --optimize-autoloader --no-dev
npm install && npm run build

# 5. Run migrations
php artisan migrate --force

# 6. Clear caches
php artisan config:cache
php artisan route:cache
php artisan view:cache

# 7. Set permissions
chmod -R 775 storage bootstrap/cache
```

### Troubleshooting

#### 500 Error di Deployed Server
```bash
# Check error logs
tail -f storage/logs/laravel.log

# Clear all caches
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Rebuild cache
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

#### Admin Role Error
- ⚠️ Known Issue: Admin middleware mungkin tidak trigger dengan benar
- 🔍 Need to investigate: Check app/Http/Middleware/ untuk admin check
- 📝 Note: Ini perlu di-debug di local terlebih dahulu

---

## 📚 Dokumentasi Tambahan

- [Laravel Documentation](https://laravel.com/docs)
- [Tailwind CSS](https://tailwindcss.com/docs)
- [Blade Template Engine](https://laravel.com/docs/blade)
- [Vite Guide](https://vitejs.dev/guide/)

---

## 📝 Changelog

### v1.0.0 (Current)
- ✅ Initial project setup
- ✅ Multi-page routing
- ✅ Sticky header component
- ✅ Admin panel basic
- ⚙️ Refactoring SPA to multi-page

---

## 🤝 Kontribusi

### Reporting Issues
- Jelaskan bug dengan detail
- Include screenshots/video jika perlu
- Include step-to-reproduce

### Feature Requests
- Jelaskan fitur yang diinginkan
- Jelaskan use case & benefit
- Include mockup/wireframe jika ada

### Pull Request
1. Fork repository
2. Buat branch feature (`git checkout -b feature/amazing-feature`)
3. Commit changes (`git commit -m 'Add amazing feature'`)
4. Push to branch (`git push origin feature/amazing-feature`)
5. Open Pull Request

---

## 📞 Support

- 📧 Email: support@nusanext.com
- 💬 Contact: [kontak.html](/contact)
- 📱 Social Media: [Footer links]

---

## 📄 License

This project is licensed under the MIT License - see LICENSE file for details.

---

## 👥 Team

- **Project Lead**: [Your Name]
- **Backend**: [Developer Name]
- **Frontend**: [Developer Name]
- **Design**: [Designer Name]

---

**Last Updated**: 19 Juni 2026
**Version**: 1.0.0-dev
**Status**: 🔄 In Development - Refactoring Phase

