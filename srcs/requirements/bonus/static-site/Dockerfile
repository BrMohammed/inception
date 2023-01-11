FROM debian:buster

RUN apt update

RUN apt install nodejs npm -y

RUN apt install curl -y

RUN curl -sL https://deb.nodesource.com/setup_18.x

RUN  apt update


RUN apt install nodejs


RUN curl https://raw.githubusercontent.com/creationix/nvm/master/install.sh | bash
# RUN npm install -g express-generator

# RUN express myExpressApp --view pug

# RUN cd myExpressApp

RUN npm init -y

RUN npm install -g express-generator

RUN express myExpressApp --view pug

RUN cd myExpressApp

RUN npm install

EXPOSE 3000

RUN npm start


CMD ["npm","start"]

