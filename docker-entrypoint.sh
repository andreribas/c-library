#!/usr/bin/env bash

set -e

wait-for-it.sh db:3306 -t 600
echo "MySQL connection established"
mysql -h db -u root -pminhasenhapika -e "CREATE DATABASE IF NOT EXISTS clibrary"
mysql -h db -u root -pminhasenhapika -e "CREATE DATABASE IF NOT EXISTS clibrary_test"
mysql -h db -u root -pminhasenhapika -e "source /root/create-db.sql" clibrary
mysql -h db -u root -pminhasenhapika -e "source /root/create-db.sql" clibrary_test

php -S 0.0.0.0:8000 -t /var/www/public
