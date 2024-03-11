FROM debian:12

RUN apt-get update && apt-get install -y php8.2-fpm php-zip php8.2-mysql php8.2-xml php8.2-gd php-json php8.2-curl php8.2-mbstring php-intl

RUN sed -e 's/max_execution_time = 30/max_execution_time = 100/' -i /etc/php/8.2/fpm/php.ini

EXPOSE 9000

ENTRYPOINT [ "php-fpm8.2" ,"-F"]
