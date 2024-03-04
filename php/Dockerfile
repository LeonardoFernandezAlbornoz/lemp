FROM debian:12

RUN apt-get update && apt-get install -y apache2  libapache2-mod-php8.2  

RUN apt install -y php8.2-mysql php-xml php-gd  php-json php-curl php-mbstring php-zip php8.2-intl php8.2-fpm

EXPOSE 80
EXPOSE 443

WORKDIR /app

CMD tail -f /dev/null


