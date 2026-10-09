FROM php:8.2-apache

# Install MySQL PDO extension
RUN docker-php-ext-install pdo pdo_mysql

# Enable Apache rewrite module
RUN a2enmod rewrite

# Set Apache document root directory
WORKDIR /var/www/html

# Copy project code into container
COPY . /var/www/html/

# Update Apache configuration to bind to the dynamic $PORT provided by Render
RUN sed -i 's/Listen 80/Listen ${PORT}/g' /etc/apache2/ports.conf && \
    sed -i 's/<VirtualHost \*:80>/<VirtualHost \*:${PORT}>/g' /etc/apache2/sites-available/000-default.conf

# Give www-data ownership
RUN chown -R www-data:www-data /var/www/html

# Set default Render port fallback
ENV PORT=10000

EXPOSE 10000

CMD ["apache2-foreground"]
