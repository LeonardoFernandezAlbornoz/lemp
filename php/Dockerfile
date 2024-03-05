FROM debian:12

RUN apt-get update && apt-get install -y php8.2-fpm


EXPOSE 9000

ENTRYPOINT [ "php-fpm8.2" ,"-F"]
