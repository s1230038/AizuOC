#!/bin/sh
# DIR=/var/www/html/oc/
DIR=/var/www/html/wp-admin/oc/
find ./ -name "*.php" | xargs -n1 php -l
# tail /var/log/php_errors.log
rm  -rf $DIR
mkdir $DIR
cp -r web/* $DIR
chown -R apache:apache $DIR
chmod -R 775 $DIR 
ls -ld  $DIR 
ls -l $DIR 
