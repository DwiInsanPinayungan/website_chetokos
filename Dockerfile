FROM richarvey/nginx-php-fpm:latest

# Copy semua file ke server
COPY . /var/www/html

# Setting folder utama ke 'public'
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# PERBAIKAN: Ditambahkan --ignore-platform-reqs di akhir baris ini
RUN composer install --no-dev --optimize-autoloader --ignore-platform-reqs

# Beri izin akses folder
RUN chown -R fpm:fpm /var/www/html/storage /var/www/html/bootstrap/cache
