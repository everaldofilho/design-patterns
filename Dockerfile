## Manual da docker
## https://github.com/phpearth/docker-php
FROM phpearth/php:7.3-nginx
ENV PHP_VERSION=7.3
# Habilita a entrada via bash
RUN apk add --update bash && rm -rf /var/cache/apk/*
# Instala o compose
RUN apk add --no-cache composer

# Manual de instalação de extensões
# https://docs.php.earth/docker/php-extensions/
RUN apk add --no-cache \
    php${PHP_VERSION}-xsl \
    php${PHP_VERSION}-mongodb \
    php${PHP_VERSION}-pdo \
    php${PHP_VERSION}-pdo_pgsql \
    php${PHP_VERSION}-pdo_mysql

# Configuração do Nginx site
ADD ./config/site.conf /etc/nginx/conf.d/default.conf
# Configurações do Xdebug
ADD ./config/xdebug.ini /etc/php/${PHP_VERSION}/conf.d/xdebug.ini

WORKDIR /var/www/html

# Instalação do Xdebug
ARG INSTALL_XDEBUG=false
RUN if [ ${INSTALL_XDEBUG} = true ]; then \
    apk add --no-cache php${PHP_VERSION}-xdebug \
;fi

EXPOSE 80 443 9000