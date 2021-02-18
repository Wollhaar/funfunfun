FROM debian:latest
FROM php:7.2-apache


RUN apt-get update && \
    apt-get install -y --no-install-recommends \
        locales \
        wget \
        nano \
        curl \
        php-cli \
        php-mbstring
        unzip \
        tar && \

    rm -rf /var/lib/apt/lists/* && \

    localedef -i en_US -c -f UTF-8 -A /usr/share/locale/locale.alias en_US.UTF-8

ENV LANG en_US.utf8

RUN cd ~ && curl -sS https://getcomposer.org/installer -o composer-setup.php
#    composer require symfony/asset && \
#    composer require symfony/http-client && \
#    composer require symfony/twig