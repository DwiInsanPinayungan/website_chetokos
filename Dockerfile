FROM richarvey/nginx-php-fpm:latest

# Copy semua file ke server
COPY . /var/www/html

# Setting folder utama ke 'public'
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Tahap Instalasi (Sudah Berhasil)
RUN composer install --no-dev --optimize-autoloader --ignore-platform-reqs

# PERBAIKAN: Menggunakan chmod agar semua sistem bisa akses
RUN chmod -R 777 /var/www/html/storage /var/www/html/bootstrap/cache
