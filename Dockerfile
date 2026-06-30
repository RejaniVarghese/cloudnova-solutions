FROM php:8.2-apache

LABEL maintainer="Rejani Mary Varghese"
LABEL project="CloudNova Solutions"
LABEL version="1.0"

WORKDIR /var/www/html

COPY . /var/www/html/

EXPOSE 80
