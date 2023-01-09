FROM debian:buster

RUN apt update 

#mariadb
RUN apt install -y mariadb-server 
RUN service mysql start

COPY script_maria.sh /

ARG DB_NAME DB_USER DB_PASS DB_ROOT_PASS

RUN chmod +x /script_maria.sh
RUN  ./script_maria.sh

CMD ["mysqld"]