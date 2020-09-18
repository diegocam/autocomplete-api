FROM php:fpm

RUN apt-get update && apt-get install -y \
		libfreetype6-dev \
		libjpeg62-turbo-dev \
		libpng-dev

RUN docker-php-ext-install bcmath
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install opcache

# Install Git for some composer packages requirements
RUN apt-get -y install git

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
