FROM debian:buster

RUN apt update 

RUN apt install -y nginx

COPY default /etc/nginx/sites-enabled/

COPY myblog.conf  /etc/nginx/conf.d/

COPY nginx.conf /etc/nginx/nginx.conf

CMD ["nginx", "-g" ,"daemon off;"]



