FROM php:7.4.14-apache
MAINTAINER julius.sveikauskas@gmail.com
RUN dpkg-reconfigure --frontend noninteractive tzdata


RUN apt-get update \
    && DEBIAN_FRONTEND=noninteractive apt-get install -y --no-install-recommends \
    wget nano mariadb-client libmcrypt-dev zlib1g-dev libzip-dev libaio-dev libxml2-dev libaio1 libfreetype6-dev libjpeg62-turbo-dev libpng-dev netcat net-tools telnet lsof iproute2 iputils-ping \
    && docker-php-ext-configure pdo_mysql --with-pdo-mysql=mysqlnd \
    && docker-php-ext-configure mysqli --with-mysqli=mysqlnd \
    && docker-php-ext-configure gd \
    && docker-php-ext-install -j$(nproc) mysqli pdo_mysql soap zip pcntl gd \
    && apt-get autoremove -y && apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /root/*

RUN curl --silent --show-error https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN a2enmod ssl
RUN a2enmod rewrite

RUN rm /etc/apache2/sites-enabled/000-default.conf

COPY php/opcache.ini /usr/local/etc/php/conf.d/docker-php-ext-opcache.ini
ADD httpd/bookshop.conf /etc/apache2/sites-available/

COPY certs/localhost.crt /etc/apache2/cert/localhost.crt
COPY certs/localhost.key /etc/apache2/cert/localhost.key

RUN a2ensite bookshop

RUN pecl install xdebug
COPY php/xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

RUN pecl install mcrypt-1.0.4
RUN docker-php-ext-enable mcrypt
