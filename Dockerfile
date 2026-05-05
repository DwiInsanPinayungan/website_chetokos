FROM richarvey/nginx-php-fpm:latest

# ... (kode lainnya tetap sama) ...
COPY . /var/www/html
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Tambahkan baris ini agar Routing Laravel jalan:
ENV nginx_config_file /var/www/html/conf/nginx/nginx.conf

RUN composer install --no-dev --optimize-autoloader --ignore-platform-reqs
RUN mkdir -p /var/www/html/storage/framework/cache /var/www/html/storage/framework/sessions /var/www/html/storage/framework/views /var/www/html/storage/app /var/www/html/storage/logs
RUN chmod -R 777 /var/www/html/storage /var/www/html/bootstrap/cache
