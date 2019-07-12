#
# Dockerfile for opencart
#

FROM php:7.2-apache
MAINTAINER kev <noreply@easypi.pro>

RUN a2enmod rewrite

RUN set -xe \
    && apt-get update \
    && apt-get install -y libpng-dev libjpeg-dev libmcrypt-dev \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-configure gd --with-png-dir=/usr --with-jpeg-dir=/usr \
    && docker-php-ext-install gd mbstring mysqli zip \
    && pecl install mcrypt-1.0.1 \
    && docker-php-ext-enable mcrypt

WORKDIR /var/www/html
COPY upload ./

RUN set -xe \
    && mv config-dist.php config.php \
    && mv admin/config-dist.php admin/config.php \
    && chown -R www-data:www-data /var/www