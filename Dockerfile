FROM richarvey/nginx-php-fpm:latest

COPY . /var/www/html

# Aktifkan Mode Laravel Otomatis
ENV LARAVEL 1
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

RUN composer install --no-dev --optimize-autoloader --ignore-platform-reqs
RUN mkdir -p /var/www/html/storage/framework/cache /var/www/html/storage/framework/sessions /var/www/html/storage/framework/views /var/www/html/storage/app /var/www/html/storage/logs
RUN chmod -R 777 /var/www/html/storage /var/www/html/bootstrap/cache
