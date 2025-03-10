# Gunakan image PHP dengan FPM dan Composer
FROM php:8.2-fpm

# Set workdir di dalam container
WORKDIR /var/www

# Install ekstensi PHP yang dibutuhkan
RUN apt-get update && apt-get install -y \
    libpq-dev zip unzip git \
    && docker-php-ext-install pdo pdo_mysql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy semua file Laravel ke dalam container
COPY . .

# Install dependency Laravel
RUN composer install --no-dev --optimize-autoloader --no-scripts

# Beri izin storage dan bootstrap agar Laravel bisa menulis file
RUN chmod -R 777 storage bootstrap/cache

# Jalankan Laravel menggunakan artisan serve
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]

# Expose port 8000 untuk akses Laravel
EXPOSE 8000
