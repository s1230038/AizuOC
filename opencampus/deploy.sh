#!/bin/sh
find ./ -name "*.php" | xargs -n1 php -l
# tail /var/log/php_errors.log
rm  -rf /var/www/html/oc/
mkdir /var/www/html/oc/
cp -r web/* /var/www/html/oc
chown -R apache:apache /var/www/html/oc
chmod -R 775 /var/www/html/oc
ls -ld /var/www/html/oc 
ls -l /var/www/html/oc 
