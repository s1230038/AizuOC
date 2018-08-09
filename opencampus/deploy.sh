#!/bin/sh
rm  -f /var/www/html/wp-admin/oc/*
cp -r web/* /var/www/html/wp-admin/oc
chown -R apache:apache /var/www/html/wp-admin/oc


