# TODO: Implementasi CRUD untuk Paket di Website Laravel

## Langkah-langkah yang perlu dilakukan:

1. **Buat Model Package**
   - Buat file `app/Models/Package.php` dengan atribut yang sesuai.

2. **Update Migration untuk Tabel Packages**
   - Tambahkan kolom seperti `name`, `description`, `price` ke migration `2026_01_27_094126_create_packages_table.php`.

3. **Implementasi PackageController**
   - Lengkapi metode CRUD di `app/Http/Controllers/PackageController.php`:
     - index(): Tampilkan daftar paket.
     - create(): Tampilkan form buat paket baru.
     - store(): Simpan paket baru.
     - show(): Tampilkan detail paket.
     - edit(): Tampilkan form edit paket.
     - update(): Update paket.
     - destroy(): Hapus paket.

4. **Buat Views untuk CRUD**
   - Buat folder `resources/views/packages/` jika belum ada.
   - Buat file:
     - `index.blade.php`: Daftar paket.
     - `create.blade.php`: Form buat paket.
     - `edit.blade.php`: Form edit paket.
     - `show.blade.php`: Detail paket.

5. **Update Routes**
   - Tambahkan resource routes untuk packages di `routes/web.php`.

6. **Jalankan Migration**
   - Jalankan `php artisan migrate` untuk membuat tabel packages.

7. **Test CRUD**
   - Pastikan semua fungsi CRUD bekerja dengan baik.

## Status:
- [ ] 1. Buat Model Package
- [ ] 2. Update Migration
- [ ] 3. Implementasi Controller
- [ ] 4. Buat Views
- [ ] 5. Update Routes
- [ ] 6. Jalankan Migration
- [ ] 7. Test CRUD
