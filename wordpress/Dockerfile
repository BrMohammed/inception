# FROM debian:buster

# RUN apt update 

# WORKDIR /var/www/html/wordpress

# RUN  apt install -y php-cli php-fpm php-mysql php-json php-opcache php-mbstring php-xml php-gd php-curl
# RUN apt install wget vim -y
# RUN wget https://wordpress.org/latest.tar.gz
# RUN tar xvf latest.tar.gz

# # RUN RUN chmod +x+o+g *
# RUN mv wordpress/* ./
# RUN rmdir ./wordpress/
# RUN rm -f latest.tar.gz



# # RUN rm -fr wp-config-sample.php

# # COPY wp-config.php /wordpress


# COPY www.conf /etc/php/7.3/fpm/pool.d/

# RUN chown -R www-data *
# RUN mkdir -p /run/php/

# COPY script.sh .

# RUN chmod +x script.sh

# ENTRYPOINT [ "./script.sh" ]

# CMD ["php-fpm7.3" ,"-F", "-R"]




FROM debian:buster

RUN apt-get update 

RUN apt-get install -y php7.3-fpm curl php7.3-mysql

RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar

RUN chmod +x wp-cli.phar

RUN mv wp-cli.phar /usr/local/bin/wp

WORKDIR /var/www/html/wordpress/

RUN chmod 777 /var/www/html/wordpress/

RUN chown -R www-data:1000 /var/www/html/wordpress

RUN wp core download --allow-root

ARG DB_NAME DB_USER DB_PASS

RUN wp core config --dbname=$DB_NAME --dbuser=$DB_USER --dbpass=$DB_PASS --dbhost=$DB_NAME --path='/var/www/html/wordpress' --allow-root --skip-check

COPY script.sh .

RUN chmod +x script.sh

ENTRYPOINT [ "./script.sh" ]

CMD [ "php-fpm7.3", "-F", "-R" ]

