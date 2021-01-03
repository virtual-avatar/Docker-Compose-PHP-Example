FROM php:8.0-fpm-alpine

RUN apk update

RUN apk add \
    unzip \
    git \
    openssl \
    libxml2-dev \
    postgresql-dev \
    $PHPIZE_DEPS

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN docker-php-ext-install \
    bcmath \
    xml \
    pdo_pgsql

RUN pecl install -o -f xdebug redis \
    && rm -rf /tmp/pear \
    && docker-php-ext-enable xdebug redis

WORKDIR /app
