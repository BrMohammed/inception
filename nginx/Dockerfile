FROM debian:buster

RUN apt update 

RUN apt install -y nginx

WORKDIR /var/www/html/wordpress/

COPY wp.conf  /etc/nginx/conf.d/

COPY default  /etc/nginx/sites-enabled/

COPY nginx.conf  /etc/nginx/

CMD ["nginx", "-g" ,"daemon off;"]

#tail -f /var/log/nginx/error.log tail -f /var/log/nginx/error.log 
