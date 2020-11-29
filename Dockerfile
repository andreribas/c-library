FROM php:8.0-rc-cli

ADD https://raw.githubusercontent.com/vishnubob/wait-for-it/db049716e42767d39961e95dd9696103dca813f1/wait-for-it.sh /usr/bin/
RUN chmod a+x /usr/bin/wait-for-it.sh

RUN docker-php-ext-install pdo pdo_mysql
RUN apt-get update && apt-get install -y default-mysql-client && apt-get clean

COPY db/create-db.sql /root
COPY docker-entrypoint.sh /root
RUN chmod a+x /root/docker-entrypoint.sh
ENTRYPOINT ["/root/docker-entrypoint.sh"]
