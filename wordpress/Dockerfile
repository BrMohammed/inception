FROM debian:buster

RUN apt update 

WORKDIR /var/www/html/wordpress/

RUN  apt install -y php-cli php-fpm php-mysql php-json php-opcache php-mbstring php-xml php-gd php-curl
RUN apt install wget vim -y
RUN wget https://wordpress.org/latest.tar.gz
RUN tar xvf latest.tar.gz

RUN mkdir -p /run/php/

#RUN cp wp-config-sample.php wp-config.php

CMD ["php-fpm7.3" ,"-F", "-R"]

