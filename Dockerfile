FROM php:7.3-apache

MAINTAINER Nguyen Tuan Giang "https://github.com/ntuangiang"

# Install PHP package
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev vim git \
    && docker-php-ext-install -j$(nproc) iconv \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd

RUN pecl install redis-4.0.1 \
    && pecl install xdebug-2.7.0 \
    && docker-php-ext-enable redis xdebug

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer global require ntuangiang/php-ioc

RUN a2enmod rewrite

WORKDIR /var/www/html/
