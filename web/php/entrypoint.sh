#!/bin/sh
# php:8.2-fpm uses sh (Alpine or Debian base) by default; fails if bash not installed

chown -R www-data:www-data storage
chmod -R 775 storage

php artisan cache:clear

php artisan migrate:fresh
php artisan db:seed
