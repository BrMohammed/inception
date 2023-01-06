FROM debian:buster

RUN apt update 

#mariadb
RUN apt install -y mariadb-server 
RUN service mysql start
COPY script_maria.sh /
RUN chmod +x /script_maria.sh
RUN  /script_maria.sh

EXPOSE 3306

#RUN service mysql start

CMD ["mysqld"]