HOTA (Hotel Kita)
HOTA (Hotel Kita) adalah sebuah aplikasi katalog hotel yang dibangun menggunakan Laravel 9 dan database MySQL. Aplikasi ini memberikan kemudahan bagi pengguna dalam mencari dan melihat detail hotel serta bagi admin dalam mengelola data hotel.

Fitur Utama
Pengguna
Marker: Menandai hotel-hotel yang diminati.
Detail Hotel: Melihat informasi lengkap tentang hotel termasuk foto, fasilitas, harga, dan ulasan.
Admin
Register: Mendaftar sebagai admin untuk mengelola data hotel.
Login: Masuk ke dashboard admin.
CRUD Hotel: Membuat, membaca, memperbarui, dan menghapus data hotel.
Marker pada Dashboard: Menandai hotel di dashboard admin untuk pengelolaan yang lebih mudah.
Logout: Keluar dari akun admin.
Instalasi
Untuk menginstal dan menjalankan HOTA (Hotel Kita) secara lokal, ikuti langkah-langkah berikut:

Clone repositori ini:

bash
Salin kode
git clone https://github.com/username/HOTA.git
Masuk ke direktori proyek:

bash
Salin kode
cd HOTA
Install dependencies:

bash
Salin kode
composer install
Salin file .env.example menjadi .env:

bash
Salin kode
cp .env.example .env
Generate key aplikasi:

bash
Salin kode
php artisan key:generate
Atur konfigurasi database di file .env.

Jalankan migrasi database:

bash
Salin kode
php artisan migrate
Jalankan aplikasi:

bash
Salin kode
php artisan serve
Teknologi yang Digunakan
Framework: Laravel 9
Database: MySQL
Kontribusi
Kami menyambut kontribusi dari siapa pun yang ingin membantu mengembangkan aplikasi ini lebih lanjut. Jika Anda ingin berkontribusi, silakan ikuti langkah-langkah berikut:

Fork repositori ini.
Buat branch baru untuk fitur atau perbaikan Anda:
bash
Salin kode
git checkout -b fitur-baru
Commit perubahan Anda:
bash
Salin kode
git commit -m "Menambahkan fitur baru"
Push ke branch:
bash
Salin kode
git push origin fitur-baru
Buat Pull Request.
Lisensi
Proyek ini dilisensikan di bawah lisensi MIT - lihat file LICENSE untuk detail lebih lanjut.

Kontak
Jika Anda memiliki pertanyaan atau saran, silakan hubungi kami di email@example.com.

