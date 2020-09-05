FROM php:7.4-alpine

RUN mkdir /srv/api

COPY . /srv/api

CMD php -S 0.0.0.0:80 public/index.php
