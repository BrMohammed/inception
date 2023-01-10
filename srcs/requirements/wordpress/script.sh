#!/bin/sh
echo "listen = 9000" >> /etc/php/7.3/fpm/pool.d/www.conf

# if ! wp plugin is-installed redis-cache --allow-root; then
    wp plugin install redis-cache --allow-root
# fi

# if ! wp plugin is-active redis-cache --allow-root; then
    wp plugin activate redis-cache --allow-root
# fi

wp config set WP_REDIS_HOST redis --type=constant --allow-root
wp config set WP_REDIS_PORT 6379 --type=constant --allow-root

wp redis enable --allow-root

service php7.3-fpm start
service php7.3-fpm stop
exec "$@"