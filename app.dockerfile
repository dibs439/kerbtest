FROM php:7.2.4-fpm

RUN apt-get update && apt-get install -y libmcrypt-dev \
    libmagickwand-dev --no-install-recommends \
    && docker-php-ext-install postgresql libpq5 \
	postgresql-9.5 postgresql-client-9.5 postgresql-client-common postgresql-contrib
