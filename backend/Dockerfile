# Usar una imagen base de PHP
FROM php:8.2-apache

# Instalar dependencias necesarias para PHP (si es necesario)
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd

# Habilitar mod_rewrite para Apache
RUN a2enmod rewrite

# Configurar la carpeta de trabajo en el contenedor
WORKDIR /var/www/html

# Copiar archivos PHP al contenedor
COPY ./backend /var/www/html/

# Exponer el puerto 80 para PHP
EXPOSE 80
