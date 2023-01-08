FROM debian:buster

RUN apt update 

WORKDIR /var/www/html/wordpress

RUN  apt install -y php-cli php-fpm php-mysql php-json php-opcache php-mbstring php-xml php-gd php-curl
RUN apt install wget vim -y
RUN wget https://wordpress.org/latest.tar.gz
RUN tar xvf latest.tar.gz
RUN rm -f latest.tar.gz

RUN mv wordpress/* .
RUN rm -fr wordpress

RUN rm -fr wp-config-sample.php

COPY wp-config.php .

RUN mkdir -p /run/php/

COPY www.conf /etc/php/7.3/fpm/pool.d/

RUN chown -R www-data:www-data /var/www/html/wordpress

CMD ["php-fpm7.3" ,"-F", "-R"]
