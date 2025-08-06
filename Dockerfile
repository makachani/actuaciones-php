FROM php:8.2-apache

# Instala la extensión mysqli
RUN docker-php-ext-install mysqli

# Copia tu app al contenedor
COPY . /var/www/html/

# Cambia permisos
RUN chown -R www-data:www-data /var/www/html

# Habilita mod_rewrite de Apache
RUN a2enmod rewrite
