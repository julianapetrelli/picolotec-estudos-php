FROM php:8.1.0RC3-fpm-buster
WORKDIR "/app"

# Fix debconf warnings upon build
ARG DEBIAN_FRONTEND=noninteractive

# Install modules
RUN buildDeps="libmcrypt-dev libjpeg62-turbo-dev libgd3 libgd-dev libpq-dev libzip-dev libicu-dev libpng-dev libjpeg-dev libfreetype6-dev libmagickwand-dev libxslt-dev" && \
    apt-get update && \
    apt-get install -y $buildDeps --no-install-recommends && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/* && \
    docker-php-ext-install \
    opcache \
    pdo \
    pdo_mysql \
    mysqli \
    sockets \
    xsl \
    sysvsem \
    bcmath \
    intl

# Install GD php module with freetype
RUN docker-php-ext-configure gd --with-freetype --with-jpeg && docker-php-ext-install gd

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer