#!/bin/sh
echo "listen = 9000" >> /etc/php/7.3/fpm/pool.d/www.conf
service php7.3-fpm start
service php7.3-fpm stop
echo "Wordpress started on port :9000"
exec "$@"