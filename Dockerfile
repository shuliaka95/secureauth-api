FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    libpq-dev \
    zip \
    unaip

RUN docker-php-ext-install pdo pdo_pgsql
WORKDIR /var/www