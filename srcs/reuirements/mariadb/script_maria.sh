#!/bin/bash
service mysql start

# Creating a Database and User for WordPress
mysql -u root -e "CREATE DATABASE IF NOT EXISTS mariadb;"
mysql -u root -e "CREATE USER IF NOT EXISTS 'von'@'%' IDENTIFIED BY '0000'"
mysql -u root -e "GRANT ALL ON mariadb.* TO 'von'@'%';"
mysql -u root -e "FLUSH PRIVILEGES;"
mysql -u root  mariadb < filename.sql
mysql -u root -e "ALTER USER 'root'@'localhost' IDENTIFIED BY '0000';"
