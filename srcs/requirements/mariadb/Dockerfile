FROM debian:buster

RUN apt update 

RUN apt install -y mariadb-server 

ARG DB_NAME DB_USER DB_PASS DB_ROOT_PASS

COPY ./tool/script_maria.sh /

COPY ./tool/filename.sql /

COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

RUN chmod +x /script_maria.sh
RUN  ./script_maria.sh

CMD ["mysqld"]