#!/bin/sh
find ./ -name "*.php" | xargs -n1 php -l
# /var/log/php_errors.log
rm  -f /var/www/html/wp-admin/oc/*
cp -r web/* /var/www/html/wp-admin/oc
chown -R apache:apache /var/www/html/wp-admin/oc
chmod 644 /var/www/html/wp-admin/oc/*
ls -l /var/www/html/wp-admin/oc 
