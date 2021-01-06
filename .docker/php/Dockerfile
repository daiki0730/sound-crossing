FROM php:7.4-fpm-alpine

RUN apk --update --no-cache add \
  curl \
  libzip-dev \
  libpng-dev \
  jpeg-dev \
  autoconf \
  gcc \
  g++ \
  make \
  python3 \
  git \
  bash \
  icu-dev \
  oniguruma-dev \
  nodejs \
  nodejs-npm \
  patch && \
  rm -rf /var/cache/apk/* && \
  git clone https://github.com/phpredis/phpredis.git /usr/src/php/ext/redis && \
  # Install XDebug
  pecl install xdebug && \
  docker-php-ext-enable xdebug && \
  docker-php-ext-configure gd --with-jpeg  && \
  # Install PHP Extension
  docker-php-ext-install \
  pdo_mysql \
  bcmath \
  mbstring \
  zip \
  opcache \
  intl \
  redis \
  exif && \
  docker-php-ext-install -j$(nproc) gd


COPY ./php.ini /usr/local/etc/php/php.ini
COPY --from=composer:1.10.15 /usr/bin/composer /usr/bin/composer

WORKDIR /app1
