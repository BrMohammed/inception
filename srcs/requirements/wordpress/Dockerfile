FROM debian:buster

RUN apt update 

WORKDIR /var/www/html/wordpress/

RUN  apt install -y php-cli php-fpm php-mysql php-json php-opcache php-mbstring php-xml php-gd php-curl
RUN apt install wget vim -y
RUN wget https://wordpress.org/latest.tar.gz
RUN tar xvf latest.tar.gz

#redis
RUN wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN chmod +x wp-cli.phar
RUN mv wp-cli.phar /usr/local/bin/wp
#
RUN mv wordpress/* ./
RUN rmdir ./wordpress/
RUN rm -f latest.tar.gz

RUN chmod 777 /var/www/html/wordpress/
RUN chmod 777 /var/www/html/

RUN rm -fr wp-config-sample.php

COPY ./conf/wp-config.php .

COPY ./tool/script.sh .

RUN mkdir -p /run/php/

RUN chmod +x script.sh

RUN chown -R www-data:1000 /var/www/html/wordpress

ENTRYPOINT [ "./script.sh" ]

CMD ["php-fpm7.3" ,"-F", "-R"]
