# 📦 Aplikasi Inventaris Barang (Laravel)

Aplikasi web sederhana untuk mencatat dan mengelola inventaris barang. Dibuat menggunakan Laravel dan Tailwind CSS. Mendukung fitur login, CRUD barang, pencarian, validasi, dan middleware untuk autentikasi admin.

---

## 🚀 Fitur Utama

- 🔐 Autentikasi (Login & Logout)
- 📄 Manajemen Data Barang (Create, Read, Update, Delete)
- 🔍 Pencarian Barang
- ✅ Validasi Formulir
- 🛡️ Middleware proteksi halaman
- 📚 Struktur kode mengikuti best practices (Controller, FormRequest, Blade)

---

## 🧰 Teknologi

- Laravel 10+
- PHP 8.1+
- Tailwind CSS
- Blade Template
- SQLite / MySQL (opsional)

---

## 🛠️ Instalasi & Setup

1. Clone repo:
   ```bash
   git clone https://github.com/username/nama-project.git
   cd nama-project
``

2. Install dependensi:

   ```bash
   composer install
   npm install && npm run dev
   ```

3. Konfigurasi file `.env`:

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. Setup database (SQLite/MySQL):

   ```bash
   php artisan migrate
   ```

5. Jalankan aplikasi:

   ```bash
   php artisan serve
   ```

---

## 👤 Akun Login

> **Catatan:** Hanya user yang sudah login yang bisa mengakses fitur CRUD.

Jika belum ada akun, kamu bisa:

* Membuat seeder sendiri
* Register dari UI (jika route auth/register diaktifkan)

---

## 🧪 Struktur Folder Penting

```
app/
├── Http/
│   ├── Controllers/ItemController.php
│   ├── Requests/StoreItemRequest.php
│   └── Requests/UpdateItemRequest.php
resources/
└── views/items/
    ├── index.blade.php
    ├── create.blade.php
    ├── edit.blade.php
routes/
└── web.php
```

---

## ✍️ Kontribusi

Pull request dan masukan sangat diterima. Silakan fork repository ini dan buat perubahan sesuai kebutuhan.

---

## 📄 Lisensi

Proyek ini menggunakan lisensi [MIT](LICENSE).

---
