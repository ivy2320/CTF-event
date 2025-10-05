FROM php:8.2-apache

WORKDIR /var/www/html

COPY src/ /var/www/html/


COPY flag.txt /home/ctf/flag.txt

RUN mkdir -p /var/www/html/uploads \
    && chmod 777 /var/www/html/uploads


RUN a2enmod rewrite


EXPOSE 80


CMD ["apache2-foreground"]
