#!/bin/sh
find ./ -name "*.php" | xargs -n1 php -l
# /var/log/php_errors.log
rm  -rf /var/www/html/wp-admin/oc/*
cp -r web/* /var/www/html/wp-admin/oc
chown -R apache:apache /var/www/html/wp-admin/oc
chmod 644 /var/www/html/wp-admin/oc/*
chmod 744 /var/www/html/wp-admin/oc/uploaded
ls -l /var/www/html/wp-admin/oc 
