FROM php:8.0-apache

RUN a2enmod rewrite

COPY docker/apache.conf /etc/apache2/sites-enabled/000-default.conf
COPY . /var/www

WORKDIR /var/www/html

CMD ["apache2-foreground"]


