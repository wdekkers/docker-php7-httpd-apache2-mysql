FROM php:7.0.16-apache

RUN apt-get update && \
    apt-get install -y \
        zlib1g-dev

RUN apt-get install -y \
        libxml2-dev

RUN /usr/local/bin/docker-php-ext-install mysqli pdo pdo_mysql zip xmlwriter
RUN apt-get install libssl-dev -y



RUN /usr/local/bin/docker-php-ext-install zip


# Install mcrypt
RUN apt-get install -y libmcrypt-dev
RUN docker-php-ext-install mcrypt

# Install GD
RUN apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng12-dev
RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/
RUN docker-php-ext-install gd

# Install XSL
RUN apt-get install -y libxslt-dev
RUN docker-php-ext-install xsl

# Install intl
RUN apt-get install -y libicu-dev
RUN pecl install intl
RUN docker-php-ext-install intl

RUN a2enmod rewrite
RUN usermod -u 1000 www-data
RUN usermod -G staff www-data