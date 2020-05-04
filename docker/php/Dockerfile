FROM php:7.3-apache

RUN apt-get update && \
		php -i && \
		docker-php-ext-install pdo_mysql mysqli
