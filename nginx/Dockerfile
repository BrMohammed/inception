FROM debian:buster

RUN apt update 

RUN apt install -y nginx

WORKDIR /var/www/html/wordpress/

COPY default /etc/nginx/sites-enabled/

COPY wordpress.conf  /etc/nginx/conf.d/

COPY nginx.conf /etc/nginx/nginx.conf

CMD ["nginx", "-g" ,"daemon off;"]
