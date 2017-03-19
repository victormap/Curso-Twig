#!/bin/sh
cd /var/www/html/twig
git pull origin master
/etc/init.d/apache2 restart
