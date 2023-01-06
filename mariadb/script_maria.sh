#!/bin/bash

service mysql start
mysql -u root
mysql -e "CREATE DATABASE wp_db" 
mysql -e "CREATE USER 'wpuser'@'localhost' identified by 'StrongPassword'"
mysql -e "GRANT ALL PRIVILEGES ON wp_db.* TO 'wpuser'@'localhost'"
mysql -e "FLUSH PRIVILEGES"
mysql -e "QUIT"

#mysql -u wpuser -p show db
