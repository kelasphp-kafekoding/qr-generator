# QR Code Generator Dinamis dengan PHP

Proyek ini adalah versi dinamis dari QR code generator yang memungkinkan user memasukkan teks sendiri dan memilih jenis barcode/QR code melalui form HTML.

## Fitur

- Input teks custom melalui form
- Pilihan jenis kode: QR Code, Barcode 128, EAN-13
- Pilihan ukuran: Kecil, Sedang, Besar
- Interface yang user-friendly

## Struktur File

- `index.php` - Form HTML untuk input data
- `qrProses.php` - Script PHP untuk memproses form dan generate QR code

## Parameter API

- `bcid=qrcode` - Jenis barcode/QR code yang akan dibuat
- `text=$kode` - Teks yang akan di-encode ke QR code
- `scale=5` - Ukuran QR code (1-10)

## Jenis Barcode Lain

Selain QR code, API ini juga mendukung:
- `code128` - Barcode batang
- `ean13` - Barcode produk
- `datamatrix` - Data Matrix
- Dan banyak lagi

## Cara Ganti Jenis Kode

Untuk mengganti jenis barcode/QR code, ubah parameter `bcid` di URL:

```php
// QR Code (kotak)
echo "<img src='https://bwipjs-api.metafloor.com/?bcid=qrcode&text=$qr&scale=5'>";

// Barcode batang
echo "<img src='https://bwipjs-api.metafloor.com/?bcid=code128&text=$qr&scale=5'>";

// Barcode produk
echo "<img src='https://bwipjs-api.metafloor.com/?bcid=ean13&text=1234567890123&scale=5'>";
```

Cukup ganti nilai `bcid=` sesuai jenis yang diinginkan.

## Cara Menggunakan

1. Clone repository ini:
   ```bash
   git clone https://github.com/kelasphp-kafekoding/qr-generator
   ```
2. Masuk ke folder project:
   ```bash
   cd qr-generator
   ```
3. Checkout ke branch dinamis:
   ```bash
   git checkout dinamis
   ```
4. Jalankan PHP built-in server:
   ```bash
   php -S localhost:8000
   ```
5. Buka browser dan akses `http://localhost:8000`
6. Isi form dengan teks yang diinginkan
7. Pilih jenis kode dan ukuran
8. Klik "Generate QR Code"
9. QR code akan muncul di halaman hasil
10. Scan dengan aplikasi QR scanner

