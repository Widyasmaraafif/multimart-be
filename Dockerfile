# Gunakan image PHP + Apache
FROM php:8.1-fpm

# Install dependensi sistem
RUN apt-get update && apt-get install -y \
    zip unzip git curl libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set workdir
WORKDIR /var/www/html

# Copy project
COPY . .

# Install dependensi Laravel
RUN composer install --no-dev --optimize-autoloader

# Set permission
RUN chmod -R 775 storage bootstrap/cache

# Expose port 8000
EXPOSE 8000

# Jalankan Laravel
CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=8000
