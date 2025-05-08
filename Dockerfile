FROM php:8.2-apache

RUN docker-php-ext-install pdo pdo_mysql  \
        && docker-php-ext-enable xdebug

RUN a2enmod rewrite
