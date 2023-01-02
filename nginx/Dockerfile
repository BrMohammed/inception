FROM debian:buster

RUN apt update 

RUN apt install -y nginx

#mariadb
RUN apt install -y mariadb-server 
RUN service mysql start
COPY script_maria.sh /
RUN chmod +x /script_maria.sh
RUN  /script_maria.sh


#wordpress
COPY script_wordpress.sh /
RUN chmod +x /script_wordpress.sh
RUN  apt install -y php-cli php-fpm php-mysql php-json php-opcache php-mbstring php-xml php-gd php-curl
RUN apt install wget vim -y
RUN wget https://wordpress.org/latest.tar.gz
RUN tar xvf latest.tar.gz
RUN  /script_wordpress.sh
COPY  wp-config.php /var/www/html/myblog
RUN chown -R www-data:www-data /var/www/html/myblog
COPY myblog.conf  /etc/nginx/conf.d
####/etc/nginx/sites-available/

COPY nginx.conf /etc/nginx/nginx.conf

RUN service php7.3-fpm start

CMD ["nginx", "-g" ,"daemon off;"]



