FROM php:8.2-fpm

COPY php.ini /usr/local/etc/php/

RUN apt update && apt upgrade -y \
  && apt install -y default-mysql-client zlib1g-dev libzip-dev unzip git curl \
  && docker-php-ext-install pdo_mysql zip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www