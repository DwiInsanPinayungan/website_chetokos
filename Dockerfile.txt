FROM richarvey/nginx-php-fpm:latest

# Copy semua file ke server
COPY . /var/www/html

# Setting folder utama ke 'public' (khas Laravel)
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Install dependencies
RUN composer install --no-dev --optimize-autoloader

# Beri izin akses folder
RUN chown -R fpm:fpm /var/www/html/storage /var/www/html/bootstrap/cache
