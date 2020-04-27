FROM php:5.4.45-apache

RUN docker-php-ext-install mysql
RUN docker-php-ext-enable mysql