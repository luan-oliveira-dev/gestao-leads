FROM php:8.2-fpm

# Instala dependências do Laravel e o driver PDO MySQL
RUN apt-get update && apt-get install -y \
    git zip unzip curl libpng-dev libjpeg-dev libfreetype6-dev libonig-dev libxml2-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

WORKDIR /var/www/html
