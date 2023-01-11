FROM debian:buster

RUN apt update

RUN apt install nodejs npm -y

RUN  apt update

RUN npm install -g express-generator

RUN express static-site --view pug

WORKDIR /static-site

RUN npm init -y

RUN npm install

CMD ["npm","start"]

