# 📦 Aplikasi Inventaris Barang (Laravel)

Aplikasi web sederhana untuk mencatat dan mengelola inventaris barang. Dibuat menggunakan Laravel dan Tailwind CSS. Mendukung fitur login, CRUD barang, pencarian, validasi, dan middleware autentikasi admin.

---

## 🚀 Fitur Utama

- 🔐 Autentikasi (Login & Logout)
- 📄 CRUD Data Barang (Create, Read, Update, Delete)
- 🔍 Fitur Pencarian Barang
- ✅ Validasi Form dengan `FormRequest`
- 🛡️ Proteksi halaman menggunakan Middleware (`auth`)
- 🧱 Struktur kode mengikuti best practices (Controller, Blade, Request)

---

## 🧰 Teknologi yang Digunakan

- **Laravel 10+**
- **PHP 8.1+**
- **Tailwind CSS**
- **Blade Template Engine**
- **SQLite / MySQL** (opsional)

---

## 🛠️ Instalasi & Setup

1. **Clone repositori:**
   ```bash
   git clone https://github.com/rafliadipratama/inventarisku.git
   cd inventarisku

2. **Install dependensi:**

   ```bash
   composer install
   npm install && npm run dev
   ```

3. **Konfigurasi file `.env`:**

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Setup database:**

   * Gunakan SQLite (default) atau MySQL, lalu migrasikan:

     ```bash
     php artisan migrate
     ```

5. **Jalankan aplikasi:**

   ```bash
   php artisan serve
   ```

---

## 👤 Akun Login

> 🔒 Hanya pengguna yang sudah login yang dapat mengakses halaman CRUD barang.

Jika belum ada akun:

* Aktifkan fitur **register** di auth scaffolding, atau
* Buat user manual/seeder menggunakan `tinker`:

  ```bash
  php artisan tinker
  ```

---

## 📂 Struktur Folder Penting

```
app/
├── Http/
│   ├── Controllers/ItemController.php
│   └── Requests/
│       ├── StoreItemRequest.php
│       └── UpdateItemRequest.php
resources/
└── views/items/
    ├── index.blade.php
    ├── create.blade.php
    └── edit.blade.php
routes/
└── web.php
```

---

## 🤝 Kontribusi

Pull request, saran, dan feedback sangat diterima!
Silakan fork repository ini dan kirim perubahanmu.

---

## 👨‍💻 Author

**Rafli Adipratama**
📫 [GitHub](https://github.com/rafliadipratama)
📧 [rafliadipratama@email.com](mailto:rafliadipratma@email.com) 

---

## 📄 Lisensi

Proyek ini dirilis dengan lisensi [MIT](LICENSE).
