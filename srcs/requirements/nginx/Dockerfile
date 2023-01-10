FROM debian:buster

RUN apt update 

RUN apt install -y nginx

WORKDIR /var/www/html/wordpress/

RUN chmod 755 /var/www/html/wordpress/

COPY default  /etc/nginx/sites-available/

RUN mkdir -p /etc/nginx/certificates

COPY ./certificate/* /etc/nginx/certificates

CMD ["nginx", "-g" ,"daemon off;"]

#tail -f /var/log/nginx/error.log tail -f /var/log/nginx/error.log 
