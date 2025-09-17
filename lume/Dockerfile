FROM php:8.2-apache

# Installer les dépendances + GD + PDO
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libwebp-dev \
    libfreetype6-dev \
 && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
 && docker-php-ext-install pdo pdo_mysql gd \
 && rm -rf /var/lib/apt/lists/*

# Installer xdebug seulement s'il n'est pas déjà présent
RUN if ! php -m | grep -q xdebug; then \
      pecl install xdebug && docker-php-ext-enable xdebug; \
    fi

# Autoriser .htaccess dans /public
RUN sed -i '/<VirtualHost \*:80>/a \\t<Directory /var/www/html/public>\n\t\tAllowOverride All\n\t\tRequire all granted\n\t</Directory>' /etc/apache2/sites-available/000-default.conf

# Activer mod_rewrite
RUN a2enmod rewrite
