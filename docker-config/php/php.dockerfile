FROM php:7.4-fpm

COPY . /var/www

WORKDIR /var/www

RUN apt-get update && \
    apt-get install -y \
    git \
    zip \
    curl

RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install mysqli

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Salin file php.ini kustom
COPY ./docker-config/php/php.ini /usr/local/etc/php/conf.d/

EXPOSE 9000
CMD ["php-fpm"]