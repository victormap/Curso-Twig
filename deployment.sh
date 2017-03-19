#!/bin/sh
cd /var/www/html/twig
git pull origin master
sudo systemctl daemon-reload
