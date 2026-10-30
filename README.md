# 📦 E-Gudang – Sistem Informasi Manajemen Gudang

**E-Gudang** merupakan aplikasi berbasis web yang dikembangkan untuk membantu proses pengelolaan data gudang secara lebih terstruktur dan efisien. Aplikasi ini dibangun menggunakan framework Laravel dengan Livewire sebagai pendukung interaksi antarmuka yang dinamis.

Project ini dirancang untuk mendukung pengelolaan data pengguna, kategori barang, serta pengembangan sistem manajemen inventaris dengan pembagian hak akses berdasarkan role pengguna.

---

## 🚀 Teknologi yang Digunakan

Berikut teknologi dan tools yang digunakan dalam pengembangan aplikasi E-Gudang:

| Teknologi | Keterangan |
|---|---|
| PHP 8.3 | Bahasa pemrograman backend |
| Laravel 13 | Backend framework |
| Livewire 3 | Framework untuk membangun komponen dinamis |
| SQLite / MySQL | Database |
| Blade Template | Template engine Laravel |
| AdminLTE 3 | Template dashboard admin |
| Tailwind CSS 4 | Styling antarmuka |
| Vite | Frontend build tool |
| Composer | Dependency management PHP |
| NPM | Dependency management frontend |

### Library Pendukung

- `barryvdh/laravel-dompdf` – Mendukung pembuatan dokumen PDF.
- `maatwebsite/excel` – Mendukung kebutuhan ekspor dan impor Excel.

---

## ✨ Fitur Aplikasi

### 1. Manajemen Pengguna (User Management)

Fitur untuk mengelola data pengguna yang memiliki akses ke dalam sistem.

- Menampilkan daftar pengguna.
- Menambahkan pengguna baru.
- Mengubah informasi pengguna.
- Menghapus data pengguna.
- Pencarian berdasarkan nama, email, dan role.
- Pagination data pengguna.
- Validasi input pengguna.
- Enkripsi password menggunakan hashing Laravel.

### 2. Manajemen Kategori (Category Management)

Fitur untuk mengelola kategori barang dalam sistem gudang.

- Menampilkan daftar kategori.
- Menambahkan kategori baru.
- Mengubah nama kategori.
- Menghapus kategori.
- Pencarian kategori.
- Pagination data kategori.
- Validasi nama kategori agar tidak duplikat.

### 3. Manajemen Barang (Item Management)

Tersedia halaman awal untuk pengelolaan data barang pada area Admin dan Super Admin. Implementasi proses CRUD dan pengelolaan inventaris masih dalam tahap pengembangan.

### 4. Role Pengguna

Sistem menyediakan definisi dua jenis role pengguna:

- **Super Admin** – Ditujukan untuk pengelolaan administrasi sistem.
- **Admin** – Ditujukan untuk kebutuhan operasional pengelolaan gudang.

---

## 📂 Struktur Folder

Berikut gambaran struktur utama project:

```text
e-gudang/
│
├── app/
│   ├── Livewire/
│   │   ├── Admin/
│   │   │   └── Barang/
│   │   │       └── Index.php
│   │   │
│   │   ├── Auth/
│   │   │   └── Login.php
│   │   │
│   │   ├── Superadmin/
│   │   │   ├── Barang/
│   │   │   │   └── Index.php
│   │   │   ├── Kategori/
│   │   │   │   └── Index.php
│   │   │   └── User/
│   │   │       └── Index.php
│   │   │
│   │   └── Dashboard.php
│   │
│   ├── Models/
│   │   ├── Kategori.php
│   │   └── User.php
│   │
│   └── Providers/
│
├── database/
│   ├── migrations/
│   ├── factories/
│   └── seeders/
│
├── public/
│   └── adminlte3/
│
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
│       ├── layouts/
│       ├── livewire/
│       ├── admin/
│       ├── auth/
│       └── superadmin/
│
├── routes/
│   └── web.php
│
├── .env.example
├── artisan
├── composer.json
├── package.json
└── vite.config.js
```

---

## ⚙️ Instalasi dan Konfigurasi

Ikuti langkah-langkah berikut untuk menjalankan project E-Gudang di lingkungan lokal.

### 1. Clone Repository

```bash
git clone https://github.com/USERNAME/e-gudang.git
```

Masuk ke direktori project:

```bash
cd e-gudang
```

### 2. Install Dependency Laravel

```bash
composer install
```

### 3. Konfigurasi Environment

Salin file `.env.example` menjadi `.env`.

Untuk Windows:

```bash
copy .env.example .env
```

Untuk Linux/macOS:

```bash
cp .env.example .env
```

### 4. Generate Application Key

```bash
php artisan key:generate
```

### 5. Konfigurasi Database

Secara default, project menyediakan konfigurasi SQLite.

Buat file database jika belum tersedia:

```bash
php artisan migrate
```

Pastikan konfigurasi database pada `.env` sudah sesuai:

```env
DB_CONNECTION=sqlite
```

Jika ingin menggunakan MySQL, sesuaikan konfigurasi berikut:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=e_gudang
DB_USERNAME=root
DB_PASSWORD=
```

Pastikan database `e_gudang` sudah dibuat sebelum menjalankan migrasi.

### 6. Jalankan Database Migration

```bash
php artisan migrate
```

### 7. Install Dependency Frontend

```bash
npm install
```

### 8. Build Assets

```bash
npm run build
```

### 9. Jalankan Aplikasi

```bash
php artisan serve
```

Buka browser dan akses alamat:

```text
http://127.0.0.1:8000
```

Untuk pengembangan frontend menggunakan Vite, jalankan:

```bash
npm run dev
```

---

## 🗺️ Routing Aplikasi

Berikut beberapa routing yang telah didefinisikan pada aplikasi:

| URL | Nama Route | Keterangan |
|---|---|---|
| `/` | - | Halaman welcome Laravel |
| `/superadmin/user` | `superadmin.user.index` | Halaman manajemen pengguna |
| `/superadmin/kategori/index` | `superadmin.kategori.index` | Halaman manajemen kategori |
| `/superadmin/barang/index` | `superadmin.barang.index` | Halaman data barang Super Admin |

Untuk melihat seluruh routing aplikasi, jalankan:

```bash
php artisan route:list
```

---

## 🗄️ Database

### Tabel Users

Digunakan untuk menyimpan informasi pengguna aplikasi.

| Kolom | Keterangan |
|---|---|
| id | ID pengguna |
| nama | Nama pengguna |
| email | Email pengguna |
| role | Hak akses pengguna |
| password | Password yang telah di-hash |
| remember_token | Token autentikasi |
| created_at | Waktu data dibuat |
| updated_at | Waktu data diperbarui |

### Tabel Kategoris

Digunakan untuk menyimpan informasi kategori barang.

| Kolom | Keterangan |
|---|---|
| id | ID kategori |
| nama_kategori | Nama kategori |
| created_at | Waktu data dibuat |
| updated_at | Waktu data diperbarui |

---

## 🔧 Pengembangan Selanjutnya

Beberapa fitur yang dapat dikembangkan untuk meningkatkan fungsionalitas aplikasi:

- [ ] Implementasi autentikasi Login dan Logout.
- [ ] Implementasi middleware dan pembatasan akses berdasarkan role.
- [ ] Pengembangan CRUD data barang.
- [ ] Pengelolaan stok barang.
- [ ] Pencatatan transaksi barang masuk dan barang keluar.
- [ ] Dashboard statistik inventaris.
- [ ] Relasi antara barang dan kategori.
- [ ] Fitur pencarian dan filter data barang.
- [ ] Export laporan ke PDF dan Excel.
- [ ] Pengujian aplikasi dan peningkatan keamanan.

---

## 🔐 Catatan Keamanan

- Jangan mengunggah file `.env` ke repository publik.
- Gunakan `.env.example` sebagai contoh konfigurasi.
- Pastikan `APP_DEBUG=false` ketika aplikasi digunakan di lingkungan produksi.
- Gunakan password yang kuat.
- Terapkan autentikasi dan otorisasi sebelum aplikasi digunakan secara publik.
- Pastikan kredensial database tidak terekspos.

---

## 👨‍💻 Developer

**E-Gudang – Sistem Informasi Manajemen Gudang**

Dikembangkan sebagai project pengembangan aplikasi web menggunakan Laravel dan Livewire.

---

## 📄 License

Project ini menggunakan berbagai framework dan library open-source. Setiap dependensi mengikuti lisensi masing-masing.

