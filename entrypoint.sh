#!/bin/sh

# Tunggu MySQL sampai siap
echo "Menunggu MySQL..."
sleep 10

# Jalankan migrasi database hanya jika database sudah tersedia
php artisan migrate --force

# Jalankan Laravel
php artisan serve --host=0.0.0.0 --port=8000
