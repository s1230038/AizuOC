#!/bin/sh
find ./ -name "*.php" | xargs -n1 php -l
# tail /var/log/php_errors.log
rm  -rf /var/www/html/wp-admin/oc/
mkdir /var/www/html/wp-admin/oc/
cp -r web/* /var/www/html/wp-admin/oc
chown -R apache:apache /var/www/html/wp-admin/oc
chmod -R 775 /var/www/html/wp-admin/oc
chmod 777 /var/www/html/wp-admin/oc/uploaded
ls -ld /var/www/html/wp-admin/oc 
ls -l /var/www/html/wp-admin/oc 
