FROM php:7.3-apache

# Instalar dependências necessárias para o Xdebug
RUN apt-get update && apt-get install -y \
    git \
    gcc \
    g++ \
    make \
    autoconf \
    libc-dev \
    pkg-config \
    libmcrypt-dev \
    libreadline-dev \
    libssl-dev \
    libxml2-dev \
    zlib1g-dev \
    libzip-dev

# Instalar o Xdebug
RUN pecl install xdebug-2.9.8 && docker-php-ext-enable xdebug

# Instalar extensão zip
RUN apt-get update \
    && apt-get install -y zlib1g-dev \
    && docker-php-ext-install zip

# Instalar extensão unzip/7z
RUN apt-get install -y p7zip-full

# Configurar o Xdebug
RUN echo "xdebug.mode=debug" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.client_host=host.docker.internal" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.client_port=9000" >> /usr/local/etc/php/php.ini

# Habilitar o mod_rewrite do Apache
RUN a2enmod rewrite

# Reiniciar o serviço do Apache
RUN service apache2 restart

# Instala o Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer