FROM php:7.4-apache
# Instalar el cliente de MySQL
RUN apt-get update && apt-get install -y \
    default-mysql-client
    
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copiar el archivo formulario.html al directorio del servidor web
COPY formulario.html conecion.php Registrar.php style.css tabla.php validar.js /var/www/html/

