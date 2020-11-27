FROM php:8.0-rc-cli

RUN docker-php-ext-install pdo pdo_mysql
