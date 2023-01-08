FROM debian:buster

RUN apt update 

WORKDIR /var/www/html/wordpress/

RUN  apt install -y php-cli php-fpm php-mysql php-json php-opcache php-mbstring php-xml php-gd php-curl
RUN apt install wget vim -y
RUN wget https://wordpress.org/latest.tar.gz
RUN tar xvf latest.tar.gz

RUN mv wordpress/* ./
RUN rmdir ./wordpress/
RUN rm -f latest.tar.gz

RUN chmod 777 /var/www/html/wordpress/

RUN chown -R www-data:1000 /var/www/html/wordpress

COPY wp-config.php .

RUN rm -fr wp-config-sample.php

RUN mkdir -p /run/php/

COPY script.sh .

RUN chmod +x script.sh

ENTRYPOINT [ "./script.sh" ]

CMD ["php-fpm7.3" ,"-F", "-R"]
