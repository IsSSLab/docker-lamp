FROM php:8-fpm as php

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y libicu-dev \
    && docker-php-ext-install pdo pdo_mysql mysqli opcache \
    && docker-php-ext-enable  pdo pdo_mysql mysqli opcache

RUN mkdir /var/session
RUN chown -R www-data /var/session