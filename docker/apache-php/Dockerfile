FROM php:8.2-apache

# Instala extensões PHP comuns e utilitários
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    zip \
    unzip \
    nano \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql gd zip

# Ativa o módulo de reescrita do Apache
RUN a2enmod rewrite

# Copia a configuração do VirtualHost
COPY vhost.conf /etc/apache2/sites-available/000-default.conf

# Define diretório de trabalho
WORKDIR /var/www/html

# Permissão (opcional, pode ajustar)
RUN chown -R www-data:www-data /var/www/html
