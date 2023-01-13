FROM debian:buster

RUN apt update 

RUN apt install -y nginx

WORKDIR /var/www/html/wordpress/

RUN chmod 755 /var/www/html/wordpress/

COPY ./tool/default  /etc/nginx/sites-available/

RUN mkdir -p /etc/nginx/certificates

COPY ./conf/* /etc/nginx/certificates


CMD ["nginx", "-g" ,"daemon off;"]
