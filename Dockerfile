FROM php:8.1-apache
# Cài đặt extension để PHP nói chuyện được với MySQL
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
# Copy code vào trong container
COPY . /var/www/html/