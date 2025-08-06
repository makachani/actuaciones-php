# Usa PHP con Apache ya configurado
FROM php:8.2-apache

# Copia todos los archivos a la carpeta web del servidor
COPY . /var/www/html/

# Da permisos correctos (opcional)
RUN chown -R www-data:www-data /var/www/html

# Expone el puerto 80
EXPOSE 80
