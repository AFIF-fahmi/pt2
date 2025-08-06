### Stage 1: Membangun aset frontend (Vite) dengan Node 24
FROM node:24 AS node-builder

WORKDIR /app
COPY . .

RUN npm install && npm run build


### Stage 2: Menyiapkan PHP & Laravel dengan PHP 8.3
FROM php:8.3-fpm

WORKDIR /var/www

RUN apt-get update && apt-get install -y \
    zip unzip curl git libxml2-dev libzip-dev libpng-dev libjpeg-dev libonig-dev \
    sqlite3 libsqlite3-dev

RUN docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd zip

# Salin Composer dari image composer:latest
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Salin kode Laravel
COPY --chown=www-data:www-data . /var/www

# Ambil hasil build frontend dari stage node-builder
COPY --from=node-builder /app/public/build /var/www/public/build

# Install dependency PHP
RUN composer install --no-dev --optimize-autoloader

# Setup environment
COPY .env.example .env
RUN php artisan key:generate

# (Opsional) buat file SQLite
RUN touch /var/www/database/database.sqlite

EXPOSE 8000
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
