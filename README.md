# QR Code Generator dengan PHP

Proyek ini menunjukkan cara membuat QR code di PHP menggunakan API eksternal tanpa perlu library tambahan.

## Cara Kerja

Menggunakan API dari `bwipjs-api.metafloor.com` untuk generate QR code secara online.

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
3. Jalankan PHP built-in server:
   ```bash
   php -S localhost:8000
   ```
4. Buka browser dan akses `http://localhost:8000`
5. QR code akan muncul di browser
6. Scan dengan aplikasi QR scanner

