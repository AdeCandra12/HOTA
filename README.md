# HOTA (Hotel Kita)

HOTA (Hotel Kita) adalah sebuah aplikasi katalog hotel yang dibangun menggunakan Laravel 9 dan database MySQL. Aplikasi ini memberikan kemudahan bagi pengguna dalam mencari dan melihat detail hotel serta bagi admin dalam mengelola data hotel.

## Fitur Utama

### Pengguna
- **Marker**: Menandai hotel-hotel yang diminati.
- **Detail Hotel**: Melihat informasi lengkap tentang hotel termasuk foto, fasilitas, harga, dan ulasan.

### Admin
- **Register**: Mendaftar sebagai admin untuk mengelola data hotel.
- **Login**: Masuk ke dashboard admin.
- **CRUD Hotel**: Membuat, membaca, memperbarui, dan menghapus data hotel.
- **Marker pada Dashboard**: Menandai hotel di dashboard admin untuk pengelolaan yang lebih mudah.
- **Logout**: Keluar dari akun admin.

## Instalasi

Untuk menginstal dan menjalankan HOTA (Hotel Kita) secara lokal, ikuti langkah-langkah berikut:

1. Clone repositori ini:
   ```bash
   git clone https://github.com/username/HOTA.git
   ```

2. Masuk ke direktori proyek:
   ```bash
   cd HOTA
   ```

3. Install dependencies:
   ```bash
   composer install
   ```

4. Salin file .env.example menjadi .env:
   ```bash
   cp .env.example .env
   ```

5. Generate key aplikasi:
   ```bash
   php artisan key:generate
   ```

6. Atur konfigurasi database di file .env.

7. Jalankan migrasi database:
   ```bash
   php artisan migrate
   ```

8. Jalankan aplikasi:
   ```bash
   php artisan serve
   ```

## Teknologi yang Digunakan

- **Framework**: Laravel 9
- **Database**: MySQL

## Kontribusi

Kami menyambut kontribusi dari siapa pun yang ingin membantu mengembangkan aplikasi ini lebih lanjut. Jika Anda ingin berkontribusi, silakan ikuti langkah-langkah berikut:

1. Fork repositori ini.
2. Buat branch baru untuk fitur atau perbaikan Anda:
   ```bash
   git checkout -b fitur-baru
   ```
3. Commit perubahan Anda:
   ```bash
   git commit -m "Menambahkan fitur baru"
   ```
4. Push ke branch:
   ```bash
   git push origin fitur-baru
   ```
5. Buat Pull Request.

## Lisensi

Proyek ini dilisensikan di bawah lisensi MIT - lihat file [LICENSE](LICENSE) untuk detail lebih lanjut.

## Kontak

Jika Anda memiliki pertanyaan atau saran, silakan hubungi kami di [email@example.com](mailto:email@example.com).

---

Semoga ini membantu! Jika ada informasi tambahan yang ingin ditambahkan atau diubah, beri tahu saya.
