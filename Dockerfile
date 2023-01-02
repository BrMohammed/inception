FROM debian:buster

RUN apt-get update 

RUN apt-get install -y nginx

RUN  ssl_protocols TLSv1.3

CMD ["nginx", "-g" ,"daemon off;"]