FROM richarvey/nginx-php-fpm:latest

# Copy semua file ke server
COPY . /var/www/html

# Setting folder utama ke 'public'
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Instalasi Laravel
RUN composer install --no-dev --optimize-autoloader --ignore-platform-reqs

# PERBAIKAN FINAL: Membuat folder yang hilang secara paksa
RUN mkdir -p /var/www/html/storage/framework/cache /var/www/html/storage/framework/sessions /var/www/html/storage/framework/views /var/www/html/storage/app /var/www/html/storage/logs

# Beri izin akses
RUN chmod -R 777 /var/www/html/storage /var/www/html/bootstrap/cache
