FROM php:8.2-apache

# Extensiones del sistema necesarias para Composer y ZIP
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev \
  && docker-php-ext-install pdo pdo_mysql mysqli zip \
  && rm -rf /var/lib/apt/lists/*

# Habilitar mod_rewrite
RUN a2enmod rewrite

# Permitir .htaccess y acceso en /var/www/html
RUN printf "<Directory /var/www/html>\nOptions Indexes FollowSymLinks\nAllowOverride All\nRequire all granted\n</Directory>\n" \
  > /etc/apache2/conf-available/z-override.conf \
  && a2enconf z-override

# Instalar Composer (desde la imagen oficial)
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Opcional: evitar advertencias si ejecutas como root dentro del contenedor
ENV COMPOSER_ALLOW_SUPERUSER=1

# Opcional: subir el memory_limit para instalaciones grandes
RUN echo "memory_limit=512M" > /usr/local/etc/php/conf.d/memory-limit.ini

WORKDIR /var/www/html
EXPOSE 80