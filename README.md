# Desa Sukamerindu

Website informasi dan pelayanan Desa Sukamerindu yang dibangun menggunakan Laravel 12, MySQL, dan Vite sebagai media informasi dan pelayanan masyarakat desa.

---

## Teknologi yang Digunakan

- Laravel 12
- PHP 8.2+
- MySQL / MariaDB
- Vite
- Laravel Storage
- XAMPP

---

## Persyaratan Sistem

Pastikan perangkat sudah terinstall:

- PHP 8.2 atau lebih baru
- Composer
- Node.js 20+
- NPM
- Git
- XAMPP (Apache & MySQL)

Cek versi:

php -v
composer -V
node -v
npm -v

---

## Clone Repository

git clone https://github.com/fazilatech/desa-sukamerindu.git
cd desa-sukamerindu

---

## Install Dependency

### PHP Dependency

composer install

### Node Dependency

npm install

---

## Konfigurasi Environment

Salin file environment:

cp .env.example .env

Generate application key:

php artisan key:generate

---

## Konfigurasi Database

Buat database baru melalui phpMyAdmin:

desa_sukamerindu

Kemudian ubah konfigurasi database pada file `.env`:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=desa_sukamerindu
DB_USERNAME=root
DB_PASSWORD=

---

## Migrasi Database

Jalankan migrasi:

php artisan migrate

Jika menggunakan seeder:

php artisan migrate:fresh --seed

---

## Storage Link

Project menggunakan penyimpanan file sehingga storage link perlu dibuat:

php artisan storage:link

Output:

The [public/storage] link has been connected.

---

## Menjalankan Project

### Terminal 1

npm run dev

### Terminal 2

php artisan serve

Buka browser:

http://127.0.0.1:8000

---

## Struktur Fitur

### Pengunjung

* Melihat halaman utama desa
* Melihat profil Desa Sukamerindu
* Melihat informasi desa
* Melihat agenda desa
* Melihat transparansi desa
* Melihat data aparatur desa

### Warga

* Registrasi dan login
* Mengelola profil
* Membuat pengaduan
* Melihat pengaduan
* Mengajukan surat
* Melihat status pengajuan surat

### Sekdes

* Mengelola profil desa
* Mengelola aparatur desa
* Mengelola informasi desa
* Mengelola agenda desa
* Mengelola pengaduan warga
* Mengelola pengajuan surat

### Kepala Desa

* Mengelola informasi desa
* Melihat pengaduan warga
* Melihat pengajuan surat
* Mengelola informasi pemerintahan desa

---

## Akun Pengguna

Akun pengguna disesuaikan dengan data pada database.

Role pengguna:

- Warga
- Sekdes
- Kepala Desa

---

## Perintah Penting

Membersihkan cache:

php artisan optimize:clear

Membuat storage link:

php artisan storage:link

Menjalankan migrasi:

php artisan migrate

Menjalankan migrasi ulang:

php artisan migrate:fresh --seed

Menjalankan server Laravel:

php artisan serve

Menjalankan Vite:

npm run dev

Build production:

npm run build

---

## Troubleshooting

### Gambar atau File Tidak Tampil

Jalankan:

php artisan storage:link

### Vite Manifest Not Found

Jalankan:

npm install
npm run dev

atau:

npm run build

### Database Connection Error

Periksa konfigurasi database pada file `.env`.

### Class Not Found

Jalankan:

composer dump-autoload
php artisan optimize:clear

---

## Lisensi

Project ini dibuat untuk pengembangan Website Informasi dan Pelayanan Desa Sukamerindu sebagai media informasi dan pelayanan masyarakat desa.
