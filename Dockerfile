# Use an official PHP image from Docker Hub
FROM php:8.1-apache

# Copy all project files to the web directory of the Apache server
COPY . /var/www/html/

# Set permissions for the web server
RUN chown -R www-data:www-data /var/www/html/

# Expose port 80 for HTTP traffic
EXPOSE 80

RUN docker-php-ext-install pdo_mysql


