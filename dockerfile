FROM php:7.4-apache
COPY src/ /var/www/html/
EXPOSE 80
RUN chown -R www-data:www-data /var/www/
RUN chmod o-wx /var/www/

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli


