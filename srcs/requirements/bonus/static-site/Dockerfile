FROM debian:buster

RUN apt update

RUN apt install nodejs npm -y

RUN  apt update

WORKDIR /static-site

COPY ./tool .

RUN npm init -y

RUN npm install

CMD ["npm","start"]
